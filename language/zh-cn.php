<?php
/* common */
$lang->colon      = '：';
$lang->prev       = '‹';
$lang->next       = '›';
$lang->equal      = '=';
$lang->percent    = '%';
$lang->laquo      = '&laquo;';
$lang->raquo      = '&raquo;';
$lang->minus      = ' - ';
$lang->dollarSign = '￥';
$lang->divider    = "<span class='divider'>{$lang->raquo}</span> ";
$lang->back2Top   = '返<br/>回<br/>顶<br/>部';
$lang->cancel     = '取消';

$lang->cn = '简';
$lang->tw = '繁';
$lang->en = 'EN';

$lang->toBeAdded = '待添加';

$lang->about  = '关于';
$lang->thanks = '致谢';

$lang->chanzhiEPS     = '蝉知企业门户系统';
$lang->chanzhiEPSx    = '蝉知';
$lang->agreement      = "已阅读并同意<a href='http://zpl.pub/page/zplv12.html' target='_blank'>《Z PUBLIC LICENSE授权协议1.2》</a>。<span class='text-danger'>未经许可，不得去除、隐藏或遮掩蝉知系统的任何标志及链接。</span>";
$lang->poweredBy      = "<a href='http://www.chanzhi.org/?v=%s' target='_blank' title='%s'>%s</a>";
$lang->poweredByAdmin = "<span id='poweredBy'>由 <a href='http://www.chanzhi.org/?v=%s' target='_blank' title='%s'>蝉知企业门户系统 %s</a> 强力驱动！</span>";
$lang->newVersion     = "提示：蝉知系统已于 <span id='releaseDate'></span> 发布 <span id='version'></span>版本。<a href='' target='_blank' id='upgradeLink'>马上下载</a>";
$lang->execInfo       = "<span id='execInfoBar' class='hide'><span class='text-left'>SQL查询：<b>%s</b> 次<br>内存占用：<b>%s</b><br> PHP 执行时间：<b>%s</b> 秒</span></span>";

$lang->home             = '首页';
$lang->welcome          = '欢迎您，<strong>%s</strong>！';
$lang->messages         = "<strong><i class='icon-comment-alt'></i> %s</strong>";
$lang->todayIs          = '今天是%s，';
$lang->aboutUs          = '关于我们';
$lang->link             = '友情链接';
$lang->frontHome        = '前台';
$lang->forumHome        = '论坛';
$lang->bookHome         = '手册';
$lang->dashboard        = '用户中心';
$lang->visualEdit       = '可视化编辑';
$lang->editMode         = '编辑模式';
$lang->register         = '注册';
$lang->logout           = '退出';
$lang->login            = '登录';
$lang->account          = '帐号';
$lang->password         = '密码';
$lang->changePassword   = '修改密码';
$lang->setEmail         = "邮箱设置";
$lang->setSecurity      = '密保问题';
$lang->forgotPassword   = '忘记密码?';
$lang->currentPos       = '当前位置';
$lang->categoryMenu     = '分类导航';
$lang->wechatTip        = '微信订阅';
$lang->qrcodeTip        = '移动访问';
$lang->language         = '语言';
$lang->custom           = '自定义';

$lang->reset          = '重置';
$lang->edit           = '编辑';
$lang->copy           = '复制';
$lang->hide           = '隐藏';
$lang->delete         = '删除';
$lang->close          = '关闭';
$lang->save           = '保存';
$lang->confirm        = '确认';
$lang->addToBlacklist = '加黑';
$lang->send           = '发送';
$lang->preview        = '预览';
$lang->goback         = '返回';
$lang->more           = '更多';
$lang->refresh        = '刷新';
$lang->actions        = '操作';
$lang->feature        = '未来';
$lang->year           = '年';
$lang->selectAll      = '全选';
$lang->selectReverse  = '反选';
$lang->loading        = '稍候...';
$lang->saveSuccess    = '保存成功';
$lang->setSuccess     = '设置成功';
$lang->createSuccess  = '创建成功';
$lang->sendSuccess    = '发送成功';
$lang->deleteSuccess  = '删除成功';
$lang->fail           = '失败';
$lang->noResultsMatch = '没有匹配的选项';
$lang->alias          = '搜索引擎优化使用，可使用英文或数字';
$lang->keywordsHolder = '多个关键字中间用逗号隔开';

$lang->setOkFile = <<<EOT
<h5>请按照下面的步骤操作以确认您的管理员身份。</h5>
<p>创建 %s 文件。</p>
EOT;

$lang->color       = '颜色';
$lang->colorTip    = '十六进制颜色值';
$lang->colorPlates = '333333|000000|CA1407|45872B|148D00|F25D03|2286D2|D92958|A63268|04BFAD|D1270A|FF9400|299182|63731A|3D4DBE|7382D9|754FB9|F2E205|B1C502|364245|C05036|8A342A|E0DDA2|B3D465|EEEEEE|FFD0E5|D0FFFD|FFFF84|F4E6AE|E5E5E5|F1F1F1|FFFFFF';

$lang->score = new stdclass();
$lang->score->common = '积分';

$lang->js = new stdclass();
$lang->js->confirmDelete    = '您确定要执行删除操作吗？';
$lang->js->deleteing        = '删除中';
$lang->js->doing            = '处理中';
$lang->js->loading          = '加载中';
$lang->js->updating         = '更新中...';
$lang->js->timeout          = '网络超时,请重试';
$lang->js->errorThrown      = '<h4>执行出错：</h4>';
$lang->js->continueShopping = '继续购物';
$lang->js->required         = '必填';
$lang->js->back             = '返回';
$lang->js->continue         = '继续';

$lang->company = new stdclass();
$lang->company->contactUs = '联系我们';
$lang->company->contacts  = '联系人';
$lang->company->address   = '地址';
$lang->company->phone     = '电话';
$lang->company->email     = 'Email';
$lang->company->fax       = '传真';
$lang->company->qq        = 'QQ';
$lang->company->skype     = 'Skype';
$lang->company->weibo     = '微博';
$lang->company->weixin    = '微信';
$lang->company->wangwang  = '旺旺';
$lang->company->site      = '网址';

$lang->sitemap = new stdclass();
$lang->sitemap->common = '站点地图';

$lang->groups = new stdclass();
$lang->groups->home     = array('title' => '首页', 'link' => 'admin|index|',               'icon' => 'home');
$lang->groups->content  = array('title' => '内容', 'link' => 'article|admin|type=article', 'icon' => 'edit');
$lang->groups->shop     = array('title' => '商城', 'link' => 'order|admin|',               'icon' => 'shopping-cart');
$lang->groups->user     = array('title' => '会员', 'link' => 'user|admin|',                'icon' => 'group');
$lang->groups->promote  = array('title' => '推广', 'link' => 'stat|traffic|',              'icon' => 'volume-up');
$lang->groups->design   = array('title' => '设计', 'link' => 'ui|settemplate|',            'icon' => 'paint-brush');
$lang->groups->open     = array('title' => '平台', 'link' => 'package|browse|',            'icon' => 'cloud');
$lang->groups->setting  = array('title' => '设置', 'link' => 'site|setbasic|',             'icon' => 'cog');

$lang->menu = new stdclass();
$lang->menu->admin    = '首页|admin|index|';
$lang->menu->article  = '文章|article|admin|type=article';
$lang->menu->blog     = '博客|article|admin|type=blog';
$lang->menu->book     = '手册|book|admin|';
$lang->menu->page     = '单页|article|admin|type=page';

$lang->menu->order        = '订单|order|admin|';
$lang->menu->product      = '产品|product|admin|';
$lang->menu->orderSetting = '设置|product|setting|';

$lang->menu->user         = '会员|user|admin|';
$lang->menu->message      = '留言|message|admin|type=message';
$lang->menu->comment      = '评论|message|admin|type=comment';
$lang->menu->reply        = '回复|message|admin|type=reply';
$lang->menu->forum        = '论坛|forum|admin|';
$lang->menu->thread       = '主题|forum|admin|';
$lang->menu->forumreply   = '回帖|reply|admin|';
$lang->menu->submittion   = '投稿|article|admin|type=submittion&tab=user';
$lang->menu->wechat       = '微信|wechat|message|mode=replied&replied=0';

$lang->menu->stat    = '统计|stat|traffic|';
$lang->menu->tag     = '关键词|tag|admin|';
$lang->menu->links   = '友情链接|links|admin|';

$lang->menu->ui       = '界面|ui|settemplate|';
$lang->menu->logo     = '标志|ui|setlogo|';
$lang->menu->nav      = '导航|nav|admin|';
$lang->menu->block    = '区块|block|admin|';
$lang->menu->slide    = '幻灯片|slide|admin|';
$lang->menu->others   = "设置|ui|others|";
$lang->menu->visual   = "可视化|visual|index|";
$lang->menu->edit     = "编辑模板|ui|edittemplate|";

$lang->menu->site     = '站点|site|setbasic|';
$lang->menu->security = '安全|site|setsecurity|';

$lang->menu->package    = '插件|package|browse|';
$lang->menu->themestore = '主题|ui|themestore|';

$lang->menuGroups = new stdclass();
$lang->menuGroups->mail    = 'site';
$lang->menuGroups->wechat  = 'site';
$lang->menuGroups->group   = 'security';
$lang->menuGroups->tree    = 'article';
$lang->menuGroups->search  = 'site';
$lang->menuGroups->company = 'site';
$lang->menuGroups->score   = 'site';
$lang->menuGroups->guarder = 'security';

$lang->article = new stdclass();
$lang->article->menu = new stdclass();
$lang->article->menu->browse       = '文章列表|article|admin|';

$lang->blog = new stdclass();
$lang->blog->menu = new stdclass();
$lang->blog->menu->browse       = '博客列表|article|admin|type=blog';

$lang->page = new stdclass();
$lang->page->menu = new stdclass();
$lang->page->menu->browse = array('link' => '单页列表|article|admin|type=page', 'alias' => 'create, edit');

$lang->express = new stdclass();

$lang->orderSetting = new stdclass();
$lang->orderSetting->menu = new stdclass();
$lang->orderSetting->menu->orderSetting = '设置|product|setting|';
$lang->orderSetting->menu->express      = '快递|tree|browse|type=express';

$lang->product = new stdclass();
$lang->product->menu = new stdclass();
$lang->product->menu->browse = array('link' => '所有产品|product|admin|', 'alias' => 'create, edit');

$lang->ui = new stdclass();

$lang->theme = new stdclass();
$lang->theme->menu = new stdclass();
$lang->theme->menu->theme   = '主题管理|ui|settemplate|';
$lang->theme->menu->layout  = array('link' => '布局管理|block|pages|', 'alias' => 'setregion');
$lang->theme->menu->custom  = '外观管理|ui|customtheme|';
$lang->theme->menu->code    = '代码管理|ui|setcode|';
$lang->theme->menu->source  = '素材管理|file|browsesource|';

$lang->user = new stdclass();

$lang->message = new stdclass();

$lang->forum = new stdclass();
$lang->forum->menu = new stdclass();
$lang->forum->menu->browse  = '主题列表|forum|admin|';
$lang->forum->menu->reply   = '回帖列表|reply|admin|';
$lang->forum->menu->tree    = '版块管理|tree|browse|type=forum';
$lang->forum->menu->update  = '更新数据|forum|update|';
$lang->forum->menu->setting = '论坛设置|forum|setting|';

$lang->site = new stdclass();
$lang->site->menu = new stdclass();
$lang->site->menu->basic    = '站点设置|site|setbasic|';
$lang->site->menu->domain   = '域名设置|site|setdomain|';
$lang->site->menu->cdn      = 'CDN设置|site|setcdn|';
$lang->site->menu->cache    = '缓存设置|site|setcache|';
$lang->site->menu->home     = '首页菜单|site|sethomemenu|';
$lang->site->menu->company  = '公司信息|company|setbasic|';
$lang->site->menu->contact  = '联系方式|company|setcontact|';
$lang->site->menu->oauth    = '开放登录|site|setoauth|';
$lang->site->menu->mail     = array('link' => '发信设置|mail|admin|', 'alias' => 'detect,edit,save,test');
$lang->site->menu->wechat   = array('link' => '微信设置|wechat|admin|', 'alias' => 'create,edit,adminresponse,integrate');
$lang->site->menu->search   = '全文检索|search|buildindex|';
$lang->site->menu->score    = '积分规则|score|setcounts|';
$lang->site->menu->backup   = '备份还原|backup|index|';
//$lang->site->menu->api      = '集成|site|setapi|';

$lang->security = new stdclass();
$lang->security->menu = new stdclass();
$lang->security->menu->basic     = '基本设置|site|setsecurity|';
$lang->security->menu->filter    = '过滤设置|site|setfilter|';
$lang->security->menu->blacklist = '黑名单管理|guarder|setblacklist|';
$lang->security->menu->whitelist = '白名单管理|guarder|setwhitelist|';
$lang->security->menu->sensitive = '敏感词设置|site|setsensitive|';
$lang->security->menu->captcha   = '验证码设置|guarder|setcaptcha|';
$lang->security->menu->upload    = '附件上传|site|setupload|';
$lang->security->menu->admin     = '管理员|user|admin|admin=1';
$lang->security->menu->group     = array('link' => '分组权限|group|browse|', 'alias' => 'managepriv,managemember');
$lang->security->menu->log       = '登录日志|user|adminlog|';

$lang->company->menu = $lang->site->menu;

$lang->score->menu = $lang->site->menu;

$lang->cart    = new stdclass();
$lang->order   = new stdclass();
$lang->address = new stdclass();

$lang->tree = new stdclass();
$lang->tree->menu = $lang->article->menu;

$lang->mail = new stdclass();
$lang->mail->menu = $lang->site->menu;

$lang->reply = new stdclass();
$lang->reply->menu = $lang->forum->menu;

$lang->wechat = new stdclass();
$lang->wechat->menu = $lang->site->menu;

$lang->search = new stdclass();
$lang->search->menu   = $lang->site->menu;
$lang->search->common = '搜索';

$lang->group = new stdclass();
$lang->group->menu = $lang->security->menu;

$lang->package = new stdclass();

$lang->stat = new stdclass();
$lang->stat->menu = new stdclass();
$lang->stat->menu->traffic  = '流量概况|stat|traffic|';
$lang->stat->menu->from     = '来源分类|stat|from|';
$lang->stat->menu->domains  = array('link' => '来路域名|stat|domainlist|', 'alias' => 'domaintrend,domainpage');
$lang->stat->menu->search   = '搜索引擎|stat|search|';
$lang->stat->menu->keywords = '关键词|stat|keywords|';
$lang->stat->menu->client   = '用户终端|stat|client|type=browser';
$lang->stat->menu->page     = '点击排行|stat|page|';
$lang->stat->menu->setStat  = '设置|stat|setting|';

$lang->error = new stdclass();
$lang->error->length       = array('<strong>%s</strong>长度错误，应当为<strong>%s</strong>', '<strong>%s</strong>长度应当不超过<strong>%s</strong>，且不小于<strong>%s</strong>。');
$lang->error->reg          = '<strong>%s</strong>不符合格式，应当为:<strong>%s</strong>。';
$lang->error->unique       = '<strong>%s</strong>已经有<strong>%s</strong>这条记录了。';
$lang->error->notempty     = '<strong>%s</strong>不能为空。';
$lang->error->equal        = '<strong>%s</strong>必须为<strong>%s</strong>。';
$lang->error->gt           = "<strong>%s</strong>应当大于<strong>%s</strong>。";
$lang->error->ge           = "<strong>%s</strong>应当不小于<strong>%s</strong>。";
$lang->error->lt           = "<strong>%s</strong>应当小于<strong>%s</strong>。";
$lang->error->le           = "<strong>%s</strong>应当不大于<strong>%s</strong>。";
$lang->error->in           = '<strong>%s</strong>必须为<strong>%s</strong>。';
$lang->error->int          = array('<strong>%s</strong>应当是数字。', '<strong>%s</strong>最小值为%s',  '<strong>%s</strong>应当介于<strong>%s-%s</strong>之间。');
$lang->error->float        = '<strong>%s</strong>应当是数字，可以是小数。';
$lang->error->email        = '<strong>%s</strong>应当为合法的EMAIL。';
$lang->error->phone        = '<strong>%s</strong>应当为合法的电话号码。';
$lang->error->mobile       = '<strong>%s</strong>应当为合法的手机号码。';
$lang->error->URL          = '<strong>%s</strong>应当为合法的URL。';
$lang->error->date         = '<strong>%s</strong>应当为合法的日期。';
$lang->error->account      = '<strong>%s</strong>应当为字母和数字的组合，至少三位';
$lang->error->passwordsame = '两次密码应当相等。';
$lang->error->passwordrule = '密码应该符合规则，长度至少为六位。';
$lang->error->captcha      = '请输入正确的验证码。';
$lang->error->noWritable   = '%s 可能不可写，请修改权限！';
$lang->error->fingerprint  = '身份认证过期，请重试！';
$lang->error->token        = '必须为英文或数字，长度为3-32字符！';
$lang->error->sensitive    = '内容中不能存在敏感词!';
$lang->error->noRepeat     = '主题或内容已存在，禁止重复';

$lang->pager = new stdclass();
$lang->pager->noRecord     = "暂时没有记录";
$lang->pager->digest       = "共 <strong>%s</strong> 条记录，%s <strong>%s/%s</strong> &nbsp; ";
$lang->pager->recPerPage   = "每页 <strong>%s</strong> 条";
$lang->pager->first        = "<i class='icon-step-backward' title='首页'></i>";
$lang->pager->pre          = "<i class='icon-play icon-rotate-180' title='上一页'></i>";
$lang->pager->next         = "<i class='icon-play' title='下一页'></i>";
$lang->pager->last         = "<i class='icon-step-forward' title='末页'></i>";
$lang->pager->locate       = "GO!";
$lang->pager->previousPage = "上一页";
$lang->pager->nextPage     = "下一页";
$lang->pager->summery      = "第 <strong>%s-%s</strong> 项，共 <strong>%s</strong> 项";

$lang->date = new stdclass();
$lang->date->minute = '分钟';
$lang->date->day    = '天';

define('DT_DATETIME1',  'Y-m-d H:i:s');
define('DT_DATETIME2',  'y-m-d H:i');
define('DT_MONTHTIME1', 'n/d H:i');
define('DT_MONTHTIME2', 'n月d日 H:i');
define('DT_DATE1',     'Y年m月d日');
define('DT_DATE2',     'Ymd');
define('DT_DATE3',     'Y年m月d日');
define('DT_DATE4',     'Y-m-d');
define('DT_TIME1',     'H:i:s');
define('DT_TIME2',     'H:i');

$lang->k  = '开源 cms — 首选蝉知建站系统;';
$lang->k .= '蝉知建站系统，开源免费的CMS系统;';
$lang->k .= 'cms系统，首选蝉知cms;';
$lang->k .= '企业建站，就用蝉知cms;';
$lang->k .= '蝉知企业建站系统，开源免费的php CMS系统';
/* address */
$lang->address->common  = '地址';
$lang->address->address = '详细地址';
$lang->address->phone   = '联系电话';
$lang->address->zipcode = '邮政编码';
$lang->address->contact = '联系人';

$lang->address->browse = '地址列表';
$lang->address->create = '添加新地址';
$lang->address->edit   = '编辑地址';
/* admin */ 
$lang->admin->common        = '后台管理';
$lang->admin->index         = '首页';
$lang->admin->ignore        = '忽略安全警告';
$lang->admin->ignoreupgrade = '忽略升级提示';

$lang->admin->shortcuts = new stdclass();
$lang->admin->shortcuts->common             = '快捷入口';
$lang->admin->shortcuts->articleCategories  = '文章类目';
$lang->admin->shortcuts->article            = '发布文章';
$lang->admin->shortcuts->product            = '添加产品';
$lang->admin->shortcuts->feedback           = '处理反馈';
$lang->admin->shortcuts->site               = '站点设置';
$lang->admin->shortcuts->logo               = 'LOGO设置';
$lang->admin->shortcuts->company            = '公司信息';
$lang->admin->shortcuts->contact            = '联系方式';

$lang->admin->thread       = '最新帖子';
$lang->admin->order        = '最新订单';
$lang->admin->feedback     = '最新反馈';

$lang->admin->adminEntry     = '警告：您现在的管理入口还是默认的admin.php，建议将admin.php改名以增强系统安全!';
$lang->admin->orderTitle     = '用户 %s 创建了一笔 %s 的订单';
$lang->admin->message        = '您今天有 %s 条留言待审核';
$lang->admin->reply          = '您今天有 %s 条回复待审核';
$lang->admin->comment        = '您今天有 %s 条评论待审核';
$lang->admin->threadReply    = '您今天有 %s 篇回帖';
$lang->admin->submittion     = '您今天有 %s 篇投稿待审核';
$lang->admin->todayReport    = '网站今日浏览量 %s , 访客数 %s , IP数 %s';
$lang->admin->yestodayReport = '网站昨日浏览量 %s , 访客数 %s , IP数 %s';
/* article */
$lang->article->common      = '文章';
$lang->article->setting     = '文章设置';
$lang->article->createDraft = '保存草稿';
$lang->article->post        = '我要投稿';
$lang->article->check       = '审核投稿';
$lang->article->reject      = '驳回投稿';

$lang->article->id         = '编号';
$lang->article->category   = '类目';
$lang->article->categories = '类目';
$lang->article->title      = '标题';
$lang->article->alias      = '别名';
$lang->article->content    = '内容';
$lang->article->source     = '来源';
$lang->article->copySite   = '来源网站';
$lang->article->copyURL    = '来源URL';
$lang->article->keywords   = '关键字';
$lang->article->summary    = '摘要';
$lang->article->author     = '作者';
$lang->article->editor     = '编辑';
$lang->article->addedDate  = '发布时间';
$lang->article->editedDate = '编辑时间';
$lang->article->status     = '状态';
$lang->article->type       = '类型';
$lang->article->views      = '阅读';
$lang->article->comments   = '评论';
$lang->article->stick      = '置顶';
$lang->article->order      = '排序';
$lang->article->isLink     = '跳转';
$lang->article->link       = '链接';
$lang->article->css        = 'CSS';
$lang->article->js         = 'JS';
$lang->article->layout     = '布局';

$lang->article->forward2Blog     = '转至博客';
$lang->article->forward2Forum    = '转至论坛';
$lang->article->selectCategories = '选择类目';
$lang->article->selectBoard      = '选择版块';
$lang->article->confirmReject    = '确认驳回这篇投稿？';

$lang->submittion= new stdclass();
$lang->submittion->common  = '投稿';
$lang->submittion->check   = '审核';
$lang->submittion->list    = '投稿列表';
$lang->submittion->publish = '发布';
$lang->submittion->reject  = '驳回';

$lang->submittion->status[0] = '';
$lang->submittion->status[1] = '<span class="label label-xsm label-primary">' . '待审核' .'</span>';
$lang->submittion->status[2] = '<span class="label label-xsm label-success">' . '通过' . '</span>';
$lang->submittion->status[3] = '驳回';

$lang->submittion->typeList = array();
$lang->submittion->typeList['article'] = '文章';
$lang->submittion->typeList['blog']    = '博客';

$lang->article->onlyBody = '不显示头部、侧边和底部(可定制性更强)';

$lang->article->list          = '文章列表';
$lang->article->admin         = '维护文章';
$lang->article->create        = '发布文章';
$lang->article->setcss        = '设置CSS';
$lang->article->setjs         = '设置JS';
$lang->article->edit          = '编辑文章';
$lang->article->files         = '附件';
$lang->article->images        = '图片';

$lang->article->submittion     = '投稿';
$lang->article->submissionTime = '投递时间';
$lang->article->noSubmittion   = '您还没有投稿记录，欢迎您提交投稿赚取积分，分享宣传。';

$lang->article->submittionOptions = new stdclass;
$lang->article->submittionOptions->open  = '开启';
$lang->article->submittionOptions->close = '关闭';

$lang->blog->common = '博客';
$lang->blog->admin  = '维护博客';
$lang->blog->list   = '博客列表';
$lang->blog->create = '发布博客';
$lang->blog->edit   = '编辑博客';

$lang->page->common = '单页';
$lang->page->admin  = '维护单页';
$lang->page->list   = '单页列表';
$lang->page->create = '添加单页';
$lang->page->edit   = '编辑单页';

$lang->article->sourceList['original']      = '原创';
$lang->article->sourceList['copied']        = '转贴';
$lang->article->sourceList['translational'] = '翻译';
$lang->article->sourceList['article']       = '转自文章';

$lang->article->statusList['normal'] = '正常';
$lang->article->statusList['draft']  = '草稿';

$lang->article->sticks[0] = '不置顶';
$lang->article->sticks[1] = '类目置顶';
$lang->article->sticks[2] = '全局置顶';

$lang->article->successStick   = '置顶成功';
$lang->article->successUnstick = '取消置顶成功';

$lang->article->confirmDelete = '您确定删除该文章吗？';
$lang->article->categoryEmpty = '类目不能为空';

$lang->article->lblAddedDate = '<strong>添加时间：</strong> %s &nbsp;&nbsp;';
$lang->article->lblAuthor    = "<strong>作者：</strong> %s &nbsp;&nbsp;";
$lang->article->lblSource    = '<strong>来源：</strong>';
$lang->article->lblViews     = ' <strong>阅读：</strong>%s';
$lang->article->lblEditor    = '最后编辑：%s 于 %s';
$lang->article->lblComments  = '<strong>评论：</strong> %s';

$lang->article->none      = '没有了';
$lang->article->previous  = '上一篇';
$lang->article->next      = '下一篇';
$lang->article->directory = '返回目录';
$lang->article->noCssTag  = '不需要&lt;style&gt;&lt;/style&gt;标签';
$lang->article->noJsTag   = '不需要&lt;script&gt;&lt;/script&gt;标签';

$lang->article->placeholder = new stdclass();
$lang->article->placeholder->addedDate = '可以延迟到选定的时间发布。';
$lang->article->placeholder->link      = '输入链接，可以是站外链接';

$lang->article->approveMessage = '您投递的文章 <strong>《%s》</strong> 已通过审核，奖励 <strong>+%s</strong> 积分，感谢您的支持。';
$lang->article->rejectMessage  = '您投递的文章 <strong>《%s》</strong> 未通过审核，您可以编辑后再次提交审核，感谢您的支持。';

$lang->article->forwardFrom = '转发自';
/* backup */
$lang->backup->common   = '备份';
$lang->backup->index    = '备份首页';
$lang->backup->history  = '备份历史';
$lang->backup->delete   = '删除备份';
$lang->backup->backup   = '备份';
$lang->backup->restore  = '还原';
$lang->backup->change   = '修改保留时间';
$lang->backup->changeAB = '修改';

$lang->backup->time  = '备份时间';
$lang->backup->files = '备份文件';
$lang->backup->size  = '大小';

$lang->backup->waitting       = '<span id="backupType"></span>正在进行中，请稍候...';
$lang->backup->confirmDelete  = '是否删除备份？';
$lang->backup->confirmRestore = '是否还原该备份？';
$lang->backup->holdDays       = '备份保留最近 %s 天';

$lang->backup->success = new stdclass();
$lang->backup->success->backup  = '备份成功！';
$lang->backup->success->restore = '还原成功！';

$lang->backup->error = new stdclass();
$lang->backup->error->noWritable     = "<code>%s</code> 不可写！请检查该目录权限，否则无法备份。";
$lang->backup->error->noDelete       = "文件 %s 无法删除，修改权限或手工删除。";
$lang->backup->error->restoreSQL     = "数据库还原失败，错误：%s";
$lang->backup->error->restoreFile    = "附件还原失败，错误：%s";
$lang->backup->error->backupFile     = "附件备份失败，错误：%s";
$lang->backup->error->backupTemplate = "模板备份失败，错误：%s";

$lang->js->backuping = '备份中...';
$lang->js->restoring = '还原中...';
/* block */
$lang->block->common          = '区块布局';
$lang->block->id              = '编号';
$lang->block->title           = '名称';
$lang->block->amount          = '数量';
$lang->block->limit           = '总数量';
$lang->block->recPerRow       = '每行数量';
$lang->block->type            = '类型';
$lang->block->htmlcode        = 'html代码';
$lang->block->phpcode         = 'php代码';
$lang->block->content         = '内容';
$lang->block->moreLink        = '更多链接';
$lang->block->page            = '页面';
$lang->block->regionList      = '区域列表';
$lang->block->select          = '请选择区块';
$lang->block->categories      = '分类';
$lang->block->showImage       = '图文';
$lang->block->maxWidth        = '最大宽度';
$lang->block->showCategory    = '显示类目';
$lang->block->showBoard       = '显示版块';
$lang->block->showTime        = '显示时间';
$lang->block->product         = '产品';
$lang->block->slide           = '幻灯片';
$lang->block->titleless       = '无标题';
$lang->block->borderless      = '无边框';
$lang->block->icon            = '图标';
$lang->block->padding         = '内边距';
$lang->block->border          = '边框';
$lang->block->grid            = '宽度';
$lang->block->more            = '更多';
$lang->block->color           = '颜色';
$lang->block->backgroundColor = '背景颜色';
$lang->block->textColor       = '文字颜色';
$lang->block->borderColor     = '边框颜色';
$lang->block->linkColor       = '链接颜色';
$lang->block->iconColor       = '图标颜色';
$lang->block->heading         = '标题栏';
$lang->block->content         = '内容';
$lang->block->background      = '背景';
$lang->block->custom          = '自定义';
$lang->block->preview         = '样式预览';
$lang->block->textExample     = '区块文字样式示例，<a href="###">链接示例</a>';
$lang->block->customStyleTip  = '在这里调整区块的颜色及背景';
$lang->block->style           = '样式';
$lang->block->sort            = '排序';
$lang->block->class           = 'css类名';
$lang->block->subRegion       = '子布局';
$lang->block->currentLayout   = '当前布局：%s';
$lang->block->renameLayout    = '方案重命名';
$lang->block->planName        = '方案名称';
$lang->block->saveLayoutAs    = '复制布局：%s';
$lang->block->defaultPlan     = '默认方案';
$lang->block->image           = '图片';

$lang->block->layout            = '布局';
$lang->block->logoPosition      = 'Logo';
$lang->block->navPosition       = '导航';
$lang->block->searchbarPosition = '搜索框';
$lang->block->sloganPosition    = '站点口号';

$lang->block->header = new stdclass();

$lang->block->header->top = new stdclass();
$lang->block->header->top->common = '页眉';
$lang->block->header->top->left   = '左栏';
$lang->block->header->top->center = '中间';
$lang->block->header->top->right  = '右栏';

$lang->block->header->middle = new stdclass();
$lang->block->header->middle->common = '中间';
$lang->block->header->middle->left   = '左栏';
$lang->block->header->middle->center = '中间';
$lang->block->header->middle->right  = '右栏';

$lang->block->header->bottom = new stdclass();
$lang->block->header->bottom->common = '下栏';

$lang->block->header->top->leftOptions['']         = '不显示';
$lang->block->header->top->leftOptions['slogan']   = '站点口号';
$lang->block->header->top->leftOptions['custom']   = '自定义';

$lang->block->header->top->rightOptions['']               = '不显示';
$lang->block->header->top->rightOptions['login']          = '登录注册 + 语言切换';
$lang->block->header->top->rightOptions['search']         = '搜索框';
$lang->block->header->top->rightOptions['loginAndSearch'] = '登录注册语言 + 搜索框';
$lang->block->header->top->rightOptions['searchAndLogin'] = '搜索框 + 登录注册语言';

$lang->block->header->middle->leftOptions['']     = '不显示';
$lang->block->header->middle->leftOptions['logo'] = 'Logo';

$lang->block->header->middle->centerOptions['']       = '不显示';
$lang->block->header->middle->centerOptions['slogan'] = '站点口号';
$lang->block->header->middle->centerOptions['nav']    = '导航';

$lang->block->header->middle->rightOptions['']       = '不显示';
$lang->block->header->middle->rightOptions['search'] = '搜索框';

$lang->block->header->bottomOptions['']             = '不显示';
$lang->block->header->bottomOptions['nav']          = '导航';
$lang->block->header->bottomOptions['navAndSearch'] = '导航 + 搜索框';

$lang->block->admin        = "区块管理";
$lang->block->pages        = "布局";
$lang->block->add          = "添加";
$lang->block->addChild     = "子区块";
$lang->block->template     = "模板";
$lang->block->create       = '添加区块';
$lang->block->browseBlocks = '区块列表';
$lang->block->browseRegion = '布局设置';
$lang->block->edit         = '编辑区块';
$lang->block->view         = '查看区块';
$lang->block->setPage      = '配置页面';
$lang->block->setregion    = '配置布局';
$lang->block->switchPlan   = '切换布局';
$lang->block->cloneLayout  = '布局另存为';
$lang->block->switchLayout = '切换布局';
$lang->block->removeLayout = '删除布局方案';
$lang->block->planIsUseing = '此方案正在使用，不能删除';

$lang->block->paddingTop    = '上';
$lang->block->paddingBottom = '下';
$lang->block->paddingLeft   = '左';
$lang->block->paddingRight  = '右';

$lang->block->placeholder = new stdclass();
$lang->block->placeholder->moreText               = '区块右上角文字';
$lang->block->placeholder->moreUrl                = '区块右上角链接地址';
$lang->block->placeholder->padding                = '0';
$lang->block->placeholder->customStyleTip         = '样式表支持Less语法，可以用#blockID作为id选择器。';
$lang->block->placeholder->desktopCustomScriptTip = '已包含 jQuery 1.9.0，可以用#blockID作为id选择器。';
$lang->block->placeholder->mobileCustomScriptTip  = '支持基本的jQuery语法，可以用#blockID作为id选择器。';
$lang->block->placeholder->class                  = '多个类名之间用空格隔开';

$lang->block->gridOptions[0]  = '自动';
$lang->block->gridOptions[6]  = '1/2';
$lang->block->gridOptions[4]  = '1/3';
$lang->block->gridOptions[8]  = '2/3';
$lang->block->gridOptions[3]  = '1/4';
$lang->block->gridOptions[9]  = '3/4';
$lang->block->gridOptions[2]  = '1/6';
$lang->block->gridOptions[10] = '5/6';
$lang->block->gridOptions[12] = '100%';

$lang->block->categoryList['custom']  = '自定义';
$lang->block->categoryList['article'] = '文章';
$lang->block->categoryList['product'] = '产品';
$lang->block->categoryList['system']  = '系统';

$lang->block->pageGroupList['system']   = '系统';
$lang->block->pageGroupList['content']  = '内容';
$lang->block->pageGroupList['product']  = '产品';
$lang->block->pageGroupList['feedback'] = '反馈';

$lang->block->imageSizeList['large']  = '大图';
$lang->block->imageSizeList['middle'] = '中图';
$lang->block->imageSizeList['small']  = '小图';

$lang->block->imagePositionList['left']  = '居左';
$lang->block->imagePositionList['right'] = '居右';

$lang->block->category = new stdclass();
$lang->block->category->showChildren = '显示子分类';
$lang->block->category->fromCurrent  = '当前类目开始';

$lang->block->category->showChildrenList[1] = '是';
$lang->block->category->showChildrenList[0] = '否';

$lang->block->category->fromCurrentList[1] = '是';
$lang->block->category->fromCurrentList[0] = '否';

$lang->block->category->showCategoryList['abbr'] = '简称';
$lang->block->category->showCategoryList['name'] = '全称';

$lang->block->slideStyle = '展示形式';
$lang->block->slideStyleList['carousel'] = '横向轮播';
$lang->block->slideStyleList['tile']     = '竖向展开';

$lang->block->navTypeList = new stdclass();
$lang->block->navTypeList->desktop_top   = '桌面';
$lang->block->navTypeList->desktop_blog  = '博客';
$lang->block->navTypeList->mobile_top    = '移动版顶部';
$lang->block->navTypeList->mobile_bottom = '移动版底部';
$lang->block->navTypeList->mobile_blog   = '移动版博客';

$lang->block->sideGrid  = '侧边栏宽度';
$lang->block->sideFloat = '侧边栏位置';
/* blog */
$lang->blog->common    = '博客';
$lang->blog->home      = '博客首页';
$lang->blog->siteHome  = '网站首页';
$lang->blog->subscribe = '订阅博客';
/* book */
$lang->book->common       = '手册';
$lang->book->list         = '手册列表';
$lang->book->articles     = '文档导航';
$lang->book->backtolist   = '返回手册列表';

$lang->book->admin      = '手册列表';
$lang->book->createBook = '添加手册';
$lang->book->create     = '添加';
$lang->book->catalog    = '章节';
$lang->book->edit       = '编辑';
$lang->book->sort       = '排序';
$lang->book->setting    = '设置';
$lang->book->index      = '首页';

$lang->book->searchResults     = '搜索结果';
$lang->book->inputArticleTitle = '请输入文章标题';

$lang->book->id          = '编号';
$lang->book->type        = '类型';
$lang->book->parent      = '类目';
$lang->book->author      = '作者';
$lang->book->editor      = '编辑者';
$lang->book->addedDate   = '发布时间';
$lang->book->editedDate  = '编辑时间';
$lang->book->title       = '标题';
$lang->book->keywords    = '关键词';
$lang->book->summary     = '简介';
$lang->book->content     = '内容';
$lang->book->alias       = '别名';
$lang->book->order       = '排序';
$lang->book->views       = '阅读';
$lang->book->files       = '附件';
$lang->book->images      = '图片';
$lang->book->chapterList = '目录';
$lang->book->articleList = '文章';
$lang->book->fullScreen  = '全屏显示';

$lang->book->typeList['book']    = '手册';
$lang->book->typeList['chapter'] = '章节';
$lang->book->typeList['article'] = '文章';

$lang->book->chapterTypeList['home'] = '只在首页显示';
$lang->book->chapterTypeList['left'] = '一直显示在左侧';

$lang->book->fullScreenList['1'] = '是';
$lang->book->fullScreenList['0'] = '否';

$lang->book->lblAddedDate = '添加时间：<strong>%s</strong> ';
$lang->book->lblAuthor    = '作者：<strong>%s</strong> ';
$lang->book->lblViews     = '阅读：<strong>%s</strong> ';
$lang->book->lblEditor    = '最后编辑：%s 于 %s ';

$lang->book->none     = '没有了';
$lang->book->chapter  = '返回目录';
$lang->book->back2Top = '返回顶部';
$lang->book->goHome   = '返回首页';

$lang->book->aliasRepeat   = '别名:<strong> %s </strong>不能重复添加。';
$lang->book->confirmDelete = "<span class='text-danger'>此操作将删除该手册所有章节和文章，确认删除?</span>";

$lang->book->note = new stdclass();
$lang->book->note->addedDate = '可以延迟到选定的时间发布。';
/* cart */
$lang->cart->common = '购物车';
$lang->cart->browse = '我的购物车';

$lang->cart->noProducts     = "购物车内没有商品。";
$lang->cart->pickProducts   = "去挑选商品";
$lang->cart->goAccount      = "去结算";
$lang->cart->goHome         = "返回首页";

$lang->cart->topbarInfo     = "<i class='icon icon-shopping-cart text-danger'></i> 购物车 <span class='label label-badge'>%s</span>";
/* company */
$lang->company->common  = "公司";

$lang->company->name    = "公司名称";
$lang->company->desc    = "公司简介";
$lang->company->content = "公司介绍";
$lang->company->contact = "联系我们";
$lang->company->qrcode  = "关注我们";

$lang->company->setBasic   = "公司信息";
$lang->company->setContact = "联系方式";

$lang->company->error = new stdclass(); 
$lang->company->error->email = "请填写合法的EMAIL";
/* error */
$lang->error = new stdclass();
$lang->error->pageNotFound    = '页面不存在';
$lang->error->articleCategory = '文章分类';
$lang->error->productCategory = '产品分类';
$lang->error->blogCategory    = '博客分类';
$lang->error->searchTip       = '欢迎继续浏览本站的其他内容，或者通过搜索来查找内容：';
/* file */
$lang->file->common        = '附件';
$lang->file->upload        = '上传附件';
$lang->file->browse        = '附件列表';
$lang->file->imageList     = '图片列表';
$lang->file->download      = '下载附件';
$lang->file->edit          = '编辑';
$lang->file->primary       = '封面';
$lang->file->name          = '名称';
$lang->file->setPrimary    = '设为封面';
$lang->file->cancelPrimary = '取消封面';
$lang->file->deny          = '禁止';
$lang->file->allow         = '允许';
$lang->file->toggle        = '切换';
$lang->file->label         = '标题：';
$lang->file->lblInfo       = '<i>(类型：%s, 大小：%s, 添加于：%s，下载%s次)</i>';
$lang->file->limit         = "(<span class='text-danger'>%sM以内</span>)";
$lang->file->source        = '素材';
$lang->file->sourceList    = '素材列表';
$lang->file->uploadSource  = '上传素材';
$lang->file->sourceURI     = '地址';
$lang->file->deleteSource  = '删除素材';
$lang->file->editSource    = '编辑素材';
$lang->file->selectImage   = '选择素材';

$lang->file->id        = '编号';
$lang->file->title     = '名称';
$lang->file->pathname  = '存储路径';
$lang->file->extension = '类型';
$lang->file->size      = '大小';
$lang->file->addedBy   = '上传者';
$lang->file->addedDate = '上传日期';
$lang->file->public    = '匿名下载';
$lang->file->downloads = '下载次数';
$lang->file->score     = '所需积分';
$lang->file->setScore  = '设置积分';
$lang->file->lblInfo   = '您现在共有积分：<strong class="red">%s</strong>';
$lang->file->confirm   = '下载此插件需要您 %s 积分';

$lang->file->publics[0] = '需要登录';
$lang->file->publics[1] = '允许';

$lang->file->sort        = '排序';
$lang->file->edit        = '编辑';
$lang->file->editFile    = '更改附件';
$lang->file->fileManager = '文件管理';

$lang->file->viewType[0] = '图片';
$lang->file->viewType[1] = '列表';

$lang->file->errorUnwritable  = '上传目录不可写，无法上传附件。';
$lang->file->noAccess         = '不允许访问。';
$lang->file->invalidParameter = '参数无效。';
$lang->file->unWritable       = '目录不可写或不存在。';
$lang->file->uploadForbidden  = '附件上传功能已禁用。';
$lang->file->sizeLimit        = "<p class='text-danger'>附件大小不能大于%sM</p>";
$lang->file->sameName         = "已存在同名文件，如果继续将覆盖原文件。";
$lang->file->nameEmpty        = "文件名不能为空";
$lang->file->copySuccess      = "已复制到剪贴板";
$lang->file->evilChar         = "包含非法字符";
$lang->file->rebuildThumbs    = "已完成 %s";
/* forum */
$lang->forum->common      = '论坛';
$lang->forum->board       = '版块';
$lang->forum->owners      = '版主';
$lang->forum->threadList  = '主题列表';
$lang->forum->threadCount = '主题数';
$lang->forum->postCount   = '帖子数';
$lang->forum->lastPost    = '最后发表';
$lang->forum->readonly    = '只读版块。';
$lang->forum->notExist    = '版块不存在。';
$lang->forum->lblOwner    = " [ 版主：%s ]";

$lang->forum->post    = '发帖';
$lang->forum->admin   = '论坛维护';
$lang->forum->update  = '更新数据';
$lang->forum->setting = '论坛设置';
$lang->forum->postReview = '发帖审核';

$lang->forum->updateDesc    = '该更新操作会重新计算每个版块的发帖数据。';
$lang->forum->successUpdate = '更新数据成功';

$lang->pager->noRecord      = '';
$lang->pager->digest        = str_replace('记录', '主题', $lang->pager->digest);
$lang->pager->settedInForum = true;    // Set this switch thus in thread module can avoid overiding them.

$lang->forum->postReviewOptions        = new stdclass(); 
$lang->forum->postReviewOptions->open  = '开启';
$lang->forum->postReviewOptions->close = '关闭';
/* group */
$lang->group->common             = '分组权限';
$lang->group->allGroups          = '所有权限';
$lang->group->browse             = '浏览分组';
$lang->group->create             = '新增分组';
$lang->group->edit               = '编辑分组';
$lang->group->copy               = '复制分组';
$lang->group->delete             = '删除分组';
$lang->group->managePriv         = '权限';
$lang->group->managePrivByGroup  = '权限维护';
$lang->group->managePrivByModule = '按模块分配权限';
$lang->group->byModuleTips       = '<span class="tips">（可以按住shift或者control键进行多选）</span>';
$lang->group->manageMember       = '成员';
$lang->group->linkMember         = '关联用户';
$lang->group->unlinkMember       = '移除用户';
$lang->group->confirmDelete      = '您确定删除该用户分组吗？';
$lang->group->successSaved       = '成功保存';
$lang->group->errorNotSaved      = '没有保存，请确认选择了权限数据。';

$lang->group->id       = '编号';
$lang->group->name     = '分组名称';
$lang->group->desc     = '分组描述';
$lang->group->users    = '用户列表';
$lang->group->module   = '模块';
$lang->group->method   = '功能';
$lang->group->priv     = '权限';
$lang->group->option   = '选项';
$lang->group->inside   = '组内用户';
$lang->group->outside  = '组外用户';
$lang->group->other    = '其他模块';
$lang->group->all      = '所有权限';
$lang->group->extent   = '权限范围';
$lang->group->havePriv = '已授权';
$lang->group->noPriv   = '未授权';

$lang->group->selectAll = '全选';
$lang->group->manageAll = '可浏览所有客户和订单';

$lang->group->copyOptions['copyPriv'] = '复制权限';
$lang->group->copyOptions['copyUser'] = '复制用户';

include (dirname(__FILE__) . '/resource.php');
/* guarder */
$lang->guarder = new stdclass();

$lang->guarder->common       = '安全设置';
$lang->guarder->action       = '操作';
$lang->guarder->then         = '则';
$lang->guarder->setBlacklist = '黑名单管理';
$lang->guarder->setWhitelist = '白名单管理';
$lang->guarder->setCaptcha   = '验证码设置';
$lang->guarder->addBlacklist = '添加黑名单';
$lang->guarder->addCaptcha   = '添加验证码';
$lang->guarder->getEmailCode = '获取邮箱验证码';

$lang->guarder->captcha        = '验证码';
$lang->guarder->question       = '问题';
$lang->guarder->answer         = '答案';
$lang->guarder->numbers        = array('零', '壹', '贰', '叁', '肆', '伍', '陆', '柒', '捌', '玖', '拾');
$lang->guarder->operators      = array('*' => '乘', '-' => '减', '+' => '加');
$lang->guarder->equal          = '=';
$lang->guarder->placeholder    = '数字、文字';
$lang->guarder->password       = '管理密码';
$lang->guarder->passwordHolder = '请输入当前帐号的密码';
$lang->guarder->identityTip    = '请输入IP、 Email、用户名或敏感词';
$lang->guarder->captchaTip     = '自定义验证码后, 前台将只随机调用此组验证码';

$lang->guarder->verify        = '为了安全起见，当前操作需要验证您的管理员权限';
$lang->guarder->okFile        = '文件方式';
$lang->guarder->created       = '我已创建';
$lang->guarder->email         = '邮箱验证码';
$lang->guarder->setSecurity   = '密保问题';
$lang->guarder->captcha       = '验证码';
$lang->guarder->needVerify    = '需要验证管理员身份';
$lang->guarder->emailFail     = '请填写正确的验证码';
$lang->guarder->questionFail  = '请填写正确的密保答案';
$lang->guarder->verifySuccess = '验证通过，请继续操作';
$lang->guarder->noConfigure   = "无法找到发信配置信息";
$lang->guarder->noEmail       = "未填写个人邮箱";
$lang->guarder->noQuestion    = "未设置密保问题";
$lang->guarder->noCaptcha     = "邮箱验证无法启用。";
$lang->guarder->okFileVerify  = "请在服务器创建 <span class='red'>%s</span> 文件，并写入内容 <span class='red'>%s</span> 。";
$lang->guarder->sendSuccess   = '验证码已发送至 %s';
$lang->guarder->options       = '验证方式';

$lang->guarder->blacklistModes['all']      = '全部';
$lang->guarder->blacklistModes['ip']       = 'ip地址';
$lang->guarder->blacklistModes['account']  = '帐号';
$lang->guarder->blacklistModes['keywords'] = '关键词';
$lang->guarder->blacklistModes['guard']    = '网址';
$lang->guarder->blacklistModes['email']    = '邮箱地址';

$lang->guarder->whitelist = new stdclass();
$lang->guarder->whitelist->ip            = 'IP白名单';
$lang->guarder->whitelist->account       = '账号白名单';
$lang->guarder->whitelist->accountHolder = '多个账户使用 , 隔开如zhangsan,lisi';
$lang->guarder->whitelist->ipHolder      = '多个IP使用 , 隔开如202.194.133.1,202.194.132.0/28';
$lang->guarder->whitelist->wrongIP       = 'IP 格式错误';

$lang->guarder->permanent = '永久';
$lang->guarder->interval  = '分钟内';
$lang->guarder->perDay    = '每天超过';
$lang->guarder->exceed    = '超过';
$lang->guarder->times     = '次';
$lang->guarder->disable   = '禁用';

$lang->guarder->operationList = new stdclass();

$lang->guarder->operationList->ip = new stdclass();
$lang->guarder->operationList->ip->logonFailure    = '登录失败';
$lang->guarder->operationList->ip->register        = '注册数量';
$lang->guarder->operationList->ip->resetPassword   = '找回密码';
$lang->guarder->operationList->ip->resetPWDFailure = '重置密码失败';
$lang->guarder->operationList->ip->postThread      = '发表主题';
$lang->guarder->operationList->ip->postComment     = '发表评论';
$lang->guarder->operationList->ip->postReply       = '回复帖子';
$lang->guarder->operationList->ip->post            = 'POST请求';
$lang->guarder->operationList->ip->search          = '搜索次数';
$lang->guarder->operationList->ip->error404        = '404次数';
$lang->guarder->operationList->ip->captchaFail     = '验证码错误';

$lang->guarder->operationList->account = new stdclass();
$lang->guarder->operationList->account->logonFailure    = '登录失败';
$lang->guarder->operationList->account->resetPassword   = '找回密码';
$lang->guarder->operationList->account->resetPWDFailure = '重置密码失败';
$lang->guarder->operationList->account->postThread      = '发表主题';
$lang->guarder->operationList->account->postComment     = '发表评论';
$lang->guarder->operationList->account->postReply       = '回复帖子';
$lang->guarder->operationList->account->post            = 'POST请求';
$lang->guarder->operationList->account->search          = '搜索次数';
$lang->guarder->operationList->account->error404        = '404次数';
$lang->guarder->operationList->account->captchaFail     = '验证码错误';

$lang->guarder->punishOptions = array();
$lang->guarder->punishOptions[5]     = '5分钟'; 
$lang->guarder->punishOptions[10]    = '10分钟'; 
$lang->guarder->punishOptions[30]    = '半小时'; 
$lang->guarder->punishOptions[60]    = '1小时'; 
$lang->guarder->punishOptions[720]   = '12小时'; 
$lang->guarder->punishOptions[1440]  = '24小时'; 
$lang->guarder->punishOptions[10080] = '一周'; 
$lang->guarder->punishOptions[43200] = '一个月'; 
$lang->guarder->punishOptions[0]     = '永久'; 

$lang->blacklist = new stdclass();
$lang->blacklist->type        = '类型';
$lang->blacklist->title       = '标题';
$lang->blacklist->identity    = '内容';
$lang->blacklist->reason      = '原因';
$lang->blacklist->expiredDate = '解禁时间';
$lang->blacklist->ip          = 'IP';
$lang->blacklist->keywords    = '关键词';
$lang->blacklist->account     = '账户';
$lang->blacklist->email       = '邮箱';
$lang->blacklist->other       = '其他';
/* index */
$lang->index->common  = '首页';
$lang->index->index   = '首页';
$lang->index->aboutus = '关于我们';
$lang->index->news    = '新闻动态';
$lang->index->blog    = '最近博客';
$lang->index->contact = '联系我们';
/* install */
$lang->install->common  = '安装';
$lang->install->next    = '下一步';
$lang->install->pre     = '返回';
$lang->install->reload  = '刷新';
$lang->install->error   = '错误 ';

$lang->install->start            = '开始安装';
$lang->install->keepInstalling   = '继续安装当前版本';
$lang->install->welcome          = '您睿智地选择了蝉知企业门户系统!';
$lang->install->license          = '授权协议';
$lang->install->desc             = <<<EOT
<p>使用蝉知，您可以：</p>
<blockquote>
  <ul>
    <li><strong>品牌宣传</strong>：建立品牌网站，展示企业形象。</li>
    <li><strong>营销推广</strong>：SEO, 邮件、短信、微博、微信...</li>
    <li><strong>电子商务</strong>：展示产品，在线销售。</li>
    <li><strong>客户关怀</strong>：售后支持，维系客户。</li>
  </ul>
</blockquote>
EOT;

$lang->install->newVersion = "提示：蝉知系统已于 <span id='releaseDate'></span> 发布 <span id='version'></span>版本。<a href='' target='_blank' id='upgradeLink'>马上下载</a>";

$lang->install->choice     = '您可以选择：';
$lang->install->checking   = '系统检查';
$lang->install->ok         = '通过(√)';
$lang->install->fail       = '失败(×)';
$lang->install->loaded     = '已加载';
$lang->install->unloaded   = '未加载';
$lang->install->exists     = '目录存在 ';
$lang->install->notExists  = '目录不存在 ';
$lang->install->writable   = '目录可写 ';
$lang->install->notWritable= '目录不可写 ';
$lang->install->phpINI     = 'PHP配置文件';
$lang->install->checkItem  = '检查项';
$lang->install->current    = '当前配置';
$lang->install->result     = '检查结果';
$lang->install->action     = '如何修改';

$lang->install->phpVersion = 'PHP版本';
$lang->install->phpFail    = 'PHP版本必须大于5.2.0';

$lang->install->pdo          = 'PDO扩展';
$lang->install->pdoFail      = '修改PHP配置文件，加载PDO扩展。';
$lang->install->pdoMySQL     = 'PDO_MySQL扩展';
$lang->install->pdoMySQLFail = '修改PHP配置文件，加载pdo_mysql扩展。';
$lang->install->tmpRoot      = '临时文件目录';
$lang->install->dataRoot     = '上传文件目录';
$lang->install->mkdir        = '<p>需要创建目录%s。linux下面命令为：<br /> <code>mkdir -p %s</code></p>';
$lang->install->chmod        = '需要修改目录 "%s" 的权限。linux下面命令为：<br /><code>chmod o=rwx -R %s</code>';

$lang->install->settingDB      = '设置数据库';
$lang->install->dbHost         = '数据库服务器';
$lang->install->dbHostNote     = '如果127.0.0.1无法访问，尝试使用localhost';
$lang->install->dbPort         = '服务器端口';
$lang->install->dbUser         = '数据库用户名';
$lang->install->dbPassword     = '数据库密码';
$lang->install->dbName         = '数据库名';
$lang->install->dbPrefix       = '建表使用的前缀';
$lang->install->createDB       = '自动创建数据库';
$lang->install->clearDB        = '清空已有蝉知数据';
$lang->install->importDemoData = '导入demo数据';

$lang->install->errorDBName        = "数据库名不能带'.'";
$lang->install->errorConnectDB     = '数据库连接失败。 ';
$lang->install->errorCreateDB      = '数据库创建失败。';
$lang->install->errorDBExists      = '数据库已经存在，继续安装返回上步并选中“清空数据”选项。';
$lang->install->errorCreateTable   = '创建表失败。';

$lang->install->setConfig  = '数据库配置';
$lang->install->key        = '配置项';
$lang->install->value      = '值';
$lang->install->saveConfig = '保存配置文件';
$lang->install->save2File  = '<span class="red">尝试写入配置文件，失败！</span>拷贝上面文本框中的内容，将其保存到 "<strong> %s </strong>"中。';
$lang->install->saved2File = '配置信息已经成功保存到" <strong>%s</strong> "中。您后面还可继续修改此文件。';
$lang->install->errorNotSaveConfig = '还没有保存配置文件';

$lang->install->setAdmin = '设置管理员';
$lang->install->account  = '帐号';
$lang->install->password = '密码';
$lang->install->errorEmptyPassword = '密码不能为空';

$lang->install->success    = "安装成功！";
$lang->install->visitAdmin = '登录后台';
/* links */
$lang->links->common  = '友情链接';
$lang->links->index   = '首页链接';
$lang->links->admin   = '友链管理';
$lang->links->all     = '所有链接';
/* mail */
$lang->mail->common = '发信设置';
$lang->mail->index  = '首页';
$lang->mail->detect = '检测';
$lang->mail->edit   = '编辑配置';
$lang->mail->save   = '成功保存';
$lang->mail->test   = '测试发信';
$lang->mail->reset  = '重置';

$lang->mail->turnon       = '是否打开';
$lang->mail->fromAddress  = '发信邮箱';
$lang->mail->fromName     = '发信人';
$lang->mail->mta          = '发信方式';
$lang->mail->host         = 'smtp服务器';
$lang->mail->port         = 'smtp端口号';
$lang->mail->auth         = '是否需要验证';
$lang->mail->username     = 'smtp帐号';
$lang->mail->password     = 'smtp密码';
$lang->mail->secure       = '是否加密';
$lang->mail->debug        = '调试级别';
$lang->mail->getEmailCode = '获取邮箱验证码';

$lang->mail->turnonList[1] = '打开';
$lang->mail->turnonList[0] = '关闭';

$lang->mail->debugList[0] = '关闭';
$lang->mail->debugList[1] = '一般';
$lang->mail->debugList[2] = '较高';

$lang->mail->authList[1] = '需要';
$lang->mail->authList[0] = '不需要';

$lang->mail->secureList['']    = '不加密';
$lang->mail->secureList['ssl'] = 'ssl';
$lang->mail->secureList['tls'] = 'tls';

$lang->mail->inputFromEmail = '请输入发信邮箱：';
$lang->mail->nextStep       = '下一步';
$lang->mail->successSaved   = '配置信息已经成功保存。';
$lang->mail->subject        = '测试邮件';
$lang->mail->content        = '邮箱设置成功';
$lang->mail->sending        = "邮件正在发往%s,请稍侯...";
$lang->mail->successSended  = '邮件已发送到 %s';
$lang->mail->needConfigure  = '无法找到邮件配置信息，请先配置邮件发送参数。';
$lang->mail->error          = '你的邮箱地址有误，请填写正确的邮箱地址。'; 
$lang->mail->trySendlater   = '三分钟内不能重复发送邮件。'; 

$lang->mail->captcha     = '验证码';
$lang->mail->sendContent = <<<EOT
%s 您好：
<br />您在<strong>%s</strong>(%s)上面的验证码为：%s
<br />如非您本人操作，请忽略。
<br />
<br /><strong>%s</strong>由<a href='http://www.chanzhi.org' target='_blank'>蝉知企业门户系统</a>搭建。
<br /><a href='http://www.cnezsoft.com' target='_blank'>易软天创</a>为天下企业提供专业的管理工具。
EOT;
/* message */
$lang->message->common            = '留言';
$lang->message->id                = '编号';
$lang->message->type              = '类型';
$lang->message->from              = '称呼';
$lang->message->content           = '内容';
$lang->message->phone             = '电话';
$lang->message->mobile            = '手机';
$lang->message->qq                = 'QQ';
$lang->message->email             = '邮箱';
$lang->message->date              = '时间';
$lang->message->secret            = '仅管理员可见';
$lang->message->readed            = '已读';
$lang->message->captcha           = '验证码';
$lang->message->list              = '留言列表';
$lang->message->post              = '发表留言';
$lang->message->viewArticle       = '正文';
$lang->message->viewComment       = '留言';
$lang->message->noSelectedMessage = '您没有选择任何留言。';
$lang->message->needCheck         = '留言通过审核后显示。';
$lang->message->showDetail        = '显示全部';
$lang->message->hideDetail        = '收起';

$lang->message->admin          = '后台首页';
$lang->message->pass           = '通过';
$lang->message->reply          = '回复';
$lang->message->view           = '查看';
$lang->message->manage         = '留言管理';
$lang->message->delete         = '删除';
$lang->message->deleteSelected = '删除选中项';
$lang->message->passPre        = '通过之前';
$lang->message->deletePre      = '删除之前';
$lang->message->commentAt      = '发表于 ';
$lang->message->deletedObject  = '已删除项目';
$lang->message->contactHidden  = "以下电话、手机、邮箱、qq联系方式只有网站管理员可见，不会暴露。";

$lang->message->confirmDeleteSingle = '您确定要删除该留言吗？';
$lang->message->confirmDeletePre    = '您确定要删除之前的留言吗？';
$lang->message->confirmPassSingle   = '您确定要通过该留言吗？';
$lang->message->confirmPassPre      = '您确定要通过之前的留言吗？';

$lang->message->statusList[0] = '未审核';
$lang->message->statusList[1] = '已审核';

$lang->message->readedStatus[0] = '未读';
$lang->message->readedStatus[1] = '已读';

$lang->comment = new stdclass();
$lang->comment->common       = '评论';
$lang->comment->id           = '编号';
$lang->comment->type         = '类型';
$lang->comment->from         = '称呼';
$lang->comment->content      = '内容';
$lang->comment->phone        = '电话';
$lang->comment->mobile       = '手机';
$lang->comment->qq           = 'QQ';
$lang->comment->email        = '邮箱';
$lang->comment->captcha      = '验证码';
$lang->comment->list         = '评论列表';
$lang->comment->post         = '发表评论';
$lang->comment->viewArticle  = '正文';
$lang->comment->viewComment  = '评论';
$lang->comment->needCheck    = '评论通过审核后显示。';
$lang->comment->receiveEmail = '接收邮件提醒';

$lang->comment->pass          = '通过';
$lang->comment->reply         = '回复';
$lang->comment->replyAt       = '回复于';
$lang->comment->manage        = '评论管理';
$lang->comment->delete        = '删除';
$lang->comment->passPre       = '通过之前';
$lang->comment->deletePre     = '删除之前';
$lang->comment->commentTo     = '发表于';
$lang->comment->commentAt     = '发表于';
$lang->comment->deletedObject = '已删除项目';

$lang->comment->confirmDeleteSingle = '您确定要删除该评论吗？';
$lang->comment->confirmDeletePre    = '您确定要删除之前的评论吗？';
$lang->comment->confirmPassSingle   = '您确定要通过该评论吗？';
$lang->comment->confirmPassPre      = '您确定要通过之前的评论吗？';

$lang->comment->statusList[0] = '未审核';
$lang->comment->statusList[1] = '已审核';

$lang->message->replyItem   = "<dd><strong>%s</strong> 于 <em>%s</em> 回复：%s</dd>";
$lang->comment->replyItem   = "<dd><strong>%s</strong> 于 <em>%s</em> 回复：%s</dd>";
$lang->message->messageItem = "<dd><strong>%s</strong> 于 <em>%s</em> 发表：%s</dd>";

$lang->message->replySubject = '%s管理员的回复';
/* misc */
if(!isset($lang->misc)) $lang->misc = new stdclass();
$lang->misc->version     = '版本%s';
$lang->misc->offcialSite = '官方网站';
$lang->misc->support     = '技术支持';
$lang->misc->userbook    = '用户手册';
$lang->misc->forum       = '论坛交流';

$lang->misc->thanksTitle      = '蝉知构建于众多优秀的开源项目之上';
$lang->misc->thanksFooter     = '感谢%s提供安全审计';
$lang->misc->thanksObjectName = '站长安全网';
/* nav */
$lang->nav->common   = '导航设置';
$lang->nav->setNav   = '导航设置';
$lang->nav->add      = '添加';
$lang->nav->addChild = '添加子导航';
$lang->nav->delete   = '删除导航';

$lang->nav->inputUrl        = '请输入链接';
$lang->nav->inputTitle      = '请输入标题';
$lang->nav->cannotRemoveAll = '不能删除所有导航';

$lang->nav->types['system']  = '系统模块';
$lang->nav->types['article'] = '文章类目';
$lang->nav->types['blog']    = '博客类目';
$lang->nav->types['product'] = '产品类目';
$lang->nav->types['page']    = '单页';
$lang->nav->types['custom']  = '自定义';

$lang->nav->system = new stdclass();
$lang->nav->system->home    = '首页';
$lang->nav->system->company = '关于我们';
$lang->nav->system->contact = '联系我们';
$lang->nav->system->forum   = '论坛';
$lang->nav->system->blog    = '博客';
$lang->nav->system->book    = '手册';
$lang->nav->system->message = '留言';

$lang->nav->desktop        = '桌面版顶部';
$lang->nav->desktop_blog   = '博客';
$lang->nav->mobile_top     = '移动版顶部';
$lang->nav->mobile_bottom  = '移动版底部';
$lang->nav->mobile_blog    = '移动版博客';

$lang->nav->targetList = array();
$lang->nav->targetList['_self']  = '当前窗口';
$lang->nav->targetList['_blank'] = '新开窗口';
$lang->nav->targetList['modal']  = '弹出窗口';
/* order */
$lang->order->common  = '订单';

$lang->order->id             = 'ID';
$lang->order->productInfo    = '商品信息';
$lang->order->account        = '账号';
$lang->order->address        = '收货地址';
$lang->order->price          = '价格';
$lang->order->score          = '积分';
$lang->order->count          = '数量';
$lang->order->amount         = '金额';
$lang->order->sn             = '交易号';
$lang->order->payStatus      = '付款状态';
$lang->order->paidDate       = '付款时间';
$lang->order->deliveryStatus = '发货状态';
$lang->order->deliveriedDate = '发货时间';
$lang->order->confirmedDate  = '收货时间';
$lang->order->payment        = '交易方式';
$lang->order->createdDate    = '下单时间';
$lang->order->express        = '快递公司';
$lang->order->waybill        = '快递单号';
$lang->order->expressInfo    = '快递详情';
$lang->order->receiver       = '收货人';
$lang->order->noRecord       = '无';
$lang->order->status         = '状态';
$lang->order->note           = '买家留言';
$lang->order->frontNote      = '留言';
$lang->order->basic          = '基本信息';
$lang->order->type           = '类型';
$lang->order->info           = '订单信息';
$lang->order->savePay        = '回款';
$lang->order->edit           = '编辑';
$lang->order->contact        = '收货姓名';
$lang->order->phone          = '手机号';
$lang->order->zipcode        = '邮编';
$lang->order->deliveryStatus = '发货状态';

$lang->order->deliverList['not_send']  = '待发货';
$lang->order->deliverList['send']      = '已发货';
$lang->order->deliverList['confirmed'] = '已收货';

$lang->order->admin          = '订单管理';
$lang->order->view           = '详情';
$lang->order->setting        = '系统设置';
$lang->order->browse         = '我的订单';
$lang->order->bought         = '查看已买商品';
$lang->order->createdSuccess = '订单创建成功！';
$lang->order->paidSuccess    = '恭喜，订单支付成功！';
$lang->order->submit         = '提交订单';
$lang->order->cancel         = '取消';
$lang->order->pay            = '支付';
$lang->order->goToPay        = '订单创建成功，请到支付页面完成付款。';
$lang->order->return         = '收款';
$lang->order->delivery       = '发货';
$lang->order->finish         = '完成';
$lang->order->confirm        = '确认订单信息';
$lang->order->selectProducts = "选择了 <strong class='text-danger'>%s</strong> 件商品，";
$lang->order->totalToPay     = "共计：<strong id='amount' class='text-danger'>%s</strong>";
$lang->order->payInfo        = "%s %s 商品订单";
$lang->order->goToBank       = "请在线支付您的订单。";
$lang->order->track          = '查看物流';
$lang->order->life           = '订单跟踪';
$lang->order->days           = '天';
$lang->order->deliveryInfo   = '查看详情';
$lang->order->backToCart     = '返回购物车修改';
$lang->order->paid           = '我已付款';
$lang->order->products       = '订单产品';
$lang->order->selectPayment  = '选择支付方式';
$lang->order->settlement     = '去结算';
$lang->order->check          = '订单结算';

$lang->order->confirmLimit         = '确认收货周期';
$lang->order->confirmReceived      = '确认收货';
$lang->order->deliveryConfirmed    = '您的订单已经确认收货成功！';
$lang->order->confirmWarning       = "请收到货后，再确认收货！否则您可能钱货两空！";
$lang->order->cancelWarning        = "确认取消订单？";
$lang->order->cancelSuccess        = "订单已取消";
$lang->order->paymentRequired      = '需要至少一种交易方式';
$lang->order->confirmLimitRequired = '需要设定确认收货周期';
$lang->order->finishWarning        = "确认完成订单？";
$lang->order->noProducts           = "订单中没有产品";
$lang->order->lowStocks            = "<strong>%s</strong> 库存不足";

$lang->order->alipayPid   = '合作者ID';
$lang->order->alipayKey   = '合作者KEY';
$lang->order->alipayEmail = '支付宝邮箱';

$lang->order->placeholder = new stdclass();
$lang->order->placeholder->pid   = '合作身份者id，以2088开头的16位纯数字';
$lang->order->placeholder->key   = '安全检验码，以数字和字母组成的32位字符';
$lang->order->placeholder->email = '支付宝商家邮箱';

$lang->order->paymentList = array();
$lang->order->paymentList['alipay']        = '支付宝即时到帐';
$lang->order->paymentList['alipaySecured'] = '支付宝担保交易';
$lang->order->paymentList['COD']           = '货到付款';
$lang->order->paymentList['offlinepay']    = '线下支付';

$lang->order->statusList = array();
$lang->order->statusList['not_paid']  = '待付款';
$lang->order->statusList['paid']      = '已付款';
$lang->order->statusList['not_send']  = '待发货';
$lang->order->statusList['send']      = '已发货';
$lang->order->statusList['confirmed'] = '已收货';
$lang->order->statusList['normal']    = '进行中';
$lang->order->statusList['finished']  = '已完成';
$lang->order->statusList['canceled']  = '已取消';

$lang->order->types = array();
$lang->order->types['shop']  = '商品';
$lang->order->types['score'] = '积分';

$lang->order->abbr = new stdclass();
$lang->order->abbr->paidDate       = '付款';
$lang->order->abbr->deliveriedDate = '发货';
$lang->order->abbr->confirmedDate  = '收货';
$lang->order->abbr->createdDate    = '下单';
/* package */
$lang->package->common        = '插件';
$lang->package->browse        = '浏览插件';
$lang->package->install       = '安装';
$lang->package->installAuto   = '自动安装';
$lang->package->installForce  = '强制安装';
$lang->package->uninstall     = '卸载';
$lang->package->activate      = '激活';
$lang->package->deactivate    = '禁用';
$lang->package->obtain        = '获得插件';
$lang->package->view          = '详情';
$lang->package->download      = '下载插件';
$lang->package->downloadAB    = '下载';
$lang->package->upload        = '本地安装';
$lang->package->erase         = '清除';
$lang->package->upgrade       = '升级';
$lang->package->agreeLicense  = '我同意该授权';
$lang->package->settemplate   = '设置模板';
$lang->package->buy           = '购买';

$lang->package->structure   = '目录结构';
$lang->package->installed   = '已安装';
$lang->package->deactivated = '被禁用';
$lang->package->available   = '已下载';

$lang->package->id          = '编号';
$lang->package->name        = '名称';
$lang->package->code        = '插件代号';
$lang->package->version     = '版本';
$lang->package->compatible  = '适用版本';
$lang->package->latest      = '<small>最新版本<strong><a href="%s" target="_blank" class="package">%s</a></strong>，兼容蝉知<a href="http://api.chanzhi.org/goto.php?item=latest" target="_blank" class="alert-link"><strong>%s</strong></a></small>';
$lang->package->author      = '作者';
$lang->package->license     = '授权';
$lang->package->intro       = '详情';
$lang->package->abstract    = '简介';
$lang->package->site        = '官网';
$lang->package->addedTime   = '添加时间';
$lang->package->updatedTime = '更新时间';
$lang->package->downloads   = '下载量';
$lang->package->public      = '下载方式';
$lang->package->compatible  = '兼容性';
$lang->package->grade       = '评分';
$lang->package->depends     = '依赖';

$lang->package->publicList[0] = '手工下载';
$lang->package->publicList[1] = '直接下载';

$lang->package->compatibleList[0] = '未知';
$lang->package->compatibleList[1] = '兼容';

$lang->package->byDownloads   = '最多下载';
$lang->package->byAddedTime   = '最新添加';
$lang->package->byUpdatedTime = '最近更新';
$lang->package->bySearch      = '搜索';
$lang->package->byCategory    = '分类浏览';
$lang->package->byIndustry    = '行业分组';
$lang->package->byColor       = '主题色调';

$lang->package->installFailed            = '%s失败，错误原因如下:';
$lang->package->uninstallFailed          = '卸载失败，错误原因如下:';
$lang->package->confirmUninstall         = '卸载插件会删除或修改相关的数据库，是否继续卸载？';
$lang->package->noticeBackupDB           = '卸载前，建议备份数据库。';
$lang->package->installFinished          = '恭喜您，插件顺利的%s成功！';
$lang->package->refreshPage              = '刷新页面';
$lang->package->uninstallFinished        = '插件已经成功卸载';
$lang->package->deactivateFinished       = '插件已经成功禁用';
$lang->package->activateFinished         = '插件已经成功激活';
$lang->package->eraseFinished            = '插件已经成功清除';
$lang->package->unremovedFiles           = '有一些文件或目录未能删除，需要手工删除';
$lang->package->executeCommands          = '<h3>执行下面的命令来修正这些问题：</h3>';
$lang->package->successDownloadedPackage = '成功下载插件';
$lang->package->successUploadedPackage   = '成功上传插件';
$lang->package->successCopiedFiles       = '成功拷贝文件';
$lang->package->successInstallDB         = '成功安装数据库';
$lang->package->viewInstalled            = '查看已安装插件';
$lang->package->viewAvailable            = '查看可安装插件';
$lang->package->viewDeactivated          = '查看已禁用插件';
$lang->package->backDBFile               = '插件相关数据已经备份到 %s 文件中！';

$lang->package->upgradeExt     = '升级';
$lang->package->installExt     = '安装';
$lang->package->upgradeVersion = '（从%s升级到%s）';

$lang->package->types = new stdclass();
$lang->package->types->theme     = '主题';
$lang->package->types->extension = '插件';
$lang->package->types->ext       = '插件';

$lang->package->waring = '警告';

$lang->package->errorOccurs                  = '错误：';
$lang->package->errorGetModules              = '从www.chanzhi.org获得插件分类失败。可能是因为网络方面的原因，请检查后重新刷新页面。';
$lang->package->errorGetPackages             = '从www.chanzhi.org获得插件失败。可能是因为网络方面的原因，您可以到 <a href="http://www.chanzhi.org/extemsion" target="_blank" class="alert-link">www.chanzhi.org</a> 手工下载插件，然后上传安装。';
$lang->package->errorDownloadPathNotFound    = '插件下载存储路径<strong>%s</strong>不存在。<br />linux下面请执行命令：<strong>mkdir -p %s</strong>来修正。';
$lang->package->errorDownloadPathNotWritable = '插件下载存储路径<strong>%s</strong>不可写。<br />linux下面请执行命令：<strong>sudo chmod 777 %s</strong>来修正。';
$lang->package->errorPackageFileExists       = '下载路径已经有一个名为的<strong>%s</strong>附件。<a href="%s" class="btn btn-primary loadInModal">重新%s</a>';
$lang->package->errorDownloadFailed          = '下载失败，请重新下载。如果多次重试还不行，请尝试手工下载，然后通过上传功能上传。';
$lang->package->errorMd5Checking             = '下载文件不完整，请重新下载。如果多次重试还不行，请尝试手工下载，然后通过上传功能上传。';
$lang->package->errorExtracted               = '包文件<strong> %s </strong>解压缩失败，可能不是一个有效的zip文件。错误信息如下：<br />%s';
$lang->package->errorCheckIncompatible       = '该插件与蝉知版本不兼容，%s后可能无法使用。。<h3>您可以选择 <a href="%s" class="loadInModal">强制%s</a> 或者 <a href="#" onclick=parent.location.href="%s">取消</a></h3>';
$lang->package->errorFileConflicted          = '有以下文件冲突：<br />%s <h3>您可以选择 <a href="%s">覆盖</a> 或者 <a href="#" onclick=parent.location.href="%s">取消</a></h3>';
$lang->package->errorPackageNotFound         = '包文件 <strong>%s </strong>没有找到，可能是因为自动下载失败。您可以尝试再次下载。';
$lang->package->errorTargetPathNotWritable   = '目标路径 <strong>%s </strong>不可写。';
$lang->package->errorTargetPathNotExists     = '目标路径 <strong>%s </strong>不存在。';
$lang->package->errorInstallDB               = '执行数据库语句失败。错误信息如下：%s';
$lang->package->errorConflicts               = '与插件“%s”冲突！';
$lang->package->errorDepends                 = '以下依赖插件没有安装或版本不正确：<br /><br /> %s';
$lang->package->errorIncompatible            = '该插件与您的蝉知版本不兼容';
$lang->package->errorUninstallDepends        = '插件“%s”依赖该插件，不能卸载';

$lang->theme->common = '主题市场';
/* product */
$lang->product->common = '产品';
$lang->product->home   = '产品中心';

$lang->product->id         = '编号';
$lang->product->category   = '类目';
$lang->product->categories = '类目';
$lang->product->name       = '名称';
$lang->product->alias      = '别名';
$lang->product->mall       = '购买链接';
$lang->product->buyNow     = '立即购买';
$lang->product->brand      = '品牌';
$lang->product->model      = '型号';
$lang->product->color      = '颜色';
$lang->product->origin     = '产地';
$lang->product->unit       = '单位';
$lang->product->price      = '价格';
$lang->product->promotion  = '特价';
$lang->product->amount     = '库存';
$lang->product->keywords   = '关键字';
$lang->product->desc       = '简介';
$lang->product->content    = '详情';
$lang->product->author     = '作者';
$lang->product->editor     = '编辑';
$lang->product->addedDate  = '添加时间';
$lang->product->editedDate = '编辑时间';
$lang->product->status     = '状态';
$lang->product->views      = '浏览';
$lang->product->viewsCount = '浏览次数';
$lang->product->stick      = '置顶级别';
$lang->product->order      = '排序';
$lang->product->unsaleable = '非卖品';
$lang->product->attribute  = '产品属性';
$lang->product->custom     = '自定义属性';
$lang->product->sales      = '产品定价';
$lang->product->css        = 'CSS';
$lang->product->js         = 'JS';

$lang->product->currency = '货币';
$lang->product->stock    = '库存';

$lang->product->list         = '产品列表';
$lang->product->hot          = '热门产品';
$lang->product->admin        = '维护产品';
$lang->product->create       = '添加产品';
$lang->product->edit         = '编辑产品';
$lang->product->changeStatus = '修改产品状态';
$lang->product->setcss       = '设置CSS';
$lang->product->setjs        = '设置JS';
$lang->product->files        = '附件';
$lang->product->images       = '图片';
$lang->product->addToCart    = "<i class='icon icon-shopping-cart'></i> 加入购物车";
$lang->product->count        = '数量';
$lang->product->comments     = '评论';
$lang->product->detail       = '查看详情';
$lang->product->setting      = '设置';
$lang->product->soldout      = '已售罄';
$lang->product->layout       = '布局';

$lang->product->congratulations  = "恭喜";
$lang->product->addToCartSuccess = "成功加入购物车。";
$lang->product->gotoCart         = "去购物车结算";
$lang->product->goback           = "返回";

$lang->product->confirmDelete = '您确定删除该产品吗？';

$lang->product->prev      = '上一个';
$lang->product->next      = '下一个';
$lang->product->none      = '没有了';
$lang->product->directory = '返回目录';
$lang->product->noCssTag  = '不需要&lt;style&gt;&lt;/style&gt;标签';
$lang->product->noJsTag   = '不需要&lt;script&gt;&lt;/script&gt;标签';

$lang->product->statusList['normal']  = '上架';
$lang->product->statusList['offline'] = '下架';

$lang->product->placeholder = new stdclass();
$lang->product->placeholder->label    = "属性名称：如颜色、价格等";
$lang->product->placeholder->value    = "属性值：如红色、￥1000等";
$lang->product->placeholder->currency = "请填写产品价格的货币符号，如人民币填写：￥";

$lang->product->listMode = new stdclass();
$lang->product->listMode->card  = "<i class='icon icon-th-large'></i>";
$lang->product->listMode->list  = "<i class='icon icon-list'></i>";

$lang->product->currencyList['rmb']  = '人民币';
$lang->product->currencyList['usd']  = '美元';
$lang->product->currencyList['hkd']  = '港元';
$lang->product->currencyList['twd']  = '台元';
$lang->product->currencyList['euro'] = '欧元';
$lang->product->currencyList['dem']  = '马克';
$lang->product->currencyList['chf']  = '瑞士法郎';
$lang->product->currencyList['frf']  = '法国法郎';
$lang->product->currencyList['gbp']  = '英镑';
$lang->product->currencyList['nlg']  = '荷兰盾';
$lang->product->currencyList['cad']  = '加拿大元';
$lang->product->currencyList['sur']  = '卢布';
$lang->product->currencyList['inr']  = '卢比';
$lang->product->currencyList['aud']  = '澳大利亚元';
$lang->product->currencyList['nzd']  = '新西兰元';
$lang->product->currencyList['thb']  = '泰国铢';
$lang->product->currencyList['sgd']  = '新加坡元';

$lang->product->currencySymbols['rmb']  = '￥';
$lang->product->currencySymbols['usd']  = '$';
$lang->product->currencySymbols['hkd']  = 'HK$';
$lang->product->currencySymbols['twd']  = 'NT$';
$lang->product->currencySymbols['euro'] = 'ECU';
$lang->product->currencySymbols['dem']  = 'DM';
$lang->product->currencySymbols['chf']  = 'SF';
$lang->product->currencySymbols['frf']  = 'FF';
$lang->product->currencySymbols['gbp']  = '￡';
$lang->product->currencySymbols['nlg']  = 'F';
$lang->product->currencySymbols['cad']  = 'CAN$';
$lang->product->currencySymbols['sur']  = 'Rbs';
$lang->product->currencySymbols['inr']  = 'Rs';
$lang->product->currencySymbols['aud']  = 'A$';
$lang->product->currencySymbols['nzd']  = 'NZ$';
$lang->product->currencySymbols['thb']  = 'B';
$lang->product->currencySymbols['sgd']  = 'S$';

$lang->product->stockOptions = array();
$lang->product->stockOptions[0] = '关闭';
$lang->product->stockOptions[1] = '开启';
/* reply */
$lang->reply = new stdclass();
$lang->reply->common    = '回贴';
$lang->reply->id        = '编号';
$lang->reply->list      = '回帖列表';
$lang->reply->content   = '内容';
$lang->reply->author    = '作者';
$lang->reply->files     = '附件：';
$lang->reply->addedDate = '回复时间';
$lang->reply->admin     = '回帖列表';
$lang->reply->sofa      = '沙发';
$lang->reply->stool     = '板凳';

$lang->reply->edit       = '编辑回帖';
$lang->reply->deleteFile = '删除附件';
/* score */
$lang->score->back        = '返回';
$lang->score->rankingList = '积分排行榜';
$lang->score->rule        = '积分规则';

$lang->score->id      = '编号';
$lang->score->account = '用户';
$lang->score->method  = '方式';
$lang->score->type    = '类型';
$lang->score->count   = '数量';
$lang->score->before  = '之前';
$lang->score->after   = '之后';
$lang->score->amount  = '价格';
$lang->score->note    = '备注';
$lang->score->time    = '时间';
$lang->score->product = '产品';
$lang->score->confirm = '确认订单';
$lang->score->details = '积分详情';

$lang->score->setCounts = '积分规则';

$lang->score->totalRank = '总排行榜';
$lang->score->rank      = '排名';
$lang->score->username  = '用户名';
$lang->score->monthRank = '月排行榜';
$lang->score->weekRank  = '周排行榜';
$lang->score->dayRank   = '日排行榜';

$lang->score->methods['register'] = '注册';
$lang->score->methods['login']    = '登录';
$lang->score->methods['maxLogin'] = '每日登录积分上限';
$lang->score->methods['download'] = '下载';

$lang->score->methods['thread']      = '发贴';
$lang->score->methods['reply']       = '回贴';
$lang->score->methods['valuethread'] = '奖励主题';
$lang->score->methods['valuereply']  = '奖励回复';
$lang->score->methods['delThread']   = '删主题';
$lang->score->methods['delReply']    = '删回复';
$lang->score->methods['award']       = '奖励积分';
$lang->score->methods['punish']      = '扣除积分';

$lang->score->methods['approveSubmittion'] = '投稿成功';

$lang->score->methods['buyscore']  = '购买积分';
$lang->score->methods['statement'] = '积分结算';

$lang->score->methods['vip'] = 'VIP用户';
$lang->score->methods['co']  = '合作伙伴';

$lang->score->types['in']    = '增加';
$lang->score->types['out']   = '减少';

$lang->score->getByThread = '论坛发表主题赚积分'; 
$lang->score->getByReply  = '论坛发表回帖赚积分'; 

$lang->score->lblTotal         = "共有消耗积分：%s, 等级积分：%s ";
$lang->score->lblNoScore       = "抱歉，您的积分不够";
$lang->score->lblNoScoreReason = "抱歉，您的积分不够 %s 需要 <strong class='red'>%s</strong> 分，您现在有 <strong class='red'>%s</strong> 分";
$lang->score->lblDetail        = "详情可参考<a href='http://www.zentao.net/thread-view-79915.html' target='_blank'>《如何获得积分》</a><br /><br />";
$lang->score->lblBuySocre      = "购买积分 %s";

$lang->score->setAmount   = '充值金额';
$lang->score->getScore    = '获取积分';
$lang->score->amountUnit  = '元';
$lang->score->minAmount   = '最小充值';
$lang->score->buyWaring   = "最小充值%s元，1元=%s积分";
$lang->score->errorAmount = "充值不能小于%s元";
$lang->score->alipay      = "立即使用支付宝支付";
$lang->score->paySuccess  = '恭喜你，支付成功';
$lang->score->payFail     = '对不起，支付没成功，如果有问题，请联系我们。';
$lang->score->viewHistory = '查看支付历史';
/* search */
$lang->search->common     = '搜索';
$lang->search->index      = '搜索结果';
$lang->search->buildIndex = '更新索引';

$lang->search->buildSuccessfully = '索引更新成功。';
$lang->search->executeInfo       = '为您找到相关结果%s个，耗时%s秒';
$lang->search->buildResult       = "创建成功，新增<span class='text-success'> %s </span> 条记录；";
/* site */
$lang->site->common        = "站点";

$lang->site->type            = '站点类型';
$lang->site->requestType     = '访问类型';
$lang->site->status          = '站点状态';
$lang->site->pauseTip        = '暂停提示';
$lang->site->name            = '网站名称';
$lang->site->module          = '功能模块';
$lang->site->lang            = '站点语言';
$lang->site->defaultLang     = '默认语言';
$lang->site->domain          = '主域名';
$lang->site->allowedDomain   = '可访问域名';
$lang->site->keywords        = '关键词';
$lang->site->indexKeywords   = '首页关键词';
$lang->site->meta            = 'Meta 标签';
$lang->site->desc            = '站点描述';
$lang->site->icpSN           = '备案编号';
$lang->site->icpLink         = '备案链接';
$lang->site->policeSN        = '公安部备案编号';
$lang->site->policeLink      = '备案链接';
$lang->site->slogan          = '站点口号';
$lang->site->mission         = '站点使命';
$lang->site->copyright       = '创建年份';
$lang->site->allowUpload     = '允许上传附件';
$lang->site->allowedFiles    = '允许附件类型';
$lang->site->setImageSize    = '图片缩略图大小';
$lang->site->captcha         = '前台表单';
$lang->site->mailCaptcha     = '邮箱验证码';
$lang->site->twContent       = '繁体内容';
$lang->site->cn2tw           = '自动从简体版复制';
$lang->site->cdn             = 'CDN地址';
$lang->site->sensitive       = '敏感词';
$lang->site->scheme          = '默认访问协议';
$lang->site->saveDays        = '日志保存天数';
$lang->site->openCache       = '开启缓存';
$lang->site->cachePage       = '缓存整页';
$lang->site->cacheExpired    = '更新时间';
$lang->site->hour            = '小时';
$lang->site->homeMenus       = '首页菜单';

$lang->site->importantOption  = '重要操作';
$lang->site->resetPassword    = '前台找回密码';
$lang->site->checkIP          = '后台登录IP白名单';
$lang->site->checkLocation    = '后台登录地区验证';
$lang->site->checkEmail       = '会员邮箱绑定';
$lang->site->filterFunction   = '过滤功能';
$lang->site->allowedLocation  = '允许登录地区';
$lang->site->checkSessionIP   = '后台检查IP';
$lang->site->forceYangcong    = '后台强制洋葱登录';
$lang->site->setsecurity      = '安全设置';
$lang->site->setsensitive     = '敏感词设置';
$lang->site->filterSensitive  = '敏感词过滤';
$lang->site->setBlacklist     = '黑名单管理';
$lang->site->mobileTemplate   = '移动模板';
$lang->site->score            = '积分';
$lang->site->setCounts        = '积分规则';
$lang->site->front            = '网站浏览';
$lang->site->useCDN           = '启用CDN';

$lang->site->setBasic      = "基本信息设置";
$lang->site->setCache      = '缓存设置';
$lang->site->setCDN        = "CDN设置";
$lang->site->setDomain     = "域名设置";
$lang->site->setLang       = "语言设置";
$lang->site->setFilter     = "过滤设置";
$lang->site->ipFilter      = "ip过滤";
$lang->site->accountFilter = "账号过滤";
$lang->site->setSecurity   = "安全设置";
$lang->site->setUpload     = "附件上传";
$lang->site->setRobots     = "Robots 设置";
$lang->site->setOauth      = "开放登录";
$lang->site->setSinaOauth  = "新浪微博接入";
$lang->site->setYangcong   = "洋葱登录设置";
$lang->site->setQQOauth    = "QQ接入";
$lang->site->oauthHelp     = "使用帮助";
$lang->site->setRecPerPage = "列表数量设置";
$lang->site->useLocation   = "使用当前登录地址: <span>%s</span>";
$lang->site->changeSetting = "更改设置";
$lang->site->setStat       = "流量统计设置";
$lang->site->setHomeMenu   = "首页菜单";

$lang->site->typeList = new stdclass();
$lang->site->typeList->portal = '企业门户';
$lang->site->typeList->blog   = '个人博客';

$lang->site->requestTypeList = array();
$lang->site->requestTypeList['GET']        = 'GET';
$lang->site->requestTypeList['PATH_INFO']  = 'PATH_INFO';
$lang->site->requestTypeList['PATH_INFO2'] = 'PATH_INFO2';

$lang->site->statusList = new stdclass();
$lang->site->statusList->normal = '正常';
$lang->site->statusList->pause  = '暂停';

$lang->site->resetPasswordList = array();
$lang->site->resetPasswordList['open']  = '开启';
$lang->site->resetPasswordList['close'] = '关闭';

$lang->site->forceYangcongList = array();
$lang->site->forceYangcongList['open']  = '开启';
$lang->site->forceYangcongList['close'] = '关闭';

$lang->site->checkIPList = array();
$lang->site->checkIPList['open']  = '开启';
$lang->site->checkIPList['close'] = '关闭';

$lang->site->filterSensitiveList = array();
$lang->site->filterSensitiveList['open']  = '开启';
$lang->site->filterSensitiveList['close'] = '关闭';

$lang->site->checkLocationList = array();
$lang->site->checkLocationList['open']  = '开启';
$lang->site->checkLocationList['close'] = '关闭';

$lang->site->checkEmailList = array();
$lang->site->checkEmailList['open']  = '开启';
$lang->site->checkEmailList['close'] = '关闭';

$lang->site->sessionIpoptions = array();
$lang->site->sessionIpoptions[1] = '检查';
$lang->site->sessionIpoptions[0] = '不检查';

$lang->site->imageSize['s'] = '小图';
$lang->site->imageSize['m'] = '中图';
$lang->site->imageSize['l'] = '大图';

$lang->site->image['width']  = '宽度';
$lang->site->image['height'] = '高度';

$lang->site->captchaList = array();
$lang->site->captchaList['open']  = '一直启用验证码';
$lang->site->captchaList['auto']  = '有敏感内容时自动启用验证码';
$lang->site->captchaList['close'] = '不用验证码';

$lang->site->validateTypes = new stdclass();
$lang->site->validateTypes->okFile      = '文件验证';
$lang->site->validateTypes->email       = '邮件验证码验证';
$lang->site->validateTypes->setSecurity = '密保问题验证';

$lang->site->schemeList = array();
$lang->site->schemeList['http']  = 'http';
$lang->site->schemeList['https'] = 'https';

$lang->site->frontList = array();
$lang->site->frontList['login'] = '需要登录';
$lang->site->frontList['guest'] = '不需要登录';

$lang->site->mobileTemplateList['open']  = '启用';
$lang->site->mobileTemplateList['close'] = '禁用';

$lang->site->scoreList['open']  = '启用';
$lang->site->scoreList['close'] = '禁用';

$lang->site->cdnList['open']  = '启用';
$lang->site->cdnList['close'] = '关闭';

$lang->site->cacheTypes['close'] = '关闭';
$lang->site->cacheTypes['file']  = '启用';

$lang->site->cachePageOptions['close'] = '关闭';
$lang->site->cachePageOptions['open']  = '开启';

$lang->site->filterFunctionList['open']  = '启用';
$lang->site->filterFunctionList['close'] = '关闭';

$lang->site->moduleAvailable = array();
$lang->site->moduleAvailable['user']       = '会员';
$lang->site->moduleAvailable['article']    = '文章';
$lang->site->moduleAvailable['blog']       = '博客';
$lang->site->moduleAvailable['product']    = '产品';
$lang->site->moduleAvailable['book']       = '手册';
$lang->site->moduleAvailable['page']       = '单页';
$lang->site->moduleAvailable['forum']      = '论坛';
$lang->site->moduleAvailable['message']    = '评论留言';
$lang->site->moduleAvailable['search']     = '搜索';
$lang->site->moduleAvailable['shop']       = '商城';
$lang->site->moduleAvailable['score']      = '积分';
$lang->site->moduleAvailable['stat']       = '统计';
$lang->site->moduleAvailable['submittion'] = '投稿';

$lang->site->metaHolder       = '可放置<meta><script><style>和<link>标签。';
$lang->site->fileAllowedRole  = '多个后缀名之间请用 "," 隔开';
$lang->site->domainTip        = '所有网站访问跳转到该域名，请确保主域名解析正确，该值为空时不进行跳转。';
$lang->site->allowedDomainTip = "只允许填写的域名访问网站，多个域名用 , 隔开，该值为空时允许所有域名访问。";
$lang->site->allowedIPTip     = '多个IP用 , 隔开，如202.194.133.1,202.194.132.0/28。允许所有IP访问请留空。';
$lang->site->wrongAllowedIP   = 'IP 格式错误';
$lang->site->changeLocation   = '您当前的登录地区与允许登录地区不一致。';
$lang->site->sessionIpTip     = '开启后，如IP变化将自动退出登录。';
$lang->site->schemeTip        = '所有访问会跳转至默认访问协议。';
$lang->site->saveDaysTip      = '访问日志保存天数必须为为 >0 的数字。';
$lang->site->yangcongTip      = '开启强制洋葱登录后，您可以通过设置密保问题开启密保登录作为备用。';
$lang->site->closeScoreTip    = '禁用积分功能后不再记录积分，会员保持原有积分不变。';
$lang->site->cdnFileLost      = '以下资源无法访问：';
$lang->site->useDefaultCdn    = '使用默认地址';
$lang->site->defaultTip       = '站点维护中……';
$lang->site->icpTip           = '仅支持中国大陆网站';
$lang->site->requestTypeTip   = '经检测，您可使用PATH_INFO模式，SEO效果更佳。';

$lang->site->robots            = 'Robots';
$lang->site->robotsUnwriteable = 'Robots文件%s 不可写，请修改权限后设置。';
$lang->site->reloadForRobots   = '刷新页面';

$lang->site->customizableList = new stdclass();
$lang->site->customizableList->article = '文章列表数量';
$lang->site->customizableList->product = '产品列表数量';
$lang->site->customizableList->blog    = '博客列表数量';
$lang->site->customizableList->forum   = '论坛列表数量';
$lang->site->customizableList->reply   = '回帖列表数量';
$lang->site->customizableList->message = '留言列表数量';
$lang->site->customizableList->comment = '评论列表数量';

$lang->site->yangcong = new stdclass();
$lang->site->yangcong->appID = 'APP ID';
$lang->site->yangcong->key   = 'APP KEY';
$lang->site->yangcong->auth  = 'Auth ID';

$lang->site->api = new stdclass();
$lang->site->api->common = '集成';
$lang->site->api->key    = '密钥';
$lang->site->api->ip     = 'IP列表';
$lang->site->api->allip  = '无限制';
$lang->site->api->ipTip  = '允许调用者使用这些IP访问，多个IP使用,隔开。支持IP段，如192.168.1.*';

$lang->site->menus = array();
$lang->site->menus['order']      = '订单';
$lang->site->menus['message']    = '留言';
$lang->site->menus['comment']    = '评论';
$lang->site->menus['reply']      = '回复';
$lang->site->menus['thread']     = '主题';
$lang->site->menus['forumreply'] = '回帖';
$lang->site->menus['article']    = '文章';
$lang->site->menus['page']       = '单页';
$lang->site->menus['blog']       = '博客';
$lang->site->menus['book']       = '手册';
$lang->site->menus['submittion'] = '投稿';
$lang->site->menus['product']    = '产品';
$lang->site->menus['user']       = '会员';
$lang->site->menus['wechat']     = '微信';
$lang->site->menus['stat']       = '统计';
$lang->site->menus['tag']        = '关键词';
$lang->site->menus['links']      = '友情链接';
$lang->site->menus['site']       = '站点';
$lang->site->menus['security']   = '安全';
/* sitemap */
$lang->sitemap->productCategory = '产品分类';
$lang->sitemap->articleCategory = '文章分类';
$lang->sitemap->blogCategory    = '博客分类';
$lang->sitemap->boards          = '论坛版块';
$lang->sitemap->books           = '在线手册';
$lang->sitemap->pages           = '页面';
$lang->sitemap->xmlVersion      = '访问XML版';
/* slide */
$lang->slide->common     = '幻灯片';
$lang->slide->group      = '幻灯片分组';
$lang->slide->title      = '标题';
$lang->slide->groupName  = '分组名称';
$lang->slide->titleColor = '标题颜色';
$lang->slide->image      = '图片';
$lang->slide->mainLink   = '链接';
$lang->slide->summary    = '摘要';
$lang->slide->label      = '按钮文字';
$lang->slide->button     = '按钮';
$lang->slide->newWindow  = '新开窗口';
$lang->slide->upload     = '上传';

$lang->slide->background = new stdclass();

$lang->slide->background->type  = '背景';
$lang->slide->background->image = '背景图片';
$lang->slide->background->color = '背景颜色';

$lang->slide->background->typeList = new stdclass();

$lang->slide->background->typeList->image = '图片';
$lang->slide->background->typeList->color = '颜色';

$lang->slide->height      = '高度';
$lang->slide->url         = '链接';
$lang->slide->buttonUrl   = '按钮链接';
$lang->slide->buttonColor = '颜色';
$lang->slide->sourceImage = '素材库图片';

$lang->slide->sort        = '排序';
$lang->slide->admin       = '幻灯片设置';
$lang->slide->browse      = '浏览幻灯片';
$lang->slide->create      = '添加幻灯片';
$lang->slide->edit        = '编辑幻灯片';
$lang->slide->createGroup = '添加分组';
$lang->slide->editGroup   = '编辑分组';
$lang->slide->removeGroup = '删除分组';
$lang->slide->return      = '返回分组';
$lang->slide->rename      = '重命名';
$lang->slide->removeGroup = '删除分组';

$lang->slide->successSort     = '排序成功保存';
$lang->slide->noImageSelected = '没有选择图片';
$lang->slide->suitableSize    = '背景图片大小保持一致。';
$lang->slide->noChange        = '未做更改';
$lang->slide->groupNotEmpty   = '名称不能为空';

$lang->slide->defaultGroup = '默认分组';

$lang->slide->target = new stdclass();
$lang->slide->target->_blank = '新开窗口';

$lang->slide->globalButton = array();
$lang->slide->globalButton[1] = '全局按钮';
/* stat */
$lang->stat->common        = '统计';
$lang->stat->setting       = '设置';
$lang->stat->view          = '查看';
$lang->stat->traffic       = '流量概况';
$lang->stat->report        = '详细报告';
$lang->stat->client        = '终端';
$lang->stat->device        = '设备类型';
$lang->stat->os            = '操作系统';
$lang->stat->browser       = '用户终端';
$lang->stat->from          = '来源分类';
$lang->stat->keywords      = '关键词统计';
$lang->stat->keyword       = '关键词';
$lang->stat->outSite       = '来源网站统计';
$lang->stat->search        = '搜索引擎';
$lang->stat->domain        = '来路域名';
$lang->stat->click         = '点击排行';
$lang->stat->link          = '链接';
$lang->stat->today         = '今天';
$lang->stat->yestoday      = '昨天';
$lang->stat->pv            = '浏览量(PV)';
$lang->stat->uv            = '访客数(UV)';
$lang->stat->ipCount       = 'IP数';
$lang->stat->totalPV       = '总访问数';
$lang->stat->searchEngine  = '搜索引擎';
$lang->stat->keywordReport = '关键词详细';
$lang->stat->domainList    = '来路域名';
$lang->stat->domainTrend   = '趋势';
$lang->stat->domainPage    = '页面';
$lang->stat->percentage    = '百分比';
$lang->stat->ignoreKeyword = '忽略关键词说明';
$lang->stat->keywordNotice = 'Google和百度取消了来路链接的关键词显示，因此无法统计其关键词信息。';

$lang->stat->all   = '全部';
$lang->stat->begin = '开始日期';
$lang->stat->end   = '结束日期';
$lang->stat->date  = '日期';

$lang->stat->noData    = '没有数据';
$lang->stat->dateError = '时间错误';

$lang->stat->itemList = new stdclass();
$lang->stat->itemList->self    = '直接访问';
$lang->stat->itemList->out     = '外链访问';
$lang->stat->itemList->search  = '搜索引擎';
$lang->stat->itemList->desktop = '桌面设备';
$lang->stat->itemList->mobile  = '移动设备';

$lang->stat->trafficModes = new stdclass();
$lang->stat->trafficModes->yestoday = '昨日';
$lang->stat->trafficModes->today    = '今日';
$lang->stat->trafficModes->weekly   = '最近一周';
$lang->stat->trafficModes->monthly  = '最近30天';

$lang->stat->fromList = new stdclass();
$lang->stat->fromList->self   = '直接访问';
$lang->stat->fromList->out    = '外链';
$lang->stat->fromList->search = '搜索引擎';

$lang->stat->dataTypes = new stdclass();
$lang->stat->dataTypes->pv = '浏览量(PV)';
$lang->stat->dataTypes->uv = '访客数(UV)';
$lang->stat->dataTypes->ip = 'IP数';

$lang->stat->page = new stdclass();
$lang->stat->page->common = '页面访问量';
$lang->stat->page->url    = '页面地址';
/* tag */
$lang->tag->common = '关键词';
$lang->tag->rank   = '权重';
$lang->tag->link   = '链接';

$lang->tag->admin     = '关键词管理';
$lang->tag->editLink  = '编辑链接';
$lang->tag->source    = '来源';
$lang->tag->inputLink = '请输入链接';
$lang->tag->inputTag  = '请输入关键词';
$lang->tag->search    = '搜索';

$lang->tag->sourceList['article']  = '文章';
$lang->tag->sourceList['blog']     = '博客';
$lang->tag->sourceList['page']     = '单页';
$lang->tag->sourceList['product']  = '产品';
$lang->tag->sourceList['book']     = '手册';
$lang->tag->sourceList['category'] = '类目';
$lang->tag->sourceList['board']    = '版块';
/* thread */
$lang->thread->common    = '主题';

$lang->thread->id          = '编号';
$lang->thread->title       = '标题';
$lang->thread->board       = '板块';
$lang->thread->author      = '作者';
$lang->thread->content     = '内容';
$lang->thread->file        = '附件: ';
$lang->thread->postedDate  = '发表于';
$lang->thread->replies     = '回帖';
$lang->thread->views       = '阅读';
$lang->thread->lastReply   = '最后回帖';
$lang->thread->isLink      = '跳转';
$lang->thread->link        = '链接';

$lang->thread->post           = '发帖';
$lang->thread->postTo         = '发布帖子到';
$lang->thread->browse         = '主题列表';
$lang->thread->stick          = '置顶';
$lang->thread->edit           = '编辑主题';
$lang->thread->status         = '状态';
$lang->thread->approve        = '通过';
$lang->thread->display        = '显示';
$lang->thread->hide           = '隐藏';
$lang->thread->show           = '显示';
$lang->thread->transfer       = '转移';
$lang->thread->switchStatus   = '隐藏/显示';
$lang->thread->deleteFile     = '删除附件';
$lang->thread->unreplied      = "<span class='text-important'>未回复</span>";

$lang->thread->sticks[0] = '不置顶';
$lang->thread->sticks[1] = '版块置顶';
$lang->thread->sticks[2] = '全局置顶';

$lang->thread->displayList['hidden'] = '已隐藏';
$lang->thread->displayList['normal'] = '正常';

$lang->thread->statusList['wait']     = '未审核';
$lang->thread->statusList['approved'] = '通过';

$lang->thread->confirmDeleteThread = "您确定删除该主题吗？";
$lang->thread->confirmHideReply    = "您确定隐藏回帖吗？";
$lang->thread->confirmHideThread   = "您确定隐藏该主题吗？";
$lang->thread->confirmDeleteReply  = "您确定删除该回帖吗？";
$lang->thread->confirmDeleteFile   = "您确定删除该附件吗？";

$lang->thread->lblEdited       = '%s 最后编辑, %s';
$lang->thread->message         = '%s在论坛#%s回复了主题：%s，内容为：%s';
$lang->thread->readonly        = '只读';
$lang->thread->successStick    = '成功置顶';
$lang->thread->successUnstick  = '成功取消置顶';
$lang->thread->successHide     = '帖子已经成功隐藏';
$lang->thread->successShow     = '显示成功';
$lang->thread->readonlyMessage = '该帖已被设置为 <strong>只读</strong>，您暂时无法发表新的回复。';
$lang->thread->successTransfer = '转移成功';
$lang->thread->thanks          = '帖子将在审核通过后显示';

$lang->thread->score    = '奖励积分';
$lang->thread->scoreSum = "<i class='text-warning icon icon-plus'><b>%s</b></i> ";
$lang->thread->scores[5]  = '+ 5';
$lang->thread->scores[10] = '+ 10';
$lang->thread->scores[50] = '+ 50';
$lang->thread->scores[100]= '+ 100';

$lang->thread->placeholder = new stdclass();
$lang->thread->placeholder->link = '输入链接，可以是站外连接';

if(!isset($lang->pager->settedInForum))
{
    $lang->pager->noRecord = '';
    $lang->pager->digest   = str_replace('记录', '回帖', $lang->pager->digest);
}
/* tree */
$lang->tree->add         = "添加";
$lang->tree->edit        = "编辑";
$lang->tree->addChild    = "添加子类目";
$lang->tree->delete      = "删除类目";
$lang->tree->browse      = "类目维护";
$lang->tree->manage      = "维护类目";
$lang->tree->fix         = "修复数据";
$lang->tree->children    = "子类目";
$lang->tree->layout      = '布局';

$lang->tree->common           = '类目';
$lang->tree->noCategories     = '您还没有添加类目，请添加类目。';
$lang->tree->timeCountDown    = "<strong id='countDown'>3</strong> 秒后转向类目管理页面。";
$lang->tree->redirect         = '立即转向';
$lang->tree->aliasRepeat      = '别名: %s 已经存在,不能重复添加。';
$lang->tree->aliasConflict    = '别名: %s 与系统模块冲突，不能添加。';
$lang->tree->aliasNumber      = '别名不能为数字。';
$lang->tree->hasChildren      = '该板块存在子版块，不能删除。';
$lang->tree->confirmDelete    = "您确定删除该类目吗？";
$lang->tree->successFixed     = "成功修复";
$lang->tree->browseByCategory = '类目浏览';

$lang->tree->placeholder = new stdclass();
$lang->tree->placeholder->link = '输入链接，可以是站外链接';

$lang->category = new stdclass();
$lang->category->common     = '类目';
$lang->category->name       = '类目名称';
$lang->category->abbr       = '简称';
$lang->category->alias      = '别名';
$lang->category->parent     = '上级类目';
$lang->category->desc       = '描述';
$lang->category->keywords   = '关键词';
$lang->category->children   = "子类目";
$lang->category->unsaleable = '非卖品';
$lang->category->isLink     = '跳转';
$lang->category->link       = '链接';

$lang->board = new stdclass();
$lang->board->common     = '版块';
$lang->board->name       = '版块';
$lang->board->abbr       = '简称';
$lang->board->alias      = '别名';
$lang->board->parent     = '上级版块';
$lang->board->desc       = '描述';
$lang->board->keywords   = '关键词';
$lang->board->children   = "子版块";
$lang->board->readonly   = '访问权限';
$lang->board->moderators = '版主';
$lang->board->isLink     = '跳转';
$lang->board->link       = '链接';

$lang->board->readonlyList[0] = '开放';
$lang->board->readonlyList[1] = '只读';

$lang->board->placeholder = new stdclass();
$lang->board->placeholder->moderators  = '会员用户名, 多个用户名之间用逗号隔开';
$lang->board->placeholder->setChildren = '论坛功能需要设置二级版块才能使用。';

$lang->express = new stdclass();
$lang->express->common = '快递';
$lang->express->name   = '快递名称';

$lang->wechatMenu = new stdclass();
$lang->wechatMenu->common     = '公众号菜单';
$lang->wechatMenu->name       = '标题';
$lang->wechatMenu->parent     = '上级菜单';
$lang->wechatMenu->children   = "子菜单";
$lang->wechatMenu->delete     = "清空微信菜单";
$lang->wechatMenu->commit     = "同步到微信";

$lang->wechatMenu->setResponse = '响应设置';
/* ui */
$lang->ui->common = "界面";

$lang->ui->clientDesktop   = '桌面';
$lang->ui->clientMobile    = '移动';
$lang->ui->logo            = 'Logo';
$lang->ui->favicon         = '小图标';
$lang->ui->setLogo         = "标志设置";
$lang->ui->setTemplate     = '模板设置';
$lang->ui->manageTemplate  = '模板管理';
$lang->ui->manageTheme     = '主题管理';
$lang->ui->installTemplate = '导入模板';
$lang->ui->exportTheme     = '导出主题';
$lang->ui->setTheme        = '主题设置';
$lang->ui->setFavicon      = "Favicon设置";
$lang->ui->deleteFavicon   = "不显示Favicon";
$lang->ui->deleteLogo      = "删除Logo";
$lang->ui->others          = "其他设置";
$lang->ui->productView     = "产品点击量";
$lang->ui->QRCode          = "移动二维码";
$lang->ui->execInfo        = "运行信息";
$lang->ui->templateName    = "模板";
$lang->ui->currentTheme    = '当前主题';
$lang->ui->internalTheme   = '内置主题';
$lang->ui->uploadTheme     = '导入主题';
$lang->ui->installTheme    = '导入主题';
$lang->ui->importedBlocks  = '导入区块';
$lang->ui->matchedBlock    = '对应区块';
$lang->ui->createBlock     = '导入新区块';
$lang->ui->useOldBlock     = '使用已有区块';
$lang->ui->themeStore      = '主题市场';
$lang->ui->help            = "帮助";
$lang->ui->deleteLogo      = "删除Logo";
$lang->ui->setCode         = "代码";
$lang->ui->editTemplate    = "编辑模板";
$lang->ui->installedThemes = "已安装主题";
$lang->ui->enableTheme     = "使用此主题";
$lang->ui->industry        = "行业";
$lang->ui->offcial         = "官方";
$lang->ui->reset           = "重置为默认";

$lang->ui->uploadLogo             = "上传Logo";
$lang->ui->uploadFavicon          = "上传小图标";
$lang->ui->noStyleTag             = "请填写全局CSS样式代码，不需要&lt;style&gt;&lt;/style&gt;标签";
$lang->ui->noJsTag                = "请填写全局JS代码，不需要&lt;script&gt;&lt;/script&gt;标签";
$lang->ui->setLogoFailed          = "设置Logo失败";
$lang->ui->noSelectedFile         = "获取上传图片失败，可能是图片大小超出上传限制";
$lang->ui->notAlloweFileType      = "请选择正确的%s文件";
$lang->ui->suitableLogoSize       = '最佳高度范围：%s，最佳宽度范围：%s';
$lang->ui->faviconHelp            = "请上传.ico图标文件。<a href='%s' target='_blank'>帮助</a>";
$lang->ui->exportedSuccess        = '导出成功';
$lang->ui->deleteThemeSuccess     = '删除主题成功';
$lang->ui->deleteThemeFail        = '删除主题失败';
$lang->ui->fileRequired           = '请选择一个文件';
$lang->ui->importThemeSuccess     = '导入主题成功';
$lang->ui->packagePathUnwriteable = '上传目录：%s 不可写';
$lang->ui->selectSourceImage      = '从素材库选择';
$lang->ui->rebuildThumbs          = '重新生成缩略图';

$lang->ui->deviceList = new stdclass();
$lang->ui->deviceList->desktop = "<i class='icon icon-desktop'></i> 桌面";
$lang->ui->deviceList->mobile  = "<i class='icon icon-tablet'></i> 移动";

$lang->ui->productViewList[1] = '显示'; 
$lang->ui->productViewList[0] = '不显示'; 

$lang->ui->QRCodeList[1] = '显示'; 
$lang->ui->QRCodeList[0] = '不显示'; 

$lang->ui->execInfoOptions['show'] = '显示'; 
$lang->ui->execInfoOptions['hide'] = '不显示';

$lang->ui->logoList['current'] = '当前主题';
$lang->ui->logoList['all']     = '所有主题';

$lang->ui->deleteThemeList['blue']       = '蓝色';
$lang->ui->deleteThemeList['brightdark'] = '蝉憩';
$lang->ui->deleteThemeList['flat']       = '清泉';
$lang->ui->deleteThemeList['tree']       = '蝉之树';
$lang->ui->deleteThemeList['colorful']   = '缤纷';

$lang->ui->template = new stdclass();
$lang->ui->template->name            = '名称';
$lang->ui->template->code            = '代码';
$lang->ui->template->version         = '版本';
$lang->ui->template->author          = '作者';
$lang->ui->template->charge          = '费用';
$lang->ui->template->chanzhiVersion  = '兼容版本';
$lang->ui->template->desc            = '简介';
$lang->ui->template->theme           = '主题';
$lang->ui->template->license         = '版权';
$lang->ui->template->preview         = '效果图';
$lang->ui->template->availableThemes = '<strong>%s</strong> 款可用主题';
$lang->ui->template->currentTheme    = '正在使用 <strong>%s</strong>';
$lang->ui->template->changeTheme     = '切换主题';
$lang->ui->template->apply           = '应用模板';
$lang->ui->template->current         = '当前模板';
$lang->ui->template->conflicts       = "警告！已有名为<strong> %s </strong> 的模板。";
$lang->ui->template->override        = "覆盖并安装";
$lang->ui->template->reupload        = "重新上传";
$lang->ui->template->installSuccess  = '恭喜，模板上传成功';
$lang->ui->template->manageTemplate  = '设置模板';
$lang->ui->template->manageBlock     = '设置区块';
$lang->ui->template->enable          = '启用';
$lang->ui->template->reload          = '刷新页面';
$lang->ui->template->doInstall       = '确认安装';
$lang->ui->template->info            = '模板信息';
$lang->ui->template->demo            = '演示网址';
$lang->ui->template->qq              = 'QQ';
$lang->ui->template->email           = 'Email';
$lang->ui->template->site            = 'site';

$lang->ui->appearance  = '外观';
$lang->ui->custom      = '自定义';
$lang->ui->themeSaved  = '主题配置已保存';
$lang->ui->unWritable  = "不能生成样式文件，请检查 %s目录的权限";
$lang->ui->codeHolder  = "字母加数字组合成的主题代号";

$lang->ui->blocks2Merge  = "可合并区块";
$lang->ui->blocks2Create = "新创建区块";

$lang->ui->theme = new stdclass();
$lang->ui->theme->reset                                = '重置为默认';
$lang->ui->theme->online                               = '在线主题';
$lang->ui->theme->default                              = '默认';
$lang->ui->theme->resetTip                             = '参数已重置，保存后生效';
$lang->ui->theme->sizeTip                              = '默认单位为像素，如1px';
$lang->ui->theme->colorTip                             = '如: red 或 #FFF';
$lang->ui->theme->positionTip                          = '如: 100px, 50%, left, top, center';
$lang->ui->theme->backImageTip                         = '图片地址，如: image.jpg';
$lang->ui->theme->extraStyle                           = 'CSS';
$lang->ui->theme->extraScript                          = 'Javascript';
$lang->ui->theme->customStyleTip                       = '样式表支持Less语法。';
$lang->ui->theme->customScriptTip                      = '已包含 jQuery 1.9.0。';

$lang->ui->theme->borderStyleList['none']              = '无边框';
$lang->ui->theme->borderStyleList['solid']             = '实线';
$lang->ui->theme->borderStyleList['dashed']            = '虚线';
$lang->ui->theme->borderStyleList['dotted']            = '点线';
$lang->ui->theme->borderStyleList['double']            = '双线条';

$lang->ui->theme->imageRepeatList['repeat']            = '默认';
$lang->ui->theme->imageRepeatList['repeat']            = '重复';
$lang->ui->theme->imageRepeatList['repeat-x']          = 'X轴重复';
$lang->ui->theme->imageRepeatList['repeat-y']          = 'Y轴重复';
$lang->ui->theme->imageRepeatList['no-repeat']         = '不重复';

$lang->ui->theme->fontWeightList['inherit']            = '默认';
$lang->ui->theme->fontWeightList['normal']             = '正常';
$lang->ui->theme->fontWeightList['bold']               = '加粗';

$lang->ui->theme->fontList['inherit']                  = '默认';
$lang->ui->theme->fontList['SimSun']                   = '宋体';
$lang->ui->theme->fontList['FangSong']                 = '仿宋';
$lang->ui->theme->fontList['SimHei']                   = '黑体';
$lang->ui->theme->fontList['Microsoft YaHei']          = '微软雅黑';
$lang->ui->theme->fontList['Arial']                    = 'Arial';
$lang->ui->theme->fontList['Courier']                  = 'Courier';
$lang->ui->theme->fontList['Console']                  = 'Console';
$lang->ui->theme->fontList['Tahoma']                   = 'Tahoma';
$lang->ui->theme->fontList['Verdana']                  = 'Verdana';
$lang->ui->theme->fontList['ZenIcon']                  = '图标字体 ZenIcon';

$lang->ui->theme->fontSizeList['inherit']              = '默认';
$lang->ui->theme->fontSizeList['12px']                 = '12px';
$lang->ui->theme->fontSizeList['13px']                 = '13px';
$lang->ui->theme->fontSizeList['14px']                 = '14px';
$lang->ui->theme->fontSizeList['15px']                 = '15px';
$lang->ui->theme->fontSizeList['16px']                 = '16px';
$lang->ui->theme->fontSizeList['18px']                 = '18px';
$lang->ui->theme->fontSizeList['20px']                 = '20px';
$lang->ui->theme->fontSizeList['24px']                 = '24px';

$lang->ui->theme->navbarLayoutList['false']            = '普通';
$lang->ui->theme->navbarLayoutList['true']             = '自适应宽度';

$lang->ui->theme->sideFloatList['right']  = '靠右';
$lang->ui->theme->sideFloatList['left']   = '靠左';
$lang->ui->theme->sideFloatList['hidden'] = '不显示';

$lang->ui->theme->sideGridList[2]        = "1/6";
$lang->ui->theme->sideGridList[3]        = "1/4";
$lang->ui->theme->sideGridList[4]        = "1/3";
$lang->ui->theme->sideGridList[6]        = "1/2";

$lang->ui->theme->underlineList['none']                = '无';
$lang->ui->theme->underlineList['underline']           = '带下划线';

$lang->ui->theme->searchLabels = new stdclass();
$lang->ui->theme->searchLabels->sales  = '购买最多';
$lang->ui->theme->searchLabels->latest = '最新';
$lang->ui->theme->searchLabels->hot    = '最热';
$lang->ui->theme->searchLabels->rand   = '推荐';
$lang->ui->theme->searchLabels->free   = '免费';

$lang->ui->groups = new stdclass();
$lang->ui->groups->basic  = '基本样式';
$lang->ui->groups->navbar = '导航条';
$lang->ui->groups->block  = '区块';
$lang->ui->groups->button = '按钮';
$lang->ui->groups->header = '页眉';
$lang->ui->groups->footer = '页脚';

$lang->ui->color          = '颜色';
$lang->ui->colorset       = '配色';
$lang->ui->pageBackground = '页面背景';
$lang->ui->pageText       = '页面文字';
$lang->ui->aLink          = '普通链接';
$lang->ui->aVisited       = '已访问链接';
$lang->ui->aHover         = '高亮链接';
$lang->ui->underline      = '下划线';
$lang->ui->transparent    = '透明';
$lang->ui->none           = '无';

$lang->ui->layout        = '布局';
$lang->ui->navbar        = '导航条';
$lang->ui->panel         = '子面板';
$lang->ui->menuBorder    = '菜单边框';
$lang->ui->submenuBorder = '子菜单边框';
$lang->ui->menuNormal    = '菜单普通';
$lang->ui->menuHover     = '菜单高亮';
$lang->ui->menuActive    = '菜单选中';
$lang->ui->submenuNormal = '子菜单普通';
$lang->ui->submenuHover  = '子菜单高亮';
$lang->ui->submenuActive = '子菜单选中';
$lang->ui->heading       = '标题';
$lang->ui->body          = '主体';
$lang->ui->background    = '背景';
$lang->ui->button        = '按钮';
$lang->ui->text          = '文字';
$lang->ui->column        = '分栏';
$lang->ui->sideFloat     = '侧边栏布局';
$lang->ui->sideGrid      = '侧边栏宽度';
$lang->ui->height        = '高度';

$lang->ui->primaryColor    = '基色';
$lang->ui->backcolor       = '背景色';
$lang->ui->forecolor       = '前景色';
$lang->ui->backgroundImage = '背景图片';
$lang->ui->repeat          = '重复方式';
$lang->ui->position        = '位置';
$lang->ui->style           = '样式';
$lang->ui->fontSize        = '字号';
$lang->ui->fontFamily      = '字体';
$lang->ui->fontWeight      = '加粗';
$lang->ui->layout          = '布局';
$lang->ui->border          = '边框';
$lang->ui->borderColor     = '边框颜色';
$lang->ui->borderWidth     = '边框宽度';
$lang->ui->width           = '宽度';
$lang->ui->radius          = '圆角';
$lang->ui->linkColor       = '链接颜色';
$lang->ui->linkFontSize    = '链接字号';
$lang->ui->default         = '普通';
$lang->ui->primary         = '主要';
$lang->ui->info            = '信息';
$lang->ui->danger          = '危险';
$lang->ui->warning         = '警告';
$lang->ui->success         = '积极';
$lang->ui->removeDirFaild  = "<h4>以下目录删除失败</h4><pre>%s</pre> <div class='text-important'>请手动删除，或者设置这些文件的可写权限后继续。</div>";
$lang->ui->padding         = '边距';
$lang->ui->left            = '左边距';
$lang->ui->right           = '右边距';
$lang->ui->top             = '上边距';
$lang->ui->bottom          = '下边距';

$lang->ui->themeColors = array();
$lang->ui->themeColors[] = 'FF2A2A';
$lang->ui->themeColors[] = 'F8F100';
$lang->ui->themeColors[] = '7AE441';
$lang->ui->themeColors[] = '0084FF';
$lang->ui->themeColors[] = 'FF63E8';
$lang->ui->themeColors[] = '964B00';
$lang->ui->themeColors[] = '7F7F7F';
$lang->ui->themeColors[] = '000000';

$lang->ui->folderList = new stdclass();
$lang->ui->folderList->common  = '全局文件';
$lang->ui->folderList->index   = '首页';
$lang->ui->folderList->block   = '区块';
$lang->ui->folderList->article = '文章';
$lang->ui->folderList->product = '产品';
$lang->ui->folderList->search  = '搜索';
$lang->ui->folderList->order   = '订单';
$lang->ui->folderList->user    = '会员';
$lang->ui->folderList->message = '评论留言';
$lang->ui->folderList->forum   = '论坛';

$lang->ui->files = new stdclass();
$lang->ui->files->default = new stdclass();

$lang->ui->files->default->common = array();
$lang->ui->files->default->common['header.lite']  = 'header';
$lang->ui->files->default->common['header']       = '头部';
$lang->ui->files->default->common['qrcode']       = '二维码';
$lang->ui->files->default->common['footer']       = '页脚';
$lang->ui->files->default->common['header.modal'] = '弹窗页头';
$lang->ui->files->default->common['footer.modal'] = '弹窗底部';

$lang->ui->files->default->index = array();
$lang->ui->files->default->index['index'] = '首页';

$lang->ui->files->default->block = array();
$lang->ui->files->default->block['about']           = '公司简介';
$lang->ui->files->default->block['articletree']     = '文章类目';
$lang->ui->files->default->block['blogtree']        = '博客类目';
$lang->ui->files->default->block['contact']         = '联系我们';
$lang->ui->files->default->block['featuredproduct'] = '推荐产品';
$lang->ui->files->default->block['followus']        = '关注我们';
$lang->ui->files->default->block['header']          = '头部';
$lang->ui->files->default->block['header.default']  = '兼容模式头部';
$lang->ui->files->default->block['header.layout']   = '自定义头部';
$lang->ui->files->default->block['hotarticle']      = '热门文章';
$lang->ui->files->default->block['hotproduct']      = '热门产品';
$lang->ui->files->default->block['htmlcode']        = 'html源码';
$lang->ui->files->default->block['html']            = '自定义';
$lang->ui->files->default->block['latestarticle']   = '最新文章';
$lang->ui->files->default->block['latestblog']      = '最新博客';
$lang->ui->files->default->block['latestproduct']   = '最新产品';
$lang->ui->files->default->block['latestthread']    = '最新帖子';
$lang->ui->files->default->block['links']           = '友情链接';
$lang->ui->files->default->block['logo']            = 'logo区域';
$lang->ui->files->default->block['nav']             = '导航条';
$lang->ui->files->default->block['pagelist']        = '单页列表';
$lang->ui->files->default->block['phpcode']         = 'php源码';
$lang->ui->files->default->block['producttree']     = '产品类目';
$lang->ui->files->default->block['searchbar']       = '搜索条';
$lang->ui->files->default->block['slide']           = '幻灯片';
$lang->ui->files->default->block['slogan']          = '站点口号';
$lang->ui->files->default->block['usermenu']        = '登录信息';

$lang->ui->files->default->article = array();
$lang->ui->files->default->article['browse'] = '文章列表';
$lang->ui->files->default->article['view']   = '文章详情';

$lang->ui->files->default->article['blog/header'] = '博客头部';
$lang->ui->files->default->article['blog/index']  = '博客列表';
$lang->ui->files->default->article['blog/view']   = '博客详情';
$lang->ui->files->default->article['blog/footer'] = '博客底部';

$lang->ui->files->default->article['page/view'] = '单页';

$lang->ui->files->default->product = array();
$lang->ui->files->default->product['browse']      = '产品列表';
$lang->ui->files->default->product['browse.card'] = '卡片视图';
$lang->ui->files->default->product['browse.list'] = '列表视图';
$lang->ui->files->default->product['view']        = '产品详情';

$lang->ui->files->default->forum = array();
$lang->ui->files->default->forum['index'] = '论坛首页';
$lang->ui->files->default->forum['board'] = '板块页面';

$lang->ui->files->default->forum['thread/view']   = '查看帖子';
$lang->ui->files->default->forum['thread/thread'] = '主题展示';
$lang->ui->files->default->forum['thread/reply']  = '回复展示';
$lang->ui->files->default->forum['thread/post']   = '发布主题';
$lang->ui->files->default->forum['reply/reply']   = '回复表单';

$lang->ui->files->default->user['control']     = '会员中心';
$lang->ui->files->default->user['side']        = '菜单区域';
$lang->ui->files->default->user['deny']        = '权限不足';
$lang->ui->files->default->user['edit']        = '账户编辑';
$lang->ui->files->default->user['login.front'] = '登录';
$lang->ui->files->default->user['message']     = '我的消息';
$lang->ui->files->default->user['profile']     = '个人资料';
$lang->ui->files->default->user['register']    = '注册界面';
$lang->ui->files->default->user['score']       = '积分详情';
$lang->ui->files->default->user['thread']      = '我的主题';

$lang->ui->files->default->order['browse']        = '我的订单';
$lang->ui->files->default->order['check']         = '结算页面';
$lang->ui->files->default->order['confirm']       = '订单确认';
$lang->ui->files->default->order['processorder']  = '支付结果';
$lang->ui->files->default->order['track']         = '物流跟踪';

$lang->ui->files->default->message['index']       = '留言页面';
$lang->ui->files->default->message['comment']     = '评论列表';

$lang->ui->files->default->search['index']        = '搜索结果';

$lang->ui->files->mobile = $lang->ui->files->default;

unset($this->lang->ui->files->mobile->common['qrcode']);
unset($this->lang->ui->files->mobile->common['header.modal']);
unset($this->lang->ui->files->mobile->common['footer.modal']);
unset($this->lang->ui->files->mobile->block['header']);
unset($this->lang->ui->files->mobile->block['header.default']);
unset($this->lang->ui->files->mobile->block['logo']);
unset($this->lang->ui->files->mobile->block['nav']);
unset($this->lang->ui->files->mobile->block['searchbar']);
unset($this->lang->ui->files->mobile->block['slogan']);
unset($this->lang->ui->files->mobile->block['usermenu']);
unset($this->lang->ui->files->mobile->product['browse.card']);
unset($this->lang->ui->files->mobile->product['browse.list']);
unset($this->lang->ui->files->mobile->forum['reply/reply']);
/* upgrade */
$lang->upgrade->common  = '升级';

$lang->upgrade->result  = '升级结果';
$lang->upgrade->fail    = '升级失败';
$lang->upgrade->success = '升级成功';
$lang->upgrade->tohome  = '返回首页';

$lang->upgrade->backup        = '备份数据';
$lang->upgrade->prepair       = '准备升级';
$lang->upgrade->selectVersion = '确认升级之前的版本';
$lang->upgrade->confirm       = '确认要执行的SQL语句';
$lang->upgrade->execute       = '确认执行';
$lang->upgrade->next          = '下一步';
$lang->upgrade->updateLicense = '蝉知 4.0 已更换授权协议至 Z PUBLIC LICENSE(ZPL) 1.2。';

$lang->upgrade->backupData = <<<EOT
<pre>
<strong>使用phpMyAdmin或者mysqldump命令备份数据库。</strong>
<textarea class='autoSelect w-500px red' readonly rows='1' > mysqldump -u %s -p%s %s > chanzhi.sql </textarea>
</pre>
EOT;

$lang->upgrade->createSlidePath = <<<EOT
<div class='alert'> 请创建幻灯片目录：<b>%s</b> 并开启该目录写权限后继续。 </div>
EOT;

$lang->upgrade->chmodThemePath = <<<EOT
<div class='alert'> 请开启<b>%s</b> 目录写权限后继续。 </div>
EOT;

$lang->upgrade->versionNote = "务必选择正确的版本，否则会造成数据丢失。";

$lang->upgrade->fromVersions['1_1']      = '1.1.stable';
$lang->upgrade->fromVersions['1_2']      = '1.2.stable';
$lang->upgrade->fromVersions['1_3']      = '1.3.stable';
$lang->upgrade->fromVersions['1_4']      = '1.4.stable';
$lang->upgrade->fromVersions['1_5']      = '1.5.stable';
$lang->upgrade->fromVersions['1_6']      = '1.6.stable';
$lang->upgrade->fromVersions['1_7']      = '1.7.stable';
$lang->upgrade->fromVersions['1_8']      = '1.8.stable';
$lang->upgrade->fromVersions['2_0']      = '2.0.stable';
$lang->upgrade->fromVersions['2_0_1']    = '2.0.1.stable';
$lang->upgrade->fromVersions['2_1']      = '2.1.stable';
$lang->upgrade->fromVersions['2_2']      = '2.2.stable';
$lang->upgrade->fromVersions['2_2_1']    = '2.2.1.stable';
$lang->upgrade->fromVersions['2_3']      = '2.3.stable';
$lang->upgrade->fromVersions['2_4']      = '2.4.stable';
$lang->upgrade->fromVersions['2_5_beta'] = '2.5.beta';
$lang->upgrade->fromVersions['2_5_1']    = '2.5.1';
$lang->upgrade->fromVersions['2_5_2']    = '2.5.2';
$lang->upgrade->fromVersions['2_5_3']    = '2.5.3';
$lang->upgrade->fromVersions['3_0']      = '3.0';
$lang->upgrade->fromVersions['3_0_1']    = '3.0.1';
$lang->upgrade->fromVersions['3_1']      = '3.1';
$lang->upgrade->fromVersions['3_2']      = '3.2';
$lang->upgrade->fromVersions['3_3']      = '3.3';
$lang->upgrade->fromVersions['4_0']      = '4.0';
$lang->upgrade->fromVersions['4_1_beta'] = '4.1.beta';
$lang->upgrade->fromVersions['4_2']      = '4.2';
$lang->upgrade->fromVersions['4_2_1']    = '4.2.1';
$lang->upgrade->fromVersions['4_3_beta'] = '4.3.beta';
$lang->upgrade->fromVersions['4_4']      = '4.4';
$lang->upgrade->fromVersions['4_4_1']    = '4.4.1';
$lang->upgrade->fromVersions['4_5']      = '4.5';
$lang->upgrade->fromVersions['4_5_1']    = '4.5.1';
$lang->upgrade->fromVersions['4_5_2']    = '4.5.2';
$lang->upgrade->fromVersions['4_6']      = '4.6';
$lang->upgrade->fromVersions['5_0']      = '5.0';
$lang->upgrade->fromVersions['5_0_1']    = '5.0.1';
$lang->upgrade->fromVersions['5_1']      = '5.1';
$lang->upgrade->fromVersions['5_2']      = '5.2';
$lang->upgrade->fromVersions['5_3']      = '5.3';
$lang->upgrade->fromVersions['5_3_1']    = '5.3.1';
$lang->upgrade->fromVersions['5_3_2']    = '5.3.2';
$lang->upgrade->fromVersions['5_3_3']    = '5.3.3';
/* user */
$lang->user->common    = '会员';

$lang->user->id        = '编号';
$lang->user->account   = '用户名';
$lang->user->admin     = '管理员';
$lang->user->oldPwd    = '原密码';
$lang->user->password  = '密码';
$lang->user->password2 = '请重复密码';
$lang->user->realname  = '真实姓名';
$lang->user->nickname  = '昵称';
$lang->user->avatar    = '头像';
$lang->user->birthyear = '出生年';
$lang->user->birthday  = '出生月日';
$lang->user->gender    = '性别';
$lang->user->email     = '邮箱';
$lang->user->msn       = 'MSN';
$lang->user->qq        = 'QQ';
$lang->user->yahoo     = '雅虎通';
$lang->user->gtalk     = 'Gtalk';
$lang->user->wangwang  = '旺旺';
$lang->user->mobile    = '手机';
$lang->user->phone     = '电话';
$lang->user->company   = '公司/组织';
$lang->user->address   = '通讯地址';
$lang->user->zipcode   = '邮编';
$lang->user->join      = '注册日期';
$lang->user->visits    = '访问次数';
$lang->user->ip        = '最后IP';
$lang->user->last      = '最后登录';
$lang->user->status    = '状态';
$lang->user->captcha   = '验证码';
$lang->user->alert     = '您的帐号已被禁用';
$lang->user->privilege = '权限';

$lang->user->all             = '全部会员';
$lang->user->list            = '会员列表';
$lang->user->view            = "用户详情";
$lang->user->create          = "添加用户";
$lang->user->edit            = "编辑用户";
$lang->user->operate         = '操作';
$lang->user->changePassword  = "更改密码";
$lang->user->changeEmail     = "邮箱设置";
$lang->user->recoverPassword = "忘记密码";
$lang->user->newPassword     = "新密码";
$lang->user->update          = "编辑用户";
$lang->user->browse          = "浏览用户";
$lang->user->deny            = "访问受限";
$lang->user->confirmDelete   = "您确认删除该用户吗？";
$lang->user->confirmActivate = "您确认激活该用户吗？";
$lang->user->relogin         = "重新登录";
$lang->user->asGuest         = "游客访问";
$lang->user->goback          = "返回前一页";
$lang->user->allUsers        = '全部用户';
$lang->user->submit          = "提交";
$lang->user->forbid          = '禁用';
$lang->user->activate        = '解禁';
$lang->user->pullWechatFans  = '更新微信会员数据';
$lang->user->adminlog        = '登录日志';
$lang->user->checkEmail      = '绑定邮箱';
$lang->user->getEmailCode    = '获取邮箱验证码';
$lang->user->setEmail        = '邮箱设置';
$lang->user->newEmail        = '新邮箱';
$lang->user->rank            = '等级积分';
$lang->user->score           = '积分详情';
$lang->user->myScore         = '当前积分';
$lang->user->buyScore        = '积分充值';
$lang->user->addScore        = '奖励积分';
$lang->user->reduceScore     = '扣除积分';
$lang->user->yangcongLogin   = '洋葱登录';
$lang->user->bindAccount     = '绑定帐号';
$lang->user->batchDelete     = '批量删除用户';
$lang->user->deleteHistory   = '删除用户及历史数据';
$lang->user->question        = '密保问题';
$lang->user->answer          = '答案';

$lang->user->type        = '账户类型';
$lang->user->profile     = '个人信息';
$lang->user->editProfile = '编辑信息';
$lang->user->thread      = '我的主题';
$lang->user->messages    = '我的消息';
$lang->user->reply       = '我的回贴';
$lang->user->submittion  = '我的投稿';

$lang->user->userHistory       = "用户历史数据";
$lang->user->threadHistory     = "发帖";
$lang->user->replyHistory      = "回帖";
$lang->user->commentHistory    = "评论";
$lang->user->messageHistory    = "留言";
$lang->user->orderHistory      = "订单";
$lang->user->addressHistory    = "地址";
$lang->user->submittionHistory = "投稿";

$lang->user->message = new stdclass();
$lang->user->message->mine = "我的消息 <span class='label label-badge text-latin'>%s</span>";
$lang->user->message->from = '来自';

$lang->user->inputUserName       = '请输入用户名';
$lang->user->inputAccountOrEmail = '请输入用户名或Email';
$lang->user->inputPassword       = '请输入密码';
$lang->user->searchUser          = '搜索';

$lang->user->errorDeny         = "抱歉，您无权访问『<b>%s</b>』模块的『<b>%s</b>』功能。请联系管理员获取权限。点击后退返回上页。<br/> 5秒钟后将自动返回首页...";
$lang->user->loginFailed       = "登录失败，请检查您的用户名或密码是否填写正确。";
$lang->user->identifyFailed    = "验证失败，请检查您的密码是否正确。";
$lang->user->locked            = "用户已经被锁定，请%s后再重新尝试登录";
$lang->user->lockedForEver     = "用户已经被永久禁用。";
$lang->user->lblRegistered     = '恭喜您，已经成功注册。';
$lang->user->forbidSuccess     = '禁用成功';
$lang->user->forbidFail        = '禁用失败';
$lang->user->activateSuccess   = '解除禁用成功';
$lang->user->activateFail      = '解除禁用失败';
$lang->user->pullSuccess       = '获取微信会员成功';
$lang->user->wrongPwd          = '密码错误';
$lang->user->checkEmailSuccess = '邮箱绑定成功';
$lang->user->sendRecoverEmail  = '发送重置邮件';
$lang->user->resetSuccess      = '重置密码成功，请用新密码登录';

$lang->user->forbidUser = '禁用管理';
$lang->user->forbidDate = array();
$lang->user->forbidDate['1']    = '一天';
$lang->user->forbidDate['2']    = '两天';
$lang->user->forbidDate['3']    = '三天';
$lang->user->forbidDate['7']    = '一周';
$lang->user->forbidDate['30']   = '一个月';
$lang->user->forbidDate['3000'] = '永久';

$lang->user->adminList['super']  = '超级管理员';
$lang->user->adminList['common'] = '管理员';
$lang->user->adminList['no']     = '普通会员';

$lang->user->accountTypeList['no']      = '前台账号';
$lang->user->accountTypeList['common']  = '后台账号';

$lang->user->genderList = new stdclass();
$lang->user->genderList->m = '男';
$lang->user->genderList->f = '女';
$lang->user->genderList->u = '';

$lang->user->register  = new stdclass();
$lang->user->register->common      = '注册';
$lang->user->register->instant     = '立即注册';
$lang->user->register->welcome     = '欢迎注册成为会员';
$lang->user->register->why         = '欢迎注册成为我们的会员，您可以享受更多的服务。';
$lang->user->register->lblUserInfo = '用户信息';
$lang->user->register->lblAccount  = '必须是三位以上的英文字母或数字';
$lang->user->register->lblPassword = '数字和字母组成，六位以上';
$lang->user->register->login       = '请登录';
$lang->user->register->loginTip    = '已有账号';

$lang->user->notice = new stdclass();
$lang->user->notice->password = '字母和数字组合，最少六位';

$lang->user->login  = new stdclass();
$lang->user->login->common  = "登录";
$lang->user->login->welcome = '已有帐号';
$lang->user->login->why     = '欢迎登陆，享用会员专属服务！';

$lang->user->resetPassword = new stdclass();
$lang->user->resetPassword->common  = "重置密码";
$lang->user->resetPassword->success = "密码更改链接已经发送到您的邮箱中";
$lang->user->resetPassword->failed  = "您的密保邮箱错误，请重新输入";

$lang->user->resetMail = new stdclass();
$lang->user->resetMail->subject  = '重置密码';
$lang->user->resetMail->account  = '你好，'; 
$lang->user->resetMail->resetUrl = '您在%s（%s）请求了重置密码操作，请点击下面的链接，进行重置密码：'; 
$lang->user->resetMail->notice   = '系统发信，请勿回复（如果您没有进行操作，请忽略此邮件）';

$lang->user->oauth = new stdclass();
$lang->user->oauth->common       = '开放登录';
$lang->user->oauth->provider     = '服务商';
$lang->user->oauth->verification = '网站验证';
$lang->user->oauth->widget       = '网页组件';
$lang->user->oauth->callbackURL  = '回调地址';

$lang->user->oauth->sina = new stdclass();
$lang->user->oauth->sina->clientID     = 'App Key';
$lang->user->oauth->sina->clientSecret = 'App Secret';

$lang->user->oauth->qq = new stdclass();
$lang->user->oauth->qq->clientID     = 'APP ID';
$lang->user->oauth->qq->clientSecret = 'APP KEY';

$lang->user->oauth->providers['qq']   = 'QQ';
$lang->user->oauth->providers['sina'] = '新浪微博';

$lang->user->oauth->typeList['sina']   = '新浪微博会员';
$lang->user->oauth->typeList['qq']     = 'QQ会员';
$lang->user->oauth->typeList['wechat'] = '微信会员';

$lang->user->oauth->lblWelcome       = '开放登录，快捷方便';
$lang->user->oauth->lblOtherLogin    = '其他方式 : ';
$lang->user->oauth->lblProfile       = "注册新用户";
$lang->user->oauth->lblBind          = "绑定已有用户";
$lang->user->oauth->lblUnbind        = "解除绑定";
$lang->user->oauth->lblUnbindSuccess = "解除绑定成功！";
$lang->user->oauth->lblUnbindFailed  = "解除绑定失败！";
$lang->user->oauth->lblBindFailed    = "绑定用户失败！";
$lang->user->oauth->ignore           = "忽略";

$lang->user->statusList = new stdclass();
$lang->user->statusList->locked    = "<label class='label label-danger'>锁定</label>";
$lang->user->statusList->forbidden = "<label class='label label-danger'>禁用</label>";
$lang->user->statusList->normal    = "<label class='label label-success'>正常</label>";

$lang->user->control = new stdclass();
$lang->user->control->common      = '用户中心';
$lang->user->control->welcome     = '欢迎您，<strong>%s</strong>';
$lang->user->control->lblPassword = "留空，则保持不变。";

$lang->user->navGroups = new stdclass();
$lang->user->navGroups->user    = '个人信息';
$lang->user->navGroups->order   = '订单信息';
$lang->user->navGroups->message = '主题消息';

$lang->user->control->menus['profile']    = '<i class="icon-user"></i> 个人信息 <i class="icon-chevron-right"></i>|user|profile';
$lang->user->control->menus['message']    = '<i class="icon-comments-alt"></i> 我的消息 <i class="icon-chevron-right"></i>|user|message';
$lang->user->control->menus['score']      = '<i class="icon-sun"></i> 积分详情 <i class="icon-chevron-right"></i>|user|score';
$lang->user->control->menus['recharge']   = '<i class="icon-bolt"></i> 积分充值 <i class="icon-chevron-right"></i>|score|buyscore';
$lang->user->control->menus['order']      = '<i class="icon-shopping-cart"></i> 我的订单 <i class="icon-chevron-right"></i>|order|browse';
$lang->user->control->menus['address']    = '<i class="icon-map-marker"> </i> 地址管理 <i class="icon-chevron-right"></i>|address|browse';
$lang->user->control->menus['thread']     = '<i class="icon-comment"></i> 我的主题 <i class="icon-chevron-right"></i>|user|thread';
$lang->user->control->menus['reply']      = '<i class="icon-reply"></i> 我的回帖 <i class="icon-chevron-right"></i>|user|reply';
$lang->user->control->menus['submittion'] = '<i class="icon-envelope"></i> 我的投稿 <i class="icon-chevron-right"></i>|article|submittion'; 

$lang->user->log = new stdclass();
$lang->user->log->common = '日志';
$lang->user->log->list   = '登录日志';

$lang->user->log->id          = 'ID';
$lang->user->log->account     = '用户';
$lang->user->log->browser     = '浏览器';
$lang->user->log->ip          = 'IP';
$lang->user->log->location    = '登录地址';
$lang->user->log->date        = '登录时间';
$lang->user->log->desc        = '结果';

$lang->user->ipDenied             = '登录IP受限，请按提示操作。';
$lang->user->locationDenied       = '登录地区受限，请按提示操作。';
$lang->user->loginLocationChanged = '登录地址发生变化，请按提示操作。';
$lang->user->verifyFail           = '请填写正确的验证码';
$lang->user->confirmUnbind        = '您确定要解除绑定吗？';
$lang->user->forceYangcong        = '已开启强制洋葱登录，普通登录需要进行验证。';

$lang->user->placeholder = new stdclass();
$lang->user->placeholder->password   = '请输入您的网站登录密码';
$lang->user->placeholder->verifyCode = '请输入验证邮件里面收到的验证码';
/* visual */
$lang->visual->common      = "可视化编辑";
$lang->visual->editLogo    = "编辑标志";
$lang->visual->editSlogan  = "编辑口号";
$lang->visual->appendBlock = "插入区块";
$lang->visual->removeBlock = "移除区块";
$lang->visual->sortBlocks  = "区块排序";

$lang->visual->info            = "编辑模式";
$lang->visual->preview         = "预览";
$lang->visual->exit            = "退出";
$lang->visual->exitVisualEdit  = "关闭编辑模式";
$lang->visual->customTheme     = "自定义主题";
$lang->visual->admin           = "后台";
$lang->visual->reload          = '刷新';
$lang->visual->createBlock     = '创建区块';
$lang->visual->manageBlock     = '区块管理';
$lang->visual->searchBlock     = '搜索区块';
$lang->visual->allBlock        = '全部';
$lang->visual->openInNewWindow = '在新窗口中打开当前编辑页面';
$lang->visual->editPowerBy     = "<p>您可以在遵守我们<a href='http://www.chanzhi.org/book/chanzhieps/58_license.html' target='_blank'>授权协议</a>的前提下免费使用蝉知系统，保留蝉知标志是对宣传蝉知系统非常重要。如果您想去除蝉知的标志，请<a href='http://www.chanzhi.org/license-search.html' target='_blank'>购买蝉知商业授权</a>。</p>";
$lang->visual->pageLayout      = '页面布局已启用';
$lang->visual->pageLayoutInfo  = '区块布局仅适合当前<span class="page-name"></span>，不会影响全局设置';
$lang->visual->globalLayout    = '全局布局';
$lang->visual->globalLayoutInfo= '区块布局适合所有<span class="page-name"></span>';

$lang->visual->js = new stdclass();
$lang->visual->js->saved             = $lang->saveSuccess;
$lang->visual->js->deleted           = $lang->deleteSuccess;
$lang->visual->js->preview           = '预览';
$lang->visual->js->exitPreview       = '取消预览';
$lang->visual->js->removeBlock       = '移除区块';
$lang->visual->js->invisible         = '不可见';
$lang->visual->js->carousel          = '幻灯片';
$lang->visual->js->operateFail       = '操作失败！';
$lang->visual->js->addContent        = '添加内容...';
$lang->visual->js->addContentTo      = '添加内容到 【{0}】';
$lang->visual->js->createBlock       = '创建新区块';
$lang->visual->js->addSubRegion      = '添加布局区块';
$lang->visual->js->addBlock          = '添加已有区块';
$lang->visual->js->subRegion         = '布局区块';
$lang->visual->js->subRegionDesc     = '可以包含其他区块';
$lang->visual->js->alreadyLastSlide  = '已是最后一张';
$lang->visual->js->alreadyFirstSlide = '已是第一张';
$lang->visual->js->slideOrder        = '当前播放顺序';
$lang->visual->js->gridWidth         = '栅格宽度';
$lang->visual->js->pageLayoutPrefix  = '仅当前';
$lang->visual->js->actions           = array('edit' => '编辑', 'delete' => '删除', 'move' => '移动', 'add' => '添加');

$lang->visual->setting = new stdclass();
$lang->visual->setting->logo                               = array('name' => "Logo/名称");
$lang->visual->setting->slogan                             = array('name' => "口号");
$lang->visual->setting->powerby                            = array('name' => "蝉知标识", 'actions' => array());
$lang->visual->setting->powerby['actions']['edit']         = array('title' => '移除蝉知标识', 'text' => '移除蝉知标识', 'alert' => $lang->visual->editPowerBy);
$lang->visual->setting->company                            = array('name' => "公司介绍", 'actions' => array());
$lang->visual->setting->company['actions']['edit']         = array('text' => '编辑公司介绍');
$lang->visual->setting->companyName                        = array('name' => "公司名称");
$lang->visual->setting->companyDesc                        = array('name' => "公司简介");
$lang->visual->setting->companyContact                     = array('name' => "联系方式");
$lang->visual->setting->links                              = array('name' => "友情链接");
$lang->visual->setting->navbar                             = array('name' => "导航");
$lang->visual->setting->carousel                           = array();
$lang->visual->setting->carousel['groupActions']           = array();
$lang->visual->setting->carousel['groupActions']['add']    = array('text' => '添加一张幻灯片');
$lang->visual->setting->carousel['itemActions']            = array();
$lang->visual->setting->carousel['itemActions']['edit']    = array('text' => '编辑', 'title' => '编辑幻灯片');
$lang->visual->setting->carousel['itemActions']['delete']  = array('text' => '删除这一张', 'confirm' => '是否删除此幻灯片？');
$lang->visual->setting->carousel['itemActions']['up']      = array('text' => '播放顺序提前为 {0}');
$lang->visual->setting->carousel['itemActions']['down']    = array('text' => '播放顺序延后为 {0}');
$lang->visual->setting->block                              = array('name' => "区块", 'actions' => array());
$lang->visual->setting->block['actions']['delete']         = array('confirm' => '确定从布局中移除 {title}？', 'success' => '{title} 已被移除。'); 
$lang->visual->setting->block['actions']['layout']         = array('text' => '更改布局', 'success' => '布局已保存');
$lang->visual->setting->block['actions']['add']            = array('title' => '添加内容到 【{title}】');
$lang->visual->setting->block['actions']['create']         = array('title' => '创建并添加区块');
$lang->visual->setting->columns                            = array('name' => "分栏设置", 'actions' => array());
$lang->visual->setting->columns['actions']['edit']         = array('title' => "侧边栏设置", 'text' => "侧边栏设置");
$lang->visual->setting->article                            = array('name' => '文章');
$lang->visual->setting->articles                           = array('name' => '文章列表', 'actions' => array());
$lang->visual->setting->articles['actions']['add']         = array('text' => '发布新文章');
$lang->visual->setting->page                               = array('name' => '单页');
$lang->visual->setting->pageList                           = array('name' => '单页列表', 'actions' => array());
$lang->visual->setting->pageList['actions']['add']         = array('text' => '发布新单页');
$lang->visual->setting->blog                               = array('name' => '博客');
$lang->visual->setting->blogList                           = array('name' => '博客列表', 'actions' => array());
$lang->visual->setting->blogList['actions']['add']         = array('text' => '发布新博客');
$lang->visual->setting->product                            = array('name' => '产品');
$lang->visual->setting->products                           = array('name' => '产品列表', 'actions' => array());
$lang->visual->setting->products['actions']['add']         = array('text' => '发布新产品');
$lang->visual->setting->books                              = array('name' => '手册列表', 'actions' => array());
$lang->visual->setting->books['actions']['add']            = array('text' => '添加手册');
$lang->visual->setting->bookCatalog                        = array('name' => "手册目录");
$lang->visual->setting->book                               = array('name' => "手册");
$lang->visual->setting->boards                             = array('name' => '论坛板块', 'actions' => array());
$lang->visual->setting->boards['actions']['add']           = array('text' => '板块管理');
$lang->visual->setting->thread                             = array('name' => '帖子', 'actions' => array());
$lang->visual->setting->thread['actions']['edit']          = array('text' => '转移');
/* wechat */
$lang->wechat->common = '微信';

$lang->wechat->id        = '编号';
$lang->wechat->type      = '类型';
$lang->wechat->name      = '微信名';
$lang->wechat->account   = '原始ID';
$lang->wechat->appID     = 'AppID';
$lang->wechat->appSecret = 'AppSecret';
$lang->wechat->token     = 'Token';
$lang->wechat->url       = '接入地址';
$lang->wechat->certified = '是否认证';
$lang->wechat->users     = '微信会员';
$lang->wechat->content   = '内容';
$lang->wechat->qrcode    = '二维码';

$lang->wechat->create         = '添加公众号';
$lang->wechat->edit           = '编辑公众号';
$lang->wechat->admin          = '维护公众号';
$lang->wechat->list           = '公众号列表';
$lang->wechat->set            = '微信设置';
$lang->wechat->setMenu        = '菜单';
$lang->wechat->integrate      = '接入';
$lang->wechat->adminResponse  = '响应';
$lang->wechat->setResponse    = '设置响应';
$lang->wechat->deleteResponse = '删除响应';
$lang->wechat->reply          = '回复';
$lang->wechat->commitMenu     = '菜单';
$lang->wechat->deleteMenu     = '删除菜单';
$lang->wechat->messageList    = '消息';

$lang->wechat->typeList['subscribe'] = '订阅号';
$lang->wechat->typeList['service']   = '服务号';

$lang->wechat->certifiedList[1] = '是';
$lang->wechat->certifiedList[0] = '否';

$lang->wechat->response = new stdclass();

$lang->wechat->response->keywords  = '关键字';
$lang->wechat->response->set       = '响应设置';
$lang->wechat->response->create    = '添加关键字';
$lang->wechat->response->default   = '默认响应';
$lang->wechat->response->subscribe = '订阅响应';

$lang->wechat->response->type     = '类型';
$lang->wechat->response->source   = '来源';
$lang->wechat->response->module   = '模块';
$lang->wechat->response->block    = '内容';
$lang->wechat->response->link     = '链接';
$lang->wechat->response->category = '类目';
$lang->wechat->response->limit    = '数量';

$lang->wechat->response->list   = '响应列表';

$lang->wechat->response->typeList['link'] = '链接';
$lang->wechat->response->typeList['text'] = '文本消息';
$lang->wechat->response->typeList['news'] = '图文消息';

$lang->wechat->response->sourceList['system'] = '系统';
$lang->wechat->response->sourceList['manual'] = '输入';

$lang->wechat->response->moduleList['index']   = '首页';
$lang->wechat->response->moduleList['company'] = '关于我们';
$lang->wechat->response->moduleList['blog']    = '博客';
$lang->wechat->response->moduleList['forum']   = '论坛';
$lang->wechat->response->moduleList['book']    = '手册';
$lang->wechat->response->moduleList['manual']  = '自定义';

$lang->wechat->response->textBlockList['company'] = '公司简介';
$lang->wechat->response->textBlockList['contact'] = '联系我们';
$lang->wechat->response->textBlockList['manual']  = '自定义';

$lang->wechat->response->newsBlockList['articleTree']   = '文章分类';
$lang->wechat->response->newsBlockList['latestArticle'] = '最新文章';
$lang->wechat->response->newsBlockList['hotArticle']    = '热门文章';
$lang->wechat->response->newsBlockList['productTree']   = '产品分类';
$lang->wechat->response->newsBlockList['latestProduct'] = '最新产品';
$lang->wechat->response->newsBlockList['hotProduct']    = '热门产品';

$lang->wechat->message = new stdclass();
$lang->wechat->message->from     = '称呼';
$lang->wechat->message->type     = '类型';
$lang->wechat->message->status   = '状态';
$lang->wechat->message->content  = '消息内容';
$lang->wechat->message->response = '响应';
$lang->wechat->message->menu     = '菜单';
$lang->wechat->message->time     = '时间';
$lang->wechat->message->reply    = '回复';
$lang->wechat->message->record   = '消息记录';
$lang->wechat->message->list     = '消息列表';

$lang->wechat->message->typeList['text']        = '文本';
$lang->wechat->message->typeList['image']       = '图片';
$lang->wechat->message->typeList['voice']       = '语音';
$lang->wechat->message->typeList['location']    = '位置';
$lang->wechat->message->typeList['link']        = '链接';
$lang->wechat->message->typeList['subscribe']   = '订阅';
$lang->wechat->message->typeList['unsubscribe'] = '取消订阅';
$lang->wechat->message->typeList['scan']        = '扫描';
$lang->wechat->message->typeList['click']       = '点击';
$lang->wechat->message->typeList['view']        = '链接';

$lang->wechat->message->tabList[] = 'mode=replied&replied=0|未回复';
$lang->wechat->message->tabList[] = 'mode=type&type=text|留言';
$lang->wechat->message->tabList[] = 'mode=type&type=subscribe|新订阅';
$lang->wechat->message->tabList[] = 'mode=type&type=unsubscribe|取消订阅';
$lang->wechat->message->tabList[] = 'mode=replied&replied=1|已回复';

$lang->wechat->noSelectedFile  = "没有选择图片";
$lang->wechat->noAppID         = "没有设置AppID";
$lang->wechat->qrcodeType      = "请上传JPG格式二维码图片";

$lang->wechat->placeholder = new stdclass();
$lang->wechat->placeholder->limit    = '请输条数，最多10条';
$lang->wechat->placeholder->category = '请选择类目，最多10个';
$lang->wechat->placeholder->name     = '公众号名称';
$lang->wechat->placeholder->account  = '请输入gh_xxx 格式的原始ID';
$lang->wechat->placeholder->token    = '必须为英文或数字，长度为3-32字符';

$lang->wechat->curlSSLRequired = "微信公众号功能需要curl模块，并支持ssl加密传输。";
$lang->wechat->needCertified   = "此功能需要公众号认证后使用。";
$lang->wechat->integrateInfo   = "请到微信的公众平台完成接入，以获取appID和appSecret信息。 <a href='http://api.chanzhi.org/goto.php?item=help_wechat' target='_blank'>帮助</a>";
$lang->wechat->integrateDone   = "已完成接入";
/* widget */
$lang->widget->common = '区块';
$lang->widget->title  = '区块名称';
$lang->widget->style  = '外观';
$lang->widget->type   = '类型';
$lang->widget->grid   = '宽度';
$lang->widget->color  = '颜色';
$lang->widget->status = '状态';

$lang->widget->message = '留言';
$lang->widget->comment = '评论';
$lang->widget->reply   = '回复';

$lang->widget->create    = '创建区块';
$lang->widget->hidden    = '隐藏';
$lang->widget->lblWidget = '区块';
$lang->widget->lblRss    = 'RSS地址';
$lang->widget->lblNum    = '条数';
$lang->widget->content   = '内容';

$lang->widget->params = new stdclass();
$lang->widget->params->name  = '参数名称';
$lang->widget->params->value = '参数值';

$lang->widget->createWidget        = '添加区块';
$lang->widget->editWidget          = '编辑区块';
$lang->widget->ordersSaved         = '排序已保存';
$lang->widget->confirmRemoveWidget = '确定移除区块【{0}】吗？';

$lang->widget->dynamic     = '最新动态';
$lang->widget->dynamicInfo = "%s, %s <em>%s</em> %s <a href='%s'>%s</a>。";

$lang->widget->default = array();
$lang->widget->default['1']['title'] = '最新订单';
$lang->widget->default['1']['type']  = 'latestOrder';
$lang->widget->default['1']['grid']  = 4;

$lang->widget->default['2']['title'] = '最新帖子';
$lang->widget->default['2']['type']  = 'latestThread';
$lang->widget->default['2']['grid']  = 4;

$lang->widget->default['3']['title'] = '反馈';
$lang->widget->default['3']['type']  = 'message';
$lang->widget->default['3']['grid']  = 4;

$lang->widget->default['4']['title'] = '最新投稿';
$lang->widget->default['4']['type']  = 'submittion';
$lang->widget->default['4']['grid']  = 4;

$lang->widget->default['5']['title'] = '快捷入口';
$lang->widget->default['5']['type']  = 'commonMenu';
$lang->widget->default['5']['grid']  = 4;

$lang->widget->default['6']['title'] = '蝉知动态';
$lang->widget->default['6']['type']  = 'chanzhiDynamic';
$lang->widget->default['6']['grid']  = 4;

$lang->widget->typeList = new stdclass();
$lang->widget->typeList->latestOrder    = '最新订单';
$lang->widget->typeList->latestThread   = '最新帖子';
$lang->widget->typeList->message        = '反馈';
$lang->widget->typeList->wechatMessage  = '微信留言';
$lang->widget->typeList->submittion     = '最新投稿';
$lang->widget->typeList->chanzhiDynamic = '蝉知动态';
$lang->widget->typeList->html           = '自定义';
$lang->widget->typeList->commonMenu     = '快捷入口';
/* yangcong */
$lang->yangcong = new stdclass();
$lang->yangcong->qrcodeInfo   = "请用洋葱客户端扫描下方二维码";
$lang->yangcong->scanFinished = "已完成扫描";