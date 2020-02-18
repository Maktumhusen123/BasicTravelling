<?php
$hid=array();
$hname=array();
$cottage=array();
$riverview=array();
$standard=array();
$poolview=array();
$treehouse=array();
$deluxe=array();
$superior=array();
$dormitery=array();
$tent=array();
$boating=array();
$kayaking=array();
$jacuzzi=array();
$zorbing=array();
$raindance=array();
$swimming=array();
$campfire=array();
$cycling=array();
$archery=array();
$jungletrack=array();
    $conn=new PDO("mysql:host=localhost;dbname=tourism","root",null);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    try
    {
        $stmt=$conn->prepare("select * from hotel_price h;");
        $stmt->execute();
        $c=$stmt->rowCount();
        if($c>0)
        {
            while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
            array_push($hid,$row["HID"]);
            array_push($hname,$row["Name"]);
            array_push($cottage,$row["Cottage"]);
            array_push($riverview,$row["Riverview"]);
            array_push($standard,$row["Standard"]);
            array_push($poolview,$row["Poolview"]);
            array_push($treehouse,$row["Treehouse"]);
            array_push($deluxe,$row["Deluxe"]);
            array_push($superior,$row["Superior"]);
            array_push($dormitery,$row["DOrmitery"]);
            array_push($tent,$row["Tent"]);
           /* array_push($boating,$row["boating"]);
            array_push($kayaking,$row["Kayaking"]);
            array_push($jacuzzi,$row["Jacuzzi"]);
            array_push($zorbing,$row["Zorbing"]);
            array_push($raindance,$row["Raindance"]);
            array_push($swimming,$row["Swimming"]);
            array_push($campfire,$row["Campfire"]);
            array_push($cycling,$row["Cycling"]);
            array_push($archery,$row["Archery"]);
            array_push($jungletrack,$row["JungleTrack"]);*/
        }
        $arrlen=count($hid);
        $conn=null;
        echo "<table cellspacing='20px' cellpadding='10px' border=3 class='table table-striped table-dark table-hover'>";
        echo "<thead>";
        echo "<th>Sl.no</th>";
        echo "<th>Hotel Name</th>";
        echo "<th>Cottage</th>";
        echo "<th>RiverView</th>";
        echo "<th>Standard</th>";
        echo "<th>Poolview</th>";
        echo "<th>Treehouse</th>";
        echo "<th>Deluxe</th>";
        echo "<th>Superior</th>";
        echo "<th>Dormitery</th>";
        echo "<th>Tent</th>";
        /*echo "<th>Boating</th>";
        echo "<th>Kayaking</th>";
        echo "<th>Jacuzzi</th>";
        echo "<th>Zorbing</th>";
        echo "<th>Rain Dance</th>";
        echo "<th>Swimming</th>";
        echo "<th>Campfire</th>";
        echo "<th>Cycling</th>";
        echo "<th>Archery</th>";
        echo "<th>Jungle track</th>";*/
        echo "</thead>";
        for($i=0;$i<$arrlen;$i++){
            $id=$hid[$i];
            $name=$hname[$i];
            $cg=$cottage[$i];
            $rv=$riverview[$i];
            $std=$standard[$i];
            $plv=$poolview[$i];
            $tree=$treehouse[$i];
            $del=$deluxe[$i];
            $sup=$superior[$i];
            $dorm=$dormitery[$i];
            $tt=$tent[$i];
            echo "<tr>";
            echo "<td><a href='editdetails.php?hid=$id&name=$name&cg=$cg&rv=$rv&std=$std&plv=$plv&tree=$tree&del=$del&sup=$sup&dorm=$dorm&tt=$tt'>$hid[$i]</a></td>";
            echo "<td>$hname[$i]</td>";
            echo "<td>$cottage[$i]</td>";
            echo "<td>$riverview[$i]</td>";
            echo "<td>$standard[$i]</td>";
            echo "<td>$poolview[$i]</td>";
            echo "<td>$treehouse[$i]</td>";
            echo "<td>$deluxe[$i]</td>";
            echo "<td>$superior[$i]</td>";
            echo "<td>$dormitery[$i]</td>";
            echo "<td>$tent[$i]</td>";
           /* echo "<td>$boating[$i]</td>";
            echo "<td>$kayaking[$i]</td>";
            echo "<td>$jacuzzi[$i]</td>";
            echo "<td>$zorbing[$i]</td>";
            echo "<td>$raindance[$i]</td>";
            echo "<td>$swimming[$i]</td>";
            echo "<td>$campfire[$i]</td>";
            echo "<td>$cycling[$i]</td>";
            echo "<td>$archery[$i]</td>";
            echo "<td>$jungletrack[$i]</td>";*/
            
            echo "</tr>";
        }
        }
    }
    catch(Exception $e){}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <h1 style="text-align:center;">Details of Hotels</h1>
</body>
<style>
    body{
        background:url("travel2.jpg") center center fixed;
        background-size:cover;
    
    }
    table{
        text-align:center;
        padding:5px;
        margin-top:40px;
        font-style:bold;
        font-size:24px;
    }
</style>
</html>