<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Jan Kowalski',
            'email' => 'jan.kowalski@gmail.com',
            'password' => bcrypt('test123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Kamil Nowak',
            'email' => 'kamil.karate@gmail.com',
            'role' => 2,
            'password' => bcrypt('test123'),
        ]);

        DB::table('scores')->insert([
            'usrId' => 1,
            'name' => 'Nazwa filmu 1',
            'url' => 'https://www.youtube.com/embed/60bADIHR0VM',
            'description' => 'Opis filmu 1',
        ]);


        DB::table('scores')->insert([
            'usrId' => 1,
            'name' => 'Nazwa filmu 2',
            'url' => 'https://www.youtube.com/embed/60bADIHR0VM',
            'description' => 'Opis filmu 2',
        ]);


        DB::table('scores')->insert([
            'usrId' => 1,
            'name' => 'Nazwa filmu 3',
            'url' => 'https://www.youtube.com/embed/60bADIHR0VM',
            'description' => 'Opis filmu 3',
        ]);


        DB::table('scores')->insert([
            'usrId' => 1,
            'name' => 'Nazwa filmu 4',
            'url' => 'https://www.youtube.com/embed/60bADIHR0VM',
            'description' => 'Opis filmu 4',
        ]);


        DB::table('scores')->insert([
            'usrId' => 1,
            'name' => 'Nazwa filmu 5',
            'url' => 'https://www.youtube.com/embed/60bADIHR0VM',
            'description' => 'Opis filmu 5',
        ]);


        DB::table('scores')->insert([
            'usrId' => 1,
            'name' => 'Nazwa filmu 6',
            'url' => 'https://www.youtube.com/embed/60bADIHR0VM',
            'description' => 'Opis filmu 6',
        ]);

        DB::table('movie_categories')->insert([
            'name' => 'Kata',
        ]);

        DB::table('movie_categories')->insert([
            'name' => 'Kichon',
        ]);

        DB::table('movie_categories')->insert([
            'name' => 'Kumite',
        ]);

        DB::table('materials')->insert([
            'category' => 1,
            'name' => 'Nazwa filmu szkoleniowego',
            'url' => 'https://www.youtube.com/embed/60bADIHR0VM',
            'description' => 'Opis filmu szkoleniowego',
        ]);

        DB::table('materials')->insert([
            'category' => 1,
            'name' => 'Nazwa filmu szkoleniowego 2',
            'url' => 'https://www.youtube.com/embed/60bADIHR0VM',
            'description' => 'Opis filmu szkoleniowego 2',
        ]);

        DB::table('materials')->insert([
            'category' => 2,
            'name' => 'Nazwa filmu szkoleniowego 1',
            'url' => 'https://www.youtube.com/embed/60bADIHR0VM',
            'description' => 'Opis filmu szkoleniowego',
        ]);

        DB::table('materials')->insert([
            'category' => 2,
            'name' => 'Nazwa filmu szkoleniowego 2 ',
            'url' => 'https://www.youtube.com/embed/60bADIHR0VM',
            'description' => 'Opis filmu szkoleniowego 2',
        ]);

        DB::table('materials')->insert([
            'category' => 3,
            'name' => 'Nazwa filmu szkoleniowego 1',
            'url' => 'https://www.youtube.com/embed/60bADIHR0VM',
            'description' => 'Opis filmu szkoleniowego',
        ]);

        DB::table('materials')->insert([
            'category' => 3,
            'name' => 'Nazwa filmu szkoleniowego 2 ',
            'url' => 'https://www.youtube.com/embed/60bADIHR0VM',
            'description' => 'Opis filmu szkoleniowego 2',
        ]);
    }
}
