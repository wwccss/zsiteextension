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
                ->remove('uid,lang,cn2tw,defaultLang')
                ->get();

            if($setting->modules == 'initial') unset($setting->modules);

            $result = $this->loadModel('setting')->setItems('system.common.site', $setting);
            if(!$result) $this->send(array('result' => 'fail', 'message' => $this->lang->fail));
            if($setting->mobileTemplate == 'close') $this->session->set('device', 'desktop');

            if($this->post->lang)
            {
                $setting = fixer::input('post')
                    ->setDefault('cn2tw', 0)
                    ->join('lang', ',')
                    ->join('cn2tw', '')
                    ->get('lang,cn2tw,defaultLang');

                if(empty($setting->defaultLang)) $this->send(array('result' => 'fail', 'message' => $this->lang->fail));
                if(strpos($setting->lang, $setting->defaultLang) === false) $this->send(array('result' => 'fail', 'message' => $this->lang->fail));

                $result = $this->loadModel('setting')->setItems('system.common.site', $setting, $lang = 'all');
                $this->dao->delete()->from(TABLE_CONFIG)->where("`key`")->eq('defaultLang')->andWhere('lang')->ne('all')->exec();
                if(!$result) $this->send(array('result' => 'fail', 'message' => $this->lang->fail));
            }
            $this->send(array('result' => 'success', 'message' => $this->lang->setSuccess, 'locate' => inlink('setbasic')));
        }

        $this->view->title = $this->lang->site->setBasic;
        $this->display();
    }

}
?>
