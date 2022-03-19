<?php
    require "header.php";
?>

<?php
    include_once 'includes/dbh_inc.php';
?>

<main>
    <div class = "wrapper">
        <h1>
           Cardfight Vanguard Collection
        </h1>
    </div>

    

</main>

<?php
    $sql = "SELECT * FROM capstone.cfv_card;";
    $result = mysqli_query($conn,$sql);
    $result_check = mysqli_num_rows($result);

    if($result_check > 0){
        while ($row = mysqli_fetch_assoc($result)){
            $carddisplay = $row['CFVCardName'] . "; " . $row['CFVCardSet'] . "; " . $row['Rarity']. "; " . $row['Unit_Type']  . "; " . $row['Clan_Nation'] . "; " . $row['CFVTrigger'] . "; " . $row['Grade'];
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