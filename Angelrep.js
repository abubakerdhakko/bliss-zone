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
      eval($(this).attr('class').split(' ')[1]).volume = 0
      playsnd = true;

      console.log('xaaaaa 10')
    } else {
      playsnd = false;
      eval($(this).attr('class').split(' ')[1]).stop();
    }

  });




  /* Volume Starts*/

  this.handleVolumeChange = function (val) {
    var element = document.getElementById("slider99");
    console.log('val', val)

    // element.innerHTML = val;

    volume = Number(val) / 100;
    console.log('volume', volume)
    volumeNode.gain.value = volume;
  }
  this.updateTextInput = function (idForVal, val) {
    document.getElementById(idForVal).value = val;
  }

  $(document).ready(function () {

    this.playSoundEach = function (animal, amount) {

      var sound_each = animal;
      sound_each.volume = amount;


      console.log('sound_each', sound_each, "amount", amount)
      // var masterVolume = document.getElementById('masterAudio').value;
      // var master_vol = masterVolume
      // if (global_volume == true) {
      //   if (master_vol > amount) {
      //     sound_each.volume = amount;
      //   }
      //   if (master_vol < amount) {
      //     sound_each.volume = master_vol;
      //   }
      //   console.log('master_vol', master_vol, "amount", amount)
      // }
    };
  });



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