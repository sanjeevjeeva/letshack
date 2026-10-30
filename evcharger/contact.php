<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Contact – VoltWay</title>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body style="font-family:'Manrope', sans-serif; margin:0;">

<div align="left">
<img src="voltwaylogo.png" width="150" style="margin:10px 0;">
</div>

<center>

<h1 style="color:#0a3d62;">Contact VoltWay</h1>

<nav>
<table cellpadding="8" cellspacing="5">
<tr>

<td style="background-color:#0a3d62; padding:8px;">
<a href="index.php"><font color="white"><b>Home</b></font></a>
</td>

<td style="background-color:#0a3d62; padding:8px;">
<a href="about.html"><font color="white"><b>About</b></font></a>
</td>

<td style="background-color:#0a3d62; padding:8px;">
<a href="services.html"><font color="white"><b>Services</b></font></a>
</td>

<td style="background-color:#0a3d62; padding:8px;">
<a href="contact.php"><font color="white"><b>Contact</b></font></a>
</td>

</tr>
</table>
</nav>

<hr>

<img src="opportunitiesbg.jpeg" width="400" style="margin:10px 0;">

<p style="font-size:15px;">
Have questions about our charging stations or services?
Send us a message and our team will contact you shortly.
</p>

<!-- ✅ FORM -->
<form action="/evcharger/insert.php" method="post" onsubmit="return validateForm()" style="margin-top:15px;">

<label><b>Name:</b><br>
<input type="text" id="name" name="name" required>
</label>
<br><br>

<label><b>Email:</b><br>
<input type="text" id="email" name="email" required>
</label>
<br><br>

<label><b>Phone Number:</b><br>
<input type="text" id="phone" name="phone" required>
</label>
<br><br>

<label><b>Message:</b><br>
<textarea rows="4" cols="30" id="message" name="message" required></textarea>
</label>
<br><br>

<button type="submit" style="background-color:#0a3d62; color:white; padding:8px; border:none;">
Submit
</button>

</form>

<hr>

<h3>Clean energy usage progress</h3>
<p>Our internal sustainability target completion level:</p>
<progress value="75" max="100" style="width:50%; height:20px;"></progress>

<hr>

<h3>Head Office</h3>
<p>
VoltWay Charging Network<br>
Green Mobility Park<br>
Innovation City
</p>

<hr>

<p>© 2026 VoltWay</p>

</center>

<script>
function validateForm() {

var name = document.getElementById("name").value.trim();
var email = document.getElementById("email").value.trim();
var phone = document.getElementById("phone").value.trim();
var message = document.getElementById("message").value.trim();

var phonePattern = /^9[0-9]{9}$/;
if(!phonePattern.test(phone)){
alert("Phone number must be 10 digits and start with 9");
return false;
}

var emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
if(!emailPattern.test(email)){
alert("Please enter a valid email address");
return false;
}

return true;
}
</script>

</body>
</html>