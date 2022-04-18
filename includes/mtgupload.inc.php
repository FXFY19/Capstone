<?php
    session_start();
?>

<?php
    include_once 'dbh_inc.php';
    include 'Cardpolymorph.php';

    //Insert Array.
    //$mtgname_array = $_POST['MTG_Card_Name'];
    //$mtgset_array = $_POST['MTG_Card_Set'];
    //$mtgrare_array = $_POST['MTG_Card_Rarity'];
    //$mtglegend_array = $_POST['MTG_Legend'];
    //$mtgcost_array = $_POST['MTG_Cast'];
    //$mtgtotal_array = intval($_POST['MTG_total']);
    //$mtgcolorid_array = $_POST['Colorid'];
    //$mtgcardtype1_array = $_POST['Cardtype1'];
    //$mtgcardtype2_array = $_POST['Cardtype2'];

    //$mtg_card_add = new MTG($mtgname_array,$mtgrare_array,$mtgset_array,$mtgcardtype1_array, $mtgcardtype2_array, $mtglegend_array, $mtgcost_array, $mtgtotal_array,$mtgcolorid_array);
    //$mtg_card_add -> add_to_list($_SESSION['Master_list'],$mtg_card_add);
    

    //SQL Database insert
    $mtgname = mysqli_real_escape_string($conn, $_POST['MTG_Card_Name']);
    $mtgset = mysqli_real_escape_string($conn,$_POST['MTG_Card_Set']);
    $mtgrare = mysqli_real_escape_string($conn, $_POST['MTG_Card_Rarity']);
    $mtglegend = mysqli_real_escape_string($conn, $_POST['MTG_Legend']);
    $mtgcost = mysqli_real_escape_string($conn, $_POST['MTG_Cast']);
    $mtgtotal = mysqli_real_escape_string($conn, intval($_POST['MTG_total']));
    $mtgcolorid = mysqli_real_escape_string($conn, $_POST['Colorid']);
    $mtgcardtype1 = mysqli_real_escape_string($conn, $_POST['Cardtype1']);
    $mtgcardtype2 = mysqli_real_escape_string($conn, $_POST['Cardtype2']);

    $sql = "INSERT INTO `capstone`.`mtg_card` (`MTGCardName`, `MTGCardSet`, `Rarity`, `Legendary`, `Cost`, `Total_Cost`, `ColorID`, `Card_Type1`, `Card_Type2`) VALUES('$mtgname', '$mtgset', '$mtgrare', '$mtglegend', '$mtgcost', '$mtgtotal', '$mtgcolorid', '$mtgcardtype1', '$mtgcardtype2');";

    mysqli_query($conn,$sql);
    header("Location:../mtgcard.php?sign=sccessful_upload");
?>