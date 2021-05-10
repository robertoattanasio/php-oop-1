<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            width: 100%;
            height: 100vh;
            padding: 10px;
        }
        
        .movie-info {
            margin-bottom: 50px;
        }
        
        h3 {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <!-- INIT CLASSE MOVIE -->
    <?php
        class Movie {
            public $title;
            public $year;
            public $length;
            public $director;

            // CHECK IN INGRESSO TIPO DI FILM
            public function __construct($_title, $_length)
            {
                if ($_length > 130) {
                    $this->type = 'Director\'s Cut';
                } else {
                    $this->type = null;

                }
                $this->title = $_title;
                $this->length = $_length;
            }

            // METODO PER IL RITORNO DELLA TIPOLOGIA DI FILM
            public function movieType() {
                if ($this->type != null) {
                    return $this->type;
                }
            } 
        }
    ?>

        <!-- INSERIMENTO FIRST MOVIE -->
        <?php 
        $firstMovie = new Movie('C\'era una volta a Hollywood', 161);
        $firstMovie->year = 2019;
        $firstMovie->director = 'Quentin Tarantino';
        // var_dump($firstMovie);
        ?>

        <!-- INSERIMENTO SECOND MOVIE -->
        <?php 
        $secondMovie = new Movie('Eternal Sunshine of the Spotless Mind', 108);
        $secondMovie->year = 2004;
        $secondMovie->director = 'Michel Gondry';
        // var_dump($secondMovie);
        ?>

        <!-- INSERIMENTO THIRD MOVIE -->
        <?php 
        $thirdMovie = new Movie('Nightmare Before Christmas', 97);
        $thirdMovie->year = 1993;
        $thirdMovie->director = 'Tim Burton';
        // var_dump($secondMovie);
        ?>



        <!-- STAMPA A SCHERMO DEI FILM -->
        <div class="movie-info">
            <h1>
                <?php echo $firstMovie->title ?>
            </h1>
            <h3>
                <?php echo ($firstMovie->movieType())?>
            </h3>
            <p>
                <?php echo $firstMovie->year . ' / '. $firstMovie->director . ' - '. $firstMovie->length . ' minutes'?>
            </p>
        </div>

        <div class="movie-info">
            <h1>
                <?php echo $secondMovie->title ?>
            </h1>
            <h3>
                <?php echo ($secondMovie->movieType())?>
            </h3>
            <p>
                <?php echo $secondMovie->year . ' / '. $secondMovie->director . ' - '. $secondMovie->length . ' minutes'?>
            </p>
        </div>

        <div class="movie-info">
            <h1>
                <?php echo $thirdMovie->title ?>
            </h1>
            <h3>
                <?php echo ($thirdMovie->movieType())?>
            </h3>
            <p>
                <?php echo $thirdMovie->year . ' / '. $thirdMovie->director . ' - '. $thirdMovie->length . ' minutes'?>
            </p>
        </div>

</body>

</html>