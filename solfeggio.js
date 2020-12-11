var mc = null;
var playSoundEach = " ";
var playsnd = false;

var isPlaying = false;
var volume = .5;
var AudioContext = window.AudioContext || window.webkitAudioContext;
var cntx = new AudioContext();
var merger = cntx.createChannelMerger(2);
var volumeNode = cntx.createGain();
volumeNode.gain.value = volume;

merger.connect(volumeNode);
volumeNode.connect(cntx.destination);


  var attack_val = 10;
  var release_val = 10;

  var nat = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 174,
      attack: attack_val,
      release: release_val
    }
  });

  var sineWave = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 440,
      attack: attack_val,
      release: release_val
    }
  });

  var hel = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 445,
      attack: attack_val,
      release: release_val
    }
  });

  var ut = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 396,
      attack: attack_val,
      release: release_val
    }
  });

  var re = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 376,
      attack: attack_val,
      release: release_val
    }
  });

  var mi = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 576,
      attack: attack_val,
      release: release_val
    }
  });

  var fa = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 676,
      attack: attack_val,
      release: release_val

    }
  });

  var sol = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 741,
      attack: attack_val,
      release: release_val
    }
  });

  var la = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 352,
      attack: attack_val,
      release: release_val
    }
  });

  var si = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 963,
      attack: attack_val,
      release: release_val
    }
  });

  var blood = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 321.9,
      attack: attack_val,
      release: release_val
    }
  }); var adrenals = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 492.8,
      attack: attack_val,
      release: release_val
    }
  }); var kidney = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 319.88,
      attack: attack_val,
      release: release_val
    }
  }); var liver = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 317.83,
      attack: attack_val,
      release: release_val
    }
  }); var bladder = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 352,
      attack: attack_val,
      release: release_val
    }
  }); var intestines = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 281,
      attack: attack_val,
      release: release_val
    }
  }); var lungs = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 220,
      attack: attack_val,
      release: release_val
    }
  }); var colon = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 176,
      attack: attack_val,
      release: release_val
    }
  }); var gall_bladder = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 164.3,
      attack: attack_val,
      release: release_val
    }
  }); var pancreas = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 117.3,
      attack: attack_val,
      release: release_val
    }
  }); var stomach = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 110,
      attack: attack_val,
      release: release_val
    }
  }); var brain = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 315.8,
      attack: attack_val,
      release: release_val
    }
  }); var fat_cells = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 295.8,
      attack: attack_val,
      release: release_val
    }
  }); var muscles = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 324,
      attack: attack_val,
      release: release_val
    }
  }); var bone = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 418.3,
      attack: attack_val,
      release: release_val
    }
  });

  var throat = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 384,
      attack: attack_val,
      release: release_val
    }
  });

  var heart = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 341,
      attack: attack_val,
      release: release_val
    }
  });

  var bone = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 418.3,
      attack: attack_val,
      release: release_val
    }
  });

  var solar = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 528,
      attack: attack_val,
      release: release_val
    }
  });
  var orange = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 303,
      attack: attack_val,
      release: release_val
    }
  });

  var red = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 256,
      attack: attack_val,
      release: release_val
    }
  });


    var segments = [

  {
    audio: nat,
    playButton: document.getElementById('play-nat'),
    stopButton: document.getElementById('stop-nat'),
    volumeSlider: document.getElementById('volume-nat')
  },
  {
    audio: hel,
    playButton: document.getElementById('play-hel'),
    stopButton: document.getElementById('stop-hel'),
    volumeSlider: document.getElementById('volume-hel')
  },
   {
    audio: ut,
    playButton: document.getElementById('play-ut'),
    stopButton: document.getElementById('stop-ut'),
    volumeSlider: document.getElementById('volume-ut')
  },
  {
    audio: re,
    playButton: document.getElementById('play-re'),
    stopButton: document.getElementById('stop-re'),
    volumeSlider: document.getElementById('volume-re')
  },
  {
    audio: mi,
    playButton: document.getElementById('play-mi'),
    stopButton: document.getElementById('stop-mi'),
    volumeSlider: document.getElementById('volume-mi')
  },
  {
    audio: fa,
    playButton: document.getElementById('play-fa'),
    stopButton: document.getElementById('stop-fa'),
    volumeSlider: document.getElementById('volume-fa')
  },
  {
    audio: sol,
    playButton: document.getElementById('play-sol'),
    stopButton: document.getElementById('stop-sol'),
    volumeSlider: document.getElementById('volume-sol')
  },
  {
    audio: la,
    playButton: document.getElementById('play-la'),
    stopButton: document.getElementById('stop-la'),
    volumeSlider: document.getElementById('volume-la')
  },
  { 
    audio: blood,
    playButton: document.getElementById('play-si'),
    stopButton: document.getElementById('stop-si'),
    volumeSlider: document.getElementById('volume-si')
  }

]

for (var i = 0; i < segments.length; i++) {
  (function(segment) {

    segment.audio.on('play', function() {
      segment.playButton.classList.add('pause');
    });

    segment.audio.on('stop', function() {
      segment.playButton.classList.remove('pause');
    });

    segment.audio.on('pause', function() {
      segment.playButton.classList.remove('pause');
    });

    segment.playButton.addEventListener('click', function(e) {
      if (segment.playButton.classList.contains('pause'))
        segment.audio.pause();
      else
        segment.audio.play();
    });

    segment.stopButton.addEventListener('click', function(e) {
      segment.audio.stop(); 
    });

    segment.volumeSlider.addEventListener('input', function(e) {
      var volumeDisplay = segment.volumeSlider.parentNode.getElementsByClassName('slider-value')[0];
      console.log(volumeDisplay);
      volumeDisplay.innerHTML = segment.audio.volume = e.target.valueAsNumber;
    });

    if (segment.releaseSlider) {
      segment.releaseSlider.addEventListener('input', function(e) {
        var releaseDisplay = segment.releaseSlider.parentNode.getElementsByClassName('slider-value')[0];
        releaseDisplay.innerHTML = segment.audio.release = e.target.valueAsNumber;
      });
    }

    if (segment.attackSlider) {
      segment.attackSlider.addEventListener('input', function(e) {
        var attackDisplay = segment.attackSlider.parentNode.getElementsByClassName('slider-value')[0];
        attackDisplay.innerHTML = segment.audio.attack = e.target.valueAsNumber;
      });
    }

    if (!segment.effects || !segment.effects.length)
      return;

    for (var i = 0; i < segment.effects.length; i++) {
      var effect = segment.effects[i];

      for (var key in effect.parameters) {
        (function(key, slider, instance){

          var display = slider.parentNode.getElementsByClassName('slider-value')[0];

          slider.addEventListener('input', function(e) {
            display.innerHTML = instance[key] = e.target.valueAsNumber;
          });

        })(key, effect.parameters[key], effect.instance); 
      }
    }

  })(segments[i]);
}




  var sounds = new Array(si, la, sol, fa, mi, re, ut, hel, nat);


  $('.button').click(function () {
    $(this).toggleClass('playing');
    if ($(this).hasClass('playing')) {
      eval($(this).attr('class').split(' ')[1]).play();
      // eval($(this).attr('class').split(' ')[1]).volume = 0;
      playsnd = true;

      console.log('xaaaaa 10')
    } else {
      playsnd = false;
      eval($(this).attr('class').split(' ')[1]).stop();
    }

  });


$(function () {





  /* Volume Starts*/

  this.updateTextInput = function (idForVal, val) {
    document.getElementById(idForVal).value = val;
    // console.log('dadas');
  }

  this.playSoundEach = function (animal, amount) {
    var sound_each = animal;
    // var amount_each = amount * 9
    // amount = amount_each
    // hel.volume = amount
    console.log("amount_eachdasds dasdas", amount)

    // console.log('sound_each', sound_each, "sound_each", amount)
    // one
    if (sound_each === 'nat') {
      console.log('inner natadada');



      sound_each.volume = amount;
      if (amount == '0') {
        console.log('nat  0')
        nat.volume =  sound_each.volume;
        console.log(nat.volume);
      }
      if (amount > 0 && amount <= 0.10) {
        console.log('nat amount  1')
        nat.volume = 0.09;
         console.log(nat.volume);
      }
      if (amount > 0.11 && amount <= 0.20) {
        console.log('nat amount 2')
        nat.volume = 0.19
      }
      if (amount > 0.21 && amount <= 0.30) {
        console.log('nat amount 3')
        nat.volume = 0.29
      }
      if (amount > 0.31 && amount <= 0.40) {
        console.log('nat amount 4')
        nat.volume = 0.39
      }
      if (amount > 0.41 && amount <= 0.50) {
        console.log('nat amount 4')
        nat.volume = 0.49
      }
      if (amount > 0.51 && amount <= 0.60) {
        console.log('nat amount  5')
        nat.volume = 0.59
      }
      if (amount > 0.61 && amount <= 0.70) {
        console.log('nat amount 6')
        nat.volume = 0.69
      }
      if (amount > 0.71 && amount <= 0.80) {
        console.log('nat amount 7')
        nat.volume = 0.79
      }
      if (amount > 0.81 && amount <= 0.90) {
        console.log('nat amount 8')
        nat.volume = 0.89
      }
      if (amount > 0.91 && amount <= 1) {
        console.log('nat amount 9')
        nat.volume = 1
      }

    }
    // two
    if (sound_each === 'hel') {
      console.log('inner hel')
      if (amount == '0') {
        console.log('hel  0')
        hel.volume = 0
      }
      if (amount > 0 && amount <= 0.10) {
        console.log('hel amount  1')
        hel.volume = 0.09
      }
      if (amount > 0.11 && amount <= 0.20) {
        console.log('hel amount 2')
        hel.volume = 0.19
      }
      if (amount > 0.21 && amount <= 0.30) {
        console.log('hel amount 3')
        hel.volume = 0.29
      }
      if (amount > 0.31 && amount <= 0.40) {
        console.log('hel amount 4')
        hel.volume = 0.39
      }
      if (amount > 0.41 && amount <= 0.50) {
        console.log('hel amount 4')
        hel.volume = 0.49
      }
      if (amount > 0.51 && amount <= 0.60) {
        console.log('hel amount  5')
        hel.volume = 0.59
      }
      if (amount > 0.61 && amount <= 0.70) {
        console.log('hel amount 6')
        hel.volume = 0.69
      }
      if (amount > 0.71 && amount <= 0.80) {
        console.log('hel amount 7')
        hel.volume = 0.79
      }
      if (amount > 0.81 && amount <= 0.90) {
        console.log('hel amount 8')
        hel.volume = 0.89
      }
      if (amount > 0.91 && amount <= 1) {
        console.log('hel amount 9')
        hel.volume = 1
      }

    }
    // three
    if (sound_each === 'hel') {
      console.log('inner hel')
      if (amount == '0') {
        console.log('hel  0')
        hel.volume = 0
      }
      if (amount > 0 && amount <= 0.10) {
        console.log('hel amount  1')
        hel.volume = 0.09
      }
      if (amount > 0.11 && amount <= 0.20) {
        console.log('hel amount 2')
        hel.volume = 0.19
      }
      if (amount > 0.21 && amount <= 0.30) {
        console.log('hel amount 3')
        hel.volume = 0.29
      }
      if (amount > 0.31 && amount <= 0.40) {
        console.log('hel amount 4')
        hel.volume = 0.39
      }
      if (amount > 0.41 && amount <= 0.50) {
        console.log('hel amount 4')
        hel.volume = 0.49
      }
      if (amount > 0.51 && amount <= 0.60) {
        console.log('hel amount  5')
        hel.volume = 0.59
      }
      if (amount > 0.61 && amount <= 0.70) {
        console.log('hel amount 6')
        hel.volume = 0.69
      }
      if (amount > 0.71 && amount <= 0.80) {
        console.log('hel amount 7')
        hel.volume = 0.79
      }
      if (amount > 0.81 && amount <= 0.90) {
        console.log('hel amount 8')
        hel.volume = 0.89
      }
      if (amount > 0.91 && amount <= 1) {
        console.log('hel amount 9')
        hel.volume = 1
      }

    }
    // four
    if (sound_each === 'ut') {
      console.log('inner ut')
      if (amount == '0') {
        console.log('ut  0')
        ut.volume = 0
      }
      if (amount > 0 && amount <= 0.10) {
        console.log('ut amount  1')
        ut.volume = 0.09
      }
      if (amount > 0.11 && amount <= 0.20) {
        console.log('ut amount 2')
        ut.volume = 0.19
      }
      if (amount > 0.21 && amount <= 0.30) {
        console.log('ut amount 3')
        ut.volume = 0.29
      }
      if (amount > 0.31 && amount <= 0.40) {
        console.log('ut amount 4')
        ut.volume = 0.39
      }
      if (amount > 0.41 && amount <= 0.50) {
        console.log('ut amount 4')
        ut.volume = 0.49
      }
      if (amount > 0.51 && amount <= 0.60) {
        console.log('ut amount  5')
        ut.volume = 0.59
      }
      if (amount > 0.61 && amount <= 0.70) {
        console.log('ut amount 6')
        ut.volume = 0.69
      }
      if (amount > 0.71 && amount <= 0.80) {
        console.log('ut amount 7')
        ut.volume = 0.79
      }
      if (amount > 0.81 && amount <= 0.90) {
        console.log('ut amount 8')
        ut.volume = 0.89
      }
      if (amount > 0.91 && amount <= 1) {
        console.log('ut amount 9')
        ut.volume = 1
      }

    }

    // five
    if (sound_each === 're') {
      console.log('inner re')
      if (amount == '0') {
        console.log('re  0')
        re.volume = 0
      }
      if (amount > 0 && amount <= 0.10) {
        console.log('re amount  1')
        re.volume = 0.09
      }
      if (amount > 0.11 && amount <= 0.20) {
        console.log('re amount 2')
        re.volume = 0.19
      }
      if (amount > 0.21 && amount <= 0.30) {
        console.log('re amount 3')
        re.volume = 0.29
      }
      if (amount > 0.31 && amount <= 0.40) {
        console.log('re amount 4')
        re.volume = 0.39
      }
      if (amount > 0.41 && amount <= 0.50) {
        console.log('re amount 4')
        re.volume = 0.49
      }
      if (amount > 0.51 && amount <= 0.60) {
        console.log('re amount  5')
        re.volume = 0.59
      }
      if (amount > 0.61 && amount <= 0.70) {
        console.log('re amount 6')
        re.volume = 0.69
      }
      if (amount > 0.71 && amount <= 0.80) {
        console.log('re amount 7')
        re.volume = 0.79
      }
      if (amount > 0.81 && amount <= 0.90) {
        console.log('re amount 8')
        re.volume = 0.89
      }
      if (amount > 0.91 && amount <= 1) {
        console.log('re amount 9')
        re.volume = 1
      }

    }

    // six
    if (sound_each === 'mi') {
      console.log('inner mi')
      if (amount == '0') {
        console.log('mi  0')
        mi.volume = 0
      }
      if (amount > 0 && amount <= 0.10) {
        console.log('mi amount  1')
        mi.volume = 0.09
      }
      if (amount > 0.11 && amount <= 0.20) {
        console.log('mi amount 2')
        mi.volume = 0.19
      }
      if (amount > 0.21 && amount <= 0.30) {
        console.log('mi amount 3')
        mi.volume = 0.29
      }
      if (amount > 0.31 && amount <= 0.40) {
        console.log('mi amount 4')
        mi.volume = 0.39
      }
      if (amount > 0.41 && amount <= 0.50) {
        console.log('mi amount 4')
        mi.volume = 0.49
      }
      if (amount > 0.51 && amount <= 0.60) {
        console.log('mi amount  5')
        mi.volume = 0.59
      }
      if (amount > 0.61 && amount <= 0.70) {
        console.log('mi amount 6')
        mi.volume = 0.69
      }
      if (amount > 0.71 && amount <= 0.80) {
        console.log('mi amount 7')
        mi.volume = 0.79
      }
      if (amount > 0.81 && amount <= 0.90) {
        console.log('mi amount 8')
        mi.volume = 0.89
      }
      if (amount > 0.91 && amount <= 1) {
        console.log('mi amount 9')
        mi.volume = 1
      }

    }

    // seven
    if (sound_each === 'fa') {
      console.log('inner fa')
      if (amount == '0') {
        console.log('fa  0')
        fa.volume = 0
      }
      if (amount > 0 && amount <= 0.10) {
        console.log('fa amount  1')
        fa.volume = 0.09
      }
      if (amount > 0.11 && amount <= 0.20) {
        console.log('fa amount 2')
        fa.volume = 0.19
      }
      if (amount > 0.21 && amount <= 0.30) {
        console.log('fa amount 3')
        fa.volume = 0.29
      }
      if (amount > 0.31 && amount <= 0.40) {
        console.log('fa amount 4')
        fa.volume = 0.39
      }
      if (amount > 0.41 && amount <= 0.50) {
        console.log('fa amount 4')
        fa.volume = 0.49
      }
      if (amount > 0.51 && amount <= 0.60) {
        console.log('fa amount  5')
        fa.volume = 0.59
      }
      if (amount > 0.61 && amount <= 0.70) {
        console.log('fa amount 6')
        fa.volume = 0.69
      }
      if (amount > 0.71 && amount <= 0.80) {
        console.log('fa amount 7')
        fa.volume = 0.79
      }
      if (amount > 0.81 && amount <= 0.90) {
        console.log('fa amount 8')
        fa.volume = 0.89
      }
      if (amount > 0.91 && amount <= 1) {
        console.log('fa amount 9')
        fa.volume = 1
      }

    }

    // eight
    if (sound_each === 'sol') {
      console.log('inner sol')
      if (amount == '0') {
        console.log('sol  0')
        sol.volume = 0
      }
      if (amount > 0 && amount <= 0.10) {
        console.log('sol amount  1')
        sol.volume = 0.09
      }
      if (amount > 0.11 && amount <= 0.20) {
        console.log('sol amount 2')
        sol.volume = 0.19
      }
      if (amount > 0.21 && amount <= 0.30) {
        console.log('sol amount 3')
        sol.volume = 0.29
      }
      if (amount > 0.31 && amount <= 0.40) {
        console.log('sol amount 4')
        sol.volume = 0.39
      }
      if (amount > 0.41 && amount <= 0.50) {
        console.log('sol amount 4')
        sol.volume = 0.49
      }
      if (amount > 0.51 && amount <= 0.60) {
        console.log('sol amount  5')
        sol.volume = 0.59
      }
      if (amount > 0.61 && amount <= 0.70) {
        console.log('sol amount 6')
        sol.volume = 0.69
      }
      if (amount > 0.71 && amount <= 0.80) {
        console.log('sol amount 7')
        sol.volume = 0.79
      }
      if (amount > 0.81 && amount <= 0.90) {
        console.log('sol amount 8')
        sol.volume = 0.89
      }
      if (amount > 0.91 && amount <= 1) {
        console.log('sol amount 9')
        sol.volume = 1
      }

    }

    // nine
    if (sound_each === 'sol') {
      console.log('inner sol')
      if (amount == '0') {
        console.log('sol  0')
        sol.volume = 0
      }
      if (amount > 0 && amount <= 0.10) {
        console.log('sol amount  1')
        sol.volume = 0.09
      }
      if (amount > 0.11 && amount <= 0.20) {
        console.log('sol amount 2')
        sol.volume = 0.19
      }
      if (amount > 0.21 && amount <= 0.30) {
        console.log('sol amount 3')
        sol.volume = 0.29
      }
      if (amount > 0.31 && amount <= 0.40) {
        console.log('sol amount 4')
        sol.volume = 0.39
      }
      if (amount > 0.41 && amount <= 0.50) {
        console.log('sol amount 4')
        sol.volume = 0.49
      }
      if (amount > 0.51 && amount <= 0.60) {
        console.log('sol amount  5')
        sol.volume = 0.59
      }
      if (amount > 0.61 && amount <= 0.70) {
        console.log('sol amount 6')
        sol.volume = 0.69
      }
      if (amount > 0.71 && amount <= 0.80) {
        console.log('sol amount 7')
        sol.volume = 0.79
      }
      if (amount > 0.81 && amount <= 0.90) {
        console.log('sol amount 8')
        sol.volume = 0.89
      }
      if (amount > 0.91 && amount <= 1) {
        console.log('sol amount 9')
        sol.volume = 1
      }

    }
  };


  /* Volume Ends*/



  particlesJS("particles-js", {
    "particles": {
      "number": {
        "value": 216,
        "density": {
          "enable": true,
          "value_area": 1924.0944730386273
        }
      },
      "color": {
        "value": "#cc29ff"
      },
      "shape": {
        "type": "circle",
        "stroke": {
          "width": 0,
          "color": "#cd6acd"
        },
        "polygon": {
          "nb_sides": 6
        },
        "image": {
          "src": "img/github.svg",
          "width": 100,
          "height": 100
        }
      },
      "opacity": {
        "value": 0.5,
        "random": false,
        "anim": {
          "enable": true,
          "speed": 0.16241544246026904,
          "opacity_min": 0.024362316369040352,
          "sync": true
        }
      },
      "size": {
        "value": 12.02559045649142,
        "random": false,
        "anim": {
          "enable": true,
          "speed": 7.308694910712106,
          "size_min": 0.1,
          "sync": true
        }
      },
      "line_linked": {
        "enable": true,
        "distance": 176.3753266952075,
        "color": "#8707fa",
        "opacity": 0.26456299004281125,
        "width": 4
      },
      "move": {
        "enable": true,
        "speed": 0.5,
        "direction": "top",
        "random": false,
        "straight": false,
        "out_mode": "bounce",
        "bounce": false,
        "attract": {
          "enable": true,
          "rotateX": 2604.1872173865,
          "rotateY": 3551.164387345227
        }
      }
    },
    "interactivity": {
      "detect_on": "canvas",
      "events": {
        "onhover": {
          "enable": true,
          "mode": "grab"
        },
        "onclick": {
          "enable": true,
          "mode": "bubble"
        },
        "resize": true
      },
      "modes": {
        "grab": {
          "distance": 400,
          "line_linked": {
            "opacity": 1
          }
        },
        "bubble": {
          "distance": 280.1666382439641,
          "size": 146.17389821424212,
          "duration": 4.547632388887532,
          "opacity": 0.25986470793643046,
          "speed": 3
        },
        "repulse": {
          "distance": 200,
          "duration": 0.4
        },
        "push": {
          "particles_nb": 4
        },
        "remove": {
          "particles_nb": 2
        }
      }
    },
    "retina_detect": true
  });

});






function rotateForEver($elem, speed, direction, rotator) {
  if (rotator === void (0)) {
    rotator = $({ deg: 0 });
  } else {
    rotator.get(0).deg = 0;
  }

  return rotator.animate(
    { deg: 360 },
    {
      duration: speed,
      easing: 'linear',
      step: function (now) {
        $elem.css({ transform: 'rotate(' + now * direction + 'deg)' });


      },
      complete: function () {
        rotateForEver($elem, speed, direction, rotator);

      },
      progress: function (e) {

      }
    }
  );
}
$(function () {

  $('.wheel').each(function (i) {
    $(this).css({ opacity: ((i + 1) * 8) / 100 });

    r = rotateForEver($(this), 2000000 * (i + 1), Math.tan(i));

  });



});