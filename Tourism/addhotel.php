<?php

$hname=$_POST['Name'];
$cottage=$_POST['cottage'];
$riverview=$_POST['riv'];
$standard=$_POST['stand'];
$poolview=$_POST['poolv'];
$treehouse=$_POST['tree'];
$deluxe=$_POST['deluxe'];
$superior=$_POST['superior'];
$dormitery=$_POST['dormitery'];
$tent=$_POST['Tent'];

    $conn=new PDO("mysql:host=localhost;dbname=tourism","root",null);

    $stmt=$conn->prepare("insert into hotel_price(Name,Cottage,Riverview,Standard,Poolview,Treehouse,Deluxe,Superior,DOrmitery,
    Tent) values(?,?,?,?,?,?,?,?,?,?)");
    
    $stmt->bindParam(1,$hname);
    $stmt->bindParam(2,$cottage);
    $stmt->bindParam(3,$riverview);
    $stmt->bindParam(4,$standard);
    $stmt->bindParam(5,$poolview);
    $stmt->bindParam(6,$treehouse);
    $stmt->bindParam(7,$deluxe);
    $stmt->bindParam(8,$superior);
    $stmt->bindParam(9,$dormitery);
    $stmt->bindParam(10,$tent);
    $stmt->execute();
    $c=$stmt->rowCount();
    if($c==1){
        header("location:homepage.php");
    }
    else{
        echo "failed";
    }
    
?>

