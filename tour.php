<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ER Tourist - TOUR</title>
    <?php require("./inc/links.php") ?>
</head>

<body class="bg-light">

    <?php
        require("./inc/header.php");
    ?>


    <!-- our facilities -->
    <div class="my-4 text-center">
        <h4 class="h-font fw-bold fs-2">OUR TOURS</h4>
        <div class="h-line bg-dark"></div>
    </div>

    <div class="container-fluid mt-5">
        <div class="row">
            <!-- tour filter  -->
            <div class="col-lg-3 mb-4 mb-lg-0 ps-3">
                <nav class="navbar rounded navbar-expand-lg navbar-light bg-white shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-between">
                            <span>FILTERS</span>
                            <button type="reset" id="resetall" class="d-none mt-lg-0 mt-2 btn btn-sm border btn-white shadow-none text-dark">Reset All</button>
                        </h4>
                        <button class="border-0 shadow-none navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column align-items-stretch" id="filterNav">
                            <div class="bg-light rounded p-3 shadow-sm mb-3 mt-3">
                                <h5 class="mb-3 d-flex align-items-center justify-content-between">
                                    <span>Check Availabilities</span>
                                    <button type="reset" class="d-none btn border  btn-sm shadow-none btn-light" id="chk_reset_btn">Reset</button>
                                </h5>
                                <div class="mb-2">
                                    <label class="form-label">Check-in</label>
                                    <input spellcheck="false"type="date" class="shadow-none form-control" id="checkin">
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Check-out</label>
                                    <input spellcheck="false" type="date" class="shadow-none form-control" id="checkout">
                                </div>
                                <div id="chk_errors" class="text-danger px-3 rounded text-center mt-2 d-none" style="background-color: #f8d7da;font-size: 0.8em;"></div>
                            </div>
                            <div class="bg-light rounded p-3 shadow-sm mb-3">
                                <h5 class="mb-3 d-flex align-items-center justify-content-between">
                                    <span>Guests</span>
                                    <button type="reset" class="d-none btn border  btn-sm shadow-none btn-light" id="guest_reset_btn">Reset</button>
                                </h5>
                                <div class="d-flex gap-2">
                                    <div>
                                        <label class="form-label">Adult</label>
                                        <input spellcheck="false" min="1" type="number" id="adult" class="shadow-none form-control">
                                    </div>
                                    <div>
                                        <label class="form-label">Children</label>
                                        <input spellcheck="false" min="1" input="search_by_guest()" type="number" id="children" class="shadow-none form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="col-lg-9 col-md-12 px-4">
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-5">
                            <img src="images/rooms/1.jpg" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5">
                            <h5>Simple Rom</h5>
                            <div class="features mb-3">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                3 Sofa
                            </span>
                        </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php require("./inc/footer.php") ?>
</body>

</html>