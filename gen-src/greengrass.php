<?hh // strict
namespace slack\aws\greengrass;

interface Greengrass {
  public function AssociateRoleToGroup(AssociateRoleToGroupRequest $in): Awaitable<\Errors\Result<AssociateRoleToGroupResponse>>;
  public function AssociateServiceRoleToAccount(AssociateServiceRoleToAccountRequest $in): Awaitable<\Errors\Result<AssociateServiceRoleToAccountResponse>>;
  public function CreateConnectorDefinition(CreateConnectorDefinitionRequest $in): Awaitable<\Errors\Result<CreateConnectorDefinitionResponse>>;
  public function CreateConnectorDefinitionVersion(CreateConnectorDefinitionVersionRequest $in): Awaitable<\Errors\Result<CreateConnectorDefinitionVersionResponse>>;
  public function CreateCoreDefinition(CreateCoreDefinitionRequest $in): Awaitable<\Errors\Result<CreateCoreDefinitionResponse>>;
  public function CreateCoreDefinitionVersion(CreateCoreDefinitionVersionRequest $in): Awaitable<\Errors\Result<CreateCoreDefinitionVersionResponse>>;
  public function CreateDeployment(CreateDeploymentRequest $in): Awaitable<\Errors\Result<CreateDeploymentResponse>>;
  public function CreateDeviceDefinition(CreateDeviceDefinitionRequest $in): Awaitable<\Errors\Result<CreateDeviceDefinitionResponse>>;
  public function CreateDeviceDefinitionVersion(CreateDeviceDefinitionVersionRequest $in): Awaitable<\Errors\Result<CreateDeviceDefinitionVersionResponse>>;
  public function CreateFunctionDefinition(CreateFunctionDefinitionRequest $in): Awaitable<\Errors\Result<CreateFunctionDefinitionResponse>>;
  public function CreateFunctionDefinitionVersion(CreateFunctionDefinitionVersionRequest $in): Awaitable<\Errors\Result<CreateFunctionDefinitionVersionResponse>>;
  public function CreateGroup(CreateGroupRequest $in): Awaitable<\Errors\Result<CreateGroupResponse>>;
  public function CreateGroupCertificateAuthority(CreateGroupCertificateAuthorityRequest $in): Awaitable<\Errors\Result<CreateGroupCertificateAuthorityResponse>>;
  public function CreateGroupVersion(CreateGroupVersionRequest $in): Awaitable<\Errors\Result<CreateGroupVersionResponse>>;
  public function CreateLoggerDefinition(CreateLoggerDefinitionRequest $in): Awaitable<\Errors\Result<CreateLoggerDefinitionResponse>>;
  public function CreateLoggerDefinitionVersion(CreateLoggerDefinitionVersionRequest $in): Awaitable<\Errors\Result<CreateLoggerDefinitionVersionResponse>>;
  public function CreateResourceDefinition(CreateResourceDefinitionRequest $in): Awaitable<\Errors\Result<CreateResourceDefinitionResponse>>;
  public function CreateResourceDefinitionVersion(CreateResourceDefinitionVersionRequest $in): Awaitable<\Errors\Result<CreateResourceDefinitionVersionResponse>>;
  public function CreateSoftwareUpdateJob(CreateSoftwareUpdateJobRequest $in): Awaitable<\Errors\Result<CreateSoftwareUpdateJobResponse>>;
  public function CreateSubscriptionDefinition(CreateSubscriptionDefinitionRequest $in): Awaitable<\Errors\Result<CreateSubscriptionDefinitionResponse>>;
  public function CreateSubscriptionDefinitionVersion(CreateSubscriptionDefinitionVersionRequest $in): Awaitable<\Errors\Result<CreateSubscriptionDefinitionVersionResponse>>;
  public function DeleteConnectorDefinition(DeleteConnectorDefinitionRequest $in): Awaitable<\Errors\Result<DeleteConnectorDefinitionResponse>>;
  public function DeleteCoreDefinition(DeleteCoreDefinitionRequest $in): Awaitable<\Errors\Result<DeleteCoreDefinitionResponse>>;
  public function DeleteDeviceDefinition(DeleteDeviceDefinitionRequest $in): Awaitable<\Errors\Result<DeleteDeviceDefinitionResponse>>;
  public function DeleteFunctionDefinition(DeleteFunctionDefinitionRequest $in): Awaitable<\Errors\Result<DeleteFunctionDefinitionResponse>>;
  public function DeleteGroup(DeleteGroupRequest $in): Awaitable<\Errors\Result<DeleteGroupResponse>>;
  public function DeleteLoggerDefinition(DeleteLoggerDefinitionRequest $in): Awaitable<\Errors\Result<DeleteLoggerDefinitionResponse>>;
  public function DeleteResourceDefinition(DeleteResourceDefinitionRequest $in): Awaitable<\Errors\Result<DeleteResourceDefinitionResponse>>;
  public function DeleteSubscriptionDefinition(DeleteSubscriptionDefinitionRequest $in): Awaitable<\Errors\Result<DeleteSubscriptionDefinitionResponse>>;
  public function DisassociateRoleFromGroup(DisassociateRoleFromGroupRequest $in): Awaitable<\Errors\Result<DisassociateRoleFromGroupResponse>>;
  public function DisassociateServiceRoleFromAccount(DisassociateServiceRoleFromAccountRequest $in): Awaitable<\Errors\Result<DisassociateServiceRoleFromAccountResponse>>;
  public function GetAssociatedRole(GetAssociatedRoleRequest $in): Awaitable<\Errors\Result<GetAssociatedRoleResponse>>;
  public function GetBulkDeploymentStatus(GetBulkDeploymentStatusRequest $in): Awaitable<\Errors\Result<GetBulkDeploymentStatusResponse>>;
  public function GetConnectivityInfo(GetConnectivityInfoRequest $in): Awaitable<\Errors\Result<GetConnectivityInfoResponse>>;
  public function GetConnectorDefinition(GetConnectorDefinitionRequest $in): Awaitable<\Errors\Result<GetConnectorDefinitionResponse>>;
  public function GetConnectorDefinitionVersion(GetConnectorDefinitionVersionRequest $in): Awaitable<\Errors\Result<GetConnectorDefinitionVersionResponse>>;
  public function GetCoreDefinition(GetCoreDefinitionRequest $in): Awaitable<\Errors\Result<GetCoreDefinitionResponse>>;
  public function GetCoreDefinitionVersion(GetCoreDefinitionVersionRequest $in): Awaitable<\Errors\Result<GetCoreDefinitionVersionResponse>>;
  public function GetDeploymentStatus(GetDeploymentStatusRequest $in): Awaitable<\Errors\Result<GetDeploymentStatusResponse>>;
  public function GetDeviceDefinition(GetDeviceDefinitionRequest $in): Awaitable<\Errors\Result<GetDeviceDefinitionResponse>>;
  public function GetDeviceDefinitionVersion(GetDeviceDefinitionVersionRequest $in): Awaitable<\Errors\Result<GetDeviceDefinitionVersionResponse>>;
  public function GetFunctionDefinition(GetFunctionDefinitionRequest $in): Awaitable<\Errors\Result<GetFunctionDefinitionResponse>>;
  public function GetFunctionDefinitionVersion(GetFunctionDefinitionVersionRequest $in): Awaitable<\Errors\Result<GetFunctionDefinitionVersionResponse>>;
  public function GetGroup(GetGroupRequest $in): Awaitable<\Errors\Result<GetGroupResponse>>;
  public function GetGroupCertificateAuthority(GetGroupCertificateAuthorityRequest $in): Awaitable<\Errors\Result<GetGroupCertificateAuthorityResponse>>;
  public function GetGroupCertificateConfiguration(GetGroupCertificateConfigurationRequest $in): Awaitable<\Errors\Result<GetGroupCertificateConfigurationResponse>>;
  public function GetGroupVersion(GetGroupVersionRequest $in): Awaitable<\Errors\Result<GetGroupVersionResponse>>;
  public function GetLoggerDefinition(GetLoggerDefinitionRequest $in): Awaitable<\Errors\Result<GetLoggerDefinitionResponse>>;
  public function GetLoggerDefinitionVersion(GetLoggerDefinitionVersionRequest $in): Awaitable<\Errors\Result<GetLoggerDefinitionVersionResponse>>;
  public function GetResourceDefinition(GetResourceDefinitionRequest $in): Awaitable<\Errors\Result<GetResourceDefinitionResponse>>;
  public function GetResourceDefinitionVersion(GetResourceDefinitionVersionRequest $in): Awaitable<\Errors\Result<GetResourceDefinitionVersionResponse>>;
  public function GetServiceRoleForAccount(GetServiceRoleForAccountRequest $in): Awaitable<\Errors\Result<GetServiceRoleForAccountResponse>>;
  public function GetSubscriptionDefinition(GetSubscriptionDefinitionRequest $in): Awaitable<\Errors\Result<GetSubscriptionDefinitionResponse>>;
  public function GetSubscriptionDefinitionVersion(GetSubscriptionDefinitionVersionRequest $in): Awaitable<\Errors\Result<GetSubscriptionDefinitionVersionResponse>>;
  public function ListBulkDeploymentDetailedReports(ListBulkDeploymentDetailedReportsRequest $in): Awaitable<\Errors\Result<ListBulkDeploymentDetailedReportsResponse>>;
  public function ListBulkDeployments(ListBulkDeploymentsRequest $in): Awaitable<\Errors\Result<ListBulkDeploymentsResponse>>;
  public function ListConnectorDefinitionVersions(ListConnectorDefinitionVersionsRequest $in): Awaitable<\Errors\Result<ListConnectorDefinitionVersionsResponse>>;
  public function ListConnectorDefinitions(ListConnectorDefinitionsRequest $in): Awaitable<\Errors\Result<ListConnectorDefinitionsResponse>>;
  public function ListCoreDefinitionVersions(ListCoreDefinitionVersionsRequest $in): Awaitable<\Errors\Result<ListCoreDefinitionVersionsResponse>>;
  public function ListCoreDefinitions(ListCoreDefinitionsRequest $in): Awaitable<\Errors\Result<ListCoreDefinitionsResponse>>;
  public function ListDeployments(ListDeploymentsRequest $in): Awaitable<\Errors\Result<ListDeploymentsResponse>>;
  public function ListDeviceDefinitionVersions(ListDeviceDefinitionVersionsRequest $in): Awaitable<\Errors\Result<ListDeviceDefinitionVersionsResponse>>;
  public function ListDeviceDefinitions(ListDeviceDefinitionsRequest $in): Awaitable<\Errors\Result<ListDeviceDefinitionsResponse>>;
  public function ListFunctionDefinitionVersions(ListFunctionDefinitionVersionsRequest $in): Awaitable<\Errors\Result<ListFunctionDefinitionVersionsResponse>>;
  public function ListFunctionDefinitions(ListFunctionDefinitionsRequest $in): Awaitable<\Errors\Result<ListFunctionDefinitionsResponse>>;
  public function ListGroupCertificateAuthorities(ListGroupCertificateAuthoritiesRequest $in): Awaitable<\Errors\Result<ListGroupCertificateAuthoritiesResponse>>;
  public function ListGroupVersions(ListGroupVersionsRequest $in): Awaitable<\Errors\Result<ListGroupVersionsResponse>>;
  public function ListGroups(ListGroupsRequest $in): Awaitable<\Errors\Result<ListGroupsResponse>>;
  public function ListLoggerDefinitionVersions(ListLoggerDefinitionVersionsRequest $in): Awaitable<\Errors\Result<ListLoggerDefinitionVersionsResponse>>;
  public function ListLoggerDefinitions(ListLoggerDefinitionsRequest $in): Awaitable<\Errors\Result<ListLoggerDefinitionsResponse>>;
  public function ListResourceDefinitionVersions(ListResourceDefinitionVersionsRequest $in): Awaitable<\Errors\Result<ListResourceDefinitionVersionsResponse>>;
  public function ListResourceDefinitions(ListResourceDefinitionsRequest $in): Awaitable<\Errors\Result<ListResourceDefinitionsResponse>>;
  public function ListSubscriptionDefinitionVersions(ListSubscriptionDefinitionVersionsRequest $in): Awaitable<\Errors\Result<ListSubscriptionDefinitionVersionsResponse>>;
  public function ListSubscriptionDefinitions(ListSubscriptionDefinitionsRequest $in): Awaitable<\Errors\Result<ListSubscriptionDefinitionsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResponse>>;
  public function ResetDeployments(ResetDeploymentsRequest $in): Awaitable<\Errors\Result<ResetDeploymentsResponse>>;
  public function StartBulkDeployment(StartBulkDeploymentRequest $in): Awaitable<\Errors\Result<StartBulkDeploymentResponse>>;
  public function StopBulkDeployment(StopBulkDeploymentRequest $in): Awaitable<\Errors\Result<StopBulkDeploymentResponse>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Error>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Error>;
  public function UpdateConnectivityInfo(UpdateConnectivityInfoRequest $in): Awaitable<\Errors\Result<UpdateConnectivityInfoResponse>>;
  public function UpdateConnectorDefinition(UpdateConnectorDefinitionRequest $in): Awaitable<\Errors\Result<UpdateConnectorDefinitionResponse>>;
  public function UpdateCoreDefinition(UpdateCoreDefinitionRequest $in): Awaitable<\Errors\Result<UpdateCoreDefinitionResponse>>;
  public function UpdateDeviceDefinition(UpdateDeviceDefinitionRequest $in): Awaitable<\Errors\Result<UpdateDeviceDefinitionResponse>>;
  public function UpdateFunctionDefinition(UpdateFunctionDefinitionRequest $in): Awaitable<\Errors\Result<UpdateFunctionDefinitionResponse>>;
  public function UpdateGroup(UpdateGroupRequest $in): Awaitable<\Errors\Result<UpdateGroupResponse>>;
  public function UpdateGroupCertificateConfiguration(UpdateGroupCertificateConfigurationRequest $in): Awaitable<\Errors\Result<UpdateGroupCertificateConfigurationResponse>>;
  public function UpdateLoggerDefinition(UpdateLoggerDefinitionRequest $in): Awaitable<\Errors\Result<UpdateLoggerDefinitionResponse>>;
  public function UpdateResourceDefinition(UpdateResourceDefinitionRequest $in): Awaitable<\Errors\Result<UpdateResourceDefinitionResponse>>;
  public function UpdateSubscriptionDefinition(UpdateSubscriptionDefinitionRequest $in): Awaitable<\Errors\Result<UpdateSubscriptionDefinitionResponse>>;
}

class AssociateRoleToGroupRequest {
  public ?__string $group_id;
  public ?__string $role_arn;

  public function __construct(shape(
    ?'group_id' => ?__string,
    ?'role_arn' => ?__string,
  ) $s = shape()) {
    $this->group_id = $s['group_id'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

class AssociateRoleToGroupResponse {
  public ?__string $associated_at;

  public function __construct(shape(
    ?'associated_at' => ?__string,
  ) $s = shape()) {
    $this->associated_at = $s['associated_at'] ?? '';
  }
}

class AssociateServiceRoleToAccountRequest {
  public ?__string $role_arn;

  public function __construct(shape(
    ?'role_arn' => ?__string,
  ) $s = shape()) {
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

class AssociateServiceRoleToAccountResponse {
  public ?__string $associated_at;

  public function __construct(shape(
    ?'associated_at' => ?__string,
  ) $s = shape()) {
    $this->associated_at = $s['associated_at'] ?? '';
  }
}

class BadRequestException {
  public ?ErrorDetails $error_details;
  public ?__string $message;

  public function __construct(shape(
    ?'error_details' => ?ErrorDetails,
    ?'message' => ?__string,
  ) $s = shape()) {
    $this->error_details = $s['error_details'] ?? vec[];
    $this->message = $s['message'] ?? '';
  }
}

class BulkDeployment {
  public ?__string $bulk_deployment_arn;
  public ?__string $bulk_deployment_id;
  public ?__string $created_at;

  public function __construct(shape(
    ?'bulk_deployment_arn' => ?__string,
    ?'bulk_deployment_id' => ?__string,
    ?'created_at' => ?__string,
  ) $s = shape()) {
    $this->bulk_deployment_arn = $s['bulk_deployment_arn'] ?? '';
    $this->bulk_deployment_id = $s['bulk_deployment_id'] ?? '';
    $this->created_at = $s['created_at'] ?? '';
  }
}

class BulkDeploymentMetrics {
  public ?__integer $invalid_input_records;
  public ?__integer $records_processed;
  public ?__integer $retry_attempts;

  public function __construct(shape(
    ?'invalid_input_records' => ?__integer,
    ?'records_processed' => ?__integer,
    ?'retry_attempts' => ?__integer,
  ) $s = shape()) {
    $this->invalid_input_records = $s['invalid_input_records'] ?? 0;
    $this->records_processed = $s['records_processed'] ?? 0;
    $this->retry_attempts = $s['retry_attempts'] ?? 0;
  }
}

class BulkDeploymentResult {
  public ?__string $created_at;
  public ?__string $deployment_arn;
  public ?__string $deployment_id;
  public ?__string $deployment_status;
  public ?DeploymentType $deployment_type;
  public ?ErrorDetails $error_details;
  public ?__string $error_message;
  public ?__string $group_arn;

  public function __construct(shape(
    ?'created_at' => ?__string,
    ?'deployment_arn' => ?__string,
    ?'deployment_id' => ?__string,
    ?'deployment_status' => ?__string,
    ?'deployment_type' => ?DeploymentType,
    ?'error_details' => ?ErrorDetails,
    ?'error_message' => ?__string,
    ?'group_arn' => ?__string,
  ) $s = shape()) {
    $this->created_at = $s['created_at'] ?? '';
    $this->deployment_arn = $s['deployment_arn'] ?? '';
    $this->deployment_id = $s['deployment_id'] ?? '';
    $this->deployment_status = $s['deployment_status'] ?? '';
    $this->deployment_type = $s['deployment_type'] ?? '';
    $this->error_details = $s['error_details'] ?? vec[];
    $this->error_message = $s['error_message'] ?? '';
    $this->group_arn = $s['group_arn'] ?? '';
  }
}

type BulkDeploymentResults = vec<BulkDeploymentResult>;

type BulkDeploymentStatus = string;

type BulkDeployments = vec<BulkDeployment>;

class ConnectivityInfo {
  public ?__string $host_address;
  public ?__string $id;
  public ?__string $metadata;
  public ?__integer $port_number;

  public function __construct(shape(
    ?'host_address' => ?__string,
    ?'id' => ?__string,
    ?'metadata' => ?__string,
    ?'port_number' => ?__integer,
  ) $s = shape()) {
    $this->host_address = $s['host_address'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->metadata = $s['metadata'] ?? '';
    $this->port_number = $s['port_number'] ?? 0;
  }
}

class Connector {
  public ?__string $connector_arn;
  public ?__string $id;
  public ?__mapOf__string $parameters;

  public function __construct(shape(
    ?'connector_arn' => ?__string,
    ?'id' => ?__string,
    ?'parameters' => ?__mapOf__string,
  ) $s = shape()) {
    $this->connector_arn = $s['connector_arn'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->parameters = $s['parameters'] ?? dict[];
  }
}

class ConnectorDefinitionVersion {
  public ?__listOfConnector $connectors;

  public function __construct(shape(
    ?'connectors' => ?__listOfConnector,
  ) $s = shape()) {
    $this->connectors = $s['connectors'] ?? vec[];
  }
}

class Core {
  public ?__string $certificate_arn;
  public ?__string $id;
  public ?__boolean $sync_shadow;
  public ?__string $thing_arn;

  public function __construct(shape(
    ?'certificate_arn' => ?__string,
    ?'id' => ?__string,
    ?'sync_shadow' => ?__boolean,
    ?'thing_arn' => ?__string,
  ) $s = shape()) {
    $this->certificate_arn = $s['certificate_arn'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->sync_shadow = $s['sync_shadow'] ?? false;
    $this->thing_arn = $s['thing_arn'] ?? '';
  }
}

class CoreDefinitionVersion {
  public ?__listOfCore $cores;

  public function __construct(shape(
    ?'cores' => ?__listOfCore,
  ) $s = shape()) {
    $this->cores = $s['cores'] ?? vec[];
  }
}

class CreateConnectorDefinitionRequest {
  public ?__string $amzn_client_token;
  public ?ConnectorDefinitionVersion $initial_version;
  public ?__string $name;
  public ?Tags $tags;

  public function __construct(shape(
    ?'amzn_client_token' => ?__string,
    ?'initial_version' => ?ConnectorDefinitionVersion,
    ?'name' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->amzn_client_token = $s['amzn_client_token'] ?? '';
    $this->initial_version = $s['initial_version'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateConnectorDefinitionResponse {
  public ?__string $arn;
  public ?__string $creation_timestamp;
  public ?__string $id;
  public ?__string $last_updated_timestamp;
  public ?__string $latest_version;
  public ?__string $latest_version_arn;
  public ?__string $name;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'creation_timestamp' => ?__string,
    ?'id' => ?__string,
    ?'last_updated_timestamp' => ?__string,
    ?'latest_version' => ?__string,
    ?'latest_version_arn' => ?__string,
    ?'name' => ?__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_timestamp = $s['creation_timestamp'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->last_updated_timestamp = $s['last_updated_timestamp'] ?? '';
    $this->latest_version = $s['latest_version'] ?? '';
    $this->latest_version_arn = $s['latest_version_arn'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class CreateConnectorDefinitionVersionRequest {
  public ?__string $amzn_client_token;
  public ?__string $connector_definition_id;
  public ?__listOfConnector $connectors;

  public function __construct(shape(
    ?'amzn_client_token' => ?__string,
    ?'connector_definition_id' => ?__string,
    ?'connectors' => ?__listOfConnector,
  ) $s = shape()) {
    $this->amzn_client_token = $s['amzn_client_token'] ?? '';
    $this->connector_definition_id = $s['connector_definition_id'] ?? '';
    $this->connectors = $s['connectors'] ?? vec[];
  }
}

class CreateConnectorDefinitionVersionResponse {
  public ?__string $arn;
  public ?__string $creation_timestamp;
  public ?__string $id;
  public ?__string $version;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'creation_timestamp' => ?__string,
    ?'id' => ?__string,
    ?'version' => ?__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_timestamp = $s['creation_timestamp'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class CreateCoreDefinitionRequest {
  public ?__string $amzn_client_token;
  public ?CoreDefinitionVersion $initial_version;
  public ?__string $name;
  public ?Tags $tags;

  public function __construct(shape(
    ?'amzn_client_token' => ?__string,
    ?'initial_version' => ?CoreDefinitionVersion,
    ?'name' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->amzn_client_token = $s['amzn_client_token'] ?? '';
    $this->initial_version = $s['initial_version'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateCoreDefinitionResponse {
  public ?__string $arn;
  public ?__string $creation_timestamp;
  public ?__string $id;
  public ?__string $last_updated_timestamp;
  public ?__string $latest_version;
  public ?__string $latest_version_arn;
  public ?__string $name;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'creation_timestamp' => ?__string,
    ?'id' => ?__string,
    ?'last_updated_timestamp' => ?__string,
    ?'latest_version' => ?__string,
    ?'latest_version_arn' => ?__string,
    ?'name' => ?__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_timestamp = $s['creation_timestamp'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->last_updated_timestamp = $s['last_updated_timestamp'] ?? '';
    $this->latest_version = $s['latest_version'] ?? '';
    $this->latest_version_arn = $s['latest_version_arn'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class CreateCoreDefinitionVersionRequest {
  public ?__string $amzn_client_token;
  public ?__string $core_definition_id;
  public ?__listOfCore $cores;

  public function __construct(shape(
    ?'amzn_client_token' => ?__string,
    ?'core_definition_id' => ?__string,
    ?'cores' => ?__listOfCore,
  ) $s = shape()) {
    $this->amzn_client_token = $s['amzn_client_token'] ?? '';
    $this->core_definition_id = $s['core_definition_id'] ?? '';
    $this->cores = $s['cores'] ?? vec[];
  }
}

class CreateCoreDefinitionVersionResponse {
  public ?__string $arn;
  public ?__string $creation_timestamp;
  public ?__string $id;
  public ?__string $version;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'creation_timestamp' => ?__string,
    ?'id' => ?__string,
    ?'version' => ?__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_timestamp = $s['creation_timestamp'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class CreateDeploymentRequest {
  public ?__string $amzn_client_token;
  public ?__string $deployment_id;
  public ?DeploymentType $deployment_type;
  public ?__string $group_id;
  public ?__string $group_version_id;

  public function __construct(shape(
    ?'amzn_client_token' => ?__string,
    ?'deployment_id' => ?__string,
    ?'deployment_type' => ?DeploymentType,
    ?'group_id' => ?__string,
    ?'group_version_id' => ?__string,
  ) $s = shape()) {
    $this->amzn_client_token = $s['amzn_client_token'] ?? '';
    $this->deployment_id = $s['deployment_id'] ?? '';
    $this->deployment_type = $s['deployment_type'] ?? '';
    $this->group_id = $s['group_id'] ?? '';
    $this->group_version_id = $s['group_version_id'] ?? '';
  }
}

class CreateDeploymentResponse {
  public ?__string $deployment_arn;
  public ?__string $deployment_id;

  public function __construct(shape(
    ?'deployment_arn' => ?__string,
    ?'deployment_id' => ?__string,
  ) $s = shape()) {
    $this->deployment_arn = $s['deployment_arn'] ?? '';
    $this->deployment_id = $s['deployment_id'] ?? '';
  }
}

class CreateDeviceDefinitionRequest {
  public ?__string $amzn_client_token;
  public ?DeviceDefinitionVersion $initial_version;
  public ?__string $name;
  public ?Tags $tags;

  public function __construct(shape(
    ?'amzn_client_token' => ?__string,
    ?'initial_version' => ?DeviceDefinitionVersion,
    ?'name' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->amzn_client_token = $s['amzn_client_token'] ?? '';
    $this->initial_version = $s['initial_version'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateDeviceDefinitionResponse {
  public ?__string $arn;
  public ?__string $creation_timestamp;
  public ?__string $id;
  public ?__string $last_updated_timestamp;
  public ?__string $latest_version;
  public ?__string $latest_version_arn;
  public ?__string $name;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'creation_timestamp' => ?__string,
    ?'id' => ?__string,
    ?'last_updated_timestamp' => ?__string,
    ?'latest_version' => ?__string,
    ?'latest_version_arn' => ?__string,
    ?'name' => ?__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_timestamp = $s['creation_timestamp'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->last_updated_timestamp = $s['last_updated_timestamp'] ?? '';
    $this->latest_version = $s['latest_version'] ?? '';
    $this->latest_version_arn = $s['latest_version_arn'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class CreateDeviceDefinitionVersionRequest {
  public ?__string $amzn_client_token;
  public ?__string $device_definition_id;
  public ?__listOfDevice $devices;

  public function __construct(shape(
    ?'amzn_client_token' => ?__string,
    ?'device_definition_id' => ?__string,
    ?'devices' => ?__listOfDevice,
  ) $s = shape()) {
    $this->amzn_client_token = $s['amzn_client_token'] ?? '';
    $this->device_definition_id = $s['device_definition_id'] ?? '';
    $this->devices = $s['devices'] ?? vec[];
  }
}

class CreateDeviceDefinitionVersionResponse {
  public ?__string $arn;
  public ?__string $creation_timestamp;
  public ?__string $id;
  public ?__string $version;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'creation_timestamp' => ?__string,
    ?'id' => ?__string,
    ?'version' => ?__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_timestamp = $s['creation_timestamp'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class CreateFunctionDefinitionRequest {
  public ?__string $amzn_client_token;
  public ?FunctionDefinitionVersion $initial_version;
  public ?__string $name;
  public ?Tags $tags;

  public function __construct(shape(
    ?'amzn_client_token' => ?__string,
    ?'initial_version' => ?FunctionDefinitionVersion,
    ?'name' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->amzn_client_token = $s['amzn_client_token'] ?? '';
    $this->initial_version = $s['initial_version'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateFunctionDefinitionResponse {
  public ?__string $arn;
  public ?__string $creation_timestamp;
  public ?__string $id;
  public ?__string $last_updated_timestamp;
  public ?__string $latest_version;
  public ?__string $latest_version_arn;
  public ?__string $name;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'creation_timestamp' => ?__string,
    ?'id' => ?__string,
    ?'last_updated_timestamp' => ?__string,
    ?'latest_version' => ?__string,
    ?'latest_version_arn' => ?__string,
    ?'name' => ?__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_timestamp = $s['creation_timestamp'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->last_updated_timestamp = $s['last_updated_timestamp'] ?? '';
    $this->latest_version = $s['latest_version'] ?? '';
    $this->latest_version_arn = $s['latest_version_arn'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class CreateFunctionDefinitionVersionRequest {
  public ?__string $amzn_client_token;
  public ?FunctionDefaultConfig $default_config;
  public ?__string $function_definition_id;
  public ?__listOfFunction $functions;

  public function __construct(shape(
    ?'amzn_client_token' => ?__string,
    ?'default_config' => ?FunctionDefaultConfig,
    ?'function_definition_id' => ?__string,
    ?'functions' => ?__listOfFunction,
  ) $s = shape()) {
    $this->amzn_client_token = $s['amzn_client_token'] ?? '';
    $this->default_config = $s['default_config'] ?? null;
    $this->function_definition_id = $s['function_definition_id'] ?? '';
    $this->functions = $s['functions'] ?? vec[];
  }
}

class CreateFunctionDefinitionVersionResponse {
  public ?__string $arn;
  public ?__string $creation_timestamp;
  public ?__string $id;
  public ?__string $version;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'creation_timestamp' => ?__string,
    ?'id' => ?__string,
    ?'version' => ?__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_timestamp = $s['creation_timestamp'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class CreateGroupCertificateAuthorityRequest {
  public ?__string $amzn_client_token;
  public ?__string $group_id;

  public function __construct(shape(
    ?'amzn_client_token' => ?__string,
    ?'group_id' => ?__string,
  ) $s = shape()) {
    $this->amzn_client_token = $s['amzn_client_token'] ?? '';
    $this->group_id = $s['group_id'] ?? '';
  }
}

class CreateGroupCertificateAuthorityResponse {
  public ?__string $group_certificate_authority_arn;

  public function __construct(shape(
    ?'group_certificate_authority_arn' => ?__string,
  ) $s = shape()) {
    $this->group_certificate_authority_arn = $s['group_certificate_authority_arn'] ?? '';
  }
}

class CreateGroupRequest {
  public ?__string $amzn_client_token;
  public ?GroupVersion $initial_version;
  public ?__string $name;
  public ?Tags $tags;

  public function __construct(shape(
    ?'amzn_client_token' => ?__string,
    ?'initial_version' => ?GroupVersion,
    ?'name' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->amzn_client_token = $s['amzn_client_token'] ?? '';
    $this->initial_version = $s['initial_version'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateGroupResponse {
  public ?__string $arn;
  public ?__string $creation_timestamp;
  public ?__string $id;
  public ?__string $last_updated_timestamp;
  public ?__string $latest_version;
  public ?__string $latest_version_arn;
  public ?__string $name;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'creation_timestamp' => ?__string,
    ?'id' => ?__string,
    ?'last_updated_timestamp' => ?__string,
    ?'latest_version' => ?__string,
    ?'latest_version_arn' => ?__string,
    ?'name' => ?__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_timestamp = $s['creation_timestamp'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->last_updated_timestamp = $s['last_updated_timestamp'] ?? '';
    $this->latest_version = $s['latest_version'] ?? '';
    $this->latest_version_arn = $s['latest_version_arn'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class CreateGroupVersionRequest {
  public ?__string $amzn_client_token;
  public ?__string $connector_definition_version_arn;
  public ?__string $core_definition_version_arn;
  public ?__string $device_definition_version_arn;
  public ?__string $function_definition_version_arn;
  public ?__string $group_id;
  public ?__string $logger_definition_version_arn;
  public ?__string $resource_definition_version_arn;
  public ?__string $subscription_definition_version_arn;

  public function __construct(shape(
    ?'amzn_client_token' => ?__string,
    ?'connector_definition_version_arn' => ?__string,
    ?'core_definition_version_arn' => ?__string,
    ?'device_definition_version_arn' => ?__string,
    ?'function_definition_version_arn' => ?__string,
    ?'group_id' => ?__string,
    ?'logger_definition_version_arn' => ?__string,
    ?'resource_definition_version_arn' => ?__string,
    ?'subscription_definition_version_arn' => ?__string,
  ) $s = shape()) {
    $this->amzn_client_token = $s['amzn_client_token'] ?? '';
    $this->connector_definition_version_arn = $s['connector_definition_version_arn'] ?? '';
    $this->core_definition_version_arn = $s['core_definition_version_arn'] ?? '';
    $this->device_definition_version_arn = $s['device_definition_version_arn'] ?? '';
    $this->function_definition_version_arn = $s['function_definition_version_arn'] ?? '';
    $this->group_id = $s['group_id'] ?? '';
    $this->logger_definition_version_arn = $s['logger_definition_version_arn'] ?? '';
    $this->resource_definition_version_arn = $s['resource_definition_version_arn'] ?? '';
    $this->subscription_definition_version_arn = $s['subscription_definition_version_arn'] ?? '';
  }
}

class CreateGroupVersionResponse {
  public ?__string $arn;
  public ?__string $creation_timestamp;
  public ?__string $id;
  public ?__string $version;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'creation_timestamp' => ?__string,
    ?'id' => ?__string,
    ?'version' => ?__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_timestamp = $s['creation_timestamp'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class CreateLoggerDefinitionRequest {
  public ?__string $amzn_client_token;
  public ?LoggerDefinitionVersion $initial_version;
  public ?__string $name;
  public ?Tags $tags;

  public function __construct(shape(
    ?'amzn_client_token' => ?__string,
    ?'initial_version' => ?LoggerDefinitionVersion,
    ?'name' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->amzn_client_token = $s['amzn_client_token'] ?? '';
    $this->initial_version = $s['initial_version'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateLoggerDefinitionResponse {
  public ?__string $arn;
  public ?__string $creation_timestamp;
  public ?__string $id;
  public ?__string $last_updated_timestamp;
  public ?__string $latest_version;
  public ?__string $latest_version_arn;
  public ?__string $name;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'creation_timestamp' => ?__string,
    ?'id' => ?__string,
    ?'last_updated_timestamp' => ?__string,
    ?'latest_version' => ?__string,
    ?'latest_version_arn' => ?__string,
    ?'name' => ?__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_timestamp = $s['creation_timestamp'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->last_updated_timestamp = $s['last_updated_timestamp'] ?? '';
    $this->latest_version = $s['latest_version'] ?? '';
    $this->latest_version_arn = $s['latest_version_arn'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class CreateLoggerDefinitionVersionRequest {
  public ?__string $amzn_client_token;
  public ?__string $logger_definition_id;
  public ?__listOfLogger $loggers;

  public function __construct(shape(
    ?'amzn_client_token' => ?__string,
    ?'logger_definition_id' => ?__string,
    ?'loggers' => ?__listOfLogger,
  ) $s = shape()) {
    $this->amzn_client_token = $s['amzn_client_token'] ?? '';
    $this->logger_definition_id = $s['logger_definition_id'] ?? '';
    $this->loggers = $s['loggers'] ?? vec[];
  }
}

class CreateLoggerDefinitionVersionResponse {
  public ?__string $arn;
  public ?__string $creation_timestamp;
  public ?__string $id;
  public ?__string $version;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'creation_timestamp' => ?__string,
    ?'id' => ?__string,
    ?'version' => ?__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_timestamp = $s['creation_timestamp'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class CreateResourceDefinitionRequest {
  public ?__string $amzn_client_token;
  public ?ResourceDefinitionVersion $initial_version;
  public ?__string $name;
  public ?Tags $tags;

  public function __construct(shape(
    ?'amzn_client_token' => ?__string,
    ?'initial_version' => ?ResourceDefinitionVersion,
    ?'name' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->amzn_client_token = $s['amzn_client_token'] ?? '';
    $this->initial_version = $s['initial_version'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateResourceDefinitionResponse {
  public ?__string $arn;
  public ?__string $creation_timestamp;
  public ?__string $id;
  public ?__string $last_updated_timestamp;
  public ?__string $latest_version;
  public ?__string $latest_version_arn;
  public ?__string $name;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'creation_timestamp' => ?__string,
    ?'id' => ?__string,
    ?'last_updated_timestamp' => ?__string,
    ?'latest_version' => ?__string,
    ?'latest_version_arn' => ?__string,
    ?'name' => ?__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_timestamp = $s['creation_timestamp'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->last_updated_timestamp = $s['last_updated_timestamp'] ?? '';
    $this->latest_version = $s['latest_version'] ?? '';
    $this->latest_version_arn = $s['latest_version_arn'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class CreateResourceDefinitionVersionRequest {
  public ?__string $amzn_client_token;
  public ?__string $resource_definition_id;
  public ?__listOfResource $resources;

  public function __construct(shape(
    ?'amzn_client_token' => ?__string,
    ?'resource_definition_id' => ?__string,
    ?'resources' => ?__listOfResource,
  ) $s = shape()) {
    $this->amzn_client_token = $s['amzn_client_token'] ?? '';
    $this->resource_definition_id = $s['resource_definition_id'] ?? '';
    $this->resources = $s['resources'] ?? vec[];
  }
}

class CreateResourceDefinitionVersionResponse {
  public ?__string $arn;
  public ?__string $creation_timestamp;
  public ?__string $id;
  public ?__string $version;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'creation_timestamp' => ?__string,
    ?'id' => ?__string,
    ?'version' => ?__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_timestamp = $s['creation_timestamp'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class CreateSoftwareUpdateJobRequest {
  public ?__string $amzn_client_token;
  public ?S3UrlSignerRole $s_3_url_signer_role;
  public ?SoftwareToUpdate $software_to_update;
  public ?UpdateAgentLogLevel $update_agent_log_level;
  public ?UpdateTargets $update_targets;
  public ?UpdateTargetsArchitecture $update_targets_architecture;
  public ?UpdateTargetsOperatingSystem $update_targets_operating_system;

  public function __construct(shape(
    ?'amzn_client_token' => ?__string,
    ?'s_3_url_signer_role' => ?S3UrlSignerRole,
    ?'software_to_update' => ?SoftwareToUpdate,
    ?'update_agent_log_level' => ?UpdateAgentLogLevel,
    ?'update_targets' => ?UpdateTargets,
    ?'update_targets_architecture' => ?UpdateTargetsArchitecture,
    ?'update_targets_operating_system' => ?UpdateTargetsOperatingSystem,
  ) $s = shape()) {
    $this->amzn_client_token = $s['amzn_client_token'] ?? '';
    $this->s_3_url_signer_role = $s['s_3_url_signer_role'] ?? '';
    $this->software_to_update = $s['software_to_update'] ?? '';
    $this->update_agent_log_level = $s['update_agent_log_level'] ?? '';
    $this->update_targets = $s['update_targets'] ?? vec[];
    $this->update_targets_architecture = $s['update_targets_architecture'] ?? '';
    $this->update_targets_operating_system = $s['update_targets_operating_system'] ?? '';
  }
}

class CreateSoftwareUpdateJobResponse {
  public ?__string $iot_job_arn;
  public ?__string $iot_job_id;
  public ?__string $platform_software_version;

  public function __construct(shape(
    ?'iot_job_arn' => ?__string,
    ?'iot_job_id' => ?__string,
    ?'platform_software_version' => ?__string,
  ) $s = shape()) {
    $this->iot_job_arn = $s['iot_job_arn'] ?? '';
    $this->iot_job_id = $s['iot_job_id'] ?? '';
    $this->platform_software_version = $s['platform_software_version'] ?? '';
  }
}

class CreateSubscriptionDefinitionRequest {
  public ?__string $amzn_client_token;
  public ?SubscriptionDefinitionVersion $initial_version;
  public ?__string $name;
  public ?Tags $tags;

  public function __construct(shape(
    ?'amzn_client_token' => ?__string,
    ?'initial_version' => ?SubscriptionDefinitionVersion,
    ?'name' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->amzn_client_token = $s['amzn_client_token'] ?? '';
    $this->initial_version = $s['initial_version'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateSubscriptionDefinitionResponse {
  public ?__string $arn;
  public ?__string $creation_timestamp;
  public ?__string $id;
  public ?__string $last_updated_timestamp;
  public ?__string $latest_version;
  public ?__string $latest_version_arn;
  public ?__string $name;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'creation_timestamp' => ?__string,
    ?'id' => ?__string,
    ?'last_updated_timestamp' => ?__string,
    ?'latest_version' => ?__string,
    ?'latest_version_arn' => ?__string,
    ?'name' => ?__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_timestamp = $s['creation_timestamp'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->last_updated_timestamp = $s['last_updated_timestamp'] ?? '';
    $this->latest_version = $s['latest_version'] ?? '';
    $this->latest_version_arn = $s['latest_version_arn'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class CreateSubscriptionDefinitionVersionRequest {
  public ?__string $amzn_client_token;
  public ?__string $subscription_definition_id;
  public ?__listOfSubscription $subscriptions;

  public function __construct(shape(
    ?'amzn_client_token' => ?__string,
    ?'subscription_definition_id' => ?__string,
    ?'subscriptions' => ?__listOfSubscription,
  ) $s = shape()) {
    $this->amzn_client_token = $s['amzn_client_token'] ?? '';
    $this->subscription_definition_id = $s['subscription_definition_id'] ?? '';
    $this->subscriptions = $s['subscriptions'] ?? vec[];
  }
}

class CreateSubscriptionDefinitionVersionResponse {
  public ?__string $arn;
  public ?__string $creation_timestamp;
  public ?__string $id;
  public ?__string $version;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'creation_timestamp' => ?__string,
    ?'id' => ?__string,
    ?'version' => ?__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_timestamp = $s['creation_timestamp'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class DefinitionInformation {
  public ?__string $arn;
  public ?__string $creation_timestamp;
  public ?__string $id;
  public ?__string $last_updated_timestamp;
  public ?__string $latest_version;
  public ?__string $latest_version_arn;
  public ?__string $name;
  public ?Tags $tags;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'creation_timestamp' => ?__string,
    ?'id' => ?__string,
    ?'last_updated_timestamp' => ?__string,
    ?'latest_version' => ?__string,
    ?'latest_version_arn' => ?__string,
    ?'name' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_timestamp = $s['creation_timestamp'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->last_updated_timestamp = $s['last_updated_timestamp'] ?? '';
    $this->latest_version = $s['latest_version'] ?? '';
    $this->latest_version_arn = $s['latest_version_arn'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class DeleteConnectorDefinitionRequest {
  public ?__string $connector_definition_id;

  public function __construct(shape(
    ?'connector_definition_id' => ?__string,
  ) $s = shape()) {
    $this->connector_definition_id = $s['connector_definition_id'] ?? '';
  }
}

class DeleteConnectorDefinitionResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteCoreDefinitionRequest {
  public ?__string $core_definition_id;

  public function __construct(shape(
    ?'core_definition_id' => ?__string,
  ) $s = shape()) {
    $this->core_definition_id = $s['core_definition_id'] ?? '';
  }
}

class DeleteCoreDefinitionResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteDeviceDefinitionRequest {
  public ?__string $device_definition_id;

  public function __construct(shape(
    ?'device_definition_id' => ?__string,
  ) $s = shape()) {
    $this->device_definition_id = $s['device_definition_id'] ?? '';
  }
}

class DeleteDeviceDefinitionResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteFunctionDefinitionRequest {
  public ?__string $function_definition_id;

  public function __construct(shape(
    ?'function_definition_id' => ?__string,
  ) $s = shape()) {
    $this->function_definition_id = $s['function_definition_id'] ?? '';
  }
}

class DeleteFunctionDefinitionResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteGroupRequest {
  public ?__string $group_id;

  public function __construct(shape(
    ?'group_id' => ?__string,
  ) $s = shape()) {
    $this->group_id = $s['group_id'] ?? '';
  }
}

class DeleteGroupResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteLoggerDefinitionRequest {
  public ?__string $logger_definition_id;

  public function __construct(shape(
    ?'logger_definition_id' => ?__string,
  ) $s = shape()) {
    $this->logger_definition_id = $s['logger_definition_id'] ?? '';
  }
}

class DeleteLoggerDefinitionResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteResourceDefinitionRequest {
  public ?__string $resource_definition_id;

  public function __construct(shape(
    ?'resource_definition_id' => ?__string,
  ) $s = shape()) {
    $this->resource_definition_id = $s['resource_definition_id'] ?? '';
  }
}

class DeleteResourceDefinitionResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteSubscriptionDefinitionRequest {
  public ?__string $subscription_definition_id;

  public function __construct(shape(
    ?'subscription_definition_id' => ?__string,
  ) $s = shape()) {
    $this->subscription_definition_id = $s['subscription_definition_id'] ?? '';
  }
}

class DeleteSubscriptionDefinitionResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Deployment {
  public ?__string $created_at;
  public ?__string $deployment_arn;
  public ?__string $deployment_id;
  public ?DeploymentType $deployment_type;
  public ?__string $group_arn;

  public function __construct(shape(
    ?'created_at' => ?__string,
    ?'deployment_arn' => ?__string,
    ?'deployment_id' => ?__string,
    ?'deployment_type' => ?DeploymentType,
    ?'group_arn' => ?__string,
  ) $s = shape()) {
    $this->created_at = $s['created_at'] ?? '';
    $this->deployment_arn = $s['deployment_arn'] ?? '';
    $this->deployment_id = $s['deployment_id'] ?? '';
    $this->deployment_type = $s['deployment_type'] ?? '';
    $this->group_arn = $s['group_arn'] ?? '';
  }
}

type DeploymentType = string;

type Deployments = vec<Deployment>;

class Device {
  public ?__string $certificate_arn;
  public ?__string $id;
  public ?__boolean $sync_shadow;
  public ?__string $thing_arn;

  public function __construct(shape(
    ?'certificate_arn' => ?__string,
    ?'id' => ?__string,
    ?'sync_shadow' => ?__boolean,
    ?'thing_arn' => ?__string,
  ) $s = shape()) {
    $this->certificate_arn = $s['certificate_arn'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->sync_shadow = $s['sync_shadow'] ?? false;
    $this->thing_arn = $s['thing_arn'] ?? '';
  }
}

class DeviceDefinitionVersion {
  public ?__listOfDevice $devices;

  public function __construct(shape(
    ?'devices' => ?__listOfDevice,
  ) $s = shape()) {
    $this->devices = $s['devices'] ?? vec[];
  }
}

class DisassociateRoleFromGroupRequest {
  public ?__string $group_id;

  public function __construct(shape(
    ?'group_id' => ?__string,
  ) $s = shape()) {
    $this->group_id = $s['group_id'] ?? '';
  }
}

class DisassociateRoleFromGroupResponse {
  public ?__string $disassociated_at;

  public function __construct(shape(
    ?'disassociated_at' => ?__string,
  ) $s = shape()) {
    $this->disassociated_at = $s['disassociated_at'] ?? '';
  }
}

class DisassociateServiceRoleFromAccountRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisassociateServiceRoleFromAccountResponse {
  public ?__string $disassociated_at;

  public function __construct(shape(
    ?'disassociated_at' => ?__string,
  ) $s = shape()) {
    $this->disassociated_at = $s['disassociated_at'] ?? '';
  }
}

class Empty {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type EncodingType = string;

class ErrorDetail {
  public ?__string $detailed_error_code;
  public ?__string $detailed_error_message;

  public function __construct(shape(
    ?'detailed_error_code' => ?__string,
    ?'detailed_error_message' => ?__string,
  ) $s = shape()) {
    $this->detailed_error_code = $s['detailed_error_code'] ?? '';
    $this->detailed_error_message = $s['detailed_error_message'] ?? '';
  }
}

type ErrorDetails = vec<ErrorDetail>;

class Function {
  public ?__string $function_arn;
  public ?FunctionConfiguration $function_configuration;
  public ?__string $id;

  public function __construct(shape(
    ?'function_arn' => ?__string,
    ?'function_configuration' => ?FunctionConfiguration,
    ?'id' => ?__string,
  ) $s = shape()) {
    $this->function_arn = $s['function_arn'] ?? '';
    $this->function_configuration = $s['function_configuration'] ?? null;
    $this->id = $s['id'] ?? '';
  }
}

class FunctionConfiguration {
  public ?EncodingType $encoding_type;
  public ?FunctionConfigurationEnvironment $environment;
  public ?__string $exec_args;
  public ?__string $executable;
  public ?__integer $memory_size;
  public ?__boolean $pinned;
  public ?__integer $timeout;

  public function __construct(shape(
    ?'encoding_type' => ?EncodingType,
    ?'environment' => ?FunctionConfigurationEnvironment,
    ?'exec_args' => ?__string,
    ?'executable' => ?__string,
    ?'memory_size' => ?__integer,
    ?'pinned' => ?__boolean,
    ?'timeout' => ?__integer,
  ) $s = shape()) {
    $this->encoding_type = $s['encoding_type'] ?? '';
    $this->environment = $s['environment'] ?? null;
    $this->exec_args = $s['exec_args'] ?? '';
    $this->executable = $s['executable'] ?? '';
    $this->memory_size = $s['memory_size'] ?? 0;
    $this->pinned = $s['pinned'] ?? false;
    $this->timeout = $s['timeout'] ?? 0;
  }
}

class FunctionConfigurationEnvironment {
  public ?__boolean $access_sysfs;
  public ?FunctionExecutionConfig $execution;
  public ?__listOfResourceAccessPolicy $resource_access_policies;
  public ?__mapOf__string $variables;

  public function __construct(shape(
    ?'access_sysfs' => ?__boolean,
    ?'execution' => ?FunctionExecutionConfig,
    ?'resource_access_policies' => ?__listOfResourceAccessPolicy,
    ?'variables' => ?__mapOf__string,
  ) $s = shape()) {
    $this->access_sysfs = $s['access_sysfs'] ?? false;
    $this->execution = $s['execution'] ?? null;
    $this->resource_access_policies = $s['resource_access_policies'] ?? vec[];
    $this->variables = $s['variables'] ?? dict[];
  }
}

class FunctionDefaultConfig {
  public ?FunctionDefaultExecutionConfig $execution;

  public function __construct(shape(
    ?'execution' => ?FunctionDefaultExecutionConfig,
  ) $s = shape()) {
    $this->execution = $s['execution'] ?? null;
  }
}

class FunctionDefaultExecutionConfig {
  public ?FunctionIsolationMode $isolation_mode;
  public ?FunctionRunAsConfig $run_as;

  public function __construct(shape(
    ?'isolation_mode' => ?FunctionIsolationMode,
    ?'run_as' => ?FunctionRunAsConfig,
  ) $s = shape()) {
    $this->isolation_mode = $s['isolation_mode'] ?? '';
    $this->run_as = $s['run_as'] ?? null;
  }
}

class FunctionDefinitionVersion {
  public ?FunctionDefaultConfig $default_config;
  public ?__listOfFunction $functions;

  public function __construct(shape(
    ?'default_config' => ?FunctionDefaultConfig,
    ?'functions' => ?__listOfFunction,
  ) $s = shape()) {
    $this->default_config = $s['default_config'] ?? null;
    $this->functions = $s['functions'] ?? vec[];
  }
}

class FunctionExecutionConfig {
  public ?FunctionIsolationMode $isolation_mode;
  public ?FunctionRunAsConfig $run_as;

  public function __construct(shape(
    ?'isolation_mode' => ?FunctionIsolationMode,
    ?'run_as' => ?FunctionRunAsConfig,
  ) $s = shape()) {
    $this->isolation_mode = $s['isolation_mode'] ?? '';
    $this->run_as = $s['run_as'] ?? null;
  }
}

type FunctionIsolationMode = string;

class FunctionRunAsConfig {
  public ?__integer $gid;
  public ?__integer $uid;

  public function __construct(shape(
    ?'gid' => ?__integer,
    ?'uid' => ?__integer,
  ) $s = shape()) {
    $this->gid = $s['gid'] ?? 0;
    $this->uid = $s['uid'] ?? 0;
  }
}

class GeneralError {
  public ?ErrorDetails $error_details;
  public ?__string $message;

  public function __construct(shape(
    ?'error_details' => ?ErrorDetails,
    ?'message' => ?__string,
  ) $s = shape()) {
    $this->error_details = $s['error_details'] ?? vec[];
    $this->message = $s['message'] ?? '';
  }
}

class GetAssociatedRoleRequest {
  public ?__string $group_id;

  public function __construct(shape(
    ?'group_id' => ?__string,
  ) $s = shape()) {
    $this->group_id = $s['group_id'] ?? '';
  }
}

class GetAssociatedRoleResponse {
  public ?__string $associated_at;
  public ?__string $role_arn;

  public function __construct(shape(
    ?'associated_at' => ?__string,
    ?'role_arn' => ?__string,
  ) $s = shape()) {
    $this->associated_at = $s['associated_at'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

class GetBulkDeploymentStatusRequest {
  public ?__string $bulk_deployment_id;

  public function __construct(shape(
    ?'bulk_deployment_id' => ?__string,
  ) $s = shape()) {
    $this->bulk_deployment_id = $s['bulk_deployment_id'] ?? '';
  }
}

class GetBulkDeploymentStatusResponse {
  public ?BulkDeploymentMetrics $bulk_deployment_metrics;
  public ?BulkDeploymentStatus $bulk_deployment_status;
  public ?__string $created_at;
  public ?ErrorDetails $error_details;
  public ?__string $error_message;
  public ?Tags $tags;

  public function __construct(shape(
    ?'bulk_deployment_metrics' => ?BulkDeploymentMetrics,
    ?'bulk_deployment_status' => ?BulkDeploymentStatus,
    ?'created_at' => ?__string,
    ?'error_details' => ?ErrorDetails,
    ?'error_message' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->bulk_deployment_metrics = $s['bulk_deployment_metrics'] ?? null;
    $this->bulk_deployment_status = $s['bulk_deployment_status'] ?? '';
    $this->created_at = $s['created_at'] ?? '';
    $this->error_details = $s['error_details'] ?? vec[];
    $this->error_message = $s['error_message'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class GetConnectivityInfoRequest {
  public ?__string $thing_name;

  public function __construct(shape(
    ?'thing_name' => ?__string,
  ) $s = shape()) {
    $this->thing_name = $s['thing_name'] ?? '';
  }
}

class GetConnectivityInfoResponse {
  public ?__listOfConnectivityInfo $connectivity_info;
  public ?__string $message;

  public function __construct(shape(
    ?'connectivity_info' => ?__listOfConnectivityInfo,
    ?'message' => ?__string,
  ) $s = shape()) {
    $this->connectivity_info = $s['connectivity_info'] ?? vec[];
    $this->message = $s['message'] ?? '';
  }
}

class GetConnectorDefinitionRequest {
  public ?__string $connector_definition_id;

  public function __construct(shape(
    ?'connector_definition_id' => ?__string,
  ) $s = shape()) {
    $this->connector_definition_id = $s['connector_definition_id'] ?? '';
  }
}

class GetConnectorDefinitionResponse {
  public ?__string $arn;
  public ?__string $creation_timestamp;
  public ?__string $id;
  public ?__string $last_updated_timestamp;
  public ?__string $latest_version;
  public ?__string $latest_version_arn;
  public ?__string $name;
  public ?Tags $tags;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'creation_timestamp' => ?__string,
    ?'id' => ?__string,
    ?'last_updated_timestamp' => ?__string,
    ?'latest_version' => ?__string,
    ?'latest_version_arn' => ?__string,
    ?'name' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_timestamp = $s['creation_timestamp'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->last_updated_timestamp = $s['last_updated_timestamp'] ?? '';
    $this->latest_version = $s['latest_version'] ?? '';
    $this->latest_version_arn = $s['latest_version_arn'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class GetConnectorDefinitionVersionRequest {
  public ?__string $connector_definition_id;
  public ?__string $connector_definition_version_id;
  public ?__string $next_token;

  public function __construct(shape(
    ?'connector_definition_id' => ?__string,
    ?'connector_definition_version_id' => ?__string,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->connector_definition_id = $s['connector_definition_id'] ?? '';
    $this->connector_definition_version_id = $s['connector_definition_version_id'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetConnectorDefinitionVersionResponse {
  public ?__string $arn;
  public ?__string $creation_timestamp;
  public ?ConnectorDefinitionVersion $definition;
  public ?__string $id;
  public ?__string $next_token;
  public ?__string $version;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'creation_timestamp' => ?__string,
    ?'definition' => ?ConnectorDefinitionVersion,
    ?'id' => ?__string,
    ?'next_token' => ?__string,
    ?'version' => ?__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_timestamp = $s['creation_timestamp'] ?? '';
    $this->definition = $s['definition'] ?? null;
    $this->id = $s['id'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class GetCoreDefinitionRequest {
  public ?__string $core_definition_id;

  public function __construct(shape(
    ?'core_definition_id' => ?__string,
  ) $s = shape()) {
    $this->core_definition_id = $s['core_definition_id'] ?? '';
  }
}

class GetCoreDefinitionResponse {
  public ?__string $arn;
  public ?__string $creation_timestamp;
  public ?__string $id;
  public ?__string $last_updated_timestamp;
  public ?__string $latest_version;
  public ?__string $latest_version_arn;
  public ?__string $name;
  public ?Tags $tags;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'creation_timestamp' => ?__string,
    ?'id' => ?__string,
    ?'last_updated_timestamp' => ?__string,
    ?'latest_version' => ?__string,
    ?'latest_version_arn' => ?__string,
    ?'name' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_timestamp = $s['creation_timestamp'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->last_updated_timestamp = $s['last_updated_timestamp'] ?? '';
    $this->latest_version = $s['latest_version'] ?? '';
    $this->latest_version_arn = $s['latest_version_arn'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class GetCoreDefinitionVersionRequest {
  public ?__string $core_definition_id;
  public ?__string $core_definition_version_id;

  public function __construct(shape(
    ?'core_definition_id' => ?__string,
    ?'core_definition_version_id' => ?__string,
  ) $s = shape()) {
    $this->core_definition_id = $s['core_definition_id'] ?? '';
    $this->core_definition_version_id = $s['core_definition_version_id'] ?? '';
  }
}

class GetCoreDefinitionVersionResponse {
  public ?__string $arn;
  public ?__string $creation_timestamp;
  public ?CoreDefinitionVersion $definition;
  public ?__string $id;
  public ?__string $next_token;
  public ?__string $version;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'creation_timestamp' => ?__string,
    ?'definition' => ?CoreDefinitionVersion,
    ?'id' => ?__string,
    ?'next_token' => ?__string,
    ?'version' => ?__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_timestamp = $s['creation_timestamp'] ?? '';
    $this->definition = $s['definition'] ?? null;
    $this->id = $s['id'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class GetDeploymentStatusRequest {
  public ?__string $deployment_id;
  public ?__string $group_id;

  public function __construct(shape(
    ?'deployment_id' => ?__string,
    ?'group_id' => ?__string,
  ) $s = shape()) {
    $this->deployment_id = $s['deployment_id'] ?? '';
    $this->group_id = $s['group_id'] ?? '';
  }
}

class GetDeploymentStatusResponse {
  public ?__string $deployment_status;
  public ?DeploymentType $deployment_type;
  public ?ErrorDetails $error_details;
  public ?__string $error_message;
  public ?__string $updated_at;

  public function __construct(shape(
    ?'deployment_status' => ?__string,
    ?'deployment_type' => ?DeploymentType,
    ?'error_details' => ?ErrorDetails,
    ?'error_message' => ?__string,
    ?'updated_at' => ?__string,
  ) $s = shape()) {
    $this->deployment_status = $s['deployment_status'] ?? '';
    $this->deployment_type = $s['deployment_type'] ?? '';
    $this->error_details = $s['error_details'] ?? vec[];
    $this->error_message = $s['error_message'] ?? '';
    $this->updated_at = $s['updated_at'] ?? '';
  }
}

class GetDeviceDefinitionRequest {
  public ?__string $device_definition_id;

  public function __construct(shape(
    ?'device_definition_id' => ?__string,
  ) $s = shape()) {
    $this->device_definition_id = $s['device_definition_id'] ?? '';
  }
}

class GetDeviceDefinitionResponse {
  public ?__string $arn;
  public ?__string $creation_timestamp;
  public ?__string $id;
  public ?__string $last_updated_timestamp;
  public ?__string $latest_version;
  public ?__string $latest_version_arn;
  public ?__string $name;
  public ?Tags $tags;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'creation_timestamp' => ?__string,
    ?'id' => ?__string,
    ?'last_updated_timestamp' => ?__string,
    ?'latest_version' => ?__string,
    ?'latest_version_arn' => ?__string,
    ?'name' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_timestamp = $s['creation_timestamp'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->last_updated_timestamp = $s['last_updated_timestamp'] ?? '';
    $this->latest_version = $s['latest_version'] ?? '';
    $this->latest_version_arn = $s['latest_version_arn'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class GetDeviceDefinitionVersionRequest {
  public ?__string $device_definition_id;
  public ?__string $device_definition_version_id;
  public ?__string $next_token;

  public function __construct(shape(
    ?'device_definition_id' => ?__string,
    ?'device_definition_version_id' => ?__string,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->device_definition_id = $s['device_definition_id'] ?? '';
    $this->device_definition_version_id = $s['device_definition_version_id'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetDeviceDefinitionVersionResponse {
  public ?__string $arn;
  public ?__string $creation_timestamp;
  public ?DeviceDefinitionVersion $definition;
  public ?__string $id;
  public ?__string $next_token;
  public ?__string $version;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'creation_timestamp' => ?__string,
    ?'definition' => ?DeviceDefinitionVersion,
    ?'id' => ?__string,
    ?'next_token' => ?__string,
    ?'version' => ?__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_timestamp = $s['creation_timestamp'] ?? '';
    $this->definition = $s['definition'] ?? null;
    $this->id = $s['id'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class GetFunctionDefinitionRequest {
  public ?__string $function_definition_id;

  public function __construct(shape(
    ?'function_definition_id' => ?__string,
  ) $s = shape()) {
    $this->function_definition_id = $s['function_definition_id'] ?? '';
  }
}

class GetFunctionDefinitionResponse {
  public ?__string $arn;
  public ?__string $creation_timestamp;
  public ?__string $id;
  public ?__string $last_updated_timestamp;
  public ?__string $latest_version;
  public ?__string $latest_version_arn;
  public ?__string $name;
  public ?Tags $tags;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'creation_timestamp' => ?__string,
    ?'id' => ?__string,
    ?'last_updated_timestamp' => ?__string,
    ?'latest_version' => ?__string,
    ?'latest_version_arn' => ?__string,
    ?'name' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_timestamp = $s['creation_timestamp'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->last_updated_timestamp = $s['last_updated_timestamp'] ?? '';
    $this->latest_version = $s['latest_version'] ?? '';
    $this->latest_version_arn = $s['latest_version_arn'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class GetFunctionDefinitionVersionRequest {
  public ?__string $function_definition_id;
  public ?__string $function_definition_version_id;
  public ?__string $next_token;

  public function __construct(shape(
    ?'function_definition_id' => ?__string,
    ?'function_definition_version_id' => ?__string,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->function_definition_id = $s['function_definition_id'] ?? '';
    $this->function_definition_version_id = $s['function_definition_version_id'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetFunctionDefinitionVersionResponse {
  public ?__string $arn;
  public ?__string $creation_timestamp;
  public ?FunctionDefinitionVersion $definition;
  public ?__string $id;
  public ?__string $next_token;
  public ?__string $version;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'creation_timestamp' => ?__string,
    ?'definition' => ?FunctionDefinitionVersion,
    ?'id' => ?__string,
    ?'next_token' => ?__string,
    ?'version' => ?__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_timestamp = $s['creation_timestamp'] ?? '';
    $this->definition = $s['definition'] ?? null;
    $this->id = $s['id'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class GetGroupCertificateAuthorityRequest {
  public ?__string $certificate_authority_id;
  public ?__string $group_id;

  public function __construct(shape(
    ?'certificate_authority_id' => ?__string,
    ?'group_id' => ?__string,
  ) $s = shape()) {
    $this->certificate_authority_id = $s['certificate_authority_id'] ?? '';
    $this->group_id = $s['group_id'] ?? '';
  }
}

class GetGroupCertificateAuthorityResponse {
  public ?__string $group_certificate_authority_arn;
  public ?__string $group_certificate_authority_id;
  public ?__string $pem_encoded_certificate;

  public function __construct(shape(
    ?'group_certificate_authority_arn' => ?__string,
    ?'group_certificate_authority_id' => ?__string,
    ?'pem_encoded_certificate' => ?__string,
  ) $s = shape()) {
    $this->group_certificate_authority_arn = $s['group_certificate_authority_arn'] ?? '';
    $this->group_certificate_authority_id = $s['group_certificate_authority_id'] ?? '';
    $this->pem_encoded_certificate = $s['pem_encoded_certificate'] ?? '';
  }
}

class GetGroupCertificateConfigurationRequest {
  public ?__string $group_id;

  public function __construct(shape(
    ?'group_id' => ?__string,
  ) $s = shape()) {
    $this->group_id = $s['group_id'] ?? '';
  }
}

class GetGroupCertificateConfigurationResponse {
  public ?__string $certificate_authority_expiry_in_milliseconds;
  public ?__string $certificate_expiry_in_milliseconds;
  public ?__string $group_id;

  public function __construct(shape(
    ?'certificate_authority_expiry_in_milliseconds' => ?__string,
    ?'certificate_expiry_in_milliseconds' => ?__string,
    ?'group_id' => ?__string,
  ) $s = shape()) {
    $this->certificate_authority_expiry_in_milliseconds = $s['certificate_authority_expiry_in_milliseconds'] ?? '';
    $this->certificate_expiry_in_milliseconds = $s['certificate_expiry_in_milliseconds'] ?? '';
    $this->group_id = $s['group_id'] ?? '';
  }
}

class GetGroupRequest {
  public ?__string $group_id;

  public function __construct(shape(
    ?'group_id' => ?__string,
  ) $s = shape()) {
    $this->group_id = $s['group_id'] ?? '';
  }
}

class GetGroupResponse {
  public ?__string $arn;
  public ?__string $creation_timestamp;
  public ?__string $id;
  public ?__string $last_updated_timestamp;
  public ?__string $latest_version;
  public ?__string $latest_version_arn;
  public ?__string $name;
  public ?Tags $tags;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'creation_timestamp' => ?__string,
    ?'id' => ?__string,
    ?'last_updated_timestamp' => ?__string,
    ?'latest_version' => ?__string,
    ?'latest_version_arn' => ?__string,
    ?'name' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_timestamp = $s['creation_timestamp'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->last_updated_timestamp = $s['last_updated_timestamp'] ?? '';
    $this->latest_version = $s['latest_version'] ?? '';
    $this->latest_version_arn = $s['latest_version_arn'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class GetGroupVersionRequest {
  public ?__string $group_id;
  public ?__string $group_version_id;

  public function __construct(shape(
    ?'group_id' => ?__string,
    ?'group_version_id' => ?__string,
  ) $s = shape()) {
    $this->group_id = $s['group_id'] ?? '';
    $this->group_version_id = $s['group_version_id'] ?? '';
  }
}

class GetGroupVersionResponse {
  public ?__string $arn;
  public ?__string $creation_timestamp;
  public ?GroupVersion $definition;
  public ?__string $id;
  public ?__string $version;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'creation_timestamp' => ?__string,
    ?'definition' => ?GroupVersion,
    ?'id' => ?__string,
    ?'version' => ?__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_timestamp = $s['creation_timestamp'] ?? '';
    $this->definition = $s['definition'] ?? null;
    $this->id = $s['id'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class GetLoggerDefinitionRequest {
  public ?__string $logger_definition_id;

  public function __construct(shape(
    ?'logger_definition_id' => ?__string,
  ) $s = shape()) {
    $this->logger_definition_id = $s['logger_definition_id'] ?? '';
  }
}

class GetLoggerDefinitionResponse {
  public ?__string $arn;
  public ?__string $creation_timestamp;
  public ?__string $id;
  public ?__string $last_updated_timestamp;
  public ?__string $latest_version;
  public ?__string $latest_version_arn;
  public ?__string $name;
  public ?Tags $tags;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'creation_timestamp' => ?__string,
    ?'id' => ?__string,
    ?'last_updated_timestamp' => ?__string,
    ?'latest_version' => ?__string,
    ?'latest_version_arn' => ?__string,
    ?'name' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_timestamp = $s['creation_timestamp'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->last_updated_timestamp = $s['last_updated_timestamp'] ?? '';
    $this->latest_version = $s['latest_version'] ?? '';
    $this->latest_version_arn = $s['latest_version_arn'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class GetLoggerDefinitionVersionRequest {
  public ?__string $logger_definition_id;
  public ?__string $logger_definition_version_id;
  public ?__string $next_token;

  public function __construct(shape(
    ?'logger_definition_id' => ?__string,
    ?'logger_definition_version_id' => ?__string,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->logger_definition_id = $s['logger_definition_id'] ?? '';
    $this->logger_definition_version_id = $s['logger_definition_version_id'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetLoggerDefinitionVersionResponse {
  public ?__string $arn;
  public ?__string $creation_timestamp;
  public ?LoggerDefinitionVersion $definition;
  public ?__string $id;
  public ?__string $version;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'creation_timestamp' => ?__string,
    ?'definition' => ?LoggerDefinitionVersion,
    ?'id' => ?__string,
    ?'version' => ?__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_timestamp = $s['creation_timestamp'] ?? '';
    $this->definition = $s['definition'] ?? null;
    $this->id = $s['id'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class GetResourceDefinitionRequest {
  public ?__string $resource_definition_id;

  public function __construct(shape(
    ?'resource_definition_id' => ?__string,
  ) $s = shape()) {
    $this->resource_definition_id = $s['resource_definition_id'] ?? '';
  }
}

class GetResourceDefinitionResponse {
  public ?__string $arn;
  public ?__string $creation_timestamp;
  public ?__string $id;
  public ?__string $last_updated_timestamp;
  public ?__string $latest_version;
  public ?__string $latest_version_arn;
  public ?__string $name;
  public ?Tags $tags;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'creation_timestamp' => ?__string,
    ?'id' => ?__string,
    ?'last_updated_timestamp' => ?__string,
    ?'latest_version' => ?__string,
    ?'latest_version_arn' => ?__string,
    ?'name' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_timestamp = $s['creation_timestamp'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->last_updated_timestamp = $s['last_updated_timestamp'] ?? '';
    $this->latest_version = $s['latest_version'] ?? '';
    $this->latest_version_arn = $s['latest_version_arn'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class GetResourceDefinitionVersionRequest {
  public ?__string $resource_definition_id;
  public ?__string $resource_definition_version_id;

  public function __construct(shape(
    ?'resource_definition_id' => ?__string,
    ?'resource_definition_version_id' => ?__string,
  ) $s = shape()) {
    $this->resource_definition_id = $s['resource_definition_id'] ?? '';
    $this->resource_definition_version_id = $s['resource_definition_version_id'] ?? '';
  }
}

class GetResourceDefinitionVersionResponse {
  public ?__string $arn;
  public ?__string $creation_timestamp;
  public ?ResourceDefinitionVersion $definition;
  public ?__string $id;
  public ?__string $version;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'creation_timestamp' => ?__string,
    ?'definition' => ?ResourceDefinitionVersion,
    ?'id' => ?__string,
    ?'version' => ?__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_timestamp = $s['creation_timestamp'] ?? '';
    $this->definition = $s['definition'] ?? null;
    $this->id = $s['id'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class GetServiceRoleForAccountRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetServiceRoleForAccountResponse {
  public ?__string $associated_at;
  public ?__string $role_arn;

  public function __construct(shape(
    ?'associated_at' => ?__string,
    ?'role_arn' => ?__string,
  ) $s = shape()) {
    $this->associated_at = $s['associated_at'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

class GetSubscriptionDefinitionRequest {
  public ?__string $subscription_definition_id;

  public function __construct(shape(
    ?'subscription_definition_id' => ?__string,
  ) $s = shape()) {
    $this->subscription_definition_id = $s['subscription_definition_id'] ?? '';
  }
}

class GetSubscriptionDefinitionResponse {
  public ?__string $arn;
  public ?__string $creation_timestamp;
  public ?__string $id;
  public ?__string $last_updated_timestamp;
  public ?__string $latest_version;
  public ?__string $latest_version_arn;
  public ?__string $name;
  public ?Tags $tags;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'creation_timestamp' => ?__string,
    ?'id' => ?__string,
    ?'last_updated_timestamp' => ?__string,
    ?'latest_version' => ?__string,
    ?'latest_version_arn' => ?__string,
    ?'name' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_timestamp = $s['creation_timestamp'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->last_updated_timestamp = $s['last_updated_timestamp'] ?? '';
    $this->latest_version = $s['latest_version'] ?? '';
    $this->latest_version_arn = $s['latest_version_arn'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class GetSubscriptionDefinitionVersionRequest {
  public ?__string $next_token;
  public ?__string $subscription_definition_id;
  public ?__string $subscription_definition_version_id;

  public function __construct(shape(
    ?'next_token' => ?__string,
    ?'subscription_definition_id' => ?__string,
    ?'subscription_definition_version_id' => ?__string,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->subscription_definition_id = $s['subscription_definition_id'] ?? '';
    $this->subscription_definition_version_id = $s['subscription_definition_version_id'] ?? '';
  }
}

class GetSubscriptionDefinitionVersionResponse {
  public ?__string $arn;
  public ?__string $creation_timestamp;
  public ?SubscriptionDefinitionVersion $definition;
  public ?__string $id;
  public ?__string $next_token;
  public ?__string $version;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'creation_timestamp' => ?__string,
    ?'definition' => ?SubscriptionDefinitionVersion,
    ?'id' => ?__string,
    ?'next_token' => ?__string,
    ?'version' => ?__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_timestamp = $s['creation_timestamp'] ?? '';
    $this->definition = $s['definition'] ?? null;
    $this->id = $s['id'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class GroupCertificateAuthorityProperties {
  public ?__string $group_certificate_authority_arn;
  public ?__string $group_certificate_authority_id;

  public function __construct(shape(
    ?'group_certificate_authority_arn' => ?__string,
    ?'group_certificate_authority_id' => ?__string,
  ) $s = shape()) {
    $this->group_certificate_authority_arn = $s['group_certificate_authority_arn'] ?? '';
    $this->group_certificate_authority_id = $s['group_certificate_authority_id'] ?? '';
  }
}

class GroupCertificateConfiguration {
  public ?__string $certificate_authority_expiry_in_milliseconds;
  public ?__string $certificate_expiry_in_milliseconds;
  public ?__string $group_id;

  public function __construct(shape(
    ?'certificate_authority_expiry_in_milliseconds' => ?__string,
    ?'certificate_expiry_in_milliseconds' => ?__string,
    ?'group_id' => ?__string,
  ) $s = shape()) {
    $this->certificate_authority_expiry_in_milliseconds = $s['certificate_authority_expiry_in_milliseconds'] ?? '';
    $this->certificate_expiry_in_milliseconds = $s['certificate_expiry_in_milliseconds'] ?? '';
    $this->group_id = $s['group_id'] ?? '';
  }
}

class GroupInformation {
  public ?__string $arn;
  public ?__string $creation_timestamp;
  public ?__string $id;
  public ?__string $last_updated_timestamp;
  public ?__string $latest_version;
  public ?__string $latest_version_arn;
  public ?__string $name;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'creation_timestamp' => ?__string,
    ?'id' => ?__string,
    ?'last_updated_timestamp' => ?__string,
    ?'latest_version' => ?__string,
    ?'latest_version_arn' => ?__string,
    ?'name' => ?__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_timestamp = $s['creation_timestamp'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->last_updated_timestamp = $s['last_updated_timestamp'] ?? '';
    $this->latest_version = $s['latest_version'] ?? '';
    $this->latest_version_arn = $s['latest_version_arn'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class GroupOwnerSetting {
  public ?__boolean $auto_add_group_owner;
  public ?__string $group_owner;

  public function __construct(shape(
    ?'auto_add_group_owner' => ?__boolean,
    ?'group_owner' => ?__string,
  ) $s = shape()) {
    $this->auto_add_group_owner = $s['auto_add_group_owner'] ?? false;
    $this->group_owner = $s['group_owner'] ?? '';
  }
}

class GroupVersion {
  public ?__string $connector_definition_version_arn;
  public ?__string $core_definition_version_arn;
  public ?__string $device_definition_version_arn;
  public ?__string $function_definition_version_arn;
  public ?__string $logger_definition_version_arn;
  public ?__string $resource_definition_version_arn;
  public ?__string $subscription_definition_version_arn;

  public function __construct(shape(
    ?'connector_definition_version_arn' => ?__string,
    ?'core_definition_version_arn' => ?__string,
    ?'device_definition_version_arn' => ?__string,
    ?'function_definition_version_arn' => ?__string,
    ?'logger_definition_version_arn' => ?__string,
    ?'resource_definition_version_arn' => ?__string,
    ?'subscription_definition_version_arn' => ?__string,
  ) $s = shape()) {
    $this->connector_definition_version_arn = $s['connector_definition_version_arn'] ?? '';
    $this->core_definition_version_arn = $s['core_definition_version_arn'] ?? '';
    $this->device_definition_version_arn = $s['device_definition_version_arn'] ?? '';
    $this->function_definition_version_arn = $s['function_definition_version_arn'] ?? '';
    $this->logger_definition_version_arn = $s['logger_definition_version_arn'] ?? '';
    $this->resource_definition_version_arn = $s['resource_definition_version_arn'] ?? '';
    $this->subscription_definition_version_arn = $s['subscription_definition_version_arn'] ?? '';
  }
}

class InternalServerErrorException {
  public ?ErrorDetails $error_details;
  public ?__string $message;

  public function __construct(shape(
    ?'error_details' => ?ErrorDetails,
    ?'message' => ?__string,
  ) $s = shape()) {
    $this->error_details = $s['error_details'] ?? vec[];
    $this->message = $s['message'] ?? '';
  }
}

class ListBulkDeploymentDetailedReportsRequest {
  public ?__string $bulk_deployment_id;
  public ?__string $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'bulk_deployment_id' => ?__string,
    ?'max_results' => ?__string,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->bulk_deployment_id = $s['bulk_deployment_id'] ?? '';
    $this->max_results = $s['max_results'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListBulkDeploymentDetailedReportsResponse {
  public ?BulkDeploymentResults $deployments;
  public ?__string $next_token;

  public function __construct(shape(
    ?'deployments' => ?BulkDeploymentResults,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->deployments = $s['deployments'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListBulkDeploymentsRequest {
  public ?__string $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'max_results' => ?__string,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListBulkDeploymentsResponse {
  public ?BulkDeployments $bulk_deployments;
  public ?__string $next_token;

  public function __construct(shape(
    ?'bulk_deployments' => ?BulkDeployments,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->bulk_deployments = $s['bulk_deployments'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListConnectorDefinitionVersionsRequest {
  public ?__string $connector_definition_id;
  public ?__string $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'connector_definition_id' => ?__string,
    ?'max_results' => ?__string,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->connector_definition_id = $s['connector_definition_id'] ?? '';
    $this->max_results = $s['max_results'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListConnectorDefinitionVersionsResponse {
  public ?__string $next_token;
  public ?__listOfVersionInformation $versions;

  public function __construct(shape(
    ?'next_token' => ?__string,
    ?'versions' => ?__listOfVersionInformation,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->versions = $s['versions'] ?? vec[];
  }
}

class ListConnectorDefinitionsRequest {
  public ?__string $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'max_results' => ?__string,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListConnectorDefinitionsResponse {
  public ?__listOfDefinitionInformation $definitions;
  public ?__string $next_token;

  public function __construct(shape(
    ?'definitions' => ?__listOfDefinitionInformation,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->definitions = $s['definitions'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListCoreDefinitionVersionsRequest {
  public ?__string $core_definition_id;
  public ?__string $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'core_definition_id' => ?__string,
    ?'max_results' => ?__string,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->core_definition_id = $s['core_definition_id'] ?? '';
    $this->max_results = $s['max_results'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListCoreDefinitionVersionsResponse {
  public ?__string $next_token;
  public ?__listOfVersionInformation $versions;

  public function __construct(shape(
    ?'next_token' => ?__string,
    ?'versions' => ?__listOfVersionInformation,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->versions = $s['versions'] ?? vec[];
  }
}

class ListCoreDefinitionsRequest {
  public ?__string $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'max_results' => ?__string,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListCoreDefinitionsResponse {
  public ?__listOfDefinitionInformation $definitions;
  public ?__string $next_token;

  public function __construct(shape(
    ?'definitions' => ?__listOfDefinitionInformation,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->definitions = $s['definitions'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDefinitionsResponse {
  public ?__listOfDefinitionInformation $definitions;
  public ?__string $next_token;

  public function __construct(shape(
    ?'definitions' => ?__listOfDefinitionInformation,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->definitions = $s['definitions'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDeploymentsRequest {
  public ?__string $group_id;
  public ?__string $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'group_id' => ?__string,
    ?'max_results' => ?__string,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->group_id = $s['group_id'] ?? '';
    $this->max_results = $s['max_results'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDeploymentsResponse {
  public ?Deployments $deployments;
  public ?__string $next_token;

  public function __construct(shape(
    ?'deployments' => ?Deployments,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->deployments = $s['deployments'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDeviceDefinitionVersionsRequest {
  public ?__string $device_definition_id;
  public ?__string $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'device_definition_id' => ?__string,
    ?'max_results' => ?__string,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->device_definition_id = $s['device_definition_id'] ?? '';
    $this->max_results = $s['max_results'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDeviceDefinitionVersionsResponse {
  public ?__string $next_token;
  public ?__listOfVersionInformation $versions;

  public function __construct(shape(
    ?'next_token' => ?__string,
    ?'versions' => ?__listOfVersionInformation,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->versions = $s['versions'] ?? vec[];
  }
}

class ListDeviceDefinitionsRequest {
  public ?__string $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'max_results' => ?__string,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDeviceDefinitionsResponse {
  public ?__listOfDefinitionInformation $definitions;
  public ?__string $next_token;

  public function __construct(shape(
    ?'definitions' => ?__listOfDefinitionInformation,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->definitions = $s['definitions'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListFunctionDefinitionVersionsRequest {
  public ?__string $function_definition_id;
  public ?__string $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'function_definition_id' => ?__string,
    ?'max_results' => ?__string,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->function_definition_id = $s['function_definition_id'] ?? '';
    $this->max_results = $s['max_results'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListFunctionDefinitionVersionsResponse {
  public ?__string $next_token;
  public ?__listOfVersionInformation $versions;

  public function __construct(shape(
    ?'next_token' => ?__string,
    ?'versions' => ?__listOfVersionInformation,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->versions = $s['versions'] ?? vec[];
  }
}

class ListFunctionDefinitionsRequest {
  public ?__string $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'max_results' => ?__string,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListFunctionDefinitionsResponse {
  public ?__listOfDefinitionInformation $definitions;
  public ?__string $next_token;

  public function __construct(shape(
    ?'definitions' => ?__listOfDefinitionInformation,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->definitions = $s['definitions'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListGroupCertificateAuthoritiesRequest {
  public ?__string $group_id;

  public function __construct(shape(
    ?'group_id' => ?__string,
  ) $s = shape()) {
    $this->group_id = $s['group_id'] ?? '';
  }
}

class ListGroupCertificateAuthoritiesResponse {
  public ?__listOfGroupCertificateAuthorityProperties $group_certificate_authorities;

  public function __construct(shape(
    ?'group_certificate_authorities' => ?__listOfGroupCertificateAuthorityProperties,
  ) $s = shape()) {
    $this->group_certificate_authorities = $s['group_certificate_authorities'] ?? vec[];
  }
}

class ListGroupVersionsRequest {
  public ?__string $group_id;
  public ?__string $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'group_id' => ?__string,
    ?'max_results' => ?__string,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->group_id = $s['group_id'] ?? '';
    $this->max_results = $s['max_results'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListGroupVersionsResponse {
  public ?__string $next_token;
  public ?__listOfVersionInformation $versions;

  public function __construct(shape(
    ?'next_token' => ?__string,
    ?'versions' => ?__listOfVersionInformation,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->versions = $s['versions'] ?? vec[];
  }
}

class ListGroupsRequest {
  public ?__string $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'max_results' => ?__string,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListGroupsResponse {
  public ?__listOfGroupInformation $groups;
  public ?__string $next_token;

  public function __construct(shape(
    ?'groups' => ?__listOfGroupInformation,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->groups = $s['groups'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListLoggerDefinitionVersionsRequest {
  public ?__string $logger_definition_id;
  public ?__string $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'logger_definition_id' => ?__string,
    ?'max_results' => ?__string,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->logger_definition_id = $s['logger_definition_id'] ?? '';
    $this->max_results = $s['max_results'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListLoggerDefinitionVersionsResponse {
  public ?__string $next_token;
  public ?__listOfVersionInformation $versions;

  public function __construct(shape(
    ?'next_token' => ?__string,
    ?'versions' => ?__listOfVersionInformation,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->versions = $s['versions'] ?? vec[];
  }
}

class ListLoggerDefinitionsRequest {
  public ?__string $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'max_results' => ?__string,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListLoggerDefinitionsResponse {
  public ?__listOfDefinitionInformation $definitions;
  public ?__string $next_token;

  public function __construct(shape(
    ?'definitions' => ?__listOfDefinitionInformation,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->definitions = $s['definitions'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListResourceDefinitionVersionsRequest {
  public ?__string $max_results;
  public ?__string $next_token;
  public ?__string $resource_definition_id;

  public function __construct(shape(
    ?'max_results' => ?__string,
    ?'next_token' => ?__string,
    ?'resource_definition_id' => ?__string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->resource_definition_id = $s['resource_definition_id'] ?? '';
  }
}

class ListResourceDefinitionVersionsResponse {
  public ?__string $next_token;
  public ?__listOfVersionInformation $versions;

  public function __construct(shape(
    ?'next_token' => ?__string,
    ?'versions' => ?__listOfVersionInformation,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->versions = $s['versions'] ?? vec[];
  }
}

class ListResourceDefinitionsRequest {
  public ?__string $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'max_results' => ?__string,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListResourceDefinitionsResponse {
  public ?__listOfDefinitionInformation $definitions;
  public ?__string $next_token;

  public function __construct(shape(
    ?'definitions' => ?__listOfDefinitionInformation,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->definitions = $s['definitions'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListSubscriptionDefinitionVersionsRequest {
  public ?__string $max_results;
  public ?__string $next_token;
  public ?__string $subscription_definition_id;

  public function __construct(shape(
    ?'max_results' => ?__string,
    ?'next_token' => ?__string,
    ?'subscription_definition_id' => ?__string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->subscription_definition_id = $s['subscription_definition_id'] ?? '';
  }
}

class ListSubscriptionDefinitionVersionsResponse {
  public ?__string $next_token;
  public ?__listOfVersionInformation $versions;

  public function __construct(shape(
    ?'next_token' => ?__string,
    ?'versions' => ?__listOfVersionInformation,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->versions = $s['versions'] ?? vec[];
  }
}

class ListSubscriptionDefinitionsRequest {
  public ?__string $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'max_results' => ?__string,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListSubscriptionDefinitionsResponse {
  public ?__listOfDefinitionInformation $definitions;
  public ?__string $next_token;

  public function __construct(shape(
    ?'definitions' => ?__listOfDefinitionInformation,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->definitions = $s['definitions'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListTagsForResourceRequest {
  public ?__string $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?__string,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsForResourceResponse {
  public ?Tags $tags;

  public function __construct(shape(
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? dict[];
  }
}

class ListVersionsResponse {
  public ?__string $next_token;
  public ?__listOfVersionInformation $versions;

  public function __construct(shape(
    ?'next_token' => ?__string,
    ?'versions' => ?__listOfVersionInformation,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->versions = $s['versions'] ?? vec[];
  }
}

class LocalDeviceResourceData {
  public ?GroupOwnerSetting $group_owner_setting;
  public ?__string $source_path;

  public function __construct(shape(
    ?'group_owner_setting' => ?GroupOwnerSetting,
    ?'source_path' => ?__string,
  ) $s = shape()) {
    $this->group_owner_setting = $s['group_owner_setting'] ?? null;
    $this->source_path = $s['source_path'] ?? '';
  }
}

class LocalVolumeResourceData {
  public ?__string $destination_path;
  public ?GroupOwnerSetting $group_owner_setting;
  public ?__string $source_path;

  public function __construct(shape(
    ?'destination_path' => ?__string,
    ?'group_owner_setting' => ?GroupOwnerSetting,
    ?'source_path' => ?__string,
  ) $s = shape()) {
    $this->destination_path = $s['destination_path'] ?? '';
    $this->group_owner_setting = $s['group_owner_setting'] ?? null;
    $this->source_path = $s['source_path'] ?? '';
  }
}

class Logger {
  public ?LoggerComponent $component;
  public ?__string $id;
  public ?LoggerLevel $level;
  public ?__integer $space;
  public ?LoggerType $type;

  public function __construct(shape(
    ?'component' => ?LoggerComponent,
    ?'id' => ?__string,
    ?'level' => ?LoggerLevel,
    ?'space' => ?__integer,
    ?'type' => ?LoggerType,
  ) $s = shape()) {
    $this->component = $s['component'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->level = $s['level'] ?? '';
    $this->space = $s['space'] ?? 0;
    $this->type = $s['type'] ?? '';
  }
}

type LoggerComponent = string;

class LoggerDefinitionVersion {
  public ?__listOfLogger $loggers;

  public function __construct(shape(
    ?'loggers' => ?__listOfLogger,
  ) $s = shape()) {
    $this->loggers = $s['loggers'] ?? vec[];
  }
}

type LoggerLevel = string;

type LoggerType = string;

type Permission = string;

class ResetDeploymentsRequest {
  public ?__string $amzn_client_token;
  public ?__boolean $force;
  public ?__string $group_id;

  public function __construct(shape(
    ?'amzn_client_token' => ?__string,
    ?'force' => ?__boolean,
    ?'group_id' => ?__string,
  ) $s = shape()) {
    $this->amzn_client_token = $s['amzn_client_token'] ?? '';
    $this->force = $s['force'] ?? false;
    $this->group_id = $s['group_id'] ?? '';
  }
}

class ResetDeploymentsResponse {
  public ?__string $deployment_arn;
  public ?__string $deployment_id;

  public function __construct(shape(
    ?'deployment_arn' => ?__string,
    ?'deployment_id' => ?__string,
  ) $s = shape()) {
    $this->deployment_arn = $s['deployment_arn'] ?? '';
    $this->deployment_id = $s['deployment_id'] ?? '';
  }
}

class Resource {
  public ?__string $id;
  public ?__string $name;
  public ?ResourceDataContainer $resource_data_container;

  public function __construct(shape(
    ?'id' => ?__string,
    ?'name' => ?__string,
    ?'resource_data_container' => ?ResourceDataContainer,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->resource_data_container = $s['resource_data_container'] ?? null;
  }
}

class ResourceAccessPolicy {
  public ?Permission $permission;
  public ?__string $resource_id;

  public function __construct(shape(
    ?'permission' => ?Permission,
    ?'resource_id' => ?__string,
  ) $s = shape()) {
    $this->permission = $s['permission'] ?? '';
    $this->resource_id = $s['resource_id'] ?? '';
  }
}

class ResourceDataContainer {
  public ?LocalDeviceResourceData $local_device_resource_data;
  public ?LocalVolumeResourceData $local_volume_resource_data;
  public ?S3MachineLearningModelResourceData $s_3_machine_learning_model_resource_data;
  public ?SageMakerMachineLearningModelResourceData $sage_maker_machine_learning_model_resource_data;
  public ?SecretsManagerSecretResourceData $secrets_manager_secret_resource_data;

  public function __construct(shape(
    ?'local_device_resource_data' => ?LocalDeviceResourceData,
    ?'local_volume_resource_data' => ?LocalVolumeResourceData,
    ?'s_3_machine_learning_model_resource_data' => ?S3MachineLearningModelResourceData,
    ?'sage_maker_machine_learning_model_resource_data' => ?SageMakerMachineLearningModelResourceData,
    ?'secrets_manager_secret_resource_data' => ?SecretsManagerSecretResourceData,
  ) $s = shape()) {
    $this->local_device_resource_data = $s['local_device_resource_data'] ?? null;
    $this->local_volume_resource_data = $s['local_volume_resource_data'] ?? null;
    $this->s_3_machine_learning_model_resource_data = $s['s_3_machine_learning_model_resource_data'] ?? null;
    $this->sage_maker_machine_learning_model_resource_data = $s['sage_maker_machine_learning_model_resource_data'] ?? null;
    $this->secrets_manager_secret_resource_data = $s['secrets_manager_secret_resource_data'] ?? null;
  }
}

class ResourceDefinitionVersion {
  public ?__listOfResource $resources;

  public function __construct(shape(
    ?'resources' => ?__listOfResource,
  ) $s = shape()) {
    $this->resources = $s['resources'] ?? vec[];
  }
}

class ResourceDownloadOwnerSetting {
  public ?__string $group_owner;
  public ?Permission $group_permission;

  public function __construct(shape(
    ?'group_owner' => ?__string,
    ?'group_permission' => ?Permission,
  ) $s = shape()) {
    $this->group_owner = $s['group_owner'] ?? '';
    $this->group_permission = $s['group_permission'] ?? '';
  }
}

class S3MachineLearningModelResourceData {
  public ?__string $destination_path;
  public ?ResourceDownloadOwnerSetting $owner_setting;
  public ?__string $s_3_uri;

  public function __construct(shape(
    ?'destination_path' => ?__string,
    ?'owner_setting' => ?ResourceDownloadOwnerSetting,
    ?'s_3_uri' => ?__string,
  ) $s = shape()) {
    $this->destination_path = $s['destination_path'] ?? '';
    $this->owner_setting = $s['owner_setting'] ?? null;
    $this->s_3_uri = $s['s_3_uri'] ?? '';
  }
}

type S3UrlSignerRole = string;

class SageMakerMachineLearningModelResourceData {
  public ?__string $destination_path;
  public ?ResourceDownloadOwnerSetting $owner_setting;
  public ?__string $sage_maker_job_arn;

  public function __construct(shape(
    ?'destination_path' => ?__string,
    ?'owner_setting' => ?ResourceDownloadOwnerSetting,
    ?'sage_maker_job_arn' => ?__string,
  ) $s = shape()) {
    $this->destination_path = $s['destination_path'] ?? '';
    $this->owner_setting = $s['owner_setting'] ?? null;
    $this->sage_maker_job_arn = $s['sage_maker_job_arn'] ?? '';
  }
}

class SecretsManagerSecretResourceData {
  public ?__string $arn;
  public ?__listOf__string $additional_staging_labels_to_download;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'additional_staging_labels_to_download' => ?__listOf__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->additional_staging_labels_to_download = $s['additional_staging_labels_to_download'] ?? vec[];
  }
}

type SoftwareToUpdate = string;

class StartBulkDeploymentRequest {
  public ?__string $amzn_client_token;
  public ?__string $execution_role_arn;
  public ?__string $input_file_uri;
  public ?Tags $tags;

  public function __construct(shape(
    ?'amzn_client_token' => ?__string,
    ?'execution_role_arn' => ?__string,
    ?'input_file_uri' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->amzn_client_token = $s['amzn_client_token'] ?? '';
    $this->execution_role_arn = $s['execution_role_arn'] ?? '';
    $this->input_file_uri = $s['input_file_uri'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class StartBulkDeploymentResponse {
  public ?__string $bulk_deployment_arn;
  public ?__string $bulk_deployment_id;

  public function __construct(shape(
    ?'bulk_deployment_arn' => ?__string,
    ?'bulk_deployment_id' => ?__string,
  ) $s = shape()) {
    $this->bulk_deployment_arn = $s['bulk_deployment_arn'] ?? '';
    $this->bulk_deployment_id = $s['bulk_deployment_id'] ?? '';
  }
}

class StopBulkDeploymentRequest {
  public ?__string $bulk_deployment_id;

  public function __construct(shape(
    ?'bulk_deployment_id' => ?__string,
  ) $s = shape()) {
    $this->bulk_deployment_id = $s['bulk_deployment_id'] ?? '';
  }
}

class StopBulkDeploymentResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Subscription {
  public ?__string $id;
  public ?__string $source;
  public ?__string $subject;
  public ?__string $target;

  public function __construct(shape(
    ?'id' => ?__string,
    ?'source' => ?__string,
    ?'subject' => ?__string,
    ?'target' => ?__string,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->source = $s['source'] ?? '';
    $this->subject = $s['subject'] ?? '';
    $this->target = $s['target'] ?? '';
  }
}

class SubscriptionDefinitionVersion {
  public ?__listOfSubscription $subscriptions;

  public function __construct(shape(
    ?'subscriptions' => ?__listOfSubscription,
  ) $s = shape()) {
    $this->subscriptions = $s['subscriptions'] ?? vec[];
  }
}

class TagResourceRequest {
  public ?__string $resource_arn;
  public ?Tags $tags;

  public function __construct(shape(
    ?'resource_arn' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

type Tags = dict<__string, __string>;

class UntagResourceRequest {
  public ?__string $resource_arn;
  public ?__listOf__string $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => ?__string,
    ?'tag_keys' => ?__listOf__string,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

type UpdateAgentLogLevel = string;

class UpdateConnectivityInfoRequest {
  public ?__listOfConnectivityInfo $connectivity_info;
  public ?__string $thing_name;

  public function __construct(shape(
    ?'connectivity_info' => ?__listOfConnectivityInfo,
    ?'thing_name' => ?__string,
  ) $s = shape()) {
    $this->connectivity_info = $s['connectivity_info'] ?? vec[];
    $this->thing_name = $s['thing_name'] ?? '';
  }
}

class UpdateConnectivityInfoResponse {
  public ?__string $message;
  public ?__string $version;

  public function __construct(shape(
    ?'message' => ?__string,
    ?'version' => ?__string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class UpdateConnectorDefinitionRequest {
  public ?__string $connector_definition_id;
  public ?__string $name;

  public function __construct(shape(
    ?'connector_definition_id' => ?__string,
    ?'name' => ?__string,
  ) $s = shape()) {
    $this->connector_definition_id = $s['connector_definition_id'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class UpdateConnectorDefinitionResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateCoreDefinitionRequest {
  public ?__string $core_definition_id;
  public ?__string $name;

  public function __construct(shape(
    ?'core_definition_id' => ?__string,
    ?'name' => ?__string,
  ) $s = shape()) {
    $this->core_definition_id = $s['core_definition_id'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class UpdateCoreDefinitionResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateDeviceDefinitionRequest {
  public ?__string $device_definition_id;
  public ?__string $name;

  public function __construct(shape(
    ?'device_definition_id' => ?__string,
    ?'name' => ?__string,
  ) $s = shape()) {
    $this->device_definition_id = $s['device_definition_id'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class UpdateDeviceDefinitionResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateFunctionDefinitionRequest {
  public ?__string $function_definition_id;
  public ?__string $name;

  public function __construct(shape(
    ?'function_definition_id' => ?__string,
    ?'name' => ?__string,
  ) $s = shape()) {
    $this->function_definition_id = $s['function_definition_id'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class UpdateFunctionDefinitionResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateGroupCertificateConfigurationRequest {
  public ?__string $certificate_expiry_in_milliseconds;
  public ?__string $group_id;

  public function __construct(shape(
    ?'certificate_expiry_in_milliseconds' => ?__string,
    ?'group_id' => ?__string,
  ) $s = shape()) {
    $this->certificate_expiry_in_milliseconds = $s['certificate_expiry_in_milliseconds'] ?? '';
    $this->group_id = $s['group_id'] ?? '';
  }
}

class UpdateGroupCertificateConfigurationResponse {
  public ?__string $certificate_authority_expiry_in_milliseconds;
  public ?__string $certificate_expiry_in_milliseconds;
  public ?__string $group_id;

  public function __construct(shape(
    ?'certificate_authority_expiry_in_milliseconds' => ?__string,
    ?'certificate_expiry_in_milliseconds' => ?__string,
    ?'group_id' => ?__string,
  ) $s = shape()) {
    $this->certificate_authority_expiry_in_milliseconds = $s['certificate_authority_expiry_in_milliseconds'] ?? '';
    $this->certificate_expiry_in_milliseconds = $s['certificate_expiry_in_milliseconds'] ?? '';
    $this->group_id = $s['group_id'] ?? '';
  }
}

class UpdateGroupRequest {
  public ?__string $group_id;
  public ?__string $name;

  public function __construct(shape(
    ?'group_id' => ?__string,
    ?'name' => ?__string,
  ) $s = shape()) {
    $this->group_id = $s['group_id'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class UpdateGroupResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateLoggerDefinitionRequest {
  public ?__string $logger_definition_id;
  public ?__string $name;

  public function __construct(shape(
    ?'logger_definition_id' => ?__string,
    ?'name' => ?__string,
  ) $s = shape()) {
    $this->logger_definition_id = $s['logger_definition_id'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class UpdateLoggerDefinitionResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateResourceDefinitionRequest {
  public ?__string $name;
  public ?__string $resource_definition_id;

  public function __construct(shape(
    ?'name' => ?__string,
    ?'resource_definition_id' => ?__string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->resource_definition_id = $s['resource_definition_id'] ?? '';
  }
}

class UpdateResourceDefinitionResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateSubscriptionDefinitionRequest {
  public ?__string $name;
  public ?__string $subscription_definition_id;

  public function __construct(shape(
    ?'name' => ?__string,
    ?'subscription_definition_id' => ?__string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->subscription_definition_id = $s['subscription_definition_id'] ?? '';
  }
}

class UpdateSubscriptionDefinitionResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type UpdateTargets = vec<__string>;

type UpdateTargetsArchitecture = string;

type UpdateTargetsOperatingSystem = string;

class VersionInformation {
  public ?__string $arn;
  public ?__string $creation_timestamp;
  public ?__string $id;
  public ?__string $version;

  public function __construct(shape(
    ?'arn' => ?__string,
    ?'creation_timestamp' => ?__string,
    ?'id' => ?__string,
    ?'version' => ?__string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_timestamp = $s['creation_timestamp'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

type __boolean = bool;

type __double = float;

type __integer = int;

type __listOfConnectivityInfo = vec<ConnectivityInfo>;

type __listOfConnector = vec<Connector>;

type __listOfCore = vec<Core>;

type __listOfDefinitionInformation = vec<DefinitionInformation>;

type __listOfDevice = vec<Device>;

type __listOfFunction = vec<Function>;

type __listOfGroupCertificateAuthorityProperties = vec<GroupCertificateAuthorityProperties>;

type __listOfGroupInformation = vec<GroupInformation>;

type __listOfLogger = vec<Logger>;

type __listOfResource = vec<Resource>;

type __listOfResourceAccessPolicy = vec<ResourceAccessPolicy>;

type __listOfSubscription = vec<Subscription>;

type __listOfVersionInformation = vec<VersionInformation>;

type __listOf__string = vec<__string>;

type __long = int;

type __mapOf__string = dict<__string, __string>;

type __string = string;

type __timestampIso8601 = int;

type __timestampUnix = int;

