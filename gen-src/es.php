<?hh // strict
namespace slack\aws\es;

interface ElasticsearchService {
  public function AddTags(AddTagsRequest $in): Awaitable<\Errors\Error>;
  public function AssociatePackage(AssociatePackageRequest $in): Awaitable<\Errors\Result<AssociatePackageResponse>>;
  public function CancelElasticsearchServiceSoftwareUpdate(CancelElasticsearchServiceSoftwareUpdateRequest $in): Awaitable<\Errors\Result<CancelElasticsearchServiceSoftwareUpdateResponse>>;
  public function CreateElasticsearchDomain(CreateElasticsearchDomainRequest $in): Awaitable<\Errors\Result<CreateElasticsearchDomainResponse>>;
  public function CreatePackage(CreatePackageRequest $in): Awaitable<\Errors\Result<CreatePackageResponse>>;
  public function DeleteElasticsearchDomain(DeleteElasticsearchDomainRequest $in): Awaitable<\Errors\Result<DeleteElasticsearchDomainResponse>>;
  public function DeleteElasticsearchServiceRole( $in): Awaitable<\Errors\Error>;
  public function DeletePackage(DeletePackageRequest $in): Awaitable<\Errors\Result<DeletePackageResponse>>;
  public function DescribeElasticsearchDomain(DescribeElasticsearchDomainRequest $in): Awaitable<\Errors\Result<DescribeElasticsearchDomainResponse>>;
  public function DescribeElasticsearchDomainConfig(DescribeElasticsearchDomainConfigRequest $in): Awaitable<\Errors\Result<DescribeElasticsearchDomainConfigResponse>>;
  public function DescribeElasticsearchDomains(DescribeElasticsearchDomainsRequest $in): Awaitable<\Errors\Result<DescribeElasticsearchDomainsResponse>>;
  public function DescribeElasticsearchInstanceTypeLimits(DescribeElasticsearchInstanceTypeLimitsRequest $in): Awaitable<\Errors\Result<DescribeElasticsearchInstanceTypeLimitsResponse>>;
  public function DescribePackages(DescribePackagesRequest $in): Awaitable<\Errors\Result<DescribePackagesResponse>>;
  public function DescribeReservedElasticsearchInstanceOfferings(DescribeReservedElasticsearchInstanceOfferingsRequest $in): Awaitable<\Errors\Result<DescribeReservedElasticsearchInstanceOfferingsResponse>>;
  public function DescribeReservedElasticsearchInstances(DescribeReservedElasticsearchInstancesRequest $in): Awaitable<\Errors\Result<DescribeReservedElasticsearchInstancesResponse>>;
  public function DissociatePackage(DissociatePackageRequest $in): Awaitable<\Errors\Result<DissociatePackageResponse>>;
  public function GetCompatibleElasticsearchVersions(GetCompatibleElasticsearchVersionsRequest $in): Awaitable<\Errors\Result<GetCompatibleElasticsearchVersionsResponse>>;
  public function GetUpgradeHistory(GetUpgradeHistoryRequest $in): Awaitable<\Errors\Result<GetUpgradeHistoryResponse>>;
  public function GetUpgradeStatus(GetUpgradeStatusRequest $in): Awaitable<\Errors\Result<GetUpgradeStatusResponse>>;
  public function ListDomainNames( $in): Awaitable<\Errors\Result<ListDomainNamesResponse>>;
  public function ListDomainsForPackage(ListDomainsForPackageRequest $in): Awaitable<\Errors\Result<ListDomainsForPackageResponse>>;
  public function ListElasticsearchInstanceTypes(ListElasticsearchInstanceTypesRequest $in): Awaitable<\Errors\Result<ListElasticsearchInstanceTypesResponse>>;
  public function ListElasticsearchVersions(ListElasticsearchVersionsRequest $in): Awaitable<\Errors\Result<ListElasticsearchVersionsResponse>>;
  public function ListPackagesForDomain(ListPackagesForDomainRequest $in): Awaitable<\Errors\Result<ListPackagesForDomainResponse>>;
  public function ListTags(ListTagsRequest $in): Awaitable<\Errors\Result<ListTagsResponse>>;
  public function PurchaseReservedElasticsearchInstanceOffering(PurchaseReservedElasticsearchInstanceOfferingRequest $in): Awaitable<\Errors\Result<PurchaseReservedElasticsearchInstanceOfferingResponse>>;
  public function RemoveTags(RemoveTagsRequest $in): Awaitable<\Errors\Error>;
  public function StartElasticsearchServiceSoftwareUpdate(StartElasticsearchServiceSoftwareUpdateRequest $in): Awaitable<\Errors\Result<StartElasticsearchServiceSoftwareUpdateResponse>>;
  public function UpdateElasticsearchDomainConfig(UpdateElasticsearchDomainConfigRequest $in): Awaitable<\Errors\Result<UpdateElasticsearchDomainConfigResponse>>;
  public function UpgradeElasticsearchDomain(UpgradeElasticsearchDomainRequest $in): Awaitable<\Errors\Result<UpgradeElasticsearchDomainResponse>>;
}

type ARN = string;

class AccessDeniedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AccessPoliciesStatus {
  public ?PolicyDocument $options;
  public ?OptionStatus $status;

  public function __construct(shape(
    ?'options' => ?PolicyDocument,
    ?'status' => ?OptionStatus,
  ) $s = shape()) {
    $this->options = $s['options'] ?? '';
    $this->status = $s['status'] ?? null;
  }
}

class AddTagsRequest {
  public ?ARN $arn;
  public ?TagList $tag_list;

  public function __construct(shape(
    ?'arn' => ?ARN,
    ?'tag_list' => ?TagList,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->tag_list = $s['tag_list'] ?? vec[];
  }
}

class AdditionalLimit {
  public ?LimitName $limit_name;
  public ?LimitValueList $limit_values;

  public function __construct(shape(
    ?'limit_name' => ?LimitName,
    ?'limit_values' => ?LimitValueList,
  ) $s = shape()) {
    $this->limit_name = $s['limit_name'] ?? '';
    $this->limit_values = $s['limit_values'] ?? vec[];
  }
}

type AdditionalLimitList = vec<AdditionalLimit>;

type AdvancedOptions = dict<String, String>;

class AdvancedOptionsStatus {
  public ?AdvancedOptions $options;
  public ?OptionStatus $status;

  public function __construct(shape(
    ?'options' => ?AdvancedOptions,
    ?'status' => ?OptionStatus,
  ) $s = shape()) {
    $this->options = $s['options'] ?? dict[];
    $this->status = $s['status'] ?? null;
  }
}

class AdvancedSecurityOptions {
  public bool $enabled;
  public bool $internal_user_database_enabled;

  public function __construct(shape(
    ?'enabled' => bool,
    ?'internal_user_database_enabled' => bool,
  ) $s = shape()) {
    $this->enabled = $s['enabled'] ?? false;
    $this->internal_user_database_enabled = $s['internal_user_database_enabled'] ?? false;
  }
}

class AdvancedSecurityOptionsInput {
  public bool $enabled;
  public bool $internal_user_database_enabled;
  public ?MasterUserOptions $master_user_options;

  public function __construct(shape(
    ?'enabled' => bool,
    ?'internal_user_database_enabled' => bool,
    ?'master_user_options' => ?MasterUserOptions,
  ) $s = shape()) {
    $this->enabled = $s['enabled'] ?? false;
    $this->internal_user_database_enabled = $s['internal_user_database_enabled'] ?? false;
    $this->master_user_options = $s['master_user_options'] ?? null;
  }
}

class AdvancedSecurityOptionsStatus {
  public ?AdvancedSecurityOptions $options;
  public ?OptionStatus $status;

  public function __construct(shape(
    ?'options' => ?AdvancedSecurityOptions,
    ?'status' => ?OptionStatus,
  ) $s = shape()) {
    $this->options = $s['options'] ?? null;
    $this->status = $s['status'] ?? null;
  }
}

class AssociatePackageRequest {
  public ?DomainName $domain_name;
  public ?PackageID $package_id;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
    ?'package_id' => ?PackageID,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
    $this->package_id = $s['package_id'] ?? '';
  }
}

class AssociatePackageResponse {
  public ?DomainPackageDetails $domain_package_details;

  public function __construct(shape(
    ?'domain_package_details' => ?DomainPackageDetails,
  ) $s = shape()) {
    $this->domain_package_details = $s['domain_package_details'] ?? null;
  }
}

class BaseException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Boolean = bool;

class CancelElasticsearchServiceSoftwareUpdateRequest {
  public ?DomainName $domain_name;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class CancelElasticsearchServiceSoftwareUpdateResponse {
  public ?ServiceSoftwareOptions $service_software_options;

  public function __construct(shape(
    ?'service_software_options' => ?ServiceSoftwareOptions,
  ) $s = shape()) {
    $this->service_software_options = $s['service_software_options'] ?? null;
  }
}

type CloudWatchLogsLogGroupArn = string;

class CognitoOptions {
  public bool $enabled;
  public ?IdentityPoolId $identity_pool_id;
  public ?RoleArn $role_arn;
  public ?UserPoolId $user_pool_id;

  public function __construct(shape(
    ?'enabled' => bool,
    ?'identity_pool_id' => ?IdentityPoolId,
    ?'role_arn' => ?RoleArn,
    ?'user_pool_id' => ?UserPoolId,
  ) $s = shape()) {
    $this->enabled = $s['enabled'] ?? false;
    $this->identity_pool_id = $s['identity_pool_id'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class CognitoOptionsStatus {
  public ?CognitoOptions $options;
  public ?OptionStatus $status;

  public function __construct(shape(
    ?'options' => ?CognitoOptions,
    ?'status' => ?OptionStatus,
  ) $s = shape()) {
    $this->options = $s['options'] ?? null;
    $this->status = $s['status'] ?? null;
  }
}

type CompatibleElasticsearchVersionsList = vec<CompatibleVersionsMap>;

class CompatibleVersionsMap {
  public ?ElasticsearchVersionString $source_version;
  public ?ElasticsearchVersionList $target_versions;

  public function __construct(shape(
    ?'source_version' => ?ElasticsearchVersionString,
    ?'target_versions' => ?ElasticsearchVersionList,
  ) $s = shape()) {
    $this->source_version = $s['source_version'] ?? '';
    $this->target_versions = $s['target_versions'] ?? vec[];
  }
}

class ConflictException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CreateElasticsearchDomainRequest {
  public ?PolicyDocument $access_policies;
  public ?AdvancedOptions $advanced_options;
  public ?AdvancedSecurityOptionsInput $advanced_security_options;
  public ?CognitoOptions $cognito_options;
  public ?DomainEndpointOptions $domain_endpoint_options;
  public ?DomainName $domain_name;
  public ?EBSOptions $ebs_options;
  public ?ElasticsearchClusterConfig $elasticsearch_cluster_config;
  public ?ElasticsearchVersionString $elasticsearch_version;
  public ?EncryptionAtRestOptions $encryption_at_rest_options;
  public ?LogPublishingOptions $log_publishing_options;
  public ?NodeToNodeEncryptionOptions $node_to_node_encryption_options;
  public ?SnapshotOptions $snapshot_options;
  public ?VPCOptions $vpc_options;

  public function __construct(shape(
    ?'access_policies' => ?PolicyDocument,
    ?'advanced_options' => ?AdvancedOptions,
    ?'advanced_security_options' => ?AdvancedSecurityOptionsInput,
    ?'cognito_options' => ?CognitoOptions,
    ?'domain_endpoint_options' => ?DomainEndpointOptions,
    ?'domain_name' => ?DomainName,
    ?'ebs_options' => ?EBSOptions,
    ?'elasticsearch_cluster_config' => ?ElasticsearchClusterConfig,
    ?'elasticsearch_version' => ?ElasticsearchVersionString,
    ?'encryption_at_rest_options' => ?EncryptionAtRestOptions,
    ?'log_publishing_options' => ?LogPublishingOptions,
    ?'node_to_node_encryption_options' => ?NodeToNodeEncryptionOptions,
    ?'snapshot_options' => ?SnapshotOptions,
    ?'vpc_options' => ?VPCOptions,
  ) $s = shape()) {
    $this->access_policies = $s['access_policies'] ?? '';
    $this->advanced_options = $s['advanced_options'] ?? dict[];
    $this->advanced_security_options = $s['advanced_security_options'] ?? null;
    $this->cognito_options = $s['cognito_options'] ?? null;
    $this->domain_endpoint_options = $s['domain_endpoint_options'] ?? null;
    $this->domain_name = $s['domain_name'] ?? '';
    $this->ebs_options = $s['ebs_options'] ?? null;
    $this->elasticsearch_cluster_config = $s['elasticsearch_cluster_config'] ?? null;
    $this->elasticsearch_version = $s['elasticsearch_version'] ?? '';
    $this->encryption_at_rest_options = $s['encryption_at_rest_options'] ?? null;
    $this->log_publishing_options = $s['log_publishing_options'] ?? dict[];
    $this->node_to_node_encryption_options = $s['node_to_node_encryption_options'] ?? null;
    $this->snapshot_options = $s['snapshot_options'] ?? null;
    $this->vpc_options = $s['vpc_options'] ?? null;
  }
}

class CreateElasticsearchDomainResponse {
  public ?ElasticsearchDomainStatus $domain_status;

  public function __construct(shape(
    ?'domain_status' => ?ElasticsearchDomainStatus,
  ) $s = shape()) {
    $this->domain_status = $s['domain_status'] ?? null;
  }
}

class CreatePackageRequest {
  public ?PackageDescription $package_description;
  public ?PackageName $package_name;
  public ?PackageSource $package_source;
  public ?PackageType $package_type;

  public function __construct(shape(
    ?'package_description' => ?PackageDescription,
    ?'package_name' => ?PackageName,
    ?'package_source' => ?PackageSource,
    ?'package_type' => ?PackageType,
  ) $s = shape()) {
    $this->package_description = $s['package_description'] ?? '';
    $this->package_name = $s['package_name'] ?? '';
    $this->package_source = $s['package_source'] ?? null;
    $this->package_type = $s['package_type'] ?? '';
  }
}

class CreatePackageResponse {
  public ?PackageDetails $package_details;

  public function __construct(shape(
    ?'package_details' => ?PackageDetails,
  ) $s = shape()) {
    $this->package_details = $s['package_details'] ?? null;
  }
}

type CreatedAt = int;

class DeleteElasticsearchDomainRequest {
  public ?DomainName $domain_name;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class DeleteElasticsearchDomainResponse {
  public ?ElasticsearchDomainStatus $domain_status;

  public function __construct(shape(
    ?'domain_status' => ?ElasticsearchDomainStatus,
  ) $s = shape()) {
    $this->domain_status = $s['domain_status'] ?? null;
  }
}

class DeletePackageRequest {
  public ?PackageID $package_id;

  public function __construct(shape(
    ?'package_id' => ?PackageID,
  ) $s = shape()) {
    $this->package_id = $s['package_id'] ?? '';
  }
}

class DeletePackageResponse {
  public ?PackageDetails $package_details;

  public function __construct(shape(
    ?'package_details' => ?PackageDetails,
  ) $s = shape()) {
    $this->package_details = $s['package_details'] ?? null;
  }
}

type DeploymentCloseDateTimeStamp = int;

type DeploymentStatus = string;

class DescribeElasticsearchDomainConfigRequest {
  public ?DomainName $domain_name;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class DescribeElasticsearchDomainConfigResponse {
  public ?ElasticsearchDomainConfig $domain_config;

  public function __construct(shape(
    ?'domain_config' => ?ElasticsearchDomainConfig,
  ) $s = shape()) {
    $this->domain_config = $s['domain_config'] ?? null;
  }
}

class DescribeElasticsearchDomainRequest {
  public ?DomainName $domain_name;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class DescribeElasticsearchDomainResponse {
  public ?ElasticsearchDomainStatus $domain_status;

  public function __construct(shape(
    ?'domain_status' => ?ElasticsearchDomainStatus,
  ) $s = shape()) {
    $this->domain_status = $s['domain_status'] ?? null;
  }
}

class DescribeElasticsearchDomainsRequest {
  public ?DomainNameList $domain_names;

  public function __construct(shape(
    ?'domain_names' => ?DomainNameList,
  ) $s = shape()) {
    $this->domain_names = $s['domain_names'] ?? vec[];
  }
}

class DescribeElasticsearchDomainsResponse {
  public ?ElasticsearchDomainStatusList $domain_status_list;

  public function __construct(shape(
    ?'domain_status_list' => ?ElasticsearchDomainStatusList,
  ) $s = shape()) {
    $this->domain_status_list = $s['domain_status_list'] ?? vec[];
  }
}

class DescribeElasticsearchInstanceTypeLimitsRequest {
  public ?DomainName $domain_name;
  public ?ElasticsearchVersionString $elasticsearch_version;
  public ?ESPartitionInstanceType $instance_type;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
    ?'elasticsearch_version' => ?ElasticsearchVersionString,
    ?'instance_type' => ?ESPartitionInstanceType,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
    $this->elasticsearch_version = $s['elasticsearch_version'] ?? '';
    $this->instance_type = $s['instance_type'] ?? '';
  }
}

class DescribeElasticsearchInstanceTypeLimitsResponse {
  public ?LimitsByRole $limits_by_role;

  public function __construct(shape(
    ?'limits_by_role' => ?LimitsByRole,
  ) $s = shape()) {
    $this->limits_by_role = $s['limits_by_role'] ?? dict[];
  }
}

class DescribePackagesFilter {
  public ?DescribePackagesFilterName $name;
  public ?DescribePackagesFilterValues $value;

  public function __construct(shape(
    ?'name' => ?DescribePackagesFilterName,
    ?'value' => ?DescribePackagesFilterValues,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->value = $s['value'] ?? vec[];
  }
}

type DescribePackagesFilterList = vec<DescribePackagesFilter>;

type DescribePackagesFilterName = string;

type DescribePackagesFilterValue = string;

type DescribePackagesFilterValues = vec<DescribePackagesFilterValue>;

class DescribePackagesRequest {
  public ?DescribePackagesFilterList $filters;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'filters' => ?DescribePackagesFilterList,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribePackagesResponse {
  public string $next_token;
  public ?PackageDetailsList $package_details_list;

  public function __construct(shape(
    ?'next_token' => string,
    ?'package_details_list' => ?PackageDetailsList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->package_details_list = $s['package_details_list'] ?? vec[];
  }
}

class DescribeReservedElasticsearchInstanceOfferingsRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?GUID $reserved_elasticsearch_instance_offering_id;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'reserved_elasticsearch_instance_offering_id' => ?GUID,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->reserved_elasticsearch_instance_offering_id = $s['reserved_elasticsearch_instance_offering_id'] ?? '';
  }
}

class DescribeReservedElasticsearchInstanceOfferingsResponse {
  public ?NextToken $next_token;
  public ?ReservedElasticsearchInstanceOfferingList $reserved_elasticsearch_instance_offerings;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'reserved_elasticsearch_instance_offerings' => ?ReservedElasticsearchInstanceOfferingList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->reserved_elasticsearch_instance_offerings = $s['reserved_elasticsearch_instance_offerings'] ?? vec[];
  }
}

class DescribeReservedElasticsearchInstancesRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?GUID $reserved_elasticsearch_instance_id;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'reserved_elasticsearch_instance_id' => ?GUID,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->reserved_elasticsearch_instance_id = $s['reserved_elasticsearch_instance_id'] ?? '';
  }
}

class DescribeReservedElasticsearchInstancesResponse {
  public string $next_token;
  public ?ReservedElasticsearchInstanceList $reserved_elasticsearch_instances;

  public function __construct(shape(
    ?'next_token' => string,
    ?'reserved_elasticsearch_instances' => ?ReservedElasticsearchInstanceList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->reserved_elasticsearch_instances = $s['reserved_elasticsearch_instances'] ?? vec[];
  }
}

class DisabledOperationException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DissociatePackageRequest {
  public ?DomainName $domain_name;
  public ?PackageID $package_id;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
    ?'package_id' => ?PackageID,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
    $this->package_id = $s['package_id'] ?? '';
  }
}

class DissociatePackageResponse {
  public ?DomainPackageDetails $domain_package_details;

  public function __construct(shape(
    ?'domain_package_details' => ?DomainPackageDetails,
  ) $s = shape()) {
    $this->domain_package_details = $s['domain_package_details'] ?? null;
  }
}

class DomainEndpointOptions {
  public bool $enforce_https;
  public ?TLSSecurityPolicy $tls_security_policy;

  public function __construct(shape(
    ?'enforce_https' => bool,
    ?'tls_security_policy' => ?TLSSecurityPolicy,
  ) $s = shape()) {
    $this->enforce_https = $s['enforce_https'] ?? false;
    $this->tls_security_policy = $s['tls_security_policy'] ?? '';
  }
}

class DomainEndpointOptionsStatus {
  public ?DomainEndpointOptions $options;
  public ?OptionStatus $status;

  public function __construct(shape(
    ?'options' => ?DomainEndpointOptions,
    ?'status' => ?OptionStatus,
  ) $s = shape()) {
    $this->options = $s['options'] ?? null;
    $this->status = $s['status'] ?? null;
  }
}

type DomainId = string;

class DomainInfo {
  public ?DomainName $domain_name;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

type DomainInfoList = vec<DomainInfo>;

type DomainName = string;

type DomainNameList = vec<DomainName>;

class DomainPackageDetails {
  public ?DomainName $domain_name;
  public ?DomainPackageStatus $domain_package_status;
  public ?ErrorDetails $error_details;
  public ?LastUpdated $last_updated;
  public ?PackageID $package_id;
  public ?PackageName $package_name;
  public ?PackageType $package_type;
  public ?ReferencePath $reference_path;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
    ?'domain_package_status' => ?DomainPackageStatus,
    ?'error_details' => ?ErrorDetails,
    ?'last_updated' => ?LastUpdated,
    ?'package_id' => ?PackageID,
    ?'package_name' => ?PackageName,
    ?'package_type' => ?PackageType,
    ?'reference_path' => ?ReferencePath,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
    $this->domain_package_status = $s['domain_package_status'] ?? '';
    $this->error_details = $s['error_details'] ?? null;
    $this->last_updated = $s['last_updated'] ?? 0;
    $this->package_id = $s['package_id'] ?? '';
    $this->package_name = $s['package_name'] ?? '';
    $this->package_type = $s['package_type'] ?? '';
    $this->reference_path = $s['reference_path'] ?? '';
  }
}

type DomainPackageDetailsList = vec<DomainPackageDetails>;

type DomainPackageStatus = string;

type Double = float;

class EBSOptions {
  public bool $ebs_enabled;
  public ?IntegerClass $iops;
  public ?IntegerClass $volume_size;
  public ?VolumeType $volume_type;

  public function __construct(shape(
    ?'ebs_enabled' => bool,
    ?'iops' => ?IntegerClass,
    ?'volume_size' => ?IntegerClass,
    ?'volume_type' => ?VolumeType,
  ) $s = shape()) {
    $this->ebs_enabled = $s['ebs_enabled'] ?? false;
    $this->iops = $s['iops'] ?? 0;
    $this->volume_size = $s['volume_size'] ?? 0;
    $this->volume_type = $s['volume_type'] ?? '';
  }
}

class EBSOptionsStatus {
  public ?EBSOptions $options;
  public ?OptionStatus $status;

  public function __construct(shape(
    ?'options' => ?EBSOptions,
    ?'status' => ?OptionStatus,
  ) $s = shape()) {
    $this->options = $s['options'] ?? null;
    $this->status = $s['status'] ?? null;
  }
}

type ESPartitionInstanceType = string;

type ESWarmPartitionInstanceType = string;

class ElasticsearchClusterConfig {
  public ?IntegerClass $dedicated_master_count;
  public bool $dedicated_master_enabled;
  public ?ESPartitionInstanceType $dedicated_master_type;
  public ?IntegerClass $instance_count;
  public ?ESPartitionInstanceType $instance_type;
  public ?IntegerClass $warm_count;
  public bool $warm_enabled;
  public ?ESWarmPartitionInstanceType $warm_type;
  public ?ZoneAwarenessConfig $zone_awareness_config;
  public bool $zone_awareness_enabled;

  public function __construct(shape(
    ?'dedicated_master_count' => ?IntegerClass,
    ?'dedicated_master_enabled' => bool,
    ?'dedicated_master_type' => ?ESPartitionInstanceType,
    ?'instance_count' => ?IntegerClass,
    ?'instance_type' => ?ESPartitionInstanceType,
    ?'warm_count' => ?IntegerClass,
    ?'warm_enabled' => bool,
    ?'warm_type' => ?ESWarmPartitionInstanceType,
    ?'zone_awareness_config' => ?ZoneAwarenessConfig,
    ?'zone_awareness_enabled' => bool,
  ) $s = shape()) {
    $this->dedicated_master_count = $s['dedicated_master_count'] ?? 0;
    $this->dedicated_master_enabled = $s['dedicated_master_enabled'] ?? false;
    $this->dedicated_master_type = $s['dedicated_master_type'] ?? '';
    $this->instance_count = $s['instance_count'] ?? 0;
    $this->instance_type = $s['instance_type'] ?? '';
    $this->warm_count = $s['warm_count'] ?? 0;
    $this->warm_enabled = $s['warm_enabled'] ?? false;
    $this->warm_type = $s['warm_type'] ?? '';
    $this->zone_awareness_config = $s['zone_awareness_config'] ?? null;
    $this->zone_awareness_enabled = $s['zone_awareness_enabled'] ?? false;
  }
}

class ElasticsearchClusterConfigStatus {
  public ?ElasticsearchClusterConfig $options;
  public ?OptionStatus $status;

  public function __construct(shape(
    ?'options' => ?ElasticsearchClusterConfig,
    ?'status' => ?OptionStatus,
  ) $s = shape()) {
    $this->options = $s['options'] ?? null;
    $this->status = $s['status'] ?? null;
  }
}

class ElasticsearchDomainConfig {
  public ?AccessPoliciesStatus $access_policies;
  public ?AdvancedOptionsStatus $advanced_options;
  public ?AdvancedSecurityOptionsStatus $advanced_security_options;
  public ?CognitoOptionsStatus $cognito_options;
  public ?DomainEndpointOptionsStatus $domain_endpoint_options;
  public ?EBSOptionsStatus $ebs_options;
  public ?ElasticsearchClusterConfigStatus $elasticsearch_cluster_config;
  public ?ElasticsearchVersionStatus $elasticsearch_version;
  public ?EncryptionAtRestOptionsStatus $encryption_at_rest_options;
  public ?LogPublishingOptionsStatus $log_publishing_options;
  public ?NodeToNodeEncryptionOptionsStatus $node_to_node_encryption_options;
  public ?SnapshotOptionsStatus $snapshot_options;
  public ?VPCDerivedInfoStatus $vpc_options;

  public function __construct(shape(
    ?'access_policies' => ?AccessPoliciesStatus,
    ?'advanced_options' => ?AdvancedOptionsStatus,
    ?'advanced_security_options' => ?AdvancedSecurityOptionsStatus,
    ?'cognito_options' => ?CognitoOptionsStatus,
    ?'domain_endpoint_options' => ?DomainEndpointOptionsStatus,
    ?'ebs_options' => ?EBSOptionsStatus,
    ?'elasticsearch_cluster_config' => ?ElasticsearchClusterConfigStatus,
    ?'elasticsearch_version' => ?ElasticsearchVersionStatus,
    ?'encryption_at_rest_options' => ?EncryptionAtRestOptionsStatus,
    ?'log_publishing_options' => ?LogPublishingOptionsStatus,
    ?'node_to_node_encryption_options' => ?NodeToNodeEncryptionOptionsStatus,
    ?'snapshot_options' => ?SnapshotOptionsStatus,
    ?'vpc_options' => ?VPCDerivedInfoStatus,
  ) $s = shape()) {
    $this->access_policies = $s['access_policies'] ?? null;
    $this->advanced_options = $s['advanced_options'] ?? null;
    $this->advanced_security_options = $s['advanced_security_options'] ?? null;
    $this->cognito_options = $s['cognito_options'] ?? null;
    $this->domain_endpoint_options = $s['domain_endpoint_options'] ?? null;
    $this->ebs_options = $s['ebs_options'] ?? null;
    $this->elasticsearch_cluster_config = $s['elasticsearch_cluster_config'] ?? null;
    $this->elasticsearch_version = $s['elasticsearch_version'] ?? null;
    $this->encryption_at_rest_options = $s['encryption_at_rest_options'] ?? null;
    $this->log_publishing_options = $s['log_publishing_options'] ?? null;
    $this->node_to_node_encryption_options = $s['node_to_node_encryption_options'] ?? null;
    $this->snapshot_options = $s['snapshot_options'] ?? null;
    $this->vpc_options = $s['vpc_options'] ?? null;
  }
}

class ElasticsearchDomainStatus {
  public ?ARN $arn;
  public ?PolicyDocument $access_policies;
  public ?AdvancedOptions $advanced_options;
  public ?AdvancedSecurityOptions $advanced_security_options;
  public ?CognitoOptions $cognito_options;
  public bool $created;
  public bool $deleted;
  public ?DomainEndpointOptions $domain_endpoint_options;
  public ?DomainId $domain_id;
  public ?DomainName $domain_name;
  public ?EBSOptions $ebs_options;
  public ?ElasticsearchClusterConfig $elasticsearch_cluster_config;
  public ?ElasticsearchVersionString $elasticsearch_version;
  public ?EncryptionAtRestOptions $encryption_at_rest_options;
  public ?ServiceUrl $endpoint;
  public ?EndpointsMap $endpoints;
  public ?LogPublishingOptions $log_publishing_options;
  public ?NodeToNodeEncryptionOptions $node_to_node_encryption_options;
  public bool $processing;
  public ?ServiceSoftwareOptions $service_software_options;
  public ?SnapshotOptions $snapshot_options;
  public bool $upgrade_processing;
  public ?VPCDerivedInfo $vpc_options;

  public function __construct(shape(
    ?'arn' => ?ARN,
    ?'access_policies' => ?PolicyDocument,
    ?'advanced_options' => ?AdvancedOptions,
    ?'advanced_security_options' => ?AdvancedSecurityOptions,
    ?'cognito_options' => ?CognitoOptions,
    ?'created' => bool,
    ?'deleted' => bool,
    ?'domain_endpoint_options' => ?DomainEndpointOptions,
    ?'domain_id' => ?DomainId,
    ?'domain_name' => ?DomainName,
    ?'ebs_options' => ?EBSOptions,
    ?'elasticsearch_cluster_config' => ?ElasticsearchClusterConfig,
    ?'elasticsearch_version' => ?ElasticsearchVersionString,
    ?'encryption_at_rest_options' => ?EncryptionAtRestOptions,
    ?'endpoint' => ?ServiceUrl,
    ?'endpoints' => ?EndpointsMap,
    ?'log_publishing_options' => ?LogPublishingOptions,
    ?'node_to_node_encryption_options' => ?NodeToNodeEncryptionOptions,
    ?'processing' => bool,
    ?'service_software_options' => ?ServiceSoftwareOptions,
    ?'snapshot_options' => ?SnapshotOptions,
    ?'upgrade_processing' => bool,
    ?'vpc_options' => ?VPCDerivedInfo,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->access_policies = $s['access_policies'] ?? '';
    $this->advanced_options = $s['advanced_options'] ?? dict[];
    $this->advanced_security_options = $s['advanced_security_options'] ?? null;
    $this->cognito_options = $s['cognito_options'] ?? null;
    $this->created = $s['created'] ?? false;
    $this->deleted = $s['deleted'] ?? false;
    $this->domain_endpoint_options = $s['domain_endpoint_options'] ?? null;
    $this->domain_id = $s['domain_id'] ?? '';
    $this->domain_name = $s['domain_name'] ?? '';
    $this->ebs_options = $s['ebs_options'] ?? null;
    $this->elasticsearch_cluster_config = $s['elasticsearch_cluster_config'] ?? null;
    $this->elasticsearch_version = $s['elasticsearch_version'] ?? '';
    $this->encryption_at_rest_options = $s['encryption_at_rest_options'] ?? null;
    $this->endpoint = $s['endpoint'] ?? '';
    $this->endpoints = $s['endpoints'] ?? dict[];
    $this->log_publishing_options = $s['log_publishing_options'] ?? dict[];
    $this->node_to_node_encryption_options = $s['node_to_node_encryption_options'] ?? null;
    $this->processing = $s['processing'] ?? false;
    $this->service_software_options = $s['service_software_options'] ?? null;
    $this->snapshot_options = $s['snapshot_options'] ?? null;
    $this->upgrade_processing = $s['upgrade_processing'] ?? false;
    $this->vpc_options = $s['vpc_options'] ?? null;
  }
}

type ElasticsearchDomainStatusList = vec<ElasticsearchDomainStatus>;

type ElasticsearchInstanceTypeList = vec<ESPartitionInstanceType>;

type ElasticsearchVersionList = vec<ElasticsearchVersionString>;

class ElasticsearchVersionStatus {
  public ?ElasticsearchVersionString $options;
  public ?OptionStatus $status;

  public function __construct(shape(
    ?'options' => ?ElasticsearchVersionString,
    ?'status' => ?OptionStatus,
  ) $s = shape()) {
    $this->options = $s['options'] ?? '';
    $this->status = $s['status'] ?? null;
  }
}

type ElasticsearchVersionString = string;

class EncryptionAtRestOptions {
  public bool $enabled;
  public ?KmsKeyId $kms_key_id;

  public function __construct(shape(
    ?'enabled' => bool,
    ?'kms_key_id' => ?KmsKeyId,
  ) $s = shape()) {
    $this->enabled = $s['enabled'] ?? false;
    $this->kms_key_id = $s['kms_key_id'] ?? '';
  }
}

class EncryptionAtRestOptionsStatus {
  public ?EncryptionAtRestOptions $options;
  public ?OptionStatus $status;

  public function __construct(shape(
    ?'options' => ?EncryptionAtRestOptions,
    ?'status' => ?OptionStatus,
  ) $s = shape()) {
    $this->options = $s['options'] ?? null;
    $this->status = $s['status'] ?? null;
  }
}

type EndpointsMap = dict<String, ServiceUrl>;

class ErrorDetails {
  public ?ErrorMessage $error_message;
  public ?ErrorType $error_type;

  public function __construct(shape(
    ?'error_message' => ?ErrorMessage,
    ?'error_type' => ?ErrorType,
  ) $s = shape()) {
    $this->error_message = $s['error_message'] ?? '';
    $this->error_type = $s['error_type'] ?? '';
  }
}

type ErrorMessage = string;

type ErrorType = string;

type GUID = string;

class GetCompatibleElasticsearchVersionsRequest {
  public ?DomainName $domain_name;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class GetCompatibleElasticsearchVersionsResponse {
  public ?CompatibleElasticsearchVersionsList $compatible_elasticsearch_versions;

  public function __construct(shape(
    ?'compatible_elasticsearch_versions' => ?CompatibleElasticsearchVersionsList,
  ) $s = shape()) {
    $this->compatible_elasticsearch_versions = $s['compatible_elasticsearch_versions'] ?? vec[];
  }
}

class GetUpgradeHistoryRequest {
  public ?DomainName $domain_name;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetUpgradeHistoryResponse {
  public string $next_token;
  public ?UpgradeHistoryList $upgrade_histories;

  public function __construct(shape(
    ?'next_token' => string,
    ?'upgrade_histories' => ?UpgradeHistoryList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->upgrade_histories = $s['upgrade_histories'] ?? vec[];
  }
}

class GetUpgradeStatusRequest {
  public ?DomainName $domain_name;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class GetUpgradeStatusResponse {
  public ?UpgradeStatus $step_status;
  public ?UpgradeName $upgrade_name;
  public ?UpgradeStep $upgrade_step;

  public function __construct(shape(
    ?'step_status' => ?UpgradeStatus,
    ?'upgrade_name' => ?UpgradeName,
    ?'upgrade_step' => ?UpgradeStep,
  ) $s = shape()) {
    $this->step_status = $s['step_status'] ?? '';
    $this->upgrade_name = $s['upgrade_name'] ?? '';
    $this->upgrade_step = $s['upgrade_step'] ?? '';
  }
}

type IdentityPoolId = string;

type InstanceCount = int;

class InstanceCountLimits {
  public ?MaximumInstanceCount $maximum_instance_count;
  public ?MinimumInstanceCount $minimum_instance_count;

  public function __construct(shape(
    ?'maximum_instance_count' => ?MaximumInstanceCount,
    ?'minimum_instance_count' => ?MinimumInstanceCount,
  ) $s = shape()) {
    $this->maximum_instance_count = $s['maximum_instance_count'] ?? 0;
    $this->minimum_instance_count = $s['minimum_instance_count'] ?? 0;
  }
}

class InstanceLimits {
  public ?InstanceCountLimits $instance_count_limits;

  public function __construct(shape(
    ?'instance_count_limits' => ?InstanceCountLimits,
  ) $s = shape()) {
    $this->instance_count_limits = $s['instance_count_limits'] ?? null;
  }
}

type InstanceRole = string;

type Integer = int;

type IntegerClass = int;

class InternalException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidTypeException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Issue = string;

type Issues = vec<Issue>;

type KmsKeyId = string;

type LastUpdated = int;

class LimitExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type LimitName = string;

type LimitValue = string;

type LimitValueList = vec<LimitValue>;

class Limits {
  public ?AdditionalLimitList $additional_limits;
  public ?InstanceLimits $instance_limits;
  public ?StorageTypeList $storage_types;

  public function __construct(shape(
    ?'additional_limits' => ?AdditionalLimitList,
    ?'instance_limits' => ?InstanceLimits,
    ?'storage_types' => ?StorageTypeList,
  ) $s = shape()) {
    $this->additional_limits = $s['additional_limits'] ?? vec[];
    $this->instance_limits = $s['instance_limits'] ?? null;
    $this->storage_types = $s['storage_types'] ?? vec[];
  }
}

type LimitsByRole = dict<InstanceRole, Limits>;

class ListDomainNamesResponse {
  public ?DomainInfoList $domain_names;

  public function __construct(shape(
    ?'domain_names' => ?DomainInfoList,
  ) $s = shape()) {
    $this->domain_names = $s['domain_names'] ?? vec[];
  }
}

class ListDomainsForPackageRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?PackageID $package_id;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'package_id' => ?PackageID,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->package_id = $s['package_id'] ?? '';
  }
}

class ListDomainsForPackageResponse {
  public ?DomainPackageDetailsList $domain_package_details_list;
  public string $next_token;

  public function __construct(shape(
    ?'domain_package_details_list' => ?DomainPackageDetailsList,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->domain_package_details_list = $s['domain_package_details_list'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListElasticsearchInstanceTypesRequest {
  public ?DomainName $domain_name;
  public ?ElasticsearchVersionString $elasticsearch_version;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
    ?'elasticsearch_version' => ?ElasticsearchVersionString,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
    $this->elasticsearch_version = $s['elasticsearch_version'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListElasticsearchInstanceTypesResponse {
  public ?ElasticsearchInstanceTypeList $elasticsearch_instance_types;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'elasticsearch_instance_types' => ?ElasticsearchInstanceTypeList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->elasticsearch_instance_types = $s['elasticsearch_instance_types'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListElasticsearchVersionsRequest {
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

class ListElasticsearchVersionsResponse {
  public ?ElasticsearchVersionList $elasticsearch_versions;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'elasticsearch_versions' => ?ElasticsearchVersionList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->elasticsearch_versions = $s['elasticsearch_versions'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListPackagesForDomainRequest {
  public ?DomainName $domain_name;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListPackagesForDomainResponse {
  public ?DomainPackageDetailsList $domain_package_details_list;
  public string $next_token;

  public function __construct(shape(
    ?'domain_package_details_list' => ?DomainPackageDetailsList,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->domain_package_details_list = $s['domain_package_details_list'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListTagsRequest {
  public ?ARN $arn;

  public function __construct(shape(
    ?'arn' => ?ARN,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
  }
}

class ListTagsResponse {
  public ?TagList $tag_list;

  public function __construct(shape(
    ?'tag_list' => ?TagList,
  ) $s = shape()) {
    $this->tag_list = $s['tag_list'] ?? vec[];
  }
}

class LogPublishingOption {
  public ?CloudWatchLogsLogGroupArn $cloud_watch_logs_log_group_arn;
  public bool $enabled;

  public function __construct(shape(
    ?'cloud_watch_logs_log_group_arn' => ?CloudWatchLogsLogGroupArn,
    ?'enabled' => bool,
  ) $s = shape()) {
    $this->cloud_watch_logs_log_group_arn = $s['cloud_watch_logs_log_group_arn'] ?? '';
    $this->enabled = $s['enabled'] ?? false;
  }
}

type LogPublishingOptions = dict<LogType, LogPublishingOption>;

class LogPublishingOptionsStatus {
  public ?LogPublishingOptions $options;
  public ?OptionStatus $status;

  public function __construct(shape(
    ?'options' => ?LogPublishingOptions,
    ?'status' => ?OptionStatus,
  ) $s = shape()) {
    $this->options = $s['options'] ?? dict[];
    $this->status = $s['status'] ?? null;
  }
}

type LogType = string;

class MasterUserOptions {
  public ?ARN $master_user_arn;
  public ?Username $master_user_name;
  public ?Password $master_user_password;

  public function __construct(shape(
    ?'master_user_arn' => ?ARN,
    ?'master_user_name' => ?Username,
    ?'master_user_password' => ?Password,
  ) $s = shape()) {
    $this->master_user_arn = $s['master_user_arn'] ?? '';
    $this->master_user_name = $s['master_user_name'] ?? '';
    $this->master_user_password = $s['master_user_password'] ?? '';
  }
}

type MaxResults = int;

type MaximumInstanceCount = int;

type MinimumInstanceCount = int;

type NextToken = string;

class NodeToNodeEncryptionOptions {
  public bool $enabled;

  public function __construct(shape(
    ?'enabled' => bool,
  ) $s = shape()) {
    $this->enabled = $s['enabled'] ?? false;
  }
}

class NodeToNodeEncryptionOptionsStatus {
  public ?NodeToNodeEncryptionOptions $options;
  public ?OptionStatus $status;

  public function __construct(shape(
    ?'options' => ?NodeToNodeEncryptionOptions,
    ?'status' => ?OptionStatus,
  ) $s = shape()) {
    $this->options = $s['options'] ?? null;
    $this->status = $s['status'] ?? null;
  }
}

type OptionState = string;

class OptionStatus {
  public ?UpdateTimestamp $creation_date;
  public bool $pending_deletion;
  public ?OptionState $state;
  public ?UpdateTimestamp $update_date;
  public ?UIntValue $update_version;

  public function __construct(shape(
    ?'creation_date' => ?UpdateTimestamp,
    ?'pending_deletion' => bool,
    ?'state' => ?OptionState,
    ?'update_date' => ?UpdateTimestamp,
    ?'update_version' => ?UIntValue,
  ) $s = shape()) {
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->pending_deletion = $s['pending_deletion'] ?? false;
    $this->state = $s['state'] ?? '';
    $this->update_date = $s['update_date'] ?? 0;
    $this->update_version = $s['update_version'] ?? 0;
  }
}

type PackageDescription = string;

class PackageDetails {
  public ?CreatedAt $created_at;
  public ?ErrorDetails $error_details;
  public ?PackageDescription $package_description;
  public ?PackageID $package_id;
  public ?PackageName $package_name;
  public ?PackageStatus $package_status;
  public ?PackageType $package_type;

  public function __construct(shape(
    ?'created_at' => ?CreatedAt,
    ?'error_details' => ?ErrorDetails,
    ?'package_description' => ?PackageDescription,
    ?'package_id' => ?PackageID,
    ?'package_name' => ?PackageName,
    ?'package_status' => ?PackageStatus,
    ?'package_type' => ?PackageType,
  ) $s = shape()) {
    $this->created_at = $s['created_at'] ?? 0;
    $this->error_details = $s['error_details'] ?? null;
    $this->package_description = $s['package_description'] ?? '';
    $this->package_id = $s['package_id'] ?? '';
    $this->package_name = $s['package_name'] ?? '';
    $this->package_status = $s['package_status'] ?? '';
    $this->package_type = $s['package_type'] ?? '';
  }
}

type PackageDetailsList = vec<PackageDetails>;

type PackageID = string;

type PackageName = string;

class PackageSource {
  public ?S3BucketName $s_3_bucket_name;
  public ?S3Key $s_3_key;

  public function __construct(shape(
    ?'s_3_bucket_name' => ?S3BucketName,
    ?'s_3_key' => ?S3Key,
  ) $s = shape()) {
    $this->s_3_bucket_name = $s['s_3_bucket_name'] ?? '';
    $this->s_3_key = $s['s_3_key'] ?? '';
  }
}

type PackageStatus = string;

type PackageType = string;

type Password = string;

type PolicyDocument = string;

class PurchaseReservedElasticsearchInstanceOfferingRequest {
  public ?InstanceCount $instance_count;
  public ?ReservationToken $reservation_name;
  public ?GUID $reserved_elasticsearch_instance_offering_id;

  public function __construct(shape(
    ?'instance_count' => ?InstanceCount,
    ?'reservation_name' => ?ReservationToken,
    ?'reserved_elasticsearch_instance_offering_id' => ?GUID,
  ) $s = shape()) {
    $this->instance_count = $s['instance_count'] ?? 0;
    $this->reservation_name = $s['reservation_name'] ?? '';
    $this->reserved_elasticsearch_instance_offering_id = $s['reserved_elasticsearch_instance_offering_id'] ?? '';
  }
}

class PurchaseReservedElasticsearchInstanceOfferingResponse {
  public ?ReservationToken $reservation_name;
  public ?GUID $reserved_elasticsearch_instance_id;

  public function __construct(shape(
    ?'reservation_name' => ?ReservationToken,
    ?'reserved_elasticsearch_instance_id' => ?GUID,
  ) $s = shape()) {
    $this->reservation_name = $s['reservation_name'] ?? '';
    $this->reserved_elasticsearch_instance_id = $s['reserved_elasticsearch_instance_id'] ?? '';
  }
}

class RecurringCharge {
  public ?Double $recurring_charge_amount;
  public string $recurring_charge_frequency;

  public function __construct(shape(
    ?'recurring_charge_amount' => ?Double,
    ?'recurring_charge_frequency' => string,
  ) $s = shape()) {
    $this->recurring_charge_amount = $s['recurring_charge_amount'] ?? 0.0;
    $this->recurring_charge_frequency = $s['recurring_charge_frequency'] ?? '';
  }
}

type RecurringChargeList = vec<RecurringCharge>;

type ReferencePath = string;

class RemoveTagsRequest {
  public ?ARN $arn;
  public ?StringList $tag_keys;

  public function __construct(shape(
    ?'arn' => ?ARN,
    ?'tag_keys' => ?StringList,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

type ReservationToken = string;

class ReservedElasticsearchInstance {
  public string $currency_code;
  public int $duration;
  public int $elasticsearch_instance_count;
  public ?ESPartitionInstanceType $elasticsearch_instance_type;
  public ?Double $fixed_price;
  public ?ReservedElasticsearchInstancePaymentOption $payment_option;
  public ?RecurringChargeList $recurring_charges;
  public ?ReservationToken $reservation_name;
  public ?GUID $reserved_elasticsearch_instance_id;
  public string $reserved_elasticsearch_instance_offering_id;
  public ?UpdateTimestamp $start_time;
  public string $state;
  public ?Double $usage_price;

  public function __construct(shape(
    ?'currency_code' => string,
    ?'duration' => int,
    ?'elasticsearch_instance_count' => int,
    ?'elasticsearch_instance_type' => ?ESPartitionInstanceType,
    ?'fixed_price' => ?Double,
    ?'payment_option' => ?ReservedElasticsearchInstancePaymentOption,
    ?'recurring_charges' => ?RecurringChargeList,
    ?'reservation_name' => ?ReservationToken,
    ?'reserved_elasticsearch_instance_id' => ?GUID,
    ?'reserved_elasticsearch_instance_offering_id' => string,
    ?'start_time' => ?UpdateTimestamp,
    ?'state' => string,
    ?'usage_price' => ?Double,
  ) $s = shape()) {
    $this->currency_code = $s['currency_code'] ?? '';
    $this->duration = $s['duration'] ?? 0;
    $this->elasticsearch_instance_count = $s['elasticsearch_instance_count'] ?? 0;
    $this->elasticsearch_instance_type = $s['elasticsearch_instance_type'] ?? '';
    $this->fixed_price = $s['fixed_price'] ?? 0.0;
    $this->payment_option = $s['payment_option'] ?? '';
    $this->recurring_charges = $s['recurring_charges'] ?? vec[];
    $this->reservation_name = $s['reservation_name'] ?? '';
    $this->reserved_elasticsearch_instance_id = $s['reserved_elasticsearch_instance_id'] ?? '';
    $this->reserved_elasticsearch_instance_offering_id = $s['reserved_elasticsearch_instance_offering_id'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
    $this->state = $s['state'] ?? '';
    $this->usage_price = $s['usage_price'] ?? 0.0;
  }
}

type ReservedElasticsearchInstanceList = vec<ReservedElasticsearchInstance>;

class ReservedElasticsearchInstanceOffering {
  public string $currency_code;
  public int $duration;
  public ?ESPartitionInstanceType $elasticsearch_instance_type;
  public ?Double $fixed_price;
  public ?ReservedElasticsearchInstancePaymentOption $payment_option;
  public ?RecurringChargeList $recurring_charges;
  public ?GUID $reserved_elasticsearch_instance_offering_id;
  public ?Double $usage_price;

  public function __construct(shape(
    ?'currency_code' => string,
    ?'duration' => int,
    ?'elasticsearch_instance_type' => ?ESPartitionInstanceType,
    ?'fixed_price' => ?Double,
    ?'payment_option' => ?ReservedElasticsearchInstancePaymentOption,
    ?'recurring_charges' => ?RecurringChargeList,
    ?'reserved_elasticsearch_instance_offering_id' => ?GUID,
    ?'usage_price' => ?Double,
  ) $s = shape()) {
    $this->currency_code = $s['currency_code'] ?? '';
    $this->duration = $s['duration'] ?? 0;
    $this->elasticsearch_instance_type = $s['elasticsearch_instance_type'] ?? '';
    $this->fixed_price = $s['fixed_price'] ?? 0.0;
    $this->payment_option = $s['payment_option'] ?? '';
    $this->recurring_charges = $s['recurring_charges'] ?? vec[];
    $this->reserved_elasticsearch_instance_offering_id = $s['reserved_elasticsearch_instance_offering_id'] ?? '';
    $this->usage_price = $s['usage_price'] ?? 0.0;
  }
}

type ReservedElasticsearchInstanceOfferingList = vec<ReservedElasticsearchInstanceOffering>;

type ReservedElasticsearchInstancePaymentOption = string;

class ResourceAlreadyExistsException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ResourceNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type RoleArn = string;

type S3BucketName = string;

type S3Key = string;

class ServiceSoftwareOptions {
  public ?DeploymentCloseDateTimeStamp $automated_update_date;
  public bool $cancellable;
  public string $current_version;
  public string $description;
  public string $new_version;
  public bool $optional_deployment;
  public bool $update_available;
  public ?DeploymentStatus $update_status;

  public function __construct(shape(
    ?'automated_update_date' => ?DeploymentCloseDateTimeStamp,
    ?'cancellable' => bool,
    ?'current_version' => string,
    ?'description' => string,
    ?'new_version' => string,
    ?'optional_deployment' => bool,
    ?'update_available' => bool,
    ?'update_status' => ?DeploymentStatus,
  ) $s = shape()) {
    $this->automated_update_date = $s['automated_update_date'] ?? 0;
    $this->cancellable = $s['cancellable'] ?? false;
    $this->current_version = $s['current_version'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->new_version = $s['new_version'] ?? '';
    $this->optional_deployment = $s['optional_deployment'] ?? false;
    $this->update_available = $s['update_available'] ?? false;
    $this->update_status = $s['update_status'] ?? '';
  }
}

type ServiceUrl = string;

class SnapshotOptions {
  public ?IntegerClass $automated_snapshot_start_hour;

  public function __construct(shape(
    ?'automated_snapshot_start_hour' => ?IntegerClass,
  ) $s = shape()) {
    $this->automated_snapshot_start_hour = $s['automated_snapshot_start_hour'] ?? 0;
  }
}

class SnapshotOptionsStatus {
  public ?SnapshotOptions $options;
  public ?OptionStatus $status;

  public function __construct(shape(
    ?'options' => ?SnapshotOptions,
    ?'status' => ?OptionStatus,
  ) $s = shape()) {
    $this->options = $s['options'] ?? null;
    $this->status = $s['status'] ?? null;
  }
}

class StartElasticsearchServiceSoftwareUpdateRequest {
  public ?DomainName $domain_name;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class StartElasticsearchServiceSoftwareUpdateResponse {
  public ?ServiceSoftwareOptions $service_software_options;

  public function __construct(shape(
    ?'service_software_options' => ?ServiceSoftwareOptions,
  ) $s = shape()) {
    $this->service_software_options = $s['service_software_options'] ?? null;
  }
}

type StartTimestamp = int;

type StorageSubTypeName = string;

class StorageType {
  public ?StorageSubTypeName $storage_sub_type_name;
  public ?StorageTypeLimitList $storage_type_limits;
  public ?StorageTypeName $storage_type_name;

  public function __construct(shape(
    ?'storage_sub_type_name' => ?StorageSubTypeName,
    ?'storage_type_limits' => ?StorageTypeLimitList,
    ?'storage_type_name' => ?StorageTypeName,
  ) $s = shape()) {
    $this->storage_sub_type_name = $s['storage_sub_type_name'] ?? '';
    $this->storage_type_limits = $s['storage_type_limits'] ?? vec[];
    $this->storage_type_name = $s['storage_type_name'] ?? '';
  }
}

class StorageTypeLimit {
  public ?LimitName $limit_name;
  public ?LimitValueList $limit_values;

  public function __construct(shape(
    ?'limit_name' => ?LimitName,
    ?'limit_values' => ?LimitValueList,
  ) $s = shape()) {
    $this->limit_name = $s['limit_name'] ?? '';
    $this->limit_values = $s['limit_values'] ?? vec[];
  }
}

type StorageTypeLimitList = vec<StorageTypeLimit>;

type StorageTypeList = vec<StorageType>;

type StorageTypeName = string;

type String = string;

type StringList = vec<String>;

type TLSSecurityPolicy = string;

class Tag {
  public ?TagKey $key;
  public ?TagValue $value;

  public function __construct(shape(
    ?'key' => ?TagKey,
    ?'value' => ?TagValue,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type TagKey = string;

type TagList = vec<Tag>;

type TagValue = string;

type UIntValue = int;

class UpdateElasticsearchDomainConfigRequest {
  public ?PolicyDocument $access_policies;
  public ?AdvancedOptions $advanced_options;
  public ?AdvancedSecurityOptionsInput $advanced_security_options;
  public ?CognitoOptions $cognito_options;
  public ?DomainEndpointOptions $domain_endpoint_options;
  public ?DomainName $domain_name;
  public ?EBSOptions $ebs_options;
  public ?ElasticsearchClusterConfig $elasticsearch_cluster_config;
  public ?LogPublishingOptions $log_publishing_options;
  public ?SnapshotOptions $snapshot_options;
  public ?VPCOptions $vpc_options;

  public function __construct(shape(
    ?'access_policies' => ?PolicyDocument,
    ?'advanced_options' => ?AdvancedOptions,
    ?'advanced_security_options' => ?AdvancedSecurityOptionsInput,
    ?'cognito_options' => ?CognitoOptions,
    ?'domain_endpoint_options' => ?DomainEndpointOptions,
    ?'domain_name' => ?DomainName,
    ?'ebs_options' => ?EBSOptions,
    ?'elasticsearch_cluster_config' => ?ElasticsearchClusterConfig,
    ?'log_publishing_options' => ?LogPublishingOptions,
    ?'snapshot_options' => ?SnapshotOptions,
    ?'vpc_options' => ?VPCOptions,
  ) $s = shape()) {
    $this->access_policies = $s['access_policies'] ?? '';
    $this->advanced_options = $s['advanced_options'] ?? dict[];
    $this->advanced_security_options = $s['advanced_security_options'] ?? null;
    $this->cognito_options = $s['cognito_options'] ?? null;
    $this->domain_endpoint_options = $s['domain_endpoint_options'] ?? null;
    $this->domain_name = $s['domain_name'] ?? '';
    $this->ebs_options = $s['ebs_options'] ?? null;
    $this->elasticsearch_cluster_config = $s['elasticsearch_cluster_config'] ?? null;
    $this->log_publishing_options = $s['log_publishing_options'] ?? dict[];
    $this->snapshot_options = $s['snapshot_options'] ?? null;
    $this->vpc_options = $s['vpc_options'] ?? null;
  }
}

class UpdateElasticsearchDomainConfigResponse {
  public ?ElasticsearchDomainConfig $domain_config;

  public function __construct(shape(
    ?'domain_config' => ?ElasticsearchDomainConfig,
  ) $s = shape()) {
    $this->domain_config = $s['domain_config'] ?? null;
  }
}

type UpdateTimestamp = int;

class UpgradeElasticsearchDomainRequest {
  public ?DomainName $domain_name;
  public bool $perform_check_only;
  public ?ElasticsearchVersionString $target_version;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
    ?'perform_check_only' => bool,
    ?'target_version' => ?ElasticsearchVersionString,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
    $this->perform_check_only = $s['perform_check_only'] ?? false;
    $this->target_version = $s['target_version'] ?? '';
  }
}

class UpgradeElasticsearchDomainResponse {
  public ?DomainName $domain_name;
  public bool $perform_check_only;
  public ?ElasticsearchVersionString $target_version;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
    ?'perform_check_only' => bool,
    ?'target_version' => ?ElasticsearchVersionString,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
    $this->perform_check_only = $s['perform_check_only'] ?? false;
    $this->target_version = $s['target_version'] ?? '';
  }
}

class UpgradeHistory {
  public ?StartTimestamp $start_timestamp;
  public ?UpgradeStepsList $steps_list;
  public ?UpgradeName $upgrade_name;
  public ?UpgradeStatus $upgrade_status;

  public function __construct(shape(
    ?'start_timestamp' => ?StartTimestamp,
    ?'steps_list' => ?UpgradeStepsList,
    ?'upgrade_name' => ?UpgradeName,
    ?'upgrade_status' => ?UpgradeStatus,
  ) $s = shape()) {
    $this->start_timestamp = $s['start_timestamp'] ?? 0;
    $this->steps_list = $s['steps_list'] ?? vec[];
    $this->upgrade_name = $s['upgrade_name'] ?? '';
    $this->upgrade_status = $s['upgrade_status'] ?? '';
  }
}

type UpgradeHistoryList = vec<UpgradeHistory>;

type UpgradeName = string;

type UpgradeStatus = string;

type UpgradeStep = string;

class UpgradeStepItem {
  public ?Issues $issues;
  public ?Double $progress_percent;
  public ?UpgradeStep $upgrade_step;
  public ?UpgradeStatus $upgrade_step_status;

  public function __construct(shape(
    ?'issues' => ?Issues,
    ?'progress_percent' => ?Double,
    ?'upgrade_step' => ?UpgradeStep,
    ?'upgrade_step_status' => ?UpgradeStatus,
  ) $s = shape()) {
    $this->issues = $s['issues'] ?? vec[];
    $this->progress_percent = $s['progress_percent'] ?? 0.0;
    $this->upgrade_step = $s['upgrade_step'] ?? '';
    $this->upgrade_step_status = $s['upgrade_step_status'] ?? '';
  }
}

type UpgradeStepsList = vec<UpgradeStepItem>;

type UserPoolId = string;

type Username = string;

class VPCDerivedInfo {
  public ?StringList $availability_zones;
  public ?StringList $security_group_ids;
  public ?StringList $subnet_ids;
  public string $vpc_id;

  public function __construct(shape(
    ?'availability_zones' => ?StringList,
    ?'security_group_ids' => ?StringList,
    ?'subnet_ids' => ?StringList,
    ?'vpc_id' => string,
  ) $s = shape()) {
    $this->availability_zones = $s['availability_zones'] ?? vec[];
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class VPCDerivedInfoStatus {
  public ?VPCDerivedInfo $options;
  public ?OptionStatus $status;

  public function __construct(shape(
    ?'options' => ?VPCDerivedInfo,
    ?'status' => ?OptionStatus,
  ) $s = shape()) {
    $this->options = $s['options'] ?? null;
    $this->status = $s['status'] ?? null;
  }
}

class VPCOptions {
  public ?StringList $security_group_ids;
  public ?StringList $subnet_ids;

  public function __construct(shape(
    ?'security_group_ids' => ?StringList,
    ?'subnet_ids' => ?StringList,
  ) $s = shape()) {
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
  }
}

class ValidationException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type VolumeType = string;

class ZoneAwarenessConfig {
  public ?IntegerClass $availability_zone_count;

  public function __construct(shape(
    ?'availability_zone_count' => ?IntegerClass,
  ) $s = shape()) {
    $this->availability_zone_count = $s['availability_zone_count'] ?? 0;
  }
}

