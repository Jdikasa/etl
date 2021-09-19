<?php

namespace Jdikasa\Etl\Transformers;

use Jdikasa\Etl\Row;

class JsonEncode extends Transformer
{
    /**
     * Transformer columns.
     *
     * @var array
     */
    protected $columns = [];

    /**
     * Options.
     *
     * @var int
     */
    protected $options = 0;

    /**
     * Maximum depth.
     *
     * @var string
     */
    protected $depth = 512;

    /**
     * Properties that can be set via the options method.
     *
     * @var array
     */
    protected $availableOptions = [
        'columns', 'depth', 'options'
    ];

    /**
     * Transform the given row.
     *
     * @param  \Jdikasa\Etl\Row  $row
     * @return void
     */
    public function transform(Row $row)
    {
        $row->transform($this->columns, function ($column) {
            return json_encode($column, $this->options, $this->depth);
        });
    }
}
