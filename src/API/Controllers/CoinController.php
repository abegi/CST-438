<?php

    require(dirname(__FILE__).'/'.'BaseController.php'); 

    class CoinController extends BaseController{

    
        public function getCoin($id){
            //call api get coin, return coin
            $ch = curl_init("https://www.cryptocompare.com/api/data/coinsnapshotfullbyid/?id=".$id); 
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            $data = curl_exec($ch);
            curl_close($ch);
 
            return json_decode($data, true);
        }

        public function getCoins(){
            //call api get all coins, return list
            $ch = curl_init("https://www.cryptocompare.com/api/data/coinlist/"); 
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            $data = curl_exec($ch);
            curl_close($ch);
            
            $parseJson = json_decode($data,true);
            $coinArray = array();

            foreach($parseJson['Data'] as $coin)
            {
                array_push($coinArray, $coin);
            }
            return $coinArray;
        }

        public function coinSort($sortType, $sortOrder){
            //switch statement to sort
            $ch = curl_init("https://www.cryptocompare.com/api/data/coinlist/"); 
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            $data = curl_exec($ch);
            curl_close($ch);

            $parseJson = json_decode($data,true);
            $sortCoinArray = array();

            foreach($parseJson['Data'] as $coin)
            {
                array_push($sortCoinArray, $coin);
            }

            switch($sortOrder)
            {
                case 0:  //Ascending
                    switch($sortType)
                    {
                        case 0: //ID
                        break;
                        case 1: //Name
                        break;
                        case 2: //Symbol
                        break;
                        case 3: //CoinName
                            sort($sortCoinArray);
                            break;
                        case 4: //FullName
                        break;
                        case 4: //Algorithm
                        break;
                        case 5: //Prooftype
                        break;
                        case 6: //FullyPremined
                        break;
                        case 7: //TotalCoinSupply
                        break;
                        case 8: //BuiltOn
                        break;
                        case 9: //Smart Contract Address
                        break;
                        case 10: //PreminedValue
                        break;
                        case 11: //TotalCoinsFreeFloat
                        break;
                        case 12: //SortOrder
                        break;
                        case 13: //Sponsored
                        break;
                        default: 
                            sort($sortCoinArray);
                           break;
                        

                    }
                case 1: //Descending
                    switch($sortType)
                    {
                        case 0: //ID
                        break;
                        case 1: //Name
                        break;
                        case 2: //Symbol
                        break;
                        case 3: //CoinName
                        break;
                            rsort($sortCoinArray);
                        case 4: //FullName
                        break;
                        case 4: //Algorithm
                        break;
                        case 5: //Prooftype
                        break;
                        case 6: //FullyPremined
                        break;
                        case 7: //TotalCoinSupply
                        break;
                        case 8: //BuiltOn
                        break;
                        case 9: //Smart Contract Address
                        break;
                        case 10: //PreminedValue
                        break;
                        case 11: //TotalCoinsFreeFloat
                        break;
                        case 12: //SortOrder
                        break;
                        case 13: //Sponsored
                        break;
                        default: 
                            rsort($sortCoinArray);
                    }
                }

                return $sortCoinArray;

            }

        public function filter($filter){
            //filter coinlist, returned filtered results
            $ch = curl_init("https://www.cryptocompare.com/api/data/coinlist/"); 
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            $data = curl_exec($ch);
            curl_close($ch);
            
            $parseJson = json_decode($data,true);
            $coinArray = array();

            foreach($parseJson['Data'] as $coin)
            {
                array_push($coinArray, $coin);
            }
            return $coinArray;

        }
    }


?>