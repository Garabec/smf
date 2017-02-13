<?php

namespace Blog\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Host
 *
 * @ORM\Table(name="host")
 * @ORM\Entity(repositoryClass="Blog\CoreBundle\Repository\HostRepository")
 */
class Host
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
     * @var int
     *
     * @ORM\Column(name="name", type="integer", nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=160)
     */
    private $author;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="both_date", type="datetime")
     */
    private $bothDate;


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
     * Set name
     *
     * @param integer $name
     *
     * @return Host
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return int
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set author
     *
     * @param string $author
     *
     * @return Host
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set bothDate
     *
     * @param \DateTime $bothDate
     *
     * @return Host
     */
    public function setBothDate($bothDate)
    {
        $this->bothDate = $bothDate;

        return $this;
    }

    /**
     * Get bothDate
     *
     * @return \DateTime
     */
    public function getBothDate()
    {
        return $this->bothDate;
    }
}

