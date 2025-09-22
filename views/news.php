
<main id="main" class="main">

    <div class="p-3 rounded-3 text-white" style="background-color: #003366; color: #ffffff; font-family: 'Poppins', sans-serif;">
        News Page
    </div>

    <div class="container mt-5">
      <h1 class="text-center mb-4">News</h1>
      
      <div class="text-end mb-3">
        <button class="btn" data-bs-toggle="modal" data-bs-target="#addNewsModal" style="background-color: #003366; color: #ffffff; font-family: 'Poppins', sans-serif;">
            <i class="bi bi-plus-circle"></i> Add News
        </button>
    </div>
  
      <!-- News Cards -->
      <div class="container row justify-content-center">
        <!-- Example News Card 1 -->
        <div class="card col-md-5 col-lg-5 ">
          <img src="assets/img/news-1.jpg" class="card-img-top img-fluid" alt="News Image">
          <div class="card-body">
            <h5 class="card-title">Duza Lions 3-1 Sky Hawks</h5>
            <p class="card-text">Brief description of the news...</p>
            <p class="text-muted">Venue: New York, Date: Feb 20, 2025</p>
          </div>
        </div>
  
        <!-- Example News Card 2 -->
        <div class="card col-md-5 col-lg-5 ms-3">
          <img src="assets/img/news-3.jpg" class="card-img-top" alt="News Image">
          <div class="card-body">
            <h5 class="card-title">Disasterclass By Duza lions</h5>
            <p class="card-text">duza lions lost 4-0 to niger tonadoes </p>
            <p class="text-muted">Venue: London, Date: Feb 22, 2025</p>
          </div>
        </div>

        <div class="card col-md-5 col-lg-5">
          <img src="assets/img/news-4.jpg" class="card-img-top" alt="News Image">
          <div class="card-body">
            <h5 class="card-title">Star Player Injured</h5>
            <p class="card-text">Brief description of another news...</p>
            <p class="text-muted">Venue: London, Date: Feb 22, 2025</p>
          </div>
        </div>

        
        <!-- Add more news cards here -->
      </div>
    </div>  
  
    <!-- Modal to Add News -->
    <div class="modal fade" id="addNewsModal" tabindex="-1" aria-labelledby="addNewsModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addNewsModalLabel">Add New News</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="newsForm">
              <div class="mb-3">
                <label for="newsTitle" class="form-label">News Title</label>
                <input type="text" class="form-control" id="newsTitle" placeholder="Enter news title" required>
              </div>
              <div class="mb-3">
                <label for="newsDescription" class="form-label">News Description</label>
                <textarea class="form-control" id="newsDescription" rows="3" placeholder="Write a short description..." required></textarea>
              </div>
              <div class="mb-3">
                <label for="news_Image" class="form-label">News Image</label>
                <input type="file" class="form-control" id="news_Image">
              </div>
              <div class="mb-3">
                <label for="newsVenue" class="form-label">Venue</label>
                <input type="text" class="form-control" id="newsVenue" placeholder="Enter event location" required>
              </div>
              <div class="mb-3">
                <label for="newsDate" class="form-label">Date</label>
                <input type="date" class="form-control" id="newsDate" required>
              </div>
            </form>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" id="submitNews">Add News</button>
          </div>
        </div>
      </div>
    </div>

</main><!-- End #main -->