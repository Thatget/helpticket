<?php
namespace Su\Pho\Observer;

use Magento\Customer\Model\Session;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class AddLogggedOutHandleObserver implements ObserverInterface {

    private $customerSession;

    public function __construct(
        Session $session
    )
    {
        $this->customerSession = $session;
    }

    public function execute(Observer $observer)
    {
        $layout = $observer->getEvent()->getLayout();
        if (!$this->customerSession->isLoggedIn()){
            $layout->getUpdate()->addHandle('ajax_layout_name');
        }
    }

}