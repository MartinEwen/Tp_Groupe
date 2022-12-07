<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221207154050 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contents ADD image_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE contents ADD CONSTRAINT FK_B4FA11773DA5256D FOREIGN KEY (image_id) REFERENCES images (id)');
        $this->addSql('CREATE INDEX IDX_B4FA11773DA5256D ON contents (image_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contents DROP FOREIGN KEY FK_B4FA11773DA5256D');
        $this->addSql('DROP INDEX IDX_B4FA11773DA5256D ON contents');
        $this->addSql('ALTER TABLE contents DROP image_id');
    }
}
