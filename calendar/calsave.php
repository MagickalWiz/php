<?php
if(isset($_POST['submit'])) {
$num1  = $_POST['num1'];
$num2  = $_POST['num2'];
$num3  = $_POST['num3'];
$num4  = $_POST['num4'];
$num5  = $_POST['num5'];
$num6  = $_POST['num6'];
$num7  = $_POST['num7'];
$num8  = $_POST['num8'];
$num9  = $_POST['num9'];
$num10 = $_POST['num10'];
$num11 = $_POST['num11'];
$num12 = $_POST['num12'];
$num13 = $_POST['num13'];
$num14 = $_POST['num14'];
$num15 = $_POST['num15'];
$num16 = $_POST['num16'];
$num17 = $_POST['num17'];
$num18 = $_POST['num18'];
$num19 = $_POST['num19'];
$num20 = $_POST['num20'];
$num21 = $_POST['num21'];
$num22 = $_POST['num22'];
$num23 = $_POST['num23'];
$num24 = $_POST['num24'];
$num25 = $_POST['num25'];
$num26 = $_POST['num26'];
$num27 = $_POST['num27'];
$num28 = $_POST['num28'];
$num29 = $_POST['num29'];
$num30 = $_POST['num30'];
$num31 = $_POST['num31'];
$num32 = $_POST['num31'];
$num33 = $_POST['num31'];
$num34 = $_POST['num31'];
$num35 = $_POST['num31'];


$file = file_get_contents('calendar.html');

file_put_contents('/home/magickalwiz/http/calendar/calendar.html','calendar.html',FILE_USE_INCLUDE_PATH | FILE_APPEND);

file_put_contents('/home/magickalwiz/http/calendar/calendar.html','<html>
<title>TT Calendar</title>
<style>
html{
	font-size: 16px;
	font-family: sans-serif;
}

body{
	background-image: url("/img/1k.png");
	overflow: hidden;
}

[class*="col-"] {
  width: 100%;
}

@media only screen and (min-width: 600px) {
  .col-s-1 {width: 8.33%;}
  .col-s-2 {width: 16.66%;}
  .col-s-3 {width: 25%;}
  .col-s-4 {width: 33.33%;}
  .col-s-5 {width: 41.66%;}
  .col-s-6 {width: 50%;}
  .col-s-7 {width: 58.33%;}
  .col-s-8 {width: 66.66%;}
  .col-s-9 {width: 75%;}
  .col-s-10 {width: 83.33%;}
  .col-s-11 {width: 91.66%;}
  .col-s-12 {width: 100%;}
}
@media only screen and (min-width: 768px) {
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
}

a {
  color: #f1f1f1;
  text-decoration: none;
}

div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

.footer {
  background-color: #111;
  color: #ffffff;
  text-align: center;
  font-size: 12px;
  padding: 15px;
}




#calendar{
  position: absolute;
  width:700px;
  margin:auto;
  bottom: 3px;
  border-radius:5px;
  font-family: sans-serif;
  text-align:center;
  color:#000000;
  margin-left: 0%;
}

#calendar h1{
  background:#ffff4d;
  border-radius:5px 5px 0 0;
  padding:20px;
  font-size:140%;
  font-weight:700;
  text-transform:uppercase;
  letter-spacing:1px;
  color:#000;
  cursor:default;
}

#calendar table{
  border-top:1px solid #ddd;
  border-left:1px solid #ddd;
  border-spacing:0;
  border-radius:0 0 5px 5px;
}

#calendar textarea{
  width:100px;
  height:100px;
  background:#eee;
  border-right:1px solid #ddd;
  border-bottom:1px solid #ddd;
  padding:6px;
  cursor:pointer;
  transition:background .3s;
  -webkit-transition:background .3s;
  resize: none;
}

#calendar textarea:hover:not(.current){
  background:#ddd;
}

#calendar .lastmonth,#calendar .nextmonth,#calendar .nextmonth ~ *{
  background:#fff;
  color:#999;
}

#calendar .currentA{
  background:#CCCCCC;
  font-weight:700;
  color:#0077B9;
}

#calendar .currentO{
  background:#CCCCCC;
  font-weight:700;
  color:#900002;
}

#calendar .hastask{
  font-weight:700;
  color: #FF0000;
}
#calendar .availableDay{
	color: #0077B9;
}
#calendar .occupiedDay{
	background: #ED4337;
	color: #ffffff;
}

#calendar tr:last-of-type textarea:first-of-type{border-radius:0 0 0 5px;}
#calendar tr:last-of-type textarea:last-of-type{border-radius:0 0 5px 0;}

.transparent {
  background:#7f7f7f;
  background:rgba(0,0,0,0.7);
}
</style>
<script>
var months = "January,February,March,April,May,June,July,August,September,October,November,December".split(",");
window.onload=function() {
    var d = new Date();
    document.getElementById("calendar").getElementsByTagName("h1")[0].innerHTML=months[d.getMonth()];
    document.getElementsByTagName("textarea")[d.getextareaate()-1].className="currentA";
}
</script>
<body>
<div class="transparent col-6 col-s-6">
<font color="#ffff4d">
</hr><pre>
Tri-Tech Calendar By MagickalWiz
Created using HTML and PHP, this calendar can be edited and saved
to prevent loss of details.  Currently, it does not add a
31st day to certain months, as well as is not organized by day,
and I will update it with PHP soon.
</pre>
</div>
</font>
<div class="col-6 col-s-6" id="calendar">
    <div class="transparent">
    <h1></h1>
    <form method="post" action="calsave.php" autocomplete="off">
    <table>
        <tr>
            <textarea name="num1" class="availableDay">'.$num1.'</textarea>
            <textarea name="num2" class="availableDay">'.$num2.'</textarea>
            <textarea name="num3" class="availableDay">'.$num3.'</textarea>
            <textarea name="num4" class="availableDay">'.$num4.'</textarea>
            <textarea name="num5" class="availableDay">'.$num5.'</textarea>
            <textarea name="num6" class="availableDay">'.$num6.'</textarea>
            <textarea name="num7" class="availableDay">'.$num7.'</textarea>
        </tr>
        <tr>
            <textarea name="num8" class="availableDay">'.$num8.'</textarea>
            <textarea name="num9" class="availableDay">'.$num9.'</textarea>
            <textarea name="num10" class="availableDay">'.$num10.'</textarea>
            <textarea name="num11" class="availableDay">'.$num11.'</textarea>
            <textarea name="num12" class="availableDay">'.$num12.'</textarea>
            <textarea name="num13" class="availableDay">'.$num13.'</textarea>
            <textarea name="num14" class="availableDay">'.$num14.'</textarea>
        </tr>
        <tr>
            <textarea name="num15" class="availableDay">'.$num15.'</textarea>
            <textarea name="num16" class="availableDay">'.$num16.'</textarea>
            <textarea name="num17" class="availableDay">'.$num17.'</textarea>
            <textarea name="num18" class="availableDay">'.$num18.'</textarea>
            <textarea name="num19" class="availableDay">'.$num19.'</textarea>
            <textarea name="num20" class="availableDay">'.$num20.'</textarea>
            <textarea name="num21" class="availableDay">'.$num21.'</textarea>
        </tr>
        <tr>
            <textarea name="num22" class="availableDay">'.$num22.'</textarea>
            <textarea name="num23" class="availableDay">'.$num23.'</textarea>
            <textarea name="num24" class="availableDay">'.$num24.'</textarea>
            <textarea name="num25" class="availableDay">'.$num25.'</textarea>
            <textarea name="num26" class="availableDay">'.$num26.'</textarea>
            <textarea name="num27" class="availableDay">'.$num27.'</textarea>
            <textarea name="num28" class="availableDay">'.$num28.'</textarea>
        </tr>
        <tr>
            <textarea name="num29" class="availableDay">'.$num29.'</textarea>
            <textarea name="num30" class="availableDay">'.$num30.'</textarea>
            <textarea name="num31" class="availableDay">'.$num31.'</textarea>
            <textarea name="num32" class="availableDay">'.$num32.'</textarea>
            <textarea name="num33" class="availableDay">'.$num33.'</textarea>
            <textarea name="num34" class="availableDay">'.$num34.'</textarea>
            <textarea name="num35" class="availableDay">'.$num35.'</textarea>
        </tr>
    </table>
<input type="submit" value=" UPDATE " name="submit" >
</form>
</div>
</div>
</body>
<script>
<?php
if(months == "January" && months == "March" && months == "May" && months == "July" && months == "August" && months == "October" && months == "December"){
	$num31 = "31";
}	elseif (months == "April" && months == "June" && months == "September" && months == "November"){
	$num31 = "";
}	elseif (months == "February"){
	$num29 = "";
	$num30 = "";
	$num31 = "";
}
?>
</script>
</html>',FILE_USE_INCLUDE_PATH);
}

header('Location: http://192.168.1.93/calendar/calendar.html');
?>
