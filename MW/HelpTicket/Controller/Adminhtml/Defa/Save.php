<?php
namespace MW\HelpTicket\Controller\Adminhtml\Defa;

use Magento\Backend\App\Action;

class Save extends Action{

    public function __construct(
        Action\Context $context
    )
    {
        parent::__construct($context);
    }
    public function execute()
    {
        die('Quyet');
    }
}
