<html>

<head>
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>New Page 1</title>
</head>


<body>

<%
userid=trim( Request.Form("uid"))
pwd1 = trim(Request.Form("passwd"))
	
set cn = Server.CreateObject("ADODB.Connection")

'cn.open("FILEDSN=D:\Program Files\Common Files\ODBC\Data Sources\rrsdsn.dsn")
cn.open "Driver={Microsoft Access Driver (*.mdb)}; DBQ="&Server.MapPath("jgndb.mdb") & ";"
     Set rs = Server.CreateObject("ADODB.Recordset")

rs.ActiveConnection=cn
     rs.LockType = 2
     rs.Source = "adm"
     rs.Open  
rs.movefirst
  do while NOT rs.eof

      If strcomp(userid,trim( Rs.Fields("username").value) , 1) = 0 then
   ' If Not Rs.EOF then
      
          If strcomp( pwd1,trim( Rs.Fields("pwd").value) , 1) = 0 then
            'Password is correct. Set a session variable, and redirect the user to a Default.asp page
            'or the main page in your application.
            Session("UID") = userid
             'temp = rs("registered")
                      'if  temp = 1 then 
                           Response.Redirect "jgnreports.asp"
                           Response.End
                     else
                            response.redirect ("jgnresponse.asp?errormsg=Incorect Password.")
                            'response.redirect ("ls response.asp?errormsg=You are not a registered member. Kindly get registered.")
                      end if

           Else
           'Password is incorrect. Redirect the user to the logon page.
            Response.Redirect "jgnresponse.asp?errormsg=Incorect Username"
            Response.End
            rs.movenext
        End if
     

  'Else
	
        If Not Rs.EOF then
           rs.movenext
        else
         'If the user is not in your database, point him or her to the Register.asp page
         'so that he or she can register at your Web site to access your application.
        Response.Redirect ("jgnresponse.asp?errormsg=User Id not found.")
        response.write userid
        Response.End
        rs.movenext
   End if

 'End if
 
 
Loop



%>



<div align="left">
  <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="844" height="334">
    <tr>
      <td width="197" height="31">&nbsp;</td>
      <td width="641" height="31">&nbsp;</td>
    </tr>
    <tr>
      <td width="197" height="299">&nbsp;</td>
      <td width="641" height="299">&nbsp;</td>
    </tr>
  </table>
</div>

</body>

</html>