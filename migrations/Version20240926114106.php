<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240926114106 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE notification_history (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, groupe_jdr_id INT DEFAULT NULL, status VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, INDEX IDX_32A4FAFCA76ED395 (user_id), INDEX IDX_32A4FAFC4717D41D (groupe_jdr_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE notification_history ADD CONSTRAINT FK_32A4FAFCA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE notification_history ADD CONSTRAINT FK_32A4FAFC4717D41D FOREIGN KEY (groupe_jdr_id) REFERENCES groupe_jdr (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE notification_history DROP FOREIGN KEY FK_32A4FAFCA76ED395');
        $this->addSql('ALTER TABLE notification_history DROP FOREIGN KEY FK_32A4FAFC4717D41D');
        $this->addSql('DROP TABLE notification_history');
    }
}
