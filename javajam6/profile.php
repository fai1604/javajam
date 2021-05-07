<!-- put php on top -->

<?php

    $line = '';
    $f = fopen('javamember.txt', 'r');
    $cursor = -1;
    fseek($f, $cursor, SEEK_END);
    $char = fgetc($f);
    //Trim trailing newline characters in the file
    while ($char === "\n" || $char === "\r") {
    fseek($f, $cursor--, SEEK_END);
    $char = fgetc($f);
    }
    //Read until the next line of the file begins or the first newline char
    while ($char !== false && $char !== "\n" && $char !== "\r") {
    //Prepend the new character
    $line = $char . $line;
    fseek($f, $cursor--, SEEK_END);
    $char = fgetc($f);
    }
    // echo $line;

    // read the file into memory; if there is an error then stop processing
    $profiles = $f or die('ERROR: Cannot find file');

    // our data is comma-delimited
    $delimiter = ',';

    $profileFields = explode($delimiter, $line);
    $username= $profileFields[0];
    $email = $profileFields[1];

?>

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
            <div class="jumbotron">
                <h1>JavaJam Coffee House - Member Profile</h1> 
                <p>Hi <?php echo $username; ?>, welcome to JavaJam Coffee House!</p>
            </div>
            <p><strong>Name : </strong><?php echo $username; ?></p>
            <p><strong>Username : </strong><?php echo $email; ?></p>

            
            <footer class="container text-center font-italic">
                <p> Copyright &copy; 2021 JavaJam Coffee House
                <a href="mailto:javajam@gmail.com">javajam@gmail.com</a> </p>
            </footer>
        </main>
    </div>
</body>
</html>

