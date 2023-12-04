<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use App\DataSeeds\StudentSeed;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231204100748 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        foreach(StudentSeed::NAMES as $student){
            $this->addSql(
                sprintf("INSERT INTO student(name, grade, %s, %s, %s, %s, %s, %s) VALUES(?, ?, ?, ?, ?,?,?,?)",
                StudentSeed::MATH,
                StudentSeed::ENGLISH,
                StudentSeed::HISTORY,
                StudentSeed::GEOGRAPHY,
                StudentSeed::SCIENCE,
                StudentSeed::ART,
                ),
                [
                    $student,
                    StudentSeed::GRADES[rand(9,12)],
                    rand(1,10),
                    rand(1,10),
                    rand(1,10),
                    rand(1,10),
                    rand(1,10),
                    rand(1,10),
                ]
            );

        }
    }

    public function down(Schema $schema): void
    {
       $this->addSql("TRUNCATE student");

    }
}
