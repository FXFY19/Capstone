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
            Yugioh Card Collection
        </h1>
    </div>

    

</main>


<h3 class = collection_display>
    Delete All YGO Cards from Collection: 
    <form action = 'includes/all_card_delete.php' method = 'POST'>
    <input type = 'submit' name = 'ygodeleteItem' value = 'Delete All'>
    </form>
</h3>

<br>

<h3 class = collection_display>
    Sort Functions:
    <br>
    <form action = "ygocollection.php" method = 'POST'>
        <input type = 'submit' name = 'Default' value = 'Default Sort'>
    </form>
    <form action = "ygocollection.php" method = 'POST'>
        <input type = 'submit' name = 'YGO_Sort_Name' value = 'Sort by Card Name'>
    </form>
    <form action = "ygocollection.php" method = 'POST'>
        <input type = 'submit' name = 'YGO_Sort_Card' value = 'Sort by Card Type'>
    </form>
    <form action = "ygocollection.php" method = 'POST'>
        <input type = 'submit' name = 'YGO_Sort_Rarity' value = 'Sort by Rarity'>
    </form>
    <form action = "ygocollection.php" method = 'POST'>
        <input type = 'submit' name = 'YGO_Sort_Set' value = 'Sort by Set'>
    </form>
</h3>
<br>

<?php
    //Default Sort
    if(isset($_POST['Default'])){
        $sql = "SELECT * FROM capstone.ygo_card;";
        $result = mysqli_query($conn,$sql);
        $result_check = mysqli_num_rows($result);

        if($result_check > 0){
            while ($row = mysqli_fetch_assoc($result)){
                $YGO_card_add = new YGO($row['YGOName'],  $row['YGORarity'], $row['YGOSet'],$row['YGOAttribute'], $row['YGOCardType'], $row['YGOSub1'] , $row['YGOPen1'], $row['YGOStarRank'],$row['YGOAtk'], $row['YGODefLink']);
                $YGO_name = $YGO_card_add -> getCardname();
                $YGO_set = $YGO_card_add -> getCardset();
                $YGO_rare = $YGO_card_add -> getCardrarity();
                $YGO_attri = $YGO_card_add -> getAttribute();
                $YGO_card_type = $YGO_card_add -> getCardType();
                $YGO_sub = $YGO_card_add -> getSub1();
                $YGO_pen = $YGO_card_add -> getPenSub();
                $YGO_star = $YGO_card_add -> getRankStar();
                $YGO_attack = $YGO_card_add -> getAttack();
                $YGO_defense = $YGO_card_add -> getDefLink();
                echo "<h3 class= collection_display>
                    YGO Card Name: $YGO_name <br>
                        YGO Set: $YGO_set <br>
                    YGO Rarity: $YGO_rare <br>
                        Attribute: $YGO_attri <br>
                        Card Type: $YGO_card_type <br>
                    Card Subtype: $YGO_sub <br>
                    Pendulum Subtype: $YGO_pen <br>
                    Star/Rank/Link: $YGO_star <br>
                    Mosnter Attack: $YGO_attack <br>
                    Monster Defense: $YGO_defense <br>

                    </h3>";
                echo "<br>";
            }
        }

    }

    //Sort by Card Name
    else if(isset($_POST['YGO_Sort_Name'])){
        $sql = "SELECT * FROM capstone.ygo_card order by YGOName asc;";
        $result = mysqli_query($conn,$sql);
        $result_check = mysqli_num_rows($result);

        if($result_check > 0){
            while ($row = mysqli_fetch_assoc($result)){
                $YGO_card_add = new YGO($row['YGOName'],  $row['YGORarity'], $row['YGOSet'],$row['YGOAttribute'], $row['YGOCardType'], $row['YGOSub1'] , $row['YGOPen1'], $row['YGOStarRank'],$row['YGOAtk'], $row['YGODefLink']);
                $YGO_name = $YGO_card_add -> getCardname();
                $YGO_set = $YGO_card_add -> getCardset();
                $YGO_rare = $YGO_card_add -> getCardrarity();
                $YGO_attri = $YGO_card_add -> getAttribute();
                $YGO_card_type = $YGO_card_add -> getCardType();
                $YGO_sub = $YGO_card_add -> getSub1();
                $YGO_pen = $YGO_card_add -> getPenSub();
                $YGO_star = $YGO_card_add -> getRankStar();
                $YGO_attack = $YGO_card_add -> getAttack();
                $YGO_defense = $YGO_card_add -> getDefLink();
                echo "<h3 class= collection_display>
                    YGO Card Name: $YGO_name <br>
                        YGO Set: $YGO_set <br>
                    YGO Rarity: $YGO_rare <br>
                        Attribute: $YGO_attri <br>
                        Card Type: $YGO_card_type <br>
                    Card Subtype: $YGO_sub <br>
                    Pendulum Subtype: $YGO_pen <br>
                    Star/Rank/Link: $YGO_star <br>
                    Mosnter Attack: $YGO_attack <br>
                    Monster Defense: $YGO_defense <br>

                    </h3>";
                echo "<br>";
            }
        }

    }

    //Sort by Card Type
    else if(isset($_POST['YGO_Sort_Card'])){
        $sql = "SELECT * FROM capstone.ygo_card order by YGOCardType, YGOSub1, YGOName asc;";
        $result = mysqli_query($conn,$sql);
        $result_check = mysqli_num_rows($result);

        if($result_check > 0){
            while ($row = mysqli_fetch_assoc($result)){
                $YGO_card_add = new YGO($row['YGOName'],  $row['YGORarity'], $row['YGOSet'],$row['YGOAttribute'], $row['YGOCardType'], $row['YGOSub1'] , $row['YGOPen1'], $row['YGOStarRank'],$row['YGOAtk'], $row['YGODefLink']);
                $YGO_name = $YGO_card_add -> getCardname();
                $YGO_set = $YGO_card_add -> getCardset();
                $YGO_rare = $YGO_card_add -> getCardrarity();
                $YGO_attri = $YGO_card_add -> getAttribute();
                $YGO_card_type = $YGO_card_add -> getCardType();
                $YGO_sub = $YGO_card_add -> getSub1();
                $YGO_pen = $YGO_card_add -> getPenSub();
                $YGO_star = $YGO_card_add -> getRankStar();
                $YGO_attack = $YGO_card_add -> getAttack();
                $YGO_defense = $YGO_card_add -> getDefLink();
                echo "<h3 class= collection_display>
                    YGO Card Name: $YGO_name <br>
                        YGO Set: $YGO_set <br>
                    YGO Rarity: $YGO_rare <br>
                        Attribute: $YGO_attri <br>
                        Card Type: $YGO_card_type <br>
                    Card Subtype: $YGO_sub <br>
                    Pendulum Subtype: $YGO_pen <br>
                    Star/Rank/Link: $YGO_star <br>
                    Mosnter Attack: $YGO_attack <br>
                    Monster Defense: $YGO_defense <br>

                    </h3>";
                echo "<br>";
            }
        }

    }

    //Sort by Rarity
    else if(isset($_POST['YGO_Sort_Rarity'])){
        $sql = "SELECT * FROM capstone.ygo_card order by YGORarity, YGOName asc;";
        $result = mysqli_query($conn,$sql);
        $result_check = mysqli_num_rows($result);

        if($result_check > 0){
            while ($row = mysqli_fetch_assoc($result)){
                $YGO_card_add = new YGO($row['YGOName'],  $row['YGORarity'], $row['YGOSet'],$row['YGOAttribute'], $row['YGOCardType'], $row['YGOSub1'] , $row['YGOPen1'], $row['YGOStarRank'],$row['YGOAtk'], $row['YGODefLink']);
                $YGO_name = $YGO_card_add -> getCardname();
                $YGO_set = $YGO_card_add -> getCardset();
                $YGO_rare = $YGO_card_add -> getCardrarity();
                $YGO_attri = $YGO_card_add -> getAttribute();
                $YGO_card_type = $YGO_card_add -> getCardType();
                $YGO_sub = $YGO_card_add -> getSub1();
                $YGO_pen = $YGO_card_add -> getPenSub();
                $YGO_star = $YGO_card_add -> getRankStar();
                $YGO_attack = $YGO_card_add -> getAttack();
                $YGO_defense = $YGO_card_add -> getDefLink();
                echo "<h3 class= collection_display>
                    YGO Card Name: $YGO_name <br>
                        YGO Set: $YGO_set <br>
                    YGO Rarity: $YGO_rare <br>
                        Attribute: $YGO_attri <br>
                        Card Type: $YGO_card_type <br>
                    Card Subtype: $YGO_sub <br>
                    Pendulum Subtype: $YGO_pen <br>
                    Star/Rank/Link: $YGO_star <br>
                    Mosnter Attack: $YGO_attack <br>
                    Monster Defense: $YGO_defense <br>

                    </h3>";
                echo "<br>";
            }
        }

    }

    //Sort by Set
    else if(isset($_POST['YGO_Sort_Set'])){
        $sql = "SELECT * FROM capstone.ygo_card order by YGOSet, YGOName asc;";
        $result = mysqli_query($conn,$sql);
        $result_check = mysqli_num_rows($result);

        if($result_check > 0){
            while ($row = mysqli_fetch_assoc($result)){
                $YGO_card_add = new YGO($row['YGOName'],  $row['YGORarity'], $row['YGOSet'],$row['YGOAttribute'], $row['YGOCardType'], $row['YGOSub1'] , $row['YGOPen1'], $row['YGOStarRank'],$row['YGOAtk'], $row['YGODefLink']);
                $YGO_name = $YGO_card_add -> getCardname();
                $YGO_set = $YGO_card_add -> getCardset();
                $YGO_rare = $YGO_card_add -> getCardrarity();
                $YGO_attri = $YGO_card_add -> getAttribute();
                $YGO_card_type = $YGO_card_add -> getCardType();
                $YGO_sub = $YGO_card_add -> getSub1();
                $YGO_pen = $YGO_card_add -> getPenSub();
                $YGO_star = $YGO_card_add -> getRankStar();
                $YGO_attack = $YGO_card_add -> getAttack();
                $YGO_defense = $YGO_card_add -> getDefLink();
                echo "<h3 class= collection_display>
                    YGO Card Name: $YGO_name <br>
                        YGO Set: $YGO_set <br>
                    YGO Rarity: $YGO_rare <br>
                        Attribute: $YGO_attri <br>
                        Card Type: $YGO_card_type <br>
                    Card Subtype: $YGO_sub <br>
                    Pendulum Subtype: $YGO_pen <br>
                    Star/Rank/Link: $YGO_star <br>
                    Mosnter Attack: $YGO_attack <br>
                    Monster Defense: $YGO_defense <br>

                    </h3>";
                echo "<br>";
            }
        }

    }


    //When Entering into Site
    else{

        $sql = "SELECT * FROM capstone.ygo_card;";
        $result = mysqli_query($conn,$sql);
        $result_check = mysqli_num_rows($result);

        if($result_check > 0){
            while ($row = mysqli_fetch_assoc($result)){
                $YGO_card_add = new YGO($row['YGOName'],  $row['YGORarity'], $row['YGOSet'],$row['YGOAttribute'], $row['YGOCardType'], $row['YGOSub1'] , $row['YGOPen1'], $row['YGOStarRank'],$row['YGOAtk'], $row['YGODefLink']);
                $YGO_name = $YGO_card_add -> getCardname();
                $YGO_set = $YGO_card_add -> getCardset();
                $YGO_rare = $YGO_card_add -> getCardrarity();
                $YGO_attri = $YGO_card_add -> getAttribute();
                $YGO_card_type = $YGO_card_add -> getCardType();
                $YGO_sub = $YGO_card_add -> getSub1();
                $YGO_pen = $YGO_card_add -> getPenSub();
                $YGO_star = $YGO_card_add -> getRankStar();
                $YGO_attack = $YGO_card_add -> getAttack();
                $YGO_defense = $YGO_card_add -> getDefLink();
                echo "<h3 class= collection_display>
                    YGO Card Name: $YGO_name <br>
                        YGO Set: $YGO_set <br>
                    YGO Rarity: $YGO_rare <br>
                        Attribute: $YGO_attri <br>
                        Card Type: $YGO_card_type <br>
                    Card Subtype: $YGO_sub <br>
                    Pendulum Subtype: $YGO_pen <br>
                    Star/Rank/Link: $YGO_star <br>
                    Mosnter Attack: $YGO_attack <br>
                    Monster Defense: $YGO_defense <br>

                    </h3>";
                echo "<br>";
            }
        }

    }
    
?>

<?php
    require "footer.php";
?>
