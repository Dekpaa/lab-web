<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q2</title>
</head>
<body>
    <?php
    /*
    $myfile =fopen("test.txt","r") or die ("Unable to open file!");
    echo fgets($myfile);
    fclose($myfile);*/

    $myfile =fopen("test.txt","a") or die ("Unable to open file!");
    $txt ="My name is Khan\n";
    fwrite($myfile,$txt);
    $txt ="I am ten years old\n";
    fwrite($myfile,$txt);
    fclose($myfile);
    ?>
</body>
</html>