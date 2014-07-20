<?
$name=$_POST['txt_name'];
$addr=$_POST['txt_Add'];
$city=$_POST['txt_City'];
$state=$_POST['txt_State'];
$country=$_POST['txt_Country'];
$phone=$_POST['txt_Phone'];
$mobile=$_POST['txt_mobile'];
$email=$_POST['txt_Email'];
$message=$_POST['txt_message'];
?>


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
                              <TD><img src="pratikPanel_files/banner.jpg" width="789" height="175"></TD>
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
                              width="100%" border=0 height="187">
                                <TBODY>
                                <TR>
                                <TD 
                                style="padding-left: 10px; padding-right: 5px" 
                                vAlign=top width="100%" height="187">
                                &nbsp;
                                <TABLE class=default 
                                style="padding-left: 10px; padding-right: 10px" 
                                cellSpacing=0 cellPadding=3 width="604" 
                                border=0 height="26">
                                                  <TBODY>
                                                    <TR> 
                                                      <TD width="598"  valign="top" height="26">
													   <? 
													  													  
 //$message = "Line 1\nLine 2\nLine 3";
// In case any of our lines are larger than 70 characters, we should use wordwrap()
//echo $name."<br>".$addr."<br>".$city."<br>".$state."<br>".$country."<br>".$phone."<br>".$mobile."<br>".$email."<br>.".$message;
$user_info="Name:-".$name."\nAddress:-".$addr."\nCity:-".$city."\nState:-".$state."\nCountry:-".$country."\nPhone:-".$phone."\nMobile:-".$mobile."\nEmail:-".$email;

$message=$user_info."\n".$message;
//$message= wordwrap($message, 70);

$headers = 'From:'. $email . "\r\n" .
    'Reply-To:'.$email. "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Send
mail('info@pratikpanels.com', 'pratikpanels.com', $message,$headers);
											  										  
													  echo "Thanks &nbsp;".$name;
													  ?><br><b>Your Information and Message has been sent successfully!!</b><br>
													    <br><br>We will  contact You soon<br><br>Regards,<br><b>Pratik Panels Ltd<b><br>
														Raipur(C.G.)

                                                        &nbsp;&nbsp;</TD>
                                                    </TR>
                                                  </TBODY>
                                                </TABLE></TD>
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
