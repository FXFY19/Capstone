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
    <br>
    <br>
    <div class = "image1">
        <img src = "imgs/ReadPKM.jpg" alt = "How to read PKM Card">
    </div>
    <br>
    <div class = "image1">
        <img src = "imgs/ReadPKMFoil.jpg" alt = "How to read PKM Card Foil">
    </div>
    <br>

    <h3 class = collection_display>
    <form action = 'includes/pkmupload.inc.php' method = 'POST'> 
    PKM Card Name: <input type = 'text' name = 'PKM_Card_Name'>
    <br>
    PKM Card Rarity: <input list = 'Rarity_list' name = 'PKM_Card_Rarity'>
    <datalist id = 'Rarity_list'>
        <option value = 'Star (Rare)'>
        <option value = 'Diamond (Uncommon)'>
        <option value = 'Circle (Commmon)'>
    </datalist>
    <br>
    PKM Card Set: <input type = 'text' name = 'PKM_Card_Set'> 
    <br>
    PKM Card Type: 
    <input type = 'radio' id = 'Pokemon' name = 'PKM_Cardtype' value = 'Pokemon'>
    <label for = 'Pokemon'> Pokemon </label> 
    <input type = 'radio' id = 'Trainer' name = 'PKM_Cardtype' value = 'Trainer'>
    <label for = 'Trainer'> Trainer </label> 
    <br>
    If PKM Card is a Pokemon Card, what is the Pokemon Energy Type? (Put None if not applicable) <input list = 'Energy_list' name = 'PKM_Energy_Type'>
    <datalist id = 'Energy_list'>
        <option value = 'None'>
        <option value = 'Grass'>
        <option value = 'Fire'>
        <option value = 'Water'>
        <option value = 'Lightning'>
        <option value = 'Fighting'>
        <option value = 'Psychic'>
        <option value = 'Colorless'>
        <option value = 'Darkness'>
        <option value = 'Metal'>
        <option value = 'Dragon'>
        <option value = 'Fairy'>
    </datalist>
    <br>
    If PKM Card is a Pokemon Card, what is it HP Value? (Put None if not applicable) <input type = 'text' name = 'PKM_HP'>
    <br>
    If PKM Card is a Trainer Card, What is the Card's Subtype? (Put None if not applicable) <input list = 'Trainer_list_type' name = 'PKM_Trainer_type'>
    <datalist id = 'Trainer_list_type'>
        <option value = 'None'>
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
</h3>
<br>
<br>
<br>






<?php
    require "footer.php";
?>
