<? 
$title="Comparability Evaluation (Associate and Bachelor Degree only)";
?>
<?php require("inc/header.php"); ?>
<table WIDTH="770" BORDER="0" CELLPADDING="15" CELLSPACING="0" style="border-collapse: collapse" bordercolor="#111111">
      <tr>
        <td bgcolor="#C6AE52" width="450" valign="top">
        <font color="#800000" size="2"><b>Consultations</b></font><hr noshade color="#FFFF00" size="1">
        <p><span style="background-color: #C6AE52">This service is designed for 
        those customers, which are not sure how to use their Foreign Credentials 
        in cases of:</span></p>
        <ul>
          <li>Incomplete education</li>
          <li>Applying for Advanced Degrees</li>
          <li>Employment (US &amp; International)</li>
          <li>Immigration </li>
          <li>Licensing</li>
          <li>Comparable program research</li>
        </ul>
        <p>Price: $50</p>
<SCRIPT LANGUAGE="JavaScript">
function anable() {
//frm=document.forms[0]
if(frm.cbox.checked) 
{frm.ENROLL.disabled=false}
else {frm.ENROLL.disabled=true}
}
        </SCRIPT>
        <form method="POST" name="frm" action="ordering.php">
<p align="center">
          <input name="cbox" type="checkbox" id="cbox" value="ON" onClick=anable();>&nbsp; I reviewed and I 
          Agree with <a target="_blank" class="sublink" href="pppa.html">Procedures and Policies for Processing Applications</a></p>
          <p align="center"><input type="submit" value="ENROLL NOW" name="ENROLL" disabled></p>
        </form>
        <p><br>
&nbsp;</td>
        <td valign="top"><?php require("inc/courses.php"); ?></td>
      </tr>
</table>
<?php require("inc/footer.php"); ?>
