<?php 

include 'config.php';

error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) { // Check press or not Post Comment Button
	$name = $_POST['name']; // Get Name from form
	$email = $_POST['email']; // Get Email from form
	$comment = $_POST['comment']; // Get Comment from form

	$sql = "INSERT INTO comments (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('Comment added successfully.')</script>";
	} else {
		echo "<script>alert('Comment does not add.')</script>";
	}
}

?>

<!DOCTYPE html>

<html>
<title>ศาลเจ้าพ่อหลักเมืองสงขลา</title>
<link rel="icon" href="img\pic.png" sizes="16x16">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="body.css">
<link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><body>
<Head>
  <script>
    font-family: 'Kanit', sans-serif;
  </script>
  <style>
    /*the container must be positioned relative:*/
    .custom-select {
      position: relative;
      font-family: Arial;
    }
    
    .custom-select select {
      display: none; /*hide original SELECT element:*/
    }
    
    .select-selected {
      background-color: DodgerBlue;
    }
    
    /*style the arrow inside the select element:*/
    .select-selected:after {
      position: absolute;
      content: "";
      top: 14px;
      right: 10px;
      width: 0;
      height: 0;
      border: 6px solid transparent;
      border-color: #fff transparent transparent transparent;
    }
    
    /*point the arrow upwards when the select box is open (active):*/
    .select-selected.select-arrow-active:after {
      border-color: transparent transparent #fff transparent;
      top: 7px;
    }
    
    /*style the items (options), including the selected item:*/
    .select-items div,.select-selected {
      color: #ffffff;
      padding: 8px 16px;
      border: 1px solid transparent;
      border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
      cursor: pointer;
      user-select: none;
    }
    
    /*style items (options):*/
    .select-items {
      position: absolute;
      background-color: DodgerBlue;
      top: 100%;
      left: 0;
      right: 0;
      z-index: 99;
    }
    
    /*hide the items when the select box is closed:*/
    .select-hide {
      display: none;
    }
    
    .select-items div:hover, .same-as-selected {
      background-color: rgba(0, 0, 0, 0.1);
    }
    </style>
</Head>

<!-- Header -->
<header class="w3-container w3-theme w3-padding" id="myHeader">
  <div class="w3-bar w3-white">
    <a href="indextest.php" class="w3-bar-item w3-button w3-mobile" style="font-family: kanit, sans-serif;" >หน้าหลัก</a>
    <a href="#" class="w3-bar-item w3-button w3-mobile" style="font-family: kanit, sans-serif;">เข้าสู่ระบบ</a>
    <a href="#" class="w3-bar-item w3-button w3-mobile" style="font-family: kanit, sans-serif;">ติดต่อเรา</a>
  </div>
</header>



  
<!-- !PAGE CONTENT! -->
  <center>
    <h1 style="font-family: kanit, sans-serif;">ศาลเจ้าพ่อหลักเมืองสงขลา</h1>
  </center>
<br>


  <!-- First Photo Grid-->
  <center>
    <img alt="" src="https://clib.psu.ac.th/southerninfo/storages/pictures/Hari_Raya/DSC_0248.JPG" style="height:400px; width:600px">
<p style="text-align:justify"><span style="font-size:14px"><span style="font-family:PSUStidti">&nbsp; &nbsp; &nbsp; &nbsp;ตามตำนานเล่าว่าบริเวณถนนนางงามย่านเมืองเก่าและโบราณของสงขลา มีความเชื่อกันว่าต้องมีพิธีลงเสาเอกของเมืองและสร้างอาคารของเมือง เพื่อให้เป็นที่สถิตย์ของเทพผู้รักษาหลักเมือง ตามความเชื่อโดยเรียกเทพองค์นั้นว่า “เจ้าพ่อหลักเมือง” ศาลเจ้าพ่อหลักเมืองสงขลาหรือศาลหลักเมืองสงขลา ซึ่งตั้งอยู่ที่ถนนนางงาม ตำบลบ่อยาง อำเภอเมืองสงขลา จังหวัดสงขลา โดยสร้างขึ้นพร้อมกับการสร้างเมืองสงขลาแห่งใหม่ที่ฝั่งบ่อยางเมื่อปี พ.ศ. ๒๓๘๕&nbsp;เป็นโบราณสถานร่วมสมัยรัตนโกสินทร์ มีลักษณะเป็นศาลเจ้าแบบเก๋งจีน พระยาวิเชียรคีรี (เถี้ยนเส้ง ณ สงขลา) เป็นผู้สำเร็จราชการเมืองสงขลาในขณะนั้น ซึ่งได้รับเสาหลักเมืองที่ทำด้วยไม้ชัยพฤกษ์จากพระบาทสมเด็จพระนั่งเกล้าเจ้าอยู่หัว (รัชกาลที่ ๓) ซึ่งดำริ</span></span><span style="font-size:14px"><span style="font-family:PSUStidti">ให้ฝังหลักชัยของเมืองสงขลา โดยทรงพระราชทานไม้ชัยพฤกษ์หลักไชยต้นหนึ่งกับเทียนชัยเล่มหนึ่ง ทั้นี้โปรดเกล้าฯ ให้พระอุดมปิฎกออกไปเป็นประธานด้านพุทธพิธี พร้อมด้วยพระเถระฐานานุกรมเปรียญ ๘ รูป และให้พระราชครูอัษฎาอาจารย์ เป็นประธานฝ่ายพิธีพราหมณ์พร้อมด้วยพราหมณ์ ๘ นาย งานฝังหลักชัยในครั้งนั้นพระยาวิเชียรคีรี (เถี้ยนเส้ง) ได้จัดทำพิธีขึ้นกลางเมืองสงขลา โดยตั้งโรงพิธีทั้ง ๔ ทิศ ในวันประกอบพิธีได้จัดขบวนแห่หลักไม้ชัยพฤกษ์กับเทียนชัยเป็นขบวนใหญ่ มีทั้งชาวไทยและชาวจีนเข้าร่วมในขบวนพิธีโดยอัญเชิญหลักไม้ชัยพฤกษ์ไว้ที่ใจกลางเมืองสงขลา (ถนนนางงามในปัจจุบัน)&nbsp;ซึ่งเรียกว่า “หลักเมือง” เมื่อวันศุกร์ที่ ๑๐ มีนาคม พ.ศ. ๒๓๘๕ ภายหลังการฝังหลักเมืองแล้วจัดให้งานเฉลิมฉลองมีมหรสพ&nbsp;เช่น โขนร้อง งิ้ว ละครชาตรี (โนรา) พร้อมพิธีทางพระพุทธศาสนา ในเวลาต่อมาได้สร้างอาคารคร่อมหลักเมืองไว้ ๓ หลัง และสร้างศาลเจ้าเสื้อเมืองอีก ๑ หลัง ศาลเจ้าหลักเมืองสงขลาจึงเป็นที่ประดิษฐานหลักเมือง (ตามคติไทย) และเจ้าพ่อหลักเมือง (เซ่ง ห๋อง เหล่า เอี้ย) ซึ่งเป็นเทพคุ้มครองเมือง (ตามคติจีน) ทำให้ศาลหลักเมืองสงขลา เป็นที่รวมความศรัทธาของชาวจีนและชาวไทยไว้ในศาลเดียวกัน ต่อมาศาลหลักเมืองสงขลาเกิดการชำรุดและได้มีการบูรณะปรับปรุงให้มีสภาพดั่งเดิมในสมัยพระบาทสมเด็จพระมงกุฎเกล้าเจ้าอยู่หัว&nbsp; (รัชกาลที่ ๖) หรือปี พ.ศ. ๒๔๖๐&nbsp;โดยรับสั่งให้สมเด็จพระเจ้าลูกยาเธอเจ้าฟ้ากรมขุนพลลพบุรีราเมศวร์ ซึ่งเป็นอุปราชมณฑลปักษ์ใต้ ร่วมกับพ่อค้า ประชาชนชาวสงขลา ร่วมมือกันทำเสาหลักเมืองขึ้นใหม่และวางเสาหลักเมืองใหม่ในวันที่ ๑ มีนาคม พ.ศ. ๒๔๖๐ ต่อมากรมศิลปากรได้ขึ้นทะเบียนศาลเจ้าหลักเมืองเป็นโบราณสถาน เมื่อวันที่ ๒๕ กุมภาพันธ์ พ.ศ. ๒๔๗๘&nbsp;และประกาศในราชกิจจานุเบกษา เล่มที่ ๕๒ ตอนที่ ๗๕ วันที่ ๘ มีนาคม พ.ศ. ๒๔๘๕ แต่ไม่ได้กำหนดขอบเขต ต่อมากรมศิลปากรได้ประกาศขึ้นทะเบียนอีกครั้งโดยการกำหนดขอบเขตด้วยคือ</span></span></p>
<span style="font-family:PSUStidti">ให้ฝังหลักชัยของเมืองสงขลา โดยทรงพระราชทานไม้ชัยพฤกษ์หลักไชยต้นหนึ่งกับเทียนชัยเล่มหนึ่ง ทั้นี้โปรดเกล้าฯ ให้พระอุดมปิฎกออกไปเป็นประธานด้านพุทธพิธี พร้อมด้วยพระเถระฐานานุกรมเปรียญ ๘ รูป และให้พระราชครูอัษฎาอาจารย์ เป็นประธานฝ่ายพิธีพราหมณ์พร้อมด้วยพราหมณ์ ๘ นาย งานฝังหลักชัยในครั้งนั้นพระยาวิเชียรคีรี (เถี้ยนเส้ง) ได้จัดทำพิธีขึ้นกลางเมืองสงขลา โดยตั้งโรงพิธีทั้ง ๔ ทิศ ในวันประกอบพิธีได้จัดขบวนแห่หลักไม้ชัยพฤกษ์กับเทียนชัยเป็นขบวนใหญ่ มีทั้งชาวไทยและชาวจีนเข้าร่วมในขบวนพิธีโดยอัญเชิญหลักไม้ชัยพฤกษ์ไว้ที่ใจกลางเมืองสงขลา (ถนนนางงามในปัจจุบัน)&nbsp;ซึ่งเรียกว่า “หลักเมือง” เมื่อวันศุกร์ที่ ๑๐ มีนาคม พ.ศ. ๒๓๘๕ ภายหลังการฝังหลักเมืองแล้วจัดให้งานเฉลิมฉลองมีมหรสพ&nbsp;เช่น โขนร้อง งิ้ว ละครชาตรี (โนรา) พร้อมพิธีทางพระพุทธศาสนา ในเวลาต่อมาได้สร้างอาคารคร่อมหลักเมืองไว้ ๓ หลัง และสร้างศาลเจ้าเสื้อเมืองอีก ๑ หลัง ศาลเจ้าหลักเมืองสงขลาจึงเป็นที่ประดิษฐานหลักเมือง (ตามคติไทย) และเจ้าพ่อหลักเมือง (เซ่ง ห๋อง เหล่า เอี้ย) ซึ่งเป็นเทพคุ้มครองเมือง (ตามคติจีน) ทำให้ศาลหลักเมืองสงขลา เป็นที่รวมความศรัทธาของชาวจีนและชาวไทยไว้ในศาลเดียวกัน ต่อมาศาลหลักเมืองสงขลาเกิดการชำรุดและได้มีการบูรณะปรับปรุงให้มีสภาพดั่งเดิมในสมัยพระบาทสมเด็จพระมงกุฎเกล้าเจ้าอยู่หัว&nbsp; (รัชกาลที่ ๖) หรือปี พ.ศ. ๒๔๖๐&nbsp;โดยรับสั่งให้สมเด็จพระเจ้าลูกยาเธอเจ้าฟ้ากรมขุนพลลพบุรีราเมศวร์ ซึ่งเป็นอุปราชมณฑลปักษ์ใต้ ร่วมกับพ่อค้า ประชาชนชาวสงขลา ร่วมมือกันทำเสาหลักเมืองขึ้นใหม่และวางเสาหลักเมืองใหม่ในวันที่ ๑ มีนาคม พ.ศ. ๒๔๖๐ ต่อมากรมศิลปากรได้ขึ้นทะเบียนศาลเจ้าหลักเมืองเป็นโบราณสถาน เมื่อวันที่ ๒๕ กุมภาพันธ์ พ.ศ. ๒๔๗๘&nbsp;และประกาศในราชกิจจานุเบกษา เล่มที่ ๕๒ ตอนที่ ๗๕ วันที่ ๘ มีนาคม พ.ศ. ๒๔๘๕ แต่ไม่ได้กำหนดขอบเขต ต่อมากรมศิลปากรได้ประกาศขึ้นทะเบียนอีกครั้งโดยการกำหนดขอบเขตด้วยคือ</span>
<p style="text-align:justify"><span style="font-size:14px"><span style="font-family:PSUStidti">&nbsp; &nbsp; &nbsp; &nbsp;ทิศเหนือ ยาว ๑๓ วา</span></span></p>
<p style="text-align:justify"><span style="font-size:14px"><span style="font-family:PSUStidti">&nbsp; &nbsp; &nbsp; &nbsp;ทิศใต้ ยาว ๑๓ วา</span></span></p>
<p style="text-align:justify"><span style="font-size:14px"><span style="font-family:PSUStidti">&nbsp; &nbsp; &nbsp; &nbsp;ทิศตะวันออก ยาว ๑ เส้น ๕ วา</span></span></p>
<p style="text-align:justify"><span style="font-size:14px"><span style="font-family:PSUStidti">&nbsp; &nbsp; &nbsp; &nbsp;ทิศตก ยาว ๑ เส้น ๕ วา</span></span></p>








</center>
  
  <div class="w3-center">
    <br>
    <a class="w3-button w3-circle w3-large w3-theme" href="https://www.facebook.com/SongkhlaMunicipality"><i><img src="img\facebook.png" alt=""  width="40px" height="40px"></i></a>
    <a class="w3-button w3-circle w3-large w3-theme" href="http://line.me/ti/p/%40gmn9971z"><i><img src="img\line.png" alt=""  width="40px" height="40px"></i></a>  
    <a class="w3-button w3-circle w3-large w3-theme" href="https://www.youtube.com/channel/UCPhRZCd-7fvsijqbcdJYm_Q"><i><img src="img\youtube.png" alt=""  width="40px" height="40px"></i></a>  
    <a class="w3-button w3-circle w3-large w3-theme" href="https://www.songkhlacity.go.th/new/complain/showList"><i><img src="img\hot-line.png" alt=""  width="30px" height="40px"></i></a>  
    <a class="w3-button w3-circle w3-large w3-theme" href="https://www.songkhlacity.go.th/2020/contactus"><i><img src="img\pic.png" alt=""  width="50px" height="50px"></i></a>
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

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Comment System in PHP - Pure Coding</title>
</head>
<body>

	<div class="wrapper">
		<form action="" method="POST" class="form">
			<div class="row">
				<div class="input-group">
					<label for="name">Name</label>
					<input type="text" name="name" id="name" placeholder="Enter your Name" required>
				</div>
				<div class="input-group">
					<label for="email">Email</label>
					<input type="email" name="email" id="email" placeholder="Enter your Email" required>
				</div>
			</div>
			<div class="input-group textarea">
				<label for="comment">Comment</label>
				<textarea id="comment" name="comment" placeholder="Enter your Comment" required></textarea>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Post Comment</button>
			</div>
		</form>
		<div class="prev-comments">
			<?php 
			
			$sql = "SELECT * FROM comments";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {

			?>
			<div class="single-item">
				<h4><?php echo $row['name']; ?></h4>
				<a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
				<p><?php echo $row['comment']; ?></p>
			</div>
			<?php

				}
			}
			
			?>
		</div>
	</div>
</body>
</html>