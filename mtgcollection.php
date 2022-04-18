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
    Delete All MTG Cards from Collection: 
    <form action = 'includes/all_card_delete.php' method = 'POST'>
    <input type = 'submit' name = 'mtgdeleteItem' value = 'Delete All'>
    </form>
</h3>

<br>
<h3 class = collection_display>
    Sort Functions:
    <br>
    <form action = "mtgcollection.php" method = 'POST'>
        <input type = 'submit' name = 'Default' value = 'Default Sort'>
    </form>
    <form action = "mtgcollection.php" method = 'POST'>
        <input type = 'submit' name = 'MTG_Sort_Name' value = 'Sort by Card Name'>
    </form>
    <form action = "mtgcollection.php" method = 'POST'>
        <input type = 'submit' name = 'MTG_Sort_Card' value = 'Sort by Card Type'>
    </form>
    <form action = "mtgcollection.php" method = 'POST'>
        <input type = 'submit' name = 'MTG_Sort_Rarity' value = 'Sort by Rarity'>
    </form>
    <form action = "mtgcollection.php" method = 'POST'>
        <input type = 'submit' name = 'MTG_Sort_Set' value = 'Sort by Set'>
    </form>
    <form action = "mtgcollection.php" method = 'POST'>
        <input type = 'submit' name = 'MTG_Sort_Total_cost' value = 'Sort by Total Cost'>
    </form>
    <form action = "mtgcollection.php" method = 'POST'>
        <input type = 'submit' name = 'MTG_Sort_ColorID' value = 'Sort by Color Identity'>
    </form>
</h3>

<br>

<?php
    //Default Sort
    if(isset($_POST['Default'])){
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
    }

    //Sort by Card name
    else if(isset($_POST['MTG_Sort_Name'])){
        $sql = "SELECT * FROM capstone.mtg_card Order by MTGCardName Asc;";
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
    }

    //Sort by Card Type
    else if(isset($_POST['MTG_Sort_Card'])){
        $sql = "SELECT * FROM capstone.mtg_card Order by Card_Type1, MTGCardName Asc;";
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
    }

    //Sort by Rarity
    else if(isset($_POST['MTG_Sort_Rarity'])){
        $sql = "SELECT * FROM capstone.mtg_card Order by Rarity, MTGCardName Asc;";
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
    }

    //Sort by Set
    else if(isset($_POST['MTG_Sort_Set'])){
        $sql = "SELECT * FROM capstone.mtg_card Order by MTGCardSet, MTGCardName Asc;";
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
    }

    //Sort by Total Cost
    else if(isset($_POST['MTG_Sort_Total_cost'])){
        $sql = "SELECT * FROM capstone.mtg_card Order by Total_Cost, Cost, MTGCardName Asc;";
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
    }

    //Sort by Color ID
    else if(isset($_POST['MTG_Sort_ColorID'])){
        $sql = "SELECT * FROM capstone.mtg_card Order by ColorID, MTGCardName Asc;";
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
    }

    //Default Sort when entering site
    else{
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

    }
    

?>

<?php
    require "footer.php";
?>
