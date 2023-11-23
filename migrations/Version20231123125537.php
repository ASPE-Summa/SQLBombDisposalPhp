<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use App\DataSeeds\AdventurerSeed;
use App\Entity\Adventurer;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231123125537 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        foreach(AdventurerSeed::CHARACTERS as $character){
            $this->addSql(
                sprintf(
                    'INSERT INTO adventurer(name,level,class,%s, %s, %s, %s, %s, %s) VALUES(:name, :level, :class, :str, :dex, :con, :int, :wis, :cha)',
                    AdventurerSeed::STR,
                    AdventurerSeed::DEX,
                    AdventurerSeed::CON,
                    AdventurerSeed::INT,
                    AdventurerSeed::WIS,
                    AdventurerSeed::CHA
                ),
                [
                    'name' => $character['name'],
                    'level' => $character['level'],
                    'class' => $character['class'],
                    'str' => $character[AdventurerSeed::STR],
                    'dex' => $character[AdventurerSeed::DEX],
                    'con' => $character[AdventurerSeed::CON],
                    'int' => $character[AdventurerSeed::INT],
                    'wis' => $character[AdventurerSeed::WIS],
                    'cha' => $character[AdventurerSeed::CHA],
                ]
            );
        }
    }

    public function down(Schema $schema): void
    {
        $this->addSql('TRUNCATE adventurer');
    }
}
