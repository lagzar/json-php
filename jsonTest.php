<?php

if (isset($_POST['submit'])) {
    // Creating json file with variables
    $arr = [];
    $inc = 0;
    $jsonArrayObject = (array('title' => $_POST['title'], 'street' => $_POST['street']));
    $arr[$inc] = $jsonArrayObject;
    $inc++;

    $json_array = json_encode($arr);
    file_put_contents('src/settings.json', $json_array);
    //echo $json_array;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="title" placeholder="Enter title">
        <input type="text" name="street" placeholder="Enter street">
        <input type="submit" name="submit">
    </form>
</body>
</html>