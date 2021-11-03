<?php

namespace GigWage;

use GigWage\Resources\ApiKey\ApiKeyInterface;
use GigWage\Resources\BankAccount\BankAccountInterface;
use GigWage\Resources\LineItem\LineItemInterface;
use GigWage\Resources\Balance\BalanceInterface;
use GigWage\Resources\Transfer\TransferInterface;
use GigWage\Resources\Payment\PaymentInterface;
use GigWage\Resources\Contractor\ContractorInterface;
use GigWage\Resources\Batch\BatchInterface;

class Client
{
  private $_contractor;
  private $_batch;
  private $_payment;
  private $_transfer;
  private $_balance;
  private $_lineitem;
  private $_bankaccount;
  private $_apikey;
  private $_client;

  function __construct($api_key, $api_secret, $base_url)
  {
    $this->_client = new RestClient($api_key, $api_secret, $base_url);
  }

  function __toString()
  {
    return get_class($this);
  }

  public function __get($name)
  {
    $name = ucfirst($name);
    $method = sprintf("get%s", $name);
    if(method_exists($this, $method))
    {
      return $this->$method();
    }
    throw new \Exception('Unknown resource ' . $name);
  }

  function getContractor()
  {
    if(empty($this->_contractor))
    {
      $this->_contractor = new ContractorInterface($this->_client);
    }
    return $this->_contractor;
  }

  function getBatch()
  {
    if(empty($this->_batch))
    {
      $this->_batch = new BatchInterface($this->_client);
    }
    return $this->_batch;
  }

  function getPayment()
  {
    if(empty($this->_payment))
    {
      $this->_payment = new PaymentInterface($this->_client);
    }
    return $this->_payment;
  }

  function getTransfer()
  {
    if(empty($this->_transfer))
    {
      $this->_transfer = new TransferInterface($this->_client);
    }
    return $this->_transfer;
  }

  function getBalance()
  {
    if(empty($this->_balance))
    {
      $this->_balance = new BalanceInterface($this->_client);
    }
    return $this->_balance;
  }

  function getLineitem()
  {
    if(empty($this->_lineitem))
    {
      $this->_lineitem = new LineItemInterface($this->_client);
    }
    return $this->_lineitem;
  }

  function getBankaccount()
  {
    if(empty($this->_bankaccount))
    {
      $this->_bankaccount = new BankAccountInterface($this->_client);
    }
    return $this->_bankaccount;
  }

  function getApikey()
  {
    if(empty($this->_apikey))
    {
      $this->_apikey = new ApiKeyInterface($this->_client);
    }
    return $this->_apikey;
  }

}
