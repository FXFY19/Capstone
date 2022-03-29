<?php
    require "header.php";
?>

<?php
    include_once 'includes/dbh_inc.php';
?>

<main>
    <div class = "wrapper">
        <h1>
            Pokemon TCG Collection
        </h1>
    </div>

    

</main>

<?php
    $sql = "SELECT * FROM capstone.pkm_card;";
    $result = mysqli_query($conn,$sql);
    $result_check = mysqli_num_rows($result);

    if($result_check > 0){
        while ($row = mysqli_fetch_assoc($result)){
            $carddisplay = $row['PKMName'] . "; " . $row['PKMSet'] . "; " . $row['PKMHP']. "; " . $row['PKMRarity']  . "; " . $row['PKMCardType'] . "; " . $row['EnergyType'] . "; " . $row['TrainerType'] . "; " . $row['Foil'] . "; " . $row['FoilType'];
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