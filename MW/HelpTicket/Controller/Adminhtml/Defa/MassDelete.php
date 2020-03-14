<?php
namespace MW\HelpTicket\Controller\Adminhtml\Defa;

use Magento\Backend\App\Action;

class MassDelete extends Action{



    public function execute()
    {
        $params = $this->getRequest()->getParams();
        var_dump($params);
        die('');
    }
}