<?php

class CriteriaAlgorithm implements Criteria {

    public function meetCriteria(array $coins)
    {
        $Algorithm = array();
        
        //$this->coins = $coins;

      foreach($coins as $coin)
        {   

            array_push($Algorithm, $coin);

              /*if($coin->getAlgorithm() == "SHA256")
              {
                array_push($Algorithm, $coin);
              }*/
       }
        return $Algorithm;
    }
}

?>