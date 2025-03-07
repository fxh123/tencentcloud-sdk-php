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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getTime() 获取时间点，格式为yyyy-mm-dd HH:MM:SS。
 * @method void setTime(string $Time) 设置时间点，格式为yyyy-mm-dd HH:MM:SS。
 * @method float getBandwidth() 获取带宽，单位是Mbps。
 * @method void setBandwidth(float $Bandwidth) 设置带宽，单位是Mbps。
 * @method float getFlux() 获取流量，单位是MB。
 * @method void setFlux(float $Flux) 设置流量，单位是MB。
 */

/**
 *带宽和流量信息
 */
class BillDataInfo extends AbstractModel
{
    /**
     * @var string 时间点，格式为yyyy-mm-dd HH:MM:SS。
     */
    public $Time;

    /**
     * @var float 带宽，单位是Mbps。
     */
    public $Bandwidth;

    /**
     * @var float 流量，单位是MB。
     */
    public $Flux;
    /**
     * @param string $Time 时间点，格式为yyyy-mm-dd HH:MM:SS。
     * @param float $Bandwidth 带宽，单位是Mbps。
     * @param float $Flux 流量，单位是MB。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("Flux",$param) and $param["Flux"] !== null) {
            $this->Flux = $param["Flux"];
        }
    }
}
