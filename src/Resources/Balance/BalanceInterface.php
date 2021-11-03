<?php

namespace Gigwage\Resources\Balance;

class BalanceInterface
{

  private $_client;

  function __construct($client)
  {
    $this->_client = $client;
  }

  function __toString()
  {
    return get_class($this);
  }

  public function list()
  {
    $url = "/api/v1/balance";
    return $this->_client->get($url);
  }

}
