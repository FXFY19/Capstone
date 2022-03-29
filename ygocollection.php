<?php
    require "header.php";
?>

<?php
    include_once 'includes/dbh_inc.php';
?>

<main>
    <div class = "wrapper">
        <h1>
            Yugioh Card Collection
        </h1>
    </div>

    

</main>

<?php
    $sql = "SELECT * FROM capstone.ygo_card;";
    $result = mysqli_query($conn,$sql);
    $result_check = mysqli_num_rows($result);

    if($result_check > 0){
        while ($row = mysqli_fetch_assoc($result)){
            $carddisplay = $row['YGOName'] . "; " . $row['YGOSet'] . "; " . $row['YGORarity']. "; " . $row['YGOCardType']  . "; " . $row['YGOSub1'] . "; " . $row['YGOPen1'] . "; " . $row['YGOAttribute'] . "; " . $row['YGOStarRank'] . "; " . $row['YGOAtk'] . "; " . $row['YGODefLink'];
            echo "<h3 class= collection_display>
                $carddisplay
                </h3>";
            echo "<br>";
        }
    }
?>

<?php
    require "footer.php";
?>