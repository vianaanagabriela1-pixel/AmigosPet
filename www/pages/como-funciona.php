<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Como funciona - AmigoPet</title>

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

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menu">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="menu">

                <ul class="navbar-nav ms-auto align-items-lg-center">

                    <li class="nav-item">
                        <a class="nav-link" href="inicio.php">
                            Início
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="pets.php">
                            Pets
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="como-funciona.php">
                            Como funciona
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="sobre.php">
                            Sobre nós
                        </a>
                    </li>

                    <li class="nav-item ms-lg-3 mt-2 mt-lg-0">

                        <a href="entrar.php" class="btn btn-success px-4">
                            Entrar
                        </a>

                    </li>

                </ul>

            </div>

        </div>

    </nav>


    <!-- CABEÇALHO -->

    <section class="py-5">

        <div class="container">

            <div class="text-center mb-5">

                <span class="text-info fw-bold">
                    COMO FUNCIONA
                </span>

                <h1 class="fw-bold mt-2">
                    Adotar é simples 💚
                </h1>

                <p class="text-secondary">
                    Veja como funciona o processo de adoção no AmigoPet.
                </p>

            </div>


            <!-- ETAPAS -->

            <div class="row g-4">


                <!-- ETAPA 1 -->

                <div class="col-md-4">

                    <div class="info-card text-center h-100">

                        <div class="icon-box bg-info-subtle">
                            🔎
                        </div>

                        <h4 class="fw-bold mt-3">
                            1. Encontre um pet
                        </h4>

                        <p class="text-secondary">
                            Navegue pela nossa lista de pets e encontre
                            aquele que mais combina com você e sua família.
                        </p>

                    </div>

                </div>


                <!-- ETAPA 2 -->

                <div class="col-md-4">

                    <div class="info-card text-center h-100">

                        <div class="icon-box bg-warning-subtle">
                            💛
                        </div>

                        <h4 class="fw-bold mt-3">
                            2. Conheça o pet
                        </h4>

                        <p class="text-secondary">
                            Veja as informações do animal, conheça sua
                            personalidade e descubra suas necessidades.
                        </p>

                    </div>

                </div>


                <!-- ETAPA 3 -->

                <div class="col-md-4">

                    <div class="info-card text-center h-100">

                        <div class="icon-box bg-success-subtle">
                            🏠
                        </div>

                        <h4 class="fw-bold mt-3">
                            3. Solicite a adoção
                        </h4>

                        <p class="text-secondary">
                            Demonstre seu interesse pelo pet e aguarde
                            a análise do pedido de adoção.
                        </p>

                    </div>

                </div>

            </div>


            <!-- SEGUNDA PARTE -->

            <div class="row justify-content-center mt-5">

                <div class="col-lg-9">

                    <div class="cta-box text-center">

                        <div class="fs-1 mb-3">
                            🐾
                        </div>

                        <h2 class="fw-bold">
                            Pronto para encontrar seu novo melhor amigo?
                        </h2>

                        <p class="text-secondary mt-3">
                            Existem muitos pets esperando por uma família
                            para chamar de lar.
                        </p>

                        <a href="pets.php" class="btn btn-success btn-lg px-5 mt-2">
                            Ver pets disponíveis
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- RODAPÉ -->

    <footer class="footer py-4">

        <div class="container text-center">

            <h5 class="fw-bold text-success">
                🐾 AmigoPet
            </h5>

            <p class="text-secondary mb-0">
                Conectando pets a novos lares.
            </p>

        </div>

    </footer>


    <!-- Bootstrap JS -->

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>