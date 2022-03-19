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
            Pokemon TCG Card Selected.
        </h2>
    </div>

    <form action = 'includes/pkmupload.inc.php' method = 'POST'> 
    PKM Card Name: <input type = 'text' name = 'PKM_Card_Name'>
    <br>
    PKM Card Rarity: <input type = 'text' name = 'PKM_Card_Rarity'>
    <br>
    PKM Card Set: <input type = 'text' name = 'PKM_Card_Set'> 
    <br>
    PKM Card Type: 
    <input type = 'radio' id = 'Pokemon' name = 'PKM_Cardtype' value = 'Pokemon'>
    <label for = 'Pokemon'> Pokemon </label> 
    <input type = 'radio' id = 'Trainer' name = 'PKM_Cardtype' value = 'Trainer'>
    <label for = 'Trainer'> Trainer </label> 
    <br>
    If PKM Card is a Pokemon Card, what is the Pokemon Energy Type? (Put None if not applicable) <input type = 'text' name = 'PKM_Energy_Type'>
    <br>
    If PKM Card is a Pokemon Card, what is it HP Value? (Put None if not applicable) <input type = 'text' name = 'PKM_HP'>
    <br>
    If PKM Card is a Trainer Card, What is the Card's Subtype? (Put None if not applicable) <input list = 'Trainer_list_type' name = 'PKM_Trainer_type'>
    <datalist list = 'Trainer_list_type'>
        <option value = 'Item'>
        <option value = 'Supporter'>
        <option value = 'Stadium'>
    </datalist>
    <br>
    Is the Card Foiled? 
    <input type = 'radio' id = 'Yes' name = 'PKM_Foil' value = 'Yes'>
    <label for = 'Yes'> Yes </label> 
    <input type = 'radio' id = 'No' name = 'PKM_Foil' value = 'No'>
    <label for = 'No'> No </label> 
    <br>
    If Yes, What is the Foiling Type? <input list = 'Foiling_type' name = 'PKM_Foiling'>
    <datalist id = 'Foiling_type'>
        <option value = 'Foil'>
        <option value = 'Reverse Foil'>
        <option value = 'V or GX'>
        <option value = 'V-Max or V-Star'>
        <option value = 'Amazing'>
        <option value = 'Gold'>
        <option value = 'Full Art'>
        <option value = 'Rainbow'>
    </datalist>
    <br>
    <input type = 'submit' name = 'Submit' value = 'Submit'>
    </form>






<?php
    require "footer.php";
?>