<?
$title="Comparability Evaluation (Associate and Bachelor Degree only)";
?>
<?php require("inc/header.php"); ?>
<table WIDTH="770" BORDER="0" CELLPADDING="15" CELLSPACING="0" style="border-collapse: collapse" bordercolor="#111111">
      <tr>
        <td bgcolor="#C6AE52" width="450" valign="top">
        <font color="#800000" size="2"><b>Education and Work Experience Report</b></font><hr noshade color="#FFFF00" size="1">
        <ul>
		  <li>This report provides the same information as the Course-by-Course report for the years of education</li>
		  <li>Recommended for purposes when a combination of education, professional training, and work experience is needed to establish degree equivalency</li>
		  <li>May be utilized to establish bachelor's and master's equivalence, and may also be utilized for National Interest Waivers and to establish a position as a Specialty occupation</li>
        </ul>
        <p><b>Used for: </b><br>
        Employment, Immigration, and in special cases for Continuation of Education<br>
&nbsp;</p>
        <p>Price: $500</p>
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
