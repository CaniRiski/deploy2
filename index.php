<!DOCTYPE html>  
<html lang="en">  
<head>  
  <title>Project 1</title>  
  <meta charset="utf-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
</head>  
<body>  
  
<!-- navigation -->
<nav class="navbar navbar-inverse">  
  <div class="container-fluid">  
    <div class="navbar-header">  
      <a class="navbar-brand" href="#">LOGO</a>  
    </div>  
    <ul class="nav navbar-nav">  
      <li class="active"><a href="#">Home</a></li>  
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Our Product<span class="caret"></span></a>  
        <ul class="dropdown-menu">  
          <li><a href="#">Women Cloth</a></li>  
          <li><a href="#">Men Cloth</a></li>  
          <li><a href="#">Children Cloth</a></li>  
        </ul>  
      </li>  
      <li><a href="#">About Us</a></li>  
      <li><a href="#">Contact</a></li>  
    </ul>  
    <ul class="nav navbar-nav navbar-right">  
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Register</a></li>  
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>  
    </ul>  
  </div>  
</nav>  

<!-- content with grid and form -->
<div class="container">  
    <h1>Welcome Shopping Maniac</h1>  
  <div class="row">  
    <div class="col-md-5">
        <h3>Register</h3>
        <form style="width:300px">  
            <div class="form-group">  
                <label for="exampleInputUsername">Username</label>  
                <input type="email" class="form-control" id="exampleInputUsername" placeholder="Username">  
            </div>
            <div class="form-group">  
              <label for="exampleInputEmail1">Email</label>  
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">  
            </div>  
            <div class="form-group">  
              <label for="exampleInputPassword1">Password</label>  
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">  
            </div> 
            <button type="submit" class="btn btn-default">Register</button>  
          </form>
    </div>  
    <div class="col-md-1"></div> 
    <div class="col-md-5">
        <h3>Login</h3>
        <form style="width:300px">  
            <div class="form-group">  
              <label for="exampleInputEmail2">Email</label>  
              <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email">  
            </div>  
            <div class="form-group">  
              <label for="exampleInputPassword2">Password</label>  
              <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">  
            </div> 
            <button type="submit" class="btn btn-default">Login</button>  
          </form>
    </div>
  </div>  
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</body>  
</html>