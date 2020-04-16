
<?php
include_once("config.php");
require('fpdf182/fpdf.php');
$id=$_GET['id'];
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);
$grand_total=0;
$queryp="SELECT *FROM project Where id= '".$id."'";
$query_processp= mysqli_query($link,$queryp);
        if(mysqli_num_rows($query_processp)>0){
            while($resultp = mysqli_fetch_assoc($query_processp)){
$pdf->SetTitle($resultp["project_name"]);
$pdf->Cell(55, 5, 'Project name :', 0, 0);
$pdf->Cell(58, 5,  $resultp["project_name"], 0, 0);
$pdf->Cell(25, 5, 'Date :', 0, 0);
$pdf->Cell(52, 5, $resultp["Date_Time"], 0, 1);
$pdf->Cell(55, 5, 'Developer :', 0, 0);
$pdf->Cell(58, 5, $resultp["developer"], 0, 0);
$pdf->Cell(25, 5, 'Address', 0, 0);
$pdf->Cell(52, 5, $resultp["address"], 0, 1);
$pdf->SetFont('Arial','B',15);
$width_cell=array(7,170,8,12);
$pdf->SetFillColor(193,120,252); // Background color of header 
$pdf->Line(10, 30, 200, 30);

// $pdf->Cell($width_cell[0],10,'sr',1,0,'C',true); // First header column 
// $pdf->Cell($width_cell[1],10,'recipe name',1,0,'C',true); // Second header column
// $pdf->Cell($width_cell[2],10,'quantity',1,0,'C',true); // Third header column 
// $pdf->Cell($width_cell[3],10,'Cost',1,1,'C',true); // Fourth header column
//// header is over ///////
$pid=$_GET['id'];
$query="SELECT sb_name,sbid FROM project_details WHERE pid='".$pid."'";
$query_process = mysqli_query($link,$query);
        if(mysqli_num_rows($query_process)>0){
            while($result = mysqli_fetch_assoc($query_process)){
                $sb_name=$result["sb_name"];
          		$sbid=$result["sbid"];
            $pdf->SetFont('Arial','B',8);
$query1="SELECT total FROM sb WHERE sb_name='".$sb_name."'";
$query_process1 = mysqli_query($link,$query1);
        if(mysqli_num_rows($query_process1)>0){
            while($result1 = mysqli_fetch_assoc($query_process1)){
                $total1=$result1["total"];
                // $pdf->SetFont('Arial','B',12);
                $pdf->Cell(197,10,$sb_name,1,10,'C',true); // First header column
				$i=1;
				$pdf->Cell($width_cell[0],10,'sr.no',1,0,'C',false); // First column of row 1 
			$pdf->Cell($width_cell[1],10,'recipe name',1,0,'C',false); // Second column of row 1 
			$pdf->Cell($width_cell[2],10,'qty',1,0,'C',false); // Third column of row 1 
			$pdf->Cell($width_cell[3],10,'total',1,1,'C',false); // Fourth column of row 1 

				$query12="SELECT receipe_name,receipe_id,quantity,total FROM sb_details WHERE sb_id='".$sbid."'";
				$query_process12 = mysqli_query($link,$query12);
        		if(mysqli_num_rows($query_process12)>0){
            	while($result12 = mysqli_fetch_assoc($query_process12)){
          		$count = $result12["quantity"];
                

$pdf->Cell($width_cell[0],10,$i++,1,0,'C',false); // First column of row 1 
$pdf->Cell($width_cell[1],10,$result12["receipe_name"],1,0,'C',false); // Second column of row 1 
$pdf->Cell($width_cell[2],10,$count,1,0,'C',false); // Third column of row 1 
$pdf->Cell($width_cell[3],10,$result12["total"],1,1,'C',false); // Fourth column of row 1 
$grand_total=$grand_total+$result12["total"];
}
 }
} 
}
} }

$pdf->Cell(52,10,'',0,0,'C',false); // First column of row 1 
$pdf->Cell(25,10,'',0,0,'C',false); // Fourth column of row 1 
$pdf->Cell(60,10,'total',1,0,'C',false); // First column of row 1 
$pdf->Cell(60,10,$grand_total,1,0,'C',false); // Second column of row 1 
$fileName =$resultp['project_name'] . '.pdf';
}}
$pdf->Output($fileName,'I');



?>
