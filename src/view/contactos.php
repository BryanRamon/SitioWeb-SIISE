<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos SISE</title>
    <link rel="stylesheet" href="../../css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>
    <?php include 'recycle/nav.php'; ?>
    <main class="box d-flex justify-content-center p-5">
        <div class="box__center container d-flex shadow">
            <img src="../img/asesor.jpg" alt="" style="width: 50%; height: 700px;">
            <form action="" class="box__center__formulario p-5">
                <h4 class="text-center mb-4">Contacte con un Asesor</h4>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Correo Institucional o Personal</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@gmail.com">
                </div>
                <div class="mb-3 mt-4">
                    <label for="exampleFormControlInput1" class="form-label">Número de Telefono</label>
                    <div class="input-group">
                        <span class="input-group-text">+51</span>
                    <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>
                </div>
                <div class="mb-3 mt-4">
                    <label for="exampleFormControlInput1" class="form-label">Apellidos Completos</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="mb-3 mt-4">
                    <label for="exampleFormControlInput1" class="form-label">Número de identidad</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Motivo de consulta</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="d-flex justify-content-between mt-5">
                    <button type="reset" class="btn btn-danger"><i class="bi bi-trash3" style="font-size: 1rem;margin-right: 0.5rem;"></i>Limpiar</button>
                    <button type="button" class="btn btn-primary"><i class="bi bi-send" style="font-size: 1rem;margin-right: 0.5rem;"></i>Enviar</button>
                </div>
            </form>
        </div>
    </main>
    <?php include 'recycle/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>