<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Signup</title>
</head>
<body>
   
    <div class='container'>
        <h1 class='display-4'>JavaJam Coffee House</h1>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">
                    <img src="javajamlogo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
                    JavaJam
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="menu.html">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="music.html">Music</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="jobs.html">Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signup.php">Signup</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="profile.php">Profile</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="logout.php">Logout</a>
                      </li>
                  </ul>
                  
                </div>
              </nav>
        </header>
        <main>
            <h1>Sign Up as JavaJam Member</h1> 
            <p>Please fill in this form to create an account. Required information is marked with an asterisk (*).</p>
            <form action="processSignup.php" method="post">
                <div class="form-group">
                    <label for="mName">*Name: </label> <br>
                    <input type="text" class="form-control col-sm-4" id="mName" name="mName" required="required"> <br>
                </div>
                <div class="form-group">
                    <label for="myEmail">*E-mail: </label> <br>
                    <input type="email" class="form-control col-sm-4" id="mEmail" name="mEmail" required="required"> <br>
                </div>
                <div class="form-group">
                    <label for="password">*Password:</label>
                    <input class="form-control col-sm-4" id="password" name="password" type="password" required>
                </div>
                <div class="form-group">
                    <label for="rpassword">*Repeat Password:</label>
                    <input class="form-control col-sm-4" id="rpassword" name="rpassword" type="password" required>
                </div>
                <button class='btn btn-primary' type="submit">Sign in</button>
            </form>
            <footer class="container text-center font-italic">
                <p> Copyright &copy; 2021 JavaJam Coffee House
                <a href="mailto:javajam@gmail.com">javajam@gmail.com</a> </p>
            </footer>
        </main>
    </div>
</body>
</html>