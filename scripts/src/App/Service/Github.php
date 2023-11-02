<?php

declare(strict_types=1);

namespace Console\App\Service;

use Console\App\Service\Github\Filters;
use Exception;
use Github\Client;
use Github\Exception\RuntimeException;
use League\Flysystem\Filesystem;

class Github
{
    /**
     * @var Client;
     */
    protected $client;

    public function __construct(string $ghToken = null)
    {
        $this->client = new Client();
        if (!empty($ghToken)) {
            $this->client->authenticate($ghToken, null, Client::AUTH_ACCESS_TOKEN);
        }
    }

    public function getClient(): Client
    {
        return $this->client;
    }
}
