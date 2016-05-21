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
        $table->addColumn('id', 'integer', ['limit' => 11, 'null' => false, 'auto_increment' => true]);
        $table->addColumn('status', 'integer', ['limit' => 1, 'null' => false]);
        $table->addColumn('user_name', 'string', ['limit' => 50, 'null' => false]);
        $table->addColumn('password', 'string', ['limit' => 128, 'null' => false]);
        $table->addColumn('email', 'string', ['limit' => 255, 'null' => false]);
        $table->addColumn('created', 'datetime');
        $table->addColumn('updated', 'datetime');
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
