<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
                <title>
                </title>
                <link href="" rel="stylesheet">
                    <link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" rel="stylesheet">
                        <style>
                            body{
            background-color: rgba(255,255,255,1);
            background-size: 100%;
            background-image: url("/images/bg.png");

        }
        a{
            font-size: 20px;
            color: rgba(0,0,0,.8)!important;
        }
        .navbar{
            background-color: rgba(255,255,255,.9) !important;
            
        }
                        </style>
                    </link>
                </link>
            </meta>
        </meta>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">
                <img alt="logo" class="d-inline-block align-top" height="60" loading="lazy" src="/images/log.png" width="60">
                </img>
            </a>
            <button aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarNavAltMarkup" data-toggle="collapse" type="button">
                <span class="navbar-toggler-icon">
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="#">
                        Inicio
                        <span class="sr-only">
                            (current)
                        </span>
                    </a>
                    <a class="nav-link" href="#">
                        Pagos
                    </a>
                    <a class="nav-link" href="#">
                        Sucursales
                    </a>
                    <a class="nav-link" href="#">
                        Contacto
                    </a>
                </div>
            </div>
            <div>
                <img alt="logo" class="d-inline-block align-top" height="80" loading="lazy" src="/images/gp.png" width="80">
                </img>
            </div>
        </nav>
        <br/>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">
                                <h4>
                                    Numero de contrato:
                                </h4>
                            </label>
                            <input aria-describedby="emailHelp" class="form-control" id="exampleInputEmail1" type="email">
                                <small class="form-text text-muted" id="emailHelp">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora ipsa laudantium et hic ea quod quae animi, blanditiis dolore ut quis minima itaque molestiae fugit magnam est nesciunt incidunt atque.
                                </small>
                            </input>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" id="exampleCheck1" type="checkbox">
                                <label class="form-check-label" for="exampleCheck1">
                                    Acepto los terminos
                                </label>
                            </input>
                        </div>
                        <button class="btn btn-outline-primary" type="submit">
                            Consultar
                        </button>
                        <br/>
                    </form>
                </div>
                <div class="col-sm-8">
                    <div>
                        <h1>
                            Datos del contrato.
                        </h1>
                    </div>
                    <form>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">
                                            Nombre:
                                        </label>
                                        <input class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder" type="text">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">
                                            Apellido paterno:
                                        </label>
                                        <input class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder" type="text">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">
                                            Apellido materno:
                                        </label>
                                        <input class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder" type="text">
                                        </input>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <form>
                        <div class="form-group">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label for="formGroupExampleInput2">
                                            Colonia:
                                        </label>
                                        <input class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder" type="text">
                                        </input>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="formGroupExampleInput2">
                                            Calle:
                                        </label>
                                        <input class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder" type="text">
                                        </input>
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="formGroupExampleInput2">
                                            Numero:
                                        </label>
                                        <input class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder" type="text">
                                        </input>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <form>
                        <div class="form-group">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for="formGroupExampleInput">
                                            Total a pagar:
                                        </label>
                                        <input class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder" type="text">
                                        </input>
                                    </div>
                                </div>
                                <br>
                                    <button class="btn btn-outline-success" type="submit">
                                        Pagar.
                                    </button>
                                </br>
                            </div>
                        </div>
                    </form>
                    <br/>
                </div>
            </div>
        </div>
    </body>
</html>
<hr>
</hr>
<script crossorigin="anonymous" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" src="https://code.jquery.com/jquery-3.5.1.slim.min.js">
</script>
<script crossorigin="anonymous" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js">
</script>
<script crossorigin="anonymous" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
</script>
