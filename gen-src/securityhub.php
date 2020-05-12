<?hh // strict
namespace slack\aws\securityhub;

interface SecurityHub {
  public function AcceptInvitation(AcceptInvitationRequest $in): Awaitable<\Errors\Result<AcceptInvitationResponse>>;
  public function BatchDisableStandards(BatchDisableStandardsRequest $in): Awaitable<\Errors\Result<BatchDisableStandardsResponse>>;
  public function BatchEnableStandards(BatchEnableStandardsRequest $in): Awaitable<\Errors\Result<BatchEnableStandardsResponse>>;
  public function BatchImportFindings(BatchImportFindingsRequest $in): Awaitable<\Errors\Result<BatchImportFindingsResponse>>;
  public function BatchUpdateFindings(BatchUpdateFindingsRequest $in): Awaitable<\Errors\Result<BatchUpdateFindingsResponse>>;
  public function CreateActionTarget(CreateActionTargetRequest $in): Awaitable<\Errors\Result<CreateActionTargetResponse>>;
  public function CreateInsight(CreateInsightRequest $in): Awaitable<\Errors\Result<CreateInsightResponse>>;
  public function CreateMembers(CreateMembersRequest $in): Awaitable<\Errors\Result<CreateMembersResponse>>;
  public function DeclineInvitations(DeclineInvitationsRequest $in): Awaitable<\Errors\Result<DeclineInvitationsResponse>>;
  public function DeleteActionTarget(DeleteActionTargetRequest $in): Awaitable<\Errors\Result<DeleteActionTargetResponse>>;
  public function DeleteInsight(DeleteInsightRequest $in): Awaitable<\Errors\Result<DeleteInsightResponse>>;
  public function DeleteInvitations(DeleteInvitationsRequest $in): Awaitable<\Errors\Result<DeleteInvitationsResponse>>;
  public function DeleteMembers(DeleteMembersRequest $in): Awaitable<\Errors\Result<DeleteMembersResponse>>;
  public function DescribeActionTargets(DescribeActionTargetsRequest $in): Awaitable<\Errors\Result<DescribeActionTargetsResponse>>;
  public function DescribeHub(DescribeHubRequest $in): Awaitable<\Errors\Result<DescribeHubResponse>>;
  public function DescribeProducts(DescribeProductsRequest $in): Awaitable<\Errors\Result<DescribeProductsResponse>>;
  public function DescribeStandards(DescribeStandardsRequest $in): Awaitable<\Errors\Result<DescribeStandardsResponse>>;
  public function DescribeStandardsControls(DescribeStandardsControlsRequest $in): Awaitable<\Errors\Result<DescribeStandardsControlsResponse>>;
  public function DisableImportFindingsForProduct(DisableImportFindingsForProductRequest $in): Awaitable<\Errors\Result<DisableImportFindingsForProductResponse>>;
  public function DisableSecurityHub(DisableSecurityHubRequest $in): Awaitable<\Errors\Result<DisableSecurityHubResponse>>;
  public function DisassociateFromMasterAccount(DisassociateFromMasterAccountRequest $in): Awaitable<\Errors\Result<DisassociateFromMasterAccountResponse>>;
  public function DisassociateMembers(DisassociateMembersRequest $in): Awaitable<\Errors\Result<DisassociateMembersResponse>>;
  public function EnableImportFindingsForProduct(EnableImportFindingsForProductRequest $in): Awaitable<\Errors\Result<EnableImportFindingsForProductResponse>>;
  public function EnableSecurityHub(EnableSecurityHubRequest $in): Awaitable<\Errors\Result<EnableSecurityHubResponse>>;
  public function GetEnabledStandards(GetEnabledStandardsRequest $in): Awaitable<\Errors\Result<GetEnabledStandardsResponse>>;
  public function GetFindings(GetFindingsRequest $in): Awaitable<\Errors\Result<GetFindingsResponse>>;
  public function GetInsightResults(GetInsightResultsRequest $in): Awaitable<\Errors\Result<GetInsightResultsResponse>>;
  public function GetInsights(GetInsightsRequest $in): Awaitable<\Errors\Result<GetInsightsResponse>>;
  public function GetInvitationsCount(GetInvitationsCountRequest $in): Awaitable<\Errors\Result<GetInvitationsCountResponse>>;
  public function GetMasterAccount(GetMasterAccountRequest $in): Awaitable<\Errors\Result<GetMasterAccountResponse>>;
  public function GetMembers(GetMembersRequest $in): Awaitable<\Errors\Result<GetMembersResponse>>;
  public function InviteMembers(InviteMembersRequest $in): Awaitable<\Errors\Result<InviteMembersResponse>>;
  public function ListEnabledProductsForImport(ListEnabledProductsForImportRequest $in): Awaitable<\Errors\Result<ListEnabledProductsForImportResponse>>;
  public function ListInvitations(ListInvitationsRequest $in): Awaitable<\Errors\Result<ListInvitationsResponse>>;
  public function ListMembers(ListMembersRequest $in): Awaitable<\Errors\Result<ListMembersResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResponse>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Result<UntagResourceResponse>>;
  public function UpdateActionTarget(UpdateActionTargetRequest $in): Awaitable<\Errors\Result<UpdateActionTargetResponse>>;
  public function UpdateFindings(UpdateFindingsRequest $in): Awaitable<\Errors\Result<UpdateFindingsResponse>>;
  public function UpdateInsight(UpdateInsightRequest $in): Awaitable<\Errors\Result<UpdateInsightResponse>>;
  public function UpdateStandardsControl(UpdateStandardsControlRequest $in): Awaitable<\Errors\Result<UpdateStandardsControlResponse>>;
}

class AcceptInvitationRequest {
  public ?NonEmptyString $invitation_id;
  public ?NonEmptyString $master_id;

  public function __construct(shape(
    ?'invitation_id' => ?NonEmptyString,
    ?'master_id' => ?NonEmptyString,
  ) $s = shape()) {
    $this->invitation_id = $s['invitation_id'] ?? '';
    $this->master_id = $s['master_id'] ?? '';
  }
}

class AcceptInvitationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AccessDeniedException {
  public ?NonEmptyString $code;
  public ?NonEmptyString $message;

  public function __construct(shape(
    ?'code' => ?NonEmptyString,
    ?'message' => ?NonEmptyString,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class AccountDetails {
  public ?AccountId $account_id;
  public ?NonEmptyString $email;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'email' => ?NonEmptyString,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->email = $s['email'] ?? '';
  }
}

type AccountDetailsList = vec<AccountDetails>;

type AccountId = string;

type AccountIdList = vec<NonEmptyString>;

class ActionTarget {
  public ?NonEmptyString $action_target_arn;
  public ?NonEmptyString $description;
  public ?NonEmptyString $name;

  public function __construct(shape(
    ?'action_target_arn' => ?NonEmptyString,
    ?'description' => ?NonEmptyString,
    ?'name' => ?NonEmptyString,
  ) $s = shape()) {
    $this->action_target_arn = $s['action_target_arn'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

type ActionTargetList = vec<ActionTarget>;

type ArnList = vec<NonEmptyString>;

class AvailabilityZone {
  public ?NonEmptyString $subnet_id;
  public ?NonEmptyString $zone_name;

  public function __construct(shape(
    ?'subnet_id' => ?NonEmptyString,
    ?'zone_name' => ?NonEmptyString,
  ) $s = shape()) {
    $this->subnet_id = $s['subnet_id'] ?? '';
    $this->zone_name = $s['zone_name'] ?? '';
  }
}

type AvailabilityZones = vec<AvailabilityZone>;

class AwsCloudFrontDistributionDetails {
  public ?NonEmptyString $domain_name;
  public ?NonEmptyString $e_tag;
  public ?NonEmptyString $last_modified_time;
  public ?AwsCloudFrontDistributionLogging $logging;
  public ?AwsCloudFrontDistributionOrigins $origins;
  public ?NonEmptyString $status;
  public ?NonEmptyString $web_acl_id;

  public function __construct(shape(
    ?'domain_name' => ?NonEmptyString,
    ?'e_tag' => ?NonEmptyString,
    ?'last_modified_time' => ?NonEmptyString,
    ?'logging' => ?AwsCloudFrontDistributionLogging,
    ?'origins' => ?AwsCloudFrontDistributionOrigins,
    ?'status' => ?NonEmptyString,
    ?'web_acl_id' => ?NonEmptyString,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
    $this->e_tag = $s['e_tag'] ?? '';
    $this->last_modified_time = $s['last_modified_time'] ?? '';
    $this->logging = $s['logging'] ?? null;
    $this->origins = $s['origins'] ?? null;
    $this->status = $s['status'] ?? '';
    $this->web_acl_id = $s['web_acl_id'] ?? '';
  }
}

class AwsCloudFrontDistributionLogging {
  public ?NonEmptyString $bucket;
  public bool $enabled;
  public bool $include_cookies;
  public ?NonEmptyString $prefix;

  public function __construct(shape(
    ?'bucket' => ?NonEmptyString,
    ?'enabled' => bool,
    ?'include_cookies' => bool,
    ?'prefix' => ?NonEmptyString,
  ) $s = shape()) {
    $this->bucket = $s['bucket'] ?? '';
    $this->enabled = $s['enabled'] ?? false;
    $this->include_cookies = $s['include_cookies'] ?? false;
    $this->prefix = $s['prefix'] ?? '';
  }
}

class AwsCloudFrontDistributionOriginItem {
  public ?NonEmptyString $domain_name;
  public ?NonEmptyString $id;
  public ?NonEmptyString $origin_path;

  public function __construct(shape(
    ?'domain_name' => ?NonEmptyString,
    ?'id' => ?NonEmptyString,
    ?'origin_path' => ?NonEmptyString,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->origin_path = $s['origin_path'] ?? '';
  }
}

type AwsCloudFrontDistributionOriginItemList = vec<AwsCloudFrontDistributionOriginItem>;

class AwsCloudFrontDistributionOrigins {
  public ?AwsCloudFrontDistributionOriginItemList $items;

  public function __construct(shape(
    ?'items' => ?AwsCloudFrontDistributionOriginItemList,
  ) $s = shape()) {
    $this->items = $s['items'] ?? vec[];
  }
}

class AwsCodeBuildProjectDetails {
  public ?NonEmptyString $encryption_key;
  public ?AwsCodeBuildProjectEnvironment $environment;
  public ?NonEmptyString $name;
  public ?NonEmptyString $service_role;
  public ?AwsCodeBuildProjectSource $source;
  public ?AwsCodeBuildProjectVpcConfig $vpc_config;

  public function __construct(shape(
    ?'encryption_key' => ?NonEmptyString,
    ?'environment' => ?AwsCodeBuildProjectEnvironment,
    ?'name' => ?NonEmptyString,
    ?'service_role' => ?NonEmptyString,
    ?'source' => ?AwsCodeBuildProjectSource,
    ?'vpc_config' => ?AwsCodeBuildProjectVpcConfig,
  ) $s = shape()) {
    $this->encryption_key = $s['encryption_key'] ?? '';
    $this->environment = $s['environment'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->service_role = $s['service_role'] ?? '';
    $this->source = $s['source'] ?? null;
    $this->vpc_config = $s['vpc_config'] ?? null;
  }
}

class AwsCodeBuildProjectEnvironment {
  public ?NonEmptyString $certificate;
  public ?NonEmptyString $image_pull_credentials_type;
  public ?AwsCodeBuildProjectEnvironmentRegistryCredential $registry_credential;
  public ?NonEmptyString $type;

  public function __construct(shape(
    ?'certificate' => ?NonEmptyString,
    ?'image_pull_credentials_type' => ?NonEmptyString,
    ?'registry_credential' => ?AwsCodeBuildProjectEnvironmentRegistryCredential,
    ?'type' => ?NonEmptyString,
  ) $s = shape()) {
    $this->certificate = $s['certificate'] ?? '';
    $this->image_pull_credentials_type = $s['image_pull_credentials_type'] ?? '';
    $this->registry_credential = $s['registry_credential'] ?? null;
    $this->type = $s['type'] ?? '';
  }
}

class AwsCodeBuildProjectEnvironmentRegistryCredential {
  public ?NonEmptyString $credential;
  public ?NonEmptyString $credential_provider;

  public function __construct(shape(
    ?'credential' => ?NonEmptyString,
    ?'credential_provider' => ?NonEmptyString,
  ) $s = shape()) {
    $this->credential = $s['credential'] ?? '';
    $this->credential_provider = $s['credential_provider'] ?? '';
  }
}

class AwsCodeBuildProjectSource {
  public int $git_clone_depth;
  public bool $insecure_ssl;
  public ?NonEmptyString $location;
  public ?NonEmptyString $type;

  public function __construct(shape(
    ?'git_clone_depth' => int,
    ?'insecure_ssl' => bool,
    ?'location' => ?NonEmptyString,
    ?'type' => ?NonEmptyString,
  ) $s = shape()) {
    $this->git_clone_depth = $s['git_clone_depth'] ?? 0;
    $this->insecure_ssl = $s['insecure_ssl'] ?? false;
    $this->location = $s['location'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class AwsCodeBuildProjectVpcConfig {
  public ?NonEmptyStringList $security_group_ids;
  public ?NonEmptyStringList $subnets;
  public ?NonEmptyString $vpc_id;

  public function __construct(shape(
    ?'security_group_ids' => ?NonEmptyStringList,
    ?'subnets' => ?NonEmptyStringList,
    ?'vpc_id' => ?NonEmptyString,
  ) $s = shape()) {
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
    $this->subnets = $s['subnets'] ?? vec[];
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class AwsEc2InstanceDetails {
  public ?NonEmptyString $iam_instance_profile_arn;
  public ?NonEmptyString $image_id;
  public ?StringList $ip_v_4_addresses;
  public ?StringList $ip_v_6_addresses;
  public ?NonEmptyString $key_name;
  public ?NonEmptyString $launched_at;
  public ?NonEmptyString $subnet_id;
  public ?NonEmptyString $type;
  public ?NonEmptyString $vpc_id;

  public function __construct(shape(
    ?'iam_instance_profile_arn' => ?NonEmptyString,
    ?'image_id' => ?NonEmptyString,
    ?'ip_v_4_addresses' => ?StringList,
    ?'ip_v_6_addresses' => ?StringList,
    ?'key_name' => ?NonEmptyString,
    ?'launched_at' => ?NonEmptyString,
    ?'subnet_id' => ?NonEmptyString,
    ?'type' => ?NonEmptyString,
    ?'vpc_id' => ?NonEmptyString,
  ) $s = shape()) {
    $this->iam_instance_profile_arn = $s['iam_instance_profile_arn'] ?? '';
    $this->image_id = $s['image_id'] ?? '';
    $this->ip_v_4_addresses = $s['ip_v_4_addresses'] ?? vec[];
    $this->ip_v_6_addresses = $s['ip_v_6_addresses'] ?? vec[];
    $this->key_name = $s['key_name'] ?? '';
    $this->launched_at = $s['launched_at'] ?? '';
    $this->subnet_id = $s['subnet_id'] ?? '';
    $this->type = $s['type'] ?? '';
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class AwsEc2NetworkInterfaceAttachment {
  public ?NonEmptyString $attach_time;
  public ?NonEmptyString $attachment_id;
  public bool $delete_on_termination;
  public int $device_index;
  public ?NonEmptyString $instance_id;
  public ?NonEmptyString $instance_owner_id;
  public ?NonEmptyString $status;

  public function __construct(shape(
    ?'attach_time' => ?NonEmptyString,
    ?'attachment_id' => ?NonEmptyString,
    ?'delete_on_termination' => bool,
    ?'device_index' => int,
    ?'instance_id' => ?NonEmptyString,
    ?'instance_owner_id' => ?NonEmptyString,
    ?'status' => ?NonEmptyString,
  ) $s = shape()) {
    $this->attach_time = $s['attach_time'] ?? '';
    $this->attachment_id = $s['attachment_id'] ?? '';
    $this->delete_on_termination = $s['delete_on_termination'] ?? false;
    $this->device_index = $s['device_index'] ?? 0;
    $this->instance_id = $s['instance_id'] ?? '';
    $this->instance_owner_id = $s['instance_owner_id'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class AwsEc2NetworkInterfaceDetails {
  public ?AwsEc2NetworkInterfaceAttachment $attachment;
  public ?NonEmptyString $network_interface_id;
  public ?AwsEc2NetworkInterfaceSecurityGroupList $security_groups;
  public bool $source_dest_check;

  public function __construct(shape(
    ?'attachment' => ?AwsEc2NetworkInterfaceAttachment,
    ?'network_interface_id' => ?NonEmptyString,
    ?'security_groups' => ?AwsEc2NetworkInterfaceSecurityGroupList,
    ?'source_dest_check' => bool,
  ) $s = shape()) {
    $this->attachment = $s['attachment'] ?? null;
    $this->network_interface_id = $s['network_interface_id'] ?? '';
    $this->security_groups = $s['security_groups'] ?? vec[];
    $this->source_dest_check = $s['source_dest_check'] ?? false;
  }
}

class AwsEc2NetworkInterfaceSecurityGroup {
  public ?NonEmptyString $group_id;
  public ?NonEmptyString $group_name;

  public function __construct(shape(
    ?'group_id' => ?NonEmptyString,
    ?'group_name' => ?NonEmptyString,
  ) $s = shape()) {
    $this->group_id = $s['group_id'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
  }
}

type AwsEc2NetworkInterfaceSecurityGroupList = vec<AwsEc2NetworkInterfaceSecurityGroup>;

class AwsEc2SecurityGroupDetails {
  public ?NonEmptyString $group_id;
  public ?NonEmptyString $group_name;
  public ?AwsEc2SecurityGroupIpPermissionList $ip_permissions;
  public ?AwsEc2SecurityGroupIpPermissionList $ip_permissions_egress;
  public ?NonEmptyString $owner_id;
  public ?NonEmptyString $vpc_id;

  public function __construct(shape(
    ?'group_id' => ?NonEmptyString,
    ?'group_name' => ?NonEmptyString,
    ?'ip_permissions' => ?AwsEc2SecurityGroupIpPermissionList,
    ?'ip_permissions_egress' => ?AwsEc2SecurityGroupIpPermissionList,
    ?'owner_id' => ?NonEmptyString,
    ?'vpc_id' => ?NonEmptyString,
  ) $s = shape()) {
    $this->group_id = $s['group_id'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
    $this->ip_permissions = $s['ip_permissions'] ?? vec[];
    $this->ip_permissions_egress = $s['ip_permissions_egress'] ?? vec[];
    $this->owner_id = $s['owner_id'] ?? '';
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class AwsEc2SecurityGroupIpPermission {
  public int $from_port;
  public ?NonEmptyString $ip_protocol;
  public ?AwsEc2SecurityGroupIpRangeList $ip_ranges;
  public ?AwsEc2SecurityGroupIpv6RangeList $ipv_6_ranges;
  public ?AwsEc2SecurityGroupPrefixListIdList $prefix_list_ids;
  public int $to_port;
  public ?AwsEc2SecurityGroupUserIdGroupPairList $user_id_group_pairs;

  public function __construct(shape(
    ?'from_port' => int,
    ?'ip_protocol' => ?NonEmptyString,
    ?'ip_ranges' => ?AwsEc2SecurityGroupIpRangeList,
    ?'ipv_6_ranges' => ?AwsEc2SecurityGroupIpv6RangeList,
    ?'prefix_list_ids' => ?AwsEc2SecurityGroupPrefixListIdList,
    ?'to_port' => int,
    ?'user_id_group_pairs' => ?AwsEc2SecurityGroupUserIdGroupPairList,
  ) $s = shape()) {
    $this->from_port = $s['from_port'] ?? 0;
    $this->ip_protocol = $s['ip_protocol'] ?? '';
    $this->ip_ranges = $s['ip_ranges'] ?? vec[];
    $this->ipv_6_ranges = $s['ipv_6_ranges'] ?? vec[];
    $this->prefix_list_ids = $s['prefix_list_ids'] ?? vec[];
    $this->to_port = $s['to_port'] ?? 0;
    $this->user_id_group_pairs = $s['user_id_group_pairs'] ?? vec[];
  }
}

type AwsEc2SecurityGroupIpPermissionList = vec<AwsEc2SecurityGroupIpPermission>;

class AwsEc2SecurityGroupIpRange {
  public ?NonEmptyString $cidr_ip;

  public function __construct(shape(
    ?'cidr_ip' => ?NonEmptyString,
  ) $s = shape()) {
    $this->cidr_ip = $s['cidr_ip'] ?? '';
  }
}

type AwsEc2SecurityGroupIpRangeList = vec<AwsEc2SecurityGroupIpRange>;

class AwsEc2SecurityGroupIpv6Range {
  public ?NonEmptyString $cidr_ipv_6;

  public function __construct(shape(
    ?'cidr_ipv_6' => ?NonEmptyString,
  ) $s = shape()) {
    $this->cidr_ipv_6 = $s['cidr_ipv_6'] ?? '';
  }
}

type AwsEc2SecurityGroupIpv6RangeList = vec<AwsEc2SecurityGroupIpv6Range>;

class AwsEc2SecurityGroupPrefixListId {
  public ?NonEmptyString $prefix_list_id;

  public function __construct(shape(
    ?'prefix_list_id' => ?NonEmptyString,
  ) $s = shape()) {
    $this->prefix_list_id = $s['prefix_list_id'] ?? '';
  }
}

type AwsEc2SecurityGroupPrefixListIdList = vec<AwsEc2SecurityGroupPrefixListId>;

class AwsEc2SecurityGroupUserIdGroupPair {
  public ?NonEmptyString $group_id;
  public ?NonEmptyString $group_name;
  public ?NonEmptyString $peering_status;
  public ?NonEmptyString $user_id;
  public ?NonEmptyString $vpc_id;
  public ?NonEmptyString $vpc_peering_connection_id;

  public function __construct(shape(
    ?'group_id' => ?NonEmptyString,
    ?'group_name' => ?NonEmptyString,
    ?'peering_status' => ?NonEmptyString,
    ?'user_id' => ?NonEmptyString,
    ?'vpc_id' => ?NonEmptyString,
    ?'vpc_peering_connection_id' => ?NonEmptyString,
  ) $s = shape()) {
    $this->group_id = $s['group_id'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
    $this->peering_status = $s['peering_status'] ?? '';
    $this->user_id = $s['user_id'] ?? '';
    $this->vpc_id = $s['vpc_id'] ?? '';
    $this->vpc_peering_connection_id = $s['vpc_peering_connection_id'] ?? '';
  }
}

type AwsEc2SecurityGroupUserIdGroupPairList = vec<AwsEc2SecurityGroupUserIdGroupPair>;

class AwsElasticsearchDomainDetails {
  public ?NonEmptyString $access_policies;
  public ?AwsElasticsearchDomainDomainEndpointOptions $domain_endpoint_options;
  public ?NonEmptyString $domain_id;
  public ?NonEmptyString $domain_name;
  public ?NonEmptyString $elasticsearch_version;
  public ?AwsElasticsearchDomainEncryptionAtRestOptions $encryption_at_rest_options;
  public ?NonEmptyString $endpoint;
  public ?FieldMap $endpoints;
  public ?AwsElasticsearchDomainNodeToNodeEncryptionOptions $node_to_node_encryption_options;
  public ?AwsElasticsearchDomainVPCOptions $vpc_options;

  public function __construct(shape(
    ?'access_policies' => ?NonEmptyString,
    ?'domain_endpoint_options' => ?AwsElasticsearchDomainDomainEndpointOptions,
    ?'domain_id' => ?NonEmptyString,
    ?'domain_name' => ?NonEmptyString,
    ?'elasticsearch_version' => ?NonEmptyString,
    ?'encryption_at_rest_options' => ?AwsElasticsearchDomainEncryptionAtRestOptions,
    ?'endpoint' => ?NonEmptyString,
    ?'endpoints' => ?FieldMap,
    ?'node_to_node_encryption_options' => ?AwsElasticsearchDomainNodeToNodeEncryptionOptions,
    ?'vpc_options' => ?AwsElasticsearchDomainVPCOptions,
  ) $s = shape()) {
    $this->access_policies = $s['access_policies'] ?? '';
    $this->domain_endpoint_options = $s['domain_endpoint_options'] ?? null;
    $this->domain_id = $s['domain_id'] ?? '';
    $this->domain_name = $s['domain_name'] ?? '';
    $this->elasticsearch_version = $s['elasticsearch_version'] ?? '';
    $this->encryption_at_rest_options = $s['encryption_at_rest_options'] ?? null;
    $this->endpoint = $s['endpoint'] ?? '';
    $this->endpoints = $s['endpoints'] ?? dict[];
    $this->node_to_node_encryption_options = $s['node_to_node_encryption_options'] ?? null;
    $this->vpc_options = $s['vpc_options'] ?? null;
  }
}

class AwsElasticsearchDomainDomainEndpointOptions {
  public bool $enforce_https;
  public ?NonEmptyString $tls_security_policy;

  public function __construct(shape(
    ?'enforce_https' => bool,
    ?'tls_security_policy' => ?NonEmptyString,
  ) $s = shape()) {
    $this->enforce_https = $s['enforce_https'] ?? false;
    $this->tls_security_policy = $s['tls_security_policy'] ?? '';
  }
}

class AwsElasticsearchDomainEncryptionAtRestOptions {
  public bool $enabled;
  public ?NonEmptyString $kms_key_id;

  public function __construct(shape(
    ?'enabled' => bool,
    ?'kms_key_id' => ?NonEmptyString,
  ) $s = shape()) {
    $this->enabled = $s['enabled'] ?? false;
    $this->kms_key_id = $s['kms_key_id'] ?? '';
  }
}

class AwsElasticsearchDomainNodeToNodeEncryptionOptions {
  public bool $enabled;

  public function __construct(shape(
    ?'enabled' => bool,
  ) $s = shape()) {
    $this->enabled = $s['enabled'] ?? false;
  }
}

class AwsElasticsearchDomainVPCOptions {
  public ?NonEmptyStringList $availability_zones;
  public ?NonEmptyStringList $security_group_ids;
  public ?NonEmptyStringList $subnet_ids;
  public ?NonEmptyString $vpc_id;

  public function __construct(shape(
    ?'availability_zones' => ?NonEmptyStringList,
    ?'security_group_ids' => ?NonEmptyStringList,
    ?'subnet_ids' => ?NonEmptyStringList,
    ?'vpc_id' => ?NonEmptyString,
  ) $s = shape()) {
    $this->availability_zones = $s['availability_zones'] ?? vec[];
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class AwsElbv2LoadBalancerDetails {
  public ?AvailabilityZones $availability_zones;
  public ?NonEmptyString $canonical_hosted_zone_id;
  public ?NonEmptyString $created_time;
  public ?NonEmptyString $dns_name;
  public ?NonEmptyString $ip_address_type;
  public ?NonEmptyString $scheme;
  public ?SecurityGroups $security_groups;
  public ?LoadBalancerState $state;
  public ?NonEmptyString $type;
  public ?NonEmptyString $vpc_id;

  public function __construct(shape(
    ?'availability_zones' => ?AvailabilityZones,
    ?'canonical_hosted_zone_id' => ?NonEmptyString,
    ?'created_time' => ?NonEmptyString,
    ?'dns_name' => ?NonEmptyString,
    ?'ip_address_type' => ?NonEmptyString,
    ?'scheme' => ?NonEmptyString,
    ?'security_groups' => ?SecurityGroups,
    ?'state' => ?LoadBalancerState,
    ?'type' => ?NonEmptyString,
    ?'vpc_id' => ?NonEmptyString,
  ) $s = shape()) {
    $this->availability_zones = $s['availability_zones'] ?? vec[];
    $this->canonical_hosted_zone_id = $s['canonical_hosted_zone_id'] ?? '';
    $this->created_time = $s['created_time'] ?? '';
    $this->dns_name = $s['dns_name'] ?? '';
    $this->ip_address_type = $s['ip_address_type'] ?? '';
    $this->scheme = $s['scheme'] ?? '';
    $this->security_groups = $s['security_groups'] ?? vec[];
    $this->state = $s['state'] ?? null;
    $this->type = $s['type'] ?? '';
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class AwsIamAccessKeyDetails {
  public ?NonEmptyString $created_at;
  public ?NonEmptyString $principal_id;
  public ?NonEmptyString $principal_name;
  public ?NonEmptyString $principal_type;
  public ?AwsIamAccessKeyStatus $status;
  public ?NonEmptyString $user_name;

  public function __construct(shape(
    ?'created_at' => ?NonEmptyString,
    ?'principal_id' => ?NonEmptyString,
    ?'principal_name' => ?NonEmptyString,
    ?'principal_type' => ?NonEmptyString,
    ?'status' => ?AwsIamAccessKeyStatus,
    ?'user_name' => ?NonEmptyString,
  ) $s = shape()) {
    $this->created_at = $s['created_at'] ?? '';
    $this->principal_id = $s['principal_id'] ?? '';
    $this->principal_name = $s['principal_name'] ?? '';
    $this->principal_type = $s['principal_type'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

type AwsIamAccessKeyStatus = string;

type AwsIamRoleAssumeRolePolicyDocument = string;

class AwsIamRoleDetails {
  public ?AwsIamRoleAssumeRolePolicyDocument $assume_role_policy_document;
  public ?NonEmptyString $create_date;
  public int $max_session_duration;
  public ?NonEmptyString $path;
  public ?NonEmptyString $role_id;
  public ?NonEmptyString $role_name;

  public function __construct(shape(
    ?'assume_role_policy_document' => ?AwsIamRoleAssumeRolePolicyDocument,
    ?'create_date' => ?NonEmptyString,
    ?'max_session_duration' => int,
    ?'path' => ?NonEmptyString,
    ?'role_id' => ?NonEmptyString,
    ?'role_name' => ?NonEmptyString,
  ) $s = shape()) {
    $this->assume_role_policy_document = $s['assume_role_policy_document'] ?? '';
    $this->create_date = $s['create_date'] ?? '';
    $this->max_session_duration = $s['max_session_duration'] ?? 0;
    $this->path = $s['path'] ?? '';
    $this->role_id = $s['role_id'] ?? '';
    $this->role_name = $s['role_name'] ?? '';
  }
}

class AwsKmsKeyDetails {
  public ?NonEmptyString $aws_account_id;
  public ?Double $creation_date;
  public ?NonEmptyString $key_id;
  public ?NonEmptyString $key_manager;
  public ?NonEmptyString $key_state;
  public ?NonEmptyString $origin;

  public function __construct(shape(
    ?'aws_account_id' => ?NonEmptyString,
    ?'creation_date' => ?Double,
    ?'key_id' => ?NonEmptyString,
    ?'key_manager' => ?NonEmptyString,
    ?'key_state' => ?NonEmptyString,
    ?'origin' => ?NonEmptyString,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->creation_date = $s['creation_date'] ?? 0.0;
    $this->key_id = $s['key_id'] ?? '';
    $this->key_manager = $s['key_manager'] ?? '';
    $this->key_state = $s['key_state'] ?? '';
    $this->origin = $s['origin'] ?? '';
  }
}

class AwsLambdaFunctionCode {
  public ?NonEmptyString $s_3_bucket;
  public ?NonEmptyString $s_3_key;
  public ?NonEmptyString $s_3_object_version;
  public ?NonEmptyString $zip_file;

  public function __construct(shape(
    ?'s_3_bucket' => ?NonEmptyString,
    ?'s_3_key' => ?NonEmptyString,
    ?'s_3_object_version' => ?NonEmptyString,
    ?'zip_file' => ?NonEmptyString,
  ) $s = shape()) {
    $this->s_3_bucket = $s['s_3_bucket'] ?? '';
    $this->s_3_key = $s['s_3_key'] ?? '';
    $this->s_3_object_version = $s['s_3_object_version'] ?? '';
    $this->zip_file = $s['zip_file'] ?? '';
  }
}

class AwsLambdaFunctionDeadLetterConfig {
  public ?NonEmptyString $target_arn;

  public function __construct(shape(
    ?'target_arn' => ?NonEmptyString,
  ) $s = shape()) {
    $this->target_arn = $s['target_arn'] ?? '';
  }
}

class AwsLambdaFunctionDetails {
  public ?AwsLambdaFunctionCode $code;
  public ?NonEmptyString $code_sha_256;
  public ?AwsLambdaFunctionDeadLetterConfig $dead_letter_config;
  public ?AwsLambdaFunctionEnvironment $environment;
  public ?NonEmptyString $function_name;
  public ?NonEmptyString $handler;
  public ?NonEmptyString $kms_key_arn;
  public ?NonEmptyString $last_modified;
  public ?AwsLambdaFunctionLayerList $layers;
  public ?NonEmptyString $master_arn;
  public int $memory_size;
  public ?NonEmptyString $revision_id;
  public ?NonEmptyString $role;
  public ?NonEmptyString $runtime;
  public int $timeout;
  public ?AwsLambdaFunctionTracingConfig $tracing_config;
  public ?NonEmptyString $version;
  public ?AwsLambdaFunctionVpcConfig $vpc_config;

  public function __construct(shape(
    ?'code' => ?AwsLambdaFunctionCode,
    ?'code_sha_256' => ?NonEmptyString,
    ?'dead_letter_config' => ?AwsLambdaFunctionDeadLetterConfig,
    ?'environment' => ?AwsLambdaFunctionEnvironment,
    ?'function_name' => ?NonEmptyString,
    ?'handler' => ?NonEmptyString,
    ?'kms_key_arn' => ?NonEmptyString,
    ?'last_modified' => ?NonEmptyString,
    ?'layers' => ?AwsLambdaFunctionLayerList,
    ?'master_arn' => ?NonEmptyString,
    ?'memory_size' => int,
    ?'revision_id' => ?NonEmptyString,
    ?'role' => ?NonEmptyString,
    ?'runtime' => ?NonEmptyString,
    ?'timeout' => int,
    ?'tracing_config' => ?AwsLambdaFunctionTracingConfig,
    ?'version' => ?NonEmptyString,
    ?'vpc_config' => ?AwsLambdaFunctionVpcConfig,
  ) $s = shape()) {
    $this->code = $s['code'] ?? null;
    $this->code_sha_256 = $s['code_sha_256'] ?? '';
    $this->dead_letter_config = $s['dead_letter_config'] ?? null;
    $this->environment = $s['environment'] ?? null;
    $this->function_name = $s['function_name'] ?? '';
    $this->handler = $s['handler'] ?? '';
    $this->kms_key_arn = $s['kms_key_arn'] ?? '';
    $this->last_modified = $s['last_modified'] ?? '';
    $this->layers = $s['layers'] ?? vec[];
    $this->master_arn = $s['master_arn'] ?? '';
    $this->memory_size = $s['memory_size'] ?? 0;
    $this->revision_id = $s['revision_id'] ?? '';
    $this->role = $s['role'] ?? '';
    $this->runtime = $s['runtime'] ?? '';
    $this->timeout = $s['timeout'] ?? 0;
    $this->tracing_config = $s['tracing_config'] ?? null;
    $this->version = $s['version'] ?? '';
    $this->vpc_config = $s['vpc_config'] ?? null;
  }
}

class AwsLambdaFunctionEnvironment {
  public ?AwsLambdaFunctionEnvironmentError $error;
  public ?FieldMap $variables;

  public function __construct(shape(
    ?'error' => ?AwsLambdaFunctionEnvironmentError,
    ?'variables' => ?FieldMap,
  ) $s = shape()) {
    $this->error = $s['error'] ?? null;
    $this->variables = $s['variables'] ?? dict[];
  }
}

class AwsLambdaFunctionEnvironmentError {
  public ?NonEmptyString $error_code;
  public ?NonEmptyString $message;

  public function __construct(shape(
    ?'error_code' => ?NonEmptyString,
    ?'message' => ?NonEmptyString,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class AwsLambdaFunctionLayer {
  public ?NonEmptyString $arn;
  public int $code_size;

  public function __construct(shape(
    ?'arn' => ?NonEmptyString,
    ?'code_size' => int,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->code_size = $s['code_size'] ?? 0;
  }
}

type AwsLambdaFunctionLayerList = vec<AwsLambdaFunctionLayer>;

class AwsLambdaFunctionTracingConfig {
  public ?NonEmptyString $mode;

  public function __construct(shape(
    ?'mode' => ?NonEmptyString,
  ) $s = shape()) {
    $this->mode = $s['mode'] ?? '';
  }
}

class AwsLambdaFunctionVpcConfig {
  public ?NonEmptyStringList $security_group_ids;
  public ?NonEmptyStringList $subnet_ids;
  public ?NonEmptyString $vpc_id;

  public function __construct(shape(
    ?'security_group_ids' => ?NonEmptyStringList,
    ?'subnet_ids' => ?NonEmptyStringList,
    ?'vpc_id' => ?NonEmptyString,
  ) $s = shape()) {
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class AwsLambdaLayerVersionDetails {
  public ?NonEmptyStringList $compatible_runtimes;
  public ?NonEmptyString $created_date;
  public ?AwsLambdaLayerVersionNumber $version;

  public function __construct(shape(
    ?'compatible_runtimes' => ?NonEmptyStringList,
    ?'created_date' => ?NonEmptyString,
    ?'version' => ?AwsLambdaLayerVersionNumber,
  ) $s = shape()) {
    $this->compatible_runtimes = $s['compatible_runtimes'] ?? vec[];
    $this->created_date = $s['created_date'] ?? '';
    $this->version = $s['version'] ?? 0;
  }
}

type AwsLambdaLayerVersionNumber = int;

class AwsRdsDbInstanceAssociatedRole {
  public ?NonEmptyString $feature_name;
  public ?NonEmptyString $role_arn;
  public ?NonEmptyString $status;

  public function __construct(shape(
    ?'feature_name' => ?NonEmptyString,
    ?'role_arn' => ?NonEmptyString,
    ?'status' => ?NonEmptyString,
  ) $s = shape()) {
    $this->feature_name = $s['feature_name'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type AwsRdsDbInstanceAssociatedRoles = vec<AwsRdsDbInstanceAssociatedRole>;

class AwsRdsDbInstanceDetails {
  public ?AwsRdsDbInstanceAssociatedRoles $associated_roles;
  public ?NonEmptyString $ca_certificate_identifier;
  public ?NonEmptyString $db_cluster_identifier;
  public ?NonEmptyString $db_instance_class;
  public ?NonEmptyString $db_instance_identifier;
  public ?NonEmptyString $db_name;
  public int $db_instance_port;
  public ?NonEmptyString $dbi_resource_id;
  public bool $deletion_protection;
  public ?AwsRdsDbInstanceEndpoint $endpoint;
  public ?NonEmptyString $engine;
  public ?NonEmptyString $engine_version;
  public bool $iam_database_authentication_enabled;
  public ?NonEmptyString $instance_create_time;
  public ?NonEmptyString $kms_key_id;
  public bool $publicly_accessible;
  public bool $storage_encrypted;
  public ?NonEmptyString $tde_credential_arn;
  public ?AwsRdsDbInstanceVpcSecurityGroups $vpc_security_groups;

  public function __construct(shape(
    ?'associated_roles' => ?AwsRdsDbInstanceAssociatedRoles,
    ?'ca_certificate_identifier' => ?NonEmptyString,
    ?'db_cluster_identifier' => ?NonEmptyString,
    ?'db_instance_class' => ?NonEmptyString,
    ?'db_instance_identifier' => ?NonEmptyString,
    ?'db_name' => ?NonEmptyString,
    ?'db_instance_port' => int,
    ?'dbi_resource_id' => ?NonEmptyString,
    ?'deletion_protection' => bool,
    ?'endpoint' => ?AwsRdsDbInstanceEndpoint,
    ?'engine' => ?NonEmptyString,
    ?'engine_version' => ?NonEmptyString,
    ?'iam_database_authentication_enabled' => bool,
    ?'instance_create_time' => ?NonEmptyString,
    ?'kms_key_id' => ?NonEmptyString,
    ?'publicly_accessible' => bool,
    ?'storage_encrypted' => bool,
    ?'tde_credential_arn' => ?NonEmptyString,
    ?'vpc_security_groups' => ?AwsRdsDbInstanceVpcSecurityGroups,
  ) $s = shape()) {
    $this->associated_roles = $s['associated_roles'] ?? vec[];
    $this->ca_certificate_identifier = $s['ca_certificate_identifier'] ?? '';
    $this->db_cluster_identifier = $s['db_cluster_identifier'] ?? '';
    $this->db_instance_class = $s['db_instance_class'] ?? '';
    $this->db_instance_identifier = $s['db_instance_identifier'] ?? '';
    $this->db_name = $s['db_name'] ?? '';
    $this->db_instance_port = $s['db_instance_port'] ?? 0;
    $this->dbi_resource_id = $s['dbi_resource_id'] ?? '';
    $this->deletion_protection = $s['deletion_protection'] ?? false;
    $this->endpoint = $s['endpoint'] ?? null;
    $this->engine = $s['engine'] ?? '';
    $this->engine_version = $s['engine_version'] ?? '';
    $this->iam_database_authentication_enabled = $s['iam_database_authentication_enabled'] ?? false;
    $this->instance_create_time = $s['instance_create_time'] ?? '';
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->publicly_accessible = $s['publicly_accessible'] ?? false;
    $this->storage_encrypted = $s['storage_encrypted'] ?? false;
    $this->tde_credential_arn = $s['tde_credential_arn'] ?? '';
    $this->vpc_security_groups = $s['vpc_security_groups'] ?? vec[];
  }
}

class AwsRdsDbInstanceEndpoint {
  public ?NonEmptyString $address;
  public ?NonEmptyString $hosted_zone_id;
  public int $port;

  public function __construct(shape(
    ?'address' => ?NonEmptyString,
    ?'hosted_zone_id' => ?NonEmptyString,
    ?'port' => int,
  ) $s = shape()) {
    $this->address = $s['address'] ?? '';
    $this->hosted_zone_id = $s['hosted_zone_id'] ?? '';
    $this->port = $s['port'] ?? 0;
  }
}

class AwsRdsDbInstanceVpcSecurityGroup {
  public ?NonEmptyString $status;
  public ?NonEmptyString $vpc_security_group_id;

  public function __construct(shape(
    ?'status' => ?NonEmptyString,
    ?'vpc_security_group_id' => ?NonEmptyString,
  ) $s = shape()) {
    $this->status = $s['status'] ?? '';
    $this->vpc_security_group_id = $s['vpc_security_group_id'] ?? '';
  }
}

type AwsRdsDbInstanceVpcSecurityGroups = vec<AwsRdsDbInstanceVpcSecurityGroup>;

class AwsS3BucketDetails {
  public ?NonEmptyString $created_at;
  public ?NonEmptyString $owner_id;
  public ?NonEmptyString $owner_name;
  public ?AwsS3BucketServerSideEncryptionConfiguration $server_side_encryption_configuration;

  public function __construct(shape(
    ?'created_at' => ?NonEmptyString,
    ?'owner_id' => ?NonEmptyString,
    ?'owner_name' => ?NonEmptyString,
    ?'server_side_encryption_configuration' => ?AwsS3BucketServerSideEncryptionConfiguration,
  ) $s = shape()) {
    $this->created_at = $s['created_at'] ?? '';
    $this->owner_id = $s['owner_id'] ?? '';
    $this->owner_name = $s['owner_name'] ?? '';
    $this->server_side_encryption_configuration = $s['server_side_encryption_configuration'] ?? null;
  }
}

class AwsS3BucketServerSideEncryptionByDefault {
  public ?NonEmptyString $kms_master_key_id;
  public ?NonEmptyString $sse_algorithm;

  public function __construct(shape(
    ?'kms_master_key_id' => ?NonEmptyString,
    ?'sse_algorithm' => ?NonEmptyString,
  ) $s = shape()) {
    $this->kms_master_key_id = $s['kms_master_key_id'] ?? '';
    $this->sse_algorithm = $s['sse_algorithm'] ?? '';
  }
}

class AwsS3BucketServerSideEncryptionConfiguration {
  public ?AwsS3BucketServerSideEncryptionRules $rules;

  public function __construct(shape(
    ?'rules' => ?AwsS3BucketServerSideEncryptionRules,
  ) $s = shape()) {
    $this->rules = $s['rules'] ?? vec[];
  }
}

class AwsS3BucketServerSideEncryptionRule {
  public ?AwsS3BucketServerSideEncryptionByDefault $apply_server_side_encryption_by_default;

  public function __construct(shape(
    ?'apply_server_side_encryption_by_default' => ?AwsS3BucketServerSideEncryptionByDefault,
  ) $s = shape()) {
    $this->apply_server_side_encryption_by_default = $s['apply_server_side_encryption_by_default'] ?? null;
  }
}

type AwsS3BucketServerSideEncryptionRules = vec<AwsS3BucketServerSideEncryptionRule>;

class AwsS3ObjectDetails {
  public ?NonEmptyString $content_type;
  public ?NonEmptyString $e_tag;
  public ?NonEmptyString $last_modified;
  public ?NonEmptyString $ssekms_key_id;
  public ?NonEmptyString $server_side_encryption;
  public ?NonEmptyString $version_id;

  public function __construct(shape(
    ?'content_type' => ?NonEmptyString,
    ?'e_tag' => ?NonEmptyString,
    ?'last_modified' => ?NonEmptyString,
    ?'ssekms_key_id' => ?NonEmptyString,
    ?'server_side_encryption' => ?NonEmptyString,
    ?'version_id' => ?NonEmptyString,
  ) $s = shape()) {
    $this->content_type = $s['content_type'] ?? '';
    $this->e_tag = $s['e_tag'] ?? '';
    $this->last_modified = $s['last_modified'] ?? '';
    $this->ssekms_key_id = $s['ssekms_key_id'] ?? '';
    $this->server_side_encryption = $s['server_side_encryption'] ?? '';
    $this->version_id = $s['version_id'] ?? '';
  }
}

class AwsSecurityFinding {
  public ?NonEmptyString $aws_account_id;
  public ?Compliance $compliance;
  public int $confidence;
  public ?NonEmptyString $created_at;
  public int $criticality;
  public ?NonEmptyString $description;
  public ?NonEmptyString $first_observed_at;
  public ?NonEmptyString $generator_id;
  public ?NonEmptyString $id;
  public ?NonEmptyString $last_observed_at;
  public ?MalwareList $malware;
  public ?Network $network;
  public ?Note $note;
  public ?ProcessDetails $process;
  public ?NonEmptyString $product_arn;
  public ?FieldMap $product_fields;
  public ?RecordState $record_state;
  public ?RelatedFindingList $related_findings;
  public ?Remediation $remediation;
  public ?ResourceList $resources;
  public ?NonEmptyString $schema_version;
  public ?Severity $severity;
  public ?NonEmptyString $source_url;
  public ?ThreatIntelIndicatorList $threat_intel_indicators;
  public ?NonEmptyString $title;
  public ?TypeList $types;
  public ?NonEmptyString $updated_at;
  public ?FieldMap $user_defined_fields;
  public ?VerificationState $verification_state;
  public ?Workflow $workflow;
  public ?WorkflowState $workflow_state;

  public function __construct(shape(
    ?'aws_account_id' => ?NonEmptyString,
    ?'compliance' => ?Compliance,
    ?'confidence' => int,
    ?'created_at' => ?NonEmptyString,
    ?'criticality' => int,
    ?'description' => ?NonEmptyString,
    ?'first_observed_at' => ?NonEmptyString,
    ?'generator_id' => ?NonEmptyString,
    ?'id' => ?NonEmptyString,
    ?'last_observed_at' => ?NonEmptyString,
    ?'malware' => ?MalwareList,
    ?'network' => ?Network,
    ?'note' => ?Note,
    ?'process' => ?ProcessDetails,
    ?'product_arn' => ?NonEmptyString,
    ?'product_fields' => ?FieldMap,
    ?'record_state' => ?RecordState,
    ?'related_findings' => ?RelatedFindingList,
    ?'remediation' => ?Remediation,
    ?'resources' => ?ResourceList,
    ?'schema_version' => ?NonEmptyString,
    ?'severity' => ?Severity,
    ?'source_url' => ?NonEmptyString,
    ?'threat_intel_indicators' => ?ThreatIntelIndicatorList,
    ?'title' => ?NonEmptyString,
    ?'types' => ?TypeList,
    ?'updated_at' => ?NonEmptyString,
    ?'user_defined_fields' => ?FieldMap,
    ?'verification_state' => ?VerificationState,
    ?'workflow' => ?Workflow,
    ?'workflow_state' => ?WorkflowState,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->compliance = $s['compliance'] ?? null;
    $this->confidence = $s['confidence'] ?? 0;
    $this->created_at = $s['created_at'] ?? '';
    $this->criticality = $s['criticality'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->first_observed_at = $s['first_observed_at'] ?? '';
    $this->generator_id = $s['generator_id'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->last_observed_at = $s['last_observed_at'] ?? '';
    $this->malware = $s['malware'] ?? vec[];
    $this->network = $s['network'] ?? null;
    $this->note = $s['note'] ?? null;
    $this->process = $s['process'] ?? null;
    $this->product_arn = $s['product_arn'] ?? '';
    $this->product_fields = $s['product_fields'] ?? dict[];
    $this->record_state = $s['record_state'] ?? '';
    $this->related_findings = $s['related_findings'] ?? vec[];
    $this->remediation = $s['remediation'] ?? null;
    $this->resources = $s['resources'] ?? vec[];
    $this->schema_version = $s['schema_version'] ?? '';
    $this->severity = $s['severity'] ?? null;
    $this->source_url = $s['source_url'] ?? '';
    $this->threat_intel_indicators = $s['threat_intel_indicators'] ?? vec[];
    $this->title = $s['title'] ?? '';
    $this->types = $s['types'] ?? vec[];
    $this->updated_at = $s['updated_at'] ?? '';
    $this->user_defined_fields = $s['user_defined_fields'] ?? dict[];
    $this->verification_state = $s['verification_state'] ?? '';
    $this->workflow = $s['workflow'] ?? null;
    $this->workflow_state = $s['workflow_state'] ?? '';
  }
}

class AwsSecurityFindingFilters {
  public ?StringFilterList $aws_account_id;
  public ?StringFilterList $company_name;
  public ?StringFilterList $compliance_status;
  public ?NumberFilterList $confidence;
  public ?DateFilterList $created_at;
  public ?NumberFilterList $criticality;
  public ?StringFilterList $description;
  public ?DateFilterList $first_observed_at;
  public ?StringFilterList $generator_id;
  public ?StringFilterList $id;
  public ?KeywordFilterList $keyword;
  public ?DateFilterList $last_observed_at;
  public ?StringFilterList $malware_name;
  public ?StringFilterList $malware_path;
  public ?StringFilterList $malware_state;
  public ?StringFilterList $malware_type;
  public ?StringFilterList $network_destination_domain;
  public ?IpFilterList $network_destination_ip_v_4;
  public ?IpFilterList $network_destination_ip_v_6;
  public ?NumberFilterList $network_destination_port;
  public ?StringFilterList $network_direction;
  public ?StringFilterList $network_protocol;
  public ?StringFilterList $network_source_domain;
  public ?IpFilterList $network_source_ip_v_4;
  public ?IpFilterList $network_source_ip_v_6;
  public ?StringFilterList $network_source_mac;
  public ?NumberFilterList $network_source_port;
  public ?StringFilterList $note_text;
  public ?DateFilterList $note_updated_at;
  public ?StringFilterList $note_updated_by;
  public ?DateFilterList $process_launched_at;
  public ?StringFilterList $process_name;
  public ?NumberFilterList $process_parent_pid;
  public ?StringFilterList $process_path;
  public ?NumberFilterList $process_pid;
  public ?DateFilterList $process_terminated_at;
  public ?StringFilterList $product_arn;
  public ?MapFilterList $product_fields;
  public ?StringFilterList $product_name;
  public ?StringFilterList $recommendation_text;
  public ?StringFilterList $record_state;
  public ?StringFilterList $related_findings_id;
  public ?StringFilterList $related_findings_product_arn;
  public ?StringFilterList $resource_aws_ec_2_instance_iam_instance_profile_arn;
  public ?StringFilterList $resource_aws_ec_2_instance_image_id;
  public ?IpFilterList $resource_aws_ec_2_instance_ip_v_4_addresses;
  public ?IpFilterList $resource_aws_ec_2_instance_ip_v_6_addresses;
  public ?StringFilterList $resource_aws_ec_2_instance_key_name;
  public ?DateFilterList $resource_aws_ec_2_instance_launched_at;
  public ?StringFilterList $resource_aws_ec_2_instance_subnet_id;
  public ?StringFilterList $resource_aws_ec_2_instance_type;
  public ?StringFilterList $resource_aws_ec_2_instance_vpc_id;
  public ?DateFilterList $resource_aws_iam_access_key_created_at;
  public ?StringFilterList $resource_aws_iam_access_key_status;
  public ?StringFilterList $resource_aws_iam_access_key_user_name;
  public ?StringFilterList $resource_aws_s_3_bucket_owner_id;
  public ?StringFilterList $resource_aws_s_3_bucket_owner_name;
  public ?StringFilterList $resource_container_image_id;
  public ?StringFilterList $resource_container_image_name;
  public ?DateFilterList $resource_container_launched_at;
  public ?StringFilterList $resource_container_name;
  public ?MapFilterList $resource_details_other;
  public ?StringFilterList $resource_id;
  public ?StringFilterList $resource_partition;
  public ?StringFilterList $resource_region;
  public ?MapFilterList $resource_tags;
  public ?StringFilterList $resource_type;
  public ?StringFilterList $severity_label;
  public ?NumberFilterList $severity_normalized;
  public ?NumberFilterList $severity_product;
  public ?StringFilterList $source_url;
  public ?StringFilterList $threat_intel_indicator_category;
  public ?DateFilterList $threat_intel_indicator_last_observed_at;
  public ?StringFilterList $threat_intel_indicator_source;
  public ?StringFilterList $threat_intel_indicator_source_url;
  public ?StringFilterList $threat_intel_indicator_type;
  public ?StringFilterList $threat_intel_indicator_value;
  public ?StringFilterList $title;
  public ?StringFilterList $type;
  public ?DateFilterList $updated_at;
  public ?MapFilterList $user_defined_fields;
  public ?StringFilterList $verification_state;
  public ?StringFilterList $workflow_state;
  public ?StringFilterList $workflow_status;

  public function __construct(shape(
    ?'aws_account_id' => ?StringFilterList,
    ?'company_name' => ?StringFilterList,
    ?'compliance_status' => ?StringFilterList,
    ?'confidence' => ?NumberFilterList,
    ?'created_at' => ?DateFilterList,
    ?'criticality' => ?NumberFilterList,
    ?'description' => ?StringFilterList,
    ?'first_observed_at' => ?DateFilterList,
    ?'generator_id' => ?StringFilterList,
    ?'id' => ?StringFilterList,
    ?'keyword' => ?KeywordFilterList,
    ?'last_observed_at' => ?DateFilterList,
    ?'malware_name' => ?StringFilterList,
    ?'malware_path' => ?StringFilterList,
    ?'malware_state' => ?StringFilterList,
    ?'malware_type' => ?StringFilterList,
    ?'network_destination_domain' => ?StringFilterList,
    ?'network_destination_ip_v_4' => ?IpFilterList,
    ?'network_destination_ip_v_6' => ?IpFilterList,
    ?'network_destination_port' => ?NumberFilterList,
    ?'network_direction' => ?StringFilterList,
    ?'network_protocol' => ?StringFilterList,
    ?'network_source_domain' => ?StringFilterList,
    ?'network_source_ip_v_4' => ?IpFilterList,
    ?'network_source_ip_v_6' => ?IpFilterList,
    ?'network_source_mac' => ?StringFilterList,
    ?'network_source_port' => ?NumberFilterList,
    ?'note_text' => ?StringFilterList,
    ?'note_updated_at' => ?DateFilterList,
    ?'note_updated_by' => ?StringFilterList,
    ?'process_launched_at' => ?DateFilterList,
    ?'process_name' => ?StringFilterList,
    ?'process_parent_pid' => ?NumberFilterList,
    ?'process_path' => ?StringFilterList,
    ?'process_pid' => ?NumberFilterList,
    ?'process_terminated_at' => ?DateFilterList,
    ?'product_arn' => ?StringFilterList,
    ?'product_fields' => ?MapFilterList,
    ?'product_name' => ?StringFilterList,
    ?'recommendation_text' => ?StringFilterList,
    ?'record_state' => ?StringFilterList,
    ?'related_findings_id' => ?StringFilterList,
    ?'related_findings_product_arn' => ?StringFilterList,
    ?'resource_aws_ec_2_instance_iam_instance_profile_arn' => ?StringFilterList,
    ?'resource_aws_ec_2_instance_image_id' => ?StringFilterList,
    ?'resource_aws_ec_2_instance_ip_v_4_addresses' => ?IpFilterList,
    ?'resource_aws_ec_2_instance_ip_v_6_addresses' => ?IpFilterList,
    ?'resource_aws_ec_2_instance_key_name' => ?StringFilterList,
    ?'resource_aws_ec_2_instance_launched_at' => ?DateFilterList,
    ?'resource_aws_ec_2_instance_subnet_id' => ?StringFilterList,
    ?'resource_aws_ec_2_instance_type' => ?StringFilterList,
    ?'resource_aws_ec_2_instance_vpc_id' => ?StringFilterList,
    ?'resource_aws_iam_access_key_created_at' => ?DateFilterList,
    ?'resource_aws_iam_access_key_status' => ?StringFilterList,
    ?'resource_aws_iam_access_key_user_name' => ?StringFilterList,
    ?'resource_aws_s_3_bucket_owner_id' => ?StringFilterList,
    ?'resource_aws_s_3_bucket_owner_name' => ?StringFilterList,
    ?'resource_container_image_id' => ?StringFilterList,
    ?'resource_container_image_name' => ?StringFilterList,
    ?'resource_container_launched_at' => ?DateFilterList,
    ?'resource_container_name' => ?StringFilterList,
    ?'resource_details_other' => ?MapFilterList,
    ?'resource_id' => ?StringFilterList,
    ?'resource_partition' => ?StringFilterList,
    ?'resource_region' => ?StringFilterList,
    ?'resource_tags' => ?MapFilterList,
    ?'resource_type' => ?StringFilterList,
    ?'severity_label' => ?StringFilterList,
    ?'severity_normalized' => ?NumberFilterList,
    ?'severity_product' => ?NumberFilterList,
    ?'source_url' => ?StringFilterList,
    ?'threat_intel_indicator_category' => ?StringFilterList,
    ?'threat_intel_indicator_last_observed_at' => ?DateFilterList,
    ?'threat_intel_indicator_source' => ?StringFilterList,
    ?'threat_intel_indicator_source_url' => ?StringFilterList,
    ?'threat_intel_indicator_type' => ?StringFilterList,
    ?'threat_intel_indicator_value' => ?StringFilterList,
    ?'title' => ?StringFilterList,
    ?'type' => ?StringFilterList,
    ?'updated_at' => ?DateFilterList,
    ?'user_defined_fields' => ?MapFilterList,
    ?'verification_state' => ?StringFilterList,
    ?'workflow_state' => ?StringFilterList,
    ?'workflow_status' => ?StringFilterList,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? vec[];
    $this->company_name = $s['company_name'] ?? vec[];
    $this->compliance_status = $s['compliance_status'] ?? vec[];
    $this->confidence = $s['confidence'] ?? vec[];
    $this->created_at = $s['created_at'] ?? vec[];
    $this->criticality = $s['criticality'] ?? vec[];
    $this->description = $s['description'] ?? vec[];
    $this->first_observed_at = $s['first_observed_at'] ?? vec[];
    $this->generator_id = $s['generator_id'] ?? vec[];
    $this->id = $s['id'] ?? vec[];
    $this->keyword = $s['keyword'] ?? vec[];
    $this->last_observed_at = $s['last_observed_at'] ?? vec[];
    $this->malware_name = $s['malware_name'] ?? vec[];
    $this->malware_path = $s['malware_path'] ?? vec[];
    $this->malware_state = $s['malware_state'] ?? vec[];
    $this->malware_type = $s['malware_type'] ?? vec[];
    $this->network_destination_domain = $s['network_destination_domain'] ?? vec[];
    $this->network_destination_ip_v_4 = $s['network_destination_ip_v_4'] ?? vec[];
    $this->network_destination_ip_v_6 = $s['network_destination_ip_v_6'] ?? vec[];
    $this->network_destination_port = $s['network_destination_port'] ?? vec[];
    $this->network_direction = $s['network_direction'] ?? vec[];
    $this->network_protocol = $s['network_protocol'] ?? vec[];
    $this->network_source_domain = $s['network_source_domain'] ?? vec[];
    $this->network_source_ip_v_4 = $s['network_source_ip_v_4'] ?? vec[];
    $this->network_source_ip_v_6 = $s['network_source_ip_v_6'] ?? vec[];
    $this->network_source_mac = $s['network_source_mac'] ?? vec[];
    $this->network_source_port = $s['network_source_port'] ?? vec[];
    $this->note_text = $s['note_text'] ?? vec[];
    $this->note_updated_at = $s['note_updated_at'] ?? vec[];
    $this->note_updated_by = $s['note_updated_by'] ?? vec[];
    $this->process_launched_at = $s['process_launched_at'] ?? vec[];
    $this->process_name = $s['process_name'] ?? vec[];
    $this->process_parent_pid = $s['process_parent_pid'] ?? vec[];
    $this->process_path = $s['process_path'] ?? vec[];
    $this->process_pid = $s['process_pid'] ?? vec[];
    $this->process_terminated_at = $s['process_terminated_at'] ?? vec[];
    $this->product_arn = $s['product_arn'] ?? vec[];
    $this->product_fields = $s['product_fields'] ?? vec[];
    $this->product_name = $s['product_name'] ?? vec[];
    $this->recommendation_text = $s['recommendation_text'] ?? vec[];
    $this->record_state = $s['record_state'] ?? vec[];
    $this->related_findings_id = $s['related_findings_id'] ?? vec[];
    $this->related_findings_product_arn = $s['related_findings_product_arn'] ?? vec[];
    $this->resource_aws_ec_2_instance_iam_instance_profile_arn = $s['resource_aws_ec_2_instance_iam_instance_profile_arn'] ?? vec[];
    $this->resource_aws_ec_2_instance_image_id = $s['resource_aws_ec_2_instance_image_id'] ?? vec[];
    $this->resource_aws_ec_2_instance_ip_v_4_addresses = $s['resource_aws_ec_2_instance_ip_v_4_addresses'] ?? vec[];
    $this->resource_aws_ec_2_instance_ip_v_6_addresses = $s['resource_aws_ec_2_instance_ip_v_6_addresses'] ?? vec[];
    $this->resource_aws_ec_2_instance_key_name = $s['resource_aws_ec_2_instance_key_name'] ?? vec[];
    $this->resource_aws_ec_2_instance_launched_at = $s['resource_aws_ec_2_instance_launched_at'] ?? vec[];
    $this->resource_aws_ec_2_instance_subnet_id = $s['resource_aws_ec_2_instance_subnet_id'] ?? vec[];
    $this->resource_aws_ec_2_instance_type = $s['resource_aws_ec_2_instance_type'] ?? vec[];
    $this->resource_aws_ec_2_instance_vpc_id = $s['resource_aws_ec_2_instance_vpc_id'] ?? vec[];
    $this->resource_aws_iam_access_key_created_at = $s['resource_aws_iam_access_key_created_at'] ?? vec[];
    $this->resource_aws_iam_access_key_status = $s['resource_aws_iam_access_key_status'] ?? vec[];
    $this->resource_aws_iam_access_key_user_name = $s['resource_aws_iam_access_key_user_name'] ?? vec[];
    $this->resource_aws_s_3_bucket_owner_id = $s['resource_aws_s_3_bucket_owner_id'] ?? vec[];
    $this->resource_aws_s_3_bucket_owner_name = $s['resource_aws_s_3_bucket_owner_name'] ?? vec[];
    $this->resource_container_image_id = $s['resource_container_image_id'] ?? vec[];
    $this->resource_container_image_name = $s['resource_container_image_name'] ?? vec[];
    $this->resource_container_launched_at = $s['resource_container_launched_at'] ?? vec[];
    $this->resource_container_name = $s['resource_container_name'] ?? vec[];
    $this->resource_details_other = $s['resource_details_other'] ?? vec[];
    $this->resource_id = $s['resource_id'] ?? vec[];
    $this->resource_partition = $s['resource_partition'] ?? vec[];
    $this->resource_region = $s['resource_region'] ?? vec[];
    $this->resource_tags = $s['resource_tags'] ?? vec[];
    $this->resource_type = $s['resource_type'] ?? vec[];
    $this->severity_label = $s['severity_label'] ?? vec[];
    $this->severity_normalized = $s['severity_normalized'] ?? vec[];
    $this->severity_product = $s['severity_product'] ?? vec[];
    $this->source_url = $s['source_url'] ?? vec[];
    $this->threat_intel_indicator_category = $s['threat_intel_indicator_category'] ?? vec[];
    $this->threat_intel_indicator_last_observed_at = $s['threat_intel_indicator_last_observed_at'] ?? vec[];
    $this->threat_intel_indicator_source = $s['threat_intel_indicator_source'] ?? vec[];
    $this->threat_intel_indicator_source_url = $s['threat_intel_indicator_source_url'] ?? vec[];
    $this->threat_intel_indicator_type = $s['threat_intel_indicator_type'] ?? vec[];
    $this->threat_intel_indicator_value = $s['threat_intel_indicator_value'] ?? vec[];
    $this->title = $s['title'] ?? vec[];
    $this->type = $s['type'] ?? vec[];
    $this->updated_at = $s['updated_at'] ?? vec[];
    $this->user_defined_fields = $s['user_defined_fields'] ?? vec[];
    $this->verification_state = $s['verification_state'] ?? vec[];
    $this->workflow_state = $s['workflow_state'] ?? vec[];
    $this->workflow_status = $s['workflow_status'] ?? vec[];
  }
}

class AwsSecurityFindingIdentifier {
  public ?NonEmptyString $id;
  public ?NonEmptyString $product_arn;

  public function __construct(shape(
    ?'id' => ?NonEmptyString,
    ?'product_arn' => ?NonEmptyString,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->product_arn = $s['product_arn'] ?? '';
  }
}

type AwsSecurityFindingIdentifierList = vec<AwsSecurityFindingIdentifier>;

type AwsSecurityFindingList = vec<AwsSecurityFinding>;

class AwsSnsTopicDetails {
  public ?NonEmptyString $kms_master_key_id;
  public ?NonEmptyString $owner;
  public ?AwsSnsTopicSubscriptionList $subscription;
  public ?NonEmptyString $topic_name;

  public function __construct(shape(
    ?'kms_master_key_id' => ?NonEmptyString,
    ?'owner' => ?NonEmptyString,
    ?'subscription' => ?AwsSnsTopicSubscriptionList,
    ?'topic_name' => ?NonEmptyString,
  ) $s = shape()) {
    $this->kms_master_key_id = $s['kms_master_key_id'] ?? '';
    $this->owner = $s['owner'] ?? '';
    $this->subscription = $s['subscription'] ?? vec[];
    $this->topic_name = $s['topic_name'] ?? '';
  }
}

class AwsSnsTopicSubscription {
  public ?NonEmptyString $endpoint;
  public ?NonEmptyString $protocol;

  public function __construct(shape(
    ?'endpoint' => ?NonEmptyString,
    ?'protocol' => ?NonEmptyString,
  ) $s = shape()) {
    $this->endpoint = $s['endpoint'] ?? '';
    $this->protocol = $s['protocol'] ?? '';
  }
}

type AwsSnsTopicSubscriptionList = vec<AwsSnsTopicSubscription>;

class AwsSqsQueueDetails {
  public ?NonEmptyString $dead_letter_target_arn;
  public int $kms_data_key_reuse_period_seconds;
  public ?NonEmptyString $kms_master_key_id;
  public ?NonEmptyString $queue_name;

  public function __construct(shape(
    ?'dead_letter_target_arn' => ?NonEmptyString,
    ?'kms_data_key_reuse_period_seconds' => int,
    ?'kms_master_key_id' => ?NonEmptyString,
    ?'queue_name' => ?NonEmptyString,
  ) $s = shape()) {
    $this->dead_letter_target_arn = $s['dead_letter_target_arn'] ?? '';
    $this->kms_data_key_reuse_period_seconds = $s['kms_data_key_reuse_period_seconds'] ?? 0;
    $this->kms_master_key_id = $s['kms_master_key_id'] ?? '';
    $this->queue_name = $s['queue_name'] ?? '';
  }
}

class AwsWafWebAclDetails {
  public ?NonEmptyString $default_action;
  public ?NonEmptyString $name;
  public ?AwsWafWebAclRuleList $rules;
  public ?NonEmptyString $web_acl_id;

  public function __construct(shape(
    ?'default_action' => ?NonEmptyString,
    ?'name' => ?NonEmptyString,
    ?'rules' => ?AwsWafWebAclRuleList,
    ?'web_acl_id' => ?NonEmptyString,
  ) $s = shape()) {
    $this->default_action = $s['default_action'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->rules = $s['rules'] ?? vec[];
    $this->web_acl_id = $s['web_acl_id'] ?? '';
  }
}

class AwsWafWebAclRule {
  public ?WafAction $action;
  public ?WafExcludedRuleList $excluded_rules;
  public ?WafOverrideAction $override_action;
  public int $priority;
  public ?NonEmptyString $rule_id;
  public ?NonEmptyString $type;

  public function __construct(shape(
    ?'action' => ?WafAction,
    ?'excluded_rules' => ?WafExcludedRuleList,
    ?'override_action' => ?WafOverrideAction,
    ?'priority' => int,
    ?'rule_id' => ?NonEmptyString,
    ?'type' => ?NonEmptyString,
  ) $s = shape()) {
    $this->action = $s['action'] ?? null;
    $this->excluded_rules = $s['excluded_rules'] ?? vec[];
    $this->override_action = $s['override_action'] ?? null;
    $this->priority = $s['priority'] ?? 0;
    $this->rule_id = $s['rule_id'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type AwsWafWebAclRuleList = vec<AwsWafWebAclRule>;

class BatchDisableStandardsRequest {
  public ?StandardsSubscriptionArns $standards_subscription_arns;

  public function __construct(shape(
    ?'standards_subscription_arns' => ?StandardsSubscriptionArns,
  ) $s = shape()) {
    $this->standards_subscription_arns = $s['standards_subscription_arns'] ?? vec[];
  }
}

class BatchDisableStandardsResponse {
  public ?StandardsSubscriptions $standards_subscriptions;

  public function __construct(shape(
    ?'standards_subscriptions' => ?StandardsSubscriptions,
  ) $s = shape()) {
    $this->standards_subscriptions = $s['standards_subscriptions'] ?? vec[];
  }
}

class BatchEnableStandardsRequest {
  public ?StandardsSubscriptionRequests $standards_subscription_requests;

  public function __construct(shape(
    ?'standards_subscription_requests' => ?StandardsSubscriptionRequests,
  ) $s = shape()) {
    $this->standards_subscription_requests = $s['standards_subscription_requests'] ?? vec[];
  }
}

class BatchEnableStandardsResponse {
  public ?StandardsSubscriptions $standards_subscriptions;

  public function __construct(shape(
    ?'standards_subscriptions' => ?StandardsSubscriptions,
  ) $s = shape()) {
    $this->standards_subscriptions = $s['standards_subscriptions'] ?? vec[];
  }
}

class BatchImportFindingsRequest {
  public ?AwsSecurityFindingList $findings;

  public function __construct(shape(
    ?'findings' => ?AwsSecurityFindingList,
  ) $s = shape()) {
    $this->findings = $s['findings'] ?? vec[];
  }
}

class BatchImportFindingsResponse {
  public int $failed_count;
  public ?ImportFindingsErrorList $failed_findings;
  public int $success_count;

  public function __construct(shape(
    ?'failed_count' => int,
    ?'failed_findings' => ?ImportFindingsErrorList,
    ?'success_count' => int,
  ) $s = shape()) {
    $this->failed_count = $s['failed_count'] ?? 0;
    $this->failed_findings = $s['failed_findings'] ?? vec[];
    $this->success_count = $s['success_count'] ?? 0;
  }
}

class BatchUpdateFindingsRequest {
  public ?RatioScale $confidence;
  public ?RatioScale $criticality;
  public ?AwsSecurityFindingIdentifierList $finding_identifiers;
  public ?NoteUpdate $note;
  public ?RelatedFindingList $related_findings;
  public ?SeverityUpdate $severity;
  public ?TypeList $types;
  public ?FieldMap $user_defined_fields;
  public ?VerificationState $verification_state;
  public ?WorkflowUpdate $workflow;

  public function __construct(shape(
    ?'confidence' => ?RatioScale,
    ?'criticality' => ?RatioScale,
    ?'finding_identifiers' => ?AwsSecurityFindingIdentifierList,
    ?'note' => ?NoteUpdate,
    ?'related_findings' => ?RelatedFindingList,
    ?'severity' => ?SeverityUpdate,
    ?'types' => ?TypeList,
    ?'user_defined_fields' => ?FieldMap,
    ?'verification_state' => ?VerificationState,
    ?'workflow' => ?WorkflowUpdate,
  ) $s = shape()) {
    $this->confidence = $s['confidence'] ?? 0;
    $this->criticality = $s['criticality'] ?? 0;
    $this->finding_identifiers = $s['finding_identifiers'] ?? vec[];
    $this->note = $s['note'] ?? null;
    $this->related_findings = $s['related_findings'] ?? vec[];
    $this->severity = $s['severity'] ?? null;
    $this->types = $s['types'] ?? vec[];
    $this->user_defined_fields = $s['user_defined_fields'] ?? dict[];
    $this->verification_state = $s['verification_state'] ?? '';
    $this->workflow = $s['workflow'] ?? null;
  }
}

class BatchUpdateFindingsResponse {
  public ?AwsSecurityFindingIdentifierList $processed_findings;
  public ?BatchUpdateFindingsUnprocessedFindingsList $unprocessed_findings;

  public function __construct(shape(
    ?'processed_findings' => ?AwsSecurityFindingIdentifierList,
    ?'unprocessed_findings' => ?BatchUpdateFindingsUnprocessedFindingsList,
  ) $s = shape()) {
    $this->processed_findings = $s['processed_findings'] ?? vec[];
    $this->unprocessed_findings = $s['unprocessed_findings'] ?? vec[];
  }
}

class BatchUpdateFindingsUnprocessedFinding {
  public ?NonEmptyString $error_code;
  public ?NonEmptyString $error_message;
  public ?AwsSecurityFindingIdentifier $finding_identifier;

  public function __construct(shape(
    ?'error_code' => ?NonEmptyString,
    ?'error_message' => ?NonEmptyString,
    ?'finding_identifier' => ?AwsSecurityFindingIdentifier,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->error_message = $s['error_message'] ?? '';
    $this->finding_identifier = $s['finding_identifier'] ?? null;
  }
}

type BatchUpdateFindingsUnprocessedFindingsList = vec<BatchUpdateFindingsUnprocessedFinding>;

type Boolean = bool;

type CategoryList = vec<NonEmptyString>;

class Compliance {
  public ?RelatedRequirementsList $related_requirements;
  public ?ComplianceStatus $status;

  public function __construct(shape(
    ?'related_requirements' => ?RelatedRequirementsList,
    ?'status' => ?ComplianceStatus,
  ) $s = shape()) {
    $this->related_requirements = $s['related_requirements'] ?? vec[];
    $this->status = $s['status'] ?? '';
  }
}

type ComplianceStatus = string;

class ContainerDetails {
  public ?NonEmptyString $image_id;
  public ?NonEmptyString $image_name;
  public ?NonEmptyString $launched_at;
  public ?NonEmptyString $name;

  public function __construct(shape(
    ?'image_id' => ?NonEmptyString,
    ?'image_name' => ?NonEmptyString,
    ?'launched_at' => ?NonEmptyString,
    ?'name' => ?NonEmptyString,
  ) $s = shape()) {
    $this->image_id = $s['image_id'] ?? '';
    $this->image_name = $s['image_name'] ?? '';
    $this->launched_at = $s['launched_at'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

type ControlStatus = string;

class CreateActionTargetRequest {
  public ?NonEmptyString $description;
  public ?NonEmptyString $id;
  public ?NonEmptyString $name;

  public function __construct(shape(
    ?'description' => ?NonEmptyString,
    ?'id' => ?NonEmptyString,
    ?'name' => ?NonEmptyString,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class CreateActionTargetResponse {
  public ?NonEmptyString $action_target_arn;

  public function __construct(shape(
    ?'action_target_arn' => ?NonEmptyString,
  ) $s = shape()) {
    $this->action_target_arn = $s['action_target_arn'] ?? '';
  }
}

class CreateInsightRequest {
  public ?AwsSecurityFindingFilters $filters;
  public ?NonEmptyString $group_by_attribute;
  public ?NonEmptyString $name;

  public function __construct(shape(
    ?'filters' => ?AwsSecurityFindingFilters,
    ?'group_by_attribute' => ?NonEmptyString,
    ?'name' => ?NonEmptyString,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? null;
    $this->group_by_attribute = $s['group_by_attribute'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class CreateInsightResponse {
  public ?NonEmptyString $insight_arn;

  public function __construct(shape(
    ?'insight_arn' => ?NonEmptyString,
  ) $s = shape()) {
    $this->insight_arn = $s['insight_arn'] ?? '';
  }
}

class CreateMembersRequest {
  public ?AccountDetailsList $account_details;

  public function __construct(shape(
    ?'account_details' => ?AccountDetailsList,
  ) $s = shape()) {
    $this->account_details = $s['account_details'] ?? vec[];
  }
}

class CreateMembersResponse {
  public ?ResultList $unprocessed_accounts;

  public function __construct(shape(
    ?'unprocessed_accounts' => ?ResultList,
  ) $s = shape()) {
    $this->unprocessed_accounts = $s['unprocessed_accounts'] ?? vec[];
  }
}

class DateFilter {
  public ?DateRange $date_range;
  public ?NonEmptyString $end;
  public ?NonEmptyString $start;

  public function __construct(shape(
    ?'date_range' => ?DateRange,
    ?'end' => ?NonEmptyString,
    ?'start' => ?NonEmptyString,
  ) $s = shape()) {
    $this->date_range = $s['date_range'] ?? null;
    $this->end = $s['end'] ?? '';
    $this->start = $s['start'] ?? '';
  }
}

type DateFilterList = vec<DateFilter>;

class DateRange {
  public ?DateRangeUnit $unit;
  public int $value;

  public function __construct(shape(
    ?'unit' => ?DateRangeUnit,
    ?'value' => int,
  ) $s = shape()) {
    $this->unit = $s['unit'] ?? '';
    $this->value = $s['value'] ?? 0;
  }
}

type DateRangeUnit = string;

class DeclineInvitationsRequest {
  public ?AccountIdList $account_ids;

  public function __construct(shape(
    ?'account_ids' => ?AccountIdList,
  ) $s = shape()) {
    $this->account_ids = $s['account_ids'] ?? vec[];
  }
}

class DeclineInvitationsResponse {
  public ?ResultList $unprocessed_accounts;

  public function __construct(shape(
    ?'unprocessed_accounts' => ?ResultList,
  ) $s = shape()) {
    $this->unprocessed_accounts = $s['unprocessed_accounts'] ?? vec[];
  }
}

class DeleteActionTargetRequest {
  public ?NonEmptyString $action_target_arn;

  public function __construct(shape(
    ?'action_target_arn' => ?NonEmptyString,
  ) $s = shape()) {
    $this->action_target_arn = $s['action_target_arn'] ?? '';
  }
}

class DeleteActionTargetResponse {
  public ?NonEmptyString $action_target_arn;

  public function __construct(shape(
    ?'action_target_arn' => ?NonEmptyString,
  ) $s = shape()) {
    $this->action_target_arn = $s['action_target_arn'] ?? '';
  }
}

class DeleteInsightRequest {
  public ?NonEmptyString $insight_arn;

  public function __construct(shape(
    ?'insight_arn' => ?NonEmptyString,
  ) $s = shape()) {
    $this->insight_arn = $s['insight_arn'] ?? '';
  }
}

class DeleteInsightResponse {
  public ?NonEmptyString $insight_arn;

  public function __construct(shape(
    ?'insight_arn' => ?NonEmptyString,
  ) $s = shape()) {
    $this->insight_arn = $s['insight_arn'] ?? '';
  }
}

class DeleteInvitationsRequest {
  public ?AccountIdList $account_ids;

  public function __construct(shape(
    ?'account_ids' => ?AccountIdList,
  ) $s = shape()) {
    $this->account_ids = $s['account_ids'] ?? vec[];
  }
}

class DeleteInvitationsResponse {
  public ?ResultList $unprocessed_accounts;

  public function __construct(shape(
    ?'unprocessed_accounts' => ?ResultList,
  ) $s = shape()) {
    $this->unprocessed_accounts = $s['unprocessed_accounts'] ?? vec[];
  }
}

class DeleteMembersRequest {
  public ?AccountIdList $account_ids;

  public function __construct(shape(
    ?'account_ids' => ?AccountIdList,
  ) $s = shape()) {
    $this->account_ids = $s['account_ids'] ?? vec[];
  }
}

class DeleteMembersResponse {
  public ?ResultList $unprocessed_accounts;

  public function __construct(shape(
    ?'unprocessed_accounts' => ?ResultList,
  ) $s = shape()) {
    $this->unprocessed_accounts = $s['unprocessed_accounts'] ?? vec[];
  }
}

class DescribeActionTargetsRequest {
  public ?ArnList $action_target_arns;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'action_target_arns' => ?ArnList,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->action_target_arns = $s['action_target_arns'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeActionTargetsResponse {
  public ?ActionTargetList $action_targets;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'action_targets' => ?ActionTargetList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->action_targets = $s['action_targets'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeHubRequest {
  public ?NonEmptyString $hub_arn;

  public function __construct(shape(
    ?'hub_arn' => ?NonEmptyString,
  ) $s = shape()) {
    $this->hub_arn = $s['hub_arn'] ?? '';
  }
}

class DescribeHubResponse {
  public ?NonEmptyString $hub_arn;
  public ?NonEmptyString $subscribed_at;

  public function __construct(shape(
    ?'hub_arn' => ?NonEmptyString,
    ?'subscribed_at' => ?NonEmptyString,
  ) $s = shape()) {
    $this->hub_arn = $s['hub_arn'] ?? '';
    $this->subscribed_at = $s['subscribed_at'] ?? '';
  }
}

class DescribeProductsRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeProductsResponse {
  public ?NextToken $next_token;
  public ?ProductsList $products;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'products' => ?ProductsList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->products = $s['products'] ?? vec[];
  }
}

class DescribeStandardsControlsRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?NonEmptyString $standards_subscription_arn;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'standards_subscription_arn' => ?NonEmptyString,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->standards_subscription_arn = $s['standards_subscription_arn'] ?? '';
  }
}

class DescribeStandardsControlsResponse {
  public ?StandardsControls $controls;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'controls' => ?StandardsControls,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->controls = $s['controls'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeStandardsRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeStandardsResponse {
  public ?NextToken $next_token;
  public ?Standards $standards;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'standards' => ?Standards,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->standards = $s['standards'] ?? vec[];
  }
}

class DisableImportFindingsForProductRequest {
  public ?NonEmptyString $product_subscription_arn;

  public function __construct(shape(
    ?'product_subscription_arn' => ?NonEmptyString,
  ) $s = shape()) {
    $this->product_subscription_arn = $s['product_subscription_arn'] ?? '';
  }
}

class DisableImportFindingsForProductResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisableSecurityHubRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisableSecurityHubResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisassociateFromMasterAccountRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisassociateFromMasterAccountResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisassociateMembersRequest {
  public ?AccountIdList $account_ids;

  public function __construct(shape(
    ?'account_ids' => ?AccountIdList,
  ) $s = shape()) {
    $this->account_ids = $s['account_ids'] ?? vec[];
  }
}

class DisassociateMembersResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Double = float;

class EnableImportFindingsForProductRequest {
  public ?NonEmptyString $product_arn;

  public function __construct(shape(
    ?'product_arn' => ?NonEmptyString,
  ) $s = shape()) {
    $this->product_arn = $s['product_arn'] ?? '';
  }
}

class EnableImportFindingsForProductResponse {
  public ?NonEmptyString $product_subscription_arn;

  public function __construct(shape(
    ?'product_subscription_arn' => ?NonEmptyString,
  ) $s = shape()) {
    $this->product_subscription_arn = $s['product_subscription_arn'] ?? '';
  }
}

class EnableSecurityHubRequest {
  public bool $enable_default_standards;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'enable_default_standards' => bool,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->enable_default_standards = $s['enable_default_standards'] ?? false;
    $this->tags = $s['tags'] ?? dict[];
  }
}

class EnableSecurityHubResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type FieldMap = dict<NonEmptyString, NonEmptyString>;

class GetEnabledStandardsRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?StandardsSubscriptionArns $standards_subscription_arns;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'standards_subscription_arns' => ?StandardsSubscriptionArns,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->standards_subscription_arns = $s['standards_subscription_arns'] ?? vec[];
  }
}

class GetEnabledStandardsResponse {
  public ?NextToken $next_token;
  public ?StandardsSubscriptions $standards_subscriptions;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'standards_subscriptions' => ?StandardsSubscriptions,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->standards_subscriptions = $s['standards_subscriptions'] ?? vec[];
  }
}

class GetFindingsRequest {
  public ?AwsSecurityFindingFilters $filters;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?SortCriteria $sort_criteria;

  public function __construct(shape(
    ?'filters' => ?AwsSecurityFindingFilters,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'sort_criteria' => ?SortCriteria,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? null;
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->sort_criteria = $s['sort_criteria'] ?? vec[];
  }
}

class GetFindingsResponse {
  public ?AwsSecurityFindingList $findings;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'findings' => ?AwsSecurityFindingList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->findings = $s['findings'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetInsightResultsRequest {
  public ?NonEmptyString $insight_arn;

  public function __construct(shape(
    ?'insight_arn' => ?NonEmptyString,
  ) $s = shape()) {
    $this->insight_arn = $s['insight_arn'] ?? '';
  }
}

class GetInsightResultsResponse {
  public ?InsightResults $insight_results;

  public function __construct(shape(
    ?'insight_results' => ?InsightResults,
  ) $s = shape()) {
    $this->insight_results = $s['insight_results'] ?? null;
  }
}

class GetInsightsRequest {
  public ?ArnList $insight_arns;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'insight_arns' => ?ArnList,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->insight_arns = $s['insight_arns'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetInsightsResponse {
  public ?InsightList $insights;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'insights' => ?InsightList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->insights = $s['insights'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetInvitationsCountRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetInvitationsCountResponse {
  public int $invitations_count;

  public function __construct(shape(
    ?'invitations_count' => int,
  ) $s = shape()) {
    $this->invitations_count = $s['invitations_count'] ?? 0;
  }
}

class GetMasterAccountRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetMasterAccountResponse {
  public ?Invitation $master;

  public function __construct(shape(
    ?'master' => ?Invitation,
  ) $s = shape()) {
    $this->master = $s['master'] ?? null;
  }
}

class GetMembersRequest {
  public ?AccountIdList $account_ids;

  public function __construct(shape(
    ?'account_ids' => ?AccountIdList,
  ) $s = shape()) {
    $this->account_ids = $s['account_ids'] ?? vec[];
  }
}

class GetMembersResponse {
  public ?MemberList $members;
  public ?ResultList $unprocessed_accounts;

  public function __construct(shape(
    ?'members' => ?MemberList,
    ?'unprocessed_accounts' => ?ResultList,
  ) $s = shape()) {
    $this->members = $s['members'] ?? vec[];
    $this->unprocessed_accounts = $s['unprocessed_accounts'] ?? vec[];
  }
}

class ImportFindingsError {
  public ?NonEmptyString $error_code;
  public ?NonEmptyString $error_message;
  public ?NonEmptyString $id;

  public function __construct(shape(
    ?'error_code' => ?NonEmptyString,
    ?'error_message' => ?NonEmptyString,
    ?'id' => ?NonEmptyString,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->error_message = $s['error_message'] ?? '';
    $this->id = $s['id'] ?? '';
  }
}

type ImportFindingsErrorList = vec<ImportFindingsError>;

class Insight {
  public ?AwsSecurityFindingFilters $filters;
  public ?NonEmptyString $group_by_attribute;
  public ?NonEmptyString $insight_arn;
  public ?NonEmptyString $name;

  public function __construct(shape(
    ?'filters' => ?AwsSecurityFindingFilters,
    ?'group_by_attribute' => ?NonEmptyString,
    ?'insight_arn' => ?NonEmptyString,
    ?'name' => ?NonEmptyString,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? null;
    $this->group_by_attribute = $s['group_by_attribute'] ?? '';
    $this->insight_arn = $s['insight_arn'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

type InsightList = vec<Insight>;

class InsightResultValue {
  public int $count;
  public ?NonEmptyString $group_by_attribute_value;

  public function __construct(shape(
    ?'count' => int,
    ?'group_by_attribute_value' => ?NonEmptyString,
  ) $s = shape()) {
    $this->count = $s['count'] ?? 0;
    $this->group_by_attribute_value = $s['group_by_attribute_value'] ?? '';
  }
}

type InsightResultValueList = vec<InsightResultValue>;

class InsightResults {
  public ?NonEmptyString $group_by_attribute;
  public ?NonEmptyString $insight_arn;
  public ?InsightResultValueList $result_values;

  public function __construct(shape(
    ?'group_by_attribute' => ?NonEmptyString,
    ?'insight_arn' => ?NonEmptyString,
    ?'result_values' => ?InsightResultValueList,
  ) $s = shape()) {
    $this->group_by_attribute = $s['group_by_attribute'] ?? '';
    $this->insight_arn = $s['insight_arn'] ?? '';
    $this->result_values = $s['result_values'] ?? vec[];
  }
}

type Integer = int;

type IntegrationType = string;

type IntegrationTypeList = vec<IntegrationType>;

class InternalException {
  public ?NonEmptyString $code;
  public ?NonEmptyString $message;

  public function __construct(shape(
    ?'code' => ?NonEmptyString,
    ?'message' => ?NonEmptyString,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class InvalidAccessException {
  public ?NonEmptyString $code;
  public ?NonEmptyString $message;

  public function __construct(shape(
    ?'code' => ?NonEmptyString,
    ?'message' => ?NonEmptyString,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class InvalidInputException {
  public ?NonEmptyString $code;
  public ?NonEmptyString $message;

  public function __construct(shape(
    ?'code' => ?NonEmptyString,
    ?'message' => ?NonEmptyString,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class Invitation {
  public ?AccountId $account_id;
  public ?NonEmptyString $invitation_id;
  public ?Timestamp $invited_at;
  public ?NonEmptyString $member_status;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'invitation_id' => ?NonEmptyString,
    ?'invited_at' => ?Timestamp,
    ?'member_status' => ?NonEmptyString,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->invitation_id = $s['invitation_id'] ?? '';
    $this->invited_at = $s['invited_at'] ?? 0;
    $this->member_status = $s['member_status'] ?? '';
  }
}

type InvitationList = vec<Invitation>;

class InviteMembersRequest {
  public ?AccountIdList $account_ids;

  public function __construct(shape(
    ?'account_ids' => ?AccountIdList,
  ) $s = shape()) {
    $this->account_ids = $s['account_ids'] ?? vec[];
  }
}

class InviteMembersResponse {
  public ?ResultList $unprocessed_accounts;

  public function __construct(shape(
    ?'unprocessed_accounts' => ?ResultList,
  ) $s = shape()) {
    $this->unprocessed_accounts = $s['unprocessed_accounts'] ?? vec[];
  }
}

class IpFilter {
  public ?NonEmptyString $cidr;

  public function __construct(shape(
    ?'cidr' => ?NonEmptyString,
  ) $s = shape()) {
    $this->cidr = $s['cidr'] ?? '';
  }
}

type IpFilterList = vec<IpFilter>;

class KeywordFilter {
  public ?NonEmptyString $value;

  public function __construct(shape(
    ?'value' => ?NonEmptyString,
  ) $s = shape()) {
    $this->value = $s['value'] ?? '';
  }
}

type KeywordFilterList = vec<KeywordFilter>;

class LimitExceededException {
  public ?NonEmptyString $code;
  public ?NonEmptyString $message;

  public function __construct(shape(
    ?'code' => ?NonEmptyString,
    ?'message' => ?NonEmptyString,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class ListEnabledProductsForImportRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListEnabledProductsForImportResponse {
  public ?NextToken $next_token;
  public ?ProductSubscriptionArnList $product_subscriptions;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'product_subscriptions' => ?ProductSubscriptionArnList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->product_subscriptions = $s['product_subscriptions'] ?? vec[];
  }
}

class ListInvitationsRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListInvitationsResponse {
  public ?InvitationList $invitations;
  public ?NonEmptyString $next_token;

  public function __construct(shape(
    ?'invitations' => ?InvitationList,
    ?'next_token' => ?NonEmptyString,
  ) $s = shape()) {
    $this->invitations = $s['invitations'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListMembersRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public bool $only_associated;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'only_associated' => bool,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->only_associated = $s['only_associated'] ?? false;
  }
}

class ListMembersResponse {
  public ?MemberList $members;
  public ?NonEmptyString $next_token;

  public function __construct(shape(
    ?'members' => ?MemberList,
    ?'next_token' => ?NonEmptyString,
  ) $s = shape()) {
    $this->members = $s['members'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListTagsForResourceRequest {
  public ?ResourceArn $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceArn,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsForResourceResponse {
  public ?TagMap $tags;

  public function __construct(shape(
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? dict[];
  }
}

class LoadBalancerState {
  public ?NonEmptyString $code;
  public ?NonEmptyString $reason;

  public function __construct(shape(
    ?'code' => ?NonEmptyString,
    ?'reason' => ?NonEmptyString,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->reason = $s['reason'] ?? '';
  }
}

class Malware {
  public ?NonEmptyString $name;
  public ?NonEmptyString $path;
  public ?MalwareState $state;
  public ?MalwareType $type;

  public function __construct(shape(
    ?'name' => ?NonEmptyString,
    ?'path' => ?NonEmptyString,
    ?'state' => ?MalwareState,
    ?'type' => ?MalwareType,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->path = $s['path'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type MalwareList = vec<Malware>;

type MalwareState = string;

type MalwareType = string;

class MapFilter {
  public ?MapFilterComparison $comparison;
  public ?NonEmptyString $key;
  public ?NonEmptyString $value;

  public function __construct(shape(
    ?'comparison' => ?MapFilterComparison,
    ?'key' => ?NonEmptyString,
    ?'value' => ?NonEmptyString,
  ) $s = shape()) {
    $this->comparison = $s['comparison'] ?? '';
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type MapFilterComparison = string;

type MapFilterList = vec<MapFilter>;

type MaxResults = int;

class Member {
  public ?AccountId $account_id;
  public ?NonEmptyString $email;
  public ?Timestamp $invited_at;
  public ?NonEmptyString $master_id;
  public ?NonEmptyString $member_status;
  public ?Timestamp $updated_at;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'email' => ?NonEmptyString,
    ?'invited_at' => ?Timestamp,
    ?'master_id' => ?NonEmptyString,
    ?'member_status' => ?NonEmptyString,
    ?'updated_at' => ?Timestamp,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->email = $s['email'] ?? '';
    $this->invited_at = $s['invited_at'] ?? 0;
    $this->master_id = $s['master_id'] ?? '';
    $this->member_status = $s['member_status'] ?? '';
    $this->updated_at = $s['updated_at'] ?? 0;
  }
}

type MemberList = vec<Member>;

class Network {
  public ?NonEmptyString $destination_domain;
  public ?NonEmptyString $destination_ip_v_4;
  public ?NonEmptyString $destination_ip_v_6;
  public int $destination_port;
  public ?NetworkDirection $direction;
  public ?NonEmptyString $protocol;
  public ?NonEmptyString $source_domain;
  public ?NonEmptyString $source_ip_v_4;
  public ?NonEmptyString $source_ip_v_6;
  public ?NonEmptyString $source_mac;
  public int $source_port;

  public function __construct(shape(
    ?'destination_domain' => ?NonEmptyString,
    ?'destination_ip_v_4' => ?NonEmptyString,
    ?'destination_ip_v_6' => ?NonEmptyString,
    ?'destination_port' => int,
    ?'direction' => ?NetworkDirection,
    ?'protocol' => ?NonEmptyString,
    ?'source_domain' => ?NonEmptyString,
    ?'source_ip_v_4' => ?NonEmptyString,
    ?'source_ip_v_6' => ?NonEmptyString,
    ?'source_mac' => ?NonEmptyString,
    ?'source_port' => int,
  ) $s = shape()) {
    $this->destination_domain = $s['destination_domain'] ?? '';
    $this->destination_ip_v_4 = $s['destination_ip_v_4'] ?? '';
    $this->destination_ip_v_6 = $s['destination_ip_v_6'] ?? '';
    $this->destination_port = $s['destination_port'] ?? 0;
    $this->direction = $s['direction'] ?? '';
    $this->protocol = $s['protocol'] ?? '';
    $this->source_domain = $s['source_domain'] ?? '';
    $this->source_ip_v_4 = $s['source_ip_v_4'] ?? '';
    $this->source_ip_v_6 = $s['source_ip_v_6'] ?? '';
    $this->source_mac = $s['source_mac'] ?? '';
    $this->source_port = $s['source_port'] ?? 0;
  }
}

type NetworkDirection = string;

type NextToken = string;

type NonEmptyString = string;

type NonEmptyStringList = vec<NonEmptyString>;

class Note {
  public ?NonEmptyString $text;
  public ?NonEmptyString $updated_at;
  public ?NonEmptyString $updated_by;

  public function __construct(shape(
    ?'text' => ?NonEmptyString,
    ?'updated_at' => ?NonEmptyString,
    ?'updated_by' => ?NonEmptyString,
  ) $s = shape()) {
    $this->text = $s['text'] ?? '';
    $this->updated_at = $s['updated_at'] ?? '';
    $this->updated_by = $s['updated_by'] ?? '';
  }
}

class NoteUpdate {
  public ?NonEmptyString $text;
  public ?NonEmptyString $updated_by;

  public function __construct(shape(
    ?'text' => ?NonEmptyString,
    ?'updated_by' => ?NonEmptyString,
  ) $s = shape()) {
    $this->text = $s['text'] ?? '';
    $this->updated_by = $s['updated_by'] ?? '';
  }
}

class NumberFilter {
  public ?Double $eq;
  public ?Double $gte;
  public ?Double $lte;

  public function __construct(shape(
    ?'eq' => ?Double,
    ?'gte' => ?Double,
    ?'lte' => ?Double,
  ) $s = shape()) {
    $this->eq = $s['eq'] ?? 0.0;
    $this->gte = $s['gte'] ?? 0.0;
    $this->lte = $s['lte'] ?? 0.0;
  }
}

type NumberFilterList = vec<NumberFilter>;

type Partition = string;

class ProcessDetails {
  public ?NonEmptyString $launched_at;
  public ?NonEmptyString $name;
  public int $parent_pid;
  public ?NonEmptyString $path;
  public int $pid;
  public ?NonEmptyString $terminated_at;

  public function __construct(shape(
    ?'launched_at' => ?NonEmptyString,
    ?'name' => ?NonEmptyString,
    ?'parent_pid' => int,
    ?'path' => ?NonEmptyString,
    ?'pid' => int,
    ?'terminated_at' => ?NonEmptyString,
  ) $s = shape()) {
    $this->launched_at = $s['launched_at'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->parent_pid = $s['parent_pid'] ?? 0;
    $this->path = $s['path'] ?? '';
    $this->pid = $s['pid'] ?? 0;
    $this->terminated_at = $s['terminated_at'] ?? '';
  }
}

class Product {
  public ?NonEmptyString $activation_url;
  public ?CategoryList $categories;
  public ?NonEmptyString $company_name;
  public ?NonEmptyString $description;
  public ?IntegrationTypeList $integration_types;
  public ?NonEmptyString $marketplace_url;
  public ?NonEmptyString $product_arn;
  public ?NonEmptyString $product_name;
  public ?NonEmptyString $product_subscription_resource_policy;

  public function __construct(shape(
    ?'activation_url' => ?NonEmptyString,
    ?'categories' => ?CategoryList,
    ?'company_name' => ?NonEmptyString,
    ?'description' => ?NonEmptyString,
    ?'integration_types' => ?IntegrationTypeList,
    ?'marketplace_url' => ?NonEmptyString,
    ?'product_arn' => ?NonEmptyString,
    ?'product_name' => ?NonEmptyString,
    ?'product_subscription_resource_policy' => ?NonEmptyString,
  ) $s = shape()) {
    $this->activation_url = $s['activation_url'] ?? '';
    $this->categories = $s['categories'] ?? vec[];
    $this->company_name = $s['company_name'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->integration_types = $s['integration_types'] ?? vec[];
    $this->marketplace_url = $s['marketplace_url'] ?? '';
    $this->product_arn = $s['product_arn'] ?? '';
    $this->product_name = $s['product_name'] ?? '';
    $this->product_subscription_resource_policy = $s['product_subscription_resource_policy'] ?? '';
  }
}

type ProductSubscriptionArnList = vec<NonEmptyString>;

type ProductsList = vec<Product>;

type RatioScale = int;

class Recommendation {
  public ?NonEmptyString $text;
  public ?NonEmptyString $url;

  public function __construct(shape(
    ?'text' => ?NonEmptyString,
    ?'url' => ?NonEmptyString,
  ) $s = shape()) {
    $this->text = $s['text'] ?? '';
    $this->url = $s['url'] ?? '';
  }
}

type RecordState = string;

class RelatedFinding {
  public ?NonEmptyString $id;
  public ?NonEmptyString $product_arn;

  public function __construct(shape(
    ?'id' => ?NonEmptyString,
    ?'product_arn' => ?NonEmptyString,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->product_arn = $s['product_arn'] ?? '';
  }
}

type RelatedFindingList = vec<RelatedFinding>;

type RelatedRequirementsList = vec<NonEmptyString>;

class Remediation {
  public ?Recommendation $recommendation;

  public function __construct(shape(
    ?'recommendation' => ?Recommendation,
  ) $s = shape()) {
    $this->recommendation = $s['recommendation'] ?? null;
  }
}

class Resource {
  public ?ResourceDetails $details;
  public ?NonEmptyString $id;
  public ?Partition $partition;
  public ?NonEmptyString $region;
  public ?FieldMap $tags;
  public ?NonEmptyString $type;

  public function __construct(shape(
    ?'details' => ?ResourceDetails,
    ?'id' => ?NonEmptyString,
    ?'partition' => ?Partition,
    ?'region' => ?NonEmptyString,
    ?'tags' => ?FieldMap,
    ?'type' => ?NonEmptyString,
  ) $s = shape()) {
    $this->details = $s['details'] ?? null;
    $this->id = $s['id'] ?? '';
    $this->partition = $s['partition'] ?? '';
    $this->region = $s['region'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
    $this->type = $s['type'] ?? '';
  }
}

type ResourceArn = string;

class ResourceConflictException {
  public ?NonEmptyString $code;
  public ?NonEmptyString $message;

  public function __construct(shape(
    ?'code' => ?NonEmptyString,
    ?'message' => ?NonEmptyString,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class ResourceDetails {
  public ?AwsCloudFrontDistributionDetails $aws_cloud_front_distribution;
  public ?AwsCodeBuildProjectDetails $aws_code_build_project;
  public ?AwsEc2InstanceDetails $aws_ec_2_instance;
  public ?AwsEc2NetworkInterfaceDetails $aws_ec_2_network_interface;
  public ?AwsEc2SecurityGroupDetails $aws_ec_2_security_group;
  public ?AwsElasticsearchDomainDetails $aws_elasticsearch_domain;
  public ?AwsElbv2LoadBalancerDetails $aws_elbv_2_load_balancer;
  public ?AwsIamAccessKeyDetails $aws_iam_access_key;
  public ?AwsIamRoleDetails $aws_iam_role;
  public ?AwsKmsKeyDetails $aws_kms_key;
  public ?AwsLambdaFunctionDetails $aws_lambda_function;
  public ?AwsLambdaLayerVersionDetails $aws_lambda_layer_version;
  public ?AwsRdsDbInstanceDetails $aws_rds_db_instance;
  public ?AwsS3BucketDetails $aws_s_3_bucket;
  public ?AwsS3ObjectDetails $aws_s_3_object;
  public ?AwsSnsTopicDetails $aws_sns_topic;
  public ?AwsSqsQueueDetails $aws_sqs_queue;
  public ?AwsWafWebAclDetails $aws_waf_web_acl;
  public ?ContainerDetails $container;
  public ?FieldMap $other;

  public function __construct(shape(
    ?'aws_cloud_front_distribution' => ?AwsCloudFrontDistributionDetails,
    ?'aws_code_build_project' => ?AwsCodeBuildProjectDetails,
    ?'aws_ec_2_instance' => ?AwsEc2InstanceDetails,
    ?'aws_ec_2_network_interface' => ?AwsEc2NetworkInterfaceDetails,
    ?'aws_ec_2_security_group' => ?AwsEc2SecurityGroupDetails,
    ?'aws_elasticsearch_domain' => ?AwsElasticsearchDomainDetails,
    ?'aws_elbv_2_load_balancer' => ?AwsElbv2LoadBalancerDetails,
    ?'aws_iam_access_key' => ?AwsIamAccessKeyDetails,
    ?'aws_iam_role' => ?AwsIamRoleDetails,
    ?'aws_kms_key' => ?AwsKmsKeyDetails,
    ?'aws_lambda_function' => ?AwsLambdaFunctionDetails,
    ?'aws_lambda_layer_version' => ?AwsLambdaLayerVersionDetails,
    ?'aws_rds_db_instance' => ?AwsRdsDbInstanceDetails,
    ?'aws_s_3_bucket' => ?AwsS3BucketDetails,
    ?'aws_s_3_object' => ?AwsS3ObjectDetails,
    ?'aws_sns_topic' => ?AwsSnsTopicDetails,
    ?'aws_sqs_queue' => ?AwsSqsQueueDetails,
    ?'aws_waf_web_acl' => ?AwsWafWebAclDetails,
    ?'container' => ?ContainerDetails,
    ?'other' => ?FieldMap,
  ) $s = shape()) {
    $this->aws_cloud_front_distribution = $s['aws_cloud_front_distribution'] ?? null;
    $this->aws_code_build_project = $s['aws_code_build_project'] ?? null;
    $this->aws_ec_2_instance = $s['aws_ec_2_instance'] ?? null;
    $this->aws_ec_2_network_interface = $s['aws_ec_2_network_interface'] ?? null;
    $this->aws_ec_2_security_group = $s['aws_ec_2_security_group'] ?? null;
    $this->aws_elasticsearch_domain = $s['aws_elasticsearch_domain'] ?? null;
    $this->aws_elbv_2_load_balancer = $s['aws_elbv_2_load_balancer'] ?? null;
    $this->aws_iam_access_key = $s['aws_iam_access_key'] ?? null;
    $this->aws_iam_role = $s['aws_iam_role'] ?? null;
    $this->aws_kms_key = $s['aws_kms_key'] ?? null;
    $this->aws_lambda_function = $s['aws_lambda_function'] ?? null;
    $this->aws_lambda_layer_version = $s['aws_lambda_layer_version'] ?? null;
    $this->aws_rds_db_instance = $s['aws_rds_db_instance'] ?? null;
    $this->aws_s_3_bucket = $s['aws_s_3_bucket'] ?? null;
    $this->aws_s_3_object = $s['aws_s_3_object'] ?? null;
    $this->aws_sns_topic = $s['aws_sns_topic'] ?? null;
    $this->aws_sqs_queue = $s['aws_sqs_queue'] ?? null;
    $this->aws_waf_web_acl = $s['aws_waf_web_acl'] ?? null;
    $this->container = $s['container'] ?? null;
    $this->other = $s['other'] ?? dict[];
  }
}

type ResourceList = vec<Resource>;

class ResourceNotFoundException {
  public ?NonEmptyString $code;
  public ?NonEmptyString $message;

  public function __construct(shape(
    ?'code' => ?NonEmptyString,
    ?'message' => ?NonEmptyString,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class Result {
  public ?AccountId $account_id;
  public ?NonEmptyString $processing_result;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'processing_result' => ?NonEmptyString,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->processing_result = $s['processing_result'] ?? '';
  }
}

type ResultList = vec<Result>;

type SecurityGroups = vec<NonEmptyString>;

class Severity {
  public ?SeverityLabel $label;
  public int $normalized;
  public ?Double $product;

  public function __construct(shape(
    ?'label' => ?SeverityLabel,
    ?'normalized' => int,
    ?'product' => ?Double,
  ) $s = shape()) {
    $this->label = $s['label'] ?? '';
    $this->normalized = $s['normalized'] ?? 0;
    $this->product = $s['product'] ?? 0.0;
  }
}

type SeverityLabel = string;

type SeverityRating = string;

class SeverityUpdate {
  public ?SeverityLabel $label;
  public ?RatioScale $normalized;
  public ?Double $product;

  public function __construct(shape(
    ?'label' => ?SeverityLabel,
    ?'normalized' => ?RatioScale,
    ?'product' => ?Double,
  ) $s = shape()) {
    $this->label = $s['label'] ?? '';
    $this->normalized = $s['normalized'] ?? 0;
    $this->product = $s['product'] ?? 0.0;
  }
}

type SortCriteria = vec<SortCriterion>;

class SortCriterion {
  public ?NonEmptyString $field;
  public ?SortOrder $sort_order;

  public function __construct(shape(
    ?'field' => ?NonEmptyString,
    ?'sort_order' => ?SortOrder,
  ) $s = shape()) {
    $this->field = $s['field'] ?? '';
    $this->sort_order = $s['sort_order'] ?? '';
  }
}

type SortOrder = string;

class Standard {
  public ?NonEmptyString $description;
  public bool $enabled_by_default;
  public ?NonEmptyString $name;
  public ?NonEmptyString $standards_arn;

  public function __construct(shape(
    ?'description' => ?NonEmptyString,
    ?'enabled_by_default' => bool,
    ?'name' => ?NonEmptyString,
    ?'standards_arn' => ?NonEmptyString,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->enabled_by_default = $s['enabled_by_default'] ?? false;
    $this->name = $s['name'] ?? '';
    $this->standards_arn = $s['standards_arn'] ?? '';
  }
}

type Standards = vec<Standard>;

class StandardsControl {
  public ?NonEmptyString $control_id;
  public ?ControlStatus $control_status;
  public ?Timestamp $control_status_updated_at;
  public ?NonEmptyString $description;
  public ?NonEmptyString $disabled_reason;
  public ?RelatedRequirementsList $related_requirements;
  public ?NonEmptyString $remediation_url;
  public ?SeverityRating $severity_rating;
  public ?NonEmptyString $standards_control_arn;
  public ?NonEmptyString $title;

  public function __construct(shape(
    ?'control_id' => ?NonEmptyString,
    ?'control_status' => ?ControlStatus,
    ?'control_status_updated_at' => ?Timestamp,
    ?'description' => ?NonEmptyString,
    ?'disabled_reason' => ?NonEmptyString,
    ?'related_requirements' => ?RelatedRequirementsList,
    ?'remediation_url' => ?NonEmptyString,
    ?'severity_rating' => ?SeverityRating,
    ?'standards_control_arn' => ?NonEmptyString,
    ?'title' => ?NonEmptyString,
  ) $s = shape()) {
    $this->control_id = $s['control_id'] ?? '';
    $this->control_status = $s['control_status'] ?? '';
    $this->control_status_updated_at = $s['control_status_updated_at'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->disabled_reason = $s['disabled_reason'] ?? '';
    $this->related_requirements = $s['related_requirements'] ?? vec[];
    $this->remediation_url = $s['remediation_url'] ?? '';
    $this->severity_rating = $s['severity_rating'] ?? '';
    $this->standards_control_arn = $s['standards_control_arn'] ?? '';
    $this->title = $s['title'] ?? '';
  }
}

type StandardsControls = vec<StandardsControl>;

type StandardsInputParameterMap = dict<NonEmptyString, NonEmptyString>;

type StandardsStatus = string;

class StandardsSubscription {
  public ?NonEmptyString $standards_arn;
  public ?StandardsInputParameterMap $standards_input;
  public ?StandardsStatus $standards_status;
  public ?NonEmptyString $standards_subscription_arn;

  public function __construct(shape(
    ?'standards_arn' => ?NonEmptyString,
    ?'standards_input' => ?StandardsInputParameterMap,
    ?'standards_status' => ?StandardsStatus,
    ?'standards_subscription_arn' => ?NonEmptyString,
  ) $s = shape()) {
    $this->standards_arn = $s['standards_arn'] ?? '';
    $this->standards_input = $s['standards_input'] ?? dict[];
    $this->standards_status = $s['standards_status'] ?? '';
    $this->standards_subscription_arn = $s['standards_subscription_arn'] ?? '';
  }
}

type StandardsSubscriptionArns = vec<NonEmptyString>;

class StandardsSubscriptionRequest {
  public ?NonEmptyString $standards_arn;
  public ?StandardsInputParameterMap $standards_input;

  public function __construct(shape(
    ?'standards_arn' => ?NonEmptyString,
    ?'standards_input' => ?StandardsInputParameterMap,
  ) $s = shape()) {
    $this->standards_arn = $s['standards_arn'] ?? '';
    $this->standards_input = $s['standards_input'] ?? dict[];
  }
}

type StandardsSubscriptionRequests = vec<StandardsSubscriptionRequest>;

type StandardsSubscriptions = vec<StandardsSubscription>;

class StringFilter {
  public ?StringFilterComparison $comparison;
  public ?NonEmptyString $value;

  public function __construct(shape(
    ?'comparison' => ?StringFilterComparison,
    ?'value' => ?NonEmptyString,
  ) $s = shape()) {
    $this->comparison = $s['comparison'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type StringFilterComparison = string;

type StringFilterList = vec<StringFilter>;

type StringList = vec<NonEmptyString>;

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagMap = dict<TagKey, TagValue>;

class TagResourceRequest {
  public ?ResourceArn $resource_arn;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceArn,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

class ThreatIntelIndicator {
  public ?ThreatIntelIndicatorCategory $category;
  public ?NonEmptyString $last_observed_at;
  public ?NonEmptyString $source;
  public ?NonEmptyString $source_url;
  public ?ThreatIntelIndicatorType $type;
  public ?NonEmptyString $value;

  public function __construct(shape(
    ?'category' => ?ThreatIntelIndicatorCategory,
    ?'last_observed_at' => ?NonEmptyString,
    ?'source' => ?NonEmptyString,
    ?'source_url' => ?NonEmptyString,
    ?'type' => ?ThreatIntelIndicatorType,
    ?'value' => ?NonEmptyString,
  ) $s = shape()) {
    $this->category = $s['category'] ?? '';
    $this->last_observed_at = $s['last_observed_at'] ?? '';
    $this->source = $s['source'] ?? '';
    $this->source_url = $s['source_url'] ?? '';
    $this->type = $s['type'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type ThreatIntelIndicatorCategory = string;

type ThreatIntelIndicatorList = vec<ThreatIntelIndicator>;

type ThreatIntelIndicatorType = string;

type Timestamp = int;

type TypeList = vec<NonEmptyString>;

class UntagResourceRequest {
  public ?ResourceArn $resource_arn;
  public ?TagKeyList $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceArn,
    ?'tag_keys' => ?TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateActionTargetRequest {
  public ?NonEmptyString $action_target_arn;
  public ?NonEmptyString $description;
  public ?NonEmptyString $name;

  public function __construct(shape(
    ?'action_target_arn' => ?NonEmptyString,
    ?'description' => ?NonEmptyString,
    ?'name' => ?NonEmptyString,
  ) $s = shape()) {
    $this->action_target_arn = $s['action_target_arn'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class UpdateActionTargetResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateFindingsRequest {
  public ?AwsSecurityFindingFilters $filters;
  public ?NoteUpdate $note;
  public ?RecordState $record_state;

  public function __construct(shape(
    ?'filters' => ?AwsSecurityFindingFilters,
    ?'note' => ?NoteUpdate,
    ?'record_state' => ?RecordState,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? null;
    $this->note = $s['note'] ?? null;
    $this->record_state = $s['record_state'] ?? '';
  }
}

class UpdateFindingsResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateInsightRequest {
  public ?AwsSecurityFindingFilters $filters;
  public ?NonEmptyString $group_by_attribute;
  public ?NonEmptyString $insight_arn;
  public ?NonEmptyString $name;

  public function __construct(shape(
    ?'filters' => ?AwsSecurityFindingFilters,
    ?'group_by_attribute' => ?NonEmptyString,
    ?'insight_arn' => ?NonEmptyString,
    ?'name' => ?NonEmptyString,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? null;
    $this->group_by_attribute = $s['group_by_attribute'] ?? '';
    $this->insight_arn = $s['insight_arn'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class UpdateInsightResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateStandardsControlRequest {
  public ?ControlStatus $control_status;
  public ?NonEmptyString $disabled_reason;
  public ?NonEmptyString $standards_control_arn;

  public function __construct(shape(
    ?'control_status' => ?ControlStatus,
    ?'disabled_reason' => ?NonEmptyString,
    ?'standards_control_arn' => ?NonEmptyString,
  ) $s = shape()) {
    $this->control_status = $s['control_status'] ?? '';
    $this->disabled_reason = $s['disabled_reason'] ?? '';
    $this->standards_control_arn = $s['standards_control_arn'] ?? '';
  }
}

class UpdateStandardsControlResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type VerificationState = string;

class WafAction {
  public ?NonEmptyString $type;

  public function __construct(shape(
    ?'type' => ?NonEmptyString,
  ) $s = shape()) {
    $this->type = $s['type'] ?? '';
  }
}

class WafExcludedRule {
  public ?NonEmptyString $rule_id;

  public function __construct(shape(
    ?'rule_id' => ?NonEmptyString,
  ) $s = shape()) {
    $this->rule_id = $s['rule_id'] ?? '';
  }
}

type WafExcludedRuleList = vec<WafExcludedRule>;

class WafOverrideAction {
  public ?NonEmptyString $type;

  public function __construct(shape(
    ?'type' => ?NonEmptyString,
  ) $s = shape()) {
    $this->type = $s['type'] ?? '';
  }
}

class Workflow {
  public ?WorkflowStatus $status;

  public function __construct(shape(
    ?'status' => ?WorkflowStatus,
  ) $s = shape()) {
    $this->status = $s['status'] ?? '';
  }
}

type WorkflowState = string;

type WorkflowStatus = string;

class WorkflowUpdate {
  public ?WorkflowStatus $status;

  public function __construct(shape(
    ?'status' => ?WorkflowStatus,
  ) $s = shape()) {
    $this->status = $s['status'] ?? '';
  }
}

