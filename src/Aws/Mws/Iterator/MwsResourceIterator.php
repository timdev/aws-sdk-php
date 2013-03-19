<?php

namespace Aws\Mws\Iterator;
use Aws\Common\Iterator\AwsResourceIterator;

class MwsResourceIterator extends AwsResourceIterator {

  public function prepareRequest(){

    parent::prepareRequest();

    /**
     * If there's a nextToken, then replace $this->command with the appropriate *ByNextToken variant
     */
    if ($this->nextToken){
      $action = $this->command->get('Action');
      $client = $this->command->getClient();

      echo "New call with NextToken: " . $this->nextToken . "\n";
      $bntCommand = $client->getCommand($action.'ByNextToken');

      $bntCommand->setClient($client);
      $bntCommand->set('NextToken',$this->nextToken);
      $bntCommand->set('MerchantId', $this->command->get('MerchantId'));

      //fix locators for digging up NextToken and records
      $token_key = $this->get('token_key');
      if (false === strpos($token_key,'ByNextToken')){
        $this->set('token_key', str_replace('Result/','ByNextTokenResult/',$token_key));
      }

      $result_key = $this->get('result_key');
      if (false === strpos($result_key,'ByNextToken')){
        $this->set('result_key', str_replace('Result/','ByNextTokenResult/',$result_key));
      }
      $this->command  = $bntCommand;

    }

  }
}