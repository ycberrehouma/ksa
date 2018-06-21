<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Guest;
use AppBundle\Entity\Cost;
use AppBundle\Entity\Contract;

class KsaController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {


        if (($request->getMethod() == Request::METHOD_POST) & (isset($_POST['submit']))) {

            $Guest = new Guest;
            $first_name = $request->request->get('first_name');
            $last_name = $request->request->get('last_name');
            $date_of_birth = $request->request->get('date_of_birth');
            $gender = $request->request->get('gender');
            $phone_number = $request->request->get('phone_number');
            $email_address = $request->request->get('email_address');
            $guests_numbers = $request->request->get('guests_number');
            $house = $request->request->get('house');
            $check_in_date = $request->request->get('check_in_date');
            $check_out_date = $request->request->get('check_out_date');
            $price = $request->request->get('price');
            $cost = $request->request->get('cost');
            $comment = $request->request->get('comment');
            $startDate = date("Y/m/d");
            $now = new\DateTime($startDate);

            $Guest->setFirstName($first_name);
            $Guest->setLastName($last_name);
            $Guest->setDateOfBirth($date_of_birth);
            $Guest->setGender($gender);
            $Guest->setPhoneNumber($phone_number);
            $Guest->setEmailAddress($email_address);
            $Guest->setGuestsNumber($guests_numbers);
            $Guest->setHouse($house);
            $Guest->setCheckInDate($check_in_date);
            $Guest->setCheckOutDate($check_out_date);
            $Guest->setPrice($price);
            $Guest->setCost($cost);
            $Guest->setComment($comment);
            $Guest->setCreatedOn($now);

            $em = $this->getDoctrine()->getManager();

            $em->persist($Guest);
            $em->flush();

            return $this->redirectToRoute('homepage');

        }
        return $this->render('main/index.twig');
    }

    /**
     * @Route("/arabic", name="arabic")
     *
     */
    public function arabicAction(Request $request)
    {

        $Guest = new Guest;
        if (($request->getMethod() == Request::METHOD_POST) & (isset($_POST['submit']))) {
            $first_name = $request->request->get('first_name');
            $last_name = $request->request->get('last_name');
            $date_of_birth = $request->request->get('date_of_birth');
            $gender = $request->request->get('gender');
            $phone_number = $request->request->get('phone_number');
            $email_address = $request->request->get('email_address');
            $guests_numbers = $request->request->get('guests_number');
            $house = $request->request->get('house');
            $check_in_date = $request->request->get('check_in_date');
            $check_out_date = $request->request->get('check_out_date');
            $price = $request->request->get('price');
            $cost = $request->request->get('cost');
            $comment = $request->request->get('comment');
            $now = new\DateTime('now');

            $Guest->setFirstName($first_name);
            $Guest->setLastName($last_name);
            $Guest->setDateOfBirth($date_of_birth);
            $Guest->setGender($gender);
            $Guest->setPhoneNumber($phone_number);
            $Guest->setEmailAddress($email_address);
            $Guest->setGuestsNumber($guests_numbers);
            $Guest->setHouse($house);
            $Guest->setCheckInDate($check_in_date);
            $Guest->setCheckOutDate($check_out_date);
            $Guest->setPrice($price);
            $Guest->setCost($cost);
            $Guest->setComment($comment);
            $Guest->setCreatedOn($now);

            $em = $this->getDoctrine()->getManager();

            $em->persist($Guest);
            $em->flush();

        }
        return $this->render('main/arabic.twig');
    }

    /**
     * @Route("/database", name="database")
     */
    public function databaseAction(Request $request)
    {

        $guest = $this->getDoctrine()
            ->getRepository('AppBundle:Guest')
            ->findAll();
        return $this->render('database/database.twig', array(
            'guests' => $guest
        ));

    }

    /**
     * @Route("/database-contract", name="database-contract")
     */
    public function databasecontractAction(Request $request)
    {

        $contract = $this->getDoctrine()
            ->getRepository('AppBundle:Contract')
            ->findAll();
        return $this->render('database/database-contract.twig', array(
            'contracts' => $contract
        ));

    }

    /**
     * @Route("/revenue", name="revenue")
     */
    public function revenueAction(Request $request)
    {


        $revenue = $this->getDoctrine()->getRepository('AppBundle:Contract')->getRevenue();
        $revenue = implode("|", $revenue[0]);

        $total_cost = $this->getDoctrine()->getRepository('AppBundle:Cost')->getTotalCosts();
        $total_cost = implode("|", $total_cost[0]);
        $net_profit = $revenue - $total_cost;

        return $this->render('database/revenue.twig', array(
            'revenue' => $revenue,
            'cost' => $total_cost,
            'profit' => $net_profit
        ));
    }

    /**
     * @Route("/revenue-on-range", name="revenue-on-range")
     */
    public function revenueonrangeAction(Request $request)
    {
//Get revenue range old version based on index
      /*  if (($request->getMethod() == Request::METHOD_POST)) {

            $date_in = $request->request->get('date_in');
            $date_out = $request->request->get('date_out');

            $revenue = $this->getDoctrine()->getRepository('AppBundle:Guest')->getRevenue_On_Range($date_in, $date_out);
            $revenue = implode("|", $revenue[0]);

            $cost = $this->getDoctrine()->getRepository('AppBundle:Cost')->getCost_On_Range($date_in, $date_out);
            $cost = implode("|", $cost[0]);

            $profit = $revenue - $cost;

            return $this->render('database/revenue-on-range.twig', array(
                'revenue' => $revenue,
                'cost' => $cost,
                'profit' => $profit
            ));
        }*/
//get revenue on range based on new version the contract version
        if (($request->getMethod() == Request::METHOD_POST)) {

            $date_in = $request->request->get('date_in');
            $date_out = $request->request->get('date_out');

            $revenue = $this->getDoctrine()->getRepository('AppBundle:Contract')->getRevenue_On_Range($date_in, $date_out);
            $revenue = implode("|", $revenue[0]);

            $cost = $this->getDoctrine()->getRepository('AppBundle:Cost')->getCost_On_Range($date_in, $date_out);
            $cost = implode("|", $cost[0]);

            $profit = $revenue - $cost;

            return $this->render('database/revenue-on-range.twig', array(
                'revenue' => $revenue,
                'cost' => $cost,
                'profit' => $profit
            ));
        }
        return $this->render('database/revenue-on-range.twig');
    }

/*
    /**
     * @Route("/availability", name="availability")
     */
 /*   public function availabilityAction(Request $request)
    {

        if (($request->getMethod() == Request::METHOD_POST)) {

            $house = $request->request->get('house');
            $check_in_date = $request->request->get('check_in_date');
            $check_out_date = $request->request->get('check_out_date');

            $house_availability = $this->getDoctrine()->getRepository('AppBundle:Guest')->checkHouseAvailability($house, $check_in_date, $check_out_date);

            $house_unavailable = "The selected house is available between those days";
            if (!empty($house_availability)) {
                $house_availability = implode("|", $house_availability[0]);
                $house_details = $this->getDoctrine()->getRepository('AppBundle:Guest')->fetchHouseDetails($house, $check_in_date, $check_out_date);
                return $this->render('database/availability.twig', array(
                    'house_availability' => $house_availability,
                    'house' => $house_details
                ));

            } else return $this->render('database/availability.twig', array(
                'house_unavailable' => $house_unavailable
            ));


        };

        return $this->render('database/availability.twig');
    }*/
    /**
     * @Route("/availability", name="availability")
     */
    public function availabilityAction(Request $request)
    {

        if (($request->getMethod() == Request::METHOD_POST)) {

            $house = $request->request->get('house');
            $check_in_date = $request->request->get('check_in_date');
            $check_out_date = $request->request->get('check_out_date');

            $house_availability = $this->getDoctrine()->getRepository('AppBundle:Contract')->checkHouseAvailability($house, $check_in_date, $check_out_date);

            $house_unavailable = "The selected house is available between those days";
            if (!empty($house_availability)) {
                $house_availability = implode("|", $house_availability[0]);
                $house_details = $this->getDoctrine()->getRepository('AppBundle:Contract')->fetchHouseDetails($house, $check_in_date, $check_out_date);
                return $this->render('database/availability.twig', array(
                    'house_availability' => $house_availability,
                    'house' => $house_details
                ));

            } else return $this->render('database/availability.twig', array(
                'house_unavailable' => $house_unavailable
            ));


        };

        return $this->render('database/availability.twig');
    }

    /**
     * @Route("/cost", name="cost")
     *
     */
    public function costAction(Request $request)
    {

        $cost_database = new Cost;
        if (($request->getMethod() == Request::METHOD_POST)) {

            $cost = $request->request->get('cost');
            $date = $request->request->get('date');
            $details = $request->request->get('details');
            $startDate = date("Y/m/d");
            $now = new\DateTime($startDate);


            $cost_database->setCost($cost);
            $cost_database->setDate($date);
            $cost_database->setDetails($details);
            $cost_database->setCreatedOn($now);

            $em = $this->getDoctrine()->getManager();

            $em->persist($cost_database);
            $em->flush();

        }

        return $this->render('database/cost.twig');

    }


    /**
     * @Route("/index-arabic", name="index-arabic")
     */
    public function indexarabicAction(Request $request)
    {


        if (($request->getMethod() == Request::METHOD_POST) & (isset($_POST['submit']))) {

            $Contract = new Contract;
            $guest_name = $request->request->get('guest_name');
            $card_date = $request->request->get('card_date');
            $card_id = $request->request->get('card_id');
            $card_location = $request->request->get('card_location');
            $gender = $request->request->get('gender');
            $phone_number = $request->request->get('phone_number');
            $email_address = $request->request->get('email_address');
            $guests_numbers = $request->request->get('guests_number');
            $room_number = $request->request->get('room_number');
            $check_in_date = $request->request->get('check_in_date');
            $check_out_date = $request->request->get('check_out_date');
            $time_in = $request->request->get('time_in');
            $time_out = $request->request->get('time_out');
            $price = $request->request->get('price');
            $deposit = $request->request->get('deposit');
            $comment = $request->request->get('comment');
            $startDate = date("Y/m/d");
            $now = new\DateTime($startDate);

            $Contract->setGuestName($guest_name);
            $Contract->setCardId($card_id);
            $Contract->setCardDate($card_date);
            $Contract->setCardLocation($card_location);
            $Contract->setGender($gender);
            $Contract->setPhoneNumber($phone_number);
            $Contract->setEmailAddress($email_address);
            $Contract->setGuestsNumber($guests_numbers);
            $Contract->setRoomNumber($room_number);
            $Contract->setCheckInDate($check_in_date);
            $Contract->setCheckOutDate($check_out_date);
            $Contract->setTimeIn($time_in);
            $Contract->setTimeOut($time_out);
            $Contract->setPrice($price);
            $Contract->setDeposit($deposit);
            $Contract->setComment($comment);
            $Contract->setCreatedOn($now);

            $em = $this->getDoctrine()->getManager();

            $em->persist($Contract);
            $em->flush();

            return $this->render('database/contract.twig', array(
                'guest_name' => $guest_name,
                'card_id' => $card_id,
                'card_date' => $card_date,
                'card_location' => $card_location,
                'phone_number' => $phone_number,
                'room_number' => $room_number,
                'price' => $price,
                'deposit' =>$deposit,
                'check_in_date' =>$check_in_date,
                'time_in' => $time_in,
                'time_out' => $time_out,
                'created_on' => $now,

            ));

        }
        return $this->render('main/index-arabic.twig');
    }

    /**
     * @Route("/contract", name="contract")
     */
    public function contractAction(Request $request)
    {
        return $this->render('database/contract.twig');
    }

    /**
     * @Route("/cost-input", name="cost-input")
     */
    public function costinputAction(Request $request)
    {
        if (($request->getMethod() == Request::METHOD_POST)) {

            $Cost = new Cost;

            $cost = $request->request->get('cost');
            $date = $request->request->get('date');
            $comment = $request->request->get('details');
            $startDate = date("Y/m/d");
            $now = new\DateTime($startDate);

            $Cost->setCost($cost);
            $Cost->setDate($date);
            $Cost->setDetails($comment);
            $Cost->setCreatedOn($now);

            $em = $this->getDoctrine()->getManager();

            $em->persist($Cost);
            $em->flush();

            return $this->redirectToRoute('cost-input');
        }

        return $this->render('main/cost.twig');
    }
}