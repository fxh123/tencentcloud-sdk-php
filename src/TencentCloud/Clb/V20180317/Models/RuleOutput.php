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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getLocationId() 获取转发规则的 ID
 * @method void setLocationId(string $LocationId) 设置转发规则的 ID
 * @method string getDomain() 获取转发规则的域名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomain(string $Domain) 设置转发规则的域名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUrl() 获取转发规则的路径。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置转发规则的路径。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSessionExpireTime() 获取会话保持时间
 * @method void setSessionExpireTime(integer $SessionExpireTime) 设置会话保持时间
 * @method HealthCheck getHealthCheck() 获取健康检查信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHealthCheck(HealthCheck $HealthCheck) 设置健康检查信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method CertificateOutput getCertificate() 获取证书信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertificate(CertificateOutput $Certificate) 设置证书信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheduler() 获取规则的请求转发方式
 * @method void setScheduler(string $Scheduler) 设置规则的请求转发方式
 * @method string getListenerId() 获取转发规则所属的监听器 ID
 * @method void setListenerId(string $ListenerId) 设置转发规则所属的监听器 ID
 * @method RewriteTarget getRewriteTarget() 获取转发规则的重定向目标信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRewriteTarget(RewriteTarget $RewriteTarget) 设置转发规则的重定向目标信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getHttpGzip() 获取是否开启gzip
 * @method void setHttpGzip(boolean $HttpGzip) 设置是否开启gzip
 * @method boolean getBeAutoCreated() 获取转发规则是否为自动创建
 * @method void setBeAutoCreated(boolean $BeAutoCreated) 设置转发规则是否为自动创建
 * @method boolean getDefaultServer() 获取是否作为默认域名
 * @method void setDefaultServer(boolean $DefaultServer) 设置是否作为默认域名
 * @method boolean getHttp2() 获取是否开启Http2
 * @method void setHttp2(boolean $Http2) 设置是否开启Http2
 * @method string getForwardType() 获取负载均衡与后端服务之间的转发协议
 * @method void setForwardType(string $ForwardType) 设置负载均衡与后端服务之间的转发协议
 */

/**
 *HTTP/HTTPS监听器的转发规则（输出）
 */
class RuleOutput extends AbstractModel
{
    /**
     * @var string 转发规则的 ID
     */
    public $LocationId;

    /**
     * @var string 转发规则的域名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Domain;

    /**
     * @var string 转发规则的路径。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @var integer 会话保持时间
     */
    public $SessionExpireTime;

    /**
     * @var HealthCheck 健康检查信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HealthCheck;

    /**
     * @var CertificateOutput 证书信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Certificate;

    /**
     * @var string 规则的请求转发方式
     */
    public $Scheduler;

    /**
     * @var string 转发规则所属的监听器 ID
     */
    public $ListenerId;

    /**
     * @var RewriteTarget 转发规则的重定向目标信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RewriteTarget;

    /**
     * @var boolean 是否开启gzip
     */
    public $HttpGzip;

    /**
     * @var boolean 转发规则是否为自动创建
     */
    public $BeAutoCreated;

    /**
     * @var boolean 是否作为默认域名
     */
    public $DefaultServer;

    /**
     * @var boolean 是否开启Http2
     */
    public $Http2;

    /**
     * @var string 负载均衡与后端服务之间的转发协议
     */
    public $ForwardType;
    /**
     * @param string $LocationId 转发规则的 ID
     * @param string $Domain 转发规则的域名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Url 转发规则的路径。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SessionExpireTime 会话保持时间
     * @param HealthCheck $HealthCheck 健康检查信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param CertificateOutput $Certificate 证书信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Scheduler 规则的请求转发方式
     * @param string $ListenerId 转发规则所属的监听器 ID
     * @param RewriteTarget $RewriteTarget 转发规则的重定向目标信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $HttpGzip 是否开启gzip
     * @param boolean $BeAutoCreated 转发规则是否为自动创建
     * @param boolean $DefaultServer 是否作为默认域名
     * @param boolean $Http2 是否开启Http2
     * @param string $ForwardType 负载均衡与后端服务之间的转发协议
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
        if (array_key_exists("LocationId",$param) and $param["LocationId"] !== null) {
            $this->LocationId = $param["LocationId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("SessionExpireTime",$param) and $param["SessionExpireTime"] !== null) {
            $this->SessionExpireTime = $param["SessionExpireTime"];
        }

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = new HealthCheck();
            $this->HealthCheck->deserialize($param["HealthCheck"]);
        }

        if (array_key_exists("Certificate",$param) and $param["Certificate"] !== null) {
            $this->Certificate = new CertificateOutput();
            $this->Certificate->deserialize($param["Certificate"]);
        }

        if (array_key_exists("Scheduler",$param) and $param["Scheduler"] !== null) {
            $this->Scheduler = $param["Scheduler"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("RewriteTarget",$param) and $param["RewriteTarget"] !== null) {
            $this->RewriteTarget = new RewriteTarget();
            $this->RewriteTarget->deserialize($param["RewriteTarget"]);
        }

        if (array_key_exists("HttpGzip",$param) and $param["HttpGzip"] !== null) {
            $this->HttpGzip = $param["HttpGzip"];
        }

        if (array_key_exists("BeAutoCreated",$param) and $param["BeAutoCreated"] !== null) {
            $this->BeAutoCreated = $param["BeAutoCreated"];
        }

        if (array_key_exists("DefaultServer",$param) and $param["DefaultServer"] !== null) {
            $this->DefaultServer = $param["DefaultServer"];
        }

        if (array_key_exists("Http2",$param) and $param["Http2"] !== null) {
            $this->Http2 = $param["Http2"];
        }

        if (array_key_exists("ForwardType",$param) and $param["ForwardType"] !== null) {
            $this->ForwardType = $param["ForwardType"];
        }
    }
}
