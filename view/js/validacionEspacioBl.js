
    document.getElementById("agregarCandidatos").addEventListener("submit", function(event){
        let nombre= document.getElementById("nombre");
        let apellido = document.getElementById("apellido");
        let edad= document.getElementById("edad");
        let descripcion=document.getElementById("descripcion");
        let partido= document.getElementById("partido");

        if (!nombre.value || !apellido.value ){
            alert ("por favor ingrese nombre y apellidos del candidato");
            event.preventDefault();
        }
        else if (!edad.value){
                alert("por favor ingrese la edad del candidato");
                event.preventDefault();
            }
        else if (!descripcion.value){
            alert("por favor ingrese una breve descripcion del candidato")
            event.preventDefault();
        }
        else if (!partido.value){ 
            alert("por favor ingrese el partido o grupo al cual pertenece el candidato")
            event.preventDefault();
        }


    })
