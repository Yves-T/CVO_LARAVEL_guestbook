<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->delete();

        DB::table('comments')->insert([
            [
                'author'=>'Chris Sevilleja',
                'text'=>'Look! I am a test comment!'
            ],
            [
                'author'=>'Nick Cerminara',
                'text'=>'This is going to be super easy!'
            ],
            [
                'author'=>'Holly Lloyd',
                'text'=>'I am a master of laravel and angular'
            ]
        ]);
    }
}
