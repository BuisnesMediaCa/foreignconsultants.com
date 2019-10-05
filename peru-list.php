<?php require("inc/header.php"); ?>
<table width="738" BORDER="0" CELLPADDING="15" CELLSPACING="0" style="border-collapse: collapse" bordercolor="#111111">
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
?>
<p align="left"><font color="#800000" size="2"><b><a href="peru.php">Universities of Peru</a></b><br />
<b><a href="peru-educ.php">Educational system of Peru</a></b>
</font>
<hr noshade color="#FFFF00" size="1"></p>
<p align="right"><? } ?>
  </tr>
</table>
<?php require("inc/footer.php"); ?>
