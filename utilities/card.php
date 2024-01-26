<section class="py-5">
    <div class="col mb-5">
        <div class="card">
            <!-- Product image-->
            <img class="card-img-top" alt="" />
            <!-- Product details-->
            <div class="card-body p-4">
                <div class="text-center">
                    <h3 class="fw-bolder">
                        <?= $film['title']; ?>
                    </h3>
                    <div class="d-flex justify-content-center small text-warning mb-2">
                        <?= $film['rating'] . ' / 10 &nbsp;'; ?>
                        <?= getStar($film['rating']); ?>
                    </div>
                    <h5>Par :
                        <?= $film['director'] ?>
                    </h5>
                    <span class="text-muted">
                        Année de réalisation :
                        <?= $film['year_released']; ?>
                    </span>
                </div>
                <div class="d-flex justify-content-between my-2">
                    <h2>
                        <span class="badge bg-primary">
                            <p>Nombres d'entrées :
                                <?= $film['box_office'] ?>
                            </p>
                        </span>
                    </h2>
                    <h2>
                        <span class="badge bg-primary">
                            <p>Budget :
                                <?= $film['budget'] ?>
                            </p>
                        </span>
                    </h2>
                    <h2>
                        <span class="badge bg-primary">
                            <p>langue :
                                <?= $film['languages'] ?>
                            </p>
                        </span>
                    </h2>
                    <h2>
                        <span class="badge bg-primary">
                            <p>durée :
                                <?= $film['duration'] ?>
                            </p>
                        </span>
                    </h2>
                    <h2>
                        <span class="badge bg-primary">
                        <p>de : <?= $film['distributeur'] ?></p>
                        </span>
                    </h2>
                    <h2>
                        <span class="badge bg-primary">
                        <p>style : <?= $film['genre'] ?></p>
                        </span>
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>