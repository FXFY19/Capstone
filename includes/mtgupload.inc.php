<?php
    include_once 'dbh_inc.php';

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
