<?php

class OpenPHP
{
    protected string $openApiLicense;
    protected array $info;

    /**
     * @param Server[] $servers
     */
    public function __construct(array $servers)
    {
        $this->openApiLicense = getenv('OPEN_OSD_VERSION') ?? '3.1';
        $this->info = [
            'title' => getenv('OPEN_API_TITLE') ?? '?',
            'summary' => getenv('OPEN_API_SUMMARY')  ?? '',
            'description' => getenv('OPEN_API_DESCRIPTION') ?? '',
            'termsOfService' => getenv('OPEN_API_TERMS_OF_SERVICE') ?? '',
            'contact' => [
                'name' => getenv('OPEN_API_CONTACT_NAME') ?? '',
                'url' => getenv('OPEN_API_CONTACT_URL') ?? '',
                'email' => getenv('OPEN_API_CONTACT_EMAIL') ?? '',
            ],
            'license' => [
                'name' => getenv('OPEN_API_LICENSE_NAME') ?? '?',
                'url' => getenv('OPEN_API_LICENSE_URL') ?? '',
                'identifier' => getenv('OPEN_API_LICENSE_ID') ?? '',
            ],
            'version' => getenv('OPEN_API_VERSION') ?? '1.0',
        ];
    }
}