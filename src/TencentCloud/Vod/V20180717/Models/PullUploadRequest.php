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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getMediaUrl() 获取要拉取的媒体 URL，暂不支持拉取 HLS 和 Dash 格式。
<li>URL 里文件名需要包括扩展名, 比如 ```https://xxxx.mp4``` ，扩展名为 mp4，支持的扩展名详见[文件类型](https://cloud.tencent.com/document/product/266/9760#.E6.96.87.E4.BB.B6.E7.B1.BB.E5.9E.8B)。</li>
 * @method void setMediaUrl(string $MediaUrl) 设置要拉取的媒体 URL，暂不支持拉取 HLS 和 Dash 格式。
<li>URL 里文件名需要包括扩展名, 比如 ```https://xxxx.mp4``` ，扩展名为 mp4，支持的扩展名详见[文件类型](https://cloud.tencent.com/document/product/266/9760#.E6.96.87.E4.BB.B6.E7.B1.BB.E5.9E.8B)。</li>
 * @method string getMediaName() 获取媒体名称。
 * @method void setMediaName(string $MediaName) 设置媒体名称。
 * @method string getCoverUrl() 获取要拉取的视频封面 URL。仅支持 gif、jpeg、png 三种图片格式。
 * @method void setCoverUrl(string $CoverUrl) 设置要拉取的视频封面 URL。仅支持 gif、jpeg、png 三种图片格式。
 * @method string getProcedure() 获取媒体后续任务操作，详见[上传指定任务流](https://cloud.tencent.com/document/product/266/9759)。
 * @method void setProcedure(string $Procedure) 设置媒体后续任务操作，详见[上传指定任务流](https://cloud.tencent.com/document/product/266/9759)。
 * @method string getExpireTime() 获取媒体文件过期时间，格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
 * @method void setExpireTime(string $ExpireTime) 设置媒体文件过期时间，格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
 * @method string getStorageRegion() 获取指定上传园区，仅适用于对上传地域有特殊需求的用户（目前仅支持北京、上海和重庆园区）。
 * @method void setStorageRegion(string $StorageRegion) 设置指定上传园区，仅适用于对上传地域有特殊需求的用户（目前仅支持北京、上海和重庆园区）。
 * @method integer getClassId() 获取分类ID，用于对媒体进行分类管理，可通过[创建分类](https://cloud.tencent.com/document/product/266/7812)接口，创建分类，获得分类 ID。
 * @method void setClassId(integer $ClassId) 设置分类ID，用于对媒体进行分类管理，可通过[创建分类](https://cloud.tencent.com/document/product/266/7812)接口，创建分类，获得分类 ID。
 * @method string getSessionContext() 获取来源上下文，用于透传用户请求信息，当指定 Procedure 任务后，任务流状态变更回调将返回该字段值，最长 1000 个字符。
 * @method void setSessionContext(string $SessionContext) 设置来源上下文，用于透传用户请求信息，当指定 Procedure 任务后，任务流状态变更回调将返回该字段值，最长 1000 个字符。
 * @method string getSessionId() 获取用于去重的识别码，如果七天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
 * @method void setSessionId(string $SessionId) 设置用于去重的识别码，如果七天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
 * @method integer getSubAppId() 获取点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
 * @method void setSubAppId(integer $SubAppId) 设置点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
 */

/**
 *PullUpload请求参数结构体
 */
class PullUploadRequest extends AbstractModel
{
    /**
     * @var string 要拉取的媒体 URL，暂不支持拉取 HLS 和 Dash 格式。
<li>URL 里文件名需要包括扩展名, 比如 ```https://xxxx.mp4``` ，扩展名为 mp4，支持的扩展名详见[文件类型](https://cloud.tencent.com/document/product/266/9760#.E6.96.87.E4.BB.B6.E7.B1.BB.E5.9E.8B)。</li>
     */
    public $MediaUrl;

    /**
     * @var string 媒体名称。
     */
    public $MediaName;

    /**
     * @var string 要拉取的视频封面 URL。仅支持 gif、jpeg、png 三种图片格式。
     */
    public $CoverUrl;

    /**
     * @var string 媒体后续任务操作，详见[上传指定任务流](https://cloud.tencent.com/document/product/266/9759)。
     */
    public $Procedure;

    /**
     * @var string 媒体文件过期时间，格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
     */
    public $ExpireTime;

    /**
     * @var string 指定上传园区，仅适用于对上传地域有特殊需求的用户（目前仅支持北京、上海和重庆园区）。
     */
    public $StorageRegion;

    /**
     * @var integer 分类ID，用于对媒体进行分类管理，可通过[创建分类](https://cloud.tencent.com/document/product/266/7812)接口，创建分类，获得分类 ID。
     */
    public $ClassId;

    /**
     * @var string 来源上下文，用于透传用户请求信息，当指定 Procedure 任务后，任务流状态变更回调将返回该字段值，最长 1000 个字符。
     */
    public $SessionContext;

    /**
     * @var string 用于去重的识别码，如果七天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
     */
    public $SessionId;

    /**
     * @var integer 点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
     */
    public $SubAppId;
    /**
     * @param string $MediaUrl 要拉取的媒体 URL，暂不支持拉取 HLS 和 Dash 格式。
<li>URL 里文件名需要包括扩展名, 比如 ```https://xxxx.mp4``` ，扩展名为 mp4，支持的扩展名详见[文件类型](https://cloud.tencent.com/document/product/266/9760#.E6.96.87.E4.BB.B6.E7.B1.BB.E5.9E.8B)。</li>
     * @param string $MediaName 媒体名称。
     * @param string $CoverUrl 要拉取的视频封面 URL。仅支持 gif、jpeg、png 三种图片格式。
     * @param string $Procedure 媒体后续任务操作，详见[上传指定任务流](https://cloud.tencent.com/document/product/266/9759)。
     * @param string $ExpireTime 媒体文件过期时间，格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
     * @param string $StorageRegion 指定上传园区，仅适用于对上传地域有特殊需求的用户（目前仅支持北京、上海和重庆园区）。
     * @param integer $ClassId 分类ID，用于对媒体进行分类管理，可通过[创建分类](https://cloud.tencent.com/document/product/266/7812)接口，创建分类，获得分类 ID。
     * @param string $SessionContext 来源上下文，用于透传用户请求信息，当指定 Procedure 任务后，任务流状态变更回调将返回该字段值，最长 1000 个字符。
     * @param string $SessionId 用于去重的识别码，如果七天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
     * @param integer $SubAppId 点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
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
        if (array_key_exists("MediaUrl",$param) and $param["MediaUrl"] !== null) {
            $this->MediaUrl = $param["MediaUrl"];
        }

        if (array_key_exists("MediaName",$param) and $param["MediaName"] !== null) {
            $this->MediaName = $param["MediaName"];
        }

        if (array_key_exists("CoverUrl",$param) and $param["CoverUrl"] !== null) {
            $this->CoverUrl = $param["CoverUrl"];
        }

        if (array_key_exists("Procedure",$param) and $param["Procedure"] !== null) {
            $this->Procedure = $param["Procedure"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("StorageRegion",$param) and $param["StorageRegion"] !== null) {
            $this->StorageRegion = $param["StorageRegion"];
        }

        if (array_key_exists("ClassId",$param) and $param["ClassId"] !== null) {
            $this->ClassId = $param["ClassId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
