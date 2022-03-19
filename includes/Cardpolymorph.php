<?php
    class Card{
        private  $cardname;
        private  $cardrarity;
        private  $cardset;

        function setCardname($newcardname){
            $this -> cardname = $newcardname;
        }
        function setCardrarity($newcardrarity){
            $this -> cardrarity = $newcardrarity;
        }
        function setCardset($newcardset){
            $this -> cardset = $newcardset;
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
        function toString(){
            echo "Card Name: ";
            echo $this -> getCardname();
            echo "<br>";
            echo "Card Rarity: ";
            echo $this -> getCardrarity();
            echo "<br>";
            echo "Card Set: ";
            echo $this -> getCardset();
            echo "<br>";
        }
    }
    /*Polymorphism in PHP */
    class MTG extends Card{
        private  $type;
        private  $legend;
        private  $cast;
        private  $total;
        private  $colorid;

        function setCardType($newcardtype){
            $this -> type = $newcardtype;
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

        function getCardType(){
            return $this -> type;
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

        function toString(){
            echo "MTG Card Name: ";
            echo $this -> getCardname();
            echo "<br>";
            echo "MTG Card Rarity: ";
            echo $this -> getCardrarity();
            echo "<br>";
            echo "MTG Card Set: ";
            echo $this -> getCardset();
            echo "<br>";
            echo "MTG Card Type: ";
            echo $this -> getCardType();
            echo "<br>";
            echo "Legendary: ";
            echo $this -> getLegend();
            echo "<br>";
            echo "MTG Card Casting Cost: ";
            echo $this -> getCast();
            echo "<br>";
            echo "MTG Card Total Cost: ";
            echo $this ->gettotal();
            echo "<br>";
            echo "MTG Card Color Idenity: ";
            echo $this -> getcolorid();
            echo "<br>";
        }
    }
    class CFV extends Card{
        private $clanNation;
        private $unit;
        private $grade;
        private $hasTriggers;
        private $triggers;

        function setclannation($newClanNation){
            $this -> clanNation = $newClanNation;
        }
        function setUnit($newUnit){
            $this -> unit = $newUnit;
        }
        function getUnit(){
            return $this -> unit;
        }
        function setHasTriggers(){
            if($this -> getUnit() == "Trigger"){
                $this -> hasTriggers = true;
            }
            else{
                $this -> hasTriggers = false;
            }
        }
        function setGrade($newGrade){
            $this -> grade = $newGrade;
        }
        function setTriggers($newTrigger){
            $this -> triggers = $newTrigger;
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

        function toString(){
            if ($this -> hasTriggers == true){
                echo "CFV Card Name: ";
                echo $this -> getCardname();
                echo "<br>";
                echo "CFV Card Rarity: ";
                echo $this -> getCardrarity();
                echo "<br>";
                echo "CFV Card Set: ";
                echo $this -> getCardset();
                echo "<br>";
                echo "CFV Card Grade: ";
                echo $this ->getGrade();
                echo "<br>";
                echo "CFV Card Unit: ";
                echo $this -> getUnit();
                echo "<br>";
                echo "Trigger: ";
                echo $this -> getTrigger();
                echo "<br>";
                echo "CFV Card Clan/Nation: ";
                echo $this -> getClanNation();
                echo "<br>";
            }
            else{
                echo "CFV Card Name: ";
                echo $this -> getCardname();
                echo "<br>";
                echo "CFV Card Rarity: ";
                echo $this -> getCardrarity();
                echo "<br>";
                echo "CFV Card Set: ";
                echo $this -> getCardset();
                echo "<br>";
                echo "CFV Card Grade: ";
                echo $this ->getGrade();
                echo "<br>";
                echo "CFV Card Unit: ";
                echo $this -> getUnit();
                echo "<br>";
                echo "CFV Card Clan/Nation: ";
                echo $this -> getClanNation();
                echo "<br>";
            }
                    
        }
    }

    class PKM extends Card{
        private $EnergyType;
        private $PKMCardtype;
        private $HPValue;
        private $TrainerType;
        private $Foil;
        private $FoilType;

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

    }
?>
