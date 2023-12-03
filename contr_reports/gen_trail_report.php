<?php
ob_start(); //START OUTPUT BUFFERING
session_start(); //START THE SESSION

//INCLUDEs
include('../system/FDPDF/fpdf.php');
require('../conn.php');
require('../audit_trail.php');

//FOR TIME FORMATTING
date_default_timezone_set('Asia/Manila');
$fileDateFormat = date('mdy');

//GENERATE LOG, BEFORE CREATING A REPORT
function recordLog() {
    logActivity("Audit Trail Report Generated");
}
recordLog();



class PDF extends FPDF {

    //PAGE HEADER FUNCTION
    function Header() {
        //HEADER
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 1, 'CH-MS AUDIT TRAIL REPORT', 0, 1, 'C');
        $this->SetFont('Arial', '', 10);
        $this->Cell(0, 10, 'AS OF ' . date('Y-m-d H:i:s') . '. GENERATED BY ' . $_SESSION['name'], 0, 1, 'C');

        //HEADER FORMATTING
        $this->SetFillColor(200, 220, 255);
        $this->SetTextColor(0);
        $this->SetDrawColor(0);
        $this->SetLineWidth(0.2);
        
        //TABLE HEADER DATA
        $this->SetFont('Arial', 'B', 12);
        //WIDTH, HEIGHT, TEXT INSIDE, BORDER (boolean), NEXT CELL BELOW, CENTER, FILL COLOR (boolean)
        $this->Cell(40, 10, 'ACTIVITY ID', 1, 0, 'C', true);
        $this->Cell(60, 10, 'CURRENT USER', 1, 0, 'C', true);
        $this->Cell(120, 10, 'ACTIVITY', 1, 0, 'C', true);
        $this->Cell(60, 10, 'TIME', 1, 1, 'C', true);
    }

    //PAGE FOOTER FUNCTION
    function Footer() {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'PAGE '.$this->PageNo().' OF {nb}', 0, 0, 'R');
    }
}



try {
    //CREATE NEW PDF DOCUMENT, LANDSCAPE, A4
    $pdf = new PDF('L', 'mm', 'A4');
    $pdf->AliasNbPages();
    $pdf->AddPage();

    //SET FONT SIZE
    $pdf->SetFont('Arial', '', 10);

    //GET DATA FROM THE DATABASE
    $sql = "SELECT * FROM activity_logs";
    $result = $conn->query($sql);

    //CHECK IF THERE ARE RESULTS TO DISPLAY IN THE REPORT
    if ($result->num_rows > 0) {
        //OUTPUT FETCHED DATA TO THE PDF
        while ($row = $result->fetch_assoc()) {
            //WIDTH, HEIGHT, CONTENT, BORDER (boolean), POSITION IF NEXT LINE, CENTER
            $pdf->Cell(40, 10, $row['id'], 1, 0, 'C');
            $pdf->Cell(60, 10, $row['user'], 1, 0, 'C');
            $pdf->Cell(120, 10, $row['activity_description'], 1, 0, 'C');
            $pdf->Cell(60, 10, $row['created_at'], 1, 1, 'C');
        }

    } else {
        //IF NO RESULTS FOUND, DISPLAY A MESSAGE IN THE REPORT
        $pdf->Cell(0, 10, 'NO RESULTS FOUND', 0, 1);
    }

    //DOWNLOAD THE REPORT ON BROWSER ('D' DOWNLOAD, 'I' INLINE DISPLAY)
    $pdfFilename = 'chms_audit_trail_' . $fileDateFormat . '.pdf';
    ob_clean(); //CLEAN THE OUTPUT BUFFER BEFORE PDF OUTPUT
    $pdf->Output($pdfFilename, 'D');

} catch (Exception $e) {
    //ANY ERRORS, HANDLE IT
    echo 'CAUGHT EXCEPTION: ', $e->getMessage(), "\n";
}

ob_end_flush(); //FLUSH THE OUTPUT BUFFER
?>