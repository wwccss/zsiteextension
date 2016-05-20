<?php if(!defined("RUN_MODE")) die();?>
<?php
include '../../../common/view/header.lite.html.php';
js::import($jsRoot . 'fingerprint/fingerprint.js');
js::import($jsRoot . 'md5.js');
js::set('scriptName', $_SERVER['SCRIPT_NAME']);
js::set('random', $this->session->random);
?>
<div class='container'>
  <div id='adminLogin'>
    <div id='siteName'>
      <?php echo $this->config->site->name;?>
      <div class='pull-right'>
        <div class='dropdown' id='langs'>
          <button class='btn' data-toggle='dropdown' title='Change Language/更换语言/更換語言'><?php echo $config->langs[$this->app->getClientLang()]; ?> <span class='caret'></span></button>
          <ul class='dropdown-menu'>
            <?php foreach($config->langs as $key => $value):?>
            <li class="<?php echo $key == $this->app->getClientLang() ? 'active' : ''; ?>">
              <a href='###' data-value="<?php echo $key;?>"><?php echo $value;?></a>
            </li>
            <?php endforeach;?>
          </ul>
        </div>
      </div>
    </div>
    <form method='post' id='ajaxForm' data-checkfingerprint='1'>
      <div id='formError' class='alert alert-danger hiding'></div>
      <div class='row'>
        <div class='col-xs-4 text-center'>
        <?php echo html::image($this->config->webRoot . 'theme/default/default/images/main/logo.login.admin.png'); ?>
        </div>
        <div class='col-xs-8'>
          <table class="table table-form">
            <tr>
              <th class='w-60px'><?php echo $lang->user->account?></th>
              <td><?php echo html::input('account','',"class='form-control' placeholder='{$lang->user->inputAccountOrEmail}'");?></td>
            </tr>
            <tr>
              <th><?php echo $lang->user->password?></th>
              <td><?php echo html::password('password','',"class='form-control' placeholder='{$lang->user->inputPassword}'");?></td>
            </tr>
            <tr>
              <th><?php echo html::a('', $lang->save, "data-toggle='modal' class='hidden captchaModal'")?></th>
              <td>
               <div id="popup-captcha"></div>  
               <input type="submit" class="btn btn-primary btn" id="popup-submit" value="登录"/>
               <?php if(!empty($this->config->site->yangcong)) echo html::a(helper::createLink('yangcong', 'qrcode', "referer=" . helper::safe64Encode($referer)), "<i class='icon icon-qrcode icon-lg'> {$lang->user->yangcongLogin}</i>", "class='btn btn-success pull-right' data-toggle='modal'");?>
              </td>
            </tr>
          </table>
          <?php echo html::hidden('referer', $referer);?>
        </div>
      </div>
    </form>
  </div>
</div>
<?php
if($config->debug) js::import($jsRoot . 'jquery/form/min.js');
if(isset($pageJS)) js::execute($pageJS);
?>
<!-- 引入封装了failback的接口initGeetest -->
<script src="http://static.geetest.com/static/tools/gt.js"></script>

<script>
    $("body").keydown(function() {
        if (event.keyCode == "13") {//keyCode=13是回车键
            $("#popup-submit").click();
        }
    });

    var handlerPopup = function (captchaObj) {
        $("#popup-submit").click(function (e) {
            var validate = captchaObj.getValidate();
            if (!validate) {                
                e.preventDefault();
            }
            $.ajax({
                url: "../web/VerifyLoginServlet.php", // 进行二次验证
                type: "post",
                // dataType: "json",
                data: {
                    // 二次验证所需的三个值
                    geetest_challenge: validate.geetest_challenge,
                    geetest_validate: validate.geetest_validate,
                    geetest_seccode: validate.geetest_seccode
                },

            });
        });
        // 弹出式需要绑定触发验证码弹出按钮
        captchaObj.bindOn("#popup-submit");
        // 将验证码加到id为captcha的元素里
        captchaObj.appendTo("#popup-captcha");
        // 更多接口参考：http://www.geetest.com/install/sections/idx-client-sdk.html
    };
    $.ajax({
        // 获取id，challenge，success（是否启用failback）
        url: "../web/StartCaptchaServlet.php?t=" + (new Date()).getTime(), // 加随机数防止缓存
        type: "get",
        dataType: "json",
        success: function (data) {
            // 使用initGeetest接口
            // 参数1：配置参数
            // 参数2：回调，回调的第一个参数验证码对象，之后可以使用它做appendTo之类的事件
            initGeetest({
                gt: data.gt,
                challenge: data.challenge,
                product: "popup", // 产品形式，包括：float，embed，popup。注意只对PC版验证码有效
                offline: !data.success // 表示用户后台检测极验服务器是否宕机，一般不需要关注
            }, handlerPopup);
        }
    });
</script>

</body>
</html>
