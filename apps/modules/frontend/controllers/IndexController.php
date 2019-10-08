<?php
/**
 * @Author: rzqiangchina@gmail.com
 * @Date: 2019/9/5 0005
 * @Describe: You can write notes here.
 */

namespace Multiple\Modules\Frontend\Controllers;

class IndexController extends ControllerBase
{
    public function indexAction()
    {

        $this->view->version = $this->config->app->version;

    }

    public function resumeAction()
    {

    }

}
