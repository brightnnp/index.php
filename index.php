<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

?>

<!DOCTYPE html>
<html>
<title>ระบบการดูแลการส่งเสริมการท่องเที่ยวในเทศบาลนครสงขลา</title>
<link rel="icon" href="img\pic.png" sizes="16x16">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><body>
<Head>
  <script>
    font-family: 'Kanit', sans-serif;
  </script>
</Head>

<!-- Header -->
<header class="w3-container w3-theme w3-padding" id="myHeader">
  <div class="w3-bar w3-white">
    <a href="indextest.php" class="w3-bar-item w3-button w3-mobile" style="font-family: kanit, sans-serif;" >หน้าหลัก</a>
    <a href="login.php" class="w3-bar-item w3-button w3-mobile" style="font-family: kanit, sans-serif;">เข้าสู่ระบบ</a>
    <a href="#" class="w3-bar-item w3-button w3-mobile" style="font-family: kanit, sans-serif;">ติดต่อเรา</a>
  </div>

  <div class="w3-center">
 
  <h1 class="w3-xxxlarge w3-animate-bottom;" style="font-family: kanit, sans-serif;">ระบบการดูแลการส่งเสริมการท่องเที่ยวในเทศบาลนครสงขลา</h1>
  <h1 class="w3-xxxlarge w3-animate-bottom;" style="font-family: kanit, sans-serif;">ในเทศบาลนครสงขลา</h1>
    <div class="w3-padding-32">
      
    </div>
  </div>
</header>

<!-- Modal -->
<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-top">
      <header class="w3-container w3-theme-l1"> 
        <span onclick="document.getElementById('id01').style.display='none'"
        class="w3-button w3-display-topright">×</span>
        <h4>Oh snap! We just showed you a modal..</h4>
        <h5>Because we can <i class="fa fa-smile-o"></i></h5>
      </header>
      <div class="w3-padding">
        <p>Cool huh? Ok, enough teasing around..</p>
        <p>Go to our <a class="w3-btn" href="/w3css/default.asp">W3.CSS Tutorial</a> to learn more!</p>
      </div>
      <footer class="w3-container w3-theme-l1">
        <p>Modal footer</p>
      </footer>
    </div>
</div>

<div class="w3-row-padding w3-center w3-margin-top">
<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:250px; font-family: kanit, sans-serif;">
  <h3 style="font-family: kanit, sans-serif;">ข่าวสาร/กิจกรรม</h3><br>
  <i> <a href="กิจกรรม.php"> <img src="img\calendar.png" width="120px" height="120px" ></a></i>
 
  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:250px; font-family: kanit, sans-serif;"  >
  <h3 style="font-family: kanit, sans-serif;">สถานที่ท่องเที่ยว</h3><br>
  <i><a href="สถานที่ท่องเที่ยว.php"> <img src="img\map.png" width="120px" height="120px"></a></i>
 
  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:250px; font-family: kanit, sans-serif;">
  <h3 style="font-family: kanit, sans-serif;">บริการขนส่ง</h3><br>
  <i><a href="บริการขนส่ง.php"> <img src="img\tram.png" width="120px" height="120px"></a></i>
 
  </div>
</div>
</div>

<hr>
<h2 class="w3-center"></h2>
<div class="w3-center">
  <br>
  <a class="w3-button w3-circle w3-large w3-theme" href="https://www.facebook.com/SongkhlaMunicipality"><i><img src="img\facebook.png" alt=""  width="40px" height="40px"></i></a>
  <a class="w3-button w3-circle w3-large w3-theme" href="http://line.me/ti/p/%40gmn9971z"><i><img src="img\line.png" alt=""  width="40px" height="40px"></i></a>  
  <a class="w3-button w3-circle w3-large w3-theme" href="https://www.youtube.com/channel/UCPhRZCd-7fvsijqbcdJYm_Q"><i><img src="img\youtube.png" alt=""  width="40px" height="40px"></i></a>  
  <a class="w3-button w3-circle w3-large w3-theme" href="https://www.songkhlacity.go.th/new/complain/showList"><i><img src="img\hot-line.png" alt=""  width="30px" height="40px"></i></a>  
  <a class="w3-button w3-circle w3-large w3-theme" href="https://www.songkhlacity.go.th/2020/contactus"><i><img src="img\pic.png" alt=""  width="50px" height="50px"></i></a>
 <div>
<br>

  </div>
</div>

</div>

<hr>
<div class="w3-center">
  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    
  </div>
</div>
<br>


<!-- Script for Sidebar, Tabs, Accordions, Progress bars and slideshows -->
<script>
// Side navigation
function w3_open() {
  var x = document.getElementById("mySidebar");
  x.style.width = "100%";
  x.style.fontSize = "40px";
  x.style.paddingTop = "10%";
  x.style.display = "block";
}
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

// Tabs
function openCity(evt, cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  var activebtn = document.getElementsByClassName("testbtn");
  for (i = 0; i < x.length; i++) {
    activebtn[i].className = activebtn[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-dark-grey";
}

var mybtn = document.getElementsByClassName("testbtn")[0];
mybtn.click();

// Accordions
function myAccFunc(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {  
    x.className = x.className.replace(" w3-show", "");
  }
}

// Slideshows
var slideIndex = 1;

function plusDivs(n) {
  slideIndex = slideIndex + n;
  showDivs(slideIndex);
}

function showDivs(n) {
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

showDivs(1);

// Progress Bars
function move() {
  var elem = document.getElementById("myBar");   
  var width = 5;
  var id = setInterval(frame, 10);
  function frame() {
    if (width == 100) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
      elem.innerHTML = width * 1  + '%';
    }
  }
}
</script>

</body>
</html>
