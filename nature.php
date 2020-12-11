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
     <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> -->
    <!-- <link rel="stylesheet" href="stylesheet.css"> --> 
    <!-- <link rel="stylesheet" href="./style_a.css"> -->
    <!-- <link rel="stylesheet" href="./plyr.css"> -->
    <!-- <link rel="stylesheet" href="./mystyle.css"> -->

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


           #vol {
            margin: 30px 0 20px 0;
            -webkit-appearance: none;
            background-color: #f5f6f8;
            height: 14px;
            width: 100%;
            margin: 10px auto;
            box-shadow: none;
            border-radius: 15px;
        }

        #vol:focus {
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
.slider-ppt-3{    padding-top: 3.05rem;}
    </style>
</head>

<body>
    <div id="load"></div>

    <div class="bg-main">
        <nav class="navbar navbar-expand-lg navbar-light bg-nav">
            <a class="navbar-brand" href="index.php">
                <img src="./assets/img/logo-bliss_zone.png" width="45" height="45" alt="">
                <span class="font-logo">Bliss Zone</span> </a>


            <div class="text-right fade-p mb-mt-1">
                <div class="d-flex justify-content-start mt-2">
                    <div class="">
                        <div id="" class="mute_div">
                            <span class="font-mute" id="muteButton">MUTE</span>
                            <span class="font-mute" id="vol_up_Button">UNMUTE</span>
                            <!-- <i class="fas fa-volume-mute" id="muteButton"> </i>
                                        <i class="fas fa-volume-up" id="vol_up_Button"> </i> -->
                        </div>
                    </div>

                    <!-- <p>master volume</p> -->
                    <div class="">

                    </div>
                    <div class="pl-3 mstr">
                        <input type="range" class="masterVolume" id="masterAudio" max="1" min="0" step="0.01" value="1" onchange="masterChangeVolume(this.value)" />
                        <!-- <input type="range" class="masterVolume" id="z" max="1" min="0" step="0.01" /> -->
                        <div id="audioSlider"></div>
                    </div>
                </div>
            </div>



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
        </div>

        <div class="v-middle">
            <!-- class="card-main "     -->
            <div>
                <div class="container ">


                    <!-- <button onclick="getvvvolume()" type="button">What is the volume?</button> -->
                    <div class="d-flex justify-content-between">
                        <div class="vertical-center ">
                            <div id="undo-trash" class="">
                                <input type="hidden" id="revert">
                                <i class="fas fa-undo revert  
fa_font_revert_undo" onclick="create_revert();"></i>
                                <i class="fas fa-trash trash 
fa_font_revert_undo" onclick="create_trash()"></i>
                            </div>
                        </div>
                        <div class="text-center m-btn-ply-pause ">
                            <button id="stopButton" type="button" value="">
                                <img src="./assets/play-pause-icon/pause.png">
                                <!-- <i class="fas fa-pause ply-pause-d"></i> -->

                            </button>
                            <button id="playButton" type="button">
                                <img src="./assets/play-pause-icon/play.png">
                                <!-- <i class="fas fa-play ply-pause-d"></i> -->

                            </button>
                        </div>
                        <div class="vertical-center ">
                            <div id="start-stop" class="click-stop-stop">
                                <img src="./assets/icons/life.png">
                            </div>
                        </div>
                    </div>
                    <div class="players" id="player2-container">
                        <div class="d-flex justify-content-center ">

                            <!-- <div class=" fade-p">
                                    <p>fade out sound</p>
                                    <input name="1" id="fadeOutvvvolume" type="range" min="1000" max="7000" step="10"
                                        value="0" oninput="sliderChangeFadeOut(this.value)">
                                    <br />
                                    <output id="outputFadeOut"></output>
                                </div> -->
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="text-center mb-4 mt-4">


                                <!-- <button  class="shrd-btn" onclick="FadeIn();">audioVolumeOut
                                        </button>
                                         -->
                                <!-- <button onclick="(new hit()).audioVolumeOut();" class="shrd-btn">audioVolumeOut
                                        </button> -->
                            </div>
                            <div class="animated  fadeInLeft delay-4s">
                                <div class="text-center">
                                    <button id="start_stop">
                                        <img src="./assets/icons/chronometer.png">
                                    </button>
                                </div>
                            </div>

                            <div class="animated  fadeInLeft delay-3s">
                                <div class="text-center">
                                    <button id="random_mix">
                                        <img src="./assets/icons/random-button.png">
                                    </button>
                                </div>
                            </div>
                            <div class="animated  fadeInLeft delay-2s">
                                <div class="text-center">
                                    <button id="button_share">
                                        <img src="./assets/icons/me.png">
                                    </button>
                                </div>
                            </div>


                        </div>
                        <div id="shared-items">

                            <div class="text-center mb-4 mt-4">
                                <button onclick="(new hit()).create_url();" class="shrd-btn">Create
                                    Mix</button>
                            </div>
                            <div class="text-center mt-3 mb-4">
                                <p style="display: none;">Copy Mix: <span class="current_shared_url">
                                    </span></p>
                            </div>
                            <div class=" ml-5 mr-5 mb-4 ">
                                <div class="d-flex justify-content-center">
                                    <p style="color: white;" class="pt-3  pr-3">Copy Mix: <span class="current_shared_url"></span>
                                        </span></p>
                                    <input type="text" id="current_shared_url">
                                    <!-- The button used to copy the text -->
                                    <button class="copy-mix-" onclick="copyFunction()">Copy text</button>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-4">
                                    <div id="div1">
                                        <div id="fb" onclick="(new hit()).share_linkdin();">
                                            <img src="./assets/icons/linkedin.png">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div id="div2">
                                        <div id="fb" onclick="(new hit()).share_fb();">
                                            <img src="./assets/icons/facebook.png">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div id="div3">
                                        <div id="fb" onclick="(new hit()).share_twitter();">
                                            <img src="./assets/icons/twitter (1).png">
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="text-right pt-3">
                                <button class="btn close_btn" id="share-close">
                                    Close
                                </button>
                            </div>
                        </div>

                        <div id="start_stop-items">

                            <div class="">
                                <div class="d-flex justify-content-between">
                                    <div class="">
                                        <div class="fade-p input-fade-p">

                                            <input type="number" id="number" min="0" placeholder="Enter Time In Minutes " />
                                            <button class="start-after" onclick="countdown()">Start After</button>
                                            <!-- <div id="div_timer">1
                                                </div> -->
                                        </div>
                                    </div>


                                    <div class="">
                                        <div class="fade-p input-fade-p ">
                                            <!--<p>fade in sound</p>
                <input name="1" id="fadeInVolume" type="range" min="1000" max="7000" step="10"
                    value="0" oninput="sliderChange(this.value)">
                <br />
                <output id="output"></output> -->
                                            <input type="number" id="number_stop" min="0" placeholder="Enter Time In Minutes" />
                                            <button class=" start-after" onclick="countdown_stop()">Stop
                                                After</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-right pt-3">
                                <button class="btn close_btn" id="start_stop_counter">
                                    Close
                                </button>
                            </div>
                        </div>
                        <div id="random_mix_items">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="div1" class="box">
                                        <Select id="Selector" onchange="myFunction()">
                                            <option value="">Select option</option>
                                            <option value="soothe">Soothing Down</option>
                                            <option value="breezy">Breezy Evening</option>
                                            <option value="tidal">Tidal Waves Rising</option>
                                            <option value="ambient">Ambient Meditation</option>
                                            <option value="stormy">Heavy Stormy Day</option>
                                        </Select>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="d-flex justify-content-center">
                                    <div class="mt-3 mb-3">
                                        <button onclick="showCreateMix()" class="btn_mix">Create
                                            New Mix</button>
                                    </div>
                                </div> -->
                            <div class="  mb-3 mt-3 input_create_mix">
                                <div class="d-flex justify-content-center">
                                    <!-- <p style="color: white;" class="pt-3  pr-3">Copy Mix: <span class="current_shared_url"></span>
                                            </span></p> -->
                                    <input type="hidden" id="current_shared_mix_hide">
                                    <input type="text" id="current_shared_mix_name">
                                    <!-- The button used to copy the text -->
                                    <button class="copy-mix-" onclick="(new hit()).create_mix(),setLocalStorage()">save mix</button>
                                </div>
                            </div>
                            <!-- <div class="d-flex justify-content-center ">

                                    <a class="btn-show-a ml-3" onclick="getLocalStorage()">
                                        Show Mix
                                    </a>
                                    <a class="btn-show-a ml-3" onclick="clearMix()">
                                        Clear Mix
                                    </a>
                                </div> -->
                            <div class="" id="data">

                            </div>
                            <div class="text-right pt-3">
                                <button class="btn close_btn" id="close-random">
                                    Close
                                </button>
                            </div>




                        </div>


                        <!-- Audio List starts here -->




                        <div class="container" style="padding-left: 80px;">




                            <div class="col-md-12">
                                <div class="audio-div ">
                                    <!-- Image -->
                                    <div class="row">
                                        <div class="col-md-2">
                                             <a href="javascript:(new hit()).playSound('fire');">
                                            <img id="sound_each4" img_op="fire" src="./assets/icons/fire.png" >
                                        </a>
                                            <!-- <img src="./assets/icons/fire.png" class=" button red"> -->
                                        </div>
                                        <div class="col-md-8 pl-0 slider-ppt-3">
                                            <!-- <input class="__range1" type="range" id="vol" min="0" max="100" step="0.01" value="0" onchange="playSoundEach('blood',this.value),updateTextInput('blood',this.value)" /> -->
                                            
                                            <div id="slider"></div>
                                           <!--  <input type="range" id="vol" vol_op="fire" volumee="fire" playT="playT" max="1" min="0" step="0.01" value="0" onchange="playSoundEach('fire',this.value)" /> -->
                                              <input class="__range1" type="range" id="vol" vol_op="fire" volumee="fire" playT="playT" max="1" min="0" step="0.01" value="0" onchange="playSoundEach('fire',this.value), updateTextInput('blood',this.value) "  />
                                        </div>

                                         <audio id="fire" class="fire" src="./assets/sound/camp_fire.mp4" preload="off" loop></audio>

                                        <!-- Text -->
                                        <div class=" col-md-1  no-slider-ppt">
                                            <!-- <h3 class="text-center">0</h3> -->
                                            <h3>
                                             <input type="text" id="blood" value="0" class="valueClass">
                                         </h3>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="audio-div " style="display:block">
                                    <!-- Image -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <!-- <img src="./assets/icons/flash.png" class=" button red"> -->
                                              <a href="javascript:(new hit()).playSound('thunder');">
                                            <img id="sound_each2" img_op="thunder" src="./assets/icons/flash.png" >
                                        </a>
                                        </div>

                                       <div class="col-md-8 slider-ppt-3 pl-0">
                                            <!-- <input class="__range2" type="range" id="vol" min="0" max="100" step="0.01" value="0" onchange="playSoundEach('adrenals',this.value),updateTextInput('adrenals',this.value) " /> -->

                                             <input type="range" id="vol" vol_op="thunder" volumee="thunder" playT="playT" max="1" min="0" step="0.01" value="0" onchange="playSoundEach('thunder',this.value) , updateTextInput('adrenals',this.value)" />
                                        </div>
                                        <audio id="thunder" class="thunder" src="./assets/sound/double_thunder.mp4" preload="off" loop></audio>
                                        <div class=" col-md-1 no-slider-ppt">
                                            <h3 class="text-center">
                                                <input type="text" id="adrenals" value="0" class="valueClass">
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="audio-div " style="display:block">
                                    <!-- Image -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <!-- <img src="./assets/icons/dove.png" class=" button red" style="margin-top: 25px;"> -->
                                            <a href="javascript:(new hit()).playSound('birds');" style="margin-top: 25px;">
                                            <img id="sound_each6" img_op="birds" src="./assets/icons/dove.png"> </a>
                                        </div>
                                         <div class="col-md-8 slider-ppt-3 pl-0">
                                           <!--  <input class="__range3" type="range" id="vol" min="0" max="100" step="0.01" value="0" onchange="playSoundEach('kidney',this.value),updateTextInput('kidney',this.value)" /> -->

                                            <input class="__range3" type="range" id="vol" vol_op="birds" volumee="wind" playT="playT" max="1" min="0" step="0.01" value="0" onchange="playSoundEach('birds',this.value) , updateTextInput('kidney',this.value) " />

                                        </div>

                                        <audio id="birds" class="birds" src="./assets/sound/bird_chirping.mp4" preload="off" loop></audio>


                                        <div class=" col-md-1 no-slider-ppt">
                                            <h3 class="text-center">
                                                <input type="text" id="kidney" value="0" class="valueClass">
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="audio-div " style="display:block">
                                    <!-- Image -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <!-- <img src="./assets/icons/storm.png" class=" button red"> -->
                                              <a href="javascript:(new hit()).playSound('rain');">
                                            <img id="sound_each1" img_op="rain" src="./assets/icons/storm.png">
                                        </a>
                                        </div>
                                        <div class="col-md-8 slider-ppt-3 pl-0">
                                            <!-- <input class="__range4" type="range" id="vol" min="0" max="100" step="0.01" value="0" onchange="playSoundEach('liver',this.value),updateTextInput('liver',this.value)" /> -->

                                              <input type="range" id="vol" vol_op="rain" volumee="rain" playT="playT" max="1" min="0" step="0.01" value="0" onchange="playSoundEach('rain',this.value) , updateTextInput('liver',this.value)" />

                                        </div>

                                        <audio id="rain" src="./assets/sound/light_rain.mp4" preload="off" loop></audio>


                                        <div class=" col-md-1 no-slider-ppt">
                                            <h3 class="text-center">
                                                <input type="text" id="liver" value="0" class="valueClass">
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="audio-div " style="display:block">
                                    <!-- Image -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <!-- <img src="./assets/icons/coffee-cup.png" class=" button red"> -->
                                             <a href="javascript:(new hit()).playSound('wind');">
                                            <img id="sound_each7" style="margin-top: 12px;" img_op="wind" src="./assets/icons/Page-1@2x.png">
                                        </a>
                                        </div>
                                        <div class="col-md-8 slider-ppt-3 pl-0">
                                      <!--       <input class="__range5" type="range" id="vol" min="0" max="100" step="0.01" value="0" onchange="playSoundEach('re',this.value),updateTextInput('bladder',this.value)" /> -->

                                      <input type="range" id="vol" vol_op="wind" volumee="wind" playT="playT" max="1" min="0" step="0.01" value="0" onchange="playSoundEach('wind',this.value) , updateTextInput('bladder',this.value)" />

                                        </div>

                                         <audio id="wind" class="wind" src="./assets/sound/strong_wind.mp4" preload="off" loop></audio>


                                        <div class=" col-md-1 no-slider-ppt">
                                            <h3 class="text-center">
                                                <input type="text" id="bladder" value="0" class="valueClass">
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="audio-div " style="display:block">
                                    <!-- Image -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <!-- <img src="./assets/icons/coffee-cup.png" class=" button red"> -->
                                             <a href="javascript:(new hit()).playSound('crickets');">
                                            <img id="sound_each12" style="margin-top: 12px;" img_op="crickets" src="./assets/icons/cricket.png">
                                        </a>
                                        </div>
                                        <div class="col-md-8 slider-ppt-3 pl-0">
                                      <!--       <input class="__range5" type="range" id="vol" min="0" max="100" step="0.01" value="0" onchange="playSoundEach('re',this.value),updateTextInput('bladder',this.value)" /> -->
                                     <!--  <div class="">
                                                <input type="range" id="vol" vol_op="crickets" volumee="crickets" playt="playT" max="1.01" min="0" step="0.01" value="0" onchange="playSoundEach('crickets',this.value)" class="slred" style="background: linear-gradient(to right, red 0%, red 0%, transparent 0%, transparent 100%);">
                                            </div> -->

                                      <input type="range" id="vol" vol_op="crickets" volumee="crickets" playT="playT" max="1" min="0" step="0.01" value="0" onchange="playSoundEach('cricket',this.value) , updateTextInput('bladderr',this.value)" />

                                        </div>

                                         <audio id="crickets" class="crickets" src="./assets/sound/night_cricket.mp4" preload="off" loop></audio>


                                        <div class=" col-md-1 no-slider-ppt">
                                            <h3 class="text-center">
                                                <input type="text" id="bladderr" value="0" class="valueClass">
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="audio-div " style="display:block">
                                    <!-- Image -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <!-- <img src="./assets/icons/wave.png" class=" button red"> -->
                                             <a href="javascript:(new hit()).playSound('waves');">
                                            <img id="sound_each5" img_op="waves" style="height: 75px" src="./assets/icons/wave.png">
                                        </a>

                                        </div>
                                        <div class="col-md-8 slider-ppt-3 pl-0">
                                           <!--  <input class="__range6" type="range" id="vol" min="0" max="100" step="0.01" value="0" onchange="playSoundEach('intestines',this.value),updateTextInput('intestines',this.value)" /> -->

                                           <input type="range" id="vol" vol_op="waves" volumee="waves" playT="playT" max="1" min="0" step="0.01" value="0" onchange="playSoundEach('waves',this.value) , updateTextInput('intestines',this.value)" />

                                        </div>

                                         <audio id="waves" class="waves" src="./assets/sound/lake_waves.mp4" preload="off" loop></audio>

                                        <div class=" col-md-1 no-slider-ppt">
                                            <h3 class="text-center">
                                                <input type="text" id="intestines" value="0" class="valueClass">
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="audio-div " style="display:block">
                                    <!-- Image -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <!-- <img src="./assets/icons/singing-bowl.png" class=" button red"> -->
                                              <a href="javascript:(new hit()).playSound('singing_bowl');">
                                            <img id="sound_each8" img_op="singing_bowl" height="75" style="height: 75px" src="./assets/icons/singing-bowl.png" > </a>
                                        </div>
                                       <div class="col-md-8 slider-ppt-3 pl-0" style="    padding-top: 2.35rem;">
                                           <!--  <input class="__range7" type="range" id="vol" min="0" max="100" step="0.01" value="0" onchange="playSoundEach('lungs',this.value),updateTextInput('lungs',this.value)" /> -->

                                             <input type="range" id="vol" vol_op="singing_bowl" volumee="singing_bowl" playT="playT" max="1" min="0" step="0.01" value="0" onchange="playSoundEach('singing_bowl',this.value) , updateTextInput('lungs',this.value)" />

                                        </div>

                                          <audio id="singing_bowl" class="singing_bowl" src="./assets/sound/14inch_bowl.mp4" preload="off" loop></audio>

                                        <div class=" col-md-1 no-slider-ppt">
                                            <h3 class="text-center">
                                                <input type="text" id="lungs" value="0" class="valueClass">
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="d-flex justify-content-center social">
        <div class="">
            <i class="social fab fa-facebook-square " aria-hidden="true"></i>
        </div>
        <div class="">
            <i class="social fab fa-twitter" aria-hidden="true"></i>
        </div>
        <div class="">
            <i class="social fab fa-youtube"></i>
        </div>
    </div> -->
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
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->

    <!-- Lahit compiled JavaScript -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> -->
     <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="https://mynoise.net/JQ/jquery-ui-1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://mynoise.net/JQ/jquery.jscrollpane.min.js"></script>
    <script type="text/javascript" src="https://mynoise.net/JQ/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="https://mynoise.net/JQ/mousetrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pizzicato/0.6.2/Pizzicato.js"></script>

    <!-- <script src="./healing.js"></script> -->

        <!-- <script src="./nature-script.js"></script> -->

    <script src="./script-f.js"></script>
    <script src="./plyr.js"></script>
    <!-- <script src="./player-f.js"></script>  -->
   

    <!-- <script  src="https://supernaturalbp.com/apps/bliss/myscript.js"></script> -->
    <script src="./myf-script.js"></script>



    <script type="text/javascript">
        this.updateTextInput = function (idForVal, val) {
            console.log(idForVal);
            if (val == 0.1){
                val = 1;
            }

             else if (val == 0.02){
                val = 2;
            }

             else if (val == 0.03){
                val = 3;
            }


             else if (val == 0.04){
                val = 4;
            }

             else if (val == 0.05){
                val = 5;
            }


             else if (val == 0.06){
                val = 6;
            }


             else if (val == 0.07){
                val = 7;
            }


             else if (val == 0.08){
                val = 8;
            }


             else if (val == 0.09){
                val = 9;
            }


             else if (val == 0.10){
                val = 10;
            }

             else if (val == 0.11){
                val = 11;
            }

              else if (val == 0.12){
                val = 12;
            }


              else if (val == 0.13){
                val = 13;
            }

              else if (val == 0.14){
                val = 14;
            }

              else if (val == 0.15){
                val = 15;
            }

              else if (val == 0.16){
                val = 16;
            }


              else if (val == 0.17){
                val = 17;
            }


                  else if (val == 0.18){
                val = 18;
            }


              else if (val == 0.19){
                val = 19;
            }


              else if (val == 0.20){
                val = 20;
            }


              else if (val == 0.21){
                val = 21;
            }


              else if (val == 0.22){
                val = 22;
            }

            else if (val == 0.23){
                val = 23;
            }

            else if (val == 0.24){
                val = 24;
            }


            else if (val == 0.25){
                val = 25;
            }


            else if (val == 0.26){
                val = 26;
            }


            else if (val == 0.27){
                val = 27;
            }

            else if (val == 0.28){
                val = 28;
            }


            else if (val == 0.29){
                val = 29;
            }

            else if (val == 0.30){
                val = 30;
            }

            else if (val == 0.31){
                val = 31;
            }

            else if (val == 0.32){
                val = 32;
            }

            else if (val == 0.33){
                val = 33;
            }


            else if (val == 0.34){
                val = 34;
            }

             else if (val == 0.35){
                val = 35;
            }

             else if (val == 0.36){
                val = 36;
            }


             else if (val == 0.37){
                val = 37;
            }


             else if (val == 0.38){
                val = 38;
            }


             else if (val == 0.39){
                val = 39;
            }


             else if (val == 0.40){
                val = 40;
            }

             else if (val == 0.41){
                val = 41;
            }

             else if (val == 0.42){
                val = 42;
            }

             else if (val == 0.43){
                val = 43;
            }

             else if (val == 0.44){
                val = 44;
            }


             else if (val == 0.45){
                val = 45;
            }


             else if (val == 0.46){
                val = 46;
            }


             else if (val == 0.47){
                val = 47;
            }


             else if (val == 0.48){
                val = 48;
            }


             else if (val == 0.49){
                val = 49;
            }


           


             else if (val == 0.50){
                val = 50;
            }


             else if (val == 0.51){
                val = 51;
            }


             else if (val == 0.52){
                val = 52;
            }


             else if (val == 0.53){
                val = 53;
            }


             else if (val == 0.54){
                val = 54;
            }


             else if (val == 0.55){
                val = 55;
            }


             else if (val == 0.56){
                val = 56;
            }


             else if (val == 0.57){
                val = 57;
            }


             else if (val == 0.58){
                val = 58;
            }


             else if (val == 0.59){
                val = 59;
            }


             else if (val == 0.60){
                val = 60;
            }


         

             else if (val == 0.61){
                val = 61;
            }


             else if (val == 0.62){
                val = 62;
            }


             else if (val == 0.63){
                val = 63;
            }


             else if (val == 0.64){
                val = 64;
            }


             else if (val == 0.65){
                val = 65;
            }


             else if (val == 0.66){
                val = 66;
            }


             else if (val == 0.67){
                val = 67;
            }

              else if (val == 0.68){
                val = 68;
            }

              else if (val == 0.69){
                val = 69;
            }


              else if (val == 0.70){
                val = 70;
            }


              else if (val == 0.71){
                val = 71;
            }


              else if (val == 0.72){
                val = 72;
            }


              else if (val == 0.73){
                val = 73;
            }


              else if (val == 0.74){
                val = 74;
            }

              else if (val == 0.75){
                val = 75;
            }


              else if (val == 0.76){
                val = 76;
            }


              else if (val == 0.77){
                val = 77;
            }


              else if (val == 0.78){
                val = 78;
            }


              else if (val == 0.79){
                val = 79;
            }


              else if (val == 0.80){
                val = 80;
            }


              else if (val == 0.81){
                val = 81;
            }


              else if (val == 0.82){
                val = 82;
            }


              else if (val == 0.83){
                val = 83;
            }

             else if (val == 0.84){
                val = 84;
            }

             else if (val == 0.85){
                val = 85;
            }

             else if (val == 0.86){
                val = 86
            }


             else if (val == 0.87){
                val = 87;
            }


             else if (val == 0.88){
                val = 88;
            }


             else if (val == 0.89){
                val = 89;
            }


             else if (val == 0.90){
                val = 90;
            }


             else if (val == 0.91){
                val = 91;
            }


             else if (val == 0.92){
                val = 92;
            }


             else if (val == 0.93){
                val = 93;
            }


             else if (val == 0.94){
                val = 94;
            }


             else if (val == 0.95){
                val = 95;
            }

             else if (val == 0.96){
                val = 96;
            }

             else if (val == 0.97){
                val = 97;
            }

              else if (val == 0.98){
                val = 98;
            }




            else if (val == 0.99){
                val = 99;
            }
            else if (val == 1){
                val = 100;
            }
           
            document.getElementById(idForVal).value = val;
  }
    </script>

 <!--    <script type="text/javascript">
        $("#slider").slider({
    value  : 75,
    step   : 1,
    range  : 'min',
    min    : 0,
    max    : 100,
    change : function(){
        var value = $("#slider").slider("value");
        document.getElementById("fire").volume = (value / 100);
    }
});
    </script> -->

       <!-- <script>
        document.querySelectorAll("#vol").forEach(function(el) {
            el.oninput = function() {
                var valPercent = (el.valueAsNumber - parseInt(el.min)) /
                    (parseInt(el.max) - parseInt(el.min));
                var style = 'background-image: -webkit-gradient(linear, 0% 0%, 100% 0%, color-stop(' + valPercent + ', #5ed2f0), color-stop(' + valPercent + ', #7e8798));';
                el.style = style;
            };
            el.oninput();
        });
    </script> -->   
</body>

</html>