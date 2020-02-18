<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="top">
       <a href="http://b2brayntourism.com/">Mail to:info@rayntourism.com</a> 
    </div>
    <div>
        <img src="logo.png" alt="">
    </div> 
    <div class="main">
        <h1>Welcome To Rayan Tours</h1>
        <br>
        <a href="CustRegform.php" class="btn btn-primary btn-lg" target="_blank">Generate Quotation</a><br><br>
        <a href="addhotelform.php" class="btn btn-primary btn-lg">Add Hotel</a><br><br>
        <a href="view.php" class="btn btn-primary btn-lg">View Details</a><br><br>
        <a href="edit.php" class="btn btn-primary btn-lg" target="_blank">Edit Hotel Details</a>
    </div>
   
</body>
<style>
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
    .main{
        color:black;
        position:fixed;
        left:50%;
        top:50%;
        margin-top:-100px;
        margin-left:-200px;
        text-align:center;
        border: 3px solid aqua;
        padding:20px;
        background: url("travel2.jpg");
        background-size:contain;
    }
    .btn{
        width:200px;
    }

</style>
</html>