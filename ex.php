<HTML>
<HEAD> 
<SCRIPT LANGUAGE="JavaScript">

function Disab() {

if(document.form1.cbox.checked) 
{document.form1.Button1.disabled=false}
else {document.form1.Button1.disabled=true}
}

</SCRIPT>

</HEAD>
<BODY TEXT="000000" BGCOLOR="FFFFFF">

<form name="form1">
<div align="center"> 
<input name="cbox" type="checkbox" id="cbox" value="checkbox" onClick=Disab();>
Click here to Enable/Disable Button<br /><br />

<button type=button onClick="alert('Button pressed!')" value="Button" name="Button1" disabled>Click Me!</button>
</div>
</form>
</BODY>
</HTML>