<section class="row mt-4"><!--Cuidador Principal-->
    <h3 class="text-center my-3 text-primary">Acerca del Cuidador Principal</h3>

    <div class="col-md-4">
        <label class="form-label mt-2" for="">Nombre</label>
        <input class="form-control" type="text" placeholder="Introduzca el nombre" required>
    </div>

    <div class="col-md-4">
        <label class="form-label mt-2" for="">Apellido</label>
        <input class="form-control" type="text" placeholder="Introduzca el apellido" required>
    </div>

    <div class="col-md-3">
        <label class="form-label mt-2" for="">Sexo</label>
        <div class="d-flex mt-1 gap-3">
            <div class="form-check">
                <input class="form-check-input" type="radio">
                <label class="form-check-label">Masculino</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio">
                <label class="form-check-label">Femenino</label>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <label class="form-label mt-2" for="">Tipo de Documento</label>
        <select class="form-select" name="" id="">
            <option value="" disabled selected>Tipos de documentos</option>
            <option value="">DNI</option>
            <option value="">CUIT</option>
        </select>
    </div>

    <div class="col-md-3">
        <label class="form-label mt-2" for="">N° Documento</label>
        <input class="form-control" type="number" placeholder="N° de documento" required>
    </div>

    <div class="col-md-3">
        <label class="form-label mt-2" for="">Estado Civil</label>
        <select class="form-select" name="" id="">
            <option value="" disabled selected>Seleccione el Estado Civil</option>
            <option value="">Soltero/a</option>
            <option value="">Casado/a</option>
            <option value="">Conviviendo</option>
            <option value="">Separado/a</option>
            <option value="">En pareja</option>
            <option value="">Viudo/a</option>
        </select>
    </div>

    <div class="col-md-3">
        <label class="form-label mt-2" for="">Fecha de Nacimiento</label>
        <input class="form-control" type="date" name="" id="" value="2018-12-09">
    </div>

    <div class="col-md-4">
        <label class="form-label mt-2" for="">Maximo Nivel Educativo Alcanzado</label>
        <select class="form-select" name="" id="">
            <option value="" disabled selected>Seleccione el Nivel Educativo</option>
            <option value="">Ninguno</option>
            <option value="">Primario Incompleto</option>
            <option value="">Primario en Curso</option>
            <option value="">Primario Completo</option>
            <option value="">Secundario Incompleto</option>
            <option value="">Secundario en Curso</option>
            <option value="">Secundario Completo</option>
            <option value="">Terciario</option>
            <option value="">Universitario</option>
        </select>
    </div>

    <div class="col-md-4">
        <label class="form-label mt-2" for="">Nacionalidad</label>
        <select class="form-select" name="" id="">
            <option value="" disabled selected>Seleccione Nacionalidad</option>
            <option value="">Argentina</option>
            <option value="">Brasilera</option>
            <option value="">Boliviana</option>
            <option value="">Chilena</option>
            <option value="">Colombiana</option>
            <option value="">Paraguaya</option>
            <option value="">Peruana</option>
            <option value="">Urugaya</option>
            <option value="">Venezolana</option>
        </select>
    </div>

    <div class="col-md-4">
        <label class="form-label mt-2" for="">Barrio</label>
        <select class="form-select" name="" id="">
            <option value="" disabled selected>Seleccione Barrio</option>
            <option value="">Santa Brigida</option>
        </select>
    </div>

    <div class="col-md-6">
        <label class="form-label mt-2" for="">Dirección</label>
        <input class="form-control" type="text" placeholder="Dirección completa">
    </div>

    <div class="col-md-6">
        <label class="form-label mt-2" for="">Número de Télefono</label>
        <input class="form-control" type="tel" pattern="[0-9]{4} [0-9]{4}" value="11">
    </div>

    <div class="">
        <label class="form-label mt-2" for="">Parentesco con el Niño</label>
        <select class="form-select" name="" id="">
            <option value="" disabled selected>Seleccione Parentesco</option>
            <option value="">Madre</option>
            <option value="">Padre</option>
            <option value="">Hermana/o</option>
            <option value="">Abuela/o</option>
            <option value="">Tía/o</option>
            <option value="">Vecina/o</option>
        </select>
    </div>

    <div class="mt-3 ">
        <div class="form-check form-switch">
            <label class="form-check-label" for="flexSwitchCheckDefault">¿Hay un Apoyo en la Crianza?</label>
            <input class="form-check-input" type="checkbox" role="switch">
        </div>
    </div>
</section><!--Fin Cuidador Principal-->