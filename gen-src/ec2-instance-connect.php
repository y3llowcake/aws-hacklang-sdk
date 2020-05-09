<?hh // strict
namespace slack\aws\ec2-instance-connect;

interface EC2 Instance Connect {
  public function SendSSHPublicKey(SendSSHPublicKeyRequest) Awaitable<Errors\Result<SendSSHPublicKeyResponse>>;
}

class AvailabilityZone {
}

class ThrottlingException {
  public string $message;
}

class RequestId {
}

class SendSSHPublicKeyResponse {
  public RequestId $request_id;
  public Success $success;
}

class EC2InstanceNotFoundException {
  public string $message;
}

class InstanceId {
}

class InstanceOSUser {
}

class InvalidArgsException {
  public string $message;
}

class SendSSHPublicKeyRequest {
  public InstanceId $instance_id;
  public InstanceOSUser $instance_os_user;
  public SSHPublicKey $ssh_public_key;
  public AvailabilityZone $availability_zone;
}

class String {
}

class AuthException {
  public string $message;
}

class SSHPublicKey {
}

class ServiceException {
  public string $message;
}

class Success {
}

