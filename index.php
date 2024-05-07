<?php
include (__DIR__ . "/Views/header.php");
include (__DIR__ . "/Models/Movie.php");
?>

<main>
    <div class="container">
        <?php
        /*creo l'istanza */
        $film1 = new Movie("La vita è bella", "https://pad.mymovies.it/filmclub/2001/10/022/locandina.jpg", "italiano", "3,00", "5");
        /*stampo a schermo i valori dell'oggetto */
        echo "Il titolo è: " . $film1->title;
        echo "<br>";
        echo "Il link per la cover è: " . '<a href="' . $film1->cover . '">' . $film1->cover . "</a>";
        echo "<br>";
        echo "La lingua originale è: " . $film1->language;
        echo "<br>";
        echo $film1->price . " €";
        echo "<br>";
        echo $film1->rating;
        /* stampo il metodo */
        echo $film1->print();
        ?>
    </div>

</main>

<?php include (__DIR__ . "/Views/footer.php"); ?>