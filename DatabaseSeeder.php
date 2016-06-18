<?php

use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    public function run()
    {
         $this->call('');
    }
}

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
        array('email'=>'tienfethust@gmail.com','password'=>Hash::make('123456789'),'fullname'=>'Tran Van Tien','birthday'=>'13/09/1990','gender'=>'nam','level'=>'admin')
            ]);
    }
    }
    class BlockTableSeeder extends Seeder
{
    //khoi block
    public function run()
    {
        DB::table('blocks')->insert([
        array('linkfacebook'=>'','linkgoogleplus'=>'','linktwitter'=>'','phone1'=>'','phone2'=>'','email'=>'','adress'=>'','linkgooglemap'=>'','introduce'=>'','logo'=>'')
            ]);
    }
    }

    class ServiceTableSeeder extends Seeder{
         public function run()
    {
        DB::table('services')->insert([
        array('guarantee'=>'text','transform'=>'text')
            ]);
    }
    }
