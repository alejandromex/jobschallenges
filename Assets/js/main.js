$(document).ready(function(){
    var url = "http://localhost/JobsChallenge/";
    function readURL(input)
    {
        if(input.files && input.files[0])
        {
            var reader = new FileReader();
            reader.onload = function(e)
            {
                $("#imagen-publicacion").attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }


    $("#imagen").change(function(){
        readURL(this);

    })

    $("#titulo").change(function(){
        ($("#titulo-publicacion")).text(($("#titulo")).val());
    })

    $("#descripcion").change(function(){
        var texto = ($(this)).val();
        ($("#descripcion-publicacion")).text(texto);
    })


    $("#areapublicacion").change(function(){
        var area = $("#areapublicacion");
        if(area.val() == "Empresarial")
        {
            var empresa = prompt("¿Nombre de la empresa?");
            ($("#area-publicacion")).text("Empresa: "+ empresa );
        }
        else{
            ($("#area-publicacion")).text((area).val());
        }
    })

    $("#habilidades").change(function(){
        var habilidades = $("#habilidades").val();
        var habilidadesArray = habilidades.split(" ");
        var texto = "";
        for(var i=0; i<habilidadesArray.length; i++)
        {
            texto += `<li>${habilidadesArray[i]}</li>`;
        }
        $("#habilidades-publicacion").html(texto);
    })

    $("#fechacierre").change(function(){
        var fechacierre = $("#fechacierre").val();
        $("#fechacierre-publicacion").text("Fecha de cierre: "+fechacierre);
    })


    var tipoUsuario = $("#tipo-usuario");

    tipoUsuario.change(function(){
        console.log("Hola mundo");
        if(tipoUsuario.val() == "Reclutador")
        {
            $(".formulario-reclutador").removeClass("d-none");
            $("#btn-registrar-talento").addClass("d-none");
        }
        else{
            $(".formulario-reclutador").addClass("d-none");
            $("#btn-registrar-talento").removeClass("d-none");


        }
    })

    var btnAceptar = $(".btn-aceptar-postulado");
    for(var i =0; i <btnAceptar.length; i++)
    {
        $(btnAceptar[i]).click(function(){
            var idAceptar = ($(this)).attr("postuladoId");
            var idProyecto = ($(this)).attr("proyectoId");
            var datos = new FormData();
            datos.append("idAceptar", idAceptar);
            datos.append("idProyecto", idProyecto);
            $.ajax({
                url:url+"Assets/ajax/postulados.ajax.php",
                method:"POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success: function(respuesta)
                {
                    var id = respuesta;
                    $("#aceptar"+id).remove();
                    Swal.fire({
                        title: 'En Horabuena ! !',
                        text: 'has añadido un colaborador',
                        icon: 'success',
                        confirmButtonText: 'Cool'
                      })
                }
            })
        });
    }

    var btnComentar = $("#btncomentar");
    var txtComentar = $("#txtcomentar");
    var idusuario = $("#idusuario").attr("value");
    var idpost = $("#idpost").attr("value");

    btnComentar.click(function(){
        var comentario = txtComentar.val();
        var datos = new FormData();

        datos.append("idusuario",idusuario);
        datos.append("idpost", idpost);
        datos.append("comentario", comentario);

        $.ajax({
            url: url+"Assets/ajax/comentarios.ajax.php",
            method: "POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            success: function(respuesta)
            {
                if(respuesta)
                {
                    location.reload(true);

                }
            }
        })
    });


    var btnComentarforo = $("#btncomentarforo");
    var txtComentarforo = $("#txtcomentarforo");
    var idusuarioforo = $("#idusuarioforo").attr("value");
    var idpostforo = $("#idpostforo").attr("value");

    btnComentarforo.click(function(){
        var comentarioforo = txtComentarforo.val();
        var datos = new FormData();

        datos.append("idusuarioforo",idusuarioforo);
        datos.append("idpostforo", idpostforo);
        datos.append("comentarioforo", comentarioforo);

        $.ajax({
            url: url+"Assets/ajax/comentarios.ajax.php",
            method: "POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            success: function(respuesta)
            {
                if(respuesta)
                {
                    location.reload(true);

                }
            }
        })
    });



})