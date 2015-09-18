<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class MomentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
       {
         //delete users table records
         DB::table('moments')->delete();
         //insert some dummy records
         DB::table('moments')->insert(array(
            array('message'=>'this is a sample message 1','image'=>'','address'=>'Kapitolyo Pasig','latitude' => '14.569208','longitude' => '121.060157'),
            array('message'=>'this is a sample message 2','image'=>'','address'=>'Kapitolyo Pasig','latitude' => '14.569208','longitude' => '121.060157'),
            array('message'=>'this is a sample message 3','image'=>'','address'=>'Kapitolyo Pasig','latitude' => '14.569208','longitude' => '121.060157'),
            array('message'=>'this is a sample message 4','image'=>'','address'=>'Kapitolyo Pasig','latitude' => '14.569208','longitude' => '121.060157'),

          ));
         /*$table->string('message');
            $table->string('image');
            $table->string('address');
            $table->string('latitude');
            $table->string('longitude');*/
       }
}
