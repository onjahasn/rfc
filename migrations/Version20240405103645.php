<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240405103645 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE canal_de_contact ADD details_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE canal_de_contact ADD CONSTRAINT FK_C63A85FFBB1A0722 FOREIGN KEY (details_id) REFERENCES details (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C63A85FFBB1A0722 ON canal_de_contact (details_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE canal_de_contact DROP FOREIGN KEY FK_C63A85FFBB1A0722');
        $this->addSql('DROP INDEX UNIQ_C63A85FFBB1A0722 ON canal_de_contact');
        $this->addSql('ALTER TABLE canal_de_contact DROP details_id');
    }
}
