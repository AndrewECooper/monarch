<?php

use Phinx\Migration\AbstractMigration;

class InitialMigration extends AbstractMigration
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
        $captcha = $this->table("captcha");
        $captcha->addColumn("captcha_time", "integer", array("signed" => false))
                ->addColumn("ip_address", "string", array("limit" => 16, "default" => "0"))
                ->addColumn("word", "string", array("limit" => 20))
                ->create();
        $captcha->renameColumn("id", "captcha_id");
        
        $emails = $this->table("emails");
        $emails->addColumn("name", "string", array("limit" => 64))
                ->addColumn("email", "string", array("limit" => 256))
                ->addColumn("title", "string", array("limit" => 128))
                ->addColumn("message", "text")
                ->addColumn("created", "datetime")
                ->addColumn("read", "datetime", array("null" => true, "default" => null))
                ->addColumn("read_by", "integer", array("signed" => false, "null" => true, "default" => null))
                ->create();
        $row = [ 
            "name" => "John Doe", 
            "email" => "john@doe.com", 
            "title" => "Test Message", 
            "message" => "This is only a test message. Notice that once you''ve read it, the button changes from blue to grey, indicating that it has been reviewed.", 
            "created" => "2013-01-01 00:00:00", 
            "read" => null, 
            "read_by" => null
        ];
        $emails->insert($row);
        $emails->saveData();
        
        $login_attempts = $this->table("login_attempts");
        $login_attempts->addColumn("ip", "string", array("limit" => "20"))
                ->addColumn("attempt", "datetime")
                ->create();
        
        $settings = $this->table("settings");
        $settings->addColumn("name", "string", array("signed" => false))
                ->addColumn("input_type", "enum", array("values" => "input,textarea,radio,dropdown,timezones"))
                ->addColumn("options", "text", array("comment" => "Use for radio and dropdown: key|value on each line", "null" => true))
                ->addColumn("is_numeric", "enum", array("values" => "0,1"))
                ->addColumn("show_editor", "enum", array("values" => "0,1"))
                ->addColumn("input_size", "enum", array("values" => "large,medium,small"))
                ->addColumn("translate", "enum", array("values" => "0,1"))
                ->addColumn("help_text", "string", array("limit" => 256, "null" => true, "default" => null))
                ->addColumn("validation", "string", array("limit" => 128))
                ->addColumn("sort_order", "integer", array("signed" => false))
                ->addColumn("label", "string", array("limit" => 128))
                ->addColumn("value", "text", array("comment" => "If translate is 1, just start with your default language"))
                ->addColumn("last_update", "datetime", array("null" => true, "default" => null))
                ->addColumn("updated_by", "integer", array("signed" => false, "null" => true, "default" => null))
                ->create();
        $rows = [
            [
                "name" => "site_name", 
                "input_type" => "input", 
                "options" => null, 
                "is_numeric" => "0", 
                "show_editor" => "0", 
                "input_size" => "large", 
                "translate" => "0", 
                "help_text" => null, 
                "validation" => "required|trim|min_length[3]|max_length[128]", 
                "sort_order" => 10, 
                "label" => "Site Name", 
                "value" => "Lucky Gunner System Command Center", 
                "last_update" => "2016-07-26 23:10:44", 
                "updated_by" => 1
            ],
            [
                "name" => "per_page_limit", 
                "input_type" => "dropdown", 
                "options" => "10|10\r\n25|25\r\n50|50\r\n75|75\r\n100|100", 
                "is_numeric" => "1", 
                "show_editor" => "0", 
                "input_size" => "small", 
                "translate" => "0", 
                "help_text" => null, 
                "validation" => "required|trim|numeric", 
                "sort_order" => 50, 
                "label" => "Items Per Page", 
                "value" => "10", 
                "last_update" => "2016-07-26 23:10:44", 
                "updated_by" => 1
            ],
            [
                "name" => "meta_keywords", 
                "input_type" => "input", 
                "options" => null, 
                "is_numeric" => "0", 
                "show_editor" => "0", 
                "input_size" => "large", 
                "translate" => "0", 
                "help_text" => "Comma-seperated list of site keywords", 
                "validation" => "trim", 
                "sort_order" => 20, 
                "label" => "Meta Keywords", 
                "value" => "these, are, keywords", 
                "last_update" => "2016-07-26 23:10:44", 
                "updated_by" => 1
            ],
            [
                "name" => "meta_description", 
                "input_type" => "textarea", 
                "options" => null, 
                "is_numeric" => "0", 
                "show_editor" => "0", 
                "input_size" => "large", 
                "translate" => "0", 
                "help_text" => "Short description describing your site.", 
                "validation" => "trim", 
                "sort_order" => 30, 
                "label" => "Meta Description", 
                "value" => "This is the site description.", 
                "last_update" => "2016-07-26 23:10:44", 
                "updated_by" => 1
            ],
            [
                "name" => "site_email", 
                "input_type" => "input", 
                "options" => null, 
                "is_numeric" => "0", 
                "show_editor" => "0", 
                "input_size" => "medium", 
                "translate" => "0", 
                "help_text" => "Email address all emails will be sent from.", 
                "validation" => "required|trim|valid_email", 
                "sort_order" => 40, 
                "label" => "Site Email", 
                "value" => "andrew@andrewcooperonline.com", 
                "last_update" => "2016-07-26 23:10:44", 
                "updated_by" => 1
            ],
            [
                "name" => "timezones", 
                "input_type" => "timezones", 
                "options" => null, 
                "is_numeric" => "0", 
                "show_editor" => "0", 
                "input_size" => "medium", 
                "translate" => "0", 
                "help_text" => null, 
                "validation" => "required|trim", 
                "sort_order" => 60, 
                "label" => "Timezone", 
                "value" => "UTC", 
                "last_update" => "2016-07-26 23:10:44", 
                "updated_by" => 1
            ],
            [
                "name" => "welcome_message", 
                "input_type" => "textarea", 
                "options" => null, 
                "is_numeric" => "0", 
                "show_editor" => "1", 
                "input_size" => "large", 
                "translate" => "1", 
                "help_text" => "Message to display on home page.", 
                "validation" => "trim", 
                "sort_order" => 70, 
                "label" => "Welcome Message", 
                "value" => 'a:7:{s:7:"spanish";s:4494:"<p><img src="data:image/png;base64,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" data-filename="ci3-fire-starter.png" style="line-height: 1.42857; width: 63px; float: left;"></p><p>Este contenido se genera <em style="color: rgb(41, 82, 24); background-color: rgb(255, 239, 198);">dinámicamente</em>. <strong>Este texto es editable en la configuración de administrador.</strong></p><p></p>";s:7:"russian";s:4570:"<p><img src="data:image/png;base64,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" data-filename="ci3-fire-starter.png" style="line-height: 1.42857; width: 63px; float: left;"></p><p>Это содержание генерируется <em style="color: rgb(41, 82, 24); background-color: rgb(255, 239, 198);">динамически</em>. <strong>Этот текст можно изменить в настройках администратора.</strong></p><p></p>";s:10:"indonesian";s:4476:"<p><img src="data:image/png;base64,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" data-filename="ci3-fire-starter.png" style="line-height: 1.42857; width: 63px; float: left;"></p><p>Konten ini sedang dihasilkan secara <em style="color: rgb(41, 82, 24); background-color: rgb(255, 239, 198);">dinamis</em>. <strong>Teks ini diedit dalam pengaturan admin.</strong></p><p></p>";s:18:"simplified-chinese";s:4376:"<p><img src="data:image/png;base64,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" data-filename="ci3-fire-starter.png" style="line-height: 1.42857; width: 63px; float: left;"></p><p>正在动态生成此内容. <strong>该文本可编辑在管理设置.</strong></p><p></p>";s:7:"english";s:4483:"<p><img src="data:image/png;base64,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" data-filename="ci3-fire-starter.png" style="line-height: 1.42857; width: 63px; float: left;"></p><p>This content is being generated <em style="color: rgb(41, 82, 24); background-color: rgb(255, 239, 198);">dynamically</em>. <strong>This text is editable in the admin settings.</strong></p>\r\n<p></p>";s:5:"dutch";s:4489:"<p><img src="data:image/png;base64,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" data-filename="ci3-fire-starter.png" style="line-height: 1.42857; width: 63px; float: left;"></p><p>Deze inhoud wordt <em style="color: rgb(41, 82, 24); background-color: rgb(255, 239, 198);">dynamisch</em> gegenereerd. <strong>Deze tekst kan worden bewerkt in de admin -instellingen.</strong></p><p></p>";s:7:"turkish";s:4489:"<p><img src="data:image/png;base64,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" data-filename="ci3-fire-starter.png" style="line-height: 1.42857; width: 63px; float: left;"></p><p>Bu içerik <em style="color: rgb(41, 82, 24); background-color: rgb(255, 239, 198);">dinamik</em> olarak oluşturulan ediliyor. <strong>Bu metin yönetici ayarlarında düzenlenebilir.</strong></p><p></p>";}', 
                "last_update" => "2016-07-26 23:10:44", 
                "updated_by" => 1
            ]
        ];
        $this->insert("settings", $rows);
        
        $users = $this->table("users");
        $users->addColumn("username", "string", array("limit" => 30))
                ->addColumn("password", "char", array("limit" => 128))
                ->addColumn("salt", "char", array("limit" => 128))
                ->addColumn("first_name", 'string', array("limit" => 32))
                ->addColumn("last_name", "string", array("limit" => 32))
                ->addColumn("email", "string", array("limit" => 256))
                ->addColumn("language", "string", array("limit" => 64))
                ->addColumn("is_admin", "enum", array("values" => "0,1", "default" => "0"))
                ->addColumn("status", "enum", array("values" => "0,1", "default" => "1"))
                ->addColumn("deleted", "enum", array("values" => "0,1", "default" => "0"))
                ->addColumn("validation_code", 
                        "string", 
                        array("limit" => 50, "null" => true, "default" => null, "comment" => "Temporary code for opt-in registration"))
                ->addColumn("created", "datetime")
                ->addColumn("updated", "datetime")
                ->create();
        $rows = [
            [ 
                "username" => "admin", 
                "password" => "ce516f215aa468c376736c9013e8b663f7b3c06226a87739bc6b32882f9278349a721ea725a156eecf9e3c1868904a77e4d42c783e0287a0909a8bbb97e1525f", 
                "salt" => "66cb0ab1d9efe250b46e28ecb45eb33b3609f1efda37547409a113a2b84c3f94b6a0e738acc391e2dfa718676aa55adead05fcb12d2e32aee379e190511a3252", 
                "first_name" => "Site", 
                "last_name" => "Administrator", 
                "email" => "andrew@andrewcooperonline.com", 
                "language" => "english", 
                "is_admin" => "1", 
                "status" => "1", 
                "deleted" => "0", 
                "validation_code" => null, 
                "created" => "2013-01-01 00:00:00", 
                "updated" => "2016-02-26 21:46:43"
            ],
            [ 
                "username" => "johndoe", 
                "password" => "4e8ece39c9905fe6989022a7747d2c67d90582cdf483d762905f026b3f2328dbc019acf59f77a57472228933c33429de859210a3c6b2976234501462994cf73c", 
                "salt" => "a876126be616f492fa9ff8fb554eadffb8e43ed9faef8e1070c2508d76c57b1613899ceb97972f7959c4c05617ce36e25ba63787a8bd3f183680863c687a7c12", 
                "first_name" => "John", 
                "last_name" => "Doe", 
                "email" => "john@doe.com", 
                "language" => "english", 
                "is_admin" => "0", 
                "status" => "1", 
                "deleted" => "0", 
                "validation_code" => null, 
                "created" => "2013-01-01 00:00:00", 
                "updated" => "2016-02-26 21:46:43"
            ]
        ];
        $this->insert("users", $rows);
        
        $captcha->addIndex("word");
        $emails->addIndex(array("name", "title", "created", "read", "read_by", "email"));
        $login_attempts->addIndex("ip");
        $settings->addIndex("name", array("unique" => true));
        $settings->addIndex("updated_by");
        $users->addIndex("username", array("unique" => true));
    }
}
