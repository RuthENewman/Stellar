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
            include("./collection.php");
            $index = 0;
            foreach ($forCollection as $imageIndex => $image) {
                if ($image['data'][0]['media_type'] === 'image') { ?>
                    <div class="u-centre-text" data-id="<?php echo $imageIndex; ?>">
                        <img
                            class='star-image u-margin-bottom-medium'
                            src="<?php echo $image['links'][0]['href']; ?>"
                            alt="<?php echo $image['data'][0]['title']; ?>"
                        />;
                        <div class="menu-btns u-margin-top-medium">
                            <a class="btn u-margin-top-medium" href="/delete/<?php echo $imageIndex; ?>">Delete</a>
                            <a class="u-margin-bottom-medium btn" href="/add/<?php echo $imageIndex; ?>">Add to favourites</a>
                        </div>
                    </div>
               <?php }
            }
        ?>
        <!-- <img src="<?php $this->escape($this->star->getImageURL());?>" alt=<?php $this->escape($this->star->getTitle());?>/> -->
    </section>

</body>
</html>
<script>
        // TOGGLE FULL SCREEN

        // let images = document.querySelectorAll('.star-image');
        // images.foreach((image) => {
        //     image.addEventListener('click', => {
        //         let id = parseInt(image.dataset.id);
        //         toggleFullScreen(image.id);
        //     });
        // });

        // CHANGE IMAGE TO NEXT


        // DELETE IMAGE FROM GALLERY

        // ADD TO FAVOURITES
</script>