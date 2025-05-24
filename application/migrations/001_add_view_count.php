<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_view_count extends CI_Migration {

    public function up() {
        $this->dbforge->add_column('berita', [
            'view' => [
                'type' => 'INT',
                'constraint' => 11,
                'default' => 0,
                'after' => 'link'
            ]
        ]);
    }

    public function down() {
        $this->dbforge->drop_column('berita', 'view');
    }
} 