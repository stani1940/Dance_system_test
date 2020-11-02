<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();
        $adminRole = Role::where('name', 'admin')->first();
        $arbiterRole = Role::where('name', 'arbiter')->first();
        $dancerRole = Role::where('name', 'dancer')->first();
        $admin = User::create([
            'name' => 'Stanislav Ginev',
            'email' => 'stanislav1940@abv.bg',
            'password' => Hash::make('12345678')]);
        $admin = User::create([
            'name' => 'Krasimira Mitova',
            'email' => 'krasi@abv.bg',
            'password' => Hash::make('12345678')]);
        $arbiter = User::create([
            'name' => 'Gabriela Marinova',
            'email' => 'gabi@gmail.com',
            'password' => Hash::make('refer1234')]);
        $arbiter = User::create([
            'name' => 'PAMBUS Agapiu',
            'email' => 'pambos@gmail.com',
            'password' => Hash::make('refer1234')]);
        $arbiter = User::create([
            'name' => 'Qna Marinova',
            'email' => 'qna@gmail.com',
            'password' => Hash::make('refer1234')]);
        $dancer = User::create([
            'name' => 'Daniela Ilieva',
            'email' => 'deni@gmail.com',
            'password' => Hash::make('dancer1234')]);
        $dancer = User::create([
            'name' => 'Dimitrina Mitova',
            'email' => 'dimi@gmail.com',
            'password' => Hash::make('dancer1234')]);
        $dancer = User::create([
            'name' => 'Georgi Petrov',
            'email' => 'gogo@gmail.com',
            'password' => Hash::make('dancer1234')]);
        $admin->roles()->attach($adminRole);
        $arbiter->roles()->attach($arbiterRole);
        $dancer->roles()->attach($dancerRole);
    }
}
