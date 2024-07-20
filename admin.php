<?php
$con =mysqli_connect("localhost","root","","data");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $del=$_POST['val'];
    $p = "SELECT * from reg where  vno='$del'";
    $ans = mysqli_query($con, $p);
    if ($ans-> num_rows==0) {
        echo  "<script>alert('vehicle not registered');window.location='admin.php';</script>";;
    }
    else{
        if(isset($_POST['delete'])){
            $q= "DELETE FROM reg where vno='$del'";
            $a= mysqli_query($con,$q); 
            if($a){
                echo "<script>alert('Record Deleted  Successfully');window.location='admin.php';</script>";
            }
         }
    }
    
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body{
                display:flex;
                flex-direction: column;
                justify-content: center;
                align-items:center;
                background-color: black;
            }
            .con{
                border:2px solid white;
                border-radius:20px;
                display:flex;
                flex-direction: column;
                justify-content: space-around;
                align-items:center;
                height: 200px;
                width:400px;
                color:white;
            }
            .con1{
                border:2px solid white;
                border-radius:20px;
                display:flex;
                flex-direction: column;
                justify-content: space-around;
                align-items:center;
                height: 500px;
                width:400px;
                color:white;
                margin-top: 20px;
            }

            .sub{
                display: flex;
                justify-content: space-around;
                align-items:center;
                width:75%;
            }
            .sub input{
                height:30px;
                width:100px;
                font-size: 20px;;
                text-align: center;
                border-radius:15px;
                color:black
            }
            ::placeholder{
                font-size: 20px;
                color:black;
            }
            input{
                font-size:26px;
                color:black;
                opacity:0.9;
            }

        </style>
    </head>
    <body>
        <a href="login.php"><div>Home</div></a>
        <form class="con" method="post">
            <h1>Enter vehicle number:</h1>
            <input style="width:80%;height:30px;border-radius:15px;" name='val'type="text" required placeholder="@vehicle number">
            <div class="sub">
            <input type="submit" value="Delete" name="delete">
            </div>
        </form>
        <form class="con1" action="mod.php" method="post">
            <p style="text-align:center;font-weight:400;font-size:30px;">New Details</p>
        <input style="width:60%;height:30px;border-radius:15px;" name='vno' placeholder="@vehicle No"type="text"  required>
        <input style="width:80%;height:30px;border-radius:15px;" name='name' placeholder="@name"type="text"  required>
        <input style="width:80%;height:30px;border-radius:15px;" name='lno' placeholder="@licence number"type="text" required>
        <input style="width:80%;height:30px;border-radius:15px;" name='model' placeholder="@model"type="text" required>
        <input style="width:80%;height:30px;border-radius:15px;" name='color' placeholder="@color"type="text" required>
        <input style="width:80%;height:30px;border-radius:15px;" name='contact' placeholder="@contact"type="text" required>
        <input type="submit"style=" height:30px;width:100px;font-size: 20px;;text-align: center;border-radius:15px;color:black" value="Modify"  name="modify">
        </form>
    </body>
</html>