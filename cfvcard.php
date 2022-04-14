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

    <br>
    <br>
    <div class = "image1">
    <img src = "imgs/ReadCFV.jpg" alt = "How to read CFV Card">
    </div>
    <br>

    <h3 class = collection_display>

    <form action = 'includes/cfvupload.inc.php' method = 'POST'> 
    CFV Card Name: <input type = 'text' name = 'CFV_Card_Name'>
    <br>
    CFV Card Rarity: <input type = 'text' name = 'CFV_Card_Rarity'>
    <br>
    CFV Card Set: <input type = 'text' name = 'CFV_Card_Set'> 
    <br>
    CFV Unit Type: <input list = 'Unit' name = 'Unit_Type'>
    <datalist id = 'Unit'>
        <option value = 'Normal'>
        <option value = 'Trigger'>
        <option value = 'Order'>
    </datalist>
    <br>
    If CFV Card is a Trigger Unit: What Trigger? <input type = 'text' name = 'CFV_trigger'>
    <br>
    CFV Card Nation or Clan: <input type = 'text' name = 'CFV_Nation_Clan'>
    <br>
    CFV Card Grade: <input type = 'text' name = 'CFV_grade'>
    <br>
    <input type = 'submit' name = 'Submit' value = 'Submit'>
    </form>
</h3>
<br>
<br>
<br>





<?php
    require "footer.php";
?>
