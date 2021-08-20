<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GeneralInformationTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('general_information')->delete();
        
        \DB::table('general_information')->insert(array (
            0 => 
            array (
                'site_name' => 'AtmaxTech',
                'phone' => '754-207-4606',
                'email' => 'support@atmax.com',
                'address' => 'Florida, USA',
            ),
        ));
        
        
    }
}