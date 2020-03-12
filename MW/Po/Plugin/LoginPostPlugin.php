<?php
namespace MW\Po\Plugin;

class LoginPostPlugin {

    public function afterExecute(
        \Magento\Customer\Controller\Account\LoginPost $subject,
        $result
    ){
        $object = \Magento\Framework\App\ObjectManager::getInstance();
        $pageUrl = $object->get('Magento\Customer\Model\Session');
        $url = $pageUrl->getMyValue();
        $pageUrl->unsMyValue();
        $result->setPath($url);
        return $result;
    }
}