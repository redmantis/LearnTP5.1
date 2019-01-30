<?php

/*
  +----------------------------------------------------------------------
  | SunkenFish [ LISTEN TO THE SHOCKING THUNDERCLAP IN THE QUIET AND NOISELESS PLACE]
  +----------------------------------------------------------------------
  | Copyright (c) 2016-2019 http://www.fakeruhe.com All rights reserved.
  +----------------------------------------------------------------------
  | Author: 黑鱼� <feiyufly001@gmail.com>
  +----------------------------------------------------------------------
 */

namespace app\index\controller;
use think\facade\App;
use think\Controller;
use QcloudImage\CIClient;

/**
 * Description of Image
 *
 * @author RDM
 */
class Image extends Base {
    public function index() {
        require_once App::getRootPath() . 'extend/QcloudImage/autoload.php';
        $appid = '1253114713';
        $secretId = 'AKIDvlZItK7rumTzKVqK7pQtCLKCuRuXNrJa';
        $secretKey = 'GMH19B3vdAVggWBh4GI9883ypW2NH6lG';
        $bucket = 'YOUR_BUCKET';
        $client = new CIClient($appid, $secretId, $secretKey, $bucket);

        //推荐使用https
        $client->useHttps();

        // 设置超时
        $client->setTimeout(30);

        if ($this->request->isPost()) {
            $data = input('post.');
            $nd = [];
//            if ($_FILES('file')) {
//                $f = file_get_contens($_FILES['file']['tmp_name']);
//                $nd['buffer'] = $f;
//            }
            if ($data['url']) {
                $nd['url'] = $data['url'];
            }

//            $rs = $client->tagDetect(array('url' => 'http://open.youtu.qq.com./static/img/imag_02.f43527f.jpg'));
            $rs = $client->tagDetect($nd);
            $res = json_decode($rs, true);
            foreach ($res['tags'] as $v) {
                echo $v['tag_name'] . "<br />";
            }
        }
        return $this->fetch();
    }

}
