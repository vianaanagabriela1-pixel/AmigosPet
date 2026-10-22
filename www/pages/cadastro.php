<?php
require_once __DIR__ . '/../includes/conexao.php';

$mensagem = '';
$tipoMensagem = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim($_POST['nome'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $telefone = trim($_POST['telefone'] ?? '');
    $senha = $_POST['senha'] ?? '';
    $confirmarSenha = $_POST['confirmar_senha'] ?? '';
    $termos = isset($_POST['termos']);

    if ($nome === '' || $email === '' || $telefone === '' ||
        $senha === '' || $confirmarSenha === '') {
        $mensagem = 'Preencha todos os campos.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mensagem = 'Digite um e-mail válido.';
    } elseif (strlen($senha) < 8) {
        $mensagem = 'A senha deve ter pelo menos 8 caracteres.';
    } elseif ($senha !== $confirmarSenha) {
        $mensagem = 'As senhas não são iguais.';
    } elseif (!$termos) {
        $mensagem = 'Você precisa concordar com os termos de uso.';
    } else {
        try {
          $consulta = $pdo->prepare(
                'SELECT id FROM usuarios WHERE email = ?'
            );
            $consulta->execute([$email]);

            if ($consulta->fetch()) {
                $mensagem = 'Este e-mail já está cadastrado.';
            } else {
                $senhaProtegida = password_hash($senha, PASSWORD_DEFAULT);

              $inserir = $pdo->prepare(
                    'INSERT INTO usuarios (nome, email, telefone, senha)
                     VALUES (?, ?, ?, ?)'
                );

                $inserir->execute([
                    $nome,
                    $email,
                    $telefone,
                    $senhaProtegida
                ]);

                header('Location: entrar.php?cadastro=sucesso');
exit;
            }
        } catch (PDOException $erro) {
            error_log($erro->getMessage());
            $mensagem = 'Não foi possível criar a conta. Tente novamente.';
        }
    }

    if ($mensagem !== '' && $tipoMensagem !== 'success') {
        $tipoMensagem = 'danger';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Criar conta - AmigoPet</title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- CSS do projeto -->
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>

    <!-- MENU -->

    <nav class="navbar navbar-expand-lg shadow-sm">

        <div class="container">

            <a class="navbar-brand fw-bold" href="inicio.php">
                🐾 AmigoPet
            </a>

            <a href="entrar.php" class="btn btn-outline-success">
                Voltar
            </a>

        </div>

    </nav>


    <!-- CADASTRO -->

    <section class="py-5">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-md-7 col-lg-6">

                    <div class="card border-0 shadow-sm rounded-4">

                        <div class="card-body p-4 p-md-5">

                            <!-- TÍTULO -->

                            <div class="text-center mb-4">

                                <div class="fs-1 mb-2">
                                    🐾
                                </div>

                                <h2 class="fw-bold">
                                    Crie sua conta
                                </h2>

                                <p class="text-secondary">
                                    Faça parte da comunidade AmigoPet!
                                </p>

                            </div>


                            <!-- FORMULÁRIO -->

                            <form action="cadastro.php" method="POST">

                                <!-- NOME -->

                                <div class="mb-3">

                                    <label
                                        for="nome"
                                        class="form-label fw-semibold">

                                        Nome completo

                                    </label>

                                    <input
                                        type="text"
                                        class="form-control form-control-lg"
                                        id="nome"
                                        name="nome"
                                        placeholder="Digite seu nome">

                                </div>


                                <!-- E-MAIL -->

                                <div class="mb-3">

                                    <label
                                        for="email"
                                        class="form-label fw-semibold">

                                        E-mail

                                    </label>

                                    <input
                                        type="email"
                                        class="form-control form-control-lg"
                                        id="email"
                                        name="email"
                                        placeholder="Digite seu e-mail">

                                </div>


                                <!-- TELEFONE -->

                                <div class="mb-3">

                                    <label
                                        for="telefone"
                                        class="form-label fw-semibold">

                                        Telefone

                                    </label>

                                    <input
                                        type="tel"
                                        class="form-control form-control-lg"
                                        id="telefone"
                                        name="telefone"
                                        placeholder="(00) 00000-0000">

                                </div>


                                <!-- SENHA -->

                                <div class="mb-3">

                                    <label
                                        for="senha"
                                        class="form-label fw-semibold">

                                        Senha

                                    </label>

                                    <input
                                        type="password"
                                        class="form-control form-control-lg"
                                        id="senha"
                                        name="senha"
                                        placeholder="Crie uma senha">

                                </div>


                                <!-- CONFIRMAR SENHA -->

                                <div class="mb-3">

                                    <label
                                        for="confirmar_senha"
                                        class="form-label fw-semibold">

                                        Confirmar senha

                                    </label>

                                    <input
                                        type="password"
                                        class="form-control form-control-lg"
                                        id="confirmar_senha"
                                        name="confirmar_senha"
                                        placeholder="Digite a senha novamente">

                                </div>


                                <!-- TERMOS -->

                                <div class="form-check mb-4">

                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        id="termos"
                                        name="termos">

                                    <label
                                        class="form-check-label text-secondary"
                                        for="termos">

                                        Concordo com os termos de uso
                                        do AmigoPet.

                                    </label>

                                </div>


                                <!-- BOTÃO -->

                                <button
    type="submit"
    class="btn btn-success btn-lg w-100">

    Criar minha conta

</button>

                            </form>


                            <!-- LOGIN -->

                            <hr class="my-4">


                            <div class="text-center">

                                <p class="text-secondary mb-2">
                                    Já possui uma conta?
                                </p>

                                <a
                                    href="entrar.php"
                                    class="btn btn-outline-success">

                                    Entrar

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- RODAPÉ -->

    <footer class="footer py-4">

        <div class="container text-center">

            <p class="text-secondary mb-0">
                © 2026 AmigoPet - Todos os direitos reservados.
            </p>

        </div>

    </footer>

</body>

</html>