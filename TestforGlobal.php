<?php
include "includes/Cardpolymorph.php";

?>

<?php
    require "header.php";
?>

<?php
    // $mtg_test = new MTG('counterspell','uncommon','commder legends','instant','none','No','UU','2','Blue(U)');
    // $mtg_tester = $mtg_test -> getCardname();
    // echo($mtg_tester);
    // echo($mtg_test -> getCardname());
    // $ygo_test = new YGO('Dark Magician','Rare','OG','Dark','Monster','Monster-normal','none', 7,2500,1000);
    // echo($ygo_test -> getCardname());

    $deck_test = new Deck("Test");
    echo($deck_test-> get_deck_name());
?>

<?php
    require "footer.php";
?>
