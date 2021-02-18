<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210126121634 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bien (id INT AUTO_INCREMENT NOT NULL, programme_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, surface DOUBLE PRECISION NOT NULL, prix INT NOT NULL, disponible INT NOT NULL, INDEX IDX_45EDC38662BB7AEE (programme_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lot (id INT AUTO_INCREMENT NOT NULL, bien_id INT DEFAULT NULL, lot VARCHAR(255) NOT NULL, surface DOUBLE PRECISION NOT NULL, etage VARCHAR(255) NOT NULL, orientation VARCHAR(255) NOT NULL, exterieur VARCHAR(255) NOT NULL, parking INT DEFAULT NULL, buyfor VARCHAR(255) NOT NULL, price INT DEFAULT NULL, nbpiece INT NOT NULL, INDEX IDX_B81291BBD95B80F (bien_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE news (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, snippet VARCHAR(255) NOT NULL, title_tag VARCHAR(255) DEFAULT NULL, content LONGTEXT NOT NULL, created_at DATETIME NOT NULL, miniature VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pages (id INT AUTO_INCREMENT NOT NULL, numero INT NOT NULL, page VARCHAR(255) NOT NULL, titre VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE programme (id INT AUTO_INCREMENT NOT NULL, is_prestige TINYINT(1) DEFAULT NULL, title VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, text LONGTEXT DEFAULT NULL, miniature VARCHAR(255) NOT NULL, img1 VARCHAR(255) DEFAULT NULL, img2 VARCHAR(255) DEFAULT NULL, departement INT NOT NULL, tag VARCHAR(255) NOT NULL, subtitle VARCHAR(255) DEFAULT NULL, text2 LONGTEXT DEFAULT NULL, subtitle2 VARCHAR(255) DEFAULT NULL, coords VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE prospect (id INT AUTO_INCREMENT NOT NULL, fullname VARCHAR(100) NOT NULL, phone VARCHAR(15) NOT NULL, email VARCHAR(100) NOT NULL, UNIQUE INDEX UNIQ_C9CE8C7DE7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_entity (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_6B7A5F55E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bien ADD CONSTRAINT FK_45EDC38662BB7AEE FOREIGN KEY (programme_id) REFERENCES programme (id)');
        $this->addSql('ALTER TABLE lot ADD CONSTRAINT FK_B81291BBD95B80F FOREIGN KEY (bien_id) REFERENCES bien (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE lot DROP FOREIGN KEY FK_B81291BBD95B80F');
        $this->addSql('ALTER TABLE bien DROP FOREIGN KEY FK_45EDC38662BB7AEE');
        $this->addSql('DROP TABLE bien');
        $this->addSql('DROP TABLE lot');
        $this->addSql('DROP TABLE news');
        $this->addSql('DROP TABLE page');
        $this->addSql('DROP TABLE programme');
        $this->addSql('DROP TABLE prospect');
        $this->addSql('DROP TABLE user_entity');
    }
}
