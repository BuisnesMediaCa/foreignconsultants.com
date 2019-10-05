<? // asp2php (vbscript) converted
?>
<? // Option $explicit; ?>
<? set_time_limit(600);
?>
<? 
//------------------------------------------- FORMMAIL V1.3 ------------------------------------------


//----------------------------------------------------------------------------------------------------

//copyright information

//----------------------------------------------------------------------------------------------------

//Copyright 2002: Sorted Sites http://www.sortedsites.com

//Authors Jonas Tornqvist, David Parkes and Karl Snares

//This script is Freeware, which means you are free to use and modify 

//the script for your own use.

//The only condition is this copyright header remain intact and you don't //try and sell this script for profit without first asking us. 

//And of course also ask Matt Wright who wrote the original perl version of Formmail.


//----------------------------------------------------------------------------------------------------

//license agreement - Important

//----------------------------------------------------------------------------------------------------

//By using this script you agree to indeminfy the developers - Sorted Sites of any loss

//or damages that may arise from its use or missue.

//This script is provided as is with all faults - no warranties and no guarantees.

//basically its free - use it at your own risk and cost.

//No warranties and no tech support - if you need help with this don't ask us!//The documentation is provided as is with all the help we can offer.

//As we develop this script we shall post updates hopefully fix any bugs

//We are not obliged to release any future versions and we might not bother...

//By using this script you accept this license agreement!


//----------------------------------------------------------------------------------------------------

//documentation v1.3

//----------------------------------------------------------------------------------------------------


//####################################################################################################

//this is where the code starts for real

//####################################################################################################


//----------------------------------------------------------------------------------------------------

//declare variables

//----------------------------------------------------------------------------------------------------


//############################## CONFIGURATION VARIABLES ####################################


//These are the only lines you will need to change

//----------------------------------------------------------------------------------------------------

$strServer="smtp.foreignconsultants.com"; //set which smtp server will be used to send the email. enter ip address or domain name. eg: "xxx.xxx.xxx.xxx" or "smtp.your-domain.com"
;
$intPort=25; //set the smtp port to be used when sending mail (by default port 25 is used)
;
//Referrer's Array is defined here. Enter the valid domains which may use this script.$url=array("www.foreignconsultants.com","foreignconsultants.com","bizdev.ca");
//Set which urls that will be accepted. http://xxxxx/

//Seperate multiple domains by commas 

//eg: url= Array("www.your-domain.com","your-domain.com","www.my-domain.com")

//computer names can be used instead of domains if this script is being run locally

//eg: url = Array("computername")


//######################################### IMPORTANT NOTICE #########################################

//IMPORTANT: do not modify anything below this line unless you know what you are doing!!

//######################################### IMPORTANT NOTICE #########################################


//----------------------------------------------------------------------------------------------------

//retrieved default fields

//----------------------------------------------------------------------------------------------------

$recipient=${"recipient"};
$redirect=${"redirect"};
$subject=${"subject"};
$email=${"email"};
$required=${"required"};
if ($required=="")
{

  $required="recipient,subject,email,redirect";
}
  else
{

  $required="recipient,subject,email,redirect,".$required;
} 


//----------------------------------------------------------------------------------------------------

//verify the referer

//----------------------------------------------------------------------------------------------------

$referer=$_SERVER["HTTP_REFERER"];
$referer=$split[$referer]["/"];
$url_verified="no";
for ($icounter=0; $icounter<=count($url); $icounter=$icounter+1)
{

  if ($referer[2]==$url[$icounter])
  {

    $url_verified="yes";
  } 


} 

if (!$url_verified=="yes")
{

  print "The url specified is invalid!";
  exit();

} 


//----------------------------------------------------------------------------------------------------

//verify the recipient(not tested)

//----------------------------------------------------------------------------------------------------

//trimed_referer = split(referer(2),".")'//response.write recipient & "<br>" & referer(2) & "=" & trimed_referer(0) & "<br>"

//if trimed_referer(0) = "www" then

//	if InStr(1,recipient,trimed_referer(1),1) = 0 then

//		response.write "recipient don't match the referer"//		response.end

//	end if

//else

//	if InStr(1,recipient,trimed_referer(0),1) = 0 then

//		response.write "recipient don't match the referer"//		response.end

//	end if

//end if


//----------------------------------------------------------------------------------------------------

//retrieve form contents and create email fields

//---------------------------------------------------------------------------------------------------- 

$query=$_SERVER["QUERY_STRING"];
$query=$split[$query]["&"];
$query3=$split[$required][","];
for ($iLoop=0; $iLoop<=count($query); $iLoop=$iLoop+1)
{

  $query2=$split[$query[$iloop]]["="];

//----------------------------------------------------------------------------------------------------

//form validation, checks required fields are not null

//----------------------------------------------------------------------------------------------------

  for ($i=0; $i<=count($query3); $i=$i+1)
  {

    if ($query3[$i]==$query2[0])
    {

      if ($query2[1]=="")
      {

        print "you must enter a valid ";        $query2[0];
        exit();

      } 

    } 


//if query2(0) = "agree" then

//if query2(1) <> "on" or query2(1) = "" then

//	response.write("You must agree to terms and conditions to enable Formmailv1.3 to execute!")

//response.end

//end if

//end if


//----------------------------------------------------------------------------------------------------

//form validation, checks a valid email address has been specified

//----------------------------------------------------------------------------------------------------			

    if ($query2[0]=="email")
    {

      $trim[$query2[0]];
      if (strlen($query2[1])<8)
      {

        print "You must specify a valid ";        $query2[0];
        exit();

      } 

      if ((strpos($query2[1],"@") ? strpos($query2[1],"@")+1 : 0)==0 && (strpos($query2[1],".") ? strpos($query2[1],".")+1 : 0)==0)
      {

        print $query2[1];
        print "You must specify a valid ";        $query2[0];
        exit();

      } 

      $strEmail1=$split[$query2[1]]["@"];
      if (strlen($strEmail1[1])<3)
      {

        print "You must specify a valid ";        $query2[0];
        exit();

      } 

      $strEmail2=$split[$strEmail1[1]]["."];
      if (strlen($strEmail2[0])<3)
      {

        print "You must specify a valid ";        $query2[0];
        exit();

      } 

      if (strlen($strEmail2[1])<2)
      {

        print "You must specify a valid ";        $query2[0];
        exit();

      } 

    } 


//----------------------------------------------------------------------------------------------------

//form validation, checks terms and conditions checkbox has been ticked

//----------------------------------------------------------------------------------------------------



  } 

  if (!$query2[0]=="recipient" && !$query2[0]=="redirect" && !$query2[0]=="subject" && !$query2[0]=="realname" && !$query2[0]=="email" && !$query2[0]=="required" && !$query2[0]=="agree")
  {

    $strBody=$strBody."\n"."\n".$query2[0].": ".$query2[1];
  } 


} 

if ($email=="")
{

  $email="formmail@".$referer[2];
} 

//----------------------------------------------------------------------------------------------------

//replaces any special characters parsed through the query string

//----------------------------------------------------------------------------------------------------

$strbody=str_replace("+"," ",$strbody);
$strbody=str_replace("%26%238364%3B","€",$strbody);
$strbody=str_replace("%A1","¡",$strbody);
$strbody=str_replace("%A3","£",$strbody);
$strbody=str_replace("%A8","¨",$strbody);
$strbody=str_replace("%AA","ª",$strbody);
$strbody=str_replace("%AC","¬",$strbody);
$strbody=str_replace("%B4","´",$strbody);
$strbody=str_replace("%B7","·",$strbody);
$strbody=str_replace("%BA","º",$strbody);
$strbody=str_replace("%BF","¿",$strbody);
$strbody=str_replace("%C7","Ç",$strbody);
$strbody=str_replace("%E7","ç",$strbody);
$strbody=str_replace("%0D%0A","\n",$strbody);
$strbody=str_replace("%21","!",$strbody);
$strbody=str_replace("%23","#",$strbody);
$strbody=str_replace("%24","$",$strbody);
$strbody=str_replace("%25","%",$strbody);
$strbody=str_replace("%26","&",$strbody);
$strbody=str_replace("%27","'",$strbody);
$strbody=str_replace("%28","(",$strbody);
$strbody=str_replace("%29",")",$strbody);
$strbody=str_replace("%2B","+",$strbody);
$strbody=str_replace("%2C",",",$strbody);
$strbody=str_replace("%2D","-",$strbody);
$strbody=str_replace("%2E",".",$strbody);
$strbody=str_replace("%2F","/",$strbody);
$strbody=str_replace("%3A",":",$strbody);
$strbody=str_replace("%3B",";",$strbody);
$strbody=str_replace("%3C","<",$strbody);
$strbody=str_replace("%3D","=",$strbody);
$strbody=str_replace("%3E",">",$strbody);
$strbody=str_replace("%3F","?",$strbody);
$strbody=str_replace("%5B","[",$strbody);
$strbody=str_replace("%5C","\",$strbody);
$strbody=str_replace("%5D","]",$strbody);
$strbody=str_replace("%5E","^",$strbody);
$strbody=str_replace("%5F","_",$strbody);
$strbody=str_replace("%60","`",$strbody);
$strbody=str_replace("%7B","{",$strbody);
$strbody=str_replace("%7C","|",$strbody);
$strbody=str_replace("%7D","}",$strbody);
$strbody=str_replace("%7E","~",$strbody);

print $strbody;

//----------------------------------------------------------------------------------------------------

//this creates the body of the mail message, the text in quotes can be modified accordingly 

//---------------------------------------------------------------------------------------------------

$strBody="Here is the results of your form submitted from".$referer[2]."\n"."\n"."Name: ".$realname."\n"."\n"."Email: ".$email."\n".$strBody."\n"."\n"."############# End Formmail Tranmission #############";

print $strbody;

//----------------------------------------------------------------------------------------------------

//checks if a smtp port has been specified, if not it uses the default port 25

//----------------------------------------------------------------------------------------------------

if ($intport!=25)
{

  $intport=$intport;
}
  else
{

  $intport=25;
} 


if ($email=="")
{

  $email="info@foreignconsultants.com";
} 


//----------------------------------------------------------------------------------------------------

//send the mail message

//----------------------------------------------------------------------------------------------------	

// $objEmail is of type "CDONTS.NewMail"


mail(//objEmail.MailFormat = 0
,,$objEmail=null;
,"From: ".$BodyFormat=1);
mail(,//----------------------------------------------------------------------------------------------------
,//send them to the page specified
,"From: ".$Send);
mail(//----------------------------------------------------------------------------------------------------
,$Response->Redirect$redirect,,"From: ".$Body=$strBody);
mail(//####################################################################################################
,//This is where the code ends
,//####################################################################################################
,"From: ".$Subject=$subject);
mail(,,,"From: ".=$recipient);
mail(,,,"From: ".$From="info@foreignconsultants.com");
?>
<!-- That's All Folks -->
<!-- Happy Surfing -->
<!-- Credits -->
<!-- David Parkes - Project Planning -->
<!-- Jonas Tornqvist - Lead Programmer version 1-->
<!-- Karl Snares - Lead Programmer version 1.2 & 1.3
<!-- Matt Wright - Original Formmail CGI Developer -->
