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
      $this->command  = $bntCommand;

    }

  }
}