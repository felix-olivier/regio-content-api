<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * A category.
 *
 * @ORM\Entity
 *
 * @ApiResource
 */
class Category
{
    /**
     * @var int The id of this category.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;



    /**
     * @var string the name of this category
     *
     * @ORM\Column(type="text")
     * @Assert\NotBlank
     */
    public $name;



    /**
     * @var Item The items with this category.
     *
     * @ORM\ManyToOne(targetEntity="Item", inversedBy="categories")
     */
    public $items;

    public function getId(): ?int
    {
        return $this->id;
    }
}
