<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST" action="">
        <label for="name">Input name</label> </br>
        <input type="text" name="name">
        <button type="submit">SUBMIT</button>
        </br>
    </form>

    <?php
        if(isset($_POST['name'])) {
            echo "Hello, ".$_POST['name'];
        }

    ?>
</body>
</html>
