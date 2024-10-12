<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241012140412 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD discord_pseudo VARCHAR(255) DEFAULT NULL, ADD twitter_pseudo VARCHAR(255) DEFAULT NULL, ADD roll20_pseudo VARCHAR(255) DEFAULT NULL, ADD youtube_channel_link VARCHAR(255) DEFAULT NULL, ADD twitch_channel_link VARCHAR(255) DEFAULT NULL, ADD competence VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `user` DROP discord_pseudo, DROP twitter_pseudo, DROP roll20_pseudo, DROP youtube_channel_link, DROP twitch_channel_link, DROP competence');
    }
}
