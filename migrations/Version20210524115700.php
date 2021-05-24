<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210524115700 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE histogram (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, points CLOB NOT NULL --(DC2Type:array)
        )');
        $this->addSql('CREATE TEMPORARY TABLE __temp__high_score AS SELECT id, score, bitcoin FROM high_score');
        $this->addSql('DROP TABLE high_score');
        $this->addSql('CREATE TABLE high_score (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, score INTEGER NOT NULL, bitcoin INTEGER)');
        $this->addSql('INSERT INTO high_score (id, score, bitcoin) SELECT id, score, bitcoin FROM __temp__high_score');
        $this->addSql('DROP TABLE __temp__high_score');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE histogram');
        $this->addSql('CREATE TEMPORARY TABLE __temp__high_score AS SELECT id, score, bitcoin FROM high_score');
        $this->addSql('DROP TABLE high_score');
        $this->addSql('CREATE TABLE high_score (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, score INTEGER NOT NULL, bitcoin INTEGER DEFAULT NULL)');
        $this->addSql('INSERT INTO high_score (id, score, bitcoin) SELECT id, score, bitcoin FROM __temp__high_score');
        $this->addSql('DROP TABLE __temp__high_score');
    }
}
