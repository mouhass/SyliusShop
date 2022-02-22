<?php

namespace App\Entity;

use App\Repository\BookRepository;
use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Resource\Model\ResourceInterface;

/**
 * @ORM\Entity(repositoryClass=BookRepository::class)
 *
 */

class Book implements ResourceInterface
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $title;

    /**
     * @ORM\ManyToOne(targetEntity=Author::class, inversedBy="books")
     * @ORM\JoinColumn(nullable=false)
     */
    private $writtenBy;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @return mixed
     */
    public function getWrittenBy()
    {
        return $this->writtenBy;
    }

    /**
     * @param mixed $writtenBy
     * @return Book
     */
    public function setWrittenBy($writtenBy)
    {
        $this->writtenBy = $writtenBy;
        return $this;
    }



    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }


    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }


    public function getId(): ?int
    {
        return $this->id;
    }
}
