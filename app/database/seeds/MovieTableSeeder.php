<?php

class MovieTableSeeder extends Seeder {
    public function run(){
        DB::table('movies')->delete();

        Movie::create(array(
            'title' => 'Man of steel',
            'releaseDate' => date('2013-06-19'),
            'genre' => 'Fantasy',
            'synopsis' => 'A young journalist is forced to confront his secret extraterrestrial heritage when Earth is invaded by members of his race.',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BMjI5OTYzNjI0Ml5BMl5BanBnXkFtZTcwMzM1NDA1OQ@@._V1_SY317_CR1,0,214,317_.jpg'
        ));
        Movie::create(array(
            'title' => 'Star Trek Into Darkness',
            'releaseDate' => date('2013-06-12'),
            'genre' => 'Fantasy',
            'synopsis' => 'After the crew of the Enterprise find an unstoppable force of terror from within their own organization, Captain Kirk leads a manhunt to a war-zone world to capture a one man weapon of mass destruction.',
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BMTk2NzczOTgxNF5BMl5BanBnXkFtZTcwODQ5ODczOQ@@._V1_SX214_.jpg'
        ));
        Movie::create(array(
            'title' => 'Monstres Academy',
            'releaseDate' => date('2013-07-10'),
            'genre' => 'Animation',
            'synopsis' => "A look at the relationship between Mike and Sulley during their days at Monsters University -- when they weren't necessarily the best of friends.",
            'poster' => 'http://ia.media-imdb.com/images/M/MV5BMTUyODgwMDU3M15BMl5BanBnXkFtZTcwOTM4MjcxOQ@@._V1_SX214_.jpg'
        ));
    }
}