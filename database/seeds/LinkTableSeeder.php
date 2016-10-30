<?php

use Illuminate\Database\Seeder;
use App\Models\Link;

class LinkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Link::create([
           'link' => 'http://www.gpsies.com/map.do?fileId=ygsgimkhimipdeeg',
        ]);

        Link::create([
            'link' => 'http://www.gpsies.com/map.do?fileId=noentbhklipfplvf',
        ]);

        Link::create([
            'link' => 'http://www.gpsies.com/map.do?fileId=viumhhmjawfivqjd',
        ]);

        Link::create([
            'link' => 'http://www.gpsies.com/map.do?fileId=nslwvkbdoyckmyvk',
        ]);

        Link::create([
            'label' => 'Преображенка',
            'link' => 'http://www.gpsies.com/map.do?fileId=dhtmjonqbfxyrhqp',
        ]);

        Link::create([
            'label' => 'Сузун',
            'link' => 'http://www.gpsies.com/map.do?fileId=tspmmdlprmbcoedq',
        ]);

        Link::create([
            'label' => 'Маслянино',
            'link' => 'http://www.gpsies.com/map.do?fileId=ckzmvmqnoglefytl',
        ]);

        Link::create([
            'label' => 'Алтай-Кузбасс',
            'link' => 'http://www.gpsies.com/map.do?fileId=voljrsmkuizpoivo',
        ]);

        Link::create([
            'label' => 'Тальменка-Грамотеино-Топки-Томск',
            'link' => 'http://www.gpsies.com/map.do?fileId=dogotwekgpdesfon',
        ]);
    }
}
