<?php
namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
       ['title' => 'Blog 1',
       'content' => 'This is blog 1',
       'image' => '/storage/VegaGtqeUUm6hLEJm9gtdCtlNEXsHaE0HqQDbJyf.webp',
       'type' => 'man'],
       ['title' => 'Blog 2',
       'content' => 'This is blog 2',
       'image' => '/storage/VegaGtqeUUm6hLEJm9gtdCtlNEXsHaE0HqQDbJyf.webp',
       'type' => 'woman']
]);

    }
}
