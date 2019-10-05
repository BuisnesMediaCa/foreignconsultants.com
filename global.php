<?php require("inc/header.php"); ?>
<table WIDTH="770" BORDER="0" CELLPADDING="15" CELLSPACING="0" style="border-collapse: collapse" bordercolor="#111111">
  <tr>
    <td bgcolor="#C6AE52" width="450" valign="top">
<? 
if ($_GET["country"]!="")
{

  $temp="countries/".$_GET["country"].".txt";
//Server.Execute(temp)



  $blogfile=$DOCUMENT_ROOT."/countries/".$_GET["country"].".htm";
// $objFSO is of type "Scripting.FileSystemObject"
$objCountFile=fopen($blogfile,"r");
  $news=fgets($objCountFile,65535);
  $news=file_get_contents($blogfile);
  fclose($objCountFile);
  $objCountFile=null;

  $objFSO=null;

  print $news;
}
  else
{
?><p align="right"><font color="#800000" size="2"><b>FCI #1 Global Company </b>
</font>
<hr noshade color="#FFFF00" size="1"></p>

<p>FCI examined Educational Credentials, completed Evaluation Reports and 
advised on the most successful Application of Foreign Education for the alumni 
and students from the following Universities World Wide</p>
<center>
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
  codebase="http://active.macromedia.com/flash4/cabs/swflash.cab#version=4,0,0,0"
  id="diploma" width="135" height="91">
  <param name="movie" value="diploma.swf">
  <param name="quality" value="high">
  <param name="bgcolor" value="#FFFFFF">
  <embed name="diploma" src="diploma.swf" quality="high" bgcolor="#FFFFFF"
    width="135" height="91"
    type="application/x-shockwave-flash"
    pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash">
  </embed></object>
</center>
<p align="right"><a href="../registry.htm"><font color="#800000" size="2"><b>FCI registry</b></font></a><? } ?>
<hr noshade color="#FFFF00" size="1">



<p class="MsoNormal">Registration Listing for the <i> <b>express verification</b><span style="font-size: 14.0pt"> </span>
</i>of the Evaluation Reports issued by Foreign 
Consultants, Inc.</p>
<p class="MsoNormal">Designed as a complementary for Educational institutions, 
Government entities, Employers, Immigration, US Army, Other interested parties.</p>
<p class="MsoNormal">Submission is free. On the Client’s request only.</p>
</td>
    <td valign="top"><?php require("inc/countries.php"); ?>
    
</td>
  </tr>
</table>
<?php require("inc/footer.php"); ?>
