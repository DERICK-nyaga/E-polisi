<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Side menu bar</title>
    <link rel="stylesheet" href="../../css/style2.css">
    <script src="../../js/scripts.js" defer></script>
</head>
<body>
    
    <div id="mySidemenu" class="navheader">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <li><a href="">Add an officer</a></li>
        <li><a href="">View cases</a></li>
        <li><a href="">Most Wanted List</a></li>
        <li><a href="">Armory Store</a></li>
        <li><a href="">Assign case</a></li>
        <li><a href="">Officers Details</a></li>
        <li><a href="">Officer's conduct</a></li>
        <li><a href="">Check Officers</a></li>
    </div>

    <div id="nav-toggle-label">
        <button class="openmenu" onclick="openNav()">☰ Menu</button>  
    </div>
    
<script>
function openNav() {
  document.getElementById("mySidemenu").style.width = "250px";
  document.getElementById("nav-toggle-label").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidemenu").style.width = "0";
  document.getElementById("nav-toggle-label").style.marginLeft= "0";
}
</script>
</body>
</html>