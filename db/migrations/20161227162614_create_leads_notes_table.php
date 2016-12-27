<?php

use Phinx\Migration\AbstractMigration;

class CreateLeadsNotesTable extends AbstractMigration
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
        $notes = $this->table("lead_notes");
        $notes->addColumn("lead_id", "integer")
                ->addColumn("message", "text")
                ->addColumn("created", "timestamp", array("default" => "CURRENT_TIMESTAMP"))
                ->create();
        
        $rows = [
            [
                "lead_id" => 1,
                "message" => "Top Cat! The most effectual Top Cat! Who's intellectual close friends get to call him T.C., providing it's with dignity. Top Cat! The indisputable leader of the gang. He's the boss, he's a pip, he's the championship. He's the most tip top, Top Cat."
            ],
            [
                "lead_id" => 1,
                "message" => "This is my boss, Jonathan Hart, a self-made millionaire, he's quite a guy. This is Mrs H., she's gorgeous, she's one lady who knows how to take care of herself. By the way, my name is Max. I take care of both of them, which ain't easy, 'cause when they met it was MURDER!"
            ],
            [
                "lead_id" => 1,
                "message" => "This is a really cool note. You should pay attention to it."
            ],
            [
                "lead_id" => 1,
                "message" => "Thunder, thunder, thundercats, Ho! Thundercats are on the move, Thundercats are loose. Feel the magic, hear the roar, Thundercats are loose. Thunder, thunder, thunder, Thundercats! Thunder, thunder, thunder, Thundercats! Thunder, thunder, thunder, Thundercats! Thunder, thunder, thunder, Thundercats! Thundercats!"
            ]
        ];
        $notes->insert($rows);
        $notes->update();
    }
}
