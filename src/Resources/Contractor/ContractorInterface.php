<?php

namespace Gigwage\Resources\Contractor;

class ContractorInterface
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

  public function get($id, $full = false, $include_ssn = false)
  {
    $full = $full?1:0;
    $include_ssn = $include_ssn?1:0;
    $url = "/api/v1/contractors/$id";
    $data = ['full' => $full, 'include_ssn' => $include_ssn];
    return $this->_client->get($url, $data);
  }

  public function list($size = 200, $page = 1)
  {
    $url = "/api/v1/contractors";
    $data = ['size' => $size, 'page' => $page];
    return $this->_client->get($url, $data);
  }

  public function create($data)
  {
    $url = "/api/v1/contractors";
    $data = ['contractor' => $data];
    return $this->_client->post($url, $data);
  }

  public function kyc($id, $data)
  {
    $url = "/api/v1/contractors/$id/kyc";
    //$data['id'] = $id;
    $data = ['contractor' => $data];
    return $this->_client->post($url, $data);
  }

  public function update($id, $data)
  {
    $url = "/api/v1/contractors/$id";
    $data = ['contractor' => $data];
    return $this->_client->patch($url, $data);
  }

  public function invite($id)
  {
    $url = "/api/v1/contractors/$id/invite";
    return $this->_client->post($url);
  }

  public function delete($id)
  {
    $url = "/api/v1/contractors/$id";
    return $this->_client->post($url, [], 'DELETE');
  }

  public function invitations($id)
  {
    $url = "/api/v1/contractors/$id/invitations";
    return $this->_client->post($url);
  }

  public function identity_document($id, $data)
  {
    $url = "/api/v1/contractors/$id/identity_document";
    $data = ['identity_document' => $data];
    return $this->_client->post($url, $data);
  }



}
