<?= $this->include('layouts/header') ?>

<div class="container py-5">

    <div class="hero text-center shadow-lg mb-5 animate__animated animate__fadeInDown">

        <h1 class="fw-bold display-4">

            Kumpulan Doa Islam

        </h1>

        <p class="mt-3 fs-5">

            Temukan berbagai doa sehari-hari dengan tampilan modern

        </p>

        <a href="/random" class="btn btn-light btn-lg mt-3">

            <i class="bi bi-stars"></i>
            Random Doa

        </a>

    </div>

    <!-- Search -->

    <form action="/search" method="get" class="mb-5">

        <div class="input-group shadow-lg search-box">

            <span class="input-group-text bg-primary text-white border-0">

                <i class="bi bi-search"></i>

            </span>

            <input
            type="text"
            name="q"
            class="form-control"
            placeholder="Cari doa..."
            >

            <button class="btn btn-main px-4">

                Cari

            </button>

        </div>

    </form>

    <?php if(isset($error)) : ?>

        <div class="alert alert-danger">

            <?= $error ?>

        </div>

    <?php endif; ?>

    <div class="row">

        <?php foreach($doa as $item) : ?>

            <div class="col-md-4 mb-4">

                <div class="card card-doa shadow animate__animated animate__fadeInUp h-100">

                    <div class="card-body d-flex flex-column">

                        <h5 class="fw-bold text-primary mb-3">

                            <?= $item['doa'] ?>

                        </h5>

                        <p class="text-muted flex-grow-1">

                            <?= substr($item['ayat'],0,120) ?>...

                        </p>

                        <div class="d-flex justify-content-between mt-3">

                            <a
                            href="/detail/<?= $item['id'] ?>"
                            class="btn btn-main"
                            >

                                Detail

                            </a>

                            <button
                            class="btn btn-outline-primary"
                            onclick="copyDoa('<?= $item['doa'] ?> \n\n <?= $item['ayat'] ?> \n\n <?= $item['artinya'] ?>')"
                            >

                                <i class="bi bi-clipboard"></i>

                            </button>

                        </div>

                    </div>

                </div>

            </div>

        <?php endforeach; ?>

    </div>

</div>

<?= $this->include('layouts/footer') ?>