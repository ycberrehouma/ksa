<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Guest
 *
 * @ORM\Table(name="guest")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GuestRepository")
 */
class Guest
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=35)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=35)
     */
    private $lastName;

    /**
     * @var \String
     *
     * @ORM\Column(name="date_of_birth", type="string", length=35)
     */
    private $dateOfBirth;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=1)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_number", type="string", length=10)
     */
    private $phoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="email_address", type="string", length=255, nullable=true)
     */
    private $emailAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="guests_number", type="string", length=2)
     */
    private $guestsNumber;

    /**
     * @var \String
     *
     * @ORM\Column(name="house", type="string", length=35)
     */
    private $house;

    /**
     * @var \String
     *
     * @ORM\Column(name="check_in_date", type="string", length=35)
     */
    private $checkInDate;

    /**
     * @var \String
     *
     * @ORM\Column(name="check_out_date", type="string", length=35)
     */
    private $checkOutDate;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="string", length=255)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="cost", type="string", length=255)
     */

    private $cost;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255)
     */
    private $comment;

    /**
     * @var \Date
     *
     * @ORM\Column(name="created_on", type="date")
     */
    private $createdOn;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Guest
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Guest
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set dateOfBirth
     *
     * @param \String $dateOfBirth
     *
     * @return Guest
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    /**
     * Get dateOfBirth
     *
     * @return \String
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return Guest
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     *
     * @return Guest
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set emailAddress
     *
     * @param string $emailAddress
     *
     * @return Guest
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    /**
     * Get emailAddress
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Set guestsNumber
     *
     * @param string $guestsNumber
     *
     * @return Guest
     */
    public function setGuestsNumber($guestsNumber)
    {
        $this->guestsNumber = $guestsNumber;

        return $this;
    }

    /**
     * Get guestsNumber
     *
     * @return string
     */
    public function getGuestsNumber()
    {
        return $this->guestsNumber;
    }

    /**
     * Set house
     *
     * @param \String $house
     *
     * @return Guest
     */
    public function setHouse($house)
    {
        $this->house = $house;

        return $this;
    }

    /**
     * Get house
     *
     * @return \String
     */
    public function getHouse()
    {
        return $this->house;
    }

    /**
     * Set checkInDate
     *
     * @param \String $checkInDate
     *
     * @return Guest
     */
    public function setCheckInDate($checkInDate)
    {
        $this->checkInDate = $checkInDate;

        return $this;
    }

    /**
     * Get checkInDate
     *
     * @return \String
     */
    public function getCheckInDate()
    {
        return $this->checkInDate;
    }

    /**
     * Set checkOutDate
     *
     * @param \String $checkOutDate
     *
     * @return Guest
     */
    public function setCheckOutDate($checkOutDate)
    {
        $this->checkOutDate = $checkOutDate;

        return $this;
    }

    /**
     * Get checkOutDate
     *
     * @return \String
     */
    public function getCheckOutDate()
    {
        return $this->checkOutDate;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Guest
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set cost
     *
     * @param string $cost
     *
     * @return Guest
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return string
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Guest
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set createdOn
     *
     * @param \Date $createdOn
     *
     * @return Guest
     */
    public function setCreatedOn($createdOn)
    {
        $this->createdOn = $createdOn;

        return $this;
    }

    /**
     * Get createdOn
     *
     * @return \Date
     */
    public function getCreatedOn()
    {
        return $this->createdOn;
    }
}

