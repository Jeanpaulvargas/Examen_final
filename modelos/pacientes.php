<?php
require 'Conexion.php';

class Paciente extends Conexion{
    public $PacienteID;
    public $Nombre_p;
    public $Apellido_P;
    public $Telefono_P;
    public $DPI_P;
    public $Situacion_p;


    public function __construct($args = [])
    {
        $this->PacienteID = $args['PacienteID'] ?? null;
        $this->Nombre_p = $args['Nombre_p'] ?? '';
        $this->Apellido_P = $args['Apellido_P'] ?? '';
        $this->Telefono_P = $args['Telefono_P'] ?? 0;
        $this->DPI_P = $args['DPI_P'] ?? 0;
        $this->Situacion_p = $args['Situacion_p'] ?? '';

    }

      // METODO PARA INSERTAR
      public function guardar(){
        $sql = "INSERT into hospital (Nombre_p,
         Apellido_P, Telefono_P, DPI_P) values ('$this->Nombre_p',
         '$this->Apellido_P', '$this->Telefono_P', '$this->DPI_P')";
        $resultado = $this->ejecutar($sql);
        return $resultado; 
    }

      // METODO PARA CONSULTAR

      public static function buscarTodos(...$columnas){
        $cols = count($columnas) > 0 ? implode(',', $columnas) : '*';
        $sql = "SELECT $cols FROM Pacientes where Situacion_p = 1 ";
        $resultado = self::servir($sql);
        return $resultado;
    }


    public function buscar(...$columnas){
        $cols = count($columnas) > 0 ? implode(',', $columnas) : '*';
        $sql = "SELECT $cols FROM Pacientes where Situacion_p = 1 ";


        if($this->Nombre_p != ''){
            $sql .= " AND Nombre_p like '%$this->Nombre_p%' ";
        }
        if($this->Apellido_P != ''){
            $sql .= " AND Apellido_P like'%$this->Apellido_P%' ";
        }

        $resultado = self::servir($sql);
        return $resultado;
    }

    public function buscarId($id){
        $sql = " SELECT * FROM Pacientes WHERE Situacion_p = 1 AND PacienteID = '$id' ";
        $resultado = array_shift( self::servir($sql)) ;

        return $resultado;
    }

    public function modificar(){
        $sql = "UPDATE Pacientes SET Nombre_p = '$this->Nombre_p', Apellido_P = '$this->Apellido_P', Telefono_P = '$this->Telefono_P', DPI_P = '$this->DPI_P' WHERE PacienteID = $this->PacienteID ";
        $resultado = $this->ejecutar($sql);
        return $resultado; 
    }

    public function eliminar(){
        // $sql = "DELETE FROM Pacientes WHERE PacienteID = $this->PacienteID ";

        // echo $sql;
        $sql = "UPDATE Pacientes SET Situacion_p = 0 WHERE PacienteID = $this->PacienteID ";
        $resultado = $this->ejecutar($sql);
        return $resultado; 
    }
}