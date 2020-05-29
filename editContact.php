
<!DOCTYPE html>
<html>
<head>
	<title>Search </title>
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

::-webkit-input-placeholder {
    color: solid red;
    font-weight: bold;

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

  <form class="px-4 py-6">
   <p style="color: #04F605 ;"><b> Edit Contact </b></p>
      <div class="form-group">
      <label for="exampleDropdownFormPassword1">Name</label>
      <input type="text" class="form-control" id="exampleDropdownFormPassword1" placeholder="Sam Ellison" >
    </div>
      <div class="form-group">
      <label for="exampleDropdownFormPassword1">DOB</label>
      <input type="text" class="form-control" id="exampleDropdownFormPassword1" placeholder="28/12/2010">
    </div>
    <div class="form-group">
      <label for="exampleDropdownFormEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="samellison345@gmail.com">
    </div>
    <div class="form-group">
      <label for="exampleDropdownFormPassword1">Mobile Number</label>
      <input type="text" class="form-control" id="exampleDropdownFormPassword1" placeholder="+13 7788456789">
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="dropdownCheck">
      <label class="form-check-label" for="dropdownCheck">
        Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
  <div class="dropdown-divider"></div>

</div>

  </div>

</form>

  </div>
</div>



	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="bootstrap.js"></script>
</body>
</html>

