<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Budget
 *
 * @ORM\Table(name="budget")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BudgetRepository")
 */
class Budget
{
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     * @Assert\NotBlank( message = "Title should not be blank.")
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="decimal", precision=13, scale=4, nullable=false)
     * @Assert\Type("numeric", message = "Value should be numeric")
     */
    private $value;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="date", nullable=false)
     * @Assert\NotBlank(message = "Start date should not be blank.")
     * @Assert\Date(message = "Start date should be date")
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="date", nullable=false)
     * @Assert\NotBlank(message = "End date should not be blank.")
     * @Assert\Date(message = "End date should be date")
     */
    private $endDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


    /**
     * Set title
     *
     * @param string $title
     *
     * @return Budget
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return Budget
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return Budget
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     *
     * @return Budget
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Budget constructor.
     * @param string $title
     * @param string $value
     * @param string $startDate
     * @param string $endDate
     */
    public function __construct($title, $value, $startDate, $endDate)
    {
        $this->title = $title;
        $this->value = $value;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }
}
