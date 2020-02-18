
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Registration</title>
    <link href="https://fonts.googleapis.com/css?family=Lemonada&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <header>
       <a href="http://b2brayntourism.com/" target="_blank">Mail to:info@rayntourism.com</a> 
    </header>
    <a href="http://b2brayntourism.com/" target="_blank"><img src="logo.png" alt=""></a>

<div class="container"> 
        
    <form action="Custregform2.php" method="POST">
        <h1 style="text-align:center;"><u>Generate Quotation</u></h1>  
        <table cellpadding="5px">
            <tr>
                <td>Customer Name:</td>
                <td><input type="text" name="cname" id="" required autofocus placeholder="Enter Customer Name"></td>
            </tr>
            <tr>
                <td>Mobile No:</td>
                <td><input type="tel" name="mobile" id="" maxlength="10" pattern="[1-9]{1}[0-9]{9}" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" id="" required placeholder="abc@email.com"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea name="address" id="" cols="20" rows="3"></textarea></td>
            </tr>
            <tr>
                <td>Choose Hotel:</td>
                <td>
                    <select name="hotel" id="dropdown">
                        <option value="-" disabled selected>Choose Hotel</option>
                        <option value="Sangam Home Stay">Sangam Home Stay</option>
                        <option value="Woodpecker Jungle Home Stay">Woodpecker Jungle Home Stay</option>
                        <option value="White Elephant Cottage">White Elephant Cottage</option>
                        <option value="Dark Forest Jungle Home Stay">Dark Jungle Home Stay</option>
                        <option value="Maland Stay">Maland Stay</option>
                        <option value="Wild West Home Stay">Wild West Home Stay</option>
                        <option value="Greenland Jungle Stay">Greenland Jungle Stay</option>
                        <option value="Parampara Cottages">Parampara Cottages</option>
                        <option value="Whistling Woods Resort">Whistling Woods Resort</option>
                    </select>
                </td>
            
            <tr>
                <td>Check in:</td>
                <td><input type="date" name="checkin"></td>
            </tr>
            <tr>
                <td>Check out:</td>
                <td><input type="date" name="checkout"></td>
            </tr>
            <tr>
                <td><input type="submit" name="btn" id="" class="btn btn-primary btn-lg" style="border-radius:12px;" value="Next"></td>
            </tr>
            
        </table> 
    </form>
    
</body>
<style>
body{
    max-width:100%;
    background:url("travel.jpg");
    background-size:cover;
    background-attachment:fixed;
    font-size:24px;
    font-style:bold;
}
a{
    color:#ffffff;
}
header{
    background:#87CEEB;
    padding:10px;
}
.container{
    width:50%;
    padding:40px;
    margin:100px auto;
    background:url("travel2.jpg");
    background-size:cover;

}
img{
        margin-left:10%;
        align:left;
    }
.btn{
    width:150px;
}

</style>
</html>