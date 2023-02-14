<?php

namespace AHT\Route\Controller\Training;

class Test extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        $textDisplay = new \Magento\Framework\DataObject(['text' => 'Mageplaza']);
        $this->_eventManager->dispatch('mageplaza_helloworld_display_text', ['mp_text' => $textDisplay]);
        echo $textDisplay->getText();
        exit;
    }
}
