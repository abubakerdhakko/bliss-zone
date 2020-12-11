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
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
     <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> -->
  <link rel="stylesheet" href="./nature.css">
<link rel="stylesheet" href="./nature-player.css">
<link rel="stylesheet" href="./nature-style.css">


    <style>


        #rng {
            margin: 0px 0 20px 0;
            -webkit-appearance: none;
            background-color: #f5f6f8;
            height: 14px;
            width: 100%;
            margin: 10px auto;
            border-radius: 15px;
        }

        #rng:focus {
            outline: none;
        }

        .__range::-webkit-slider-thumb {
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

        .__rangee::-webkit-slider-thumb {
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


           #volume {
            margin: 30px 0 20px 0;
            -webkit-appearance: none;
            background-color: #f5f6f8;
            height: 14px;
            width: 100%;
            margin: 10px auto;
            box-shadow: none;
            border-radius: 15px;
        }

        #volume:focus {
            outline: none;
        }

        .__range1::-webkit-slider-thumb {
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

        .__range2::-webkit-slider-thumb {
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

        .__range3::-webkit-slider-thumb {
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

        .__range4::-webkit-slider-thumb {
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
            background: url('./assets/crop-btn/btn-4.png') center center no-repeat;
            /* cursor: pointer;
      -webkit-appearance: none;
      margin-top: -23px; */
        }

        .__range5::-webkit-slider-thumb {
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
            background: url('./assets/crop-btn/btn-5.png') center center no-repeat;
            /* cursor: pointer;
      -webkit-appearance: none;
      margin-top: -23px; */
        }

        .__range6::-webkit-slider-thumb {
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
            background: url('./assets/crop-btn/btn-6.png') center center no-repeat;
            /* cursor: pointer;
      -webkit-appearance: none;
      margin-top: -23px; */
        }

        .__range7::-webkit-slider-thumb {
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
            background: url('./assets/crop-btn/btn-7.png') center center no-repeat;
            /* cursor: pointer;
      -webkit-appearance: none;
      margin-top: -23px; */
        }


        .slider-ppt-3 {
            padding-top: 1.6rem;
        }

        .no-slider-ppt {
            padding-top: .45rem;
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
        .audio-div img{
            margin-top: 28px;
        }
         input.valueClass {
            background-color: transparent;
            border: none;
            color: white;
        }
        .audio-div h3{margin-top: -3px;}
        .audio-div{
            background: none;
            box-shadow: none;
            height: auto;
        }
         .audio-div:hover{
            background: none;
            box-shadow: none
         }
         .audio-div img {
    /* width: 130px; */
    /* width: 130px; */
    height: 90px;
    margin-top: 20px;
    opacity: 1;
}
.slider-ppt-3{    padding-top: 0.05rem;}


        :focus {
            outline: none;
        }

        input[type="range"] {
            -webkit-appearance: none;
            -moz-apperance: none;
            border-radius: 6px;
            height: 14px;
                /*background: linear-gradient(to right, orange 0%, orange 19.82%, transparent 19.82%, transparent 100%);*/
            background-image: -webkit-gradient(linear,
                    left top,
                    right top,
                    color-stop(0.15, #5ed2f0),
                    color-stop(0.15, #000000));
            width: 100%;
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
        #s0, #s1, #s2, #s3, #s4, #s5, #s6, #s7, #s8, #s9{
                float: left;
    clear: none;
    width: 100%;

        border-radius: 4px;
    margin: 0 0 19px !important;
    height: 8px !important;
    background: transparent;
    border: 1px solid #000;
    box-shadow: 1px 0 4px #000;
    border: none;

        }

        @media only screen and (max-width: 992px){
          .container{
            padding-left: 35px !important;
          }
        }

.icon--holder a{
        color: #fff;
    font-size: 47px;
    padding: 6px;
    overflow: hidden;
    border: 2px dotted #fff;
    width: 39px;
    height: 39px;
    font-size: 21px;
    border-radius: 50px;
    display: inline-block;
    line-height: 27px;
    margin: 20px 5px;
    opacity: 0.6;
        background: rgba(255,255,255,0.1);
}
.icon--holder a:hover,
.icon--holder a:focus{ color: #fff; opacity: 1;}
 
      
    </style>


     <link rel="stylesheet" type="text/css" href="bb_css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/scroll.css">
    <script type="text/javascript" src="bb_js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="bb_js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="bb_js/jquery.jscrollpane.min.js"></script>
    <script type="text/javascript" src="bb_js/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="bb_js/mousetrap.min.js"></script>

    <script type="text/javascript" id="sourcecode">
  $(function(){$('.scroll-pane').jScrollPane({mouseWheelSpeed: 19});});
  $(window).on("load resize",function() {$('.scroll-pane').jScrollPane({wheelSpeed: 19});});
</script>
<script type="text/javascript" src="bb_js/core.js"></script>
<script type="text/javascript" src="bb_js/csscoordinates.js"></script>
<script type="text/javascript" src="bb_js/displaycontroller.js"></script>
<script type="text/javascript" src="bb_js/placementcalculator.js"></script>
<script type="text/javascript" src="bb_js/tooltipcontroller.js"></script>
<script type="text/javascript" src="bb_js/utility.js"></script>
 <!-- <script src="./script_a.js"></script> -->
<link rel="stylesheet" type="text/css" href="bb_css/jquery.powertip.css">

  <link rel="stylesheet" href="stylesheet.css"> 
 <!--    <link rel="stylesheet" href="./style_a.css">
    <link rel="stylesheet" href="./plyr.css"> -->

    <script src="./binaural.js"></script>


<script>




var iNUMBERBANDS=10;
var bCALIBRATE=0;
var bMUTE=0;
var bMUTEsaved=0;
var bANIMATE=0;
var bNOWMOVING=0;
var bNOWMOVINGUP=1;
var bFINISHEDLOADING=0;
var bWEBAUDIO=0;
var bSUPPORTOGG=0;
var bSUPPORTMP3=0;
var bSUSPENDED=0;
var bSTARTMUTED=0;
var sSYNCHRO="0123456789";
var bPITCHRAN=0;
var bOSAUTO=0;
var iINITIALANIMATIONSPEED=32;
var fAUDIOFADETIME=0.15;
var timeOutOS = new Array();
var iTimer=-1;
var epoch=0;
var fLevelMultiplier=1.2;
var iAnimationFactor=1;
var iAnimationMode=1;
var iCurrentAnimationSpeed=iINITIALANIMATIONSPEED;
var timerTimeout, modulationTimeout, fadeTimeOut;
var interval = new Array();
var nextA = new Array();
var nextB = new Array();
var lastPlayedA = new Array();
var lastPlayedB = new Array();
var lastPlayedOS = [1,1,1,1,1,1,1,1,1,1];
var randomCounter=0;
var currentLevel = new Array();
var savedCurrentLevel = new Array();
var savedLevel = new Array();
var randomLevel = new Array();
var fMotionStates = new Array();
var cloneURL;
var detune=0;
var selSliders=[1,1,1,1,1,1,1,1,1,1,0];
var playbackFactor = new Array();
var iNowMovingTo=0;
var iFadeState=0;
var mmMin, mmMax;
mmMin=1;mmMax=0;
var nzSliderIndex = new Array();
var lastSlider;
var MAGICsettings='';
var uID='';
var uIDS='';
var gCarbMP3=[ 1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20 ];
var gCarbOGG=[ 0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19 ];
var gCarb;
var pitchTable=[1];

function enableButton(id,bEnable) {
  var el;
  for (var i = 0; i < id.length; ++i) {
    el=document.getElementById(id[i]);
    if (el) {
      if (bEnable) {
          el.style.pointerEvents = 'auto';
          $("#"+id[i]).removeClass("disabled");
          if (!id[i].localeCompare("speed"))  $("#speedText").removeClass("disabled");
          if (!id[i].localeCompare("mode"))  $("#modeText").removeClass("disabled");
        }
        else {
          if (el) el.style.pointerEvents = 'none';
          // $("#"+id[i]).addClass("disabled");
          // if (!id[i].localeCompare("speed"))  $("#speedText").addClass("disabled");
          // if (!id[i].localeCompare("mode"))  $("#modeText").addClass("disabled");
        }
    } 
  }
}

function activateButton(id,bActivate) { 
  if (bActivate) for (var i = 0; i < id.length; ++i) $("#"+id[i]).addClass("active");
  else for (var i = 0; i < id.length; ++i) $("#"+id[i]).removeClass("active");
}

function audibleButton(id,bAudible) { 
  if (!bAudible) for (var i = 0; i < id.length; ++i) $("#"+id[i]).addClass("inaudible");
  else for (var i = 0; i < id.length; ++i) $("#"+id[i]).removeClass("inaudible");
}

function msg(content) {document.getElementById('msg').innerHTML = content;}

function resumeContext(){
   context.resume(); 
   nowPlaying();
   window.removeEventListener('click', resumeContext);
   window.removeEventListener('touched', resumeContext);
   bSUSPENDED=0;
   $('.contextPlay').hide();
}

function nowPlaying(){
 if (bCALIBRATE==0) {msg("Now Playing..."); }
  else {msg("1. Increase your computer's volume until you hear the static noise. Then, 2. move a slider.");}
  enableButton(["reset","anim","mode","speed","volDown","volUp","mute","timer","calib","play0","play1","play2","play3","play4","play5","play6","play7","play8","play9"],1);
  audibleButton(["mode","speed"],0);
  enableSliders();  loadTimerFromURLAndStartTimer();
}


var stretch = [1.4,1.4,1.4,1.4,1.4,1.4,1.4,1.4,1.4,1.4];

// html5 audio
var  sourceFileA = new Array();
var  sourceFileB = new Array();
var  sourceA = new Array();
var  sourceB = new Array();
var  timeOut1 = new Array();
var  timeOut2 = new Array();
var  l = new Array();
var  movedSlider;


function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}

// SOUNDS

function assignSources(){

  var fileExt=".mp3";
  gCarb=gCarbMP3;
  
  if (bSUPPORTOGG==1) {fileExt=".ogg"; gCarb=gCarbOGG;}

  sourceFileA[0]='Data/SOLFEGGIO/0a'+fileExt;
  sourceFileB[0]='Data/SOLFEGGIO/1c.mp3';
    sourceFileA[1]='Data/SOLFEGGIO/1c.mp3';
  sourceFileB[1]='Data/SOLFEGGIO/2c.mp3';
    sourceFileA[2]='Data/SOLFEGGIO/2c.mp3';
  sourceFileB[2]='Data/SOLFEGGIO/3c.mp3';
    sourceFileA[3]='Data/SOLFEGGIO/3c.mp3';
  sourceFileB[3]='Data/SOLFEGGIO/1c.mp3';
    sourceFileA[4]='Data/SOLFEGGIO/2c.mp3';
  sourceFileB[4]='Data/SOLFEGGIO/3c.mp3';
      sourceFileA[5]='Data/SOLFEGGIO/2c.mp3';
  sourceFileB[5]='Data/SOLFEGGIO/1c.mp3';
    sourceFileA[6]='Data/SOLFEGGIO/3c.mp3';
  sourceFileB[6]='Data/SOLFEGGIO/2c.mp3';
    sourceFileA[7]='Data/SOLFEGGIO/1c.mp3';
  sourceFileB[7]='Data/SOLFEGGIO/2c.mp3';
    sourceFileA[8]='Data/SOLFEGGIO/3c.mp3';
  sourceFileB[8]='Data/SOLFEGGIO/2c.mp3';
    sourceFileA[9]='Data/SOLFEGGIO/1c.mp3';
  sourceFileB[9]='Data/SOLFEGGIO/2c.mp3';
  }

// WEBAUDIO LOADER
var  gainNodeA = new Array();
var  gainNodeB = new Array();
var  bufferList = new Array();
var  loadCount=0;
var context;

function loadWebAudioSound(url,i) {
  var request = new XMLHttpRequest();
  request.open('GET', url, true);
  request.responseType = 'arraybuffer';
    
  request.onload = function(){
    context.decodeAudioData(request.response, function(decodedData) {
      bufferList[i] = decodedData;
      countIn();
    });
  }

    
  request.send();
}

function webAudioContextCheck() {
  if(context.state == "suspended") {
    bSUSPENDED=1;
    $('.contextPlay').show();
    msg("Check your browser settings to enable AutoPlay<br> or click the Play button to start.");
    window.addEventListener('click', resumeContext, false);
    window.addEventListener('touched', resumeContext, false);
  }
}

function loadHTML5AudioSound(i){

  sourceA[i] = new Audio(sourceFileA[i]);
  sourceB[i] = new Audio(sourceFileB[i]);

  sourceA[i].preload = 'auto';
  sourceB[i].preload = 'auto';
  
  if (stretch[i]==0) {
    sourceA[i].loop=1; 
    sourceB[i].loop=1;
    }
  else {
    sourceA[i].loop=0;
    sourceB[i].loop=0;
    }


  sourceA[i].addEventListener("canplaythrough", function(){countIn()});
  sourceB[i].addEventListener("canplaythrough", function(){countIn()});
  
  if (stretch[i]!=0) {
    sourceA[i].addEventListener('playing',function(){willPlayB(i);}, false);
    sourceB[i].addEventListener('playing',function(){willPlayA(i);}, false);
    }
}

function loadAllSounds(){
//------------------------------------------------------------------
  if (bWEBAUDIO==1) {

    if (typeof AudioContext !== 'undefined') {context = new AudioContext();}
    else {context = new webkitAudioContext();}
    
    for (var i = 0; i < iNUMBERBANDS; ++i) loadWebAudioSound(sourceFileA[i],i);
    for (var i = 0; i < iNUMBERBANDS; ++i) loadWebAudioSound(sourceFileB[i],i+iNUMBERBANDS);
    
  }
//------------------------------------------------------------------
  else{
    for (var i = 0; i < iNUMBERBANDS; ++i) loadHTML5AudioSound(i);
  }
}

function playAllSounds(){
//------------------------------------------------------------------
  if (bWEBAUDIO==1) {
    for (var i = 0; i < iNUMBERBANDS; ++i) startWebAudio(i)
  }
//------------------------------------------------------------------
  else {
    for (var i = 0; i < iNUMBERBANDS; ++i) {
      sourceA[i].play();
      if (stretch[i]==0) sourceB[i].play();
    }
  }
}

function playOS(stem){
  var colorTable=["100,50,0","200,0,0","255,128,0","150,190,0","0,200,0","0,200,170","0,140,220","0,0,255","140,0,170","200,140,255"];
  var duration=0;
  playbackFactor[stem]= pitchTable[Math.floor(Math.random() * pitchTable.length)]
  if (lastPlayedOS[stem]) {
    webAudioPlayBAt(stem,context.currentTime);
    duration=sourceB[stem].buffer.duration;
    msg(stem+' • 1 • '+playbackFactor[stem]);
    }
  else {
    webAudioPlayAAt(stem,context.currentTime);
    duration=sourceA[stem].buffer.duration;
    msg(stem+' • 2 • '+playbackFactor[stem]);
  }
  lastPlayedOS[stem]=1-lastPlayedOS[stem];
  $("#play"+stem).css('background', 'rgb('+colorTable[stem]+')');
  clearTimeout(timeOutOS[stem]);  
  timeOutOS[stem]=setTimeout(function(){
    $("#play"+stem).css('background', 'rgba(0,0,0,0)');
    if (bOSAUTO) { playOS(Math.floor(Math.random()*10)); }
    },duration*1000/playbackFactor[stem]);
  
}

function experimentalPitchRandom(){
  bPITCHRAN++;
  if (bPITCHRAN==7) bPITCHRAN=0;
  switch(bPITCHRAN){
  case 0: pitchTable=[1]; msg('<span class="lowlight">'+pitchTable.toString().replace(/,/g,' ')+'</span>'); break;
  case 1: pitchTable=[0.5]; msg('<span class="lowlight">'+pitchTable.toString().replace(/,/g,' ')+'</span>'); break;
  case 2: pitchTable=[2]; msg('<span class="lowlight">'+pitchTable.toString().replace(/,/g,' ')+'</span>'); break;
  case 3: pitchTable=[0.5,1]; msg('<span class="lowlight">'+pitchTable.toString().replace(/,/g,' ')+'</span>'); break;
  case 4: pitchTable=[0.5,1,2]; msg('<span class="lowlight">'+pitchTable.toString().replace(/,/g,' ')+'</span>'); break;
  case 5: pitchTable=[0.5,1,1.5]; msg('<span class="lowlight">'+pitchTable.toString().replace(/,/g,' ')+'</span>'); break;
  case 6: pitchTable=[0.5,0.75,1,1.5,2]; msg('<span class="lowlight">'+pitchTable.toString().replace(/,/g,' ')+'</span>'); break;
  }
}

function experimentalOSauto(){
  bOSAUTO=1-bOSAUTO;
  if (bOSAUTO) msg('<span class="lowlight">Auto ON</span>'); else msg('<span class="lowlight">Auto OFF</span>');
}

function startWebAudio(i){
  if (stretch[i]==0) sourceA[i].loop=1;
  nextA[i]=context.currentTime;
  nextB[i]=nextA[i]+Math.round(sourceA[i].buffer.duration*10)/20*stretch[i]/playbackFactor[i];
  sourceA[i].start(nextA[i]);
  lastPlayedA[i]=nextA[i];
  if (stretch[i]!=0) {
      // take duration of the leader of the sync group
      webAudioPlayBAt(i,nextB[i]);
      lastPlayedB[i]=nextB[i];
    }
  else {
      sourceB[i].loop=1;
      sourceB[i].playbackRate.value=playbackFactor[i];
      sourceB[i].start(nextA[i]);
      lastPlayedB[i]=nextA[i];
    }
}

function getDelayValue(stem,duration) {
  var delay;
  delay=duration*500; // in msec
  delay=delay*parseFloat(stretch[stem]);
  return delay;
}

function computeIntervals(){
  // stems repeat every ((A+B)/2)*stretch and B starts after A/2*stretch - see doc. 
  var durA, durB;
  for (var i = 0; i < iNUMBERBANDS; ++i) {
    // buffer durations vary across browsers! Critical for sync gens, rounding off.
    durA=Math.round(sourceA[i].buffer.duration*10)/10;
    durB=Math.round(sourceB[i].buffer.duration*10)/10;
    interval[i]=(durA+durB)/2*stretch[i]/playbackFactor[i];
  }
}

function willPlayA(item){
  clearTimeout(timeOut1[item]);
  timeOut1[item] = setTimeout(function(){rewindAndPlayA(item);},getDelayValue(item,sourceB[item].duration));
}

function willPlayB(item){
  clearTimeout(timeOut2[item]); 
  timeOut2[item] = setTimeout(function(){rewindAndPlayB(item);},getDelayValue(item,sourceA[item].duration));
}

function rewindAndPlayA(item){
  if (item==sSYNCHRO.indexOf(sSYNCHRO.charAt(item))) { // this is the first occurrence of the Sync group. Launch this sound and all others from the group.
    for (var i = sSYNCHRO.indexOf(sSYNCHRO.charAt(item)); i < iNUMBERBANDS; ++i) {
      if (sSYNCHRO.charAt(item)==sSYNCHRO.charAt(i)) { // belongs to the same group
        if(!sourceA[i].paused) {sourceA[i].pause();}
        sourceA[i].currentTime=0;
        sourceA[i].play();
      }
    }
  }
}

function rewindAndPlayB(item){
  if (item==sSYNCHRO.indexOf(sSYNCHRO.charAt(item))) { // this is the first occurrence of the Sync group. Launch this sound and all others from the group.
    for (var i = sSYNCHRO.indexOf(sSYNCHRO.charAt(item)); i < iNUMBERBANDS; ++i) {
      if (sSYNCHRO.charAt(item)==sSYNCHRO.charAt(i)) { // belongs to the same group
        if(!sourceB[i].paused) {sourceB[i].pause();}
        sourceB[i].currentTime=0;
        sourceB[i].play();
      }
    }
  }
}

function webAudioPlayAAt(item,onContextTime){

  // console.log('A@ '+context.currentTime+' for '+onContextTime+' on stem '+item);

  if (item==sSYNCHRO.indexOf(sSYNCHRO.charAt(item))) { // this is the first occurrence of the Sync group
  
    nextB[item]+=interval[item];
    sourceB[item].onended=function(){webAudioPlayBAt(item,nextB[item])};
      
    // This one and all others (sync)
    for (var i = sSYNCHRO.indexOf(sSYNCHRO.charAt(item)); i < iNUMBERBANDS; ++i) {
      if (sSYNCHRO.charAt(item)==sSYNCHRO.charAt(i)) { // belongs to the same group
          sourceA[i].disconnect(0); // canary crashed with sourceA[i].noteOff(0);
          sourceA[i] = context.createBufferSource();
          sourceA[i].buffer = bufferList[i];
          sourceA[i].playbackRate.value=playbackFactor[i];
                    if ((bCALIBRATE==1)&&(i!=movedSlider)&&(movedSlider>-1)) gainNodeA[i].gain.setTargetAtTime(0,context.currentTime,0);
          sourceA[i].connect(gainNodeA[i]);
          sourceA[i].start(onContextTime);
          lastPlayedA[i]=onContextTime;
      }
    }
  }
    monitor();}


function webAudioPlayBAt(item,onContextTime){

  // console.log('B@ '+context.currentTime+' for '+onContextTime+' on stem '+item);

  if (item==sSYNCHRO.indexOf(sSYNCHRO.charAt(item))) { // this is the first occurrence of the Sync group.
  
    nextA[item]+=interval[item];
    sourceA[item].onended=function(){webAudioPlayAAt(item,nextA[item])};

    // This one and all others (sync)
    for (var i = sSYNCHRO.indexOf(sSYNCHRO.charAt(item)); i < iNUMBERBANDS; ++i) {
      if (sSYNCHRO.charAt(item)==sSYNCHRO.charAt(i)) { // belongs to the same group
          sourceB[i].disconnect(0); // canary crashed with sourceB[i].noteOff(0);
          sourceB[i] = context.createBufferSource();
          sourceB[i].buffer = bufferList[i+iNUMBERBANDS];
          sourceB[i].playbackRate.value=playbackFactor[i];
                    if ((bCALIBRATE==1)&&(i!=movedSlider)&&(movedSlider>-1)) gainNodeB[i].gain.setTargetAtTime(0,context.currentTime,0);
          sourceB[i].connect(gainNodeB[i]);
          sourceB[i].start(onContextTime);
          lastPlayedB[i]=onContextTime;
      }
    }
  }
  monitor();}

function stemDrop(){
  var i=Math.floor(Math.random(1)*10);
  console.log('Dropping stem '+i);
  sourceA[i].disconnect(0);
  sourceB[i].disconnect(0);
}

function monitor(){
  var currentTime=context.currentTime;
  var elapsed;
  for (var i = 0; i < iNUMBERBANDS; ++i) {
    if (interval[i]>0) {
    elapsed=Math.min(currentTime-lastPlayedA[i],currentTime-lastPlayedB[i]);
    if (elapsed>(interval[i]*1.01))  {
      console.log('Stem '+i+' was lost. Now restarting.');
      lastPlayedA[i]=currentTime;lastPlayedB[i]=currentTime;
      restartWebAudio(i);
      }
    }
  }
}

function restartWebAudio(i){
  sourceA[i].onended=null;
  sourceB[i].onended=null;
  sourceA[i].disconnect(0);
  sourceB[i].disconnect(0);
  sourceA[i] = context.createBufferSource();
  sourceA[i].buffer = bufferList[i];
  sourceA[i].playbackRate.value=playbackFactor[i];
  sourceA[i].connect(gainNodeA[i]);
  sourceB[i] = context.createBufferSource();
  sourceB[i].buffer = bufferList[i+iNUMBERBANDS];
  sourceB[i].playbackRate.value=playbackFactor[i];
  sourceB[i].connect(gainNodeB[i]);
  startWebAudio(i);
}

// INIT

var launchCounter=0;

function countIn(){
  // document.getElementById('carbonDiv').style.right="0px";
  $('#carbonDiv').addClass('zeroRight');
  if (++launchCounter==iNUMBERBANDS*2) {
    setTimeout(function(){$('#carbonDiv').removeClass('zeroRight');},1250);
    finishedLoading();
  };

}

function init() {

if (!navigator.cookieEnabled) {window.location.href = "/showMessage.php?msgID=4";}

var a = document.createElement('audio');
if (!!(a.canPlayType && a.canPlayType('audio/ogg; codecs="vorbis"').replace(/no/, ''))){bSUPPORTOGG=1;};
if (!!(a.canPlayType && a.canPlayType('audio/mpeg;').replace(/no/, ''))){bSUPPORTMP3=1;};

if(typeof webkitAudioContext !== "undefined") bWEBAUDIO=1;
if(typeof AudioContext !== "undefined") bWEBAUDIO=1;


console.log(navigator.userAgent);
if (bWEBAUDIO) console.log('Web Audio CDN'); else console.log('HTML5 Audio CDN');

    enableButton(["reset","anim","mode","speed","volDown","volUp","mute","timer","calib","play0","play1","play2","play3","play4","play5","play6","play7","play8","play9"],0);
  disableSliders();
  initStates();
  initTuning();
  msg("... now loading ...");
  assignSources();
  loadAllSounds();
  
setPreset(0.3,0.3,0.3,0.3,0.3,0.3,0.3,0.3,0.3,0.3);
 migrateCookies();  
 
}

function finishedLoading() {
  
//------------------------------------------------------------------
  if (bWEBAUDIO==1) {

    for (var i = 0; i < iNUMBERBANDS; ++i) {
      sourceA[i] = context.createBufferSource();
      sourceA[i].buffer = bufferList[i];
      sourceA[i].playbackRate.value=playbackFactor[i];
      gainNodeA[i] = context.createGain();
      gainNodeA[i].gain.value = 0;
      sourceA[i].connect(gainNodeA[i]);
      gainNodeA[i].connect(context.destination);
    }
    
    for (var i = 0; i < iNUMBERBANDS; ++i) {
      sourceB[i] = context.createBufferSource();
      sourceB[i].buffer = bufferList[i+iNUMBERBANDS];
      sourceA[i].playbackRate.value=playbackFactor[i];
      gainNodeB[i] = context.createGain();
      gainNodeB[i].gain.value = 0;
      sourceB[i].connect(gainNodeB[i]);
      gainNodeB[i].connect(context.destination);
    }
  computeIntervals();
  }
//------------------------------------------------------------------

  getCurrentLevelsFromSliders();
  loadCurrentLevelsFromURLAndSetSliders();
  updateDocumentLinks();
  
  playAllSounds();setAllLevels();  
  bFINISHEDLOADING=1;
  
// Suspended Policy by Mobile Browsers and Chrome!
if (bWEBAUDIO==1) webAudioContextCheck();
// Enable Buttons
if (!bSUSPENDED) nowPlaying();

    
  
  // Timer Gens
  if (bSTARTMUTED==1) forceMute(1);
   
  // SuperGens - Calling Parent Function
  if (window.parent!=window) window.parent.count();
  
  // Highlight Fav icon
  checkFavGen();
  
}

function pad(num) {
    var s = "000" + num;
    return s.substr(s.length-2);
}

function sliderChange(movedSliderName) {
  if (bFINISHEDLOADING==1) {
    movedSlider=movedSliderName.substring(1,2);
    if (bCALIBRATE==1) {
      for (var i = 0; i < iNUMBERBANDS; ++i){
        if (i!=movedSlider) {
        
          if (bWEBAUDIO==1) {
            gainNodeA[i].gain.setTargetAtTime(0,context.currentTime,0);
            gainNodeB[i].gain.setTargetAtTime(0,context.currentTime,0);
          }
          else {
            sourceA[i].volume=0; 
            sourceB[i].volume=0; 
            }
          }
      }
      msg("2. Move each slider so that its associated sound becomes just audible to you.");
    }
    else {if (bANIMATE==0) msg("");}
    currentLevel[movedSlider]=$( "#s"+movedSlider ).slider( "value" );
    if (bWEBAUDIO==1) {
      gainNodeA[movedSlider].gain.setTargetAtTime(Math.pow(currentLevel[movedSlider],3),context.currentTime,fAUDIOFADETIME);
      gainNodeB[movedSlider].gain.setTargetAtTime(Math.pow(currentLevel[movedSlider],3),context.currentTime,fAUDIOFADETIME);
        }
    else {
      sourceA[movedSlider].volume=Math.pow(currentLevel[movedSlider],3); 
      sourceB[movedSlider].volume=Math.pow(currentLevel[movedSlider],3); 
      }
  }
  updateDocumentLinks();
  if (movedSliderName==lastSlider){ 
    var db=Math.round(26*Math.log(currentLevel[movedSlider]));
    console.log(db);
    msg(db+" dBFS");
    // msg1(db+" dBFS");
    }
    else lastSlider=movedSliderName;
    
}

function updateDocumentLinks(){
  URLsettings='l='+packCurrentLevels();
    strippedDocumentURL='/NoiseMachines/solfeggioTonesGenerator.php';
  ANIMATEsettings='';
  if (bANIMATE==1) ANIMATEsettings='&a='+iAnimationFactor+'&am='+iAnimationMode;
  if (document.getElementById('customTitle')) {
    $( "#customURL0" ).attr("href", strippedDocumentURL+'?'+URLsettings+ANIMATEsettings+'&m='+MAGICsettings+'&d='+detune+'&title='+encodeURI(document.getElementById('customTitle').textContent));
    $( "#customURL1" ).attr("href", strippedDocumentURL+'?c=4&'+URLsettings+ANIMATEsettings+'&m='+MAGICsettings+'&d='+detune+'&title='+encodeURI(document.getElementById('customTitle').textContent));
    $( "#customURL2" ).attr("href", strippedDocumentURL+'?c=2&'+URLsettings+ANIMATEsettings+'&m='+MAGICsettings+'&d='+detune+'&title='+encodeURI(document.getElementById('customTitle').textContent));
cloneURL=strippedDocumentURL+'?c=1&'+URLsettings+ANIMATEsettings+'&m='+MAGICsettings+'&d='+detune+'&title='+encodeURI(document.getElementById('customTitle').textContent);
    }
  else {
    $( "#customURL0" ).attr("href", strippedDocumentURL+'?'+URLsettings+ANIMATEsettings+'&m='+MAGICsettings+'&d='+detune);
    $( "#customURL1" ).attr("href", strippedDocumentURL+'?c=4&'+URLsettings+ANIMATEsettings+'&m='+MAGICsettings+'&d='+detune);
    $( "#customURL2" ).attr("href", strippedDocumentURL+'?c=2&'+URLsettings+ANIMATEsettings+'&m='+MAGICsettings+'&d='+detune);
    cloneURL=strippedDocumentURL+'?c=1&'+URLsettings+ANIMATEsettings+'&m='+MAGICsettings+'&d='+detune;
  }
  var strLevels=currentLevel[0]+' '+currentLevel[1]+' '+currentLevel[2]+' '+currentLevel[3]+' '+currentLevel[4]+' '+currentLevel[5]+' '+currentLevel[6]+' '+currentLevel[7]+' '+currentLevel[8]+' '+currentLevel[9];
  $( "#currentLevels" ).attr("title", strLevels);
}

function getLink(){
  return cloneURL.slice(15);
}

function cloneIt() {
  window.open("/clone.php?url="+encodeURIComponent(cloneURL),"_blank","toolbar=yes,scrollbars=yes,width=500,height=378");
  document.location.href = "/noiseMachines.php";
}

function print(){
console.log(currentLevel[0]+','+currentLevel[1]+','+currentLevel[2]+','+currentLevel[3]+','+currentLevel[4]+','+currentLevel[5]+','+currentLevel[6]+','+currentLevel[7]+','+currentLevel[8]+','+currentLevel[9]);
}

function getCurrentLevelsFromSliders(){
  for (var i = 0; i < iNUMBERBANDS; ++i)  currentLevel[i]=$( "#s"+i ).slider( "value" );
}

function setCurrentLevelsToSliders(){
  for (var i = 0; i < iNUMBERBANDS; ++i) $( "#s"+i ).slider("value", currentLevel[i]);
}

function setSlidersToZero(){
  for (var i = 0; i < iNUMBERBANDS; ++i) $( "#s"+i ).slider("value", 0);
}

function setAllLevels(){
//------------------------------------------------------------------
  if (bWEBAUDIO==1) {

    for (var i = 0; i < iNUMBERBANDS; ++i) {
      gainNodeA[i].gain.setTargetAtTime(Math.pow(currentLevel[i],3),context.currentTime,fAUDIOFADETIME);
      gainNodeB[i].gain.setTargetAtTime(Math.pow(currentLevel[i],3),context.currentTime,fAUDIOFADETIME);
    }
    
  }
//------------------------------------------------------------------
  else {
  
    for (var i = 0; i < iNUMBERBANDS; ++i) {
      sourceA[i].volume=Math.pow(currentLevel[i],3);
      sourceB[i].volume=Math.pow(currentLevel[i],3);
    }
  
  }
}

function fadeOut(out,steps){
  // disable animation before fadeout
  if ((bANIMATE==1)&&(out==1)&&(iFadeState==0)) clearTimeout(modulationTimeout);  
  iFadeState+=1;
  for (var i = 0; i < iNUMBERBANDS; ++i) {
    var fadeLvl;
    if (out==1) fadeLvl=Math.max(0,Math.pow(currentLevel[i]-Math.pow(iFadeState,2)*currentLevel[i]/Math.pow(steps,2),3));
    else fadeLvl=Math.min(0.99,Math.pow(Math.pow(iFadeState,0.2)*currentLevel[i]/Math.pow(steps,0.2),3));
      if (bWEBAUDIO==1) {
        if (gainNodeA[i]) gainNodeA[i].gain.setTargetAtTime(fadeLvl,context.currentTime,0);
        if (gainNodeB[i]) gainNodeB[i].gain.setTargetAtTime(fadeLvl,context.currentTime,0);
      }
      else {
        sourceA[i].volume=fadeLvl;
        sourceB[i].volume=fadeLvl;
      }
  }
  clearTimeout(fadeTimeOut);  
  if (iFadeState<=steps) fadeTimeOut = setTimeout(function(){fadeOut(out,steps);},steps)
  else {
  iFadeState=0;
  // enable animation after fade in
  if ((bANIMATE==1)&&(out==0)) modulationRandom();
  }
}

function tune(factor){detune=Math.round(Math.log2(factor)*12*1000)/1000;updatePlaybackRate();updateDocumentLinks();}

function tuneDown(dec){
  if (detune>999) detune=0; 
  detune=detune-dec;detune=Math.max(detune,-36);updatePlaybackRate();
  updateDocumentLinks();
}

function tuneUp(inc){
  if (detune>999) detune=0; 
  detune=detune+inc;detune=Math.min(detune,24);updatePlaybackRate();
  updateDocumentLinks();
}

function octDown(){
  if (detune>999) detune=0; 
  detune-=12;detune=Math.max(detune,-36);updatePlaybackRate();
  updateDocumentLinks();
}

function octUp(){
  if (detune>999) detune=0; 
  detune+=12;detune=Math.min(detune,24);updatePlaybackRate();
  updateDocumentLinks();
}

function mixedTune(){
  // aabbcc...jj where xx = 50+/-detune
  var strSettings="";
  for (var i=0; i<iNUMBERBANDS; ++i) strSettings+=(60-Math.round(Math.random()*24));
  detune=strSettings;
  updateDocumentLinks();
  updatePlaybackRate();
}

function computePlaybackFactorsFromDetune(){
for (var i = 0; i < iNUMBERBANDS; ++i) {
  if (detune<999) playbackFactor[i]=Math.pow(2,(detune/12));
    else playbackFactor[i]=Math.pow(2,(parseInt(detune.toString().substring(i*2,i*2+2))-50)/12);
        
}
}

function updatePlaybackRate(){
  computePlaybackFactorsFromDetune();
  computeIntervals();
    for (var i = 0; i < iNUMBERBANDS; ++i) {
     restartWebAudio(i)
    }
}

function setAnimationSpeed(value){
  if(typeof value === "undefined") {
    iAnimationFactor*=2; 
    if (iAnimationFactor>4) iAnimationFactor=0.25;
  }
  else iAnimationFactor=value;
  if (iAnimationFactor==1){
    msg("Animation Speed : Normal");
    document.getElementById('speedText').innerHTML = "";
    }
  if (iAnimationFactor==0.25){
    msg("Animation Speed : Slowest");
    document.getElementById('speedText').innerHTML = ": 4";
    }
  if (iAnimationFactor==0.5){
    msg("Animation Speed : Slow");
    document.getElementById('speedText').innerHTML = ": 2";
    }
  if (iAnimationFactor==2){
    msg("Animation Speed : Fast");
    document.getElementById('speedText').innerHTML = "2x";
    }
  if (iAnimationFactor==4){
    msg("Animation Speed : Fastest");
    document.getElementById('speedText').innerHTML = "4x";
    }
  updateDocumentLinks();
  startModulation();
}

function setAnimationMode(value){
  if(typeof value === "undefined") {
    iAnimationMode+=1; 
    if (iAnimationMode>8) iAnimationMode=1;
  }
  else iAnimationMode=value;
  if (iAnimationMode==1){
    msg("Animation Mode : Default (50-125%)");
    document.getElementById('modeText').innerHTML = "";
    }
  if (iAnimationMode==2){
    msg("Animation Mode : Subtle (80-110%)");
    document.getElementById('modeText').innerHTML = "sb";
    }
  if (iAnimationMode==3){
    msg("Animation Mode : Deep (0-150%)");
    document.getElementById('modeText').innerHTML = "dp";
    }
  if (iAnimationMode==4){
    msg("Animation Mode : Minimax (between lowest/highest sliders, zero excluded)");
    document.getElementById('modeText').innerHTML = "mm";
    }
  if (iAnimationMode==5){
    msg("Animation Mode : Extreme (0% or 100%)");
    document.getElementById('modeText').innerHTML = "ex";
    }
  if (iAnimationMode==6){
    msg("Animation Mode : Shuffle");
    document.getElementById('modeText').innerHTML = "sh";
    }
  if (iAnimationMode==7){
    msg("Animation Mode : Shuffle (zero excluded)");
    document.getElementById('modeText').innerHTML = "sx";
    }
  if (iAnimationMode==8){
    msg("Animation Mode : Sequence (reveal zeroes)");
    document.getElementById('modeText').innerHTML = "sq0";
    }
  updateDocumentLinks();
  startModulation();
}

function setPreset(l0,l1,l2,l3,l4,l5,l6,l7,l8,l9,text){
    if (bMUTE==1) toggleMute();
    currentLevel[0] = l0;
    currentLevel[1] = l1;
    currentLevel[2] = l2;
    currentLevel[3] = l3;
    currentLevel[4] = l4;
    currentLevel[5] = l5;
    currentLevel[6] = l6;
    currentLevel[7] = l7;
    currentLevel[8] = l8;
    currentLevel[9] = l9;
    saveRandomExchange();
    if (bANIMATE==0) {
      setCurrentLevelsToSliders();
      if(typeof(text)==='undefined') msg("");
      else msg(text);
    }
    customLinkAssign('emphasis','actionlink','Apply Calibration',emphasis);
}

function resetSliders(){
setPreset(0.3,0.3,0.3,0.3,0.3,0.3,0.3,0.3,0.3,0.3,"Back to Default");}

function randomSettings(){
    var power=0;
    var mx=0;
    var multiplier;
    for (var i = 0; i < iNUMBERBANDS; ++i) {
      currentLevel[i] = Math.random();
      power+=currentLevel[i]*currentLevel[i];
      if (currentLevel[i]>mx) mx=currentLevel[i]
      }
    targetAvgLevel=0.35;
    multiplier=targetAvgLevel/Math.sqrt(power/10);
    if (mx*multiplier>70) multiplier=70/mx;
    for (var i = 0; i < iNUMBERBANDS; ++i) currentLevel[i]=currentLevel[i]*multiplier;
    
    saveRandomExchange();
    if (bANIMATE==0) {
      setCurrentLevelsToSliders();
      msg("Random");
    }
}

function packCurrentLevels(){
var str;
str=pad(Math.round(currentLevel[0]*100))+pad(Math.round(currentLevel[1]*100))+pad(Math.round(currentLevel[2]*100))+pad(Math.round(currentLevel[3]*100))+pad(Math.round(currentLevel[4]*100))+pad(Math.round(currentLevel[5]*100))+pad(Math.round(currentLevel[6]*100))+pad(Math.round(currentLevel[7]*100))+pad(Math.round(currentLevel[8]*100))+pad(Math.round(currentLevel[9]*100));
return str;
}

function unpackAndSetCurrentLevels(strLevels){
  for (var i = 0; i < iNUMBERBANDS; ++i) {currentLevel[i] = strLevels.substring(2*i,2*i+2)/100;}
  // if animation setting exist
  if (strLevels.length>iNUMBERBANDS*2) {
    var num=strLevels[iNUMBERBANDS*2];
    var denum=strLevels[iNUMBERBANDS*2+1];
    if ((num!=0)&&(denum!=0)) { iAnimationFactor=num/denum; if(bANIMATE==0) {toggleModulation();}}
  }
}

function saveCurrentLevelsToCookie(tag){
  // omit tag for personal curve
  if (tag === undefined) tag="CAL";
  // load Cookie
  var userData={};
  var cookieName='uSET_'+uIDS;
  if (cookieName=='uSET_') cookieName='uSET_unlogged';
  var tmp = JSON.parse(readCookie(cookieName));
  if (tmp!=null) userData = tmp;
  // Save Associative Array
  userData[tag]=packCurrentLevels();
  // Save Assicative Array
  var days=36500;
  createCookie(cookieName,JSON.stringify(userData),days);
  if (tag!="CAL") msg("Individual slider positions have been saved as a browser cookie...");
}

function loadCurrentLevelsFromCookieAndSetSliders(tag){
  if (tag === undefined) tag="CAL";
  var userData={};
  var cookieName='uSET_'+uIDS;
  if (cookieName=='uSET_') cookieName='uSET_unlogged';
  var tmp = JSON.parse(readCookie(cookieName));
  if (tmp!=null) userData = tmp;
  if (userData[tag]!=null) {
    unpackAndSetCurrentLevels(userData[tag]);
    if (bANIMATE==1) saveRandomExchange(); 
     else {
      setCurrentLevelsToSliders();
      if (tag=="CAL") msg("Your Personal Curve");
      else msg("Your Custom Set for this noise");
      if (bMUTE) toggleMute();
      }
  }
  else {
      if (tag=="CAL") msg("ERROR: no data found. Please  <a href='/calibration.php'>calibrate</a> (donor, log in first).");
      else msg("ERROR: no user setting found, save one first.");
  }
}

function migrateCookies(){
  var days=36500;
  var cookieName='uSET_'+uID;
  var cookieNameS='uSET_'+uIDS;
  var tmp=readCookie(cookieName);
  if (tmp) { createCookie(cookieNameS,tmp,days); eraseCookie(cookieName);}
  var cookieName='fSET_'+uID;
  var cookieNameS='fSET_'+uIDS;
  var tmp=readCookie(cookieName);
  if (tmp) { createCookie(cookieNameS,tmp,days); eraseCookie(cookieName);}
}


// Apply Calibration to current sliders

function emphasis(){
  var tag="CAL";
  var calLevel;
  var userData={};
  var cookieName='uSET_'+uIDS;
  if (cookieName=='uSET_') cookieName='uSET_unlogged';
  var tmp=readCookie(cookieName);
  if (tmp!=null) userData=JSON.parse(tmp);
  if (userData[tag]!=null) {
  
    for (var i = 0; i < iNUMBERBANDS; ++i) {
      calLevel= userData[tag].substring(2*i,2*i+2)/100;
      currentLevel[i]=currentLevel[i]*(calLevel/0.3);
    }
    setCurrentLevelsToSliders();
    msg("Calibrated!");
    }
    
  else {
  msg("ERROR: no calibration found. Please <a href='/calibration.php'>calibrate</a> first.");
  }
  customLinkAssign('emphasis','lowlight','Now Calibrated','');
}

function customLinkAssign(id,classname,innerhtml,onclickfuntion) {
if (document.getElementById(id)) {
  document.getElementById(id).className = classname;
  document.getElementById(id).innerHTML = innerhtml;
  document.getElementById(id).onclick = onclickfuntion;
  }
}

function loadCurrentLevelsFromURLAndSetSliders(){
  var args=getUrlVars();
  if (args['l']!== undefined) {
    var code=args['l'];
    code.replace(/\D/g,''); // XSS zapping all non digits 
    for (var i = 0; i < iNUMBERBANDS; ++i) {currentLevel[i] = code.substring(2*i,2*i+2)/100;}
    setCurrentLevelsToSliders();
  }
}

function loadTimerFromURLAndStartTimer(){
  var args=getUrlVars();
  if (args['t']!== undefined) {
    var minutes=parseInt(args['t']);
    if (typeof minutes === 'number') {
      setTimer(minutes);
      activateButton(["timer"],1);
    }
  }
}

function disableSliders(){
  for (var i = 0; i < iNUMBERBANDS; ++i) $( "#s"+i ).slider( "option", "disabled", false );
}

function enableSliders(){
  for (var i = 0; i < iNUMBERBANDS; ++i) $( "#s"+i ).slider( "option", "disabled", false );
}

function disableSlider(i){
  $( "#s"+i ).slider( "option", "disabled", true );
}

function enableSlider(i){
  $( "#s"+i ).slider( "option", "disabled", false );
}

function toggleCalibration() {
  bCALIBRATE=!bCALIBRATE;
  if (bCALIBRATE==1) {
    enableSliders();
    movedSlider=-99;
    $("#calib").button( "option", "label", "3. Save Your Personal Curve" );
    }
  else {
    saveCurrentLevelsToCookie();
    setAllLevels();
    disableSliders();
    $("#calib").button( "option", "label", "Done! (Click to recalibrate)" );
  }
}

function toggleModulation(bNoMsg) {
  bANIMATE=!bANIMATE;
  if (bANIMATE==1) {
    savedLevel = currentLevel.slice(0); // copy values, not ref!
    savedCurrentLevel = currentLevel.slice(0); // copy values, not ref!
    nzSliderIndex=[];
    mmMin=1;mmMax=0;
    for (var i = 0; i < iNUMBERBANDS; ++i) {
      if (savedLevel[i]>0) {
        if (savedLevel[i]<mmMin) mmMin=savedLevel[i];
        if (savedLevel[i]>mmMax) mmMax=savedLevel[i];
        nzSliderIndex.push(i);
      }
    }
    disableSliders();
    updateButtons();
    modulationRandom();
    }
  else {
    // currentLevel=savedLevel.slice(0); // copy values, not ref!
    clearTimeout(modulationTimeout);
    enableSliders();
    updateButtons();
    setCurrentLevelsToSliders();
    randomCounter=0;
    animationCtlReset();
  }
   if (bNoMsg!=1) {
   if (bANIMATE==1) msg("Now animating the sliders for you...");
   else msg("Slider animation has been stopped");
   }
}

function stopModulation() {
  if (bANIMATE==1) {
  toggleModulation(1);
  randomCounter=0;
  }
}

function startModulation() {
  randomCounter=0;
  if (bANIMATE==0) {
  toggleModulation(1);
  randomCounter=0;
  }
}

function modulationRandom(){

    iCurrentAnimationSpeed=iINITIALANIMATIONSPEED/iAnimationFactor;

    var nCycle=25; // number of steps between snapshots

    if (randomCounter==0) {   // time to generate a new random state from the saved curve
    
      var ranSlider8=-1;
      var count8=0;
      var max8=0;
    
      if (iAnimationMode==8) {
              for (var i = 0; i < iNUMBERBANDS; ++i) { 
                if (savedLevel[i]==0) {count8++;}
                else if (savedLevel[i]>max8) max8=savedLevel[i];
              }
              if (count8<2) { msg('This animation mode requires a couple of sliders set to zero');}
              else {
                while (ranSlider8<0){
                  var ran8=Math.floor(Math.random()*10);
                  if (savedLevel[ran8]==0) ranSlider8=ran8;
                }
              }
              max8=Math.min(max8*1.15,0.99);
        }

      savedCurrentLevel = currentLevel.slice(0);  // save where we come from, copy values, not ref!
      if (bNOWMOVING==0) {  // the former random method
        for (var i = 0; i < iNUMBERBANDS; ++i) {
          var smin,smax;
            if (iAnimationMode==1) {smin=0.5;smax=1.25;}
            if (iAnimationMode==2) {smin=0.8;smax=1.1;}
            if (iAnimationMode==3) {smin=0;smax=1.5;}
            var ran=(smax-smin)*Math.random()+smin;
            if (iAnimationMode<4)  {randomLevel[i] = ran*savedLevel[i];}
            if (iAnimationMode==4) {if (savedLevel[i]>0) randomLevel[i]=Math.random()*(mmMax-mmMin)+mmMin; else randomLevel[i]=0;}
            if (iAnimationMode==5) {if (Math.random()>0.6) randomLevel[i]=0; else randomLevel[i]=savedLevel[i]; }
            if (iAnimationMode==6) {randomLevel[i]=savedLevel[Math.floor(Math.random()*10)]; }
            if (iAnimationMode==7) {if (savedLevel[i]>0) randomLevel[i]=savedLevel[nzSliderIndex[Math.floor(Math.random()*nzSliderIndex.length)]]; else randomLevel[i]=0;}
            if (iAnimationMode==8) {
              if (i==ranSlider8) randomLevel[i]=max8;
              else randomLevel[i]=savedLevel[i];
              }
            if (randomLevel[i]>0.99) randomLevel[i]=0.99;
            } 
        }
      else {  // the new Now Moving method
          if ((bNOWMOVINGUP==1)&&(++iNowMovingTo==3)) {iNowMovingTo=0;}
          if ((bNOWMOVINGUP==0)&&(--iNowMovingTo==-1)) {iNowMovingTo=2;}
          for (var i = 0; i < iNUMBERBANDS; ++i) {
            randomLevel[i] = fMotionStates[iNowMovingTo][i];
          }
          displayMovingState();
      }
    }
    
    for (var i = 0; i < iNUMBERBANDS; ++i) currentLevel[i] = savedCurrentLevel[i]+randomCounter*(randomLevel[i]-savedCurrentLevel[i])/nCycle;

    if ((randomCounter%5)==0) setCurrentLevelsToSliders();
    else setAllLevels();  // update the levels without updating the sliders (saving javascript CPU)

    if (++randomCounter==nCycle) randomCounter=0;
    
    clearTimeout(modulationTimeout);  
    modulationTimeout = setTimeout(function(){modulationRandom();},iCurrentAnimationSpeed*1000/nCycle);
}

function startAnimationCtl(){
  bNOWMOVING=1;
  animationCtlReset();
  customLinkAssign('nowMoving','playOff','Start','');
  toggleModulation();
}

function animationCtlReset(){
  bNOWMOVINGUP=1;
  iNowMovingTo=-1;
  customLinkAssign('01','playOff','&rarr;','');
  customLinkAssign('12','playOff','&rarr;','');
  customLinkAssign('23','playOff','&rarr;','');
  customLinkAssign('32','playOff','&larr;','');
  customLinkAssign('21','playOff','&larr;','');
  customLinkAssign('nowMoving','actionlink','Start',startAnimationCtl);
}

function initStates(){
  fMotionStates[0]=[0.5,0.46,0.42,0.38,0.34,0.3,0.27,0.24,0.21,0.18];
  fMotionStates[1]=[0.3,0.3,0.3,0.3,0.3,0.3,0.3,0.3,0.3,0.3];
  fMotionStates[2]=[0.18,0.21,0.24,0.27,0.3,0.34,0.38,0.42,0.46,0.5];
}

function initTuning(){
  for (var i = 0; i < iNUMBERBANDS; ++i) playbackFactor[i]=1;
  var args=getUrlVars();
  if (args['d']!== undefined) {
    detune=args['d'];
    detune.replace(/\D/g,''); // XSS zapping all non digits 
    computePlaybackFactorsFromDetune();
    }
}

function assignState(s){
  var state=["A","B","C"];
  for (var i = 0; i < iNUMBERBANDS; ++i)  fMotionStates[s][i]=$( "#s"+i ).slider( "value" );
  msg("...now assigned to Motion Snapshot "+state[s]);
}

function displayMovingState(){

  customLinkAssign('01','playOff','&rarr;','');
  customLinkAssign('12','playOff','&rarr;','');
  customLinkAssign('23','playOff','&rarr;','');
  customLinkAssign('13','playOff','&larr;','');
  customLinkAssign('32','playOff','&larr;','');
  customLinkAssign('21','playOff','&larr;','');

if (bNOWMOVINGUP){
    if (iNowMovingTo==0) {customLinkAssign('01','playOn','&rarr;','');}
    if (iNowMovingTo==1) {customLinkAssign('12','playOn','&rarr;','');}
    if (iNowMovingTo==2) {customLinkAssign('23','playOn','&rarr;','');}
  }
  else{
    if (iNowMovingTo==2) {customLinkAssign('13','playOn','&larr;','');}
    if (iNowMovingTo==1) {customLinkAssign('32','playOn','&larr;','');}
    if (iNowMovingTo==0) {customLinkAssign('21','playOn','&larr;','');}
  }
  // change the direction with P[1/4]
  if (Math.floor(Math.random()*4)==0) bNOWMOVINGUP=!bNOWMOVINGUP;
}

function saveRandomExchange(){                                   
    savedLevel = currentLevel.slice(0);
    randomLevel = currentLevel.slice(0);
    msg("Animation data has been updated!");
    randomCounter=0;
}

function toggleMute() {
    var fadeSteps=37;
    if (iTimer==0) fadeSteps=173;
    iFadeState=0;
  bMUTE=!bMUTE;
  if (bMUTE==1) {
    fadeOut(1,fadeSteps);
    updateButtons();
    if (iTimer==0) msg("It's time to... slowly fade out... (and sleep)");
    else  msg("Keeping quiet...");
  }
  else {
    fadeOut(0,fadeSteps);
    updateButtons();
    if (iTimer==0) msg("It's time to... slowly fade in... (and wake up)");
    else msg("");
  }
  if (iTimer==0) iTimer=-1;
}

function forceMute(bTurnOn) {
  if (bTurnOn) {
    bMUTEsaved=bMUTE;
    if (!bMUTE) toggleMute();
    }
  else {
    if (!bMUTEsaved && bMUTE) toggleMute();
  }
  bMUTEFORCED=bTurnOn;
}

function startMuted(){
  bSTARTMUTED=1;
}

function returnMute() {
  return bMUTE;
}

function updateButtons() {
  if (bMUTE==1) { 
    activateButton(["mute"],1);
    enableButton(["reset","anim","mode","speed","volDown","volUp","calib"],0);
    disableSliders();
  }
  else{
    activateButton(["mute"],0);
    enableButton(["reset","anim","mode","speed","volDown","volUp","calib"],1);
    if (bANIMATE==1) {
      activateButton(["anim"],1);
      audibleButton(["mode","speed"],1);
    }
    else {
      enableButton(["reset"],1);
      activateButton(["anim"],0);
      audibleButton(["mode","speed"],0);
      enableSliders();    }
    }
}

function setTimer(time) {

  if(typeof time === "undefined") {
    var elapsed=((new Date).getTime()-epoch);
    iTimer=Math.max(0,iTimer-elapsed/60000+2);
    if (iTimer<1) {iTimer=1;msg("Timer set to 1 minute"); activateButton(["timer"],1);}
      else if (iTimer<5) {iTimer=5;msg("Timer set to 5 minutes");}
      else if (iTimer<10) {iTimer=10;msg("Timer set to 10 minutes");}
      else if (iTimer<15) {iTimer=15;msg("Timer set to 15 minutes");}
      else if (iTimer<20) {iTimer=20;msg("Timer set to 20 minutes");}
      else if (iTimer<25) {iTimer=25;msg("Pomodoro time! (25 minutes) Keyboard Shortcut: o");}
      else if (iTimer<30) {iTimer=30;msg("Timer set to 30 minutes");}
      else if (iTimer<60) {iTimer=60;msg("Timer set to 1 hour");}
      else if (iTimer<120) {iTimer=120;msg("Timer set to 2 hours");}
      else if (iTimer<240) {iTimer=240;msg("Timer set to 4 hours");}
      else if (iTimer<360) {iTimer=360;msg("Timer set to 6 hours");}
      else if (iTimer<480) {iTimer=480;msg("Timer set to 8 hours");}
      else {iTimer=-1;msg("Timer is disabled");activateButton(["timer"],0);};
      }
    else {
      if (time==0) {iTimer=0;updateTimer();}
      else {
      iTimer=time;
      msg("Timer set to "+time+" min");
      }
    }

  if(document.getElementById('timerText') !== null) {
    if (iTimer>0) document.getElementById('timerText').innerHTML = iTimer;
    else document.getElementById('timerText').innerHTML = "";
  }
  
  epoch=(new Date).getTime(); //ms
  clearTimeout(timerTimeout); 
  timerTimeout = setTimeout(function(){updateTimer();},10000);

}

function updateTimer() {

  if (iTimer<0) return;

  var elapsed=((new Date).getTime()-epoch);
  var remaining=iTimer*60-elapsed/1000; //s

  if (remaining<=0) {
    // disable all interface
       iTimer=0;
       activateButton(["timer"],0);
       toggleMute();
       if(document.getElementById('timerText') !== null) document.getElementById('timerText').innerHTML = "";
    }
  else {
    if(document.getElementById('timerText') !== null) document.getElementById('timerText').innerHTML = Math.ceil(remaining/60);
    clearTimeout(timerTimeout); 
    timerTimeout = setTimeout(function(){updateTimer();},10000);
  }
}

function collectNZ() {
  var userData={};
  var cookieName='collected';
  var tmp=readCookie(cookieName);
  if (tmp!=null) userData=JSON.parse(tmp);
  else {
    userData['codes']=[];
    userData['levels']=[];
  }
  for (var i = 0; i < iNUMBERBANDS; ++i) { 
    if (currentLevel[i] >0) {
        var urlParsed = sourceFileA[i].split("/");
        userData['codes'].push(urlParsed[4]+urlParsed[5].substring(0,1));
        userData['levels'].push(Math.round(currentLevel[i]*100));
      } 
  }
  // trimming
  while (userData['codes'].length>10) {
    userData['codes'].shift();
    userData['levels'].shift();
  }
  console.log("Custom Stack : ");
  console.log(userData);
  // saving
  var days=36500;
  createCookie(cookieName,JSON.stringify(userData),days);
  msg("[Custom] Non-zero sliders have been collected ["+userData['codes'].length+"/10]");
}


function clearStack() {
  var userData={};
  var cookieName='collected';
  var tmp=readCookie(cookieName);
  userData['codes']=[];
  userData['levels']=[];
  var days=36500;
  createCookie(cookieName,JSON.stringify(userData),days);
  msg("[Custom] Stack is now cleared [0/10]");
}


function customGenLaunch() {
  var url;
  var userData={};
  var cookieName='collected';
  var tmp=readCookie(cookieName);
  if (tmp!=null) userData=JSON.parse(tmp);
  else {
    userData['codes']=[];
    userData['levels']=[];
  }
  if (userData['codes'].length<10) msg("[ERROR] Collect 10 individual sliders first! ("+userData['codes'].length+" collected)");
  else
  { 
    // sort stack
    var userDataSorted={};
    userDataSorted['codes']=[];
    userDataSorted['levels']=[];
    for (var i = 0; i < iNUMBERBANDS; ++i) {
      for (var j = 0; j < userData['codes'].length; ++j) {
        if(userData['codes'][j].substr(-1)==i) {
          userDataSorted['codes'].push(userData['codes'][j]);
          userDataSorted['levels'].push(userData['levels'][j]);
        }
      }
    }
    // generate url
    // url="https://mynoise.net/NoiseMachines/custom.php?l="
    // for (var i = 0; i < iNUMBERBANDS; ++i) {
    //   if (userDataSorted['levels'][i]<10) url+='0'+userDataSorted['levels'][i];
    //   else url+=userDataSorted['levels'][i];
    //   }
      
    // url+='00&m=';
    // for (var i = 0; i < iNUMBERBANDS; ++i) url+=userDataSorted['codes'][i]+'~';
    // url = url.substring(0,url.length-1);
    // var title=window.prompt("[Custom] Your custom generator is almost ready! We are just a short title away...","A Short Title");
    // if (title == null || title == "") {
    //   // User cancelled
    // } else {
    //   url+='&title='+encodeURIComponent(titleCase(title.trim()));
    //     window.open(url,"_self");
    // }
  }
}

function titleCase(str) {
   var splitStr = str.toLowerCase().split(' ');
   for (var i = 0; i < splitStr.length; i++) splitStr[i] = splitStr[i].charAt(0).toUpperCase() + splitStr[i].substring(1);
   return splitStr.join(' '); 
}



function selectedSlidersAdd(s) {
  if (selSliders[10]<2) {
    if (selSliders[10]==0) selSliders=[0,0,0,0,0,0,0,0,0,0,1]; // selSliders[10]=currently adding stems flags
    selSliders[s]=1-selSliders[s];
    selectedSlidersDraw()
  }
  if (selSliders[10]==3) {  // Audio Fade
    fAUDIOFADETIME=s;
    msg("[Audio Fade] Confirmed "+fAUDIOFADETIME+"s");
    selSliders[10]=1;
  }
  if (selSliders[10]==4) {  // Random Select
    selSliders=[0,0,0,0,0,0,0,0,0,0,1];
    selectedSlidersRandom(s);
    var weight=0;
    for (var i = 0; i < iNUMBERBANDS; ++i) { weight+=selSliders[i] };
    selectedSlidersHighlight(0.45-0.015*weight);
  }
}

function selectedSlidersReset() {
  var weight=0;
  for (var i = 0; i < iNUMBERBANDS; ++i) { weight+=selSliders[i] };
  if (weight>1) selSliders=[0,0,0,0,0,0,0,0,0,0,1];
  else selSliders=[1,1,1,1,1,1,1,1,1,1,1];
  selectedSlidersDraw();
}

function selectedSlidersRandom(proba) {
  for (var i = 0; i < iNUMBERBANDS; ++i) {
    if (Math.random()<(proba/10)) selSliders[i]=1;
    else selSliders[i]=0;
    }
  selectedSlidersDraw();
}

function selectedSlidersHighlight(value) {
  for (var i = 0; i < iNUMBERBANDS; ++i) {
    if (selSliders[i]) $("#s"+i).slider( "value", value );
    else $("#s"+i).slider( "value", 0 );
    }
  selectedSlidersDraw();
}

function selectedSlidersFunction(type) {
switch(type){
  case 0: // invert
    for (var i = 0; i < iNUMBERBANDS; ++i) selSliders[i]=1-selSliders[i];
    break;
  case 1: // invert
    var sum=0;
    for (var i = 0; i < iNUMBERBANDS; ++i) sum+=currentLevel[i];
    sum/=10;
    for (var i = 0; i < iNUMBERBANDS; ++i) { if (currentLevel[i]<sum) selSliders[i]=1; else selSliders[i]=0;}
    break;
  }
  selSliders[10]=0;
  selectedSlidersDraw();
}

function selectedSlidersDraw(){
  for (var i = 0; i < iNUMBERBANDS; ++i) { 
    if (selSliders[i]) {
      $("#s"+i).removeClass("ui-slider-vertical_lowlight");
      $("#s"+i).addClass("ui-slider-vertical");
      }
    else {
      $("#s"+i).removeClass("ui-slider-vertical");
      $("#s"+i).addClass("ui-slider-vertical_lowlight");
    }
  }
}

function selectedSlidersVolUp(offset) {
  for (var i = 0; i < iNUMBERBANDS; ++i) { 
    if (selSliders[i]) {
          currentLevel[i]=Math.min(0.99,currentLevel[i]+offset);
          savedLevel[i]=Math.min(0.99,savedLevel[i]+offset); randomCounter=0;  //anim
          $( "#s"+i ).slider("value", currentLevel[i]);
    }
  }
}

function selectedSlidersVolDown(offset) {
  for (var i = 0; i < iNUMBERBANDS; ++i) { 
    if (selSliders[i]) {
          currentLevel[i]=Math.max(0,currentLevel[i]-offset);
          savedLevel[i]=Math.max(0,savedLevel[i]-offset); randomCounter=0;  //anim
          $( "#s"+i ).slider("value", currentLevel[i]);
    }
  }
}

function selectedSlidersVolUpDown(offset) {
  var weight=0;
  for (var i = 0; i < iNUMBERBANDS; ++i) { weight+=selSliders[i] };
  if (weight==0) { selectedSlidersRandom(5);for (var i = 0; i < iNUMBERBANDS; ++i) { weight+=selSliders[i] };}
  if (weight==10) selectedSlidersVolUp(offset);
  else {
    var offsetUp=offset*5/weight;
    var offsetDown=offset*5/(10-weight);
    for (var i = 0; i < iNUMBERBANDS; ++i) { 
      if (selSliders[i]) {
          var value=Math.min($( "#s"+i).slider("option", "value")+offsetUp,1); 
          $("#s"+i).slider( "value", value );
          }
      else {
          var value=Math.max($( "#s"+i).slider("option", "value")-offsetDown,0); 
          $("#s"+i).slider( "value", value );
      }
    }
  }
}

function slidersUp(){ // mutiplicative to avoid stuck at zero
  if (bMUTE==1) toggleMute();

  for (var i = 0; i < iNUMBERBANDS; ++i) {

     currentLevel[i]=Math.min(0.99,currentLevel[i]*fLevelMultiplier);
    savedLevel[i]=Math.min(0.99,savedLevel[i]*fLevelMultiplier); randomCounter=0;  //anim
    $( "#s"+i ).slider("value", currentLevel[i]);

  
    }

}

function slidersDown(){ // mutiplicative to avoid stuck at zero
  if (bMUTE==1) toggleMute();
  for (var i = 0; i < iNUMBERBANDS; ++i) {
    currentLevel[i]=currentLevel[i]/fLevelMultiplier;
    savedLevel[i]=savedLevel[i]/fLevelMultiplier; randomCounter=0; //anim
    $( "#s"+i ).slider("value", currentLevel[i]);
    }
}

function selectedSlidersZero(type){
  if (type>0) {
    for (var i = 0; i < iNUMBERBANDS; ++i) { if (selSliders[i]==1) $("#s"+i).slider( "value", 0 ); }
    } else {
    for (var i = 0; i < iNUMBERBANDS; ++i) { if (selSliders[i]==0) $("#s"+i).slider( "value", 0 ); }
  }
}

function selectedSlidersShift(dir){
  var tmp;
  if (dir>0) {
    tmp=selSliders[9];
    for (var i = iNUMBERBANDS-1;i>0;--i) selSliders[i]=selSliders[i-1];
    selSliders[0]=tmp;
  } else {
    tmp=selSliders[0];
    for (var i = 0;i<iNUMBERBANDS-1;++i) selSliders[i]=selSliders[i+1];
    selSliders[9]=tmp;
  }
  selectedSlidersDraw();
}

function experimentalAudioFadeMode() { msg("[Audio Fade] Enter time in sec. (0..9)"); selSliders[10]=3;}

function ranNSliders() { msg("[Pick Sliders] Enter Proba (0..9)"); selSliders[10]=4;}

// Keypresses

Mousetrap.bind('m', function() { toggleMute(); });
Mousetrap.bind('a', function() { toggleModulation(); });
Mousetrap.bind('s', function() { $("#speed").click(); });
Mousetrap.bind('d', function() { $("#mode").click(); });
Mousetrap.bind('r', function() { $("#reset").click(); });
Mousetrap.bind('k', function() { slidersUp(); });
Mousetrap.bind('j', function() { slidersDown(); });
Mousetrap.bind('t', function() { $("#timer").click(); });
Mousetrap.bind('h', function() { help(); });
Mousetrap.bind('o', function() { setTimer(25);activateButton(["timer"],1);msg("Pomodoro timer set!");});
Mousetrap.bind('w', function() { setPreset(0.18,0.21,0.24,0.27,0.3,0.34,0.38,0.42,0.46,0.5,"White"); });
Mousetrap.bind('p', function() { setPreset(0.3,0.3,0.3,0.3,0.3,0.3,0.3,0.3,0.3,0.3,"Pink"); });
Mousetrap.bind('b', function() { setPreset(0.5,0.46,0.42,0.38,0.34,0.3,0.27,0.24,0.21,0.18,"Brown"); });
Mousetrap.bind('z', function() { setPreset(0,0,0,0,0,0,0,0,0,0,"Zeroed"); });
Mousetrap.bind('0', function() { selectedSlidersAdd(0);});
Mousetrap.bind('1', function() { selectedSlidersAdd(1);});
Mousetrap.bind('2', function() { selectedSlidersAdd(2);});
Mousetrap.bind('3', function() { selectedSlidersAdd(3);});
Mousetrap.bind('4', function() { selectedSlidersAdd(4);});
Mousetrap.bind('5', function() { selectedSlidersAdd(5);});
Mousetrap.bind('6', function() { selectedSlidersAdd(6);});
Mousetrap.bind('7', function() { selectedSlidersAdd(7);});
Mousetrap.bind('8', function() { selectedSlidersAdd(8);});
Mousetrap.bind('9', function() { selectedSlidersAdd(9);});
Mousetrap.bind('+', function() { selectedSlidersVolUp(0.06);selSliders[10]=0});
Mousetrap.bind('-', function() { selectedSlidersVolDown(0.06);selSliders[10]=0});
Mousetrap.bind('*', function() { selectedSlidersVolUpDown(0.03);selSliders[10]=0});
Mousetrap.bind('/', function() { selectedSlidersFunction(0);});
Mousetrap.bind('enter', function() { selectedSlidersReset();});
Mousetrap.bind('=', function() { selectedSlidersFunction(1);});
Mousetrap.bind('f', function() { experimentalAudioFadeMode();});
Mousetrap.bind('ù', function() { experimentalPitchRandom();});
Mousetrap.bind('%', function() { experimentalOSauto();});
Mousetrap.bind('µ', function() { stemDrop(); });
Mousetrap.bind('n', function() { ranNSliders();});
Mousetrap.bind('del', function() { selectedSlidersZero(1);});
Mousetrap.bind('@', function() { selectedSlidersZero(1);});
Mousetrap.bind('shift+del', function() { selectedSlidersZero(-1);});
Mousetrap.bind('#', function() { selectedSlidersZero(-1);});
Mousetrap.bind('<', function() { selectedSlidersShift(1);});
Mousetrap.bind('>', function() { selectedSlidersShift(-1);});
Mousetrap.bind('g', function() { playAllSounds();setAllLevels();msg("Now Playing...");});
Mousetrap.bind('y', function() { tune(432/440);msg("Experimental - Now tuned to A4=432Hz"); });
Mousetrap.bind('?', function() { randomSettings(); });
Mousetrap.bind('c', function() { collectNZ(); });
Mousetrap.bind('shift+c', function() { customGenLaunch(); });
Mousetrap.bind('x c', function() { clearStack(); });

// favs
var fData=new Array();

var curGenCode="SOLFEGGIO";

function favorite(what){
  addToFavorites(what);
  refreshFavs();
}

function addToFavorites(what){
  var ndx=fData.indexOf(what);
  if (ndx==-1){
    $('#f'+what).attr('src','/Pix/fav_b.png');
    fData.push(what);
  }
  else { // is a favorite
    $('#f'+what).attr('src','/Pix/fav.png');
    fData.splice(ndx,1);
  }
  fCookieWrite();
}

function fCookieRead(){
  var uids=readCookie('uIDS');
  var cookieName='fSET_'+uids;
  var tmp=readCookie(cookieName);
  if (tmp!=null) fData=JSON.parse(tmp);
}

function fCookieWrite(){
  var uids=readCookie('uIDS');
  var cookieName='fSET_'+uids;
  var days=36500;
  createCookie(cookieName,JSON.stringify(fData),days);
}

function highlightFavs(){
  $('.iFV').css('display', 'inline');
  $('.iFV').prop('title', 'Your favorites');
  $('.iFV').data('powertip','Your favorites');
  $('.iFV').css( 'cursor', 'pointer' );
  fCookieRead();
  for (var i in fData) {
      $('#f'+fData[i]).attr('src','/Pix/fav_b.png');
  }
}

function toggleFavs(){
  if (!highlighted.localeCompare('favs')) { highlighted='none'; $('.hint').parent('span').show();}
  else { highlighted='favs'; $('.hint').parent('span').hide();}
  refreshFavs();

}

function refreshFavs(){
  if (!highlighted.localeCompare('favs')) {
    $('.DIM').css('opacity', '0.3');
    $('#iFV').attr('src','/Pix/fav_b.png');
    for (var i in fData) {
      $('.'+fData[i]).css('opacity', '1');
      $('.'+fData[i]).parent('span').show();
    }
    }
    else { $('.DIM').css('opacity', '1'); $('#iFV').attr('src','/Pix/fav_l.png');}
}

function checkFavGen(){
  fCookieRead();
  var ndx=fData.indexOf(curGenCode);
  if (ndx>-1) $('#f'+fData[ndx]).attr('src','/Pix/fav_b.png');
  $('#f'+curGenCode).css('display', 'inline');
  $('#f'+curGenCode).prop('title', 'Favorite');
  $('#f'+curGenCode).data('powertip','Favorite');
  $('#f'+curGenCode).css( 'cursor', 'pointer' );
  $('#f'+curGenCode).powerTip();
}

function addGenToFavs(){
  addToFavorites(curGenCode);
}
  </script>
  <script>
  $(function() {
    $( "#s0, #s1, #s2, #s3, #s4, #s5, #s6, #s7, #s8, #s9" ).slider({
      orientation: "Horizontal",
      range: "min",
    min: 0,
      max: 1,
      value: 1,
      step:0.01,
      animate: "slow",
      slide: function( event, ui ) {sliderChange(event.target.id)},
      change: function( event, ui ) {sliderChange(event.target.id)}
    });
  });
</script>

<script type="text/javascript">
    $(function() {
      $('.actionlink,.blue,.powertip').powerTip({placement: 'nw'});
      $('#reset,#anim,#speed,#mode,#volDown,#volUp,#mute,#timer').powerTip({placement: 'n'});
      $('#s0,#s1,#s2,#s3,#s4,#s5,#s6,#s7,#s8,#s9').powerTip({placement: 'n', mouseOnToPopup: true, offset: 0});
      $('.powertipS').powerTip({placement: 's'});
    });
</script>
<script>
function createCookie(name,value,days) {
  if (days) {
    var date = new Date();
    date.setTime(date.getTime()+(days*24*60*60*1000));
    var expires = "; expires="+date.toGMTString();
  }
  else var expires = "";
  document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(';');
  for(var i=0;i < ca.length;i++) {
    var c = ca[i];
    while (c.charAt(0)==' ') c = c.substring(1,c.length);
    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length).replace(/%2C/g,",");  // if cookie has been set from the cloud, the %2C needs to be replaced by a comma;
  }
  return null;
}

function eraseCookie(name) {
  createCookie(name,"",-1);
}
</script>

</head>

<body onload="init()" data-gr-c-s-loaded='true'>
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
            <h1 class="font-logo mb-2">Bliss Zone</h1>
            
          <p> Please use stereo headphones for all Binaural Beats </p>
<!--             <p style="font-size: 16px"> Carrier Frequency: <span id="carrierLabel">432 Hz</span><br>
  <input class="masterVolume" id="carrier" type="range" value="432" min="40" max="1000" step="1" oninput="handleCarrierChange(value)" />
</p>
<p style="font-size: 16px">
  Binaural Beat Frequency: <span id="beatLabel">6</span><br>
  <input class="masterVolume" id="beat" type="range" value="6" min="0" max="40" step="1" oninput="handleBeatChange(value)" />
</p>
<p style="font-size: 16px">
  Volume: <span id="volumeLabel">50</span><br>
  <input class="masterVolume" id="beat" type="range" value="50" min="0" max="100" step="1" oninput="handleVolumeChange(value)" />
</p> -->

<p>
  <button name="toggleButton" class="contextPlay" style="padding: 0px;
    font-size: 17px;border:none;background: transparent;box-shadow: none;position: relative;left: 0;top: 0;bottom: 0;" onclick="toggleSound()" >
      <img src="assets/img/playButtonShadow.png" width="128" height="128">
    </button>

</p>
       

     </div>


        <div class="Title mt-0" style="">
            <!-- <p>Ambient sounds to wash away distraction.</p> -->

                 <div class="msg" id="msg"></div>
            <p>
                <!-- <button name="toggleButton" onclick="toggleSound()">Start / Stop</button> -->
            </p>

<!--             <p> Carrier Frequency: <span id="carrierLabel">432 Hz</span><br><br><br>
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



            <div class="container" style="padding-left: 150px;">

                <div class="col-md-12 text-center icon--holder">
                <a href="javascript:void(0)" onclick="toggleModulation()" ><i class="fas fa-expand-arrows-alt"></i></a>
                <a href="javascript:void(0)" onclick="setAnimationMode()"><i class="fas fa-anchor"></i></a>
                <a style="line-height: 21px; margin-right: 130px" onclick="setAnimationSpeed();" href="javascript:void(0)"><i class="fas fa-tachometer-alt"></i></a>
                <p style="color: #fff;" id="demo"></p>
            </div>



                <div class="audio-div " style="margin: 0 0 40px;padding: 0; min-height: 100px;">
                    <div class="row mb-5">
                        <div class="col-md-1 pl-0">
                            <span class="font-frq" style="margin-top: 0;font-size: 15px;
    display: block;
    text-align: left;">
                                Carrier Frequency:
                            </span>
                        </div>
                        <div class="col-md-8 slider-ppt-3">
                            <input class="masterVolume __rangee1" id="carrier" type="range" value="140" min="0" max="1000" step="1" oninput="handleCarrierChange(value)" />
                        </div>
                        <div class=" col-md-1  no-slider-ppt">
                            <h3 class="text-center" style="margin-top: 8px;"><span id="carrierLabel" class="font-frq1" style="top:0;">432 Hz</span></h3>

                        </div>
                    </div>
                </div>


                <div class="player mt-3">        

                    <div class="calGrid" id="calGrid"></div>
                   <!--  <div class="contextPlay"><img src="assets/img/playButtonShadow.png" width="128px" height="128px" alt="Play" role="button"></div> -->
                  
                    <div class="mixer">
                        

                        <div class="row mb-5 ">
                            <div class="col-md-1 pr-4 text-center" >
                                <img src="./assets/icons/fire.png" width="" height="90"> 
                            </div>
                            <div class="col-md-8">

                                <div id="s0">
                                </div>

                               <!--   <div id="s0" aria-label="69.3Hz (Dr. P)" role="slider" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                  <div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min" style="height: 5.05051%;"></div>
                                  <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 5.05051%;"></span>
                                  <div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min" ></div>
                                </div> -->
                            </div>
                            <div class="col-md-1 pr-4 text-center" >
                                   <div class="msg" id="msg"></div>    
                            </div>
                        </div>

                        
                        <div class="row mb-5">
                            <div class="col-md-1 pr-4 text-center" >
                                 <img src="./assets/icons/flash.png" width="" height="90"> 
                            </div>
                            <div class="col-md-8">
                                   <div id="s1" aria-label="174Hz" role="slider" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"><div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min" style="height: 5.05051%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="bottom: 5.05051%; left: 3.0303%;"></span><div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min" style=""></div></div>
                            </div>
                            <div class="col-md-1 pr-4 text-center" >
                                 <div class="msg" id="msg"></div> 
                            </div>
                        </div>

                        <div class="row mb-5">
                            <div class="col-md-1 pr-4 text-center" >
                                <img src="./assets/icons/dove.png" style="margin-left: -15px;"  width="" height="90">
                            </div>
                            <div class="col-md-8">
                                <div id="s2" aria-label="285Hz" role="slider" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"><div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min" style="height: 5.05051%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="bottom: 5.05051%; left: 0%;"></span><div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min" style="width: 0%;"></div></div>
                            </div>
                        </div>
                      
                        <div class="row mb-5">
                            <div class="col-md-1 pr-4 text-center" >
                                 <img src="./assets/icons/storm.png"  style="margin-left: -15px;"  width="" height="90">
                            </div>
                            <div class="col-md-8">
                                  <div id="s3" aria-label="396Hz (Ut)" role="slider" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"><div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min" style="height: 5.05051%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="bottom: 5.05051%; left: 2.0202%;"></span><div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min" style=""></div></div>
                            </div>
                             <div class="col-md-1 pr-4 text-center" >
                                 <div class="msg" id="msg3"></div> 
                            </div>
                        </div>


                         <div class="row mb-5">
                            <div class="col-md-1 pr-4 text-center" >
                                 <img src="./assets/icons/coffee-cup.png"  width="" height="90" style="margin-top: -35px;margin-left:-15px;;">
                            </div>
                            <div class="col-md-8">
                                   <div id="s4" aria-label="417Hz (Re)" role="slider" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"><div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min" style="height: 5.05051%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="bottom: 5.05051%; left: 0%;"></span><div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min" style="width: 0%;"></div></div>
                            </div>
                             <div class="col-md-1 pr-4 text-center" >
                                 <div class="msg" id="msg4"></div> 
                            </div>
                        </div>

                          <div class="row mb-5">
                            <div class="col-md-1 pr-4 text-center" >
                                 <img src="./assets/icons/flash.png"  width="" height="90">
                            </div>
                            <div class="col-md-8">
                                     <div id="s5" aria-label="528Hz (Mi)" role="slider" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"><div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min" style="height: 5.05051%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="bottom: 5.05051%; left: 0%;"></span><div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min" style="width: 0%;"></div></div>
                            </div>
                             <div class="col-md-1 pr-4 text-center" >
                                 <div class="msg" id="msg5"></div> 
                            </div>
                        </div>


                          <div class="row mb-5">
                            <div class="col-md-1 pr-4 text-center" >
                                 <img src="./assets/icons/flash.png"  width="" height="90">
                            </div>
                            <div class="col-md-8">
                                      <div id="s6" aria-label="639Hz (Fa)" role="slider" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"><div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min" style="height: 5.05051%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="bottom: 5.05051%; left: 0%;"></span><div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min" style="width: 0%;"></div></div>
                            </div>
                             <div class="col-md-1 pr-4 text-center" >
                                 <div class="msg" id="msg6"></div> 
                            </div>
                        </div>


                          <div class="row mb-5">
                            <div class="col-md-1 pr-4 text-center" >
                                 <img src="./assets/icons/coffee-cup.png"  width="" height="80" style="margin-top: -35px;margin-left:-15px;">
                            </div>
                            <div class="col-md-8">
                                     <div id="s7" aria-label="741Hz (Sol)" role="slider" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"><div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min" style="height: 5.05051%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="bottom: 5.05051%; left: 0%;"></span><div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min" style="width: 0%;"></div></div>
                            </div>
                             <div class="col-md-1 pr-4 text-center" >
                                 <div class="msg" id="msg7"></div> 
                            </div>
                        </div>


                         <div class="row mb-4 pb-5">
                            <div class="col-md-1 pr-4 text-center" >
                                 <img src="./assets/icons/singing-bowl.png"  width="" height="80" style="height: 70px !important;margin-top: -20px;margin-left: -15px;">
                            </div>
                            <div class="col-md-8">
                                  
                      <div id="s8" aria-label="852Hz (La)" role="slider" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"><div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min" style="height: 5.05051%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="bottom: 5.05051%; left: 0%;"></span><div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min" style="width: 0%;"></div></div>
                            </div>
                             <div class="col-md-1 pr-4 text-center" >
                                 <div class="msg" id="msg8"></div> 
                            </div>
                        </div>


                           <div class="row mb-3 " style="margin-top: 40px">
                            <div class="col-md-1 pr-4 text-center" >
                                 <img src="./assets/icons/wave.png"  width="" height="70" style="height: 70px !important; margin-left: -15px;">
                            </div>
                            <div class="col-md-8">
                                  
                           <div id="s9" aria-label="963Hz (Si)" role="slider" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"><div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min" style="height: 5.05051%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="bottom: 5.05051%; left: 0%;"></span><div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min" style="width: 0%;"></div></div>
                            <div class="col-md-1 pr-4 text-center" >
                                 <div class="msg" id="msg9"></div> 
                            </div>
                        </div>


                         

                     
                   
                     
                    
                
                    </div>
                    
                 

                    <div class="controlers">
                  
                         <!--  <div class="btn"><img src="/Pix/icon_reset.png" id="reset" class="btnImg" onclick="resetSliders()" onmouseover="msg('Type [H] for Help')" alt="Reset Sliders" role="button" style="pointer-events: auto;"></div> -->
                       <!--    <div class="btn"><img src="/Pix/icon_animate.png" id="anim" class="btnImg" onclick="toggleModulation()" onmouseover="msg('Type [H] for Help')" alt="Slider Animation" role="button" style="pointer-events: auto;"></div> -->
                       <div class="btn"><img src="/Pix/icon_speed.png" id="speed" class="btnImg sub inaudible disabled" onclick="setAnimationSpeed()" onmouseover="msg('Type [H] for Help')" alt="Animation Speed" role="button" style="pointer-events: none;"><div id="speedText" class="btnCaption disabled"></div></div>
                          <div class="btn"><img src="/Pix/icon_mode.png" id="mode" class="btnImg sub inaudible" onclick="setAnimationMode()" onmouseover="msg('Type [H] for Help')" alt="Animation Mode" role="button" style="pointer-events: auto;"><div id="modeText" class="btnCaption"></div></div>
                          <div class="btn"><img src="/Pix/icon_speed.png" id="speed" class="btnImg sub inaudible" onclick="setAnimationSpeed()" onmouseover="msg('Type [H] for Help')" alt="Animation Speed" role="button" style="pointer-events: auto;"><div id="speedText" class="btnCaption"></div></div>
                         <!--  <div class="btn"><img src="/Pix/icon_volDown.png" id="volDown" class="btnImg" onclick="slidersDown()" onmouseover="msg('Type [H] for Help')" alt="Volume Down" role="button" style="pointer-events: auto;"></div>
                          <div class="btn"><img src="/Pix/icon_volUp.png" id="volUp" class="btnImg" onclick="slidersUp()" onmouseover="msg('Type [H] for Help')" alt="Volume Up" role="button" style="pointer-events: auto;"></div> -->
                       <!--    <div class="btn"><img src="/Pix/icon_mute.png" id="mute" class="btnImg" onclick="toggleMute();" onmouseover="msg('Type [H] for Help')" alt="Mute" role="button" style="pointer-events: auto;"></div>
                          <div class="btn"><img src="/Pix/icon_timer.png" id="timer" class="btnImg" onclick="setTimer()" onmouseover="msg('Type [H] for Help')" alt="Timer" role="button" style="pointer-events: auto;"><div id="timerText" class="btnCaption"></div></div> -->
                          
                    </div>
                    
                  
               
                  
                  </div>

                  


                <div class="audio-div " style="margin: 0; padding: 0;">
                    
                    

                    <div class="row">
                        <div class="col-md-1">
                            <span class="font-frq">
                                Volume:
                            </span>
                        </div>
                        <div class="col-md-8 slider-ppt-3">
                          <!-- <div id="b"></div> -->
                            <input class="masterVolume __rangee3" id="beat" type="range" value="15" min="0" max="100" step="1" oninput="handleVolumeChange(value) "   />
                        </div>
                        <div class=" col-md-1  no-slider-ppt">
                            <h3 class="text-center" style="margin-top: 8px;">
                                <span id="volumeLabel" class="font-frq1" style="top: 0;">50</span>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-10 mt-5">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="">
                          <a class="btn btn-primary btn-block" onclick="slidersDown()" href="javascript:void(0)">
                              Slider Down
                          </a>
                        </div>
                       
                      </div>

                      <div class="col-md-6">
                           
                  <a class="btn btn-secondary btn-block" onclick="slidersUp()" href="javascript:void(0)">
                              Slider Up
                          </a>
                         
                      </div>

                    </div>
                  </div>


            </div>


    


          <!--   <div class="col-md-12">
                <div class="audio-div ">
                    <div class="row">
                        <div class="col-md-2">
                            <span class="font-frq">
                                Binaural Beat Frequency
                            </span>
                        </div>
                        <div class="col-md-9 slider-ppt-3">
                            <input class="masterVolume __rangee2" id="beat" type="range" value="6" min="0" max="40" step="1" oninput="handleBeatChange(value)" />
                        </div>
                        <div class=" col-md-1  no-slider-ppt">
                            <h3 class="text-center"><span id="beatLabel" class="font-frq1">6</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div> -->
  
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
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->

    <!-- Popper JS -->
   <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"></script> -->



    <!-- <script src="./script_a.js"></script> -->
    


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
                'color-stop(' + val + ', #000000)' +
                ')'
            );
        });



    </script>


  

</body>

</html>