<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241103115813 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE licence_jdr (id INT AUTO_INCREMENT NOT NULL, genre_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, publisher VARCHAR(255) NOT NULL, release_year INT NOT NULL, INDEX IDX_8CD1D4D74296D31F (genre_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE licence_jdr ADD CONSTRAINT FK_8CD1D4D74296D31F FOREIGN KEY (genre_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE groupe_jdr ADD licence_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE groupe_jdr ADD CONSTRAINT FK_8A3BCBFA26EF07C9 FOREIGN KEY (licence_id) REFERENCES licence_jdr (id)');
        $this->addSql('CREATE INDEX IDX_8A3BCBFA26EF07C9 ON groupe_jdr (licence_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE groupe_jdr DROP FOREIGN KEY FK_8A3BCBFA26EF07C9');
        $this->addSql('ALTER TABLE licence_jdr DROP FOREIGN KEY FK_8CD1D4D74296D31F');
        $this->addSql('DROP TABLE licence_jdr');
        $this->addSql('DROP INDEX IDX_8A3BCBFA26EF07C9 ON groupe_jdr');
        $this->addSql('ALTER TABLE groupe_jdr DROP licence_id');
    }
}
