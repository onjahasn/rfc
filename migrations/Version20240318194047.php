<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240318194047 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE preference_de_contact (id INT AUTO_INCREMENT NOT NULL, personne_id INT DEFAULT NULL, prm_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_4278C137A21BD112 (personne_id), UNIQUE INDEX UNIQ_4278C13769BE2C31 (prm_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE preference_de_contact ADD CONSTRAINT FK_4278C137A21BD112 FOREIGN KEY (personne_id) REFERENCES personne (id)');
        $this->addSql('ALTER TABLE preference_de_contact ADD CONSTRAINT FK_4278C13769BE2C31 FOREIGN KEY (prm_id) REFERENCES prm (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE preference_de_contact DROP FOREIGN KEY FK_4278C137A21BD112');
        $this->addSql('ALTER TABLE preference_de_contact DROP FOREIGN KEY FK_4278C13769BE2C31');
        $this->addSql('DROP TABLE preference_de_contact');
    }
}
