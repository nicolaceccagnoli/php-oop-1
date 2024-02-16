<?php

    require_once __DIR__."/Models/db.php";

    $movieString = file_get_contents('./Models/movies.json');

    $movieArray = json_decode($movieString, true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>PHP OOP 1</title>
</head>
<body>
    <header class="container">
        <h1>
            PHP OOP 1
        </h1>
    </header>
    <main>
        <div class="container">
            
            <ul class="list-group">

                <?php 

                    for ($i = 0; $i < count($movieArray); $i++) {
                        $title = $movieArray[$i]['title'];
                        $genre = $movieArray[$i]['genre'];
                        $duration = $movieArray[$i]['duration'];
                        $year = $movieArray[$i]['year'];

                        $movie = new Movie($title,$genre,$duration,$year);

                ?>

                    <li class="list-group-item">
                        <?php
                            echo $title;
                        ?>
                    </li>
                    <li class="list-group-item">
                        <?php
                            echo $movie->getGenre();
                        ?>
                    </li>
                    <li class="list-group-item">
                        <?php
                            echo $duration;
                        ?>
                        minuti
                    </li>
                    <li class="list-group-item">
                        <?php
                            echo $year;
                        ?>
                    </li>
                    <br>
                <?php
                }
                ?>
                
            </ul>

        </div>
    </main>
</body>
</html>