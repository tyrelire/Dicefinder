<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241023095342 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, subject VARCHAR(255) NOT NULL, message VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE conversation (id INT AUTO_INCREMENT NOT NULL, created_by_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, INDEX IDX_8A8E26E9B03A8386 (created_by_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE conversation_user (conversation_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_5AECB5559AC0396 (conversation_id), INDEX IDX_5AECB555A76ED395 (user_id), PRIMARY KEY(conversation_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE event (id INT AUTO_INCREMENT NOT NULL, groupe_jdr_id INT DEFAULT NULL, day_of_week VARCHAR(255) NOT NULL, event_time TIME NOT NULL, INDEX IDX_3BAE0AA74717D41D (groupe_jdr_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE friendship (id INT AUTO_INCREMENT NOT NULL, requester_id INT DEFAULT NULL, receiver_id INT DEFAULT NULL, status VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, friend_at DATETIME DEFAULT NULL, INDEX IDX_7234A45FED442CF4 (requester_id), INDEX IDX_7234A45FCD53EDB6 (receiver_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE groupe_jdr (id INT AUTO_INCREMENT NOT NULL, owner_id INT NOT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, picture VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, edit_at DATETIME NOT NULL, max_player INT NOT NULL, status VARCHAR(255) NOT NULL, recrutement TINYINT(1) NOT NULL, is_archived TINYINT(1) DEFAULT 0 NOT NULL, INDEX IDX_8A3BCBFA7E3C61F9 (owner_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE groupejdr_players (groupe_jdr_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_33278C1F4717D41D (groupe_jdr_id), INDEX IDX_33278C1FA76ED395 (user_id), PRIMARY KEY(groupe_jdr_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE groupejdr_category (groupe_jdr_id INT NOT NULL, category_id INT NOT NULL, INDEX IDX_B4E47B264717D41D (groupe_jdr_id), INDEX IDX_B4E47B2612469DE2 (category_id), PRIMARY KEY(groupe_jdr_id, category_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE invitation (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, groupe_jdr_id INT NOT NULL, requested_by_id INT DEFAULT NULL, status VARCHAR(255) NOT NULL, message VARCHAR(255) DEFAULT NULL, initiated_by VARCHAR(255) DEFAULT NULL, INDEX IDX_F11D61A2A76ED395 (user_id), INDEX IDX_F11D61A24717D41D (groupe_jdr_id), INDEX IDX_F11D61A24DA1E751 (requested_by_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE message (id INT AUTO_INCREMENT NOT NULL, sent_by_id INT DEFAULT NULL, conversation_id INT DEFAULT NULL, content LONGTEXT NOT NULL, send_at DATETIME NOT NULL, is_read TINYINT(1) NOT NULL, read_at DATETIME NOT NULL, INDEX IDX_B6BD307FA45BB98C (sent_by_id), INDEX IDX_B6BD307F9AC0396 (conversation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE notification (id INT AUTO_INCREMENT NOT NULL, recipient_id INT DEFAULT NULL, groupe_jdr_id INT DEFAULT NULL, type VARCHAR(255) NOT NULL, message LONGTEXT NOT NULL, created_at DATETIME NOT NULL, is_read TINYINT(1) NOT NULL, INDEX IDX_BF5476CAE92F8F78 (recipient_id), INDEX IDX_BF5476CA4717D41D (groupe_jdr_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE notification_history (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, groupe_jdr_id INT DEFAULT NULL, status VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, INDEX IDX_32A4FAFCA76ED395 (user_id), INDEX IDX_32A4FAFC4717D41D (groupe_jdr_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE player_membership (id INT AUTO_INCREMENT NOT NULL, player_id INT DEFAULT NULL, groupe_jdr_id INT DEFAULT NULL, joined_at DATETIME DEFAULT NULL, INDEX IDX_D95A56B899E6F5DF (player_id), INDEX IDX_D95A56B84717D41D (groupe_jdr_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, is_verified TINYINT(1) NOT NULL, first_name VARCHAR(255) DEFAULT NULL, last_name VARCHAR(255) DEFAULT NULL, birth_date DATETIME DEFAULT NULL, gender VARCHAR(255) DEFAULT NULL, bio VARCHAR(255) DEFAULT NULL, avatar VARCHAR(255) DEFAULT NULL, username VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, is_vip TINYINT(1) NOT NULL, banner VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_groupe_jdr (user_id INT NOT NULL, groupe_jdr_id INT NOT NULL, INDEX IDX_2D5C0D16A76ED395 (user_id), INDEX IDX_2D5C0D164717D41D (groupe_jdr_id), PRIMARY KEY(user_id, groupe_jdr_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_favorite_jdr (user_id INT NOT NULL, groupe_jdr_id INT NOT NULL, INDEX IDX_8D2F4657A76ED395 (user_id), INDEX IDX_8D2F46574717D41D (groupe_jdr_id), PRIMARY KEY(user_id, groupe_jdr_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE conversation ADD CONSTRAINT FK_8A8E26E9B03A8386 FOREIGN KEY (created_by_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE conversation_user ADD CONSTRAINT FK_5AECB5559AC0396 FOREIGN KEY (conversation_id) REFERENCES conversation (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE conversation_user ADD CONSTRAINT FK_5AECB555A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT FK_3BAE0AA74717D41D FOREIGN KEY (groupe_jdr_id) REFERENCES groupe_jdr (id)');
        $this->addSql('ALTER TABLE friendship ADD CONSTRAINT FK_7234A45FED442CF4 FOREIGN KEY (requester_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE friendship ADD CONSTRAINT FK_7234A45FCD53EDB6 FOREIGN KEY (receiver_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE groupe_jdr ADD CONSTRAINT FK_8A3BCBFA7E3C61F9 FOREIGN KEY (owner_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE groupejdr_players ADD CONSTRAINT FK_33278C1F4717D41D FOREIGN KEY (groupe_jdr_id) REFERENCES groupe_jdr (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE groupejdr_players ADD CONSTRAINT FK_33278C1FA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE groupejdr_category ADD CONSTRAINT FK_B4E47B264717D41D FOREIGN KEY (groupe_jdr_id) REFERENCES groupe_jdr (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE groupejdr_category ADD CONSTRAINT FK_B4E47B2612469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE invitation ADD CONSTRAINT FK_F11D61A2A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE invitation ADD CONSTRAINT FK_F11D61A24717D41D FOREIGN KEY (groupe_jdr_id) REFERENCES groupe_jdr (id)');
        $this->addSql('ALTER TABLE invitation ADD CONSTRAINT FK_F11D61A24DA1E751 FOREIGN KEY (requested_by_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307FA45BB98C FOREIGN KEY (sent_by_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307F9AC0396 FOREIGN KEY (conversation_id) REFERENCES conversation (id)');
        $this->addSql('ALTER TABLE notification ADD CONSTRAINT FK_BF5476CAE92F8F78 FOREIGN KEY (recipient_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE notification ADD CONSTRAINT FK_BF5476CA4717D41D FOREIGN KEY (groupe_jdr_id) REFERENCES groupe_jdr (id)');
        $this->addSql('ALTER TABLE notification_history ADD CONSTRAINT FK_32A4FAFCA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE notification_history ADD CONSTRAINT FK_32A4FAFC4717D41D FOREIGN KEY (groupe_jdr_id) REFERENCES groupe_jdr (id)');
        $this->addSql('ALTER TABLE player_membership ADD CONSTRAINT FK_D95A56B899E6F5DF FOREIGN KEY (player_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE player_membership ADD CONSTRAINT FK_D95A56B84717D41D FOREIGN KEY (groupe_jdr_id) REFERENCES groupe_jdr (id)');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE user_groupe_jdr ADD CONSTRAINT FK_2D5C0D16A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_groupe_jdr ADD CONSTRAINT FK_2D5C0D164717D41D FOREIGN KEY (groupe_jdr_id) REFERENCES groupe_jdr (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_favorite_jdr ADD CONSTRAINT FK_8D2F4657A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_favorite_jdr ADD CONSTRAINT FK_8D2F46574717D41D FOREIGN KEY (groupe_jdr_id) REFERENCES groupe_jdr (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE conversation DROP FOREIGN KEY FK_8A8E26E9B03A8386');
        $this->addSql('ALTER TABLE conversation_user DROP FOREIGN KEY FK_5AECB5559AC0396');
        $this->addSql('ALTER TABLE conversation_user DROP FOREIGN KEY FK_5AECB555A76ED395');
        $this->addSql('ALTER TABLE event DROP FOREIGN KEY FK_3BAE0AA74717D41D');
        $this->addSql('ALTER TABLE friendship DROP FOREIGN KEY FK_7234A45FED442CF4');
        $this->addSql('ALTER TABLE friendship DROP FOREIGN KEY FK_7234A45FCD53EDB6');
        $this->addSql('ALTER TABLE groupe_jdr DROP FOREIGN KEY FK_8A3BCBFA7E3C61F9');
        $this->addSql('ALTER TABLE groupejdr_players DROP FOREIGN KEY FK_33278C1F4717D41D');
        $this->addSql('ALTER TABLE groupejdr_players DROP FOREIGN KEY FK_33278C1FA76ED395');
        $this->addSql('ALTER TABLE groupejdr_category DROP FOREIGN KEY FK_B4E47B264717D41D');
        $this->addSql('ALTER TABLE groupejdr_category DROP FOREIGN KEY FK_B4E47B2612469DE2');
        $this->addSql('ALTER TABLE invitation DROP FOREIGN KEY FK_F11D61A2A76ED395');
        $this->addSql('ALTER TABLE invitation DROP FOREIGN KEY FK_F11D61A24717D41D');
        $this->addSql('ALTER TABLE invitation DROP FOREIGN KEY FK_F11D61A24DA1E751');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307FA45BB98C');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307F9AC0396');
        $this->addSql('ALTER TABLE notification DROP FOREIGN KEY FK_BF5476CAE92F8F78');
        $this->addSql('ALTER TABLE notification DROP FOREIGN KEY FK_BF5476CA4717D41D');
        $this->addSql('ALTER TABLE notification_history DROP FOREIGN KEY FK_32A4FAFCA76ED395');
        $this->addSql('ALTER TABLE notification_history DROP FOREIGN KEY FK_32A4FAFC4717D41D');
        $this->addSql('ALTER TABLE player_membership DROP FOREIGN KEY FK_D95A56B899E6F5DF');
        $this->addSql('ALTER TABLE player_membership DROP FOREIGN KEY FK_D95A56B84717D41D');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('ALTER TABLE user_groupe_jdr DROP FOREIGN KEY FK_2D5C0D16A76ED395');
        $this->addSql('ALTER TABLE user_groupe_jdr DROP FOREIGN KEY FK_2D5C0D164717D41D');
        $this->addSql('ALTER TABLE user_favorite_jdr DROP FOREIGN KEY FK_8D2F4657A76ED395');
        $this->addSql('ALTER TABLE user_favorite_jdr DROP FOREIGN KEY FK_8D2F46574717D41D');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE contact');
        $this->addSql('DROP TABLE conversation');
        $this->addSql('DROP TABLE conversation_user');
        $this->addSql('DROP TABLE event');
        $this->addSql('DROP TABLE friendship');
        $this->addSql('DROP TABLE groupe_jdr');
        $this->addSql('DROP TABLE groupejdr_players');
        $this->addSql('DROP TABLE groupejdr_category');
        $this->addSql('DROP TABLE invitation');
        $this->addSql('DROP TABLE message');
        $this->addSql('DROP TABLE notification');
        $this->addSql('DROP TABLE notification_history');
        $this->addSql('DROP TABLE player_membership');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('DROP TABLE `user`');
        $this->addSql('DROP TABLE user_groupe_jdr');
        $this->addSql('DROP TABLE user_favorite_jdr');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
