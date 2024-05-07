<?php
include (__DIR__ . "/Views/header.php");
include (__DIR__ . "/Models/Movie.php");
?>

<main>
    <div class="container">
        <?php
        /*creo l'istanza */
        $film1 = new Movie("La vita è bella", "https://pad.mymovies.it/filmclub/2001/10/022/locandina.jpg", "italiano", "3,00", "5");
        $film2 = new Movie("Star Wars", "https://m.media-amazon.com/images/I/81Bd9H3HP1L._AC_UF1000,1000_QL80_.jpg", "English", "8,00", "2");
        ?>
        <!--stampo a schermo i valori dell'oggetto */
        // echo "Il titolo è: " . $film1->title;
        // echo "<br>";
        // echo "Il link per la cover è: " . '<a href="' . $film1->cover . '">' . $film1->cover . "</a>";
        // echo "<br>";
        // echo "La lingua originale è: " . $film1->language;
        // echo "<br>";
        // echo $film1->price . " €";
        // echo "<br>";
        // echo $film1->rating;
        /* stampo il metodo */-->
        <div class="row gap-3">
            <?=
                $film1->print();
            $film2->print();
            ?>
        </div>

    </div>

</main>

<?php include (__DIR__ . "/Views/footer.php"); ?>