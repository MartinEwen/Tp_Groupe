<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221206090626 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contents ADD page_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE contents ADD CONSTRAINT FK_B4FA1177C4663E4 FOREIGN KEY (page_id) REFERENCES pages (id)');
        $this->addSql('CREATE INDEX IDX_B4FA1177C4663E4 ON contents (page_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contents DROP FOREIGN KEY FK_B4FA1177C4663E4');
        $this->addSql('DROP INDEX IDX_B4FA1177C4663E4 ON contents');
        $this->addSql('ALTER TABLE contents DROP page_id');
    }
}
