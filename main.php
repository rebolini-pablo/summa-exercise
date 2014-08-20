<?php

/**
 * Ejercicio:
 *  Crear las clases necesarias para administrar los Empleados de una Empresa. Cada empleado puede ser 
 *  de distinto tipo como ser, Programador, Diseñador.
 *  Estructura de clases:
 *
 * Empresa:
 *  Id
 *  Nombre
 *  Empleados
 *
 * Programador:
 *  Id
 *  Nombre
 *  Apellido
 *  Edad
 *  Lenguaje en el que programa( pueden ser: PHP, NET o Python )
 *
 * Diseñador
 *  Id
 *  Nombre
 *  Apellido
 *  Edad
 *  Tipo de diseñador( pueden ser: Gráfico o Web )
 *
 * En Empresa, tengo que poder:
 *  agregar Empleados
 *  obtener un listado de todos los Empleados
 *  buscar por Id y obtener un Empleado
 *  obtener el promedio de edad de los empleados
 * 
 * Nota: Demostrar conocimientos en el manejo de objetos, getters, setters, listados y herencia.  
 *
 * @author Rebolini Pablo <rebolini.pablo@gmail.com>
 */
  
  include 'Empresa.php';
  include 'Empleado.php';
  include 'Disenador.php';
  include 'Programador.php';

  // Creamos una empresa
  $empresa = new Empresa(1, 'Black Label Society');

  // Añadimos, uno a uno, los empleados
  $empresa->agregarEmpleado(new Disenador(1, 'John', 'Doe', 'Web', 23));
  $empresa->agregarEmpleado(new Disenador(2, 'Elton', 'John', 'Grafico', 27));
  $empresa->agregarEmpleado(new Programador(3, 'Petter', 'Capusotto', 'PHP', 31));
  $empresa->agregarEmpleado(new Programador(4, 'Bombita', 'Rodriguez', 'NET', 22));

  // Iteramos
  foreach ($empresa->obtenerEmpleados() as $e)
  {
    printf(
      "ID: %d, Nombre: %s, %s, Edad: %d, Tipo: %s %s <br>", 
      $e->id, $e->apellido, $e->nombre, $e->edad, get_class($e), $e->area
    );
  }

  // Busqueda por ID
  // $empleado = $empresa->obtenerEmpleadoPorId(3);
  // print_r($empleado);
  
  // Promedio Edades
  // print_r(
  //   $empresa->obtenerEdadPromedio()
  // );