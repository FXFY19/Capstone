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
            Yu-Gi-Oh Card Selected.
        </h2>
    </div>
    <br>
    <br>

    <div class = "image1">
        <img src = "imgs/ReadYGO.jpg" alt = "How to read YGO Card">
    </div>
    <br>
    <div class = "image1">
        <img src = "imgs/ReadYGOMonster.jpg" alt = "How to read YGO Card">
    </div>
    <br>
    <div class = "image1">
        <img src = "imgs/ReadYGOSpellsTraps.jpg" alt = "How to read YGO Card">
    </div>
    <br>
    <div>
        <h3 class = collection_display>
        For understanding Yugioh Card Rarity, Visit this website:
        <a href="https://www.yugiohcardguide.com/guide_to_card_rarity.html">Yugioh Card Rarity</a>

        </h3>
    </div>

    <br>
    <br>


    <h3 class = collection_display>
    <form action = 'includes/ygoupload.inc.php' method = 'POST'> 
    YGO Card Name: <input type = 'text' name = 'YGO_Card_Name'>
    <br>
    YGO Card Rarity: <input type = 'text' name = 'YGO_Card_Rarity'>
    <br>
    YGO Card Set: <input type = 'text' name = 'YGO_Card_Set'> 
    <br>
    YGO Card Type: <input list = 'card_type' name = 'YGO_Card_Type'>
    <datalist id = 'card_type'>
        <option value = 'Monster'>
        <option value = 'Spell'>
        <option value = 'Trap'>
    </datalist>
    <br>
    What Sub-type is the card? <input list = 'sub_type' name = 'YGO_Sub'>
    <datalist id = 'sub_type'>
        <option value = 'Monster - Normal'>
        <option value = 'Monster - Effect'>
        <option value = 'Monster - Fusion'>
        <option value = 'Monster - Ritual'>
        <option value = 'Monster - Synchro'>
        <option value = 'Monster - Xyz'>
        <option value = 'Monster - Pendulum'>
        <option value = 'Monster - Link'>
        <option value = 'Trap - Normal'> 
        <option value = 'Trap - Counter'>
        <option value = 'Trap - Continous'>
        <option value = 'Spell - Normal'>
        <option value = 'Spell - Quickplay'>
        <option value = 'Spell - Continous'>
        <option value = 'Spell - Equip'>
        <option value = 'Spell - Ritual'>
        <option value = 'Spell - Field'>
    </datalist>
    <br>
    If the YGO Card is a Pendulum Monster Card, what other monster card is it? (If Not able to, Select None)
    <br>
    <input list = 'pen_type' name = 'YGO_pen_sub'>
    <datalist id = 'pen_type'>
        <option value = 'None'>
        <option value = 'Monster - Normal'>
        <option value = 'Monster - Effect'>
        <option value = 'Monster - Fusion'>
        <option value = 'Monster - Ritual'>
        <option value = 'Monster - Synchro'>
        <option value = 'Monster - Xyz'>
    </datalist>
    <br>
    YGO Card's Attribute: <input list = 'attribute_card' name = 'YGO_Attribute'>
    <datalist id = 'attribute_card'>
        <option value = 'Spell'>
        <option value = 'Trap'>
        <option value = 'Dark'>
        <option value = 'Divine'>
        <option value = 'Earth'>
        <option value = 'Fire'>
        <option value = 'Light'>
        <option value = 'Water'>
        <option value = 'Wind'>
    </datalist>
    <br>
    If YGO Card is a Monster, How many Stars/Ranks is it? If it is a Link Monster, put the amount of links they have (If Spell or Trap Card, put 0)
    <br>
    <input type = 'text' name = 'YGO_StarRank'>
    <br>
    If YGO Card is a Monster, What is it Attack Value? (If Spell or Trap Card, put 0)
    <br>
    <input type = 'text' name = 'YGO_Attack'>
    <br>
    If YGO Card is a Monster, What is it Defense Value (If Spell or Trap Card, put 0)
    <br>
    <input type = 'text' name = 'YGO_DefLink'>



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
