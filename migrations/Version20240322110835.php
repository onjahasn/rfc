<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240322110835 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE canal_de_contact ADD personne_physique_id INT DEFAULT NULL, ADD type VARCHAR(255) NOT NULL, ADD valeur VARCHAR(255) NOT NULL, ADD ligne1 VARCHAR(255) DEFAULT NULL, ADD ligne2 VARCHAR(255) DEFAULT NULL, ADD ligne3 VARCHAR(255) DEFAULT NULL, ADD ligne4 VARCHAR(255) DEFAULT NULL, ADD ligne5 VARCHAR(255) DEFAULT NULL, ADD ligne6 VARCHAR(255) DEFAULT NULL, DROP telephone, DROP adresse, DROP email, DROP personne_physique');
        $this->addSql('ALTER TABLE canal_de_contact ADD CONSTRAINT FK_C63A85FF54472AC9 FOREIGN KEY (personne_physique_id) REFERENCES personne_physique (id)');
        $this->addSql('CREATE INDEX IDX_C63A85FF54472AC9 ON canal_de_contact (personne_physique_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE canal_de_contact DROP FOREIGN KEY FK_C63A85FF54472AC9');
        $this->addSql('DROP INDEX IDX_C63A85FF54472AC9 ON canal_de_contact');
        $this->addSql('ALTER TABLE canal_de_contact ADD telephone VARCHAR(255) DEFAULT NULL, ADD adresse VARCHAR(255) DEFAULT NULL, ADD email VARCHAR(255) DEFAULT NULL, ADD personne_physique VARCHAR(255) DEFAULT NULL, DROP personne_physique_id, DROP type, DROP valeur, DROP ligne1, DROP ligne2, DROP ligne3, DROP ligne4, DROP ligne5, DROP ligne6');
    }
}
