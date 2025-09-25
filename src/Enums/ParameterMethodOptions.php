<?php

namespace Enums;

enum ParameterMethodOptions: string
{
    case Query = 'query';
    case Header = 'header';
    case Path = 'path';
    case Cookie = 'cookie';
}