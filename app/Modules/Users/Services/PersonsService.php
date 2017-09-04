<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 13.08.2017
 * Time: 16:39
 */

namespace App\Modules\Users\Services;


class PersonsService
{
    public function createOrUpdatePerson($params, $user)
    {
        foreach ($params as $key => $param){
            if($param){
                if($user->person){
                    $user->person->$key = $param;
                    $user->person->save();
                }else{
                    $person = new Person([$key => $param]);
                    $user->person()->save($person);
                }
            }
        }
    }
}