<?php
    require "header.php";
?>

<?php
    include_once 'includes/dbh_inc.php';
?>

<main>
    <div class = "wrapper">
        <h1>
            Welcome to Card Collection!
        </h1>
    </div>

</main>

<?php
    $sql = "SELECT * FROM capstone.mtg_card;";
    $result = mysqli_query($conn,$sql);
    $result_check = mysqli_num_rows($result);

    if($result_check > 0){
        while ($row = mysqli_fetch_assoc($result)){
            echo $row['MTGCardName'] . "; " . $row['MTGCardSet'];

        }
    }
?>

<?php
    require "footer.php";
?>
