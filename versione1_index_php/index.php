<?php
require "db.php";
// var_dump($albums);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../app.css">
    <title>Dischi V1</title>
</head>

<body>
    <div class="card_container">

        <?php foreach ($albums as $album) { ?>
            <div class="card " style="width: 18rem;">
                <img class="card-img-top" src=<?="$album[poster]"?> alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?="$album[title]"?></h5>
                    <h5><?="$album[author]"?></h5>
                    <h5><?="$album[year]"?></h5>
                </div>
            </div>
        <?php
        } ?>


    </div>

</body>

</html>