<!-- =========================
     POPUP - NOVA SENHA
========================= -->

<div
    class="modal fade"
    id="modalNovaSenha"
    tabindex="-1"
    aria-labelledby="modalNovaSenhaLabel"
    aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content border-0 rounded-4 shadow">

            <div class="modal-body p-4 p-md-5">

                <!-- TÍTULO -->

                <div class="text-center mb-4">

                    <div class="fs-1 mb-3">
                        🔐
                    </div>

                    <h3
                        class="fw-bold"
                        id="modalNovaSenhaLabel">

                        Criar nova senha

                    </h3>

                    <p class="text-secondary">

                        Digite sua nova senha para recuperar
                        o acesso à sua conta.

                    </p>

                </div>


                <!-- NOVA SENHA -->

                <div class="mb-3">

                    <label
                        for="novaSenha"
                        class="form-label fw-semibold">

                        Nova senha

                    </label>

                    <input
                        type="password"
                        class="form-control form-control-lg"
                        id="novaSenha"
                        placeholder="Digite sua nova senha">

                </div>


                <!-- CONFIRMAR SENHA -->

                <div class="mb-4">

                    <label
                        for="confirmarNovaSenha"
                        class="form-label fw-semibold">

                        Confirmar nova senha

                    </label>

                    <input
                        type="password"
                        class="form-control form-control-lg"
                        id="confirmarNovaSenha"
                        placeholder="Digite a senha novamente">

                </div>


                <!-- BOTÃO -->

                <a
                    href="../pages/inicio.php"
                    class="btn btn-success btn-lg w-100">

                    Alterar minha senha

                </a>


                <!-- CANCELAR -->

                <div class="text-center mt-3">

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