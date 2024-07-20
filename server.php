<?php
$con=new mysqli('localhost', 'root','','data');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $vno = $_POST['plate'];
    $lno = $_POST['lno'];
    $model = $_POST['model'];
    $color = $_POST['color'];
    $contact = $_POST['contact'];
}
if ($con) {
    $p = "SELECT * from reg where  vno='$vno'";
    $ans = mysqli_query($con, $p);
    if ($ans-> num_rows>0) {
        echo  "Vehicle already registered.";
    } else {
        $q = "INSERT INTO reg values('$name','$vno','$lno','$model','$color','$contact')";
        if (mysqli_query($con, $q)) {
            
            echo "<script>alert('vehicle Registered Successfully');window.location='login.php';</script>";
        } else {
            echo "Failed to insert";
        }
    }
} else {
    die(mysqli_error($con));
}
?>