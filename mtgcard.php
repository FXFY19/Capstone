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
    <form action = 'includes/mtgupload.inc.php' method = 'POST'> 
    MTG Card Name: <input type = 'text' name = 'MTG_Card_Name'>
    <br>
    MTG Card Set: <input type = 'text' name = 'MTG_Card_Set'> 
    <br>
    MTG Card Rarity: <input type = 'text' name = 'MTG_Card_Rarity'>
    <br>
    Is MTG Card Legendary?
    <input type = 'radio' id = 'Yes' name = 'MTG_Legend' value = 'Yes'>
    <label for = 'Yes'> Yes </label> 
    <input type = 'radio' id = 'No' name = 'MTG_Legend' value = 'No'>
    <label for = 'No'> No </label> 
    <br>
    MTG Card Casting Cost: <input type = 'text' name = 'MTG_Cast'> 
    <br>
    MTG Card Total Cost to Cast: <input type = 'text' name = 'MTG_total'> 
    <br>
    MTG Card Color Idenity: <input list = 'Color_idenity' name = 'Colorid'>
    <datalist id = 'Color_idenity'>
        <optgroup label = 'Single Color'>
            <option value = 'Colorless'> </option>
            <option value = 'Red (R)'> </option>
            <option value = 'Green (G)'> </option>
            <option value = 'Blue (U)'> </option>
            <option value = 'White (W)'> </option>
            <option value = 'Black (B)'></option>
        </optgroup>
        <optgroup label = 'Duel Color'>
            <option value = 'Azorius (WU)'> </option>
            <option value = 'Dimir (UB)'> </option>
            <option value = 'Rakdos (BR)'> </option>
            <option value = 'Gruul (RG)'> </option>
            <option value = 'Selesyna (GW)'> </option>
            <option value = 'Orzhov (WB)'> </option>
            <option value = 'Izzet (UR)'> </option>
            <option value = 'Golgari (BG)'> </option>
            <option value = 'Boros (RW)'> </option>
            <option value = 'Simic (GU)'> </option>
        </optgroup>
        <optgroup label = 'Tri-Color'>
            <option value = 'Esper (WUB)'> </option> 
            <option value = 'Grixis (UBR)'> </option>
            <option value = 'Jund (BRG)'> </option>
            <option value = 'Naya (RGW)'> </option>
            <option value = 'Bant (GWU)'> </option>
            <option value = 'Abzan (WBG)'> </option>
            <option value = 'Jeskai (URW)'> </option>
            <option value = 'Sultai (BGU)'> </option>
            <option value = 'Mardu (RWB)'> </option>
            <option value = 'Temur (UGR)'> </option>
        </optgroup>
            <optgroup label = 'Four-Color and Five'>
            <option value = 'Yore-Tiller (WUBR)'>
            <option value = 'Glint-Eye (UBRG)'>
            <option value = 'Dune-Brood (BRGW)'>
            <option value = 'Ink-Treader (RGWU)'>
            <option value = 'Witch-Maw (GWUB)'>
            <option value = '5-Color (WBURG)'>
        </optgroup>
    </datalist>
    <br>
    MTG Card Type?
    <br>
    Card Type One: <input list = 'Card Type' name = 'Cardtype1'>
    <datalist id = 'Card Type'>
        <option value = 'Creature'>
        <option value = 'Enchantment'>
        <option value = 'Artifact'>
        <option value = 'Instant'>
        <option value = 'Sorcery'>
        <option value = 'Land'>
        <option value = 'Planeswalker'>
    </datalist>
    <br>
    Card Type Two:<input list = 'Card Type2' name = 'Cardtype2'>
    <datalist id = 'Card Type2'>
        <option value = 'None'>
        <option value = 'Creature'>
        <option value = 'Enchantment'>
        <option value = 'Artifact'>
        <option value = 'Instant'>
        <option value = 'Sorcery'>
        <option value = 'Land'>
        <option value = 'Planeswalker'>
    </datalist>
    <br>
    <input type = 'submit' name = 'Submit' value = 'Submit'>

    </form>


<?php
    require "footer.php";
?>
        
        
