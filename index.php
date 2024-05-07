<?php
include (__DIR__ . "/Views/header.php");
include (__DIR__ . "/Models/Movie.php");
?>

<main>
    <div class="container">
        <?php
        /*creo l'istanza */
        $film1 = new Movie("La vita è bella", "google.com", "italiano");
        /*stampo a schermo i valori dell'oggetto */
        echo "Il titolo è: " . $film1->title;
        echo "<br>";
        echo "Il link per la cover è: " . $film1->cover;
        echo "<br>";
        echo "La lingua originale è: " . $film1->language;

        ?>
    </div>

</main>

<?php include (__DIR__ . "/Views/footer.php"); ?>