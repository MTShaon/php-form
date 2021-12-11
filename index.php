<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php

    if(isset($_POST["submit"]))
    {

        $name = $_POST["name"];
        $email = $_POST["email"];
        $cell = $_POST["cell"];
        $age = $_POST["age"];

        if(empty($name) || empty($email) || empty($cell) || empty($age))
        {
            $mess =  "<p style= \" color:red; \"> Please fulfill All the fields<p>";
        }
        else {
            $mess =  "<p style= \" color:green; \">Thanks for Sent Your info<p>";
        }
        
    }
  
    ?>

    
    <div class="User-form">
        <h2>add your info</h2>
        <?php
        // show validation message
        if(isset($mess)){
            echo $mess;
        }
        ?>

        <form action="" method="POST">
            <input name="name" type="text" placeholder="Name">
            <input name="email" type="text" placeholder="Email">
            <input name="cell" type="text" placeholder="Cell">
            <input name="age" type="text" placeholder="Age">
            <input name="submit" type="submit" value="Send">
        </form>

    </div>
</body>
</html>

