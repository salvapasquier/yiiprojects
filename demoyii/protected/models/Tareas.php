<?php

class Tareas extends CActiveRecord {

    public static function model($classname = __CLASS__) {
        return parent::model($classname);
    }

    public function rules() {
        return array(
            array('nombre,descripcion', 'safe'),
            array('nombre,descripcion', 'required', 'message' => 'Campos requeridos'),
        );
    }

}