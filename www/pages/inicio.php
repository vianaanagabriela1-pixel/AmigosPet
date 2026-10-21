<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AmigoPet - Adoção de Pets</title>

    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Nosso CSS -->
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>

    <!-- =========================
         MENU
    ========================== -->

    <nav class="navbar navbar-expand-lg bg-white shadow-sm">

        <div class="container">

            <a class="navbar-brand fw-bold text-success" href="#">

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
                        <a class="nav-link active" href="#">Início</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="pets.php">Pets</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="como-funciona.php">Como funciona</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="sobre.php">Sobre nós</a>
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
         BANNER PRINCIPAL
    ========================== -->

    <section class="hero">

        <div class="container">

            <div class="row align-items-center min-vh-75">

                <div class="col-lg-6">

                    <span class="badge bg-warning text-dark mb-3 px-3 py-2">
                        🐶 🐱 Encontre seu novo melhor amigo
                    </span>

                    <h1 class="display-4 fw-bold">

                        Um lar cheio de amor
                        <span class="text-success">começa aqui.</span>

                    </h1>

                    <p class="lead text-secondary mt-3">

                        No AmigoPet, você encontra pets que estão esperando
                        por uma família para chamar de lar.

                    </p>

                    <div class="mt-4">

                        <a href="pets.php" class="btn btn-outline-info btn-lg px-4">
                            Conhecer pets
                        </a>

                    </div>

                </div>


                <div class="col-lg-6 text-center mt-5 mt-lg-0">

                    <div class="hero-card">

                        <div class="pet-circle">

                            🐶

                        </div>

                        <div class="pet-small pet-small-1">
                            🐱
                        </div>

                        <div class="pet-small pet-small-2">
                            🐾
                        </div>

                        <div class="hero-heart">
                            💛
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================
         COMO FUNCIONA
    ========================== -->

    <section class="py-5 bg-white">

        <div class="container">

            <div class="text-center mb-5">

                <span class="text-info fw-bold">
                    COMO FUNCIONA
                </span>

                <h2 class="fw-bold mt-2">
                    Adotar é mais fácil do que você imagina
                </h2>

                <p class="text-secondary">
                    São poucos passos para encontrar seu novo companheiro.
                </p>

            </div>


            <div class="row g-4">

                <div class="col-md-4">

                    <div class="info-card text-center h-100">

                        <div class="icon-box bg-info-subtle">
                            🔎
                        </div>

                        <h4 class="fw-bold mt-3">
                            1. Encontre
                        </h4>

                        <p class="text-secondary">
                            Conheça os pets disponíveis e encontre aquele
                            que combina com você.
                        </p>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="info-card text-center h-100">

                        <div class="icon-box bg-warning-subtle">
                            💛
                        </div>

                        <h4 class="fw-bold mt-3">
                            2. Conheça
                        </h4>

                        <p class="text-secondary">
                            Veja as informações do pet e descubra sua
                            personalidade.
                        </p>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="info-card text-center h-100">

                        <div class="icon-box bg-success-subtle">
                            🏠
                        </div>

                        <h4 class="fw-bold mt-3">
                            3. Adote
                        </h4>

                        <p class="text-secondary">
                            Demonstre seu interesse e dê um novo lar
                            para seu melhor amigo.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================
         DESTAQUE
    ========================== -->

    <section class="pets-section py-5">

        <div class="container">

            <div class="row align-items-center mb-4">

                <div class="col">

                    <span class="text-success fw-bold">
                        ELES ESTÃO ESPERANDO POR VOCÊ
                    </span>

                    <h2 class="fw-bold mt-2">
                        Alguns dos nossos amigos
                    </h2>

                </div>

                <div class="col-auto">

                    <a href="#" class="btn btn-outline-success">
                        Ver todos
                    </a>

                </div>

            </div>


            <div class="row g-4">

                <!-- PET 1 -->

                <div class="col-md-4">

                    <div class="card pet-card border-0 shadow-sm h-100">

                        <div class="pet-image pet-image-green">
                            🐶
                        </div>

                        <div class="card-body">

                            <span class="badge bg-success">
                                Disponível
                            </span>

                            <h4 class="card-title fw-bold mt-2">
                                Thor
                            </h4>

                            <p class="text-secondary mb-2">
                                🐕 Cachorro • 2 anos
                            </p>

                            <p class="text-secondary">
                                Brincalhão, carinhoso e cheio de energia.
                            </p>

                            <a href="#" class="btn btn-success w-100">
                                Conhecer o Thor
                            </a>

                        </div>

                    </div>

                </div>


                <!-- PET 2 -->

                <div class="col-md-4">

                    <div class="card pet-card border-0 shadow-sm h-100">

                        <div class="pet-image pet-image-cyan">
                            🐱
                        </div>

                        <div class="card-body">

                            <span class="badge bg-success">
                                Disponível
                            </span>

                            <h4 class="card-title fw-bold mt-2">
                                Luna
                            </h4>

                            <p class="text-secondary mb-2">
                                🐈 Gata • 1 ano
                            </p>

                            <p class="text-secondary">
                                Tranquila, carinhosa e adora receber carinho.
                            </p>

                            <a href="#" class="btn btn-success w-100">
                                Conhecer a Luna
                            </a>

                        </div>

                    </div>

                </div>


                <!-- PET 3 -->

                <div class="col-md-4">

                    <div class="card pet-card border-0 shadow-sm h-100">

                        <div class="pet-image pet-image-yellow">
                            🐕
                        </div>

                        <div class="card-body">

                            <span class="badge bg-success">
                                Disponível
                            </span>

                            <h4 class="card-title fw-bold mt-2">
                                Bob
                            </h4>

                            <p class="text-secondary mb-2">
                                🐕 Cachorro • 3 anos
                            </p>

                            <p class="text-secondary">
                                Amigável, obediente e muito companheiro.
                            </p>

                            <a href="#" class="btn btn-success w-100">
                                Conhecer o Bob
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================
         CHAMADA FINAL
    ========================== -->

    <section class="cta-section py-5">

        <div class="container">

            <div class="cta-box text-center">

                <div class="mb-3 fs-1">
                    🐾
                </div>

                <h2 class="fw-bold">
                    Seu novo melhor amigo pode estar esperando por você.
                </h2>

                <p class="mt-3 mb-4">
                    Dê uma chance para quem só precisa de um pouco de amor.
                </p>

                <a href="#" class="btn btn-warning btn-lg px-5">
                    Encontrar meu AmigoPet
                </a>

            </div>

        </div>

    </section>


    <!-- =========================
         RODAPÉ
    ========================== -->

    <footer class="footer py-4">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-md-6">

                    <h5 class="fw-bold text-success">
                        🐾 AmigoPet
                    </h5>

                    <p class="text-secondary mb-0">
                        Conectando pets a novos lares.
                    </p>

                </div>

                <div class="col-md-6 text-md-end mt-3 mt-md-0">

                    <p class="text-secondary mb-0">
                        © 2026 AmigoPet
                    </p>

                </div>

            </div>

        </div>

    </footer>


    <!-- Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>