<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('page')->delete();
        
        \DB::table('page')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'about',
                'main_heading' => NULL,
                'sub_heading' => NULL,
                'content' => 'We’re a human-centered digital platform and software engineering company. We’re based in Silicon Valley with design and build centers around the globe. We empower companies in the travel, retail, insurance, and tech verticals to use the cloud, AI, and emerging technologies to create extensible platforms that leverage data and delight users.',
            ),
        ));
        
        
    }
}