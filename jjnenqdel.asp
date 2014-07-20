<%
DIM strsno,SQL, RS, cn, sno

strsno =trim(Request.Form("sno"))
strsno = Replace(strsno, "'", "''")
'iRecordToDelete = Replace(iRecordToDelete, "'", "''")

strsno=CLng(strsno)

set cn = server.createobject("ADODB.Connection")
'cn.open("FILEDSN=D:\Program Files\Common Files\ODBC\Data Sources\rrsdsn.dsn")
cn.open "Driver={Microsoft Access Driver (*.mdb)}; DBQ="&Server.MapPath("jgndb.mdb") & ";"

Set rs = Server.CreateObject("ADODB.Recordset")

rs.Activeconnection = cn
'rs.CursorType=1
'rs.LockType=3
'rs.CursorLocation =3
rs.Source = "enquiry"
rs.Open

SQL = "DELETE  *  FROM enquiry WHERE sno= " & strsno& ""
'strSQL = "SELECT * FROM scratch WHERE id=" &amp; iRecordToDelete &amp; ";"
'mySQL = "SELECT * FROM tblCustomers WHERE State = ' " & strState& " ' "


Set rs=cn.Execute(sql)

    'IF not RS.EOF THEN

'        Response.Write "Sorry, you do not have any S.No. in that S.No. Please click back on your browser and enter a different S.No."

'    ELSE

'      Response.Write "Delete Record"

' END IF


Response.Redirect("jgnresponse.asp")


'RS.Close
Set RS = Nothing
CN.Close
Set CN = Nothing
%>