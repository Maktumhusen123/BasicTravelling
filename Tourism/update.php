<?php
$hid=$_POST['hotelid'];
$name=$_POST['Name'];
$cottage=$_POST['cottage'];
$riv=$_POST['riv'];
$stand=$_POST['stand'];
$plv=$_POST['poolv'];
$tree=$_POST['tree'];
$deluxe=$_POST['deluxe'];
$superior=$_POST['superior'];
$dormitery=$_POST['dormitery'];
$tent=$_POST['Tent'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $conn=new PDO("mysql:host=localhost;dbname=tourism","root",null);
    $stmt=$conn->prepare("update hotel_price set Cottage=?, Riverview=?, Standard=?, Poolview=?, Treehouse=?,Deluxe=?,Superior=?, DOrmitery=?,Tent=? 
    where HID=?");
    $stmt->bindParam(1,$cottage);
    $stmt->bindParam(2,$riv);
    $stmt->bindParam(3,$stand);
    $stmt->bindParam(4,$plv);
    $stmt->bindParam(5,$tree);
    $stmt->bindParam(6,$deluxe);
    $stmt->bindParam(8,$dormitery);
    $stmt->bindParam(7,$superior);
    $stmt->bindParam(9,$tent);
    $stmt->bindParam(10,$hid);
    $stmt->execute();
    $c=$stmt->rowCount();
    $i=0;
    if($c==1){
        echo "Update Successfull";
        
        header("location:homepage.php?i=$i");
        
    }
    else{
        echo "FAILED";
  
     }
    ?>
</body>
</html>