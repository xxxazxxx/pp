<meta http-equiv="Content-Language" content="en-us">
<div align="center">
  <center>
  <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="937" height="422">
    <tr>
      <td width="197" height="41">&nbsp;</td>
      <td width="734" height="41">&nbsp;</td>
    </tr>
    <tr>
      <td width="197" height="377">&nbsp;</td>
      <td width="734" height="377">Log Processing</td>
    </tr>
  </table>
  </center>
</div>

<%
Response.Buffer=true

Dim userid, pwd1,cn,rs,email,password,errormsg

userid=trim( Request.Form("uid"))

if userid <> "" then
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
                            response.redirect ("jgnresponse.asp?errormsg=Incorrect Password.")
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
End if
%>