<?php

 require_once 'helpers/greek_to_uppercase.php';

 require_once 'login.php';
 $conn = new mysqli($hn,$un,$pw,$db);
 // Check Connection
 if ($conn->connect_error) die ($conn->connect_error);
 // Escape user inputs for security
 // Take arguments from POST method
 $app_id = $_GET["id"];
 // Select from users where username and password
 mysqli_query($conn, "SET NAMES 'utf8'");

 $query = "SELECT * FROM users WHERE id=$app_id";
 $res= $conn->query($query);
 $res->data_seek(0);
 $row = $res->fetch_assoc();
 $name = $row['firstname'];
 $name = grstrtoupper($name);
 $surname = $row['lastname'];
 $surname = grstrtoupper($surname);

 $app_date = date("d-m-Y");
 $completed = 1;
 mysqli_query($conn, "SET NAMES 'utf8'");
 $query="SELECT * FROM applications WHERE users_id=$app_id";
 $res= $conn->query($query);
 $anything_found = mysqli_num_rows($res);
 if($anything_found==0)
  $query = "INSERT INTO applications (completed, users_id, app_date) VALUES ('$completed', '$app_id', '$app_date')";
 $res= $conn->query($query);

try {

    $p = new PDFlib();

    # This means we must check return values of load_font() etc.
    $p->set_option("errorpolicy=return");

    /* Enable the following line if you experience crashes on OS X
     * (see PDFlib-in-PHP-HowTo.pdf for details):
     * $p->set_option("usehostfonts=false");
     */

    /* all strings are expected as utf8 */
    $p->set_option("stringformat=utf8");

    /*  open new PDF file; insert a file name to create the PDF on disk */
    if ($p->begin_document("", "") == 0) {
	die("Error: " . $p->get_errmsg());
    }

    $p->set_info("Creator", "Yolanda Kokkinou");
    $p->set_info("Author", "Yolanda Kokkinou");
    $p->set_info("Title", "Form");

    $p->begin_page_ext(595, 842, "");

    $font = $p->load_font("Symbol", "unicode", "");
    if ($font == 0) {
	die("Error: " . $p->get_errmsg());
    }

    $p->setfont($font, 30.0);
    $p->set_text_pos(50, 700);
    $p->show("ΙΔΡΥΜΑ ΚΟΙΝΩΝΙΚΩΝ ΑΣΦΑΛΙΣΕΩΝ");
    $p->setfont($font, 24.0);
    $p->continue_text("");
    $p->continue_text("ΒΕΒΑΙΩΣΗ ΓΙΑ ΦΟΡΟΛΟΓΙΚΗ ΧΡΗΣΗ");
    $p->continue_text("");
    $p->setfont($font, 16.0);
    $p->continue_text("ΒΕΒΑΙΩΝΟΥΜΕ ΟΤΙ Ο / Η ΣΥΝΤΑΞΙΟΥΧΟΣ ΜΕ");
    $p->continue_text("");
    $p->continue_text("ΟΝΟΜΑ: ".$name);
    $p->show(" ");
    $p->show($surname);
    $p->show(" ΛΑΜΒΑΝΕΙ ΜΗΝΙΑΙΑ ΤΟ ΠΟΣΟ ");
    $p->continue_text("");
    $p->continue_text("ΤΩΝ ".$row['money']." ΕΥΡΩ");
    $p->continue_text("");
    $total = $row['money'] * 12;
    $p->continue_text("ΕΤΗΣΙΟ ΕΙΣΟΔΗΜΑ: ".$total." ΕΥΡΩ");
    $tax = $total * 6/100;
    $total = $total - $tax;
    $p->continue_text("");
    $p->continue_text("ΦΟΡΟΣ: ".$tax." ΕΥΡΩ");
    $p->continue_text("");
    $p->continue_text("ΚΑΘΑΡΟ ΕΙΣΟΔΗΜΑ: ".$total." ΕΥΡΩ");
    $p->end_page_ext("");

    $p->end_document("");

    $buf = $p->get_buffer();
    $len = strlen($buf);

    header("Content-type: application/pdf");
    header("Content-Length: $len");
    header("Content-Disposition: inline; filename=Βεβαίωση για φορολογική χρήση.pdf");
    print $buf;

}
catch (PDFlibException $e) {
    die("PDFlib exception occurred in hello sample:\n" .
	"[" . $e->get_errnum() . "] " . $e->get_apiname() . ": " .
	$e->get_errmsg() . "\n");
}
catch (Exception $e) {
    die($e);
}

$p = 0;
?>
