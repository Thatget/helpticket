<?php
namespace MW\HelpTicket\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface{

    public function install(
        SchemaSetupInterface $setup,
        ModuleContextInterface $context
    )
    {
        $installer = $setup;
        $installer->startSetup();
        if (!$installer->tableExists('mw_table_helpticket')){
            $table = $installer->getConnection()->newTable(
                $installer->getTable('mw_table_helpticket')
            )->addColumn(
                
            )
        }
    }
}