<?php
class ShowTypes
{
    public int $id;
    public string $type;
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
     * Méthode permettant de récupérer tout les types de spectacles.
     *
     * @return array
     */
    public function getShowTypeList(): array
    {
        $query = 'SELECT `id`, `type` FROM `showtypes`';
        $queryResult = $this->pdo->query($query);
        return $queryResult->fetchAll(PDO::FETCH_OBJ);
    }
}
