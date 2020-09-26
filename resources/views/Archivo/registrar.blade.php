 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
    <div class="container">
        <form id="frm" class="mt-4">
            @csrf
            <div class="form-group row">
                <label for="ruc" class="col-lg-4 col-md-4 col-form-label">RUC:</label>
                <div class="col-lg-4 col-md-4">
                    <input class="form-control" type="text" name="ruc" id="ruc">
                </div>
            </div>
            <div class="form-group row">
                <label for="fecha"  class="col-lg-4 col-md-4 col-form-label">Fecha:</label>
                <div class="col-lg-4 col-md-4">
                    <input class="form-control" type="date" name="fecha" id="fecha">
                </div>
            </div>
            <div class="form-group row">
                <label for="serie" class="col-lg-4 col-md-4 col-form-label">Serie:</label>
                <div class="col-lg-2 col-md-2">
                    <input class="form-control" type="text" name="serie" id="serie">
                </div>
            </div>
            <div class="form-group row">
                <label for="numero" class="col-lg-4 col-md-4 col-form-label">Numero:</label>
                <div class="col-lg-4 col-md-4">
                    <input class="form-control" type="text" name="numero" id="numero">
                </div>
            </div>
            <div class="form-group row">
                <label for="importe" class="col-lg-4 col-md-4 col-form-label">Importe:</label>
                <div class="col-lg-4 col-md-4">
                    <input class="form-control" type="number" step="any" name="importe" id="importe">
                </div>
            </div>
            <div class="form-group row">
                <label for="archivo" class="col-lg-4 col-md-4 col-form-label">Archivo:</label>
                <div class="col-lg-4 col-md-4">
                    <input class="form-control" type="file" name="archivo[]" multiple>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-12 col-md-12" style="display: flex; justify-content: center;">
                    <button class="btn btn-primary" type="submit">Agregar</button>
                    <button class="btn btn-danger ml-5" type="reset">Limpiar</button>
                </div>
            </div>
        </form>
    </div>
    <script src="js/archivos.js"></script>
</body>
</html>
