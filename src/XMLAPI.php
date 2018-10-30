<?php

namespace App;

class XMLAPI extends AbstractAPI
{
    /**
     * @return array|mixed
     */
    public function formatResponse()
    {
        $values = [];
        $parser = xml_parser_create();
        xml_parse_into_struct($parser, $this->data, $values);
        return $values;
    }

}