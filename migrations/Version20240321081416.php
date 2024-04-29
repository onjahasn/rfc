<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240321081416 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE personne_physique DROP FOREIGN KEY FK_5C2B29A2582144A7');
        $this->addSql('DROP INDEX IDX_5C2B29A2582144A7 ON personne_physique');
        $this->addSql('ALTER TABLE personne_physique DROP canal_de_contact_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE personne_physique ADD canal_de_contact_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE personne_physique ADD CONSTRAINT FK_5C2B29A2582144A7 FOREIGN KEY (canal_de_contact_id) REFERENCES personne_physique (id)');
        $this->addSql('CREATE INDEX IDX_5C2B29A2582144A7 ON personne_physique (canal_de_contact_id)');
    }
}
