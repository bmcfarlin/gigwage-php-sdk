<?php

  include_once(__DIR__ . '/Resources/Ten99/Ten99Interface.php');
  include_once(__DIR__ . '/Resources/ApiKey/ApiKeyInterface.php');
  include_once(__DIR__ . '/Resources/BankAccount/BankAccountInterface.php');
  include_once(__DIR__ . '/Resources/LineItem/LineItemInterface.php');
  include_once(__DIR__ . '/Resources/Balance/BalanceInterface.php');
  include_once(__DIR__ . '/Resources/Transfer/TransferInterface.php');
  include_once(__DIR__ . '/Resources/Payment/PaymentInterface.php');
  include_once(__DIR__ . '/Resources/Batch/BatchInterface.php');
  include_once(__DIR__ . '/Resources/Contractor/ContractorInterface.php');
  include_once(__DIR__ . '/RestClient.php');
  include_once(__DIR__ . '/Client.php');
  include_once(__DIR__ . '/Settings.php');

  $client = new \GigWage\Client(GIGWAGE_API_KEY, GIGWAGE_API_SECRET, GIGWAGE_BASE_URL);

  /************************
  *  Contractor           *
  ************************/

  // $dtm = new \DateTime('now');
  // $timestamp = $dtm->getTimestamp();
  // $timestamp = $timestamp;
  // $first_name = 'user';
  // $last_name = $timestamp;
  // $email = sprintf("%s%s@domain.com", $first_name, $last_name);
  // $data = ['email' => $email, 'first_name' => $first_name, 'last_name' => $last_name];
  // $json = $client->contractor->create($data);
  // $item = json_decode($json);
  // $json = json_encode($item, JSON_PRETTY_PRINT);
  // print("$json\n");

  // $json = $client->contractor->list();
  // $item = json_decode($json);
  // $json = json_encode($item, JSON_PRETTY_PRINT);
  // print("$json\n");
  // die;

  // 413898

  // $json = $client->contractor->delete(413898);
  // $item = json_decode($json);
  // $json = json_encode($item, JSON_PRETTY_PRINT);
  // print("$json\n");
  // die;

  // $contractors = $item->contractors;
  // foreach($contractors as $contractor){
  //   $id = $contractor->id;
  //   $json = $client->contractor->invite($id);
  //   $sitem = json_decode($json);
  //   $json = json_encode($sitem, JSON_PRETTY_PRINT);
  //   print("$json\n");
  // }

  // $id = 2170;
  // $json = $client->contractor->get($id, true, true);
  // $item = json_decode($json);
  // $json = json_encode($item, JSON_PRETTY_PRINT);
  // print("$json\n");

  // $id = 2170;
  // $data = ['social_security' => '232-22-2222', 'phone_number' => '404-222-2222', 'birthdate' => '01/01/1970', 'address1' => '3372 PEACHTREE RD NE', 'city' => 'ATLANTA', 'state' => 'GA', 'zip' => 30326];
  // $json = $client->contractor->kyc($id, $data);
  // $item = json_decode($json);
  // $json = json_encode($item, JSON_PRETTY_PRINT);
  // print("$json\n");

  // $id = 2170;
  // $data = ['first_name' => 'Mieko'];
  // $json = $client->contractor->update($id, $data);
  // $item = json_decode($json);
  // $json = json_encode($item, JSON_PRETTY_PRINT);
  // print("$json\n");

  /************************
  *  Batch                *
  ************************/

  // $payments = [];
  // $json = $client->contractor->list();
  // $item = json_decode($json);
  // $contractors = $item->contractors;
  // foreach($contractors as $contractor){
  //   $id = $contractor->id;
  //   $debit_card = false;
  //   $line_items = [['amount' => 13.19, 'reason' => 'Testing', 'reimbursement' => false]];
  //   $payment = ['contractor_id' => $id, 'debit_card' => $debit_card, 'line_items' => $line_items];
  //   $payments[] = $payment;
  // }
  // $tz = new DateTimeZone('America/New_York');
  // $dtm = new DateTime('now', $tz);
  // $date = $dtm->format('Ymd');
  // $nonce = sprintf("batch-%s", $date);
  // $data = ['nonce' => $nonce, 'payments' => $payments];
  // $json = $client->batch->create($data);
  // $item = json_decode($json);
  // $json = json_encode($item, JSON_PRETTY_PRINT);
  // print("$json\n");
  
  /************************
  *  Payments             *
  ************************/

  // $json = $client->payment->list();
  // $item = json_decode($json);
  // $json = json_encode($item, JSON_PRETTY_PRINT);
  // print("$json\n");

  // $id = 733069;
  // $json = $client->payment->get($id);
  // $item = json_decode($json);
  // $json = json_encode($item, JSON_PRETTY_PRINT);
  // print("$json\n");

  // $contractor_id = 2170;
  // $debit_card = true;
  // $line_items = [['amount' => 12.50, 'reason' => 'Testing', 'reimbursement' => false]];
  // $tz = new DateTimeZone('America/New_York');
  // $dtm = new DateTime('now', $tz);
  // $date = $dtm->format('Ymd');
  // $nonce = sprintf("payment-%s-%s", $date, $contractor_id);
  // $data = ['nonce' => $nonce, 'contractor_id' => $contractor_id, 'debit_card' => $debit_card, 'line_items' => $line_items];
  // $json = $client->payment->create($data);
  // $item = json_decode($json);
  // $json = json_encode($item, JSON_PRETTY_PRINT);
  // print("$json\n");

  // $id = 4074;
  // $data = ['reason' => 'Testing'];
  // $json = $client->payment->update($id, $data);
  // $item = json_decode($json);
  // $json = json_encode($item, JSON_PRETTY_PRINT);
  // print("$json\n");

  // $id = 4074;
  // $json = $client->payment->delete($id);
  // $item = json_decode($json);
  // $json = json_encode($item, JSON_PRETTY_PRINT);
  // print("$json\n");

  /************************
  *  Transfers            *
  ************************/

  // $json = $client->transfer->list();
  // $item = json_decode($json);
  // $json = json_encode($item, JSON_PRETTY_PRINT);
  // print("$json\n");

  // $id = 4547;
  // $json = $client->transfer->get($id);
  // $item = json_decode($json);
  // $json = json_encode($item, JSON_PRETTY_PRINT);
  // print("$json\n");

  // $amount = 1100;
  // $direction = 'fund';
  // $tz = new DateTimeZone('America/New_York');
  // $dtm = new DateTime('now', $tz);
  // $date = $dtm->format('Ymd');
  // $nonce = sprintf("transfer-%s", $date);
  // $data = ['nonce' => $nonce, 'amount' => $amount, 'direction' => $direction];
  // $json = $client->transfer->create($data);
  // $item = json_decode($json);
  // $json = json_encode($item, JSON_PRETTY_PRINT);
  // print("$json\n");

  // $id = 4554;
  // $json = $client->transfer->delete($id);
  // $item = json_decode($json);
  // $json = json_encode($item, JSON_PRETTY_PRINT);
  // print("$json\n");

  /************************
  *  Balance              *
  ************************/

  // $json = $client->balance->list();
  // $item = json_decode($json);
  // $json = json_encode($item, JSON_PRETTY_PRINT);
  // print("$json\n");

  /************************
  *  LineItem             *
  ************************/

  // $id = 6491;
  // $data = ['reason' => 'Testing'];
  // $json = $client->lineitem->update($id, $data);
  // $item = json_decode($json);
  // $json = json_encode($item, JSON_PRETTY_PRINT);
  // print("$json\n");

  /************************
  *  BankAccount          *
  ************************/

  // $contractor_id = 2144;
  // $json = $client->bankaccount->list($contractor_id);
  // $item = json_decode($json);
  // $json = json_encode($item, JSON_PRETTY_PRINT);
  // print("$json\n");

  // $contractor_id = 2170;
  // $account_number = '080180467694';
  // $routing_number = '121145145';
  // $name = 'Silicon Valley Bank';
  // $account_type = 'checking';
  // $data = ['account_number' => $account_number, 'routing_number' => $routing_number, 'name' => $name, 'account_type' => $account_type];
  // $json = $client->bankaccount->create($contractor_id, $data);
  // $item = json_decode($json);
  // $json = json_encode($item, JSON_PRETTY_PRINT);
  // print("$json\n");

  // $contractor_id = 2170;
  // $account_id = 902;
  // $json = $client->bankaccount->get($contractor_id, $account_id);
  // $item = json_decode($json);
  // $json = json_encode($item, JSON_PRETTY_PRINT);
  // print("$json\n");

  // $contractor_id = 2170;
  // $account_id = 901;
  // $json = $client->bankaccount->delete($contractor_id, $account_id);
  // $item = json_decode($json);
  // $json = json_encode($item, JSON_PRETTY_PRINT);
  // print("$json\n");

  /************************
  *  ApiKey               *
  ************************/

  // $json = $client->apikey->list();
  // $item = json_decode($json);
  // $json = json_encode($item, JSON_PRETTY_PRINT);
  // print("$json\n");

  // $dtm = new \DateTime('now');
  // $timestamp = $dtm->getTimestamp();
  // $timestamp = $timestamp;
  // $name = sprintf("gas-valet-%s", $timestamp);
  // $data = ['name' => $name];
  // $json = $client->apikey->create($data);
  // $item = json_decode($json);
  // $json = json_encode($item, JSON_PRETTY_PRINT);
  // print("$json\n");

  // $key = 'acf359d4b2de67f79c642cbfbccf21a9';
  // $json = $client->apikey->get($key);
  // $item = json_decode($json);
  // $json = json_encode($item, JSON_PRETTY_PRINT);
  // print("$json\n");

  // $key = 'acf359d4b2de67f79c642cbfbccf21a9';
  // $json = $client->apikey->delete($key);
  // $item = json_decode($json);
  // $json = json_encode($item, JSON_PRETTY_PRINT);
  // print("$json\n");


  /************************
  *  1099
  ************************/
  // $json = $client->ten99->list();
  // $item = json_decode($json, true);
  // foreach($item['1099s'] as $item){
  //   if($item['year'] = '2022'){
  //     if($item['status'] == 'submitted'){
        
  //       $id = $item['id'];
  //       $contractor_id = $item['contractor_id'];

  //       $json = $client->ten99->retrieve($id);
  //       $sitem = json_decode($json, true);

  //       $url = $sitem['url'];

  //       $json = $client->contractor->get($contractor_id);
  //       $titem = json_decode($json, true);

  //       $first_name = $titem['contractor']['first_name'];
  //       $last_name = $titem['contractor']['last_name'];
  //       $email = $titem['contractor']['email'];

  //       $nitem = new stdClass();
  //       $nitem->id = $id;
  //       $nitem->contractor_id = $contractor_id;
  //       $nitem->url = $url;
  //       $nitem->first_name = $first_name;
  //       $nitem->last_name = $last_name;
  //       $nitem->email = $email;
  //       $json = json_encode($nitem, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
  //       print("$json\n");
  //     }
  //   }
  // }

