<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240318194832 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE personne ADD canal_de_contact_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE personne ADD CONSTRAINT FK_FCEC9EF582144A7 FOREIGN KEY (canal_de_contact_id) REFERENCES canal_de_contact (id)');
        $this->addSql('CREATE INDEX IDX_FCEC9EF582144A7 ON personne (canal_de_contact_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE personne DROP FOREIGN KEY FK_FCEC9EF582144A7');
        $this->addSql('DROP INDEX IDX_FCEC9EF582144A7 ON personne');
        $this->addSql('ALTER TABLE personne DROP canal_de_contact_id');
    }
}
