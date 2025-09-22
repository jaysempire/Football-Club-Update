<main id="main" class=" main container my-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow rounded-4 border-0">
        <div class="card-body p-4">
          <h3 class="card-title text-center mb-4">Upload an Image</h3>
          <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="image" class="form-label">Choose an image file</label>
              <input class="form-control" type="file" name="player_image" accept=".jpg, .jpeg, .png, .gif" required>
            </div>
            <div class="col-4 mx-auto">
              <button type="submit" class="btn" name="btn_submit" style="background-color: #003366; color: #ffffff; font-family: 'Poppins', sans-serif;">Upload Image</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>
