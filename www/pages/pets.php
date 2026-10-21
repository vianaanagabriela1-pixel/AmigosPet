<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pets - AmigoPet</title>

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


    <!-- TÍTULO -->

    <section class="py-5">

        <div class="container">

            <div class="text-center mb-5">

                <span class="text-success fw-bold">
                    NOSSOS AMIGOS
                </span>

                <h1 class="fw-bold mt-2">
                    Encontre seu novo melhor amigo 🐾
                </h1>

                <p class="text-secondary">
                    Conheça os pets que estão esperando por um novo lar.
                </p>

            </div>


            <!-- PETS -->

            <div class="row g-4">

                <!-- THOR -->

                <div class="col-md-4">

                    <div class="card pet-card border-0 shadow-sm h-100">

                        <div class="pet-image pet-image-green">
                            🐶
                        </div>

                        <div class="card-body">

                            <span class="badge bg-success">
                                Disponível
                            </span>

                            <h4 class="fw-bold mt-2">
                                Thor
                            </h4>

                            <p class="text-secondary">
                                🐕 Cachorro • 2 anos
                            </p>

                            <p class="text-secondary">
                                Brincalhão, carinhoso e cheio de energia.
                            </p>

                            <a href="pet.php?" class="btn btn-success w-100">
                                Conhecer Thor
                            </a>

                        </div>

                    </div>

                </div>


                <!-- LUNA -->

                <div class="col-md-4">

                    <div class="card pet-card border-0 shadow-sm h-100">

                        <div class="pet-image pet-image-cyan">
                            🐱
                        </div>

                        <div class="card-body">

                            <span class="badge bg-success">
                                Disponível
                            </span>

                            <h4 class="fw-bold mt-2">
                                Luna
                            </h4>

                            <p class="text-secondary">
                                🐈 Gata • 1 ano
                            </p>

                            <p class="text-secondary">
                                Tranquila, carinhosa e adora receber carinho.
                            </p>

                            <a href="pet.php" class="btn btn-success w-100">
                                Conhecer Luna
                            </a>

                        </div>

                    </div>

                </div>


                <!-- BOB -->

                <div class="col-md-4">

                    <div class="card pet-card border-0 shadow-sm h-100">

                        <div class="pet-image pet-image-yellow">
                            🐕
                        </div>

                        <div class="card-body">

                            <span class="badge bg-success">
                                Disponível
                            </span>

                            <h4 class="fw-bold mt-2">
                                Bob
                            </h4>

                            <p class="text-secondary">
                                🐕 Cachorro • 3 anos
                            </p>

                            <p class="text-secondary">
                                Amigável, obediente e muito companheiro.
                            </p>

                            <a href="pet.php" class="btn btn-success w-100">
                                Conhecer Bob
                            </a>

                        </div>

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


    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>