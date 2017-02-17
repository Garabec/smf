<?php

namespace Blog\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;
/**
 * Post
 *
 * @ORM\Table(name="post")
 * @ORM\Entity(repositoryClass="Blog\ModelBundle\Repository\PostRepository")
 */
 
class Post extends Timestampable
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
     * @ORM\Column(name="title", type="string", length=150)
     */
    private $title;
    
    
    /**
     * 
     * @var string
     * 
     *@Gedmo\Slug(fields={"title"}, unique=true) 
     *@ORM\Column(length=255)
     * 
     */
     private $slug;
     



    /**
     * @var string
     *
     * @ORM\Column(name="body", type="string", length=255)
     */
    private $body;

    
    /**
     * @var Author
     *
     * @ORM\ManyToOne(targetEntity="Author", inversedBy="posts")
     * $ORM\JoinColumn(name="author_id",referencedColumnName="id",nulleble=false)
     * @Assert\NotBlank()
     */
    private $author;
    
    
    /**
     * @var ArrayCollection()
     * 
     * @ORM\OneToMany(targetEntity="Comment",mappedBy="post",cascade={"remove"})
     **/
     
    private $comments;
    
   
    


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
     * Set title
     *
     * @param string $title
     *
     * @return Post
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
     * Set slug
     *
     * @param string $slug
     *
     * @return Post
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    } 
     
     
    /**
     * Set body
     *
     * @param string $body
     *
     * @return Post
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    

    /**
     * Set author
     *
     * @param \Blog\ModelBundle\Entity\Author $author
     *
     * @return Post
     */
    public function setAuthor(Author $author )
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return \Blog\ModelBundle\Entity\Author
     */
    public function getAuthor()
    {
        return $this->author;
    }

   
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add comment
     *
     * @param \Blog\ModelBundle\Entity\Comment $comment
     *
     * @return Post
     */
    public function addComment(\Blog\ModelBundle\Entity\Comment $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * Remove comment
     *
     * @param \Blog\ModelBundle\Entity\Comment $comment
     */
    public function removeComment(\Blog\ModelBundle\Entity\Comment $comment)
    {
        $this->comments->removeElement($comment);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComments()
    {
        return $this->comments;
    }
}
