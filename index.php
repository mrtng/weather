<!DOCTYPE html>
<html>
<head>
  <title>M R T N</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="js/jquery-1.8.1.min.js" type="text/javascript"></script>
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
<?php
include("ctrl.php");
?>
</head>
<body>
<?php
include("nav.php");
?>


</body>
</html>


