<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    private $authors = [
        [
            'name' => 'Isaac Asimov',
            'photo' => 'isaac_asimov.jpg',
            'bio' => 'Isaac Asimov was a prolific science fiction author and biochemistry professor, known for his Foundation series and Robot series.',
        ],
        [
            'name' => 'J.K. Rowling',
            'photo' => 'jk_rowling.jpg',
            'bio' => 'J.K. Rowling is the author of the Harry Potter series, which has become one of the best-selling book series in history.',
        ],
        [
            'name' => 'Agatha Christie',
            'photo' => 'agatha_christie.jpg',
            'bio' => 'Agatha Christie was an English writer known for her detective novels, particularly those featuring Hercule Poirot and Miss Marple.',
        ],
        [
            'name' => 'Jane Austen',
            'photo' => 'jane_austen.jpg',
            'bio' => 'Jane Austen was an English novelist known for her six major novels, including Pride and Prejudice and Sense and Sensibility.',
        ],
        [
            'name' => 'Stephen King',
            'photo' => 'stephen_king.jpg',
            'bio' => 'Stephen King is a prolific author of horror, supernatural fiction, suspense, and fantasy novels, known for works like The Shining and IT.',
        ],
    ];

    public function getAuthors()
    {
        return $this->authors;
    }
}
