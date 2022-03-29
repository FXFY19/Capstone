<?php
    require "header.php";
?>

<main>
    <div class = "wrapper">
        <h1>
            Card Collection
        </h1>
        <h3 class = "collection-h3">
            Select a Collection to View:
        </h3>
    </div>
    <section class = "boxlinks">
        <a href= "#">
            <div class = "allcards-boxlink">
                <h3>All Cards</h3>
            </div>
        </a>
        <a href= "mtgcollection.php">
            <div class = "mtg-boxlink">
                <h3>Magic The Gathering (MTG) Collection</h3>
            </div>
        </a>
        
        <a href= "cfvcollection.php">
            <div class = "cfv-boxlink">
                <h3>Cardfight Vanguard (CFV) Collection</h3>
            </div>
        </a>

        <a href = "pkmcollection.php">
            <div class = "pkm-boxlink">
                <h3>Pokemon TCG (PKM) Collection</h3>
            </div>
        </a>

        <a href = "ygocollection.php">
            <div class = "ygo-boxlink">
                <h3>Yugioh (YGO) Collection</h3>
            </div>
        </a>
    </section> 

</main>

<?php
    require "footer.php";
?>
