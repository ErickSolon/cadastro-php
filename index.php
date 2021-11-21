<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <link rel="stylesheet" href="css/styles.css">

    <title>Cadastro</title>
</head>

<body>
    <div class="container p-5">
        <div class="row">
            <div class="col-sm">
                <div class="d-flex justify-content-center bg-dark border-div-form text-white">
                    <form method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" aria-describedby="ajudaEmail" name="email">
                            <div id="ajudaEmail" class="form-text">Insira seu E-mail:</div>
                        </div>
                        <div class="mb-3">
                            <label for="senha" class="form-label">Senha</label>
                            <input type="password" class="form-control" name="senha">
                        </div>
                        <button type="submit" class="btn btn-success w-100">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
</body>

</html>

<?php
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    if(isset($email) and isset($senha)) {
        $conn = new mysqli("endereco", "usuario", "senha", "Site");

        function InserirDados($emailInserir, $senhaInserir) {
            global $conn;
            $stmt = $conn->prepare("INSERT INTO Login(email, senha) VALUES(?, ?)");
            $stmt->bind_param("ss", $emailInserir, $senhaInserir);
            $stmt->execute();
        }

        InserirDados($email, $senha);
    }

    
?>