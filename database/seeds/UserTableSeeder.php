<?php
/**
 * Created by PhpStorm.
 * User: dalia.hassan
 * Date: 12/4/2016
 * Time: 3:58 PM
 */


use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'name'     => 'daliahassan',
            'email'    => 'daliiahasan@gmail.com',
            'password' => Hash::make('123456'),
        ));
    }

}