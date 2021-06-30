<html>

<head>
    <title>User Login</title>
    <style>

#edit
{
background-color:green;
color:white;

}
#text
{
    background-color:red;
color:white;
}
#sk 
{
border:solid blue;
}
#jk 
{

    border:solid blue;

}
    </style>


</head>

<body>
    <form method="POST">
        <table border="1" cellpadding="20px" align="center">
            <tr>
                <th colspan="2" style="background-color:black;color:white;">Login page</th>
            </tr>
            <tr>
                <th>USER NAME</th>
                <td><input id="jk" type="text" placeholder="Enter your name" name="username"></td>
            </tr>
            <tr>
                <th>PASSWORD</th>
                <td><input id="sk" type="password" placeholder="Enter your password" name="password"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input id="edit" type="submit" value="LOGIN" name="login">
<input id="text" type="submit" value="LOGOUT" name="logout">
                </td>
            </tr>
        </table>
</body>
<?php
SESSION_start();
if(isset($_POST["login"]))
{
if(($_SESSION["username"]==$_POST['username'] && ($_SESSION["password"]==$_POST['password'])))
{ 
    $_SESSION["counter"]++;
    echo $_SESSION["username"].'<br>';
    echo "Welcome back ".$_SESSION["username"]. "this is your".$_SESSION["counter"]." visit ";
}
else {
     $_SESSION["username"]=$_POST['username'];
     $_SESSION["password"]=$_POST['password'];
     $_SESSION["counter"]=1;
     echo $_SESSION["username"];
     echo"<br>Welcome User....!This is your first visit";
    } 
}
if(isset($_POST['logout'])){
SESSION_unset();
echo"Logged Out<br>";
echo $_SESSION["username"]=$_POST['username']; }
?>

</html>