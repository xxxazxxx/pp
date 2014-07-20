<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML><HEAD><TITLE>Pratik Panels Ltd</TITLE>
<META http-equiv=Content-Type content="text/html; charset=iso-8859-1">



<LINK href="pratikPanel_files/master.css" type=text/css rel=stylesheet>
<META content="Microsoft FrontPage 4.0" name=GENERATOR>

<script language="javascript">
function set()
{
	if(document.form1.txt_name.value == "")
	 {
		alert ("Please enter your  name.");
		document.form1.txt_name.focus();
		return false;
	}
	if(document.form1.txt_Add .value == "")
	 {
		alert ("Please enter your Address.");
		document.form1.txt_Add .focus();
		return false;
	}
	if(document.form1.txt_City.value == "")
	 {
		alert ("Please enter your City.");
		document.form1.txt_City.focus();
		return false;
	}
	if(document.form1.txt_State.value == "")
	 {
		alert ("Please enter your State.");
		document.form1.txt_State.focus();
		return false;
	}
	if(document.form1.txt_Country.value == "")
	 {
		alert ("Please enter your Country.");
		document.form1.txt_Country.focus();
		return false;
	}
		
		if(document.form1.txt_Phone.value == "")
	 {
		alert ("Please Enter your Phone Number.");
		document.form1.txt_Phone.focus();
		return false;
	}
	
	var val=document.form1.txt_Phone.value;
	var reg=/\D/;
	if(reg.test(val))
	{
		alert("Please enter Phone in number");
		document.form1.txt_Phone.focus();
		document.form1.txt_Phone.value="";
		return false;
	}
if(document.form1.txt_Email.value == "")
	 {
		alert ("Please enter your Email Id.");
		document.form1.txt_Email.focus();
		return false;
	}
	
	if(document.form1.txt_Email.value != "")
{
	if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(document.form1.txt_Email.value))) 
	{
			alert("Invalid Email ID. Please enter the correct ID.");
			document.form1.txt_Email.focus();
			document.form1.txt_Email.value="";
			return (false);
	}
}
if(document.form1.txt_message.value == "")
	 {
		alert ("Please enter your Message.");
		document.form1.txt_message.focus();
		return false;
	}

}	

</script>
</HEAD>

<BODY leftMargin=0 topMargin=0">
<TABLE class=bg cellSpacing=0 cellPadding=0 width="100%" border=0>
  <TBODY>
  <TR>
    <TD>
      <TABLE cellSpacing=0 cellPadding=0 width=748 align=center border=0>
        <TBODY>
        <TR>
          <TD width="794">
            <TABLE cellSpacing=0 cellPadding=0 width="776" border=0>
              <TBODY>
              <TR>
                <TD width="792">
                  <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
                    <TBODY>
                    <TR>
                      <TD background="pratikPanel_files/bg-footer-2.gif" height=5 colspan="2"></TD>
                    </TR>
                    <TR>
                              <TD><img src="pratikPanel_files/banner.jpg" width="789" height="149"></TD>
                      <TD></TD></TR></TBODY></TABLE></TD></TR>
              <TR>
                <TD height=2 width="792"></TD></TR>
              <TR>
                <TD width="792">
                  <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
                    <TBODY>
                    <TR>
                      <TD  valign="top">
                        <TABLE class="default bgWhite" cellSpacing=0 
                        cellPadding=0 width="790" border=0>
                          <TBODY>
                          <TR>
                            <TD 
                            style="padding: 0px" 
                            vAlign=top width="614">
                              <TABLE class=default cellSpacing=0 cellPadding=3 
                              width="100%" border=0 height="320">
                                <TBODY>
                                <TR>
                                <TD 
                                style="padding-left: 10px; padding-right: 5px" 
                                vAlign=top width="100%" height="184">
                                &nbsp;
                                <TABLE class=default 
                                style="padding-left: 10px; padding-right: 10px" 
                                cellSpacing=0 cellPadding=3 width="604" 
                                border=0 height="153">
                                <TBODY>
                                <TR>
                                                      <TD width="598"  valign="top" height="26"> 
                                                        &nbsp;&nbsp;&nbsp;<b>Contact 
                                                        Us:</b></TD>
                                                    </TR>
                                <TR>
                                                      <TD width="598"  valign="top" align="Left" height="277">


		<table border="0" width="70%" align="Center">
		<form name="form1" action="ack.php" method="post" onSubmit="return set()">
		  <tr>
			<td width="50%">Name<font color="#FF0000">*</font></td>
			<td width="50%"><input type="text" name=txt_name size ="37"></td>
		  </tr>
		  <tr>
			<td width="50%">Address<font color="#FF0000">*</font></td>
			<td width="50%"><input type="text" name=txt_Add size ="37"></td>
		  </tr>
		  <tr>
			<td width="50%">City<font color="#FF0000">*</font></td>
			<td width="50%"><input type="text" name=txt_City size ="21"></td>
		  </tr>
		  <tr>
			<td width="50%">State<font color="#FF0000">*</font></td>
			<td width="50%"><input type="text" name=txt_State size ="21"></td>
		  </tr>
		  <tr>
			<td width="50%">Country<font color="#FF0000">*</font></td>
			<td width="50%"><input type="text" name=txt_Country size ="21"></td>
		  </tr>
		  <tr>
			<td width="50%">Phone No.<font color="#FF0000">*</font></td>
			<td width="50%"><input type="text" name=txt_Phone size ="21"></td>
		  </tr>
		  <tr>
			<td width="50%">Mobile No.</td>
			<td width="50%"><input type="text" name=txt_mobile size ="21"></td>
		  </tr>
		  <tr>
			<td width="50%">E-Mail:<font color="#FF0000">*</font></td>
			<td width="50%"><input type="text" name=txt_Email size ="38"></td>
		  </tr>
		  <tr>
			<td width="50%">Message<font color="#FF0000">*</font></td>
			<td width="50%"><textarea name=txt_message size ="50" rows="4" cols="38" ></textarea></td>
		  </tr>
		  <tr>
			<td width="200%"  align ="center" colspan="2"> <input type="Submit" value= "Submit">
			  <input Type ="Reset" value=Reset></td>
		  </tr>
			</form>
		  <tr>
			<td width="200%"  align ="center" colspan="2" > <font color="#FF0000">*Mandatory
              fields</font></td>
		  </tr>
		</table>


</TD>
                                                    </TR>
                                </TBODY></TABLE></TD>
                                </TR>
                                
                                </TBODY></TABLE></TD>
                            <TD class=bg vAlign=top width=1></TD>
                            <TD 
                            style="padding: 0px" 
                            vAlign=top width=175>
                              <TABLE class=default cellSpacing=0 cellPadding=3 
                              width="162" border=0 height="232">
                                <TBODY>
                                <TR>
                                <TD 
                                style="padding: 0px" height="21" width="160"></TD></TR>
                                <tr>
                                <TD 
                                style="padding: 0px" width="158" valign=top height="145" align="center">
                                &nbsp;
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;
                                </TD>
                                </tr>
                                <TR>
                                <TD height="36" width="154">
                                <TABLE class=default cellSpacing=0 cellPadding=3 
                                width="100%" border=0>
                                <TBODY>
                                <TR>
                                <TD class=txt9px 
                                style="PADDING-RIGHT: 0px; PADDING-LEFT: 3px; FONT-WEIGHT: bold; PADDING-BOTTOM: 0px; PADDING-TOP: 0px">&nbsp;</TD></TR>
                                <TR>
                                                      <TD 
                                class=jus></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR>
                          <TR>
                            <TD class=bg colSpan=3 
                        height=2></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR>
              <TR>
                <TD width="792">
                  <TABLE class=bottom cellSpacing=0 cellPadding=0 width="100%" 
                  border=0>
                    <TBODY>
                    <TR>
                      <TD width="50%" 
                      background="pratikPanel_files/bg-footer.gif" 
                      height=25>&nbsp;&nbsp;<A class=etrends 
                        href="index.html">HOME</A> 
                        | <A class=etrends 
                        href="contactUs.php">CONTACT 
                        US</A></TD>
                              <TD align=right 
                      background="pratikPanel_files/bg-footer.gif">© 2007 - 2008 
                                Pratik Panel Ltd </TD>
                            </TR>
                    <TR>
                      <TD background="pratikPanel_files/bg-footer-2.gif" 
                      colSpan=2 
              height=25></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>
      </TD>
    </TR></TBODY></TABLE></BODY></HTML>
