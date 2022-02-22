<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

use Sylius\Component\Resource\Model\ResourceInterface;

/**
 * @ORM\Entity(repositoryClass=AuthorRepository::class)
 *
 */
class Author implements ResourceInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $name;
    /**
     * @ORM\OneToMany(targetEntity=Book::class, mappedBy="writtenBy", orphanRemoval=true)
     */
    private $books;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Author
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBooks()
    {
        return $this->books;
    }

    /**
     * @param mixed $books
     * @return Author
     */
    public function setBooks($books)
    {
        $this->books = $books;
        return $this;
    }
    public function __toString()
    {
        return $this->name;
    }



}
