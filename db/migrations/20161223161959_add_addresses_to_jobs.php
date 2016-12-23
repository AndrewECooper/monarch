<?php

use Phinx\Migration\AbstractMigration;

class AddAddressesToJobs extends AbstractMigration
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
        $jobs = $this->table("jobs");
        $jobs->addColumn("physical_address", "string", array("limit" => 255, "default" => "None"))
            ->addColumn("physical_address_city", "string", array("limit" => 255, "default" => "None"))
            ->addColumn("physical_address_state", "string", array("limit" => 20, "default" => "NA"))
            ->addColumn("physical_address_zip", "string", array("limit" => 10, "default" => "None"))
            ->addColumn("mailing_address", "string", array("limit" => 255, "default" => "None"))
            ->addColumn("mailing_address_city", "string", array("limit" => 255, "default" => "None"))
            ->addColumn("mailing_address_state", "string", array("limit" => 20, "default" => "NA"))
            ->addColumn("mailing_address_zip", "string", array("limit" => 10, "default" => "None"))
            ->update();
    }
}
