<?php

namespace Jdikasa\Etl\Extractors;

use Jdikasa\Etl\Row;

class FixedWidth extends Extractor
{
    /**
     * Extractor columns.
     *
     * @var array
     */
    protected $columns;

    /**
     * Properties that can be set via the options method.
     *
     * @var array
     */
    protected $availableOptions = [
        'columns'
    ];

    /**
     * Extract data from the input.
     *
     * @return \Generator
     */
    public function extract()
    {
        $handle = fopen($this->input, 'r');

        while ($row = fgets($handle)) {
            yield new Row($this->makeRow($row));
        }

        fclose($handle);
    }

    /**
     * Converts a row string into array.
     *
     * @param  string  $row
     * @return array
     */
    public function makeRow($row)
    {
        $result = [];

        foreach ($this->columns as $column => $range) {
            $result[$column] = substr($row, $range[0], $range[1]);
        }

        return $result;
    }
}
