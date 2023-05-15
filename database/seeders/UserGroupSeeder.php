<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserGroup;


class UserGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // UserGroup::create([
        //     'name' => 'test2'
        // ]);

        $array = [
          [
            'name' => 'laurence',
            'code' => 'test',
            'description' => 'test',
          ]  ,

          [
            'name' => 'laurence',
            'code' => 'test',
            'description' => 'test',
          ]  ,
          [
            'name' => 'laurence',
            'code' => 'test',
            'description' => 'test',
          ]  
        ];


        foreach($array as $arr)
        {
            UserGroup::create($arr);
        }
    }
}
