<?php
namespace MW\HelpTicket\Block\Adminhtml\Ticket;

use Magento\Backend\Block\Template;

class Topiclist extends Template {

    protected $topicFactory;

    public function __construct(
        \MW\HelpTicket\Model\TopicFactory $topicFactory,
        Template\Context $context,
        array $data = []
    )
    {
        $this->topicFactory = $topicFactory;
        parent::__construct($context, $data);
    }
}