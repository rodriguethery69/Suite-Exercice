<section class="py-5">
    <div class="col-4 mt-3 mx-auto">
        <div class="card">
            <!-- Product image-->
            <img class="card-img-top mx-auto " src="<?= $path3 ?>" alt="" />
            <!-- Product details-->
            <div class="card-body">
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
                <div class="d-flex justify-content-evenly my-2 mx-auto">
                    <h2>
                        <span class="badge bg-warning" style="font-size: 0.5em";>
                            <p><i class="bi bi-ticket-detailed-fill"></i> :
                                <?= $film['box_office'] ?>
                            </p>
                        </span>
                    </h2>
                    <h2>
                        <span class="badge bg-warning" style="font-size: 0.5em";>
                            <p><i class="bi bi-cash"></i> :
                                <?= $film['budget'] ?>
                            </p>
                        </span>
                    </h2>
                    <h2>
                        <span class="badge bg-warning" style="font-size: 0.5em";>
                            <p><i class="bi bi-translate"></i> :
                                <?= $film['languages'] ?>
                            </p>
                        </span>
                    </h2>
                </div>
                    <div class="d-flex justify-content-evenly my-2 mx-auto">
                        <h2>
                            <span class="badge bg-warning" style="font-size: 0.5em";>
                                 <p><i class="bi bi-clock-fill"></i> :
                                     <?= $film['duration'] ?>
                                 </p>
                            </span>
                        </h2>
                        <h2>
                            <span class="badge bg-warning" style="font-size: 0.5em";>
                                <p><i class="bi bi-film"></i> :
                                    <?= $film['distributeur'] ?> 
                                 </p>
                            </span>
                        </h2>
                        <h2>
                             <span class="badge bg-warning" style="font-size: 0.5em";>
                                 <p><i class="bi bi-camera-video-fill"></i> :
                                    <?= $film['genre'] ?>
                                 </p>
                            </span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>