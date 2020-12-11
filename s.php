<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <title>Bliss Zone</title>
  <style>
    .filter label {
      width: 50px;
      display: inline-block;
      height: 25px;
      line-height: 25px;
    }

    .filter input {
      width: 150px;
      vertical-align: middle;
    }

    .filter em {
      font-style: normal;
      color: #ff4500;
    }
  </style>
</head>

<body>
  <div id="appwindow">
    <h2>Audio Mixer</h2>
    <form>
      <div class="audiopanel" style="text-align: center;">
        <h3>Equalizer</h3>
        <canvas id="eqcanvas" width="400" height="250">
        </canvas><br>
        <div style="display: inline-block; margin: 0 20px;">
          <span id="eq_label_0"></span><br>
          <div style="display: inline-block;">
            <span id="eq_gain_0" style="display: inline-block; height: 100px; margin: 10px;"></span><br>
            <span>Gain</span>
          </div>
        </div>
        <div style="display: inline-block; margin: 0 20px;">
          <span id="eq_label_1"></span><br>
          <div style="display: inline-block;">
            <span id="eq_gain_1" style="display: inline-block; height: 100px; margin: 10px;"></span><br>
            <span>Gain</span>
          </div>
          <div style="display: inline-block;">
            <span id="eq_q_1" style="display: inline-block; height: 100px; margin: 10px;"></span><br>
            <span>Q</span>
          </div>
        </div>
        <div style="display: inline-block; margin: 0 20px;">
          <span id="eq_label_2"></span><br>
          <div style="display: inline-block;">
            <span id="eq_gain_2" style="display: inline-block; height: 100px; margin: 10px;"></span><br>
            <span>Gain</span>
          </div>
          <div style="display: inline-block;">
            <span id="eq_q_2" style="display: inline-block; height: 100px; margin: 10px;"></span><br>
            <span>Q</span>
          </div>
        </div>
        <div style="display: inline-block; margin: 0 20px;">
          <span id="eq_label_3"></span><br>
          <div style="display: inline-block;">
            <span id="eq_gain_3" style="display: inline-block; height: 100px; margin: 10px;"></span><br>
            <span>Gain</span>
          </div>
          <div style="display: inline-block;">
            <span id="eq_q_3" style="display: inline-block; height: 100px; margin: 10px;"></span><br>
            <span>Q</span>
          </div>
        </div>
        <div style="display: inline-block; margin: 0 20px;">
          <span id="eq_label_4"></span><br>
          <div style="display: inline-block;">
            <span id="eq_gain_4" style="display: inline-block; height: 100px; margin: 10px;"></span><br>
            <span>Gain</span>
          </div>
        </div>
      </div>

      ...

    </form>
  </div>
</body>

</html>