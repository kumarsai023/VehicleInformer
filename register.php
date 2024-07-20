<!DOCTYPE html>
<html>
<head>
    <title>Vehicle Registration</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <video autoplay muted loop plays-inline class="back">
        <source src="dbprovid.mp4" type="video/mp4">
    </video>
    <div class="container">
        <h1>Register Here!!!</h1>
        <form method="post" action="server.php">
            <p>Full Name:</p>
            <div class="box">
                <input type="text" name="name" placeholder="Enter Full Name" required />
            </div>
            <p>Number Plate:</p>
            <div class="box">
                <input type="text" name="plate" title="Please enter a valid number plate." pattern=".{10,}" placeholder="@ap32en4325" required>
            </div>
            <p>Licence number:</p>
            <div class="box">
                <input type="text" name="lno" placeholder="Enter Licence Number" required />
            </div>
            <p>Vehicle Model:</p>
            <div class="box">
                <input type="text" name="model" placeholder="Enter Vehicle Model" required />
            </div>
            <p>Vehicle Color:</p>
            <div class="box">
                <input type="text" name="color" placeholder="Enter Vehicle Color" required />
            </div>
            <p>Contact:</p>
            <div class="box">
                <input type="tel" pattern=".{10,}" title="Please enter at least 10 characters." name="contact" placeholder="enter your mobile number" required><br>
            </div>
            <button type="Submit" class="btn" >Register</button>
        </form>
    </div>
</body>
</html>