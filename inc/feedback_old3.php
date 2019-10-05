<form action="onlinesubmit.php" method="post">
<?php
$ipi = getenv("REMOTE_ADDR");
$httprefi = getenv ("HTTP_REFERER");
$httpagenti = getenv ("HTTP_USER_AGENT");
?>
<input type="hidden" name="ip" value="<?php echo $ipi ?>" />
<input type="hidden" name="httpref" value="<?php echo $httprefi ?>" />
<input type="hidden" name="httpagent" value="<?php echo $httpagenti ?>" />
  <table width="588" border="0" bgcolor="#c6af52" cellspacing="5" cellpadding="0">
    <tr>
      <td colspan="3"> <p><strong><font size="+2" face="Geneva, Arial, Helvetica, sans-serif"><em><font color="#6A0000" size="+3"><br>
          Online Application for</font><font color="#6A0000"><br>
          <br>
          Evaluation of Foreign Educational Credentials</font></em></font><font size="+1" face="Geneva, Arial, Helvetica, sans-serif"><br>
          <br>
          <img src="line.jpg" width="600" height="14"><br>
          <font color="872800">Name</font></font></strong><br>
          <font color="#000000" size="2" face="Geneva, Arial, Helvetica, sans-serif">Please
          provide all the information requested below</font><br>
          <br>
        </p></td>
    </tr>
    <tr>
      <td width="20%"><div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">First
          Name:</font></strong></em></div></td>
      <td colspan="2"><input type="text" name="fname" size="30" /></td>
    </tr>
    <tr>
      <td><div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Last
          Name:</font> </strong></em></div></td>
      <td colspan="2"><input type="text" name="lname" size="30" /></td>
    </tr>
    <tr>
      <td><div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Middle
          Name:</font></strong></em></div></td>
      <td colspan="2"><input type="text" name="mname" size="30" /></td>
    </tr>
    <tr>
      <td><div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Other
          Names used:</font></strong></em></div></td>
      <td colspan="2"><input type="text" name="oname" size="30" /></td>
    </tr>
    <tr>
      <td height="14" colspan="3"><img src="line.jpg" width="600" height="14"></td>
    </tr>
    <tr>
      <td height="41" colspan="3"><strong><font color="872800" size="+1" face="Geneva, Arial, Helvetica, sans-serif">Contact
        Information </font></strong><br> <font color="#000000" size="2" face="Geneva, Arial, Helvetica, sans-serif">Include
        your direct (immediate) contact information</font><br> </td>
    </tr>
    <tr>
      <td><div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Street:</font></strong></em></div></td>
      <td colspan="2"><input type="text" name="street" size="50" /></td>
    </tr>
    <tr>
      <td><div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">City:</font></strong></em></div></td>
      <td colspan="2"><input type="text" name="city" size="30" /></td>
    </tr>
    <tr>
      <td><div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">State:</font></strong></em></div></td>
      <td colspan="2"><input type="text" name="state" size="30" /></td>
    </tr>
    <tr>
      <td><div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Zip
          Code:</font></strong></em></div></td>
      <td colspan="2"><input type="text" name="zip" size="30" /></td>
    </tr>
    <tr>
      <td><div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Country:</font></strong></em></div></td>
      <td colspan="2"><input type="text" name="country" size="30" /></td>
    </tr>
    <tr>
      <td><div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Telephone
          Number:</font></strong></em></div></td>
      <td colspan="2"><input type="text" name="tel" size="30" /></td>
    </tr>
    <tr>
      <td><div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Fax
          Number:</font></strong></em></div></td>
      <td colspan="2"><input type="text" name="fax" size="30" /></td>
    </tr>
    <tr>
      <td><div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Cellular
          Number:</font></strong></em></div></td>
      <td colspan="2"><input type="text" name="cell" size="30" /></td>
    </tr>
    <tr>
      <td><div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">E-mail
          Address:</font></strong></em></div></td>
      <td colspan="2"><input type="text" name="visitormail" size="30" /></td>
    </tr>
    <tr>
      <td colspan="3"><img src="line.jpg" width="600" height="14"></td>
    </tr>
    <tr>
      <td colspan="3"><strong><font color="872800" size="+1" face="Geneva, Arial, Helvetica, sans-serif">Personal
        Information </font><font size="+1" face="Geneva, Arial, Helvetica, sans-serif"><br>
        </font></strong></td>
    </tr>
    <tr>
      <td><div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Birth
          Date:</font></strong></em></div></td>
      <td colspan="2"><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Month:</font>
        <select name="month" size="1">
          <option value=" January ">January</option>
          <option value=" February ">February</option>
          <option value=" March ">March</option>
          <option value=" April ">April</option>
          <option value=" May ">May</option>
          <option value=" June ">June</option>
          <option value=" July ">July</option>
          <option value=" August ">August</option>
          <option value=" September ">September</option>
          <option value=" October ">October</option>
          <option value=" November ">November</option>
          <option value=" December ">December</option>
        </select> <font size="2" face="Geneva, Arial, Helvetica, sans-serif">Day:</font>
        <input type="text" name="day" size="4" /> <font size="2" face="Geneva, Arial, Helvetica, sans-serif">Year:</font>
        <input type="text" name="year" size="7" /> </td>
    </tr>
    <tr>
      <td><div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Sex:</font></strong></em></div></td>
      <td colspan="2"> <input type="checkbox" name="female" value="y" /> <font size="2" face="Geneva, Arial, Helvetica, sans-serif">Female
        </font> <input type="checkbox" name="male" value="y" /> <font size="2" face="Geneva, Arial, Helvetica, sans-serif">Male</font></td>
    </tr>
    <tr>
      <td colspan="3"><img src="line.jpg" width="600" height="14"></td>
    </tr>
    <tr>
      <td colspan="3"><strong><font color="872800" size="+1" face="Geneva, Arial, Helvetica, sans-serif">Evaluation
        Information </font><font size="+1" face="Geneva, Arial, Helvetica, sans-serif"><br>
        </font></strong></td>
    </tr>
    <tr>
      <td> <div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Have
          you ever used FCI services before?</font></strong></em></div></td>
      <td><input type="checkbox" name="yes" value="y" />
        Yes
        <input type="checkbox" name="no" value="y" />
        No</td>
    </tr>
    <tr>
      <td> <div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">If
          Yes, state FCI </font></strong></em></div></td>
      <td width="20%"> <em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Reference
        Number:</font> </strong></em></td>
      <td width="53%"><input type="text" name="rfn" size="30" /></td>
    </tr>
    <tr>
      <td colspan="3"><strong><font size="+1" face="Geneva, Arial, Helvetica, sans-serif"><img src="line.jpg" width="600" height="14">
        </font></strong></td>
    </tr>
    <tr>
      <td valign="top"> <div align="left"><font size="2" face="Geneva, Arial, Helvetica, sans-serif"><strong><em>Purpose
          of Evaluation</em></strong>:</font></div></td>
      <td colspan="2"> <input type="checkbox" name="under_1" value="y" />
        Undergraduate (1st year)<br /> <input type="checkbox" name="under_tr" value="y" />
        Undergraduate (transfer) <br /> <input type="checkbox" name="grad" value="y" />
        Graduate<br /> <input type="checkbox" name="empl" value="y" />
        Employment<br /> <input type="checkbox" name="imm" value="y" />
        Immigration<br /> <input type="checkbox" name="mil" value="y" />
        Military<br /> <input type="checkbox" name="prof" value="y" />
        Professional Licensing/Certification<br>
        Other
        <input type="text" name="p_other" size="44" /> </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">State:
        <input type="text" name="p_state" size="13" />
        Profession:
        <input type="text" name="p_prof" size="13" /></td>
    </tr>

    <tr>
      <td colspan="3"><img src="line.jpg" width="600" height="14"></td>
    </tr>
    <tr>
      <td valign="top"> <div align="left"><font size="2" face="Geneva, Arial, Helvetica, sans-serif"><strong><em>Evaluation of Additional Documents</em></strong>:<br>
          </font></div></td>
      <td colspan="2"><input type="checkbox" name="comp_ast" value="y" />
        Evaluation of every other Diploma with or without Transcript.....$100<br />
        <input type="checkbox" name="comp_bach" value="y" />
        Evaluation of every other Certificate...........................................$50 <br />
        <input type="checkbox" name="cbc_h" value="y" />
        Evaluation of other Comparable Program Research....................$100</td>
    </tr>
    <tr>
      <td colspan="3"><img src="line.jpg" width="600" height="14"><br> <strong><font color="872800" size="+1" face="Geneva, Arial, Helvetica, sans-serif">Translation
        Services</font></strong><br> </td>
    </tr>
    <tr>
      <td valign="top"> <div align="left"><font size="2" face="Geneva, Arial, Helvetica, sans-serif"><strong><em>Certified
          Translation Services (into English language)</em></strong>:</font></div></td>
      <td colspan="2" valign="top"><table width="75%" border="0" cellspacing="2" cellpadding="0">
          <tr>
            <td width="4%"><font size="2" face="Geneva, Arial, Helvetica, sans-serif"><strong>#</strong></font></td>
            <td width="52%"><div align="left"><font size="2" face="Geneva, Arial, Helvetica, sans-serif"><strong>Translation
                from Language</strong></font></div></td>
            <td width="17%"><div align="center"><font size="2" face="Geneva, Arial, Helvetica, sans-serif"><strong>Price
                <br>
                per 1 page</strong></font></div></td>
            <td width="27%"><div align="center"><font size="2" face="Geneva, Arial, Helvetica, sans-serif"><strong>Price
                <br>
                (for 10 pages and cover)</strong></font></div></td>
          </tr>
          <tr>
            <td colspan="4"><font size="2" face="Geneva, Arial, Helvetica, sans-serif"><img src="dline.jpg" width="446" height="6"></font></td>
          </tr>
          <tr>
            <td><font size="2" face="Geneva, Arial, Helvetica, sans-serif">1</font></td>
            <td><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Russian, Ukrainian</font></td>
            <td><div align="center"><font size="2" face="Geneva, Arial, Helvetica, sans-serif">$40</font></div></td>
            <td><div align="center"><font size="2" face="Geneva, Arial, Helvetica, sans-serif">$35</font></div></td>
          </tr>
          <tr>
            <td height="6" colspan="4"><font size="2" face="Geneva, Arial, Helvetica, sans-serif"><img src="dline.jpg" width="446" height="6"></font></td>
          </tr>
          <tr>
            <td height="16"><font size="2" face="Geneva, Arial, Helvetica, sans-serif">2</font></td>
            <td height="16"><font size="2" face="Geneva, Arial, Helvetica, sans-serif">German, Latvian, Czech, Romanian, Bulgarian, Italian, French, Polish, Slovak
</font></td>
            <td height="16"><div align="center"><font size="2" face="Geneva, Arial, Helvetica, sans-serif">$50</font></div></td>
            <td height="16"><div align="center"><font size="2" face="Geneva, Arial, Helvetica, sans-serif">$45</font></div></td>
          </tr>
          <tr>
            <td colspan="4"><font size="2" face="Geneva, Arial, Helvetica, sans-serif"><img src="dline.jpg" width="446" height="6"></font></td>
          </tr>
          <tr>
            <td><font size="2" face="Geneva, Arial, Helvetica, sans-serif">3</font></td>
            <td><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Spanish, Hungarian, Vietnamese, Greek, Armenian, Kazakh, Lithuanian, Turkish, Turkmen, Swedish, Japanese</font></td>
            <td><div align="center"><font size="2" face="Geneva, Arial, Helvetica, sans-serif">$55</font></div></td>
            <td><div align="center"><font size="2" face="Geneva, Arial, Helvetica, sans-serif">$50</font></div></td>
          </tr>
          <tr>
            <td colspan="4"><font size="2" face="Geneva, Arial, Helvetica, sans-serif"><img src="dline.jpg" width="446" height="6"></font></td>
          </tr>
          <tr>
            <td><font size="2" face="Geneva, Arial, Helvetica, sans-serif">4</font></td>
            <td><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Dari, Korean, Persian, Hindi, Farsi, Finnish, Estonian, Azerbaijani, Hebrew, Arabic, Portuguese, Belarusian, Dutch, Georgian, Danish, Chinese, Serbian, Slovenian, Norwegian, Uzbek, Croatian</font></td>
            <td><div align="center"><font size="2" face="Geneva, Arial, Helvetica, sans-serif">$55</font></div></td>
            <td><div align="center"><font size="2" face="Geneva, Arial, Helvetica, sans-serif">$50</font></div></td>
          </tr>
          <tr>
            <td colspan="4"><img src="dline.jpg" width="446" height="6"></td>
          </tr>
        </table>
        <font size="1">*<font face="Geneva, Arial, Helvetica, sans-serif">Two
        original copies of Certified Translations will be provided, if ordered
        from FCI.</font></font></td>
    </tr>
        <tr>
      <td colspan="3"><img src="line.jpg" width="600" height="14"></td>
    </tr>
    <tr>
      <td valign="top"> <div align="left"><font size="2" face="Geneva, Arial, Helvetica, sans-serif"><strong><em>Nursing Evaluation</em></strong>:</font></div></td>
      <td colspan="2"><input type="checkbox" name="comp_ast" value="y" />
        One Degree (school authentication included).......................$500<br />
        <input type="checkbox" name="comp_bach" value="y" />
        Two Degrees combined (school authentication included).....$1000<br />
        <input type="checkbox" name="cbc_h" value="y" />
        Three Degrees combined (school authentication included)...$1500</td>
    </tr>
        <tr>
      <td colspan="3"><img src="line.jpg" width="600" height="14"></td>
    </tr>
    <tr>
      <td valign="top"> <div align="left"><font size="2" face="Geneva, Arial, Helvetica, sans-serif"><strong><em>Extra Sets of Original Evaluation Report</em></strong>:</font></div></td>
      <td colspan="2"><input type="checkbox" name="comp_ast" value="y" />
        Extra Sets (if ordered together with Evaluation Report)...................................................................................$40<br />
        <input type="checkbox" name="comp_bach" value="y" />
        Extra Sets (if ordered within 1 year after Evaluation Report issued)....................................................................................$75(each)<br />
        <input type="checkbox" name="cbc_h" value="y" />
        Extra Sets (if ordered within 3 years after Evaluation Report issued)...................................................................................$100(each)</td>
    </tr>
     <tr>
      <td colspan="3"><img src="line.jpg" width="600" height="14"></td>
    </tr>
    <tr>
      <td valign="top"> <div align="left"><font size="2" face="Geneva, Arial, Helvetica, sans-serif"><strong><em>Rush Services</em></strong>:</font></div></td>
      <td colspan="2"><input type="checkbox" name="comp_ast" value="y" />
        1-day Rush service (excluding shipping)............................$100<br />
        <input type="checkbox" name="comp_bach" value="y" />
        3-day Rush service (excluding shipping)............................$75<br />
        <input type="checkbox" name="cbc_h" value="y" />
        5-day Rush service (excluding shipping)............................$50</td>
    </tr>
     <tr>
      <td colspan="3"><img src="line.jpg" width="600" height="14"></td>
    </tr>
    <tr>
      <td valign="top"> <div align="left"><font size="2" face="Geneva, Arial, Helvetica, sans-serif"><strong><em>Express Shipment</em></strong>:</font></div></td>
      <td colspan="2"><input type="checkbox" name="comp_ast" value="y" />
        Express Shipment within USA (or customer's account)......$50<br />
        <input type="checkbox" name="comp_bach" value="y" />
        Express Shipment outside USA (or customer's account)....$100</td>
    </tr>
      <tr>
      <td colspan="3"><img src="line.jpg" width="600" height="14"></td>
    </tr>
    <tr>
      <td valign="top"> <div align="left"><font size="2" face="Geneva, Arial, Helvetica, sans-serif"><strong><em>Products
          and Services</em></strong>:<br>
          <font color="#333333" size="1">check the type of evaluation <br>
          needed</font></font></div></td>
      <td colspan="2"><input type="checkbox" name="comp_ast" value="y" />
        Comparability Evaluation of Associate Degree..................$200<br />
        <input type="checkbox" name="comp_bach" value="y" />
        Comparability Evaluation of Bachelor Degree...................$200 <br />
        <input type="checkbox" name="cbc_h" value="y" />
        Course-by-Course Evaluation of High School Diploma......$200<br /> <input type="checkbox" name="cbc_a" value="y" />
        Course-by-Course Evaluation of Associate Degree...........$330<br /> <input type="checkbox" name="cbc_b" value="y" />
        Course-by-Course Evaluation of Bachelor Degree............$330<br /> <input type="checkbox" name="cbc_m" value="y" />
        Course-by-Course Evaluation of Master Degree...............$330<br /> <input type="checkbox" name="cbc_p" value="y" />
        Course-by-Course Evaluation of PhD...............................$500<br />
        <input type="checkbox" name="cbc_i" value="y" />
        Course-by-Course Evaluation of Incomplete Education....$300<br /> <input type="checkbox" name="ev_w" value="y" />
        Education and Work Experience Evaluation
        (for
			  immigration purposes)...............................................................................$500<br />
        <input type="checkbox" name="subj_a" value="y" />
        Subject Analysis.........................................................$25 (per subject)<br />
        <input type="checkbox" name="cat_m" value="y" />
        Catalog match..................................................................$300<br />
        <input type="checkbox" name="comp_p" value="y" />
        Comparable Program Research........................................$150</td>
    </tr>
        <tr>
      <td colspan="3"><img src="line.jpg" width="600" height="14"></td>
    </tr>
    <tr>
      <td colspan="3"><strong><font color="872800" size="+1" face="Geneva, Arial, Helvetica, sans-serif">Licensure
        Services </font><font size="+1" face="Geneva, Arial, Helvetica, sans-serif"><br>
        </font></strong></td>
    </tr>
    <tr>
      <td><div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">License
          for the Profession: </font></strong></em></div></td>
      <td colspan="2"> <input type="text" name="license" size="25" /> </td>
    </tr>
    <tr>
      <td><div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">State
          of: </font></strong></em></div></td>
      <td colspan="2"><input type="text" name="l_state" size="25" /></td>
    </tr>
    <tr>
      <td><div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">FCI
          Quoted Price:</font></strong></em></div></td>
      <td colspan="2"><input type="text" name="l_quote" size="25" /> <br> <font color="#666666" size="1" face="Geneva, Arial, Helvetica, sans-serif">(as
        agreed with FCI consultant)</font> </td>
    </tr>
    <tr>
      <td colspan="3"><img src="line.jpg" width="600" height="14"></td>
    </tr>
    <tr>
      <td colspan="3"><strong><font color="872800" size="+1" face="Geneva, Arial, Helvetica, sans-serif">Total
        Charges </font></strong><font color="#666666" size="2" face="Geneva, Arial, Helvetica, sans-serif"><br>
        </font><font size="+1" face="Geneva, Arial, Helvetica, sans-serif">&nbsp;
        </font></td>
    </tr>
    <tr>
      <td><div align="left"><font size="2" face="Geneva, Arial, Helvetica, sans-serif"><strong><em>Evaluation:
          $</em></strong></font></div></td>
      <td colspan="2"><input type="text" name="t_eval" size="25" /></td>
    </tr>
    <tr>
      <td><div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Translation:
          $</font></strong></em></div></td>
      <td colspan="2"><input type="text" name="t_trans" size="25" /></td>
    </tr>
    <tr>
      <td><div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Licensure:
          $</font></strong></em></div></td>
      <td colspan="2"><input type="text" name="t_licens" size="25" /></td>
    </tr>
    <tr>
      <td><div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Additional:
          $</font></strong></em></div></td>
      <td colspan="2"><input type="text" name="t_add" size="25" /></td>
    </tr>
    <tr>
      <td><div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Other
          (agreed with FCI): $ </font></strong></em></div></td>
      <td colspan="2"><input type="text" name="fciother" size="25" /></td>
    </tr>

    <tr>
      <td colspan="3"><img src="line.jpg" width="600" height="14"></td>
    </tr>
    <tr>
      <td colspan="3"><strong><font color="872800" size="+1" face="Geneva, Arial, Helvetica, sans-serif">Credit
        Card Information </font></strong><font color="#666666" size="2" face="Geneva, Arial, Helvetica, sans-serif"><br>
        </font><font size="+1" face="Geneva, Arial, Helvetica, sans-serif">&nbsp;
        </font></td>
    </tr>
    <tr>
      <td valign="top"><div align="left"><font size="2" face="Geneva, Arial, Helvetica, sans-serif"><strong><em>Card Type:
          </em></strong></font></div></td>
      <td colspan="2">
      	<input type="radio" name="cc_type" value="VISA" id="visa" checked><label for="visa">VISA</label><br>
      	<input type="radio" name="cc_type" value="Master Card" id="masterCard"><label for="masterCard">Master Card</label><br>
      	<input type="radio" name="cc_type" value="Discover" id="Discover"><label for="Discover">Discover</label><br>
      	<input type="radio" name="cc_type" value="American Express" id="AmericanExpress"><label for="AmericanExpress">American Express</label><br>
      	<input type="radio" name="cc_type" value="Debit" id="Debit"><label for="visa">Debit</label><br>
      </td>
    </tr>
    <tr>
      <td valign="top"><div align="left"><font size="2" face="Geneva, Arial, Helvetica, sans-serif"><strong><em>Card Number:
          </em></strong></font></div></td>
      <td colspan="2">
      	<input type="text" name="cc_num1" value="" maxlength="4" style="width: 40px;"> -
        <input type="text" name="cc_num2" value="" maxlength="4" style="width: 40px;"> -
        <input type="text" name="cc_num3" value="" maxlength="4" style="width: 40px;"> -
        <input type="text" name="cc_num4" value="" maxlength="4" style="width: 40px;">
      </td>
    </tr>

    <tr>
      <td valign="top"><div align="left"><font size="2" face="Geneva, Arial, Helvetica, sans-serif"><strong><em>Expiration Date:
          </em></strong></font></div></td>
      <td colspan="2">
      	Month <input type="text" name="exp_month" value="" maxlength="2" style="width: 20px;">
        Year <input type="text" name="exp_year" value="" maxlength="4" style="width: 40px;"><br>
      </td>
    </tr>
    <tr>
      <td valign="top"><div align="left"><font size="2" face="Geneva, Arial, Helvetica, sans-serif"><strong><em>Security Code:
          </em></strong></font></div></td>
      <td colspan="2">
        <input type="text" name="cc_code" value="" maxlength="4" style="width: 40px;">
      </td>
    </tr>
    <tr>
      <td valign="top"><div align="left"><font size="2" face="Geneva, Arial, Helvetica, sans-serif"><strong><em>Cardholder Name:
          </em></strong></font></div></td>
      <td colspan="2">
        <input type="text" name="cardholderName" value="">
      </td>
    </tr>
    <tr>
      <td valign="top"><div align="left"><font size="2" face="Geneva, Arial, Helvetica, sans-serif"><strong><em>ZIP:
          </em></strong></font></div></td>
      <td colspan="2">
        <input type="text" name="ZIP" value="" maxlength="5" style="width: 50px;">
      </td>
    </tr>

    <tr>
      <td colspan="3"><img src="line.jpg" width="600" height="14"></td>
    </tr>
    <tr>
      <td colspan="3"><p><b><font color="872800" size="+1" face="Geneva, Arial, Helvetica, sans-serif">Educational
          Institutions </font></b><br>
          <font color="#000000" size="2" face="Geneva, Arial, Helvetica, sans-serif">List
          All Educational Institutions Attended (From High/Secondary school).
          Specify which one is providing the Major Credentials you wish to have
          evaluated. Specify which one is providing the Other Credentials you
          wish to have evaluated.</font> <br>
          <br>
        </p></td>
    </tr>
    <tr>
      <td valign="top"> <div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">#1</font></strong></em></div></td>
      <td colspan="2"><font color="#000000" size="2" face="Geneva, Arial, Helvetica, sans-serif"><strong><em>Educational
        Institution</em></strong></font></td>
    </tr>
    <tr>
      <td valign="top"> <div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Name</font></strong></em></div></td>
      <td colspan="2"><input type="text" name="e_n" size="50" /> <br> <font color="#333333" size="1" face="Geneva, Arial, Helvetica, sans-serif">Name
        of School Attended</font></td>
    </tr>
    <tr>
      <td><div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Country:</font></strong></em></div></td>
      <td colspan="2"> <input type="text" name="e_c" size="30" /></td>
    </tr>
    <tr>
      <td valign="top"> <div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Diploma/Certificate:</font></strong></em></div></td>
      <td colspan="2"><input type="text" name="e_d" size="30" /> <br> <font color="#333333" size="1" face="Geneva, Arial, Helvetica, sans-serif">Diploma/Certificate
        Earned (if any)</font> </td>
    </tr>
    <tr>
      <td valign="top"> <div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Month/Year
          Entered: </font></strong></em></div></td>
      <td colspan="2"><input type="text" name="e_e" size="30" /> </td>
    </tr>
    <tr>
      <td valign="top"> <div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Month/Year
          Completed: </font></strong></em></div></td>
      <td colspan="2"><input type="text" name="e_c" size="30" /> </td>
    </tr>
    <tr>
      <td colspan="3"><p><img src="line.jpg" width="600" height="14"><br>
        </p></td>
    </tr>
    <tr>
      <td valign="top"> <div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">#2</font></strong></em></div></td>
      <td colspan="2"><font color="#000000" size="2" face="Geneva, Arial, Helvetica, sans-serif"><strong><em>Educational
        Institution</em></strong></font></td>
    </tr>
    <tr>
      <td valign="top"> <div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Name</font></strong></em></div></td>
      <td colspan="2"><input type="text" name="e_n2" size="50" /> <br> <font color="#333333" size="1" face="Geneva, Arial, Helvetica, sans-serif">Name
        of School Attended</font></td>
    </tr>
    <tr>
      <td><div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Country:</font></strong></em></div></td>
      <td colspan="2"> <input type="text" name="e_c2" size="30" /></td>
    </tr>
    <tr>
      <td valign="top"> <div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Diploma/Certificate:</font></strong></em></div></td>
      <td colspan="2"><input type="text" name="e_d2" size="30" /> <br> <font color="#333333" size="1" face="Geneva, Arial, Helvetica, sans-serif">Diploma/Certificate
        Earned (if any)</font> </td>
    </tr>
    <tr>
      <td valign="top"> <div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Month/Year
          Entered: </font></strong></em></div></td>
      <td colspan="2"><input type="text" name="e_e2" size="30" /> </td>
    </tr>
    <tr>
      <td valign="top"> <div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Month/Year
          Completed: </font></strong></em></div></td>
      <td colspan="2"><input type="text" name="e_c2" size="30" /> </td>
    </tr>
    <tr>
      <td colspan="3"><p><img src="line.jpg" width="600" height="14"><br>
        </p></td>
    </tr>
    <tr>
      <td valign="top"> <div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">#3</font></strong></em></div></td>
      <td colspan="2"><font color="#000000" size="2" face="Geneva, Arial, Helvetica, sans-serif"><strong><em>Educational
        Institution</em></strong></font></td>
    </tr>
    <tr>
      <td valign="top"> <div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Name</font></strong></em></div></td>
      <td colspan="2"><input type="text" name="e_n3" size="50" /> <br> <font color="#333333" size="1" face="Geneva, Arial, Helvetica, sans-serif">Name
        of School Attended</font></td>
    </tr>
    <tr>
      <td><div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Country:</font></strong></em></div></td>
      <td colspan="2"> <input type="text" name="e_c3" size="30" /></td>
    </tr>
    <tr>
      <td valign="top"> <div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Diploma/Certificate:</font></strong></em></div></td>
      <td colspan="2"><input type="text" name="e_d3" size="30" /> <br> <font color="#333333" size="1" face="Geneva, Arial, Helvetica, sans-serif">Diploma/Certificate
        Earned (if any)</font> </td>
    </tr>
    <tr>
      <td valign="top"> <div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Month/Year
          Entered: </font></strong></em></div></td>
      <td colspan="2"><input type="text" name="e_e3" size="30" /> </td>
    </tr>
    <tr>
      <td valign="top"> <div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Month/Year
          Completed: </font></strong></em></div></td>
      <td colspan="2"><input type="text" name="e_c3" size="30" /> </td>
    </tr>
    <tr>
      <td colspan="3"><img src="line.jpg" width="600" height="14"></td>
    </tr>
    <tr>
      <td colspan="3"><p><b><font color="872800" size="+1" face="Geneva, Arial, Helvetica, sans-serif">Other
          Party Submission</font></b><br>
          <font color="#000000" size="2" face="Geneva, Arial, Helvetica, sans-serif">Individual
          / Institution / Organization to whom the evaluation should be sent</font>
          <br>
          <br>
        </p></td>
    </tr>
    <tr>
      <td valign="top"> <div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">To:</font></strong></em></div></td>
      <td colspan="2"><input type="text" name="o_to" size="50" /> <br> <font color="#333333" size="1" face="Geneva, Arial, Helvetica, sans-serif">Individual/Institution/Organization</font>      </td>
    </tr>
    <tr>
      <td valign="top"> <div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Attention:</font></strong></em></div></td>
      <td colspan="2"><input type="text" name="o_att" size="30" /> <br> <font color="#333333" size="1" face="Geneva, Arial, Helvetica, sans-serif">Name/Department/Suite/Room</font></td>
    </tr>
    <tr>
      <td><div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Street:</font></strong></em></div></td>
      <td colspan="2"><input type="text" name="o_street" size="30" /></td>
    </tr>
    <tr>
      <td><div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">City:</font></strong></em></div></td>
      <td colspan="2"> <input type="text" name="o_city" size="30" /></td>
    </tr>
    <tr>
      <td><div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">State/Province:</font></strong></em></div></td>
      <td colspan="2"><input type="text" name="o_state" size="30" /></td>
    </tr>
    <tr>
      <td valign="top"> <div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Zip
          Code:</font></strong></em></div></td>
      <td colspan="2"><input type="text" name="o_zip" size="30" /> </td>
    </tr>
    <tr>
      <td valign="top"> <div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Country:</font></strong></em></div></td>
      <td colspan="2"> <input type="text" name="o_country" size="30" /> </td>
    </tr>
    <tr>
      <td valign="top"> <div align="left"><em><strong><font size="2" face="Geneva, Arial, Helvetica, sans-serif">Authorization:</font></strong></em></div></td>
      <td colspan="2"><input type="checkbox" name="o_athrz" value="y" /> <font size="-1">I
        authorize to release the evaluation report to another individual or institution
        named in this application.</font></td>
    </tr>
    <tr>
      <td colspan="3"><img src="line.jpg" width="600" height="14"></td>
    </tr>
    <tr>
      <td valign="top"> <div align="left"><font size="2" face="Geneva, Arial, Helvetica, sans-serif"><strong><em>Additional
          Comments:</em> </strong></font><font color="#666666" size="2" face="Geneva, Arial, Helvetica, sans-serif"><br>
          </font></div></td>
      <td colspan="2"><textarea name="feedback" rows="6" cols="30"></textarea>      </td>
    </tr>
    <tr>
      <td colspan="3"><img src="line.jpg" width="600" height="14"></td>
    </tr>
    <tr>
      <td colspan="3"><b><font color="872800" size="+1" face="Geneva, Arial, Helvetica, sans-serif">Terms
        of Service</font></b></td>
    </tr>
    <tr>
      <td colspan="3"><textarea name="textarea" cols="52" rows="10" readonly wrap="physical" title="Foreign Consultants, Inc Terms of Service">
1. REQUIRED DOCUMENTS
  A. Please scan, e-mail, or fax clear, legible copies of all
     Diplomas, Transcripts, and/or Certificates.
  B. If the documents are not in English:
     1) If you have translations, done in your
     country or any other country please fax
     together with the copies of your
     educational documents
     2) If you don't have translations you
     can order them from FCI at the prices
     listed above.
  C. Only Certified translator experienced
     in the Foreign Language in question can
     perform Legalized translation.
  D. Certified translator's signature should
     be notarized, according to the Law and
     Regulations of the country of origination
     of translation and   notarization.
  E. FCI needs copies of both: the Original
     language and the Translated documents.
     When documentation is not complete
     enough to provide the evaluation requested,
     the missing information will be requested
     and no further action will be taken until
     all the necessary documentation is on file
     with FCI.
  F. We can provide only Comparability Evaluations
     without detailed information about courses
     and grades (see detailed requirements)
  G. All other Evaluation Reports require both
     copies of the Diplomas and/or Certificates
     and their Official Academic Transcripts or
     Equivalent.

  For more details on Required Documentation go to
  http://www.foreignconsultants.com/required_documentation.pdf

2. PAYMENT OPTIONS
   A. No refund will be issued once Application
      has been submitted.
   B. No personal checks are accepted.
   C. Payments are limited to:
      1) Cashier Checks*
      2) Money Orders*
      3) All Credit Cards are accepted (Visa,
         Master Card, Discover, American Express)

3. PROCESSION
   A. Processing time is at least 3 weeks, depending
      on the availability of the institution research.
   B. One copy of the evaluation report are included
      in the basic fee.
   C. $40 for each additional copy.
   D. Two copies of Certified Translations will
      be provided, if ordered from FCI.
   E. No refunds will be issued once an
      application has been submitted.
   F. Fees are subject to change without notice.

4. AFFIRMATIONS
I hereby certify that the information provided on this Application, and in the documents included, is true, accurate, and correct to the best of my knowledge. I understood that this evaluation is advisory in nature and that Foreign Consultants, Inc. assumes no responsibility or liability for consequential damages when the desired equivalency cannot be recommended. I agree to reimburse Foreign Consultants, Inc. for any and all costs, including legal expenses, which it may incur as a result of any claim that I or anyone having an interest in my earnings or services may make based on the evaluation determination which foreign Consultants, Inc. makes relaying on the application. I hereby certify that I have read and understand the instructions and conditions provided with this form and that I agree to the Terms stated therein. I understood that if false, forged, altered or falsified documents are submitted to FCI, Inc., no evaluation report will be prepared, no refund will be made, the designees for copies of the report will be notified, and the information will be shared with academic institutions, government agencies, professional organizations and other evaluation services.


You must click "I Agree" button in order for
this application to be processed.</textarea></td>
    </tr>
    <tr>
      <td colspan="3"><font size="2" face="Geneva, Arial, Helvetica, sans-serif">By
        clicking "I Agree" you agree and consent to Foreign Consultants, Inc. Terms
        of Service.</font><br> <br> <input name="submit" type="submit" value="I Agree" />
        <strong><font size="+1" face="Geneva, Arial, Helvetica, sans-serif"> </font></strong></td>
    </tr>
  </table>
  </form>
