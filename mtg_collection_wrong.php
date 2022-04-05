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

<?php
    $sql = "SELECT * FROM capstone.mtg_card;";
    $result = mysqli_query($conn,$sql);
    $result_check = mysqli_num_rows($result);
    $array_list = array();
    $array_delete = array();

    if($result_check > 0){
        while ($row = mysqli_fetch_assoc($result)){
            //$carddisplay = $row['MTGCardName'] . "; " . $row['MTGCardSet'] . "; " . $row['Rarity']. "; " . $row['Legendary']  . "; " . $row['Cost'] . "; " . $row['Total_Cost'] . "; " . $row['ColorID'] . "; " . $row['Card_Type1'] . "; " . $row['Card_Type2'];

            $mtg_card_add = new MTG($row['MTGCardName'], $row['Rarity'], $row['MTGCardSet'],$row['Card_Type1'],$row['Card_Type2'],$row['Legendary'], $row['Cost'],$row['Total_Cost'],$row['ColorID']);
            array_push($array_list,$mtg_card_add);
        }
    }
    

    if(count($array_list)>0){
         for($i = 0;$i < count($array_list); $i++){
             echo "<h3 class= collection_display>
                 $array_list[$i].__toString();
                 </h3>";
             echo "<br>";

         }
    }

    
?>

<?php
    require "footer.php";
?>
