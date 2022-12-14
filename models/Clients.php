<?php
class Clients extends Db
{
    public int $id;
    public string $lastName;
    public string $firstName;
    public string $birthDate;
    public bool $card;
    public int $cardNumber;


    /**
     * Méthode qui permet de récupérer la liste complète des clients.
     *
     * @return array
     */
    public function getClientList(): array
    {
        /**
         * Création de la requête SQL
         */
        $query = 'SELECT `id`, `lastName`, `firstName`, `birthDate`, `card`, `cardNumber` FROM `clients`';

        return $this->getQueryResult($query);
    }

    public function getTwentyFirstClient(): array
    {
        $query = 'SELECT `id`, `lastName`, `firstName`, `birthDate`, `card`, `cardNumber` FROM `clients` LIMIT 0,20';
        return $this->getQueryResult($query);
    }

    public function getClientWithFidelityCard(): array
    {
        $query = 'SELECT `cli`.`id`, `cli`.`lastName`, `cli`.`firstName`, `cli`.`birthDate`, `cli`.`card`, `cli`.`cardNumber` FROM `clients` AS `cli` INNER JOIN `cards` AS `ca` ON `cli`.`cardNumber` = `ca`.`cardNumber` WHERE `ca`.`cardTypesId` = 1';
        return $this->getQueryResult($query);
    }

    public function getClientWithM(): array
    {
        $query = 'SELECT `lastName`, `firstName` FROM `clients` WHERE `lastName` LIKE \'M%\' ORDER BY `lastName` ASC';
        return $this->getQueryResult($query);
    }

    public function getClientWithFidelityCardNumber(): array
    {
        $query = 'SELECT 
        `cli`.`id`, `cli`.`lastName`, `cli`.`firstName`, DATE_FORMAT(`cli`.`birthDate`, \'%d/%m/%Y\') AS `birthDate`, `cli`.`card`
        ,CASE `ca`.`cardTypesId`  WHEN 1 THEN \'oui\'  ELSE \'non\' END AS `fidelityCard`
        ,CASE `ca`.`cardTypesId`  
            WHEN 1 THEN `cli`.`cardNumber`  
            ELSE null 
        END AS `cardNumber`
    FROM 
        `clients` AS `cli` 
        LEFT JOIN `cards` AS `ca` ON `cli`.`cardNumber` = `ca`.`cardNumber` ';
        return $this->getQueryResult($query);
    }
}
