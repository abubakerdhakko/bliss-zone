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

$(function () {

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
      frequency: 285,
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
      frequency: 417,
      attack: attack_val,
      release: release_val
    }
  });

  var mi = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 528,
      attack: attack_val,
      release: release_val
    }
  });

  var fa = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 639,
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
      frequency: 852,
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




  /* Volume Starts*/

  this.updateTextInput = function (idForVal, val) {
    document.getElementById(idForVal).value = val;
  }


  /////////////////// when playing volume control ///////////////

  this.playSoundEach = function (animal, amount) {
    var sound_each = animal;
    // var amount_each = amount * 9
    // amount = amount_each
    // adrenals.volume = amount
    console.log("amount_each", amount)

    // console.log('sound_each', sound_each, "sound_each", amount)
    // one
    if (sound_each === 'blood') {
      console.log('inner blood')
      if (amount == '0') {
        console.log('blood  0')
        blood.volume = 0
      }
      if (amount > 0 && amount <= 0.10) {
        console.log('blood amount  1')
        blood.volume = 0.09
      }
      if (amount > 0.11 && amount <= 0.20) {
        console.log('blood amount 2')
        blood.volume = 0.19
      }
      if (amount > 0.21 && amount <= 0.30) {
        console.log('blood amount 3')
        blood.volume = 0.29
      }
      if (amount > 0.31 && amount <= 0.40) {
        console.log('blood amount 4')
        blood.volume = 0.39
      }
      if (amount > 0.41 && amount <= 0.50) {
        console.log('blood amount 4')
        blood.volume = 0.49
      }
      if (amount > 0.51 && amount <= 0.60) {
        console.log('blood amount  5')
        blood.volume = 0.59
      }
      if (amount > 0.61 && amount <= 0.70) {
        console.log('blood amount 6')
        blood.volume = 0.69
      }
      if (amount > 0.71 && amount <= 0.80) {
        console.log('blood amount 7')
        blood.volume = 0.79
      }
      if (amount > 0.81 && amount <= 0.90) {
        console.log('blood amount 8')
        blood.volume = 0.89
      }
      if (amount > 0.91 && amount <= 1) {
        console.log('blood amount 9')
        blood.volume = 1
      }

    }
    // two
    if (sound_each === 'adrenals') {
      console.log('inner adrenals')
      if (amount == '0') {
        console.log('adrenals  0')
        adrenals.volume = 0
      }
      if (amount > 0 && amount <= 0.10) {
        console.log('adrenals amount  1')
        adrenals.volume = 0.09
      }
      if (amount > 0.11 && amount <= 0.20) {
        console.log('adrenals amount 2')
        adrenals.volume = 0.19
      }
      if (amount > 0.21 && amount <= 0.30) {
        console.log('adrenals amount 3')
        adrenals.volume = 0.29
      }
      if (amount > 0.31 && amount <= 0.40) {
        console.log('adrenals amount 4')
        adrenals.volume = 0.39
      }
      if (amount > 0.41 && amount <= 0.50) {
        console.log('adrenals amount 4')
        adrenals.volume = 0.49
      }
      if (amount > 0.51 && amount <= 0.60) {
        console.log('adrenals amount  5')
        adrenals.volume = 0.59
      }
      if (amount > 0.61 && amount <= 0.70) {
        console.log('adrenals amount 6')
        adrenals.volume = 0.69
      }
      if (amount > 0.71 && amount <= 0.80) {
        console.log('adrenals amount 7')
        adrenals.volume = 0.79
      }
      if (amount > 0.81 && amount <= 0.90) {
        console.log('adrenals amount 8')
        adrenals.volume = 0.89
      }
      if (amount > 0.91 && amount <= 1) {
        console.log('adrenals amount 9')
        adrenals.volume = 1
      }

    }
    // three
    if (sound_each === 'kidney') {
      console.log('inner kidney')
      if (amount == '0') {
        console.log('kidney  0')
        kidney.volume = 0
      }
      if (amount > 0 && amount <= 0.10) {
        console.log('kidney amount  1')
        kidney.volume = 0.09
      }
      if (amount > 0.11 && amount <= 0.20) {
        console.log('kidney amount 2')
        kidney.volume = 0.19
      }
      if (amount > 0.21 && amount <= 0.30) {
        console.log('kidney amount 3')
        kidney.volume = 0.29
      }
      if (amount > 0.31 && amount <= 0.40) {
        console.log('kidney amount 4')
        kidney.volume = 0.39
      }
      if (amount > 0.41 && amount <= 0.50) {
        console.log('kidney amount 4')
        kidney.volume = 0.49
      }
      if (amount > 0.51 && amount <= 0.60) {
        console.log('kidney amount  5')
        kidney.volume = 0.59
      }
      if (amount > 0.61 && amount <= 0.70) {
        console.log('kidney amount 6')
        kidney.volume = 0.69
      }
      if (amount > 0.71 && amount <= 0.80) {
        console.log('kidney amount 7')
        kidney.volume = 0.79
      }
      if (amount > 0.81 && amount <= 0.90) {
        console.log('kidney amount 8')
        kidney.volume = 0.89
      }
      if (amount > 0.91 && amount <= 1) {
        console.log('kidney amount 9')
        kidney.volume = 1
      }

    }
    // four
    if (sound_each === 'kidney') {
      console.log('inner kidney')
      if (amount == '0') {
        console.log('kidney  0')
        kidney.volume = 0
      }
      if (amount > 0 && amount <= 0.10) {
        console.log('kidney amount  1')
        kidney.volume = 0.09
      }
      if (amount > 0.11 && amount <= 0.20) {
        console.log('kidney amount 2')
        kidney.volume = 0.19
      }
      if (amount > 0.21 && amount <= 0.30) {
        console.log('kidney amount 3')
        kidney.volume = 0.29
      }
      if (amount > 0.31 && amount <= 0.40) {
        console.log('kidney amount 4')
        kidney.volume = 0.39
      }
      if (amount > 0.41 && amount <= 0.50) {
        console.log('kidney amount 4')
        kidney.volume = 0.49
      }
      if (amount > 0.51 && amount <= 0.60) {
        console.log('kidney amount  5')
        kidney.volume = 0.59
      }
      if (amount > 0.61 && amount <= 0.70) {
        console.log('kidney amount 6')
        kidney.volume = 0.69
      }
      if (amount > 0.71 && amount <= 0.80) {
        console.log('kidney amount 7')
        kidney.volume = 0.79
      }
      if (amount > 0.81 && amount <= 0.90) {
        console.log('kidney amount 8')
        kidney.volume = 0.89
      }
      if (amount > 0.91 && amount <= 1) {
        console.log('kidney amount 9')
        kidney.volume = 1
      }

    }

    // five
    if (sound_each === 'bladder') {
      console.log('inner bladder')
      if (amount == '0') {
        console.log('bladder  0')
        bladder.volume = 0
      }
      if (amount > 0 && amount <= 0.10) {
        console.log('bladder amount  1')
        bladder.volume = 0.09
      }
      if (amount > 0.11 && amount <= 0.20) {
        console.log('bladder amount 2')
        bladder.volume = 0.19
      }
      if (amount > 0.21 && amount <= 0.30) {
        console.log('bladder amount 3')
        bladder.volume = 0.29
      }
      if (amount > 0.31 && amount <= 0.40) {
        console.log('bladder amount 4')
        bladder.volume = 0.39
      }
      if (amount > 0.41 && amount <= 0.50) {
        console.log('bladder amount 4')
        bladder.volume = 0.49
      }
      if (amount > 0.51 && amount <= 0.60) {
        console.log('bladder amount  5')
        bladder.volume = 0.59
      }
      if (amount > 0.61 && amount <= 0.70) {
        console.log('bladder amount 6')
        bladder.volume = 0.69
      }
      if (amount > 0.71 && amount <= 0.80) {
        console.log('bladder amount 7')
        bladder.volume = 0.79
      }
      if (amount > 0.81 && amount <= 0.90) {
        console.log('bladder amount 8')
        bladder.volume = 0.89
      }
      if (amount > 0.91 && amount <= 1) {
        console.log('bladder amount 9')
        bladder.volume = 1
      }

    }

    // six
    if (sound_each === 'intestines') {
      console.log('inner intestines')
      if (amount == '0') {
        console.log('intestines  0')
        intestines.volume = 0
      }
      if (amount > 0 && amount <= 0.10) {
        console.log('intestines amount  1')
        intestines.volume = 0.09
      }
      if (amount > 0.11 && amount <= 0.20) {
        console.log('intestines amount 2')
        intestines.volume = 0.19
      }
      if (amount > 0.21 && amount <= 0.30) {
        console.log('intestines amount 3')
        intestines.volume = 0.29
      }
      if (amount > 0.31 && amount <= 0.40) {
        console.log('intestines amount 4')
        intestines.volume = 0.39
      }
      if (amount > 0.41 && amount <= 0.50) {
        console.log('intestines amount 4')
        intestines.volume = 0.49
      }
      if (amount > 0.51 && amount <= 0.60) {
        console.log('intestines amount  5')
        intestines.volume = 0.59
      }
      if (amount > 0.61 && amount <= 0.70) {
        console.log('intestines amount 6')
        intestines.volume = 0.69
      }
      if (amount > 0.71 && amount <= 0.80) {
        console.log('intestines amount 7')
        intestines.volume = 0.79
      }
      if (amount > 0.81 && amount <= 0.90) {
        console.log('intestines amount 8')
        intestines.volume = 0.89
      }
      if (amount > 0.91 && amount <= 1) {
        console.log('intestines amount 9')
        intestines.volume = 1
      }

    }

    // seven
    if (sound_each === 'lungs') {
      console.log('inner lungs')
      if (amount == '0') {
        console.log('lungs  0')
        lungs.volume = 0
      }
      if (amount > 0 && amount <= 0.10) {
        console.log('lungs amount  1')
        lungs.volume = 0.09
      }
      if (amount > 0.11 && amount <= 0.20) {
        console.log('lungs amount 2')
        lungs.volume = 0.19
      }
      if (amount > 0.21 && amount <= 0.30) {
        console.log('lungs amount 3')
        lungs.volume = 0.29
      }
      if (amount > 0.31 && amount <= 0.40) {
        console.log('lungs amount 4')
        lungs.volume = 0.39
      }
      if (amount > 0.41 && amount <= 0.50) {
        console.log('lungs amount 4')
        lungs.volume = 0.49
      }
      if (amount > 0.51 && amount <= 0.60) {
        console.log('lungs amount  5')
        lungs.volume = 0.59
      }
      if (amount > 0.61 && amount <= 0.70) {
        console.log('lungs amount 6')
        lungs.volume = 0.69
      }
      if (amount > 0.71 && amount <= 0.80) {
        console.log('lungs amount 7')
        lungs.volume = 0.79
      }
      if (amount > 0.81 && amount <= 0.90) {
        console.log('lungs amount 8')
        lungs.volume = 0.89
      }
      if (amount > 0.91 && amount <= 1) {
        console.log('lungs amount 9')
        lungs.volume = 1
      }

    }

    // eight
    if (sound_each === 'colon') {
      console.log('inner colon')
      if (amount == '0') {
        console.log('colon  0')
        colon.volume = 0
      }
      if (amount > 0 && amount <= 0.10) {
        console.log('colon amount  1')
        colon.volume = 0.09
      }
      if (amount > 0.11 && amount <= 0.20) {
        console.log('colon amount 2')
        colon.volume = 0.19
      }
      if (amount > 0.21 && amount <= 0.30) {
        console.log('colon amount 3')
        colon.volume = 0.29
      }
      if (amount > 0.31 && amount <= 0.40) {
        console.log('colon amount 4')
        colon.volume = 0.39
      }
      if (amount > 0.41 && amount <= 0.50) {
        console.log('colon amount 4')
        colon.volume = 0.49
      }
      if (amount > 0.51 && amount <= 0.60) {
        console.log('colon amount  5')
        colon.volume = 0.59
      }
      if (amount > 0.61 && amount <= 0.70) {
        console.log('colon amount 6')
        colon.volume = 0.69
      }
      if (amount > 0.71 && amount <= 0.80) {
        console.log('colon amount 7')
        colon.volume = 0.79
      }
      if (amount > 0.81 && amount <= 0.90) {
        console.log('colon amount 8')
        colon.volume = 0.89
      }
      if (amount > 0.91 && amount <= 1) {
        console.log('colon amount 9')
        colon.volume = 1
      }

    }

    // nine
    if (sound_each === 'gall_bladder') {
      console.log('inner gall_bladder')
      if (amount == '0') {
        console.log('gall_bladder  0')
        gall_bladder.volume = 0
      }
      if (amount > 0 && amount <= 0.10) {
        console.log('gall_bladder amount  1')
        gall_bladder.volume = 0.09
      }
      if (amount > 0.11 && amount <= 0.20) {
        console.log('gall_bladder amount 2')
        gall_bladder.volume = 0.19
      }
      if (amount > 0.21 && amount <= 0.30) {
        console.log('gall_bladder amount 3')
        gall_bladder.volume = 0.29
      }
      if (amount > 0.31 && amount <= 0.40) {
        console.log('gall_bladder amount 4')
        gall_bladder.volume = 0.39
      }
      if (amount > 0.41 && amount <= 0.50) {
        console.log('gall_bladder amount 4')
        gall_bladder.volume = 0.49
      }
      if (amount > 0.51 && amount <= 0.60) {
        console.log('gall_bladder amount  5')
        gall_bladder.volume = 0.59
      }
      if (amount > 0.61 && amount <= 0.70) {
        console.log('gall_bladder amount 6')
        gall_bladder.volume = 0.69
      }
      if (amount > 0.71 && amount <= 0.80) {
        console.log('gall_bladder amount 7')
        gall_bladder.volume = 0.79
      }
      if (amount > 0.81 && amount <= 0.90) {
        console.log('gall_bladder amount 8')
        gall_bladder.volume = 0.89
      }
      if (amount > 0.91 && amount <= 1) {
        console.log('gall_bladder amount 9')
        gall_bladder.volume = 1
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