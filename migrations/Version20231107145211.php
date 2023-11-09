<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231107145211 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE button (id INT NOT NULL, emoji VARCHAR(200) NOT NULL, name VARCHAR(200) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_bin` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE button_voltage (buttonId INT NOT NULL, voltage INT NOT NULL,  PRIMARY KEY(buttonId)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE button_voltage ADD CONSTRAINT FK_DADBBE369F35DE89 FOREIGN KEY (buttonId) REFERENCES button (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE button_voltage DROP FOREIGN KEY FK_DADBBE369F35DE89');
        $this->addSql('DROP TABLE button');
        $this->addSql('DROP TABLE button_voltage');
    }
}
