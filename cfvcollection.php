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
           Cardfight Vanguard Collection
        </h1>
    </div>

    

</main>

<h3 class = collection_display>
    Delete All CFV Cards from Collection: 
    <form action = 'includes/all_card_delete.php' method = 'POST'>
    <input type = 'submit' name = 'cfvdeleteItem' value = 'Delete All'>
    </form>
</h3>
<br>

<h3 class = collection_display>
    Sort Functions:
    <br>
    <form action = "cfvcollection.php" method = 'POST'>
        <input type = 'submit' name = 'Default' value = 'Default Sort'>
    </form>
    <form action = "cfvcollection.php" method = 'POST'>
        <input type = 'submit' name = 'CFV_Sort_Name' value = 'Sort by Card Name'>
    </form>
    <form action = "cfvcollection.php" method = 'POST'>
        <input type = 'submit' name = 'CFV_Sort_Unit' value = 'Sort by Unit Type'>
    </form>
    <form action = "cfvcollection.php" method = 'POST'>
        <input type = 'submit' name = 'CFV_Sort_Rarity' value = 'Sort by Rarity'>
    </form>
    <form action = "cfvcollection.php" method = 'POST'>
        <input type = 'submit' name = 'CFV_Sort_Set' value = 'Sort by Set'>
    </form>
    <form action = "cfvcollection.php" method = 'POST'>
        <input type = 'submit' name = 'CFV_Sort_Nation_Clan' value = 'Sort by Nation and/or Clan'>
    </form>
    <form action = "cfvcollection.php" method = 'POST'>
        <input type = 'submit' name = 'CFV_Sort_Grade' value = 'Sort by Grade'>
    </form>
</h3>

<br>



<?php
    //Default Button
    if(isset($_POST['Default'])){

        $sql = "SELECT * FROM capstone.cfv_card;";
        $result = mysqli_query($conn,$sql);
        $result_check = mysqli_num_rows($result);

        if($result_check > 0){
            while ($row = mysqli_fetch_assoc($result)){
                $cfv_add = new CFV($row['CFVCardName'],$row['Rarity'], $row['CFVCardSet'],$row['Clan_Nation'],$row['Unit_Type'],$row['Grade'],$row['CFVTrigger']);
                $cfv_name = $cfv_add -> getCardname();
                $cfv_set =$cfv_add -> getCardset();
                $cfv_rare = $cfv_add -> getCardrarity();
                $cfv_clan = $cfv_add -> getClanNation();
                $cfv_grade = $cfv_add -> getGrade();
                $cfv_unit = $cfv_add -> getUnit();
                $cfv_trigger = $cfv_add -> getTrigger();
                echo "<h3 class= collection_display>
                    CFV Card Name: $cfv_name <br>
                        CFV Set: $cfv_set <br>
                    CFV Rarity: $cfv_rare <br>
                Clan or Nation: $cfv_clan <br>
                    Card Grade: $cfv_grade <br>
                        Card Unit: $cfv_unit <br>
                        Trigger: $cfv_trigger <br>
                    </h3>";
                echo "<br>";
            }
        }

    }

    //Sort by Name
    else if(isset($_POST['CFV_Sort_Name'])){
        $sql = "SELECT * FROM capstone.cfv_card order by CFVCardName Asc;";
        $result = mysqli_query($conn,$sql);
        $result_check = mysqli_num_rows($result);

        if($result_check > 0){
            while ($row = mysqli_fetch_assoc($result)){
                $cfv_add = new CFV($row['CFVCardName'],$row['Rarity'], $row['CFVCardSet'],$row['Clan_Nation'],$row['Unit_Type'],$row['Grade'],$row['CFVTrigger']);
                $cfv_name = $cfv_add -> getCardname();
                $cfv_set =$cfv_add -> getCardset();
                $cfv_rare = $cfv_add -> getCardrarity();
                $cfv_clan = $cfv_add -> getClanNation();
                $cfv_grade = $cfv_add -> getGrade();
                $cfv_unit = $cfv_add -> getUnit();
                $cfv_trigger = $cfv_add -> getTrigger();
                echo "<h3 class= collection_display>
                    CFV Card Name: $cfv_name <br>
                        CFV Set: $cfv_set <br>
                    CFV Rarity: $cfv_rare <br>
                Clan or Nation: $cfv_clan <br>
                    Card Grade: $cfv_grade <br>
                        Card Unit: $cfv_unit <br>
                        Trigger: $cfv_trigger <br>
                    </h3>";
                echo "<br>";
            }
        }
    }

    //Sort by Unit
    else if(isset($_POST['CFV_Sort_Unit'])){
        $sql = "SELECT * FROM capstone.cfv_card order by Unit_Type, CFVCardName Asc;";
        $result = mysqli_query($conn,$sql);
        $result_check = mysqli_num_rows($result);

        if($result_check > 0){
            while ($row = mysqli_fetch_assoc($result)){
                $cfv_add = new CFV($row['CFVCardName'],$row['Rarity'], $row['CFVCardSet'],$row['Clan_Nation'],$row['Unit_Type'],$row['Grade'],$row['CFVTrigger']);
                $cfv_name = $cfv_add -> getCardname();
                $cfv_set =$cfv_add -> getCardset();
                $cfv_rare = $cfv_add -> getCardrarity();
                $cfv_clan = $cfv_add -> getClanNation();
                $cfv_grade = $cfv_add -> getGrade();
                $cfv_unit = $cfv_add -> getUnit();
                $cfv_trigger = $cfv_add -> getTrigger();
                echo "<h3 class= collection_display>
                    CFV Card Name: $cfv_name <br>
                        CFV Set: $cfv_set <br>
                    CFV Rarity: $cfv_rare <br>
                Clan or Nation: $cfv_clan <br>
                    Card Grade: $cfv_grade <br>
                        Card Unit: $cfv_unit <br>
                        Trigger: $cfv_trigger <br>
                    </h3>";
                echo "<br>";
            }
        }
    }
    
    //Sort By Rarity
    else if(isset($_POST['CFV_Sort_Rarity'])){
        $sql = "SELECT * FROM capstone.cfv_card order by Rarity, CFVCardName Asc;";
        $result = mysqli_query($conn,$sql);
        $result_check = mysqli_num_rows($result);

        if($result_check > 0){
            while ($row = mysqli_fetch_assoc($result)){
                $cfv_add = new CFV($row['CFVCardName'],$row['Rarity'], $row['CFVCardSet'],$row['Clan_Nation'],$row['Unit_Type'],$row['Grade'],$row['CFVTrigger']);
                $cfv_name = $cfv_add -> getCardname();
                $cfv_set =$cfv_add -> getCardset();
                $cfv_rare = $cfv_add -> getCardrarity();
                $cfv_clan = $cfv_add -> getClanNation();
                $cfv_grade = $cfv_add -> getGrade();
                $cfv_unit = $cfv_add -> getUnit();
                $cfv_trigger = $cfv_add -> getTrigger();
                echo "<h3 class= collection_display>
                    CFV Card Name: $cfv_name <br>
                        CFV Set: $cfv_set <br>
                    CFV Rarity: $cfv_rare <br>
                Clan or Nation: $cfv_clan <br>
                    Card Grade: $cfv_grade <br>
                        Card Unit: $cfv_unit <br>
                        Trigger: $cfv_trigger <br>
                    </h3>";
                echo "<br>";
            }
        }
    }

    //Sort by Set
    else if(isset($_POST['CFV_Sort_Set'])){
        $sql = "SELECT * FROM capstone.cfv_card order by CFVCardSet, CFVCardName Asc;";
        $result = mysqli_query($conn,$sql);
        $result_check = mysqli_num_rows($result);

        if($result_check > 0){
            while ($row = mysqli_fetch_assoc($result)){
                $cfv_add = new CFV($row['CFVCardName'],$row['Rarity'], $row['CFVCardSet'],$row['Clan_Nation'],$row['Unit_Type'],$row['Grade'],$row['CFVTrigger']);
                $cfv_name = $cfv_add -> getCardname();
                $cfv_set =$cfv_add -> getCardset();
                $cfv_rare = $cfv_add -> getCardrarity();
                $cfv_clan = $cfv_add -> getClanNation();
                $cfv_grade = $cfv_add -> getGrade();
                $cfv_unit = $cfv_add -> getUnit();
                $cfv_trigger = $cfv_add -> getTrigger();
                echo "<h3 class= collection_display>
                    CFV Card Name: $cfv_name <br>
                        CFV Set: $cfv_set <br>
                    CFV Rarity: $cfv_rare <br>
                Clan or Nation: $cfv_clan <br>
                    Card Grade: $cfv_grade <br>
                        Card Unit: $cfv_unit <br>
                        Trigger: $cfv_trigger <br>
                    </h3>";
                echo "<br>";
            }
        }
    }

    //Sort by Nation/Clan
    else if(isset($_POST['CFV_Sort_Nation_Clan'])){
        $sql = "SELECT * FROM capstone.cfv_card order by Clan_Nation, CFVCardName Asc;";
        $result = mysqli_query($conn,$sql);
        $result_check = mysqli_num_rows($result);

        if($result_check > 0){
            while ($row = mysqli_fetch_assoc($result)){
                $cfv_add = new CFV($row['CFVCardName'],$row['Rarity'], $row['CFVCardSet'],$row['Clan_Nation'],$row['Unit_Type'],$row['Grade'],$row['CFVTrigger']);
                $cfv_name = $cfv_add -> getCardname();
                $cfv_set =$cfv_add -> getCardset();
                $cfv_rare = $cfv_add -> getCardrarity();
                $cfv_clan = $cfv_add -> getClanNation();
                $cfv_grade = $cfv_add -> getGrade();
                $cfv_unit = $cfv_add -> getUnit();
                $cfv_trigger = $cfv_add -> getTrigger();
                echo "<h3 class= collection_display>
                    CFV Card Name: $cfv_name <br>
                        CFV Set: $cfv_set <br>
                    CFV Rarity: $cfv_rare <br>
                Clan or Nation: $cfv_clan <br>
                    Card Grade: $cfv_grade <br>
                        Card Unit: $cfv_unit <br>
                        Trigger: $cfv_trigger <br>
                    </h3>";
                echo "<br>";
            }
        }
    }

    //Sort by Grade
    else if(isset($_POST['CFV_Sort_Grade'])){
        $sql = "SELECT * FROM capstone.cfv_card order by Grade, CFVCardName Asc;";
        $result = mysqli_query($conn,$sql);
        $result_check = mysqli_num_rows($result);

        if($result_check > 0){
            while ($row = mysqli_fetch_assoc($result)){
                $cfv_add = new CFV($row['CFVCardName'],$row['Rarity'], $row['CFVCardSet'],$row['Clan_Nation'],$row['Unit_Type'],$row['Grade'],$row['CFVTrigger']);
                $cfv_name = $cfv_add -> getCardname();
                $cfv_set =$cfv_add -> getCardset();
                $cfv_rare = $cfv_add -> getCardrarity();
                $cfv_clan = $cfv_add -> getClanNation();
                $cfv_grade = $cfv_add -> getGrade();
                $cfv_unit = $cfv_add -> getUnit();
                $cfv_trigger = $cfv_add -> getTrigger();
                echo "<h3 class= collection_display>
                    CFV Card Name: $cfv_name <br>
                        CFV Set: $cfv_set <br>
                    CFV Rarity: $cfv_rare <br>
                Clan or Nation: $cfv_clan <br>
                    Card Grade: $cfv_grade <br>
                        Card Unit: $cfv_unit <br>
                        Trigger: $cfv_trigger <br>
                    </h3>";
                echo "<br>";
            }
        }
    }

    //Default
    else{
        $sql = "SELECT * FROM capstone.cfv_card;";
        $result = mysqli_query($conn,$sql);
        $result_check = mysqli_num_rows($result);

        if($result_check > 0){
            while ($row = mysqli_fetch_assoc($result)){
                $cfv_add = new CFV($row['CFVCardName'],$row['Rarity'], $row['CFVCardSet'],$row['Clan_Nation'],$row['Unit_Type'],$row['Grade'],$row['CFVTrigger']);
                $cfv_name = $cfv_add -> getCardname();
                $cfv_set =$cfv_add -> getCardset();
                $cfv_rare = $cfv_add -> getCardrarity();
                $cfv_clan = $cfv_add -> getClanNation();
                $cfv_grade = $cfv_add -> getGrade();
                $cfv_unit = $cfv_add -> getUnit();
                $cfv_trigger = $cfv_add -> getTrigger();
                echo "<h3 class= collection_display>
                    CFV Card Name: $cfv_name <br>
                        CFV Set: $cfv_set <br>
                    CFV Rarity: $cfv_rare <br>
                Clan or Nation: $cfv_clan <br>
                    Card Grade: $cfv_grade <br>
                        Card Unit: $cfv_unit <br>
                        Trigger: $cfv_trigger <br>
                    </h3>";
                echo "<br>";
            }
        }
    }
    
?>

<?php
    require "footer.php";
?>
