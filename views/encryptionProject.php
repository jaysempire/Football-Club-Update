<main class="container d-flex justify-content-center align-items-center vh-100 ">
            <section class="bg-white col-10 col-md-6 col-lg-6 mt-3 p-3 rounded-2">
                <form method="POST">
                    <div class="row">
                        <div class="col-6 mb-3">
                            <label for="pass" class="form-label"> Password</label>
                            <input type="number" class="form-control" id="pass" name="pass" placeholder="Enter a password" value="<?= isset($_POST["pass"]) ? $_POST["pass"] : '' ?>" required>
                        </div>
                        <div class='col-6 mb-3'>
                            <label for="pass" class="form-label"> Encryption</label>
                            <select class="form-select" name="enc" aria-label="Small select example" required>
                                <option disabled  <?= !isset($_POST['enc']) ? 'selected' : '' ?>>Select The Encryption Type</option>
                                <option value="BCRYPT" <?= isset($_POST['enc']) && $_POST['enc'] == '+' ? 'selected' : '' ?>>Bcrypt</option>
                                <option value="SHA512" <?= ($_POST['enc'] ?? '') == '*' ? 'selected' : '' ?>>SHA512</option>
                                <option value="MD5" <?= ($_POST['enc'] ?? '') == '/' ? 'selected' : '' ?>>MD5</option>
                            </select>    
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="d-grid gap-2 d-md-flex col-6">
                            <button type="submit" name="btn_submit" class="btn btn-primary mt-2">Submit</button>
                        </div>
                            <div class="d-grid gap-2 d-md-flex col-6">
                                <button type="submit" name="btn_reset" class="btn btn-danger mt-2">Reset</button>
                            </div>
                    </div>
                        <div class="mt-2">
                            <label for="result" class="form-label">Result</label>
                            <input type="text" class="form-control" value= "<?= $output ?>" readonly>
                        </div>
                </form>
            </section>
</main> 