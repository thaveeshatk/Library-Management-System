<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>

<div class="title">
<h1>The Library</h1>
</div>

<div class="square">
</div>
<div class="container" id="logincontainer">
<h2>Login</h2>
<form action="login.php" method="POST">
    <input id="ID" type="text" placeholder="ID Number" name="ID" class="box" required minlength="4" maxlength="4">
    <p></p>
    <input id="password" type="password" placeholder="Password" name="pw" class="box" required minlength="8">
    <p></p>
    <button id="loginbutton" type="submit" class="loginbutton" name="loginbutton">Login</button>
    <p></p>
</form>
<p>Create a <a href="#" id="newaccount">New Account</a></p>
</div>
<div class="container" id="registercontainer" style="display:none">
<h2>Create Account</h2>
<form action="register.php" method="POST">
    <div class="twoinputs">
        <input id="fname" type="text" placeholder="First Name" name="fname" class="box" required>
        <p></p>
        <input id="lname" type="text" placeholder="Last Name" name="lname" class="box" required>
        <p></p>
    </div>
    <div class="twoinputs">
        <input id="age" type="text" placeholder="Age" name="age" class="box" required>
        <p></p>
        <input id="city" type="text" placeholder="City" name="city" class="box" required>
        <p></p>
        <input id="gender" type="text" placeholder="Gender" name="gender" class="box" required>
        <p></p>
    </div>
    <div class="twoinputs">
        <input id="email" type="email" placeholder="Email" name="email" class="box" required>
        <p></p>
        <input id="number" type="text" placeholder="Contact Number" name="number" class="box" required>
        <p></p>
    </div>
    <input id="newpassword" type="password" placeholder="Create a strong password" name="newpw" class="box" required minlength="8">
    <p class="inline">●</p><span class="inline">Password must contain at least 8 characters</span>
    <p></p>
    <p style="text-align:center;"><b>Select a membership plan</b></p>
    <p></p>
    <div class="membership">
        <div> 
            <label for="bronze">
                <h3>Bronze</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </label>
            <p>Price is Rs.200/=</p>
            <input type="radio" id="bronze" name="membership" value="bronze" required>
        </div>
        <div>
            <label for="silver">
                <h3>Silver</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </label>
            <p>Price is Rs.400/=</p>
            <input type="radio" id="silver" name="membership" value="silver">
        </div>
        <div>
            <label for="gold">
                <h3>Gold</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </label>
            <p>Price is Rs.600/=</p>
            <input type="radio" id="gold" name="membership" value="gold">
        </div>
    </div>
    <h4 style="text-align:center;">The desposit for any member is Rs.2000/=</h4>
    <p></p>
    <button id="createacount" type="submit" class="loginbutton" name="registerbutton">Create Account</button>  
</form>
<p>Already have an Account.Then <a href="#" id="loginlink">Login</a></p>
</div>
<footer>
    <p></p>
</footer>
<script src="loginscript.js"></script>
</body>
</html>