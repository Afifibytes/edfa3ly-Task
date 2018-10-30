<?php

namespace App;

class Consumer
{
    protected $dataSource;

    /**
     * Consumer constructor.
     * @param Consumable $consumable
     */
    public function __construct(Consumable $consumable)
    {
        $this->dataSource = $consumable;
    }

    /**
     * @return mixed
     */
    public function getProducts()
    {
        return $this->dataSource->getData();
    }

}