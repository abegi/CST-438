<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/CST-438/CST-438/src/API/Controllers/CoinController.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/CST-438/CST-438/src/API/Models/CoinModel.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/CST-438/CST-438/src/API/Models/Criteria.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/CST-438/CST-438/src/API/Models/CriteriaAlgorithm.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/CST-438/CST-438/src/API/Models/CriteriaName.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/CST-438/CST-438/src/API/Models/CriteriaSymbol.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/CST-438/CST-438/src/API/Models/CriteriaPatternDemo.php');

    class CriteriaPatternDemo 
    {
       public function main()
       {
          // $coin = new CoinModel();

          $coin1 = new CoinModel();
          $coin2 = new CoinModel();

          
          $coin1->setId('1');

          $coin1->setH1Text('H1Text');
          $coin1->setImageUrl('ImageURL');
          $coin1->setAlgorithm('SHA256');
          $coin1->setName('BTC');
          $coin1->setDescription('Desc');
          $coin1->setSymbol('BTC');

          $coin2->setH1Text('H1Text2');
          $coin2->setImageUrl('ImageURL2');
          $coin2->setAlgorithm('SHA256231');
          $coin2->setName('BTCHHH');
          $coin2->setDescription('Desc2');
          $coin2->setSymbol('BTCHHH');

          //echo 'Coin3 Name: '.$coin3->getName();

          $coins = array($coin1, $coin2);
           
           $AlgorithmCriteria = new CriteriaAlgorithm();

            echo 'Algorithm Meet Criteria: ';
            //foreach ($coins as $coin)
            //{
                //echo $coin1->getName();
                
                    for($x = 0; $x < count($coins); $i++)
                    {
                        json_encode($AlgorithmCriteria->meetCriteria($coins)[0]->getName());
                    } 
                
            //}
            
            //echo json_encode($AlgorithmCriteria->meetCriteria($coins), true);
           
       }

       /*public function printCoins(array $coins)
       {
           foreach($coins as $coin)
           {
               echo 'Algorithm: '.$coin->getAlgorithm();
           }
       }*/
    }

?>