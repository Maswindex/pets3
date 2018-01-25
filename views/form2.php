<?php
    session_start();

    $_SESSION['animal'] = $_POST['animal'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>second form</title>
</head>
<body>
<form action="./results" method="POST">

    <select name="color">
    <repeat group="{{@colors}}" value="{{@color}}">
        <option value='{{@color}}'>{{@color}}</option>
    </repeat>
    </select>

    <button type='submit'>Order</button>

</form>

</body>
</html>