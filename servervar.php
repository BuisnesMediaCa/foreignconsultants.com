<? // asp2php (vbscript) converted
?>

<!*************************
This sample is provided for educational purposes only. It is not intended to be 
used in a production environment, has not been tested in a production environment, 
and Microsoft will not provide technical support for it. 
*************************>

<HTML>
    <HEAD>
        <TITLE>HTTP Server Variables</TITLE>
    </HEAD>

    <BODY bgcolor="White" topmargin="10" leftmargin="10">


        <!-- Display header. -->

        <FONT size="4" face="ARIAL, HELVETICA">
        <B>HTTP Server Variables</B></FONT><BR>
      
        <HR size="1" color="#000000">
        
        
        <!-- Use a HTML table to format the server variables -->
        <!-- and respective values. -->

        <TABLE border=1>

            <!-- Table header. -->

            <TR>
                <TD><B>Variables</B></TD>
                <TD><B>Value</B></TD>
            </TR>
        
            <TR>
            <TD>ALL_HTTP</TD>
            <TD>
                <? echo $_SERVER["ALL_HTTP"]; ?>
            </TD>
            </TR>

            <TR>
            <TD>ALL_RAW</TD>
            <TD>
                <? echo $_SERVER["ALL_RAW"]; ?>
            </TD>
            </TR>

            <TR>
            <TD>CONTENT_LENGTH</TD>
            <TD>
                <? echo $_SERVER["CONTENT_LENGTH"]; ?>
            </TD>
            </TR>

            <TR>
            <TD>CONTENT_TYPE</TD>
            <TD>
                <? echo $_SERVER["CONTENT_TYPE"]; ?>
            </TD>
            </TR>

            <TR>
            <TD>QUERY_STRING</TD>
            <TD>
                <? echo $_SERVER["QUERY_STRING"]; ?>
            </TD>
            </TR>

            <TR>
            <TD>SERVER_SOFTWARE</TD>
            <TD>
                <? echo $_SERVER["SERVER_SOFTWARE"]; ?>
            </TD>
            </TR>

            <TR>
            <TD>CONTENT_LENGTH </TD>
            <TD>
                <? echo $_SERVER["CONTENT_LENGTH"]; ?>
            </TD>
            </TR>

            <TR>
            <TD>HTTPS</TD>
            <TD>
                <? echo $_SERVER["HTTPS"]; ?>
            </TD>
            </TR>

            <TR>
            <TD>LOCAL_ADDR </TD>
            <TD>
                <? echo $_SERVER["LOCAL_ADDR"]; ?>
            </TD>
            </TR>

            <TR>
            <TD>HTTPS</TD>
            <TD>
                <? echo $_SERVER["HTTPS"]; ?>
            </TD>
            </TR>

            <TR>
            <TD>PATH_INFO </TD>
            <TD>
                <? echo $_SERVER["PATH_INFO"]; ?>
            </TD>
            </TR>

            <TR>
            <TD>PATH_TRANSLATED </TD>
            <TD>
                <? echo $_SERVER["PATH_TRANSLATED"]; ?>
            </TD>
            </TR>

            <TR>
            <TD>REMOTE_ADDR </TD>
            <TD>
                <? echo $_SERVER["REMOTE_ADDR"]; ?>
            </TD>
            </TR>

            <TR>
            <TD>REMOTE_HOST  </TD>
            <TD>
                <? echo $_SERVER["REMOTE_HOST"]; ?>
            </TD>
            </TR>

            <TR>
            <TD>REQUEST_METHOD</TD>
            <TD>
                <? echo $_SERVER["REQUEST_METHOD"]; ?>
            </TD>
            </TR>

            <TR>
            <TD>SERVER_NAME</TD>
            <TD>
                <? echo $_SERVER["SERVER_NAME"]; ?>
            </TD>
            </TR>

            <TR>
            <TD>SERVER_PORT</TD>
            <TD>
                <? echo $_SERVER["SERVER_PORT"]; ?>
            </TD>
            </TR>

            <TR>
            <TD>SERVER_PROTOCOL</TD>
            <TD>
                <? echo $_SERVER["SERVER_PROTOCOL"]; ?>
            </TD>
            </TR>

            <TR>
            <TD>SERVER_SOFTWARE</TD>
            <TD>
                <? echo $_SERVER["SERVER_SOFTWARE"]; ?>
            </TD>
            </TR>

            <TR>
            <TD>HTTP_ACCEPT</TD>
            <TD>
                <? echo $_SERVER["HTTP_ACCEPT"]; ?>
            </TD>
            </TR>

            <TR>
            <TD>HTTP_USER_AGENT</TD>
            <TD>
                <? echo $_SERVER["HTTP_USER_AGENT"]; ?>
            </TD>
            </TR>

            <TR>
            <TD>HTTP_UA_PIXELS</TD>
            <TD>
                <? echo $_SERVER["HTTP_UA_PIXELS"]; ?>
            </TD>
            </TR>

            <TR>
            <TD>HTTP_UA_COLOR</TD>
            <TD>
                <? echo $_SERVER["HTTP_UA_COLOR"]; ?>
            </TD>
            </TR>

            <TR>
            <TD>HTTP_UA_OS</TD>
            <TD>
                <? echo $_SERVER["HTTP_UA_OS"]; ?>
            </TD>
            </TR>

            <TR>
            <TD>HTTP_UA_CPU</TD>
            <TD>
                <? echo $_SERVER["HTTP_UA_CPU"]; ?>
            </TD>
            </TR>

            <TR>
            <TD>HTTP_REFERER </TD>
            <TD>
                <? echo $_SERVER["HTTP_REFERER"]; ?>
            </TD>
            </TR>

            <TR>
            <TD>HTTP_CONNECTION </TD>
            <TD>
                <? echo $_SERVER["HTTP_CONNECTION"]; ?>
            </TD>
            </TR>

            <TR>
            <TD>URL </TD>
            <TD>
                <? echo $_SERVER["URL"]; ?>
            </TD>
            </TR>

            <TR>
            <TD>REMOTE_USER</TD>
            <TD>
                <? echo $_SERVER["REMOTE_USER"]; ?>
            </TD>
            </TR>

        </TABLE>
    </BODY>
</HTML>

