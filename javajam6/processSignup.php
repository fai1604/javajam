<?php 

    $uname = $_POST["mName"];
    $email = $_POST["mEmail"];
    $pass = $_POST["password"];
    $rpass = $_POST["rpassword"];

    // $location = file_get_contents('javamember.txt');
    // echo $location;
    $myfile = fopen("javamember.txt", "a+") or die("Unable to open file!");
    fwrite($myfile, $uname . ',');
    fwrite($myfile, $email . ',');
    fwrite($myfile, $pass . ',');
    fwrite($myfile, $rpass . "\n");
    fclose($myfile);

    header("Location: profile.php?action=login_success");

?>