<?php

namespace TodoApp\TodoBundle\Entity;

use Symfony\Component\Validator\Constraints as Validate;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Cocur\Slugify\Slugify;


/**
 * @ORM\Entity
 * @ORM\Table(name="category")
 */
class Category
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
     * @var string
     *
     * @ORM\Column(name="url", type="string")
     */
    private $url;

    /**
     * @var Task
     *
     * @ORM\OneToMany(targetEntity="TodoApp\TodoBundle\Entity\Task", mappedBy="category", cascade={"persist"})
     */
    public $tasks;


    /*
     * Constructor
     */


    public function __construct()
    {
        $this->tasks = new ArrayCollection();
    }


    /*
     * Getters
     */


    /**
     * @return ArrayCollection|Task
     */
    public function getTasks()
    {
        return $this->tasks;
    }

    /**
     * @return int
     */
    public function getTasksTotal()
    {
        return $this->getTasks()->count();
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }


    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }


    /*
     * Setters
     */


    /**
     * @param string $title
     * @return Category
     */
    public function setTitle($title)
    {
        $this->title = $title;
        $this->url   = $this->setUrl($title);

        return $this;
    }

    /**
     * @param string $url
     * @return Category
     */
    private function setUrl($url)
    {
        $slugify = new Slugify();

        return $slugify->slugify($url);
    }

}