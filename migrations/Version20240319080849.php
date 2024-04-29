<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240319080849 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE preference_de_contact DROP FOREIGN KEY FK_4278C137A21BD112');
        $this->addSql('ALTER TABLE personne DROP FOREIGN KEY FK_FCEC9EF582144A7');
        $this->addSql('DROP TABLE personne');
        $this->addSql('DROP INDEX UNIQ_4278C137A21BD112 ON preference_de_contact');
        $this->addSql('ALTER TABLE preference_de_contact DROP personne_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE personne (id INT AUTO_INCREMENT NOT NULL, canal_de_contact_id INT DEFAULT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, prenom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, nom_prenom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_FCEC9EF582144A7 (canal_de_contact_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE personne ADD CONSTRAINT FK_FCEC9EF582144A7 FOREIGN KEY (canal_de_contact_id) REFERENCES canal_de_contact (id)');
        $this->addSql('ALTER TABLE preference_de_contact ADD personne_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE preference_de_contact ADD CONSTRAINT FK_4278C137A21BD112 FOREIGN KEY (personne_id) REFERENCES personne (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_4278C137A21BD112 ON preference_de_contact (personne_id)');
    }
}
