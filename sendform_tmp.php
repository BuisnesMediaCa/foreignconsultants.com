<? 
$title="Translation Services";
?>
<?php require("inc/header.php"); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<style type="text/css">
  @media print {
  .twrapper textarea {resize: none;}
  .twrapper input[type="text"], textarea {
      border: none;
      color: #000;
  } 
  .twrapper .nprint {display: none;}
}
input.date {
    width: 30% !important;
}
.twrapper select {
    width: 30%;
}
.twrapper td {
    padding: 12px;
    vertical-align: top;
}
  .twrapper {width: 80%;margin: 0 auto;}
  .twrapper  table, .twrapper tr, .twrapper td {border: 1px #000 solid !important;border-spacing: 0;}
  .twrapper table{width: 100%;}
  .tfirst{width: 35%;}
  .twrapper input[type="text"] {
      width: 45%;
      margin-bottom: 5px;
      margin-top: 5px;
  }
  .twrapper td span.tname {font-weight: bolder;}
  .twrapper td div {display: inline;}
  .twrapper td div p {
      padding-left: 14px;
  }
  .twrapper td input[type="text"] {
    width: 100%;
    height: 25px;
  }
  .twrapper td {
      padding: 12px;
  }
  .twrapper #nope {display: none;}
  .twrapper .error { border: 1px #ff0000 solid;}
  .twrapper .rpice{float: right; margin-right: 10em;}
  .twrapper .price input[type="text"] {    width: 54px;}
  .twrapper input.date { width: 54px;}
  .twrapper input.datef { width: 90px;}
  .twrapper table table {
      border: none !important;
      margin: 0 !important;
      padding: 0 !important;
  }

  .twrapper table table textarea {
      width: 100%;
      padding: 0;
      margin: 0;
  }

  .twrapper table table td {
      padding: 0;
      margin: 0;
      width: 20%;
      text-align: center;
  }

  .twrapper table table td {
      border: none;
  }
  .middle {
    margin: 0 auto;
    text-align: center;
    font-size: 15px;
    margin-bottom: 10px;
}
  .quote {
      background-color: #dedede;
      padding: 6px;
      width: 85%;
      text-align: center;
      margin: 0 auto;
      border: 1px #000 solid;
  }
  tbody td {
    border: none;
}

tbody tr {
    border: none;
}
input.nprint {
    text-align: center;
    margin-top: 23px;
    font-size: 25px;
    background-color: #FFF3C1;
    color: #B70202;
    border: none;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
$('#sender').submit(function(){
  var print = true;
      $('input.req').each(function(){   
        $(this).removeClass('error');
        if($(this).val() == ""){
          print = false;    
          $(this).addClass('error');
        }
      });
      if(!print){
              $("body, html").animate({
            scrollTop: 0
          }, 800);
          alert('Please fill required fields.');
          return false;
      }
});
});
</script>
<table width="700" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td bgcolor="c6af52"> <br>
      
  <div class="print_this">
  <form method="post" action="./file_pdf.php" id="sender">
    <div class="twrapper">
      <h1 class="middle">Application for Evaluation of Foreign Educational Credentials</h1>
      <table>
        <tr>
          <td class="tfirst"><div><span class="tname">1. Name</span><p>Type your full name.</p></div></td>
          <td>
            <label><strong>Last (Family) Name:</strong></label> <span><input type="text" name="last_name" class="req" value="" placeholder="Last (Family) Name"/></span><br/> 
            <label><strong>First Name:</strong></label> <span><input type="text" name="first_name" value="" placeholder="First Name"/></span><br/>
            <label><strong>Middle Name:</strong></label> <span><input type="text" name="middle_name" value="" placeholder="Middle Name"/></span><br/>
          </td>
        </tr>
        <tr>
          <td class="tfirst"><div><span class="tname">2. Other names</span><p>List alternate names appearing on your documents, if applicable.</p></div></td>
          <td>
            <label><strong>All Other Names used:</strong></label> <span><input type="text" name="other_name" value="" placeholder="All Other Names used"/></span><br/>
            
          </td>
        </tr>
        <tr>
          <td class="tfirst"><div><span class="tname">3. Mailing Address Phone Fax E-mail</span><p>Include your direct (immediate) contact information.</p></div></td>
          <td>
            <label><strong>Street Address:</strong></label> <span><input type="text" name="street_addr" value="" placeholder="Street Address"/></span><br/> 
            <label><strong>City:</strong></label> <span><input type="text" name="city" value="" placeholder="City"/></span><br/>
            <label><strong>Postal Zip Code:</strong></label> <span><input type="text" name="zip" value="" placeholder="Postal Zip Code"/></span><br/>
            <label><strong>State/Province:</strong></label> <span><input type="text" name="state" value="" placeholder="State/Province"/></span><br/>
            <label><strong>Country:</strong></label> <span><input type="text" name="country" value="" placeholder="Country"/></span><br/>
            <label><strong>Telephone Number:</strong></label> <span><input type="text" name="phone" class="req" value="" placeholder="Telephone Number"/></span><br/>
            <label><strong>Cellular Number:</strong></label> <span><input type="text" name="cell" value="" placeholder="Cellular Number"/></span><br/>
            <label><strong>E-mail Address (example: name@gmail.com):</strong></label> <span><input type="text" class="req" name="email" value="" placeholder="E-mail Address (example: name@gmail.com)"/></span><br/>
          </td>
        </tr>
        <tr>
          <td class="tfirst"><div><span class="tname">4. Have You used FCI service before?</span><p></p></div></td>
          <td>
            <input type="radio" name="used_fci" onclick="$('#nope').show();" value="Yes"/> Yes <input type="radio" checked="true" onclick="$('#nope').hide();" name="used_fci" value="No"/> No
            <p><span><input type="text" name="fci_number" value="" placeholder="FCI Reference Number" id="nope"/></p></span>          
          </td>
        </tr>
        <tr>
          <td class="tfirst"><div><span class="tname">5. Birth Date (month, day, year)</span><p></p></div></td>
          <td>          
            <span>
              <select name="month">
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
              </select>
            </span> 
            <span>
              <select name="day">
                <?php for($dayi=1; $dayi<=31; $dayi++){?>
                <option value="<?=$dayi?>"><?=$dayi?></option>
              <?php } ?>
              </select>
            </span>
            <span>
              <select name="year">
                <?php for($yeari=date("Y",time()); $yeari>1940; $yeari--){?>
                  <option value="<?=$yeari?>"><?=$yeari?></option>
                <?php } ?>
              </select>
            </span>  
          </td>
        </tr>
        <tr>
          <td class="tfirst"><div><span class="tname">6. Sex</span><p></p></div></td>
          <td>          
            <input type="radio" checked="true" name="sex" value="Female"/> Female <input type="radio" name="sex" value="Male"/> Male
          </td>
        </tr>
        <tr>
          <td class="tfirst"><div><span class="tname">7. Purpose of Evaluation </span><p>Check down the purpose of your evaluation</p></div></td>
          <td>          
            <input type="radio" checked="true" name="purpose" value="Undergraduate (1st year)"/> Undergraduate (1st year) <input type="radio" name="purpose" value="Undergraduate (transfer)"/> Undergraduate (transfer) <input type="radio" name="purpose" value="Graduate"/> Graduate <input type="radio" name="purpose" value="Employment"/> Employment <input type="radio" name="purpose" value="Military"/> Military <input type="radio" name="purpose" value="Immigration"/> Immigration <input type="radio" name="purpose" value="Other"/> Other <br/>
            <input type="radio" name="purpose" value="Professional Licensing/Certification"/> Professional Licensing/Certification:<br/> 
            <label><strong>State:</strong></label> <span><input type="text" name="purpose_state" value="" placeholder="State"/></span><br/> 
            <label><strong>Profession:</strong></label> <span><input type="text" name="purpose_profession" value="" placeholder="Profession"/></span><br/>
          </td>
        </tr>
        <tr>
          <td class="tfirst"><div><span class="tname">8. Evaluation Products and Services </span><p>Check the type of evaluation needed.</p></div></td>
          <td>          
            <input type="checkbox" name="eval_8_0" value="Comparability Evaluation (without Courses, Grades, GPA) $100"/> Comparability Evaluation (without Courses, Grades, GPA) <span class="rpice">$100</span><br/>
            <input type="checkbox" name="eval_8_1" value="Course-by-Course Evaluation of High School Education $160"/> Course-by-Course Evaluation of High School Education <span class="rpice">$160</span><br/>
            <input type="checkbox" name="eval_8_2" value="Course-by-Course Evaluation of One degree (earned in the same school) $180"/> Course-by-Course Evaluation of One degree (earned in the same school) <span class="rpice">$180</span><br/>
            <input type="checkbox" name="eval_8_3" value="Course-by-Course Evaluation of Every Other Degree $100"/> Course-by-Course Evaluation of Every Other Degree <span class="rpice">$100</span><br/>
            <input type="checkbox" name="eval_8_4" value="Every additional School per Degree $30"/> Every additional School per Degree (*if a Degree was earned in more than one School add $30 per School) <span class="rpice">$30</span><br/>
            <input type="checkbox" name="eval_8_5" value="Evaluation of Education and Work Experience for USCIS $500"/> Evaluation of Education and Work Experience for USCIS <span class="rpice">$500</span><br/>
            <input type="checkbox" name="eval_8_6" value="Insertion into Evaluation each Certificate without Transcript $45"/> Insertion into Evaluation each Certificate without Transcript <span class="rpice">$45</span><br/>
            <input type="checkbox" name="eval_8_7" value="Catalog match (per subject) $30"/> Catalog match (per subject) <span class="rpice">$30</span><br/>
            <input type="checkbox" name="eval_8_8" value="Comparable Program Research $250"/> Comparable Program Research <span class="rpice">$250</span><br/>
            <input type="checkbox" name="eval_8_9" value="Prescreening of educational documents with consultation $50"/> Prescreening of educational documents with consultation <span class="rpice">$50</span><br/>
            <i>*Payment will be accounted with the order</i>
          </td>
        </tr>
        <tr>
          <td class="tfirst"><div><span class="tname">9. Certified Translation Services </span><p></p></div></td>
          <td>          
            Amount of pages to Translate from any Language into English and from English into any Language: <span class="price"><input type="text" name="amount_pages" value=""></span><br/>
            Price per 1 page $60 : <span class="price"><input type="text" name="price_page" value=""></span><br/>
            Total Translation Price: <span class="price"><input type="text" name="total_price" value=""></span><br/>
          </td>
        </tr>
        <tr>
          <td class="tfirst"><div><span class="tname">10. Extra set of the original Evaluation Report  </span><p></p></div></td>
          <td>          
            <input type="checkbox" name="eval_10_0" value="If ordered with the Initial Application $30"/> If ordered with the Initial Application <span class="rpice">$30</span><br/>
            <input type="checkbox" name="eval_10_1" value="If ordered within 1 year after completion of the Initial Evaluation Report (First copy) $55"/> If ordered within 1 year after completion of the Initial Evaluation Report (First copy) <span class="rpice">$55</span><br/>
            <input type="checkbox" name="eval_10_2" value="If ordered over 1 year after completion of the Initial Evaluation Report (First copy) $120"/> Course-by-Course Evaluation of One degree (earned in the same school) <span class="rpice">$120</span><br/>
            <input type="checkbox" name="eval_10_3" value="Each consecutive copy of the same Evaluation Report $25"/> Each consecutive copy of the same Evaluation Report <span class="rpice">$25</span><br/>          
          </td>
        </tr>
        <tr>
          <td class="tfirst"><div><span class="tname">11. Extra set of the original Certified and Notarized Translation  </span><p></p></div></td>
          <td>          
            <input type="checkbox" name="eval_11_0" value="If ordered with the initial Application $30/pp"/> If ordered with the initial Application <span class="rpice">$30 per page</span><br/>
            <input type="checkbox" name="eval_11_1" value="If ordered within 1 year after completion of the initial Translation (First copy) $15/pp"/> If ordered within 1 year after completion of the initial Translation (First copy) <span class="rpice">$15 per page</span><br/>
            <input type="checkbox" name="eval_11_2" value="If ordered over 1 year after completion of the initial Translation (First copy) $30/pp"/> If ordered over 1 year after completion of the initial Translation (First copy) <span class="rpice">$30 per page</span><br/>
          </td>
        </tr>
        <tr>
          <td class="tfirst"><div><span class="tname">12. Rush Services  </span><p></p></div></td>
          <td>          
            <input type="radio" checked="true" name="eval_12" value="Next day Rush Service $160"/> Next day Rush Service <span class="rpice">$160</span><br/>
            <input type="radio" name="eval_12" value="2-3 days Rush Service $130"/> 2-3 days Rush Service <span class="rpice">$130</span><br/>
            <input type="radio" name="eval_12" value="5-day Rush Service $75"/> 5-day Rush Service <span class="rpice">$75</span><br/>
          </td>
        </tr>
        <tr>
          <td class="tfirst"><div><span class="tname">13. Express Shipment  </span><p></p></div></td>
          <td>          
            <input type="radio" checked="true" name="eval_13" value="Priority Mail with tracking number within USA/Canada (2-3 business days) $30"/> Priority Mail with tracking number within USA/Canada (2-3 business days) <span class="rpice">$30</span><br/>
            <input type="radio" name="eval_13" value="Express overnight shipment within USA/Canada $40"/> Express overnight shipment within USA/Canada <span class="rpice">$40</span><br/>
            <input type="radio" name="eval_13" value="USPS Express Mail International (3-5 business days) $40"/> USPS Express Mail International (3-5 business days) <span class="rpice">$40</span><br/>
            <input type="radio" name="eval_13" value="FedEx International (1-3 business days) $100"/> FedEx International (1-3 business days) <span class="rpice">$100</span><br/>
          </td>
        </tr>
        <tr>
          <td class="tfirst"><div><span class="tname">14. Total Charges  </span><p></p></div></td>
          <td>          
            <strong>Total Charges per Order:</strong> <span class="price" >$<input type="text" name="total" value=""></span>
          </td>
        </tr>
        <tr>
          <td class="tfirst"><div><span class="tname">15. Educational Institutions  </span><p>List All Educational Institutions Attended <span style="color: #ff0000; cursor: pointer; text-decoration: underline;" onclick="$('#rmore2').slideToggle();">Read More</span>
            <span style="display: none;" id="rmore2">starting from: <strong>High School or Institution of Higher Education</strong><br/>Consult our Specialists which Educational documents you need to evaluate to achieve your goal</span></p></div></td>
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
                <td><textarea name="school"></textarea></td>          
                <td><textarea name="city_country"></textarea></td>          
                <td><textarea name="certificate"></textarea></td>         
                <td><textarea name="date_started"></textarea></td>          
                <td><textarea name="date_completed"></textarea></td>          
              </tr>                 
            </table>
          </td>
        </tr>
        <tr>
          <td class="tfirst"><div><span class="tname">16. Other partysubmission  </span><p>Individual / Institution / Organization to whom the evaluation should be sent. </p></div></td>
          <td>          
            <label><strong>Individual/Institution/Organization:</strong></label> <span><input type="text" name="other_org" value="" placeholder="Individual/Institution/Organization"></span><br/>
            <label><strong>Attention (Name/Department/Suite/Room):</strong></label> <span><input type="text" name="other_attention" value="" placeholder="Attention (Name/Department/Suite/Room)"></span><br/>
            <label><strong>Street Address/Post Office Box Number:</strong></label> <span><input type="text" name="other_address" value="" placeholder="Street Address/Post Office Box Number"></span><br/>
            <label><strong>Street Address - Continued:</strong></label> <span><input type="text" name="other_streer" value="" placeholder="Street Address - Continued"></span><br/>
            <label><strong>City:</strong></label> <span><input type="text" name="other_city" value="" placeholder="City"></span><br/>
            <label><strong>State/Province:</strong></label> <span><input type="text" name="other_state" value="" placeholder="State/Province"></span><br/>
            <label><strong>Postal Zip Code:</strong></label> <span><input type="text" name="other_zip" value="" placeholder="Postal Zip Code"></span><br/>
            <label><strong>Country:</strong></label> <span><input type="text" name="other_country" value="" placeholder="Country"></span><br/>
            <p></p>
            <strong>Authorization:</strong><br><i>I authorize to release of the evaluation report to another individual or institution named in this application.</i> 
            <p>Signature of applicant <span><input type="text" name="other_sign" value=""></span></p>
          </td>
        </tr>
        <tr>
          <td class="tfirst"><div><span class="tname">17. Your Credit Card information   </span><p></p></div></td>
          <td>          
            <input type="radio" checked="true" name="card_type" value="Visa"> Visa <input type="radio" name="card_type" value="MasterCard"> Master Card  <input type="radio" name="card_type" value="Discover"> Discover <input type="radio" name="card_type" value="American Express"> American Express <input type="radio" name="card_type" value="Any Debit Card"> Any Debit Card<br/>
            Card Number <span><input type="text" min="16" max="16" name="card_number"><br/></span>
            Expiration Date <span class="price"><input type="text" min="2" max="2" name="card_month"> <input type="text" min="2" max="2" name="card_year"> Security Code <input type="text" min="4" max="4" name="card_code"></span>

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
    <p><span style="color: #ff0000; cursor: pointer; text-decoration: underline;" onclick="$('#rmore').slideToggle();">Read More</span></p>
    <div id="rmore" style="display: none;">
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
    </div>
      <div class="qwrap">
        <div class="quote">
          Please E-mail or Mail this Application and all the enclosures to:<br>
          Foreign Consultants, Inc. 11206 A Osage Circle<br/>
          Westminster, Colorado, 80234 USA<br/>
          Email: info@foreignconsultants.com<br/>
          Phone: 303-5850978</div>
        </div>
      </div>
    <div class="middle"> <input type="submit" class="nprint" value="Sign&Send"> </div>
    </div>
  </form>
</div>


      <br>
    </td>
  </tr>
</table>



<?php require("inc/footer.php"); ?>