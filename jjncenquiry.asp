<html>

<head>
<style fprolloverstyle>A:hover {color: #000000; text-decoration: blink}
</style>
<meta http-equiv="Content-Language" content="en-us">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
</head>

<body topmargin="0" bgcolor="#FFFFFF" link="#666666" vlink="#666666" alink="#666666">

<div align="center">
  <center>
  <table border="0" cellspacing="1" width="101%" id="AutoNumber1" height="367">
    <tr>
      <td width="100%" height="364">
      <div align="center">
        <center>
        <table border="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="97%" id="AutoNumber2" cellpadding="0" height="330">
          <tr>
            <td width="100%" height="74" valign="middle" bordercolor="#000080" bgcolor="#000168">
            <p align="center">
      <b><font color="#FFFFFF" face="Century Gothic" size="5">Pratik Panels Ltd.<br>
&nbsp;</font></b></td>
          </tr>
          <tr>
            <td width="100%" height="20">
            <p align="center">
            <b><font face="Arial" size="2" color="#FFFFFF">
      Administrative Page</font></b></td>
          </tr>
          <tr>
            <td width="100%" height="12" bgcolor="#FFFFFF">
            <p align="center">&nbsp;</td>
          </tr>
          <tr>
            <td width="100%" height="9" bgcolor="#FFFFFF">
            <p align="center"><u><b><font face="Arial" color="#125B7E">
            ENQUIRY LIST</font></b></u></td>
          </tr>
          <tr>
            <td width="100%" height="10" bgcolor="#FFFFFF">
            &nbsp;</td>
          </tr>
          <tr>
            <td width="100%" height="201" bgcolor="#FFFFFF" valign="top">
            
            
            
            <table border="1" cellspacing="1" width="931" id="AutoNumber2" height="70">
          <tr>
            <td width="33" height="47" align="center" bgcolor="#CCCCCC"><b>
            <font face="Arial" size="2">Sno.</font></b></td>
            <td width="178" height="47" align="center" bgcolor="#CCCCCC"><b>
            <font face="Arial" size="2">Name</font></b></td>
            <td width="112" height="47" align="center" bgcolor="#CCCCCC"><b>
            <font face="Arial" size="2">Address</font></b></td>
            <td width="89" height="47" align="center" bgcolor="#CCCCCC"><b>
            <font face="Arial" size="2">City</font></b></td>
            <td width="98" height="47" align="center" bgcolor="#CCCCCC"><b>
            <font face="Arial" size="2">Phone No.</font></b></td>
            <td width="110" height="47" align="center" bgcolor="#CCCCCC"><b>
            <font face="Arial" size="2">Mobile No.</font></b></td>
            <td width="124" height="47" align="center" bgcolor="#CCCCCC"><b>
            <font face="Arial" size="2">Email</font></b></td>
            <td width="124" height="47" align="center" bgcolor="#CCCCCC"><b>
            <font face="Arial" size="2">Enquiry</font></b></td>
            <td width="144" height="47" align="center" bgcolor="#CCCCCC"><b>
            <font face="Arial" size="2">Date</font></b></td>
          </tr>
          
         <% 

dim cn,rs,counter,mmohalla,msex,regno


searchno=request.querystring("sno")
counter=0
rec=searchno

set cn = server.createobject("ADODB.Connection")
'cn.open("FILEDSN=D:\Program Files\Common Files\ODBC\Data Sources\rrsdsn.dsn")
cn.open "Driver={Microsoft Access Driver (*.mdb)}; DBQ="&Server.MapPath("jgndb.mdb") & ";"

Set rs = Server.CreateObject("ADODB.Recordset")

rs.Source = "enquiry"

SQL="Select * From enquiry order by sno" 
Set rs=cn.Execute(SQL)

rs.Move rec
        
do While NOT rs.eof  
   rec=rec+1
   mtemp=rs("temp")

   if mtemp="0" then
          
         counter=counter+1


sno=trim(rs("sno"))
name=trim(rs("name"))
add=trim(rs("add"))
city=trim(rs("city"))
phone=trim(rs("phone"))
mob=trim(rs("mob"))
email=trim(rs("email"))
enquiry=trim(rs("enquiry"))
jjdate=trim(rs("jjdate"))
%>

          <tr>
            <td width="33" height="23"><p align="center" style="margin-left: 3; margin-right: 3">
            <font face="Verdana" size="2"><% Response.Write(sno)%></font></td>
            <td width="178" height="23"><p align="center" style="margin-left: 3; margin-right: 3">
            <font face="Verdana" size="2"><% Response.Write(name)%></font></td>
            <td width="112" height="23"><p align="center" style="margin-left: 3; margin-right: 3">
            <font face="Verdana" size="2"><% Response.Write(add)%></font></td>
            <td width="89" height="23"><p align="center" style="margin-left: 3; margin-right: 3">
            <font face="Verdana" size="2"><% Response.Write(city)%></font></td>
            <td width="98" height="23"><p align="center" style="margin-left: 3; margin-right: 3">
            <font face="Verdana" size="2"><% Response.Write(phone)%></font></td>
            <td width="110" height="23"><p align="center" style="margin-left: 3; margin-right: 3">
            <p align="center" style="margin-left: 3; margin-right: 3">
            <font face="Verdana" size="2"><% Response.Write(mob)%></font></td>
            <td width="124" height="23"><font face="Verdana" size="2"><% Response.Write(email)%></font></td>
            <td width="124" height="23"><font face="Verdana" size="2"><% response.write(enquiry)%></font></td>
            <td width="144" height="23"><p style="margin-left: 3; margin-right: 3">
            <font face="Verdana" size="2"><% Response.Write(jjdate)%></font></td>
          </tr>
          
          <% rs.movenext
        
         if counter=20 then
            rec = rec
            rs.close
            exit do
          end if
     else
       rs.movenext

    end if

     Loop

%>

        </table>



</td>
        </tr>
          <tr>
            <td width="100%" height="30" bgcolor="#FFFFFF" valign="top">
            
            
            
            <p align="center">
            
            
            <form method="POST" action="jjnenqdel.asp">
            
            
            
       <p align="center">
        <b><font face="Arial" size="2">Delete S.No.&nbsp; :</font></b>&nbsp;
        <input type="text" name="sno" size="7">&nbsp;&nbsp;
        <input type="submit" value="Del" name="B1"></p>
      </form>
</td>
          </tr>
          <tr>
            <td width="100%" height="34" bgcolor="#FFFFFF" valign="middle">
            
            
            
            <p align="center"><b><font face="Arial" size="2">
            <a href="jgnreports.asp">Back</a></font></b></td>
          </tr>
        </table>
      </center>
    </div>
    </td>
  </tr>
</table>


            
            </td>
          </tr>
          <tr>
            <td width="100%" height="10">
            &nbsp;</tr></table></center>
      </div>
      </td>
    </tr>
  </table>
  </center>
</div>

</body>

</html>