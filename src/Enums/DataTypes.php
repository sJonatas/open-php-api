<?php

namespace Enums;

enum DataTypes: string
{
    case Null = 'null';
    case Boolean = 'boolean';
    case Integer = 'integer';
    case Number = 'number';
    case String = 'string';
    case Object = 'object';
    case Array = 'array';
}