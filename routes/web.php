<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $navList = ["Donna", "Uomo", "Bambini"];
    $headerIcons = ["fa-regular fa-user", "fa-regular fa-heart", "fa-solid fa-bag-shopping"];
    $footerIcons = [
        "fa-brands fa-square-twitter",
        "fa-brands fa-square-facebook",
        "fa-brands fa-square-instagram",
        "fa-brands fa-square-pinterest",
        "fa-brands fa-youtube"
    ];
    $products = [
        [
            "id" => 1,
            "frontImage" => "1.webp",
            "backImage" => "1b.webp",
            "brand" => "Levi's",
            "name" => "Relaxed Fit",
            "price" => 29.99,
            "isInFavorites" => true,
            "badges" => [
                [
                "type" => "discount",
                "value" => "-50%"
                ],
                [
                    "type" => "tag",
                    "value" => "Sostenibilità"
                ]    
            ]
        ],
        [
            "id" => 2,
            "frontImage" => "2.webp",
            "backImage" => "2b.webp",
            "brand" => "Guess",
            "name" => "Roses Tee",
            "price" => 20.99,
            "isInFavorites" => true,
            "badges" => [
                [
                "type" => "discount",
                "value" => "-30%"
                ]
            ]
        ],
        [
            "id" => 3,
            "frontImage" => "3.webp",
            "backImage" => "3b.webp",
            "brand" => "Come Zucchero Filato",
            "name" => "Voglia di colori pastello",
            "price" => 129.99,
            "isInFavorites" => false,
            "badges" => [
                [
                "type" => "discount",
                "value" => "-30%"
                ]
            ]
        ],
        [
            "id" => 4,
            "frontImage" => "4.webp",
            "backImage" => "4b.webp",
            "brand" => "Levi's",
            "name" => "Tee Unisex",
            "price" => 14.99,
            "isInFavorites" => false,
            "badges" => [
                [
                    "type" => "discount",
                    "value" => "-50%"
                ],
                [
                "type" => "tag",
                "value" => "Sostenibilità"
                ]
            ]
        ],
        [
            "id" => 5,
            "frontImage" => "5.webp",
            "backImage" => "5b.webp",
            "brand" => "Maya Deluxe",
            "name" => "Stripe Bodice",
            "price" => 99.99,
            "isInFavorites" => true,
            "badges" => [
                [
                "type" => "discount",
                "value" => "-50%"
                ],
                [
                    "type" => "tag",
                    "value" => "Sostenibilità"
                ]
            ]
        ],
        [
            "id" => 6,
            "frontImage" => "6.webp",
            "backImage" => "6b.webp",
            "brand" => "Esprit",
            "name" => "Maglione - Black",
            "price" => 29.99,
            "isInFavorites" => true,
            "badges" => [
                [
                "type" => "tag",
                "value" => "Sostenibilità"
                ]
            ]
        ]
    ];

    $data = [
        "navList" => $navList,
        "headerIcons" => $headerIcons,
        "products" => $products,
        "footerIcons" => $footerIcons,
    ];
    return view('welcome', $data);
});
