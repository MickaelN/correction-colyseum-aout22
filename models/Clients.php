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
    
}
