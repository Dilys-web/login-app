<?php
session_start();
    $_SESSION;

?>
<!DOCTYPE html>
<html>
 <head>
    <title>
        Login
    </title>
 </head>
 <body>

    <style type="text/css">

    #text{

        height:25px;
        border-radius : 5px;
        padding: 4px;
        border: solid thin #aaa;
        width: 100%;
    }

    #button{
        padding: l0px;
        width: 100px;
        color: white;
        background-color : lightblue;
        border: none;
    }

    #box{
        
        background-color: grey;
        margin: auto;
        width: 300px;
        padding: 20px;
    }
        
    

    </style>
    <div id="box">

        <form method=" post" >
            <div style="font-size: 20px;margin: 10px; color:white"> Login </div>
            <input id="text" type="text" name="user name" ><br><br>
            <input id="text" type="password" name="password" ><br><br>
            <input id="button" type="submit" value="Login"><br><br>

            <a href="signup.php">Signup</a><br><br>

        </form>
    </div>
</body>

</html>