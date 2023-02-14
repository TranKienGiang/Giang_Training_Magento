<?php

namespace AHT\Route\Observer;

use Magento\Customer\Api\AddressRepositoryInterface;
use Magento\Framework\Event\Observer;
use Magento\Framework\Exception\LocalizedException;

class SaveAddress implements \Magento\Framework\Event\ObserverInterface
{
    private AddressRepositoryInterface $addressRepository;
    private \Magento\Framework\View\Result\PageFactory $pageFactory;
    public function __construct(
        AddressRepositoryInterface $addressRepository,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
    ) {
        $this->addressRepository = $addressRepository;
        $this->pageFactory = $pageFactory;
    }

    /**
     * @throws LocalizedException
     */
    public function execute(Observer $observer)
    {
        $address = $observer->getData('address');
        $address->setStreet(['AHT Dương Đình Nghệ','']);
        return $this->pageFactory->create();
    }
}
