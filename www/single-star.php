<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../public/assets/css/main.css" />
    <title>STELLAR</title>
    <?php $title = "Stellar" ?>
</head>
<body>
    <section class="all-stars-section">
        <div class="u-centre-text header-section u-margin-bottom-small">
            <h1 class="main-heading--large u-margin-bottom-medium"><?php echo strtoupper($title);?></h1>
            <a class="btn u-margin-bottom-medium" href="index.php">Back to home</a>
        </div>
        <?php
            $stars = Star::findAll()
            $star
        ?>
        <!-- <img src="<?php $this->escape($this->star->getImageURL());?>" alt=<?php $this->escape($this->star->getTitle());?>/> -->
    </section>

</body>
</html>