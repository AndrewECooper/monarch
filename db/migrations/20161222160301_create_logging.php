<?php

use Phinx\Migration\AbstractMigration;

class CreateLogging extends AbstractMigration
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
        $logs = $this->table("logs");
        $logs->addColumn("code", "integer", array("signed" => false))
            ->addColumn("short_description", "string", array("limit" => 255))
            ->addColumn("description", "text")
            ->addColumn("user_id", "integer")
            ->addColumn("created", "timestamp", array("default" => "CURRENT_TIMESTAMP"))
            ->create();
    }
}
