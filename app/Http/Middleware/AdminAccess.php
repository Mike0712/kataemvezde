<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

//доступ в админку
class AdminAccess
{

    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        if(!$user)
        {
            return redirect()->route('admin.login');
        }
        
        if($user->admins()->count() <=0) {
            flash()->error('Пожалуйста, выполните вход под учетной записью администратора');
            return redirect()->route('admin.login');
        }
        
        $admin = $user->currentAdmin();
        if(!$admin)
        {
            flash()->error('Пожалуйста, выполните вход под учетной записью администратора');
            return redirect()->route('admin.login');
        }
        
        $route = \Route::getCurrentRoute()->getName();
        $menu = admin_permission();
        
        //ищем раздел с таким маршрутом, как у нас сейчас
        foreach($menu as $item)
        {
            if((isset($item['route'])) && ($item['route'] == $route))
            {
                //если находим - проверяем, есть ли у нее ограничение на права доступа и имеет ли админ право дсотупа к ней
                if(!isset($item['permission']) || ($admin->permission($item['permission'])))
                {
                    return $next($request);
                }
                else
                {
                    $def_page = $admin->role->def_page; 
                    //если человек пытается просто в админку попасть и у него нет доступа к консоли кидаем на дефолтную страницу
                    if ( ($route == 'admin') && ($route != $def_page) && $def_page)
                    {
                        return redirect()->route($def_page);
                    }
                    else
                    {
                        abort(403);
                    }
                }
            }
        }

        return $next($request);
    }
}
