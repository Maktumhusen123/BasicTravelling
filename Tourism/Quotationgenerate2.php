<?php
session_start();
$checkin=$_POST['checkin'];
$checkout=$_POST['checkout'];
$cname=$_POST['cname'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$address=$_POST['address'];

if(isset($_POST['hotel'])){
    $hotel=$_POST['hotel'];
}
else{
    $hotel="Not Selected";
}

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
$raftingl=array();
$raftings=array();
$cave=array();
$safari=array();
$tribles=array();
$crocotrek=array();
$zipline=array();
$honeypark=array();
$_SESSION['cname']=$cname;
$_SESSION['mobile']=$mobile;
$_SESSION['email']=$email;
$_SESSION['address']=$address;
$_SESSION['ckin']=$checkin;
$_SESSION['ckout']=$checkout;
$_SESSION['hotel']=$hotel;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <header>
       <a href="http://b2brayntourism.com/" target="_blank">Mail to:info@rayntourism.com</a> 
    </header>
    <a href="http://b2brayntourism.com/" target="_blank"><img src="logo.png" alt=""></a>

    
    <div class="container">
    <form action="generate.php" method="POST">
        <h1 style="text-align:center;"><u>Customer Registartion</u></h1>
        <br><br>
        <table cellpadding="5px">
            <tr class="reg2">
                <td><h4><u>Room Category:</u></h4></td>
                <td>
                <select name="room">
            <?php
                $conn=new PDO("mysql:host=localhost;dbname=tourism","root",null);
                $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                try
                {
                    $stmt=$conn->prepare("select h.HID,h.Name,h.Cottage,h.Riverview,h.Standard,h.Poolview,h.Treehouse,h.Deluxe,h.Superior,h.DOrmitery,h.Tent,c.Rafting_L,c.Rafting_S,c.Cave,c.safari,c.tribles,c.crocotrek,c.zipline,c.honeypark from hotel_price h,cactivities c where h.HID=c.HID;");
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
                        array_push($dormitery,$row["Dormitery"]);
                        array_push($tent,$row["Tent"]);
                    
                        array_push($raftingl,$row["Rafting_L"]);
                        array_push($raftings,$row["Rafting_S"]);
                        array_push($cave,$row["Cave"]);
                        array_push($safari,$row["safari"]);
                        array_push($tribles,$row["tribles"]);
                        array_push($crocotrek,$row["crocotrek"]);
                        array_push($zipline,$row["zipline"]);
                        array_push($honeypark,$row["honeypark"]);
                        }
                        $arrlen=count($hid);
                        $conn=null;
                        echo "<option value='-' selected disabled>Choose Room Category</option>";
                        for($i=0;$i<$arrlen;$i++)
                        {    
                            if($hotel==$hname[$i]){
                            //echo "ID is:".$hid[$i];
                            if($cottage[$i]!=0){
                                echo "<option value='Cottage,$cottage[$i]'>Cottage</option>";
                            }
                            if($riverview[$i]!=0){
                                echo "<option value='RiverView,$riverview[$i]'>River View</option>";
                            }
                            if($standard[$i]!=0){
                                echo "<option value='Standard,$standard[$i]'>Standard</option>";
                            }
                            if($poolview[$i]!=0){
                                echo "<option value='Poolvoew,$poolview[$i]'>Pool View</option>";
                            }
                            if($treehouse[$i]!=0){
                                echo "<option value='Treehouse,$treehouse[$i]'>Treehouse</option>";
                            }
                            if($deluxe[$i]!=0){
                                echo "<option value='Deluxe,$deluxe[$i]'>Deluxe</option>";
                            }
                            if($superior[$i]!=0){
                                echo "<option value='Superior,$superior[$i]'>Superior</option>";
                            }
                            if($dormitery[$i]!=0){
                                echo "<option value='Dormitery,$dormitery[$i]'>Dormitery</option>";
                            }
                            if($tent[$i]!=0){
                                echo "<option value='Tent,$tent[$i]'>Tent</option>";
                            }
                            break;
                        }  
                        }
            /*for($i=0;$i<$arrlen;$i++){
                echo $hname[$i];
            }*/
                    }
                }
                catch(Exception $e)
                {    
                    echo "Error is".$e.getMessage();
                }              
            ?>
            </td> </select>
            <td></td>

            </tr>
            <tr class="reg2">
                <td><h4><u>Food Service:</u></h4></td>             
                <td><input type="radio" name="breakfast" value="Yes">Breakfast<br>
                <input type="radio" name="lunch" value="Yes">Lunch<br>
                <input type="radio" name="dinner" value="Yes">Dinner</td>
                <td></td>
            </tr>
            
            <tr class="reg2">
                <td><h4><u>
                    Free Activities:</u></h4></td>
            <td>
                <input type="checkbox" name="activities[]" value="Boating" id="">Boating<br>
                <input type="checkbox" name="activities[]" value="Kayaking" id="">Kayaking<br>
                <input type="checkbox" name="activities[]" value="Jaccuzi" id="">Jacuzzi<br>
                <input type="checkbox" name="activities[]" value="Zorbing" id="">Zorbing</td>
            <td>
                <input type="checkbox" name="activities[]" value="Rain Dance" id="">Rain Dance<br>
                <input type="checkbox" name="activities[]" value="Cycling" id="">Cycling<br>
                <input type="checkbox" name="activities[]" value="Archery" id="">Archery<br>
                <input type="checkbox" name="activities[]" value="Jungle Tracking" id="">Jungle Tracking</td>
            </tr>
            <tr>
            <td><h4><u>Paid Activities</u></h4></td>
                
            <?php
                for($i=0;$i<$arrlen;$i++)
                {    
                    if($hotel==$hname[$i]){
                        echo "<td>";
                        echo "<input type='checkbox' name='cactivities[]' value='River Rafting(long),$raftingl[$i]'>River Rafting(long)<br>";
                        echo "<input type='checkbox' name='cactivities[]' value='River Rafting(short,$raftings[$i]'>River Rafting(Short) <br>";
                        echo "<input type='checkbox' name='cactivities[]' value='WildLife Safari,$safari[$i]'>WildLife Safari <br>";
                        echo "<input type='checkbox' name='cactivities[]' value='Cave Exploration,$cave[$i]'>Cave Exploration<br>";
                        echo "</td>";
                        echo "<td>";
                        echo "<input type='checkbox' name='cactivities[]' value='Meet the Tribles,$tribles[$i]'>Meet the Tribles<br>";
                        echo "<input type='checkbox' name='cactivities[]' value='Crocodile Trek,100'>Crocodile Trek <br>";
                        echo "<input type='checkbox' name='cactivities[]' value='Zipline,$zipline[$i]'>Zipline <br>";
                        echo "<input type='checkbox' name='cactivities[]' value='Honeypark Visit,$honeypark[$i]'>Honeypark visit <br>";
                        echo "</td>";
                    }
                }
            ?>
            </tr>
            <tr>
                <td><h4><u>Number of people:</u></h4></td>
                <td>Adults <input type="number" name="adult" id=""></td>
                <td>Children <input type="number" name="children" id=""></td>
            </tr>
            <tr>
                <td><h4><u>Markup</u></h4></td>
                <td>
                    <select name="percent" id="">
                        <option value="%" disabled selected>%</option>
                        <option value="0.05">5%</option>
                        <option value="0.1">10%</option>
                        <option value="0.15">15%</option>
                        <option value="0.20">20%</option>
                        <option value="0.25">25%</option>
                    </select>
                </td>
                <td>    </td>
            </tr>
            <tr class="reg2">
                <td><h4><u>Transfer</u></h4></td>
                <td><u>From:</u>
                    <select name="tfrom" id="">
                        <option value="-" disabled selected>Select From City</option>
                        <option value="Belgaum">Belgaum</option>
                        <option value="Bangalore">Bangalore</option>
                        <option value="Dharwad">Dharwad</option>
                        <option value="Hubli">Hubli</option>
                    </select>
                </td>
                <td>To:
                    <select name="tto" id="">
                        <option value="-" disabled selected>Select From City</option>
                        <option value="Belgaum">Belgaum</option>
                        <option value="Bangalore">Bangalore</option>
                        <option value="Dharwad">Dharwad</option>
                        <option value="Hubli">Hubli</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="btn" class="btn btn-primary btn-lg" value="Generate Quotation" id=""></td>
            </tr>
        </table>
    </form>
    </div>
</body>
<style>
body{
    max-width:100%;
    background:url("travel.jpg");
    background-size:cover;
    background-attachment:fixed;
}
a{
    color:#ffffff;
}
.container{
    width:50%;
    padding:40px;
    margin:100px auto;
    background:url("travel2.jpg");
    background-size:cover;

}
table{
    font-size:24px;
}
.btn{
    width:250px;
}
header{
    background:#87CEEB;
    padding:10px;
}
img{
        margin-left:10%;
        align:left;
    }
</style>
</html>