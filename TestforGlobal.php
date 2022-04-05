<?php
include "includes/Cardpolymorph.php";

?>

<?php
    require "header.php";
?>

<?php
    $mtg_test = new MTG('counterspell','uncommon','commder legends','instant','none','No','UU','2','Blue(U)');
    echo($mtg_test);
?>

<?php
    require "footer.php";
?>
