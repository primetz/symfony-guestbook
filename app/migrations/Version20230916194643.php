<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230916194643 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('INSERT INTO admin VALUES (nextval(\'admin_id_seq\'), \'admin\', \'["ROLE_ADMIN"]\', \'$2y$13$k03FmmZzF.TkseyyZK7Dc.tgAKlNYbMIFRLCijy/6Fxc0CRqtKdGq\')');

    }

    public function down(Schema $schema): void
    {
        $this->addSql('TRUNCATE admin RESTART IDENTITY CASCADE');
    }
}
