<?php
//INCLUDEs
include('../system/TCPDF/tcpdf.php');
include '../conn.php';
include '../audit_trail.php';
date_default_timezone_set('Asia/Manila');

// create new PDF document
$pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Your Name');
$pdf->SetTitle('Church Member Management Report');
$pdf->SetSubject('Church Member Management Report');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, 'CH-MS AUDIT TRAIL REPORT', 'as of ' . date('Y-m-d H:i:s'), array(0, 0, 0), array(0, 0, 0));
$pdf->setFooterData(array(0, 0, 0), array(0, 0, 0));

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set font
$pdf->SetFont('helvetica', '', 10);

// Add a page
$pdf->AddPage();

// Fetch data from the database
$sql = "SELECT * FROM activity_logs";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Table header
    $html = '<table border="1">
                <tr>
                    <th><b>ACTIVITY ID</b></th>
                    <th><b>CURRENT USER</b></th>
                    <th><b>ACTIVITY</b></th>
                    <th><b>TIME</b></th>
                </tr>';

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $html .= "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['user']}</td>
                    <td>{$row['activity_description']}</td>
                    <td>{$row['created_at']}</td>
                </tr>";
    }

    $html .= '</table>';
} else {
    $html .= '<p>No results found</p>';
}

// Print text using writeHTML()
$pdf->writeHTML($html, true, false, true, false, '');

// Close and output PDF document
$pdf->Output('church_member_management_report.pdf', 'I');


// Close and output PDF document
//$pdfData = $pdf->Output('sample_report.pdf', 'S'); // 'S' parameter returns PDF data as a string

// Display PDF in an iframe for preview
//echo '<iframe src="data:application/pdf;base64,'.base64_encode($pdfData).'" width="100%" height="500px"></iframe>';

