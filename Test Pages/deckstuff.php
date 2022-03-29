<?php

    abstract class deck{

        private $data = array();

        function getData(){
            return $this -> data;
        }

        abstract public function add_to_deck($Card_string);
    }

    class mtgdeck extends deck{
        public function add_to_deck($mtg_string){
            array_push($data, $mtg_string);
        }
    }

    class cfvdeck extends deck{
        public function add_to_deck($cfv_string){
            array_push($data, $cfv_string);
        }
    }
    

?>