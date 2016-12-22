<?php

use Phinx\Migration\AbstractMigration;

class CreateYears extends AbstractMigration
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
        $years = $this->table("years");
        $years->addColumn("year", "string", array("limit" => 4))
            ->addColumn("job_id", "integer")
            ->addColumn("status", "string", array("limit" => 255))
            ->addColumn("start_date", "date", array("null" => true))
            ->addColumn("end_date", "date", array("null" => true))
            ->addColumn("created", "timestamp", array("default" => "CURRENT_TIMESTAMP"))
            ->create();
        
        $rows = [
            [ 
                "year" => "2017", 
                "job_id" => 1,
                "status" => "active",
                "start_date" => "2016/11/01"
            ],
            [ 
                "year" => "2016", 
                "job_id" => 1,
                "status" => "inactive",
                "start_date" => "2015/11/01",
                "end_date" => "2015/12/21"
            ],
            [ 
                "year" => "2017", 
                "job_id" => 2,
                "status" => "active",
                "start_date" => "2016/09/01"
            ],
            [ 
                "year" => "2017", 
                "job_id" => 3,
                "status" => "active",
                "start_date" => "2016/11/01"
            ],
            [ 
                "year" => "2017", 
                "job_id" => 4,
                "status" => "active",
                "start_date" => "2016/04/01"
            ],
            [ 
                "year" => "2015", 
                "job_id" => 1,
                "status" => "inactive",
                "start_date" => "2014/07/01",
                "end_date" => "2014/11/11"
            ],
            [ 
                "year" => "2016", 
                "job_id" => 2,
                "status" => "inactive",
                "start_date" => "2015/04/01",
                "end_date" => "2015/10/10"
            ],
        ];
        
        $years->insert($rows);
        $years->saveData();
        
        $jobs = $this->table("jobs");
        $jobs->removeColumn("status")
            ->removeColumn("start_date")
            ->removeColumn("end_date")
            ->save();
    }
}
