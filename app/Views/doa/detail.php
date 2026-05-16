<?= $this->include('layouts/header') ?>

<div class="container py-5">

    <a href="/" class="btn btn-secondary mb-4">

        <i class="bi bi-arrow-left"></i>
        Kembali

    </a>

    <?php if(isset($detail)) : ?>

        <div class="card card-doa shadow-lg animate__animated animate__zoomIn">

            <div class="card-body p-5">

                <h2 class="fw-bold text-primary mb-4">

                    <?= $detail['doa'] ?>

                </h2>

                <div class="arab mb-5">

                    <?= $detail['ayat'] ?>

                </div>

                <h5 class="fw-bold">

                    Latin

                </h5>

                <p class="mb-4">

                    <?= $detail['latin'] ?>

                </p>

                <h5 class="fw-bold">

                    Arti

                </h5>

                <p>

                    <?= $detail['artinya'] ?>

                </p>

                <div class="mt-4 d-flex gap-2 flex-wrap">

                    <button
                    class="btn btn-main"
                    onclick="copyDoa('<?= $detail['doa'] ?> \n\n <?= $detail['ayat'] ?> \n\n <?= $detail['artinya'] ?>')"
                    >

                        <i class="bi bi-clipboard"></i>
                        Copy

                    </button>

                    <a
                    target="_blank"
                    href="https://wa.me/?text=<?= urlencode($detail['doa']) ?>"
                    class="btn btn-outline-success"
                    >

                        <i class="bi bi-whatsapp"></i>
                        Share

                    </a>

                </div>

            </div>

        </div>

    <?php endif; ?>

</div>

<?= $this->include('layouts/footer') ?>