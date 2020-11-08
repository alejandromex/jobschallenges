$(document).ready(function(){

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

})