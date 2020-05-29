<?php
    require_once 'connection.php';

    $query = "select * from contacts";
    $result = $conn->query($query);
    $numOfRows = $result->num_rows;
?>
<!DOCTYPE html>
<html>
<head>
	<title>PhoneBook RM </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="front1.css">

        <style type="text/css">
          
          body{
            background-color: grey;
    background-size: cover;
    background-position: center;
background-attachment: fixed;
 background-repeat: no-repeat;
   -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;



    font-family: lato;
    color: white;
    height: 100%;
    width: 100%;
    min-height: 680px;
    max-height: 680px;
}

#content {

  
    padding-top: 25%;
    

}
html{
  height: auto;
  width: 100%;
}
h1{
  font-weight: 700;
  font-size: 5em;
  color: white;
}
hr{
  width: 400px;
  border-top: 1px solid #f8f8f8;
  border-bottom: 1px solid rgba(0,0,0,0.2);
}
h3{
  color: white;
}

.active-pink-2 input[type=text]:focus:not([readonly]) {
  border-bottom: 1px solid #f48fb1;
  box-shadow: 0 1px 0 0 #f48fb1;
}
.active-pink input[type=text] {
  border-bottom: 1px solid #f48fb1;
  box-shadow: 0 1px 0 0 #f48fb1;
}
.active-purple-2 input[type=text]:focus:not([readonly]) {
  border-bottom: 1px solid #ce93d8;
  box-shadow: 0 1px 0 0 #ce93d8;
}
.active-purple input[type=text] {
  border-bottom: 1px solid #ce93d8;
  box-shadow: 0 1px 0 0 #ce93d8;
}
.active-cyan-2 input[type=text]:focus:not([readonly]) {
  border-bottom: 1px solid #4dd0e1;
  box-shadow: 0 1px 0 0 #4dd0e1;
}
.active-cyan input[type=text] {
  border-bottom: 1px solid #4dd0e1;
  box-shadow: 0 1px 0 0 #4dd0e1;
}
.active-cyan .fa, .active-cyan-2 .fa {
  color: #4dd0e1;
}
.active-purple .fa, .active-purple-2 .fa {
  color: #ce93d8;
}
.active-pink .fa, .active-pink-2 .fa {
  color: #f48fb1;
}


.collapsible {
  background-color: chartreuse;
  color: black;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: grey;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: white;
}
        </style>

    </head>
<body>


<nav class="navbar navbar-default">
  <div class="container">
  
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
   <a href="homepage.php" class="navbar-brand">PhoneBook</a>
    </div>

 
    <div class="collapse navbar-collapse" id="mynav">
      <ul class="nav navbar-nav ">
        <li><a href="homepage.php">Home Page</a></li>
        <li><a href="newContact.php">New Contact</a></li>
        <li><a href="">Search</a></li>
        <li><a href="editContact.php">Edit</a></li>

      </ul>

        </li>
      </ul>
    </div>
  </div>
</nav>




<div class="jumbotron jumbotron-fluid" style="background-color: grey; padding: 1px;  width: 50%; margin-left: 30%;" >
  <div class="container">
<!-- Search form -->
<form class="form-inline active-cyan-4">
  <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search"
    aria-label="Search"><br><br>

    
<button type="button" class="collapsible">Sam Ellison</button>
<div class="content"style="color: red;">
  <p style="font-size: 15px;"> 23/05/2020 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-primary">Edit</button>&nbsp;&nbsp;&nbsp;
<button type="button" class="btn btn-warning">Remove</button></p>
  <p><div class="card" style="border: 1px solid black;">
  <div class="card-body">
    <p style="font-size: 15px;">&nbsp; &nbsp;<i class="fa fa-address-book" aria-hidden="true"></i>&nbsp; &nbsp;+91 1234567890 &nbsp; &nbsp;<i class="fa fa-user-circle" aria-hidden="true">&nbsp; &nbsp;abc@gmail.com</i>&nbsp; &nbsp;</p>
  </div>
</div></p>
</div>
<button type="button" class="collapsible">George Walley</button>
<div class="content" style="color: red;">
   <p style="font-size: 15px;"> 23/05/2020 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-primary">Edit</button>&nbsp;&nbsp;&nbsp;
<button type="button" class="btn btn-warning">Remove</button></p>
  <p><div class="card" style="border: 1px solid black;">
  <div class="card-body">
    <p style="font-size: 15px;">&nbsp; &nbsp;<i class="fa fa-address-book" aria-hidden="true"></i>&nbsp; &nbsp;+91 1234567890 &nbsp; &nbsp;<i class="fa fa-user-circle" aria-hidden="true">&nbsp; &nbsp;abc@gmail.com</i>&nbsp; &nbsp;</p>
  </div>
</div></p>
</div>
<button type="button" class="collapsible">Andrew Mark</button>
<div class="content"style="color: red;">
   <p style="font-size: 15px;"> 23/05/2020 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-primary">Edit</button>&nbsp;&nbsp;&nbsp;
<button type="button" class="btn btn-warning">Remove</button></p>
  <p><div class="card" style="border: 1px solid black;">
    &nbsp;
  <div class="card-body">
    <p style="font-size: 15px;">&nbsp; &nbsp;<i class="fa fa-address-book" aria-hidden="true"></i>&nbsp; &nbsp;+91 1234567890 &nbsp; &nbsp;<i class="fa fa-user-circle" aria-hidden="true">&nbsp; &nbsp;abc@gmail.com</i>&nbsp; &nbsp;</p>
  </div>
</div></p>
</div>

  </div>
</div>
</form>

  </div>
</div>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="bootstrap.js"></script>
</body>
</html>

