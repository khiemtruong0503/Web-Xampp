<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello PHP</title>
</head>
<body>
    <?php include_once "hello1.php";?> 
    <form method="GET" action="">
        <input type="text" name="username" value="">
        <input type="text" name="password" value="">
        <button type="submit">Gửi</button>
    </form>

    <?php
        // if(isset($_POST["username"]) && $_POST["password"]){
        //     echo $_POST["username"] . "</br>";
        //     echo $_POST["password"]; 
        // }

        // if(isset($_REQUEST["username"]) && $_REQUEST["password"]){
        //     echo $_REQUEST["username"] . "</br>";
        //     echo $_REQUEST["password"] . "</br>; 
        // }
        
        if($_SERVER['REQUEST_METHOD'] == "GET"){
            if(isset($_REQUEST["username"]) && $_REQUEST["password"]){
                echo $_REQUEST["username"] . "</br>";
                echo $_REQUEST["password"] . "</br>"; 
            }
            echo $_SERVER['REQUEST_METHOD'];
        }
    ?>
</body>
</html>