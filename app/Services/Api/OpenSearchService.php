<?php

namespace App\Services\Api;

use OpenSearch\Client;
use OpenSearch\ClientBuilder;

class OpenSearchService
{
    protected Client $client;
    public function __construct()
    {
        $this->client = (new ClientBuilder())
            ->setHosts(['https://localhost:9200'])
            ->setBasicAuthentication('admin', 'ZxCvB091@')
            ->setSSLVerification(false)
            ->build();
    }
}
