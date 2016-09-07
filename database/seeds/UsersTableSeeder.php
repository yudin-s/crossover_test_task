<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 11,
                'name' => 'Alfred',
                'email' => 'enfros2000@gmail.com',
                'password' => '$2y$10$RSy.9CJCxq9bpfsrEPF2bOO9J2hiSSUq3X.wduir9cFb3bayxxA/.',
                'remember_token' => 'uUnGAjsJl3CKPWaO06a7qiNvUNl9jNBSqWvvR6cdbwvpOeAYGr2oPR73tcJZ',
                'created_at' => '2016-09-07 07:39:00',
                'updated_at' => '2016-09-07 11:17:20',
                'isConfirmed' => 0,
                'confCode' => 0,
                'avatar' => '1170',
            ),
            1 => 
            array (
                'id' => 12,
                'name' => 'Serge',
                'email' => 'serge.bbstudio@gmail.com',
                'password' => '$2y$10$SRN5cwi85TwM7imQx7gd0u/A4ToAYkJeGqDnUmePsUuu4fB0CMCvW',
                'remember_token' => 'Aj1IfIBlb91yL7bYdlHiGiRuuzWj1ejtkZejB9tniJ9Q3DCDU1EBuPqWwpTJ',
                'created_at' => '2016-09-07 10:00:56',
                'updated_at' => '2016-09-07 10:38:09',
                'isConfirmed' => 0,
                'confCode' => 0,
                'avatar' => 'none',
            ),
            2 => 
            array (
                'id' => 13,
                'name' => 'Galager',
                'email' => 'webmaster@blackbox-studio.ru',
                'password' => '$2y$10$dk4XYjcwN4834Ztit85bm..EZWRsLW4TR/ELEXzsNED9SSxmWt1oC',
                'remember_token' => NULL,
                'created_at' => '2016-09-07 11:18:39',
                'updated_at' => '2016-09-07 11:18:39',
                'isConfirmed' => 0,
                'confCode' => 0,
                'avatar' => 'none',
            ),
        ));
        
        
    }
}
