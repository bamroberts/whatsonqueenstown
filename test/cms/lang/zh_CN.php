<?php

/**
 * Chinese (China) language pack
 * @package cms
 * @subpackage i18n
 */

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('zh_CN', $lang) && is_array($lang['zh_CN'])) {
	$lang['zh_CN'] = array_merge($lang['en_US'], $lang['zh_CN']);
} else {
	$lang['zh_CN'] = $lang['en_US'];
}

$lang['zh_CN']['AssetAdmin']['CHOOSEFILE'] = '选择文件';
$lang['zh_CN']['AssetAdmin']['DELETEDX'] = '删除%s个文件。';
$lang['zh_CN']['AssetAdmin']['FILESREADY'] = '已经可以上传的文件：';
$lang['zh_CN']['AssetAdmin']['FOLDERDELETED'] = '选中文件夹已删除。';
$lang['zh_CN']['AssetAdmin']['FOLDERSDELETED'] = '所有选中文件夹已删除。';
$lang['zh_CN']['AssetAdmin']['MENUTITLE'] = '文件与图像管理';
$lang['zh_CN']['AssetAdmin']['MENUTITLE'] = '文件和图片';
$lang['zh_CN']['AssetAdmin']['MOVEDX'] = '移动%s个文件';
$lang['zh_CN']['AssetAdmin']['NEWFOLDER'] = '新建文件夹';
$lang['zh_CN']['AssetAdmin']['NOTEMP'] = '没有临时文件夹提供上传文件的保存。请在 php.ini 里设置 upload_tmp_dir。';
$lang['zh_CN']['AssetAdmin']['NOTHINGTOUPLOAD'] = '没有文件可以上传';
$lang['zh_CN']['AssetAdmin']['NOWBROKEN'] = '这些网页有失效的链接：';
$lang['zh_CN']['AssetAdmin']['NOWBROKEN2'] = '已 Email 通知管理者，他们会修正这些页面。';
$lang['zh_CN']['AssetAdmin']['SAVEDFILE'] = '文件%s已保存';
$lang['zh_CN']['AssetAdmin']['SAVEFOLDERNAME'] = '保存文件夹名称';
$lang['zh_CN']['AssetAdmin']['THUMBSDELETED'] = '所有未使用的缩略图已经删除。';
$lang['zh_CN']['AssetAdmin']['UPLOAD'] = '上传下列文件';
$lang['zh_CN']['AssetAdmin']['UPLOADEDX'] = '已上传%s个文件';
$lang['zh_CN']['AssetAdmin_left.ss']['CREATE'] = '创建';
$lang['zh_CN']['AssetAdmin_left.ss']['DELETE'] = '删除';
$lang['zh_CN']['AssetAdmin_left.ss']['DELFOLDERS'] = '删除所选文件夹';
$lang['zh_CN']['AssetAdmin_left.ss']['ENABLEDRAGGING'] = '使用拖放进行排序';
$lang['zh_CN']['AssetAdmin_left.ss']['FOLDERS'] = '文件夹';
$lang['zh_CN']['AssetAdmin_left.ss']['GO'] = '执行';
$lang['zh_CN']['AssetAdmin_left.ss']['SELECTTODEL'] = '选择您想要删除的文件夹，然后点击下面的按钮';
$lang['zh_CN']['AssetAdmin_left.ss']['TOREORG'] = '按意愿去拖拽文件夹可以重新组织您的文件系统。';
$lang['zh_CN']['AssetAdmin_right.ss']['CHOOSEPAGE'] = '请从左边选择一项。';
$lang['zh_CN']['AssetAdmin_right.ss']['WELCOME'] = '欢迎来到';
$lang['zh_CN']['AssetAdmin_uploadiframe.ss']['PERMFAILED'] = '您没有上传文件到该文件夹的权限。';
$lang['zh_CN']['AssetTableField']['CAPTION'] = '标题';
$lang['zh_CN']['AssetTableField']['CREATED'] = '第一次被上传';
$lang['zh_CN']['AssetTableField']['DIM'] = '尺寸';
$lang['zh_CN']['AssetTableField']['DIMLIMT'] = '限制在弹出窗口中的尺寸大小';
$lang['zh_CN']['AssetTableField']['FILENAME'] = '文件名';
$lang['zh_CN']['AssetTableField']['GALLERYOPTIONS'] = '相册选项';
$lang['zh_CN']['AssetTableField']['IMAGE'] = '图片';
$lang['zh_CN']['AssetTableField']['ISFLASH'] = '是 Flash 文档';
$lang['zh_CN']['AssetTableField']['LASTEDIT'] = '上一次被更改';
$lang['zh_CN']['AssetTableField']['MAIN'] = '内容';
$lang['zh_CN']['AssetTableField']['NOLINKS'] = '该文件没有被任何网页链接。';
$lang['zh_CN']['AssetTableField']['OWNER'] = '拥有者';
$lang['zh_CN']['AssetTableField']['PAGESLINKING'] = '下列网页链接到该文件：';
$lang['zh_CN']['AssetTableField']['POPUPHEIGHT'] = '在弹出窗口中的高度';
$lang['zh_CN']['AssetTableField']['POPUPWIDTH'] = '在弹出窗口中的宽度';
$lang['zh_CN']['AssetTableField']['SIZE'] = '大小';
$lang['zh_CN']['AssetTableField.ss']['DELFILE'] = '删除这个文件';
$lang['zh_CN']['AssetTableField.ss']['DRAGTOFOLDER'] = '拖放文件到某文件夹以移动文件';
$lang['zh_CN']['AssetTableField']['SWFFILEOPTIONS'] = 'SWF 文件选项';
$lang['zh_CN']['AssetTableField']['TITLE'] = '文件名称';
$lang['zh_CN']['AssetTableField']['TYPE'] = '类型';
$lang['zh_CN']['AssetTableField']['URL'] = 'URL';
$lang['zh_CN']['CMSMain']['ACCESS'] = '在 CMS 访问 %s';
$lang['zh_CN']['CMSMain']['CANCEL'] = '取消';
$lang['zh_CN']['CMSMain']['CHOOSEREPORT'] = '（请选择一个报告）';
$lang['zh_CN']['CMSMain']['COMPARINGV'] = '您正在比较#%d版本和#%d版本';
$lang['zh_CN']['CMSMain']['COPYPUBTOSTAGE'] = '您确定将已发布的内容复制到预备发布站吗？';
$lang['zh_CN']['CMSMain']['DELETE'] = '从测试网站中删除';
$lang['zh_CN']['CMSMain']['DESCREMOVED'] = '连同 %s 子项';
$lang['zh_CN']['CMSMain']['EMAIL'] = '电子邮件';
$lang['zh_CN']['CMSMain']['GO'] = '执行';
$lang['zh_CN']['CMSMain']['MENUTITLE'] = '网站内容管理';
$lang['zh_CN']['CMSMain']['MENUTITLE'] = '网站内容';
$lang['zh_CN']['CMSMain']['METADESCOPT'] = '网页描述标签';
$lang['zh_CN']['CMSMain']['METAKEYWORDSOPT'] = '网页关键词标签';
$lang['zh_CN']['CMSMain']['NEW'] = '新建的';
$lang['zh_CN']['CMSMain']['NOCONTENT'] = '没有内容';
$lang['zh_CN']['CMSMain']['NOTHINGASSIGNED'] = '没有任务分配给您';
$lang['zh_CN']['CMSMain']['NOWAITINGON'] = '您无须等待任何人完成其工作。';
$lang['zh_CN']['CMSMain']['NOWBROKEN'] = '下列网页有失效链接';
$lang['zh_CN']['CMSMain']['NOWBROKEN2'] = '已发送电子邮件给其拥有者们，他们将修复这些网页。';
$lang['zh_CN']['CMSMain']['OK'] = '是';
$lang['zh_CN']['CMSMain']['PAGEDEL'] = '%d页已被删除';
$lang['zh_CN']['CMSMain']['PAGENOTEXISTS'] = '该网页不存在';
$lang['zh_CN']['CMSMain']['PAGEPUB'] = '发布了%d个网页';
$lang['zh_CN']['CMSMain']['PAGESDEL'] = '%d页组已被删除';
$lang['zh_CN']['CMSMain']['PAGESPUB'] = '发布了%d个网页';
$lang['zh_CN']['CMSMain']['PAGETYPEOPT'] = '网页类型';
$lang['zh_CN']['CMSMain']['PRINT'] = '打印';
$lang['zh_CN']['CMSMain']['PUBALLCONFIRM'] = '请发布该站的每一网页，这样，预备发布站上的内容就会复制到正式发布站上';
$lang['zh_CN']['CMSMain']['PUBALLFUN'] = '“全部发布“功能';
$lang['zh_CN']['CMSMain']['PUBALLFUN2'] = '按下这一按键将等同于逐一发布每一网页。此功能适用于被大量编辑过的网页，如在网站被第一次使用时。';
$lang['zh_CN']['CMSMain']['PUBPAGES'] = '完成：共发布%d个网页。';
$lang['zh_CN']['CMSMain']['REMOVED'] = '已从正式网站删除 \'%s\'%s ';
$lang['zh_CN']['CMSMain']['REMOVEDFD'] = '从预备发布站删除';
$lang['zh_CN']['CMSMain']['REMOVEDPAGE'] = '从正式发布站删除网页“%s"';
$lang['zh_CN']['CMSMain']['REMOVEDPAGEFROMDRAFT'] = '已从测试站点删除 \'%s\'';
$lang['zh_CN']['CMSMain']['REPORT'] = '报告';
$lang['zh_CN']['CMSMain']['RESTORED'] = '“%s“恢复成功';
$lang['zh_CN']['CMSMain']['ROLLBACK'] = '恢复到这一版本';
$lang['zh_CN']['CMSMain']['ROLLEDBACKPUB'] = '回复到已正式发布的版本。新的版本号为#%d';
$lang['zh_CN']['CMSMain']['ROLLEDBACKVERSION'] = '回复到#%d版本。新的版本号为#%d';
$lang['zh_CN']['CMSMain']['SAVE'] = '保存';
$lang['zh_CN']['CMSMain']['SENTTO'] = '提交给%s%s以通过验证';
$lang['zh_CN']['CMSMain']['STATUSOPT'] = '网页状态';
$lang['zh_CN']['CMSMain']['TOTALPAGES'] = '总页数：';
$lang['zh_CN']['CMSMain']['VERSIONSNOPAGE'] = '不能找到网页的#%d版本';
$lang['zh_CN']['CMSMain']['VIEWING'] = '您正在浏览于%s创建的#%d版本';
$lang['zh_CN']['CMSMain']['VISITRESTORE'] = '访问restorepage/(ID)';
$lang['zh_CN']['CMSMain']['WAITINGON'] = '在这些<b>%d</b>网页上，您须等待他人完成其工作';
$lang['zh_CN']['CMSMain']['WORKTODO'] = '您在这些<b>%d</b>网页上有待完成的工作。';
$lang['zh_CN']['CMSMain_left.ss']['ADDEDNOTPUB'] = '已被加入到预备发布站但还未发布';
$lang['zh_CN']['CMSMain_left.ss']['ADDSEARCHCRITERIA'] = '加入下列一个搜索条件';
$lang['zh_CN']['CMSMain_left.ss']['BATCHACTIONS'] = '批量处理';
$lang['zh_CN']['CMSMain_left.ss']['CHANGED'] = '已更改';
$lang['zh_CN']['CMSMain_left.ss']['CLOSEBOX'] = '点击以关闭该区块';
$lang['zh_CN']['CMSMain_left.ss']['COMPAREMODE'] = '比较状态（点击下面的两个）';
$lang['zh_CN']['CMSMain_left.ss']['CREATE'] = '创建';
$lang['zh_CN']['CMSMain_left.ss']['DEL'] = '已删除';
$lang['zh_CN']['CMSMain_left.ss']['DELETECONFIRM'] = '删除所选网页';
$lang['zh_CN']['CMSMain_left.ss']['DELETEDSTILLLIVE'] = '已从预备发布站删除但仍存在于正式发布站上';
$lang['zh_CN']['CMSMain_left.ss']['EDITEDNOTPUB'] = '在预备发布站上已重新编辑但还未发布';
$lang['zh_CN']['CMSMain_left.ss']['EDITEDSINCE'] = '自从所选日期到目前为止,被编辑的网页';
$lang['zh_CN']['CMSMain_left.ss']['ENABLEDRAGGING'] = '允许拖放以重新排布';
$lang['zh_CN']['CMSMain_left.ss']['GO'] = '执行';
$lang['zh_CN']['CMSMain_left.ss']['KEY'] = '颜色与图标';
$lang['zh_CN']['CMSMain_left.ss']['NEW'] = '新建的';
$lang['zh_CN']['CMSMain_left.ss']['OPENBOX'] = '点击以打开该区块';
$lang['zh_CN']['CMSMain_left.ss']['PAGEVERSIONH'] = '网页版本记录';
$lang['zh_CN']['CMSMain_left.ss']['PUBLISHCONFIRM'] = '发布所选网页';
$lang['zh_CN']['CMSMain_left.ss']['SEARCH'] = '搜索';
$lang['zh_CN']['CMSMain_left.ss']['SEARCHTITLE'] = '搜索URL（路径），名称，菜单名称以及内容';
$lang['zh_CN']['CMSMain_left.ss']['SELECTPAGESACTIONS'] = '选择您想要更改的网页，然后点击一个按钮';
$lang['zh_CN']['CMSMain_left.ss']['SHOWONLYCHANGED'] = '只显示更改的网页';
$lang['zh_CN']['CMSMain_left.ss']['SHOWUNPUB'] = '显示未发布的版本';
$lang['zh_CN']['CMSMain_left.ss']['SITECONTENT TITLE'] = '网站内容与结构';
$lang['zh_CN']['CMSMain_left.ss']['SITEREPORTS'] = '网站报告';
$lang['zh_CN']['CMSMain_right.ss']['ANYMESSAGE'] = '对您的编辑器您有什么信息吗？';
$lang['zh_CN']['CMSMain_right.ss']['CHOOSEPAGE'] = '请选择左边的某一网页';
$lang['zh_CN']['CMSMain_right.ss']['LOADING'] = '加载中...';
$lang['zh_CN']['CMSMain_right.ss']['MESSAGE'] = '信息';
$lang['zh_CN']['CMSMain_right.ss']['SENDTO'] = '发送给';
$lang['zh_CN']['CMSMain_right.ss']['STATUS'] = '状态';
$lang['zh_CN']['CMSMain_right.ss']['SUBMIT'] = '提交以通过验证';
$lang['zh_CN']['CMSMain_right.ss']['WELCOMETO'] = '欢迎来到';
$lang['zh_CN']['CMSMain_versions.ss']['AUTHOR'] = '作者';
$lang['zh_CN']['CMSMain_versions.ss']['NOTPUB'] = '还未发布';
$lang['zh_CN']['CMSMain_versions.ss']['PUBR'] = '发布人';
$lang['zh_CN']['CMSMain_versions.ss']['UNKNOWN'] = '未知';
$lang['zh_CN']['CMSMain_versions.ss']['WHEN'] = '上一次被编辑';
$lang['zh_CN']['CommentAdmin']['ACCEPT'] = '提交';
$lang['zh_CN']['CommentAdmin']['APPROVED'] = '通过 %s 评论';
$lang['zh_CN']['CommentAdmin']['APPROVEDCOMMENTS'] = '已经审核的评论';
$lang['zh_CN']['CommentAdmin']['AUTHOR'] = '作者';
$lang['zh_CN']['CommentAdmin']['COMMENT'] = '评论';
$lang['zh_CN']['CommentAdmin']['COMMENTS'] = '评论';
$lang['zh_CN']['CommentAdmin']['COMMENTSAWAITINGMODERATION'] = '等待审核的评论';
$lang['zh_CN']['CommentAdmin']['DATEPOSTED'] = '提交日期';
$lang['zh_CN']['CommentAdmin']['DELETE'] = '删除';
$lang['zh_CN']['CommentAdmin']['DELETEALL'] = '全部删除';
$lang['zh_CN']['CommentAdmin']['DELETED'] = '%s 评论已删除。';
$lang['zh_CN']['CommentAdmin']['MARKASNOTSPAM'] = '这不是垃圾信息';
$lang['zh_CN']['CommentAdmin']['MARKEDNOTSPAM'] = '标记 %s 评论为非垃圾信息。';
$lang['zh_CN']['CommentAdmin']['MARKEDSPAM'] = '标记 %s 评论为垃圾信息。';
$lang['zh_CN']['CommentAdmin']['MENUTITLE'] = '网页评论管理';
$lang['zh_CN']['CommentAdmin']['MENUTITLE'] = '评论';
$lang['zh_CN']['CommentAdmin']['NAME'] = '名字';
$lang['zh_CN']['CommentAdmin']['PAGE'] = '页面';
$lang['zh_CN']['CommentAdmin']['SPAM'] = '垃圾信息';
$lang['zh_CN']['CommentAdmin']['SPAMMARKED'] = '标记为垃圾信息';
$lang['zh_CN']['CommentList.ss']['CREATEDW'] = '无论何时，当任何一“流程中的行动”—发布、拒绝或提交—被执行时，都会有评论生成。';
$lang['zh_CN']['CommentList.ss']['NOCOM'] = '该页还未有评论。';
$lang['zh_CN']['CommentTableField']['FILTER'] = '过滤';
$lang['zh_CN']['CommentTableField']['SEARCH'] = '搜索';
$lang['zh_CN']['ImageEditor.ss']['CANCEL'] = '取消';
$lang['zh_CN']['ImageEditor.ss']['CROP'] = '剪辑';
$lang['zh_CN']['ImageEditor.ss']['HEIGHT'] = '高';
$lang['zh_CN']['ImageEditor.ss']['REDO'] = '撤消恢复';
$lang['zh_CN']['ImageEditor.ss']['ROT'] = '旋转';
$lang['zh_CN']['ImageEditor.ss']['SAVE'] = '保存图像';
$lang['zh_CN']['ImageEditor.ss']['UNDO'] = '恢复';
$lang['zh_CN']['ImageEditor.ss']['UNTITLED'] = '未命名文档';
$lang['zh_CN']['ImageEditor.ss']['WIDTH'] = '宽';
$lang['zh_CN']['LeftAndMain']['CHANGEDURL'] = '路径（URL）已改为”%s“';
$lang['zh_CN']['LeftAndMain']['COMMENTS'] = '评论';
$lang['zh_CN']['LeftAndMain']['FILESIMAGES'] = '文件和图片';
$lang['zh_CN']['LeftAndMain']['HELP'] = '帮助';
$lang['zh_CN']['LeftAndMain']['PAGETYPE'] = '网页类型';
$lang['zh_CN']['LeftAndMain']['PERMAGAIN'] = '您于CMS的登录已被注销，请在下面输入用户名和密码重新登录。';
$lang['zh_CN']['LeftAndMain']['PERMALREADY'] = '对不起，您无权登录CMS的这一部分。如果您要用另外的帐号，请在下面登录。';
$lang['zh_CN']['LeftAndMain']['PERMDEFAULT'] = '请先选择一种验证方法并输入您的权限信息，以登录CMS。';
$lang['zh_CN']['LeftAndMain']['PLEASESAVE'] = '请先保存：因为该网页还未保存，所以该页无法更新。';
$lang['zh_CN']['LeftAndMain']['REPORTS'] = '报表';
$lang['zh_CN']['LeftAndMain']['REQUESTERROR'] = '请求出错。';
$lang['zh_CN']['LeftAndMain']['SAVED'] = '已保存';
$lang['zh_CN']['LeftAndMain']['SAVEDUP'] = '已保存';
$lang['zh_CN']['LeftAndMain']['SECURITY'] = '安全';
$lang['zh_CN']['LeftAndMain']['SITECONTENT'] = '网站内容';
$lang['zh_CN']['LeftAndMain']['SITECONTENTLEFT'] = '网站内容';
$lang['zh_CN']['LeftAndMain.ss']['APPVERSIONTEXT1'] = '您当前所运行的';
$lang['zh_CN']['LeftAndMain.ss']['APPVERSIONTEXT2'] = '版本，技术上讲，是CVS的目录分支。';
$lang['zh_CN']['LeftAndMain.ss']['ARCHS'] = '已归档站';
$lang['zh_CN']['LeftAndMain.ss']['DRAFTS'] = '预备发布站';
$lang['zh_CN']['LeftAndMain.ss']['EDIT'] = '编辑';
$lang['zh_CN']['LeftAndMain.ss']['EDITPROFILE'] = '用户资料';
$lang['zh_CN']['LeftAndMain.ss']['LOADING'] = '加载中...';
$lang['zh_CN']['LeftAndMain.ss']['LOGGEDINAS'] = '已登录为';
$lang['zh_CN']['LeftAndMain.ss']['LOGOUT'] = '注销登录';
$lang['zh_CN']['LeftAndMain.ss']['PUBLIS'] = '正式发布站';
$lang['zh_CN']['LeftAndMain.ss']['REQUIREJS'] = '要使用内容管理系统，必须打开 Javascript 功能。';
$lang['zh_CN']['LeftAndMain.ss']['SSWEB'] = 'SilverStripe网站';
$lang['zh_CN']['LeftAndMain.ss']['VIEWPAGEIN'] = '展示站：';
$lang['zh_CN']['LeftAndMain']['STATUSTO'] = '状态已改为”%s“';
$lang['zh_CN']['LeftAndMain']['TREESITECONTENT'] = '网站内容';
$lang['zh_CN']['MemberList.ss']['FILTER'] = '筛选';
$lang['zh_CN']['MemberList_Table.ss']['EMAIL'] = '电邮地址';
$lang['zh_CN']['MemberList_Table.ss']['FN'] = '名';
$lang['zh_CN']['MemberList_Table.ss']['PASSWD'] = '密码';
$lang['zh_CN']['MemberList_Table.ss']['SN'] = '姓';
$lang['zh_CN']['MemberTableField']['ADD'] = '新加';
$lang['zh_CN']['MemberTableField']['ADDEDTOGROUP'] = '会员被加入某会员组';
$lang['zh_CN']['MemberTableField.ss']['ADDNEW'] = '添加';
$lang['zh_CN']['MemberTableField.ss']['DELETEMEMBER'] = '删除该会员';
$lang['zh_CN']['MemberTableField.ss']['EDITMEMBER'] = '编辑该会员';
$lang['zh_CN']['MemberTableField.ss']['SHOWMEMBER'] = '显示该会员';
$lang['zh_CN']['ModelAdmin']['ADDBUTTON'] = '添加';
$lang['zh_CN']['ModelAdmin']['CREATEBUTTON'] = '创建\'%s\'';
$lang['zh_CN']['ModelAdmin']['DELETE'] = '删除';
$lang['zh_CN']['ModelAdmin']['GOBACK'] = '返回';
$lang['zh_CN']['ModelAdmin']['ITEMNOTFOUND'] = '无法找到该内容';
$lang['zh_CN']['ModelAdmin']['LOADEDFOREDITING'] = '正在打开\'%s\'的编辑试图';
$lang['zh_CN']['ModelAdmin']['SAVE'] = '保存';
$lang['zh_CN']['PageComment']['COMMENTBY'] = '由\'%s\'对\'%s\'评论';
$lang['zh_CN']['PageComment']['PLURALNAME'] = '网页评论';
$lang['zh_CN']['PageComment']['SINGULARNAME'] = '网页评论';
$lang['zh_CN']['PageCommentInterface.ss']['COMMENTS'] = '评论';
$lang['zh_CN']['PageCommentInterface.ss']['NEXT'] = '下一个';
$lang['zh_CN']['PageCommentInterface.ss']['NOCOMMENTSYET'] = '该网页还未有评论。';
$lang['zh_CN']['PageCommentInterface.ss']['POSTCOM'] = '提交您的评论';
$lang['zh_CN']['PageCommentInterface.ss']['PREV'] = '上一个';
$lang['zh_CN']['PageCommentInterface_singlecomment.ss']['ISNTSPAM'] = '该评论不是网络垃圾';
$lang['zh_CN']['PageCommentInterface_singlecomment.ss']['ISSPAM'] = '该评论是网络垃圾';
$lang['zh_CN']['PageCommentInterface_singlecomment.ss']['PBY'] = '提交人：';
$lang['zh_CN']['PageCommentInterface_singlecomment.ss']['REMCOM'] = '移除该评论';
$lang['zh_CN']['ReportAdmin']['MENUTITLE'] = '报表';
$lang['zh_CN']['ReportAdmin_left.ss']['REPORTS'] = '报告';
$lang['zh_CN']['ReportAdmin_right.ss']['WELCOME1'] = '欢迎来到';
$lang['zh_CN']['ReportAdmin_right.ss']['WELCOME2'] = '报告系统。请从左边选择一个报告项';
$lang['zh_CN']['ReportAdmin_SiteTree.ss']['REPORTS'] = '报告';
$lang['zh_CN']['SecurityAdmin']['ADDMEMBER'] = '新加会员';
$lang['zh_CN']['SecurityAdmin']['MENUTITLE'] = '用户安全权限管理';
$lang['zh_CN']['SecurityAdmin']['MENUTITLE'] = '安全';
$lang['zh_CN']['SecurityAdmin']['NEWGROUP'] = '新建会员组';
$lang['zh_CN']['SecurityAdmin']['SAVE'] = '保存';
$lang['zh_CN']['SecurityAdmin']['SGROUPS'] = '各个不同权限的会员组';
$lang['zh_CN']['SecurityAdmin_left.ss']['CREATE'] = '创建';
$lang['zh_CN']['SecurityAdmin_left.ss']['DEL'] = '删除中...';
$lang['zh_CN']['SecurityAdmin_left.ss']['DELGROUPS'] = '删除所选会员组';
$lang['zh_CN']['SecurityAdmin_left.ss']['ENABLEDRAGGING'] = '使用拖放进行排序';
$lang['zh_CN']['SecurityAdmin_left.ss']['GO'] = '执行';
$lang['zh_CN']['SecurityAdmin_left.ss']['SECGROUPS'] = '安全权限组';
$lang['zh_CN']['SecurityAdmin_left.ss']['SELECT'] = '选择您想要删除的后按下面的按钮';
$lang['zh_CN']['SecurityAdmin_left.ss']['TOREORG'] = '按您的意愿进行拖拽操作，可以重新组织您的网站';
$lang['zh_CN']['SecurityAdmin_right.ss']['WELCOME1'] = '欢迎来到';
$lang['zh_CN']['SecurityAdmin_right.ss']['WELCOME2'] = '安全权限管理。请从左边选择一个会员组。';
$lang['zh_CN']['SideReport']['EMPTYPAGES'] = '空白页';
$lang['zh_CN']['SideReport']['LAST2WEEKS'] = '在过去2周内编辑过的网页';
$lang['zh_CN']['SideReport']['REPEMPTY'] = '该%s报告为空白。';
$lang['zh_CN']['StaticExporter']['BASEURL'] = '基本URL';
$lang['zh_CN']['StaticExporter']['EXPORTTO'] = '导出到该文件夹';
$lang['zh_CN']['StaticExporter']['FOLDEREXPORT'] = '导出文件夹';
$lang['zh_CN']['StaticExporter']['NAME'] = '网站静态拷贝导出器';
$lang['zh_CN']['ThumbnailStripField.ss']['CHOOSEFOLDER'] = '（选择上面的一个文件夹）';
$lang['zh_CN']['ViewArchivedEmail.ss']['CANACCESS'] = '您可通过这个链接进入已归挡的网页：';
$lang['zh_CN']['ViewArchivedEmail.ss']['HAVEASKED'] = '在%s,您要求浏览我们网站';
$lang['zh_CN']['WaitingOn.ss']['ATO'] = '分配给';