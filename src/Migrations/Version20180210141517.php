<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180210141517 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE tavern_task (id INT AUTO_INCREMENT NOT NULL, task_content VARCHAR(255) NOT NULL, task_time VARCHAR(255) NOT NULL, task_reward VARCHAR(255) NOT NULL, task_gold_reward VARCHAR(255) NOT NULL, task_item_reward VARCHAR(255) NOT NULL, task_special_reward VARCHAR(255) NOT NULL, task_title VARCHAR(255) NOT NULL, task_alternate_title VARCHAR(255) NOT NULL, task_compar_from VARCHAR(255) NOT NULL, task_compar_to VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE tavern_task');
    }
}
