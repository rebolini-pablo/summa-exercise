<?php

/**
 * Empresa
 *
 * @author Rebolini Pablo <rebolini.pablo@gmail.com>
 */
class Empresa 
{
  private $id;
  private $nombre;
  private $empleados = array();

  /**
   * @param int $id Empresa ID
   * @param string $nombre Empresa Nombre
   */
  public function __construct ($id, $nombre) 
  {
    $this->id = $id;
    $this->nombre = $nombre;
  }

  /**
   * @param object $empleado
   */
  public function agregarEmpleado ($empleado)
  {
    $hash = spl_object_hash($empleado);

    if (!isset($this->empleados[$hash]))
    {
      $this->empleados[$hash] = $empleado;
    }
  }

  /**
   * @return array Empleados
   */
  public function obtenerEmpleados () 
  {
    return $this->empleados;
  }

  /**
   * @param int $id Empleado ID
   * @return object $empleado Empleado
   */
  public function obtenerEmpleadoPorId ($id) 
  {
    foreach ($this->empleados as $empleado) 
    {
      if ($empleado->id === $id)
        return $empleado;
    }
  }

  /**
   * @return integer
   */
  public function obtenerEdadPromedio ()
  {
    $edades = array_map(function ($e) {
      return $e->edad;
    }, $this->empleados);

    return round(
      array_sum($edades) / count($edades)
    );    
  }
}