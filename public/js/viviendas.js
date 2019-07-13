

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
        $('input').on('keyup keypress', function(e) {
        var keyCode = e.keyCode || e.which;
        if (keyCode === 13) {
            e.preventDefault();
            var inputs = $(this).closest('form').find(':input:visible');
            inputs.eq( inputs.index(this)+ 1 ).focus();
            return false;
        }
        });

    /**
     * Boton de siguiente + Llamado a Validacion
     */
        $(".next").click(function(e){
            e.preventDefault();
                if(validar(paso))
                {
                    stepper.next();
                    paso++;
                }
                else
                {
                    console.log("Erro validar Paso "+paso)
                    // swal
                }

        })
    /**
     * Boton Volver
     */

        $(".back").click(function(e){
        e.preventDefault();
        stepper.previous();
        })

    /**
     * Validar Cada Campo ni bien Cambia
     */

        $("input").blur(function(e){
            t = $(this)
            if(!t[0].checkValidity())
                {
                    t.addClass('is-invalid')
                    t.focus();
                }
                else
                {
                    t.removeClass('is-invalid')
                }
                /**
                 * TODO ACA TENEMOS QUE LLAMAR A LOS EVENTOS DE OCULTAR Y ESO
                 */

        })

/**
 * Validar la seccion al dar click en siguiente
 */
function validarPorSeccion(seccion)
{
    flag = true;
    $("#"+seccion+" input").each(function(e){
            t = $(this);
            console.log(t.attr('name')+" ")
            if(!t[0].checkValidity()) // es valido segun html5?
            {
                t.addClass('is-invalid')/// lo pongo en rojito
                t.focus();
                console.log('invalido')
                flag = false;
                return false;
            }
            else
            {
                t.removeClass('is-invalid')
                console.log('invalido')
            }
        })
    return flag
}

/**
 * Validar segun paso este llama a validarSeccion
 */
function validar(paso)
{
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
            return (validarPorSeccion("seccion_7"));
            break;
         case 7:
            // todos completos?
            return (validarPorSeccion("seccion_8"));
            break;

        default:
            break;
    }
}


})
