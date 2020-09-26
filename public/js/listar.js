document.addEventListener('DOMContentLoaded', init);

function init() {
    fetch('/archivos', {
            method: 'GET',
            headers: { "X-Requested-With": "XMLHttpRequest" }
        }).then(e => e.json())
        .then(e => {
            let filas = '';
            for (const dato of e.datos) {
                filas += `<tr>
                                <td>${dato.ruc}</td>
                                <td>${dato.fecha}</td>
                                <td>${dato.serie}</td>
                                <td>${dato.numero}</td>
                                <td>${dato.importe}</td>
                            </tr>`;
            }
            document.getElementById('lista').innerHTML = filas;
        });
}
