<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Entrar - AmigoPet</title>

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

            <a href="inicio.php" class="btn btn-outline-success">
                Voltar
            </a>

        </div>

    </nav>


    <!-- LOGIN -->

    <section class="py-5">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-md-6 col-lg-5">

                    <div class="card border-0 shadow-sm rounded-4">

                        <div class="card-body p-4 p-md-5">

                            <!-- TÍTULO -->

                            <div class="text-center mb-4">

                                <div class="fs-1 mb-2">
                                    🐾
                                </div>

                                <h2 class="fw-bold">
                                    Bem-vindo ao AmigoPet!
                                </h2>

                                <p class="text-secondary">
                                    Entre na sua conta para continuar.
                                </p>

                            </div>


                            <!-- FORMULÁRIO -->

                            <form>

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
                                        placeholder="Digite seu e-mail">

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
                                        placeholder="Digite sua senha">

                                </div>


                                <!-- ESQUECI SENHA -->

                                <div class="text-end mb-4">

                                    <a
                                        href="esqueci_senha.php"
                                        class="text-success">

                                        Esqueci minha senha

                                    </a>

                                </div>


                                <!-- BOTÃO ENTRAR -->

                                <button
                                    type="button"
                                    class="btn btn-success btn-lg w-100">

                                    Entrar

                                </button>

                            </form>


                            <!-- CADASTRO -->

                            <hr class="my-4">


                            <div class="text-center">

                                <p class="text-secondary mb-2">
                                    Ainda não possui uma conta?
                                </p>

                                <a
                                    href="cadastro.php"
                                    class="btn btn-outline-success">

                                    Criar minha conta

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