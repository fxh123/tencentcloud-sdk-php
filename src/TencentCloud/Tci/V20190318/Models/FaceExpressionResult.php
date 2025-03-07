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
namespace TencentCloud\Tci\V20190318\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method float getConfidence() 获取表情置信度
 * @method void setConfidence(float $Confidence) 设置表情置信度
 * @method string getExpression() 获取表情识别结果
 * @method void setExpression(string $Expression) 设置表情识别结果
 */

/**
 *FaceExpressionResult
 */
class FaceExpressionResult extends AbstractModel
{
    /**
     * @var float 表情置信度
     */
    public $Confidence;

    /**
     * @var string 表情识别结果
     */
    public $Expression;
    /**
     * @param float $Confidence 表情置信度
     * @param string $Expression 表情识别结果
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
        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Expression",$param) and $param["Expression"] !== null) {
            $this->Expression = $param["Expression"];
        }
    }
}
