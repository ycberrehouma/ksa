<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Guest;

class KsaController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
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
            $check_in_date = $request->request->get('check_in_date');
            $check_out_date = $request->request->get('check_out_date');
            $price = $request->request->get('price');
            $comment = $request->request->get('comment');
            $now = new\DateTime('now');

            $Guest->setFirstName($first_name);
            $Guest->setLastName($last_name);
            $Guest->setDateOfBirth($date_of_birth);
            $Guest->setGender($gender);
            $Guest->setPhoneNumber($phone_number);
            $Guest->setEmailAddress($email_address);
            $Guest->setGuestsNumber($guests_numbers);
            $Guest->setCheckInDate($check_in_date);
            $Guest->setCheckOutDate($check_out_date);
            $Guest->setPrice($price);
            $Guest->setComment($comment);
           $Guest->setCreatedOn($now);

            $em = $this->getDoctrine()->getManager();

            $em->persist($Guest);
            $em->flush();

        }
        return $this->render('main/index.twig');
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
}
