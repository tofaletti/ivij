<section class="row mt-4"><!--Chico-->
    <h3 class="text-center my-3 text-primary">Acerca del Niño/a</h3>


    <div class="col-md-4">
        <label class="form-label mt-2" for="">Nombre del Niño</label>
        <input class="form-control" type="text" placeholder="Introduzca el nombre" required>
    </div>

    <div class="col-md-4">
        <label class="form-label mt-2" for="">Apellido del Niño</label>
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
            <option value="" disabled selected>Tipos de Documentos</option>
            <option value="">DNI</option>
            <option value="">CUIT</option>
        </select>
    </div>

    <div class="col-md-5">
        <label class="form-label mt-2" for="">N° Documento del Niño</label>
        <input class="form-control" type="number" placeholder="N° de Documento del Niño" required>
    </div>

    <div class="col-md-4">
        <label class="form-label mt-2" for="">Fecha de Nacimiento</label>
        <input class="form-control" type="date" name="" id="" value="2018-12-09">
    </div>

    <!--DIMENSIÓN EDUCACIÓN-->
    <div class="">
        <h4 class="text-primary mt-3">Educación</h4>
        <div class="col-md-3">
            <label class="form-label mt-2" for="">¿Asiste a la Escuela?</label>
            <div class="d-flex mt-1 gap-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio">
                    <label class="form-check-label">Si</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio">
                    <label class="form-check-label">No</label>
                </div>
            </div>
        </div>

        <!--En caso de NO asistir-->
        <div class="row" hidden>
            <div class="col-md-4">
                <label class="form-label mt-2" for="">Ciclo (abandono)</label>
                <div class="d-flex mt-1 gap-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <label class="form-check-label">Jardín</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <label class="form-check-label">Primaria</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <label class="form-check-label">Secundaria</label>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <label class="form-label mt-2" for="">Grado (abandono)</label>
                <select class="form-select" name="" id="">
                    <option value="" disabled selected>Seleccione el grado</option>
                    <option value="">1er Grado</option>
                    <option value="">2do Grado</option>
                    <option value="">3er Grado</option>
                    <option value="">4to Grado</option>
                    <option value="">5to Grado</option>
                    <option value="">6to Grado</option>
                </select>
            </div>

            <div class="col-md-4">
                <label class="form-label mt-2" for="">Año (abandono)</label>
                <select class="form-select" name="" id="">
                    <option value="" disabled selected>Seleccione el año</option>
                    <option value="">1er Año</option>
                    <option value="">2do Año</option>
                    <option value="">3er Año</option>
                    <option value="">4to Año</option>
                    <option value="">5to Año</option>
                    <option value="">6to Año</option>
                    <option value="">7mo Año</option>
                </select>
            </div>

            <div>
                <label class="form-label mt-2" for="">Motivos</label>
                <textarea class="form-control" name="" id="">
                            </textarea>
            </div>
        </div><!--En caso de NO asistir-->

        <div class="row">
            <div class="col-md-3">
                <label class="form-label mt-2" for="">Tipo de Gestión</label>

                <div class="d-flex mt-1 gap-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <label class="form-check-label">Pública</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <label class="form-check-label">Privada</label>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <label class="form-label mt-2" for="">Ciclo</label>
                <div class="d-flex mt-1 gap-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <label class="form-check-label">Jardín</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <label class="form-check-label">Primaria</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio">
                        <label class="form-check-label">Secundaria</label>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <label class="form-label mt-2" for="">Turno</label>
                <div class="d-flex gap-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">Mañana</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">Tarde</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">Noche</label>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <label class="form-label mt-2" for="">Grado</label>
                <select class="form-select" name="" id="">
                    <option value="" disabled selected>Seleccione el grado</option>
                    <option value="">1er Grado</option>
                    <option value="">2do Grado</option>
                    <option value="">3er Grado</option>
                    <option value="">4to Grado</option>
                    <option value="">5to Grado</option>
                    <option value="">6to Grado</option>
                </select>
            </div>

            <div class="col-md-3">
                <label class="form-label mt-2" for="">Año</label>
                <select class="form-select" name="" id="">
                    <option value="" disabled selected>Seleccione el año</option>
                    <option value="">1er Año</option>
                    <option value="">2do Año</option>
                    <option value="">3er Año</option>
                    <option value="">4to Año</option>
                    <option value="">5to Año</option>
                    <option value="">6to Año</option>
                    <option value="">7mo Año</option>
                </select>
            </div>

            <div class="col-md-6">
                <label class="form-label mt-2" for="">Nombre de la Escuela</label>
                <input class="form-control" type="text" placeholder="Introduzca la Escuela" required>
            </div>
        </div>
        <!--FIN DIMENSIÓN EDUCACIÓN-->
    </div>

    <!--DIMENSIÓN SALUD-->
    <h4 class="text-primary mt-3">Salud</h4>

    <div class="col-md-4">
        <label class="form-label mt-2" for="">Cobertura de Salud</label>
        <select class="form-select" name="" id="">
            <option value="" disabled selected>Tipo de Cobertura</option>
            <option value="">Obra Social</option>
            <option value="">Prepaga</option>
            <option value="">Mutual</option>
            <option value="">Sistema de Emergencias de Pago</option>
            <option value="">Ninguna</option>
        </select>
    </div>

    <div class="col-md-4">
        <label class="form-label mt-2" for="">¿Cual?</label>
        <input class="form-control" type="text" placeholder="Indique el nombre de la cobertura">
    </div>

    <div class="col-md-4">
        <label class="form-label mt-2" for="">Centro de Salud Recurrente</label>
        <select class="form-select" name="" id="">
            <option value="" disabled selected>Centros de Salud</option>
            <option value="">CAPS - Barthalot</option>
            <option value="">CAPS - Perón</option>
        </select>
    </div>

    <div class="">
        <label class="form-label mt-4" for="">¿Cada cuánto se realiza controles pediátricos / clínicos?</label>
        <div class="d-flex mt-1 gap-3 justify-content-center">
            <div class="form-check">
                <input class="form-check-input" type="radio">
                <label class="form-check-label">Cada un año o menos</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio">
                <label class="form-check-label">Cada uno o dos años</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio">
                <label class="form-check-label">Cada tres años o más</label>
            </div>
        </div>
    </div>


    <div class="">
        <label class="form-label mt-2" for="">En los últimos 12 meses ¿Se ha efectuado alguno de los siguientes controles?</label>
        <div class="d-flex gap-3 justify-content-center">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">Médico</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">Odontológico</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">Oftalmológico</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">Ginecológico</label>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <label class="form-label mt-2" for="">¿Tiene una enfermedad o diagnostico de enfermedad crónica?</label>
        <div class="d-flex mt-1 gap-5 justify-content-center">
            <div class="form-check">
                <input class="form-check-input" type="radio">
                <label class="form-check-label">Si</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio">
                <label class="form-check-label">No</label>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <label class="form-label mt-2" for="">¿Cual?</label>
        <input class="form-control" type="text" placeholder="Enfermedad Recurrente">
    </div>

    <div class="col-md-6">
        <label class="form-label mt-2" for="">¿Recibe tratamiento?</label>
        <div class="d-flex mt-1 gap-5 justify-content-center">
            <div class="form-check">
                <input class="form-check-input" type="radio">
                <label class="form-check-label">Si</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio">
                <label class="form-check-label">No</label>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <label class="form-label mt-2" for="">¿Toma algun medicamento?</label>
        <div class="d-flex mt-1 gap-5 justify-content-center">
            <div class="form-check">
                <input class="form-check-input" type="radio">
                <label class="form-check-label">Si</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio">
                <label class="form-check-label">No</label>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <label class="form-label mt-2" for="">¿Padece alguna discapacidad?</label>
        <div class="d-flex mt-1 gap-5 justify-content-center">
            <div class="form-check">
                <input class="form-check-input" type="radio">
                <label class="form-check-label">Si</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio">
                <label class="form-check-label">No</label>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <label class="form-label mt-2" for="">¿Cual?</label>
        <input class="form-control" type="text" placeholder="Enfermedad Recurrente">
    </div>

    <div class="col-md-6">
        <label class="form-label mt-2" for="">¿Tiene Certificado?</label>
        <div class="d-flex mt-1 gap-5 justify-content-center">
            <div class="form-check">
                <input class="form-check-input" type="radio">
                <label class="form-check-label">Si</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio">
                <label class="form-check-label">No</label>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <label class="form-label mt-2" for="">¿Toma algun medicamento?</label>
        <div class="d-flex mt-1 gap-5 justify-content-center">
            <div class="form-check">
                <input class="form-check-input" type="radio">
                <label class="form-check-label">Si</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio">
                <label class="form-check-label">No</label>
            </div>
        </div>
    </div>


    <div class="">
        <label class="form-label mt-2" for="">¿Sufre alguna de las siguientes complicaciones o dificultades?</label>
        <div class="d-flex gap-3 justify-content-center">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">Auditiva</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">Visual</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">Fonoaudiológica</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">Respiratoria</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">Traumatológica</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">Digestiva</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">Emocional</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">Psíquica</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">Psicológica</label>
            </div>
        </div>
    </div>


    <div class="col-md-6">
        <label class="form-label mt-2" for="">¿Tiene el calendario de vacunación al día?</label>
        <div class="d-flex mt-1 gap-5 justify-content-center">
            <div class="form-check">
                <input class="form-check-input" type="radio">
                <label class="form-check-label">Si</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio">
                <label class="form-check-label">No</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio">
                <label class="form-check-label">No se</label>
            </div>
        </div>
    </div>


    <div class="col-md-6">
        <label class="form-label mt-2" for="">¿Recibió antitetánica en los últimos 5 años?</label>
        <div class="d-flex mt-1 gap-5 justify-content-center">
            <div class="form-check">
                <input class="form-check-input" type="radio">
                <label class="form-check-label">Si</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio">
                <label class="form-check-label">No</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio">
                <label class="form-check-label">No se</label>
            </div>
        </div>
    </div>

    <div class="">
        <label class="form-label mt-2" for="">¿Cuantas comidas por día recibe? (Desayuno - Almuerzo - Merienda - Cena)</label>
        <div class="d-flex mt-1 gap-5 justify-content-center">
            <div class="form-check">
                <input class="form-check-input" type="radio">
                <label class="form-check-label">Una (1)</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio">
                <label class="form-check-label">Dos (2)</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio">
                <label class="form-check-label">Tres (3)</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio">
                <label class="form-check-label">Cuatro (4)</label>
            </div>
        </div>
    </div>

</section><!--Fin Chico-->