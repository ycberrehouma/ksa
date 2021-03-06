<?php

namespace AppBundle\Repository;

/**
 * ContractRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ContractRepository extends \Doctrine\ORM\EntityRepository
{

    public function fetchContractInfo($id)
    {

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT c
        FROM AppBundle:Contract c
        WHERE c.id = :id'
        )
            ->setParameter('id', $id);

        // returns an array of Product objects
        return $query->getResult();


    }

    public function getRevenue()
    {

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT SUM(c.price)
        FROM AppBundle:Contract c'
        );

        // returns an array of Product objects
        return $query->getResult();
    }

    public function getRevenue_On_Range($date_in,$date_out)
    {

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(

            'SELECT SUM(c.price)
        FROM AppBundle:Contract c 
    WHERE c.createdOn BETWEEN  :date_in AND  :date_out'
        )
            ->setParameter('date_in', $date_in)
            ->setParameter('date_out', $date_out);

        // returns an array of Product objects
        return $query->getResult();


    }

    public function checkHouseAvailability($house,$check_in_date,$check_out_date)
    {

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(

            'SELECT c.roomNumber
        FROM AppBundle:Contract c 
    WHERE c.checkInDate BETWEEN  :check_in_date AND  :check_out_date
    AND c.checkOutDate BETWEEN :check_in_date AND :check_out_date
    AND c.roomNumber = :house'
        )
            ->setParameter('house', $house)
            ->setParameter('check_in_date', $check_in_date)
            ->setParameter('check_out_date', $check_out_date);

        // returns an array of Product objects
        return $query->getResult();
    }

    public function checkDateRangeAvailability($check_in_date,$check_out_date)
    {

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(

            'SELECT c.roomNumber
        FROM AppBundle:Contract c 
    WHERE c.checkInDate BETWEEN  :check_in_date AND  :check_out_date
    AND c.checkOutDate BETWEEN :check_in_date AND :check_out_date'
        )

            ->setParameter('check_in_date', $check_in_date)
            ->setParameter('check_out_date', $check_out_date);

        // returns an array of Product objects
        return $query->getResult();
    }

    public function fetchRooms($check_in_date,$check_out_date)
    {

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(

            'SELECT c.roomNumber
        FROM AppBundle:Contract c 
     WHERE c.checkInDate BETWEEN  :check_in_date AND  :check_out_date
    AND c.checkOutDate BETWEEN :check_in_date AND :check_out_date'
        )

            ->setParameter('check_in_date', $check_in_date)
            ->setParameter('check_out_date', $check_out_date);

        // returns an array of Product objects
        return $query->getResult();
    }

    public function fetchRoomDetails($room,$check_in_date,$check_out_date)
    {

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(

            'SELECT c.id,c.guestName,c.phoneNumber,c.checkInDate,c.checkOutDate,c.roomNumber,c.timeIn,c.timeOut
        FROM AppBundle:Contract c
     WHERE c.checkInDate BETWEEN  :check_in_date AND  :check_out_date
    AND c.checkOutDate BETWEEN :check_in_date AND :check_out_date
    AND c.roomNumber = :room'
        )
            ->setParameter('room', $room)
            ->setParameter('check_in_date', $check_in_date)
            ->setParameter('check_out_date', $check_out_date);

        // returns an array of Product objects
        return $query->getResult();
    }
}
