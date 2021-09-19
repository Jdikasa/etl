<?php

namespace Jdikasa\Etl\Transformers;

use Jdikasa\Etl\Row;
use Jdikasa\Etl\Step;

abstract class Transformer extends Step
{
    /**
     * Transform the given row.
     *
     * @param  \Jdikasa\Etl\Row  $row
     * @return void
     */
    abstract public function transform(Row $row);
}
