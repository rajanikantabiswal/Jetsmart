<!DOCTYPE html>
<html>
<head>
  <title>Add Blog</title>
  <!-- Bootstrap CSS CDN link -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-4">
    <h1>Add Blog</h1>
    <form action="submit_post.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" name="title" required>
      </div>

      <div class="form-group">
        <label for="content">Content:</label>
        <textarea class="form-control" id="content" name="content" rows="6" required></textarea>
      </div>

      <div class="form-group">
        <label for="image">Choose Image:</label>
        <input type="file" class="form-control-file" id="image" name="image">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <!-- Bootstrap JS and jQuery CDN links (optional, but required for certain Bootstrap functionalities) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
