<?php
if(!$_POST)
	exit();
foreach ($_POST as $key => $value) {
	$_POST[$key] = strip_tags($value);
}

/*$json = json_decode(file_get_contents("fpdf/pdf_form4.json"));

require("fpdf/fpdf.php");
require("FPDI/fpdi.php");

$pdfSrcPath = "fpdf/app4.pdf";

$pdf = new FPDI("P",  "pt"  );

$fontSize = 13;

$pagecount = $pdf->setSourceFile($pdfSrcPath);
$testText  = "abcdefghijklmnopqrstuvwxyz0123456789";
$pdf->SetFont('Courier');
$pdf->SetFontSize($fontSize);
for ($i = 0; $i < $pagecount; $i++) {
  $pdf->AddPage();
  $tplIdx = $pdf->importPage($i + 1);
  $pdf->useTemplate($tplIdx, 0, 0, 0, 0, true);

  if (isset($json->pages[$i]) && isset($json->pages[$i]->areas)) {
    for ($j = 0; $j < count($json->pages[$i]->areas); $j++) {
      $area = $json->pages[$i]->areas[$j];
      $x    = $area->x;
      $y    = $area->y;
      $w    = $area->width;
      $h    = $area->height;

      

      if ( ($area->type == "checkbox" && isset($_POST[$area->name])) || ($area->type == "radio" && $_POST[$area->name] == $area->value) ) {
        $pdf->SetDrawColor(0, 0, 0);
        $pdf->SetLineWidth(2.0);
        $pdf->Line($x, $y, $x + $w, $y + $h);
        $pdf->Line($x, $y + $h, $x + $w, $y);
      } else if ($area->type == "text") {
      	$pdf->SetDrawColor(0, 0 , 0);
        

        $iw       = $w - 2  ;
        $v        = utf8_decode($area->name);
        $overflow = ($pdf->GetStringWidth($v) > $iw);
        while ($pdf->GetStringWidth($v) > $iw) {
          $v = substr($v, 0, -1);
        }
        if ($overflow) {
          $v = substr($v, 0, -1) . "\\";
        }
        $pdf->SetTextColor(0);
        $pdf->SetXY($x, $y);                   
        $pdf->MultiCell($w, intval($h), $_POST[$area->name], false, "L"); 
        
        
          
      }
    }
  }
}*/

//$pdf->Output();


require_once 'mail.php';
$mail = new Mail();
$mail->setTo('info@foreignconsultants.com');
$html = <<<EOD
<html>
<head>
<style>.twrapper{width:800px;margin:0 auto}table,tr,td{border:1px #000 solid;border-spacing:0}table{width:100%}input[type="text"]{width:45%;margin-bottom:5px;margin-top:5px}td span.tname{font-weight:bolder}td div{display:inline}td div p{padding-left:14px}td{padding:12px}#nope{display:none}.error{border:1px red solid}.rpice{float:right;margin-right:10em}.price input[type="text"]{width:54px}input.date{width:54px}input.datef{width:90px}table table{border:none!important;margin:0!important;padding:0!important}table table textarea{width:100%;padding:0;margin:0}table table td{padding:0;margin:0;width:20%;text-align:center;border:none}.middle{margin:0 auto;text-align:center}.quote{background-color:#dedede;padding:6px;width:85%;text-align:center;margin:0 auto;border:1px #000 solid}td{    width: 50%;}td.tfirst {
    background-color: #deeaf6
}
.tright{text-align:right;}</style>
</head>
<body>
	
<div class="print_this">
	<div class="twrapper" style="width:800px;margin:0 auto;">
		<h1 class="middle" style="text-align: center;">Application for Evaluation of<br>Foreign Educational Credentials</h1>
		<table style="border:1px #000 solid;border-spacing:0;">
			<tr style="border:1px #000 solid;border-spacing:0;padding: 12px;">
				<td colspan="2" style="background-color: #deeaf6;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tfirst"><div><span class="tname">1. Name</span></div></td>
        </tr>
        <tr style="border:1px #000 solid;border-spacing:0;padding: 12px;">
				
					<td style="text-align:right;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tright">Last (Family) Name:</td> <td style="border:1px #000 solid;border-spacing:0;padding: 12px;">{$_POST['last_name']}</td>
          </tr>
					<tr style="border:1px #000 solid;border-spacing:0;padding: 12px;"> <td style="text-align:right;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tright">First Name:</td> <td style="border:1px #000 solid;border-spacing:0;padding: 12px;">{$_POST['first_name']}</td></tr>
					<tr style="border:1px #000 solid;border-spacing:0;padding: 12px;"><td style="text-align:right;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tright">Middle Name:</td> <td style="border:1px #000 solid;border-spacing:0;padding: 12px;">{$_POST['middle_name']}</td>
				
			</tr>
			<tr style="border:1px #000 solid;border-spacing:0;padding: 12px;">
				<td style="background-color: #deeaf6;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tfirst"><div><span class="tname">2. Other names</span></div></td>
				<td style="border:1px #000 solid;border-spacing:0;padding: 12px;">
					<span>All Other Names used: {$_POST['other_name']}</span><br>
					
				</td>
			</tr>
			<tr style="border:1px #000 solid;border-spacing:0;padding: 12px;">
				<td colspan="2" style="background-color: #deeaf6;border:1px #000 solid;border-spacing:0;padding: 12px;"><div><span class="tname">3. Mailing Address Phone Fax E-mail</span></div></td>
        </tr>
        <tr style="border:1px #000 solid;border-spacing:0;padding: 12px;">
				<td style="text-align:right;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tright">
        Street Address:</td> <td style="border:1px #000 solid;border-spacing:0;padding: 12px;"> {$_POST['street_addr']}</td></tr> 
		<tr style="border:1px #000 solid;border-spacing:0;padding: 12px;"><td style="text-align:right;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tright">			City:</td> <td style="border:1px #000 solid;border-spacing:0;padding: 12px;"> {$_POST['city']}</td></tr>
					<tr style="border:1px #000 solid;border-spacing:0;padding: 12px;"><td style="text-align:right;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tright">Postal Zip Code: </td> <td style="border:1px #000 solid;border-spacing:0;padding: 12px;">{$_POST['zip']}</td></tr>
					<tr style="border:1px #000 solid;border-spacing:0;padding: 12px;"><td style="text-align:right;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tright">State/Province: </td> <td style="border:1px #000 solid;border-spacing:0;padding: 12px;"> {$_POST['state']}</td></tr>
					<tr style="border:1px #000 solid;border-spacing:0;padding: 12px;"><td style="text-align:right;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tright">Country:</td> <td style="border:1px #000 solid;border-spacing:0;padding: 12px;"> {$_POST['country']}</td></tr>
					<tr style="border:1px #000 solid;border-spacing:0;padding: 12px;"><td style="text-align:right;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tright">Telephone Number:</td> <td style="border:1px #000 solid;border-spacing:0;padding: 12px;"> {$_POST['phone']}</td></tr>
					<tr style="border:1px #000 solid;border-spacing:0;padding: 12px;"><td style="text-align:right;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tright">Cellular Number:</td> <td style="border:1px #000 solid;border-spacing:0;padding: 12px;"> {$_POST['cell']}</td></tr>
					<tr style="border:1px #000 solid;border-spacing:0;padding: 12px;"><td style="text-align:right;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tright"> E-mail Address: </td> <td style="border:1px #000 solid;border-spacing:0;padding: 12px;">{$_POST['email']}</td></tr>
				
			
			<tr style="border:1px #000 solid;border-spacing:0;padding: 12px;">
				<td style="background-color: #deeaf6;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tfirst"><div><span class="tname">4. Have You used FCI service before?</span><p></p></div></td>
				<td style="border:1px #000 solid;border-spacing:0;padding: 12px;">
					{$_POST['used_fci']}<br />
					<p><span>{$_POST['fci_number']}</span><br>					
				</td>
			</tr>
			<tr style="border:1px #000 solid;border-spacing:0;padding: 12px;">
				<td style="background-color: #deeaf6;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tfirst"><div><span class="tname">5. Birth Date (month, day, year)</span><p></p></div></td>
				<td style="border:1px #000 solid;border-spacing:0;padding: 12px;">					
					<span>{$_POST['month']}/{$_POST['day']}/{$_POST['year']}</span><br>
				</td>
			</tr>
			<tr style="border:1px #000 solid;border-spacing:0;padding: 12px;">
				<td style="background-color: #deeaf6;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tfirst"><div><span class="tname">6. Sex</span><p></p></div></td>
				<td style="border:1px #000 solid;border-spacing:0;padding: 12px;">					
					{$_POST['sex']}
				</td>
			</tr>
			<tr style="border:1px #000 solid;border-spacing:0;padding: 12px;">
				<td style="background-color: #deeaf6;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tfirst"><div><span class="tname">7. Purpose of Evaluation </span></div></td>
				<td style="border:1px #000 solid;border-spacing:0;padding: 12px;">					
					{$_POST['purpose']} <br/>
					
					<span>State: {$_POST['purpose_state']}</span><br> 
					<span>Profession: {$_POST['purpose_profession']}</span><br>
				</td>
			</tr>
			<tr style="border:1px #000 solid;border-spacing:0;padding: 12px;">
				<td style="background-color: #deeaf6;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tfirst"><div><span class="tname">8. Evaluation Products and Services </span></div></td>
				<td style="border:1px #000 solid;border-spacing:0;padding: 12px;">					
					{$_POST['eval_8_0']}
					{$_POST['eval_8_1']}
					{$_POST['eval_8_2']}
					{$_POST['eval_8_3']}
					{$_POST['eval_8_4']}
					{$_POST['eval_8_5']}
					{$_POST['eval_8_6']}
					{$_POST['eval_8_7']}
					{$_POST['eval_8_8']}
					{$_POST['eval_8_9']}
				</td>
			</tr>
			<tr style="border:1px #000 solid;border-spacing:0;padding: 12px;">
				<td style="background-color: #deeaf6;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tfirst"><div><span class="tname">9. Certified Translation Services </span><p></p></div></td>
				<td style="border:1px #000 solid;border-spacing:0;padding: 12px;">					
					Amount of pages to Translate from any Language into English and from English into any Language: <span class="price"><span>{$_POST['amount_pages']}</span><br/>
					Price per 1 page $60 : <span class="price"><span>{$_POST['price_page']}</span><br/>
					Total Translation Price: <span class="price"><span>{$_POST['total_price']}</span><br/>
				</td>
			</tr>
			<tr style="border:1px #000 solid;border-spacing:0;padding: 12px;">
				<td style="background-color: #deeaf6;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tfirst"><div><span class="tname">10. Extra set of the original Evaluation Report  </span><p></p></div></td>
				<td style="border:1px #000 solid;border-spacing:0;padding: 12px;">					
					{$_POST['eval_10_0']}
					{$_POST['eval_10_1']}
					{$_POST['eval_10_2']}
					{$_POST['eval_10_3']}		
				</td>
			</tr>
			<tr style="border:1px #000 solid;border-spacing:0;padding: 12px;">
				<td style="background-color: #deeaf6;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tfirst"><div><span class="tname">11. Extra set of the original Certified and Notarized Translation  </span><p></p></div></td>
				<td style="border:1px #000 solid;border-spacing:0;padding: 12px;">					
					{$_POST['eval_11_0']}
					{$_POST['eval_11_1']}
					{$_POST['eval_11_2']}		
				</td>
			</tr>
			<tr style="border:1px #000 solid;border-spacing:0;padding: 12px;">
				<td style="background-color: #deeaf6;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tfirst"><div><span class="tname">12. Rush Services  </span><p></p></div></td>
				<td style="border:1px #000 solid;border-spacing:0;padding: 12px;">					
					{$_POST['eval_12']}		
				</td>
			</tr>
			<tr style="border:1px #000 solid;border-spacing:0;padding: 12px;">
				<td style="background-color: #deeaf6;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tfirst"><div><span class="tname">13. Express Shipment  </span><p></p></div></td>
				<td style="border:1px #000 solid;border-spacing:0;padding: 12px;">					
					{$_POST['eval_13']}		
				</td>
			</tr>
			<tr style="border:1px #000 solid;border-spacing:0;padding: 12px;">
				<td style="background-color: #deeaf6;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tfirst"><div><span class="tname">14. Total Charges  </span><p></p></div></td>
				<td style="border:1px #000 solid;border-spacing:0;padding: 12px;">					
					<strong>Total Charges per Order:</strong> <span class="price" ><span>{$_POST['total']}</span>
				</td>
			</tr>
			<tr style="border:1px #000 solid;border-spacing:0;padding: 12px;">
				<td colspan="2" style="background-color: #deeaf6;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tfirst"><div><span class="tname">15. Educational Institutions  </span></div></td>
        </tr>
									

						<tr style="border:1px #000 solid;border-spacing:0;padding: 12px;">
							<td style="text-align:right;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tright">Name(s) of School(s) Attended</td><td style="border:1px #000 solid;border-spacing:0;padding: 12px;">{$_POST['school']}<br>{$_POST['school1']}<br>{$_POST['school2']}</td>			</tr>				
						<tr style="border:1px #000 solid;border-spacing:0;padding: 12px;">	<td style="text-align:right;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tright">City &amp; Country</td>		<td style="border:1px #000 solid;border-spacing:0;padding: 12px;">{$_POST['city_country']}<br>{$_POST['city_country1']}<br/>{$_POST['city_country2']}</td>				</tr>		
						<tr style="border:1px #000 solid;border-spacing:0;padding: 12px;">	<td style="text-align:right;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tright">Diploma/Certificate Earned (if any)</td>	<td style="border:1px #000 solid;border-spacing:0;padding: 12px;">{$_POST['certificate']}<br>{$_POST['certificate1']}<br>{$_POST['certificate2']}</td>		</tr>											
							<tr style="border:1px #000 solid;border-spacing:0;padding: 12px;"><td style="text-align:right;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tright">Month/Year Started</td><td style="border:1px #000 solid;border-spacing:0;padding: 12px;">{$_POST['date_started']}<br>{$_POST['date_started1']}<br>{$_POST['date_started2']}</td>	</tr>
						<tr style="border:1px #000 solid;border-spacing:0;padding: 12px;">	<td style="text-align:right;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tright">Month/Year Completed</td>	<td style="border:1px #000 solid;border-spacing:0;padding: 12px;">{$_POST['date_completed']}<br>{$_POST['date_completed1']}<br>{$_POST['date_completed2']}</td>						
						</tr>

											


			<tr style="border:1px #000 solid;border-spacing:0;padding: 12px;">
      <td colspan="2" style="background-color: #deeaf6;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tfirst"><div><span class="tname">16. Other partysubmission  </span><br>Individual / Institution / Organization to whom the evaluation should be sent. </div></td>
        </tr>
        <tr style="border:1px #000 solid;border-spacing:0;padding: 12px;">
        <td style="text-align:right;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tright"> Individual/Institution/Organization:</td><td style="border:1px #000 solid;border-spacing:0;padding: 12px;"> {$_POST['other_org']} </td></tr>
        <tr style="border:1px #000 solid;border-spacing:0;padding: 12px;"><td style="text-align:right;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tright">Attention (Name/Department/Suite/Room):</td><td style="border:1px #000 solid;border-spacing:0;padding: 12px;"> {$_POST['other_attention']}</td></tr>
        <tr style="border:1px #000 solid;border-spacing:0;padding: 12px;"><td style="text-align:right;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tright">Street Address/Post Office Box Number:</td><td style="border:1px #000 solid;border-spacing:0;padding: 12px;"> {$_POST['other_address']}</td></tr>
        <tr style="border:1px #000 solid;border-spacing:0;padding: 12px;"><td style="text-align:right;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tright">Street Address - Continued:</td><td style="border:1px #000 solid;border-spacing:0;padding: 12px;"> {$_POST['other_streer']}</td></tr>
       <tr style="border:1px #000 solid;border-spacing:0;padding: 12px;"> <td style="text-align:right;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tright">City:</td><td style="border:1px #000 solid;border-spacing:0;padding: 12px;"> {$_POST['other_city']}</td></tr>
       <tr style="border:1px #000 solid;border-spacing:0;padding: 12px;"> <td style="text-align:right;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tright">State/Province:</td><td style="border:1px #000 solid;border-spacing:0;padding: 12px;"> {$_POST['other_state']}</td></tr>
        <tr style="border:1px #000 solid;border-spacing:0;padding: 12px;"><td style="text-align:right;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tright">Postal Zip Code:</td><td style="border:1px #000 solid;border-spacing:0;padding: 12px;"> {$_POST['other_zip']}</td></tr>
        <tr style="border:1px #000 solid;border-spacing:0;padding: 12px;"><td style="text-align:right;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tright">Country:</td><td style="border:1px #000 solid;border-spacing:0;padding: 12px;"> {$_POST['other_country']}</td></tr>

					<tr style="border:1px #000 solid;border-spacing:0;padding: 12px;"><td style="text-align:right;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tright">Authorization:</td><td style="border:1px #000 solid;border-spacing:0;padding: 12px;">I authorize to release of the evaluation report to another individual or institution named in this application.
          <p>Signature of applicant <span>{$_POST['other_sign']}</p>
          </td> 					
          </tr>
	
			<tr style="border:1px #000 solid;border-spacing:0;padding: 12px;">
				<td colspan="2"  style="background-color: #deeaf6;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tfirst"><div><span class="tname">17. Your Credit Card information   </span></div></td>
        </tr>
        <tr style="border:1px #000 solid;border-spacing:0;padding: 12px;">
				<td style="text-align:right;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tright">
					Card type:</td><td style="border:1px #000 solid;border-spacing:0;padding: 12px;"> {$_POST['card_type']}	</td></tr>			
					<tr style="border:1px #000 solid;border-spacing:0;padding: 12px;"><td style="text-align:right;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tright">Card Number</td><td style="border:1px #000 solid;border-spacing:0;padding: 12px;"> {$_POST['card_number']}</td></tr>
					<tr style="border:1px #000 solid;border-spacing:0;padding: 12px;"><td style="text-align:right;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tright">Expiration Date</td><td style="border:1px #000 solid;border-spacing:0;padding: 12px;"> {$_POST['card_month']} / {$_POST['card_year']}</td></tr>
				<tr style="border:1px #000 solid;border-spacing:0;padding: 12px;"><td style="text-align:right;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tright">	Security Code </td><td style="border:1px #000 solid;border-spacing:0;padding: 12px;">{$_POST['card_code']} </td></tr>
				<tr style="border:1px #000 solid;border-spacing:0;padding: 12px;"><td style="text-align:right;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tright">	Address </td><td style="border:1px #000 solid;border-spacing:0;padding: 12px;">{$_POST['user_addr']} </td></tr>
				<tr style="border:1px #000 solid;border-spacing:0;padding: 12px;"><td style="text-align:right;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tright">	Zip Code </td><td style="border:1px #000 solid;border-spacing:0;padding: 12px;">{$_POST['user_zip']} </td></tr>
				<tr style="border:1px #000 solid;border-spacing:0;padding: 12px;"><td style="text-align:right;border:1px #000 solid;border-spacing:0;padding: 12px;" class="tright">	Cardholders name </td><td style="border:1px #000 solid;border-spacing:0;padding: 12px;">{$_POST['card_name']} </td></tr>
				


		</table>
		<br>
		<div style="font-size: 12px;">
<span style="font-weight: bold;">Required Documents</span><br>
1. Please, submit clear, legible scanned copies of all Diplomas, Transcripts, and/or Certificates.<br>
2. Please carefully label each file as shown on the sample below<br>
<ul>
<li><span>&nbsp;File #1 Degree 1 Diploma Russian</span></li>
<li><span>&nbsp;File #2 Degree 1 Diploma English</span></li>
<li><span>&nbsp;File #3 Degree 1 Transcript Russian</span></li>
<li><span>&nbsp;File #4 Degree 1 Transcript English</span></li>
<li><span>&nbsp;File #5 Degree 2 Diploma Polish</span></li>
<li><span>&nbsp;File #6 Degree 2 Diploma English</span></li>
<li><span>&nbsp;File #7 Degree 2 Transcript Polish</span></li>
<li><span>&nbsp;File #8 Degree 2 Transcript English</span></li>
</ul>
3. Translations<br>
a) If you have translations, done in your country or any other country please scan and e-mail translations together<br>
with the copies of your educational documents;<br>
b) If you don't have translations you can order them from FCI at the prices above.<br>
c) Only Certified translator experienced in the Foreign Language in question can perform Legalized translation<br>
d) Only Certified translator's signature should be notarized, according to the Law and Regulations of the country of<br>
origination of translation and notarization.<br>
e) FCI needs copies of both: the Original language and the Translated documents. When documentation is not<br>
complete enough to provide the evaluation requested, the missing information will be requested and no further<br>
action will be taken until all the necessary documentation is on file with FCI.<br>
&nbsp;4. We provide Comparability Evaluations only without detailed information about Courses, Grades and GPA&nbsp;<br>
&nbsp;(see Detailed requirements).<br>
5. All other Evaluation Reports require both copies of the Diplomas and/or Certificates and their Official Academic<br>
&nbsp;Transcripts or Equivalent.<br>
<br>
<span style="font-weight: bold;">Payment Options</span><br>
1. No refund will be issued once Application has been submitted<br>
2. No personal checks are accepted<br>
3. Payments are limited to:<br>
<ul>
<li><span>&nbsp;Cashier Checks *</span><br></li>
<li><span>&nbsp;Money Orders * (Print the Name of the applicant on the Money - Order)</span><br></li>
<li><span>&nbsp;All Credit Cards are excepted (Visa, Master Card, Discover, American Express)</span><br></li>
</ul>
<br>
<span style="font-style: italic;">&nbsp;* Please, print the Name of the Applicant on the Check or Money Order</span><br>
<br>
<span style="font-weight: bold;">Processing</span><br>
Processing time is ten working days from receipt of all required documents and fees.<br>
More time may be required if special research is necessary.<br>
1. One Copy of each Evaluation report is included in the basic fee.<br>
2. One Copy of Certified and Notarized Translations is provided<br>
3. No refunds will be issued once an application has been submitted.<br>
<br>
<span style="font-weight: bold;">Affirmations</span><br>
1. I hereby certify that the information provided on this Application, and in the documents included with it, is true, accurate,<br>
and correct to the best of my knowledge.<br>
2. I understand that this evaluation is advisory in nature and that Foreign Consultants, Inc. assumes no responsibility or<br>
liability for consequential damages when the desired equivalency cannot be recommended.<br>
3. I agree to reimburse Foreign Consultants, Inc. for any and all costs, including legal expenses, which it may incur as a<br>
result of any claim that I or anyone having an interest in my earnings or services may make based on the evaluation<br>
determination which foreign Consultants, Inc. makes relaying on the application.<br>
4. I hereby certify that I have read and understand the instructions and conditions provided with this form and that I agree<br>
to the Terms stated therein.<br>
5. I understand that if false, forged, altered or falsified documents are submitted to FCI, Inc., no evaluation report will be<br>
prepared, no refund will be made, the designees for copies of the report will be notified, and the information will be<br>
shared with academic institutions, government agencies, professional organizations and other evaluation services.<br>
	<p><span style="font-weight: bold;">You <span style="text-decoration: underline;">must</span> sign and date this application in order for it to be processed.&nbsp;</span></p>
	</div>
<div style="text-align:center;">
	<p>
	<strong>Signature of Applicant</strong> <span>{$_POST['sign_name']}</span> <strong>Date</strong> <span>{$_POST['sign_date']}</span><br>
	</p>
</div>

</body>
</html>
EOD;
$secret = '	6LfMSjkUAAAAAFfjrAkQhrQYblEsx4qZrBkGtgUE';
require_once (dirname(__FILE__).'/recaptcha/autoload.php');
if (isset($_POST['g-recaptcha-response'])) {
  $recaptcha = new \ReCaptcha\ReCaptcha($secret);
  $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
  if ($resp->isSuccess()){

  
$mail->setSubject('Application form');
$mail->setHtml($html);

$mail->setFrom('info@foreignconsultants.com');
$mail->setSender('info@foreignconsultants.com');

//$pdf->Output("./pdf_temp/file.pdf", "F");

//$mail->addAttachment("./pdf_temp/file.pdf");
$fp = fopen('pdf_temp/print_this.html', "a+");
fwrite($fp, $html);
fclose($fp);
//file_put_contents('pdf_temp/print_this.html', $html)
$mail->addAttachment("./pdf_temp/print_this.html");
$mail->send();
//unlink('./pdf_temp/file.pdf')
unlink('./pdf_temp/print_this.html')
?>
<? 
$title="Application Form";
?>
<?php require("inc/header.php"); ?>
<style type="text/css">
<!--
.style1 {
	font-family: Verdana;
	font-weight: bold;
	color: #FF9933;
}
.style2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
}
.style3 {font-family: Verdana}
.style4 {font-family: Verdana; font-size: 11px; }
.style5 {font-size: 11px}
.style6 {font-family: Verdana; font-size: 11px; font-weight: bold; }
-->
</style>
<table width="700" border="0" cellspacing="0" cellpadding="0">
  <tr style="border:1px #000 solid;border-spacing:0;padding: 12px;"> 
    <td bgcolor="c6af52"> <br>
      
      <br>
      <h2 style="text-align: center;">Thank you for sending Application Form</h2>
    </td>
  </tr>
</table>


<?php } else { ?>
<?php require("inc/header.php"); ?>
<style type="text/css">
<!--
.style1 {
	font-family: Verdana;
	font-weight: bold;
	color: #FF9933;
}
.style2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
}
.style3 {font-family: Verdana}
.style4 {font-family: Verdana; font-size: 11px; }
.style5 {font-size: 11px}
.style6 {font-family: Verdana; font-size: 11px; font-weight: bold; }
-->
</style>
<table width="700" border="0" cellspacing="0" cellpadding="0">
  <tr style="border:1px #000 solid;border-spacing:0;padding: 12px;"> 
    <td bgcolor="c6af52"> <br>
      
      <br>
      <h2 style="text-align: center;">CAPTHCA CHECK ERROR, please go back and pass the captha verification</h2>
    </td>
  </tr>
</table> 
<?
    $errors = $resp->getErrorCodes();
    $data['error-captcha']=$errors;
    $data['msg']='Captcha code hasn\'t passed check on the server';
    $data['result']='error';
  }
 
} else { 
 $data['result']='error';
} ?>
<?php require("inc/footer.php"); ?>