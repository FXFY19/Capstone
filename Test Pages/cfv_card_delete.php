<?php
    include_once 'dbh_inc.php';

    if(isset($_POST['cfvdeleteItem'])){
        $sql = "DELETE FROM `capstone`.`cfv_card`;";
        mysqli_query($conn,$sql);
        header("Location:../cfvcollection.php?sign=all_delete");
    }


?>