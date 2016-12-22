<?php

use Phinx\Migration\AbstractMigration;

class CreateJobs extends AbstractMigration
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
        $jobs->addColumn("name", "string", array("limit" => 255))
            ->addColumn("status", "string", array("limit" => 255))
            ->addColumn("type", "string", array("limit" => 255))
            ->addColumn("contact_first_name", "string", array("limit" => 255))
            ->addColumn("contact_last_name", "string", array("limit" => 255))
            ->addColumn("contact_email", "string", array("limit" => 255))
            ->addColumn("start_date", "date", array("null" => true))
            ->addColumn("end_date", "date", array("null" => true))
            ->addColumn("created", "timestamp", array("default" => "CURRENT_TIMESTAMP"))
            ->addColumn("updated", "datetime", array("default" => "CURRENT_TIMESTAMP"))
            ->addColumn("deleted", "integer", array("default" => 0))
            ->create();
        
        $rows = [
            [ 
                "name" => "Laredo Border Patrol TX", 
                "status" => "active", 
                "type" => "sheriff", 
                "contact_first_name" => "Tony", 
                "contact_last_name" => "Stark", 
                "contact_email" => "ironman@avengers.com"
            ],
            [ 
                "name" => "Orangeburg Co, SC", 
                "status" => "active", 
                "type" => "ems", 
                "contact_first_name" => "Tony", 
                "contact_last_name" => "Stark", 
                "contact_email" => "ironman@avengers.com"
            ],
            [ 
                "name" => "Jackson County, GA", 
                "status" => "active", 
                "type" => "sheriff", 
                "contact_first_name" => "Tony", 
                "contact_last_name" => "Stark", 
                "contact_email" => "ironman@avengers.com"
            ],
            [ 
                "name" => "Liberty County, GA", 
                "status" => "inactive", 
                "type" => "dare", 
                "contact_first_name" => "Tony", 
                "contact_last_name" => "Stark", 
                "contact_email" => "ironman@avengers.com"
            ]
        ];
        
        $jobs->insert($rows);
        $jobs->saveData();
    }
}
