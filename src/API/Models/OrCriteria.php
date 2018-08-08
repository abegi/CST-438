<?php

class OrCriteria implements Criteria {

    private $criteria;
    private $otherCriteria;

    public function OrCriteria(Criteria $criteria, Criteria $otherCriteria)
    {
        $this->$criteria = $criteria;
        $this->$otherCriteria = $otherCriteria;
    }

    public function meetCriteria(array $coins)
    {
        $firstCriteriaItems = array ($criteria->meetCriteria($coins));
        $otherCriteriaItems = array ($otherCriteria->meetCriteria($coins));

        foreach ($otherCriteriaItems as $coin)
        {
            if(in_array($coin, $firstCriteriaItems))
            {
                array_push($firstCriteriaItems, $coin);
            }
        }
        return $firstCriteriaItems;
    }
}

?>