<?php

use yii\db\Schema;
use yii\db\Migration;

class m150524_071544_addCourseCollum extends Migration
{
    const TBL_NAME = '{{%course}}';
    public function up()
    {
        $this->addColumn(self::TBL_NAME,'key_word','string');
        $this->addColumn(self::TBL_NAME,'title','string');
    }

    public function down()
    {
        $this->dropColumn(self::TBL_NAME,'key_word');
        $this->dropColumn(self::TBL_NAME,'title');
    }
}
