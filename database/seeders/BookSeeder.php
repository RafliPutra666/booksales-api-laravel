<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Dune',
            'description' => 'Set in the distant future amidst a feudal interstellar society in which noble houses vie for control of planets, Dune tells the story of young Paul Atreides, whose family accepts the stewardship of the desert planet Arrakis. As the only source of the most valuable substance in the universe, "spice" melange, control of Arrakis is a coveted and dangerous undertaking. The story explores themes of politics, religion, and ecology as Paul becomes embroiled in a complex struggle for power and survival.',
            'price' => 150000,
            'stock' => 10,
            'cover_photo' => 'dune.jpg',
            'genre_id' => 1,
            'author_id' => 1, 
        ]);
        Book::create([
            'title' => 'The Hobbit',
            'description' => 'The Hobbit is a fantasy novel by J.R.R. Tolkien that follows the journey of Bilbo Baggins, a hobbit who is reluctantly drawn into an epic quest to reclaim the lost Dwarf Kingdom of Erebor from the fearsome dragon Smaug. Along the way, Bilbo encounters trolls, goblins, elves, and giant spiders, and discovers a magical ring that will play a crucial role in the fate of Middle-earth.',
            'price' => 120000,
            'stock' => 15,
            'cover_photo' => 'the_hobbit.jpg',
            'genre_id' => 2,
            'author_id' => 2, 
        ]);
        Book::create([
            'title' => 'The Da Vinci Code',
            'description' => 'A mystery thriller novel by Dan Brown that follows symbologist Robert Langdon as he investigates a  murder in the Louvre Museum in Paris. The novel explores themes of secret societies, religious history, and conspiracy theories as Langdon uncovers clues hidden in famous works of art to solve the mystery.',     
            'price' => 30000,
            'stock' => 30,
            'cover_photo' => 'DaVinci.jpg',
            'genre_id' => 3,
            'author_id' => 3,
        ]);
         Book::create([
            'title' => 'The Hobbit',
            'description' => 'The Hobbit is a fantasy novel by J.R.R. Tolkien that follows the journey of Bilbo Baggins, a hobbit who is reluctantly drawn into an epic quest to reclaim the lost Dwarf Kingdom of Erebor from the fearsome dragon Smaug. Along the way, Bilbo encounters trolls, goblins, elves, and giant spiders, and discovers a magical ring that will play a crucial role in the fate of Middle-earth.',
            'price' => 120000,
            'stock' => 15,
            'cover_photo' => 'the_hobbit.jpg',
            'genre_id' => 2,
            'author_id' => 2, 
        ]);
        Book::create([
            'title' => 'The Hobbit',
            'description' => 'The Hobbit is a fantasy novel by J.R.R. Tolkien that follows the journey of Bilbo Baggins, a hobbit who is reluctantly drawn into an epic quest to reclaim the lost Dwarf Kingdom of Erebor from the fearsome dragon Smaug. Along the way, Bilbo encounters trolls, goblins, elves, and giant spiders, and discovers a magical ring that will play a crucial role in the fate of Middle-earth.',
            'price' => 120000,
            'stock' => 15,
            'cover_photo' => 'the_hobbit.jpg',
            'genre_id' => 2,
            'author_id' => 2, 
        ]);
    }
}
