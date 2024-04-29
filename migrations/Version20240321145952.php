<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240321145952 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE canal_de_contact DROP FOREIGN KEY FK_C63A85FF54472AC9');
        $this->addSql('DROP INDEX IDX_C63A85FF54472AC9 ON canal_de_contact');
        $this->addSql('ALTER TABLE canal_de_contact DROP personne_physique_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE canal_de_contact ADD personne_physique_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE canal_de_contact ADD CONSTRAINT FK_C63A85FF54472AC9 FOREIGN KEY (personne_physique_id) REFERENCES personne_physique (id)');
        $this->addSql('CREATE INDEX IDX_C63A85FF54472AC9 ON canal_de_contact (personne_physique_id)');
    }
}
