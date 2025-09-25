<?php

namespace Attributes;

use Attribute;

#[Attribute]
class OperationObject
{
    protected string $ref;
    protected array $tags;
    protected string $summary;
    protected string $description;
    protected ExternalDocs|null $externalDocs = null;
    protected string $operationId;
    protected Parameters $parameters;
    protected bool $deprecated = false;
    protected array $security = [];
    protected array $servers = [];
}