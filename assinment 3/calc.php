<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="handel.php" method="Post">
        <label for="num1">Number 1</label>
        <input type="number" name="num1" >
        <label for="num2">Number 2</label>
        <input type="number" name="num2">
        <select name="operation">
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="multi">*</option>
            <option value="div">/</option>
        </select> 
        <button type="submit" name="submit">submit</button>
    </form>
    <?php
    if(isset($_GET['finalResult'])){
        echo $_GET['finalResult'];
    }
    ?>
</body>
</html>