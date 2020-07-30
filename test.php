<?php
//Holen der Wetterdaten von MetaWeater

$wetterdaten = file_get_contents("https://www.metaweather.com/api/location/638242/");

//Umwandel der JSON-Datei in einen Array
$wetterdaten = json_decode($wetterdaten, true);

//echo "$wetterdaten[sun_rise]<br>";
?>

<pre>
<?php
//var_dump($wetterdaten["consolidated_weather"][0]["weather_state_name"]);
$wetterdaten["consolidated_weather"][0];

$wetter_heute = $wetterdaten["consolidated_weather"][0];
?>
</pre>

 