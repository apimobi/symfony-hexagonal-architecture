<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240830122854 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'test data';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(
            "INSERT INTO offer (title, content, published_at) VALUES ('title 1', 'content 1', '2024-08-30 12:28:54')"
        );
        $this->addSql(
            "INSERT INTO offer (title, content, published_at) VALUES ('title 2', 'content 2', '2024-09-30 12:28:54')"
        );
        $this->addSql(
            "INSERT INTO offer (title, content, published_at) VALUES ('title 3', 'content 3', '2024-10-30 12:28:54')"
        );


    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
