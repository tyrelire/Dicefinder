<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241001195451 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE invitation ADD requested_by_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE invitation ADD CONSTRAINT FK_F11D61A24DA1E751 FOREIGN KEY (requested_by_id) REFERENCES `user` (id)');
        $this->addSql('CREATE INDEX IDX_F11D61A24DA1E751 ON invitation (requested_by_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE invitation DROP FOREIGN KEY FK_F11D61A24DA1E751');
        $this->addSql('DROP INDEX IDX_F11D61A24DA1E751 ON invitation');
        $this->addSql('ALTER TABLE invitation DROP requested_by_id');
    }
}
