<?php
    require "header.php";
?>

<?php
    include_once 'includes/dbh_inc.php';
?>

<main>
    <div class = "wrapper">
        <h1>
             All Card Collection
        </h1>
    </div>

    

</main>

<?php
    $sql = "SELECT * FROM capstone.collection;";
    $result = mysqli_query($conn,$sql);
    $result_check = mysqli_num_rows($result);

    if($result_check > 0){
        while ($row = mysqli_fetch_assoc($result)){
            $carddisplay = $row['Card_Game'] . "; " . $row['Card_Name'] . "; " . $row['Card_Game_Set']. "; " . $row['Card_Rarity'] ;
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