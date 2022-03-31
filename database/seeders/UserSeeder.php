<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Carbon\Carbon;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Administrator',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'phone_number' => '085856552564',
            'company' => 'PT.Bunga Asmara',
            'address' => 'Bojonegoro',
            'password' => Hash::make('admin'),
            'remember_token' => Str::random(10),
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);

        // $users = [];
        // $faker = Faker::create('id_ID');
        // for($i=0;$i<1100;$i++){
        // $data[$i] = [
        //         'name' => $faker->name,
        //         'email' => $faker->unique()->safeEmail,
        //         'username' => $faker->unique()->userName,
        //         'email_verified_at' => now(),
        //         'password' => bcrypt('password'),
        //         'phone_number' => $faker->unique()->phoneNumber,
        //         'company' => $faker->unique()->company,
        //         'address' => $faker->address,
        //         'remember_token' => Str::random(10),
        //         'created_at'=> Carbon::now(),
        //         'updated_at'=> Carbon::now(),
        //     ];
        // }
        // DB::table('users')->insert($data);
    }
}
