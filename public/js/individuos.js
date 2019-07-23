

$(document).ready(function () {
    /**
     * inicio el bs-stepper
     */
    var stepper = new Stepper($('.bs-stepper')[0])
    var paso = 1;
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
        if (validar(paso)) {
            stepper.next();
            $("#form").scrollTop(0)
            paso++;
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
        paso--;
        stepper.previous();
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
        $("#" + seccion + " input , " + "#" + seccion + " select").each(function (e) {
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
                console.log('valido')
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
})