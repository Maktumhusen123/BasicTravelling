<?php
session_start();
$cname=$_SESSION['cname'];
$checkin=$_SESSION['ckin'];
$checkout=$_SESSION['ckout'];
$hotel=$_SESSION['hotel'];
$mobile=$_SESSION['mobile'];
$email=$_SESSION['email'];
$address=$_SESSION['address'];
$adults=$_POST['adult'];
$children=$_POST['children'];
$tfrom=$_POST['tfrom'];
$tto=$_POST['tto'];
$markup=$_POST['percent'];

$activities=array();


$activities=$_POST['activities'];
$a=implode(",",$activities);

$cactivities=$_POST['cactivities'];

$roomcategory=$_POST['room'];
$temp=explode(",",$roomcategory);
$roomcharge=end($temp);
//echo "$roomcharge";
$percent=$markup*$roomcharge;
//echo $percent;
$breakfast=$_POST['breakfast'];
$lunch=$_POST['lunch'];
$dinner=$_POST['dinner'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quotation Generation</title>
    <link href="https://fonts.googleapis.com/css?family=Lemonada&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    
    <h1>Quotation</h1>

    <?php
    echo "<table cellpadding='10px'>";
    echo "<tr>";
    echo "<td><b>Customer Name</b></td>";
    echo "<td>".$cname."</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td><b>Address</b></td>";
    echo "<td>".$address."</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td><b>Mobile Number:<b></td>";
    echo "<td>".$mobile."</td>";


    echo "<td><b>Email:</b></td>";
    echo "<td>".$email."</td>";
    echo "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td><b>Hotel Name:</b></td>";
    echo "<td>".$hotel."</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td><b>Room category-</b></td>";
    echo "<td>".$roomcategory."</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td><b>Food Services<b></td>";
    echo "<td>"."Breakfast-".$breakfast."<br>Lunch-".$lunch."<br>dinner-".$dinner."</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td><b>Free Activities:</b></td>";
    echo "<td>".$a."</td>";
    echo "</tr>";
$len=count($cactivities);
    echo "<tr>";
    echo "<td><b>Chargable Activities:</b></td>";
    echo "<td>";
    for($i=0;$i<$len;$i++){
        echo $cactivities[$i]."<br>";
    }
    echo "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td><b>Number of People:</b></td>";
    echo "<td>Adults-".$adults."<br>Children-".$children."</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td><b>Transfers</b></td>";
    echo "<td>From-".$tfrom."<br>To-".$tto."</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td><b>Total Amount:</b></td>";
    $total=($roomcharge*$adults)+($roomcharge*$children)+$percent;
    echo "<td>".$total."(Excluding Activities Charge)</td>";
    echo "</tr>";
    echo "</table>";

    ?>
    <br>
    <button onclick="window.print()" class="btn btn-primary btn-lg">Print</button>
</body>
<style>
body{
    font-size:24px;
    font-style:bold;    
}
.btn{
    width:200px;
    font-size:26px;
}
</style>
</html>