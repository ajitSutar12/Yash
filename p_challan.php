<?php
include_once('./config/config.php');
/*
Author      : Bhumika Lad
Version     : 1
Source      :
Start Date  : 28-05-2019
Last Updated date   : 29-05-2019 -->
 */

//In this code generate a pdf formated PO REPORT 

// Include the main TCPDF library (search for installation path).
require_once('tcpdf-master/config/tcpdf_config.php');
require_once('tcpdf-master/tcpdf.php');

    $invoiceID = $_GET['challan_id'];

    $getInvoiceData = mysqli_query($con,"SELECT *,c.name as cname FROM `challan_master` as i INNER JOIN customer_master as c on c.id = i.cust_id INNER JOIN material_master as m on m.id = i.material_id where i.challan_id = $invoiceID");
    $row = mysqli_fetch_assoc($getInvoiceData);

    $challan_date = $row['challan_date'];
    $matter       = $row['matter'];
    $delivery     = $row['delivery'];
    $gurrenty     = $row['gurrenty'];
    $custName     = $row['cname'];
    $transport    = $row['transport'];
    $payment      = $row['payment'];
    $tax          = $row['tax'];

    //Amount in word function
    function convertToIndianCurrency($number) {
        $no = round($number);
        $decimal = round($number - ($no = floor($number)), 2) * 100;    
        $digits_length = strlen($no);    
        $i = 0;
        $str = array();
        $words = array(
            0 => '',
            1 => 'One',
            2 => 'Two',
            3 => 'Three',
            4 => 'Four',
            5 => 'Five',
            6 => 'Six',
            7 => 'Seven',
            8 => 'Eight',
            9 => 'Nine',
            10 => 'Ten',
            11 => 'Eleven',
            12 => 'Twelve',
            13 => 'Thirteen',
            14 => 'Fourteen',
            15 => 'Fifteen',
            16 => 'Sixteen',
            17 => 'Seventeen',
            18 => 'Eighteen',
            19 => 'Nineteen',
            20 => 'Twenty',
            30 => 'Thirty',
            40 => 'Forty',
            50 => 'Fifty',
            60 => 'Sixty',
            70 => 'Seventy',
            80 => 'Eighty',
            90 => 'Ninety');
        $digits = array('', 'Hundred', 'Thousand', 'Lakh', 'Crore');
        while ($i < $digits_length) {
            $divider = ($i == 2) ? 10 : 100;
            $number = floor($no % $divider);
            $no = floor($no / $divider);
            $i += $divider == 10 ? 1 : 2;
            if ($number) {
                $plural = (($counter = count($str)) && $number > 9) ? 's' : null;            
                $str [] = ($number < 21) ? $words[$number] . ' ' . $digits[$counter] . $plural : $words[floor($number / 10) * 10] . ' ' . $words[$number % 10] . ' ' . $digits[$counter] . $plural;
            } else {
                $str [] = null;
            }  
        }
        
        $Rupees = implode(' ', array_reverse($str));
        $paise = ($decimal) ? "And Paise " . ($words[$decimal - $decimal%10]) ." " .($words[$decimal%10])  : '';
        return ($Rupees ? 'Rupees ' . $Rupees : '') . $paise . " Only";
    }

    //money format in indian
    function moneyFormatIndia($num) {
        $explrestunits = "" ;
        if(strlen($num)>3) {
            $lastthree = substr($num, strlen($num)-3, strlen($num));
            $restunits = substr($num, 0, strlen($num)-3); // extracts the last three digits
            $restunits = (strlen($restunits)%2 == 1)?"0".$restunits:$restunits; // explodes the remaining digits in 2's formats, adds a zero in the beginning to maintain the 2's grouping.
            $expunit = str_split($restunits, 2);
            for($i=0; $i<sizeof($expunit); $i++) {
                // creates each of the 2's group and adds a comma to the end
                if($i==0) {
                    $explrestunits .= (int)$expunit[$i].","; // if is first value , convert into integer
                } else {
                    $explrestunits .= $expunit[$i].",";
                }
            }
            $thecash = $explrestunits.$lastthree;
        } else {
            $thecash = $num;
        }
        return $thecash; // writes the final format where $currency is the currency symbol.
    }

class PDF extends TCPDF
{
    // set the header
    public function Header()
    {
         $image_file = K_PATH_IMAGES.'logo.png';
         $this->Image($image_file,10,5,100,'','PNG','','T',false,300,'',false,false,0,false,false,false);

        //$image_file = K_PATH_IMAGES.'logo.png';
        //$this->Image($image_file, 10, 10, 15, '', 'png', '', 'T', false, 300, '', false, false, 0, false, false, false);

        // set font
        $this->Ln(1);
        $this->SetFont('helvetica','B',14);
        // title
        $this->Cell(180,0,'CHALLAN',0,1,'R');
        $this->SetFont('helvetica','',10);
        $this->Cell(180,0,'-------------------------',0,1,'R');
        $this->Cell(180,0,'GSTIN NO:27AIVPB7046C1ZB',0,1,'R');
        $this->SetFont('helvetica','',12);
    }
    // For get data from datasheet file
    // Load table data from file
    // public function LoadData($file) {
    //     // Read file lines
    //     $lines = file($file);
    //     $data = array();
    //     foreach($lines as $line) {
    //         $data[] = explode(';', chop($line));
    //     }
    //     return $data;
    // }
    // colored table
    // public function ColoredTable($header,$data) {
    //     // Colors, line width and bold font
    //     $this->SetFillColor(255, 0, 0);
    //     $this->SetTextColor(255);
    //     $this->SetDrawColor(128, 0, 0);
    //     $this->SetLineWidth(0.3);
    //     $this->SetFont('', 'B');
    //     // Header
    //     $w = array(40, 35, 40, 45);
    //     $num_headers = count($header);
    //     for($i = 0; $i < $num_headers; ++$i) {
    //         $this->Cell($w[$i], 7, $header[$i], 1, 0, 'C', 1);
    //     }
    //     $this->Ln();
    //     // Color and font restoration
    //     $this->SetFillColor(224, 235, 255);
    //     $this->SetTextColor(0);
    //     $this->SetFont('');
    //     // Data
    //     $fill = 0;
    //     foreach($data as $row) {
    //         $this->Cell($w[0], 6, $row[0], 'LR', 0, 'L', $fill);
    //         $this->Cell($w[1], 6, $row[1], 'LR', 0, 'L', $fill);
    //         $this->Cell($w[2], 6, number_format($row[2]), 'LR', 0, 'R', $fill);
    //         $this->Cell($w[3], 6, number_format($row[3]), 'LR', 0, 'R', $fill);
    //         $this->Ln();
    //         $fill=!$fill;
    //     }
    //     $this->Cell(array_sum($w), 0, '', 'T');
    // }
}

$pdf= new PDF('p','mm','A4');



// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Yash Enterprises');
$pdf->SetTitle('Challan');
$pdf->SetSubject('');
$pdf->SetKeywords('');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);
// remove default header/footer

// set header and footer fonts
$pdf->SetHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
// $pdf->SetFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_MAIN));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
//$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
// $pdf->SetHeaderMargins(PDF_MARGIN_HEADER);
// $pdf->SetFooterMargins(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
// $pdf->SetFont('times', 'R', 8);

// add a page
$pdf->AddPage();

$pdf->Ln(20);

$pdf->SetFont('helvetica', '', 10);

$tbl = '
<table border="1" cellpadding="1" height="100%">
    <tr style="background-color:#DFDFDF;color:#0000FF;">
        <td colspan="3"><h1 style="color:black; text-align: center;">CHALLAN DETAILS</h1>
        </td>
    </tr>

    <tr>
        <td  colspan="2" width="50%">
            <table>
                <tr>
                    <td><b>To : '.$custName.'</b>  </td>
                </tr>
                <tr>
                    <td  colspan="2" style = "text-align: left; color:black;"> </td>
                </tr>
            </table>    
        </td>

        <td width="50%"> 
            <table>
                <tr>
                    <td style="width:36%"><b>Challan Id</b></td> <td style="width:4%"> : </td> <td style="width:60%"> '.$invoiceID.'</td>
                </tr>
                <tr>
                    <td><b>Challan Date</b></td> <td> : </td> <td>'.$challan_date.' </td>
                </tr>
            </table>
        </td>
    </tr>

    <tr>
        <td colspan="3">&nbsp;&nbsp;Respected Sir,
                <p>&nbsp;&nbsp;'.$matter.'</p>
                <p>&nbsp;</p>
        </td>
    </tr>

    <tr >
        <td colspan="3"  height="200%" >
            <table border="1" cellpadding="3" style="width:100%" > 
                <thead>
                    <tr>
                        <th style="width:5%"><h4 style="text-align:center; color: black;">No.</h4></th>
                        <th style="width:58%"><h4 style="text-align:center; color: black;">Description Of Goods/Service</h4></th>
                        <th style="width:12%"><h4 style="text-align:center; color: black;">Qty</h4></th>
                        <th style="width:12%"><h4 style="text-align:center; color: black;">Rate/Each</h4></th>
                        <th style="width:12%"><h4 style="text-align:center; color: black;">Amount</h4></th>
                    </tr>
                    
                </thead>
                <tbody>';
                $totalAmount = 0;
                $cgst        = 0;
                $sgst        = 0;
                $igst        = 0;
                $grandTotal  = 0;
                $count       = 1;
                $getMaterialDetail = mysqli_query($con,"SELECT *,m.name as mname,m.hsn as mhsn,m.unit as munit,i.rate as irate FROM `challan_master` as i INNER JOIN customer_master as c on c.id = i.cust_id INNER JOIN material_master as m on m.id = i.material_id where i.challan_id = $invoiceID");
                while($row1 = mysqli_fetch_assoc($getMaterialDetail))
                {
                    $qty         = 
                    $totalAmount = round($totalAmount) + round($row1['qty']*$row1['irate']);
                    $cgst        = ($totalAmount * 9)/100;
                    $sgst        = $cgst;
                    $igst        = $cgst + $sgst;
                    $grandTotal  = $igst + $totalAmount;

                $tbl.=' <tr>
                            <td style="text-align:center">'.$count.'</td>
                            <td>'.$row1['mname'].'<br>Note : '.$row1['material_note'].'</td>
                            <td style="text-align:right">'.$row1['qty'].'</td>
                            <td style="text-align:right">'.$row1['irate'].'</td>
                            <td style="text-align:right">'.$amt = moneyFormatIndia( round($row1['qty']*$row1['irate']) ).'</td>
                        </tr>';
                        $count ++;
                }  
                    
            
                $tbl.='<tr>
                        <td colspan="2"><b>1) Delivery : - </b> '.$delivery.' </td>
                        <td colspan="2"><b> Taxable Amt</b>:</td>
                        <td style="text-align:right">'.$totalAmount = moneyFormatIndia( round($totalAmount) ).'</td>
                    </tr>
                    <tr>
                        <td colspan="2"><b>2) Guranty : - </b> '.$gurrenty.' </td>
                        <td colspan="2"><b> SGST @ 9%</b></td>
                        <td style="text-align:right">'.$sgst = moneyFormatIndia( round($sgst) ).'</td>
                    </tr>
                    <tr>
                        <td colspan="2"><b>3) Transport : - </b> '.$transport.' </td>
                        <td colspan="2"><b> CGST @ 9%</b></td>
                        <td style="text-align:right">'.$cgst = moneyFormatIndia( round($cgst) ).'</td>
                    </tr>
                    <tr>
                        <td colspan="2"><b>4) Payment  : - </b> '.$payment.' </td>
                        <td colspan="2"><b> IGST @ 18%</b></td>
                        <td style="text-align:right">'.$igst = moneyFormatIndia( round($igst) ).'</td>
                    </tr>
                    <tr>
                        <td colspan="2"><b>5) Tax : - </b> '.$tax.' </td>
                        <td colspan="2"><b> Grand Total</b></td>
                        <td style="text-align:right">'.$grandTotal = moneyFormatIndia( round($grandTotal) ).'</td>
                    </tr>
                    
                
                </tbody>
            </table>
        </td>
    </tr>

    <tr>
        <td colspan="3">
            <h4 style="text-align:left; color:black">  Certified that the perticulars given above are true and correct.</h4> 
            <p> </p>
            <p> </p>
            <h4 style="text-align:right; color:black;font-size:15px"><b>For Yash Enterprises  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b>   </h4> 
            <h4 style="text-align:left; color:black"> E.N.O.E.   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    Subject to Kolhapur Jurisdiction</h4> 
        </td>
    </tr>

</table>';

// write the html code on the blank page
$pdf->writeHTML($tbl, true, false, false, false, '');

//Close and output PDF document
ob_end_clean();
$pdf->Output('example_002.pdf', 'I');

//============================================================+
// END OF FILE Digvijay Jadhav
//============================================================+
