<?php
    include_once 'dbh_inc.php';

    $mtgname = $_POST['MTG_Card_Name'];
    $mtgset = $_POST['MTG_Card_Set'];
    $mtgrare = $_POST['MTG_Card_Rarity'];
    $mtglegend = $_POST['MTG_Legend'];
    $mtgcost = $_POST['MTG_Cast'];
    $mtgtotal = intval($_POST['MTG_total']);
    $mtgcolorid = $_POST['Colorid'];
    $mtgcardtype1 = $_POST['Cardtype1'];
    $mtgcardtype2 = $_POST['Cardtype2'];

    $sql = "INSERT INTO `capstone`.`mtg_card` (`MTGCardName`, `MTGCardSet`, `Rarity`, `Legendary`, `Cost`, `Total_Cost`, `ColorID`, `Card_Type1`, `Card_Type2`) VALUES('$mtgname', '$mtgset', '$mtgrare', '$mtglegend', '$mtgcost', '$mtgtotal', '$mtgcolorid', '$mtgcardtype1', '$mtgcardtype2');";

    mysqli_query($conn,$sql);
    header("Location:../mtgcard.php?sign=sccessful_upload");
?>