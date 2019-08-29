
var stepper;
var paso = 4;
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
        if (focus) {
            // $(selector).focus();
        }
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



$(document).ready(function () {

    $('input,textarea,select').filter('[required=required]').prev().append(" *")
    /**
     * inicio el bs-stepper
     */
    // quitar restricciones si el usuario es admin
    if (rol == 'admin') {
        $('input,textarea,select').filter('[disabled=disabled]').removeAttr('disabled');
    }

    var stepper = new Stepper($('.bs-stepper')[0])
    stepper.to(paso);


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
        if (paso >= 10) {
            return false;
        }

        if (validar(paso)) {
            paso++;
            stepper.next();
            $("#form").scrollTop(0)
        }
        else {
            console.log("Erro validar Paso " + paso)
            // swal
        }

    })
    /**
     * Boton Volver
     */

    $(".back").click(function (e) {
        e.preventDefault();
        if (paso !== 1) {
            paso--;
            stepper.previous();
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
    /**
     * Validar la seccion al dar click en siguiente
     */
    function validarPorSeccion(seccion) {
        flag = true;
        $("#" + seccion + " input, #" + seccion + " select").each(function (e) {
            t = $(this);
            console.log(t.attr('name') + " ")
            if (!t[0].checkValidity()) // es valido segun html5?
            {
                t.addClass('is-invalid')/// lo pongo en rojito
                t.focus();
                console.log('invalido')
                flag = false;
                return false;
            }
            else {
                t.removeClass('is-invalid')
                console.log('invalido')
            }
        })
        return flag
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
                return (validarPorSeccion("seccion_2"));
                break;
            case 3:
                // todos completos?
                return (validarPorSeccion("seccion_3"));
                break;
            case 4:
                // todos completos?
                return (validarPorSeccion("seccion_4"));
                break;
            case 5:
                // todos completos?
                return (validarPorSeccion("seccion_5"));
                break;
            case 6:
                // todos completos?
                return (validarPorSeccion("seccion_6"));
                break;
            case 7:
                // todos completos?
                return (validarPorSeccion("seccion_hogar"));
                break;
            case 8:
                // todos completos?
                return (validarPorSeccion("seccion_org"));
                break;
            case 9:
                // todos completos?
                return (validarPorSeccion("seccion_razones"));
                break;
            case 10:
                // todos completos?
                return (validarPorSeccion("seccion_recuperacion"));
                break;

            default:
                break;
        }
    }
})



