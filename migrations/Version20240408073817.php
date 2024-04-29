<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240408073817 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE canal_de_contact DROP FOREIGN KEY FK_C63A85FFBB1A0722');
        $this->addSql('DROP INDEX UNIQ_C63A85FFBB1A0722 ON canal_de_contact');
        $this->addSql('ALTER TABLE canal_de_contact ADD ligne1 VARCHAR(255) DEFAULT NULL, ADD ligne2 VARCHAR(255) DEFAULT NULL, ADD ligne3 VARCHAR(255) DEFAULT NULL, ADD ligne4 VARCHAR(255) DEFAULT NULL, ADD ligne5 VARCHAR(255) DEFAULT NULL, ADD ligne6 VARCHAR(255) DEFAULT NULL, DROP details_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE canal_de_contact ADD details_id INT DEFAULT NULL, DROP ligne1, DROP ligne2, DROP ligne3, DROP ligne4, DROP ligne5, DROP ligne6');
        $this->addSql('ALTER TABLE canal_de_contact ADD CONSTRAINT FK_C63A85FFBB1A0722 FOREIGN KEY (details_id) REFERENCES details (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C63A85FFBB1A0722 ON canal_de_contact (details_id)');
    }
}
