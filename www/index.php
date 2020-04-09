<!Doctype html>
<html lang="en">

<head>
    <title>Docker</title>
</head>
<body>

<h1><?php


    $connection = mysqli_connect("mysql", "root", "password", "app");

    if ($connection) {
        echo 'connected';
    }

?></h1>

</body>

</html>
