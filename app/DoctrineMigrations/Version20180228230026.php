<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180228230026 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE `budget` (
                                                  `id` int(11) NOT NULL,
                                                  `title` varchar(255) NOT NULL,
                                                  `value` float(13,4) NOT NULL,
                                                  `start_date` date NOT NULL,
                                                  `end_date` date NOT NULL
                                                ) ENGINE=InnoDB DEFAULT CHARSET=utf8;');

        $this->addSql(' ALTER TABLE `budget` ADD PRIMARY KEY (`id`);');

        $this->addSql('ALTER TABLE `budget` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;');

        $this->addSql('CREATE TABLE `initiative` (
                                                      `id` int(11) NOT NULL,
                                                      `title` varchar(255) NOT NULL,
                                                      `value` float(13,4) NOT NULL
                                                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;');

        $this->addSql('ALTER TABLE `initiative`ADD PRIMARY KEY (`id`);');

        $this->addSql('ALTER TABLE `initiative` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;');




    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
