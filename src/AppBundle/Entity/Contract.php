<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contract
 *
 * @ORM\Table(name="contract")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ContractRepository")
 */
class Contract
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
     * @ORM\Column(name="guest_name", type="string", length=255)
     */
    private $guestName;

    /**
     * @var int
     *
     * @ORM\Column(name="card_id", type="integer")
     */
    private $cardId;

    /**
     * @var string
     *
     * @ORM\Column(name="card_date", type="string", length=255, nullable=true)
     */
    private $cardDate;

    /**
     * @var string
     *
     * @ORM\Column(name="card_location", type="string", length=255, nullable=true)
     */
    private $cardLocation;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=255, nullable=true)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_number", type="string", length=255)
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
     * @ORM\Column(name="guests_number", type="string", length=255, nullable=true)
     */
    private $guestsNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="room_number", type="string", length=255)
     */
    private $roomNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="check_in_date", type="string", length=255)
     */
    private $checkInDate;

    /**
     * @var string
     *
     * @ORM\Column(name="check_out_date", type="string", length=255)
     */
    private $checkOutDate;

    /**
     * @var string
     *
     * @ORM\Column(name="time_in", type="string", length=255)
     */
    private $timeIn;

    /**
     * @var string
     *
     * @ORM\Column(name="time_out", type="string", length=255)
     */
    private $timeOut;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="string", length=255)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="deposit", type="string", length=255)
     */
    private $deposit;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255)
     */
    private $comment;

    /**
     * @var \DateTime
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
     * Set guestName
     *
     * @param string $guestName
     *
     * @return Contract
     */
    public function setGuestName($guestName)
    {
        $this->guestName = $guestName;

        return $this;
    }

    /**
     * Get guestName
     *
     * @return string
     */
    public function getGuestName()
    {
        return $this->guestName;
    }

    /**
     * Set cardId
     *
     * @param integer $cardId
     *
     * @return Contract
     */
    public function setCardId($cardId)
    {
        $this->cardId = $cardId;

        return $this;
    }

    /**
     * Get cardId
     *
     * @return int
     */
    public function getCardId()
    {
        return $this->cardId;
    }

    /**
     * Set cardDate
     *
     * @param string $cardDate
     *
     * @return Contract
     */
    public function setCardDate($cardDate)
    {
        $this->cardDate = $cardDate;

        return $this;
    }

    /**
     * Get cardDate
     *
     * @return string
     */
    public function getCardDate()
    {
        return $this->cardDate;
    }

    /**
     * Set cardLocation
     *
     * @param string $cardLocation
     *
     * @return Contract
     */
    public function setCardLocation($cardLocation)
    {
        $this->cardLocation = $cardLocation;

        return $this;
    }

    /**
     * Get cardLocation
     *
     * @return string
     */
    public function getCardLocation()
    {
        return $this->cardLocation;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return Contract
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
     * @return Contract
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
     * @return Contract
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
     * @return Contract
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
     * Set roomNumber
     *
     * @param string $roomNumber
     *
     * @return Contract
     */
    public function setRoomNumber($roomNumber)
    {
        $this->roomNumber = $roomNumber;

        return $this;
    }

    /**
     * Get roomNumber
     *
     * @return string
     */
    public function getRoomNumber()
    {
        return $this->roomNumber;
    }

    /**
     * Set checkInDate
     *
     * @param string $checkInDate
     *
     * @return Contract
     */
    public function setCheckInDate($checkInDate)
    {
        $this->checkInDate = $checkInDate;

        return $this;
    }

    /**
     * Get checkInDate
     *
     * @return string
     */
    public function getCheckInDate()
    {
        return $this->checkInDate;
    }

    /**
     * Set checkOutDate
     *
     * @param string $checkOutDate
     *
     * @return Contract
     */
    public function setCheckOutDate($checkOutDate)
    {
        $this->checkOutDate = $checkOutDate;

        return $this;
    }

    /**
     * Get checkOutDate
     *
     * @return string
     */
    public function getCheckOutDate()
    {
        return $this->checkOutDate;
    }

    /**
     * Set timeIn
     *
     * @param string $timeIn
     *
     * @return Contract
     */
    public function setTimeIn($timeIn)
    {
        $this->timeIn = $timeIn;

        return $this;
    }

    /**
     * Get timeIn
     *
     * @return string
     */
    public function getTimeIn()
    {
        return $this->timeIn;
    }

    /**
     * Set timeOut
     *
     * @param string $timeOut
     *
     * @return Contract
     */
    public function setTimeOut($timeOut)
    {
        $this->timeOut = $timeOut;

        return $this;
    }

    /**
     * Get timeOut
     *
     * @return string
     */
    public function getTimeOut()
    {
        return $this->timeOut;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Contract
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
     * Set deposit
     *
     * @param string $deposit
     *
     * @return Contract
     */
    public function setDeposit($deposit)
    {
        $this->deposit = $deposit;

        return $this;
    }

    /**
     * Get deposit
     *
     * @return string
     */
    public function getDeposit()
    {
        return $this->deposit;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Contract
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
     * @param \DateTime $createdOn
     *
     * @return Contract
     */
    public function setCreatedOn($createdOn)
    {
        $this->createdOn = $createdOn;

        return $this;
    }

    /**
     * Get createdOn
     *
     * @return \DateTime
     */
    public function getCreatedOn()
    {
        return $this->createdOn;
    }
}

