<?php
$installer = $this;
$tableNews = $installer->getTable('havchikcart/table_cart');

$installer->startSetup();

$installer->getConnection()->dropTable($tableNews);
$table = $installer->getConnection()
->newTable($tableNews)
->addColumn('news_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
'identity'  => true,
'nullable'  => false,
'primary'   => true,
))
->addColumn('title', Varien_Db_Ddl_Table::TYPE_TEXT, '255', array(
'nullable'  => false,
));
$installer->getConnection()->createTable($table);

$installer->endSetup();