<?php

namespace MW\HelpTicket\Block\Adminhtml\Ticket;

use Magento\Backend\Block\Template;

class Department extends Template
{

    protected $defaFactory;

    public function __construct(
        \MW\HelpTicket\Model\DefaFactory $defaFactory,
        Template\Context $context,
        array $data = []
    )
    {
        $this->defaFactory = $defaFactory;
        parent::__construct($context, $data);
    }
    public function getAll(){
        return $this->defaFactory->create()->getCollection()->getData();
    }
}
