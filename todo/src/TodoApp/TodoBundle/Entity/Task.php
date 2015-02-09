<?php

namespace TodoApp\TodoBundle\Entity;

use Symfony\Component\Validator\Constraints as Validate;
use Doctrine\ORM\Mapping as ORM;
use Cocur\Slugify\Slugify;

/**
 * @ORM\Entity
 * @ORM\Table(name="task")
 */
class Task
{
    /*
     *  Attributes
     */


    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string")
     * @Validate\NotBlank()
     * @Validate\NotNull()
     */
    private $title;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creating_date", type="datetime")
     * @Validate\NotNull()
     * @Validate\NotBlank()
     */
    private $creatingDate;

    /**
     * @var string
     *
     * @ORM\Column(name="due_date", type="string", nullable=true)
     */
    private $dueDate = null;

    /**
     * @var integer
     */
    private $categoryId;

    /**
     * @var Category
     *
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="tasks")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     * @Validate\NotNull()
     */
    private $category;


    /*
     *  Constructor
     */


    public function __construct()
    {
        $this->creatingDate = new \DateTime('now');
    }


    /*
     *  Getters
     */


    public function getCategory()
    {
        $this->category;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return integer
     */
    public function getCategoryID()
    {
        return $this->category->getId();
    }

    /**
     * @return string
     */
    public function getCategoryUrl()
    {
        return $this->category->getUrl();
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return \DateTime
     */
    public function getCreatingDate()
    {
        return $this->creatingDate;
    }

    /**
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }


    /*
     *  Setters
     */


    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @param string $title
     * @return Task
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @param string $date
     * @return Task
     */
    public function setDueDate($date = null)
    {
        $this->dueDate = $date;

        return $this;
    }
}

