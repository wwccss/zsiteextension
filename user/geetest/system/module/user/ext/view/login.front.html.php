<?php if(!defined("RUN_MODE")) die();?>
<?php
include TPL_ROOT . 'common/header.html.php';
js::import($jsRoot . 'md5.js');
js::set('random', $this->session->random);
?>
<div class='panel panel-body' id='login'>
  <div class='row'>
    <?php 
    foreach($lang->user->oauth->providers as $providerCode => $providerName) $providerConfig[$providerCode] = isset($config->oauth->$providerCode) ? json_decode($config->oauth->$providerCode) : '';
    if(!empty($providerConfig['sina']->clientID) or !empty($providerConfig['qq']->clientID)):
    ?>
    <div class='col-md-6'>
      <div class='panel panel-pure'>
        <div class='panel-heading'><strong><?php echo $lang->user->oauth->lblWelcome;?></strong></div>
        <div class='panel-body'>
        <?php 
        foreach($lang->user->oauth->providers as $providerCode => $providerName) 
        {
            $providerConfig = isset($config->oauth->$providerCode) ? json_decode($config->oauth->$providerCode) : '';
            if(empty($providerConfig->clientID)) continue;
            $params = "provider=$providerCode";
            if($referer and !strpos($referer, 'login') and !strpos($referer, 'oauth')) $params .= "&referer=" . helper::safe64Encode($referer);
            echo html::a(inlink('oauthLogin', $params), "<i class='icon-{$providerCode} icon'></i> " . $providerName, "class='btn btn-default btn-oauth btn-lg btn-block btn-{$providerCode}'");
        }
        ?>
        </div>
      </div>
    </div>
    <div class='col-md-6'>
    <?php else:?>
    <div class='col-md-12'>
    <?php endif;?>
      <div class='panel panel-pure'>
        <div class='panel-heading'><strong><?php echo $lang->user->login->welcome;?></strong></div>
        <div class='panel-body'>
          <form method='post' id='ajaxForm' role='form'>
            <div class='form-group hiding'><div id='formError' class='alert alert-danger'></div></div>
            <div class='form-group'><?php echo html::input('account','',"placeholder='{$lang->user->inputAccountOrEmail}' class='form-control input-lg'");?></div>
            <div class='form-group'><?php echo html::password('password','',"placeholder='{$lang->user->inputPassword}' class='form-control input-lg'");?></div>
            <div>
                    <div id="embed-captcha" ></div>
                    <p id="wait" class="show">正在加载验证码......</p>
                    <p id="notice" class="hide">请先拖动验证码到相应位置</p><br/>
            <div>
            <input type="submit" class="btn btn-primary btn-wider btn-lg" id="embed-submit" value="登录"/>
             &nbsp; &nbsp;
            <?php echo html::a(inlink('register'), $lang->user->register->common);?> &nbsp; &nbsp; 
            <?php if($config->mail->turnon) echo html::a(inlink('resetpassword'), $lang->user->recoverPassword);?>
            <?php echo html::hidden('referer', $referer);?>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include TPL_ROOT . 'common/footer.html.php'; ?>
<!-- 引入封装了failback的接口initGeetest -->
<script src="http://static.geetest.com/static/tools/gt.js"></script>

<script>
    var handlerEmbed = function (captchaObj) {
        $("#embed-submit").click(function (e) {
            var validate = captchaObj.getValidate();
            if (!validate) {
                $("#notice")[0].className = "show";
                setTimeout(function () {
                    $("#notice")[0].className = "hide";
                }, 2000);
                e.preventDefault();
            }
        });
        // 将验证码加到id为captcha的元素里
        captchaObj.appendTo("#embed-captcha");
        captchaObj.onReady(function () {
            $("#wait")[0].className = "hide";
        });
    };
    $.ajax({
        // 获取id，challenge，success（是否启用failback）
        url: "../system/module/user/ext/web/StartCaptchaServlet.php?t=" + (new Date()).getTime(), // 加随机数防止缓存
        type: "get",
        dataType: "json",
        success: function (data) {
            // 使用initGeetest接口
            // 参数1：配置参数
            // 参数2：回调，回调的第一个参数验证码对象，之后可以使用它做appendTo之类的事件
            initGeetest({
                gt: data.gt,
                challenge: data.challenge,
                product: "embed", // 产品形式，包括：float，embed，popup。注意只对PC版验证码有效
                offline: !data.success // 表示用户后台检测极验服务器是否宕机，一般不需要关注
            }, handlerEmbed);
        }
    });
</script>
