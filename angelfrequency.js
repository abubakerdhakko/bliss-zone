var mc = null;

$(function () {

  var attack_val = 2;
  var release_val = 2;

  var angelone = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 111,
      attack: attack_val,
      release: release_val
    }
  });

  var angeltwo = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 222,
      attack: attack_val,
      release: release_val
    }
  });

  var angelthree = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 333,
      attack: attack_val,
      release: release_val
    }
  });

  var angelfour = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 444,
      attack: attack_val,
      release: release_val
    }
  });

  var angelfive = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 555,
      attack: attack_val,
      release: release_val
    }
  });

  var angelsix = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 666,
      attack: attack_val,
      release: release_val

    }
  });

  var angelseven = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 777,
      attack: attack_val,
      release: release_val
    }
  });

  var angeleight = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 888,
      attack: attack_val,
      release: release_val
    }
  });

  var angelnine = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 999,
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
  });
  var brain = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 315.8,
      attack: attack_val,
      release: release_val
    }
  });

  var fat_cells = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 295.8,
      attack: attack_val,
      release: release_val
    }
  });

  var muscles = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 888,
      attack: attack_val,
      release: release_val
    }
  });

  var bone = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 777,
      attack: attack_val,
      release: release_val
    }
  });

  var throat = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 666,
      attack: attack_val,
      release: release_val
    }
  });

  var heart = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 555,
      attack: attack_val,
      release: release_val
    }
  });

  var bone = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 444,
      attack: attack_val,
      release: release_val
    }
  });

  var solar = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 333,
      attack: attack_val,
      release: release_val
    }
  });
  var orange = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 222,
      attack: attack_val,
      release: release_val
    }
  });

  var red = new Pizzicato.Sound({
    source: 'wave',
    options: {
      frequency: 111,
      attack: attack_val,
      release: release_val
    }
  });



  //////////// Function /////////////////

  $('.button').click(function () {
    $(this).toggleClass('playing');
    if ($(this).hasClass('playing')) {
      eval($(this).attr('class').split(' ')[1]).play();
      // eval($(this).attr('class').split(' ')[1]).volume = 1

    } else {
      eval($(this).attr('class').split(' ')[1]).stop();
    }

  });


  $('#volume').on('change', function () {
    $('#button').prop("volume", this.value);
  });


  /////////////////// when playing volume control ///////////////

  this.playSoundEach = function (animal, amount) {
    var sound_each = animal;
    // var amount_each = amount * 9
    // amount = amount_each
    // angeltwo.volume = amount
    console.log("amount_each", amount)

    // console.log('sound_each', sound_each, "sound_each", amount)
    // one
    if (sound_each === 'angelone') {
      console.log('inner angelone')
      if (amount == '0') {
        console.log('angelone  0')
        angelone.volume = 0
      }
      if (amount > 0 && amount <= 0.10) {
        console.log('angelone amount  1')
        angelone.volume = 0.09
      }
      if (amount > 0.11 && amount <= 0.20) {
        console.log('angelone amount 2')
        angelone.volume = 0.19
      }
      if (amount > 0.21 && amount <= 0.30) {
        console.log('angelone amount 3')
        angelone.volume = 0.29
      }
      if (amount > 0.31 && amount <= 0.40) {
        console.log('angelone amount 4')
        angelone.volume = 0.39
      }
      if (amount > 0.41 && amount <= 0.50) {
        console.log('angelone amount 4')
        angelone.volume = 0.49
      }
      if (amount > 0.51 && amount <= 0.60) {
        console.log('angelone amount  5')
        angelone.volume = 0.59
      }
      if (amount > 0.61 && amount <= 0.70) {
        console.log('angelone amount 6')
        angelone.volume = 0.69
      }
      if (amount > 0.71 && amount <= 0.80) {
        console.log('angelone amount 7')
        angelone.volume = 0.79
      }
      if (amount > 0.81 && amount <= 0.90) {
        console.log('angelone amount 8')
        angelone.volume = 0.89
      }
      if (amount > 0.91 && amount <= 1) {
        console.log('angelone amount 9')
        angelone.volume = 1
      }

    }
    // two
    if (sound_each === 'angeltwo') {
      console.log('inner angeltwo')
      if (amount == '0') {
        console.log('angeltwo  0')
        angeltwo.volume = 0
      }
      if (amount > 0 && amount <= 0.10) {
        console.log('angeltwo amount  1')
        angeltwo.volume = 0.09
      }
      if (amount > 0.11 && amount <= 0.20) {
        console.log('angeltwo amount 2')
        angeltwo.volume = 0.19
      }
      if (amount > 0.21 && amount <= 0.30) {
        console.log('angeltwo amount 3')
        angeltwo.volume = 0.29
      }
      if (amount > 0.31 && amount <= 0.40) {
        console.log('angeltwo amount 4')
        angeltwo.volume = 0.39
      }
      if (amount > 0.41 && amount <= 0.50) {
        console.log('angeltwo amount 4')
        angeltwo.volume = 0.49
      }
      if (amount > 0.51 && amount <= 0.60) {
        console.log('angeltwo amount  5')
        angeltwo.volume = 0.59
      }
      if (amount > 0.61 && amount <= 0.70) {
        console.log('angeltwo amount 6')
        angeltwo.volume = 0.69
      }
      if (amount > 0.71 && amount <= 0.80) {
        console.log('angeltwo amount 7')
        angeltwo.volume = 0.79
      }
      if (amount > 0.81 && amount <= 0.90) {
        console.log('angeltwo amount 8')
        angeltwo.volume = 0.89
      }
      if (amount > 0.91 && amount <= 1) {
        console.log('angeltwo amount 9')
        angeltwo.volume = 1
      }

    }
    // three
    if (sound_each === 'angelthree') {
      console.log('inner angelthree')
      if (amount == '0') {
        console.log('angelthree  0')
        angelthree.volume = 0
      }
      if (amount > 0 && amount <= 0.10) {
        console.log('angelthree amount  1')
        angelthree.volume = 0.09
      }
      if (amount > 0.11 && amount <= 0.20) {
        console.log('angelthree amount 2')
        angelthree.volume = 0.19
      }
      if (amount > 0.21 && amount <= 0.30) {
        console.log('angelthree amount 3')
        angelthree.volume = 0.29
      }
      if (amount > 0.31 && amount <= 0.40) {
        console.log('angelthree amount 4')
        angelthree.volume = 0.39
      }
      if (amount > 0.41 && amount <= 0.50) {
        console.log('angelthree amount 4')
        angelthree.volume = 0.49
      }
      if (amount > 0.51 && amount <= 0.60) {
        console.log('angelthree amount  5')
        angelthree.volume = 0.59
      }
      if (amount > 0.61 && amount <= 0.70) {
        console.log('angelthree amount 6')
        angelthree.volume = 0.69
      }
      if (amount > 0.71 && amount <= 0.80) {
        console.log('angelthree amount 7')
        angelthree.volume = 0.79
      }
      if (amount > 0.81 && amount <= 0.90) {
        console.log('angelthree amount 8')
        angelthree.volume = 0.89
      }
      if (amount > 0.91 && amount <= 1) {
        console.log('angelthree amount 9')
        angelthree.volume = 1
      }

    }
    // four
    if (sound_each === 'angelfour') {
      console.log('inner angelfour')
      if (amount == '0') {
        console.log('angelfour  0')
        angelfour.volume = 0
      }
      if (amount > 0 && amount <= 0.10) {
        console.log('angelfour amount  1')
        angelfour.volume = 0.09
      }
      if (amount > 0.11 && amount <= 0.20) {
        console.log('angelfour amount 2')
        angelfour.volume = 0.19
      }
      if (amount > 0.21 && amount <= 0.30) {
        console.log('angelfour amount 3')
        angelfour.volume = 0.29
      }
      if (amount > 0.31 && amount <= 0.40) {
        console.log('angelfour amount 4')
        angelfour.volume = 0.39
      }
      if (amount > 0.41 && amount <= 0.50) {
        console.log('angelfour amount 4')
        angelfour.volume = 0.49
      }
      if (amount > 0.51 && amount <= 0.60) {
        console.log('angelfour amount  5')
        angelfour.volume = 0.59
      }
      if (amount > 0.61 && amount <= 0.70) {
        console.log('angelfour amount 6')
        angelfour.volume = 0.69
      }
      if (amount > 0.71 && amount <= 0.80) {
        console.log('angelfour amount 7')
        angelfour.volume = 0.79
      }
      if (amount > 0.81 && amount <= 0.90) {
        console.log('angelfour amount 8')
        angelfour.volume = 0.89
      }
      if (amount > 0.91 && amount <= 1) {
        console.log('angelfour amount 9')
        angelfour.volume = 1
      }

    }
    
    // five
    if (sound_each === 'angelfive') {
      console.log('inner angelfive')
      if (amount == '0') {
        console.log('angelfive  0')
        angelfive.volume = 0
      }
      if (amount > 0 && amount <= 0.10) {
        console.log('angelfive amount  1')
        angelfive.volume = 0.09
      }
      if (amount > 0.11 && amount <= 0.20) {
        console.log('angelfive amount 2')
        angelfive.volume = 0.19
      }
      if (amount > 0.21 && amount <= 0.30) {
        console.log('angelfive amount 3')
        angelfive.volume = 0.29
      }
      if (amount > 0.31 && amount <= 0.40) {
        console.log('angelfive amount 4')
        angelfive.volume = 0.39
      }
      if (amount > 0.41 && amount <= 0.50) {
        console.log('angelfive amount 4')
        angelfive.volume = 0.49
      }
      if (amount > 0.51 && amount <= 0.60) {
        console.log('angelfive amount  5')
        angelfive.volume = 0.59
      }
      if (amount > 0.61 && amount <= 0.70) {
        console.log('angelfive amount 6')
        angelfive.volume = 0.69
      }
      if (amount > 0.71 && amount <= 0.80) {
        console.log('angelfive amount 7')
        angelfive.volume = 0.79
      }
      if (amount > 0.81 && amount <= 0.90) {
        console.log('angelfive amount 8')
        angelfive.volume = 0.89
      }
      if (amount > 0.91 && amount <= 1) {
        console.log('angelfive amount 9')
        angelfive.volume = 1
      }

    }
    
    // six
    if (sound_each === 'angelsix') {
      console.log('inner angelsix')
      if (amount == '0') {
        console.log('angelsix  0')
        angelsix.volume = 0
      }
      if (amount > 0 && amount <= 0.10) {
        console.log('angelsix amount  1')
        angelsix.volume = 0.09
      }
      if (amount > 0.11 && amount <= 0.20) {
        console.log('angelsix amount 2')
        angelsix.volume = 0.19
      }
      if (amount > 0.21 && amount <= 0.30) {
        console.log('angelsix amount 3')
        angelsix.volume = 0.29
      }
      if (amount > 0.31 && amount <= 0.40) {
        console.log('angelsix amount 4')
        angelsix.volume = 0.39
      }
      if (amount > 0.41 && amount <= 0.50) {
        console.log('angelsix amount 4')
        angelsix.volume = 0.49
      }
      if (amount > 0.51 && amount <= 0.60) {
        console.log('angelsix amount  5')
        angelsix.volume = 0.59
      }
      if (amount > 0.61 && amount <= 0.70) {
        console.log('angelsix amount 6')
        angelsix.volume = 0.69
      }
      if (amount > 0.71 && amount <= 0.80) {
        console.log('angelsix amount 7')
        angelsix.volume = 0.79
      }
      if (amount > 0.81 && amount <= 0.90) {
        console.log('angelsix amount 8')
        angelsix.volume = 0.89
      }
      if (amount > 0.91 && amount <= 1) {
        console.log('angelsix amount 9')
        angelsix.volume = 1
      }

    }
    
    // seven
    if (sound_each === 'angelseven') {
      console.log('inner angelseven')
      if (amount == '0') {
        console.log('angelseven  0')
        angelseven.volume = 0
      }
      if (amount > 0 && amount <= 0.10) {
        console.log('angelseven amount  1')
        angelseven.volume = 0.09
      }
      if (amount > 0.11 && amount <= 0.20) {
        console.log('angelseven amount 2')
        angelseven.volume = 0.19
      }
      if (amount > 0.21 && amount <= 0.30) {
        console.log('angelseven amount 3')
        angelseven.volume = 0.29
      }
      if (amount > 0.31 && amount <= 0.40) {
        console.log('angelseven amount 4')
        angelseven.volume = 0.39
      }
      if (amount > 0.41 && amount <= 0.50) {
        console.log('angelseven amount 4')
        angelseven.volume = 0.49
      }
      if (amount > 0.51 && amount <= 0.60) {
        console.log('angelseven amount  5')
        angelseven.volume = 0.59
      }
      if (amount > 0.61 && amount <= 0.70) {
        console.log('angelseven amount 6')
        angelseven.volume = 0.69
      }
      if (amount > 0.71 && amount <= 0.80) {
        console.log('angelseven amount 7')
        angelseven.volume = 0.79
      }
      if (amount > 0.81 && amount <= 0.90) {
        console.log('angelseven amount 8')
        angelseven.volume = 0.89
      }
      if (amount > 0.91 && amount <= 1) {
        console.log('angelseven amount 9')
        angelseven.volume = 1
      }

    }
    
    // eight
    if (sound_each === 'angeleight') {
      console.log('inner angeleight')
      if (amount == '0') {
        console.log('angeleight  0')
        angeleight.volume = 0
      }
      if (amount > 0 && amount <= 0.10) {
        console.log('angeleight amount  1')
        angeleight.volume = 0.09
      }
      if (amount > 0.11 && amount <= 0.20) {
        console.log('angeleight amount 2')
        angeleight.volume = 0.19
      }
      if (amount > 0.21 && amount <= 0.30) {
        console.log('angeleight amount 3')
        angeleight.volume = 0.29
      }
      if (amount > 0.31 && amount <= 0.40) {
        console.log('angeleight amount 4')
        angeleight.volume = 0.39
      }
      if (amount > 0.41 && amount <= 0.50) {
        console.log('angeleight amount 4')
        angeleight.volume = 0.49
      }
      if (amount > 0.51 && amount <= 0.60) {
        console.log('angeleight amount  5')
        angeleight.volume = 0.59
      }
      if (amount > 0.61 && amount <= 0.70) {
        console.log('angeleight amount 6')
        angeleight.volume = 0.69
      }
      if (amount > 0.71 && amount <= 0.80) {
        console.log('angeleight amount 7')
        angeleight.volume = 0.79
      }
      if (amount > 0.81 && amount <= 0.90) {
        console.log('angeleight amount 8')
        angeleight.volume = 0.89
      }
      if (amount > 0.91 && amount <= 1) {
        console.log('angeleight amount 9')
        angeleight.volume = 1
      }

    }
    
    // nine
    if (sound_each === 'angelnine') {
      console.log('inner angelnine')
      if (amount == '0') {
        console.log('angelnine  0')
        angelnine.volume = 0
      }
      if (amount > 0 && amount <= 0.10) {
        console.log('angelnine amount  1')
        angelnine.volume = 0.09
      }
      if (amount > 0.11 && amount <= 0.20) {
        console.log('angelnine amount 2')
        angelnine.volume = 0.19
      }
      if (amount > 0.21 && amount <= 0.30) {
        console.log('angelnine amount 3')
        angelnine.volume = 0.29
      }
      if (amount > 0.31 && amount <= 0.40) {
        console.log('angelnine amount 4')
        angelnine.volume = 0.39
      }
      if (amount > 0.41 && amount <= 0.50) {
        console.log('angelnine amount 4')
        angelnine.volume = 0.49
      }
      if (amount > 0.51 && amount <= 0.60) {
        console.log('angelnine amount  5')
        angelnine.volume = 0.59
      }
      if (amount > 0.61 && amount <= 0.70) {
        console.log('angelnine amount 6')
        angelnine.volume = 0.69
      }
      if (amount > 0.71 && amount <= 0.80) {
        console.log('angelnine amount 7')
        angelnine.volume = 0.79
      }
      if (amount > 0.81 && amount <= 0.90) {
        console.log('angelnine amount 8')
        angelnine.volume = 0.89
      }
      if (amount > 0.91 && amount <= 1) {
        console.log('angelnine amount 9')
        angelnine.volume = 1
      }

    }
    
  };

  this.updateTextInput = function (idForVal, val) {
    document.getElementById(idForVal).value = val;
  }

  /////////////////////////////////////



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