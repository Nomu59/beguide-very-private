<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231030145412 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE communauté CHANGE community_id community_id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE onboarding CHANGE onborading_id onborading_id INT AUTO_INCREMENT NOT NULL, CHANGE user_id user_id INT DEFAULT NULL, CHANGE is_published is_published TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE tutorial CHANGE tutorial_id tutorial_id INT AUTO_INCREMENT NOT NULL, CHANGE user_id user_id INT DEFAULT NULL, CHANGE content content LONGTEXT DEFAULT NULL, CHANGE is_published is_published TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE appartenir DROP tutorial_order');
        $this->addSql('ALTER TABLE appartenir RENAME INDEX onborading_id TO IDX_A2A0D90C4425E15D');
        $this->addSql('ALTER TABLE utilisateur CHANGE user_id user_id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE lier_ DROP role');
        $this->addSql('ALTER TABLE lier_ RENAME INDEX community_id TO IDX_740F8B02FDA7B0BF');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('ALTER TABLE appartenir ADD tutorial_order VARCHAR(50) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE appartenir RENAME INDEX idx_a2a0d90c4425e15d TO onborading_id');
        $this->addSql('ALTER TABLE communauté CHANGE community_id community_id INT NOT NULL');
        $this->addSql('ALTER TABLE lier_ ADD role VARCHAR(50) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE lier_ RENAME INDEX idx_740f8b02fda7b0bf TO community_id');
        $this->addSql('ALTER TABLE onboarding CHANGE onborading_id onborading_id INT NOT NULL, CHANGE user_id user_id INT NOT NULL, CHANGE is_published is_published TINYINT(1) DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE tutorial CHANGE tutorial_id tutorial_id INT NOT NULL, CHANGE user_id user_id INT NOT NULL, CHANGE content content LONGTEXT DEFAULT NULL COLLATE `utf8mb4_bin`, CHANGE is_published is_published TINYINT(1) DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE utilisateur CHANGE user_id user_id INT NOT NULL');
    }
}
