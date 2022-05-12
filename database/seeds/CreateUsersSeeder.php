<?php

  

use Illuminate\Database\Seeder;

use App\User;

   

class CreateUsersSeeder extends Seeder

{

    /**

     * Run the database seeds.

     *

     * @return void

     */

    public function run()

    {

        $user = [

            [
               
                'fname'=>'Kagoyire',
                'lname'=>'Rebecca',
                'phone'=>'0788888888',
                'email'=>'rebecca@gmail.com',
                'rights'=>'1',
                'password'=> bcrypt('123456'),

            ],

            [

                'fname'=>'Kayitesi',
                'lname'=>'Mutesi',
                'phone'=>'0799999999',
                'email'=>'mutesi@gmail.com',
                'rights'=>'0',
                'password'=> bcrypt('7891011'),

            ],

        ];

  

        foreach ($user as $key => $value) {

            User::create($value);

        }

    }

}
