<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241017135245 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user_favorite_jdr (user_id INT NOT NULL, groupe_jdr_id INT NOT NULL, INDEX IDX_8D2F4657A76ED395 (user_id), INDEX IDX_8D2F46574717D41D (groupe_jdr_id), PRIMARY KEY(user_id, groupe_jdr_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_favorite_jdr ADD CONSTRAINT FK_8D2F4657A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_favorite_jdr ADD CONSTRAINT FK_8D2F46574717D41D FOREIGN KEY (groupe_jdr_id) REFERENCES groupe_jdr (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_favorite_jdr DROP FOREIGN KEY FK_8D2F4657A76ED395');
        $this->addSql('ALTER TABLE user_favorite_jdr DROP FOREIGN KEY FK_8D2F46574717D41D');
        $this->addSql('DROP TABLE user_favorite_jdr');
    }
}
