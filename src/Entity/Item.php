<?php
// api/src/Entity/Book.php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Controller\CreateItemPublication;

/**
 * An item.
 *
 * @ORM\Entity
 *
 * @ApiResource
 *
 * @ApiResource(itemOperations={
 *   "get",
 *   "post_publication"={
 *       "method"="POST",
 *       "path"="/items/{id}/publication",
 *       "controller"=CreateItemPublication::class,
 *   }
 * })
 */
class Item
{
    /**
     * @var int The id of this item.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string The title of this item.
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    public $title;


    /**
     * @var \DateTimeInterface The publication date of this item.
     *
     * @ORM\Column(type="datetime")
     * @Assert\NotNull
     */
    public $created;

    /**
     * @var Category[] categories of this book
     *
     * @ORM\ManyToMany(targetEntity="Category", inversedBy="items", cascade={"persist"})
     */
    public $categories;

    public function __construct()
    {
        $this->categories = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}
