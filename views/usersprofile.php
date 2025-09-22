<main id="main" class="main">
    <div class="pagetitle">
        <h1>Players Profile</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Users</li>
                <li class="breadcrumb-item active">Profile</li>
            </ol>
        </nav>
    </div>

    <section class="section profile">
        <div class="row">
            <div class="col-xl-12">
                <!-- Header Section -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="mb-0">Team Roster</h2>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPlayerModal">
                        <i class="bi bi-plus-circle me-2"></i>Add New Player
                    </button>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mx-auto">
                    <form class="d-flex align-items-center bg-white p-2 rounded-pill shadow-sm" method="POST">
                        <input 
                            type = "text" 
                            name = "searched" 
                            placeholder = "Search Player" 
                            title = "Enter search keyword" 
                            class = "form-control form-control-sm border-0 shadow-none rounded-pill" 
                            value = "<?= $web_app->persistData( 'searched', false, $clear ) ?>"
                            style = "background-color: transparent;"
                        >
                        <button 
                            type="submit" 
                            name="search_btn" 
                            title="Search" 
                            class="btn d-flex align-items-center justify-content-center rounded-circle" 
                            style="width: 40px; height: 40px; background-color: #003366; color: #ffffff;"
                        >
                            <i class="bi bi-search"></i>
                        </button>
                    </form>
                </div>

                <?= $web_app->showAlert( $msg, true) ?>
                <!-- Player Accordions -->
                <div class="accordion" id="playersAccordion">

                    <?php
                    $output = '';
                    
                    foreach ($player_arr as $player) {

                        $output .= $web_app->playerDetailsCard($player, $upload_url);
                        /* if ($player['status']== 1) {
                        } */
                        
                    }

                    echo $output;
                    ?>

                </div>

                <!-- Pagination -->
                <nav class="mt-4">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">
                                <i class="bi bi-chevron-left"></i>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
</main>

<!-- Add Player Modal -->
<div class="modal fade" id="addPlayerModal" tabindex="-1" aria-labelledby="addPlayerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header text-white" style="background-color: #003366; color: #ffffff; font-family: 'Poppins', sans-serif;">
                <h5 class="modal-title" id="addPlayerModalLabel">
                    <i class="bi bi-person-plus me-2"></i>Add New Player
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" class="needs-validation" enctype="multipart/form-data">
                    <div class="row g-3">
                        <!-- Player Image Upload -->
                        <div class="col-md-4 text-center">
                            <div class="image-upload-container border rounded p-3">
                                <img src="assets/img/default-avatar.jpg" 
                                    class="img-thumbnail mb-2" 
                                    alt="Player Image" 
                                    style="width: 150px; height: 150px; object-fit: cover;">
                                <input type="file" class="form-control" name="player_image" accept=".jpeg, .jpg">
                                <div class="form-text">Recommended size: 300x300px</div>
                            </div>
                        </div>

                        <!-- Player Details -->
                        <div class="col-md-8">
                            <div class="row g-3">
                                <div class="col-12">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" class="form-control" name="full_name" 
                                        placeholder="E.g., Lionel Messi" value="<?= $web_app->persistData( 'full_name', false, $clear ) ?>" required>
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control" name="dob" 
                                        placeholder="Select date" value="<?= $web_app->persistData( 'dob', false, $clear ) ?>" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" 
                                        placeholder="player@example.com" value="<?= $web_app->persistData( 'email', false, $clear ) ?>" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Position</label>
                                    <select class="form-select" name="position" required>
                                        <option value="" disabled selected>Select playing position</option>
                                        <option>Forward</option>
                                        <option>Midfielder</option>
                                        <option>Defender</option>
                                        <option>Goalkeeper</option>
                                        <option>Winger</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Jersey Number</label>
                                    <input type="number" class="form-control" name="j_num" 
                                        placeholder="Between 1-99" value="<?= $web_app->persistData( 'j_num', false, $clear ) ?>" min="1" max="99" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Height (cm)</label>
                                    <input type="number" class="form-control" name="height" 
                                        placeholder="In centimeters" value="<?= $web_app->persistData( 'height', false, $clear ) ?>" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Weight (kg)</label>
                                    <input type="number" class="form-control" name="weight" 
                                        placeholder="In kilograms" value="<?= $web_app->persistData( 'weight', false, $clear ) ?>"  required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">State of Origin</label>
                                    <select class="form-select" name="state" required>
                                        <option value="" disabled selected>Select home state</option>
                                         <?php foreach ($states as $value) {?>
                                            <option value="<?= $value?>" ><?= $value ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Stats Section -->
                    <div class="mt-4">
                        <h6 class="border-bottom pb-2">Performance Statistics</h6>
                        <div class="row mb-3">
                            <div class="col-10 mx-auto">
                                <label class="form-label">Season Statistics</label>
                                <textarea 
                                    class="form-control" 
                                    rows="4" 
                                    name="season_stats"
                                    placeholder="Enter seasonal performance statistics..." 
                                    required></textarea>
                            </div>
                        </div>
                        <!-- Checkbox remains unchanged -->
                    </div>

                    <div class="modal-footer border-top-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn" name="btn_submit" style="background-color: #003366; color: #ffffff; font-family: 'Poppins', sans-serif;">
                            <i class="bi bi-save me-2"></i>Save Player
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

