<?php

namespace Gigwage\Resources\Ten99;

class Ten99Interface
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

  public function list($page = 1, $page_per = 200, $offset = 0)
  {
    $url = "/api/v1/1099s";
    $data = ['page' => $page, 'page_per' => $page_per, 'offset' => $offset];
    return $this->_client->get($url);
  }

  public function get($id)
  {
    $url = "/api/v1/1099s/$id";
    return $this->_client->get($url);
  }

  public function retrieve($id)
  {
    $url = "/api/v1/1099s/$id/retrieve";
    return $this->_client->get($url);
  }

}


