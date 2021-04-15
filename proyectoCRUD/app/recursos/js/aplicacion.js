function DeletePelicula(id,foto) {
    Swal.fire({
        title:"¿Esta seguro que desea eliminar esta pelicula? " + id,
        text: "Si elimina, no se podra recuperar",
        icon: "error",
        confirmButtonText: 'Confirmar',
        cancelButtonText: 'Cancelar',
        showCancelButton: true,
        showCloseButton: true

    })
    .then((willDelete)=> {
        if (willDelete.isConfirmed) {
            Swal.fire("Archivo Borrado", {
                icon: "success",
            });
            location.href = "PeliculasController.php?action=delete&id=" + id + "&foto=" +
            foto;
        }else {
            Swal.fire("El archivo no se borrará")
        }
    });
}

function UpdatePelicula (id){
  location.href = "PeliculasController.php?action=update&id=" + id;
}

