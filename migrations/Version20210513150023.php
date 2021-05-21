<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210513150023 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tweet CHANGE id_tweet id_tweet VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE tweet_guardado CHANGE id_tweet id_tweet VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tweet CHANGE id_tweet id_tweet BIGINT NOT NULL');
        $this->addSql('ALTER TABLE tweet_guardado CHANGE id_tweet id_tweet BIGINT NOT NULL');
    }
}
