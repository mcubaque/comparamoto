<?php
include '../modelo/conexion.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>prueba</title>
</head>
<body>
	 <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center text-center align-items-stretch" data-aos="fade-right">
            <div class="content">
              <p>
                 <form action="muestra.php" method="get" name="f1">
                 <h3>Moto 1</h3> 
                    <select name=marca1 onchange="cambia_referencia1()"> 
                    <option value="0" selected>Seleccione... 
                    <option value="1">Aprilla 
                    <option value="2">Akt 
                    <option value="3">Bajaj 
                    <option value="4">Benelli
                    <option value="5">KTM 
                    </select>
                    
                    <select name=referencia1> 
                    <option value="-">- 
                    </select>
                      <div class="text-center">
                        <button type="submit" class="btn btn-info">Agregar</button>
                      </div> 
                  </form>

                  <form action="muestra.php" method="get" name="f2">
                 <h3>Moto 2</h3> 
                    <select name=marca2 onchange="cambia_referencia2()"> 
                    <option value="0" selected>Seleccione... 
                    <option value="1">Aprilla 
                    <option value="2">Akt 
                    <option value="3">Bajaj 
                    <option value="4">Benelli
                    <option value="5">KTM 
                    </select>
                    
                    <select name=referencia2> 
                    <option value="-">- 
                    </select>
                      <div class="text-center">
                        <button type="submit" class="btn btn-info">Agregar</button>
                      </div> 
                  </form>


                  <script>
                  var referencias1_1=new Array("-","AF1 Futura","Amico","Area 51","Arrecife","Atlantic 125","...");
                  var referencias1_2=new Array("-","NKD 125","RTX 150","CR4 125","CR5 200","NKD Metal","...");
                  var referencias1_3=new Array("-","Discover 125","Boxer 100","Pulsar NS 200","Pusar RS 200","...");
                  var referencias1_4=new Array("-","TNT 25","TNT 302","TNT 600","...");
                  var referencias1_5=new Array("-","DUKE","...");

                  var todasReferencias1 = [
                    [],
                    referencias1_1,
                    referencias1_2,
                    referencias1_3,
                    referencias1_4,
                    referencias1_5,
                  ];

                  function cambia_referencia1(){ 
                    //tomo el valor del select del pais elegido 
                    var marca1 
                    marca1 = document.f1.marca1[document.f1.marca1.selectedIndex].value 
                    //miro a ver si el pais está definido 
                    if (marca1 != 0) { 
                        //si estaba definido, entonces coloco las opciones de la provincia correspondiente. 
                        //selecciono el array de provincia adecuado 
                        mis_referencias1=todasReferencias1[marca1]
                        //calculo el numero de provincias 
                        num_referencias1 = mis_referencias1.length 
                        //marco el número de provincias en el select 
                        document.f1.referencia1.length = num_referencias1 
                        //para cada provincia del array, la introduzco en el select 
                        for(i=0;i<num_referencias1;i++){ 
                          document.f1.referencia1.options[i].value=mis_referencias1[i] 
                          document.f1.referencia1.options[i].text=mis_referencias1[i] 
                        } 
                    }else{ 
                        //si no había provincia seleccionada, elimino las provincias del select 
                        document.f1.referencia1.length = 1 
                        //coloco un guión en la única opción que he dejado 
                        document.f1.referencia1.options[0].value = "-" 
                        document.f1.referencia1.options[0].text = "-" 
                    } 
                    //marco como seleccionada la opción primera de provincia 
                    document.f1.referencia1.options[0].selected = true 
                }

                  var referencias2_1=new Array("-","AF1 Futura","Amico","Area 51","Arrecife","Atlantic 125","...");
                  var referencias2_2=new Array("-","NKD 125","RTX 150","CR4 125","CR5 200","NKD Metal","...");
                  var referencias2_3=new Array("-","Discover 150 s" ,"Boxer 100","Pulsar NS 200","Pusar RS 200","...");
                  var referencias2_4=new Array("-","TNT 25","TNT 302","TNT 600","...");
                  var referencias2_5=new Array("-","DUKE","...");

                  var todasReferencias2 = [
                    [],
                    referencias2_1,
                    referencias2_2,
                    referencias2_3,
                    referencias2_4,
                    referencias2_5,
                  ];

                  function cambia_referencia2(){ 
                    //tomo el valor del select del pais elegido 
                    var marca2 
                    marca2 = document.f2.marca2[document.f2.marca2.selectedIndex].value 
                    //miro a ver si el pais está definido 
                    if (marca2 != 0) { 
                        //si estaba definido, entonces coloco las opciones de la provincia correspondiente. 
                        //selecciono el array de provincia adecuado 
                        mis_referencias2=todasReferencias2[marca2]
                        //calculo el numero de provincias 
                        num_referencias2 = mis_referencias2.length 
                        //marco el número de provincias en el select 
                        document.f2.referencia2.length = num_referencias2 
                        //para cada provincia del array, la introduzco en el select 
                        for(i=0;i<num_referencias2;i++){ 
                          document.f2.referencia2.options[i].value=mis_referencias2[i] 
                          document.f2.referencia2.options[i].text=mis_referencias2[i] 
                        } 
                    }else{ 
                        //si no había provincia seleccionada, elimino las provincias del select 
                        document.f2.referencia2.length = 1 
                        //coloco un guión en la única opción que he dejado 
                        document.f2.referencia2.options[0].value = "-" 
                        document.f2.referencia2.options[0].text = "-" 
                    } 
                    //marco como seleccionada la opción primera de provincia 
                    document.f2.referencia2.options[0].selected = true 
                }

              </script>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Why Us Section -->

    
</body>
</html>