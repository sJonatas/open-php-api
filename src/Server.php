<?php

#[Attribute]
class Server
{
    protected string $url;
    protected string $description;
    protected array $variables;

    private function __construct(string $url, string $description, array $variables)
    {
        $this->url = $url;
        $this->description = $description;
        $this->variables = $variables;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getVariables()
    {
        return $this->variables;
    }

    public static function make(string $url, string $description = null, array $variables = null)
    {
        return static::__construct($url, $description, $variables);
    }
}