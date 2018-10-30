<?php

namespace App;

class CSVFile extends AbstractFile
{
    private $fileData = [];

    /**
     * @return array|string
     */
    public function processFile()
    {
        $file = fopen($this->path, "r");

        if(!$file)
        {
            return "Can't Open the File!";
        }

        while(!feof($file)) {
            array_push($this->fileData, fgetcsv($file));
        }
        fclose($file);

        return $this->fileData;
    }
}