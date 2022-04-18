<?php

     class Card{
        private  $cardname;
        private  $cardrarity;
        private  $cardset;
        private  $cardgame;

        function __construct($cardname, $cardrarity, $cardset, $cardgame)
        {
            $this -> cardname = $cardname;
            $this -> cardrarity = $cardrarity;
            $this -> cardset = $cardset;
            $this -> cardgame = $cardgame;
        }

        function setCardname($newcardname){
            $this -> cardname = $newcardname;
        }
        function setCardrarity($newcardrarity){
            $this -> cardrarity = $newcardrarity;
        }
        function setCardset($newcardset){
            $this -> cardset = $newcardset;
        }
        function setGame($newGame){
            $this -> cardgame = $newGame;
        }
        function getCardname(){
            return $this -> cardname;
        }
        function getCardrarity(){
            return $this -> cardrarity;
        }
        function getCardset(){
            return $this -> cardset;
        }
        function getGame(){
            return $this -> cardgame;
        }
        // function __toString(){
        //     return "Game: $this -> cardgame \n Name: $this-> cardname \n Rarity: $this -> cardrarity \n Set: $this -> cardset \n";
        // }

        // function add_to_list($data_array,$card_to_add){
        //     array_push($data_array,$card_to_add);
        // }
    }
    /*Polymorphism in PHP */
    class MTG extends Card{
        private  $type_1;
        private  $type_2;
        private  $legend;
        private  $cast;
        private  $total;
        private  $colorid;

        function __construct($cardname, $cardrarity, $cardset, $type_1, $type_2, $legend, $cast, $total, $colorid)
        {
            $this -> cardname = $cardname;
            $this -> cardrarity = $cardrarity;
            $this -> cardset = $cardset;
            $this -> type_1 = $type_1;
            $this -> type_2 = $type_2;
            $this -> legend = $legend;
            $this -> cast = $cast;
            $this -> total = $total;
            $this -> colorid = $colorid;
        }

        function setCardname($newcardname){
            $this -> cardname = $newcardname;
        }

        function setCardrarity($newcardrarity){
            $this -> cardrarity = $newcardrarity;
        }
        function setCardset($newcardset){
            $this -> cardset = $newcardset;
        }

        function setCardType($newcardtype1){
            $this -> type_1 = $newcardtype1;
        }

        function setCardType2($newcardtype2){
            $this -> type_2 = $newcardtype2;
        }
        function setLegend($ans){
            if($ans ==("Yes") ){
                $this -> legend = "Yes";
            }
            else{
                $this -> legend = "No";
            }
        }
        function setCast($newCast){
            $this -> cast = $newCast;
        }
        function setTotal($newTotal){
            $this -> total = $newTotal;
        }
        function setcolorid($newcolorid){
            $this -> colorid = $newcolorid;
        }

        function getCardname(){
            return $this -> cardname;
        }

        function getCardrarity(){
            return $this -> cardrarity;
        }
        function getCardset(){
            return $this -> cardset;
        }

        function getCardType1(){
            return $this -> type_1;
        }

        function getCardType2(){
            return $this -> type_2;
        }
        function getLegend(){
            return $this -> legend;
        }
        function getCast(){
            return $this -> cast;
        }
        function gettotal(){
            return $this -> total;
        }
        function getcolorid(){
             return $this -> colorid;
        }

        // function __toString(){
        //     return "MTG Card Name: $this -> getCardname()";
        //     // return "MTG Card Name: $this -> cardname \n MTG Card Rarity: $this -> cardrarity \n MTG Card Set: $this -> cardset \n MTG Card Type: $this -> type_1 and $this -> type_2 \n Legendary: $this -> legend \n MTG Card Casting Cost: $this -> cast \n MTG Card Total Cost: $this -> total \n MTG Card Color Idenity: $this -> colorid \n";
        // }
    }
    class CFV extends Card{
        private $clanNation;
        private $unit;
        private $grade;
        private $triggers;

        function __construct($cardname, $cardrarity, $cardset, $clanNation, $unit, $grade, $triggers)
        {
            $this -> cardname = $cardname;
            $this -> cardrarity = $cardrarity;
            $this -> cardset = $cardset;
            $this -> clanNation = $clanNation;
            $this -> unit = $unit;
            $this -> grade = $grade;
            $this -> triggers = $triggers;
        }

        function setCardname($newcardname){
            $this -> cardname = $newcardname;
        }

        function setCardrarity($newcardrarity){
            $this -> cardrarity = $newcardrarity;
        }
        function setCardset($newcardset){
            $this -> cardset = $newcardset;
        }


        function setclannation($newClanNation){
            $this -> clanNation = $newClanNation;
        }
        function setUnit($newUnit){
            $this -> unit = $newUnit;
        }
        function getUnit(){
            return $this -> unit;
        }
        function setGrade($newGrade){
            $this -> grade = $newGrade;
        }
        function setTriggers($newTrigger){
            $this -> triggers = $newTrigger;
        }

        function getCardname(){
            return $this -> cardname;
        }

        function getCardrarity(){
            return $this -> cardrarity;
        }
        function getCardset(){
            return $this -> cardset;
        }

        function getClanNation(){
            return $this -> clanNation;
        }
        function getGrade(){
             return $this -> grade;
        }
        function getTrigger(){
            return $this -> triggers;
        }

        // function __toString(){
        //         echo "CFV Card Name: ";
        //         echo $this -> getCardname();
        //         echo "<br>";
        //         echo "CFV Card Rarity: ";
        //         echo $this -> getCardrarity();
        //         echo "<br>";
        //         echo "CFV Card Set: ";
        //         echo $this -> getCardset();
        //         echo "<br>";
        //         echo "CFV Card Grade: ";
        //         echo $this ->getGrade();
        //         echo "<br>";
        //         echo "CFV Card Unit: ";
        //         echo $this -> getUnit();
        //         echo "<br>";
        //         echo "Trigger: ";
        //         echo $this -> getTrigger();
        //         echo "<br>";
        //         echo "CFV Card Clan/Nation: ";
        //         echo $this -> getClanNation();
        //         echo "<br>";
    
        //}
    }

    class PKM extends Card{
        private $EnergyType;
        private $PKMCardtype;
        private $HPValue;
        private $TrainerType;
        private $Foil;
        private $FoilType;

        function __construct($cardname, $cardrarity, $cardset, $EnergyType, $PKMCardtype, $HPValue, $TrainerType, $Foil, $FoilType)
        {
            $this -> cardname = $cardname;
            $this -> cardrarity = $cardrarity;
            $this -> cardset = $cardset;
            $this -> EnergyType = $EnergyType;
            $this -> HPValue = $HPValue;
            $this -> PKMCardtype = $PKMCardtype;
            $this -> Foil = $Foil;
            $this -> TrainerType = $TrainerType;
            $this -> FoilType = $FoilType;
        }

        function setCardname($newcardname){
            $this -> cardname = $newcardname;
        }

        function setCardrarity($newcardrarity){
            $this -> cardrarity = $newcardrarity;
        }
        function setCardset($newcardset){
            $this -> cardset = $newcardset;
        }


        function setEnergy($newEnergy){
            $this -> EnergyType = $newEnergy;
        }
        function setPKMCardtype($newPKMCardtype){
            $this -> PKMCardtype = $newPKMCardtype;
        }
        function setHP ($newHP){
            $this -> HPValue = $newHP;
        }
        function setTrainer($newTrainer){
            $this -> TrainerType = $newTrainer;
        }
        function setFoil($newFoil){
            $this -> Foil = $newFoil;
        }
        function setFoilType($newFoilType){
            $this -> FoilType = $newFoilType;
        }

        function getCardname(){
            return $this -> cardname;
        }

        function getCardrarity(){
            return $this -> cardrarity;
        }
        function getCardset(){
            return $this -> cardset;
        }

        function getEnergy(){
            return $this ->EnergyType;
        }
        function getPKMCardType(){
            return $this -> PKMCardtype;
        }
        function getHP(){
            return $this -> HPValue;
        }
        function getTrainer(){
            return $this -> TrainerType;
        }
        function getFoil(){
            return $this -> Foil;
        }
        function getFoilType(){
            return $this -> FoilType;
        }

        // function __toString()
        // {
        //     echo "PKM Card Name: ";
        //     echo $this -> getCardname();
        //     echo "<br>";
        //     echo "PKM Card Rarity: ";
        //     echo $this -> getCardrarity();
        //     echo "<br>";
        //     echo "PKM Card Set: ";
        //     echo $this -> getCardset();
        //     echo "<br>";
        //     echo "PKM Energy Type: ";
        //     echo $this -> getEnergy();
        //     echo "<br>";
        //     echo "PKM Card Type: ";
        //     echo $this -> getPKMCardType();
        //     echo "<br>";
        //     echo "PKM Trainer Type: ";
        //     echo $this -> getTrainer();
        //     echo "<br>";
        //     echo "Is it Foiled? ";
        //     echo $this -> getFoil();
        //     echo "<br>";
        //     echo "What Type of Foil? ";
        //     echo $this -> getFoilType(); 
        //     echo "<br>";
        // }

    }

    class YGO extends Card{
        private $YGOattribute;
        private $YGOCardtype;
        private $YGOSubtype1;
        private $YGOPenType2;
        private $YGORankStar;
        private $YGOAtk;
        private $YGODefLink;

        function __construct($cardname, $cardrarity, $cardset, $YGOattribute, $YGOCardtype,$YGOSubtype1, $YGOPenType2, $YGORankStar,$YGOAtk,$YGODefLink)
        {
            $this -> cardname = $cardname;
            $this -> cardrarity = $cardrarity;
            $this -> cardset = $cardset;
            $this -> YGOattribute = $YGOattribute;
            $this -> YGOCardtype = $YGOCardtype;
            $this -> YGOSubtype1 = $YGOSubtype1;
            $this -> YGOPenType2 = $YGOPenType2;
            $this -> YGORankStar = $YGORankStar;
            $this -> YGOAtk = $YGOAtk;
            $this -> YGODefLink = $YGODefLink;
        }

        function setCardname($newcardname){
            $this -> cardname = $newcardname;
        }

        function setCardrarity($newcardrarity){
            $this -> cardrarity = $newcardrarity;
        }
        function setCardset($newcardset){
            $this -> cardset = $newcardset;
        }

        function setAttribute($newAttribute){
            $this -> YGOattribute = $newAttribute;
        }

        function setCardtype($newCardtype){
            $this -> YGOCardtype = $newCardtype;
        }

        function setSub1($newSub1){
            $this -> YGOSubtype1 = $newSub1;
        }

        function setPenSub2($newSub2){
            $this -> YGOPenType2 = $newSub2;
        }

        function setRankStar($newRankStar){
            $this -> YGORankStar = $newRankStar;
        }

        function setAtk($newAtk){
            $this -> YGOAtk = $newAtk;
        }

        function setDefLink($newDefLink){
            $this -> YGODefLink = $newDefLink;
        }

        function getCardname(){
            return $this -> cardname;
        }

        function getCardrarity(){
            return $this -> cardrarity;
        }
        function getCardset(){
            return $this -> cardset;
        }

        function getAttribute(){
            return $this -> YGOattribute;
        }

        function getCardType(){
            return $this -> YGOCardtype;
        }

        function getSub1(){
            return $this -> YGOSubtype1;
        }

        function getPenSub(){
            return $this -> YGOPenType2;
        }

        function getRankStar(){
            return $this -> YGORankStar;
        }

        function getAttack(){
            return $this -> YGOAtk;
        }
        function getDefLink(){
            return $this -> YGODefLink;
        }

        // function __toString()
        // {
        //     echo "YGO Card Name: ";
        //     echo $this -> getCardname();
        //     echo "<br>";
        //     echo "YGO Card Rarity: ";
        //     echo $this -> getCardrarity();
        //     echo "<br>";
        //     echo "YGO Card Set: ";
        //     echo $this -> getCardset();
        //     echo "<br>";
        //     echo "YGO Attribute: ";
        //     echo $this -> getAttribute();
        //     echo "<br>";
        //     echo "YGO Card Type: ";
        //     echo $this -> getCardType();
        //     echo "<br>";
        //     echo "YGO Card Sub Type: ";
        //     echo $this -> getSub1();
        //     echo "<br>";
        //     echo "If the card is a Pendulum, what other Subtype is it? ";
        //     echo $this -> getPenSub();
        //     echo "<br>";
        //     echo "Star/Rank of the Card: ";
        //     echo $this -> getRankStar(); 
        //     echo "<br>";
        //     echo "YGO Monster Card Attack: ";
        //     echo $this -> getAttack();
        //     echo "<br>";
        //     echo "YGO Monster Card Defense/Link: ";
        //     echo $this -> getDefLink();
        //     echo "<br>";
        // }
    }


?>

<?php
    

    class Deck{
        private $name_deck;

        function __construct($name_deck)
        {
            include_once 'dbh_inc.php';
            $this -> name_deck = $name_deck;
            $sql = "CREATE TABLE DECK (
                Card_Name VARCHAR(255) NOT NULL,
                Card_Game_Set VARCHAR(255) NOT NULL,
                Card_Rarity CHAR(255) NOT NULL,
                Card_Game VARCHAR(255) NOT NULL,
                PRIMARY KEY (Card_Name, Card_Game_Set)
              );";
            mysqli_query($conn,$sql); 
        }

        function add_to_list(Card $card_insert){
            array_push($list_for_deck, $card_insert);
        }

        function set_deck_name($name_change_deck){
            $this -> name_deck = $name_change_deck;
        }
        function get_deck_name(){
            return $this -> name_deck;
        }
    }

?>