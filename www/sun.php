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
    <div class="sun-section">
        <div class="u-centre-text u-margin-bottom-medium">
            <h1 class="main-heading--large"><?php echo strtoupper($title);?></h1>
            <a class="btn" href="index.php">Back to home</a>
        </div>
        <?php
            include("classes.php");
            $index = 0;
            foreach ($forSunCollection as $imageIndex => $image) {
                if ($image['data'][0]['media_type'] === 'image') { ?>
                    <div class="u-centre-text" data-id="<?php echo $imageIndex; ?>">
                        <img
                            class='star-image u-margin-bottom-medium'
                            src="<?php echo $image['links'][0]['href']; ?>"
                            alt="<?php echo $image['data'][0]['title']; ?>"
                        />;
                        <div class="menu-btns u-margin-top-medium u-centre-text">
                            <a class="btn u-margin-top-medium" href="/delete/<?php echo $imageIndex; ?>">Delete</a>
                            <a class="u-margin-bottom-medium btn" href="/add/<?php echo $imageIndex; ?>">Add to favourites</a>
                        </div>
                    </div>
               <?php }
            }
        ?>
        <!-- <img src="<?php $this->escape($this->star->getImageURL());?>" alt=<?php $this->escape($this->star->getTitle());?>/> -->
    </div>

</body>
</html>