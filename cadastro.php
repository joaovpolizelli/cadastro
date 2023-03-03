<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col">
            <h3>Cadastro novo usuário</h3>
            <form action="" method="post">
                <div class="row">
                    <div class="col-6">
                        <div class="mt-1">
                            <input type="text" class="form-control" placeholder="Nome *">
                        </div>
                    <div class="mt-1">
                        <input type="text" class="form-control" placeholder="Sobrenome *"> 
                    </div>
                    <div class="mt-1">
                        <input type="email" class="form-control" placeholder="Email *">
                    </div>
                    <div class="mt-1">
                        <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Telefone *">
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mt-1">
                            <input type="password" class="form-control" placeholder="Senha *">
                        </div>
                    <div class="mt-1">
                        <input type="password" class="form-control" placeholder="Confirme a senha *">
                    </div>
                    <div class="mt-1">
                        <select class="form-select">
                            <option selected>Selecione uma pergunta de segurança</option>
                            <option>Qual a estação do ano que você nasceu?</option>
                            <option>Qual seu número de telefone anterior?</option>
                        <option>Qual nome do seu animal de estimação?</option>
                        </select>
                    </div>
                    <div class="mt-1">
                        <input type="text" class="form-control" placeholder="Resposta *">
                    </div>
                    <button type="submit" class="btn btn-primary w-50 mt-3">Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>