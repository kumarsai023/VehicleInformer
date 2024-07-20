<?php
$con =mysqli_connect("localhost","root","","data");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $del =$_POST['vno'];
    $nam =$_POST['name'];
    $lno=$_POST['lno'];
    $model=$_POST['model'];
    $color=$_POST['color'];
    $contact=$_POST['contact'];
    $p = "SELECT * from reg where  vno='$del'";
    $ans = mysqli_query($con, $p);
    if ($ans-> num_rows==0) {
        echo  "<script>alert('vehicle not exit');window.location='admin.php';</script>";;
    }
    else{
        if(isset($_POST['modify'])){
        $ss="UPDATE reg SET lno='$lno',model='$model',name='$nam',color='$color',contact='$contact' where vno='$del' ";
        $aa=mysqli_query($con,$ss);
        if($aa){
            echo "<script>alert('Record modified Successfully');window.location='admin.php';</script>";
        }
        else{
            echo "<script>alert('Record modification failed');window.location='admin.php';</script>";;
        }
         }
    }
    
}
