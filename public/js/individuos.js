
var stepper;
var paso = 1;


var entrevistaRealizada = null;
function getSelectedValue(selector) {
    if (rol != 'admin') {
        value = $(selector).children("option:selected").val();
        return value;
    }
}

function desactivar(selector) {

    if (rol != 'admin') {
        $(selector).attr("disabled", true);
        setOpcional(selector);
    }

}

function activar(selector, required = true, focus = true) {
    if (rol != 'admin') {
        $(selector).removeAttr('disabled')

        if (required) {
            setRequired(selector);
        }
    }
}

function setRequired(selector) {
    if (rol != 'admin') { $(selector).attr('required', true); }
}
function setOpcional(selector) {
    if (rol != 'admin') { $(selector).removeAttr('required') }
}



function setEntrevistaRealizada(value) {

    entrevistaRealizada = value;
    if (rol !== 'admin') {
        if (value == 1) {
            $("#numero_respondente").attr('required', true);
            $("#nombre_respondente").attr('required', true);
            console.log("%c activar PP01A", "color:red")
            activar("#PP01A")
        }
        else {
            $("#numero_respondente").removeAttr('required');
            $("#nombre_respondente").removeAttr('required');
            console.log("%c desactivar PP01A","color:green")
            desactivar("#PP01A");
        }
    }

}
$(document).ready(function () {


    // quitar restricciones si el usuario es admin
    if (rol == 'admin') {
        $('input,textarea,select').filter('[disabled=disabled]').removeAttr('disabled');
    }


    stepper = new Stepper($('.bs-stepper')[0])
    stepper.to(paso);

    $("#btn_guardar").click(function (e) {
        e.preventDefault();
        if (validarTodo()) {

            var validator = $("#form").trigger("submit");
        }
        // console.log(validator);


    })
    /**
     * Para que haga en el enviar con el Enter
     */
    $('input, select').on('keyup keypress', function (e) {
        var keyCode = e.keyCode || e.which;
        if (keyCode === 13) {
            e.preventDefault();
            e.keyCode = 9;
            var inputs = $(this).closest('form').find(':input');
            inputs.eq(inputs.index(this) + 1).focus();
            return false;
        }
    });

    /**
     * Boton de siguiente + Llamado a Validacion
     */
    $(".next").click(function (e) {
        e.preventDefault();
        // console.log({ entrevistaRealizada });
        if (paso >= 14) {
            return false;
        }

        if (validar(paso)) {

            switch (paso) {
                case 1:
                    if (entrevistaRealizada == 2) {
                        console.log("paso al final")
                        paso = 14
                        stepper.to(paso);
                        $("#form").scrollTop(0)
                        return;
                    }


                    break;

                default:
                    break;
            }


            paso++;
            stepper.to(paso);
            $("#form").scrollTop(0)
            if (paso == 14) {//qquito todas las restricciones en el ultimo paso hardcoding
                // $('input,textarea,select').filter('[required=required]').removeAttr('required');
            }
            console.log("Paso " + paso + " ok ");

        }
        else {
            console.log("Erro validar Paso " + paso)
        }

    })
    /**
     * Boton Volver
     */

    $(".back").click(function (e) {
        e.preventDefault();
        switch (paso) {
            case 14:
                if (entrevistaRealizada == 2) {
                    console.log("paso al final")
                    paso = 1
                    stepper.to(paso);
                    $("#form").scrollTop(0)
                    return;
                }

                break;

            default:
                break;
        }

        if (paso > 1) {
            paso--;
            stepper.to(paso);
        }
    })

    /**
     * Validar Cada Campo ni bien Cambia
     */

    $("input").blur(function (e) {
        t = $(this)
        if (!t[0].checkValidity()) {
            t.addClass('is-invalid')
            t.focus();
        }
        else {
            t.removeClass('is-invalid')
        }
        /**
         * //TODO ACA TENEMOS QUE LLAMAR A LOS EVENTOS DE OCULTAR Y ESO
         */

    })






})

function updateAll() {
    update_parte_1();
    update_parte_2();
    update_parte_3();
    update_parte_4();
    update_parte_5();
    update_parte_6();
    update_parte_7();
    update_parte_8();
    update_parte_9();
    update_parte_10();
    update_parte_11();
    update_parte_12();
}


function irASeccion(seccion)///ir a seccion del error
{
    n = $("#" + seccion).data('paso');
    paso = n;
    stepper.to(n);
}

/**
     * Validar la seccion al dar click en siguiente
     */
function validarPorSeccion(seccion) {
    flag = true;
    $("#" + seccion + " input , " + "#" + seccion + " select ," + "#" + seccion + " textarea").each(function (e) {
        t = $(this);
        // console.log(t.attr('name') + " ")
        if (!t[0].checkValidity()) // es valido segun html5?
        {
            t.addClass('is-invalid')/// lo pongo en rojito
            irASeccion(seccion);
            t.focus();
            // console.log('invalido')
            console.log(t.attr('name') + " ");

            flag = false;
            return false;
        }
        else {
            t.removeClass('is-invalid')

        }
    })
    return flag
}

/**
 *
 * Validar todo
 */


function validarTodo() {
    status = true
    for (i = 1; i <= 14; i++) {
        if (!validar(i)) {
            return false;
        }

    }
    return status
}

/**
 * Validar segun paso este llama a validarSeccion
 */
function validar(paso) {
    switch (paso) {
        case 1:
            // todos completos?
            return (validarPorSeccion("seccion_1"));
            break;
        case 2:
            // todos completos?
            return (validarPorSeccion("parte_1"));
            break;
        case 3:
            // todos completos?
            return (validarPorSeccion("parte_2"));
            break;
        case 4:
            // todos completos?
            return (validarPorSeccion("parte_3"));
            break;
        case 5:
            // todos completos?
            return (validarPorSeccion("parte_4"));
            break;
        case 6:
            // todos completos?
            return (validarPorSeccion("parte_5"));
            break;
        case 7:
            // todos completos?
            return (validarPorSeccion("parte_6"));
            break;
        case 8:
            // todos completos?
            return (validarPorSeccion("parte_7"));
            break;
        case 9:
            // todos completos?
            return (validarPorSeccion("parte_8"));
            break;
        case 10:
            // todos completos?
            return (validarPorSeccion("parte_9"));
            break;
        case 11:
            // todos completos?
            return (validarPorSeccion("parte_10"));
            break;
        case 12:
            // todos completos?
            return (validarPorSeccion("parte_11"));
            break;
        case 13:
            // todos completos?
            return (validarPorSeccion("parte_12"));
            break;
        case 14:
            // todos completos?
            return (validarPorSeccion("parte_13"));
            break;
        default:
            break;
    }
}
