<?php
    require "header.php";
?>

<?php
    include "includes/Cardpolymorph.php";
    include_once 'includes/dbh_inc.php';
?>

<main>
    <div class = "wrapper">
        <h1>
            Magic The Gathering Collection
        </h1>
    </div>
</main>

<h3 class = collection_display>
    <form action = 'includes/all_card_delete.php' method = 'POST'>
    <input type = 'submit' name = 'mtgdeleteItem' value = 'Delete All'>
    </form>
</h3>

<br>

<?php
    $sql = "SELECT * FROM capstone.mtg_card ORDER BY MTGCardSet, MTGCardName Asc;";
    $result = mysqli_query($conn,$sql);
    $result_check = mysqli_num_rows($result);


    if($result_check > 0){
        while ($row = mysqli_fetch_assoc($result)){
            //$carddisplay = $row['MTGCardName'] . "; " . $row['MTGCardSet'] . "; " . $row['Rarity']. "; " . $row['Legendary']  . "; " . $row['Cost'] . "; " . $row['Total_Cost'] . "; " . $row['ColorID'] . "; " . $row['Card_Type1'] . "; " . $row['Card_Type2'];

            $mtg_card_add = new MTG($row['MTGCardName'], $row['Rarity'], $row['MTGCardSet'],$row['Card_Type1'],$row['Card_Type2'],$row['Legendary'], $row['Cost'],$row['Total_Cost'],$row['ColorID']);
            $mtg_card_name = $mtg_card_add -> getCardname();
            $mtg_card_set = $mtg_card_add -> getCardset();
            $mtg_card_rare = $mtg_card_add -> getCardrarity();
            $mtg_card_type1 = $mtg_card_add -> getCardType1();
            $mtg_card_type2 = $mtg_card_add -> getCardType2();
            $mtg_legend = $mtg_card_add -> getLegend();
            $mtg_cast = $mtg_card_add -> getCast();
            $mtg_total = $mtg_card_add -> gettotal();
            $mtg_colorid = $mtg_card_add -> getcolorid();
            echo "<h3 class= collection_display>
                MTG Card Name: $mtg_card_name <br>
                      MTG Set: $mtg_card_set <br>
                   MTG Rarity: $mtg_card_rare <br>
                    Legendary: $mtg_legend <br>
                         Type: $mtg_card_type1 and $mtg_card_type2 <br>
                 Casting Cost: $mtg_cast <br>
                   Total Cost: $mtg_total <br>
                Color Idenity: $mtg_colorid <br>

                 </h3>";
            echo "<br> <br>";
        }
    }

?>

<?php
    require "footer.php";
?>
