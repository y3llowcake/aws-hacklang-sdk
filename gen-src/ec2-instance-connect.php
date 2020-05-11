<?hh // strict
namespace slack\aws\ec2-instance-connect;

interface EC2 Instance Connect {
  public function SendSSHPublicKey(SendSSHPublicKeyRequest): Awaitable<Errors\Result<SendSSHPublicKeyResponse>>;
}

class AuthException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type AvailabilityZone = string;

class EC2InstanceNotFoundException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type InstanceId = string;

type InstanceOSUser = string;

class InvalidArgsException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type RequestId = string;

type SSHPublicKey = string;

class SendSSHPublicKeyRequest {
  public AvailabilityZone $availability_zone;
  public InstanceId $instance_id;
  public InstanceOSUser $instance_os_user;
  public SSHPublicKey $ssh_public_key;

  public function __construct(shape(
  ?'availability_zone' => AvailabilityZone,
  ?'instance_id' => InstanceId,
  ?'instance_os_user' => InstanceOSUser,
  ?'ssh_public_key' => SSHPublicKey,
  ) $s = shape()) {
    $this->availability_zone = $availability_zone ?? "";
    $this->instance_id = $instance_id ?? "";
    $this->instance_os_user = $instance_os_user ?? "";
    $this->ssh_public_key = $ssh_public_key ?? "";
  }
}

class SendSSHPublicKeyResponse {
  public RequestId $request_id;
  public Success $success;

  public function __construct(shape(
  ?'request_id' => RequestId,
  ?'success' => Success,
  ) $s = shape()) {
    $this->request_id = $request_id ?? "";
    $this->success = $success ?? false;
  }
}

class ServiceException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type String = string;

type Success = bool;

class ThrottlingException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

