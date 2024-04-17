<?php
session_start();
include 'header.php';
include 'ft.php';
include 'db.php';
?>
<div class="container">
        <div class="head" style="text-align: center;">
            <h1>Login në CINEMA</h1>
        </div>
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Adresa Email</label>
                <input type="text" name="uname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Vendosni adresën tuaj të emailit">
                <small id="emailHelp" class="form-text text-muted">Nuk do të ndajmë adresën tuaj të emailit me askënd tjetër.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Fjalëkalimi</label>
                <input type="password" name="pwd" class="form-control" id="exampleInputPassword1" placeholder="Fjalëkalimi">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Dërgo</button>
</form>
</div>

<?php

if(isset($_POST['submit'])){
    $user = $_POST['uname'];
    $pwd = $_POST ['pwd'];
    $query = "Select * From admin where uname = '$user' and pwd = '$pwd'";
    $run = mysqli_query($con,$query);
    $row = mysqli_num_rows($run);
    if($row == 1){
        $_SESSION['loginsuccesfull']=1;
        echo "<script>alert('Logged in Successfully'); window.location.href='index.php';</script>";
    }
    else{
        echo "<script>alert('Check your ID pass - They Not matched our users');</script>";

    }
}
?>
