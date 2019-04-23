<?php require_once '../api/core/helpers/DasboardHeader.php' ?>

<section class="container">
    <h1 class="center letra">Administración de usuarios</h1>
    <div class="col s12 container">
        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix grey-text">search</i>
                <textarea id="icon_prefix2" class="materialize-textarea center"></textarea>
                <label for="icon_prefix2">Buscar usuarios</label>
            </div>
        </div>
    </div>
    <table class="highlight responsive-table">
        <thead>
            <tr class="header-table">
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Contraseña</th>
                <th>Teléfono</th>
                <th>Fechas Natalidad</th>
                <th>Departamento</th>
                <th>Municipio</th>
                <th>Dirrección</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody id="tbody">
           
        </tbody>
    </table>

    <!-- Paginacion de las tablas -->
    <ul class="pagination center">
        <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
        <li class="active"><a href="#!">1</a></li>
        <li class="waves-effect"><a href="#!">2</a></li>
        <li class="waves-effect"><a href="#!">3</a></li>
        <li class="waves-effect"><a href="#!">4</a></li>
        <li class="waves-effect"><a href="#!">5</a></li>
        <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
    </ul>
    </div>


    <div class="row">
        <div class="input-field col m6 l12 right-align">
            <a href="#modal1" class="waves-effect waves-light btn modal-trigger"><i
                    class="material-icons left">add</i>Agregar Usuario</a>
        </div>

</section>
<!--Primer modal encargado de realizar la accion de agrgar un nuevo usuario-->
<div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
        <div class="row">
            <article class="row s12 l8">
                <h3 class="letra center">Nuevo usuario</h3>
                <form action="">
                    <div class="input-field col s6">
                        <i class="material-icons prefix grey-text">account_box</i>
                        <input id="first_name" type="text" class="validate">
                        <label for="first_name">Nombre</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix grey-text">account_box</i>
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">Apellidos</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix grey-text">email</i>
                        <input id="email" type="email" class="validate">
                        <label for="email">Correo</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix grey-text">enhanced_encryption</i>
                        <input id="password" type="password" class="validate">
                        <label for="password">Contraseña</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix grey-text">phone</i>
                        <input id="icon_telephone" type="tel" class="validate">
                        <label for="icon_telephone">Teléfono</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix grey-text">event</i>
                        <input type="text" class="datepicker" placeholder="Fecha Nacimineto">
                    </div>
                    <div class="input-field col s6">
                        <select>
                            <option value="" disabled selected></option>
                            <option value="1">San salvador</option>
                            <option value="2">Cuscatlan</option>
                            <option value="3">La paz</option>
                        </select>
                        <label>Departamentos</label>
                    </div>
                    <div class="input-field col s6">
                        <select>
                            <option value="" disabled selected></option>
                            <option value="1">Mejicanos</option>
                            <option value="2">Soyapango</option>
                            <option value="3">San Marcos</option>
                        </select>
                        <label>Municipios</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix grey-text">edit_locationt</i>
                        <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
                        <label for="icon_prefix2">Dirección</label>
                    </div>
                </form>
            </article>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat red-text">Cancelar</a>
        <a href="#!" class="modal-close waves-effect waves-green btn-flat green-text">Agregar</a>
    </div>
</div>
<!--Modal 2 encargado de eliminar un usuario-->
<div id="modal2" class="modal modal-change modal-fixed-footer">
    <div class="modal-content modal-tamaño">
        <h2 class="letra center">Desea eliminar este usuario</h2>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat red-text">Cancelar</a>
        <a href="#!" class="modal-close waves-effect waves-green btn-flat green-text">Eliminar</a>
    </div>
</div>

<!--Modal 3 encargado de modificar alguna de la informacion del usuario-->
<div id="modal3" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h2 class="letra center">Modificar usuario</h2>
        <form action="">
            <div class="row">
                <div class="col s12 m6 l6 input-field">
                    <label class="active" for="name">Nombre</label>
                    <input id="name" type="text" class="validate">

                </div>
                <div class="col s12 m6 l6 input-field">
                    <label for="lastname">Apellido</label>
                    <input id="lastname" type="text" class="validate">
                </div>
                <div class="col s12 m6 l6 input-field">
                    <label for="email">Correo</label>
                    <input id="email" type="email" class="validate">
                </div>
                <div class="col s12 m6 l6 input-field">
                    <label for="pass">Contraseña</label>
                    <input id="pass" type="password" class="validate">
                </div>
                <div class="col s12 m6 l6 input-field">
                    <label for="phone">Telefono</label>
                    <input id="phone" type="text" class="validate">
                </div>
                <div class="col s12 m6 l6 input-field">
                    <label for="nata">Nacimiento</label>
                    <input id="nata" type="text" class="validate">
                </div>
                <div class="col s12 m6 l6 input-field">
                    <label for="depa">Departamento</label>
                    <input id="depa" type="text" class="validate">
                </div>
                <div class="col s12 m6 l6 input-field">
                    <label for="muni">minicipio</label>
                    <input id="muni" type="text" class="validate">
                </div>
                <div class="col s12 m6 l6 input-field">
                    <label for="dire">Dirreccion</label>
                    <input id="dire" type="text" class="validate">
                </div>
            </div>
        </form>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat red-text">Cancelar</a>
        <a href="#!" class="modal-close waves-effect waves-green btn-flat green-text">Modificar</a>
    </div>
</div>


<script src="http://192.168.1.60:9090/bundle.js"></script>
<script src="../js/src/config/dash.js"></script>

</body>

</html>