<?php

use Phinx\Migration\AbstractMigration;

class CreateFinancialTables extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $leads = $this->table("leads");
        $leads->addColumn("sale_amount", "float", array('default' => 0.0))
            ->update();

        $invoices = $this->table("invoices");
        $invoices->addColumn("lead_id", "integer")
            ->addColumn("amount", "float", array('default' => 0.0))
            ->addColumn("created", "timestamp", array("default", "CURRENT_TIMESTAMP"))
            ->create();

        $collected = $this->table("collected");
        $collected->addColumn("lead_id", "integer")
            ->addColumn("amount", "float", array('default' => 0.0))
            ->addColumn("payment_type", "string", array('default' => "cash"))
            ->addColumn("created", "timestamp", array("default", "CURRENT_TIMESTAMP"))
            ->create();
    }
}
