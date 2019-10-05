<?
$title="Comparability Evaluation (Associate and Bachelor Degree only)";
?>
<?php require("inc/header.php"); ?>
<table WIDTH="770" BORDER="0" CELLPADDING="15" CELLSPACING="0" style="border-collapse: collapse" bordercolor="#111111">
      <tr>
        <td bgcolor="#C6AE52" width="450" valign="top">
        <font color="#800000" size="2"><b>Comparability Evaluation Degree <br>
        (Associate, Bachelors and Masters)</b></font><hr noshade color="#FFFF00" size="1">
        <ul>
          <li>Gives an equivalent for each Diploma, Certificate, or Transcript (Grade report, Examination record, Marks sheet) submitted for evaluation</li>
          <li>Presents dates of attendance and institution location</li>
          <li>Describes profile of the institution and programs (entrance criteria, status of the institution in this country, typical and real length of study)</li>
          <li>Recommends the U.S. equivalent of each level of study and credential earned</li>
        </ul>
        <p><b>Used for: </b><br>
		Education, when Transferred credits and Courses taken are not relevant, Employment, Immigration, Licensing, Military Enlistments</p>
        <p>Price: $100</p>
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
