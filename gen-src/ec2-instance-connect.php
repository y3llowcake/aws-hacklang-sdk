<?hh // strict
namespace slack\aws\ec2-instance-connect;

interface EC2 Instance Connect {
  public function SendSSHPublicKey(SendSSHPublicKeyRequest) Awaitable<Errors\Result<SendSSHPublicKeyResponse>>;
}

class AuthException {
  public string $message;
}

class AvailabilityZone {
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

class RequestId {
}

class SSHPublicKey {
}

class SendSSHPublicKeyRequest {
  public AvailabilityZone $availability_zone;
  public InstanceId $instance_id;
  public InstanceOSUser $instance_os_user;
  public SSHPublicKey $ssh_public_key;
}

class SendSSHPublicKeyResponse {
  public RequestId $request_id;
  public Success $success;
}

class ServiceException {
  public string $message;
}

class String {
}

class Success {
}

class ThrottlingException {
  public string $message;
}

