<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersCodesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users_codes')->delete();
        
        \DB::table('users_codes')->insert(array (
            0 => 
            array (
                'id' => 2,
                'email' => 'skhromykh@gmail.com',
                'code' => 88945,
                'isActivated' => 0,
                'created_at' => '2016-09-07 11:07:19',
                'updated_at' => '2016-09-07 11:07:19',
            ),
        ));
        
        
    }
}
