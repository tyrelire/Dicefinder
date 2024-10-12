<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241012134130 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE player_membership (id INT AUTO_INCREMENT NOT NULL, player_id INT DEFAULT NULL, groupe_jdr_id INT DEFAULT NULL, joined_at DATETIME DEFAULT NULL, INDEX IDX_D95A56B899E6F5DF (player_id), INDEX IDX_D95A56B84717D41D (groupe_jdr_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE player_membership ADD CONSTRAINT FK_D95A56B899E6F5DF FOREIGN KEY (player_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE player_membership ADD CONSTRAINT FK_D95A56B84717D41D FOREIGN KEY (groupe_jdr_id) REFERENCES groupe_jdr (id)');
        $this->addSql('ALTER TABLE groupe_jdr DROP joined_at');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE player_membership DROP FOREIGN KEY FK_D95A56B899E6F5DF');
        $this->addSql('ALTER TABLE player_membership DROP FOREIGN KEY FK_D95A56B84717D41D');
        $this->addSql('DROP TABLE player_membership');
        $this->addSql('ALTER TABLE groupe_jdr ADD joined_at DATETIME DEFAULT NULL');
    }
}
