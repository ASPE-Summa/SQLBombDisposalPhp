<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;
use function u;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231107145235 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        if (($handle = fopen(__DIR__ . '/../src/DataSeeds/files/MOCK_DATA.csv', 'r')) === false) {
            die('Error opening file');
        }

        while ($row = fgetcsv($handle, 256, ';')) {
         $this->addSql('INSERT INTO button(id, emoji, name) VALUES(:id,:emoji, :name)', ['id' => $row[0], 'emoji' => mb_chr(intval($row[0]), 'UTF-8'),'name' => $row[1]]);
         $this->addSql('INSERT INTO button_voltage(buttonId, voltage) VALUES(:id, :voltage)', ['id' => $row[0], 'voltage' => $row[2]]);
        }
        fclose($handle);

    }

    public function down(Schema $schema): void
    {
        $this->addSql('DELETE FROM button_voltage WHERE TRUE');
        $this->addSql('DELETE FROM button WHERE TRUE');
        // this down() migration is auto-generated, please modify it to your needs

    }
}
