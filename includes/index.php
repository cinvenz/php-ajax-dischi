<?php
include __DIR__ . '/db/data.php' ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap-grid.css' integrity='sha512-VA/YQLfZ2JQlKs8s3wffXcOki/gvJsM9V2x7eSZ1cetjA43S9XeVWv0ZTjkW29zdlwnGzoIq+0OUErhHM38t1g==' crossorigin='anonymous' />
    <title>PHP DISCHI</title>
</head>

<body class="m-0">

    <main id="app">

        <div class="row row-cols-3 g-4 container-cards py-5">
            <?php foreach ($arrDiscs as $disc) : ?>
                <div class="contents text-center container-card p-3 mb-1">
                    <img :src="<?= $disc['poster'] ?>" :alt="<?= $disc['author'] ?>" class="img-fluid" />
                    <h2 class="name fw-bold text-uppercase pt-3 pb-2">
                        <?= strtoupper($disc['title']) ?>
                    </h2>
                    <div class="author"><?= $disc['author'] ?></div>
                    <div class="anno"><?= $disc['genre'] ?></div>
                </div>

            <?php endforeach; ?>
        </div>
    </main>


</body>

</html>