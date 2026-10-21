<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Conheça o pet - AmigoPet</title>

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
                        <a class="nav-link active" href="pets.php">
                            Pets
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="como-funciona.php">
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


    <!-- =========================
         DETALHES DO PET
    ========================== -->

<section class="py-5 pet-details-page">
        <div class="container">

            <div class="row justify-content-center align-items-center">


                <!-- IMAGEM DO PET -->

                <div class="col-lg-5 text-center mb-4 mb-lg-0">

                    <div class="pet-details-image">

                        🐶

                    </div>

                </div>


                <!-- INFORMAÇÕES -->

                <div class="col-lg-6">

                    <span class="badge bg-success mb-2">
                        Disponível para adoção
                    </span>

                    <h1 class="fw-bold">
                        Thor
                    </h1>

                    <p class="text-secondary fs-5">
                        🐕 Cachorro • 2 anos
                    </p>


                    <hr>


                    <h4 class="fw-bold">
                        Sobre o Thor
                    </h4>

                    <p class="text-secondary">
                        Thor é um cachorro brincalhão, carinhoso e
                        cheio de energia. Ele adora brincar, passear
                        e estar perto das pessoas.
                    </p>


                    <!-- INFORMAÇÕES -->

                    <div class="row g-3 mt-3">


                        <div class="col-sm-6">

                            <div class="info-card h-100">

                                <strong>
                                    🐾 Espécie
                                </strong>

                                <p class="text-secondary mb-0">
                                    Cachorro
                                </p>

                            </div>

                        </div>


                        <div class="col-sm-6">

                            <div class="info-card h-100">

                                <strong>
                                    🎂 Idade
                                </strong>

                                <p class="text-secondary mb-0">
                                    2 anos
                                </p>

                            </div>

                        </div>


                        <div class="col-sm-6">

                            <div class="info-card h-100">

                                <strong>
                                    ⚡ Energia
                                </strong>

                                <p class="text-secondary mb-0">
                                    Alta
                                </p>

                            </div>

                        </div>


                        <div class="col-sm-6">

                            <div class="info-card h-100">

                                <strong>
                                    ❤️ Temperamento
                                </strong>

                                <p class="text-secondary mb-0">
                                    Carinhoso
                                </p>

                            </div>

                        </div>

                    </div>


                    <!-- BOTÃO -->

                    <div class="mt-4">

                        <a
                            href="adotar.php"
                            class="btn btn-success btn-lg px-5">

                            💚 Quero adotar

                        </a>

                    </div>


                    <div class="mt-3">

                        <a
                            href="pets.php"
                            class="text-success">

                            ← Voltar para os pets

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================
         RODAPÉ
    ========================== -->

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