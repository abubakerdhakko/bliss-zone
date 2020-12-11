

var carrier_freq = 250;
var beat_freq = 10;
var isPlaying = false;
var left_osc, right_osc;
var volume = .5;
var AudioContext = window.AudioContext || window.webkitAudioContext;

var cntx = new AudioContext();

var merger = cntx.createChannelMerger(2);

var volumeNode = cntx.createGain();
volumeNode.gain.value = volume;

merger.connect(volumeNode);
volumeNode.connect(cntx.destination);

function toggleSound() {
  if (isPlaying) {
    isPlaying = false;
    right_osc.stop();
    left_osc.stop();
  } else {
    //the oscillators are created here because once they are stopped they can not 
    //be started again.
    left_osc = cntx.createOscillator();
    right_osc = cntx.createOscillator();
    setFreqs();
    right_osc.connect(merger, 0, 0);
    left_osc.connect(merger, 0, 1);
    right_osc.start();
    left_osc.start();
    isPlaying = true;
  }
}

function setFreqs() {
  if (typeof right_osc != "undefined") {
    right_osc.frequency.value = carrier_freq;
    left_osc.frequency.value = carrier_freq + beat_freq;
  }
}



function handleVolumeChange(val) {



  var element = document.getElementById("volumeLabel");
  element.innerHTML = val;
  volume = Number(val)/100;
  volumeNode.gain.value = volume;
}

// function handleCarrierChange(val) {
//   var element = document.getElementById("carrierLabel");
//   element.innerHTML = val;
//   carrier_freq = Number(val);
//   setFreqs();
// }

// function handleBeatChange(val) {
//   var element = document.getElementById("beatLabel");
//   element.innerHTML = val;
//   beat_freq = Number(val);
//   setFreqs();
// }

// function handleVolumeChange(val) {
//   var element = document.getElementById("volumeLabel");
//   element.innerHTML = val;
//   volume = Number(val)/100;
//   volumeNode.gain.value = volume;
// }

function handleCarrierChange(val) {
  var element = document.getElementById("carrierLabel");
  element.innerHTML = val;
  carrier_freq = Number(val);
  setFreqs();
}

function handleBeatChange(val) {
  var element = document.getElementById("beatLabel");
  element.innerHTML = val;
  beat_freq = Number(val);
  setFreqs();
}