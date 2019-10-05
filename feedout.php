<h3 align="center"><font color="872800">Thank you for submitting<br> Online Application to Foreign Consultants, Inc.</font></h3>
<!-- VIP: change YourEmail to your real email -->
<?php
// multiple recipients

$to = 'info@foreignconsultants.com';
$to = 'bsergej@businessmedia.ca';
$to = 'contact@foreignconsultants.com'; 
$to = 'serg.aka.sam@gmail.com';
$to = 'vcornell@businessmedia.ca';

//$to  = 'info@foreignconsultants.com' . ', '; // note the comma
			 
// subject
$subject = 'FCI Online Application';

$b = ' , ';
$address = $street . $b . $city . $b . $state . $b . $zip . $b . $country;
$bd = $month . $b . $day . $b . $year;

//Sex
if ($female == "y") {
$gen1 = "Female \n";
}
if ($male == "y") {
$gen2 = "Male \n";
}
$sex = $gen1 . $gen2;

//ever used FCI services
if ($yes == "y") {
$use1 = "Yes \n";
}
if ($no == "y") {
$use2 = "No \n";
}
$use = $use1 . $use2;

//purpose of evaluation
if ($under_1 == "y") {
$p1 = "Undergraduate (1st year), \n";
}
if ($under_tr == "y") {
$p2 = "Undergraduate (transfer), \n";
}
if ($grad == "y") {
$p3 = "Graduate, \n";
}
if ($empl == "y") {
$p4 = "Employment, \n";
}
if ($imm == "y") {
$p5 = "Immigration, \n";
}
if ($mil == "y") {
$p6 = "Military, \n";
}
if ($prof == "y") {
$p7 = "Professional LIcensing/Certification, \n";
}
$p_evln = $p1 . $p2 . $p3 . $p4 . $p5 . $p6 . $p7 . $p_other;

//purpose of evaluation
if ($o_athrz == "y") {
$o1 = "I authorized to release the evaluation report to another individual or institution named in this application \n";
}
$o= $o1;

//Evaluation Products and Services
if ($comp_ast == "y") {
$evals1 = "Comparability Evaluation of Associate Degree ($200), \n";
}
if ($comp_bach == "y") {
$evals2 = "Comparability Evaluation of Bachelor Degree ($200), \n";
}
if ($cbc_h == "y") {
$evals3 = "Course-by-Course Evaluation of High School Diploma ($200), \n";
}
if ($cbc_a == "y") {
$evals4 = "Course-by-Course Evaluation of Associate Degree ($330), \n";
}
if ($cbc_b == "y") {
$evals5 = "Course-by-Course Evaluation of Bachelor Degree ($330), \n";
}
if ($cbc_m == "y") {
$evals6 = "Course-by-Course Evaluation of Master Degree ($330), \n";
}
if ($cbc_p == "y") {
$evals7 = "Course-by-Course Evaluation of PhD ($500), \n";
}
if ($cbc_i == "y") {
$evals8 = "Course-by-Course Evaluation of Incomplete Education ($250), \n";
}
if ($ev_w == "y") {
$evals9 = "Evaluation of Education and Work Experience ($500), \n";
}
if ($subj_a == "y") {
$evals10 = "Subject Analysis ($250), \n";
}
if ($cat_m == "y") {
$evals11 = "Catalog match ($300), \n";
}
if ($comp_p == "y") {
$evals12 = "Comparable Program ($150), \n";
}
$evals = $evals1 . $evals2 . $evals3 . $evals4 . $evals5 . $evals6 . $evals7 . $evals8 . $evals9 . $evals10 . $evals11 . $evals12;

//Additional Charges
if ($exdipl == "y") {
$addc1 = "Every other Diploma with or without Transcript ($100), \n";
}
if ($excert == "y") {
$addc2 = "Every other Certificate ($50), \n";
}
if ($exprog == "y") {
$addc3 = "Every other Comparable Program Research ($100), \n";
}
if ($onerush == "y") {
$addc4 = "1-day Rush Service ($100), \n";
}
if ($threerush == "y") {
$addc5 = "3-day Rush Service ($75), \n";
}
if ($fiverush == "y") {
$addc6 = "5-day Rush Service ($50), \n";
}
if ($excopy == "y") {
$addc7 = "Extra copies (each) ($30), \n";
}
if ($shipus == "y") {
$addc8 = "Express shipment within USA ($30), \n";
}
if ($shipint == "y") {
$addc9 = "International express shipment ($50) \n";
}
$addc = $addc1 . $addc2 . $addc3 . $addc4 . $addc5 . $addc6 . $addc7 . $addc8 . $addc9;

// message
//------------Name------------------------
$message = '
<html><body><strong><font size="+2" face="Geneva, Arial, Helvetica, sans-serif"><font color="#6A0000" size="+3">Online 
Application for</font><font color="#6A0000"><br>Evaluation of Foreign Educational Credentials</font></font><font size="+1" face="Geneva, Arial, Helvetica, sans-serif"></font></strong><br><hr><strong><font size="+1" face="Geneva, Arial, Helvetica, sans-serif"><font color="872800">Name</font></font></strong><br></body></html>' . "\r\n" . '<html><body><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;First Name:&nbsp;&nbsp;</font></strong></body></html>' . " $fname\r\n" . '<html><body><br><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Last Name:&nbsp;&nbsp;</font></strong></body></html>' . " $lname\r\n" . '<html><body><br><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Middle Name:&nbsp;&nbsp;&nbsp;</font></strong></body></html>' . "$mname\r\n" . '<html><body><br><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Other Names:&nbsp;&nbsp;</font></strong>&nbsp;</body></html>' . "$oname\r\n" . "\r\n";

//-------- Contact Information -----------
$message .= '
<html>
<body><br><hr>
<strong><font color="872800" size="+1" face="Geneva, Arial, Helvetica, sans-serif">Contact 
Information</font></strong><br><br>
</body>
</html>
' . "\r\n" . '<html><body><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Address:&nbsp;&nbsp;</font></strong></body></html>' . "$address\r\n" . '<html><body><br><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Telephone Number:&nbsp;&nbsp;</font></strong></body></html>' . "$tel\r\n" . '<html><body><br><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fax Number:&nbsp;&nbsp;</font></strong></body></html>' . "$fax\r\n" . '<html><body><br><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cellular Number:&nbsp;&nbsp;</font></strong></body></html>' . "$cell\r\n" . '<html><body><br><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-mail:&nbsp;&nbsp;</font></strong></body></html>' . "$visitormail\r\n";

//---------Personal Information ----------
$message .= '
<html>
<body><br><hr>
<strong><font color="872800" size="+1" face="Geneva, Arial, Helvetica, sans-serif">Personal 
Information</font></strong></body><br></html>
' . "\r\n" . '<html><body><br><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Birth Date:&nbsp;&nbsp;</font></strong></body></html>' . "$bd\r\n" . '<html><body><br><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sex:&nbsp;&nbsp;&nbsp;</font></strong></body></html>' . "$sex\r\n" . '<html><body><br><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Social Security:&nbsp;&nbsp;</font></strong></body></html>' . "$ss\r\n";

//---------Evaluation Information ----------
$message .= '
<html>
<body><br><hr>
<strong><font color="872800" size="+1" face="Geneva, Arial, Helvetica, sans-serif">Evaluation 
Information</font></strong></body><br></html>
' . "\r\n" . '<html><body><br><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Have you ever used FCI services before? </font></strong></body></html>' . "$use\r\n" . '<html><body><br><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">If Yes, FCI Reference Number: </font></strong></body></html>' . "$rfn\r\n" . '<html><body><br><br><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Purpose of &nbsp;Evaluation: </font></strong></body></html>' . "$p_evln , \r\n" . "State: $p_state\r\n" . ", Profession: $p_prof\r\n" . '<html><body><br><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Products and Services:  </font></strong><br></body></html>' . " $evals \r\n";

//---------Licensure Services ----------
$message .= '
<html>
<body><br><hr>
<strong><font color="872800" size="+1" face="Geneva, Arial, Helvetica, sans-serif">Licensure Services</font></strong></body><br></html>
' . "\r\n" . '<html><body><br><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">License for the Profession of:  </font></strong></body></html>' . " $license\r\n" . '<html><body><br><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State of: </font></strong></body></html>' . " $l_state\r\n" . '<html><body><br><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FCI Quoted Price: $</font></strong></body></html>' . " $l_quote (as agreed with FCI consultant) \r\n";

//---------Additional Charges ----------
$message .= '
<html>
<body><br><br><hr>
<strong><font color="872800" size="+1" face="Geneva, Arial, Helvetica, sans-serif">Additional Charges</font></strong></body><br></html>
' . "\r\n" . '<html><body><br><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Additional charges needed:  </font></strong></body></html>' . " $addc\r\n";

//---------Total Charges ----------
$t_total = $t_eval + $t_trans + $t_licens + $t_add + $fciother;

$message .= '
<html>
<body><br><hr>
<strong><font color="872800" size="+1" face="Geneva, Arial, Helvetica, sans-serif">Total Charges</font></strong></body><br></html>
' . "\r\n" . '<html><body><br><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Evaluation: $  </font></strong></body></html>' . " $t_eval\r\n" . '<html><body><br><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Translation: $  </font></strong></body></html>' . " $t_trans\r\n" . '<html><body><br><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Licensure: $  </font></strong></body></html>' . " $t_licens\r\n" . '<html><body><br><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Additional Charges: $  </font></strong></body></html>' . " $t_add\r\n" . '<html><body><br><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Other (agreed with FCI): $  </font></strong></body></html>' . " $fciother\r\n" . '<html><body><br><br><strong><font size="3" face="Geneva, Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total Amount Due: $  </font></strong></body></html>' . " $t_total\r\n";

//-------- Educational Institutions -------
$message .= '
<html>
<body><br><hr>
<strong><font color="872800" size="+1" face="Geneva, Arial, Helvetica, sans-serif">Educational Institutions</font></strong></body><br></html>
' . "\r\n" . '<html><body><br><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;Educational Institution #1  </font></strong></body></html>' . '<html><body><br><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name of School:  </font></strong></body></html>' . " $e_n\r\n" . '<html><body><br><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City & Country:  </font></strong></body></html>' . " $e_c\r\n" . '<html><body><br><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Diploma/Certificate Earned:  </font></strong></body></html>' . " $e_d\r\n" . '<html><body><br><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Month/Year Entered:  </font></strong></body></html>' . " $e_e\r\n" . '<html><body><br><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Month/Year Completed:  </font></strong></body></html>' . " $e_c\r\n";

$message .= '<html><body><br><br><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;Educational Institution #2  </font></strong></body></html>' . '<html><body><br><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name of School:  </font></strong></body></html>' . " $e_n2\r\n" . '<html><body><br><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City & Country:  </font></strong></body></html>' . " $e_c2\r\n" . '<html><body><br><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Diploma/Certificate Earned:  </font></strong></body></html>' . " $e_d2\r\n" . '<html><body><br><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Month/Year Entered:  </font></strong></body></html>' . " $e_e2\r\n" . '<html><body><br><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Month/Year Completed:  </font></strong></body></html>' . " $e_c2\r\n";

$message .= '<html><body><br><br><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;Educational Institution #3  </font></strong></body></html>' . '<html><body><br><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name of School:  </font></strong></body></html>' . " $e_n3\r\n" . '<html><body><br><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City & Country:  </font></strong></body></html>' . " $e_c3\r\n" . '<html><body><br><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Diploma/Certificate Earned:  </font></strong></body></html>' . " $e_d3\r\n" . '<html><body><br><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Month/Year Entered:  </font></strong></body></html>' . " $e_e3\r\n" . '<html><body><br><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Month/Year Completed:  </font></strong></body></html>' . " $e_c3\r\n";

//-------- Other party submission ---------
$o_address = $o_to . $b . $o_att . $b . $o_street . $b . $o_city . $b . $o_state . $b . $o_zip . $b . $o_country;

$message .= '
<html>
<body><br><hr>
<strong><font color="872800" size="+1" face="Geneva, Arial, Helvetica, sans-serif">Other Party Submission</font></strong><br><br>
</body>
</html>
' . "\r\n" . '<html><body><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Address:&nbsp;&nbsp;</font></strong></body></html>' . "$o_address\r\n" . '<html><body><br><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Authorization:&nbsp;&nbsp;</font></strong></body></html>' . "$o\r\n";

//---------Additional Comments ----------
$message .= '
<html>
<body><br><hr>
<strong><font color="872800" size="+1" face="Geneva, Arial, Helvetica, sans-serif">Additional Comments</font></strong></body><br></html>
' . "\r\n" . " $feedback\r\n";

//---------CUSTOMER AFFIRMATIONS ----------
$message .= '
<html>
<body><br><br><hr>
<strong><font color="872800" size="+1" face="Geneva, Arial, Helvetica, sans-serif">CUSTOMER AFFIRMATIONS</font></strong></body><br></html>
' . "\r\n" . '<html>
<body>
<ol>
  <li><font size="2"><strong>REQUIRED DOCUMENTS</strong> <br>
    A. Please submit clear, legible copies of all Diplomas, Transcripts, and/or 
    Certificates.<br>
    B. If the documents are not in English: <br>
    1) If you have translations, done in your country or any other country please 
    fax together with the copies of your educational documents <br>
    2) If you don,t have translations you can order them from FCI at the prices 
    listed above.<br>
    C. Only Certified translator experienced in the Foreign Language in question 
    can perform Legalized translation.<br>
    D. Certified translator,s signature should be notarized, according to the 
    Law and Regulations of the country of origination of translation and notarization.<br>
    E. FCI needs copies of both: the Original language and the Translated documents. 
    When documentation is not complete enough to provide the evaluation requested, 
    the missing information will be requested and no further action will be taken 
    until all the necessary documentation is on file with FCI.<br>
    F. We can provide only Comparability Evaluations without detailed information 
    about courses and grades (see detailed requirements)<br>
    G. All other Evaluation Reports require both copies of the Diplomas and/or 
    Certificates and their Official Academic Transcripts or <br>
    Equivalent. For more details on required Documentation go to http://www.foreignconsultants.com/required_documentation.pdf 
    <br><br>
    </font></li>
  <li><font size="2"><strong>PAYMENT OPTIONS</strong><br>
    A. No refund will be issued once application has been submitted.<br>
    B. No personal checks are accepted.<br>
    C. Payments are limited to: Cashier Checks*, Money Orders*, All Credit Cards 
    are excepted (Visa, Master Card, Discover, American Express)<br><br>
    </font></li>
  <li><font size="2"><strong>PROCESSION</strong><br>
    A. Processing time is ten working days from receipt of all required documents 
    and fees. More time may be required if special research is necessary<br>
    B. Two copies of each evaluation report are included in the basic fee.<br>
    C. Two copies of Certified Translations will be provided, if ordered from 
    FCI.<br>
    D. No refunds will be issued once an application has been submitted.<br>
    E. Fees are subject to change without notice.<br><br>
    </font></li>
  <li><font size="2"><strong>AFFIRMATIONS</strong><br>
    I hereby certify that the information provided on this Application, and in 
    the documents included, is true, accurate, and correct to the best of my knowledge. 
    I understood that this evaluation is advisory in nature and that Foreign Consultants, 
    Inc. assumes no responsibility or liability for consequential damages when 
    the desired equivalency cannot be recommended. I agree to reimburse Foreign 
    Consultants, Inc. for any and all costs, including legal expenses, which it 
    may incur as a result of any claim that I or anyone having an interest in 
    my earnings or services may make based on the evaluation determination which 
    foreign Consultants, Inc. makes relaying on the application. I hereby certify 
    that I have read and understand the instructions and conditions provided with 
    this form and that I agree to the Terms stated therein. I understood that 
    if false, forged, altered or falsified documents are submitted to FCI, Inc., 
    no evaluation report will be prepared, no refund will be made, the designees 
    for copies of the report will be notified, and the information will be shared 
    with academic institutions, government agencies, professional organizations 
    and other evaluation services. </font></li>
</ol>
</body>
</html>';
/*
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= "From: $visitormail\r\n";*/

$headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=utf-8\n";
    $headers .= "From: '$fname $lname' <$email> \n";








// Mail it
mail($to, $subject, $message, $headers);
?> 

<p align="left"><?php echo $screenout ?>

</p>

