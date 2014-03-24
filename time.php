<!DOCTYPE html>
<html>
<head>
  <title>M R T N</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="js/jquery-1.8.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
//UHRZEIT
function updateClock ( )
{
  var currentTime = new Date ( );

  var currentHours = currentTime.getHours ( );
  var currentMinutes = currentTime.getMinutes ( );
  var currentSeconds = currentTime.getSeconds ( );

  var currentWeekdayzahl = currentTime.getDay();
  var currentWeekday = new Array("SUN", "MON", "TUE", "WED", "THU", "FRI", "SAT");
  var currentMonthzahl = currentTime.getMonth();
  var currentMonth = new Array("JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC");
  var currentDay = currentTime.getDate();

  //Pad the minutes and seconds with leading zeros, if required
  currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;
  currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;

  document.getElementById("stunden").firstChild.nodeValue = currentHours;
  document.getElementById("minuten").firstChild.nodeValue = currentMinutes;
  document.getElementById("sekunden").firstChild.nodeValue = currentSeconds;

  document.getElementById("wochentag").firstChild.nodeValue = currentWeekday[currentWeekdayzahl];
  document.getElementById("tag").firstChild.nodeValue = currentDay;
  document.getElementById("monat").firstChild.nodeValue = currentMonth[currentMonthzahl];

//  console.log(currentTime.getDay());
 // console.log(currentWeekdayzahl);

  switch (currentWeekdayzahl) {
	  case 6:
//	  	document.getElementById("wochentag").style.color = "#2980b9";
	    break;
	  case 7:
//	  	document.getElementById("wochentag").style.color = "#c0392b";
	    break;
	  default:
	    break;
  }
}
</script>
<script type="text/javascript">
$(document).ready(function(){
  $(".navbar").on({
    mouseenter: function () {
      console.log("mouseEnter");
        $(".navbar-item").removeClass("shrinked");
    },
    mouseleave: function () {
      console.log("mouseLeave");
        $(".navbar-item").addClass("shrinked");
    }
  });
  // $(".navbar").on("mouseover", function() {
  //   $(".navbar-item").toggleClass("shrinked");
  // });
});
</script>
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
</head>
<body onload="updateClock(); setInterval('updateClock()', 500 );">
<nav class="navbar cf">
    <a class="navbar-item home shrinked" href="index.php">HOME</a>
    <a class="navbar-item time shrinked" href="time.php">TIME</a>
    <a class="navbar-item gif shrinked" href="gif.php">GIF</a>
    <a class="navbar-item weather shrinked" href="weather.php">WEATHER</a>
    <a class="navbar-item clrs shrinked" href="clrs.php">CLRS</a>
</nav>
<div class="timecontainer">

  <div class="clock cf">
      <span id="time">
          <span id="stunden">&nbsp;</span>
          <span id="doppelpunkt">:</span>
          <span id="minuten">&nbsp;</span>
          <span id="doppelpunkt">:</span>
          <span id="sekunden">&nbsp;</span>
      </span>
      <span id="date">
      	<span id="wochentag">&nbsp;</span>
          <span id="tag">&nbsp;</span>
          <span id="monat">&nbsp;</span>
      </span>
      <!-- <div>
        <?php //echo date_sunrise(time(), SUNFUNCS_RET_STRING); ?>
      </div> -->
  </div>
</div>

</body>
</html>
