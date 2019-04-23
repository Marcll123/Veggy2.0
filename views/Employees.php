<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UsandoAJAX</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <main id="employee-view">
        <nav class="teal container">
            <h1 class="center">CRUD Empleados</h1>
        </nav>
        <div class="container">
            <div class="section">
                <button class="btn" id="btn-fetch">Consultar Empleados</button>
                <a class="waves-effect waves-light btn modal-trigger " id='btn-add' href="#modal"><i
                        class="material-icons right">add</i>Crear Empleado</a>
                <table>
                    <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                        <th>Contraseña</th>
                        <th>Acciones</th>
                    </tr>
                    <tbody id="tbody">

                    </tbody>
                </table>

            </div>
        </div>

        <div id="modal" class="modal modal-fixed-footer">
            <div class="modal-content">
                <h4 class="center">Crear Empleado</h4>
                <form id="form">
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="first_name" name="nameEmployee" type="text" class="validate">
                            <label for="first_name">Nombre</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" name="lastnameEmployee" type="text" class="validate">
                            <label for="last_name">Apellido</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="email" name="emailEmployee" type="email" class="validate">
                            <label for="email"">Correo</label>
                        </div>
                        <div class=" input-field col s6">
                                <input id="password" name="passEmployee" type="password" class="validate">
                                <label for="password">Contraseña</label>
                        </div>
                        <button class="btn waves-effect waves-light" id="btn-save" type='button' name="action">Crear
                            Empleado
                            <i class="material-icons right">send</i>
                        </button>

                    </div>
                </form>
                <div class="respuesta"></div>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
            </div>
        </div>

        <div id="modal2" class="modal modal-fixed-footer">
            <div class="modal-content">
                <h4 class="center">Eliminar</h4>
                <button class="btn waves-effect waves-light" id="btn-delete" type='button' name="action">Eliminar
                    Empleado
                    <i class="material-icons right">delete</i>



                </button>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
            </div>
        </div>


    </main>
    <script src="http://192.168.1.60:9090/bundle.js"></script>
</body>

</html>