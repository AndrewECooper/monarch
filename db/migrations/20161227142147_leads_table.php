<?php

use Phinx\Migration\AbstractMigration;

class LeadsTable extends AbstractMigration
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
        $leads->addColumn("company_name", "string", array("limit" => 50))
                ->addColumn("line_of_business", "string", array("limit" => 50))
                ->addColumn("sales_id", "integer")
                ->addColumn("collector_id", "integer")
                ->addColumn("status", "string", array("limit" => 50))
                ->addColumn("stage", "string", array("limit" => 50))
                ->addColumn("contact_first_name", "string", array("limit" => 35))
                ->addColumn("contact_last_name", "string", array("limit" => 35))
                ->addColumn("contact_email", "string", array("limit" => 255))
                ->addColumn("primary_phone", "string", array("limit" => 15))
                ->addColumn("alternate_phone", "string", array("limit" => 15, "default" => "None"))
                ->addColumn("physical_address", "string", array("limit" => 255, "default" => "None"))
                ->addColumn("physical_address_city", "string", array("limit" => 255, "default" => "None"))
                ->addColumn("physical_address_state", "string", array("limit" => 20, "default" => "NA"))
                ->addColumn("physical_address_zip", "string", array("limit" => 10, "default" => "None"))
                ->addColumn("mailing_address", "string", array("limit" => 255, "default" => "None"))
                ->addColumn("mailing_address_city", "string", array("limit" => 255, "default" => "None"))
                ->addColumn("mailing_address_state", "string", array("limit" => 20, "default" => "NA"))
                ->addColumn("mailing_address_zip", "string", array("limit" => 10, "default" => "None"))
                ->create();
        
        $rows = [
            [
                "company_name" => "1 Call We Haul",
                "line_of_business" => "transportation - trucking",
                "sales_id" => 1,
                "collector_id" => 9,
                "status" => "Left Message Machine",
                "stage" => "Invoiced",
                "contact_first_name" => "Billy",
                "contact_last_name" => "Robertson",
                "contact_email" => "bill@wehaul.com",
                "primary_phone" => "345-556-3456"
            ],
            [
                "company_name" => "Academy Mortgage",
                "line_of_business" => "banking - lending",
                "sales_id" => 2,
                "collector_id" => 9,
                "status" => "Left Message Machine",
                "stage" => "Invoiced",
                "contact_first_name" => "Billy",
                "contact_last_name" => "Robertson",
                "contact_email" => "bill@wehaul.com",
                "primary_phone" => "345-556-3456"
            ],
            [
                "company_name" => "Auto Club Inc",
                "line_of_business" => "car sales",
                "sales_id" => 1,
                "collector_id" => 4,
                "status" => "Left Message Machine",
                "stage" => "Invoiced",
                "contact_first_name" => "Billy",
                "contact_last_name" => "Robertson",
                "contact_email" => "bill@wehaul.com",
                "primary_phone" => "345-556-3456"
            ],
        ];
        $leads->insert($rows);
        $leads->update();
    }
}
