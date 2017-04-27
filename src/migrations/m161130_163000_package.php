<?php
/**
 * Asset Packagist.
 *
 * @see      https://github.com/hiqdev/asset-packagist
 * @package   asset-packagist
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\assetpackagist\migrations;

use yii\db\Migration;

/**
 * Migration for queue message storage.
 *
 * @author Dmytro Naumenko <d.naumenko.a@gmail.com>
 */
class m161130_163000_package extends Migration
{
    public $tableName = '{{%package}}';
    public $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

    public function up()
    {
        $this->createTable($this->tableName, [
            'type' => $this->string()->notNull(),
            'name' => $this->string()->notNull(),
            'last_update' => $this->integer(),
            'PRIMARY KEY (type, name)',
        ], $this->tableOptions);
    }

    public function down()
    {
        $this->dropTable($this->tableName);
    }
}
