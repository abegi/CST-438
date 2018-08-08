<?php

class CriteriaName implements Criteria {

    public function meetCriteria(array $coins)
    {
        $Name = array();
        foreach($coins as $coin)
        {
              if($coin->getName() == "BTC")
              {
                array_push($Name, $coin);
              }
        }
        return $Name;
    }
}

?>