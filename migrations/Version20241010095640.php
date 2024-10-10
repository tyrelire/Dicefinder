<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241010095640 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE groupejdr_category (groupe_jdr_id INT NOT NULL, category_id INT NOT NULL, INDEX IDX_B4E47B264717D41D (groupe_jdr_id), INDEX IDX_B4E47B2612469DE2 (category_id), PRIMARY KEY(groupe_jdr_id, category_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE groupejdr_category ADD CONSTRAINT FK_B4E47B264717D41D FOREIGN KEY (groupe_jdr_id) REFERENCES groupe_jdr (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE groupejdr_category ADD CONSTRAINT FK_B4E47B2612469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE groupe_jdr_category DROP FOREIGN KEY FK_19D788D212469DE2');
        $this->addSql('ALTER TABLE groupe_jdr_category DROP FOREIGN KEY FK_19D788D24717D41D');
        $this->addSql('DROP TABLE groupe_jdr_category');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE groupe_jdr_category (groupe_jdr_id INT NOT NULL, category_id INT NOT NULL, INDEX IDX_19D788D212469DE2 (category_id), INDEX IDX_19D788D24717D41D (groupe_jdr_id), PRIMARY KEY(groupe_jdr_id, category_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE groupe_jdr_category ADD CONSTRAINT FK_19D788D212469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE groupe_jdr_category ADD CONSTRAINT FK_19D788D24717D41D FOREIGN KEY (groupe_jdr_id) REFERENCES groupe_jdr (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE groupejdr_category DROP FOREIGN KEY FK_B4E47B264717D41D');
        $this->addSql('ALTER TABLE groupejdr_category DROP FOREIGN KEY FK_B4E47B2612469DE2');
        $this->addSql('DROP TABLE groupejdr_category');
    }
}
