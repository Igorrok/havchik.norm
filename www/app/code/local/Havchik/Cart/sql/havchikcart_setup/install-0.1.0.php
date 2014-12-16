<?php
$installer = $this;
$tableCart = $installer->getTable('havchikcart/table_cart');

$installer->startSetup();

$installer->getConnection()->dropTable($tableCart);
$table = $installer->getConnection()
->newTable($tableCart)
->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
'identity'  => true,
'nullable'  => false,
'primary'   => true,
))
->addColumn('title', Varien_Db_Ddl_Table::TYPE_TEXT, '255', array(
'nullable'  => false,
));
$installer->getConnection()->createTable($table);

$installer->endSetup();