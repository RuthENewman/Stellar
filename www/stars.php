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
    <div>
        <h1><?php echo strtoupper($title);?></h1>
        <a href="index.php">Back to home</a>
        <br/>
        <?php
            include("./collection.php");
            $index = 0;
            foreach ($forCollection as $imageIndex => $image) {
                if ($image['data'][0]['media_type'] === 'image') { ?>
                    <div data-id="<?php echo $imageIndex; ?>">
                        <img
                            class='star-image'
                            src="<?php echo $image['links'][0]['href']; ?>"
                            alt="<?php echo $image['data'][0]['title']; ?>"
                        />;
                    <br/>
                        <button type='submit' value='Delete'>
                            <a href="/delete/<?php echo $imageIndex; ?>">Delete</a>
                        </button>
                        <button type='submit' value='Add to favourites'>
                            <a href="/add/<?php echo $imageIndex; ?>">Add to favourites</a>
                        </button>
                        <br/>
                        <br />
                    </div>
               <?php }
            }
        ?>
        <!-- <img src="<?php $this->escape($this->star->getImageURL());?>" alt=<?php $this->escape($this->star->getTitle());?>/> -->
    </div>

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