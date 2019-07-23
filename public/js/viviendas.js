entrevista_realizada = true;

function entrevistaRealizada(value)
{
    if(value == 2)
    {
        entrevista_realizada = false;
    }
    else
    {
        entrevista_realizada = true;
    }


}

$(document).ready(function () {
    /**
     * inicio el bs-stepper
     *
     */
    $('input,textarea,select').filter('[required=required]').prev().append(" *")
    var stepper = new Stepper($('.bs-stepper')[0])
    var paso = 1;
    stepper.to(paso);



    /**
     * Para que haga en el enviar con el Enter
     */
        $('input, select').on('keyup keypress', function(e) {
        var keyCode = e.keyCode || e.which;
        if (keyCode === 13) {
            e.preventDefault();
            e.keyCode = 9;
            var inputs = $(this).closest('form').find(':input');
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
                    if (paso == 2 && !entrevista_realizada)
                    {
                        paso=6;
                        stepper.to(paso);
                        //remove all requireds fields
                        $('input,textarea,select').filter('[required=required]').removeAttr('required');
                        return
                    }

                    // if(paso == 4 && editar)
                    // {
                    //     paso = 6;
                    //     stepper.to(paso);
                    //     //remove all requireds fields
                    //     $('input,textarea,select').filter('[required=required]').removeAttr('required');
                    //     return
                    // }


                    stepper.next();
                    paso++;
                    if(paso==7)
                    {
                            $(".next").addClass("d-none");
                    }
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
            if (paso == 6 && !entrevista_realizada) {
                paso = 2;
                stepper.to(paso);
                //remove all requireds fields
                $('input,textarea,select').filter('[required=required]').removeAttr('required');
                return
            }
            // if (paso == 6 && editar) {
            //     paso = 4;
            //     stepper.to(paso);
            //     //remove all requireds fields
            //     $('input,textarea,select').filter('[required=required]').removeAttr('required');
            //     return
            // }


        paso--;
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
                 * //TODO ACA TENEMOS QUE LLAMAR A LOS EVENTOS DE OCULTAR Y ESO
                 */

        })

/**
 * Validar la seccion al dar click en siguiente
 */
function validarPorSeccion(seccion)
{
    flag = true;
    $("#" + seccion + " input, #" + seccion +" select").each(function(e){
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
