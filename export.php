<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: signin.php');
    exit;
}
include 'db_connection.php';

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use TCPDF;

$userCount = $mysqli->query("SELECT COUNT(*) AS count FROM users")->fetch_assoc()['count'];
$subscriptionCount = $mysqli->query("SELECT COUNT(*) AS count FROM subscribers")->fetch_assoc()['count'];
$eventCount = $mysqli->query("SELECT COUNT(*) AS count FROM event_enrollments")->fetch_assoc()['count'];

if ($_GET['format'] == 'pdf') {
    // PDF generation
    $pdf = new TCPDF();
    $pdf->AddPage();
    $pdf->SetFont('helvetica', '', 12);
    $html = '<h1>Sports World Analytics</h1>';
    $html .= '<p>Number of Users: ' . $userCount . '</p>';
    $html .= '<p>Number of Subscriptions: ' . $subscriptionCount . '</p>';
    $html .= '<p>Number of Event Enrollments: ' . $eventCount . '</p>';
    $pdf->writeHTML($html);
    $pdf->Output('analytics.pdf', 'D');
} elseif ($_GET['format'] == 'xlsx') {
    // Excel generation
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->setCellValue('A1', 'Sports World Analytics');
    $sheet->setCellValue('A2', 'Number of Users');
    $sheet->setCellValue('B2', $userCount);
    $sheet->setCellValue('A3', 'Number of Subscriptions');
    $sheet->setCellValue('B3', $subscriptionCount);
    $sheet->setCellValue('A4', 'Number of Event Enrollments');
    $sheet->setCellValue('B4', $eventCount);
    $writer = new Xlsx($spreadsheet);
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="analytics.xlsx"');
    $writer->save('php://output');
}
?>
