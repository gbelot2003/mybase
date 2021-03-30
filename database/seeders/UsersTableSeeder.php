<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

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
                'id' => 1,
                'name' => 'Gerardo Belot',
                'email' => 'gbelot2003@hotmail.com',
                'email_verified_at' => '2021-03-30 16:21:10',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'cK8NWGTvKf',
                'created_at' => '2021-03-30 16:21:10',
                'updated_at' => '2021-03-30 16:21:10',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Irma Haag',
                'email' => 'jamel.beier@example.org',
                'email_verified_at' => '2021-03-30 16:21:10',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'ClxlNIKhrT',
                'created_at' => '2021-03-30 16:21:10',
                'updated_at' => '2021-03-30 16:21:10',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Prof. Ayla Collins I',
                'email' => 'reilly79@example.org',
                'email_verified_at' => '2021-03-30 16:21:10',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => '5iEsi2eeUK',
                'created_at' => '2021-03-30 16:21:10',
                'updated_at' => '2021-03-30 16:21:10',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Caterina Moen',
                'email' => 'norris.hickle@example.net',
                'email_verified_at' => '2021-03-30 16:21:10',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'J9qXmeaMNB',
                'created_at' => '2021-03-30 16:21:10',
                'updated_at' => '2021-03-30 16:21:10',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Elmira Ankunding III',
                'email' => 'grady.kaya@example.org',
                'email_verified_at' => '2021-03-30 16:21:10',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'la7wad4eeO',
                'created_at' => '2021-03-30 16:21:10',
                'updated_at' => '2021-03-30 16:21:10',
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Corene Braun',
                'email' => 'letha.paucek@example.org',
                'email_verified_at' => '2021-03-30 16:21:10',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'pc1DwOsxxd',
                'created_at' => '2021-03-30 16:21:10',
                'updated_at' => '2021-03-30 16:21:10',
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'Kamille Champlin',
                'email' => 'ankunding.buster@example.com',
                'email_verified_at' => '2021-03-30 16:21:10',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'XfbjM2T3Bp',
                'created_at' => '2021-03-30 16:21:10',
                'updated_at' => '2021-03-30 16:21:10',
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'Jayme Homenick',
                'email' => 'shayna50@example.net',
                'email_verified_at' => '2021-03-30 16:21:10',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'J8gkHdPtwh',
                'created_at' => '2021-03-30 16:21:10',
                'updated_at' => '2021-03-30 16:21:10',
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'Telly Balistreri Jr.',
                'email' => 'giovanny30@example.net',
                'email_verified_at' => '2021-03-30 16:21:10',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'KG1BW2OVFh',
                'created_at' => '2021-03-30 16:21:10',
                'updated_at' => '2021-03-30 16:21:10',
            ),
            9 =>
            array (
                'id' => 10,
                'name' => 'Glenna Daugherty',
                'email' => 'brian.predovic@example.com',
                'email_verified_at' => '2021-03-30 16:21:10',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'P876i7a6Xh',
                'created_at' => '2021-03-30 16:21:10',
                'updated_at' => '2021-03-30 16:21:10',
            ),
        ));

        $user = User::find(1);
        $user->assignRole('administrador');

		$user = User::find(2);
        $user->assignRole('editor');

		$user = User::find(3);
        $user->assignRole('editor');

		$user = User::find(4);
        $user->assignRole('maestro');

		$user = User::find(5);
        $user->assignRole('maestro');

		$user = User::find(6);
        $user->assignRole('padre');

		$user = User::find(7);
        $user->assignRole('alumno');

		$user = User::find(8);
        $user->assignRole('alumno');

    }
}
