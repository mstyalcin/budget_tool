<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Initiative
 *
 * @ORM\Table(name="initiative")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\InitiativeRepository")
 */
class Initiative
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
     * @ORM\Column(name="value", type="float", precision=13, scale=4, nullable=false)
     * @Assert\Type("numeric", message = "Value should be numeric")
     */
    private $value;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * Initiative constructor.
     * @param string $title
     * @param string $value
     */
    public function __construct($title, $value)
    {
        $this->title = $title;
        $this->value = $value;
    }


    /**
     * Set title
     *
     * @param string $title
     *
     * @return Initiative
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
     * @return Initiative
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }


}
