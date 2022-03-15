<?php
////////////////////////1.INICIALIZAR///////////////////////////////////////////////////////////////////////////////////////////////////
///echo "INICIALIZAMOS EL ARRAY<br>";

$array = array(
   11  =>"aa<br>",
   22  => "bb<br>",
   33  => "cc<br>",
 );
print_r($array);



///2. Contar los elementos del Array:

///echo "CONTAMOS LOS ELEMENTOS<br>";
///$array = array(
///$id[11] = 'aa<br>',
///$id[22] = 'bb<br>',
///$id[33] = 'cc<br>',
///);
///var_dump(count($id));

///print_r($array);


////////////3.Modificar el Objeto con ID = 33, por el siguiente Objeto:  ///////////////////////////////////////////////////
///{ id=33, nombre="cccc" } 

///echo "HACEMOS EL REEMPLAZO<br>";
///$arrayBase = array(
 ///   11  => "aa<br>",
 ///   22  => "bb<br>",
  ///  33  => "cc<br>",
  ///  );

///$reemplazo = array(33 => "cccc");
///$resultado = array_replace($arrayBase, $reemplazo);

///Print_r($resultado);


//////////////////////////////4. Eliminar el Objeto con ID = 22 del Array: /////////////////////////////////////////////////////////


///$arrayBase = array(
   /// 11  => "aa<br>",
  ///  22  => "bb<br>",
 ///   33  => "cc<br>",
  ///  );

///Unset($arrayBase[22]);
///Print_r($arrayBase);	

////////////////////////////////////5. Adicionar los dos siguientes Objetos al Array: ///////////////////////////////////////////////////
///////////////////////////////////////{ id=44, nombre="dd" }, { id=55, nombre="ee" } ///////////////////////////////////////////////////

///$arrayBase = array(
///    11  => "aa<br>",
 ///   22  => "bb<br>",
 ///   33  => "cc<br>",
 ///   44  => "dd<br>",
 ///   55  => "ee<br>"
 ///  );

///print_r($arrayBase);


////////////////////////////////////6. Eliminar el Objeto con ID = 44 e imprimir el Array final.////////////////////////////////////

///echo "ELIMINADOS EL OBJETO <br>";
 /// $arrayBase = array(
 ///   11    => "aa<br>",
 ///   22  => "bb<br>",
 ///   33  => "cc<br>",
 ///   44  => "dd<br>",
 ///   55  => "ee<br>"
 ///   );

///Unset($arrayBase[44]);
///Print_r($arrayBase);



?>



