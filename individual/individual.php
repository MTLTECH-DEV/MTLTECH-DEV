
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }

}
th{background-color:#282C65;color:white;}
ul li {
  background: #828282;
  color:#282C65;
  margin: 5px;
}
ul{list-style-type:none;}
#h3{background-color:#282C65; color:white;
}
#list{margin-left:-40px; }
#list2{float:right;}
#row{border="1px;}
	#rectangle {
  height: 40px;
  width: 15px;
  background-color: #42bcf5;
} 
}
	.rectangle1 {
  height: 30px;
  width: 10px;
  background-color: #42f5d7;
  position:relative; left:-5px;
}
	.rectangle {
  height: 41px;
  width: 15px;
  background-color: #42bcf5;
}
.progress {
  margin:20px auto;
  padding:0;
  width:90%;
  height:10px;
  overflow:hidden;
  background:#e5e5e5;
  border-radius:6px;
}
.vl {
  border-left: 6px solid black;
  height: 10px;
  position: absolute;
  left: 60%;
  margin-left: -3px;
  top: 0;
}

.bar {
	position:relative;
  float:left;
  min-width:1%;
  height:100%;
  background: #4df3ff;
}

.percent {
	position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
  margin:0;
  font-size:12px;
  color:white;
}
.p3 {
  font-family:Calibri;
}
</style>

</head>
<body class="p3">
<div style=" padding: 20px; 
  width: 1450px;
  resize: both;">
<div>
    <nav style="display:flex; background-color:#f2f2f2" class="row">
	<div class="rectangle"></div>
        <div  style="flex:33.33%;padding:5px;"><img src="img\rlms.png" height="28"></div>
		<div  style="flex:33.33%;padding:5px;"><img src="img\rlmsL.png" height="28"></div>
			<div  style="flex:33.33%;padding:5px;"><img src="img\rlmsL.png" height="28"></div>
                <div style="color:#282C65;"><strong>LEARNER ATTENDENCE REPORT</strong></div>
		<div class="rectangle1"></div>
    </nav>
</div>
<div>
  <div style="display:flex;" class="row">
    <div style="flex:33.33%;padding:5px;" ><img src="img\snf.PNG" alt="..."></div>
	<div style="flex:33.33%;padding:5px;" ><img src="img\rlmsL.PNG"  alt="..."></div> 
	<div style="flex:33.33%;padding:5px;position:relative; left:215px;top:55px;" ><img src="img\rlmsL.PNG" class="rounded float-center" height="28" alt="..."></div>
   <div><img src="img\mtl1.PNG" alt="..."></div> 	
  </div>
  <div style=" background-image: linear-gradient(to right,#42bcf5, #42f5d7);color:white;"><h3>REPORT PERIOD - FROM: 01/10/2020, TO: 30/10/2020</h3></div>
  </div>
  <div class="row">
  <div style="width: 48%;float: left;" class="column">
  <table >
   <tr>
      <th>Monday</th>
      <th>Tuesday</th>
      <th>Wednesday</th>
      <th>Thursday</th>
	  <th>Friday</th>
	  <th>Saturday</th>
	  <th>Sunday</th>
    </tr>
	    <tr style="background-color:#BBFAFF;color:#282C65;">
      <td scope="row"><img src="" class="" alt=""><?php

?></td>
<td><img src=""  class="img-fluid " alt=""></td>
      <td><img src="" class="img-fluid " alt=""></td>
      <td><img src="img\signiture.png" class="" alt=""></br><br/>
	  <b>Contact Time</b><br/>188:30:09
	  <br/><hr/><?php
// Return current date from the remote server
$date = date('d-m-y');
echo $date;?></td>
	  <td><img src="img\signiture.png" class="" alt=""></br><br/>
	  <b>Contact Time</b><br/>188:30:09</br><hr/>
	  <?php
// Return current date from the remote server
$date = date('y-m-d');
echo $date;?></td>
<td><img src="" class="" alt=""><br>
	 <?php
// Return current date from the remote server
$date = date('y-m-d');
echo $date;?></td>
	  <td><img src="" class="" alt=""><br><?php
// Return current date from the remote server
$date = date('y-m-d');
echo $date;?></td>
	</tr>
	    <tr style="color:#282C65;" >
      <td style=" border: 1px solid #dddddd;"><img src="img\signiture.PNG" class="" alt=""></br></br>
	   <b>Contact Time</b><br/>188:30:09</br><hr/>
	  <?php
// Return current date from the remote server
$date = date('y-m-d');
echo $date;
?></td>
      <td style=" border: 1px solid #dddddd;"><img src="img\signiture.PNG" class="" alt="">
	  </br><br/>
	  <b>Contact Time</b><br/>188:30:09</br><hr/>
	  <?php
// Return current date from the remote server
$date = date('y-m-d');
echo $date;?></td>
      <td style=" border: 1px solid #dddddd;"><img src="img\signiture.PNG" class="" alt="">
	  </br><br/>
	  <b>Contact Time</b><br/>188:30:09</br><hr/>
	  <?php
// Return current date from the remote server
$date = date('y-m-d');
echo $date;?></td>
      <td style=" border: 1px solid #dddddd;"><img src="img\signiture.PNG" class="" alt="">
	  </br><br/>
	  <b>Contact Time</b><br/>188:30:09</br><hr/>
	  <?php
// Return current date from the remote server
$date = date('y-m-d');
echo $date;?></td>
	  <td style=" border: 1px solid #dddddd;"><img src="img\signiture.PNG" class="" alt="">
	  </br><br/>
	  <b>Contact Time</b><br/>188:30:09<br/><hr/>
	  <?php
// Return current date from the remote server
$date = date('y-m-d');
echo $date;?></td>
	  <td style=" border: 1px solid #dddddd;"><img src="img\signiture.PNG" class="" alt="">
	  </br><br/>
	  <b>Contact Time</b><br/>188:30:09</br><hr/>
	  <?php
// Return current date from the remote server
$date = date('y-m-d');
echo $date;?></td>
	  <td style=" border: 1px solid #dddddd;"><img src="img\signiture.PNG" class="" alt="">
	  </br><br/>
	  <b>Contact Time</b><br/>188:30:09</br><hr/>
	  <?php
// Return current date from the remote server
$date = date('y-m-d');
echo $date;?></td>
    </tr>
	<tr style="color:#282C65;">
      <td style=" border: 1px solid #dddddd;" scope="row"><img src="img\signiture.PNG" class="" alt="">
	  </br><br/>
	  <b>Contact Time</b><br/>188:30:09</br><hr/>
	  <?php
// Return current date from the remote server
$date = date('y-m-d');
echo $date;
?></td>
      <td style=" border: 1px solid #dddddd;"><img src="img\signiture.PNG" class="" alt="">
	  </br><br/>
	  <b>Contact Time</b><br/>188:30:09</br><hr/>
	  <?php
// Return current date from the remote server
$date = date('y-m-d');
echo $date;?></td>
      <td style=" border: 1px solid #dddddd;"><img src="img\signiture.PNG" class="" alt="">
	  </br><br/>
	  <b>Contact Time</b><br/>188:30:09</br><hr/>
	  <?php
// Return current date from the remote server
$date = date('y-m-d');
echo $date;?></td>
      <td style=" border: 1px solid #dddddd;"><img src="img\signiture.PNG" class="" alt="">
	  </br><br/>
	  <b>Contact Time</b><br/>188:30:09</br><hr/>
	  <?php
// Return current date from the remote server
$date = date('y-m-d');
echo $date;?></td>
	  <td style=" border: 1px solid #dddddd;"><img src="img\signiture.PNG" class="" alt="">
	  </br><br/>
	  <b>Contact Time</b><br/>188:30:09</br><hr/>
	  <?php
// Return current date from the remote server
$date = date('y-m-d');
echo $date;?></td>
	  <td style=" border: 1px solid #dddddd;"><img src="" class="" alt="">
	  </br>
	  <?php
// Return current date from the remote server
$date = date('y-m-d');
echo $date;?></td>
	  <td style=" border: 1px solid #dddddd;"><img src="" class="" alt="">
	  </br>
	  <?php
// Return current date from the remote server
$date = date('y-m-d');
echo $date;?></td>
    </tr>
	<tr style="color:#282C65;">
      <td style=" border: 1px solid #dddddd;" scope="row"><img src="img\signiture.PNG" class="" alt="">
	  </br><br/>
	  <b>Contact Time</b><br/>188:30:09</br><hr/>
	  <?php
// Return current date from the remote server
$date = date('y-m-d');
echo $date;
?></td>
      <td style=" border: 1px solid #dddddd;"><img src="img\signiture.PNG" class="" alt="">
	  </br><br/>
	  <b>Contact Time</b><br/>188:30:09</br><hr/>
	  <?php
// Return current date from the remote server
$date = date('y-m-d');
echo $date;?></td>
      <td style=" border: 1px solid #dddddd;"><img src="img\signiture.PNG" class="" alt="">
	  </br><br/>
	  <b>Contact Time</b><br/>188:30:09</br><hr/>
	  <?php
// Return current date from the remote server
$date = date('y-m-d');
echo $date;?></td>
      <td style=" border: 1px solid #dddddd;"><img src="img\signiture.PNG" class="" alt="">
	  </br><br/>
	  <b>Contact Time</b><br/>188:30:09</br><hr/>
	  <?php
// Return current date from the remote server
$date = date('y-m-d');
echo $date;?></td>
	  <td style=" border: 1px solid #dddddd;"><img src="img\signiture.PNG" class="" alt="">
	  </br><br/>
	  <b>Contact Time</b><br/>188:30:09</br><hr/>
	  <?php
// Return current date from the remote server
$date = date('y-m-d');
echo $date;?></td>
	  <td style=" border: 1px solid #dddddd;"><img src="" class="" alt=""></br>
	  <?php
// Return current date from the remote server
$date = new DateTime();
echo $date->modify("-2 days")->format('y-m-d');?></td>
	  <td style=" border: 1px solid #dddddd;"><img src="" class="" alt=""></br><?php
$date = new DateTime();
echo $date->modify("-1 days")->format('y-m-d');?></td>
    </tr>
	</table>
	<br/><br/><br/><br/><br/><br/><br/><br/>
	<div class="form-row">
    <div style="float:left">
      <label style="color:#282C65;">Facilitator Signature:<img src="img\f.PNG" class="" alt=""></label><br/>
	  <div class="progress">
	<div class="bar" style="width:100%">
		<p class="percent"></p>
	</div>
</div>
	  	    <?php
    $currentDateTime = date('Y-m-d H:i:s');
    echo"",$currentDateTime;
?>
    </div>
    <div style="float:right">
      <label style="color:#282C65;" for="inputState">SDP Representative Signature:<img src="img\sdp.PNG" class="" alt=""></label><br/>
	  <div class="progress">
	<div class="bar" style="width:100%">
		<p class="percent"></p>
	</div>
</div>
	    <?php
    $currentDateTime = date('Y-m-d H:i:s');
    echo"",$currentDateTime;
?>
	  
    </div>
  </div>
  </div>
  <div style="width: 50%;float: right">
  <div >
        <li style="background-image: url(rl.JPG);list-style-type:none; width:720px;height:100px">
		<img style="position:relative; left:0px; top:0px;" src="img\m.PNG" alt=""width="100" height="100">
		 <div style="color:white;margin-right;position:relative; left:130px; top:-90px;"><h1>NOMPUMELELO MZIMELA</h1></div>
        </li>
        </div>
		<div>
	<div><h2 id="h3">PROJECT DETAILS</h2></div>
 <table style="width: 100%;" >
  <tr>
    <td style="border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;background-color: #dddddd;color:#282C65;" ><b>Learning Pathway:</b></td>
    <td style="border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;background-color: #f2f2f2;color:#282C65;">Learnership</td>
   
  </tr>
  <tr>
    <td style="border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;background-color: #dddddd;color:#282C65;"><b>Qualification:</b></td>
    <td style="border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;background-color: #f2f2f2;color:#282C65;">National Certificate: Construction Plumbing</td>
  
  </tr>
  <tr>
    <td style="border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;background-color: #dddddd;color:#282C65;"><b>Province:</b></td>
    <td style="border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;background-color: #f2f2f2;color:#282C65;">Mpumalanga</td>
  
  </tr>
  <tr>
    <td style="border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;background-color: #dddddd;color:#282C65;"><b>Project Name:</b></td>
    <td style="border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;background-color: #f2f2f2;color:#282C65;"></td>
   
  </tr>
  <tr>
    <td style="border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;background-color: #dddddd;color:#282C65;"><b>Project Number:</b></td>
    <td style="border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;background-color: #f2f2f2;color:#282C65;">00000</td>
   
  </tr>
</table>
 
  </div>
  <div>
 <div style="background-color:#282C65;color:white;"><h2>LEARNERS DETAILS</h2></div>
    <table style="width: 100%;" >
  <tr>
    <td style="border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;background-color: #dddddd;color:#282C65;" ><b>Learner Name:</b></td>
    <td style="border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;background-color: #f2f2f2;color:#282C65;">Nompumelelo</td>
   
  </tr>
  <tr>
    <td style="border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;background-color: #dddddd;color:#282C65;"><b>Learner Surname:</b></td>
    <td style="border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;background-color: #f2f2f2;color:#282C65;">Mzimela</td>
  
  </tr>
  <tr>
    <td style="border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;background-color: #dddddd;color:#282C65;"><b>Learner ID:</b></td>
    <td style="border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;background-color: #f2f2f2;color:#282C65;">8707091097081</td>
  
  </tr>
  <tr>
    <td style="border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;background-color: #dddddd;color:#282C65;"><b>Gender:</b></td>
    <td style="border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;background-color: #f2f2f2;color:#282C65;">Female</td>
   
  </tr>
  <tr>
    <td style="border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;background-color: #dddddd;color:#282C65;"><b>Learner Contact:</b></td>
    <td style="border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;background-color: #f2f2f2;color:#282C65;">0835153533</td>
   
  </tr>
   <tr>
    <td style="border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;background-color: #dddddd;color:#282C65;"><b>Learner Address:</b></td>
    <td style="border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;background-color: #f2f2f2;color:#282C65;">601 Charter House, 75 Cropton Str, Pinetown</td>
   
  </tr>
   <tr>
    <td style="border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;background-color: #dddddd;color:#282C65;"><b>Expected ClockIns:</b></td>
    <td style="border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;background-color: #f2f2f2;color:#282C65;">22</td>
   
  </tr>
   <tr>
    <td style="border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;background-color: #dddddd;color:#282C65;"><b>Actual Clockins:</b></td>
    <td style="border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;background-color: #f2f2f2;color:#282C65;">22</td>
   
  </tr>
   <tr>
    <td style="border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;background-color: #dddddd;color:#282C65;"><b>Expected Clock Outs:</b></td>
    <td style="border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;background-color: #f2f2f2;color:#282C65;">21</td>
   
  </tr>
   <tr>
    <td style="border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;background-color: #dddddd;color:#282C65;"><b>Actual Clock Outs:</b></td>
    <td style="border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;background-color: #f2f2f2;color:#282C65;">21</td>
   
  </tr>
   <tr>
    <td style="border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;background-color: #dddddd;color:#282C65;"><b>Contact Time:</b></td>
    <td style="border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;background-color: #f2f2f2;color:#282C65;">188:30:09</td>
   
  </tr> <tr>
    <td style="border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;background-color: #dddddd;color:#282C65;"><b>Days Absent:</b></td>
    <td style="border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;background-color: #f2f2f2;color:#282C65;">1</td>
  </tr>
</table>
  </div>
 </div>
  <div style="color:#282C65;position:relative; left:290px; top:50px;">
   NSF|Learner Attendance Report | 2020-11-06 @ 08:26:23 | page: 1 of 1
  </div>
  <!-- Copyright -->
  <br/><br/><br/><br/>
  <hr style=" background-image: linear-gradient(to right,#42f5d7,#42bcf5);color:white;height:30px">
</div>
    </div>
  </div>
 </div>
</div>

</div>

</body>
</html>
