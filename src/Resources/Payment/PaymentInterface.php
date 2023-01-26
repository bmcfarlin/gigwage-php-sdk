<?php

namespace Gigwage\Resources\Payment;

class PaymentInterface
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

  public function list($size = 200, $page = 1, $contractor_id = null)
  {
    $url = "/api/v1/payments";
    $data = ['size' => $size, 'page' => $page];
    if($contractor_id){
      $data = ['size' => $size, 'page' => $page, 'contractor_id' => $contractor_id];
    }
    return $this->_client->get($url, $data);
  }

  public function get($id)
  {
    $url = "/api/v1/payments/$id";
    return $this->_client->get($url);
  }

  public function create($data)
  {
    $url = "/api/v1/payments";
    $data = ['payment' => $data];
    return $this->_client->post($url, $data);
  }

  public function update($id, $data)
  {
    $url = "/api/v1/payments/$id";
    $data = ['payment' => ['metadata' => $data]];
    return $this->_client->put($url, $data);
  }

  public function delete($id)
  {
    $url = "/api/v1/payments/$id";
    return $this->_client->delete($url);
  }

}
