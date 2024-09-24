<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240924111105 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE groupe_jdr (id INT AUTO_INCREMENT NOT NULL, owner_id INT NOT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, picture VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, edit_at DATETIME NOT NULL, max_player INT NOT NULL, INDEX IDX_8A3BCBFA7E3C61F9 (owner_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE groupejdr_players (groupe_jdr_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_33278C1F4717D41D (groupe_jdr_id), INDEX IDX_33278C1FA76ED395 (user_id), PRIMARY KEY(groupe_jdr_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, is_verified TINYINT(1) NOT NULL, first_name VARCHAR(255) DEFAULT NULL, last_name VARCHAR(255) DEFAULT NULL, birth_date DATETIME DEFAULT NULL, phone_number VARCHAR(255) DEFAULT NULL, gender VARCHAR(255) DEFAULT NULL, bio VARCHAR(255) DEFAULT NULL, avatar VARCHAR(255) DEFAULT NULL, username VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_groupe_jdr (user_id INT NOT NULL, groupe_jdr_id INT NOT NULL, INDEX IDX_2D5C0D16A76ED395 (user_id), INDEX IDX_2D5C0D164717D41D (groupe_jdr_id), PRIMARY KEY(user_id, groupe_jdr_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE groupe_jdr ADD CONSTRAINT FK_8A3BCBFA7E3C61F9 FOREIGN KEY (owner_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE groupejdr_players ADD CONSTRAINT FK_33278C1F4717D41D FOREIGN KEY (groupe_jdr_id) REFERENCES groupe_jdr (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE groupejdr_players ADD CONSTRAINT FK_33278C1FA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_groupe_jdr ADD CONSTRAINT FK_2D5C0D16A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_groupe_jdr ADD CONSTRAINT FK_2D5C0D164717D41D FOREIGN KEY (groupe_jdr_id) REFERENCES groupe_jdr (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE groupe_jdr DROP FOREIGN KEY FK_8A3BCBFA7E3C61F9');
        $this->addSql('ALTER TABLE groupejdr_players DROP FOREIGN KEY FK_33278C1F4717D41D');
        $this->addSql('ALTER TABLE groupejdr_players DROP FOREIGN KEY FK_33278C1FA76ED395');
        $this->addSql('ALTER TABLE user_groupe_jdr DROP FOREIGN KEY FK_2D5C0D16A76ED395');
        $this->addSql('ALTER TABLE user_groupe_jdr DROP FOREIGN KEY FK_2D5C0D164717D41D');
        $this->addSql('DROP TABLE groupe_jdr');
        $this->addSql('DROP TABLE groupejdr_players');
        $this->addSql('DROP TABLE `user`');
        $this->addSql('DROP TABLE user_groupe_jdr');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
