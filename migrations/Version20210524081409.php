<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210524081409 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE high_score ADD COLUMN bitcoin INTEGER');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__high_score AS SELECT id, score FROM high_score');
        $this->addSql('DROP TABLE high_score');
        $this->addSql('CREATE TABLE high_score (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, score INTEGER NOT NULL)');
        $this->addSql('INSERT INTO high_score (id, score) SELECT id, score FROM __temp__high_score');
        $this->addSql('DROP TABLE __temp__high_score');
    }
}
