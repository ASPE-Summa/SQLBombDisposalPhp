<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use App\DataSeeds\BattleshipSeed;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231120121723 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        foreach(BattleshipSeed::PATTERNS as $pattern){
            $words = BattleshipSeed::getWordArray();

            do {
                $r1 = rand(0, count($words));
                $r2 = rand(0, count($words));
                $r3 = rand(0, count($words));
            } while($r1 == $r2 || $r2 == $r3 || $r1 == $r3);

            $words[$r1] = $pattern['word1'];
            $words[$r2] = $pattern['word2'];
            $words[$r3] = $pattern['word3'];

            $coordinate = BattleshipSeed::randomLetter() . BattleshipSeed::randomDigit();

            $this->addSql('INSERT INTO battleship(coordinates, description) VALUES(:coordinate, :description)', ['coordinate' => $coordinate, 'description' => implode(' ', $words)]);
        }

    }

    public function down(Schema $schema): void
    {
        $this->addSql('TRUNCATE battleship');
        // this down() migration is auto-generated, please modify it to your needs

    }
}
