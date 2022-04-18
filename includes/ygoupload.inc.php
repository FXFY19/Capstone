<?php
    include_once 'dbh_inc.php';

    $ygoname = mysqli_real_escape_string($conn, $_POST['YGO_Card_Name']);
    $ygoset = mysqli_real_escape_string($conn,$_POST['YGO_Card_Set']);
    $ygorare = mysqli_real_escape_string($conn, $_POST['YGO_Card_Rarity']);
    $ygocardtype = mysqli_real_escape_string($conn, $_POST['YGO_Card_Type']);
    $ygosub1 = mysqli_real_escape_string($conn, $_POST['YGO_Sub']);
    $ygopensub= mysqli_real_escape_string($conn, $_POST['YGO_pen_sub']);
    $ygoattribute = mysqli_real_escape_string($conn, $_POST['YGO_Attribute']);
    $ygostarrank = mysqli_real_escape_string($conn, intval($_POST['YGO_StarRank']));
    $ygoattack = mysqli_real_escape_string($conn, intval($_POST['YGO_Attack']));
    $ygodeflink = mysqli_real_escape_string($conn, intval($_POST['YGO_DefLink']));
    

    $sql = " INSERT INTO `capstone`.`ygo_card` (`YGOName`, `YGOSet`, `YGORarity`, `YGOAttribute`, `YGOCardType`, `YGOSub1`, `YGOPen1`, `YGOStarRank`, `YGOAtk`, `YGODefLink`) VALUES ('$ygoname', '$ygoset', '$ygorare', '$ygoattribute', '$ygocardtype', '$ygosub1', '$ygopensub', '$ygostarrank', '$ygoattack', '$ygodeflink');";

   

    mysqli_query($conn,$sql);
    header("Location:../ygocard.php?sign=sccessful_upload");
?>