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
    .masterVolume {
      margin: 30px 0 20px 0;
      -webkit-appearance: none;
      background-color: #f5f6f8;
      height: 20px;
      width: 100%;
      margin: 10px auto;
      border-radius: 15px;
    }

    .masterVolume:focus {
      outline: none;
    }

    #carrier::-webkit-slider-thumb {
      -webkit-appearance: none;
      width: 100px;
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

    #beat::-webkit-slider-thumb {
      -webkit-appearance: none;
      width: 100px;
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
      width: 100px;
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

    .__rangee4::-webkit-slider-thumb {
      -webkit-appearance: none;
      width: 100px;
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
      background: url('./assets/crop-btn/btn-4.png') center center no-repeat;
      /* cursor: pointer;
      -webkit-appearance: none;
      margin-top: -23px; */
    }

    .__rangee5::-webkit-slider-thumb {
      -webkit-appearance: none;
      width: 100px;
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
      background: url('./assets/crop-btn/btn-5.png') center center no-repeat;
      /* cursor: pointer;
      -webkit-appearance: none;
      margin-top: -23px; */
    }

    .__rangee6::-webkit-slider-thumb {
      -webkit-appearance: none;
      width: 100px;
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
      background: url('./assets/crop-btn/btn-6.png') center center no-repeat;
      /* cursor: pointer;
      -webkit-appearance: none;
      margin-top: -23px; */
    }

    .__rangee7::-webkit-slider-thumb {
      -webkit-appearance: none;
      width: 100px;
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
      background: url('./assets/crop-btn/btn-7.png') center center no-repeat;
      /* cursor: pointer;
      -webkit-appearance: none;
      margin-top: -23px; */
    }

    .slider-ppt-3 {
      padding-top: 1.6rem;
    }

    .no-slider-ppt {
      padding-top: 2.7rem;
    }

    .color-white-icon {
      color: #c3c5c8;
      font-size: 40px;
    }

    .padding-icon {
      /* padding-top: 10px; */
    }

    .padding-icon.center-icon {
      padding-left: 4rem;
      padding-right: 4rem;
    }

    .bg-footer {
      padding: 10px 30px;
      background-color: rgba(10, 10, 10, 0.23);
      -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.75);
      -moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.75);
      box-shadow: 0px 0px 10px 0px rgb(0, 0, 0);
    }

    span.font-frq {
      font-size: 18px;
      color: white;
      position: relative;
      top: 21px;
    }

    .audio-div {
      text-align: center;
      margin: 30px 10px;
      font-size: 50px;
      /* background-color: transparent; */
      padding: 0px 10px 5px;
      border-radius: 20px;
      /* box-shadow: 0px 0px 5px 1px #141414b8; */
      height: 95px !important;
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
              <input class="masterVolume" id="carrier" type="range" value="432" min="40" max="1000" step="1" oninput="handleCarrierChange(value)" />
            </div>

            <!-- Text -->
            <div class=" col-md-1  no-slider-ppt">
              <h3 class="text-center"><span id="carrierLabel">432 Hz</span></h3>

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

              <input class="masterVolume" id="beat" type="range" value="6" min="0" max="40" step="1" oninput="handleBeatChange(value)" />
            </div>

            <!-- Text -->
            <div class=" col-md-1  no-slider-ppt">
              <h3 class="text-center"><span id="beatLabel">6</span></h3>

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
              <input class="masterVolume" id="beat" type="range" value="50" min="0" max="100" step="1" oninput="handleVolumeChange(value)" />
            </div>

            <!-- Text -->
            <div class=" col-md-1  no-slider-ppt">
              <h3 class="text-center">
                <span id="volumeLabel">50</span>
              </h3>

            </div>
          </div>
        </div>
      </div>

    </div>





    <div class="d-flex justify-content-center social">
      <div class="">
        <i class="social fab fa-facebook-square " aria-hidden="true"></i>
      </div>
      <div class="">
        <i class="social fab fa-twitter" aria-hidden="true"></i>
      </div>
      <div class="">
        <i class="social fab fa-youtube"></i>
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
    document.querySelectorAll(".masterVolume").forEach(function(el) {
      el.oninput = function() {
        var valPercent = (el.valueAsNumber - parseInt(el.min)) /
          (parseInt(el.max) - parseInt(el.min));
        var style = 'background-image: -webkit-gradient(linear, 0% 0%, 100% 0%, color-stop(' + valPercent + ', #5ed2f0), color-stop(' + valPercent + ', #7e8798));';
        el.style = style;
      };
      el.oninput();
    });
  </script>
</body>

</html>