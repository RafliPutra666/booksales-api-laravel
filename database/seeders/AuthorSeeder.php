<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'name' => 'Isaac Asimov',
            'photo' => 'isaac_asimov.jpg',
            'bio' => 'Isaac Asimov was a prolific science fiction writer and biochemist, known for his works such as the Foundation series and the Robot series.',
        ]);
        Author::create([
            'name' => 'J.K. Rowling',
            'photo' => 'jk_rowling.jpg',
            'bio' => 'J.K. Rowling is the author of the Harry Potter series, which has become one of the best-selling book series in history.',
        ]);
        Author::create([
            'name' => 'Agatha Christie',
            'photo' => 'agatha_christie.jpg',
            'bio' => 'Agatha Christie was an English writer known for her detective novels, particularly those featuring Hercule Poirot and Miss Marple.',
        ]);
        Author::create([
            'name' => 'Jane Austen',
            'photo' => 'jane_austen.jpg',
            'bio' => 'Jane Austen was an English novelist known for her six major novels, including Pride and Prejudice and Sense and Sensibility.',
        ]);
        Author::create([
            'name' => 'Stephen King',
            'photo' => 'stephen_king.jpg',
            'bio' => 'Stephen King is a prolific author of horror, supernatural fiction, suspense, and fantasy novels, known for works like The Shining and IT.',
        ]);
    }
}
