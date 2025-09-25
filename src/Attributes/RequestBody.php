<?php

namespace Attributes;

use Attribute;

#[Attribute]
class RequestBody: string
{
    protected string $description;
    protected MediaTypeObject $content;

}