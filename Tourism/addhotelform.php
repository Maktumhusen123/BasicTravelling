<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Hotel</title>
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
    <form action="addhotel.php" method="POST">
    <h1><u>Add Hotel</u></h1>
        <table cellpadding="5px">
            <tr>
                <td>Name of the Hotel:</td>
                <td><input type="text" name="Name" id=""></td>
            </tr>
            <tr>
                <td>Cottage Price:</td>
                <td><input type="number" name="cottage" id=""></td>
            </tr>
            <tr>
                <td>RiverView Price:</td>
                <td><input type="number" name="riv" id=""></td>
            </tr>
            <tr>
                <td>Standard Price:</td>
                <td><input type="number" name="stand" id=""></td>
            </tr>
            <tr>
                <td>Poolview Price:</td>
                <td><input type="number" name="poolv" id=""></td>
            </tr>
            <tr>
                <td>Treehouse Price:</td>
                <td><input type="number" name="tree" id=""></td>
            </tr>
            <tr>
                <td>Deluxe Price:</td>
                <td><input type="number" name="deluxe" id=""></td>
            </tr>
            <tr>
                <td>Superior Price:</td>
                <td><input type="number" name="superior" id=""></td>
            </tr>
            <tr>
                <td>Dormitery Price:</td>
                <td><input type="number" name="dormitery" id=""></td>
            </tr>
            <tr>
                <td>Tent Price:</td>
                <td><input type="number" name="Tent" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" value="Update" name="" class="btn btn-lg btn-primary" id=""></td>
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
        background:url("travel.jpg") center center fixed;
        background-size:cover;
        font-size:24px;
        font-style:bold;
    }
.top{
    background:#87CEEB;
    padding:10px;
}
a{
    color:#ffffff;
}
img{
    margin-left:10%;
    align:left;
}
</style>
</html>