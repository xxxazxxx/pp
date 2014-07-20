<% 

set cn = Server.CreateObject("ADODB.Connection")
'cn.open("FILEDSN=D:\Program Files\Common Files\ODBC\Data Sources\rrsdsn.dsn")
cn.open "Driver={Microsoft Access Driver (*.mdb)}; DBQ="&Server.MapPath("jgndb.mdb") & ";"
Set rs = Server.CreateObject("ADODB.Recordset")

'temp="B"
name= trim(request.form("name"))
add= trim(request.form("add"))
city= trim(request.form("city"))
phone= trim(request.form("phone"))
mob= trim(request.form("mob"))
email = trim(request.form("email"))
enquiry= trim(request.form("enquiry"))
jjdate= FormatDateTime(Now(),vbShortDate)

if len(errormsg)=0 then
if len(name)=0 then
    Response.Redirect("jgnresponse.asp?errormsg=Name field cannot be Blank")
end if
end if

if len(errormsg)=0 then
if len(city)=0 then
     Response.Redirect("jgnresponse.asp?errormsg=City field cannot be Blank")
end if
end if

if len(errormsg)=0 then
if len(phone)=0 then
     Response.Redirect("jgnresponse.asp?errormsg=Phone No. field cannot be Blank")
end if
end if


rs.ActiveConnection=cn
rs.LockType = 2
rs.Source = "enquiry"
rs.Open 

rs.AddNew

rs("name") = name
rs("add") = add
rs("city") = city
rs("phone") = phone
rs("mob") = mob
rs("email") = email
rs("enquiry") = enquiry
rs("jjdate") = jjdate

      rs.Update
      Response.Redirect("jgnresponse.asp?errormsg=Thanks for the entry.")
              

rs.Close
Set rs = Nothing
cn.Close
Set cn = Nothing
%>