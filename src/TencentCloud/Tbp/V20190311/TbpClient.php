<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace TencentCloud\Tbp\V20190311;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tbp\V20190311\Models as Models;

/**
* @method Models\ResetResponse Reset(Models\ResetRequest $req) 对当前机器人的会话状态进行复位
* @method Models\TextProcessResponse TextProcess(Models\TextProcessRequest $req) 接收调用侧的文本输入，返回应答文本。
* @method Models\TextResetResponse TextReset(Models\TextResetRequest $req) 会话重置接口
 */

class TbpClient extends AbstractClient
{
    /**
     * @var string 产品默认域名
     */
    protected $endpoint = "tbp.tencentcloudapi.com";

    /**
     * @var string api版本号
     */
    protected $version = "2019-03-11";

    /**
     * CvmClient constructor.
     * @param Credential $credential 认证类实例
     * @param string $region 地域
     * @param ClientProfile $profile client配置
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("tbp")."\\"."V20190311\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
