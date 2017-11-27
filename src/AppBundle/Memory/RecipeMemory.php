<?php

namespace AppBundle\Memory;

use Symfony\Component\Config\Definition\Exception\Exception;

class RecipeMemory extends CSVMemory
{
    const CSV_DATA = './recipe-data.csv';

    public function __construct($file = self::CSV_DATA)
    {
        $this->file = $file;
        $this->readCSV();
    }

}