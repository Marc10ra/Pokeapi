<?php

$selectBox1 = $_POST ["usuario"];
echo "Player 1: ".$selectBox1;

$pokemon = '25';

$api = curl_init("https://pokeapi.co/api/v2/pokemon/$pokemon");
curl_setopt($api, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($api);
curl_close($api);

$json = json_decode($response);

echo '<h2>HABILIDADES</h2>';
foreach($json->abilities as $k => $v) {
    echo $v->ability->name.'<button type="submit" id="ataque1">Atacar</button>'.'<br>';
}

echo '<h2>TIPO</h2>';
echo $json->types[0]->type->name;

echo '<h2>FOTOS</h2>';

echo '<img src="'.$json->sprites->front_default.'" width="200">';
echo '<img src="'.$json->sprites->back_default.'" width="200">';
echo '<meter min="0" max="100" value="100" </meter>';


?>

