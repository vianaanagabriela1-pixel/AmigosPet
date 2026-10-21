<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Adotar - AmigoPet</title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>


    <!-- MENU -->

    <nav class="navbar navbar-expand-lg shadow-sm">

        <div class="container">

            <a class="navbar-brand fw-bold" href="inicio.php">
                🐾 AmigoPet
            </a>

            <a href="pets.php" class="btn btn-outline-success">
                Voltar
            </a>

        </div>

    </nav>


    <!-- FORMULÁRIO DE ADOÇÃO -->

    <section class="py-5">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-md-8 col-lg-7">

                    <div class="card border-0 shadow-sm rounded-4">

                        <div class="card-body p-4 p-md-5">


                            <!-- TÍTULO -->

                            <div class="text-center mb-4">

                                <div class="fs-1 mb-2">
                                    💚
                                </div>

                                <h2 class="fw-bold">
                                    Quero adotar!
                                </h2>

                                <p class="text-secondary">
                                    Que bom que você quer dar um novo lar
                                    para um pet.
                                </p>

                            </div>


                            <!-- PET -->

                            <div class="text-center mb-4">

                                <span class="badge bg-success">
                                    Pet escolhido
                                </span>

                                <h3 class="fw-bold mt-2">
                                    🐶 Thor
                                </h3>

                                <p class="text-secondary mb-0">
                                    Cachorro • 2 anos
                                </p>

                            </div>


                            <hr>


                            <!-- FORMULÁRIO -->

                            <form>


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
                                        placeholder="Digite seu nome">

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
                                        placeholder="(00) 00000-0000">

                                </div>


                                <!-- ENDEREÇO -->

                                <div class="mb-3">

                                    <label
                                        for="endereco"
                                        class="form-label fw-semibold">

                                        Endereço

                                    </label>

                                    <input
                                        type="text"
                                        class="form-control form-control-lg"
                                        id="endereco"
                                        placeholder="Digite seu endereço">

                                </div>


                                <!-- TIPO DE MORADIA -->

                                <div class="mb-3">

                                    <label
                                        for="moradia"
                                        class="form-label fw-semibold">

                                        Tipo de moradia

                                    </label>

                                    <select
                                        class="form-select form-select-lg"
                                        id="moradia">

                                        <option selected>
                                            Selecione
                                        </option>

                                        <option>
                                            Casa
                                        </option>

                                        <option>
                                            Apartamento
                                        </option>

                                        <option>
                                            Chácara
                                        </option>

                                        <option>
                                            Outro
                                        </option>

                                    </select>

                                </div>


                                <!-- POSSUI OUTROS ANIMAIS -->

                                <div class="mb-3">

                                    <label
                                        class="form-label fw-semibold">

                                        Você possui outros animais?

                                    </label>

                                    <div>

                                        <div class="form-check form-check-inline">

                                            <input
                                                class="form-check-input"
                                                type="radio"
                                                name="outros_animais"
                                                id="animais_sim">

                                            <label
                                                class="form-check-label"
                                                for="animais_sim">

                                                Sim

                                            </label>

                                        </div>

                                        <div class="form-check form-check-inline">

                                            <input
                                                class="form-check-input"
                                                type="radio"
                                                name="outros_animais"
                                                id="animais_nao">

                                            <label
                                                class="form-check-label"
                                                for="animais_nao">

                                                Não

                                            </label>

                                        </div>

                                    </div>

                                </div>


                                <!-- MOTIVO -->

                                <div class="mb-4">

                                    <label
                                        for="motivo"
                                        class="form-label fw-semibold">

                                        Por que você quer adotar o Thor?

                                    </label>

                                    <textarea
                                        class="form-control"
                                        id="motivo"
                                        rows="4"
                                        placeholder="Conte um pouco sobre o motivo da adoção..."></textarea>

                                </div>


                                <!-- TERMOS -->

                                <div class="form-check mb-4">

                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        id="responsabilidade">

                                    <label
                                        class="form-check-label text-secondary"
                                        for="responsabilidade">

                                        Declaro que estou preparado para
                                        assumir a responsabilidade de cuidar
                                        do pet.

                                    </label>

                                </div>


                                <!-- BOTÃO -->

                                <button
                                    type="button"
                                    class="btn btn-success btn-lg w-100"
                                    data-bs-toggle="modal"
                                    data-bs-target="#modalSolicitacao">

                                    💚 Enviar solicitação de adoção

                                </button>

                            </form>

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

    <!-- =========================
     POPUP - SOLICITAÇÃO ENVIADA
========================= -->

<div
    class="modal fade"
    id="modalSolicitacao"
    tabindex="-1"
    aria-labelledby="modalSolicitacaoLabel"
    aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content border-0 rounded-4 shadow">

            <div class="modal-body text-center p-4 p-md-5">

                <div class="fs-1 mb-3">
                    🐾
                </div>

                <h3
                    class="fw-bold"
                    id="modalSolicitacaoLabel">

                    Solicitação enviada!

                </h3>

                <p class="text-secondary mt-3">

                    Sua solicitação de adoção será avaliada
                    pela nossa equipe.

                </p>

                <p class="text-secondary">

                    Assim que houver uma atualização,
                    você será avisado sobre os próximos
                    passos do processo de adoção.

                </p>


                <a
                    href="inicio.php"
                    class="btn btn-success btn-lg w-100 mt-3">

                    Voltar para o início

                </a>

            </div>

        </div>

    </div>

</div>


<!-- Bootstrap JS -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>
</body>

</html>