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
    <script src="./plyr.js"></script>


 <style>

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
                    <div id="container ">
					
					
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

						  <div class="row animated  bounceInUp delay-4s">
                                <div class="col-md-4">
                                    <div class="audio-div ">
                                        <!-- Image -->
                                        <a href="javascript:(new hit()).playSound('fire');">
                                            <img id="sound_each4" img_op="fire" src="./assets/icons/fire.png" >
                                        </a>
                                        <div class="d-flex justify-content-center">
                                            <div class="">
                                                <h3>Fire</h3>
                                            </div>
                                        </div>

                                        <!-- Link -->
                                        <div class="d-flex justify-content-center">

                                            <div class="">
                                                <input type="range" id="vol" vol_op="fire" volumee="fire" playT="playT" max="1.01" min="0" step="0.01" value="0" onchange="playSoundEach('fire',this.value)" />
                                            </div>
                                        </div>
                                        <!--Audio File-->
                                        <audio id="fire" class="fire" src="./assets/sound/camp_fire.mp4" preload="off" loop></audio>

                                    </div>
                                </div>
								
								
								
								
								
                                <div class="col-md-4">
                                    <div class="audio-div ">
                                        <!-- Image -->
                                        <a href="javascript:(new hit()).playSound('thunder');">
                                            <img id="sound_each2" img_op="thunder" src="./assets/icons/flash.png" style="width: 70px;">
                                        </a>
                                        <!-- Link -->
                                        <h3>Thunder</h3>
                                        <!-- Link -->

                                       <div class="d-flex justify-content-center">

                                            <div class="">
                                                <input type="range" id="vol" vol_op="thunder" volumee="thunder" playT="playT" max="1.01" min="0" step="0.01" value="0" onchange="playSoundEach('thunder',this.value)" />
                                            </div>
                                        </div>

                                        <!--Audio File-->
                                        <audio id="thunder" class="thunder" src="./assets/sound/double_thunder.mp4" preload="off" loop></audio>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="audio-div ">
                                        <!-- Image -->
                                        <a href="javascript:(new hit()).playSound('wind');">
                                            <img id="sound_each3" img_op="wind" src="./assets/icons/Page-1@2x.png"> </a>
                                        <!-- Link -->
                                        <!-- Link -->
                                        <h3>Wind</h3>
                                        <!-- Link -->

                                         <div class="d-flex justify-content-center">

                                            <div class="">
                                                <input type="range" id="vol" vol_op="wind" volumee="wind" playT="playT" max="1.01" min="0" step="0.01" value="0" onchange="playSoundEach('wind',this.value)" />
                                            </div>
                                        </div>

                                        <!--Audio File-->
                                        <audio id="wind" src="./assets/sound/strong_wind.mp4" preload="off" loop></audio>
                                    </div>
                                </div>
                            </div>

                            <div class="row animated   bounceInUp  delay-5s">
                                <div class="col-md-4">
                                    <div class="audio-div ">
                                        <!-- Image -->
                                        <a href="javascript:(new hit()).playSound('rain');">
                                            <img id="sound_each1" img_op="rain" src="./assets/icons/storm.png">
                                        </a>
                                        <!-- Link -->
                                        <h3>Rain</h3>
                                        <!-- Link -->

                                        <div class="d-flex justify-content-center">

                                            <div class="">
                                                <input type="range" id="vol" vol_op="rain" volumee="rain" playT="playT" max="1.01" min="0" step="0.01" value="0" onchange="playSoundEach('rain',this.value)" />
                                            </div>
                                        </div>

                                        <!--Audio File-->
                                        <!-- <audio id="rain" class="rain" src="./assets/sound/light_rain.mp4"></audio>-->
                                        <audio id="rain" src="./assets/sound/light_rain.mp4" preload="off" loop></audio>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="audio-div ">
                                        <!-- Image -->
                                        <a href="javascript:(new hit()).playSound('waves');">
                                            <img id="sound_each5" img_op="waves" src="./assets/icons/wave.png" style="width: 70px;">
                                        </a>

                                        <!-- Link -->

                                        <!-- Link -->
                                        <h3>Waves</h3>
                                        <!-- Link -->

                                        <div class="d-flex justify-content-center">

                                            <div class="">
                                                <input type="range" id="vol" vol_op="waves" volumee="waves" playT="playT" max="1.01" min="0" step="0.01" value="0" onchange="playSoundEach('waves',this.value)" />
                                            </div>
                                        </div>
                                        <!--Audio File-->
                                        <audio id="waves" class="waves" src="./assets/sound/lake_waves.mp4" preload="off" loop></audio>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="audio-div ">
                                        <!-- Image -->
                                        <a href="javascript:(new hit()).playSound('birds');">
                                            <img id="sound_each6" img_op="birds" src="./assets/icons/dove.png"> </a>
                                        <!-- Link -->

                                        <h3>Birds</h3>
                                        <!-- Link -->

                                        <div class="d-flex justify-content-center">

                                            <div class="">
                                                <input type="range" id="vol" vol_op="birds" volumee="birds" playT="playT" max="1.01" min="0" step="0.01" value="0" onchange="playSoundEach('birds',this.value)" />
                                            </div>
                                        </div>
                                        <!--Audio File-->

                                        <audio id="birds" class="birds" src="./assets/sound/bird_chirping.mp4" preload="off" loop></audio>
                                    </div>
                                </div>
                            </div>

                            <div class="row animated   bounceInUp  delay-6s">
                                <div class="col-md-4">
                                    <div class="audio-div ">
                                        <!-- Image -->
                                        <a href="javascript:(new hit()).playSound('crickets');">
                                            <img id="sound_each7" img_op="crickets" src="./assets/icons/cricket.png">
                                        </a>
                                        <!-- Link -->
                                        <h3>Night Crickets</h3>
                                        <!-- Link -->

                                        <div class="d-flex justify-content-center">

                                            <div class="">
                                                <input type="range" id="vol" vol_op="crickets" volumee="crickets" playT="playT" max="1.01" min="0" step="0.01" value="0" onchange="playSoundEach('crickets',this.value)" />
                                            </div>
                                        </div>
                                        <!--Audio File-->
                                        <audio id="crickets" class="crickets" src="./assets/sound/night_cricket.mp4" preload="off" loop></audio>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="audio-div ">
                                        <!-- Image -->
                                        <a href="javascript:(new hit()).playSound('singing_bowl');">
                                            <img id="sound_each8" img_op="singing_bowl" src="./assets/icons/singing-bowl.png" style="width: 130px;
                                            height: 130px;"> </a>

                                        <!-- Link -->
                                        <h3>Singing Bowl</h3>
                                        <!-- Link -->

                                        <div class="d-flex justify-content-center">

                                            <div class="">
                                                <input type="range" id="vol" vol_op="singing_bowl" volumee="singing_bowl" playT="playT" max="1.01" min="0" step="0.01" value="0" onchange="playSoundEach('singing_bowl',this.value)" />
                                            </div>
                                        </div>
                                        <!--Audio File-->
                                        <audio id="singing_bowl" class="singing_bowl" src="./assets/sound/14inch_bowl.mp4" preload="off" loop></audio>
										                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="audio-div ">
                                        <!-- Image -->
                                        <a href="javascript:(new hit()).playSound('tv');">
                                            <img id="sound_each9" img_op="tv" src="./assets/icons/television@2x.png" style="width: 130px;
                                            height: 130px;"> </a>

                                        <!-- Link -->
                                        <h3 onclick="setVolume('tv')">White Noise</h3>
                                        <!-- Link -->

                                        <div class="d-flex justify-content-center">

                                            <div class="">
                                                <input type="range" id="vol" vol_op="tv" volumee="tv" playT="playT" max="1.01" min="0" step="0.01" value="0" onchange="playSoundEach('tv',this.value)" />
                                            </div>
                                        </div>
                                        <!--Audio File-->
                                        <audio id="tv" class="tv" src="./assets/sound/white_noise.mp4" preload="off" loop></audio>
                                    </div>
                                </div>
								
								
								
								
							<!--MUSIC FILES BELOW THIS LINE-->	
								
							<!--Track 1-->	
							
								<div class="col-md-4">
                                    <div class="audio-div ">
                                        <!-- Image -->
                                        <a href="javascript:(new hit()).playSound('track_1');">
                                            <img id="sound_each8" img_op="track_1" src="./assets/icons/track-1.png" style="width: 130px;
                                            height: 130px;"> </a>

                                        <!-- Link -->
                                        <h3>Track 1</h3>
                                        <!-- Link -->

                                        <div class="d-flex justify-content-center">

                                            <div class="">
                                                <input type="range" id="vol" vol_op="track_1" volumee="track_1" playT="playT" max="1.01" min="0" step="0.01" value="0" onchange="playSoundEach('track_1',this.value)" />
                                            </div>
                                        </div>
                                        <!--Audio File-->
                                        <audio id="track_1" class="track_1" src="./assets/sound/14inch_bowl.mp4" preload="off" loop></audio>
                                    </div>
                                </div>
								
							<!--Track 2-->		
								
								<div class="col-md-4">
                                    <div class="audio-div ">
                                        <!-- Image -->
                                        <a href="javascript:(new hit()).playSound('track_2');">
                                            <img id="sound_each8" img_op="track_2" src="./assets/icons/track-2.png" style="width: 130px;
                                            height: 130px;"> </a>

                                        <!-- Link -->
                                        <h3>Singing Bowl</h3>
                                        <!-- Link -->

                                        <div class="d-flex justify-content-center">

                                            <div class="">
                                                <input type="range" id="vol" vol_op="track_2" volumee="track_2" playT="playT" max="1.01" min="0" step="0.01" value="0" onchange="playSoundEach('track_2',this.value)" />
                                            </div>
                                        </div>
                                        <!--Audio File-->
                                        <audio id="track_2" class="track_2" src="./assets/sound/14inch_bowl.mp4" preload="off" loop></audio>
                                    </div>
                                </div>
								
							<!--Track 3-->		
								
								<div class="col-md-4">
                                    <div class="audio-div ">
                                        <!-- Image -->
                                        <a href="javascript:(new hit()).playSound('track_3');">
                                            <img id="sound_each8" img_op="track_3" src="./assets/icons/track-3.png" style="width: 130px;
                                            height: 130px;"> </a>

                                        <!-- Link -->
                                        <h3>Singing Bowl</h3>
                                        <!-- Link -->

                                        <div class="d-flex justify-content-center">

                                            <div class="">
                                                <input type="range" id="vol" vol_op="track_3" volumee="track_3" playT="playT" max="1.01" min="0" step="0.01" value="0" onchange="playSoundEach('track_3',this.value)" />
                                            </div>
                                        </div>
                                        <!--Audio File-->
                                        <audio id="track_3" class="track_3" src="./assets/sound/14inch_bowl.mp4" preload="off" loop></audio>
                                    </div>
                                </div>
								
							<!--Track 4-->	
							
								<div class="col-md-4">
                                    <div class="audio-div ">
                                        <!-- Image -->
                                        <a href="javascript:(new hit()).playSound('track_4');">
                                            <img id="sound_each8" img_op="track_4" src="./assets/icons/track-4.png" style="width: 130px;
                                            height: 130px;"> </a>

                                        <!-- Link -->
                                        <h3>Singing Bowl</h3>
                                        <!-- Link -->

                                        <div class="d-flex justify-content-center">

                                            <div class="">
                                                <input type="range" id="vol" vol_op="track_4" volumee="track_4" playT="playT" max="1.01" min="0" step="0.01" value="0" onchange="playSoundEach('track_4',this.value)" />
                                            </div>
                                        </div>
                                        <!--Audio File-->
                                        <audio id="track_4" class="track_4" src="./assets/sound/14inch_bowl.mp4" preload="off" loop></audio>
                                    </div>
                                </div>
								
							<!--Track 5-->	
							
								<div class="col-md-4">
                                    <div class="audio-div ">
                                        <!-- Image -->
                                        <a href="javascript:(new hit()).playSound('track_5');">
                                            <img id="sound_each8" img_op="track_5" src="./assets/icons/track-5.png" style="width: 130px;
                                            height: 130px;"> </a>

                                        <!-- Link -->
                                        <h3>Singing Bowl</h3>
                                        <!-- Link -->

                                        <div class="d-flex justify-content-center">

                                            <div class="">
                                                <input type="range" id="vol" vol_op="track_5" volumee="track_5" playT="playT" max="1.01" min="0" step="0.01" value="0" onchange="playSoundEach('track_5',this.value)" />
                                            </div>
                                        </div>
                                        <!--Audio File-->
                                        <audio id="track_5" class="track_5" src="./assets/sound/14inch_bowl.mp4" preload="off" loop></audio>
                                    </div>
                                </div>
								
							<!--Track 6-->	
							
								<div class="col-md-4">
                                    <div class="audio-div ">
                                        <!-- Image -->
                                        <a href="javascript:(new hit()).playSound('track_6');">
                                            <img id="sound_each8" img_op="track_6" src="./assets/icons/track-6.png" style="width: 130px;
                                            height: 130px;"> </a>

                                        <!-- Link -->
                                        <h3>Singing Bowl</h3>
                                        <!-- Link -->

                                        <div class="d-flex justify-content-center">

                                            <div class="">
                                                <input type="range" id="vol" vol_op="track_6" volumee="track_6" playT="playT" max="1.01" min="0" step="0.01" value="0" onchange="playSoundEach('track_6',this.value)" />
                                            </div>
                                        </div>
                                        <!--Audio File-->
                                        <audio id="track_6" class="track_6" src="./assets/sound/14inch_bowl.mp4" preload="off" loop></audio>
                                    </div>
                                </div>
								
							<!--Track 7-->	
							
								<div class="col-md-4">
                                    <div class="audio-div ">
                                        <!-- Image -->
                                        <a href="javascript:(new hit()).playSound('track_7');">
                                            <img id="sound_each8" img_op="track_7" src="./assets/icons/track-7.png" style="width: 130px;
                                            height: 130px;"> </a>

                                        <!-- Link -->
                                        <h3>Singing Bowl</h3>
                                        <!-- Link -->

                                        <div class="d-flex justify-content-center">

                                            <div class="">
                                                <input type="range" id="vol" vol_op="track_7" volumee="track_7" playT="playT" max="1.01" min="0" step="0.01" value="0" onchange="playSoundEach('track_7',this.value)" />
                                            </div>
                                        </div>
                                        <!--Audio File-->
                                        <audio id="track_7" class="track_7" src="./assets/sound/14inch_bowl.mp4" preload="off" loop></audio>
                                    </div>
                                </div>
								
							<!--Track 8-->	
							
								<div class="col-md-4">
                                    <div class="audio-div ">
                                        <!-- Image -->
                                        <a href="javascript:(new hit()).playSound('track_8');">
                                            <img id="sound_each8" img_op="track_8" src="./assets/icons/track-8.png" style="width: 130px;
                                            height: 130px;"> </a>

                                        <!-- Link -->
                                        <h3>Singing Bowl</h3>
                                        <!-- Link -->

                                        <div class="d-flex justify-content-center">

                                            <div class="">
                                                <input type="range" id="vol" vol_op="track_8" volumee="track_8" playT="playT" max="1.01" min="0" step="0.01" value="0" onchange="playSoundEach('track_8',this.value)" />
                                            </div>
                                        </div>
                                        <!--Audio File-->
                                        <audio id="track_8" class="track_8" src="./assets/sound/14inch_bowl.mp4" preload="off" loop></audio>
                                    </div>
                                </div>
								
							<!--Track 9-->	
							
								<div class="col-md-4">
                                    <div class="audio-div ">
                                        <!-- Image -->
                                        <a href="javascript:(new hit()).playSound('track_9');">
                                            <img id="sound_each8" img_op="track_9" src="./assets/icons/track-9.png" style="width: 130px;
                                            height: 130px;"> </a>

                                        <!-- Link -->
                                        <h3>Singing Bowl</h3>
                                        <!-- Link -->

                                        <div class="d-flex justify-content-center">

                                            <div class="">
                                                <input type="range" id="vol" vol_op="track_9" volumee="track_9" playT="playT" max="1.01" min="0" step="0.01" value="0" onchange="playSoundEach('track_9',this.value)" />
                                            </div>
                                        </div>
                                        <!--Audio File-->
                                        <audio id="track_9" class="track_9" src="./assets/sound/14inch_bowl.mp4" preload="off" loop></audio>
                                    </div>
                                </div>
								
								
								
                            </div>
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

</body>

</html>