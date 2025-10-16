<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'judul' => 'Science Fiction',
            'description' => 'A genre of speculative fiction that typically deals with imaginative and futuristic concepts such as advanced science and technology, space exploration, time travel, parallel universes, and extraterrestrial life.', 
        ]);
        Genre::create([
            'judul' => 'Fantasy',
            'description' => 'A genre of speculative fiction set in a fictional universe, often inspired by real world myth and folklore. It typically features magical elements, mythical creatures, and supernatural events.', 
        ]);
        Genre::create([
            'judul' => 'Mystery',
            'description' => 'A genre of fiction that involves a mysterious event or situation that needs to be solved, often involving a crime or detective work.', 
        ]);
        Genre::create([
            'judul' => 'Romance',
            'description' => 'A genre of fiction that focuses on the romantic relationships between characters, often with a happy ending.', 
        ]);
        Genre::create([
            'judul' => 'Horror',
            'description' => 'A genre of fiction that is intended to scare, unsettle, or horrify the reader, often featuring supernatural elements or psychological terror.', 
        ]);
    }
}
