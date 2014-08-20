<?php

/**
 * Abstract Empleado
 */
abstract class Empleado 
{
  public $id;
  public $edad;
  public $area;
  public $nombre;
  public $apellido;  

  /**
   * @param int $id Empleado ID
   * @param string $nombre Empleado Nombre
   * @param string $apellido Empleado Apellido
   * @param string $area Empleado Area
   * @param int $edad Empleado Edad
   */
  public function __construct ($id, $nombre, $apellido, $area, $edad) 
  {
    $this->id = $id;
    $this->edad = $edad;
    $this->area = $area;
    $this->nombre = $nombre;
    $this->apellido = $apellido;
  }
}