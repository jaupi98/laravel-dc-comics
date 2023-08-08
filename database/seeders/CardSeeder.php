<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Card;
class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_card = config('card');
        foreach($array_card as $item){
            $card =new Card();
            
            $card->title = $item['title'];
            $card->description = $item['description'];
            $card->thumb = $item['thumb'];
            $card->price = $item['price'];
            $card->series = $item['series'];
            $card->sale_date = $item['sale_date'];
            $card->type = $item['type'];
            $card->artists = json_encode($item['artists']);
            $card->writers = json_encode($item['writers']);

            $card->save();
        }
    }
}
