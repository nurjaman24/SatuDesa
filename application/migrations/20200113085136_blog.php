<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
class Migration_Blog extends CI_Migration { 
    public function up() { 
            $nama tabel
            $this->dbforge->add_field(array(
            'id' => array(
                    'type' => 'INT',
                    'constraint' => 5,
                    'unsigned' => TRUE,
                    'auto_increment' => TRUE
            ),
            'name' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100'
            ),
            '' => array(
                    'type' => 'TEXT',
                    'null' => TRUE
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('tb_baru');
    }

    public function down()
    {
        $this->dbforge->drop_table('tb_baru');
    }
}