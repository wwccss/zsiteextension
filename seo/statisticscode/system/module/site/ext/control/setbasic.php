<?php
class site extends control
{
    /**
     * set site basic info.
     *
     * @access public
     * @return void
     */

    public function setBasic()
    {
        $allowedTags = $this->app->user->admin == 'super' ? $this->config->allowedTags->admin : $this->config->allowedTags->front;

        if(!empty($_POST))
        {
            $setting = fixer::input('post')
                ->stripTags('meta', $allowedTags)
                ->stripTags('tongji', $allowedTags)
                ->join('modules', ',')
                ->remove('allowedFiles')
                ->setDefault('modules', '')
                ->stripTags('pauseTip', $allowedTags)
                ->remove('uid,lang,cn2tw,defaultLang,requestType')
                ->get();

            if(strpos($setting->modules, 'shop') !== false  && strpos($setting->modules, 'user') === false) $setting->modules = 'user,' . $setting->modules;
            if($setting->modules == 'initial') unset($setting->modules);

            $result = $this->loadModel('setting')->setItems('system.common.site', $setting);
            if(!$result) $this->send(array('result' => 'fail', 'message' => $this->lang->fail));

            /* Set global settings. */
            $globalSetting = new stdclass();
            if($this->post->lang)
            {
                $globalSetting->lang        = join(',', $this->post->lang);
                $globalSetting->cn2tw       = join('', $this->post->cn2tw);
                $globalSetting->defaultLang = $this->post->defaultLang;
            }

            if($this->post->requestType) $globalSetting->requestType = $this->post->requestType;

            $result = $this->loadModel('setting')->setItems('system.common.site', $globalSetting, 'all');
            if(!$result) $this->send(array('result' => 'fail', 'message' => $this->lang->fail));

            /* Switch to desktop device if mobile template closed. */
            if($setting->mobileTemplate == 'close') $this->session->set('device', 'desktop');
            $this->send(array('result' => 'success', 'message' => $this->lang->setSuccess, 'locate' => inlink('setbasic')));
        }

        $this->view->title = $this->lang->site->common;
        $this->display();
    }

}
?>
