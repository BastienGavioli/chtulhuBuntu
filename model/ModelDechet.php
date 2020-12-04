<?php

require_once File::build_path(array('model', 'Model.php'));

class ModelDechet extends Model
{
    protected static $table_name = "dechets";
    protected static $class_name = "ModelDechet";
    protected static $primary = "id";

    private $id;
    private $position;
    private $type;
    private $quantite;
    private $visuel;

    public function getId()
    {
        return $this->id;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getQuantite()
    {
        return $this->quantite;
    }

    public function getVisuel()
    {
        return $this->visuel;
    }

    public function getData()
    {
        return array('id' => $this->id, 'position' => $this->position, 'type' => $this->type, 'quantite' => $this->quantite, 'visuel' =>$this->visuel);
    }

}