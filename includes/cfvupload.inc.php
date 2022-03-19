<?php
    include_once 'dbh_inc.php';

    $cfvname = mysqli_real_escape_string($conn, $_POST['CFV_Card_Name']);
    $cfvset = mysqli_real_escape_string($conn,$_POST['CFV_Card_Set']);
    $cfvrare = mysqli_real_escape_string($conn, $_POST['CFV_Card_Rarity']);
    $cfvunittype = mysqli_real_escape_string($conn, $_POST['Unit_Type']);
    $cfvnationclan = mysqli_real_escape_string($conn, $_POST['CFV_Nation_Clan']);
    $cfvtrigger= mysqli_real_escape_string($conn, $_POST['CFV_trigger']);
    $cfvgrade = mysqli_real_escape_string($conn, $_POST['CFV_grade']);

    $sql = "INSERT INTO `capstone`.`cfv_card` (`CFVCardName`, `CFVCardSet`, `Rarity`, `Unit_Type`, `Clan_Nation`, `CFVTrigger`, `Grade`) VALUES ('$cfvname', '$cfvset', '$cfvrare', '$cfvunittype', '$cfvnationclan', '$cfvtrigger', '$cfvgrade');";

    mysqli_query($conn,$sql);
    header("Location:../cfvcard.php?sign=sccessful_upload");
?>