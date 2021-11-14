//Lista las Tareas
ListarTareas()
function ListarTareas(){
    fetch('listar.php')
    .then(response => response.text())
    .then(response => {
        tareas.innerHTML = response
    })
}
//Guardar y Editar
guardar.addEventListener('click', ()=>{
    fetch('registrar.php',{
        method:'POST',
        body: new FormData(frm)
    })
    .then(response => response.text())
    .then(response => {
        if(response == 'ok'){
            frm.reset()
            ListarTareas()
        }else{
            //Guarda la Edición
            guardar.value = "Guardar"
            title.innerHTML = 'AGREGAR TAREA'
            idt.value = ""
            frm.reset()
            ListarTareas()
        }
    })
})
//Ejecuta Editar
function Editar(id){
    fetch('editar.php',{
        method: 'POST',
        body: id
    })
    .then(response => response.json())
    .then(response => {
        idt.value = response.id
        tarea.value = response.tarea
        guardar.value = 'Actualizar'
        title.innerHTML = 'EDITAR TAREA'
    })
}
//Ejecuta Eliminar
function Eliminar(id){
   var valida = confirm("Desea Eliminar la tarea")
   if(valida == true){
        fetch('eliminar.php',{
            method: 'POST',
            body: id
        })
        .then(response => response.text())
        .then(response =>{
            if(response == 'ok'){
                ListarTareas()
            }
        })
   }else{
       return
   }
}

