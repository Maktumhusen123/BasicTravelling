<?php
$hid=$_REQUEST['hid'];
$name=$_REQUEST['name'];
$cottage=$_REQUEST['cg'];
$river=$_REQUEST['rv'];
$standard=$_REQUEST['std'];
$pool=$_REQUEST['plv'];
$tree=$_REQUEST['tree'];
$deluxe=$_REQUEST['del'];
$superior=$_REQUEST['sup'];
$dorm=$_REQUEST['dorm'];
$tent=$_REQUEST['tt'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editing Hotel Details</title>
    <link href="https://fonts.googleapis.com/css?family=Lemonada&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="top">
       <a href="http://b2brayntourism.com/">Mail to:info@rayntourism.com</a> 
    </div>
    <div>
        <img src="logo.png" alt="">
    </div>
    
    <div class="container">
    <form action="update.php" method="POST">
    <h1><u>Edit Hotel Details</u></h1>
        <table>
            <tr>
                <td>Hotel ID:</td>
                <td><input type="number" name="hotelid" value="<?php echo "$hid"?>" id=""></td>
            </tr>
            <tr>
                <td>Name of the Hotel:</td>
                <td><input type="text" name="Name" value="<?php echo "$name" ?>" id=""></td>
            </tr>
            <tr>
                <td>Cottage Price:</td>
                <td><input type="number" name="cottage" value="<?php echo "$cottage" ?>" id=""></td>
            </tr>
            <tr>
                <td>RiverView Price:</td>
                <td><input type="number" name="riv" value="<?php echo "$river" ?>" id=""></td>
            </tr>
            <tr>
                <td>Standard Price:</td>
                <td><input type="number" name="stand" value="<?php echo "$standard" ?>" id=""></td>
            </tr>
            <tr>
                <td>Poolview Price:</td>
                <td><input type="number" name="poolv" value="<?php echo "$pool" ?>" id=""></td>
            </tr>
            <tr>
                <td>treehouse Price:</td>
                <td><input type="number" name="tree" value="<?php echo "$tree" ?>" id=""></td>
            </tr>
            <tr>
                <td>deluxe Price:</td>
                <td><input type="number" name="deluxe" value="<?php echo "$deluxe" ?>" id=""></td>
            </tr>
            <tr>
                <td>Superior Price:</td>
                <td><input type="number" name="superior" value="<?php echo "$superior" ?>" id=""></td>
            </tr>
            <tr>
                <td>Dormitery Price:</td>
                <td><input type="number" name="dormitery" value="<?php echo "$dorm" ?>" id=""></td>
            </tr>
            <tr>
                <td>Tent Price:</td>
                <td><input type="number" name="Tent" value="<?php echo "$tent" ?>" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" value="Update" name="" onclick="window.alert('Update Successful')" class="btn btn-primary btn-lg" id=""></td>
            </tr>
        </table>
    </form>
    </div>
</body>
<style>
.container{
    width:50%;
    padding:40px;
    margin:100px auto;
    background:url("travel2.jpg");
    background-size:cover;

}

body{
    max-width:100%;
    background:url("travel.jpg");
    background-size:cover;
    background-attachment:fixed;
    font-size:24px;
    font-style:bold;
}
</style>
</html>