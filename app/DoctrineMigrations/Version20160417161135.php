<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160417161135 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // New table `users`
        $table = $schema->createTable('users');
        $table->addColumn('id', 'integer', ['notnull' => true, 'autoincrement' => true]);
        $table->addColumn('status', 'smallint', ['notnull' => true]);
        $table->addColumn('first_name', 'string', ['length' => 70, 'notnull' => true]);
        $table->addColumn('last_name', 'string', ['length' => 70, 'notnull' => true]);
        $table->addColumn('email', 'string', ['length' => 255, 'notnull' => true]);
        $table->addColumn('password', 'string', ['length' => 64, 'notnull' => true]);
        $table->addColumn('created', 'datetime', ['notnull' => false]);
        $table->addColumn('updated', 'datetime', ['notnull' => false]);
        $table->addColumn('deleted', 'datetime', ['notnull' => false]);
        $table->setPrimaryKey(['id']);

    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {

        $schema->dropTable('users');

    }
}
