<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get("/", function () use ($app) {
    return $app->version();
});

$app->get("/view", function () {
    return view("greeting", ["name" => "Mario"]);
});

$app->get("/hello", function () {
    return "Hello World";
});

$app->get("blade", function () {
    $name = "Godzilla";
    $sayajin = "Vegeta";
    $pets = array("nami", "hotch", "peluso", "ready");
    $animes = [
        ["name" => "dragonball", "url" => "https://es.wikipedia.org/wiki/Dragon_Ball"],
        ["name" => "jojo", "url" => "https://es.wikipedia.org/wiki/JoJo%27s_Bizarre_Adventure"],
        ["name" => "onepiece", "url" => "https://es.wikipedia.org/wiki/One_Piece"]
    ];

    return view('child', [
        "name" => $name,
        "sayajin" => $sayajin,
        "pets" => $pets,
        "animes" => $animes
    ]);
});

$app->get("/home", function () {
    return view("home", ["name" => "NAMI"]);
});

$app->get("example/{name}", "ExampleController@show");
