<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8">
<title>VoltWay – EV Charging Network</title>

<style>
body{
    font-family: 'Broadway', sans-serif;
    font-weight:bold;
    font-size:16pt;
    font-style: italic;
    font-variant: small-caps;
}

h1{
    color:#0a3d62;
}

.navtable td{
    background-color:#0a3d62;
    padding:8px;
}

.navtable a{
    color:white;
    text-decoration:none;
    font-weight:bold;
}

.highlight{
    color:purple;
    font-size:18px;
    font-weight:bold;
}

.card{
    border:1px solid #ccc;
    margin:10px;
    padding:10px;
    cursor:pointer;
}
</style>

</head>


<body>

<div align="left">
<img src="voltwaylogo.png" alt="VoltWay Logo" width="150">
</div>

<center>

<h1>VoltWay Charging Network</h1>

<p style="color:green;"><b>Powering Tomorrow. Charging Today.</b></p>

<nav>
<table class="navtable" cellpadding="8" cellspacing="5">
<tr>

<td><a href="index.php">Home</a></td>
<td><a href="about.html">About</a></td>
<td><a href="services.html">Services</a></td>
<td><a href="contact.html">Contact</a></td>
<td><a href="columns.html">Columns</a></td>

</tr>
</table>
</nav>

<hr>

<h2>Welcome to VoltWay</h2>

<p>
VoltWay is a smart electric vehicle charging company focused on building
reliable, fast and eco-friendly charging infrastructure.
</p>

<img src="charger group - Copy - Copy.png" width="400">

<div class="card">
<h3>Fast Charging</h3>
<p>High-speed EV charging stations</p>
</div>

<div class="card">
<h3>Eco Friendly</h3>
<p>Clean energy infrastructure</p>
</div>

<div class="card">
<h3>Smart Monitoring</h3>
<p>Real-time tracking and control</p>
</div>

<p class="highlight">
Our network connects homes, offices and public spaces with intelligent charging.
</p>

<hr>

<!-- ✅ ENQUIRY FORM -->
<h2>EV Charger Enquiry</h2>

<form action="insert.php" method="post">

Name:<br>
<input type="text" name="name"><br><br>

Email:<br>
<input type="email" name="email"><br><br>

Phone:<br>
<input type="text" name="phone"><br><br>

Preferred Brand:<br>
<input type="text" name="brand" placeholder="e.g. VoltWay"><br><br>

Message:<br>
<textarea name="message"></textarea><br><br>

<input type="submit" value="Submit Enquiry">

</form>

<hr>

<p>© 2026 VoltWay – College Assignment</p>

</center>

<script>
window.onload = function(){

    alert("Welcome to VoltWay!");

    let cards = document.querySelectorAll(".card");

    cards.forEach(function(card){

        card.addEventListener("click", function(){
            let title = this.querySelector("h3").innerText;
            alert(title + " clicked!");
        });

        card.addEventListener("mouseover", function(){
            this.style.backgroundColor = "#dff9fb";
        });

        card.addEventListener("mouseout", function(){
            this.style.backgroundColor = "";
        });

        card.addEventListener("contextmenu", function(e){
            e.preventDefault();
            alert("Right click disabled!");
        });

    });

};

document.addEventListener("dblclick", function(){
    alert("Double clicked!");
});

document.addEventListener("keypress", function(event){
    if(!event.repeat){
        alert("You pressed: " + event.key);
    }
});
</script>

</body>
</html>