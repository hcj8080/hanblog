<?php if (!defined('THINK_PATH')) exit();?><link href="../Public/Css/style.css" rel="stylesheet" type="text/css" /><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><style type="text/css"><!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #EEF2FB;
}
.tableTh{
    border-right:solid 1px #fff;
    background: #999999;
   
}
.tableTd{
    border-right:solid 1px #CCCCCC;
    
}
--></style><body><table width="100%" border="0" cellpadding="0" cellspacing="0"><tr><td width="17" valign="top" background="../Public/Images/mail_leftbg.gif"><img src="../Public/Images/left-top-right.gif" width="17" height="29" /></td><td valign="top" background="../Public/Images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2"><tr><td height="31"><div class="titlebt">欢迎界面</div></td></tr></table></td><td width="16" valign="top" background="../Public/Images/mail_rightbg.gif"><img src="../Public/Images/nav-right-bg.gif" width="16" height="29" /></td></tr><tr><td valign="middle" background="../Public/Images/mail_leftbg.gif">&nbsp;</td><td valign="top" bgcolor="#F7F8F9"><!--content start--><table width="100%" cellpadding="0" cellspacing="0" style="border:solid 1px #CCCCCC;" id="companlists"><tr class="left_txt2"><th class="tableTh">ID</th><th width="30%" class="tableTh">名称</th><th width="30%" class="tableTh">标题</th><th class="tableTh">状态</th><th width="10%" class="tableTh">操作</th></tr><?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr><td class="tableTd" align="center"><?php echo ($vo["id"]); ?></td><td class="tableTd" align="center"><?php echo ($vo["name"]); ?></td><td class="tableTd" align="center"><?php echo ($vo["title"]); ?></td><td class="tableTd" align="center"><?php echo ($vo["status"]); ?></td><td class="tableTd" align="center"><a href="__URL__/edit/id/<?php echo ($vo[id]); ?>">编辑</a>　|　
                  <a href="__URL__/edit/id/<?php echo ($vo[id]); ?>">删除</a></td></tr><?php endforeach; endif; else: echo "" ;endif; ?></table><!--content start--></td><td background="../Public/Images/mail_rightbg.gif">&nbsp;</td></tr><tr><td valign="bottom" background="../Public/Images/mail_leftbg.gif"><img src="../Public/Images/buttom_left2.gif" width="17" height="17" /></td><td background="../Public/Images/buttom_bgs.gif"><img src="../Public/Images/buttom_bgs.gif" width="17" height="17"></td><td valign="bottom" background="images/mail_rightbg.gif"><img src="../Public/Images/buttom_right2.gif" width="16" height="17" /></td></tr></table></body>