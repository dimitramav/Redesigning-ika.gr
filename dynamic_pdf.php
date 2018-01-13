<?php
/* $Id: hello.php,v 1.20.2.1 2014/12/12 12:47:18 rp Exp $
 *
 * PDFlib client: hello example in PHP
 */
 require_once 'helpers/greek_to_uppercase.php';

 require_once 'login.php';
 $conn = new mysqli($hn,$un,$pw,$db);
 // Check Connection
 if ($conn->connect_error) die ($conn->connect_error);
 // Escape user inputs for security
 // Take arguments from POST method
 $username = mysqli_real_escape_string($conn, $_REQUEST['username']);
 $password = mysqli_real_escape_string($conn, $_REQUEST['password']);
 //echo $username;
 //echo $password;
 // Select from users where username and password
 mysqli_query($conn, "SET NAMES 'utf8'");

 $query = "SELECT * FROM applications WHERE users_id = 42";
 $res= $conn->query($query);
 $res->data_seek(0);
 $row = $res->fetch_assoc();
 $name = $row['imp_name'];
 $name = grstrtoupper($name);
 $surname = $row['imp_surname'];
 $surname = grstrtoupper($surname);
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

    $p->setfont($font, 24.0);
    $p->set_text_pos(50, 700);
    $p->show("ΔΗΛΩΣΗ ΕΜΜΕΣΑ ΑΣΦΑΛΙΣΜΕΝΟΥ");
    $p->continue_text("");
    $p->continue_text("ΟΝΟΜΑ: ");
    $p->show($name);
    $p->continue_text("");
    $p->continue_text("ΕΠΙΘΕΤΟ: ");
    $p->show($surname);
    $p->continue_text("");
    if($row['isChild']) $child = "ΠΑΙΔΙ";
    if(!$row['isChild']) $child = "ΣΥΖΥΓΟΣ";
    $p->continue_text("ΣΥΓΓΕΝΕΙΑ: ");
    $p->show($child);
    $p->end_page_ext("");

    $p->end_document("");

    $buf = $p->get_buffer();
    $len = strlen($buf);

    header("Content-type: application/pdf");
    header("Content-Length: $len");
    header("Content-Disposition: inline; filename=hello.pdf");
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
