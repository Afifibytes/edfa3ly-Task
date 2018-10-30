<?php

namespace App;

class JSONFile extends AbstractFile
{
    private $fileData = "";

    /**
     * @return mixed|string
     */
    public function processFile()
    {
        $file = fopen($this->path, "r");

        if(!$file)
        {
            return "Can't Open the File!";
        }

        while(!feof($file)) {
           $this->fileData .= fgets($file);
        }
        fclose($file);

        return json_decode($this->fileData, true);
    }
}