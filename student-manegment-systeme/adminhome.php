<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
  <?php include 'admin_sidebar.php'; ?>
  <div class="container-fluid">
    <div class="row">
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Admin Dashboard</h1>
        </div>
        <div class="row">
          <!-- Dashboard Cards -->
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card shadow-sm border-0">
              <div class="card-body text-center">
                <h5 class="card-title">Total Students</h5>
                <p class="card-text">1,234</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card shadow-sm border-0">
              <div class="card-body text-center">
                <h5 class="card-title">Total Teachers</h5>
                <p class="card-text">56</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card shadow-sm border-0">
              <div class="card-body text-center">
                <h5 class="card-title">Classes</h5>
                <p class="card-text">12</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card shadow-sm border-0">
              <div class="card-body text-center">
                <h5 class="card-title">Exams Scheduled</h5>
                <p class="card-text">8</p>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
