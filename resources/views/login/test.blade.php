<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: rgba(62,30,30,1);
  padding:1px;
 
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white; 
  padding: 12px;
  text-decoration: none;
  margin-left:100px;
}

.dropdown {
  float: left;
  overflow: hidden;
  margin-left:45px;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
     float:right;
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  margin-left:-50px;
  
}
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16 px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>

<div class="navbar">
                    <a href="#"><i class="fa fa-home"></i>Home</a></li>
                    <a href="#"><i class="fa fa-user"></i> About Us</a></li>
                      
                    <a href="#"><i class="fa fa-clone"></i>Services</a></li>

                    
  <div class="dropdown">
    <button class="dropbtn"><i class="fa fa-sign-in"></i>Logins
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">CSC Login<i class="fa fa-angle-double-right"></i></a>
      <a href="#">Forwared Login<i class="fa fa-angle-double-right"></i></a>
      <a href="#">DCSO Login<i class="fa fa-angle-double-right"></i></a>
    </div>
  </div> 
</div>

<h3>khawvelah i hmelchhe ber</h3>
<p>Duh duh duh</p>

</body>
</html>