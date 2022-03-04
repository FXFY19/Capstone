<?php
    require "header.php";
?>
<style>
    <?php include "style.css" ?>
</style>

<main>
    
    <div class = "wrapper">
    <h1 class = "case"> 
        Card Uploading 
    </h1> 
    
    <h2 class = "upload-h2">
        Select what Card you want to upload:
    </h2>
    </div>
    <section class = "boxlinks">
        <a href= "mtgcard.php">
            <div class = "mtg-boxlink">
                <h3>Magic The Gathering (MTG)</h3>
            </div>
        </a>
        
        <a href= "#">
            <div class = "cfv-boxlink">
                <h3>Cardfight Vanguard (CFV)</h3>
            </div>
        </a>
    </section> 
    
</main>


<?php
    require "footer.php";
?>
