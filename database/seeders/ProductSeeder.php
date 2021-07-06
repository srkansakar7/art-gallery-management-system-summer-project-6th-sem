<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ["name"=>'Samurai Luffy',
              "price"=>'1000',
              "description"=>'By Seras R. Kansakar',
              "category"=>'Anime',
              "gallery"=>'/storage/images/seras.jpg',
              "seller"=>'Seras Kansakar'
            ],
            [
              "name"=>'Princess Boa Hancock',
              "price"=>'1500',
              "description"=>'By Rachta Lin',
              "category"=>'Anime',
              "gallery"=>'/storage/images/boaHancock1.jpg',
              "seller"=>'Rachta Lin'
               
            ],
            [
              "name"=>'DBZ',
              "price"=>'1200',
              "description"=>'By URON',
              "category"=>'Anime',
              "gallery"=>'/storage/images/anime.jpg',
              "seller"=>'Uron'
            
            ],
            [
              "name"=>'Mandy',
              "price"=>'800',
              "description"=>'By LCM4NDY',
              "category"=>'Anime',
              "gallery"=>'/storage/images/lcmandy.jpg',
              "seller"=>'L.C. Mandy'
            ],
            [
              "name"=>'Kaori Miyazono',
            "price"=>'800',
            "description"=>'By Seras R. Kansakar',
            "category"=>'Anime',
            "gallery"=>'/storage/images/kaori(1).jpg',
            "seller"=>'Seras Kansakar'
          
            ],
            [
              "name"=>'Son Goku',
            "price"=>'600',
            "description"=>'By Seras R. Kansakar',
            "category"=>'Anime',
            "gallery"=>'/storage/images/songoku.jpg',
            "seller"=>'Seras Kansakar'
          
          ]
        ]);
    }
}
