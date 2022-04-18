<?php
    include_once 'dbh_inc.php';

    if(isset($_POST['deleteItem'])){
        $sql = "DELETE FROM `capstone`.`collection`;";
        mysqli_query($conn,$sql);
        header("Location:../all_collection.php?sign=all_delete");
    }

    if(isset($_POST['deleteItem'])){
        $sql = "DELETE FROM capstone.mtg_card;";
        mysqli_query($conn,$sql);
    }

    if(isset($_POST['deleteItem'])){
        $sql = "DELETE FROM `capstone`.`cfv_card`;";
        mysqli_query($conn,$sql);
    }
    if(isset($_POST['deleteItem'])){
        $sql = "DELETE FROM `capstone`.`ygo_card`;";
        mysqli_query($conn,$sql);
    }
    if(isset($_POST['deleteItem'])){
        $sql = "DELETE FROM capstone.pkm_card;";
        mysqli_query($conn,$sql);
    }

    //Delete card information from the database and from certain card collections.

    if(isset($_POST['mtgdeleteItem'])){
        $sql = "DELETE FROM capstone.mtg_card;";
        mysqli_query($conn,$sql);
        header("Location:../mtgcollection.php?sign=all_delete");
    }

    //Delete Cards that are from the MTG Card list in the All Collection.
    if(isset($_POST['mtgdeleteItem'])){
        $sql = "DELETE FROM `capstone`.`collection` WHERE Card_Game = 'MTG';";
        mysqli_query($conn,$sql);
    }

    if(isset($_POST['cfvdeleteItem'])){
        $sql = "DELETE FROM `capstone`.`cfv_card`;";
        mysqli_query($conn,$sql);
        header("Location:../cfvcollection.php?sign=all_delete");
    }

    //Delete Cards that are from the CFV Card list in the All Collection.
    if(isset($_POST['cfvdeleteItem'])){
        $sql = "DELETE FROM `capstone`.`collection` WHERE Card_Game = 'CFV';";
        mysqli_query($conn,$sql);
    }

    if(isset($_POST['ygodeleteItem'])){
        $sql = "DELETE FROM `capstone`.`ygo_card`;";
        mysqli_query($conn,$sql);
        header("Location:../ygocollection.php?sign=all_delete");
    }

    //Delete Cards that are from the YGO Card list in the All Collection.
    if(isset($_POST['ygodeleteItem'])){
        $sql = "DELETE FROM `capstone`.`collection` WHERE Card_Game = 'YGO';";
        mysqli_query($conn,$sql);

    }

    if(isset($_POST['pkmdeleteItem'])){
        $sql = "DELETE FROM capstone.pkm_card;";
        mysqli_query($conn,$sql);
        header("Location:../pkmcollection.php?sign=all_delete");
    }

    if(isset($_POST['pkmdeleteItem'])){
        $sql = "DELETE FROM `capstone`.`collection` WHERE Card_Game = 'PKM';";
        mysqli_query($conn,$sql);
    }




?>