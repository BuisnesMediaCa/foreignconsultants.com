<?php

require_once 'mail.php';
$mail = new Mail();
$mail->setTo('lulzsecer@gmail.com');

$html = <<<EOD
<html>
<head>
<style>@media print{textarea{resize:none}input[type="text"],textarea{border:none}}.twrapper{width:80%;margin:0 auto}table,tr,td{border:1px #000 solid;border-spacing:0}table{width:100%}.tfirst{width:35%}input[type="text"]{width:45%;margin-bottom:5px;margin-top:5px}td span.tname{font-weight:bolder}td div{display:inline}td div p{padding-left:14px}td{padding:12px}#nope{display:none}.error{border:1px red solid}.rpice{float:right;margin-right:10em}.price input[type="text"]{width:54px}input.date{width:54px}input.datef{width:90px}table table{border:none!important;margin:0!important;padding:0!important}table table textarea{width:100%;padding:0;margin:0}table table td{padding:0;margin:0;width:20%;text-align:center;border:none}.middle{margin:0 auto;text-align:center}.quote{background-color:#dedede;padding:6px;width:85%;text-align:center;margin:0 auto;border:1px #000 solid}</style>
</head>
<body>
	
<div class="print_this">
	<div class="twrapper">
		<h1 class="middle">Application for Evaluation of Foreign Educational Credentials</h1>
		<table>
			<tr>
				<td class="tfirst"><div><span class="tname">1. Name</span><p>Type your full name.</p></div></td>
				<td>
					<span>Last (Family) Name: {$_POST['last_name']}</span><br> 
					<span>First Name: {$_POST['first_name']}</span><br>
					<span>Middle Name: {$_POST['middle_name']}</span><br>
				</td>
			</tr>
			<tr>
				<td class="tfirst"><div><span class="tname">2. Other names</span><p>List alternate names appearing on your documents, if applicable.</p></div></td>
				<td>
					<span>All Other Names used: {$_POST['other_name']}</span><br>
					
				</td>
			</tr>
			<tr>
				<td class="tfirst"><div><span class="tname">3. Mailing Address Phone Fax E-mail</span><p>Include your direct (immediate) contact information.</p></div></td>
				<td>
					<span>Street Address: {$_POST['street_addr']}</span><br> 
					<span>City: {$_POST['city']}</span><br>
					<span>Postal Zip Code: {$_POST['zip']}</span><br>
					<span>State/Province: {$_POST['state']}</span><br>
					<span>Country: {$_POST['country']}</span><br>
					<span>Telephone Number: {$_POST['phone']}</span><br>
					<span>Cellular Number: {$_POST['cell']}</span><br>
					<span>E-mail Address: {$_POST['email']}</span><br>
				</td>
			</tr>
			<tr>
				<td class="tfirst"><div><span class="tname">4. Have You used FCI service before?</span><p></p></div></td>
				<td>
					{$_POST['used_fci']}<br />
					<p><span>{$_POST['fci_number']}</span><br>					
				</td>
			</tr>
			<tr>
				<td class="tfirst"><div><span class="tname">5. Birth Date (month, day, year)</span><p></p></div></td>
				<td>					
					<span>{$_POST['month']}/{$_POST['day']}/{$_POST['year']}</span><br>
				</td>
			</tr>
			<tr>
				<td class="tfirst"><div><span class="tname">6. Sex</span><p></p></div></td>
				<td>					
					{$_POST['sex']}
				</td>
			</tr>
			<tr>
				<td class="tfirst"><div><span class="tname">7. Purpose of Evaluation </span><p>Check down the purpose of your evaluation</p></div></td>
				<td>					
					{$_POST['purpose']} <br/>
					
					<span>State: {$_POST['purpose_state']}</span><br> 
					<span>Profession: {$_POST['purpose_profession']}</span><br>
				</td>
			</tr>
			<tr>
				<td class="tfirst"><div><span class="tname">8. Evaluation Products and Services </span><p>Check the type of evaluation needed.</p></div></td>
				<td>					
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
			<tr>
				<td class="tfirst"><div><span class="tname">9. Certified Translation Services </span><p></p></div></td>
				<td>					
					Amount of pages to Translate from any Language into English and from English into any Language: <span class="price"><span>{$_POST['amount_pages']}</span><br/>
					Price per 1 page $60 : <span class="price"><span>{$_POST['price_page']}</span><br/>
					Total Translation Price: <span class="price"><span>{$_POST['total_price']}</span><br/>
				</td>
			</tr>
			<tr>
				<td class="tfirst"><div><span class="tname">10. Extra set of the original Evaluation Report  </span><p></p></div></td>
				<td>					
					{$_POST['eval_10_0']}
					{$_POST['eval_10_1']}
					{$_POST['eval_10_2']}
					{$_POST['eval_10_3']}

				</td>
			</tr>
			<tr>
				<td class="tfirst"><div><span class="tname">11. Extra set of the original Certified and Notarized Translation  </span><p></p></div></td>
				<td>					
					{$_POST['eval_11_0']}
					{$_POST['eval_11_1']}
					{$_POST['eval_11_2']}
				</td>
			</tr>
			<tr>
				<td class="tfirst"><div><span class="tname">12. Rush Services  </span><p></p></div></td>
				<td>					
					{$_POST['eval_12']}		
				</td>
			</tr>
			<tr>
				<td class="tfirst"><div><span class="tname">13. Rush Services  </span><p></p></div></td>
				<td>					
					{$_POST['eval_13']}		
				</td>
			</tr>
			<tr>
				<td class="tfirst"><div><span class="tname">14. Total Charges  </span><p></p></div></td>
				<td>					
					<strong>Total Charges per Order:</strong> <span class="price" ><span>{$_POST['total']}</span>
				</td>
			</tr>
			<tr>
				<td class="tfirst"><div><span class="tname">15. Educational Institutions  </span><p>List All Educational Institutions Attended starting from: <strong>High School or Institution of Higher Education</strong><br/>Consult our Specialists which Educational documents you need to evaluate to achieve your goal</p></div></td>
				<td>					
					<table>
						<tr>
							<td><strong>Name(s) of School(s) Attended</strong></td>							
							<td><strong>City &amp; Country</strong></td>							
							<td><strong>Diploma/Certificate Earned (if any)</strong></td>							
							<td><strong>Month/Year Started</strong></td>							
							<td><strong>Month/Year Completed</strong></td>							
						</tr>
						<tr>
							<td>{$_POST['school']}</td>					
							<td>{$_POST['city_country']}</td>					
							<td>{$_POST['certificate']}</td>					
							<td>{$_POST['date_started']}</td>					
							<td>{$_POST['date_completed']}</td>					
						</tr>
											
					</table>
				</td>
			</tr>
			<tr>
				<td class="tfirst"><div><span class="tname">16. Other partysubmission  </span><p>Individual / Institution / Organization to whom the evaluation should be sent. </p></div></td>
				<td>					
					<span>Individual/Institution/Organization: {$_POST['other_org']}</span><br>
					<span>Attention (Name/Department/Suite/Room): {$_POST['other_attention']}</span><br>
					<span>Street Address/Post Office Box Number: {$_POST['other_address']}</span><br>
					<span>Street Address - Continued: {$_POST['other_streer']}</span><br>
					<span>City: {$_POST['other_city']}</span><br>
					<span>State/Province: {$_POST['other_state']}</span><br>
					<span>Postal Zip Code: {$_POST['other_zip']}</span><br>
					<span>Country: {$_POST['other_country']}</span><br>
					<p></p>
					<strong>Authorization:</strong><br><i>I authorize to release of the evaluation report to another individual or institution named in this application.</i> 
					<p>Signature of applicant <span>{$_POST['other_sign']}</p>
				</td>
			</tr>
			<tr>
				<td class="tfirst"><div><span class="tname">17. Your Credit Card information   </span><p></p></div></td>
				<td>
					Card type: {$_POST['card_type']}<br />					
					Card Number {$_POST['card_number']}<br/>
					Expiration Date {$_POST['card_month']} / {$_POST['card_year']}<br> 
					Security Code {$_POST['card_code']} 

				</td>
			</tr>
		</table>
<p><span style="font-weight: bold;">Required Documents</span></p>
<p>1. Please, submit clear, legible scanned copies of all Diplomas, Transcripts, and/or Certificates.</p>
<p>2. Please carefully label each file as shown on the sample below</p>
<p><ul>
<li><span>&nbsp;File #1 Degree 1 Diploma Russian</span><br></li>
<li><span>&nbsp;File #2 Degree 1 Diploma English</span><br></li>
<li><span>&nbsp;File #3 Degree 1 Transcript Russian</span><br></li>
<li><span>&nbsp;File #4 Degree 1 Transcript English</span><br></li>
<li><span>&nbsp;File #5 Degree 2 Diploma Polish</span><br></li>
<li><span>&nbsp;File #6 Degree 2 Diploma English</span><br></li>
<li><span>&nbsp;File #7 Degree 2 Transcript Polish</span><br></li>
<li><span>&nbsp;File #8 Degree 2 Transcript English</span><br></li>
</ul>
</p>
<p>3. Translations</p>
<p>a) If you have translations, done in your country or any other country please scan and e-mail translations together</p>
<p>with the copies of your educational documents;</p>
<p>b) If you don't have translations you can order them from FCI at the prices above.</p>
<p>c) Only Certified translator experienced in the Foreign Language in question can perform Legalized translation</p>
<p>d) Only Certified translator's signature should be notarized, according to the Law and Regulations of the country of</p>
<p>origination of translation and notarization.</p>
<p>e) FCI needs copies of both: the Original language and the Translated documents. When documentation is not</p>
<p>complete enough to provide the evaluation requested, the missing information will be requested and no further</p>
<p>action will be taken until all the necessary documentation is on file with FCI.</p>
<p>&nbsp;4. We provide Comparability Evaluations only without detailed information about Courses, Grades and GPA&nbsp;</p>
<p>&nbsp;(see Detailed requirements).</p>
<p>5. All other Evaluation Reports require both copies of the Diplomas and/or Certificates and their Official Academic</p>
<p>&nbsp;Transcripts or Equivalent.</p>
<p><br></p>
<p><span style="font-weight: bold;">Payment Options</span></p>
<p>1. No refund will be issued once Application has been submitted</p>
<p>2. No personal checks are accepted</p>
<p>3. Payments are limited to:</p>
<p><ul>
<li><span>&nbsp;Cashier Checks *</span><br></li>
<li><span>&nbsp;Money Orders * (Print the Name of the applicant on the Money - Order)</span><br></li>
<li><span>&nbsp;All Credit Cards are excepted (Visa, Master Card, Discover, American Express)</span><br></li>
</ul>
</p>
<p><span style="font-style: italic;">&nbsp;* Please, print the Name of the Applicant on the Check or Money Order</span></p>
<p><br></p>
<p><span style="font-weight: bold;">Processing</span></p>
<p>Processing time is ten working days from receipt of all required documents and fees.</p>
<p>More time may be required if special research is necessary.</p>
<p>1. One Copy of each Evaluation report is included in the basic fee.</p>
<p>2. One Copy of Certified and Notarized Translations is provided</p>
<p>3. No refunds will be issued once an application has been submitted.</p>
<p><br></p>
<p><span style="font-weight: bold;">Affirmations</span></p>
<p>1. I hereby certify that the information provided on this Application, and in the documents included with it, is true, accurate,</p>
<p>and correct to the best of my knowledge.</p>
<p>2. I understand that this evaluation is advisory in nature and that Foreign Consultants, Inc. assumes no responsibility or</p>
<p>liability for consequential damages when the desired equivalency cannot be recommended.</p>
<p>3. I agree to reimburse Foreign Consultants, Inc. for any and all costs, including legal expenses, which it may incur as a</p>
<p>result of any claim that I or anyone having an interest in my earnings or services may make based on the evaluation</p>
<p>determination which foreign Consultants, Inc. makes relaying on the application.</p>
<p>4. I hereby certify that I have read and understand the instructions and conditions provided with this form and that I agree</p>
<p>to the Terms stated therein.</p>
<p>5. I understand that if false, forged, altered or falsified documents are submitted to FCI, Inc., no evaluation report will be</p>
<p>prepared, no refund will be made, the designees for copies of the report will be notified, and the information will be</p>
<p>shared with academic institutions, government agencies, professional organizations and other evaluation services.</p>
<p><br></p>
<p><br></p><p><br></p><p><br></p>
	<div class="qwrap">
		<div class="quote">
			Please E-mail or Mail this Application and all the enclosures to:<br>
			Foreign Consultants, Inc. 11206 A Osage Circle<br/>
			Westminster, Colorado, 80234 USA<br/>
			Email: lulzsecer@gmail.com<br/>
			Phone: 303-5850978</div>
		</div>
	</div>
</div>
</body>
</html>
EOD;

/*$mail->setSubject('Application form');
$mail->setHtml($html);

$mail->setFrom('lulzsecer@gmail.com');
$mail->setSender('lulzsecer@gmail.com');


require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

$output = $dompdf->output();
file_put_contents("./pdf_temp/file.pdf", $output);
$mail->addAttachment("./pdf_temp/file.pdf");
/*$mail->send();*/
/*unlink('./pdf_temp/file.pdf')*/

?>
<?php

$json = json_decode(file_get_contents("fpdf/pdf_form2.json"));

require("fpdf/fpdf.php");
require("FPDI/fpdi.php");

$pdfSrcPath = "fpdf/app2.pdf";

$pdf = new FPDI("P", //L=>Landscape / P=>Portrait
  "pt" /* point */ );

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

      // Draw blue rect at bounds
      /*$pdf->SetDrawColor(0, 0, 255);
      $pdf->SetLineWidth(0.2835);
      $pdf->Rect($x, $y, $w, $h);*/

      if ( ($area->type == "checkbox" && isset($_POST[$area->name])) || ($area->type == "radio" && $_POST[$area->name] == $area->value) ) {
        $pdf->SetDrawColor(0, 0, 0);
        $pdf->SetLineWidth(2.0);
        $pdf->Line($x, $y, $x + $w, $y + $h);
        $pdf->Line($x, $y + $h, $x + $w, $y);
      } else if ($area->type == "text") {
      	$pdf->SetDrawColor(0, 0 , 0);
        // 'Free' text
        /*$pdf->SetLineWidth(1.0); // border*/

        $iw       = $w - 2 /* 2 x 1 */ ;
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
        
        /*$pdf->Write(5, "This is just a simple text");   */ 
          
      }
    }
  }
}

$pdf->Output();
?>