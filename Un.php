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
    .__range {
      margin: 30px 0 20px 0;
      -webkit-appearance: none;
      background-color: #f5f6f8;
      height: 20px;
      width: 100%;
      margin: 10px auto;
    }

    .__range:focus {
      outline: none;
    }

    .__range::-webkit-slider-thumb {
      -webkit-appearance: none;
      width: 50px;
      height: 50px;
      /* background: red; */
      /* border-radius: 50%; */
      cursor: -moz-grab;
      cursor: -webkit-grab;
      /* 
      height: 50px;
      width: 50px;
      border-radius: 3px; */
      background-color: transparent;
      background: url(https://i.stack.imgur.com/QneFV.png) center center no-repeat;
      /* cursor: pointer;
      -webkit-appearance: none;
      margin-top: -23px; */
    }
  </style>
</head>

<body>

  <div class=" container mt-5">
    <div>
      <input class="__range" id="rng" name="rng" value="30" type="range" max="100" min="1" value="100" step="1">
    </div>

  </div>


  <!-- jQuery library -->

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pizzicato/0.6.2/Pizzicato.js"></script>

  <script>
    document.querySelectorAll(".__range").forEach(function(el) {
      el.oninput = function() {
        var valPercent = (el.valueAsNumber - parseInt(el.min)) /
          (parseInt(el.max) - parseInt(el.min));
        var style = 'background-image: -webkit-gradient(linear, 0% 0%, 100% 0%, color-stop(' + valPercent + ', #5ed2f0), color-stop(' + valPercent + ', #f5f6f8));';
        el.style = style;
      };
      el.oninput();
    });
  </script>

</body>

</html>