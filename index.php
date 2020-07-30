<?php
//bindet die test.php Datei ein
require "test.php";
?>



<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nicht so tolle Wetter App</title>

    <link rel="stylesheet" href="css/style.css">
   
  </head>
  <body>
    <div class="hero is-fullheight is-dark is-bold">
      <div class="container has-text-centered">
        <div class="content is-small">
          Berlin, <?php echo date("d.m.Y"); ?>        </div>

      <div class="rel state">
        <img src="img/<?php echo $wetter_heute["weather_state_abbr"]?>.svg" 
        alt="<?php echo $wetter_heute["weather_state_name"];?>" 
        width="200" height="200"
         title="<?php echo $wetter_heute["weather_state_name"];?> -Icon">
        <p>
          <span class="min-temp">
          <?php 

          echo round($wetter_heute["min_temp"]); 
          
          ?>
           </span>

          <span class="max-temp">
          <?php 
          echo round($wetter_heute["max_temp"]); 
          ?>
          </span>
        </p>
        </div>

        <div class="content is-large state">
          <p class="is-size-1 is-uppercase has-text-weight-bold">
            <?php
            //c==clear
            if ( $wetter_heute["weather_state_abbr"] =="c") {
              echo "Heute ist ein sonniger Tag.";
            }
            elseif ($wetter_heute["weather_state_abbr"] =="s") {
              echo "Sofatag- heut wird es eklig nass.";
            }
            else {
              echo "Bleib im Bett!";
            }


?>
          </p>
        </div>
      </div>
      </div>
    </div>
  </body>
</html>
