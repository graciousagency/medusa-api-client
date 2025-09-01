<?php

namespace Gracious\MedusaApiClientBundle\Factory;

use Psr\Http\Client\ClientInterface;


class HttpClientFactory
{
  public function __invoke(): ClientInterface
  {
      return \Http\Discovery\Psr18ClientDiscovery::find();
  }
}
