document.getElementById('frm').addEventListener('submit', registrar);

function registrar(event) {
    // Anulan en evento submit
    event.preventDefault();
    event.stopPropagation();
    const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    const formulario = new FormData(event.srcElement);
    fetch(
            '/registrar', {
                method: 'POST',
                body: formulario,
                headers: {
                    "X-Requested-With": "XMLHttpRequest",
                    'X-CSRF-TOKEN': token
                }
            }
        )
        .then(e => {
            e.json().then(datos => Swal.fire('¡Mensaje!', datos.mensaje, 'success'));
        })
        .catch((e) => Swal.fire('¡Mensaje!', 'Ocurrio un Error', 'error'));

}
