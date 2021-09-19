<?php

use Jdikasa\Etl\Container;

$container = Container::getInstance();

// Database
$container->singleton(Jdikasa\Etl\Database\Manager::class);
$container->alias(Jdikasa\Etl\Database\Manager::class, 'db');

// Extractors
$container->bind('collection_extractor', Jdikasa\Etl\Extractors\Collection::class);
$container->bind('csv_extractor', Jdikasa\Etl\Extractors\Csv::class);
$container->bind('fixed_width_extractor', Jdikasa\Etl\Extractors\FixedWidth::class);
$container->bind('json_extractor', Jdikasa\Etl\Extractors\Json::class);
$container->bind('query_extractor', Jdikasa\Etl\Extractors\Query::class);
$container->bind('table_extractor', Jdikasa\Etl\Extractors\Table::class);
$container->bind('xml_extractor', Jdikasa\Etl\Extractors\Xml::class);

// Transformers
$container->bind('callback_transformer', Jdikasa\Etl\Transformers\Callback::class);
$container->bind('convert_case_transformer', Jdikasa\Etl\Transformers\ConvertCase::class);
$container->bind('json_decode_transformer', Jdikasa\Etl\Transformers\JsonDecode::class);
$container->bind('json_encode_transformer', Jdikasa\Etl\Transformers\JsonEncode::class);
$container->bind('number_format_transformer', Jdikasa\Etl\Transformers\NumberFormat::class);
$container->bind('pad_transformer', Jdikasa\Etl\Transformers\Pad::class);
$container->bind('rename_columns_transformer', Jdikasa\Etl\Transformers\RenameColumns::class);
$container->bind('replace_transformer', Jdikasa\Etl\Transformers\Replace::class);
$container->bind('trim_transformer', Jdikasa\Etl\Transformers\Trim::class);
$container->bind('unique_rows_transformer', Jdikasa\Etl\Transformers\UniqueRows::class);

// Loaders
$container->bind('insert_loader', Jdikasa\Etl\Loaders\Insert::class);
$container->bind('insert_update_loader', Jdikasa\Etl\Loaders\InsertUpdate::class);
