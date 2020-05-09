<?hh // strict
namespace slack\aws\es;

interface Elasticsearch Service {
  public function AddTags(AddTagsRequest) Awaitable<Errors\Error>;
  public function DescribeElasticsearchDomain(DescribeElasticsearchDomainRequest) Awaitable<Errors\Result<DescribeElasticsearchDomainResponse>>;
  public function StartElasticsearchServiceSoftwareUpdate(StartElasticsearchServiceSoftwareUpdateRequest) Awaitable<Errors\Result<StartElasticsearchServiceSoftwareUpdateResponse>>;
  public function CancelElasticsearchServiceSoftwareUpdate(CancelElasticsearchServiceSoftwareUpdateRequest) Awaitable<Errors\Result<CancelElasticsearchServiceSoftwareUpdateResponse>>;
  public function GetUpgradeHistory(GetUpgradeHistoryRequest) Awaitable<Errors\Result<GetUpgradeHistoryResponse>>;
  public function ListDomainNames() Awaitable<Errors\Result<ListDomainNamesResponse>>;
  public function ListElasticsearchVersions(ListElasticsearchVersionsRequest) Awaitable<Errors\Result<ListElasticsearchVersionsResponse>>;
  public function UpgradeElasticsearchDomain(UpgradeElasticsearchDomainRequest) Awaitable<Errors\Result<UpgradeElasticsearchDomainResponse>>;
  public function DeletePackage(DeletePackageRequest) Awaitable<Errors\Result<DeletePackageResponse>>;
  public function DescribeElasticsearchDomainConfig(DescribeElasticsearchDomainConfigRequest) Awaitable<Errors\Result<DescribeElasticsearchDomainConfigResponse>>;
  public function DescribeReservedElasticsearchInstanceOfferings(DescribeReservedElasticsearchInstanceOfferingsRequest) Awaitable<Errors\Result<DescribeReservedElasticsearchInstanceOfferingsResponse>>;
  public function ListPackagesForDomain(ListPackagesForDomainRequest) Awaitable<Errors\Result<ListPackagesForDomainResponse>>;
  public function UpdateElasticsearchDomainConfig(UpdateElasticsearchDomainConfigRequest) Awaitable<Errors\Result<UpdateElasticsearchDomainConfigResponse>>;
  public function CreateElasticsearchDomain(CreateElasticsearchDomainRequest) Awaitable<Errors\Result<CreateElasticsearchDomainResponse>>;
  public function CreatePackage(CreatePackageRequest) Awaitable<Errors\Result<CreatePackageResponse>>;
  public function ListElasticsearchInstanceTypes(ListElasticsearchInstanceTypesRequest) Awaitable<Errors\Result<ListElasticsearchInstanceTypesResponse>>;
  public function AssociatePackage(AssociatePackageRequest) Awaitable<Errors\Result<AssociatePackageResponse>>;
  public function GetUpgradeStatus(GetUpgradeStatusRequest) Awaitable<Errors\Result<GetUpgradeStatusResponse>>;
  public function ListDomainsForPackage(ListDomainsForPackageRequest) Awaitable<Errors\Result<ListDomainsForPackageResponse>>;
  public function RemoveTags(RemoveTagsRequest) Awaitable<Errors\Error>;
  public function DescribeReservedElasticsearchInstances(DescribeReservedElasticsearchInstancesRequest) Awaitable<Errors\Result<DescribeReservedElasticsearchInstancesResponse>>;
  public function DissociatePackage(DissociatePackageRequest) Awaitable<Errors\Result<DissociatePackageResponse>>;
  public function GetCompatibleElasticsearchVersions(GetCompatibleElasticsearchVersionsRequest) Awaitable<Errors\Result<GetCompatibleElasticsearchVersionsResponse>>;
  public function DeleteElasticsearchDomain(DeleteElasticsearchDomainRequest) Awaitable<Errors\Result<DeleteElasticsearchDomainResponse>>;
  public function DeleteElasticsearchServiceRole() Awaitable<Errors\Error>;
  public function DescribeElasticsearchDomains(DescribeElasticsearchDomainsRequest) Awaitable<Errors\Result<DescribeElasticsearchDomainsResponse>>;
  public function DescribeElasticsearchInstanceTypeLimits(DescribeElasticsearchInstanceTypeLimitsRequest) Awaitable<Errors\Result<DescribeElasticsearchInstanceTypeLimitsResponse>>;
  public function DescribePackages(DescribePackagesRequest) Awaitable<Errors\Result<DescribePackagesResponse>>;
  public function ListTags(ListTagsRequest) Awaitable<Errors\Result<ListTagsResponse>>;
  public function PurchaseReservedElasticsearchInstanceOffering(PurchaseReservedElasticsearchInstanceOfferingRequest) Awaitable<Errors\Result<PurchaseReservedElasticsearchInstanceOfferingResponse>>;
}

class DomainPackageStatus {
}

class ListElasticsearchInstanceTypesResponse {
  public ElasticsearchInstanceTypeList $elasticsearch_instance_types;
  public NextToken $next_token;
}

class UpgradeStepItem {
  public UpgradeStep $upgrade_step;
  public UpgradeStatus $upgrade_step_status;
  public Issues $issues;
  public Double $progress_percent;
}

class AdvancedSecurityOptionsStatus {
  public AdvancedSecurityOptions $options;
  public OptionStatus $status;
}

class CreatedAt {
}

class DescribeElasticsearchDomainConfigRequest {
  public DomainName $domain_name;
}

class DescribePackagesRequest {
  public DescribePackagesFilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ErrorMessage {
}

class LimitValueList {
}

class PackageStatus {
}

class ServiceSoftwareOptions {
  public string $new_version;
  public boolean $update_available;
  public boolean $cancellable;
  public DeploymentStatus $update_status;
  public string $description;
  public DeploymentCloseDateTimeStamp $automated_update_date;
  public boolean $optional_deployment;
  public string $current_version;
}

class BaseException {
  public ErrorMessage $message;
}

class CloudWatchLogsLogGroupArn {
}

class VPCDerivedInfoStatus {
  public VPCDerivedInfo $options;
  public OptionStatus $status;
}

class CognitoOptions {
  public boolean $enabled;
  public UserPoolId $user_pool_id;
  public IdentityPoolId $identity_pool_id;
  public RoleArn $role_arn;
}

class GetUpgradeStatusRequest {
  public DomainName $domain_name;
}

class LimitExceededException {
}

class ListPackagesForDomainRequest {
  public NextToken $next_token;
  public DomainName $domain_name;
  public MaxResults $max_results;
}

class PolicyDocument {
}

class ReservedElasticsearchInstanceOffering {
  public RecurringChargeList $recurring_charges;
  public GUID $reserved_elasticsearch_instance_offering_id;
  public ESPartitionInstanceType $elasticsearch_instance_type;
  public int $duration;
  public Double $fixed_price;
  public Double $usage_price;
  public string $currency_code;
  public ReservedElasticsearchInstancePaymentOption $payment_option;
}

class StorageType {
  public StorageTypeName $storage_type_name;
  public StorageSubTypeName $storage_sub_type_name;
  public StorageTypeLimitList $storage_type_limits;
}

class UpgradeElasticsearchDomainRequest {
  public DomainName $domain_name;
  public ElasticsearchVersionString $target_version;
  public boolean $perform_check_only;
}

class CompatibleElasticsearchVersionsList {
}

class DeletePackageResponse {
  public PackageDetails $package_details;
}

class PackageID {
}

class ReservedElasticsearchInstanceOfferingList {
}

class TLSSecurityPolicy {
}

class Tag {
  public TagValue $value;
  public TagKey $key;
}

class DomainPackageDetails {
  public DomainName $domain_name;
  public DomainPackageStatus $domain_package_status;
  public ReferencePath $reference_path;
  public ErrorDetails $error_details;
  public PackageID $package_id;
  public PackageName $package_name;
  public PackageType $package_type;
  public LastUpdated $last_updated;
}

class InstanceRole {
}

class DomainInfo {
  public DomainName $domain_name;
}

class DomainName {
}

class ElasticsearchDomainStatusList {
}

class ElasticsearchVersionList {
}

class EncryptionAtRestOptionsStatus {
  public EncryptionAtRestOptions $options;
  public OptionStatus $status;
}

class ErrorType {
}

class ConflictException {
}

class DescribeReservedElasticsearchInstancesRequest {
  public GUID $reserved_elasticsearch_instance_id;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class StartElasticsearchServiceSoftwareUpdateResponse {
  public ServiceSoftwareOptions $service_software_options;
}

class VolumeType {
}

class ListElasticsearchVersionsResponse {
  public ElasticsearchVersionList $elasticsearch_versions;
  public NextToken $next_token;
}

class OptionStatus {
  public boolean $pending_deletion;
  public UpdateTimestamp $creation_date;
  public UpdateTimestamp $update_date;
  public UIntValue $update_version;
  public OptionState $state;
}

class DescribeElasticsearchDomainsResponse {
  public ElasticsearchDomainStatusList $domain_status_list;
}

class DescribePackagesFilterValue {
}

class DomainEndpointOptionsStatus {
  public DomainEndpointOptions $options;
  public OptionStatus $status;
}

class ElasticsearchVersionString {
}

class MaxResults {
}

class ResourceNotFoundException {
}

class Boolean {
}

class DeletePackageRequest {
  public PackageID $package_id;
}

class UpgradeName {
}

class ZoneAwarenessConfig {
  public IntegerClass $availability_zone_count;
}

class DomainId {
}

class EncryptionAtRestOptions {
  public boolean $enabled;
  public KmsKeyId $kms_key_id;
}

class Limits {
  public StorageTypeList $storage_types;
  public InstanceLimits $instance_limits;
  public AdditionalLimitList $additional_limits;
}

class OptionState {
}

class PurchaseReservedElasticsearchInstanceOfferingResponse {
  public GUID $reserved_elasticsearch_instance_id;
  public ReservationToken $reservation_name;
}

class StorageTypeLimit {
  public LimitName $limit_name;
  public LimitValueList $limit_values;
}

class AdditionalLimitList {
}

class DeleteElasticsearchDomainRequest {
  public DomainName $domain_name;
}

class MasterUserOptions {
  public ARN $master_user_arn;
  public Username $master_user_name;
  public Password $master_user_password;
}

class PackageDetailsList {
}

class ReferencePath {
}

class S3BucketName {
}

class DissociatePackageRequest {
  public PackageID $package_id;
  public DomainName $domain_name;
}

class GetUpgradeStatusResponse {
  public UpgradeStep $upgrade_step;
  public UpgradeStatus $step_status;
  public UpgradeName $upgrade_name;
}

class GUID {
}

class IdentityPoolId {
}

class AdvancedSecurityOptionsInput {
  public MasterUserOptions $master_user_options;
  public boolean $enabled;
  public boolean $internal_user_database_enabled;
}

class EndpointsMap {
}

class DomainPackageDetailsList {
}

class TagList {
}

class UpgradeHistory {
  public UpgradeStepsList $steps_list;
  public UpgradeName $upgrade_name;
  public StartTimestamp $start_timestamp;
  public UpgradeStatus $upgrade_status;
}

class AdvancedOptions {
}

class CreateElasticsearchDomainRequest {
  public ElasticsearchClusterConfig $elasticsearch_cluster_config;
  public PolicyDocument $access_policies;
  public NodeToNodeEncryptionOptions $node_to_node_encryption_options;
  public AdvancedSecurityOptionsInput $advanced_security_options;
  public DomainEndpointOptions $domain_endpoint_options;
  public DomainName $domain_name;
  public ElasticsearchVersionString $elasticsearch_version;
  public EBSOptions $ebs_options;
  public CognitoOptions $cognito_options;
  public AdvancedOptions $advanced_options;
  public LogPublishingOptions $log_publishing_options;
  public SnapshotOptions $snapshot_options;
  public VPCOptions $vpc_options;
  public EncryptionAtRestOptions $encryption_at_rest_options;
}

class GetUpgradeHistoryRequest {
  public DomainName $domain_name;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class Issue {
}

class LogPublishingOptions {
}

class NodeToNodeEncryptionOptionsStatus {
  public NodeToNodeEncryptionOptions $options;
  public OptionStatus $status;
}

class PackageDetails {
  public PackageDescription $package_description;
  public PackageStatus $package_status;
  public CreatedAt $created_at;
  public ErrorDetails $error_details;
  public PackageID $package_id;
  public PackageName $package_name;
  public PackageType $package_type;
}

class Username {
}

class AddTagsRequest {
  public ARN $arn;
  public TagList $tag_list;
}

class DescribeElasticsearchDomainConfigResponse {
  public ElasticsearchDomainConfig $domain_config;
}

class StartTimestamp {
}

class UIntValue {
}

class UpgradeElasticsearchDomainResponse {
  public DomainName $domain_name;
  public ElasticsearchVersionString $target_version;
  public boolean $perform_check_only;
}

class UpgradeHistoryList {
}

class MaximumInstanceCount {
}

class S3Key {
}

class InstanceLimits {
  public InstanceCountLimits $instance_count_limits;
}

class InternalException {
}

class LimitValue {
}

class PackageDescription {
}

class ValidationException {
}

class DeleteElasticsearchDomainResponse {
  public ElasticsearchDomainStatus $domain_status;
}

class InstanceCountLimits {
  public MinimumInstanceCount $minimum_instance_count;
  public MaximumInstanceCount $maximum_instance_count;
}

class StartElasticsearchServiceSoftwareUpdateRequest {
  public DomainName $domain_name;
}

class PurchaseReservedElasticsearchInstanceOfferingRequest {
  public GUID $reserved_elasticsearch_instance_offering_id;
  public ReservationToken $reservation_name;
  public InstanceCount $instance_count;
}

class StorageTypeLimitList {
}

class DescribeReservedElasticsearchInstanceOfferingsResponse {
  public NextToken $next_token;
  public ReservedElasticsearchInstanceOfferingList $reserved_elasticsearch_instance_offerings;
}

class Integer {
}

class LogPublishingOption {
  public CloudWatchLogsLogGroupArn $cloud_watch_logs_log_group_arn;
  public boolean $enabled;
}

class UpgradeStatus {
}

class ListDomainNamesResponse {
  public DomainInfoList $domain_names;
}

class ListElasticsearchInstanceTypesRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ElasticsearchVersionString $elasticsearch_version;
  public DomainName $domain_name;
}

class ElasticsearchClusterConfig {
  public ESPartitionInstanceType $instance_type;
  public IntegerClass $instance_count;
  public boolean $dedicated_master_enabled;
  public ESPartitionInstanceType $dedicated_master_type;
  public boolean $warm_enabled;
  public IntegerClass $warm_count;
  public boolean $zone_awareness_enabled;
  public ZoneAwarenessConfig $zone_awareness_config;
  public IntegerClass $dedicated_master_count;
  public ESWarmPartitionInstanceType $warm_type;
}

class RecurringCharge {
  public string $recurring_charge_frequency;
  public Double $recurring_charge_amount;
}

class UpgradeStep {
}

class DeploymentCloseDateTimeStamp {
}

class EBSOptionsStatus {
  public EBSOptions $options;
  public OptionStatus $status;
}

class ReservedElasticsearchInstance {
  public GUID $reserved_elasticsearch_instance_id;
  public ESPartitionInstanceType $elasticsearch_instance_type;
  public string $state;
  public ReservationToken $reservation_name;
  public UpdateTimestamp $start_time;
  public int $duration;
  public Double $fixed_price;
  public Double $usage_price;
  public string $currency_code;
  public int $elasticsearch_instance_count;
  public ReservedElasticsearchInstancePaymentOption $payment_option;
  public string $reserved_elasticsearch_instance_offering_id;
  public RecurringChargeList $recurring_charges;
}

class ElasticsearchVersionStatus {
  public ElasticsearchVersionString $options;
  public OptionStatus $status;
}

class NodeToNodeEncryptionOptions {
  public boolean $enabled;
}

class Password {
}

class AdvancedSecurityOptions {
  public boolean $enabled;
  public boolean $internal_user_database_enabled;
}

class InvalidTypeException {
}

class ESWarmPartitionInstanceType {
}

class ErrorDetails {
  public ErrorType $error_type;
  public ErrorMessage $error_message;
}

class DescribePackagesFilterList {
}

class DomainNameList {
}

class DescribeElasticsearchDomainResponse {
  public ElasticsearchDomainStatus $domain_status;
}

class DescribePackagesResponse {
  public PackageDetailsList $package_details_list;
  public string $next_token;
}

class DescribeReservedElasticsearchInstanceOfferingsRequest {
  public GUID $reserved_elasticsearch_instance_offering_id;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class EBSOptions {
  public boolean $ebs_enabled;
  public VolumeType $volume_type;
  public IntegerClass $volume_size;
  public IntegerClass $iops;
}

class GetCompatibleElasticsearchVersionsResponse {
  public CompatibleElasticsearchVersionsList $compatible_elasticsearch_versions;
}

class InstanceCount {
}

class CognitoOptionsStatus {
  public CognitoOptions $options;
  public OptionStatus $status;
}

class CompatibleVersionsMap {
  public ElasticsearchVersionString $source_version;
  public ElasticsearchVersionList $target_versions;
}

class LogType {
}

class ReservedElasticsearchInstanceList {
}

class StorageTypeList {
}

class KmsKeyId {
}

class ListTagsResponse {
  public TagList $tag_list;
}

class ElasticsearchInstanceTypeList {
}

class ListElasticsearchVersionsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ResourceAlreadyExistsException {
}

class AccessPoliciesStatus {
  public PolicyDocument $options;
  public OptionStatus $status;
}

class DescribeElasticsearchDomainsRequest {
  public DomainNameList $domain_names;
}

class DeploymentStatus {
}

class DescribeElasticsearchInstanceTypeLimitsRequest {
  public DomainName $domain_name;
  public ESPartitionInstanceType $instance_type;
  public ElasticsearchVersionString $elasticsearch_version;
}

class DisabledOperationException {
}

class GetUpgradeHistoryResponse {
  public UpgradeHistoryList $upgrade_histories;
  public string $next_token;
}

class ListDomainsForPackageResponse {
  public DomainPackageDetailsList $domain_package_details_list;
  public string $next_token;
}

class MinimumInstanceCount {
}

class AssociatePackageResponse {
  public DomainPackageDetails $domain_package_details;
}

class CreatePackageRequest {
  public PackageSource $package_source;
  public PackageName $package_name;
  public PackageType $package_type;
  public PackageDescription $package_description;
}

class UpdateTimestamp {
}

class SnapshotOptionsStatus {
  public SnapshotOptions $options;
  public OptionStatus $status;
}

class StorageSubTypeName {
}

class DomainInfoList {
}

class Double {
}

class IntegerClass {
}

class RecurringChargeList {
}

class ReservedElasticsearchInstancePaymentOption {
}

class ServiceUrl {
}

class DescribePackagesFilterName {
}

class DescribeReservedElasticsearchInstancesResponse {
  public string $next_token;
  public ReservedElasticsearchInstanceList $reserved_elasticsearch_instances;
}

class StringList {
}

class TagValue {
}

class UpdateElasticsearchDomainConfigResponse {
  public ElasticsearchDomainConfig $domain_config;
}

class UserPoolId {
}

class AdvancedOptionsStatus {
  public AdvancedOptions $options;
  public OptionStatus $status;
}

class PackageName {
}

class DescribePackagesFilterValues {
}

class DissociatePackageResponse {
  public DomainPackageDetails $domain_package_details;
}

class NextToken {
}

class VPCDerivedInfo {
  public StringList $security_group_ids;
  public string $vpc_id;
  public StringList $subnet_ids;
  public StringList $availability_zones;
}

class AssociatePackageRequest {
  public PackageID $package_id;
  public DomainName $domain_name;
}

class CancelElasticsearchServiceSoftwareUpdateResponse {
  public ServiceSoftwareOptions $service_software_options;
}

class ElasticsearchDomainConfig {
  public AdvancedOptionsStatus $advanced_options;
  public LogPublishingOptionsStatus $log_publishing_options;
  public AdvancedSecurityOptionsStatus $advanced_security_options;
  public SnapshotOptionsStatus $snapshot_options;
  public VPCDerivedInfoStatus $vpc_options;
  public EncryptionAtRestOptionsStatus $encryption_at_rest_options;
  public AccessPoliciesStatus $access_policies;
  public CognitoOptionsStatus $cognito_options;
  public NodeToNodeEncryptionOptionsStatus $node_to_node_encryption_options;
  public DomainEndpointOptionsStatus $domain_endpoint_options;
  public ElasticsearchVersionStatus $elasticsearch_version;
  public ElasticsearchClusterConfigStatus $elasticsearch_cluster_config;
  public EBSOptionsStatus $ebs_options;
}

class ListDomainsForPackageRequest {
  public PackageID $package_id;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListPackagesForDomainResponse {
  public DomainPackageDetailsList $domain_package_details_list;
  public string $next_token;
}

class SnapshotOptions {
  public IntegerClass $automated_snapshot_start_hour;
}

class UpgradeStepsList {
}

class AccessDeniedException {
}

class DomainEndpointOptions {
  public boolean $enforce_https;
  public TLSSecurityPolicy $tls_security_policy;
}

class ElasticsearchDomainStatus {
  public SnapshotOptions $snapshot_options;
  public NodeToNodeEncryptionOptions $node_to_node_encryption_options;
  public AdvancedOptions $advanced_options;
  public DomainId $domain_id;
  public boolean $created;
  public boolean $deleted;
  public ServiceUrl $endpoint;
  public EndpointsMap $endpoints;
  public DomainEndpointOptions $domain_endpoint_options;
  public AdvancedSecurityOptions $advanced_security_options;
  public ARN $arn;
  public boolean $upgrade_processing;
  public EBSOptions $ebs_options;
  public LogPublishingOptions $log_publishing_options;
  public EncryptionAtRestOptions $encryption_at_rest_options;
  public DomainName $domain_name;
  public ElasticsearchClusterConfig $elasticsearch_cluster_config;
  public PolicyDocument $access_policies;
  public VPCDerivedInfo $vpc_options;
  public CognitoOptions $cognito_options;
  public boolean $processing;
  public ElasticsearchVersionString $elasticsearch_version;
  public ServiceSoftwareOptions $service_software_options;
}

class LastUpdated {
}

class LogPublishingOptionsStatus {
  public LogPublishingOptions $options;
  public OptionStatus $status;
}

class PackageSource {
  public S3BucketName $s_3_bucket_name;
  public S3Key $s_3_key;
}

class StorageTypeName {
}

class UpdateElasticsearchDomainConfigRequest {
  public AdvancedOptions $advanced_options;
  public LogPublishingOptions $log_publishing_options;
  public DomainEndpointOptions $domain_endpoint_options;
  public AdvancedSecurityOptionsInput $advanced_security_options;
  public DomainName $domain_name;
  public SnapshotOptions $snapshot_options;
  public CognitoOptions $cognito_options;
  public PolicyDocument $access_policies;
  public ElasticsearchClusterConfig $elasticsearch_cluster_config;
  public EBSOptions $ebs_options;
  public VPCOptions $vpc_options;
}

class ARN {
}

class ESPartitionInstanceType {
}

class CreateElasticsearchDomainResponse {
  public ElasticsearchDomainStatus $domain_status;
}

class CreatePackageResponse {
  public PackageDetails $package_details;
}

class DescribeElasticsearchInstanceTypeLimitsResponse {
  public LimitsByRole $limits_by_role;
}

class GetCompatibleElasticsearchVersionsRequest {
  public DomainName $domain_name;
}

class PackageType {
}

class ReservationToken {
}

class AdditionalLimit {
  public LimitName $limit_name;
  public LimitValueList $limit_values;
}

class CancelElasticsearchServiceSoftwareUpdateRequest {
  public DomainName $domain_name;
}

class VPCOptions {
  public StringList $subnet_ids;
  public StringList $security_group_ids;
}

class ListTagsRequest {
  public ARN $arn;
}

class String {
}

class TagKey {
}

class DescribeElasticsearchDomainRequest {
  public DomainName $domain_name;
}

class ElasticsearchClusterConfigStatus {
  public ElasticsearchClusterConfig $options;
  public OptionStatus $status;
}

class LimitName {
}

class LimitsByRole {
}

class RemoveTagsRequest {
  public ARN $arn;
  public StringList $tag_keys;
}

class RoleArn {
}

class DescribePackagesFilter {
  public DescribePackagesFilterValues $value;
  public DescribePackagesFilterName $name;
}

class Issues {
}

