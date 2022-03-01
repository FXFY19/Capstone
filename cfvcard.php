<?php
    require "header.php";
?>
<?php
    require "includes/Cardpolymorph.php";
?>

    <div class = "wrapper">
        <h1 class = "case"> 
            Card Uploading 
        </h1> 
    
        <h2 class = "upload-h2">
            Cardfight Vanguard Card Selected.
        </h2>
    </div>

    <form action = 'cfvcardd.php' method = 'get'> 
    MTG Card Name: <input type = 'text' name = 'CFV Card Name'>
    <br>
    MTG Card Rarity: <input type = 'text' name = 'CFV Card Rarity'>
    <br>
    MTG Card Set: <input type = 'text' name = 'CFV Card Set'> 
    <br>





<?php
    require "footer.php";
?>