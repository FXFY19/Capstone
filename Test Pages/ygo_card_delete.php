<?php
    include_once 'dbh_inc.php';

    if(isset($_POST['ygodeleteItem'])){
        $sql = "DELETE FROM `capstone`.`ygo_card`;";
        mysqli_query($conn,$sql);
        header("Location:../ygocollection.php?sign=all_delete");
    }


?>