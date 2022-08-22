<?php
class Clients
{
    public int $id;
    public string $lastName;
    public string $firstName;
    public string $birthDate;
    public bool $card;
    public int $cardNumber;
    private PDO $pdo;
    
    /**
     * Permet la connexion à la BDD
     */
    public function __construct()
    {
        try {
            /** @var PDO $pdo  
             * Instance de l'objet PDO
             */
            $this->pdo = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root');
            /**
             * PDO::ATTR_ERRMODE et PDO::ERRMODE_EXCEPTION permettent de spécifier à PDO que l'on veux des Exceptions à la place des erreurs PHP. Cela va permettre de les attraper dans le catch.
             */
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $error) {
            die('Erreur : ' . $error->getMessage());
        }
    }
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
        /**
         * $queryResult devient une instance de l'objet PCOStatement
         * $pdo->query() execute la requête SQL
         */
        $queryResult = $this->pdo->query($query);
        /**
         * Le fetchAll permet de récupérer un tableau avec les valeurs de la BDD
         * Le paramètre PDO::FETCH_OBJ permet de spécifier que le tableau de retour doit contenir un objet avec des attributs correspondant aux champs de la BDD.
         */
        $clientList = $queryResult->fetchAll(PDO::FETCH_OBJ);
        return $clientList;
    }
}
