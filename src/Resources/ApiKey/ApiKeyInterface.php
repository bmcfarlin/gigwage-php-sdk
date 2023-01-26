<?php

namespace Gigwage\Resources\ApiKey;

class ApiKeyInterface
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
    $url = "/api/v1/api_keys";
    return $this->_client->get($url);
  }

  public function get($key)
  {
    $url = "/api/v1/api_keys/$key";
    return $this->_client->get($url);
  }

  public function create($data)
  {
    $url = "/api/v1/api_keys";
    $data = ['api_key' => $data];
    return $this->_client->post($url, $data);
  }

  public function delete($key)
  {
    $url = "/api/v1/api_keys/$key";
    return $this->_client->delete($url);
  }

}
