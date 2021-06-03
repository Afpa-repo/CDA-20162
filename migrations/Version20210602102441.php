<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210602102441 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE address (id INT AUTO_INCREMENT NOT NULL, num_rue INT NOT NULL, rue LONGTEXT NOT NULL, compl_adresse LONGTEXT DEFAULT NULL, code_postal INT NOT NULL, ville LONGTEXT NOT NULL, pays LONGTEXT NOT NULL, type LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE adresse_client (id INT AUTO_INCREMENT NOT NULL, id_commande INT NOT NULL, id_adresse INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, ref_client LONGTEXT NOT NULL, nom LONGTEXT NOT NULL, prenom LONGTEXT NOT NULL, coef_reduc INT NOT NULL, type_client TINYINT(1) NOT NULL, adresse_mail LONGTEXT NOT NULL, password LONGTEXT NOT NULL, nombre_points INT NOT NULL, id_commercial_attribue INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE client_habite (id INT AUTO_INCREMENT NOT NULL, id_client INT NOT NULL, id_adresse INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commande (id INT AUTO_INCREMENT NOT NULL, reduction LONGTEXT DEFAULT NULL, df INT NOT NULL, date_paiement DATE DEFAULT NULL, date_expedition DATE DEFAULT NULL, commande_annule TINYINT(1) NOT NULL, frais_de_port DOUBLE PRECISION NOT NULL, prix_total DOUBLE PRECISION NOT NULL, id_client INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commande_concerne (id INT AUTO_INCREMENT NOT NULL, id_produit INT NOT NULL, id_commande INT NOT NULL, quantite INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commercial_attribue (id INT AUTO_INCREMENT NOT NULL, nom LONGTEXT NOT NULL, prenom LONGTEXT NOT NULL, mail LONGTEXT NOT NULL, num_tel INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE employe (id INT AUTO_INCREMENT NOT NULL, login LONGTEXT NOT NULL, password LONGTEXT NOT NULL, droits LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE facture (id INT AUTO_INCREMENT NOT NULL, id_commande INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fait_partie (id INT AUTO_INCREMENT NOT NULL, id_produit INT NOT NULL, id_rubrique INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fournisseur (id INT AUTO_INCREMENT NOT NULL, ref_fournisseur LONGTEXT NOT NULL, nom_fournisseur LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fournisseur_habite (id INT AUTO_INCREMENT NOT NULL, id_fournisseur INT NOT NULL, id_adresse INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, nom LONGTEXT NOT NULL, description LONGTEXT NOT NULL, prix DOUBLE PRECISION NOT NULL, garantie DATE NOT NULL, photo LONGTEXT NOT NULL, qte_stock INT NOT NULL, est_en_vente TINYINT(1) NOT NULL, id_fournisseur INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE remboursement (id INT AUTO_INCREMENT NOT NULL, id_produit INT NOT NULL, date_remboursement DATE DEFAULT NULL, id_facture INT NOT NULL, id_client INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rubriques (id INT AUTO_INCREMENT NOT NULL, nom_rubrique LONGTEXT NOT NULL, id_rubrique_parente INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE address');
        $this->addSql('DROP TABLE adresse_client');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE client_habite');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE commande_concerne');
        $this->addSql('DROP TABLE commercial_attribue');
        $this->addSql('DROP TABLE employe');
        $this->addSql('DROP TABLE facture');
        $this->addSql('DROP TABLE fait_partie');
        $this->addSql('DROP TABLE fournisseur');
        $this->addSql('DROP TABLE fournisseur_habite');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE remboursement');
        $this->addSql('DROP TABLE rubriques');
    }
}
