<?php

namespace App\Models;

class Movie
{

    private static $movieData = [
        [
            'id' => 'tt1746090',
            'time' => 109,
            'rate' => '6.9',
            'genre' => 'Action, Crime, Adventure, Mystery',
            'judul' => 'Equalizer 3',
            'sinopsis' => 'Robert McCall finds himself at home in Southern Italy but he discovers his friends are under the control of local crime bosses. As events turn deadly, McCall knows what he has to do: become his friends protector by taking on the mafia.',
            'tahun' => 2023,
            'pemain' => ['Denzel Washington', 'Dakota Fanning', 'Eugenio Mastrandrea'],
            'foto_sampul' => 'equalizer.jpg',
        ],
        [
            'id' => 'tt2567856',
            'time' => 163,
            'rate' => '7.8',
            'genre' => 'Action, Spy, Tension, Drama',
            'judul' => 'Mission: Impossible - Dead Reckoning Part One',
            'sinopsis' => 'Ethan Hunt and his IMF team must track down a dangerous weapon before it falls into the wrong hands.',
            'tahun' => 2023,
            'pemain' => ['Tom Cruise', 'Hayley Atwell', 'Ving Rhames'],
            'foto_sampul' => 'mission-imposible.jpg',
        ],
        [
            'id' => 'tt1745564',
            'time' => 240,
            'genre' => 'Documentary, Match, History, Drama',
            'rate' => '8',
            'judul' => 'Openheimer',
            'sinopsis' => 'The story of American scientist, J. Robert Oppenheimer, and his role in the development of the atomic bomb.',
            'tahun' => 2023,
            'pemain' => ['	Cillian Murphy', 'Emily Blunt', 'Robert Downey Jr.'],
            'foto_sampul' => 'openheimer.jpg',
        ],
        [
            'id' => 'tt1745960',
            'time' => 130,
            'rate' => '8.5',
            'genre' => 'Match, Horror, Comedy, Tragedy',
            'judul' => 'Top Gun: Maverick',
            'sinopsis' => 'After thirty years, Maverick is still pushing the envelope as a top naval aviator, but must confront ghosts of his past when he leads TOP GUNs elite graduates on a mission that demands the ultimate sacrifice from those chosen to fly it.',
            'tahun' => 2022,
            'pemain' => ['Tom Cruise', 'Jennifer Connelly', 'Miles Teller'],
            'foto_sampul' => 'top-gun.jpg',
        ],
        [
            'id' => 'tt1745961',
            'time' => 253,
            'rate' => '6.3',
            'genre' => 'Horror, Action, Comedy, Adventure',
            'judul' => 'The Right Stuff',
            'sinopsis' => 'Like the non-fiction novel, this series tells the story of the beginnings of the United States space program in 1959—the year NASA was founded.At that time, the development of the Soviet space program was more advanced than the American one. ',
            'tahun' => 2020,
            'pemain' => ['Patrick J. Adams', 'Jake McDorman', 'Colin O’Donoghue'],
            'foto_sampul' => 'the-right-stuff.jpg',
        ],
        [
            'id' => 'tt1745962',
            'time' => 138,
            'rate' => '6.9',
            'genre' => 'War, History, Documentary, Disaster',
            'judul' => 'Midway',
            'sinopsis' => 'The famous story of the battle of Midway during WWII is an obvious choice for anyone interested in movies about fighter pilots. With tons of high-altitude action sequences and numerous heroic acts, the movie does a great job of capturing the sacrifices made by those who fought in WWII.',
            'tahun' => 2019,
            'pemain' => ['Ed Skrein', 'Woody Harrelson', 'Patrick Wilson'],
            'foto_sampul' => 'midway.jpg',
        ],
        [
            'id' => 'tt1745963',
            'time' => 136,
            'rate' => '6.7',
            'genre' => 'War, History, Documentary, Disaster',
            'judul' => 'Pandora',
            'sinopsis' => 'The explosion of a nuclear power plant caused by an earthquake leads to a disaster which no one other than its workers can stop from spreading further.',
            'tahun' => 2016,
            'pemain' => ['Daekyun Ahn', 'Do-bin Baek', 'Seung-Hoon Choi'],
            'foto_sampul' => 'pandora.jpg',
        ],
        [
            'id' => 'tt1745964',
            'time' => 109,
            'rate' => '6.9',
            'genre' => 'Drama',
            'judul' => 'Nowhere',
            'sinopsis' => 'Pregnant, alone, and adrift in the ocean, a woman trapped in a cargo container tries to survive after escaping a crumbling totalitarian country.',
            'tahun' => 2023,
            'pemain' => ['Anna Castillo', 'Tamar Novas', 'Tony Corvillo'],
            'foto_sampul' => 'nowhere.jpeg',
        ],
    ];


    public static function all(){
        //pakai method collection
        return collect(self::$movieData);
    }

    public static function find($id){
        //pakai method all()
        $movie = static::all();
        return $movie->firstWhere('id', $id);
    }
}
