<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>About - YogaBar</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <!-- <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- fontawesome cdn -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- custom css -->
    <link rel="stylesheet" href="assets/css/main-product.css" />
  </head>

  <body class="bg-light">
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">
        <h1 class="logo me-auto"><a href="index.php">YogaBar</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="courses.php">Courses</a></li>
            <li><a class="active" href="products.php">Products</a></li>
            <li><a href="tregister.php">Trainers</a></li>
            <!-- <li><a href="blogs.php">Blogs</a></li>
                <li><a href="contact.php">Contact</a></li> -->
            <li data-bs-toggle="modal" data-bs-target="#exampleModal">
              <a href="#">Register</a>
            </li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->

        <a href="login.php" class="get-started-btn active">Login</a>
      </div>
    </header>
    <!-- End Header -->
    <div class="container">
      <div class="py-5 text-center">
        <h2 class="py-5"><u>Checkout Form</u></h2>
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Order Details</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li
              class="list-group-item d-flex justify-content-between lh-condensed"
            >
              <div>
                <h6 class="my-0">Product name</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">350</span>
            </li>
            <li
              class="list-group-item d-flex justify-content-between lh-condensed"
            >
              <div>
                <h6 class="my-0">Second product</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">100</span>
            </li>
            <li
              class="list-group-item d-flex justify-content-between lh-condensed"
            >
              <div>
                <h6 class="my-0">Third item</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">550</span>
            </li>

            <li class="list-group-item d-flex justify-content-between">
              <span>Total </span>
              <strong>1100</strong>
            </li>
          </ul>
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Billing address</h4>
          <form class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input
                  type="text"
                  class="form-control"
                  id="firstName"
                  placeholder=""
                  value=""
                  required
                />
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input
                  type="text"
                  class="form-control"
                  id="lastName"
                  placeholder=""
                  value=""
                  required
                />
                <div class="invalid-feedback">Valid last name is required.</div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email"
                >Email <span class="text-muted">(Optional)</span></label
              >
              <input
                type="email"
                class="form-control"
                id="email"
                placeholder="you@example.com"
              />
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Address</label>
              <input
                type="text"
                class="form-control"
                id="address"
                placeholder="1234 Main St"
                required
              />
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="country">State</label>
                <select
                  class="custom-select d-block w-100"
                  id="country"
                  required
                >
                  <option value="">Choose...</option>
                  <option>Gujarat</option>
                  <option>Karnataka</option>
                  <option>Andhra Pradesh</option>
                  <option>Bihar</option>
                  <option>Kerala</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>

              <div class="col-md-3 mb-3">
                <label for="city">City</label>
                <select class="custom-select d-block w-100" id="city" required>
                  <option value="">Choose...</option>
                  <option>Ahmedabad</option>
                  <option>Mahesana</option>
                  <option>Valsad</option>
                  <option>Banaskatha</option>
                  <option>Palanpur</option>
                </select>
                <div class="invalid-feedback">Please select a valid city.</div>
              </div>

              <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input
                  type="text"
                  class="form-control"
                  id="zip"
                  maxlength="6"
                  pattern="[0-9]{6}"
                  placeholder=""
                  required
                />
                <div class="invalid-feedback">6 digits</div>
              </div>
            </div>
            <hr class="mb-4" />

            <button class="btn btn-primary btn-lg btn-block" type="submit">
              Continue to checkout
            </button>
          </form>
        </div>
      </div>
    </div>
    <!-- ======= Footer ======= -->
    <footer id="footer" style="margin-top: 3%">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 footer-contact">
              <h3 style="margin-top: 20px">YogaBar</h3>
              <p>
                <strong>Phone:</strong> +91 9879034263<br />
                <strong>Email:</strong> yogabar@yoga.com<br />
              </p>
            </div>
            <hr />
            <div
              class="me-md-auto text-center text-md-start"
              style="margin-bottom: 10px"
            >
              <div class="copyright" style="margin-left: 40%">
                &copy; Copyright <strong><span>YogaBar</span></strong
                >. All Rights Reserved
              </div>
              <div class="credits" style="margin-left: 45%">
                Designed by <a href="https://welltronix.com/">welltronix</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->
    <div id="preloader"></div>
    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script>
      window.jQuery ||
        document.write(
          '<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>'
        );
    </script>
    <script
      src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o"
      crossorigin="anonymous"
    ></script>
    <script src="https://getbootstrap.com/docs/4.3/examples/checkout/form-validation.js"></script>
  </body>
  <!-- Modal -->
  <div
    class="modal fade"
    id="exampleModal"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">
            User Registration
          </h1>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
          <form class="requires-validation" novalidate>
            <div class="col-md-12 form-outline mb-4">
              <label for="fname">First Name</label>
              <input
                class="form-control"
                type="text"
                name="name"
                pattern="[A-Za-z]{1,32}"
                placeholder="First Name"
                required
              />

              <div class="invalid-feedback">Invalid!</div>
            </div>

            <div class="col-md-12 form-outline mb-4">
              <label for="lname">Last Name</label>
              <input
                class="form-control"
                type="text"
                name="name"
                pattern="[A-Za-z]{1,32}"
                placeholder="Last Name"
                required
              />

              <div class="invalid-feedback">Invalid!</div>
            </div>

            <div class="col-md-12 form-outline mb-4">
              <label for="email">Email</label>
              <input
                class="form-control"
                type="email"
                name="email"
                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                placeholder="E-mail Address"
                required
              />

              <div class="invalid-feedback">Email field cannot be blank!</div>
            </div>

            <div class="col-md-12 form-outline mb-4">
              <label for="pwd">Password</label>
              <input
                class="form-control"
                type="password"
                name="password"
                minlength="8"
                placeholder="Password"
                required
              />

              <div class="invalid-feedback">Minimum 8 character</div>
            </div>

            <div class="form-button mt-3">
              <button id="submit" type="submit" class="btn btn-primary">
                Register
              </button>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button
            type="button"
            class="btn btn-secondary"
            data-bs-dismiss="modal"
          >
            Close
          </button>
        </div>
      </div>
    </div>
  </div>

  <script>
    (function () {
      "use strict";
      const forms = document.querySelectorAll(".requires-validation");
      Array.from(forms).forEach(function (form) {
        form.addEventListener(
          "submit",
          function (event) {
            if (!form.checkValidity()) {
              event.preventDefault();
              event.stopPropagation();
            }

            form.classList.add("was-validated");
          },
          false
        );
      });
    })();
  </script>
  <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
    crossorigin="anonymous"
  ></script>
</html>
