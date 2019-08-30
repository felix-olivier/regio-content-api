<?php
// api/src/Controller/CreateItemPublication.php

namespace App\Controller;

use App\Entity\Item;
use Symfony\Component\Routing\Annotation\Route;

class CreateItemPublication
{
    private $itemPublisherHandler;
//
//    public function __construct(ItemPublishingHandler $itemPublisherHandler)
//    {
//        $this->itemPublisherHandler = $itemPublisherHandler;
//    }

    /**
     * @Route(
     *     name="book_post_publication",
     *     path="/books/{id}/publication",
     *     methods={"POST"},
     *     defaults={
     *         "_api_resource_class"=Book::class,
     *         "_api_item_operation_name"="post_publication"
     *     }
     * )
     */
    public function __invoke(Item $data): Item
    {

//        $this->itemPublisherHandler->handle($data);

        return $data;
    }
}