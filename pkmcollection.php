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
    Delete All PKM Cards from Collection: 
    <form action = 'includes/all_card_delete.php' method = 'POST'>
    <input type = 'submit' name = 'pkmdeleteItem' value = 'Delete All'>
    </form>
</h3>

<br>

<h3 class = collection_display>
    Sort Functions:
    <br>
    <form action = "pkmcollection.php" method = 'POST'>
        <input type = 'submit' name = 'Default' value = 'Default Sort'>
    </form>
    <form action = "pkmcollection.php" method = 'POST'>
        <input type = 'submit' name = 'PKM_Sort_Name' value = 'Sort by Card Name'>
    </form>
    <form action = "pkmcollection.php" method = 'POST'>
        <input type = 'submit' name = 'PKM_Sort_Type' value = 'Sort by Card Type'>
    </form>
    <form action = "pkmcollection.php" method = 'POST'>
        <input type = 'submit' name = 'PKM_Sort_Rarity' value = 'Sort by Rarity'>
    </form>
    <form action = "pkmcollection.php" method = 'POST'>
        <input type = 'submit' name = 'PKM_Sort_Set' value = 'Sort by Set'>
    </form>
</h3>

<br>


<?php

    //Default Button Sort
    if(isset($_POST['Default'])){
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

    }

    //Sort by Name
    else if(isset($_POST['PKM_Sort_Name'])){
        $sql = "SELECT * FROM capstone.pkm_card Order By PKMName Asc;";
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

    }

    //Sort by Card Type
    else if(isset($_POST['PKM_Sort_Type'])){
        $sql = "SELECT * FROM capstone.pkm_card Order By PKMCardType Asc;";
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

    }


    //Sort by Rarity
    else if(isset($_POST['PKM_Sort_Rarity'])){
        $sql = "SELECT * FROM capstone.pkm_card Order By PKMRarity, PKMName Asc;";
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

    }

    //Sort by Set
    else if(isset($_POST['PKM_Sort_Set'])){
        $sql = "SELECT * FROM capstone.pkm_card Order By PKMSet, PKMName Asc;";
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

    }



    //Default when Entering Site
    else{
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

    }
    
?>

<?php
    require "footer.php";
?>
