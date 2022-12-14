<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221206090759 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE images ADD content_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE images ADD CONSTRAINT FK_E01FBE6A84A0A3ED FOREIGN KEY (content_id) REFERENCES contents (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_E01FBE6A84A0A3ED ON images (content_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE images DROP FOREIGN KEY FK_E01FBE6A84A0A3ED');
        $this->addSql('DROP INDEX UNIQ_E01FBE6A84A0A3ED ON images');
        $this->addSql('ALTER TABLE images DROP content_id');
    }
}
