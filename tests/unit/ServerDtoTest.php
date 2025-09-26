<?php

class ServerDtoTest extends \PHPUnit\Framework\TestCase
{
    public function test_can_create_server()
    {
        $server = new \Sjonatas\OepnPhpApi\Server(
            'localhost',
            'some description',
            []
        );

        $this->assertEquals('localhost', $server->url);
        $this->assertEquals('some description', $server->description);
        $this->assertEmpty($server->variables);
    }

    public function test_can_create_server_from_array()
    {
        $server = \Sjonatas\OepnPhpApi\Server::fromArray([
            'url' => 'localhost',
            'description' => 'some description',
            'variables' => []
        ]);

        $this->assertEquals('localhost', $server->url);
        $this->assertEquals('some description', $server->description);
        $this->assertEmpty($server->variables);
    }
}