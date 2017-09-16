<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Protobuf;

/**
 */
class ResumeClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 简历列表
     * @param \Protobuf\ResumesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Resumes(\Protobuf\ResumesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protobuf.Resume/Resumes',
        $argument,
        ['\Protobuf\ResumesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 简历详情
     * @param \Protobuf\ResumeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Resume(\Protobuf\ResumeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protobuf.Resume/Resume',
        $argument,
        ['\Protobuf\ResumeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * profile 编辑
     * @param \Protobuf\UpdateProfileRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateProfile(\Protobuf\UpdateProfileRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protobuf.Resume/UpdateProfile',
        $argument,
        ['\Protobuf\UpdateProfileResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 新增项目
     * @param \Protobuf\AddProjectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AddProject(\Protobuf\AddProjectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protobuf.Resume/AddProject',
        $argument,
        ['\Protobuf\AddProjectResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 编辑项目
     * @param \Protobuf\UpdateProjectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateProject(\Protobuf\UpdateProjectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protobuf.Resume/UpdateProject',
        $argument,
        ['\Protobuf\UpdateProjectResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 删除项目
     * @param \Protobuf\DeleteProjectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteProject(\Protobuf\DeleteProjectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protobuf.Resume/DeleteProject',
        $argument,
        ['\Protobuf\DeleteProjectResponse', 'decode'],
        $metadata, $options);
    }

}
