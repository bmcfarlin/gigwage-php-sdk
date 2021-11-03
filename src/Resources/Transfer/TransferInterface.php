<?php

namespace Gigwage\Resources\Transfer;

class TransferInterface
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
    $url = "/api/v1/transfers";
    return $this->_client->get($url);
  }

  public function get($id)
  {
    $url = "/api/v1/transfers/$id";
    return $this->_client->get($url);
  }

  public function create($data)
  {
    $url = "/api/v1/transfers";
    $data = ['transfer' => $data];
    return $this->_client->post($url, $data);
  }

  public function delete($id)
  {
    $url = "/api/v1/transfers/$id";
    return $this->_client->delete($url);
  }

}
