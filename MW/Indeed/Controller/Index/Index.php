<?php
namespace MW\Indeed\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class Index extends Action{

    const DOA = 'http://127.0.0.1/site0.com/rest/V1/mwtestapi/post/name';

    protected $param = '12';

    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    public function execute()
    {

        $beGet = $this->setClient();
        echo '<pre>';
        die('Quyet');

    }
    protected function prePrepare(){
            $request = new \Zend\Http\Request();
            $request->setUri(self::DOA);
            $request->setMethod(\Zend\Http\Request::METHOD_GET);
            $request->setHeaders([
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]);

        return $request;
    }

    protected function setClient(){
        $client = new \Zend\Http\Client();

        return $client->send($this->prePrepare());
    }

}