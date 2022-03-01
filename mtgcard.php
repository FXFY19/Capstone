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
            Magic the Gathering Card Selected.
        </h2>
    </div>
    <form action = 'mtgcard.php' method = 'get'> 
    MTG Card Name: <input type = 'text' name = 'MTG Card Name'>
    <br>
    MTG Card Rarity: <input type = 'text' name = 'MTG Card Rarity'>
    <br>
    MTG Card Set: <input type = 'text' name = 'MTG Card Set'> 
    <br>
    Is MTG Card Legendary?
    <input type = 'radio' id = 'Yes' name = 'MTG Legend' value = 'Yes'>
    <label for = 'Yes'> Yes </label> 
    <input type = 'radio' id = 'No' name = 'MTG Legend' value = 'No'>
    <label for = 'No'> No </label> 
    <br>
    MTG Card Type? <br>
    <input type = 'checkbox' id = 'cardtype1' name = 'cardtype1' value = 'Creature'>
    <label for = 'cardtype1'> Creature </label>
    <input type = 'checkbox' id = 'cardtype2' name = 'cardtype2' value = 'Enchantment'>
    <label for = 'cardtype2'> Enchantment </label>
    <input type = 'checkbox' id = 'cardtype3' name = 'cardtype3' value = 'Artifact'>
    <label for = 'cardtype3'> Artifact </label>
    <input type = 'checkbox' id = 'cardtype4' name = 'cardtype4' value = 'Instanct'>
    <label for = 'cardtype4'> Instant </label>
    <input type = 'checkbox' id = 'cardtype5' name = 'cardtype5' value = 'Sorcery'>
    <label for = 'cardtype5'> Sorcery </label>
    <input type = 'checkbox' id = 'cardtype6' name = 'cardtype6' value = 'Land'>
    <label for = 'cardtype6'> Land </label>
    <input type = 'checkbox' id = 'cardtype7' name = 'cardtype7' value = 'Planeswalker'>
    <label for = 'cardtype7'> Planeswalker </label>
    <br>
    MTG Card Casting Cost: <input type = 'text' name = 'MTG Cast'> 
    <br>
    MTG Card Total Cost to Cast: <input type = 'text' name = 'MTG total'> 
    <br>
    MTG Card Color Idenity: <input list = 'Color Idenity' name = 'Colorid'> 
    <datalist id = 'Color Idenity'>
        <option value = 'Red (R)'>
        <option value = 'Green (G)'>
        <option value = 'Blue (U)'>
        <option value = 'White (W)'>
        <option value = 'Black (B)'>
        <option value = 'Azorius (WU)'>
        <option value = 'Dimir (UB)'>
        <option value = 'Rakdos (BR)'>
        <option value = 'Gruul (RG)'>
        <option value = 'Selesyna (GW)'>
        <option value = 'Orzhov (WB)'>
        <option value = 'Izzet (UR)'>
        <option value = 'Golgair (BG)'>
        <option value = 'Boros (RW)'>
        <option value = 'Simic (GU)'>
        <option value = 'Esper (WUB)'>
        <option value = 'Grixis (UBR)'>
        <option value = 'Jund (BRG)'>
        <option value = 'Naya (RGW)'>
        <option value = 'Bant (GWU)'>
        <option value = 'Abzan (WBG)'>
        <option value = 'Jeskai (URW)'>
        <option value = 'Sultai (BGU)'>
        <option value = 'Mardu (RWB)'>
        <option value = 'Temur (UGR)'>
        <option value = 'Yore-Tiller (WUBR)'>
        <option value = 'Glint-Eye (UBRG)'>
        <option value = 'Dune-Brood (BRGW)'>
        <option value = 'Ink-Treader (RGWU)'>
        <option value = 'Witch-Maw (GWUB)'>
        <option value = '5-Color (WBURG)'>
    </datalist>
    <input type = 'submit' value = 'Submit'>

    </form>


<?php
    require "footer.php";
?>
        
        