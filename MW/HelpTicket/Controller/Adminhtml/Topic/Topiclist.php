<?php
namespace MW\HelpTicket\Controller\Adminhtml\Topic;

use Magento\Backend\App\AbstractAction;
use Magento\Backend\App\Action;

class Topiclist extends AbstractAction {

    public function __construct(
        Action\Context $context
    )
    {
        parent::__construct($context);
    }
    public function execute()
    {
        echo 'Tam ';
        die('Quyet');
    }
}