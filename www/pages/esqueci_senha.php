<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Esqueci minha senha - AmigoPet</title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- CSS do projeto -->
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>


    <!-- =========================
         MENU
    ========================== -->

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


    <!-- =========================
         RECUPERAÇÃO DE SENHA
    ========================== -->

    <section class="py-5">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-md-6 col-lg-5">

                    <div class="card border-0 shadow-sm rounded-4">

                        <div class="card-body p-4 p-md-5">


                            <!-- TÍTULO -->

                            <div class="text-center mb-4">

                                <div class="fs-1 mb-3">
                                    🔐
                                </div>

                                <h2 class="fw-bold">
                                    Esqueceu sua senha?
                                </h2>

                                <p class="text-secondary">
                                    Não se preocupe! Digite seu e-mail
                                    para recuperar o acesso à sua conta.
                                </p>

                            </div>


                            <!-- FORMULÁRIO -->

                            <form>

                                <div class="mb-4">

                                    <label
                                        for="email"
                                        class="form-label fw-semibold">

                                        E-mail

                                    </label>

                                    <input
                                        type="email"
                                        class="form-control form-control-lg"
                                        id="email"
                                        placeholder="Digite seu e-mail"
                                        required>

                                </div>


                                <!-- BOTÃO RECUPERAR -->

                                <button
                                    type="button"
                                    class="btn btn-success btn-lg w-100"
                                    data-bs-toggle="modal"
                                    data-bs-target="#modalCodigo">

                                    Recuperar minha senha

                                </button>

                            </form>


                            <!-- VOLTAR PARA LOGIN -->

                            <div class="text-center mt-4">

                                <a
                                    href="entrar.php"
                                    class="text-success">

                                    ← Voltar para o login

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================
         POPUP - CÓDIGO
    ========================== -->

    <div
        class="modal fade"
        id="modalCodigo"
        tabindex="-1"
        aria-labelledby="modalCodigoLabel"
        aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content border-0 rounded-4 shadow">

                <div class="modal-body p-4 p-md-5">


                    <!-- TÍTULO -->

                    <div class="text-center mb-4">

                        <div class="fs-1 mb-3">
                            📩
                        </div>

                        <h3
                            class="fw-bold"
                            id="modalCodigoLabel">

                            Digite o código

                        </h3>

                        <p class="text-secondary">

                            Enviamos um código de recuperação
                            para o seu e-mail.

                        </p>

                    </div>


                    <!-- CÓDIGO -->

                    <div class="mb-3">

                        <label
                            for="codigo"
                            class="form-label fw-semibold">

                            Código de recuperação

                        </label>

                        <input
                            type="text"
                            class="form-control form-control-lg text-center"
                            id="codigo"
                            placeholder="Digite o código"
                            maxlength="6">

                    </div>


                    <!-- CONFIRMAR CÓDIGO -->

                    <button
                        type="button"
                        class="btn btn-success btn-lg w-100"
                        id="btnConfirmarCodigo">

                        Confirmar código

                    </button>


                    <!-- REENVIAR CÓDIGO -->

                    <div class="text-center mt-3">

                        <button
                            type="button"
                            class="btn btn-link text-success">

                            Reenviar código

                        </button>

                    </div>


                    <!-- CANCELAR -->

                    <div class="text-center mt-2">

                        <button
                            type="button"
                            class="btn btn-link text-secondary"
                            data-bs-dismiss="modal">

                            Cancelar

                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- =========================
         POPUP - NOVA SENHA
    ========================== -->

    <?php include("../includes/modal-nova-senha.php"); ?>


    <!-- =========================
         RODAPÉ
    ========================== -->

    <footer class="footer py-4">

        <div class="container text-center">

            <p class="text-secondary mb-0">

                © 2026 AmigoPet - Todos os direitos reservados.

            </p>

        </div>

    </footer>


    <!-- =========================
         BOOTSTRAP JS
    ========================== -->

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

<script>

    document.getElementById("btnConfirmarCodigo").addEventListener("click", function () {

        // Pega o popup do código
        const modalCodigo = document.getElementById("modalCodigo");

        // Pega o popup da nova senha
        const modalNovaSenha = document.getElementById("modalNovaSenha");

        // Cria os controles dos modais
        const codigo = bootstrap.Modal.getOrCreateInstance(modalCodigo);
        const novaSenha = bootstrap.Modal.getOrCreateInstance(modalNovaSenha);

        // Fecha o popup do código
        codigo.hide();

        // Quando terminar de fechar, abre o popup da nova senha
        modalCodigo.addEventListener("hidden.bs.modal", function () {

            novaSenha.show();

        }, { once: true });

    });

</script>

</body>

</html>