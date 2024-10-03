<?php
include 'db.php'; // Include the database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $class = $_POST['class'];
    $registration_code = $_POST['registration_code'];
    $date = $_POST['date'];

    // Prepare and execute the SQL statement
    $sql = "INSERT INTO users (name, gender, class, registration_code, registration_date) VALUES (:name, :gender, :class, :registration_code, :date)";
    $stmt = $conn->prepare($sql);

    if ($stmt->execute(['name' => $name, 'gender' => $gender, 'class' => $class, 'registration_code' => $registration_code, 'date' => $date])) {
        echo "Registration successful!";
    } else {
        echo "Error registering user.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<section class="h-100 h-custom" style="background-color: #8fc4b7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img3.webp"
            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
            alt="Sample photo">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration Info</h3>

            <form class="px-md-2" method="POST" action="">
              <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" id="form3Example1q" class="form-control" name="name" required />
                <label class="form-label" for="form3Example1q">Name</label>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4">
                  <div data-mdb-input-init class="form-outline datepicker">
                    <input type="text" class="form-control" id="exampleDatepicker1" name="date" required />
                    <label for="exampleDatepicker1" class="form-label">Select a date</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <select name="gender" data-mdb-select-init required>
                    <option value="" disabled selected>Gender</option>
                    <option value="Female">Female</option>
                    <option value="Male">Male</option>
                    <option value="Other">Other</option>
                  </select>
                </div>
              </div>

              <div class="mb-4">
                <select name="class" data-mdb-select-init required>
                  <option value="" disabled selected>Class</option>
                  <option value="Class 1">Class 1</option>
                  <option value="Class 2">Class 2</option>
                  <option value="Class 3">Class 3</option>
                </select>
              </div>

              <div class="row mb-4 pb-2 pb-md-0 mb-md-5">
                <div class="col-md-6">
                  <div data-mdb-input-init class="form-outline">
                    <input type="text" id="form3Example1w" class="form-control" name="registration_code" required />
                    <label class="form-label" for="form3Example1w">Registration code</label>
                  </div>
                </div>
              </div>

              <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-success btn-lg mb-1">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
