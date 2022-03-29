<?php
    include_once 'dbh_inc.php';

    $pkmname = mysqli_real_escape_string($conn, $_POST['PKM_Card_Name']);
    $pkmset = mysqli_real_escape_string($conn,$_POST['PKM_Card_Set']);
    $pkmrare = mysqli_real_escape_string($conn, $_POST['PKM_Card_Rarity']);
    $pkmcardtype = mysqli_real_escape_string($conn, $_POST['PKM_Cardtype']);
    $pkmenergy = mysqli_real_escape_string($conn, $_POST['PKM_Energy_Type']);
    $pkmhp= mysqli_real_escape_string($conn, intval($_POST['PKM_HP']));
    $pkmtrainer = mysqli_real_escape_string($conn, $_POST['PKM_Trainer_type']);
    $pkmfoil = mysqli_real_escape_string($conn, $_POST['PKM_Foil']);
    $pkmfoiltype = mysqli_real_escape_string($conn, $_POST['PKM_Foiling']);
    

    $sql = "INSERT INTO `capstone`.`pkm_card` (`PKMName`, `PKMSet`, `PKMHP`, `Foil`, `FoilType`, `EnergyType`, `PKMCardType`, `PKMRarity`, `TrainerType`) VALUES ('$pkmname', '$pkmset', '$pkmhp', '$pkmfoil', '$pkmfoiltype', '$pkmenergy', '$pkmcardtype', '$pkmrare', '$pkmtrainer');";

    mysqli_query($conn,$sql);
    header("Location:../pkmcard.php?sign=sccessful_upload");
?>