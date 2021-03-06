<?php

namespace AppBundle\Repository;

/**
 * CostRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CostRepository extends \Doctrine\ORM\EntityRepository
{

    public function fetchCostInfo($id)
    {

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT c
        FROM AppBundle:Cost c
        WHERE c.id = :id'
        )
            ->setParameter('id', $id);

        // returns an array of Product objects
        return $query->getResult();


    }

    public function getTotalCosts()
    {

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT SUM(c.cost)
        FROM AppBundle:Cost c'
        );

        // returns an array of Product objects
        return $query->getResult();
    }



    public function getCost_On_Range($date_in,$date_out)
    {

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(

            'SELECT SUM(c.cost)
        FROM AppBundle:Cost c 
    WHERE c.date BETWEEN  :date_in AND  :date_out'
        )
            ->setParameter('date_in', $date_in)
            ->setParameter('date_out', $date_out);

        // returns an array of Product objects
        return $query->getResult();
    }


}
