<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    private $genres = [
        [
            'title' => 'Science Fiction',
            'description' => 'A genre that uses speculative, fictional science-based depictions of phenomena',
        ],
        [
            'title' => 'Fantasy',
            'description' => 'A genre that uses magic and other supernatural elements as a primary plot element, theme, or setting',
        ],
        [
            'title' => 'Mystery',
            'description' => 'A genre that involves solving a crime or uncovering secrets',
        ],
        [
            'title' => 'Romance',
            'description' => 'A genre that focuses on the relationship and romantic love between two people',
        ],
        [
            'title' => 'Horror',
            'description' => 'A genre that seeks to elicit fear, horror, or terror in its audience',
        ],
    ];

    public function getGenres()
    {
        return $this->genres;
    }
}
