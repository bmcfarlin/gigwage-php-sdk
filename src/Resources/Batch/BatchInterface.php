<?php

namespace Gigwage\Resources\Batch;

class BatchInterface
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

  public function get($id)
  {
    $url = "/api/v1/batches/$id";
    return $this->_client->get($url);
  }

  public function list()
  {
    $url = "/api/v1/batches";
    return $this->_client->get($url);
  }

  public function create($data)
  {
    $url = "/api/v1/batches";
    $data = ['batch' => $data];
    return $this->_client->post($url, $data);
  }

  public function payments($id)
  {
    $url = "/api/v1/batches/$id/payments";
    return $this->_client->get($url);
  }

}
