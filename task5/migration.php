<?php

namespace app\components;

use yii\db\Migration;
use yii\db\Schema;

class CustomMigration extends Migration {

    public function up()
    {
        $this->createTable('trend', [
            'ID' => Schema::TYPE_PK,
            'Facility_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'Indication_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'Time' => Schema::TYPE_TIMESTAMP . ' NOT NULL',
            'Value' => Schema::TYPE_FLOAT
        ]);
 
        $this->createIndex('facility', 'trend', 'Facility_id');
        $this->addForeignKey(
            'facility', 'trend', 'Facility_id', 'id', 'SET NULL', 'CASCADE'
        );

        for ($i = 0; $i < 1000; $i++) {
            $facility = random_int(1, 10);
            $indication = random_int(1, 10);
            $date = time();
            $value = rand(-9999999, 9999999) / 1000;

            if($facility == $indication) {
                $i--;
                continue;
            }
            
            $columns = [
                'Facility_id' => $facility,
                'Indication_id' => $indication,
                'Time' => $date,
                'Value' => $value
            ];
            
            $printDate = date("d.m.Y H:i:s", $date);
            print "facility_id = $facility, indication_id = $indication, value = $value, time = $printDate";

            $this->insert('trend', $columns);
        }
    }
 
    public function down()
    {
        $this->dropTable('trend');
    }
}
