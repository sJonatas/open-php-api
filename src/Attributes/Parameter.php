<?php

namespace Attributes;

class Parameter
{
    protected string $name;
    protected string $description;
    protected string $in;
    protected bool $required = false;
    protected bool $deprecated = false;
}