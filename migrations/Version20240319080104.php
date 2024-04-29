<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240319080104 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE personne_physique (id INT AUTO_INCREMENT NOT NULL, canal_de_contact_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, nom_prenom VARCHAR(255) NOT NULL, INDEX IDX_5C2B29A2582144A7 (canal_de_contact_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE personne_physique ADD CONSTRAINT FK_5C2B29A2582144A7 FOREIGN KEY (canal_de_contact_id) REFERENCES personne_physique (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE personne_physique DROP FOREIGN KEY FK_5C2B29A2582144A7');
        $this->addSql('DROP TABLE personne_physique');
    }
}
