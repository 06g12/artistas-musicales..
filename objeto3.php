<?php

artista01 = [
"name" => "oliviaRodrigo",
"genero" => "femenino",
"edad" => 21,
"estatura" => 1.65,
"grammys" => 3,
"programas" => " Disney Bizaardvark y High School Musical: The Musical: The Series",
"albums" => 2,
"nominaciones" => "mejor artista del año, cancion del año, album del año",
"comida favorita" => "rollitos primavera",
"exito" => "All I Want",
"año del exito" => 2021,
"color favorito" => "morado",
"gustos" => "videos de comida en tik tok",
"mejor amiga" => "Iris Apatow",
"mejor amigo" => "conan grey",
"fecha de nacimiento" => 20/02/2003,
"tour 2024" => "septiembre",
"canciones" => 22,
"hermanos" => 0,
];
$artista02 = [
    "nombre" => "Elizabeth Wooldrige",
    "nombreartistisco => "Lana del Rey",
    "edad" => 38,
    "fecha de nacimiento" => 21/06/1985,
    "donde nacio" => "Manhattan",
    "altura" => 1.69cm,
    "hermanos" => 2,
    "nominaciones" => 35,
    "grammys" => 0,
    "albumes" => 17,
    "cancion viral" => "say yes to heaven",
    "estilo musical" => "indie pop",
    "aficion" => "cine clasico",
    "adicciones" => "alcohol",
    "tatuajes"  => 4,
    "album mas vendido" => "Born to Die",
    "color favorito" => "blanco",
    "instrumentos" => "guitarra",
    "novios" => 6,
    "primera cancion" => "videogames",
];
//objetos
$artista03 = [
    "nombre" => "arianagrande",
    "edad" => 21,
    "genero" => "femenino",
   "nacimiento" => 26 junio 1993,
    "generomusical" => "pop",
    "altura" => 1.54cm,
    "peso" => 48k,
   "pais" => "boca raton florida estados unidos",
    "grammyes" => 2,
    "programas" => "victorius sam y cat",
   "padres" => "joan Grande Edward Butera",
   "exitos" => "into you 7 rings needy positions",
   "hermanos" => "frankie Grande",
   "pasatiempos" => "nadar leer escribir ir compras",
   "mejor año" => 2010, 
   "albumes" => "eternal sushine positions sweetner my Everything Dangerous Woman", 
  "cancionfamosa" => "Side to side", 
 "cancionfamosa" => "positions", 
]
$artistas = [
    $artista01,
    $artista02,
    $artista03,
];

$artistas_musicales = [];

foreach ($artistas as $artista) {
    $asrtistas_musicales[$artista["name"]] = $artista01;
}
if (isset($_GET["name"])) {
    $nombre = $_GET["name"];

    echo json_encode($artistas_musicales[$nombre]);
} else {
    
    echo json_encode($artistas);
}

