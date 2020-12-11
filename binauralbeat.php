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
    label {
      color: white;
    }

    button.btn.btn-default.dropdown-toggle {
      color: white;
    }

    .color_white {
      color: white !important;
    }

    <style> :focus {
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

    #amplitudeSlider::-webkit-slider-thumb {
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

    #frequencySlider::-webkit-slider-thumb {
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
  </style>
</head>

<body>


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




      <button id="toggleSound" class="btn btn-default color_white"><i id="speaker" class="fa fa-volume-up fa-1x fa-fw"></i><span id="toggleLabel">Start!</span></button>
      <div class="container-fluid top">
        <br />
        <div class="row d-flex justify-content-center">
          <div class="btn-group ">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              Select Sound Wave <span class="caret"></span>
            </button>
            <ul id="waveDropdown" class="dropdown-menu" role="menu">
              <li><a id="sine">Sine</a></li>
              <li><a id="square">Square</a></li>
              <li><a id="sawtooth">Sawtooth</a></li>
              <li><a id="triangle">Triangle</a></li>
              <li><a tabindex="0" id="custom" title="" data-toggle="modal" data-target="#fourierModal" data-placement="bottom" data-content="Click to share this unique pattern" data-trigger="focus">Custom...</a></li>
            </ul>
          </div>
        </div>

        <br />
        <br />
        <div class="row">
          <div class="col-xs-5 col-sm-4 col-md-3">
            <label for="amplitudeSlider">Amplitude: <span id="amplitude">1</span></label>
          </div>
          <div class="slider col-xs-12 col-sm-12 col-md-9">
            <input type="range" id="amplitudeSlider" style="margin-bottom: 20px">
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-xs-5 col-sm-4 col-md-3">
            <label for="frequencySlider">Frequency: <span id="frequency">440</span>Hz</label>
          </div>
          <div class="slider col-xs-12 col-sm-12 col-md-9">
            <input type="range" id="frequencySlider">
          </div>
        </div>
        <!-- <div class="">
          <div class="col-md-12">
            <div class="audio-div ">
              <div class="row">
                <div class="col-md-2">
                  <span class="font-frq">
                    Volume
                  </span>
                </div>
                <div class="col-md-9 slider-ppt-3">
                  <input class="masterVolume __rangee3" id="beat" type="range" value="15" min="0" max="100" step="1" oninput="handleVolumeChange(value)" />
                </div>
                <div class=" col-md-1  no-slider-ppt">
                  <h3 class="text-center">
                    <span id="volumeLabel" class="font-frq1">50</span>
                  </h3>
                </div>
              </div>
            </div>
          </div>
        </div> -->
      </div>
      <canvas id="theCanvas" width="2600" height="256" style="display: none"></canvas>
      <div id="fourierModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="fourierModal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h3>Combine three different octaves</h3>
              Set Fourier Series Coefficients by entering a percentage for sine components (cos are all set to 0). Sum of all three should be 100.
            </div>
            <div class="modal-body">
              <div class="form-horizontal">
                <div class="form-group">
                  <label for="first" class="col-xs-6 control-label">Base frequency (as set with the slider):</label>
                  <div class="col-xs-6">
                    <input id="first" type="number" class="form-control" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="second" class="col-xs-6 control-label">One octave up:</label>
                  <div class="col-xs-6">
                    <input id="second" type="number" class="form-control" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="third" class="col-xs-6 control-label">Two octaves up:</label>
                  <div class="col-xs-6">
                    <input id="third" type="number" class="form-control" />
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default"><a href="http://en.wikipedia.org/wiki/Fourier_series" target="_blank"><i class="fa fa-question-circle fa-fw"></i>Help</a></button>
              <button type="button" class="btn btn-primary" id="applyButton">Apply</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
  <script>
    $('input[type="range"]').change(function() {
      var val = ($(this).val() - $(this).attr('min')) / ($(this).attr('max') - $(this).attr('min'));
      $(this).css('background-image',
        '-webkit-gradient(linear, left top, right top, ' +
        'color-stop(' + val + ', #5ed2f0), ' +
        'color-stop(' + val + ', #C5C5C5)' +
        ')'
      );
    });
    /*
  Read my blog post about Web Audio API:
  https://codepen.io/DonKarlssonSan/blog/fun-with-web-audio-api
  
  Browser support for Web Audio API:
  http://caniuse.com/#feat=audio-api
  
  Fourier Series:
  http://en.wikipedia.org/wiki/Fourier_series
  
  Octave:
  http://en.wikipedia.org/wiki/Octave
*/
    $(function() {
      var AudioContext
      var audioContext
      var oscillator
      var gainNode
      var analyser
      var isPlaying = false
      var isPaused = false
      var canvas = document.getElementById('theCanvas')
      var canvasContext = canvas.getContext('2d')
      var dataArray
      var analyserMethod = 'getByteTimeDomainData'
      var frequencySlider = document.getElementById('frequencySlider')
      var amplitudeSlider = document.getElementById('amplitudeSlider')
      // Fourier Coefficients used for the custom wave
      var first = 66
      var second = 100
      var third = 200

      var canvasWidth = canvas.width
      var canvasHeight = canvas.height

      function initAudio() {
        AudioContext = window.AudioContext || window.webkitAudioContext
        audioContext = new AudioContext()
        // The oscillator creates the sound waves.
        // As you can see on the canvas when drawing
        // the square wave, the wave is not perfectly
        // square. What you see is the Gibbs phenomenon
        // caused by the oscillator using Fourier series
        // to approximate the different wave types.
        oscillator = audioContext.createOscillator()
        oscillator.type = 'sine'
        // The tone A
        // http://en.wikipedia.org/wiki/A440_(pitch_standard)
        oscillator.frequency.value = 440
        // Controls the volume
        gainNode = audioContext.createGain()
        oscillator.connect(gainNode)
        // Provides info about the sound playing
        analyser = audioContext.createAnalyser()
        gainNode.connect(analyser)
        gainNode.connect(audioContext.destination)

        // Oscillator -- Gain +-- Out (speaker/phones)  
        //                    |   
        //                    +-- Analyser    
      }

      function startDrawing() {
        WIDTH = canvas.width
        HEIGHT = canvas.height

        analyser.fftSize = 2048
        var bufferLength = analyser.frequencyBinCount; // half the FFT value
        var dataArray = new Uint8Array(bufferLength); // create an array to store the data
        console.log(dataArray)

        canvasContext.clearRect(0, 0, WIDTH, HEIGHT)

        function draw() {
          drawVisual = requestAnimationFrame(draw)

          analyser.getByteTimeDomainData(dataArray); // get waveform data and put it into the array created above

          canvasContext.fillStyle = '#272b30' // draw wave with canvas
          canvasContext.fillRect(0, 0, WIDTH, HEIGHT)

          canvasContext.lineWidth = 2
          canvasContext.strokeStyle = '#3cfd2a'

          canvasContext.beginPath()

          var sliceWidth = WIDTH * 1.2 / bufferLength
          var x = 0

          for (var i = 0; i < bufferLength; i++) {
            var v = dataArray[i] / 130.0
            var y = v * HEIGHT / 2 + 2

            if (i === 0) {
              canvasContext.moveTo(x, y)
            } else {
              canvasContext.lineTo(x, y)
            }

            x += sliceWidth
          }

          canvasContext.lineTo(canvas.width, canvas.height / 2)
          canvasContext.stroke()
        }

        draw()
      }

      var speakerIcon = document.getElementById('speaker')
      var toggleLabel = document.getElementById('toggleLabel')

      function toggleSound() {
        if (isPlaying) {
          speakerIcon.classList.remove('fa-volume-off')
          speakerIcon.classList.add('fa-volume-up')
          toggleLabel.innerHTML = 'Start!'
          oscillator.disconnect(gainNode)
          isPlaying = false
          isPaused = true
        } else {
          speakerIcon.classList.remove('fa-volume-up')
          speakerIcon.classList.add('fa-volume-off')
          toggleLabel.innerHTML = 'Stop!'
          if (isPaused) {
            oscillator.connect(gainNode)
          } else {
            oscillator.start()
          }
          isPlaying = true
          isPaused = false
        }
      }

      document.getElementById('toggleSound').addEventListener('click',
        toggleSound, false)

      // Fourier series
      function customWave(first, second, third) {
        document.getElementById('first').value = first
        document.getElementById('second').value = second
        document.getElementById('third').value = third
        // You could create several oscillator nodes with different
        // frequencies and then combine them. But here we use a
        // PeriodicWave to combine the first three sin components.
        // https://developer.mozilla.org/en-US/docs/Web/API/PeriodicWave
        var real = new Float32Array(4)
        var imag = new Float32Array(4)
        // a0 (or DC offset)
        real[0] = 0
        imag[0] = 0

        // First term. The frequency, f, set on the oscillator.
        // sin
        real[1] = first / 100
        // cos 
        imag[1] = 0

        // Second term, f * 2, one octave up. 
        // sin
        real[2] = second / 100
        // cos 
        imag[2] = 0

        // Third term, f * 3, two octaves up.
        // sin
        real[3] = third / 100
        // cos 
        imag[3] = 0

        var wave = audioContext.createPeriodicWave(real, imag)
        // "the browser performs an inverse Fourier transform to 
        // get a time domain buffer for the frequency of the 
        // oscillator" -MDN
        oscillator.setPeriodicWave(wave)
      }

      function applyClicked() {
        first = parseInt(document.getElementById('first').value)
        second = parseInt(document.getElementById('second').value)
        third = parseInt(document.getElementById('third').value)
        customWave(first, second, third)
      }
      document.getElementById('applyButton').addEventListener('click',
        applyClicked, false)

      function waveDropdownClicked(event) {
        event = event || window.event
        var target = event.target || event.srcElement
        if (target.nodeName === 'A') {
          var waveType = target.id
          console.log(waveType)
          oscillator.type = waveType
          if (waveType === 'custom') {
            customWave(first, second, third)
          }
        }
      }

      // Bind events
      document.getElementById('waveDropdown').addEventListener('click',
        waveDropdownClicked, false)

      frequencySlider.min = 5
      frequencySlider.max = 22000
      frequencySlider.value = 440
      frequencySlider.step = 1
      frequencySlider.addEventListener('change', function() {
        oscillator.frequency.value = this.value
        document.getElementById('frequency').innerHTML = this.value
      })
      frequencySlider.addEventListener('mousemove', function() {
        oscillator.frequency.value = this.value
        document.getElementById('frequency').innerHTML = this.value
      })

      amplitudeSlider.min = 0
      amplitudeSlider.max = 1
      amplitudeSlider.value = 1
      amplitudeSlider.step = 0.01
      amplitudeSlider.addEventListener('change', function() {
        gainNode.gain.value = this.value
        document.getElementById('amplitude').innerHTML = this.value
      })
      amplitudeSlider.addEventListener('mousemove', function() {
        gainNode.gain.value = this.value
        document.getElementById('amplitude').innerHTML = this.value
      })

      $(window).on('keydown', function(e) {
        e.preventDefault()
        if (e.which === 32) $('#toggleSound').trigger('click')
      })

      initAudio()
      startDrawing()
    })()
  </script>
</body>

</html>