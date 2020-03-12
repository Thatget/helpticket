<?php
namespace MW\Po\Block\Account;

class Check extends \Magento\Customer\Block\Account\Customer {
    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\App\Http\Context $httpContext, array $data = [])
    {
        parent::__construct($context, $httpContext, $data);
    }
}