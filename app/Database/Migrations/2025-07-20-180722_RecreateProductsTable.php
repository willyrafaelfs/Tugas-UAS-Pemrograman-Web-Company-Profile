<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RecreateProductsTable extends Migration
{
    public function up()
    {
        $this->forge->modifyColumn('products', [
            'price' => ['type' => 'DECIMAL', 'constraint' => '10,2', 'null' => true],
        ]);
    }

    public function down()
    {
        $this->forge->modifyColumn('products', [
            'price' => ['type' => 'DECIMAL', 'constraint' => '10,2', 'default' => 0.00],
        ]);
    }
}
