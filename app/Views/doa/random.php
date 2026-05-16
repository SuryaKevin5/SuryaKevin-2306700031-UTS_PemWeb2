<?= $this->include('layouts/header') ?>

<div class="container py-5">

    <div class="hero text-center mb-5 animate__animated animate__fadeInDown">

        <h1 class="fw-bold display-5">

            Random Doa

        </h1>

        <p>

            Temukan doa secara acak

        </p>

    </div>

    <?php if(isset($random)) : ?>

        <div class="card card-doa shadow-lg animate__animated animate__zoomIn">

            <div class="card-body p-5">

                <h2 class="fw-bold text-primary mb-4">

                    <?= $random['doa'] ?>

                </h2>

                <div class="arab mb-5">

                    <?= $random['ayat'] ?>

                </div>

                <h5 class="fw-bold">

                    Latin

                </h5>

                <p class="mb-4">

                    <?= $random['latin'] ?>

                </p>

                <h5 class="fw-bold">

                    Arti

                </h5>

                <p>

                    <?= $random['artinya'] ?>

                </p>

                <div class="mt-4 d-flex gap-2 flex-wrap">

                    <a href="/random" class="btn btn-main">

                        <i class="bi bi-arrow-repeat"></i>
                        Random Lagi

                    </a>

                    <button
                    class="btn btn-outline-primary"
                    onclick="copyDoa('<?= $random['doa'] ?> \n\n <?= $random['ayat'] ?> \n\n <?= $random['artinya'] ?>')"
                    >

                        <i class="bi bi-clipboard"></i>
                        Copy

                    </button>

                </div>

            </div>

        </div>

    <?php endif; ?>

</div>

<?= $this->include('layouts/footer') ?>