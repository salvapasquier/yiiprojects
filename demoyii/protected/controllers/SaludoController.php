<?php

class SaludoController extends Controller{
    
    public function actionIndex(){
        $saludo = 'Hola, ¿Cómo estás?';
        $this->render('index', array('saludo' => $saludo));
    }
}