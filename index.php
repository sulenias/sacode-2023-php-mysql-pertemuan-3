<?php

    // Kata selamat datang
    $welcome = 'SELAMAT DATANG';

    // nama saya
    $nama = 'SULENIAS';

    $keterangan = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

    $footer = 'Copyright by <b>Acho</b>';

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dokument</title>
</head>

<body>

    <h1> <?= $welcome .' '. $nama ?> </h1>
    <p> <?php echo $keterangan ?> </p>
    <p> <?php echo $footer ?> </p>

</body>

</html>