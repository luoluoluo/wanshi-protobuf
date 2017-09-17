<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Protobuf;

/**
 */
class AccountClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 登陆
     * @param \Protobuf\LoginRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Login(\Protobuf\LoginRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protobuf.Account/Login',
        $argument,
        ['\Protobuf\LoginResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 注册
     * @param \Protobuf\RegisterRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Register(\Protobuf\RegisterRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protobuf.Account/Register',
        $argument,
        ['\Protobuf\RegisterResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 登陆校验
     * @param \Protobuf\AuthRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Auth(\Protobuf\AuthRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protobuf.Account/Auth',
        $argument,
        ['\Protobuf\AuthResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 重置密码
     * @param \Protobuf\ResetPasswordRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ResetPassword(\Protobuf\ResetPasswordRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protobuf.Account/ResetPassword',
        $argument,
        ['\Protobuf\ResetPasswordResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 发送留言邮件
     * @param \Protobuf\EmailRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Email(\Protobuf\EmailRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protobuf.Account/Email',
        $argument,
        ['\Protobuf\EmailResponse', 'decode'],
        $metadata, $options);
    }

}
