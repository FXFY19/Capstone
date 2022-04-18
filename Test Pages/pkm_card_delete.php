<?php
    include_once 'dbh_inc.php';

    if(isset($_POST['pkmdeleteItem'])){
        $sql = "DELETE FROM capstone.pkm_card;";
        mysqli_query($conn,$sql);
        header("Location:../pkmcollection.php?sign=all_delete");
    }


?>