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
                <?= $web_app->showAlert( $msg ) ?>
                <!-- Player Accordions -->
                <div class="accordion" id="playersAccordion">
    
    <!-- Player 1 - Abdullazeez Tanko -->
    <div class="accordion-item shadow-sm mb-3">
        <h2 class="accordion-header">
            <button class="accordion-button d-flex align-items-center py-3" type="button" 
                    data-bs-toggle="collapse" data-bs-target="#playerOne" 
                    aria-expanded="true" aria-controls="playerOne">
                <div class="d-flex align-items-center w-100">
                    <div class="position-relative me-3">
                        <img src="assets/img/default image.avif" alt="Abdullazeez Tanko" 
                            class="rounded-circle img-fluid"
                            style="width: 60px; height: 60px; object-fit: cover;">
                        <span class="position-absolute bottom-0 end-0 badge bg-primary">#10</span>
                    </div>
                    <div>
                        <h5 class="mb-0">Abdullazeez Tanko</h5>
                        <div class="text-muted small">
                            <span class="badge bg-warning text-dark">Forward</span>
                            <span class="ms-2">Age: 26</span>
                            <span class="badge bg-success ms-2">Active</span>
                        </div>
                    </div>
                </div>
            </button>
        </h2>
        <div id="playerOne" class="accordion-collapse collapse show" 
            data-bs-parent="#playersAccordion">
            <div class="accordion-body pt-3">
                <div class="row">
                    <!-- Personal Info -->
                    <div class="col-md-4 border-end">
                        <h6 class="text-uppercase text-muted mb-3">
                            <i class="bi bi-person-lines-fill me-2"></i>Details
                        </h6>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <i class="bi bi-calendar me-2"></i>
                                <strong>DOB:</strong> 15 Jan 1998
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-geo-alt me-2"></i>
                                <strong>Origin:</strong> Kaduna State
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-rulers me-2"></i>
                                <strong>Height:</strong> 1.82m
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-speedometer2 me-2"></i>
                                <strong>Weight:</strong> 75kg
                            </li>
                        </ul>
                    </div>

                    <!-- Performance Stats -->
                    <div class="col-md-8">
                        <h6 class="text-uppercase text-muted mb-3">
                            <i class="bi bi-graph-up me-2"></i>2024 Season Stats
                        </h6>
                        <div class="table-responsive">
                            <table class="table table-hover table-sm">
                                <thead class="bg-light">
                                    <tr>
                                        <th>Matches</th>
                                        <th>Goals ⚽</th>
                                        <th>Assists 🎯</th>
                                        <th>Shots</th>
                                        <th>Pass %</th>
                                        <th>Rating ⭐</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>24</td>
                                        <td>25</td>
                                        <td>10</td>
                                        <td>68</td>
                                        <td>84%</td>
                                        <td>8.9</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="d-flex justify-content-end gap-2 mt-3">
                    <button class="btn btn-outline-primary btn-sm">
                        <i class="bi bi-pencil me-2"></i>Edit Profile
                    </button>
                    <button class="btn btn-outline-danger btn-sm">
                        <i class="bi bi-person-x me-2"></i>Deactivate
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Player 2 - James Musa -->
    <div class="accordion-item shadow-sm mb-3">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed d-flex align-items-center py-3" type="button" 
                    data-bs-toggle="collapse" data-bs-target="#playerTwo" 
                    aria-expanded="false" aria-controls="playerTwo">
                <div class="d-flex align-items-center w-100">
                    <div class="position-relative me-3">
                        <img src="assets/img/default image.avif" alt="James Musa" 
                            class="rounded-circle img-fluid"
                            style="width: 60px; height: 60px; object-fit: cover;">
                        <span class="position-absolute bottom-0 end-0 badge bg-primary">#8</span>
                    </div>
                    <div>
                        <h5 class="mb-0">James Musa</h5>
                        <div class="text-muted small">
                            <span class="badge bg-info text-dark">Midfielder</span>
                            <span class="ms-2">Age: 24</span>
                            <span class="badge bg-success ms-2">Active</span>
                        </div>
                    </div>
                </div>
            </button>
        </h2>
        <div id="playerTwo" class="accordion-collapse collapse" 
            data-bs-parent="#playersAccordion">
            <div class="accordion-body pt-3">
                <div class="row">
                    <!-- Personal Info -->
                    <div class="col-md-4 border-end">
                        <h6 class="text-uppercase text-muted mb-3">
                            <i class="bi bi-person-lines-fill me-2"></i>Details
                        </h6>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <i class="bi bi-calendar me-2"></i>
                                <strong>DOB:</strong> 2 Mar 2000
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-geo-alt me-2"></i>
                                <strong>Origin:</strong> Niger State
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-rulers me-2"></i>
                                <strong>Height:</strong> 1.75m
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-speedometer2 me-2"></i>
                                <strong>Weight:</strong> 70kg
                            </li>
                        </ul>
                    </div>

                    <!-- Performance Stats -->
                    <div class="col-md-8">
                        <h6 class="text-uppercase text-muted mb-3">
                            <i class="bi bi-graph-up me-2"></i>2024 Season Stats
                        </h6>
                        <div class="table-responsive">
                            <table class="table table-hover table-sm">
                                <thead class="bg-light">
                                    <tr>
                                        <th>Matches</th>
                                        <th>Assists 🎯</th>
                                        <th>Tackles</th>
                                        <th>Pass %</th>
                                        <th>Interceptions</th>
                                        <th>Rating ⭐</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>23</td>
                                        <td>18</td>
                                        <td>42</td>
                                        <td>89%</td>
                                        <td>28</td>
                                        <td>8.2</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="d-flex justify-content-end gap-2 mt-3">
                    <button class="btn btn-outline-primary btn-sm">
                        <i class="bi bi-pencil me-2"></i>Edit Profile
                    </button>
                    <button class="btn btn-outline-danger btn-sm">
                        <i class="bi bi-person-x me-2"></i>Deactivate
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Player 3 - Erena Muhammed -->
    <div class="accordion-item shadow-sm mb-3">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed d-flex align-items-center py-3" type="button" 
                    data-bs-toggle="collapse" data-bs-target="#playerThree" 
                    aria-expanded="false" aria-controls="playerThree">
                <div class="d-flex align-items-center w-100">
                    <div class="position-relative me-3">
                        <img src="assets/img/default image.avif" alt="Erena Muhammed" 
                            class="rounded-circle img-fluid"
                            style="width: 60px; height: 60px; object-fit: cover;">
                        <span class="position-absolute bottom-0 end-0 badge bg-primary">#1</span>
                    </div>
                    <div>
                        <h5 class="mb-0">Erena Muhammed</h5>
                        <div class="text-muted small">
                            <span class="badge bg-secondary">Goalkeeper</span>
                            <span class="ms-2">Age: 27</span>
                            <span class="badge bg-danger ms-2">Injured</span>
                        </div>
                    </div>
                </div>
            </button>
        </h2>
        <div id="playerThree" class="accordion-collapse collapse" 
            data-bs-parent="#playersAccordion">
            <div class="accordion-body pt-3">
                <div class="row">
                    <!-- Personal Info -->
                    <div class="col-md-4 border-end">
                        <h6 class="text-uppercase text-muted mb-3">
                            <i class="bi bi-person-lines-fill me-2"></i>Details
                        </h6>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <i class="bi bi-calendar me-2"></i>
                                <strong>DOB:</strong> 10 Jul 1997
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-geo-alt me-2"></i>
                                <strong>Origin:</strong> Adamawa State
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-rulers me-2"></i>
                                <strong>Height:</strong> 1.90m
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-speedometer2 me-2"></i>
                                <strong>Weight:</strong> 82kg
                            </li>
                        </ul>
                    </div>

                    <!-- Performance Stats -->
                    <div class="col-md-8">
                        <h6 class="text-uppercase text-muted mb-3">
                            <i class="bi bi-graph-up me-2"></i>2024 Season Stats
                        </h6>
                        <div class="table-responsive">
                            <table class="table table-hover table-sm">
                                <thead class="bg-light">
                                    <tr>
                                        <th>Matches</th>
                                        <th>Clean Sheets</th>
                                        <th>Saves</th>
                                        <th>Pass %</th>
                                        <th>Penalties Saved</th>
                                        <th>Rating ⭐</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>22</td>
                                        <td>15</td>
                                        <td>50</td>
                                        <td>72%</td>
                                        <td>3</td>
                                        <td>8.5</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="d-flex justify-content-end gap-2 mt-3">
                    <button class="btn btn-outline-primary btn-sm">
                        <i class="bi bi-pencil me-2"></i>Edit Profile
                    </button>
                    <button class="btn btn-outline-danger btn-sm">
                        <i class="bi bi-person-x me-2"></i>Deactivate
                    </button>
                </div>
            </div>
        </div>
    </div>
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
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="addPlayerModalLabel">
                    <i class="bi bi-person-plus me-2"></i>Add New Player
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addPlayerForm" class="needs-validation" novalidate>
                    <div class="row g-3">
                        <!-- Player Image Upload -->
                        <div class="col-md-4 text-center">
                            <div class="image-upload-container border rounded p-3">
                                <img src="assets/img/default-avatar.jpg" 
                                     class="img-thumbnail mb-2" 
                                     alt="Player Image" 
                                     style="width: 150px; height: 150px; object-fit: cover;">
                                <input type="file" class="form-control" id="playerImage" accept="image/*">
                                <div class="form-text">Recommended size: 300x300px</div>
                            </div>
                        </div>

                        <!-- Player Details -->
                        <div class="col-md-8">
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="playerName" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="playerName" 
                                           placeholder="E.g., Lionel Messi" required>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="playerDOB" class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control" id="playerDOB" 
                                           placeholder="Select date" required>
                                    <div class="form-text">Format: DD/MM/YYYY</div>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="playerPosition" class="form-label">Position</label>
                                    <select class="form-select" id="playerPosition" required>
                                        <option value="" disabled selected>Select playing position</option>
                                        <!-- options remain same -->
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="playerJersey" class="form-label">Jersey Number</label>
                                    <input type="number" class="form-control" id="playerJersey" 
                                           placeholder="Between 1-99" min="1" max="99" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="playerState" class="form-label">State of Origin</label>
                                    <select class="form-select" id="playerState" required>
                                        <option value="" disabled selected>Select home state</option>
                                        <!-- options remain same -->
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Stats Section -->
                    <div class="mt-4">
                        <h6 class="border-bottom pb-2">Performance Statistics</h6>
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label for="goals" class="form-label">Goals Scored</label>
                                <input type="number" class="form-control" id="goals" 
                                       placeholder="Enter total goals">
                            </div>
                            <div class="col-md-3">
                                <label for="assists" class="form-label">Assists</label>
                                <input type="number" class="form-control" id="assists" 
                                       placeholder="Enter assist count">
                            </div>
                            <div class="col-md-3">
                                <label for="matches" class="form-label">Matches Played</label>
                                <input type="number" class="form-control" id="matches" 
                                       placeholder="Total matches">
                            </div>
                            <div class="col-md-3">
                                <label for="rating" class="form-label">Player Rating</label>
                                <input type="number" class="form-control" id="rating" 
                                       placeholder="0-10 scale" step="0.1" max="10">
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer border-top-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-save me-2"></i>Save Player
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

