<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Bliss Zone Solfeggio Frequencies</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <!-- <link rel="stylesheet" href="stylesheet.css"> -->

  <link rel="stylesheet" href="https://alemangui.github.io/pizzicato/css/main.css">

  <link rel="stylesheet" href="./style_a.css">
  <link rel="stylesheet" href="./mystyle.css">



  <style>

  </style>
</head>

<body>
  <div id="load"></div>

  <div class="bg-main">


    <div class="col-md-12">
      <div class="audio-div ">
        <div class="row">
          <div class="col-md-2">

            <img src="./assets/icons/fire.png" class=" button sawtoothWave">
            <div class="d-flex justify-content-center">
              <div class="">
                <h3>Muscles</h3>
              </div>
            </div>
          </div>
          <div class="col-md-9 slider-ppt-3">
            <input class="__rangee7" id="rng" name="rng" value="30" type="range" max="100" min="1" value="100" step="1" onchange="updateTextInput(this.value);">
          </div>

          <div class=" col-md-1  no-slider-ppt">
            <h3 class="text-center">50</h3>

          </div>
        </div>
      </div>
    </div>


  </div>


  <!-- jQuery library -->

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pizzicato/0.6.2/Pizzicato.js"></script>
  <script>
    // var sound = new Pizzicato.Sound({
    //   source: 'file',
    //   options: {
    //     path: ['./assets/sound/night_cricket.mp4', './assets/sound/night_cricket.ogg']
    //   }
    // }, function() {
    //   console.log('sound file loaded!');
    // });

    var sawtoothWave = new Pizzicato.Sound({
      source: 'wave',
      options: {
        type: 'sawtooth'
      }
    });

    var delay = new Pizzicato.Effects.Delay();
    sawtoothWave.addEffect(delay);

    // sawtoothWave.play();

    $('.button').click(function() {
      $(this).toggleClass('playing');
      if ($(this).hasClass('playing')) {
        eval($(this).attr('class').split(' ')[1]).play();
        eval($(this).attr('class').split(' ')[1]).volume = 0.02
        playsnd = true;

        console.log('xaaaaa 10')
      } else {
        playsnd = false;
        eval($(this).attr('class').split(' ')[1]).stop();
      }

    });
  </script>
</body>

</html>