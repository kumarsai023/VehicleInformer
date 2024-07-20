<?php
$con=new mysqli('localhost','root','','data');
$p = $_POST['plate']; 
$q="SELECT vno from daas WHERE  vno='$p'";
if($p=='admin'){
    header('Location:admin.php');
}
$name="";
$vno="";
$lno="";
$model="";
$color="";
$contact="";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="detail.css">
</head>
<body>
<?php 
$q="SELECT * from reg WHERE  vno='$p'";
$ans=mysqli_query($con,$q);
if($ans-> num_rows>0){
    $row =$ans->fetch_assoc();
    $name =$row['name'];
    $vno=$row['vno'];
    $lno=$row['lno'];
    $model=$row['model'];
    $color=$row['color'];
    $contact=$row['contact'];
    
}else{
    $name ="NOT REGISTERD";
    $vno="NOT REGISTERD";
    $lno="NOT REGISTERD";
    $model="NOT REGISTERD";
    $color="NOT REGISTERD";
    $contact="NOT REGISTERD";
}

?>

    <div class="container">
        <h1 >Vehicle Details</h1> 
        <div class=df>
            <pre>Vehicle owner name    : <?php echo "$name"; ?></pre> 
        </div>
        <div class=df>
            <pre>Vehicle number        : <?php echo "$vno"; ?></pre>
        </div>
        <div class=df>
            <pre>Owner licence number  : <?php echo "$lno"; ?></pre> 
        </div>
        <div class=df>
            <pre>Vehicle model         : <?php echo "$model"; ?></pre> 
        </div>
        <div class=df>
            <pre>Vehicle color         : <?php echo "$color"; ?></pre> 
        </div>
        <div class=df>
            <pre>Vehicle owner contact : <?php echo "$contact"; ?></pre> 
        </div>
        <div class="reg">
            <a href="register.php"><button>New Registration</button></a>
        </div>
    </div>
</body>
</html>