<script type="text/javascript">
$(document).ready(function(){
  //STEUERUNG
  //CMD+1 TIME
  $(document).keydown(function(evt){
      if (evt.keyCode==49){
      evt.preventDefault();
      window.location = "time.php";
      }
  });
  //CMD+2 GIF
  $(document).keydown(function(evt){
      if (evt.keyCode==50){
      evt.preventDefault();
      window.location = "gif.php";
      }
  });
  //CMD+3 WEATHER
  $(document).keydown(function(evt){
      if (evt.keyCode==51){
      evt.preventDefault();
      window.location = "weather.php";
      }
  });
  //CMD+4 COLOURS
  $(document).keydown(function(evt){
      if (evt.keyCode==52){
      evt.preventDefault();
      window.location = "clrs.php";
      }
  });
  //CMD+0 = HOME
  $(document).keydown(function(evt){
      if (evt.keyCode==48){
      evt.preventDefault();
      window.location = "index.php";
      }
  });
});
</script>
