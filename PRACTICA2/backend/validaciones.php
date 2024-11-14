<?php

    function validarTitulo($titulo){
        //mientras no este vacio y el titulo sea mayor de 5 letras
        if(!empty($titulo) && strlen($titulo)>5){
            return htmlspecialchars(trim($titulo));
        }
    }

    function validarDescripcion($descripcion){
        //mientras no este vacio y la descripcion sea mayor de 5 letras
        if(!empty($descripcion) && strlen($descripcion)>5){
            return htmlspecialchars(trim($descripcion));
        }
    }

    function validarPrioridad($prioridad){
        //mientras no este vacio y la prioridad este entre 1 y 5
        if(!empty($prioridad) && $prioridad>=1 && $prioridad<=5){
            return $prioridad;
        }
    }

    function validarFechaCreacion($fechaCreacion){
        //mientras no este vacio
        if(!empty($fechaCreacion)){
            return $fechaCreacion;
        }
    }

    function validarTipo($tipo){
        //mientras no este vacio y el tipo sea mayor de 5 letras
        if(!empty($tipo) && strlen($tipo)>5){
            return htmlspecialchars(trim($tipo));
        }
    }
