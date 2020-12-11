<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Bliss Zone</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <!-- <link rel="stylesheet" href="stylesheet.css"> -->
  <link rel="stylesheet" href="./style_a.css">
  <link rel="stylesheet" href="./plyr.css">
  <script src="./binaural.js"></script>


  <style>
    :focus {
      outline: none;
    }

    input[type="range"] {
      -webkit-appearance: none;
      -moz-apperance: none;
      border-radius: 6px;
      height: 14px;
      background-image: -webkit-gradient(linear,
          left top,
          right top,
          color-stop(0.15, #5ed2f0),
          color-stop(0.15, #C5C5C5));
      width: 90%;
    }

    .__rangee1::-webkit-slider-thumb {
      -webkit-appearance: none;
      width: 50px;
      height: 70px;
      /* background: red; */
      /* border-radius: 50%; */
      cursor: -moz-grab;
      cursor: -webkit-grab;
      /* 
      height: 50px;
      width: 50px;
      border-radius: 3px; */
      background-color: transparent;
      background: url('./assets/crop-btn/btn-1.png') center center no-repeat;
      /* cursor: pointer;
      -webkit-appearance: none;
      margin-top: -23px; */
    }

    .__rangee2::-webkit-slider-thumb {
      -webkit-appearance: none;
      width: 50px;
      height: 70px;
      /* background: red; */
      /* border-radius: 50%; */
      cursor: -moz-grab;
      cursor: -webkit-grab;
      /* 
      height: 50px;
      width: 50px;
      border-radius: 3px; */
      background-color: transparent;
      background: url('./assets/crop-btn/btn-2.png') center center no-repeat;
      /* cursor: pointer;
      -webkit-appearance: none;
      margin-top: -23px; */
    }

    .__rangee3::-webkit-slider-thumb {
      -webkit-appearance: none;
      width: 50px;
      height: 70px;
      /* background: red; */
      /* border-radius: 50%; */
      cursor: -moz-grab;
      cursor: -webkit-grab;
      /* 
      height: 50px;
      width: 50px;
      border-radius: 3px; */
      background-color: transparent;
      background: url('./assets/crop-btn/btn-3.png') center center no-repeat;
      /* cursor: pointer;
      -webkit-appearance: none;
      margin-top: -23px; */
    }

    span.font-frq {
      font-size: 18px;
      color: white;
      /* position: relative;
            top: 21px; */
    }

    span.font-frq1 {
      font-size: 18px;
      color: white;
      position: relative;
      top: 21px;
    }
  </style>
</head>

<body>
  <div id="load"></div>

  <div class="bg-main">
    <nav class="navbar navbar-expand-lg navbar-light bg-nav">
      <a class="navbar-brand" href="index.php">
        <img src="./assets/img/logo-bliss_zone.png" width="45" height="45" alt="">
        <span class="font-logo">Binaural Beats</span> </a>


      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a class="navbar-brand" href="solfeggio_frequencies.php">
              <span>Solfeggio Frequencies</span>
            </a>

            <a class="navbar-brand" href="binaural_beats.php">
              <span>Binaural Beats</span>
            </a>

            <a class="navbar-brand" href="angel_frequencies.php">
              <span>Angel Frequencies</span>
            </a>

            <a class="navbar-brand" href="healing_frequencies.php">
              <span>Healing Frequencies</span>
            </a>

            <a class="navbar-brand" href="nature.php">
              <span>Nature Sounds</span>
            </a>

            <a class="navbar-brand" href="432hz_music.php">
              <span>432 Hz Music</span>
            </a>
          </li>

        </ul>
      </div>
    </nav>



    <div class="Title">
      <h1 class="font-logo">Bliss Zone</h1>
      <!-- <p>Ambient sounds to wash away distraction.</p> -->

      <p> Please use stereo headphones for all Binaural Beats </p>
      <p>
        <button name="toggleButton" onclick="toggleSound()">Start / Stop</button>
      </p>

      <!-- <p> Carrier Frequency: <span id="carrierLabel">432 Hz</span><br><br><br>
                <input class="masterVolume " id="carrier" type="range" value="432" min="40" max="1000" step="1" oninput="handleCarrierChange(value)" />
                <br><br>
            </p>
            <p>
                Binaural Beat Frequency: <span id="beatLabel">6</span><br><br><br>
                <input class="masterVolume" id="beat" type="range" value="6" min="0" max="40" step="1" oninput="handleBeatChange(value)" />

                <br><br>
            </p>
            <p>
                Volume: <span id="volumeLabel">50</span><br><br><br>
                <input class="masterVolume" id="beat" type="range" value="50" min="0" max="100" step="1" oninput="handleVolumeChange(value)" />
            </p> -->


      <div class="col-md-12">
        <div class="audio-div ">
          <!-- Image -->
          <div class="row">
            <div class="col-md-2">
              <!-- <img src="./assets/icons/fire.png" class=" button red"> -->
              <span class="font-frq">
                Carrier Frequency:
              </span>
            </div>
            <div class="col-md-9 slider-ppt-3">
              <input class="masterVolume __rangee1" id="carrier" type="range" value="190" min="40" max="1000" step="1" oninput="handleCarrierChange(value)" />
            </div>
            <!-- Text -->
            <div class=" col-md-1  no-slider-ppt">
              <h3 class="text-center"><span id="carrierLabel" class="font-frq1">432 Hz</span></h3>

            </div>
          </div>
        </div>
      </div>


      <div class="col-md-12">
        <div class="audio-div ">
          <!-- Image -->
          <div class="row">
            <div class="col-md-2">
              <span class="font-frq">
                Binaural Beat Frequency
              </span>
            </div>
            <div class="col-md-9 slider-ppt-3">
              <input class="masterVolume __rangee2" id="beat" type="range" value="6" min="0" max="40" step="1" oninput="handleBeatChange(value)" />
            </div>
            <!-- Text -->
            <div class=" col-md-1  no-slider-ppt">
              <h3 class="text-center"><span id="beatLabel" class="font-frq1">6</span>
              </h3>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="audio-div ">
          <!-- Image -->
          <div class="row">
            <div class="col-md-2">
              <!-- <img src="./assets/icons/fire.png" class=" button red"> -->
              <span class="font-frq">
                Volume
              </span>
            </div>
            <div class="col-md-9 slider-ppt-3">
              <input class="masterVolume __rangee3" id="beat" type="range" value="15" min="0" max="100" step="1" oninput="handleVolumeChange(value)" />
            </div>
            <!-- Text -->
            <div class=" col-md-1  no-slider-ppt">
              <h3 class="text-center">
                <span id="volumeLabel" class="font-frq1">50</span>
              </h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body pb-0">
          <div class="text-center pading">
            <p class="font-color pb-4">Play Mix or cancel to Make your own mix</p>
            <div class="row">
              <div class="col-md-6 p-0">
                <button type="button" class="btn-play ply-audio" data-dismiss="modal">play</button>
              </div>
              <div class="col-md-6  p-0">
                <button type="button" class="btn-cancel pause-audio" data-dismiss="modal">pause-audio</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Lahit compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"></script>

  <script src="./script_a.js"></script>



  <script>
    // document.querySelectorAll(".masterVolumeee").forEach(function(el) {
    //     el.oninput = function() {
    //         var valPercent = (el.valueAsNumber - parseInt(el.min)) /
    //             (parseInt(el.max) - parseInt(el.min));
    //         var style = 'background-image: -webkit-gradient(linear, 0% 0%, 100% 0%, color-stop(' + valPercent + ', #5ed2f0), color-stop(' + valPercent + ', #7e8798));';
    //         el.style = style;
    //     };
    //     el.oninput();
    // });

    /**
     * Sniffs for Older Edge or IE,
     * more info here:
     * https://stackoverflow.com/q/31721250/3528132
     */

    $('input[type="range"]').change(function() {
      var val = ($(this).val() - $(this).attr('min')) / ($(this).attr('max') - $(this).attr('min'));

      $(this).css('background-image',
        '-webkit-gradient(linear, left top, right top, ' +
        'color-stop(' + val + ', #5ed2f0), ' +
        'color-stop(' + val + ', #C5C5C5)' +
        ')'
      );
    });
  </script>

</body>

</html>