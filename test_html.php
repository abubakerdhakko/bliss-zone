<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Bliss Zone Solfeggio Frequencies</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


  <style>
    body {
      font-family: Calibri;
      background-image: linear-gradient(90deg, #691337, #613374, #133742);
    }

    .heading {
      text-align: center;
      color: #fff;
    }

    .wrap {
      margin: 25px;
      background: #133742;
      border-radius: 7.5px;
      padding: 5px 0px 20px 53px;
    }


    /* SLIDER-STYLES */

    .slider-orange>.bar>span {
      transition: 0.3s;
      background: #ff821e !important;
    }

    .slider-orange>.bar-btn {
      background: #ff821e !important;
      border: 2px solid #ffbf8c !important;
      transition: 0.3s;
    }

    .slider-orange:hover>input+.slider-container>.bar-btn {
      box-shadow: inset 0 0 2px #ff821e;
      color: #ff821e;
      background: #fff !important;
      border: 2px solid #ff821e !important;
    }

    .slider-red>.bar>span {
      transition: 0.3s;
      background: #eb0041 !important;
    }

    .slider-red>.bar-btn {
      background: #eb0041 !important;
      border: 2px solid #f9b2c6 !important;
      transition: 0.3s;
    }

    .slider-red:hover>input+.slider-container>.bar-btn {
      box-shadow: inset 0 0 2px #eb0041;
      color: #eb0041;
      background: #fff !important;
      border: 2px solid #eb0041 !important;
    }

    .slider-green>.bar>span {
      transition: 0.3s;
      background: #00965a !important;
    }

    .slider-green>.bar-btn {
      background: #00965a !important;
      border: 2px solid #b2dfcd !important;
      transition: 0.3s;
    }

    .slider-green:hover>input+.slider-container>.bar-btn {
      box-shadow: inset 0 0 2px #00965a;
      color: #00965a;
      background: #fff !important;
      border: 2px solid #00965a !important;
    }

    .slider-yellow>.bar>span {
      transition: 0.3s;
      background: #ffd200 !important;
    }

    .slider-yellow>.bar-btn {
      background: #ffd200 !important;
      border: 2px solid #fff1b2 !important;
      transition: 0.3s;
    }

    .slider-yellow:hover>input+.slider-container>.bar-btn {
      box-shadow: inset 0 0 2px #ffd200;
      color: #1d1d1b;
      background: #fff !important;
      border: 2px solid #ffd200 !important;
    }

    .slider-cyan>.bar>span {
      transition: 0.3s;
      background: #00b4e6 !important;
    }

    .slider-cyan>.bar-btn {
      background: #00b4e6 !important;
      border: 2px solid #b2e8f7 !important;
      transition: 0.3s;
    }

    .slider-cyan:hover>input+.slider-container>.bar-btn {
      box-shadow: inset 0 0 2px #00b4e6;
      color: #00b4e6;
      background: #fff !important;
      border: 2px solid #00b4e6 !important;
    }

    .slider-blue>.bar>span {
      transition: 0.3s;
      background: #0014a0 !important;
    }

    .slider-blue>.bar-btn {
      background: #0014a0 !important;
      border: 2px solid #0014a0 !important;
      transition: 0.3s;
    }

    .slider-blue:hover>input+.slider-container>.bar-btn {
      box-shadow: inset 0 0 2px #0014a0;
      color: #0014a0;
      background: #fff !important;
      border: 2px solid #0014a0 !important;
    }

    /* .dot {
      width: 7px !important;
      height: 7px;
      background: #fff;
      display: block;
      position: absolute;
      border-radius: 125%;
      top: 2px;
    } */

    .slider {
      display: inline-block;
      width: 100%;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
      position: relative;
    }

    .slider>input {
      opacity: 0;
      width: 100%;
      height: 40px;
      position: relative;
      z-index: 5;
      -webkit-appearance: none;
    }

    .slider>input::-webkit-slider-thumb {
      -webkit-appearance: none;
      z-index: 100;
      position: relative;
      width: 50px;
      height: 30px;
      -webkit-border-radius: 10px;
    }

    .slider>span.slider-container {
      min-height: 40px;
      display: inline-block;
      position: absolute;
      top: 0;
      left: -8px;
      right: 46px;
      z-index: 3;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
    }

    .slider>span.slider-container>span.bar {
      background-color: #dadada;
      display: inline-block;
      position: absolute;
      z-index: 1;
      left: 0;
      right: 0;
      height: 11px;
      overflow: hidden;
      -webkit-border-radius: 10px;
      -moz-border-radius: 10px;
      border-radius: 10px;
      top: 50%;
      transform: translateY(-50%);
    }

    .slider>span.slider-container>span.bar>span {
      background: #00965b;
      display: inline-block;
      float: left;
      height: 11px;
      width: 0%;
    }

    .slider>span.slider-container>span.bar-btn {
      display: inline-block;
      position: absolute;
      min-width: 55px;
      max-width: 100px;
      height: 32px;
      font-weight: bold;
      text-align: center;
      background: #00965b;
      left: 0;
      top: 50%;
      border-radius: 100px;
      border: 2px solid #dadada;
      z-index: 5;
      color: #fff;
      -webkit-touch-callout: none;
      -webkit-user-select: none;
      -khtml-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      transform: translateY(-50%);
    }

    .slider>span.slider-container>span.bar-btn>span {
      position: relative;
      position: absolute;
      tlef: 50%;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
    }



    /* star slider start */
    input[type=range] {
      -webkit-appearance: none;
      width: 100%;
      margin: 50px 0;
    }

    input[type=range]:focus {
      outline: none;
    }

    input[type=range]::-webkit-slider-runnable-track {
      width: 100%;
      height: 20px;
      cursor: pointer;
      box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
      background: #3071a9;
      border-radius: 1.3px;
      border: 0.2px solid #010101;
    }

    input[type=range]::-webkit-slider-thumb {
      height: 50px;
      width: 50px;
      border-radius: 3px;
      background-color: transparent;
      background: url(https://i.stack.imgur.com/QneFV.png) center center no-repeat;
      cursor: pointer;
      -webkit-appearance: none;
      margin-top: -23px;
    }

    input[type=range]:focus::-webkit-slider-runnable-track {
      background: #367ebd;
    }

    input[type=range]::-moz-range-track {
      width: 100%;
      height: 8.4px;
      cursor: pointer;
      box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
      background: #3071a9;
      border-radius: 1.3px;
      border: 0.2px solid #010101;
    }

    input[type=range]::-moz-range-thumb {
      height: 50px;
      width: 50px;
      border-radius: 3px;
      background-color: transparent;
      background: url(https://i.stack.imgur.com/QneFV.png) center center no-repeat;
      cursor: pointer;
      -webkit-appearance: none;
      margin-top: -23px;
    }

    input[type=range]::-ms-track {
      width: 100%;
      height: 8.4px;
      cursor: pointer;
      background: transparent;
      border-color: transparent;
      color: transparent;
    }

    input[type=range]::-ms-fill-lower {
      background: #2a6495;
      border: 0.2px solid #010101;
      border-radius: 2.6px;
      box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
    }

    input[type=range]::-ms-fill-upper {
      background: #3071a9;
      border: 0.2px solid #010101;
      border-radius: 2.6px;
      box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
    }

    input[type=range]::-ms-thumb {
      height: 50px;
      width: 50px;
      border-radius: 3px;
      background-color: transparent;
      background: url(https://i.stack.imgur.com/QneFV.png) center center no-repeat;
      cursor: pointer;
      -webkit-appearance: none;
      margin-top: -23px;
    }

    input[type=range]:focus::-ms-fill-lower {
      background: #3071a9;
    }

    input[type=range]:focus::-ms-fill-upper {
      background: #367ebd;
    }

    input {
      background: #000;
      -webkit-appearance: none;
    }
  </style>
</head>

<body>

  <div class=" container mt-5">
    <input type="range" />
  </div>


  <div class="wrap mt-5">
    <h1 class="heading">Simple Rangeslider</h1>

    <input class="slider" value="0" min="3" max="5" step="1" name="001" type="range" />
    <input class="slider slider-orange" value="0" min="0" max="25" step="1" name="002" type="range" />
    <input class="slider slider-red" value="3556" min="0" max="3556" step="34" name="003" type="range" />
    <input class="slider slider-green" value="0" min="0" max="34" step="4" name="004" type="range" />
    <input class="slider slider-yellow" value="0" min="0" max="5" step="1" name="005" type="range" />
    <input class="slider slider-cyan" value="5" min="0" max="100" step="2" name="006" type="range" />
    <input class="slider slider-blue" value="0" min="0" max="5" step="1" name="007" type="range" />
  </div>


  <!-- jQuery library -->

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pizzicato/0.6.2/Pizzicato.js"></script>

  <script>
    var seekslider = document.getElementById("seekslider");

    seekslider.addEventListener('input', function() {
      var v = this.value;

      seekslider.style.background = "-moz-linear-gradient(left,  #ed1e24 0%, #ed1e24 " + v + "%, #191919 " + v + "%, #191919 100%)";
      seekslider.style.background = "-webkit-gradient(linear, left top, right top, color-stop(0%,#ed1e24), color-stop(" + v + "%,#ed1e24), color-stop(" + v + "%,#191919), color-stop(100%,#191919))";
      seekslider.style.background = "-webkit-linear-gradient(left,  #ed1e24 0%,#ed1e24 " + v + "%,#191919 " + v + "%,#191919 100%)";
      seekslider.style.background = "-o-linear-gradient(left,  #ed1e24 0%,#ed1e24 " + v + "%,#191919 " + v + "%,#191919 100%)";
      seekslider.style.background = "-ms-linear-gradient(left,  #ed1e24 0%,#ed1e24 " + v + "%,#191919 " + v + "%,#191919 100%)";
      seekslider.style.background = "linear-gradient(to right,  #ed1e24 0%,#ed1e24 " + v + "%,#191919 " + v + "%,#191919 100%)";
    });
  </script>


</body>

</html>