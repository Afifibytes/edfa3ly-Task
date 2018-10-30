<?php

namespace App;

class JSONAPI extends AbstractAPI
{
    /**
     * @return mixed
     */
    public function formatResponse()
    {
        return json_decode($this->data);
    }

}