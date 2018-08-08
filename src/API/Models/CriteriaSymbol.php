<?php

class CriteriaSymbol implements Criteria {

    public function meetCriteria(array $coins)
    {
        $Symbol = array();
        foreach($coins as $coin)
        {
              if($coin->getSymbol() == "BTC")
              {
                array_push($Symbol, $coin);
              }
        }
        return $Symbol;
    }
}

?>