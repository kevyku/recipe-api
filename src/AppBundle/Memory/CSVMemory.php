<?php
/**
 * Created by PhpStorm.
 * User: chihhanku
 * Date: 17.11.17
 * Time: 21:17
 */

namespace AppBundle\Memory;


abstract class CSVMemory
{
    protected $file;

    protected $data;

    protected $header;

    protected function readCSV()
    {
        if (file_exists($this->file)) {
            $all_rows = array();
            $f = fopen($this->file, "r");
            // reset header
            $this->header = null;
            while ($row = fgetcsv($f)) {
                if ($this->header === null) {
                    $this->header = $row;
                    continue;
                }
                $all_rows[] = array_combine($this->header, $row);
            }
            $this->data = $all_rows;
            fclose($f);
        } else {
            die("CSV file does not exist");
        }
    }

    protected function writeCSV()
    {
        if (file_exists($this->file)) {
            $f = fopen($this->file, "w+");
            fputcsv($f, $this->header);
            foreach ($this->getData() as $row) {
                fputcsv($f, $row);
            }
            $stat = fstat($f);
            ftruncate($f, $stat['size'] - 1);
            fclose($f);
        }
    }

    protected function newId()
    {
        if (empty($this->data)) return 1;

        $max = 0;
        foreach ($this->data as $k => $v) {
            $max = max(array($max, $v['id']));
        }
        return ++$max;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param $id
     * @return array|null
     */
    public function retrieve($id)
    {
        foreach ($this->data as $row) {
            if ($row['id'] == $id) {
                return $row;
            }
        }
        return null;
    }

    /**
     * @param array $data
     * @return int
     */
    public function persist(array $data)
    {
        if (isset($data['id']) && $data['id']) {
            $data_new = array();
            foreach ($this->data as $row) {
                if ($row['id'] === $data['id']) {
                    foreach ($data as $key => $value) {
                        $row[$key] = $value;
                    }
                }
                $data_new[] = $row;
            }
            $this->data = $data_new;
            $this->writeCSV();
            return $data['id'];
        } else {
            $data['id'] = $this->newId();
            $f = fopen($this->file, "a");
            fputs($f, "\n");
            fputcsv($f, $data);

            // remove new line
            $stat = fstat($f);
            ftruncate($f, $stat['size'] - 1);
            fclose($f);
            $this->readCSV();
        }
        return $data['id'];
    }

}