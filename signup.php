<!DOCTYPE html>
<html lang="en">
<head>
  <title>Εγγραφή</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="styles/styles.css">
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <link href="fontawesome-free-5.0.1/web-fonts-with-css/css/fontawesome-all.min.css" rel="stylesheet">
  <script src="scripts/validation.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:900|Open+Sans:700|Roboto" rel="stylesheet">
</head>
<body>
  <div class="container-fluid">
  <!-- Navbar Code -->
  <!-- Static navbar -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
    <a class="navbar-brand" href="index.php">
      <img src="/eam/images/logo.svg" width="80" height="80" class="d-inline-block align-top" alt="">
    </a>
        <a class="navbar-brand" href="index.php">Ίδρυμα Κοινωνικών Ασφαλίσεων</a>
      </div>
      <div class="collapse navbar-collapse js-navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown mega-dropdown text-center">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Περιεχόμενα<span class="glyphicon glyphicon-chevron-down pull-right"></span></a>

              <ul class="dropdown-menu mega-dropdown-menu row">
                <li class="col-sm-6 section">
                  <ul>
                    <li class="dropdown-header text-center"><a href="insured.php">Ασφαλισμένοι</a></li>
                    <li class="divider divider-header"></li>
                  </ul>
                  <ul class="row">
                      <li class="col-sm-4">
                        <ul class="inner-list text-center">
                            <li class="text-center list-header"><a href="#"><br>Συνταξιοδότηση</a></li>
                            <li class="divider"></li>
                            <li class="list-el"><a href="#">Υπολογισμός Ποσού Σύνταξης</a></li>
                            <li class="list-el"><a href="#">Αίτηση Συνταξιοδότησης</a></li>
                        </ul>

                      </li>
                      <li class="col-sm-4">
                        <ul class="inner-list text-center">
                            <li class="text-center list-header"><a href="insured_application.php">Δήλωση Έμμεσα <br> Ασφαλισμένου</a></li>
                            <li class="divider"></li>
                            <li class="list-el"><a href="#">Νέα Δήλωση</a></li>
                            <li class="list-el"><a href="#">Παρακολούθηση Αίτησης</a></li>
                        </ul>

                      </li>

                      <li class="col-sm-4">
                        <ul class="inner-list text-center">
                            <li class="text-center list-header"><a href="#">Ασφαλιστικές <br>Παροχές</a></li>
                            <li class="divider"></li>
                            <li class="list-el"><a href="#">Επιδόματα Διακοπών</a></li>
                            <li class="list-el"><a href="#">Άδεια Μητρότητας</a></li>
                            <li class="list-el"><a href="#">Αναρρωτική Άδεια</a></li>
                        </ul>
                      </li>

                  </ul>

                   <ul>
                    <li class="dropdown-header text-center"><a href="#">Εργοδότες</a></li>
                    <li class="divider divider-header"></li>
                  </ul>
                   <ul class="row">
                      <li class="col-sm-6">
                        <ul class="inner-list text-center">
                            <li class="text-center list-header"><a href="#">Αναλυτική Περιοδική <br> Δήλωση</a></li>
                            <li class="divider"></li>
                            <li class="list-el"><a href="#">Υποβολή Δήλωσης</a></li>
                            <li class="list-el"><a href="#">Δικαιολογητικά</a></li>
                        </ul>

                      </li>
                      <li class="col-sm-6">
                        <ul class="inner-list text-center">
                            <li class="text-center list-header"><a href="#">Βεβαίωση Ασφαλιστικής <br>Ενημερότητας</a></li>
                            <li class="divider"></li>
                            <li class="list-el"><a href="#">Λήψη Δήλωσης</a></li>
                            <li class="list-el"><a href="#">Δικαιολογητικά</a></li>
                        </ul>

                      </li>

                  </ul>
                </li>
                <!-- Second row Employers and Disabilities -->
                <li class="col-sm-6 section">
                  <ul>
                    <li class="dropdown-header text-center"><a href="retired.php">Συνταξιούχοι</a></li>
                    <li class="divider divider-header"></li>
                  </ul>
                  <ul class="row">
                      <li class="col-sm-4">
                        <ul class="inner-list text-center">
                            <li class="text-center list-header"><a href="#">Ενημέρωση Μηνιαίας <br> Σύνταξης</a></li>
                            <li class="divider"></li>
                            <li class="list-el"><a href="#">Υπολογισμός Ποσού Σύνταξης</a></li>
                        </ul>

                      </li>
                      <li class="col-sm-4">
                        <ul class="inner-list text-center">
                            <li class="text-center list-header"><a href="confirmation.php">Βεβαίωση Σύνταξης για Φορολογική Χρήση</a></li>
                            <li class="divider"></li>
                            <li class="list-el"><a href="#">Βεβαίωση Σύνταξης</a></li>
                        </ul>

                      </li>

                      <li class="col-sm-4">
                        <ul class="inner-list text-center">
                            <li class="text-center list-header"><a href="#">Πρόγραμμα Κατ'οίκον <br> Φροντίδας</a></li>
                            <li class="divider"></li>
                            <li class="list-el"><a href="#">Αίτηση</a></li>
                            <li class="list-el"><a href="#">Δικαιολογητικά</a></li>
                            <li class="list-el"><a href="#">Παροχές Προγράμματος</a></li>
                        </ul>
                      </li>
                  </ul>
                </li>


                <li class="col-sm-6">
                  <ul>
                    <li class="dropdown-header text-center"><a href="#">A.M.E.A.</a></li>
                    <li class="divider divider-header"></li>
                  </ul>
                  <ul class="row">
                      <li class="col-sm-6">
                        <ul class="inner-list text-center">
                            <li class="text-center list-header"><a href="#">Αναπηρική <br> Σύνταξη</a></li>
                            <li class="divider"></li>
                            <li class="list-el"><a href="#">Υπολογισμός Ποσού Σύνταξης</a></li>
                            <li class="list-el"><a href="#">Αίτηση Συνταξιοδότησης</a></li>
                        </ul>

                      </li>
                      <li class="col-sm-6">
                        <ul class="inner-list text-center">
                            <li class="text-center list-header"><a href="#">Πιστοποίηση Ποσοστού <br>Αναπηρίας</a></li>
                            <li class="divider"></li>
                            <li class="list-el"><a href="#">Κέντρα Πιστοποίηση <br>Αναπηρίας (Κ.Ε.Π.Α.)</a></li>
                        </ul>

                      </li>

                  </ul>
                </li>

                <li class="col-sm-9 section">
                  <ul>
                    <li class="dropdown-header text-center"><a href="#">Συχνές Ερωτήσεις</a></li>
                    <li class="divider divider-header"></li>
                  </ul>
                  <ul class="row">
                      <li class="col-sm-3">
                        <ul class="inner-list text-center">
                            <li class="text-center list-header"><a href="#">Συνταξιοδότηση</a></li>
                            <li class="divider"></li>
                            <li class="list-el"><a href="#">Δικαιούμαι Σύνταξη ;</a></li>
                            <li class="list-el"><a href="#">Λεξικό όρων</a></li>
                        </ul>

                      </li>
                      <li class="col-sm-3">
                        <ul class="inner-list text-center">
                            <li class="text-center list-header"><a href="#">Αναπηρία</a></li>
                            <li class="divider"></li>
                            <li class="list-el"><a href="#">Δικαιούμαι σύνταξη ;</a></li>
                        </ul>

                      </li>

                      <li class="col-sm-3">
                        <ul class="inner-list text-center">
                            <li class="text-center list-header"><a href="#">Ασφάλιση</a></li>
                            <li class="divider"></li>
                            <li class="list-el"><a href="#">Πως αποκτώ Αριθμό Μητρώου Ασφαλισμένου (Α.Μ.Α.) ;</a></li>
                            <li class="list-el"><a href="#">Είμαι αλλοδαπός: Μπορώ να ασφαλιστώ ;</a></li>
                        </ul>

                      </li>

                      <li class="col-sm-3">
                        <ul class="inner-list text-center">
                            <li class="text-center list-header"><a href="#">Επικοινωνία</a></li>
                            <li class="divider"></li>
                            <li class="list-el"><a href="#">Που βρίσκεται το κοντινότερο υποκατάστημα ;</a></li>
                        </ul>

                      </li>

                  </ul>
                </li>

                <li class="col-sm-3 section">
                  <ul>
                    <li class="dropdown-header text-center"><a href="#">Το ίδρυμα</a></li>
                    <li class="divider divider-header"></li>
                  </ul>
                  <ul class="row">
                      <li class="col-sm-12">
                        <ul class="inner-list text-center">
                            <li class="text-center list-el"><a href="#">Διοίκηση</a></li>
                            <li class="list-el"><a href="#">Ιστορικό</a></li>
                            <li class="list-el"><a href="#">Όραμα</a></li>
                        </ul>

                      </li>

                  </ul>
                </li>

              </ul>



            </li>


          </ul>

          <ul class="nav navbar-nav navbar-right text-center">
            <!-- Check if the user is logged in -->
            <?php if(!isset($_SESSION['user'])): ?>
            <li><a href="signup.php"><i class ="fas fa-user"></i> Εγγραφή</a></li>
            <?php else: ?>
            <li><a href="profile.php"><i class ="fas fa-user"></i> <?php echo $_SESSION['user'] ?></a></li>
            <?php endif; ?>
            <?php if(!isset($_SESSION['user'])): ?>
              <li><a href="signin.php"><span class="glyphicon glyphicon-log-in"></span> Σύνδεση</a></li>
            <?php else: ?>
              <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Αποσύνδεση</a></li>
            <?php endif; ?>
          </ul>
          <form class="navbar-form text-center search-form" action="/action_page.php">
            <div class="form-group">
              <input type="text" class="form-control search-box" placeholder="Αναζήτηση" name="search">
            </div>
          </form>

        </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>
    <!-- End Navbar -->

<div class="container line">
  <ol style="margin-top:80px;" class="breadcrumb">
    <li><a href="index.php">Αρχική Σελίδα</a></li>
    <li class="active"><a href="#">Εγγραφή</a></li>
  </ol>
  <div class="horizontal-line">
      <span style="font-size: 30px; background-color: #FFF; padding: 0 10px;">
        Εγγραφή <!--Padding is optional-->
      </span>
  </div>
    <div class="row" style="padding-top: 100px;">
      <div class="col-sm-4"></div>
      <div class="col-sm-4">
    <!-- Form -->
    <div  onmouseover="validate()" onmouseout="validate()" onclick="validate()">
    <form action="newuser.php" method="post">
      <div class="form-group">
        <label>Όνομα χρήστη: </label>
        <p id="passwordHelp" class="form-text text-muted">Το όνομα χρήστη πρέπει να περιέχει τουλάχιστον 5 χαρακτήρες.</p>
        <input onchange="checkUsername()" type="text" name="username" class="form-control" id="usernameInput" placeholder="Εισάγετε το όνομα χρήστη" required>
        <p id="usernameError" style="color:red"></p>
        <span class="success"></span>
        <span class="error"></span>
      </div>
      <div class="form-group">
        <label>Κωδικός πρόσβασης: </label>
        <p id="passwordHelp" class="form-text text-muted">Ο κωδικός πρέπει να περιέχει τουλάχιστον 6 χαρακτήρες.</p>
        <p id="passwordHelp" class="form-text text-muted">Πρέπει οπωσδήποτε να περιέχει ένα μικρό χαρακτήρα, ένα κεφαλαίο, έναν αριθμό και ένα σύμβολο.</p>
        <input onchange="checkPassword()" type="password" name="password" class="form-control" id="password" placeholder="Εισάγετε τον κωδικό πρόσβασης" required>
        <p id="errorPassword" style="color:red;"></p>
      </div>
      <div class="form-group">
        <label>Επαλήθευση κωδικού πρόσβασης: </label>
        <input onchange="verifyPassword()" type="password" name="password" class="form-control" id="verify" placeholder="Εισάγετε ξανά τον κωδικό πρόσβασης" required>
        <p id="errorVerify" style="color:red;"></p>
        <p id="passwordMatches" style="color:green;"></p>
      </div>
      <div class="form-group">
        <label>Όνομα: </label>
        <input type="username" name="firstname" class="form-control" placeholder="Εισάγετε το όνομα σας" required>
      </div>
      <div class="form-group">
        <label>Επίθετο: </label>
        <input type="username" name="lastname" class="form-control" placeholder="Εισάγετε το επίθετο σας"  required>
      </div>
      <div class="form-group">
        <label>Email: </label>
        <input onchange="checkEmail()" onmouseover="checkEmail()" onmouseout="checkEmail()" id="emailInput" type="email" name="email" class="form-control" placeholder="Εισάγετε το email σας" required>
        <p id="emailOk" style="color:green;"></p>
        <p id="emailnotOk" style="color:red;"></p>
      </div>
      <div class="form-group">
        <label>Α.Μ.Α.: </label>
        <input name="ama" class="form-control" placeholder="Εισάγετε τον Αριθμό Μητρώου Ασφαλισμένου" required>
      </div>
      <div class="form-group">
        <label>Α.Μ.Κ.Α.: </label>
        <input name="amka" class="form-control" placeholder="Εισάγετε τον Αριθμό Μητρώου Κοινωνικής Ασφάλισης" required>
      </div>
      <div class="form-group">
        <p id="passwordHelp" class="form-text text-muted">Επιλέξτε την κατηγορία στην οποία ανήκετε.</p>
      <div class="radio">
        <label><input type="radio" name="HaveInsurance" value="1">Ασφαλισμένος</label>
      </div>
      <div class="radio">
        <label><input type="radio" name="HaveInsurance" value="0">Συνταξιούχος</label>
      </div>
    </div>
      <button id="mySubmit" type="submit" class="btn btn-primary">Εγγραφή</button>
    </form>
  </div>
    <!-- Form end -->
  </div>
  <div class="col-sm-4">
  </div>
    <!-- End of input form -->
  </div>
</div>

<!-- Start of footer sitemap -->
<footer>
  <div class="row">
    <div class="col-sm-2">
      <ul class="inner-list">
          <li class="footer-header">Ασφαλισμένοι</li>
          <li class="divider"></li>
          <li class="section-title"><a href="#"><br>Συνταξιοδότηση</a></li>
          <li class="footer-item"><a href="#">Υπολογισμός Ποσού Σύνταξης</a></li>
          <li class="footer-item"><a href="#">Αίτηση Συνταξιοδότησης</a></li>
      </ul>
    </div>
    <div class="col-sm-2">
      <ul class="inner-list">
          <li class="footer-header" style="color: #333">Ασφαλισμένοι</li>
          <li class="divider"></li>
          <li class="section-title"><a href="insured_application.php"><br>Δήλωση Έμμεσα Ασφαλισμένου</a></li>
          <li class="footer-item"><a href="#">Νέα Δήλωση</a></li>
      </ul>
    </div>
    <div class="col-sm-2">
      <ul class="inner-list">
          <li class="footer-header" style="color: #333">Ασφαλισμένοι</li>
          <li class="divider"></li>
          <li class="section-title"><a href="#"><br>Ασφαλιστικές Παροχές</a></li>
          <li class="footer-item"><a href="#">Επιδόματα Διακοπών</a></li>
          <li class="footer-item"><a href="#">Άδεια Μητρότητας</a></li>
          <li class="footer-item"><a href="#">Αναρρωτική Άδεια</a></li>
      </ul>
    </div>
    <div class="col-sm-2">
      <ul class="inner-list">
          <li class="footer-header">Συνταξιούχοι</li>
          <li class="divider"></li>
          <li class="section-title"><a href="#"><br>Ενημέρωση Μηνιαίας Σύνταξης</a></li>
          <li class="footer-item"><a href="#">Υπολογισμός Ποσού Σύνταξης</a></li>
      </ul>
    </div>
    <div class="col-sm-2">
      <ul class="inner-list">
          <li class="footer-header" style="color: #333">Συνταξιούχοι</li>
          <li class="divider"></li>
          <li class="section-title"><a href="confirmation.php"><br>Βεβαίωση Σύνταξης για Εφορία</a></li>
          <li class="footer-item"><a href="#">Βεβαίωση Σύνταξης</a></li>
      </ul>
    </div>
    <div class="col-sm-2">
      <ul class="inner-list">
          <li class="footer-header" style="color: #333">Συνταξιούχοι</li>
          <li class="divider"></li>
          <li class="section-title"><a href="#"><br>Πρόγραμμα Κατ'οίκον Φροντίδας</a></li>
          <li class="footer-item"><a href="#">Αίτηση</a></li>
          <li class="footer-item"><a href="#">Δικαιολογητικά</a></li>
      </ul>
    </div>
  </div>


  <div class="row">

    <div class="col-sm-2">
      <ul class="inner-list">
          <li class="footer-header">Εργοδότες</li>
          <li class="divider"></li>
          <li class="section-title"><a href="#"><br>Αναλυτική Περιοδική Δήλωση</a></li>
          <li class="footer-item"><a href="#">Υποβολή Δήλωσης</a></li>
          <li class="footer-item"><a href="#">Δικαιολογητικά</a></li>
      </ul>
    </div>
    <div class="col-sm-2">
      <ul class="inner-list">
          <li class="footer-header" style="color: #333">Εργοδότες</li>
          <li class="divider"></li>
          <li class="section-title"><a href="#"><br>Βεβαίωση Ασφαλιστικής Ενημερότητας</a></li>
          <li class="footer-item"><a href="#">Λήψη Δήλωσης</a></li>
      </ul>
    </div>
    <div class="col-sm-2">

    </div>
    <div class="col-sm-2">
      <ul class="inner-list">
          <li class="footer-header">Α.Μ.Ε.Α.</li>
          <li class="divider"></li>
          <li class="section-title"><a href="#"><br>Αναπηρική Σύνταξη</a></li>
          <li class="footer-item"><a href="#">Υπολογισμός Ποσού Σύνταξης</a></li>
          <li class="footer-item"><a href="#">Αίτηση Συνταξιοδότησης</a></li>
      </ul>
    </div>
    <div class="col-sm-2">
      <ul class="inner-list">
          <li class="footer-header" style="color: #333">Συνταξιούχοι</li>
          <li class="divider"></li>
          <li class="section-title"><a href="#"><br>Πιστοποίηση Ποσοστού Αναπηρίας</a></li>
          <li class="footer-item"><a href="#">Κέντρα Πιστοποίησης (Κ.Ε.Π.Α.)</a></li>
      </ul>
    </div>
    <div class="col-sm-2">

    </div>
  </div>
  <div class="row footer2" style="background-color: black">
    <div class="col-sm-2"></div>
    <div class="col-sm-4">
      <div class="row">
        <div class="col-sm-2"><a href="#" style="color: white"><h5>About Us</h5></a></div>
        <div class="col-sm-2"><a href="#" style="color: white"><h5>Επικοινωνία</h5></a></div>
        <div class="col-sm-8"></div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="row">
        <div class="col-sm-8"><h5>Created by <a class="footer-link" href="https://github.com/YolandaKok">Yolanda Kokkinou</a> & <a class="footer-link" href="https://github.com/dimitramav">Dimitra Mavroforaki</a> 2017</h5></div>
        <div class="col-sm-4">
          <img src="images/by.svg" style="height: 30px; weight: 30px;"/>
          <img src="images/cc.svg" style="height: 30px; weight: 30px;"/>
          <img src="images/nc-eu.svg" style="height: 30px; weight: 30px;"/>
          <img src="images/sa.svg" style="height: 30px; weight: 30px;"/>
        </div>
      </div>
    </div>
    <div class="col-sm-2"></div>
  </div>
</footer>
<!-- End of footer sitemap -->

</div>
</body>
