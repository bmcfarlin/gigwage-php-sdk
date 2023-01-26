<?php

namespace Gigwage\Resources\BankAccount;

class BankAccountInterface
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

  public function list($contractor_id)
  {
    $url = "/api/v1/contractors/$contractor_id/accounts";
    return $this->_client->get($url);
  }

  public function get($contractor_id, $account_id)
  {
    $url = "/api/v1/contractors/$contractor_id/accounts/$account_id";
    return $this->_client->get($url);
  }

  public function create($contractor_id, $data)
  {
    $url = "/api/v1/contractors/$contractor_id/accounts";
    $data = ['account' => $data];
    return $this->_client->post($url, $data);
  }

  public function delete($contractor_id, $account_id)
  {
    $url = "/api/v1/contractors/$contractor_id/accounts/$account_id";
    return $this->_client->delete($url);
  }

}
