<?php

    require(dirname(__FILE__).'/'.'BaseController.php');

    class CoinController extends BaseController{

        private function __construct($id)
        {
            $this->getCoin($id);
        }


        public function getCoin($id){
            //call api get coin, return coin

        }

        public function getCoins(){
            //call api get all coins, return list
        }

        public function getCoinUrl($id){
            //call api get coin, return url
        }

        public function getCoinSymbol($id){
            //call api get coin, return coin symbol
        }

        public function sort($sortType, $sortOrder){
            //switch statement to sort
        }

        public function filter($filter){
            //filter coinlist, returned filtered results
        }
    }


?>
