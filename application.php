<?php require("inc/header.php"); ?>
<TABLE width="770" border="0" cellpadding="15" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111">
  <TR>
    <TD bgcolor="#C6AE52" width="446" valign="top">
<FONT color="#333333" size="2"><B>ONLINE APPLICATION FORM</B></FONT><HR noshade color="#FFFF00" size="1">
<P>This is form for online payment ...</P>
<FORM action="https://www.foreignconsultants.com/formmail.php" method="get">
<INPUT name="recipient" type="hidden" value="info@foreignconsultants.com">
<INPUT name="redirect" type="hidden" value="https://www.foreignconsultants.com/response.asp">
<INPUT name="subject" type="hidden" value="Payment form">
  <P>Please provide the following contact information:</P>
  <BLOCKQUOTE>
    <TABLE>
      <TR>
        <TD align="right"><EM>Name</EM></TD>
        <TD><INPUT name="Contact_FullName" size="35"> </TD>
      </TR>
      <TR>
        <TD align="right"><EM>Title</EM></TD>
        <TD><INPUT type="TEXT" name="Contact_Title" size="35"></TD>
      </TR>
      <TR>
        <TD align="right"><EM>Street Address</EM></TD>
        <TD><INPUT type="TEXT" name="Contact_StreetAddress" size="35"> </TD>
      </TR>
      <TR>
        <TD align="right"><EM>Address (cont.)</EM></TD>
        <TD><INPUT type="TEXT" name="Contact_Address2" size="35"> </TD>
      </TR>
      <TR>
        <TD align="right"><EM>City</EM></TD>
        <TD><INPUT type="TEXT" name="Contact_City" size="35"> </TD>
      </TR>
      <TR>
        <TD align="right"><EM>State/Province</EM></TD>
        <TD><INPUT type="TEXT" name="Contact_State" size="35"> </TD>
      </TR>
      <TR>
        <TD align="right"><EM>Zip/Postal Code</EM></TD>
        <TD><INPUT type="TEXT" name="Contact_ZipCode" size="12" maxlength="12">
        </TD>
      </TR>
      <TR>
        <TD align="right"><EM>Country</EM></TD>
        <TD><INPUT type="TEXT" name="Contact_Country" size="25"> </TD>
      </TR>
      <TR>
        <TD align="right"><EM>Country of Citizenship</EM></TD>
        <TD><INPUT type="TEXT" name="Contact_Country" size="25"> </TD>
      </TR>
      <TR>
        <TD align="right"><EM>Work Phone</EM></TD>
        <TD>
        <INPUT type="TEXT" name="Contact_WorkPhone" size="25" maxlength="25">
        </TD>
      </TR>
      <TR>
        <TD align="right"><EM>Home Phone</EM></TD>
        <TD>
        <INPUT type="TEXT" name="Contact_HomePhone" size="25" maxlength="25">
        </TD>
      </TR>
      <TR>
        <TD align="right"><EM>FAX</EM></TD>
        <TD><INPUT type="TEXT" name="Contact_FAX" size="25" maxlength="25"> </TD>
      </TR>
      <TR>
        <TD align="right"><EM>E-mail</EM></TD>
        <TD><INPUT type="TEXT" name="Contact_Email" size="25"> </TD>
      </TR>
      <TR>
        <TD align="right"><EM>Date of Birth (month/day/year)</EM></TD>
        <TD><INPUT type="TEXT" name="Personal_DateOfBirth" size="8"> </TD>
      </TR>
      <TR>
        <TD align="right"><EM>Sex</EM></TD>
        <TD><INPUT type="RADIO" name="Personal_Sex" value="Male" checked> Male
        <INPUT type="RADIO" name="Personal_Sex" value="Female"> Female </TD>
      </TR>
    </TABLE>
  </BLOCKQUOTE>
  <P>Select any of the following options that apply:</P>
  <BLOCKQUOTE>
    <P><INPUT type="CHECKBOX" name="Option_Education" value="ON"> Education<BR>
    <INPUT type="CHECKBOX" name="Option_Employmnet" value="ON"> Employment<BR>
    <INPUT type="CHECKBOX" name="Option_Immigration" value="ON"> Immigration<BR>
    <INPUT type="CHECKBOX" name="Option_Licensing/Certification" value="ON"> Licensing/Certification<BR>
    <INPUT type="CHECKBOX" name="Option_Other" value="ON"> Other<BR>
    </P>
  </BLOCKQUOTE>
  <P>Please provide the following ordering information:</P>
  <BLOCKQUOTE>
    <TABLE style="BORDER-COLLAPSE: collapse" cellspacing="0" border="0" width="85%">
      <TR>
        <TD valign="top" height="19">Product</TD>
        <TD valign="top" height="19">Description</TD>
        <TD valign="top" height="19">Price</TD>
        <TD valign="top" height="19">Quantity</TD>
      </TR>
      <TR>
        <TD valign="top" height="38">Comparability Evaluation Report </TD>
        <TD valign="top" height="38">Associate, Bachelor </TD>
        <TD valign="top" height="38">$200 </TD>
        <TD valign="top" height="38">
        <INPUT type="TEXT" name="Ordering_OrderQty0" size="6" maxlength="6"></TD>
      </TR>
      <!-- Table 01 Row 02 -->
      <TR>
        <TD valign="top" height="38">Course-by-Course Evaluation Report </TD>
        <TD valign="top" height="38">High School </TD>
        <TD valign="top" height="38">$200</TD>
        <TD valign="top" height="38">
        <INPUT type="TEXT" name="Ordering_OrderQty1" size="6" maxlength="6"></TD>
      </TR>
      <!-- Table 01 Row 03 -->
      <TR>
        <TD valign="top" height="57">Course-by-Course Evaluation Report </TD>
        <TD valign="top" height="57">Associate, Bachelor&#39;s, Master&#39;s </TD>
        <TD valign="top" height="57">$330</TD>
        <TD valign="top" height="57">
        <INPUT type="TEXT" name="Ordering_OrderQty2" size="6" maxlength="6"></TD>
      </TR>
      <!-- Table 01 Row 04 -->
      <TR>
        <TD valign="top" height="33">Course-by-Course Evaluation Report </TD>
        <TD valign="top" height="33">PHD </TD>
        <TD valign="top" height="33">$500 </TD>
        <TD valign="top" height="33">
        <INPUT type="TEXT" name="Ordering_OrderQty3" size="6" maxlength="6"></TD>
      </TR>
      <!-- Table 01 Row 05 -->
      <TR>
        <TD valign="top" height="76">Course-by-Course Evaluation Report for incomplete education
        </TD>
        <TD valign="top" height="76">Associate, Bachelor, Master, PHD </TD>
        <TD valign="top" height="76">$250 </TD>
        <TD valign="top" height="76">
        <INPUT type="TEXT" name="Ordering_OrderQty4" size="6" maxlength="6"></TD>
      </TR>
      <!-- Table 01 Row 06 -->
      <TR>
        <TD valign="top" height="76">Education and Work Experience Report </TD>
        <TD valign="top" height="76">Associate, Bachelor&#39;s, Master, PHD </TD>
        <TD valign="top" height="76">$600 </TD>
        <TD valign="top" height="76">
        <INPUT type="TEXT" name="Ordering_OrderQty5" size="6" maxlength="6"></TD>
      </TR>
      <!-- Table 01 Row 07 -->
      <TR>
        <TD valign="top" height="76">NEW!!! Comparable program research </TD>
        <TD valign="top" height="76">High School, Associate, Bachelor&#39;s, Master&#39;s </TD>
        <TD valign="top" height="76">$150 </TD>
        <TD valign="top" height="76">
        <INPUT type="TEXT" name="Ordering_OrderQty6" size="6" maxlength="6"></TD>
      </TR>
      <!-- Table 01 Row 08 -->
      <!-- Table 01 Row 09 -->
      <TR>
        <TD valign="top" height="57">Every other Diploma with/or without Transcript&nbsp;&nbsp;
        </TD>
        <TD valign="top" height="57">All Credentials</TD>
        <TD valign="top" height="57">$100</TD>
        <TD valign="top" height="57">
        <INPUT type="TEXT" name="Ordering_OrderQty8" size="6" maxlength="6"></TD>
      </TR>
      <!-- Table 01 Row 10 -->
      <TR>
        <TD valign="top" height="38">Every other Certificate&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </TD>
        <TD valign="top" height="38">All Credentials</TD>
        <TD valign="top" height="38">$50&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </TD>
        <TD valign="top" height="38">
        <INPUT type="TEXT" name="Ordering_OrderQty9" size="6" maxlength="6"></TD>
      </TR>
      <!-- Table 01 Row 11 -->
      <TR>
        <TD valign="top" height="38">Every other Comparable Program to be obtained </TD>
        <TD valign="top" height="38">All Credentials</TD>
        <TD valign="top" height="38">$100&nbsp;&nbsp;&nbsp;&nbsp; </TD>
        <TD valign="top" height="38">
        <INPUT type="TEXT" name="Ordering_OrderQty10" size="6" maxlength="6"></TD>
      </TR>
      <!-- Table 01 Row 12 -->
      <TR>
        <TD valign="top" height="57">Add Course-by-Course to previous Comparability Evaluation</TD>
        <TD valign="top" height="57">Associate, Bachelor&#39;s</TD>
        <TD valign="top" height="57">$150</TD>
        <TD valign="top" height="57">
        <INPUT type="TEXT" name="Ordering_OrderQty11" size="6" maxlength="6"></TD>
      </TR>
      <!-- Table 01 Row 13 -->
      <TR>
        <TD valign="top" height="21">1-day rush</TD>
        <TD valign="top" height="21">One order</TD>
        <TD valign="top" height="21">$100</TD>
        <TD valign="top" height="21">
        <INPUT type="TEXT" name="Ordering_OrderQty12" size="6" maxlength="6"></TD>
      </TR>
      <!-- Table 01 Row 14 -->
      <TR>
        <TD valign="top" height="21">3-day rush</TD>
        <TD valign="top" height="21">One order</TD>
        <TD valign="top" height="21">$75</TD>
        <TD valign="top" height="21">
        <INPUT type="TEXT" name="Ordering_OrderQty13" size="6" maxlength="6"></TD>
      </TR>
      <!-- Table 01 Row 15 -->
      <TR>
        <TD valign="top" height="21">5-day rush</TD>
        <TD valign="top" height="21">One order</TD>
        <TD valign="top" height="21">$50</TD>
        <TD valign="top" height="21">
        <INPUT type="TEXT" name="Ordering_OrderQty14" size="6" maxlength="6"></TD>
      </TR>
      <!-- Table 01 Row 16 -->
      <TR>
        <TD valign="top" height="38">Express/Certified Mail Service in US</TD>
        <TD valign="top" height="38">One mailing</TD>
        <TD valign="top" height="38">$30</TD>
        <TD valign="top" height="38">
        <INPUT type="TEXT" name="Ordering_OrderQty15" size="6" maxlength="6"></TD>
      </TR>
      <!-- Table 01 Row 17 -->
      <TR>
        <TD valign="top" height="38">Express Mail Service out US</TD>
        <TD valign="top" height="38">One mailing</TD>
        <TD valign="top" height="38">$50</TD>
        <TD valign="top" height="38">
        <INPUT type="TEXT" name="Ordering_OrderQty16" size="6" maxlength="6"></TD>
      </TR>
      <!-- Table 01 Row 18 -->
      <TR>
        <TD valign="top" height="21">Extra copies</TD>
        <TD valign="top" height="21">Each</TD>
        <TD valign="top" height="21">$30</TD>
        <TD valign="top" height="21">
        <INPUT type="TEXT" name="Ordering_OrderQty17" size="6" maxlength="6"></TD>
      </TR>
    </TABLE>
    <H5>Payment by:</H5>
    <TABLE border="0" width="85%" cellpadding="2">
      <TR>
        <TD nowrap align="left" colspan="2"><b><font color="#800000">Sorry, we 
        do not accept American Express and Discovery<br>
        credit cards</font></b></TD>
      </TR>
      <TR>
        <TD nowrap align="left">&nbsp;
        </TD>
        <TD>Credit cards: Visa, MasterCard</TD>
      </TR>
      <TR>
        <TD nowrap align="left">
        Card
        Number</TD>
        <TD> <INPUT maxlength="20" name="fcnum" size="31"> </TD>
      </TR>
      <TR>
        <TD nowrap align="left">
        Exp. Date</TD>
        <TD> <SELECT size="1" name="femon">
        <OPTION selected>Month</OPTION>
        <OPTION>Jan-01</OPTION>
        <OPTION>Feb-02</OPTION>
        <OPTION>Mar-03</OPTION>
        <OPTION>Apr-04</OPTION>
        <OPTION>May-05</OPTION>
        <OPTION>Jun-06</OPTION>
        <OPTION>Jul-07</OPTION>
        <OPTION>Aug-08</OPTION>
        <OPTION>Sep-09</OPTION>
        <OPTION>Oct-10</OPTION>
        <OPTION>Nov-11</OPTION>
        <OPTION>Dec-12</OPTION>
        </SELECT><SELECT size="1" name="feyea">
        <OPTION selected>Year</OPTION>
        <OPTION>2003</OPTION>
        <OPTION>2004</OPTION>
        <OPTION>2005</OPTION>
        <OPTION>2006</OPTION>
        <OPTION>2007</OPTION>
        <OPTION>2008</OPTION>
        <OPTION>2009</OPTION>
        <OPTION>2010</OPTION>
        <OPTION>2011</OPTION>
        <OPTION>2012</OPTION>
        </SELECT></TD>
      </TR>
    </TABLE>
    <H5>Shipping Address</H5>
    <TABLE border="0" cellspacing="1" width="85%">
      <TR>
        <TD align="right"><EM>Street Address</EM></TD>
        <TD><INPUT name="Ordering_StreetAddress" size="35"> </TD>
      </TR>
      <TR>
        <TD align="right"><EM>Address (cont.)</EM></TD>
        <TD><INPUT type="TEXT" name="Ordering_Address2" size="35"> </TD>
      </TR>
      <TR>
        <TD align="right"><EM>City</EM></TD>
        <TD><INPUT type="TEXT" name="Ordering_City" size="35"> </TD>
      </TR>
      <TR>
        <TD align="right"><EM>State/Province</EM></TD>
        <TD><INPUT type="TEXT" name="Ordering_State" size="35"> </TD>
      </TR>
      <TR>
        <TD align="right"><EM>Zip/Postal Code</EM></TD>
        <TD><INPUT type="TEXT" name="Ordering_ZipCode" size="12" maxlength="12">
        </TD>
      </TR>
      <TR>
        <TD align="right"><EM>Country</EM></TD>
        <TD><INPUT type="TEXT" name="Ordering_Country" size="25"> </TD>
      </TR>
    </TABLE>
    <H5>Credit Card Billing Address</H5>
    <P>This is your address (normally your home address or PO Box) where you receive 
    your credit card statements. The address is required if you are paying via credit 
    card, your order may be delayed if it is not correct. </P>
    <TABLE cellspacing="1" width="85%" border="0">
      <TR>
        <TD valign="top" align="right">
        <INPUT type="checkbox" value="ON" name="bsame"> </TD>
        <TD valign="top">Check here if card billing address same 
        as shipping address.</TD>
      </TR>
      <TR>
        <TD valign="top">Complete Name: </TD>
        <TD><INPUT maxlength="32" size="30" name="bname"> (required)</TD>
      </TR>
      <TR>
        <TD valign="top">Address Line 1: </TD>
        <TD><INPUT maxlength="32" size="30" name="badd1"> (required)</TD>
      </TR>
      <TR>
        <TD valign="top">Address Line 2: </TD>
        <TD><INPUT maxlength="32" size="30" name="badd2"> <br>
        (leave blank if not used)</TD>
      </TR>
      <TR>
        <TD valign="top">City: </TD>
        <TD><INPUT maxlength="32" size="15" name="bcity"> (required)</TD>
      </TR>
      <TR>
        <TD valign="top">State/Province: </TD>
        <TD><INPUT maxlength="20" size="4" name="bstat"> <BR>
        (required for countries 
        that have states/provinces)</TD>
      </TR>
      <TR>
        <TD valign="top">Zip/Postal Code: </TD>
        <TD><INPUT maxlength="10" size="8" name="bzip"><BR>
        (required for countries 
        that have zip/postal codes)</TD>
      </TR>
      <TR>
        <TD valign="top">Country: </TD>
        <TD><SELECT size="1" name="bcoun">
        <OPTION selected>United States</OPTION>
        <OPTION>Albania</OPTION>
        <OPTION>Algeria</OPTION>
        <OPTION>Andorra</OPTION>
        <OPTION>Angola</OPTION>
        <OPTION>Anguilla</OPTION>
        <OPTION>Antigua</OPTION>
        <OPTION>Argentina</OPTION>
        <OPTION>Armenia</OPTION>
        <OPTION>Aruba</OPTION>
        <OPTION>Australia</OPTION>
        <OPTION>Austria</OPTION>
        <OPTION>Azerbaijan</OPTION>
        <OPTION>Bahamas</OPTION>
        <OPTION>Bahrain</OPTION>
        <OPTION>Bangladesh</OPTION>
        <OPTION>Barbados</OPTION>
        <OPTION>Belarus</OPTION>
        <OPTION>Belgium</OPTION>
        <OPTION>Belize</OPTION>
        <OPTION>Benin</OPTION>
        <OPTION>Bermuda</OPTION>
        <OPTION>Bhutan</OPTION>
        <OPTION>Bolivia</OPTION>
        <OPTION>Bosnia-Herzegovina</OPTION>
        <OPTION>Botswana</OPTION>
        <OPTION>Brazil</OPTION>
        <OPTION>British Virgin Islands</OPTION>
        <OPTION>Brunei</OPTION>
        <OPTION>Bulgaria</OPTION>
        <OPTION>Burkina Faso</OPTION>
        <OPTION>Burundi</OPTION>
        <OPTION>Cambodia</OPTION>
        <OPTION>Cameroon</OPTION>
        <OPTION>Canada</OPTION>
        <OPTION>Cape Verde</OPTION>
        <OPTION>Cayman Islands</OPTION>
        <OPTION>Central African Republic</OPTION>
        <OPTION>Chad</OPTION>
        <OPTION>Chile</OPTION>
        <OPTION>China</OPTION>
        <OPTION>Colombia</OPTION>
        <OPTION>Comoros</OPTION>
        <OPTION>Congo</OPTION>
        <OPTION>Cook Islands</OPTION>
        <OPTION>Costa Rica</OPTION>
        <OPTION>Croatia</OPTION>
        <OPTION>Cyprus</OPTION>
        <OPTION>Czech Republic</OPTION>
        <OPTION>Denmark</OPTION>
        <OPTION>Djibouti</OPTION>
        <OPTION>Dominica</OPTION>
        <OPTION>Dominican Republic</OPTION>
        <OPTION>East Timor</OPTION>
        <OPTION>Ecuador</OPTION>
        <OPTION>Egypt</OPTION>
        <OPTION>El Salvador</OPTION>
        <OPTION>England</OPTION>
        <OPTION>Equatorial Guinea</OPTION>
        <OPTION>Eritrea</OPTION>
        <OPTION>Estonia</OPTION>
        <OPTION>Ethiopia</OPTION>
        <OPTION>Falkland Islands</OPTION>
        <OPTION>Faroe Islands</OPTION>
        <OPTION>Fiji</OPTION>
        <OPTION>Finland</OPTION>
        <OPTION>France</OPTION>
        <OPTION>French Guiana</OPTION>
        <OPTION>French Polynesia</OPTION>
        <OPTION>Gabon</OPTION>
        <OPTION>Gambia</OPTION>
        <OPTION>Georgia</OPTION>
        <OPTION>Germany</OPTION>
        <OPTION>Ghana</OPTION>
        <OPTION>Gibraltar</OPTION>
        <OPTION>Great Britain</OPTION>
        <OPTION>Greece</OPTION>
        <OPTION>Greenland</OPTION>
        <OPTION>Grenada</OPTION>
        <OPTION>Guadeloupe</OPTION>
        <OPTION>Guatemala</OPTION>
        <OPTION>Guernsey</OPTION>
        <OPTION>Guinea</OPTION>
        <OPTION>Guinea-Bissau</OPTION>
        <OPTION>Guyana</OPTION>
        <OPTION>Haiti</OPTION>
        <OPTION>Honduras</OPTION>
        <OPTION>Hong Kong</OPTION>
        <OPTION>Hungary</OPTION>
        <OPTION>Iceland</OPTION>
        <OPTION>India</OPTION>
        <OPTION>Indonesia</OPTION>
        <OPTION>Ireland</OPTION>
        <OPTION>Israel</OPTION>
        <OPTION>Italy</OPTION>
        <OPTION>Ivory Coast</OPTION>
        <OPTION>Jamaica</OPTION>
        <OPTION>Japan</OPTION>
        <OPTION>Jersey</OPTION>
        <OPTION>Jordan</OPTION>
        <OPTION>Kazakhstan</OPTION>
        <OPTION>Kenya</OPTION>
        <OPTION>Kiribati</OPTION>
        <OPTION>Kuwait</OPTION>
        <OPTION>Kyrgyzstan</OPTION>
        <OPTION>Laos</OPTION>
        <OPTION>Latvia</OPTION>
        <OPTION>Lebanon</OPTION>
        <OPTION>Lesotho</OPTION>
        <OPTION>Liberia</OPTION>
        <OPTION>Liechtenstein</OPTION>
        <OPTION>Lithuania</OPTION>
        <OPTION>Luxembourg</OPTION>
        <OPTION>Macao</OPTION>
        <OPTION>Macedonia</OPTION>
        <OPTION>Madagascar</OPTION>
        <OPTION>Malawi</OPTION>
        <OPTION>Malaysia</OPTION>
        <OPTION>Maldives</OPTION>
        <OPTION>Mali</OPTION>
        <OPTION>Malta</OPTION>
        <OPTION>Martinique</OPTION>
        <OPTION>Mauritania</OPTION>
        <OPTION>Mauritius</OPTION>
        <OPTION>Mexico</OPTION>
        <OPTION>Moldova</OPTION>
        <OPTION>Mongolia</OPTION>
        <OPTION>Montserrat</OPTION>
        <OPTION>Morocco</OPTION>
        <OPTION>Mozambique</OPTION>
        <OPTION>Myanmar</OPTION>
        <OPTION>Namibia</OPTION>
        <OPTION>Nauru</OPTION>
        <OPTION>Nepal</OPTION>
        <OPTION>Netherlands</OPTION>
        <OPTION>Netherlands Antilles</OPTION>
        <OPTION>New Caledonia</OPTION>
        <OPTION>New Zealand</OPTION>
        <OPTION>Nicaragua</OPTION>
        <OPTION>Niger</OPTION>
        <OPTION>Nigeria</OPTION>
        <OPTION>Niue Island</OPTION>
        <OPTION>Northern Ireland</OPTION>
        <OPTION>Norway</OPTION>
        <OPTION>Oman</OPTION>
        <OPTION>Pakistan</OPTION>
        <OPTION>Panama</OPTION>
        <OPTION>Papua New Guinea</OPTION>
        <OPTION>Paraguay</OPTION>
        <OPTION>Peru</OPTION>
        <OPTION>Philippines</OPTION>
        <OPTION>Poland</OPTION>
        <OPTION>Portugal</OPTION>
        <OPTION>Qatar</OPTION>
        <OPTION>Reunion</OPTION>
        <OPTION>Romania</OPTION>
        <OPTION>Russia</OPTION>
        <OPTION>Rwanda</OPTION>
        <OPTION>Saint Kitts &amp; Nevis</OPTION>
        <OPTION>Saint Lucia</OPTION>
        <OPTION>Saint Vincent</OPTION>
        <OPTION>Samoa</OPTION>
        <OPTION>Saudi Arabia</OPTION>
        <OPTION>Scotland</OPTION>
        <OPTION>Senegal</OPTION>
        <OPTION>Seychelles</OPTION>
        <OPTION>Sierra Leone</OPTION>
        <OPTION>Singapore</OPTION>
        <OPTION>Slovakia</OPTION>
        <OPTION>Slovenia</OPTION>
        <OPTION>Solomon Islands</OPTION>
        <OPTION>Somalia</OPTION>
        <OPTION>Somaliland</OPTION>
        <OPTION>South Africa</OPTION>
        <OPTION>South Korea</OPTION>
        <OPTION>Spain</OPTION>
        <OPTION>Sri Lanka</OPTION>
        <OPTION>Sudan</OPTION>
        <OPTION>Suriname</OPTION>
        <OPTION>Swaziland</OPTION>
        <OPTION>Sweden</OPTION>
        <OPTION>Switzerland</OPTION>
        <OPTION>Syria</OPTION>
        <OPTION>Tahiti</OPTION>
        <OPTION>Taiwan</OPTION>
        <OPTION>Tajikistan</OPTION>
        <OPTION>Tanzania</OPTION>
        <OPTION>Thailand</OPTION>
        <OPTION>Togo</OPTION>
        <OPTION>Tonga</OPTION>
        <OPTION>Trinidad &amp; Tobago</OPTION>
        <OPTION>Tunisia</OPTION>
        <OPTION>Turkey</OPTION>
        <OPTION>Turkmenistan</OPTION>
        <OPTION>Turks and Caicos Islands</OPTION>
        <OPTION>Tuvalu</OPTION>
        <OPTION>Uganda</OPTION>
        <OPTION>Ukraine</OPTION>
        <OPTION>United Arab Emirates</OPTION>
        <OPTION>United States</OPTION>
        <OPTION>Uruguay</OPTION>
        <OPTION>Uzbekistan</OPTION>
        <OPTION>Vanuatu</OPTION>
        <OPTION>Vatican City</OPTION>
        <OPTION>Venezuela</OPTION>
        <OPTION>Vietnam</OPTION>
        <OPTION>Wales</OPTION>
        <OPTION>Wallis and Futuna Islands</OPTION>
        <OPTION>Yemen</OPTION>
        <OPTION>Zaire</OPTION>
        <OPTION>Zambia</OPTION>
        <OPTION>Zimbabwe</OPTION>
        </SELECT> (required)</TD>
      </TR>
    </TABLE>
  </BLOCKQUOTE>
  <INPUT type="SUBMIT" value="Submit Form">
  <INPUT type="RESET" value="Reset Form">
</FORM>

    </TD>
    <TD valign="top" width="264">Any questions about our services? <BR>
    Write, telephone, fax, or E-mail us at: <BR>
    <BR>
    <B>Foreign Consultants, Inc.</B><BR>
    Credential Evaluation Services <BR>
    3000 Dundee Road, suite 209<BR>
    Northbrook, IL 60062 <BR>
    <BR><P align="right">
    <B>Telephone:</B> (773) 761-0000<BR>
    <B></B> (847) 498-4499<BR>
    <B>Fax: </B>      (847) 412-9570<BR>
    <BR>
    E-mail: <A class="sublink" href="mailto:info@foreignconsultants.com">
    info@foreignconsultants.com</A><BR>
    Web: <A class="sublink" href="http://www.foreignconsultants.com">
    www.foreignconsultants.com </A><BR></P>
    <BR>
    <B>
    <A href="http://www.mapquest.com/maps/map.adp?city=northbrook&state=IL&address=3000+dundee+rd&zip=60062&country=us&zoom=8">
    View our Map</A></B></TD>
  </TR>
</TABLE>
<?php require("inc/footer.php"); ?>
