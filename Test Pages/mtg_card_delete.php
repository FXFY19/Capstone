<?php
    include_once 'dbh_inc.php';

    if(isset($_POST['mtgdeleteItem'])){
        $sql = "DELETE FROM capstone.mtg_card;";
        mysqli_query($conn,$sql);
        header("Location:../mtgcollection.php?sign=all_delete");
    }

?>