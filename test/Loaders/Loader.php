<?php

namespace Jdikasa\Etl\Loaders;

use Jdikasa\Etl\Row;
use Jdikasa\Etl\Step;

abstract class Loader extends Step
{
    /**
     * The loader output.
     *
     * @var mixed
     */
    protected $output;

    /**
     * Set the loader output.
     *
     * @param  mixed  $output
     * @return $this
     */
    public function output($output)
    {
        $this->output = $output;

        return $this;
    }

    /**
     * Load the given row.
     *
     * @param  \Jdikasa\Etl\Row  $row
     * @return void
     */
    abstract public function load(Row $row);
}
