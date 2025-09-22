<main id="main" class="main">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header text-white" style="background-color: #003366; color: #ffffff; font-family: 'Poppins', sans-serif;">
                <h3 class="mb-1">Football Player Registration</h3>
            </div>
            <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                    <!-- Player Image -->
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <label class="form-label">Player Image</label>
                            <input type="file" class="form-control" name="player_image" accept="image/*">
                            <div class="form-text">Max size: 2MB (JPG, PNG, GIF)</div>
                        </div>
                        <div class="col-md-6 d-flex align-items-center">
                            <div class="form-check form-switch mt-3">
                                <input class="form-check-input" type="checkbox" name="edit_image" value="1">
                                <label class="form-check-label" name="edit_image">Edit existing image</label>
                            </div>
                        </div>
                    </div>

                    <!-- Full Name & Email -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" name="full_name" value="<?= $web_app->persistData( $player_arr['full_name'], true, $clear ) ?>" placeholder="John Doe" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" value="<?= $web_app->persistData( $player_arr['email'], true, $clear ) ?>" placeholder="john.doe@example.com" required>
                        </div>
                    </div>

                    <!-- DOB, Height, Weight -->
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" name="dob" value="<?= $web_app->persistData( $player_arr['dob'], true, $clear ) ?>"  max="<?php echo date('Y-m-d'); ?>" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Height (cm)</label>
                            <input type="number" class="form-control" name="height" value="<?= $web_app->persistData( $player_arr['height'], true, $clear ) ?>" placeholder="175.5" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Weight (kg)</label>
                            <input type="number" class="form-control" name="weight" value="<?= $web_app->persistData( $player_arr['weight'], true, $clear ) ?>" placeholder="75.2" required>
                        </div>
                    </div>

                    <!-- Position & Jersey Number -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Position</label>
                            <select class="form-select" name="position" required>
                                <option value="">Select Position</option>
                                <option value="Forward" <?= ($web_app->persistData($player_arr['position'], true, $clear) === 'Forward' ? 'selected' : '' )?>>Forward</option>
                                <option value="Midfielder" <?= ($web_app->persistData($player_arr['position'], true, $clear) === 'Midfielder' ? 'selected' : '' )?>>Midfielder</option>
                                <option value="Defender" <?= ($web_app->persistData($player_arr['position'], true, $clear) === 'Defender' ? 'selected' : '' )?>>Defender</option>
                                <option value="Goalkeeper" <?= ($web_app->persistData($player_arr['position'], true, $clear) === 'Goalkeeper' ? 'selected' : '' )?>>Goalkeeper</option>
                                <option value="Winger" <?= ($web_app->persistData($player_arr['position'], true, $clear) === 'Winger' ? 'selected' : '' )?>>Winger</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Jersey Number</label>
                            <input type="number" class="form-control" name="j_num" value="<?= $web_app->persistData( $player_arr['j_num'], true, $clear ) ?>"  placeholder="Enter number (1-99)" required>
                        </div>
                    </div>

                    <!-- State of Origin & Status -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">State of Origin</label>
                            <select class="form-select" name="state" required>
                                <option value="">Select State of Origin</option>
                                <?php foreach ($states as $value) { ?>
                                    <option value="<?= $value ?>" <?= ($web_app->persistData($player_arr['state'], true, $clear) === $value ? 'selected' : '' )?>>
                                        <?= $value ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Status</label>
                            <select class="form-select" name="status" required>
                                <option value="">Select Status</option>
                                <option value="1" <?= ($web_app->persistData($player_arr['status'], true, $clear) === '1' ? 'selected' : '' )?>>Active</option>
                                <option value="0" <?= ($web_app->persistData($player_arr['status'], true, $clear) === '0' ? 'selected' : '' )?>>Inactive</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Player Statistics -->
                    <div class="row mb-3">
                        <div class="col-12">
                            <label class="form-label">Player Statistics</label>
                            <textarea 
                                class="form-control" 
                                rows="4" 
                                name="player_stats"
                                placeholder="Enter player performance statistics. Example:
                                - Season 2023: 15 goals, 10 assists
                                - Average pass accuracy: 85%
                                - Total matches played: 25
                                - Yellow cards: 2 | Red cards: 0
                                - Distance covered per match: 10.5km"><?= $web_app->persistData( $player_arr['season_stats'], true, $clear ) ?></textarea>
                        </div>
                    </div>

                    <div class="col-2 mx-auto">
                        <button type="submit" class="btn" name="btn_submit" style="background-color: #003366; color: #ffffff; font-family: 'Poppins', sans-serif;">Register Player</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>