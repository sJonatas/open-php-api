<?php

namespace Sjonatas\OepnPhpApi;

#[Attribute]
class Server
{
    public function __construct(
        public readonly string $url,
        public readonly string $description,
        public readonly array $variables
    ) {}

    public static function fromArray(array $data): static
    {
        return new Server(
            $data['url'],
            $data['description'],
            $data['variables']
        );
    }
}