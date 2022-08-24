<?php
class ShowTypes extends Db
{
    public int $id;
    public string $type;

   
    /**
     * Méthode permettant de récupérer tout les types de spectacles.
     *
     * @return array
     */
    public function getShowTypeList(): array
    {
        $query = 'SELECT `id`, `type` FROM `showtypes`';
        return $this->getQueryResult($query);
    }
}
