<?php

class AndCriteria implements Criteria {
    private $criteria;
    private $otherCriteria;
    
    public function AndCriteria(Criteria $criteria, Criteria $otherCriteria)
    {
        $this->$criteria = $criteria;
        $this->$otherCriteria = $otherCriteria;
    }

    public function meetCriteria(array $coins) {
        $firstCriteriaCoins = array ($criteria->meetCriteria($coins));
        return $otherCriteria->meetCriteria($firstCriteriaCoins);
    }
    
}

?>