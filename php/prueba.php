<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de tablas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <main class="countainer">
       <div class="row">
          <div class="col-12">
            <h1>Listado de alumnos</h1>
          </div>
       </div>  
       </div class="row">
          <div class="col-12">
            <table class="table border">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Presentismo</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                           <td>1</td>
                           <td>Agustin</td>
                           <td>Beloso</td>
                           <td>Presente</td> 
                        </tr>
                        <tr>
                           <td>2</td>
                           <td>Ignacio</td>
                           <td>Porto</td>
                           <td>Presente</td> 
                        </tr>
                        <tr>
                           <td>3</td>
                           <td>Ana</td>
                           <td>Valle</td>
                           <td>Ausente</td> 
                        </tr>
                        <tr>
                           <td></td>
                           <td>Producto</td>
                           <td>cantidad</td>
                        </tr>
                        <tr>
                           <td>1</td>
                           <td>impresora HP1102w</td>
                           <td>20</td>
                        </tr>
                        <tr>
                           <td>2</td>
                           <td>Pizarra Digital</td>
                           <td>25</td>
                        </tr>
                        <tr>
                           <td>3</td>
                           <td>Notebook HP 15"</td>
                           <td>15</td>
                        </tr>
                        <tr>
                           <td class="text-end" colspan="2">Total</td>
                           <td>60 items</td>
                        </tr>
                </tbody>
            </table>
    </main>
</body>
</html>