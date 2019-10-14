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
                if ($image['data'][0]['media_type'] === 'image') {

                    echo "<div data-id=" . $imageIndex . ">
                    <img class='star-image' src=" . $image['links'][0]['href'] .
                    " alt=" . $image['data'][0]['title'] .
                    "/>";
                    echo "<br/>";
                    echo "<button type='submit' value='Delete'>Delete</button>";
                    echo "<button type='submit' value='Add to favourites'>Add to favourites</button>";
                    echo "<br/><br /></div>";
                } else {
                    // echo "<video
                    // controls
                    // class='star-video' src=" . $image['links'][0]['href'] .
                    // " data-id=" . $imageIndex . " >
                    // Sorry, your browser doesn't support embedded videos.
                    // </video>";
                    // echo "<br/>";
                }
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