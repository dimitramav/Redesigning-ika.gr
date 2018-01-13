
<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Προφίλ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="screen" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  <script src="scripts/validation.js"></script>
  <link rel="stylesheet" href="styles/styles.css">
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <link href="fontawesome-free-5.0.1/web-fonts-with-css/css/fontawesome-all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:900|Open+Sans:700|Roboto" rel="stylesheet">


</head>
<body>
 <!--different content for every link in side menu-->
<script>
function openChoice(evt, choice) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(choice).style.display = "block";
    evt.currentTarget.className += " active";

}
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});

$('#click').click(function(){
    $('#progressBar').val(60);
});
// Get the element with id="defaultOpen" and click on it
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
          <li><a href="profile.php"><i class ="fas fa-user"></i> <?php echo $_SESSION['user'] ?></a></li>
          <?php endif; ?>
          <?php if(!isset($_SESSION['user']['username'])): ?>
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
  <div class="container" style="margin-top: 100px;border: 1px solid #AAA;width:900px;">
    <div class="row text-center" style="display:flex;">
      <div class="col-md-3" >
        <div class="row" style="margin-top: 4px;">
          <div class="col-md-12">
            <i class="fa fa-user-circle fa-6x" aria-hidden="true"></i>
          </div>
        </div>  
        <div class="row" style="margin-top: 4px;" >
          <div class="col-md-12">
            <?php
                require_once 'login.php';
                $conn = new mysqli($hn,$un,$pw,$db);
                $current_user = $_SESSION['user'];
                $query = "SELECT * FROM users WHERE username='$current_user'";
                $result = mysqli_query($conn,$query);
                $row = mysqli_fetch_array($result, MYSQLI_NUM);
                $id=$row[0];
                $username=$row[1];
                $firstname=$row[3];
                $lastname=$row[4];
                $HaveInsurance=$row[5];
                $HaveRetirement=$row[6];
                $ama=$row[7];
                $amka=$row[8];
                $email=$row[9];
            ?>
            <h4>
            <?php
                echo $firstname. " " .$lastname;
            ?></h4>
          </div>
        </div>
        <div class="tab" style="width:100%;">
          <button class="tablinks active" onclick="openChoice(event, 'userinfo')"><i class="fa fa-user"></i>
          Στοιχεία Χρήστη</button>
          <button class="tablinks" onclick="openChoice(event, 'history')"><i class="fa fa-history"></i> Ιστορικό Αιτήσεων</button>
          <button class="tablinks" onclick="openChoice(event, 'progress')"><i class="fa fa-tasks"></i> Eξέλιξη Αιτήσεων</button>
          <button class="tablinks" onclick="openChoice(event, 'debt')"> <span class="glyphicon glyphicon-euro "></span>Οφειλές</button>

        </div>
      </div>  
      <div class="col-md-9" style="border-left: 1px solid #AAA; flex:1">
        <div class="row"  >
          <div id="userinfo" class="col-md-12 tabcontent" style="display:block">
            <h3>Στοιχεία Χρήστη</h3></br>
            <!--form-->
            <div  onmouseover="validate()" onmouseout="validate()" onclick="validate()">
              <form action="update_user.php" method="post">
                <div class="form-group">
                  <label>Όνομα χρήστη: </label>
                  <p id="passwordHelp" class="form-text text-muted">Το όνομα χρήστη πρέπει να περιέχει τουλάχιστον 5 χαρακτήρες.</p>
                  <input onchange="checkUsername()" type="text" name="username" class="form-control" id="usernameInput" value="<?php 
                  echo $username; ?>" required>
                  <p id="usernameError" style="color:red"></p>
                  <span class="success"></span>
                  <span class="error"></span>
                </div>
                <div class="form-group">
                  <label>Όνομα: </label>
                  <input type="username" name="firstname" class="form-control" value="<?php echo $firstname; ?>" required>
                </div>
                <div class="form-group">
                  <label>Επίθετο: </label>
                  <input type="username" name="lastname" class="form-control" value="<?php echo $lastname; ?>"  required>
                </div>
                <div class="form-group">
                  <label>Email: </label>
                  <input onchange="checkEmail()" id="emailInput" type="email" name="email" class="form-control" value="<?php echo $email; ?>" required>
                </div>
                <div class="form-group">
                  <label>Α.Μ.Α.: </label>
                  <input name="ama" class="form-control" value="<?php echo $ama; ?>" required>
                </div>
                <div class="form-group">
                  <label>Α.Μ.Κ.Α.: </label>
                  <input name="amka" class="form-control" value="<?php echo $amka; ?>" required>
                </div>
                <div class="form-group">
                  <div class="radio" style="text-align: left;">
                    <?php if ($HaveInsurance==1): ?>
                    <label><input type="radio" name="HaveInsurance" checked=checked>Ασφαλισμένος</label>
                    <?else: ?>
                    <label><input type="radio" name="HaveInsurance" checked=checked>Ασφαλισμένος</label>
                    <?endif;?>
                  </div>
                </div>
                <button id="mySubmit" type="submit" class="btn btn-primary" style="float: right;">Αποθήκευση αλλαγών</button>
              </form>
            </div>
          <!-- end of form-->
          </div>
        </div>
        <div class="row" >
          <div id="history" class="col-md-12 tabcontent" style="display:none"  >
            <h3>Ιστορικό αιτήσεων</h3></br>
                <?php
                    require_once 'login.php';
                    $conn = new mysqli($hn,$un,$pw,$db);
                    // Check Connection
                    if ($conn->connect_error) die ($conn->connect_error);
                    // attempt insert query execution
                      $sql = "SELECT * FROM applications WHERE users_id=$id AND completed=1; ";
                      $result=mysqli_query($conn,$sql);
                      if (mysqli_num_rows($result) == 0) {
                          echo "O χρήστης δεν έχει υποβάλει κάποια αίτηση" ;
                          exit;
                      }
                      $counter = 0;   
                      while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="row">';
                          echo '<div class="col-md-3">';
                            echo "Δήλωση " .(++$counter);
                          echo '</div>';
                          echo '<div class="col-md-3" style="text-align: right;">';
                            echo '<a href="/mypath" data-toggle="tooltip" data-placement="right" title="Aποθήκευση PDF" style="color:#ff7400"><i class="fa fa-download fa-2x"></i></a>';
                          echo'</div>';
                          echo ' <div class="col-md-3" style="text-align: right;">';
                            echo '<a href="/mypath" data-toggle="tooltip" data-placement="right" title="Τροποποίηση" ><i class="fas fa fa-pencil-square-o fa-2x" style="color:#b4b4b4"></i></a>';
                          echo '</div>';
                          echo '<div class="col-md-3" style="text-align: right;">';
                            echo '<a href="/mypath" data-toggle="tooltip" data-placement="right" title="Εκτύπωση"><i class="fa fa-print fa-2x"></i></a>';
                          echo '</div>';
                        echo '</div>';
                        echo '</br>';
                      }
                    mysqli_close($conn);
            ?>
             
          </div>
        </div>
        <div class="row">
          <div id="progress" class="col-md-12 tabcontent" style="display:none" >
            <h3>Εξέλιξη αιτήσεων</h3></br>
            <?php
                    require_once 'login.php';
                    $conn = new mysqli($hn,$un,$pw,$db);
                    // Check Connection
                    if ($conn->connect_error) die ($conn->connect_error);
                    // attempt insert query execution
                      $sql = "SELECT * FROM applications WHERE users_id=$id";
                      $result=mysqli_query($conn,$sql);
                      if (mysqli_num_rows($result) == 0) {
                          echo "O χρήστης δεν έχει υποβάλει κάποια αίτηση" ;
                          exit;
                      }
                      $counter = 0;   
                      while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="row">';
                          echo '<div class="col-md-3">';
                            echo "Δήλωση " .(++$counter);
                          echo '</div>';
                        if($row["completed"]==1):
                          echo '<progress class="col-md-8" id="progressBar" value="100" max="100" />';  
                        else:  ?>
                          <progress class="col-md-8" id="progressBar" value="<?php echo htmlspecialchars($row["inprogress"]*25); ?>" max="100" />
                        <?
                        endif;

                        echo '</div>';
                        echo '</br>';
                      }
                    mysqli_close($conn);
            ?>
          </div>
        </div>
        <div class="row" >
          <div id="debt" class="col-md-12 tabcontent" style="display:none" >
                  <p>debt</p>
          </div>
        </div>
      </div><!--end of class col md 9-->
  </div> <!--end of container-->
</div>  <!--end of container fluid-->

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
