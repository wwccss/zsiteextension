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
$lang->back2Top   = 'Back <br/>to<br/> the<br/> Top';
$lang->cancel     = 'Cancel';

$lang->cn = '简';
$lang->tw = '繁';
$lang->en = 'EN';

$lang->toBeAdded = 'To be added';

$lang->about  = 'About';
$lang->thanks = 'Acknowledge';

$lang->chanzhiEPS     = 'Changer CMS';
$lang->chanzhiEPSx    = 'Changer';
$lang->agreement      = "I have read and agreed to <a href='http://zpl.pub/page/zplv12.html' target='_blank'>《Z PUBLIC LICENSE 1.2》</a>. <span class='text-danger'>If not authorized, I should not remove, hide, or cover any signs/links of Changer CMS.</span>";
$lang->poweredBy      = "<a href='http://www.chanzhi.org/?v=%s' target='_blank' title='%s'>%s</a>";
$lang->poweredByAdmin = "<span id='poweredBy'> is powered by <a href='http://www.chanzhi.org/?v=%s' target='_blank' title='%s'>Changer CMS %s</a></span>";
$lang->newVersion     = "Note: Changer CMS has released <span id='version'></span> on <span id='releaseDate'></span>. <a href='' target='_blank' id='upgradeLink'>Download it NOW!</a>";
$lang->execInfo       = "<span id='execInfoBar' class='hide'><span class='text-left'>SQL query：<b>%s</b> <br> Memory footprint: <b>%s</b><br> PHP E-time: <b>%s</b> s</span></span>";

$lang->home             = 'Home';
$lang->welcome          = 'Welcome to Changer, <strong>%s</strong>!';
$lang->messages         = "<strong><i class='icon-comment-alt'></i> %s</strong>";
$lang->todayIs          = 'Today is %s，';
$lang->aboutUs          = 'About Us';
$lang->link             = 'Links';
$lang->frontHome        = 'Frontend';
$lang->forumHome        = 'Forum';
$lang->bookHome         = 'Manual';
$lang->dashboard        = 'Dashboard';
$lang->visualEdit       = 'Visual Editor';
$lang->editMode         = 'Edit Mode';
$lang->register         = 'Register';
$lang->logout           = 'Logout';
$lang->login            = 'Login';
$lang->account          = 'Account';
$lang->password         = 'Password';
$lang->changePassword   = 'Change Password';
$lang->setEmail         = "Email Settings";
$lang->setSecurity      = 'Security Question';
$lang->forgotPassword   = 'Forgot password?';
$lang->currentPos       = 'Current Page';
$lang->categoryMenu     = 'Menu';
$lang->wechatTip        = 'Wechat Subscribe';
$lang->qrcodeTip        = 'QR Code';
$lang->language         = 'Lang';
$lang->custom           = 'Custom';

$lang->reset          = 'Reset';
$lang->edit           = 'Edit';
$lang->copy           = 'Copy';
$lang->hide           = 'Hide';
$lang->delete         = 'Delete';
$lang->close          = 'Close';
$lang->save           = 'Save';
$lang->confirm        = 'Confirm';
$lang->addToBlacklist = 'Block';
$lang->send           = 'Send';
$lang->preview        = 'Preview';
$lang->goback         = 'Back';
$lang->more           = 'More';
$lang->refresh        = 'Refresh';
$lang->actions        = 'Action';
$lang->feature        = 'Feature';
$lang->year           = 'Year';
$lang->selectAll      = 'Select All';
$lang->selectReverse  = 'Select Reverse';
$lang->loading        = 'Loading...';
$lang->saveSuccess    = 'Saved';
$lang->setSuccess     = 'Set';
$lang->createSuccess  = 'Created';
$lang->sendSuccess    = 'Sent';
$lang->deleteSuccess  = 'Deleted';
$lang->fail           = 'Failed';
$lang->noResultsMatch = 'No match found!';
$lang->alias          = 'For SEO. Use letters and numbers.';
$lang->keywordsHolder = 'Use commas to delimit keywords.';

$lang->setOkFile = <<<EOT
<h5>Please confirm your admin account by following steps below.</h5>
<p>Create %s file.</p>
EOT;

$lang->color       = 'Color';
$lang->colorTip    = 'hexadecimal colors';
$lang->colorPlates = '333333|000000|CA1407|45872B|148D00|F25D03|2286D2|D92958|A63268|04BFAD|D1270A|FF9400|299182|63731A|3D4DBE|7382D9|754FB9|F2E205|B1C502|364245|C05036|8A342A|E0DDA2|B3D465|EEEEEE|FFD0E5|D0FFFD|FFFF84|F4E6AE|E5E5E5|F1F1F1|FFFFFF';

$lang->score = new stdclass();
$lang->score->common = 'Points';

$lang->js = new stdclass();
$lang->js->confirmDelete    = 'Do you want to delete it?';
$lang->js->deleteing        = 'Deleting';
$lang->js->doing            = 'Processing';
$lang->js->loading          = 'Loading';
$lang->js->updating         = 'Updating';
$lang->js->timeout          = 'Timeout. Please try it again.';
$lang->js->errorThrown      = '<h4> Error </h4>';
$lang->js->continueShopping = 'Continue shopping';
$lang->js->required         = 'Required';
$lang->js->back             = 'Back';
$lang->js->continue         = 'Continue';

$lang->company = new stdclass();
$lang->company->contactUs = 'Contact Us';
$lang->company->contacts  = 'Contact';
$lang->company->address   = 'Address';
$lang->company->phone     = 'Phone';
$lang->company->email     = 'Email';
$lang->company->fax       = 'Fax';
$lang->company->qq        = 'QQ';
$lang->company->skype     = 'Skype';
$lang->company->weibo     = 'Weibo';
$lang->company->weixin    = 'Wechat';
$lang->company->wangwang  = 'wangwang';
$lang->company->site      = 'Website';

$lang->sitemap = new stdclass();
$lang->sitemap->common = 'Sitemap';

$lang->groups = new stdclass();
$lang->groups->home     = array('title' => 'Home', 'link' => 'admin|index|',               'icon' => 'home');
$lang->groups->content  = array('title' => 'Content', 'link' => 'article|admin|type=article', 'icon' => 'edit');
$lang->groups->shop     = array('title' => 'Mall', 'link' => 'order|admin|',               'icon' => 'shopping-cart');
$lang->groups->user     = array('title' => 'User', 'link' => 'user|admin|',                'icon' => 'group');
$lang->groups->promote  = array('title' => 'Promote', 'link' => 'stat|traffic|',              'icon' => 'volume-up');
$lang->groups->design   = array('title' => 'Design', 'link' => 'ui|settemplate|',            'icon' => 'paint-brush');
$lang->groups->open     = array('title' => 'Platform', 'link' => 'package|browse|',            'icon' => 'cloud');
$lang->groups->setting  = array('title' => 'Settings', 'link' => 'site|setbasic|',             'icon' => 'cog');

$lang->menu = new stdclass();
$lang->menu->admin    = 'Home|admin|index|';
$lang->menu->article  = 'Article|article|admin|type=article';
$lang->menu->blog     = 'Blog|article|admin|type=blog';
$lang->menu->book     = 'Manual|book|admin|';
$lang->menu->page     = 'Page|article|admin|type=page';

$lang->menu->order        = 'Order|order|admin|';
$lang->menu->product      = 'Product|product|admin|';
$lang->menu->orderSetting = 'Settings|product|setting|';

$lang->menu->user         = 'User|user|admin|';
$lang->menu->message      = 'Message|message|admin|type=message';
$lang->menu->comment      = 'Comment|message|admin|type=comment';
$lang->menu->reply        = 'Reply|message|admin|type=reply';
$lang->menu->forum        = 'Forum|forum|admin|';
$lang->menu->thread       = 'Thread|forum|admin|';
$lang->menu->forumreply   = 'Replies|reply|admin|';
$lang->menu->submittion   = 'Commit|article|admin|type=submittion&tab=user';
$lang->menu->wechat       = 'Wechat|wechat|message|mode=replied&replied=0';

$lang->menu->stat    = 'Stats|stat|traffic|';
$lang->menu->tag     = 'Tag|tag|admin|';
$lang->menu->links   = 'Links|links|admin|';

$lang->menu->ui       = 'UI|ui|settemplate|';
$lang->menu->logo     = 'Logo|ui|setlogo|';
$lang->menu->nav      = 'Navigation|nav|admin|';
$lang->menu->block    = 'Block|block|admin|';
$lang->menu->slide    = 'Slide|slide|admin|';
$lang->menu->others   = "Settings|ui|others|";
$lang->menu->visual   = "Visualize|visual|index|";
$lang->menu->edit     = "Edit templates|ui|edittemplate|";

$lang->menu->site     = 'Site|site|setbasic|';
$lang->menu->security = 'Security|site|setsecurity|';

$lang->menu->package    = 'Plug-ins|package|browse|';
$lang->menu->themestore = 'Themes|ui|themestore|';

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
$lang->article->menu->browse       = 'Articles|article|admin|';

$lang->blog = new stdclass();
$lang->blog->menu = new stdclass();
$lang->blog->menu->browse       = 'Blogs|article|admin|type=blog';

$lang->page = new stdclass();
$lang->page->menu = new stdclass();
$lang->page->menu->browse = array('link' => 'Pages|article|admin|type=page', 'alias' => 'create, edit');

$lang->express = new stdclass();

$lang->orderSetting = new stdclass();
$lang->orderSetting->menu = new stdclass();
$lang->orderSetting->menu->orderSetting = 'Settings|product|setting|';
$lang->orderSetting->menu->express      = 'Express|tree|browse|type=express';

$lang->product = new stdclass();
$lang->product->menu = new stdclass();
$lang->product->menu->browse = array('link' => 'Product|product|admin|', 'alias' => 'create, edit');

$lang->ui = new stdclass();

$lang->theme = new stdclass();
$lang->theme->menu = new stdclass();
$lang->theme->menu->theme   = 'Theme|ui|settemplate|';
$lang->theme->menu->layout  = array('link' => 'Layout|block|pages|', 'alias' => 'setregion');
$lang->theme->menu->custom  = 'UI|ui|customtheme|';
$lang->theme->menu->code    = 'Code|ui|setcode|';
$lang->theme->menu->source  = 'Source|file|browsesource|';

$lang->user = new stdclass();

$lang->message = new stdclass();

$lang->forum = new stdclass();
$lang->forum->menu = new stdclass();
$lang->forum->menu->browse  = 'Thread List|forum|admin|';
$lang->forum->menu->reply   = 'Reply List|reply|admin|';
$lang->forum->menu->tree    = 'Board|tree|browse|type=forum';
$lang->forum->menu->update  = 'Update|forum|update|';
$lang->forum->menu->setting = 'Settings|forum|setting|';

$lang->site = new stdclass();
$lang->site->menu = new stdclass();
$lang->site->menu->basic    = 'Basic Settings|site|setbasic|';
$lang->site->menu->domain   = 'Domain Settings|site|setdomain|';
$lang->site->menu->cdn      = 'CDN Settings|site|setcdn|';
$lang->site->menu->cache    = 'Cache Settings|site|setcache|';
$lang->site->menu->home     = 'Home Menu|site|sethomemenu|';
$lang->site->menu->company  = 'Company Info|company|setbasic|';
$lang->site->menu->contact  = 'Contact Us|company|setcontact|';
$lang->site->menu->oauth    = 'Social Login|site|setoauth|';
$lang->site->menu->mail     = array('link' => 'Email Settings|mail|admin|', 'alias' => 'detect,edit,save,test');
$lang->site->menu->wechat   = array('link' => 'Wechat Settings|wechat|admin|', 'alias' => 'create,edit,adminresponse,integrate');
$lang->site->menu->search   = 'Full Text Retrieval|search|buildindex|';
$lang->site->menu->score    = 'Points|score|setcounts|';
$lang->site->menu->backup   = 'Backup Restore|backup|index|';
//$lang->site->menu->api      = 'API|site|setapi|';

$lang->security = new stdclass();
$lang->security->menu = new stdclass();
$lang->security->menu->basic     = 'Basic Settings|site|setsecurity|';
$lang->security->menu->filter    = 'Filter|site|setfilter|';
$lang->security->menu->blacklist = 'Blacklist|guarder|setblacklist|';
$lang->security->menu->whitelist = 'Whitelist|guarder|setwhitelist|';
$lang->security->menu->sensitive = 'Sensitive Words|site|setsensitive|';
$lang->security->menu->captcha   = 'Verification Code|guarder|setcaptcha|';
$lang->security->menu->upload    = 'Upload|site|setupload|';
$lang->security->menu->admin     = 'Admin|user|admin|admin=1';
$lang->security->menu->group     = array('link' => 'Group Privilege|group|browse|', 'alias' => 'managepriv,managemember');
$lang->security->menu->log       = 'Log|user|adminlog|';

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
$lang->search->common = 'Search';

$lang->group = new stdclass();
$lang->group->menu = $lang->security->menu;

$lang->package = new stdclass();

$lang->stat = new stdclass();
$lang->stat->menu = new stdclass();
$lang->stat->menu->traffic  = 'Traffic|stat|traffic|';
$lang->stat->menu->from     = 'Source|stat|from|';
$lang->stat->menu->domains  = array('link' => 'Domain|stat|domainlist|', 'alias' => 'domaintrend,domainpage');
$lang->stat->menu->search   = 'Search Engine|stat|search|';
$lang->stat->menu->keywords = 'Keyword|stat|keywords|';
$lang->stat->menu->client   = 'Client|stat|client|type=browser';
$lang->stat->menu->page     = 'Page Click|stat|page|';
$lang->stat->menu->setStat  = 'Settings|stat|setting|';

$lang->error = new stdclass();
$lang->error->length       = array('<strong>%s</strong> Length Error. It should be <strong>%s</strong>', '<strong>%s</strong> should be <= <strong>%s</strong> and >= <strong>%s</strong>。');
$lang->error->reg          = '<strong>%s</strong> Format Error. It should be <strong>%s</strong>.';
$lang->error->unique       = '<strong>%s</strong> has already had <strong>%s</strong>.';
$lang->error->notempty     = '<strong>%s</strong> should not be blank.';
$lang->error->equal        = '<strong>%s</strong> has to be <strong>%s</strong>.';
$lang->error->gt           = "<strong>%s</strong> should be > <strong>%s</strong>.";
$lang->error->ge           = "<strong>%s</strong> should be >= <strong>%s</strong>.";
$lang->error->lt           = "<strong>%s</strong> should be < <strong>%s</strong>.";
$lang->error->le           = "<strong>%s</strong> should be <= <strong>%s</strong>.";
$lang->error->in           = '<strong>%s</strong> has to be <strong>%s</strong>.';
$lang->error->int          = array('<strong>%s</strong> should be numbers.', '<strong>%s</strong> minimum value is %s',  '<strong>%s</strong> should be between <strong>%s-%s</strong>.');
$lang->error->float        = '<strong>%s</strong> shoud be a number/decimal.';
$lang->error->email        = '<strong>%s</strong> should be valid Email.';
$lang->error->phone        = '<strong>%s</strong> should be valid phone number.';
$lang->error->mobile       = '<strong>%s</strong> should be valid mobile phone number.';
$lang->error->URL          = '<strong>%s</strong> should be valid URL.';
$lang->error->date         = '<strong>%s</strong> should be valid date.';
$lang->error->account      = '<strong>%s</strong> should be any combination of letters and numbers and must be a minimum of 3 characters.';
$lang->error->passwordsame = 'Passwords should match.';
$lang->error->passwordrule = 'Password should be minimum of 6 characters and meet its setting requirement.';
$lang->error->captcha      = 'Please enter verification code correctly.';
$lang->error->noWritable   = '%s is not writable. Please update your permission!';
$lang->error->fingerprint  = 'Authentication expired. Please try again!';
$lang->error->token        = 'Must be letters/numbers and the characters between 3-32.';
$lang->error->sensitive    = 'No sensitive words allowed!';
$lang->error->noRepeat     = 'No duplicated content, please!';

$lang->pager = new stdclass();
$lang->pager->noRecord     = "No record found!";
$lang->pager->digest       = "<strong>%s</strong> Records found. %s <strong>%s/%s</strong> &nbsp; ";
$lang->pager->recPerPage   = "<strong>%s</strong> Records per Page";
$lang->pager->first        = "<i class='icon-step-backward' title='Home'></i>";
$lang->pager->pre          = "<i class='icon-play icon-rotate-180' title='Previous'></i>";
$lang->pager->next         = "<i class='icon-play' title='Next'></i>";
$lang->pager->last         = "<i class='icon-step-forward' title='last page'></i>";
$lang->pager->locate       = "GO";
$lang->pager->previousPage = "Previous";
$lang->pager->nextPage     = "Next";
$lang->pager->summery      = "<strong>%s-%s</strong> of <strong>%s</strong>.";

$lang->date = new stdclass();
$lang->date->minute = 'min';
$lang->date->day    = 'day';

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

$lang->k  = 'Open Source CMS - Changer CMS;';
$lang->k .= 'Changer CMS, free and open source CMS;';
$lang->k .= 'Changer CMS, your #1 Choice;';
$lang->k .= 'Website building, choose Changer CMS;';
$lang->k .= 'Changer CMS, free and open source php CMS.';
/* address */
$lang->address->common  = 'Address';
$lang->address->address = 'Detailed Address';
$lang->address->phone   = 'Phone';
$lang->address->zipcode = 'zip code';
$lang->address->contact = 'Contact';

$lang->address->browse = 'Addresses';
$lang->address->create = 'Add';
$lang->address->edit   = 'Edit';
/* admin */ 
$lang->admin->common        = 'Backend';
$lang->admin->index         = 'Home';
$lang->admin->ignore        = 'Ignore security warning';
$lang->admin->ignoreupgrade = 'Ignore upgrade prompt';

$lang->admin->shortcuts = new stdclass();
$lang->admin->shortcuts->common             = 'Quick Entry';
$lang->admin->shortcuts->articleCategories  = 'Article Categories';
$lang->admin->shortcuts->article            = 'Publish an Article';
$lang->admin->shortcuts->product            = 'Add a Product';
$lang->admin->shortcuts->feedback           = 'Feedback';
$lang->admin->shortcuts->site               = 'Site Settings';
$lang->admin->shortcuts->logo               = 'Logo Settings';
$lang->admin->shortcuts->company            = 'Company Info';
$lang->admin->shortcuts->contact            = 'Contact';

$lang->admin->thread       = 'New Thread';
$lang->admin->order        = 'New Order';
$lang->admin->feedback     = 'New Feedback';

$lang->admin->adminEntry     = 'Warning! Your management entry is admin.php as default. Please change its name for security!';
$lang->admin->orderTitle     = '%s has created an Order %s ';
$lang->admin->message        = 'Today you have %s messages to review.';
$lang->admin->reply          = 'Today you have %s replies to review.';
$lang->admin->comment        = 'Today you have %s comments to review.';
$lang->admin->threadReply    = 'Today you have %s replies.';
$lang->admin->submittion     = 'Today you have %s contributions to review.';
$lang->admin->todayReport    = 'Today your website has %s PVs, %s UVs, and %s IP addresses.';
$lang->admin->yestodayReport = 'Yesterday your website has %s PVs, %s UVs, and %s IP addresses.';
/* article */
$lang->article->common      = 'Article';
$lang->article->setting     = 'Basic Settings';
$lang->article->createDraft = 'Save the draft';
$lang->article->post        = 'Contribute';
$lang->article->check       = 'Review';
$lang->article->reject      = 'Reject';

$lang->article->id         = 'ID';
$lang->article->category   = 'Category';
$lang->article->categories = 'Category';
$lang->article->title      = 'Title';
$lang->article->alias      = 'Alias';
$lang->article->content    = 'Content';
$lang->article->source     = 'Source';
$lang->article->copySite   = 'Cope Site';
$lang->article->copyURL    = 'Copy URL';
$lang->article->keywords   = 'Keyword';
$lang->article->summary    = 'Summary';
$lang->article->author     = 'Author';
$lang->article->editor     = 'Edit';
$lang->article->addedDate  = 'Publish Time';
$lang->article->editedDate = 'Edit Time';
$lang->article->status     = 'Status';
$lang->article->type       = 'Type';
$lang->article->views      = 'View';
$lang->article->comments   = 'Comment';
$lang->article->stick      = 'Stick Up';
$lang->article->order      = 'Sort';
$lang->article->isLink     = 'Skip';
$lang->article->link       = 'Link';
$lang->article->css        = 'CSS';
$lang->article->js         = 'JS';
$lang->article->layout     = 'Layout';

$lang->article->forward2Blog     = 'Go to Blog';
$lang->article->forward2Forum    = 'Go to Forum';
$lang->article->selectCategories = 'Select a Category';
$lang->article->selectBoard      = 'Select a Board';
$lang->article->confirmReject    = 'Do you want to reject it?';

$lang->submittion= new stdclass();
$lang->submittion->common  = 'Contribute';
$lang->submittion->check   = 'Review';
$lang->submittion->list    = 'Contribution List';
$lang->submittion->publish = 'Publish';
$lang->submittion->reject  = 'Reject';

$lang->submittion->status[0] = '';
$lang->submittion->status[1] = '<span class="label label-xsm label-primary">' . 'To be reviewed' .'</span>';
$lang->submittion->status[2] = '<span class="label label-xsm label-success">' . 'Pass' . '</span>';
$lang->submittion->status[3] = 'Reject';

$lang->submittion->typeList = array();
$lang->submittion->typeList['article'] = 'Article';
$lang->submittion->typeList['blog']    = 'Blog';

$lang->article->onlyBody = 'Dispaly body only(for custom).';

$lang->article->list          = 'List';
$lang->article->admin         = 'Maintain';
$lang->article->create        = 'Publish';
$lang->article->setcss        = 'CSS Settings';
$lang->article->setjs         = 'JS Settings';
$lang->article->edit          = 'Edit';
$lang->article->files         = 'Attachment';
$lang->article->images        = 'Image';

$lang->article->submittion     = 'Contribute';
$lang->article->submissionTime = 'Contribute Time';
$lang->article->noSubmittion   = 'You have no contribution yet. Please contribute and earn points!';

$lang->article->submittionOptions = new stdclass;
$lang->article->submittionOptions->open  = 'On';
$lang->article->submittionOptions->close = 'Off';

$lang->blog->common = 'Blog';
$lang->blog->admin  = 'Maintain';
$lang->blog->list   = 'List';
$lang->blog->create = 'Publish';
$lang->blog->edit   = 'Edit';

$lang->page->common = 'Page';
$lang->page->admin  = 'Maintain`';
$lang->page->list   = 'List';
$lang->page->create = 'Add';
$lang->page->edit   = 'Edit';

$lang->article->sourceList['original']      = 'Original';
$lang->article->sourceList['copied']        = 'Copied';
$lang->article->sourceList['translational'] = 'Translated';
$lang->article->sourceList['article']       = 'Repost';

$lang->article->statusList['Open'] = 'Normal';
$lang->article->statusList['draft']  = 'Draft';

$lang->article->sticks[0] = 'No Stickup';
$lang->article->sticks[1] = 'Category Sticky';
$lang->article->sticks[2] = 'Global Sticky';

$lang->article->successStick   = 'Sticked to Top!';
$lang->article->successUnstick = 'Stickup cancelled!';

$lang->article->confirmDelete = 'Do you want to delete this article?';
$lang->article->categoryEmpty = 'Choose a category';

$lang->article->lblAddedDate = '<strong>Added on </strong> %s &nbsp;&nbsp;';
$lang->article->lblAuthor    = "<strong>Author </strong> %s &nbsp;&nbsp;";
$lang->article->lblSource    = '<strong>Source </strong>';
$lang->article->lblViews     = '<strong>Viewed </strong> %s';
$lang->article->lblEditor    = 'Last edited by %s on %s';
$lang->article->lblComments  = '<strong>Commented by </strong> %s';

$lang->article->none      = 'The End';
$lang->article->previous  = 'Previous';
$lang->article->next      = 'Next';
$lang->article->directory = 'Back to directory';
$lang->article->noCssTag  = 'No &lt;style&gt;&lt;/style&gt; tag';
$lang->article->noJsTag   = 'No &lt;script&gt;&lt;/script&gt;tag';

$lang->article->placeholder = new stdclass();
$lang->article->placeholder->addedDate = 'You can select a date to publish.';
$lang->article->placeholder->link      = 'Enter the link here. External link is OK.';

$lang->article->approveMessage = 'Your contribution <strong>%s</strong> has passed the review. You earned <strong>+%s</strong> points. Thanks for your support!';
$lang->article->rejectMessage  = 'Your contribution <strong>%s</strong> cannot pass the review. You can edit it and submit for review again. Thanks for your support!';

$lang->article->forwardFrom = 'Repost from';
/* backup */
$lang->backup->common   = 'Backup';
$lang->backup->index    = 'Home';
$lang->backup->history  = 'Bachup History';
$lang->backup->delete   = 'Delete Backup';
$lang->backup->backup   = 'Backup';
$lang->backup->restore  = 'Restore Backup';
$lang->backup->change   = 'Retention Time';
$lang->backup->changeAB = 'Modify';

$lang->backup->time  = 'Backup Time';
$lang->backup->files = 'Files';
$lang->backup->size  = 'Size';

$lang->backup->waitting       = '<span id="backupType"></span>Processing. Please wait...';
$lang->backup->confirmDelete  = 'Do you want to delete the backup?';
$lang->backup->confirmRestore = 'Do you want to restore the backup?';
$lang->backup->holdDays       = 'Keep the latest %s days backup.';

$lang->backup->success = new stdclass();
$lang->backup->success->backup  = 'Backed up!';
$lang->backup->success->restore = 'Restored!';

$lang->backup->error = new stdclass();
$lang->backup->error->noWritable     = "<code>%s</code> is not writable! Please check the permission, or it cannot be backed up!";
$lang->backup->error->noDelete       = "%s cannot be deleted. Please update the permission or manually delete it.";
$lang->backup->error->restoreSQL     = "Database restoration failed. Error %s";
$lang->backup->error->restoreFile    = "File restoration failed. Error %s";
$lang->backup->error->backupFile     = "File backup failed. Error %s";
$lang->backup->error->backupTemplate = "Template backup failed. Error %s";

$lang->js->backuping = 'Backing up...';
$lang->js->restoring = 'Restoring...';
/* block */
$lang->block->common          = 'Block/Layout';
$lang->block->id              = 'ID';
$lang->block->title           = 'Title';
$lang->block->amount          = 'Count';
$lang->block->limit           = 'Total';
$lang->block->recPerRow       = 'Per Row';
$lang->block->type            = 'Type';
$lang->block->htmlcode        = 'html';
$lang->block->phpcode         = 'php';
$lang->block->content         = 'Content';
$lang->block->moreLink        = 'More';
$lang->block->page            = 'Page';
$lang->block->regionList      = 'Region List';
$lang->block->select          = 'Select Block';
$lang->block->categories      = 'Category';
$lang->block->showImage       = 'Display Image';
$lang->block->maxWidth        = 'Max Width ';
$lang->block->showCategory    = 'Display Category';
$lang->block->showBoard       = 'Display Board';
$lang->block->showTime        = 'Display Time';
$lang->block->product         = 'Product';
$lang->block->slide           = 'Slide';
$lang->block->titleless       = 'No Title';
$lang->block->borderless      = 'No Border';
$lang->block->icon            = 'Icon';
$lang->block->padding         = 'Padding';
$lang->block->border          = 'Border';
$lang->block->grid            = 'Width';
$lang->block->more            = 'More';
$lang->block->color           = 'Color';
$lang->block->backgroundColor = 'Backgroud Color';
$lang->block->textColor       = 'Text Color';
$lang->block->borderColor     = 'Border Color';
$lang->block->linkColor       = 'Link Color';
$lang->block->iconColor       = 'Icon Color';
$lang->block->heading         = 'Title Bar';
$lang->block->content         = 'Content';
$lang->block->background      = 'Background';
$lang->block->custom          = 'Custom';
$lang->block->preview         = 'Preview';
$lang->block->textExample     = 'Example of text style. <a href="###">Example Link</a>';
$lang->block->customStyleTip  = 'Custom color and backgroud of the block HERE';
$lang->block->style           = 'Style';
$lang->block->sort            = 'Sort';
$lang->block->class           = 'CSS Class';
$lang->block->subRegion       = 'SubLayout';
$lang->block->currentLayout   = 'Current Layout %s';
$lang->block->renameLayout    = 'Rename Plan';
$lang->block->planName        = 'Plan Name';
$lang->block->saveLayoutAs    = 'Copy Layout %s';
$lang->block->defaultPlan     = 'Default Plan';
$lang->block->image           = 'Image';

$lang->block->layout            = 'Layout';
$lang->block->logoPosition      = 'Logo';
$lang->block->navPosition       = 'Navigation';
$lang->block->searchbarPosition = 'Search bar';
$lang->block->sloganPosition    = 'Slogan';

$lang->block->header = new stdclass();

$lang->block->header->top = new stdclass();
$lang->block->header->top->common = 'Header';
$lang->block->header->top->left   = 'Left';
$lang->block->header->top->center = 'Center';
$lang->block->header->top->right  = 'Right';

$lang->block->header->middle = new stdclass();
$lang->block->header->middle->common = 'Center';
$lang->block->header->middle->left   = 'Left';
$lang->block->header->middle->center = 'Center';
$lang->block->header->middle->right  = 'Right';

$lang->block->header->bottom = new stdclass();
$lang->block->header->bottom->common = 'Bottom';

$lang->block->header->top->leftOptions['']         = 'Hide';
$lang->block->header->top->leftOptions['slogan']   = 'Slogan';
$lang->block->header->top->leftOptions['custom']   = 'Custom';

$lang->block->header->top->rightOptions['']               = 'Hide';
$lang->block->header->top->rightOptions['login']          = 'Login/Register + Switch Language';
$lang->block->header->top->rightOptions['search']         = 'Search bar';
$lang->block->header->top->rightOptions['loginAndSearch'] = 'Login/Register Language + Search Box';
$lang->block->header->top->rightOptions['searchAndLogin'] = 'Search Box + Login/Register Language';

$lang->block->header->middle->leftOptions['']     = 'Hide';
$lang->block->header->middle->leftOptions['logo'] = 'Logo';

$lang->block->header->middle->centerOptions['']       = 'Hide';
$lang->block->header->middle->centerOptions['slogan'] = 'Slogan';
$lang->block->header->middle->centerOptions['nav']    = 'Navigation';

$lang->block->header->middle->rightOptions['']       = 'Hide';
$lang->block->header->middle->rightOptions['search'] = 'Search bar';

$lang->block->header->bottomOptions['']             = 'Hide';
$lang->block->header->bottomOptions['nav']          = 'Navigation';
$lang->block->header->bottomOptions['navAndSearch'] = 'Naviagtion + Search Box';

$lang->block->admin        = "Block Mgmt";
$lang->block->pages        = "Layout";
$lang->block->add          = "Add";
$lang->block->addChild     = "SubBlock";
$lang->block->template     = "Template";
$lang->block->create       = 'Add a Block';
$lang->block->browseBlocks = 'Block List';
$lang->block->browseRegion = 'Layout Settings';
$lang->block->edit         = 'Edit';
$lang->block->view         = 'View`';
$lang->block->setPage      = 'Page Deploy';
$lang->block->setregion    = 'Layout Deploy';
$lang->block->switchPlan   = 'Switch Plan';
$lang->block->cloneLayout  = 'Save Layout';
$lang->block->switchLayout = 'Switch Layout';
$lang->block->removeLayout = 'Remove Layout';
$lang->block->planIsUseing = 'You cannot remove a plan in use.';

$lang->block->paddingTop    = 'Top';
$lang->block->paddingBottom = 'Bottom';
$lang->block->paddingLeft   = 'Left';
$lang->block->paddingRight  = 'Right';

$lang->block->placeholder = new stdclass();
$lang->block->placeholder->moreText               = 'Text at the upper right of the block';
$lang->block->placeholder->moreUrl                = 'Link at the upper right of the block';
$lang->block->placeholder->padding                = '0';
$lang->block->placeholder->customStyleTip         = 'Less is supported in style chart. You can use #blockID as ID selector.';
$lang->block->placeholder->desktopCustomScriptTip = 'jQuery 1.9.0 is included. You can use #blockID as ID selector.';
$lang->block->placeholder->mobileCustomScriptTip  = 'jQuery id supported. You can use #blockID as ID selector.';
$lang->block->placeholder->class                  = 'Use spaces as class place holders';

$lang->block->gridOptions[0]  = 'Auto';
$lang->block->gridOptions[6]  = '1/2';
$lang->block->gridOptions[4]  = '1/3';
$lang->block->gridOptions[8]  = '2/3';
$lang->block->gridOptions[3]  = '1/4';
$lang->block->gridOptions[9]  = '3/4';
$lang->block->gridOptions[2]  = '1/6';
$lang->block->gridOptions[10] = '5/6';
$lang->block->gridOptions[12] = '100%';

$lang->block->categoryList['custom']  = 'Custom';
$lang->block->categoryList['article'] = 'Article';
$lang->block->categoryList['product'] = 'Product';
$lang->block->categoryList['system']  = "System";

$lang->block->pageGroupList['system']   = "System";
$lang->block->pageGroupList['content']  = 'Content';
$lang->block->pageGroupList['product']  = 'Product';
$lang->block->pageGroupList['feedback'] = 'Feedback';

$lang->block->imageSizeList['large']  = 'Large';
$lang->block->imageSizeList['middle'] = 'Medium';
$lang->block->imageSizeList['small']  = 'Small';

$lang->block->imagePositionList['left']  = 'Left';
$lang->block->imagePositionList['right'] = 'Right';

$lang->block->category = new stdclass();
$lang->block->category->showChildren = 'Display Subcategory';
$lang->block->category->fromCurrent  = 'Start from current category';

$lang->block->category->showChildrenList[1] = 'Yes';
$lang->block->category->showChildrenList[0] = 'No';

$lang->block->category->fromCurrentList[1] = 'Yes';
$lang->block->category->fromCurrentList[0] = 'No';

$lang->block->category->showCategoryList['abbr'] = 'Abbreviation';
$lang->block->category->showCategoryList['name'] = 'Full Name';

$lang->block->slideStyle = 'Display Style';
$lang->block->slideStyleList['carousel'] = 'Horizontal';
$lang->block->slideStyleList['tile']     = 'Vertical';

$lang->block->navTypeList = new stdclass();
$lang->block->navTypeList->desktop_top   = 'Desktop';
$lang->block->navTypeList->desktop_blog  = 'Blog';
$lang->block->navTypeList->mobile_top    = 'Mobile Top';
$lang->block->navTypeList->mobile_bottom = 'Mobile Bottom';
$lang->block->navTypeList->mobile_blog   = 'Mobile Blog';

$lang->block->sideGrid  = 'Sidebar Width';
$lang->block->sideFloat = 'Sidebar Position ';
/* blog */
$lang->blog->common    = 'Blog';
$lang->blog->home      = 'Blog Home';
$lang->blog->siteHome  = 'Website Home';
$lang->blog->subscribe = 'Subscribe';
/* book */
$lang->book->common       = 'Manual';
$lang->book->list         = 'List';
$lang->book->articles     = 'Articles';
$lang->book->backtolist   = 'Back to List';

$lang->book->admin      = 'Manual List';
$lang->book->createBook = 'Add a Manual';
$lang->book->create     = 'Add';
$lang->book->catalog    = 'Chapter';
$lang->book->edit       = 'Edit';
$lang->book->sort       = 'Sort';
$lang->book->setting    = 'Settings';
$lang->book->index      = 'Home';

$lang->book->searchResults     = 'Search Results';
$lang->book->inputArticleTitle = 'Pleae enter the title of an article';

$lang->book->id          = 'ID';
$lang->book->type        = 'Type';
$lang->book->parent      = 'Category';
$lang->book->author      = 'Author';
$lang->book->editor      = 'Editor';
$lang->book->addedDate   = 'Publish Time';
$lang->book->editedDate  = 'Edit Time';
$lang->book->title       = 'Title';
$lang->book->keywords    = 'Keyword';
$lang->book->summary     = 'Summary';
$lang->book->content     = 'Content';
$lang->book->alias       = 'Alias';
$lang->book->order       = 'Sort';
$lang->book->views       = 'View';
$lang->book->files       = 'Attachment';
$lang->book->images      = 'Image';
$lang->book->chapterList = 'Contents';
$lang->book->articleList = 'Article';
$lang->book->fullScreen  = 'Full Screen';

$lang->book->typeList['book']    = 'Manual';
$lang->book->typeList['chapter'] = 'Chapter';
$lang->book->typeList['article'] = 'Article';

$lang->book->chapterTypeList['home'] = 'Display on homepage only';
$lang->book->chapterTypeList['left'] = 'Always dispaly on the left';

$lang->book->fullScreenList['1'] = 'Yes';
$lang->book->fullScreenList['0'] = 'No';

$lang->book->lblAddedDate = 'Added time <strong>%s</strong> ';
$lang->book->lblAuthor    = 'Author <strong>%s</strong> ';
$lang->book->lblViews     = 'Read <strong>%s</strong> ';
$lang->book->lblEditor    = 'Last edited by %s on %s ';

$lang->book->none     = 'The End';
$lang->book->chapter  = 'Back to Contents';
$lang->book->back2Top = 'Back to Top';
$lang->book->goHome   = 'Back to Homepage';

$lang->book->aliasRepeat   = 'Alias <strong> %s </strong> cannot be repeatedly added.';
$lang->book->confirmDelete = "<span class='text-danger'>You will delete all chapters and articles in this manual. Do you want to delete it?</span>";

$lang->book->note = new stdclass();
$lang->book->note->addedDate = 'You can publish it on selected date.';
/* cart */
$lang->cart->common = 'Shopping Cart';
$lang->cart->browse = 'My Cart';

$lang->cart->noProducts     = "Your shopping cart is Empty.";
$lang->cart->pickProducts   = "Keep Shopping";
$lang->cart->goAccount      = "Check Out";
$lang->cart->goHome         = "Back to Homepage";

$lang->cart->topbarInfo     = "<i class='icon icon-shopping-cart text-danger'></i> Shopping Cart <span class='label label-badge'>%s</span>";
/* company */
$lang->company->common  = "Company";

$lang->company->name    = "Company Name";
$lang->company->desc    = "Company Description";
$lang->company->content = "Conpamy Intro";
$lang->company->contact = "Contact Us";
$lang->company->qrcode  = "QR Code";

$lang->company->setBasic   = "Company Info";
$lang->company->setContact = "Company Contact";

$lang->company->error = new stdclass(); 
$lang->company->error->email = "Pleae use valid Email.";
/* error */
$lang->error = new stdclass();
$lang->error->pageNotFound    = "Page not found.";
$lang->error->articleCategory = 'Article Category';
$lang->error->productCategory = 'Product Category';
$lang->error->blogCategory    = 'Blog Category';
$lang->error->searchTip       = 'Please continue browsing our website. You can use Search to loof for';
/* file */
$lang->file->common        = 'Attachment';
$lang->file->upload        = 'Upload';
$lang->file->browse        = 'File List';
$lang->file->imageList     = 'Image List';
$lang->file->download      = 'Download';
$lang->file->edit          = 'Edit';
$lang->file->primary       = 'Cover';
$lang->file->name          = 'Title';
$lang->file->setPrimary    = 'Set as Cover.';
$lang->file->cancelPrimary = 'Remove Cover';
$lang->file->deny          = 'Disable';
$lang->file->allow         = 'Enable';
$lang->file->toggle        = 'Switch';
$lang->file->label         = 'Title';
$lang->file->lblInfo       = '<i>(Type %s, Size %s, Added on %s，Download %s times)</i>';
$lang->file->limit         = "(<span class='text-danger'> no more than %sM</span>)";
$lang->file->source        = 'Source';
$lang->file->sourceList    = 'Source List';
$lang->file->uploadSource  = 'Upload';
$lang->file->sourceURI     = 'URL';
$lang->file->deleteSource  = 'Delete';
$lang->file->editSource    = 'Edit';
$lang->file->selectImage   = 'Select';

$lang->file->id        = 'ID';
$lang->file->title     = 'Title';
$lang->file->pathname  = 'Path Name';
$lang->file->extension = 'Type';
$lang->file->size      = 'Size';
$lang->file->addedBy   = 'Uploaded By';
$lang->file->addedDate = 'Uploaded on';
$lang->file->public    = 'Anonymous Download';
$lang->file->downloads = 'Downloads';
$lang->file->score     = 'Points Required';
$lang->file->setScore  = 'Points Settings';
$lang->file->lblInfo   = 'Your points is <strong class="red">%s</strong>';
$lang->file->confirm   = 'It costs you %s points to download this Plug-in.';

$lang->file->publics[0] = 'Please login';
$lang->file->publics[1] = 'Enable';

$lang->file->sort        = 'Sort';
$lang->file->edit        = 'Edit';
$lang->file->editFile    = 'Edit File';
$lang->file->fileManager = 'File Mgmt';

$lang->file->viewType[0] = 'Image';
$lang->file->viewType[1] = 'List';

$lang->file->errorUnwritable  = 'Uploaded directory is not writable. Uploading failed.';
$lang->file->noAccess         = 'Access is denied.';
$lang->file->invalidParameter = 'Invalid Parameter';
$lang->file->unWritable       = 'The directory is not writable.';
$lang->file->uploadForbidden  = 'Uploading is disabled';
$lang->file->sizeLimit        = "<p class='text-danger'>File size should be <= %sM</p>";
$lang->file->sameName         = "File with the same name has existed. If continue，it will be overridden.";
$lang->file->nameEmpty        = "File name should not be blank.";
$lang->file->copySuccess      = "Copy to clipboard";
$lang->file->evilChar         = "Invalid Character";
$lang->file->rebuildThumbs    = "%s has been finished.";
/* forum */
$lang->forum->common      = 'Forum';
$lang->forum->board       = 'Board';
$lang->forum->owners      = 'Moderator';
$lang->forum->threadList  = 'Thread List';
$lang->forum->threadCount = 'Thread Count';
$lang->forum->postCount   = 'Post Count';
$lang->forum->lastPost    = 'Lst Post';
$lang->forum->readonly    = 'Read Only';
$lang->forum->notExist    = 'Board does not exist.'; 
$lang->forum->lblOwner    = " [ BM %s ]";

$lang->forum->post    = 'Post';
$lang->forum->admin   = 'Board Admin';
$lang->forum->update  = 'Data Update';
$lang->forum->setting = 'Forum Settings';
$lang->forum->postReview = 'Post Review';

$lang->forum->updateDesc    = 'Data update will update post counts of each boards.';
$lang->forum->successUpdate = 'Data updated!';

$lang->pager->noRecord      = '';
$lang->pager->digest        = str_replace('Record', 'Theme', $lang->pager->digest);
$lang->pager->settedInForum = true;    // Set this switch thus in thread module can avoid overiding them.

$lang->forum->postReviewOptions        = new stdclass(); 
$lang->forum->postReviewOptions->open  = 'On';
$lang->forum->postReviewOptions->close = 'Off';
/* group */
$lang->group->common             = 'Group Privilege';
$lang->group->allGroups          = 'All Privilege';
$lang->group->browse             = 'Browse Group';
$lang->group->create             = 'Add';
$lang->group->edit               = 'Edit';
$lang->group->copy               = 'Copy';
$lang->group->delete             = 'Delete';
$lang->group->managePriv         = 'Privilege';
$lang->group->managePrivByGroup  = 'Group Privilege';
$lang->group->managePrivByModule = 'Module Privilege';
$lang->group->byModuleTips       = '<span class="tips">(Press shift/control to multiselect.)</span>';
$lang->group->manageMember       = 'Member Mgmt';
$lang->group->linkMember         = 'Associate Member';
$lang->group->unlinkMember       = 'Unassociate Member';
$lang->group->confirmDelete      = 'Do you want to delete this member?';
$lang->group->successSaved       = 'Saved';
$lang->group->errorNotSaved      = 'Not saved. Please choose privilege.';

$lang->group->id       = 'ID';
$lang->group->name     = 'Group Name';
$lang->group->desc     = 'Group Description';
$lang->group->users    = 'User List';
$lang->group->module   = 'Module';
$lang->group->method   = 'Function';
$lang->group->priv     = 'Privilege';
$lang->group->option   = 'Option';
$lang->group->inside   = 'Users within group';
$lang->group->outside  = 'Users from outside';
$lang->group->other    = 'Other Modules';
$lang->group->all      = 'All Privilege';
$lang->group->extent   = 'Privilege Scope';
$lang->group->havePriv = 'Authorized';
$lang->group->noPriv   = 'Unauthorized';

$lang->group->selectAll = 'Select All';
$lang->group->manageAll = 'View All';

$lang->group->copyOptions['copyPriv'] = 'Copy Privilege';
$lang->group->copyOptions['copyUser'] = 'Copy User';

include (dirname(__FILE__) . '/resource.php');
/* guarder */
$lang->guarder = new stdclass();

$lang->guarder->common       = 'Security Settings';
$lang->guarder->action       = 'Action';
$lang->guarder->then         = 'Then';
$lang->guarder->setBlacklist = 'Blacklist';
$lang->guarder->setWhitelist = 'Whitelist';
$lang->guarder->setCaptcha   = 'Verification Code';
$lang->guarder->addBlacklist = 'Add to Blacklist';
$lang->guarder->addCaptcha   = 'Add verification code';
$lang->guarder->getEmailCode = 'Get verification code';

$lang->guarder->captcha        = 'Verification Code';
$lang->guarder->question       = 'Question';
$lang->guarder->answer         = 'Answer';
$lang->guarder->numbers        = array('Zero', 'One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine', 'Ten');
$lang->guarder->operators      = array('*' => 'multiply', '-' => 'minus', '+' => 'plus');
$lang->guarder->equal          = '=';
$lang->guarder->placeholder    = 'numbers/letters';
$lang->guarder->password       = 'Admin Password';
$lang->guarder->passwordHolder = 'Enter current account password';
$lang->guarder->identityTip    = 'Enter IP, Email, account, or sensitive words.';
$lang->guarder->captchaTip     = 'Once custom verification code set, frontend will automatically call those codes.'

$lang->guarder->verify        = 'Current action requires admin privilege verification for security reasons.';
$lang->guarder->okFile        = 'File Mode';
$lang->guarder->created       = 'Created';
$lang->guarder->email         = 'Email verification';
$lang->guarder->setSecurity   = 'Security Question';
$lang->guarder->captcha       = 'Verification Code';
$lang->guarder->needVerify    = 'Admin verification is required.';
$lang->guarder->emailFail     = 'Please enter correct verification code.';
$lang->guarder->questionFail  = 'Please enter correct answers to security question.';
$lang->guarder->verifySuccess = 'Verified! Please continue.';
$lang->guarder->noConfigure   = "Email settings cannot be found.";
$lang->guarder->noEmail       = "No Email address entered";
$lang->guarder->noQuestion    = "No security questions set up.";
$lang->guarder->noCaptcha     = "Email verification is disabled.";
$lang->guarder->okFileVerify  = "Please create <span class='red'>%s</span> on your web server and enter <span class='red'>%s</span>.";
$lang->guarder->sendSuccess   = 'Verification code has been sent to %s';
$lang->guarder->options       = 'Verification options';

$lang->guarder->blacklistModes['all']      = 'All';
$lang->guarder->blacklistModes['ip']       = 'IP Address';
$lang->guarder->blacklistModes['account']  = 'Account';
$lang->guarder->blacklistModes['keywords'] = 'Keyword';
$lang->guarder->blacklistModes['guard']    = 'Website';
$lang->guarder->blacklistModes['email']    = 'Email';

$lang->guarder->whitelist = new stdclass();
$lang->guarder->whitelist->ip            = 'IP whitelist';
$lang->guarder->whitelist->account       = 'Account whitelist';
$lang->guarder->whitelist->accountHolder = 'Multiple accounts, please use comma to separate them, such as zhangsan, lisi';
$lang->guarder->whitelist->ipHolder      = 'Multiple IP, please use comma to separate them, such as 202.194.133.1,202.194.132.0/28';
$lang->guarder->whitelist->wrongIP       = 'IP Error';

$lang->guarder->permanent = 'Permanent';
$lang->guarder->interval  = 'within mins';
$lang->guarder->perDay    = 'exceed per day';
$lang->guarder->exceed    = 'exceed';
$lang->guarder->times     = 'times';
$lang->guarder->disable   = 'Disable';

$lang->guarder->operationList = new stdclass();

$lang->guarder->operationList->ip = new stdclass();
$lang->guarder->operationList->ip->logonFailure    = 'Login failed.';
$lang->guarder->operationList->ip->register        = 'Registration count';
$lang->guarder->operationList->ip->resetPassword   = 'Reset Password';
$lang->guarder->operationList->ip->resetPWDFailure = ' Password reset failed.';
$lang->guarder->operationList->ip->postThread      = 'Post Thread';
$lang->guarder->operationList->ip->postComment     = 'Post Comment';
$lang->guarder->operationList->ip->postReply       = 'Post Reply';
$lang->guarder->operationList->ip->post            = 'Post Request';
$lang->guarder->operationList->ip->search          = 'Search Times';
$lang->guarder->operationList->ip->error404        = 'Error 404';
$lang->guarder->operationList->ip->captchaFail     = 'Verification Error';

$lang->guarder->operationList->account = new stdclass();
$lang->guarder->operationList->account->logonFailure    = 'Login failed.';
$lang->guarder->operationList->account->resetPassword   = 'Reset Password';
$lang->guarder->operationList->account->resetPWDFailure = ' Password reset failed.';
$lang->guarder->operationList->account->postThread      = 'Post Thread';
$lang->guarder->operationList->account->postComment     = 'Post Comment';
$lang->guarder->operationList->account->postReply       = 'Post Reply;
$lang->guarder->operationList->account->post            = 'Post Request';
$lang->guarder->operationList->account->search          = 'Search Times';
$lang->guarder->operationList->account->error404        = 'Error 404';
$lang->guarder->operationList->account->captchaFail     = 'Verification Error';

$lang->guarder->punishOptions = array();
$lang->guarder->punishOptions[5]     = '5 mins'; 
$lang->guarder->punishOptions[10]    = '10 mins'; 
$lang->guarder->punishOptions[30]    = '30 mins'; 
$lang->guarder->punishOptions[60]    = '1 hour'; 
$lang->guarder->punishOptions[720]   = '12 hours'; 
$lang->guarder->punishOptions[1440]  = '24 hours'; 
$lang->guarder->punishOptions[10080] = '1 week'; 
$lang->guarder->punishOptions[43200] = '1 month'; 
$lang->guarder->punishOptions[0]     = 'Permanent'; 

$lang->blacklist = new stdclass();
$lang->blacklist->type        = 'Type';
$lang->blacklist->title       = 'Title';
$lang->blacklist->identity    = 'Content';
$lang->blacklist->reason      = 'Reason';
$lang->blacklist->expiredDate = 'Expire Time';
$lang->blacklist->ip          = 'IP';
$lang->blacklist->keywords    = 'Keyword';
$lang->blacklist->account     = 'Account';
$lang->blacklist->email       = 'Email';
$lang->blacklist->other       = 'Other';
/* index */
$lang->index->common  = 'Homepage';
$lang->index->index   = 'Home';
$lang->index->aboutus = 'About Us';
$lang->index->news    = 'Latest Feed';
$lang->index->blog    = 'Latest Blog';
$lang->index->contact = 'Contact Us';
/* install */
$lang->install->common  = 'Install';
$lang->install->next    = 'Next';
$lang->install->pre     = 'Back';
$lang->install->reload  = 'Refresh';
$lang->install->error   = 'Error';

$lang->install->start            = 'Install';
$lang->install->keepInstalling   = 'Continue installation';
$lang->install->welcome          = 'Thank you for choosing Changer CMS!';
$lang->install->license          = 'License';
$lang->install->desc             = <<<EOT
<p>With Changer, you can </p>
<blockquote>
  <ul>
    <li><strong>Brand promotion</strong>：build official website and show corporate image.</li>
    <li><strong>Marketing</strong>：SEO, email, text message, etc.</li>
    <li><strong>E-commerce</strong>：product demonstration and online sales.</li>
    <li><strong>CRM</strong>：aftersales support and maintain clients.</li>
  </ul>
</blockquote>
EOT;

$lang->install->newVersion = "Note: Changer has released <span id='version'></span> on <span id='releaseDate'></span>.<a href='' target='_blank' id='upgradeLink'>Download Now!</a>";

$lang->install->choice     = 'You can choose';
$lang->install->checking   = 'System Checkup';
$lang->install->ok         = 'Pass(√)';
$lang->install->fail       = 'Failed(×)';
$lang->install->loaded     = 'Loaded';
$lang->install->unloaded   = 'Not Loaded';
$lang->install->exists     = 'Directory exists. ';
$lang->install->notExists  = 'Directory does not exist. ';
$lang->install->writable   = 'Directory Writable ';
$lang->install->notWritable= 'Directory not Writable ';
$lang->install->phpINI     = 'PHP .ini file';
$lang->install->checkItem  = 'Check Item';
$lang->install->current    = 'Current Config';
$lang->install->result     = 'Check Result';
$lang->install->action     = 'Modification';

$lang->install->phpVersion = 'PHP version';
$lang->install->phpFail    = 'PHP version is 5.2.0+';

$lang->install->pdo          = 'PDO Extension';
$lang->install->pdoFail      = 'Change PHP .ini file and load PDO extension.';
$lang->install->pdoMySQL     = 'PDO_MySQL Extension';
$lang->install->pdoMySQLFail = 'Change PHP .ini file and load pdo_mysql extension.';
$lang->install->tmpRoot      = 'Temporary File Root';
$lang->install->dataRoot     = 'Upload File Root';
$lang->install->mkdir        = '<p>Directory %s has to be created. Use Linux command line is <br /> <code>mkdir -p %s</code></p>.';
$lang->install->chmod        = 'Permission of Directory "%s" has to be modified. Use Linux command line is <br /><code>chmod o=rwx -R %s</code>.';

$lang->install->settingDB      = 'Database Settings';
$lang->install->dbHost         = 'Database Host';
$lang->install->dbHostNote     = 'If you have no access to 127.0.0.1, please try localhost.';
$lang->install->dbPort         = 'Daatabase Port';
$lang->install->dbUser         = 'Database User';
$lang->install->dbPassword     = 'Database Password';
$lang->install->dbName         = 'Database Name';
$lang->install->dbPrefix       = 'Databse Prefix';
$lang->install->createDB       = 'Auto Create Database';
$lang->install->clearDB        = 'Clear Changer data';
$lang->install->importDemoData = 'Import demo data';

$lang->install->errorDBName        = "No '.' in databse name.";
$lang->install->errorConnectDB     = 'Database connection failed. ';
$lang->install->errorCreateDB      = 'Database creation failed.';
$lang->install->errorDBExists      = 'Database existed. Go back and Clear Data before try it again.';
$lang->install->errorCreateTable   = 'Table creation failed.';

$lang->install->setConfig  = 'Database Config';
$lang->install->key        = 'Config Key';
$lang->install->value      = 'Value';
$lang->install->saveConfig = 'Save Config';
$lang->install->save2File  = '<span class="red">Configuration file is not writable. Failed!</span> Copy the content in text box above and save it to "<strong> %s </strong>".';
$lang->install->saved2File = 'Configuration files has been saved to " <strong>%s</strong> ". You can modify this file later.';
$lang->install->errorNotSaveConfig = 'Configuration is not saved.';

$lang->install->setAdmin = 'Set Admin';
$lang->install->account  = 'Account';
$lang->install->password = 'Password';
$lang->install->errorEmptyPassword = 'Password Required!';

$lang->install->success    = "Installed!";
$lang->install->visitAdmin = 'Admin Login';
/* links */
$lang->links->common  = 'Blogroll';
$lang->links->index   = 'Index Link';
$lang->links->admin   = 'Link Admin';
$lang->links->all     = 'All Links';
/* mail */
$lang->mail->common = 'Email Config';
$lang->mail->index  = 'Home';
$lang->mail->detect = 'Detect';
$lang->mail->edit   = 'Configure';
$lang->mail->save   = 'Save';
$lang->mail->test   = 'Test';
$lang->mail->reset  = 'Reset';

$lang->mail->turnon       = 'On/Off';
$lang->mail->fromAddress  = 'Email Address';
$lang->mail->fromName     = 'Sender';
$lang->mail->mta          = 'MTA';
$lang->mail->host         = 'SMTP Host';
$lang->mail->port         = 'SMTP Port';
$lang->mail->auth         = 'Verification';
$lang->mail->username     = 'SMTP Account';
$lang->mail->password     = 'SMTP Password';
$lang->mail->secure       = 'Encrypt';
$lang->mail->debug        = 'Debug';
$lang->mail->getEmailCode = 'Email Verification Code';

$lang->mail->turnonList[1] = 'On';
$lang->mail->turnonList[0] = 'Off';

$lang->mail->debugList[0] = 'Off';
$lang->mail->debugList[1] = 'Normal';
$lang->mail->debugList[2] = 'High';

$lang->mail->authList[1] = 'Required';
$lang->mail->authList[0] = 'Not Required';

$lang->mail->secureList['']    = 'Not Encrypted';
$lang->mail->secureList['ssl'] = 'ssl';
$lang->mail->secureList['tls'] = 'tls';

$lang->mail->inputFromEmail = 'Enter Sender Email';
$lang->mail->nextStep       = 'Next';
$lang->mail->successSaved   = 'Configuration saved.';
$lang->mail->subject        = 'Testing Email';
$lang->mail->content        = 'Email configured';
$lang->mail->sending        = "Sending an Email to %s. Please wait...";
$lang->mail->successSended  = 'Email has been sent to %s.';
$lang->mail->needConfigure  = 'Eamil configuration is not found. Please configure first.';
$lang->mail->error          = 'Email address error. Please enter your Email address correcrly.'; 
$lang->mail->trySendlater   = 'Try to send it again 3 mins later.'; 

$lang->mail->captcha     = 'Verification Code';
$lang->mail->sendContent = <<<EOT
Hello, %s 
<br />Your <strong>%s</strong>(%s)verification code is %s
<br />Please ignore if you did not request it.
<br />
<br /><strong>%s</strong> is powered by <a href='http://www.chanzhi.org' target='_blank'>Changer CMS</a>.
<br /><a href='http://www.cnezsoft.com' target='_blank'>Nature Easy Soft</a> provide professional management software for you!
EOT;
/* message */
$lang->message->common            = 'Message';
$lang->message->id                = 'ID';
$lang->message->type              = 'Type';
$lang->message->from              = 'From';
$lang->message->content           = 'Content';
$lang->message->phone             = 'Phone';
$lang->message->mobile            = 'Mobile';
$lang->message->qq                = 'QQ';
$lang->message->email             = 'Email';
$lang->message->date              = 'Data';
$lang->message->secret            = 'Admin Only';
$lang->message->readed            = 'Read';
$lang->message->captcha           = 'Verification Code';
$lang->message->list              = 'Message List';
$lang->message->post              = 'Post a Message';
$lang->message->viewArticle       = 'Text';
$lang->message->viewComment       = 'Message';
$lang->message->noSelectedMessage = 'You have not selected any message.';
$lang->message->needCheck         = 'Message will be displayed after review.';
$lang->message->showDetail        = 'Show all';
$lang->message->hideDetail        = 'Hide';

$lang->message->admin          = 'Backend Home';
$lang->message->pass           = 'Pass';
$lang->message->reply          = 'Reply';
$lang->message->view           = 'View';
$lang->message->manage         = 'Message Admin';
$lang->message->delete         = 'Delete';
$lang->message->deleteSelected = 'Delete the selected';
$lang->message->passPre        = 'Pass Previous Messages';
$lang->message->deletePre      = 'Delete Previous Messages';
$lang->message->commentAt      = 'Posted on';
$lang->message->deletedObject  = 'Deleted';
$lang->message->contactHidden  = "Your contact, such as phone and email, can only be seen by Admin.";

$lang->message->confirmDeleteSingle = 'Do you want to delete this message?';
$lang->message->confirmDeletePre    = 'Do you want to delete previous messages?';
$lang->message->confirmPassSingle   = 'Do you want to pass this message? ';
$lang->message->confirmPassPre      = 'Do you want to pass previous messages?';

$lang->message->statusList[0] = 'Not Reviewed';
$lang->message->statusList[1] = 'Reviewed';

$lang->message->readedStatus[0] = 'Unread';
$lang->message->readedStatus[1] = 'Read';

$lang->comment = new stdclass();
$lang->comment->common       = 'Comment';
$lang->comment->id           = 'ID';
$lang->comment->type         = 'Type';
$lang->comment->from         = 'From';
$lang->comment->content      = 'Content';
$lang->comment->phone        = 'Phone';
$lang->comment->mobile       = 'Mobile';
$lang->comment->qq           = 'QQ';
$lang->comment->email        = 'Email';
$lang->comment->captcha      = 'Verification Code';
$lang->comment->list         = 'Comment List';
$lang->comment->post         = 'Post';
$lang->comment->viewArticle  = 'Text';
$lang->comment->viewComment  = 'Comment';
$lang->comment->needCheck    = 'Comment will be displayed once its review is passed.';
$lang->comment->receiveEmail = 'Email notification';

$lang->comment->pass          = 'Pass';
$lang->comment->reply         = 'Reply';
$lang->comment->replyAt       = 'Replied on';
$lang->comment->manage        = 'Comment Admin';
$lang->comment->delete        = 'Delete';
$lang->comment->passPre       = 'Pass Previous Comments';
$lang->comment->deletePre     = 'Delet Previous Comments';
$lang->comment->commentTo     = 'Commented to`';
$lang->comment->commentAt     = 'Commented on';
$lang->comment->deletedObject = 'Deleted Comments';

$lang->comment->confirmDeleteSingle = 'Do you want to delete this comment?';
$lang->comment->confirmDeletePre    = 'Do you want to delete previous comments?';
$lang->comment->confirmPassSingle   = 'Do you want to pass this comment?';
$lang->comment->confirmPassPre      = 'Do you want to pass previous comments? ';

$lang->comment->statusList[0] = 'Not Reviewed';
$lang->comment->statusList[1] = 'Reviewed';

$lang->message->replyItem   = "<dd><strong>%s</strong> replied on <em>%s</em> about %s</dd>";
$lang->comment->replyItem   = "<dd><strong>%s</strong> replied on <em>%s</em> about %s</dd>";
$lang->message->messageItem = "<dd><strong>%s</strong> posted on <em>%s</em> about %s</dd>";

$lang->message->replySubject = 'Admin %s replied.';
/* misc */
if(!isset($lang->misc)) $lang->misc = new stdclass();
$lang->misc->version     = 'Version %s';
$lang->misc->offcialSite = 'Official Website';
$lang->misc->support     = 'Technical Support';
$lang->misc->userbook    = 'User Manual';
$lang->misc->forum       = 'Forum';

$lang->misc->thanksTitle      = 'Changer CMS is built on top of outstanding open source projects.';
$lang->misc->thanksFooter     = 'Thank %s for security audit.';
$lang->misc->thanksObjectName = 'http://www.zzsec.com/';
/* nav */
$lang->nav->common   = 'Naviagtion';
$lang->nav->setNav   = 'Settings';
$lang->nav->add      = 'Add a Navigation';
$lang->nav->addChild = 'Add a SubNav';
$lang->nav->delete   = 'Delete';

$lang->nav->inputUrl        = 'Enter a Link';
$lang->nav->inputTitle      = 'Enter a Title';
$lang->nav->cannotRemoveAll = 'Cannot remove all';

$lang->nav->types['system']  = 'System Module';
$lang->nav->types['article'] = 'Article Category';
$lang->nav->types['blog']    = 'Blog Category';
$lang->nav->types['product'] = 'Product Category';
$lang->nav->types['page']    = 'Page';
$lang->nav->types['custom']  = 'Custom';

$lang->nav->system = new stdclass();
$lang->nav->system->home    = 'Home';
$lang->nav->system->company = 'About Us';
$lang->nav->system->contact = 'Contact Us';
$lang->nav->system->forum   = 'Forum';
$lang->nav->system->blog    = 'Blog';
$lang->nav->system->book    = 'Manual';
$lang->nav->system->message = 'Message';

$lang->nav->desktop        = 'Top';
$lang->nav->desktop_blog   = 'Blog';
$lang->nav->mobile_top     = 'Top';
$lang->nav->mobile_bottom  = 'Bottom';
$lang->nav->mobile_blog    = 'Blog';

$lang->nav->targetList = array();
$lang->nav->targetList['_self']  = 'Active window';
$lang->nav->targetList['_blank'] = 'New window';
$lang->nav->targetList['modal']  = 'Popout window';
/* order */
$lang->order->common  = 'Order';

$lang->order->id             = 'ID';
$lang->order->productInfo    = 'Product info';
$lang->order->account        = 'Account';
$lang->order->address        = 'Shipping Address';
$lang->order->price          = 'Price';
$lang->order->count          = 'Count';
$lang->order->amount         = 'Amount';
$lang->order->sn             = 'TSN';
$lang->order->payStatus      = 'Payment Status';
$lang->order->paidDate       = 'Paid Date';
$lang->order->deliveryStatus = 'Shipment Status';
$lang->order->deliveriedDate = 'Shipping Date';
$lang->order->confirmedDate  = 'Deliver Date';
$lang->order->payment        = 'Check Out';
$lang->order->createdDate    = 'Order Created Date';
$lang->order->express        = 'Express Courier';
$lang->order->waybill        = 'Tracking Number';
$lang->order->expressInfo    = 'Express Info';
$lang->order->receiver       = 'Receiver';
$lang->order->noRecord       = 'N/A';
$lang->order->status         = 'Status';
$lang->order->note           = 'Note';
$lang->order->basic          = 'Basic Info';
$lang->order->info           = 'Order details';
$lang->order->savePay        = 'Payment';

$lang->order->admin          = 'Order';
$lang->order->view           = 'View Details';
$lang->order->setting        = 'System Settings';
$lang->order->browse         = 'My Order';
$lang->order->bought         = 'Purchased';
$lang->order->createdSuccess = 'Order has been created!';
$lang->order->paidSuccess    = 'Thank you for your payment!';
$lang->order->submit         = 'Submit Order';
$lang->order->cancel         = 'Cancel';
$lang->order->pay            = 'Check Out';
$lang->order->goToPay        = 'Order has been made. Please continue your payment.';
$lang->order->return         = 'Collect';
$lang->order->delivery       = 'Ship';
$lang->order->finish         = 'Submit';
$lang->order->confirm        = 'Confirm';
$lang->order->selectProducts = "You have <strong class='text-danger'>%s</strong> in your cart";
$lang->order->totalToPay     = "and your total is <strong id='amount' class='text-danger'>%s</strong>";
$lang->order->payInfo        = "%s %s order";
$lang->order->goToBank       = "Please pay online.";
$lang->order->track          = 'View Shipment';
$lang->order->life           = 'Track your order';
$lang->order->days           = 'Day';
$lang->order->deliveryInfo   = 'View Details';
$lang->order->backToCart     = 'Back to Cart';
$lang->order->paid           = 'Paid Order';
$lang->order->products       = 'Ordered Product';
$lang->order->selectPayment  = 'Choose payment';
$lang->order->settlement     = 'Check Out';
$lang->order->check          = 'Order Settlement';

$lang->order->confirmLimit         = 'Receiving Cyle';
$lang->order->confirmReceived      = 'Receive Order';
$lang->order->deliveryConfirmed    = 'Your order has been received！';
$lang->order->confirmWarning       = "Please confirm after your order has been received!";
$lang->order->cancelWarning        = "Do you want to cancle this order?";
$lang->order->cancelSuccess        = "Order cancelled";
$lang->order->paymentRequired      = 'Choose payment method';
$lang->order->confirmLimitRequired = 'Set receiving cycle';
$lang->order->finishWarning        = "Do you want to submit this order?";
$lang->order->noProducts           = "No product in this order";
$lang->order->lowStocks            = "<strong>%s</strong> is out of stock!";

$lang->order->alipayPid   = 'Partner ID';
$lang->order->alipayKey   = 'Partner KEY';
$lang->order->alipayEmail = 'Alipay Email';
$lang->order->score       = 'Refill Points';

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
$lang->order->statusList['not_paid']  = 'Not Paid';
$lang->order->statusList['paid']      = 'Paid';
$lang->order->statusList['not_send']  = 'To be Shipped';
$lang->order->statusList['send']      = 'Shipped';
$lang->order->statusList['confirmed'] = 'Confirmed';
$lang->order->statusList['Open']    = 'In Process';
$lang->order->statusList['finished']  = 'Finished';
$lang->order->statusList['canceled']  = 'Cancelled';
/* package */
$lang->package->common        = 'Plug-ins';
$lang->package->browse        = 'View Plug-ins';
$lang->package->install       = 'Install';
$lang->package->installAuto   = 'Auto Install';
$lang->package->installForce  = 'Mandatory Install';
$lang->package->uninstall     = 'Uninstal';
$lang->package->activate      = 'Activate';
$lang->package->deactivate    = 'Disable';
$lang->package->obtain        = 'Get Plug-ins';
$lang->package->view          = 'Details';
$lang->package->download      = 'Download';
$lang->package->downloadAB    = 'Download';
$lang->package->upload        = 'Local Install';
$lang->package->erase         = 'Clear';
$lang->package->upgrade       = 'Upgrade';
$lang->package->agreeLicense  = 'I have read and acknowledged the License';
$lang->package->settemplate   = 'Template Settings';
$lang->package->buy           = 'Buy';

$lang->package->structure   = 'Directory Structure';
$lang->package->installed   = 'Installed';
$lang->package->deactivated = 'Deactivated';
$lang->package->available   = 'Available';

$lang->package->id          = 'ID';
$lang->package->name        = 'Title';
$lang->package->code        = 'Plug-in ID';
$lang->package->version     = 'Version';
$lang->package->compatible  = 'Applicable Version';
$lang->package->latest      = '<small>The lasted verion <strong><a href="%s" target="_blank" class="package">%s</a></strong> is compatible with Changer <a href="http://api.chanzhi.org/goto.php?item=latest" target="_blank" class="alert-link"><strong>%s</strong></a></small>';
$lang->package->author      = 'Author';
$lang->package->license     = 'License';
$lang->package->intro       = 'Details';
$lang->package->abstract    = 'Introduction';
$lang->package->site        = 'Official Website';
$lang->package->addedTime   = 'Added On';
$lang->package->updatedTime = 'Last Updated';
$lang->package->downloads   = 'Downloads';
$lang->package->public      = 'Public Download';
$lang->package->compatible  = 'Compatibility';
$lang->package->grade       = 'Rate';
$lang->package->depends     = 'Depedent';

$lang->package->publicList[0] = 'Manual Download';
$lang->package->publicList[1] = 'Auto Download';

$lang->package->compatibleList[0] = 'Unknown';
$lang->package->compatibleList[1] = 'Compatible';

$lang->package->byDownloads   = 'Most Downloaded';
$lang->package->byAddedTime   = 'Latest Added';
$lang->package->byUpdatedTime = 'Last Updated';
$lang->package->bySearch      = 'Search';
$lang->package->byCategory    = 'By Category';
$lang->package->byIndustry    = 'By Industry';
$lang->package->byColor       = 'By Theme';

$lang->package->installFailed            = '%s failed. Error is as below';
$lang->package->uninstallFailed          = 'Uninstal is failed. Error is as below';
$lang->package->confirmUninstall         = 'Uninstal a plug-in will delete/modify related database. Do you want to unistal it?';
$lang->package->noticeBackupDB           = 'Please backup your databse before uninstal!';
$lang->package->installFinished          = 'The plug-in is %sed!';
$lang->package->refreshPage              = 'Refresh';
$lang->package->uninstallFinished        = 'Plug-in has been unistalled.';
$lang->package->deactivateFinished       = 'Plug-in has been deactivated.';
$lang->package->activateFinished         = 'Plug-in has been activated.';
$lang->package->eraseFinished            = 'Plug-in has been cleared.';
$lang->package->unremovedFiles           = 'Some files can not be delteted. Please delete it manually.';
$lang->package->executeCommands          = '<h3> Execute the followings to fix the problem,</h3>';
$lang->package->successDownloadedPackage = 'Plug-in is downloaded.';
$lang->package->successUploadedPackage   = 'Plug-in is uploaded.';
$lang->package->successCopiedFiles       = 'Files is copied.';
$lang->package->successInstallDB         = 'Databse is installed.';
$lang->package->viewInstalled            = 'View installed plug-ins.';
$lang->package->viewAvailable            = 'View available plug-ins';
$lang->package->viewDeactivated          = 'View deactivated plug-ins.';
$lang->package->backDBFile               = 'Relavant plug-in data has been backed up to %s ！';

$lang->package->upgradeExt     = 'Upgrade';
$lang->package->installExt     = 'Install';
$lang->package->upgradeVersion = '(%s has been upgraded to %s)';

$lang->package->types = new stdclass();
$lang->package->types->theme     = 'Theme';
$lang->package->types->extension = 'Plug-ins';
$lang->package->types->ext       = 'Plug-ins';

$lang->package->waring = 'Warning';

$lang->package->errorOccurs                  = 'Error ';
$lang->package->errorGetModules              = 'Get plug-ins from www.chanzhi.org failed. Please check your network and refresh.';
$lang->package->errorGetPackages             = 'Get plug-ins from www.chanzhi.org failed. Please check your network, and go to <a href="http://www.chanzhi.org/extemsion" target="_blank" class="alert-link">www.chanzhi.org</a> to manually download plug-ins to install.';
$lang->package->errorDownloadPathNotFound    = 'Download path <strong>%s</strong> does not exist. <br />Excute <strong>mkdir -p %s</strong> in Linux to correct it.';
$lang->package->errorDownloadPathNotWritable = 'Download path <strong>%s</strong>is not writable. <br />Excute <strong>sudo chmod 777 %s</strong>in Linux to correct it.';
$lang->package->errorPackageFileExists       = 'A file named <strong>%s</strong> exists in this download path. <a href="%s" class="btn btn-primary loadInModal">Redo %s</a>';
$lang->package->errorDownloadFailed          = 'Download failed. Please try it again. If failed again, please download it manually, and upload it to install.';
$lang->package->errorMd5Checking             = 'Download file is incomplete. Please try it again. If failed again, please download it manually, and upload it to install.';
$lang->package->errorExtracted               = 'Unzip <strong> %s </strong> failed. It could be an invalid zip file. Error info <br />%s';
$lang->package->errorCheckIncompatible       = 'It is not compatible with Changer CMS. After %sed, it might be inapplicable. <h3>You can <a href="%s" class="loadInModal">force %s</a> or <a href="#" onclick=parent.location.href="%s"> cancel it.</a></h3>';
$lang->package->errorFileConflicted          = 'It is conflicted with <br />%s. <h3>You can <a href="%s">override</a> or <a href="#" onclick=parent.location.href="%s">cancel it.</a></h3>';
$lang->package->errorPackageNotFound         = ' <strong>%s </strong> is not found. It could be auto downloading failure. Please try it again.';
$lang->package->errorTargetPathNotWritable   = 'Path <strong>%s </strong>is not writable.';
$lang->package->errorTargetPathNotExists     = 'Path <strong>%s </strong>does not exist.';
$lang->package->errorInstallDB               = 'Databse statement execution failed. Error info is %s';
$lang->package->errorConflicts               = 'Conflicted with “%s”!';
$lang->package->errorDepends                 = 'Dependent plug-in<br /><br /> %s is not installed or its version is incompatible.';
$lang->package->errorIncompatible            = 'This plug-in is incompatible with Changer.';
$lang->package->errorUninstallDepends        = '“%s” is dependent on this plug-in. Do not uninstall it.';

$lang->theme->common = 'Theme';
/* product */
$lang->product->common = 'Product';
$lang->product->home   = 'Product Center';

$lang->product->id         = 'ID';
$lang->product->category   = 'Category';
$lang->product->categories = 'Category';
$lang->product->name       = 'Title';
$lang->product->alias      = 'Alias';
$lang->product->mall       = 'Purchase Link';
$lang->product->buyNow     = 'Buy Now';
$lang->product->brand      = 'Brand';
$lang->product->model      = 'Model';
$lang->product->color      = 'Color';
$lang->product->origin     = 'Origin';
$lang->product->unit       = 'Unit';
$lang->product->price      = 'Price';
$lang->product->promotion  = 'On Sale';
$lang->product->amount     = 'Count';
$lang->product->keywords   = 'Keyword';
$lang->product->desc       = 'Decription';
$lang->product->content    = 'Details';
$lang->product->author     = 'Author';
$lang->product->editor     = 'Edit';
$lang->product->addedDate  = 'Added On';
$lang->product->editedDate = 'Edited On';
$lang->product->status     = 'Status';
$lang->product->views      = 'View';
$lang->product->viewsCount = 'View Count';
$lang->product->stick      = 'Stick Level';
$lang->product->order      = 'Sort';
$lang->product->unsaleable = 'Not for sale';
$lang->product->attribute  = 'Attribution';
$lang->product->custom     = 'Custom';
$lang->product->sales      = 'Price';
$lang->product->css        = 'CSS';
$lang->product->js         = 'JS';

$lang->product->currency = 'Curremcy';
$lang->product->stock    = 'Inventory';

$lang->product->list         = 'Product List';
$lang->product->hot          = 'Hot Product';
$lang->product->admin        = 'Product Admin';
$lang->product->create       = 'Add';
$lang->product->edit         = 'Edit';
$lang->product->changeStatus = 'Product Status';
$lang->product->setcss       = 'CSS Settings';
$lang->product->setjs        = 'JS Settings';
$lang->product->files        = 'Attachment';
$lang->product->images       = 'Image';
$lang->product->addToCart    = "<i class='icon icon-shopping-cart'></i> Add to cart";
$lang->product->count        = 'Count';
$lang->product->comments     = 'Comment';
$lang->product->detail       = 'View Details';
$lang->product->setting      = 'Settings';
$lang->product->soldout      = 'Soldout';
$lang->product->layout       = 'Layout';

$lang->product->congratulations  = "Congrats";
$lang->product->addToCartSuccess = "Added to your cart!";
$lang->product->gotoCart         = "Check out";
$lang->product->goback           = "Back";

$lang->product->confirmDelete = 'Do you want to delete it?';

$lang->product->prev      = 'Previous';
$lang->product->next      = 'Next';
$lang->product->none      = 'The End';
$lang->product->directory = 'Back to Directory';
$lang->product->noCssTag  = 'No &lt;style&gt;&lt;/style&gt; Tag';
$lang->product->noJsTag   = 'No &lt;script&gt;&lt;/script&gt; Tag';

$lang->product->statusList['Open']  = 'On the Shelf';
$lang->product->statusList['offline'] = 'Off the Shelf';

$lang->product->placeholder = new stdclass();
$lang->product->placeholder->label    = "Attribute Label, such as color,";
$lang->product->placeholder->value    = "Attribute Value, such as red.";
$lang->product->placeholder->currency = "Please enter currency symbol, such as ￥";

$lang->product->listMode = new stdclass();
$lang->product->listMode->card  = "<i class='icon icon-th-large'></i>";
$lang->product->listMode->list  = "<i class='icon icon-list'></i>";

$lang->product->currencyList['rmb']  = 'RMB';
$lang->product->currencyList['usd']  = 'USD';
$lang->product->currencyList['hkd']  = 'HKD';
$lang->product->currencyList['twd']  = 'TWD';
$lang->product->currencyList['euro'] = 'EURO';
$lang->product->currencyList['dem']  = 'DEM';
$lang->product->currencyList['chf']  = 'CHF';
$lang->product->currencyList['frf']  = 'FRF';
$lang->product->currencyList['gbp']  = 'GBP';
$lang->product->currencyList['nlg']  = 'NLG';
$lang->product->currencyList['cad']  = 'CAD';
$lang->product->currencyList['sur']  = 'SUR';
$lang->product->currencyList['inr']  = 'INR';
$lang->product->currencyList['aud']  = 'AUD';
$lang->product->currencyList['nzd']  = 'NZD';
$lang->product->currencyList['thb']  = 'THB';
$lang->product->currencyList['sgd']  = 'SGD';

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
$lang->product->stockOptions[0] = 'Close';
$lang->product->stockOptions[1] = 'Start';
/* reply */
$lang->reply = new stdclass();
$lang->reply->common    = 'Reply';
$lang->reply->id        = 'ID';
$lang->reply->list      = 'List';
$lang->reply->content   = 'Content';
$lang->reply->author    = 'Author';
$lang->reply->files     = 'File：';
$lang->reply->addedDate = 'Replied On';
$lang->reply->admin     = 'Reply Admin';
$lang->reply->sofa      = '沙发';
$lang->reply->stool     = '板凳';

$lang->reply->edit       = 'Edit';
$lang->reply->deleteFile = 'Delete File';
/* score */
$lang->score->back        = 'Back';
$lang->score->rankingList = 'Point Ranking';
$lang->score->rule        = 'Point Rules';

$lang->score->id      = 'ID';
$lang->score->account = 'Account';
$lang->score->method  = 'Method';
$lang->score->type    = 'Type';
$lang->score->count   = 'Count';
$lang->score->before  = 'Before';
$lang->score->after   = 'After';
$lang->score->amount  = 'Price';
$lang->score->note    = 'Note';
$lang->score->time    = 'Date';
$lang->score->product = 'Product';
$lang->score->confirm = 'Confirm Order';
$lang->score->details = 'Point Details';

$lang->score->setCounts = 'Point Rules';

$lang->score->totalRank = 'Universal Ranking';
$lang->score->rank      = 'Ranking';
$lang->score->username  = 'User Name';
$lang->score->monthRank = 'Monthly Ranking';
$lang->score->weekRank  = 'Weekly Ranking';
$lang->score->dayRank   = 'Daily Ranking';

$lang->score->methods['register'] = 'Register';
$lang->score->methods['login']    = 'Login';
$lang->score->methods['maxLogin'] = 'Max Login Point';
$lang->score->methods['download'] = 'Download';

$lang->score->methods['thread']      = 'Post';
$lang->score->methods['reply']       = 'Reply';
$lang->score->methods['valuethread'] = 'Reward Thread';
$lang->score->methods['valuereply']  = 'Reward Reply';
$lang->score->methods['delThread']   = 'Delte Thread';
$lang->score->methods['delReply']    = 'Delete Reply';
$lang->score->methods['award']       = 'Reward Points';
$lang->score->methods['punish']      = 'Deduct Point';

$lang->score->methods['approveSubmittion'] = 'Contributed';

$lang->score->methods['buyscore']  = 'Purchase Points';
$lang->score->methods['statement'] = 'Point Checkout';

$lang->score->methods['vip'] = 'VIP';
$lang->score->methods['co']  = 'Partner';

$lang->score->types['in']    = 'increase';
$lang->score->types['out']   = 'decrease';

$lang->score->getByThread = 'Post threads to get points.'; 
$lang->score->getByReply  = 'Reply to get points.'; 

$lang->score->lblTotal         = "You have used %s points. The ranking points is %s ";
$lang->score->lblNoScore       = "Sorry, your points is insufficient.";
$lang->score->lblNoScoreReason = "Sorry, your points is less than %s. You heed <strong class='red'>%s</strong> Points. You have <strong class='red'>%s</strong> Poins.";
$lang->score->lblDetail        = "Please refer to<a href='http://www.zentao.net/thread-view-79915.html' target='_blank'>《如何获得积分》</a><br /><br />";
$lang->score->lblBuySocre      = "Purchase Points %s";

$lang->score->setAmount   = 'Refill Amount';
$lang->score->getScore    = 'Get Points';
$lang->score->amountUnit  = 'Yuan';
$lang->score->minAmount   = 'Min ';
$lang->score->buyWaring   = "Min refill is %s Yuan，1 Yuan=%s Points";
$lang->score->errorAmount = "Refill amount should be more than %s Yuan.";
$lang->score->alipay      = "Use AliPay right now!";
$lang->score->paySuccess  = 'Thank you for your payment!';
$lang->score->payFail     = 'Sorry, there is problem with your payment. Contact us if any questions.';
$lang->score->viewHistory = 'Payment History';
/* search */
$lang->search->common     = 'Search';
$lang->search->index      = 'Result';
$lang->search->buildIndex = 'Update Index';

$lang->search->buildSuccessfully = 'Index updated!';
$lang->search->executeInfo       = 'Found %s results ( %s seconds)';
$lang->search->buildResult       = "Created! Added <span class='text-success'> %s </span> records";
/* site */
$lang->site->common        = "Site";

$lang->site->type            = 'Site Type';
$lang->site->requestType     = 'Request Type';
$lang->site->status          = 'Site Status';
$lang->site->pauseTip        = 'Pause Tip';
$lang->site->name            = 'Site Name';
$lang->site->module          = 'Modules';
$lang->site->lang            = 'Site Language';
$lang->site->defaultLang     = 'Default Language';
$lang->site->domain          = 'Domain';
$lang->site->allowedDomain   = 'Allowed Domain';
$lang->site->keywords        = 'Keyword';
$lang->site->indexKeywords   = 'Index Keyword';
$lang->site->meta            = 'Meta Tag';
$lang->site->desc            = 'Site Description';
$lang->site->icpSN           = 'ICP SN';
$lang->site->icpLink         = 'icp Link';
$lang->site->policeSN        = '公安部备案编号';
$lang->site->policeLink      = '备案链接';
$lang->site->slogan          = 'Slogan';
$lang->site->mission         = 'Site Mission';
$lang->site->copyright       = 'Created Date';
$lang->site->allowUpload     = 'Upload File ';
$lang->site->allowedFiles    = 'File Type';
$lang->site->setImageSize    = 'Thumbnail Size';
$lang->site->captcha         = 'Frontend List';
$lang->site->mailCaptcha     = 'Email Verification Code';
$lang->site->twContent       = '繁体内容';
$lang->site->cn2tw           = '自动从简体版复制';
$lang->site->cdn             = 'CDN Address';
$lang->site->sensitive       = 'Sensitive Word';
$lang->site->scheme          = 'Default Protocol';
$lang->site->saveDays        = 'Keep Log';
$lang->site->openCache       = 'Cache On';
$lang->site->cachePage       = 'Cache Page';
$lang->site->cacheExpired    = 'Cache Expiration';
$lang->site->hour            = 'Hour';
$lang->site->homeMenus       = 'Home Menu';

$lang->site->importantOption  = 'Key Actions';
$lang->site->resetPassword    = 'Reset Password';
$lang->site->checkIP          = 'Chech IP Whitelist';
$lang->site->checkLocation    = 'Admin Login Verification';
$lang->site->checkEmail       = 'Email Binding';
$lang->site->filterFunction   = 'Filter';
$lang->site->allowedLocation  = 'Check Login';
$lang->site->checkSessionIP   = 'Check IP';
$lang->site->forceYangcong    = '后台强制洋葱登录';
$lang->site->setsecurity      = 'Security Settings';
$lang->site->setsensitive     = 'Sensitive Word Settins';
$lang->site->filterSensitive  = 'Sensitive Word Filter';
$lang->site->setBlacklist     = 'Blacklist';
$lang->site->mobileTemplate   = 'Mobile Template';
$lang->site->score            = 'Points';
$lang->site->setCounts        = 'Point Rules';
$lang->site->front            = 'View Website';
$lang->site->useCDN           = 'Activate CDN';

$lang->site->setBasic      = "Basic Settings";
$lang->site->setCache      = 'Cache Settings';
$lang->site->setCDN        = "CDN Settings";
$lang->site->setDomain     = "Domain Settings";
$lang->site->setLang       = "Language";
$lang->site->setFilter     = "Filter";
$lang->site->ipFilter      = "IP Filter";
$lang->site->accountFilter = "Account Filter";
$lang->site->setSecurity   = "ecurity Settings";
$lang->site->setUpload     = "Upload File";
$lang->site->setRobots     = "Robots Settings";
$lang->site->setOauth      = "开放登录";
$lang->site->setSinaOauth  = "新浪微博接入";
$lang->site->setYangcong   = "洋葱登录设置";
$lang->site->setQQOauth    = "QQ接入";
$lang->site->oauthHelp     = "Help";
$lang->site->setRecPerPage = "List Settings";
$lang->site->useLocation   = "Use <span>%s</span>";
$lang->site->changeSetting = "Change Settings";
$lang->site->setStat       = "Traffic Statistics";
$lang->site->setHomeMenu   = "Home Menua";

$lang->site->typeList = new stdclass();
$lang->site->typeList->portal = 'Enterprise Portal';
$lang->site->typeList->blog   = 'Private Blog';

$lang->site->requestTypeList = array();
$lang->site->requestTypeList['GET']        = 'GET';
$lang->site->requestTypeList['PATH_INFO']  = 'PATH_INFO';
$lang->site->requestTypeList['PATH_INFO2'] = 'PATH_INFO2';

$lang->site->statusList = new stdclass();
$lang->site->statusList->normal = 'Normal';
$lang->site->statusList->pause  = 'Pause';

$lang->site->resetPasswordList = array();
$lang->site->resetPasswordList['open']  = 'On';
$lang->site->resetPasswordList['close'] = 'Off';

$lang->site->forceYangcongList = array();
$lang->site->forceYangcongList['open']  = 'On';
$lang->site->forceYangcongList['close'] = 'Off';

$lang->site->checkIPList = array();
$lang->site->checkIPList['open']  = 'On';
$lang->site->checkIPList['close'] = 'Off';

$lang->site->filterSensitiveList = array();
$lang->site->filterSensitiveList['open']  = 'On';
$lang->site->filterSensitiveList['close'] = 'Off';

$lang->site->checkLocationList = array();
$lang->site->checkLocationList['open']  = 'On';
$lang->site->checkLocationList['close'] = 'Off';

$lang->site->checkEmailList = array();
$lang->site->checkEmailList['open']  = 'On';
$lang->site->checkEmailList['close'] = 'Off';

$lang->site->sessionIpoptions = array();
$lang->site->sessionIpoptions[1] = 'Check';
$lang->site->sessionIpoptions[0] = 'Do not Check';

$lang->site->imageSize['s'] = 'small';
$lang->site->imageSize['m'] = 'medium';
$lang->site->imageSize['l'] = 'large';

$lang->site->image['width']  = 'Width';
$lang->site->image['height'] = 'Height';

$lang->site->captchaList = array();
$lang->site->captchaList['open']  = 'Always send verification code';
$lang->site->captchaList['auto']  = 'Activate verification if any sensitive words.';
$lang->site->captchaList['close'] = 'No verification code';

$lang->site->validateTypes = new stdclass();
$lang->site->validateTypes->okFile      = 'File verification';
$lang->site->validateTypes->email       = 'Email verification';
$lang->site->validateTypes->setSecurity = 'Security questions';

$lang->site->schemeList = array();
$lang->site->schemeList['http']  = 'http';
$lang->site->schemeList['https'] = 'https';

$lang->site->frontList = array();
$lang->site->frontList['login'] = 'Please login';
$lang->site->frontList['guest'] = 'Guest login';

$lang->site->mobileTemplateList['open']  = 'On';
$lang->site->mobileTemplateList['close'] = 'Off';

$lang->site->scoreList['open']  = 'On';
$lang->site->scoreList['close'] = 'Off';

$lang->site->cdnList['open']  = 'On';
$lang->site->cdnList['close'] = 'Off';

$lang->site->cacheTypes['close'] = 'Off';
$lang->site->cacheTypes['file']  = 'On';

$lang->site->cachePageOptions['close'] = 'Off';
$lang->site->cachePageOptions['open']  = 'On';

$lang->site->filterFunctionList['open']  = 'On';
$lang->site->filterFunctionList['close'] = 'Off';

$lang->site->moduleAvailable = array();
$lang->site->moduleAvailable['user']       = 'User';
$lang->site->moduleAvailable['article']    = 'Article';
$lang->site->moduleAvailable['blog']       = 'Blog';
$lang->site->moduleAvailable['product']    = 'Product';
$lang->site->moduleAvailable['book']       = 'Manual';
$lang->site->moduleAvailable['page']       = 'Page';
$lang->site->moduleAvailable['forum']      = 'Forum';
$lang->site->moduleAvailable['message']    = 'Message';
$lang->site->moduleAvailable['search']     = 'Search';
$lang->site->moduleAvailable['shop']       = 'Mall';
$lang->site->moduleAvailable['score']      = 'Points';
$lang->site->moduleAvailable['stat']       = 'Statistics';
$lang->site->moduleAvailable['submittion'] = 'Contribute';

$lang->site->metaHolder       = 'Tag <meta><script><style> and <link> applicable';
$lang->site->fileAllowedRole  = 'Use "," as place holder';
$lang->site->domainTip        = 'All visits will jump to this domain. Please ensure domain analysis is correct. Leave it blank if no jump is wanted.';
$lang->site->allowedDomainTip = "Only visits from certain domain is allowed. Use comma to separate more domains. Leave it blank if no restriction on IP.";
$lang->site->allowedIPTip     = 'Use comma to separate IPs such as 202.194.133.1,202.194.132.0/28. Leave it blank if no restriction on IP.';
$lang->site->wrongAllowedIP   = 'IP Error';
$lang->site->changeLocation   = 'Your login location is not allowed.';
$lang->site->sessionIpTip     = 'Once activated，auto logout is performed if IP changed.';
$lang->site->schemeTip        = 'All visits will jump to default access protocol.';
$lang->site->saveDaysTip      = 'Number of days that login log will be kept should be >0.';
$lang->site->yangcongTip      = '开启强制洋葱登录后，您可以通过设置密保问题开启密保登录作为备用。';
$lang->site->closeScoreTip    = 'Once points deactivated, no more points will be recorded and users can keep their points.';
$lang->site->cdnFileLost      = 'The followings can not be accessed';
$lang->site->useDefaultCdn    = 'Use default address';
$lang->site->defaultTip       = 'Website in maintenance……';
$lang->site->icpTip           = 'Mainland China Only';
$lang->site->requestTypeTip   = 'Choose PATH_INFO for SEO.';

$lang->site->robots            = 'Robots';
$lang->site->robotsUnwriteable = 'Robots %s is not writable. Please update your permissions.';
$lang->site->reloadForRobots   = 'Refresh';

$lang->site->customizableList = new stdclass();
$lang->site->customizableList->article = 'Article List Count';
$lang->site->customizableList->product = 'Product List Count';
$lang->site->customizableList->blog    = 'Blog List Count';
$lang->site->customizableList->forum   = 'Forum List Count';
$lang->site->customizableList->reply   = 'Reply List Count';
$lang->site->customizableList->message = 'Message List Count';
$lang->site->customizableList->comment = 'Comment List Count';

$lang->site->yangcong = new stdclass();
$lang->site->yangcong->appID = 'APP ID';
$lang->site->yangcong->key   = 'APP KEY';
$lang->site->yangcong->auth  = 'Auth ID';

$lang->site->api = new stdclass();
$lang->site->api->common = 'Integration';
$lang->site->api->key    = 'Key';
$lang->site->api->ip     = 'IP List';
$lang->site->api->allip  = 'No Restriction';
$lang->site->api->ipTip  = 'Use comma to separate IPs allowed to visit. Ip segment is OK, such as 192.168.1.*';

$lang->site->menus = array();
$lang->site->menus['order']      = 'Order';
$lang->site->menus['message']    = 'Message';
$lang->site->menus['comment']    = 'Comment';
$lang->site->menus['reply']      = 'Reply';
$lang->site->menus['thread']     = 'Theme';
$lang->site->menus['forumreply'] = 'Reply';
$lang->site->menus['article']    = 'Article';
$lang->site->menus['page']       = 'Page';
$lang->site->menus['blog']       = 'Blog';
$lang->site->menus['book']       = 'Manual';
$lang->site->menus['submittion'] = 'Contribute';
$lang->site->menus['product']    = 'Product';
$lang->site->menus['user']       = 'User';
$lang->site->menus['wechat']     = 'Wechat';
$lang->site->menus['stat']       = 'Statistics';
$lang->site->menus['tag']        = 'Keyword';
$lang->site->menus['links']      = 'Links';
$lang->site->menus['site']       = 'Site';
$lang->site->menus['security']   = 'Security';
/* sitemap */
$lang->sitemap->productCategory = 'Product Category';
$lang->sitemap->articleCategory = 'Article Category';
$lang->sitemap->blogCategory    = 'Blog Category';
$lang->sitemap->boards          = 'Board';
$lang->sitemap->books           = 'Manual';
$lang->sitemap->pages           = 'Page';
$lang->sitemap->xmlVersion      = 'Visit XML';
/* slide */
$lang->slide->common     = 'Slide';
$lang->slide->group      = 'Category';
$lang->slide->title      = 'Title';
$lang->slide->groupName  = 'Group Name';
$lang->slide->titleColor = 'Title Name';
$lang->slide->image      = 'Image';
$lang->slide->mainLink   = 'Link';
$lang->slide->summary    = 'Summary';
$lang->slide->label      = 'Label';
$lang->slide->button     = 'Button';
$lang->slide->newWindow  = 'New Window';
$lang->slide->upload     = 'Upload';

$lang->slide->background = new stdclass();

$lang->slide->background->type  = 'Background';
$lang->slide->background->image = 'Image';
$lang->slide->background->color = 'Color';

$lang->slide->background->typeList = new stdclass();

$lang->slide->background->typeList->image = 'Image';
$lang->slide->background->typeList->color = 'Color';

$lang->slide->height      = 'Height';
$lang->slide->url         = 'URL';
$lang->slide->buttonUrl   = 'Button URL';
$lang->slide->buttonColor = 'Color';
$lang->slide->sourceImage = 'Source Image';

$lang->slide->sort        = 'Sort';
$lang->slide->admin       = 'Slide Settings';
$lang->slide->browse      = 'View Slides';
$lang->slide->create      = 'Add a Slide';
$lang->slide->edit        = 'Edit a Slide';
$lang->slide->createGroup = 'Add a Group';
$lang->slide->editGroup   = 'Edit a Group';
$lang->slide->removeGroup = 'Delete a Group';
$lang->slide->return      = 'Back to List';
$lang->slide->rename      = 'Rename';
$lang->slide->removeGroup = 'Delete a Group';

$lang->slide->successSort     = 'Sorting Saved!';
$lang->slide->noImageSelected = 'Choose an Image';
$lang->slide->suitableSize    = 'Image size should be the same.';
$lang->slide->noChange        = 'No Change.';
$lang->slide->groupNotEmpty   = 'Group name should not be blank.';

$lang->slide->defaultGroup = 'Default Group';

$lang->slide->target = new stdclass();
$lang->slide->target->_blank = 'New Window';

$lang->slide->globalButton = array();
$lang->slide->globalButton[1] = 'Global Button';
/* stat */
$lang->stat->common        = 'Statistics';
$lang->stat->setting       = 'Settings';
$lang->stat->view          = 'View';
$lang->stat->traffic       = 'Traffic Summary';
$lang->stat->report        = 'Report';
$lang->stat->client        = 'Client';
$lang->stat->device        = 'Device Type';
$lang->stat->os            = 'Operating System';
$lang->stat->browser       = 'User Browser';
$lang->stat->from          = 'Source Stats';
$lang->stat->keywords      = 'Keyword Stats';
$lang->stat->keyword       = 'Keyword';
$lang->stat->outSite       = 'Site Stats';
$lang->stat->search        = 'Search';
$lang->stat->domain        = 'Doamin';
$lang->stat->click         = 'Click Ranking';
$lang->stat->link          = 'Links';
$lang->stat->today         = 'Today';
$lang->stat->yestoday      = 'Yesterday';
$lang->stat->pv            = 'Page Visit';
$lang->stat->uv            = 'User Visit';
$lang->stat->ipCount       = 'IP Count';
$lang->stat->totalPV       = 'Total PVs';
$lang->stat->searchEngine  = 'Sear Engine';
$lang->stat->keywordReport = 'Keyword Stats';
$lang->stat->domainList    = 'Domian List';
$lang->stat->domainTrend   = 'Domain Trend';
$lang->stat->domainPage    = 'Domain Page';
$lang->stat->percentage    = 'Percentage';
$lang->stat->ignoreKeyword = 'Ignore Keyword';
$lang->stat->keywordNotice = 'Google and Bidu has deactivated keyword display of source links, so keyword statistics is not available.';

$lang->stat->all   = 'All';
$lang->stat->begin = 'Start Date';
$lang->stat->end   = 'End Data';
$lang->stat->date  = 'Date';

$lang->stat->noData    = 'No data';
$lang->stat->dateError = 'Date Error';

$lang->stat->itemList = new stdclass();
$lang->stat->itemList->self    = 'Direct Access';
$lang->stat->itemList->out     = 'External Link Access';
$lang->stat->itemList->search  = 'Search';
$lang->stat->itemList->desktop = 'Desktop';
$lang->stat->itemList->mobile  = 'Mobile';

$lang->stat->trafficModes = new stdclass();
$lang->stat->trafficModes->yestoday = 'Yesterday';
$lang->stat->trafficModes->today    = 'Today';
$lang->stat->trafficModes->weekly   = 'Last 7 Days';
$lang->stat->trafficModes->monthly  = 'Last 30 Days';

$lang->stat->fromList = new stdclass();
$lang->stat->fromList->self   = 'Direct Access';
$lang->stat->fromList->out    = 'External Link Access';
$lang->stat->fromList->search = 'Search';

$lang->stat->dataTypes = new stdclass();
$lang->stat->dataTypes->pv = 'Page Visit';
$lang->stat->dataTypes->uv = 'User Visit';
$lang->stat->dataTypes->ip = 'IP Count';

$lang->stat->page = new stdclass();
$lang->stat->page->common = 'Page Visits';
$lang->stat->page->url    = 'Page URL';
/* tag */
$lang->tag->common = 'Keyword';
$lang->tag->rank   = 'Ranking';
$lang->tag->link   = 'Links';

$lang->tag->admin     = 'Keyword Admin';
$lang->tag->editLink  = 'Edit a Link';
$lang->tag->source    = 'Source';
$lang->tag->inputLink = 'Enter a Link';
$lang->tag->inputTag  = 'Enter a Keyword';
$lang->tag->search    = 'Search';

$lang->tag->sourceList['article']  = 'Article';
$lang->tag->sourceList['blog']     = 'Blog';
$lang->tag->sourceList['page']     = 'Page';
$lang->tag->sourceList['product']  = 'Product';
$lang->tag->sourceList['book']     = 'Manual';
$lang->tag->sourceList['category'] = 'Category';
$lang->tag->sourceList['board']    = 'Board';
/* thread */
$lang->thread->common    = 'Theme';

$lang->thread->id          = 'ID';
$lang->thread->title       = 'Title';
$lang->thread->board       = 'Board';
$lang->thread->author      = 'Author';
$lang->thread->content     = 'Content';
$lang->thread->file        = 'File: ';
$lang->thread->postedDate  = 'Posted on';
$lang->thread->replies     = 'Reply';
$lang->thread->views       = 'View';
$lang->thread->lastReply   = 'Last Reply';
$lang->thread->isLink      = 'Jump';
$lang->thread->link        = 'Link';

$lang->thread->post           = 'Post';
$lang->thread->postTo         = 'Post to';
$lang->thread->browse         = 'Thread List';
$lang->thread->stick          = 'Stick to Top';
$lang->thread->edit           = 'Edit s Thread';
$lang->thread->status         = 'Status';
$lang->thread->approve        = 'Pass';
$lang->thread->display        = 'Dispaly';
$lang->thread->hide           = 'Hide';
$lang->thread->show           = 'Show';
$lang->thread->transfer       = 'Transfer';
$lang->thread->switchStatus   = 'Hide/Display';
$lang->thread->deleteFile     = 'Delete File';
$lang->thread->unreplied      = "<span class='text-important'> Not Replied</span>";

$lang->thread->sticks[0] = 'Do not stick';
$lang->thread->sticks[1] = 'Stick to he Top of the Board';
$lang->thread->sticks[2] = 'Stick to the Top Globally';

$lang->thread->displayList['hidden'] = 'Hidden';
$lang->thread->displayList['Open'] = 'Normal';

$lang->thread->statusList['wait']     = 'Not Reviewed';
$lang->thread->statusList['approved'] = 'Approved';

$lang->thread->confirmDeleteThread = "Do you want to delete it?";
$lang->thread->confirmHideReply    = "Do you want to hide it?";
$lang->thread->confirmHideThread   = "Do you want to hide it?";
$lang->thread->confirmDeleteReply  = "Do you want to delete it?";
$lang->thread->confirmDeleteFile   = "Do you want to delete it?";

$lang->thread->lblEdited       = 'Last edited by %s on %s';
$lang->thread->message         = '%s replied in #%s the thread %s, which is %s';
$lang->thread->readonly        = 'Read Only';
$lang->thread->successStick    = 'Sticked!';
$lang->thread->successUnstick  = 'Cancelled the sticked!';
$lang->thread->successHide     = 'Hidden!';
$lang->thread->successShow     = 'Displayed!';
$lang->thread->readonlyMessage = 'This has been set as <strong>Read Only</strong>. You can not post any replied now.';
$lang->thread->successTransfer = 'Transferred!';
$lang->thread->thanks          = 'It will be posted to the board once approved.';

$lang->thread->score    = 'Reward Points';
$lang->thread->scoreSum = "<i class='text-warning icon icon-plus'><b>%s</b></i> ";
$lang->thread->scores[5]  = '+ 5';
$lang->thread->scores[10] = '+ 10';
$lang->thread->scores[50] = '+ 50';
$lang->thread->scores[100]= '+ 100';

$lang->thread->placeholder = new stdclass();
$lang->thread->placeholder->link = 'Enter a link. External one is OK.';

if(!isset($lang->pager->settedInForum))
{
    $lang->pager->noRecord = '';
    $lang->pager->digest   = str_replace('Record', 'Reply', $lang->pager->digest);
}
/* tree */
$lang->tree->add         = "Add";
$lang->tree->edit        = "Edit";
$lang->tree->addChild    = "Add a Sub";
$lang->tree->delete      = "Delete";
$lang->tree->browse      = "View Category;
$lang->tree->manage      = "Category Admin";
$lang->tree->fix         = "Fix Data";
$lang->tree->children    = "Subcategory";
$lang->tree->layout      = 'Layout';

$lang->tree->common           = 'Category';
$lang->tree->noCategories     = 'Please create a category.';
$lang->tree->timeCountDown    = "<strong id='countDown'>3</strong> seconds later, it will be redirected to Category page.";
$lang->tree->redirect         = 'Redirect Now';
$lang->tree->aliasRepeat      = 'Alias %s is existed. Do not add it again.';
$lang->tree->aliasConflict    = 'Alias %s is conflicted with system module. Do not add it.';
$lang->tree->aliasNumber      = 'Alias cannot be numbers.';
$lang->tree->hasChildren      = 'This board belongs to a sub board. Do not delete it.';
$lang->tree->confirmDelete    = "Do you want to delete this category?";
$lang->tree->successFixed     = "Fixed!";
$lang->tree->browseByCategory = 'View by Category';

$lang->tree->placeholder = new stdclass();
$lang->tree->placeholder->link = 'Enter a link. External one is OK.';

$lang->category = new stdclass();
$lang->category->common     = 'Category';
$lang->category->name       = 'Name';
$lang->category->abbr       = 'Abbreviation';
$lang->category->alias      = 'Alias';
$lang->category->parent     = 'Parent Category';
$lang->category->desc       = 'Description';
$lang->category->keywords   = 'Keyword';
$lang->category->children   = "Child Category";
$lang->category->unsaleable = 'Not for Sale';
$lang->category->isLink     = 'Jump';
$lang->category->link       = 'Link';

$lang->board = new stdclass();
$lang->board->common     = 'Board';
$lang->board->name       = 'Board Name';
$lang->board->abbr       = 'Abbreviation';
$lang->board->alias      = 'Alias';
$lang->board->parent     = 'Parent Board';
$lang->board->desc       = 'Description';
$lang->board->keywords   = 'Keyword';
$lang->board->children   = "Child Board";
$lang->board->readonly   = 'Access Permission';
$lang->board->moderators = 'Moderator';
$lang->board->isLink     = 'Jump';
$lang->board->link       = 'Link';

$lang->board->readonlyList[0] = 'Public';
$lang->board->readonlyList[1] = 'Read Only';

$lang->board->placeholder = new stdclass();
$lang->board->placeholder->moderators  = 'Use comma to separate user names';
$lang->board->placeholder->setChildren = 'Set secondary board to display forum.';

$lang->express = new stdclass();
$lang->express->common = 'Express';
$lang->express->name   = 'Express Name';

$lang->wechatMenu = new stdclass();
$lang->wechatMenu->common     = '公众号菜单';
$lang->wechatMenu->name       = 'Title';
$lang->wechatMenu->parent     = 'Parent Menu';
$lang->wechatMenu->children   = "Child Menu";
$lang->wechatMenu->delete     = "清空微信菜单";
$lang->wechatMenu->commit     = "同步到微信";

$lang->wechatMenu->setResponse = 'Response Settings';
/* ui */
$lang->ui->common = "UI";

$lang->ui->clientDesktop   = 'Desktop';
$lang->ui->clientMobile    = 'Mobile';
$lang->ui->logo            = 'Logo';
$lang->ui->favicon         = 'Favicon';
$lang->ui->setLogo         = "Logo";
$lang->ui->setTemplate     = 'Template Settins';
$lang->ui->manageTemplate  = 'Template Admin';
$lang->ui->manageTheme     = 'Theme Admin';
$lang->ui->installTemplate = 'Import a Template';
$lang->ui->exportTheme     = 'Export a Theme';
$lang->ui->setTheme        = 'Theme Settings';
$lang->ui->setFavicon      = "Favicon Settings";
$lang->ui->deleteFavicon   = "Delete Favicon";
$lang->ui->deleteLogo      = "Delete Logo";
$lang->ui->others          = "Other Settings";
$lang->ui->productView     = "Product Clicks";
$lang->ui->QRCode          = "QR Code";
$lang->ui->execInfo        = "Execution Info";
$lang->ui->templateName    = "Template";
$lang->ui->currentTheme    = 'Current Theme';
$lang->ui->internalTheme   = 'Built-in Theme';
$lang->ui->uploadTheme     = 'Upload a Theme';
$lang->ui->installTheme    = 'Install a Theme';
$lang->ui->importedBlocks  = 'Import a Block';
$lang->ui->matchedBlock    = 'Match a Block';
$lang->ui->createBlock     = 'Add a Block';
$lang->ui->useOldBlock     = 'Use a existing block';
$lang->ui->themeStore      = 'Theme Store';
$lang->ui->help            = "Help";
$lang->ui->deleteLogo      = "Delete Logo";
$lang->ui->setCode         = "Code";
$lang->ui->editTemplate    = "Edit a Template";
$lang->ui->installedThemes = "Installed Themes";
$lang->ui->enableTheme     = "Apply this theme";
$lang->ui->industry        = "Industry";
$lang->ui->offcial         = "Official";
$lang->ui->reset           = "Reset";

$lang->ui->uploadLogo             = "Upload Logo";
$lang->ui->uploadFavicon          = "Upload Favicon";
$lang->ui->noStyleTag             = "Please use CSS code. No &lt;style&gt;&lt;/style&gt; tag";
$lang->ui->noJsTag                = "Please use JS code. No &lt;script&gt;&lt;/script&gt; tag";
$lang->ui->setLogoFailed          = "Logo set failed.";
$lang->ui->noSelectedFile         = "Uploading failed. Image size is off limit.";
$lang->ui->notAlloweFileType      = "Please choose %s file.";
$lang->ui->suitableLogoSize       = 'Height %s, Width %s';
$lang->ui->faviconHelp            = "Please upload .ico file.<a href='%s' target='_blank'>HELP</a>";
$lang->ui->exportedSuccess        = 'Exported!';
$lang->ui->deleteThemeSuccess     = 'Deleted!';
$lang->ui->deleteThemeFail        = 'Failed!';
$lang->ui->fileRequired           = 'Please choose a file.';
$lang->ui->importThemeSuccess     = 'Theme imported!';
$lang->ui->packagePathUnwriteable = 'Upload directory %s is not writable.';
$lang->ui->selectSourceImage      = 'Choose from Source Library';
$lang->ui->rebuildThumbs          = 'Rebuild Thumbnail';

$lang->ui->deviceList = new stdclass();
$lang->ui->deviceList->desktop = "<i class='icon icon-desktop'></i> Desktop";
$lang->ui->deviceList->mobile  = "<i class='icon icon-tablet'></i> Mobile";

$lang->ui->productViewList[1] = 'On'; 
$lang->ui->productViewList[0] = 'Off'; 

$lang->ui->QRCodeList[1] = 'On'; 
$lang->ui->QRCodeList[0] = 'Off'; 

$lang->ui->execInfoOptions['show'] = 'On'; 
$lang->ui->execInfoOptions['hide'] = 'Off';

$lang->ui->logoList['current'] = 'Current Theme';
$lang->ui->logoList['all']     = 'All Themes';

$lang->ui->deleteThemeList['blue']       = 'Default';
$lang->ui->deleteThemeList['brightdark'] = 'Changer's Checks';
$lang->ui->deleteThemeList['flat']       = 'Clear';
$lang->ui->deleteThemeList['tree']       = 'Tree';
$lang->ui->deleteThemeList['colorful']   = 'Colorful';

$lang->ui->template = new stdclass();
$lang->ui->template->name            = 'Title';
$lang->ui->template->code            = 'Code';
$lang->ui->template->version         = 'Version';
$lang->ui->template->author          = 'Author';
$lang->ui->template->charge          = 'Fee';
$lang->ui->template->chanzhiVersion  = 'Compatibility';
$lang->ui->template->desc            = 'Description';
$lang->ui->template->theme           = 'Theme';
$lang->ui->template->license         = 'License';
$lang->ui->template->preview         = 'Preview';
$lang->ui->template->availableThemes = '<strong>%s</strong> themes available.';
$lang->ui->template->currentTheme    = '正在使用 <strong>%s</strong>';
$lang->ui->template->changeTheme     = 'Switch';
$lang->ui->template->apply           = 'Apply';
$lang->ui->template->current         = 'Current';
$lang->ui->template->conflicts       = "Warning! You have a templated named<strong> %s </strong>.";
$lang->ui->template->override        = "Override";
$lang->ui->template->reupload        = "Upload Again";
$lang->ui->template->installSuccess  = 'Congrats! Your template has been uploaded!';
$lang->ui->template->manageTemplate  = 'Template Admin';
$lang->ui->template->manageBlock     = 'Block Admin';
$lang->ui->template->enable          = 'Activate';
$lang->ui->template->reload          = 'Refresh';
$lang->ui->template->doInstall       = 'Confirm Installation';
$lang->ui->template->info            = 'Template Info';
$lang->ui->template->demo            = 'Demo';
$lang->ui->template->qq              = 'QQ';
$lang->ui->template->email           = 'Email';
$lang->ui->template->site            = 'Site';

$lang->ui->appearance  = 'UI';
$lang->ui->custom      = 'Customize';
$lang->ui->themeSaved  = 'Theme saved!';
$lang->ui->unWritable  = "File cannot be created. Please check %s permission.";
$lang->ui->codeHolder  = "Theme ID, a combination of numbers and letter.";

$lang->ui->blocks2Merge  = "Blocks can be merged";
$lang->ui->blocks2Create = "New Block";

$lang->ui->theme = new stdclass();
$lang->ui->theme->reset                                = 'Set as Default';
$lang->ui->theme->online                               = 'Online Themes';
$lang->ui->theme->default                              = 'Default';
$lang->ui->theme->resetTip                             = 'Paramenter has been reset. It will be valid once saved.';
$lang->ui->theme->sizeTip                              = 'Default unit is pixel, e.g. 1px.';
$lang->ui->theme->colorTip                             = ' e.g. red or #FFF';
$lang->ui->theme->positionTip                          = ' e.g. 100px, 50%, left, top, center';
$lang->ui->theme->backImageTip                         = 'Image address, e.g. image.jpg';
$lang->ui->theme->extraStyle                           = 'CSS';
$lang->ui->theme->extraScript                          = 'Javascript';
$lang->ui->theme->customStyleTip                       = 'Less is applicable in style sheet';
$lang->ui->theme->customScriptTip                      = 'jQuery 1.9.0 is included.';

$lang->ui->theme->borderStyleList['none']              = 'No Border';
$lang->ui->theme->borderStyleList['solid']             = 'Solid';
$lang->ui->theme->borderStyleList['dashed']            = 'Dashed';
$lang->ui->theme->borderStyleList['dotted']            = 'Dotted';
$lang->ui->theme->borderStyleList['double']            = 'Double';

$lang->ui->theme->imageRepeatList['repeat']            = 'Default';
$lang->ui->theme->imageRepeatList['repeat']            = 'Repeated';
$lang->ui->theme->imageRepeatList['repeat-x']          = 'X axis repeated';
$lang->ui->theme->imageRepeatList['repeat-y']          = 'Y axis repeated';
$lang->ui->theme->imageRepeatList['no-repeat']         = 'No Repeat';

$lang->ui->theme->fontWeightList['inherit']            = 'Default';
$lang->ui->theme->fontWeightList['Open']             = 'Normal';
$lang->ui->theme->fontWeightList['bold']               = 'Bold';

$lang->ui->theme->fontList['inherit']                  = 'Default';
$lang->ui->theme->fontList['SimSun']                   = '宋体';
$lang->ui->theme->fontList['FangSong']                 = '仿宋';
$lang->ui->theme->fontList['SimHei']                   = '黑体';
$lang->ui->theme->fontList['Microsoft YaHei']          = '微软雅黑';
$lang->ui->theme->fontList['Arial']                    = 'Arial';
$lang->ui->theme->fontList['Courier']                  = 'Courier';
$lang->ui->theme->fontList['Console']                  = 'Console';
$lang->ui->theme->fontList['Tahoma']                   = 'Tahoma';
$lang->ui->theme->fontList['Verdana']                  = 'Verdana';
$lang->ui->theme->fontList['ZenIcon']                  = 'Icon Font ZenIcon';

$lang->ui->theme->fontSizeList['inherit']              = 'Default';
$lang->ui->theme->fontSizeList['12px']                 = '12px';
$lang->ui->theme->fontSizeList['13px']                 = '13px';
$lang->ui->theme->fontSizeList['14px']                 = '14px';
$lang->ui->theme->fontSizeList['15px']                 = '15px';
$lang->ui->theme->fontSizeList['16px']                 = '16px';
$lang->ui->theme->fontSizeList['18px']                 = '18px';
$lang->ui->theme->fontSizeList['20px']                 = '20px';
$lang->ui->theme->fontSizeList['24px']                 = '24px';

$lang->ui->theme->navbarLayoutList['false']            = 'Normal';
$lang->ui->theme->navbarLayoutList['true']             = 'Adaptive Width';

$lang->ui->theme->sideFloatList['right']  = 'Right';
$lang->ui->theme->sideFloatList['left']   = 'Left';
$lang->ui->theme->sideFloatList['hidden'] = 'Hide';

$lang->ui->theme->sideGridList[2]        = "1/6";
$lang->ui->theme->sideGridList[3]        = "1/4";
$lang->ui->theme->sideGridList[4]        = "1/3";
$lang->ui->theme->sideGridList[6]        = "1/2";

$lang->ui->theme->underlineList['none']                = 'None';
$lang->ui->theme->underlineList['underline']           = 'Underline';

$lang->ui->theme->searchLabels = new stdclass();
$lang->ui->theme->searchLabels->sales  = 'Most Purchased';
$lang->ui->theme->searchLabels->latest = 'Latest';
$lang->ui->theme->searchLabels->hot    = 'Hot';
$lang->ui->theme->searchLabels->rand   = 'Recommended';
$lang->ui->theme->searchLabels->free   = 'Free';

$lang->ui->groups = new stdclass();
$lang->ui->groups->basic  = 'Basic';
$lang->ui->groups->navbar = 'Navigation Bar';
$lang->ui->groups->block  = 'Block';
$lang->ui->groups->button = 'Button';
$lang->ui->groups->header = 'Header';
$lang->ui->groups->footer = 'Footer';

$lang->ui->color          = 'Color';
$lang->ui->colorset       = 'Color';
$lang->ui->pageBackground = 'Background';
$lang->ui->pageText       = 'Text';
$lang->ui->aLink          = 'Links';
$lang->ui->aVisited       = 'Visited Links';
$lang->ui->aHover         = 'Hover Links';
$lang->ui->underline      = 'Underline';
$lang->ui->transparent    = 'Transparent';
$lang->ui->none           = 'None';

$lang->ui->layout        = 'Layout';
$lang->ui->navbar        = 'Navigation Bar';
$lang->ui->panel         = 'Panel';
$lang->ui->menuBorder    = 'Menu Border';
$lang->ui->submenuBorder = 'Submenu Border';
$lang->ui->menuNormal    = 'Normal Menu';
$lang->ui->menuHover     = 'Hover Menu';
$lang->ui->menuActive    = 'Active Menu';
$lang->ui->submenuNormal = 'Normal Submenu';
$lang->ui->submenuHover  = 'Hover Submenu';
$lang->ui->submenuActive = 'Active Submenu';
$lang->ui->heading       = 'Title';
$lang->ui->body          = 'Body';
$lang->ui->background    = 'Background';
$lang->ui->button        = 'Button';
$lang->ui->text          = 'Text';
$lang->ui->column        = 'Column';
$lang->ui->sideFloat     = 'Sidebar Float';
$lang->ui->sideGrid      = 'Sildebar Grid';
$lang->ui->height        = 'Height';

$lang->ui->primaryColor    = 'Primary Color';
$lang->ui->backcolor       = 'Background Color';
$lang->ui->forecolor       = 'Foreground Color';
$lang->ui->backgroundImage = 'Background Image';
$lang->ui->repeat          = 'Repear Mode';
$lang->ui->position        = 'Position';
$lang->ui->style           = 'Style';
$lang->ui->fontSize        = 'Font Size';
$lang->ui->fontFamily      = 'Font Family';
$lang->ui->fontWeight      = 'Font Weight';
$lang->ui->layout          = 'Layout';
$lang->ui->border          = 'Border';
$lang->ui->borderColor     = 'Border Color';
$lang->ui->borderWidth     = 'Border Width';
$lang->ui->width           = 'Width';
$lang->ui->radius          = '圆角';
$lang->ui->linkColor       = 'Link Color';
$lang->ui->linkFontSize    = 'Link Font';
$lang->ui->default         = 'Default';
$lang->ui->primary         = 'Primary';
$lang->ui->info            = 'Info';
$lang->ui->danger          = 'Danger';
$lang->ui->warning         = 'Warning';
$lang->ui->success         = '积极';
$lang->ui->removeDirFaild  = "<pre>%s</pre> <h4>cannot be removed. </h4><div class='text-important'>Please delete it manually, or change permissions and try it again.</div>";
$lang->ui->padding         = 'Padding';
$lang->ui->left            = 'Left';
$lang->ui->right           = 'Right';
$lang->ui->top             = 'Top';
$lang->ui->bottom          = 'Bottom';

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
$lang->ui->folderList->common  = 'Common';
$lang->ui->folderList->index   = 'Home';
$lang->ui->folderList->block   = 'Block';
$lang->ui->folderList->article = 'Article';
$lang->ui->folderList->product = 'Product';
$lang->ui->folderList->search  = 'Search';
$lang->ui->folderList->order   = 'Order';
$lang->ui->folderList->user    = 'User';
$lang->ui->folderList->message = 'Message';
$lang->ui->folderList->forum   = 'Forum';

$lang->ui->files = new stdclass();
$lang->ui->files->default = new stdclass();

$lang->ui->files->default->common = array();
$lang->ui->files->default->common['header.lite']  = 'header';
$lang->ui->files->default->common['header']       = 'Header';
$lang->ui->files->default->common['qrcode']       = 'QR Code';
$lang->ui->files->default->common['footer']       = 'Footer';
$lang->ui->files->default->common['header.modal'] = 'Popout Header';
$lang->ui->files->default->common['footer.modal'] = 'Popout Bottom';

$lang->ui->files->default->index = array();
$lang->ui->files->default->index['index'] = 'Home';

$lang->ui->files->default->block = array();
$lang->ui->files->default->block['about']           = 'Comany Intro';
$lang->ui->files->default->block['articletree']     = 'Article Category';
$lang->ui->files->default->block['blogtree']        = 'Blog Category';
$lang->ui->files->default->block['contact']         = 'Contact Us';
$lang->ui->files->default->block['featuredproduct'] = 'Feature Product';
$lang->ui->files->default->block['followus']        = 'Follow Us';
$lang->ui->files->default->block['header']          = 'Header';
$lang->ui->files->default->block['header.default']  = 'Compatibilty Mode';
$lang->ui->files->default->block['header.layout']   = 'Custom Mode';
$lang->ui->files->default->block['hotarticle']      = 'Hot Articles';
$lang->ui->files->default->block['hotproduct']      = 'Hot Product';
$lang->ui->files->default->block['htmlcode']        = 'html code';
$lang->ui->files->default->block['html']            = 'Custom';
$lang->ui->files->default->block['latestarticle']   = 'Latest Article';
$lang->ui->files->default->block['latestblog']      = 'Latest Blog';
$lang->ui->files->default->block['latestproduct']   = 'Latest Product';
$lang->ui->files->default->block['latestthread']    = 'Latest Thread';
$lang->ui->files->default->block['links']           = 'Blogroll';
$lang->ui->files->default->block['logo']            = 'Logo';
$lang->ui->files->default->block['nav']             = 'Navigation Bar';
$lang->ui->files->default->block['pagelist']        = 'Page List';
$lang->ui->files->default->block['phpcode']         = 'php code';
$lang->ui->files->default->block['producttree']     = 'Product Category';
$lang->ui->files->default->block['searchbar']       = 'Search Bar';
$lang->ui->files->default->block['slide']           = 'Slide';
$lang->ui->files->default->block['slogan']          = 'Slogan';
$lang->ui->files->default->block['usermenu']        = 'Login Info';

$lang->ui->files->default->article = array();
$lang->ui->files->default->article['browse'] = 'Articel List';
$lang->ui->files->default->article['view']   = 'Articel Details';

$lang->ui->files->default->article['blog/header'] = 'Blog Header';
$lang->ui->files->default->article['blog/index']  = 'Blog List';
$lang->ui->files->default->article['blog/view']   = 'Blog Details';
$lang->ui->files->default->article['blog/footer'] = 'Blog Bottom';

$lang->ui->files->default->article['page/view'] = 'Page';

$lang->ui->files->default->product = array();
$lang->ui->files->default->product['browse']      = 'Product List';
$lang->ui->files->default->product['browse.card'] = 'View Card';
$lang->ui->files->default->product['browse.list'] = 'View List';
$lang->ui->files->default->product['view']        = 'Product Details';

$lang->ui->files->default->forum = array();
$lang->ui->files->default->forum['index'] = 'Forum Home';
$lang->ui->files->default->forum['board'] = 'Board';

$lang->ui->files->default->forum['thread/view']   = 'View Thread';
$lang->ui->files->default->forum['thread/thread'] = 'Show Threads ';
$lang->ui->files->default->forum['thread/reply']  = 'Show Replies';
$lang->ui->files->default->forum['thread/post']   = 'Post Thread';
$lang->ui->files->default->forum['reply/reply']   = 'Reply List';

$lang->ui->files->default->user['control']     = 'My Zone';
$lang->ui->files->default->user['side']        = 'Menu';
$lang->ui->files->default->user['deny']        = 'Access denied';
$lang->ui->files->default->user['edit']        = 'Edit';
$lang->ui->files->default->user['login.front'] = 'Login';
$lang->ui->files->default->user['message']     = 'My Message';
$lang->ui->files->default->user['profile']     = 'My Profile';
$lang->ui->files->default->user['register']    = 'Register';
$lang->ui->files->default->user['score']       = 'My Points';
$lang->ui->files->default->user['thread']      = 'My Thread';

$lang->ui->files->default->order['browse']        = 'My Order';
$lang->ui->files->default->order['check']         = 'Chechout';
$lang->ui->files->default->order['confirm']       = 'Order Confirmation';
$lang->ui->files->default->order['processorder']  = 'Payment';
$lang->ui->files->default->order['track']         = 'Tracking';

$lang->ui->files->default->message['index']       = 'Message Index';
$lang->ui->files->default->message['comment']     = 'Comment List';

$lang->ui->files->default->search['index']        = 'Search Results';

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
$lang->upgrade->common  = 'Upgrade';

$lang->upgrade->result  = 'Backup Result';
$lang->upgrade->fail    = 'Backup failed!';
$lang->upgrade->success = 'Backed up!';
$lang->upgrade->tohome  = 'Back to Home';

$lang->upgrade->backup        = 'Data Backup';
$lang->upgrade->prepair       = 'Prepare to upgrade';
$lang->upgrade->selectVersion = 'Confirm current version';
$lang->upgrade->confirm       = 'Confirm SQL statement';
$lang->upgrade->execute       = 'Confirm';
$lang->upgrade->next          = 'Next';
$lang->upgrade->updateLicense = 'Changer 4.0 has swtiched to use Z PUBLIC LICENSE(ZPL) 1.2.';

$lang->upgrade->backupData = <<<EOT
<pre>
<strong>Use phpMyAdminor mysqldump to backup database.</strong>
<textarea class='autoSelect w-500px red' readonly rows='1' > mysqldump -u %s -p%s %s > chanzhi.sql </textarea>
</pre>
EOT;

$lang->upgrade->createSlidePath = <<<EOT
<div class='alert'> Please create a silde directory <b>%s</b> and turn on the permission to write in this directory. </div>
EOT;

$lang->upgrade->chmodThemePath = <<<EOT
<div class='alert'> Please turn on the wirte permission of <b>%s</b> and continuee. </div>
EOT;

$lang->upgrade->versionNote = " Please choose the right version, or it might cause data loss.";

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
$lang->user->common    = 'User';

$lang->user->id        = 'ID';
$lang->user->account   = 'Account';
$lang->user->admin     = 'Admin';
$lang->user->oldPwd    = 'Old Password';
$lang->user->password  = 'New Password';
$lang->user->password2 = 'Repeat Password';
$lang->user->realname  = 'Real Name';
$lang->user->nickname  = 'Nick Name';
$lang->user->avatar    = 'Avatar';
$lang->user->birthyear = '出生年';
$lang->user->birthday  = '出生月日';
$lang->user->gender    = 'Gender';
$lang->user->email     = 'Email';
$lang->user->msn       = 'MSN';
$lang->user->qq        = 'QQ';
$lang->user->yahoo     = 'Yahoo';
$lang->user->gtalk     = 'Gtalk';
$lang->user->wangwang  = '旺旺';
$lang->user->mobile    = 'Mobile';
$lang->user->phone     = 'Phone';
$lang->user->company   = 'Company';
$lang->user->address   = 'Mailing Address';
$lang->user->zipcode   = 'Zip Code';
$lang->user->join      = 'Join Date';
$lang->user->visits    = 'Visits';
$lang->user->ip        = 'Last IP';
$lang->user->last      = 'Last Login';
$lang->user->status    = 'Status';
$lang->user->captcha   = 'Verification Code';
$lang->user->alert     = 'Your account has been deactivated.';
$lang->user->privilege = 'Privilege';

$lang->user->all             = 'All Users';
$lang->user->list            = 'User List';
$lang->user->view            = "User Profile";
$lang->user->create          = "Add";
$lang->user->edit            = "Edit";
$lang->user->operate         = 'Action';
$lang->user->changePassword  = "Change Password";
$lang->user->changeEmail     = "Email Settings";
$lang->user->recoverPassword = "Forgot Password";
$lang->user->newPassword     = "New Password";
$lang->user->update          = "Edit Users";
$lang->user->browse          = "View Users";
$lang->user->deny            = "Access denied.";
$lang->user->confirmDelete   = "Do you want to delete it?";
$lang->user->confirmActivate = "Do you want to activate it?";
$lang->user->relogin         = "Login again";
$lang->user->asGuest         = "Guest Visit";
$lang->user->goback          = "Go Back";
$lang->user->allUsers        = 'All Users';
$lang->user->submit          = "Submit";
$lang->user->forbid          = 'Deactivate';
$lang->user->activate        = 'Activate';
$lang->user->pullWechatFans  = '更新微信会员数据';
$lang->user->adminlog        = 'Admin Log';
$lang->user->checkEmail      = 'Email Binding';
$lang->user->getEmailCode    = 'Get verification code';
$lang->user->setEmail        = 'Email Settings';
$lang->user->newEmail        = 'New Email';
$lang->user->rank            = 'Rank Points';
$lang->user->score           = 'Points Details';
$lang->user->myScore         = 'My Points';
$lang->user->buyScore        = 'Refill Points';
$lang->user->addScore        = 'Reward Points';
$lang->user->reduceScore     = 'Deduct Points';
$lang->user->yangcongLogin   = '洋葱登录';
$lang->user->bindAccount     = 'Account Binding';
$lang->user->batchDelete     = 'Batch delete';
$lang->user->deleteHistory   = 'Delete account and history';
$lang->user->question        = 'Security Question';
$lang->user->answer          = 'Answer';

$lang->user->type        = 'Account Type';
$lang->user->profile     = 'Profile';
$lang->user->editProfile = 'Edit Profile';
$lang->user->thread      = 'My Thread';
$lang->user->messages    = 'My Message';
$lang->user->reply       = 'My Reply';
$lang->user->submittion  = 'My Contribution';

$lang->user->userHistory       = "User History";
$lang->user->threadHistory     = "Post";
$lang->user->replyHistory      = "Reply";
$lang->user->commentHistory    = "Comment";
$lang->user->messageHistory    = "Message";
$lang->user->orderHistory      = "Order";
$lang->user->addressHistory    = "Address`";
$lang->user->submittionHistory = "Contribution";

$lang->user->message = new stdclass();
$lang->user->message->mine = "My message <span class='label label-badge text-latin'>%s</span>";
$lang->user->message->from = 'from';

$lang->user->inputUserName       = 'Enter user name';
$lang->user->inputAccountOrEmail = 'Enter account or Email';
$lang->user->inputPassword       = 'Enter Password';
$lang->user->searchUser          = 'Search';

$lang->user->errorDeny         = "Sorry, you have no access to『<b>%s</b>』->『<b>%s</b>』. Please contact the admin to get access. Click Go Back <br/> 5 seconds later, you will be directed to Homepage...";
$lang->user->loginFailed       = "Login failed. Please check your user name and password.";
$lang->user->identifyFailed    = "Verification failed. Please check your password.";
$lang->user->locked            = "Account has been locked. Please try to login in %s.";
$lang->user->lockedForEver     = "Account has been permanently deactivated.";
$lang->user->lblRegistered     = 'Congrats! You have registered with us!';
$lang->user->forbidSuccess     = 'Deactivated!';
$lang->user->forbidFail        = 'Deactivation failed.';
$lang->user->activateSuccess   = 'Activated!';
$lang->user->activateFail      = 'Activation failed.';
$lang->user->pullSuccess       = '获取微信会员成功';
$lang->user->wrongPwd          = 'Wrong Password';
$lang->user->checkEmailSuccess = 'Email binded!';
$lang->user->sendRecoverEmail  = 'Send reset Email.';
$lang->user->resetSuccess      = 'Passwors reset. Please login with your new password.';

$lang->user->forbidUser = 'Deactivation';
$lang->user->forbidDate = array();
$lang->user->forbidDate['1']    = '1 Day';
$lang->user->forbidDate['2']    = '2 Days';
$lang->user->forbidDate['3']    = '3 Days';
$lang->user->forbidDate['7']    = '1 Week';
$lang->user->forbidDate['30']   = '1 Month';
$lang->user->forbidDate['3000'] = 'Permanent';

$lang->user->adminList['super']  = 'Super Admin';
$lang->user->adminList['common'] = 'Admin';
$lang->user->adminList['no']     = 'User';

$lang->user->accountTypeList['no']      = 'Frontend Account';
$lang->user->accountTypeList['common']  = 'Backend Account';

$lang->user->genderList = new stdclass();
$lang->user->genderList->m = 'Male';
$lang->user->genderList->f = 'Female';
$lang->user->genderList->u = 'unknown';

$lang->user->register  = new stdclass();
$lang->user->register->common      = 'Register';
$lang->user->register->instant     = 'Register Now';
$lang->user->register->welcome     = 'Welcome to register!';
$lang->user->register->why         = 'Register with us to enjoy more!';
$lang->user->register->lblUserInfo = 'User Profile';
$lang->user->register->lblAccount  = 'must be a combination of letter and numbers, 3 charaters at least.;
$lang->user->register->lblPassword = 'must be a combination of letter and numbers, 6 charaters at least.';
$lang->user->register->login       = 'Login';
$lang->user->register->loginTip    = 'Existing Account';

$lang->user->notice = new stdclass();
$lang->user->notice->password = 'must be a combination of letter and numbers, 6 charaters at least.';

$lang->user->login  = new stdclass();
$lang->user->login->common  = "Login";
$lang->user->login->welcome = 'Existing Account';
$lang->user->login->why     = 'Welcome to login!';

$lang->user->resetPassword = new stdclass();
$lang->user->resetPassword->common  = "Reset Password";
$lang->user->resetPassword->success = "Reset password link has been sent to your Email.";
$lang->user->resetPassword->failed  = "Wrong security Email address. Please enter again.";

$lang->user->resetMail = new stdclass();
$lang->user->resetMail->subject  = 'Reset Password';
$lang->user->resetMail->account  = 'Hello,'; 
$lang->user->resetMail->resetUrl = 'You have requested to reset your password at %s（%s）. Pleae click the link belwo and reset your passwor.'; 
$lang->user->resetMail->notice   = 'This is automatically set by the sysytem. Please do not reply.(Ignore this Email, if you do not do anthing.)';

$lang->user->oauth = new stdclass();
$lang->user->oauth->common       = 'Open Login';
$lang->user->oauth->provider     = 'Service Provider';
$lang->user->oauth->verification = 'Verification';
$lang->user->oauth->widget       = 'Widget';
$lang->user->oauth->callbackURL  = 'Call Back URL';

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

$lang->user->oauth->lblWelcome       = 'Open Login';
$lang->user->oauth->lblOtherLogin    = 'Other Login';
$lang->user->oauth->lblProfile       = "Register a User";
$lang->user->oauth->lblBind          = "User Binding";
$lang->user->oauth->lblUnbind        = "Remove Binding";
$lang->user->oauth->lblUnbindSuccess = "Binding removed!";
$lang->user->oauth->lblUnbindFailed  = "Remove bnding failed!";
$lang->user->oauth->lblBindFailed    = "User binding failed!";
$lang->user->oauth->ignore           = "Ignore";

$lang->user->statusList = new stdclass();
$lang->user->statusList->locked    = "<label class='label label-danger'>Locked</label>";
$lang->user->statusList->forbidden = "<label class='label label-danger'>Deactivated</label>";
$lang->user->statusList->normal    = "<label class='label label-success'>Normal</label>";

$lang->user->control = new stdclass();
$lang->user->control->common      = 'User Center';
$lang->user->control->welcome     = 'Hello, <strong>%s</strong>';
$lang->user->control->lblPassword = "If leave blank, nothing is changed.";

$lang->user->navGroups = new stdclass();
$lang->user->navGroups->user    = 'My Profile';
$lang->user->navGroups->order   = 'My Order';
$lang->user->navGroups->message = 'My Message';

$lang->user->control->menus['profile']    = '<i class="icon-user"></i> My Profile <i class="icon-chevron-right"></i>|user|profile';
$lang->user->control->menus['message']    = '<i class="icon-comments-alt"></i> My Message <i class="icon-chevron-right"></i>|user|message';
$lang->user->control->menus['score']      = '<i class="icon-sun"></i> My Point <i class="icon-chevron-right"></i>|user|score';
$lang->user->control->menus['recharge']   = '<i class="icon-bolt"></i> Refill Points <i class="icon-chevron-right"></i>|score|buyscore';
$lang->user->control->menus['order']      = '<i class="icon-shopping-cart"></i> My Order <i class="icon-chevron-right"></i>|order|browse';
$lang->user->control->menus['address']    = '<i class="icon-map-marker"> </i> My Address <i class="icon-chevron-right"></i>|address|browse';
$lang->user->control->menus['thread']     = '<i class="icon-comment"></i> My Thread <i class="icon-chevron-right"></i>|user|thread';
$lang->user->control->menus['reply']      = '<i class="icon-reply"></i> My Reply <i class="icon-chevron-right"></i>|user|reply';
$lang->user->control->menus['submittion'] = '<i class="icon-envelope"></i> My Contribution <i class="icon-chevron-right"></i>|article|submittion'; 

$lang->user->log = new stdclass();
$lang->user->log->common = 'Log';
$lang->user->log->list   = 'Login Log';

$lang->user->log->id          = 'ID';
$lang->user->log->account     = 'Account';
$lang->user->log->browser     = 'Browser';
$lang->user->log->ip          = 'IP';
$lang->user->log->location    = 'Login Location';
$lang->user->log->date        = 'Login Time';
$lang->user->log->desc        = 'Result';

$lang->user->ipDenied             = 'Login IP is restricted.Please follow instructions.';
$lang->user->locationDenied       = 'Login location is restricted. Please follow instructions.';
$lang->user->loginLocationChanged = 'Login address is changed. Please follow instructions.';
$lang->user->verifyFail           = 'Please enter the correct verification code.';
$lang->user->confirmUnbind        = 'Do you want to remove binding?';
$lang->user->forceYangcong        = '已开启强制洋葱登录，普通登录需要进行验证。';

$lang->user->placeholder = new stdclass();
$lang->user->placeholder->password   = 'Enter your login password';
$lang->user->placeholder->verifyCode = 'Please enter verification code received by Email.';
/* visual */
$lang->visual->common      = "Visual Editor";
$lang->visual->editLogo    = "Edit Logo";
$lang->visual->editSlogan  = "Edit a slogan";
$lang->visual->appendBlock = "Insert a Block";
$lang->visual->removeBlock = "Remove a Block";
$lang->visual->sortBlocks  = "Sort Blocks";

$lang->visual->info            = "Edit Mode";
$lang->visual->preview         = "Preview";
$lang->visual->exit            = "Exit";
$lang->visual->exitVisualEdit  = "Exit Visual Editor";
$lang->visual->customTheme     = "Custom Theme";
$lang->visual->admin           = "Admin";
$lang->visual->reload          = 'Refresh';
$lang->visual->createBlock     = 'Create a Block';
$lang->visual->manageBlock     = 'Block Admin';
$lang->visual->searchBlock     = 'Search a Block';
$lang->visual->allBlock        = 'All Blocks';
$lang->visual->openInNewWindow = 'Open in a new window';
$lang->visual->editPowerBy     = "<p>You can use Changer for free, if you have read and acknowledged <a href='http://changercms.com/book/changermanual/changerlicense-5.html' target='_blank'> Z PUBLIC LICENSE 1.2 </a>, and you have to keep Changer logos which is of great importance to Changer CMS. If you would like to remove Changer logos, please purchase <a href='http://www.chanzhi.org/license-search.html' target='_blank'> Changer business license</a>.</p>";
$lang->visual->pageLayout      = 'Page layout is applied.';
$lang->visual->pageLayoutInfo  = 'Only applies to current layout.<span class="page-name"></span> will not affect global layout.';
$lang->visual->globalLayout    = 'Gloabl Layout';
$lang->visual->globalLayoutInfo= 'Layout applies to all<span class="page-name"></span>';

$lang->visual->js = new stdclass();
$lang->visual->js->saved             = $lang->saveSuccess;
$lang->visual->js->deleted           = $lang->deleteSuccess;
$lang->visual->js->preview           = 'Preview';
$lang->visual->js->exitPreview       = 'Exit Preview';
$lang->visual->js->removeBlock       = 'Remove Block';
$lang->visual->js->invisible         = 'Hidden';
$lang->visual->js->carousel          = 'Slide';
$lang->visual->js->operateFail       = 'Action failed！';
$lang->visual->js->addContent        = 'Adding...';
$lang->visual->js->addContentTo      = 'Add content to 【{0}】';
$lang->visual->js->createBlock       = 'Creat a Block';
$lang->visual->js->addSubRegion      = 'Add a Sub Block';
$lang->visual->js->addBlock          = 'Add an existing Block';
$lang->visual->js->subRegion         = 'Sub Block';
$lang->visual->js->subRegionDesc     = 'Sub Block Details';
$lang->visual->js->alreadyLastSlide  = 'Last Silde';
$lang->visual->js->alreadyFirstSlide = 'First Silde';
$lang->visual->js->slideOrder        = 'Play Order';
$lang->visual->js->gridWidth         = 'Grid Width';
$lang->visual->js->pageLayoutPrefix  = 'Current Only';
$lang->visual->js->actions           = array('edit' => 'Edit', 'delete' => 'Delete', 'move' => 'Move', 'add' => 'Add');

$lang->visual->setting = new stdclass();
$lang->visual->setting->logo                               = array('name' => "Logo/name");
$lang->visual->setting->slogan                             = array('name' => "Slogan");
$lang->visual->setting->powerby                            = array('name' => "Changer logo", 'actions' => array());
$lang->visual->setting->powerby['actions']['edit']         = array('title' => 'Remove Changer logo', 'text' => 'Remove Changer logo', 'alert' => $lang->visual->editPowerBy);
$lang->visual->setting->company                            = array('name' => "Company Intro", 'actions' => array());
$lang->visual->setting->company['actions']['edit']         = array('text' => 'Edit Company Intro');
$lang->visual->setting->companyName                        = array('name' => "Company Name");
$lang->visual->setting->companyDesc                        = array('name' => "Company Intro");
$lang->visual->setting->companyContact                     = array('name' => "Contact");
$lang->visual->setting->links                              = array('name' => "Blogroll");
$lang->visual->setting->navbar                             = array('name' => "NavBar");
$lang->visual->setting->carousel                           = array();
$lang->visual->setting->carousel['groupActions']           = array();
$lang->visual->setting->carousel['groupActions']['add']    = array('text' => 'Add a slide');
$lang->visual->setting->carousel['itemActions']            = array();
$lang->visual->setting->carousel['itemActions']['edit']    = array('text' => 'Edit', 'title' => 'Edit a slide');
$lang->visual->setting->carousel['itemActions']['delete']  = array('text' => 'Delete this one', 'confirm' => 'Do you want to delete this slide?');
$lang->visual->setting->carousel['itemActions']['up']      = array('text' => 'Play order has moved forward to {0}');
$lang->visual->setting->carousel['itemActions']['down']    = array('text' => 'Play order has moved backward to {0}');
$lang->visual->setting->block                              = array('name' => "Block", 'actions' => array());
$lang->visual->setting->block['actions']['delete']         = array('confirm' => 'Do you want to remove {title}?', 'success' => '{title} has been removed.'); 
$lang->visual->setting->block['actions']['layout']         = array('text' => 'Change Layout', 'success' => 'Layout has been saved.');
$lang->visual->setting->block['actions']['add']            = array('title' => 'Add content to 【{title}】');
$lang->visual->setting->block['actions']['create']         = array('title' => 'Add a block');
$lang->visual->setting->columns                            = array('name' => "Column Settings", 'actions' => array());
$lang->visual->setting->columns['actions']['edit']         = array('title' => "Sidebar Settings", 'text' => "Sidebar Settings");
$lang->visual->setting->article                            = array('name' => 'Article');
$lang->visual->setting->articles                           = array('name' => 'Article list', 'actions' => array());
$lang->visual->setting->articles['actions']['add']         = array('text' => 'Post an article');
$lang->visual->setting->page                               = array('name' => 'Page');
$lang->visual->setting->pageList                           = array('name' => 'Page list', 'actions' => array());
$lang->visual->setting->pageList['actions']['add']         = array('text' => 'Post a page');
$lang->visual->setting->blog                               = array('name' => 'Blog');
$lang->visual->setting->blogList                           = array('name' => 'Blog list', 'actions' => array());
$lang->visual->setting->blogList['actions']['add']         = array('text' => 'Post a blog');
$lang->visual->setting->product                            = array('name' => 'Product');
$lang->visual->setting->products                           = array('name' => 'Product list', 'actions' => array());
$lang->visual->setting->products['actions']['add']         = array('text' => 'Post a product');
$lang->visual->setting->books                              = array('name' => 'Manual list', 'actions' => array());
$lang->visual->setting->books['actions']['add']            = array('text' => 'Add a manual');
$lang->visual->setting->bookCatalog                        = array('name' => "Manual content");
$lang->visual->setting->book                               = array('name' => "Manual");
$lang->visual->setting->boards                             = array('name' => 'Board', 'actions' => array());
$lang->visual->setting->boards['actions']['add']           = array('text' => 'Board Admin');
$lang->visual->setting->thread                             = array('name' => 'Thread', 'actions' => array());
$lang->visual->setting->thread['actions']['edit']          = array('text' => 'Transfer');
/* wechat */
$lang->wechat->common = 'Wechat';

$lang->wechat->id        = 'ID';
$lang->wechat->type      = 'Type';
$lang->wechat->name      = '微信名';
$lang->wechat->account   = 'Account ID';
$lang->wechat->appID     = 'AppID';
$lang->wechat->appSecret = 'AppSecret';
$lang->wechat->token     = 'Token';
$lang->wechat->url       = 'URL';
$lang->wechat->certified = 'Certified';
$lang->wechat->users     = '微信会员';
$lang->wechat->content   = 'Content';
$lang->wechat->qrcode    = 'QR Code';

$lang->wechat->create         = '添加公众号';
$lang->wechat->edit           = '编辑公众号';
$lang->wechat->admin          = '维护公众号';
$lang->wechat->list           = '公众号列表';
$lang->wechat->set            = '微信设置';
$lang->wechat->setMenu        = 'Menu';
$lang->wechat->integrate      = 'Integrate';
$lang->wechat->adminResponse  = 'Response';
$lang->wechat->setResponse    = 'Set Response';
$lang->wechat->deleteResponse = 'Remove Response';
$lang->wechat->reply          = 'Reply';
$lang->wechat->commitMenu     = 'Menu';
$lang->wechat->deleteMenu     = 'Delete Menu';
$lang->wechat->messageList    = 'Message';

$lang->wechat->typeList['subscribe'] = '订阅号';
$lang->wechat->typeList['service']   = '服务号';

$lang->wechat->certifiedList[1] = 'Yes';
$lang->wechat->certifiedList[0] = 'No';

$lang->wechat->response = new stdclass();

$lang->wechat->response->keywords  = 'Keyword';
$lang->wechat->response->set       = 'Settings';
$lang->wechat->response->create    = 'Add a keyword';
$lang->wechat->response->default   = 'Default';
$lang->wechat->response->subscribe = 'Subscribe';

$lang->wechat->response->type     = 'Type';
$lang->wechat->response->source   = 'Source';
$lang->wechat->response->module   = 'Module';
$lang->wechat->response->block    = 'Content';
$lang->wechat->response->link     = 'Link';
$lang->wechat->response->category = 'Category';
$lang->wechat->response->limit    = 'Count';

$lang->wechat->response->list   = 'List';

$lang->wechat->response->typeList['link'] = 'Link';
$lang->wechat->response->typeList['text'] = 'Text';
$lang->wechat->response->typeList['news'] = 'Image';

$lang->wechat->response->sourceList['system'] = "System";
$lang->wechat->response->sourceList['manual'] = 'Manual';

$lang->wechat->response->moduleList['index']   = 'Home';
$lang->wechat->response->moduleList['company'] = 'About Us';
$lang->wechat->response->moduleList['blog']    = 'Blog';
$lang->wechat->response->moduleList['forum']   = 'Forum';
$lang->wechat->response->moduleList['book']    = 'Manual';
$lang->wechat->response->moduleList['manual']  = 'Custom';

$lang->wechat->response->textBlockList['company'] = 'Company Intro';
$lang->wechat->response->textBlockList['contact'] = 'Contact Us';
$lang->wechat->response->textBlockList['manual']  = 'Custom';

$lang->wechat->response->newsBlockList['articleTree']   = 'Article Category';
$lang->wechat->response->newsBlockList['latestArticle'] = 'Latest article';
$lang->wechat->response->newsBlockList['hotArticle']    = 'Hot article';
$lang->wechat->response->newsBlockList['productTree']   = 'Product Category';
$lang->wechat->response->newsBlockList['latestProduct'] = 'Latest product';
$lang->wechat->response->newsBlockList['hotProduct']    = 'Hot product';

$lang->wechat->message = new stdclass();
$lang->wechat->message->from     = 'From';
$lang->wechat->message->type     = 'Type';
$lang->wechat->message->status   = 'Status';
$lang->wechat->message->content  = 'Content';
$lang->wechat->message->response = 'Response';
$lang->wechat->message->menu     = 'Menu';
$lang->wechat->message->time     = 'Date';
$lang->wechat->message->reply    = 'Reply';
$lang->wechat->message->record   = 'Record';
$lang->wechat->message->list     = 'List';

$lang->wechat->message->typeList['text']        = 'Text';
$lang->wechat->message->typeList['image']       = 'Image';
$lang->wechat->message->typeList['voice']       = 'Audio';
$lang->wechat->message->typeList['location']    = 'Location';
$lang->wechat->message->typeList['link']        = 'Link';
$lang->wechat->message->typeList['subscribe']   = 'Subscribe';
$lang->wechat->message->typeList['unsubscribe'] = 'Unsubscribe';
$lang->wechat->message->typeList['scan']        = 'Scan';
$lang->wechat->message->typeList['click']       = 'Hit';
$lang->wechat->message->typeList['view']        = 'Link';

$lang->wechat->message->tabList[] = 'mode=replied&replied=0|Unreplied';
$lang->wechat->message->tabList[] = 'mode=type&type=text|Message';
$lang->wechat->message->tabList[] = 'mode=type&type=subscribe|Subscribed';
$lang->wechat->message->tabList[] = 'mode=type&type=unsubscribe|Unsubscribed';
$lang->wechat->message->tabList[] = 'mode=replied&replied=1|Replied';

$lang->wechat->noSelectedFile  = "No Image is selected!";
$lang->wechat->noAppID         = "No AppID";
$lang->wechat->qrcodeType      = "Please upload QR code in .jpg";

$lang->wechat->placeholder = new stdclass();
$lang->wechat->placeholder->limit    = '请输条数,最多10条';
$lang->wechat->placeholder->category = '请选择类目，最多10个';
$lang->wechat->placeholder->name     = '公众号名称';
$lang->wechat->placeholder->account  = '请输入gh_xxx 格式的原始ID';
$lang->wechat->placeholder->token    = '必须为英文或数字，长度为3-32字符';

$lang->wechat->curlSSLRequired = "微信公众号功能需要curl模块，并支持ssl加密传输。";
$lang->wechat->needCertified   = "此功能需要公众号认证后使用。";
$lang->wechat->integrateInfo   = "请到微信的公众平台完成接入，以获取appID和appSecret信息。 <a href='http://api.chanzhi.org/goto.php?item=help_wechat' target='_blank'>帮助</a>";
$lang->wechat->integrateDone   = "Intergrated!";
/* widget */
$lang->widget->common = 'Block';
$lang->widget->title  = 'Name';
$lang->widget->style  = 'Style';
$lang->widget->type   = 'Type';
$lang->widget->grid   = 'Grid';
$lang->widget->color  = 'Color';
$lang->widget->status = 'Status';

$lang->widget->message = 'Message';
$lang->widget->comment = 'Comment';
$lang->widget->reply   = 'Reply';

$lang->widget->create    = 'Add a widget';
$lang->widget->hidden    = 'Hide';
$lang->widget->lblWidget = 'Block';
$lang->widget->lblRss    = 'RSS';
$lang->widget->lblNum    = 'Number';
$lang->widget->content   = 'Content';

$lang->widget->params = new stdclass();
$lang->widget->params->name  = 'Parameter';
$lang->widget->params->value = 'Value';

$lang->widget->createWidget        = 'Add a Widget';
$lang->widget->editWidget          = 'Edit a Widget';
$lang->widget->ordersSaved         = 'Sorting Saved!';
$lang->widget->confirmRemoveWidget = 'Do you want to remove【{0}】?';

$lang->widget->dynamic     = 'Latest News';
$lang->widget->dynamicInfo = "%s, %s <em>%s</em> %s <a href='%s'>%s</a>。";

$lang->widget->default = array();
$lang->widget->default['1']['title'] = 'Latest Order';
$lang->widget->default['1']['type']  = 'latestOrder';
$lang->widget->default['1']['grid']  = 4;

$lang->widget->default['2']['title'] = 'Latest Thread';
$lang->widget->default['2']['type']  = 'latestThread';
$lang->widget->default['2']['grid']  = 4;

$lang->widget->default['3']['title'] = 'Feedback';
$lang->widget->default['3']['type']  = 'message';
$lang->widget->default['3']['grid']  = 4;

$lang->widget->default['4']['title'] = 'Latest Contribution';
$lang->widget->default['4']['type']  = 'submittion';
$lang->widget->default['4']['grid']  = 4;

$lang->widget->default['5']['title'] = 'Quick Entry';
$lang->widget->default['5']['type']  = 'commonMenu';
$lang->widget->default['5']['grid']  = 4;

$lang->widget->default['6']['title'] = 'Changer Feed';
$lang->widget->default['6']['type']  = 'chanzhiDynamic';
$lang->widget->default['6']['grid']  = 4;

$lang->widget->typeList = new stdclass();
$lang->widget->typeList->latestOrder    = 'Latest Order';
$lang->widget->typeList->latestThread   = 'Latest Thread';
$lang->widget->typeList->message        = 'Feedback';
$lang->widget->typeList->wechatMessage  = '微信留言';
$lang->widget->typeList->submittion     = 'Latest Contribution';
$lang->widget->typeList->chanzhiDynamic = 'Changer Feed';
$lang->widget->typeList->html           = 'Custom';
$lang->widget->typeList->commonMenu     = 'Quick Entry';
/* yangcong */
$lang->yangcong = new stdclass();
$lang->yangcong->qrcodeInfo   = "请用洋葱客户端扫描下方二维码";
$lang->yangcong->scanFinished = "已完成扫描";
