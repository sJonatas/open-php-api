<?php

namespace Enums;

enum HttpMethod: string
{
    case GET = 'get';
    case POST = 'post';
    case PUT = 'put';
    case DELETE = 'delete';
    case PATCH = 'patch';
    case OPTIONS = 'options';
    case HEAD = 'head';
    case TRACE = 'trace';
}