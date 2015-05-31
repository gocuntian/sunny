<?php

use yii\db\Schema;
use yii\db\Migration;

class m150531_004753_addProductCollumn extends Migration
{
    const TBL_NAME = '{{%tbl_product}}';
    public function up()
    {
        $this->addColumn(self::TBL_NAME,'key_word','string');
        $this->addColumn(self::TBL_NAME,'status','smallint');
        $this->addColumn(self::TBL_NAME,'thumbsup','integer');
        $this->addColumn(self::TBL_NAME,'thumbsdown','integer');
        $this->addColumn(self::TBL_NAME,'content','text');
        $this->addColumn(self::TBL_NAME,'created_at','integer');
        $this->addColumn(self::TBL_NAME,'updated_at','integer');
        $this->addColumn(self::TBL_NAME,'created_by','integer');
        $this->addColumn(self::TBL_NAME,'updated_by','integer');

    }

    public function down()
    {
        $this->dropColumn(self::TBL_NAME,'key_word');
        $this->dropColumn(self::TBL_NAME,'status','smallint');
        $this->dropColumn(self::TBL_NAME,'thumbsup','integer');
        $this->dropColumn(self::TBL_NAME,'thumbsdown','integer');
        $this->dropColumn(self::TBL_NAME,'content','text');
        $this->dropColumn(self::TBL_NAME,'created_at','integer');
        $this->dropColumn(self::TBL_NAME,'updated_at','integer');
        $this->dropColumn(self::TBL_NAME,'created_by','integer');
        $this->dropColumn(self::TBL_NAME,'updated_by','integer');
    }
}
