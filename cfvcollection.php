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
    <form action = 'includes/all_card_delete.php' method = 'POST'>
    <input type = 'submit' name = 'cfvdeleteItem' value = 'Delete All'>
    </form>
</h3>
<br>


<?php
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
?>

<?php
    require "footer.php";
?>
