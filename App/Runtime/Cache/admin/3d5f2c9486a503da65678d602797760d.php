<?php if (!defined('THINK_PATH')) exit();?><html><head><title></title><script language=JavaScript>function logout(){
	if (confirm("你确定要退出吗？"))
	top.location = "out.asp";
	return false;
}
</script><script language=JavaScript1.2>function showsubmenu(sid) {
	var whichEl = eval("submenu" + sid);
	var menuTitle = eval("menuTitle" + sid);
	if (whichEl.style.display == "none"){
		eval("submenu" + sid + ".style.display=\"\";");
	}else{
		eval("submenu" + sid + ".style.display=\"none\";");
	}
}
</script><meta http-equiv=Content-Type content=text/html;charset=gb2312><meta http-equiv="refresh" content="60"><script language=JavaScript1.2>function showsubmenu(sid) {
	var whichEl = eval("submenu" + sid);
	var menuTitle = eval("menuTitle" + sid);
	if (whichEl.style.display == "none"){
		eval("submenu" + sid + ".style.display=\"\";");
	}else{
		eval("submenu" + sid + ".style.display=\"none\";");
	}
}
</script><base target="main"><link href="../Public/Css/style.css" rel="stylesheet" type="text/css"></head><body leftmargin="0" topmargin="0"><table width="100%" height="64" border="0" cellpadding="0" cellspacing="0" class="admin_topbg"><tr><td width="61%" height="64"><img src="../Public/Images/logo.gif" width="262" height="64"></td><td width="39%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td width="74%" height="38" class="admin_txt">欢迎光临<b></b></td><td width="22%"><a href="#" target="_self" onClick="logout();"><img src="../Public/Images/out.gif" alt="" width="46" height="20" border="0"></a></td><td width="4%">&nbsp;</td></tr><tr><td height="19" colspan="3">&nbsp;</td></tr></table></td></tr></table></body></html>