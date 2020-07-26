<?php

if (isset($_POST['submit'])) {
    // Creating json file with variables
    $arr = [];
    $inc = 0;
    $jsonArrayObject = (array('title' => $_POST['title'], 'content' => $_POST['content']));
    $arr[$inc] = $jsonArrayObject;
    $inc++;

    $json_array = json_encode($arr);
    file_put_contents('PATH TO JSON FILE', $json_array);
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
        <input type="text" name="content" placeholder="Enter content">
        <input type="submit" name="submit">
    </form>
</body>
</html>
