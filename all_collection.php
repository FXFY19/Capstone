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
             All Card Collection
        </h1>
    </div>

    

</main>

<h3 class = collection_display>
    Delete All Cards: <br>
    *WARNING* Clicking this buttons will remove all the Cards from ALL Collections! You have been warned.
    <form action = 'includes/all_card_delete.php' method = 'POST'>
    <input type = 'submit' name = 'deleteItem' value = 'Delete All'>
    </form>
</h3>
<br>

<h3 class = collection_display>
    Sort Functions:
    <br>
    <form action = "all_collection.php" method = 'POST'>
        <input type = 'submit' name = 'Default' value = 'Default Sort'>
    </form>
    <form action = "all_collection.php" method = 'POST'>
        <input type = 'submit' name = 'All_Sort_Name' value = 'Sort by Card Name'>
    </form>
    <form action = "all_collection.php" method = 'POST'>
        <input type = 'submit' name = 'All_Sort_Rarity' value = 'Sort by Rarity'>
    </form>
</h3>

<br>


<?php

    //Default sort Button
    if(isset($_POST['Default'])){
        $sql = "SELECT * FROM capstone.collection ORDER BY Card_Game, Card_Name Asc;";
        $result = mysqli_query($conn,$sql);
        $result_check = mysqli_num_rows($result);

        if($result_check > 0){
            while ($row = mysqli_fetch_assoc($result)){
                $card_view = new Card($row['Card_Name'],$row['Card_Rarity'],$row['Card_Game_Set'],$row['Card_Game']);
                $card_name = $card_view -> getCardname();
                $card_rare = $card_view -> getCardrarity();
                $card_set = $card_view -> getCardset();
                $card_game = $card_view -> getGame();
                echo "<h3 class= collection_display>
                    Card Game: $card_game <br>
                    Card Name: $card_name <br>
                    Card Set: $card_set <br>
                    Card Rarity: $card_rare <br>
                    </h3>";
                echo "<br>";
            }
        }
    }

    //Sort by Name
    else if(isset($_POST['All_Sort_Name'])){
        $sql = "SELECT * FROM capstone.collection ORDER BY Card_Name Asc;";
        $result = mysqli_query($conn,$sql);
        $result_check = mysqli_num_rows($result);

        if($result_check > 0){
            while ($row = mysqli_fetch_assoc($result)){
                $card_view = new Card($row['Card_Name'],$row['Card_Rarity'],$row['Card_Game_Set'],$row['Card_Game']);
                $card_name = $card_view -> getCardname();
                $card_rare = $card_view -> getCardrarity();
                $card_set = $card_view -> getCardset();
                $card_game = $card_view -> getGame();
                echo "<h3 class= collection_display>
                    Card Game: $card_game <br>
                    Card Name: $card_name <br>
                    Card Set: $card_set <br>
                    Card Rarity: $card_rare <br>
                    </h3>";
                echo "<br>";
            }
        }
    }

    //Sort by Rarity
    else if(isset($_POST['All_Sort_Rarity'])){
        $sql = "SELECT * FROM capstone.collection ORDER BY Card_Rarity Asc;";
        $result = mysqli_query($conn,$sql);
        $result_check = mysqli_num_rows($result);

        if($result_check > 0){
            while ($row = mysqli_fetch_assoc($result)){
                $card_view = new Card($row['Card_Name'],$row['Card_Rarity'],$row['Card_Game_Set'],$row['Card_Game']);
                $card_name = $card_view -> getCardname();
                $card_rare = $card_view -> getCardrarity();
                $card_set = $card_view -> getCardset();
                $card_game = $card_view -> getGame();
                echo "<h3 class= collection_display>
                    Card Game: $card_game <br>
                    Card Name: $card_name <br>
                    Card Set: $card_set <br>
                    Card Rarity: $card_rare <br>
                    </h3>";
                echo "<br>";
            }
        }
    }

    //Default when on Site
    else{
        $sql = "SELECT * FROM capstone.collection ORDER BY Card_Game, Card_Name Asc;";
        $result = mysqli_query($conn,$sql);
        $result_check = mysqli_num_rows($result);

        if($result_check > 0){
            while ($row = mysqli_fetch_assoc($result)){
                $card_view = new Card($row['Card_Name'],$row['Card_Rarity'],$row['Card_Game_Set'],$row['Card_Game']);
                $card_name = $card_view -> getCardname();
                $card_rare = $card_view -> getCardrarity();
                $card_set = $card_view -> getCardset();
                $card_game = $card_view -> getGame();
                echo "<h3 class= collection_display>
                    Card Game: $card_game <br>
                    Card Name: $card_name <br>
                    Card Set: $card_set <br>
                    Card Rarity: $card_rare <br>
                    </h3>";
                echo "<br>";
            }
        }
    }
    
?>

<?php
    require "footer.php";
?>
