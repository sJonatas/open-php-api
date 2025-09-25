<?php

namespace Attributes;

use Attribute;

#[Attribute]
class Path
{
    protected $path;
    protected $summary;
    protected $description;
}