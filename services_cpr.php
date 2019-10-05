<?
$title="Comparability Evaluation (Associate and Bachelor Degree only)";
?>
<?php require("inc/header.php"); ?>
<table WIDTH="770" BORDER="0" CELLPADDING="15" CELLSPACING="0" style="border-collapse: collapse" bordercolor="#111111">
      <tr>
        <td bgcolor="#C6AE52" width="450" valign="top">
        <font color="#800000" size="2"><b>Comparable program research</b></font><hr noshade color="#FFFF00" size="1">
		<p>This service is designed for those customers, which for different  reasons were unable to retrieve their academic transcripts from the schools of  origination.<br />
		<br />
		FCI provides them with the comparable program from either their own school or  typical program adopted in the education system of their country<br />
		In this case we are unable to calculate GPA<br />
        <br>
        <b>Used for: </b><br>
        Course-by- Course report<br>
&nbsp;</p>
        <p>Price: $250</p>
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
