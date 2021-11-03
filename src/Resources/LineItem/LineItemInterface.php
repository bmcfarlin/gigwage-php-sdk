<?php

namespace Gigwage\Resources\LineItem;

class LineItemInterface
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

  public function update($id, $data)
  {
    $url = "/api/v1/line_items/$id";
    $data = ['line_item' => ['metadata' => $data]];
    return $this->_client->put($url, $data);
  }

}
