<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;


class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events =[
            [
            'event'=> 'Ejemplo #1',
            'start_date'=> '2024-08-17 09:00',
            'end_date'=> '2024-08-20 10:00',
            ],
            [
            'event'=> 'Ejemplo #2',
            'start_date'=> '2024-08-10 09:00',
            'end_date'=> '2024-08-12 10:00',
            ],
            [
            'event'=> 'Ejemplo #3',
            'start_date'=> '2024-08-03 09:00',
            'end_date'=> '2024-08-06 08:00',
            ],  
            ];
        
            foreach($events as $event){
                Event::create($event);
            }
    
    }
}
