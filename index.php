

<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>IKA - Αρχική Σελίδα</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="Responsive-jQuery-News-Ticker-Plugin-with-Bootstrap-3-Bootstrap-News-Box/scripts/jquery.bootstrap.newsbox.min.js"></script>
  <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  <link href="fontawesome-free-5.0.1/web-fonts-with-css/css/fontawesome-all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles/styles.css">
  <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:900|Open+Sans:700|Roboto" rel="stylesheet">
</head>
<body>

<script type="text/javascript">
    $(function () {
        $("#demo3").bootstrapNews({
            newsPerPage: 3,
            autoplay: false,
            
            onToDo: function () {
                //console.log(this);
            }
        });
    });
</script>

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
                  <li class="dropdown-header text-center"><a href="#">Ασφαλισμένοι</a></li>
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
                          <li class="text-center list-header"><a href="#">Δήλωση Έμμεσα <br> Ασφαλισμένου</a></li>
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
                  <li class="dropdown-header text-center"><a href="#">Συνταξιούχοι</a></li>
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
                          <li class="text-center list-header"><a href="#">Βεβαίωση Σύνταξης για Φορολογική Χρήση</a></li>
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
          <li><a href="#"><i class ="fas fa-user"></i> <?php echo $_SESSION['user'] ?></a></li>
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

  <!-- Target Groups -->

    <div class="row text-center target-groups">
      <div class="col-md-2"></div>
      <div class="col-md-2">
        <div type="button" class="btn btn-info target-group family"><h3>Ασφαλισμένοι</h3></div>
      </div>
      <div class="col-md-2">
        <div type="button" class="btn btn-info target-group retired"><h3>Συνταξιούχοι</h3></div>
      </div>
      <div class="col-md-2">
        <div type="button" class="btn btn-info target-group employer"><h3>Εργοδότες</h3></div>
      </div>
      <div class="col-md-2">
        <div type="button" class="btn btn-info target-group disability"><h3>A.M.E.A</h3></div>
      </div>
      <div class="col-md-2"></div>
    </div>
  <!-- End of Target Groups -->
    <div class="container line">
      <div class="horizontal-line">
      <span style="font-size: 30px; background-color: #FFF; padding: 0 10px;">
        Εφαρμογές <!--Padding is optional-->
      </span>
    </div>
    <!-- Flexbox Grid -->
    <div class="flex-body">
   		<div class="flex-column">
    		<div  class="text-center" style="background: #6d7993; cursor: pointer;" onmouseover="this.style.backgroundColor='#006db9'" onmouseout="this.style.backgroundColor='#6d7993'"><h3><i class ="fas fa-lightbulb fa-3x" style="padding-top: 10px;"></i><br><br>Ενημερώσου για το ΑΜΚΑ</h3>
    		</div>
    		<div class="text-center" style="background: #6d7993; cursor: pointer;" onmouseover="this.style.backgroundColor='#006db9'" onmouseout="this.style.backgroundColor='#6d7993'"><h3> <i class="fa fa-question-circle fa-3x" style="padding-top: 10px;"></i><br><br>Συχνές Ερωτήσεις</h3></div>
  		</div>

  		<div class="flex-column">
    		<div class="text-center" style="background: #6d7993; cursor: pointer;" onmouseover="this.style.backgroundColor='#006db9'" onmouseout="this.style.backgroundColor='#6d7993'"><h3><i class="fa fa-home fa-3x" style="padding-top: 10px;"></i><br><br>Ασφαλίσου στο ΙΚΑ</h3></div>
    		<div class="text-center" style="background: #6d7993; cursor: pointer;" onmouseover="this.style.backgroundColor='#006db9'" onmouseout="this.style.backgroundColor='#6d7993'"><h3><i class="fa fa-phone fa-3x" style="padding-top: 10px;" ></i><br><br>Επικοινωνία</h3></div>
  		</div>
  		<div class="flex-row">
    		<div class="text-center" style="background: #6d7993; cursor: pointer;" onmouseover="this.style.backgroundColor='#006db9'" onmouseout="this.style.backgroundColor='#6d7993'"><h3><i class="fa fa-book fa-3x" style="padding-top: 150px;" ></i><br><br>Λεξικό όρων</h3></div>
  		</div>
	</div>
  </div>
  <!-- News -->
   <div class="container line" style="padding-bottom: :20px;">
      <div class="horizontal-line">
      <span style="font-size: 30px; background-color: #FFF; padding: 0 10px;">
        Ανακοινώσεις <!--Padding is optional-->
      </span>
    </div>
    <div class="panel panel-default"  style="margin-top: 40px;width:908px; margin-left: auto ;margin-right: auto ;"> <!--den kserw pws na to kanw idio size me to flex-->
      <div class="panel-heading"> <span class="glyphicon glyphicon-list-alt"></span><b>Νέα</b></div>
        <div class="panel-body">
          <div class="row">
            <div class="col-xs-12">
              <?php
              require_once 'login.php';
              $conn = new mysqli($hn,$un,$pw,$db); 
              $sql_news = "SELECT notes FROM news";  
              $result_news = $conn->query($sql_news);  
              ?>         
              <ul id="demo3">
              <?php
              if ($result_news->num_rows > 0) {
                while( $row = $result_news->fetch_assoc())
                {
                  echo '<li class="news-item">'.$row['notes'] . '</li>';
                }
              }
              ?>
              </ul>
            </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer - Sitemap -->
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
            <li class="section-title"><a href="#"><br>Δήλωση Έμμεσα Ασφαλισμένου</a></li>
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
            <li class="section-title"><a href="#"><br>Βεβαίωση Σύνταξης για Εφορία</a></li>
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
</html>
