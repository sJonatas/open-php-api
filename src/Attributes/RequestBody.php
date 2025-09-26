<?php

namespace Attributes;

use Attribute;

#[Attribute]
class RequestBody
{
    protected string $description;
    protected  $content;//MediaTypeObject

}