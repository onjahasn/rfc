<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240318192812 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE canal_de_contact (id INT AUTO_INCREMENT NOT NULL, telephone VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE prm (id INT AUTO_INCREMENT NOT NULL, prm_adresse_ligne_deux VARCHAR(255) DEFAULT NULL, prm_adresse_ligne_trois VARCHAR(255) DEFAULT NULL, prm_adresse_ligne_quatre VARCHAR(255) DEFAULT NULL, prm_adresse_ligne_cinq VARCHAR(255) DEFAULT NULL, prm_adresse_ligne_six VARCHAR(255) DEFAULT NULL, prm_adresse_code_insee VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE personne ADD nom_prenom VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE canal_de_contact');
        $this->addSql('DROP TABLE prm');
        $this->addSql('ALTER TABLE personne DROP nom_prenom');
    }
}
