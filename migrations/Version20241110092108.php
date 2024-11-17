<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241110092108 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE event DROP is_recurring, DROP duration, DROP reucurrence_end_date');
        $this->addSql('ALTER TABLE groupe_jdr ADD is_active TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE event ADD is_recurring TINYINT(1) NOT NULL, ADD duration TIME DEFAULT NULL, ADD reucurrence_end_date DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE groupe_jdr DROP is_active');
    }
}
