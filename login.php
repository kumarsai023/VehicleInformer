
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <video autoplay muted loop plays-inline class="back">
       <source src="c2.mp4" type="video/mp4">
    </video>
    <div class="name">
        <h1>Search the Ride</h1>
    </div>
    <?php
         if(isset($_POST['submit'])){
            $plate=$_POST['plate'];
            
         }
    ?>
    <div class="container">
        <form method="post" action="detail.php">
            <h1>Enter Vehicle Number:</h1>
            <div class="box">
                <input type="text" name="plate" placeholder="@ap31en9557" >
             <div>
                <label style="color:rgb(74, 236, 217);">Dont have a account?? <a style="color:rgb(74, 236, 217);"href="register.php">Register Here</a></label>
             </div>
            </div>
            <input type="submit" class="btn" name="submit" value="search" style="margin-left:90px" >
        </form>
    </div>
</body>
</html>