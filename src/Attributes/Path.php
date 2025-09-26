<?php

namespace Sjonatas\OepnPhpApi\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_FUNCTION)]
class Path
{
    public $function;
    public $path;
    protected $summary;
    protected $description;
}