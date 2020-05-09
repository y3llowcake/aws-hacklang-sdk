<?hh // strict
namespace slack\aws\es;

interface Elasticsearch Service {
  public function AddTags(AddTagsRequest) Awaitable<Errors\Error>;
  public function AssociatePackage(AssociatePackageRequest) Awaitable<Errors\Result<AssociatePackageResponse>>;
  public function CancelElasticsearchServiceSoftwareUpdate(CancelElasticsearchServiceSoftwareUpdateRequest) Awaitable<Errors\Result<CancelElasticsearchServiceSoftwareUpdateResponse>>;
  public function CreateElasticsearchDomain(CreateElasticsearchDomainRequest) Awaitable<Errors\Result<CreateElasticsearchDomainResponse>>;
  public function CreatePackage(CreatePackageRequest) Awaitable<Errors\Result<CreatePackageResponse>>;
  public function DeleteElasticsearchDomain(DeleteElasticsearchDomainRequest) Awaitable<Errors\Result<DeleteElasticsearchDomainResponse>>;
  public function DeleteElasticsearchServiceRole() Awaitable<Errors\Error>;
  public function DeletePackage(DeletePackageRequest) Awaitable<Errors\Result<DeletePackageResponse>>;
  public function DescribeElasticsearchDomain(DescribeElasticsearchDomainRequest) Awaitable<Errors\Result<DescribeElasticsearchDomainResponse>>;
  public function DescribeElasticsearchDomainConfig(DescribeElasticsearchDomainConfigRequest) Awaitable<Errors\Result<DescribeElasticsearchDomainConfigResponse>>;
  public function DescribeElasticsearchDomains(DescribeElasticsearchDomainsRequest) Awaitable<Errors\Result<DescribeElasticsearchDomainsResponse>>;
  public function DescribeElasticsearchInstanceTypeLimits(DescribeElasticsearchInstanceTypeLimitsRequest) Awaitable<Errors\Result<DescribeElasticsearchInstanceTypeLimitsResponse>>;
  public function DescribePackages(DescribePackagesRequest) Awaitable<Errors\Result<DescribePackagesResponse>>;
  public function DescribeReservedElasticsearchInstanceOfferings(DescribeReservedElasticsearchInstanceOfferingsRequest) Awaitable<Errors\Result<DescribeReservedElasticsearchInstanceOfferingsResponse>>;
  public function DescribeReservedElasticsearchInstances(DescribeReservedElasticsearchInstancesRequest) Awaitable<Errors\Result<DescribeReservedElasticsearchInstancesResponse>>;
  public function DissociatePackage(DissociatePackageRequest) Awaitable<Errors\Result<DissociatePackageResponse>>;
  public function GetCompatibleElasticsearchVersions(GetCompatibleElasticsearchVersionsRequest) Awaitable<Errors\Result<GetCompatibleElasticsearchVersionsResponse>>;
  public function GetUpgradeHistory(GetUpgradeHistoryRequest) Awaitable<Errors\Result<GetUpgradeHistoryResponse>>;
  public function GetUpgradeStatus(GetUpgradeStatusRequest) Awaitable<Errors\Result<GetUpgradeStatusResponse>>;
  public function ListDomainNames() Awaitable<Errors\Result<ListDomainNamesResponse>>;
  public function ListDomainsForPackage(ListDomainsForPackageRequest) Awaitable<Errors\Result<ListDomainsForPackageResponse>>;
  public function ListElasticsearchInstanceTypes(ListElasticsearchInstanceTypesRequest) Awaitable<Errors\Result<ListElasticsearchInstanceTypesResponse>>;
  public function ListElasticsearchVersions(ListElasticsearchVersionsRequest) Awaitable<Errors\Result<ListElasticsearchVersionsResponse>>;
  public function ListPackagesForDomain(ListPackagesForDomainRequest) Awaitable<Errors\Result<ListPackagesForDomainResponse>>;
  public function ListTags(ListTagsRequest) Awaitable<Errors\Result<ListTagsResponse>>;
  public function PurchaseReservedElasticsearchInstanceOffering(PurchaseReservedElasticsearchInstanceOfferingRequest) Awaitable<Errors\Result<PurchaseReservedElasticsearchInstanceOfferingResponse>>;
  public function RemoveTags(RemoveTagsRequest) Awaitable<Errors\Error>;
  public function StartElasticsearchServiceSoftwareUpdate(StartElasticsearchServiceSoftwareUpdateRequest) Awaitable<Errors\Result<StartElasticsearchServiceSoftwareUpdateResponse>>;
  public function UpdateElasticsearchDomainConfig(UpdateElasticsearchDomainConfigRequest) Awaitable<Errors\Result<UpdateElasticsearchDomainConfigResponse>>;
  public function UpgradeElasticsearchDomain(UpgradeElasticsearchDomainRequest) Awaitable<Errors\Result<UpgradeElasticsearchDomainResponse>>;
}

class ARN {
}

class AccessDeniedException {
}

class AccessPoliciesStatus {
  public PolicyDocument $options;
  public OptionStatus $status;
}

class AddTagsRequest {
  public ARN $arn;
  public TagList $tag_list;
}

class AdditionalLimit {
  public LimitName $limit_name;
  public LimitValueList $limit_values;
}

class AdditionalLimitList {
}

class AdvancedOptions {
}

class AdvancedOptionsStatus {
  public AdvancedOptions $options;
  public OptionStatus $status;
}

class AdvancedSecurityOptions {
  public boolean $enabled;
  public boolean $internal_user_database_enabled;
}

class AdvancedSecurityOptionsInput {
  public boolean $enabled;
  public boolean $internal_user_database_enabled;
  public MasterUserOptions $master_user_options;
}

class AdvancedSecurityOptionsStatus {
  public AdvancedSecurityOptions $options;
  public OptionStatus $status;
}

class AssociatePackageRequest {
  public DomainName $domain_name;
  public PackageID $package_id;
}

class AssociatePackageResponse {
  public DomainPackageDetails $domain_package_details;
}

class BaseException {
  public ErrorMessage $message;
}

class Boolean {
}

class CancelElasticsearchServiceSoftwareUpdateRequest {
  public DomainName $domain_name;
}

class CancelElasticsearchServiceSoftwareUpdateResponse {
  public ServiceSoftwareOptions $service_software_options;
}

class CloudWatchLogsLogGroupArn {
}

class CognitoOptions {
  public boolean $enabled;
  public IdentityPoolId $identity_pool_id;
  public RoleArn $role_arn;
  public UserPoolId $user_pool_id;
}

class CognitoOptionsStatus {
  public CognitoOptions $options;
  public OptionStatus $status;
}

class CompatibleElasticsearchVersionsList {
}

class CompatibleVersionsMap {
  public ElasticsearchVersionString $source_version;
  public ElasticsearchVersionList $target_versions;
}

class ConflictException {
}

class CreateElasticsearchDomainRequest {
  public PolicyDocument $access_policies;
  public AdvancedOptions $advanced_options;
  public AdvancedSecurityOptionsInput $advanced_security_options;
  public CognitoOptions $cognito_options;
  public DomainEndpointOptions $domain_endpoint_options;
  public DomainName $domain_name;
  public EBSOptions $ebs_options;
  public ElasticsearchClusterConfig $elasticsearch_cluster_config;
  public ElasticsearchVersionString $elasticsearch_version;
  public EncryptionAtRestOptions $encryption_at_rest_options;
  public LogPublishingOptions $log_publishing_options;
  public NodeToNodeEncryptionOptions $node_to_node_encryption_options;
  public SnapshotOptions $snapshot_options;
  public VPCOptions $vpc_options;
}

class CreateElasticsearchDomainResponse {
  public ElasticsearchDomainStatus $domain_status;
}

class CreatePackageRequest {
  public PackageDescription $package_description;
  public PackageName $package_name;
  public PackageSource $package_source;
  public PackageType $package_type;
}

class CreatePackageResponse {
  public PackageDetails $package_details;
}

class CreatedAt {
}

class DeleteElasticsearchDomainRequest {
  public DomainName $domain_name;
}

class DeleteElasticsearchDomainResponse {
  public ElasticsearchDomainStatus $domain_status;
}

class DeletePackageRequest {
  public PackageID $package_id;
}

class DeletePackageResponse {
  public PackageDetails $package_details;
}

class DeploymentCloseDateTimeStamp {
}

class DeploymentStatus {
}

class DescribeElasticsearchDomainConfigRequest {
  public DomainName $domain_name;
}

class DescribeElasticsearchDomainConfigResponse {
  public ElasticsearchDomainConfig $domain_config;
}

class DescribeElasticsearchDomainRequest {
  public DomainName $domain_name;
}

class DescribeElasticsearchDomainResponse {
  public ElasticsearchDomainStatus $domain_status;
}

class DescribeElasticsearchDomainsRequest {
  public DomainNameList $domain_names;
}

class DescribeElasticsearchDomainsResponse {
  public ElasticsearchDomainStatusList $domain_status_list;
}

class DescribeElasticsearchInstanceTypeLimitsRequest {
  public DomainName $domain_name;
  public ElasticsearchVersionString $elasticsearch_version;
  public ESPartitionInstanceType $instance_type;
}

class DescribeElasticsearchInstanceTypeLimitsResponse {
  public LimitsByRole $limits_by_role;
}

class DescribePackagesFilter {
  public DescribePackagesFilterName $name;
  public DescribePackagesFilterValues $value;
}

class DescribePackagesFilterList {
}

class DescribePackagesFilterName {
}

class DescribePackagesFilterValue {
}

class DescribePackagesFilterValues {
}

class DescribePackagesRequest {
  public DescribePackagesFilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class DescribePackagesResponse {
  public string $next_token;
  public PackageDetailsList $package_details_list;
}

class DescribeReservedElasticsearchInstanceOfferingsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public GUID $reserved_elasticsearch_instance_offering_id;
}

class DescribeReservedElasticsearchInstanceOfferingsResponse {
  public NextToken $next_token;
  public ReservedElasticsearchInstanceOfferingList $reserved_elasticsearch_instance_offerings;
}

class DescribeReservedElasticsearchInstancesRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public GUID $reserved_elasticsearch_instance_id;
}

class DescribeReservedElasticsearchInstancesResponse {
  public string $next_token;
  public ReservedElasticsearchInstanceList $reserved_elasticsearch_instances;
}

class DisabledOperationException {
}

class DissociatePackageRequest {
  public DomainName $domain_name;
  public PackageID $package_id;
}

class DissociatePackageResponse {
  public DomainPackageDetails $domain_package_details;
}

class DomainEndpointOptions {
  public boolean $enforce_https;
  public TLSSecurityPolicy $tls_security_policy;
}

class DomainEndpointOptionsStatus {
  public DomainEndpointOptions $options;
  public OptionStatus $status;
}

class DomainId {
}

class DomainInfo {
  public DomainName $domain_name;
}

class DomainInfoList {
}

class DomainName {
}

class DomainNameList {
}

class DomainPackageDetails {
  public DomainName $domain_name;
  public DomainPackageStatus $domain_package_status;
  public ErrorDetails $error_details;
  public LastUpdated $last_updated;
  public PackageID $package_id;
  public PackageName $package_name;
  public PackageType $package_type;
  public ReferencePath $reference_path;
}

class DomainPackageDetailsList {
}

class DomainPackageStatus {
}

class Double {
}

class EBSOptions {
  public boolean $ebs_enabled;
  public IntegerClass $iops;
  public IntegerClass $volume_size;
  public VolumeType $volume_type;
}

class EBSOptionsStatus {
  public EBSOptions $options;
  public OptionStatus $status;
}

class ESPartitionInstanceType {
}

class ESWarmPartitionInstanceType {
}

class ElasticsearchClusterConfig {
  public IntegerClass $dedicated_master_count;
  public boolean $dedicated_master_enabled;
  public ESPartitionInstanceType $dedicated_master_type;
  public IntegerClass $instance_count;
  public ESPartitionInstanceType $instance_type;
  public IntegerClass $warm_count;
  public boolean $warm_enabled;
  public ESWarmPartitionInstanceType $warm_type;
  public ZoneAwarenessConfig $zone_awareness_config;
  public boolean $zone_awareness_enabled;
}

class ElasticsearchClusterConfigStatus {
  public ElasticsearchClusterConfig $options;
  public OptionStatus $status;
}

class ElasticsearchDomainConfig {
  public AccessPoliciesStatus $access_policies;
  public AdvancedOptionsStatus $advanced_options;
  public AdvancedSecurityOptionsStatus $advanced_security_options;
  public CognitoOptionsStatus $cognito_options;
  public DomainEndpointOptionsStatus $domain_endpoint_options;
  public EBSOptionsStatus $ebs_options;
  public ElasticsearchClusterConfigStatus $elasticsearch_cluster_config;
  public ElasticsearchVersionStatus $elasticsearch_version;
  public EncryptionAtRestOptionsStatus $encryption_at_rest_options;
  public LogPublishingOptionsStatus $log_publishing_options;
  public NodeToNodeEncryptionOptionsStatus $node_to_node_encryption_options;
  public SnapshotOptionsStatus $snapshot_options;
  public VPCDerivedInfoStatus $vpc_options;
}

class ElasticsearchDomainStatus {
  public ARN $arn;
  public PolicyDocument $access_policies;
  public AdvancedOptions $advanced_options;
  public AdvancedSecurityOptions $advanced_security_options;
  public CognitoOptions $cognito_options;
  public boolean $created;
  public boolean $deleted;
  public DomainEndpointOptions $domain_endpoint_options;
  public DomainId $domain_id;
  public DomainName $domain_name;
  public EBSOptions $ebs_options;
  public ElasticsearchClusterConfig $elasticsearch_cluster_config;
  public ElasticsearchVersionString $elasticsearch_version;
  public EncryptionAtRestOptions $encryption_at_rest_options;
  public ServiceUrl $endpoint;
  public EndpointsMap $endpoints;
  public LogPublishingOptions $log_publishing_options;
  public NodeToNodeEncryptionOptions $node_to_node_encryption_options;
  public boolean $processing;
  public ServiceSoftwareOptions $service_software_options;
  public SnapshotOptions $snapshot_options;
  public boolean $upgrade_processing;
  public VPCDerivedInfo $vpc_options;
}

class ElasticsearchDomainStatusList {
}

class ElasticsearchInstanceTypeList {
}

class ElasticsearchVersionList {
}

class ElasticsearchVersionStatus {
  public ElasticsearchVersionString $options;
  public OptionStatus $status;
}

class ElasticsearchVersionString {
}

class EncryptionAtRestOptions {
  public boolean $enabled;
  public KmsKeyId $kms_key_id;
}

class EncryptionAtRestOptionsStatus {
  public EncryptionAtRestOptions $options;
  public OptionStatus $status;
}

class EndpointsMap {
}

class ErrorDetails {
  public ErrorMessage $error_message;
  public ErrorType $error_type;
}

class ErrorMessage {
}

class ErrorType {
}

class GUID {
}

class GetCompatibleElasticsearchVersionsRequest {
  public DomainName $domain_name;
}

class GetCompatibleElasticsearchVersionsResponse {
  public CompatibleElasticsearchVersionsList $compatible_elasticsearch_versions;
}

class GetUpgradeHistoryRequest {
  public DomainName $domain_name;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class GetUpgradeHistoryResponse {
  public string $next_token;
  public UpgradeHistoryList $upgrade_histories;
}

class GetUpgradeStatusRequest {
  public DomainName $domain_name;
}

class GetUpgradeStatusResponse {
  public UpgradeStatus $step_status;
  public UpgradeName $upgrade_name;
  public UpgradeStep $upgrade_step;
}

class IdentityPoolId {
}

class InstanceCount {
}

class InstanceCountLimits {
  public MaximumInstanceCount $maximum_instance_count;
  public MinimumInstanceCount $minimum_instance_count;
}

class InstanceLimits {
  public InstanceCountLimits $instance_count_limits;
}

class InstanceRole {
}

class Integer {
}

class IntegerClass {
}

class InternalException {
}

class InvalidTypeException {
}

class Issue {
}

class Issues {
}

class KmsKeyId {
}

class LastUpdated {
}

class LimitExceededException {
}

class LimitName {
}

class LimitValue {
}

class LimitValueList {
}

class Limits {
  public AdditionalLimitList $additional_limits;
  public InstanceLimits $instance_limits;
  public StorageTypeList $storage_types;
}

class LimitsByRole {
}

class ListDomainNamesResponse {
  public DomainInfoList $domain_names;
}

class ListDomainsForPackageRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public PackageID $package_id;
}

class ListDomainsForPackageResponse {
  public DomainPackageDetailsList $domain_package_details_list;
  public string $next_token;
}

class ListElasticsearchInstanceTypesRequest {
  public DomainName $domain_name;
  public ElasticsearchVersionString $elasticsearch_version;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListElasticsearchInstanceTypesResponse {
  public ElasticsearchInstanceTypeList $elasticsearch_instance_types;
  public NextToken $next_token;
}

class ListElasticsearchVersionsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListElasticsearchVersionsResponse {
  public ElasticsearchVersionList $elasticsearch_versions;
  public NextToken $next_token;
}

class ListPackagesForDomainRequest {
  public DomainName $domain_name;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListPackagesForDomainResponse {
  public DomainPackageDetailsList $domain_package_details_list;
  public string $next_token;
}

class ListTagsRequest {
  public ARN $arn;
}

class ListTagsResponse {
  public TagList $tag_list;
}

class LogPublishingOption {
  public CloudWatchLogsLogGroupArn $cloud_watch_logs_log_group_arn;
  public boolean $enabled;
}

class LogPublishingOptions {
}

class LogPublishingOptionsStatus {
  public LogPublishingOptions $options;
  public OptionStatus $status;
}

class LogType {
}

class MasterUserOptions {
  public ARN $master_user_arn;
  public Username $master_user_name;
  public Password $master_user_password;
}

class MaxResults {
}

class MaximumInstanceCount {
}

class MinimumInstanceCount {
}

class NextToken {
}

class NodeToNodeEncryptionOptions {
  public boolean $enabled;
}

class NodeToNodeEncryptionOptionsStatus {
  public NodeToNodeEncryptionOptions $options;
  public OptionStatus $status;
}

class OptionState {
}

class OptionStatus {
  public UpdateTimestamp $creation_date;
  public boolean $pending_deletion;
  public OptionState $state;
  public UpdateTimestamp $update_date;
  public UIntValue $update_version;
}

class PackageDescription {
}

class PackageDetails {
  public CreatedAt $created_at;
  public ErrorDetails $error_details;
  public PackageDescription $package_description;
  public PackageID $package_id;
  public PackageName $package_name;
  public PackageStatus $package_status;
  public PackageType $package_type;
}

class PackageDetailsList {
}

class PackageID {
}

class PackageName {
}

class PackageSource {
  public S3BucketName $s_3_bucket_name;
  public S3Key $s_3_key;
}

class PackageStatus {
}

class PackageType {
}

class Password {
}

class PolicyDocument {
}

class PurchaseReservedElasticsearchInstanceOfferingRequest {
  public InstanceCount $instance_count;
  public ReservationToken $reservation_name;
  public GUID $reserved_elasticsearch_instance_offering_id;
}

class PurchaseReservedElasticsearchInstanceOfferingResponse {
  public ReservationToken $reservation_name;
  public GUID $reserved_elasticsearch_instance_id;
}

class RecurringCharge {
  public Double $recurring_charge_amount;
  public string $recurring_charge_frequency;
}

class RecurringChargeList {
}

class ReferencePath {
}

class RemoveTagsRequest {
  public ARN $arn;
  public StringList $tag_keys;
}

class ReservationToken {
}

class ReservedElasticsearchInstance {
  public string $currency_code;
  public int $duration;
  public int $elasticsearch_instance_count;
  public ESPartitionInstanceType $elasticsearch_instance_type;
  public Double $fixed_price;
  public ReservedElasticsearchInstancePaymentOption $payment_option;
  public RecurringChargeList $recurring_charges;
  public ReservationToken $reservation_name;
  public GUID $reserved_elasticsearch_instance_id;
  public string $reserved_elasticsearch_instance_offering_id;
  public UpdateTimestamp $start_time;
  public string $state;
  public Double $usage_price;
}

class ReservedElasticsearchInstanceList {
}

class ReservedElasticsearchInstanceOffering {
  public string $currency_code;
  public int $duration;
  public ESPartitionInstanceType $elasticsearch_instance_type;
  public Double $fixed_price;
  public ReservedElasticsearchInstancePaymentOption $payment_option;
  public RecurringChargeList $recurring_charges;
  public GUID $reserved_elasticsearch_instance_offering_id;
  public Double $usage_price;
}

class ReservedElasticsearchInstanceOfferingList {
}

class ReservedElasticsearchInstancePaymentOption {
}

class ResourceAlreadyExistsException {
}

class ResourceNotFoundException {
}

class RoleArn {
}

class S3BucketName {
}

class S3Key {
}

class ServiceSoftwareOptions {
  public DeploymentCloseDateTimeStamp $automated_update_date;
  public boolean $cancellable;
  public string $current_version;
  public string $description;
  public string $new_version;
  public boolean $optional_deployment;
  public boolean $update_available;
  public DeploymentStatus $update_status;
}

class ServiceUrl {
}

class SnapshotOptions {
  public IntegerClass $automated_snapshot_start_hour;
}

class SnapshotOptionsStatus {
  public SnapshotOptions $options;
  public OptionStatus $status;
}

class StartElasticsearchServiceSoftwareUpdateRequest {
  public DomainName $domain_name;
}

class StartElasticsearchServiceSoftwareUpdateResponse {
  public ServiceSoftwareOptions $service_software_options;
}

class StartTimestamp {
}

class StorageSubTypeName {
}

class StorageType {
  public StorageSubTypeName $storage_sub_type_name;
  public StorageTypeLimitList $storage_type_limits;
  public StorageTypeName $storage_type_name;
}

class StorageTypeLimit {
  public LimitName $limit_name;
  public LimitValueList $limit_values;
}

class StorageTypeLimitList {
}

class StorageTypeList {
}

class StorageTypeName {
}

class String {
}

class StringList {
}

class TLSSecurityPolicy {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKey {
}

class TagList {
}

class TagValue {
}

class UIntValue {
}

class UpdateElasticsearchDomainConfigRequest {
  public PolicyDocument $access_policies;
  public AdvancedOptions $advanced_options;
  public AdvancedSecurityOptionsInput $advanced_security_options;
  public CognitoOptions $cognito_options;
  public DomainEndpointOptions $domain_endpoint_options;
  public DomainName $domain_name;
  public EBSOptions $ebs_options;
  public ElasticsearchClusterConfig $elasticsearch_cluster_config;
  public LogPublishingOptions $log_publishing_options;
  public SnapshotOptions $snapshot_options;
  public VPCOptions $vpc_options;
}

class UpdateElasticsearchDomainConfigResponse {
  public ElasticsearchDomainConfig $domain_config;
}

class UpdateTimestamp {
}

class UpgradeElasticsearchDomainRequest {
  public DomainName $domain_name;
  public boolean $perform_check_only;
  public ElasticsearchVersionString $target_version;
}

class UpgradeElasticsearchDomainResponse {
  public DomainName $domain_name;
  public boolean $perform_check_only;
  public ElasticsearchVersionString $target_version;
}

class UpgradeHistory {
  public StartTimestamp $start_timestamp;
  public UpgradeStepsList $steps_list;
  public UpgradeName $upgrade_name;
  public UpgradeStatus $upgrade_status;
}

class UpgradeHistoryList {
}

class UpgradeName {
}

class UpgradeStatus {
}

class UpgradeStep {
}

class UpgradeStepItem {
  public Issues $issues;
  public Double $progress_percent;
  public UpgradeStep $upgrade_step;
  public UpgradeStatus $upgrade_step_status;
}

class UpgradeStepsList {
}

class UserPoolId {
}

class Username {
}

class VPCDerivedInfo {
  public StringList $availability_zones;
  public StringList $security_group_ids;
  public StringList $subnet_ids;
  public string $vpc_id;
}

class VPCDerivedInfoStatus {
  public VPCDerivedInfo $options;
  public OptionStatus $status;
}

class VPCOptions {
  public StringList $security_group_ids;
  public StringList $subnet_ids;
}

class ValidationException {
}

class VolumeType {
}

class ZoneAwarenessConfig {
  public IntegerClass $availability_zone_count;
}

