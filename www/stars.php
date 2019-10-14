<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css" type="text/css" />
    <title>STELLAR</title>
    <?php $title = "Stellar" ?>
</head>
<body>
    <div>
        <h1>Star image to go here</h1>
        <a href="index.php">Back to home</a>
        <br/>
        <?php
            include("./collection.php");
            $index = 0;
            foreach ($forCollection as $imageIndex => $image) {
                echo "<img src=" . $image['links'][0]['href'] .
                " alt=" . $image['data'][0]['title'] .
                " data-id=" . $imageIndex . " />";
                echo "<br/>";
            }
        ?>
        <!-- <img src="<?php $this->escape($this->star->getImageURL());?>" alt=<?php $this->escape($this->star->getTitle());?>/> -->
    </div>

</body>
</html>