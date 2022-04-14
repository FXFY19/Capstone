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
            Pokemon TCG Collection
        </h1>
    </div>

    

</main>

<h3 class = collection_display>
    <form action = 'includes/all_card_delete.php' method = 'POST'>
    <input type = 'submit' name = 'pkmdeleteItem' value = 'Delete All'>
    </form>
</h3>

<br>


<?php
    $sql = "SELECT * FROM capstone.pkm_card;";
    $result = mysqli_query($conn,$sql);
    $result_check = mysqli_num_rows($result);

    if($result_check > 0){
        while ($row = mysqli_fetch_assoc($result)){
            $pkm_add = new PKM($row['PKMName'],$row['PKMRarity'], $row['PKMSet'],$row['EnergyType'], $row['PKMCardType'],$row['PKMHP'],$row['TrainerType'],$row['Foil'],$row['FoilType']);
            $pkm_name = $pkm_add -> getCardname();
            $pkm_set = $pkm_add -> getCardset();
            $pkm_rare = $pkm_add -> getCardrarity();
            $pkm_foil = $pkm_add -> getFoil();
            $pkm_foil_type = $pkm_add -> getFoilType();
            $pkm_type = $pkm_add -> getPKMCardType();
            $pkm_trainer = $pkm_add -> getTrainer();
            $pkm_energy = $pkm_add -> getEnergy();
            $pkm_hp = $pkm_add -> getHP();


            echo "<h3 class= collection_display>
                PKM Card Name: $pkm_name <br>
                      PKM Set: $pkm_set <br>
                   PKM Rarity: $pkm_rare <br>
                PKM Card Foil: $pkm_foil <br>
                    Foil Type: $pkm_foil_type <br>
                PKM Card Type: $pkm_type <br>
                PKM Card Type: $pkm_trainer <br>
                PKM Energy Type: $pkm_energy <br>
                     HP Value: $pkm_hp <br>
                </h3>";
            echo "<br>";
        }
    }
?>

<?php
    require "footer.php";
?>
