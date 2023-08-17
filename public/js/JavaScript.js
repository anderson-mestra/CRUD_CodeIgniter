let dataTable;
let dataTableIsInitialized = false;

//Archivo de configuracion de la DT
const dataTableOptions = {
  lengthMenu: [2, 5, 10, 25, 100],
  pageLength: 2, //Numero de filas en la tabla
  destroy: true,
  responsive: true,
  columnDefs: [
    { orderable: false, targets: [6] }, //Deshabilita que columna podra ordenarse
    // { width: "50%", targets: [4] },
  ],
};

const initDataTable = async () => {
  //Cada vez que se recarga la tabla se destruye para despues volverla a hacer con DT
  if (dataTableIsInitialized) {
    dataTable.destroy();
  }

  dataTable = $("#tablaEstudiantes").DataTable(dataTableOptions);

  dataTableInitialized = true;
};

function validacionCorreo() {
  valor = document.getElementById("correoInput").value;
  if (/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)/.test(valor)) {
    alert("Formato de correo invalido");
    return false;
  }
}

function opcion() {
  let resultado = window.confirm("Esta seguro de borrar este registro?");
  if (resultado === true) {
    return true;
  } else return false;
}

window.addEventListener("load", async () => {
  await initDataTable();
});
