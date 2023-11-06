<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use App\DataSeeds\MazeSeed;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231106091203 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Insert maze patterns';
    }

    public function up(Schema $schema): void
    {
        foreach(MazeSeed::shufflePatterns() as $pattern){
            $this->addSql(
                'INSERT INTO maze_puzzle(`contents`,`pattern`,`sequence`) VALUES(:content,:pattern,:sequence)',
                [
                    'content' => $pattern['content'],
                    'pattern' => $pattern['pattern'],
                    'sequence' => $pattern['sequence']
                ]
            );
        }
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
