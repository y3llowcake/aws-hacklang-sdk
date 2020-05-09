<?hh // strict
namespace slack\aws\license-manager;

interface License Manager {
  public function CreateLicenseConfiguration(CreateLicenseConfigurationRequest) Awaitable<Errors\Result<CreateLicenseConfigurationResponse>>;
  public function DeleteLicenseConfiguration(DeleteLicenseConfigurationRequest) Awaitable<Errors\Result<DeleteLicenseConfigurationResponse>>;
  public function GetLicenseConfiguration(GetLicenseConfigurationRequest) Awaitable<Errors\Result<GetLicenseConfigurationResponse>>;
  public function GetServiceSettings(GetServiceSettingsRequest) Awaitable<Errors\Result<GetServiceSettingsResponse>>;
  public function ListAssociationsForLicenseConfiguration(ListAssociationsForLicenseConfigurationRequest) Awaitable<Errors\Result<ListAssociationsForLicenseConfigurationResponse>>;
  public function ListFailuresForLicenseConfigurationOperations(ListFailuresForLicenseConfigurationOperationsRequest) Awaitable<Errors\Result<ListFailuresForLicenseConfigurationOperationsResponse>>;
  public function ListLicenseConfigurations(ListLicenseConfigurationsRequest) Awaitable<Errors\Result<ListLicenseConfigurationsResponse>>;
  public function ListLicenseSpecificationsForResource(ListLicenseSpecificationsForResourceRequest) Awaitable<Errors\Result<ListLicenseSpecificationsForResourceResponse>>;
  public function ListResourceInventory(ListResourceInventoryRequest) Awaitable<Errors\Result<ListResourceInventoryResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ListUsageForLicenseConfiguration(ListUsageForLicenseConfigurationRequest) Awaitable<Errors\Result<ListUsageForLicenseConfigurationResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateLicenseConfiguration(UpdateLicenseConfigurationRequest) Awaitable<Errors\Result<UpdateLicenseConfigurationResponse>>;
  public function UpdateLicenseSpecificationsForResource(UpdateLicenseSpecificationsForResourceRequest) Awaitable<Errors\Result<UpdateLicenseSpecificationsForResourceResponse>>;
  public function UpdateServiceSettings(UpdateServiceSettingsRequest) Awaitable<Errors\Result<UpdateServiceSettingsResponse>>;
}

class AccessDeniedException {
  public Message $message;
}

class AuthorizationException {
  public Message $message;
}

class AutomatedDiscoveryInformation {
  public DateTime $last_run_time;
}

class Boolean {
}

class BoxBoolean {
}

class BoxInteger {
}

class BoxLong {
}

class ConsumedLicenseSummary {
  public BoxLong $consumed_licenses;
  public ResourceType $resource_type;
}

class ConsumedLicenseSummaryList {
}

class CreateLicenseConfigurationRequest {
  public string $description;
  public BoxLong $license_count;
  public BoxBoolean $license_count_hard_limit;
  public LicenseCountingType $license_counting_type;
  public StringList $license_rules;
  public string $name;
  public ProductInformationList $product_information_list;
  public TagList $tags;
}

class CreateLicenseConfigurationResponse {
  public string $license_configuration_arn;
}

class DateTime {
}

class DeleteLicenseConfigurationRequest {
  public string $license_configuration_arn;
}

class DeleteLicenseConfigurationResponse {
}

class FailedDependencyException {
  public Message $message;
}

class Filter {
  public FilterName $name;
  public FilterValues $values;
}

class FilterLimitExceededException {
  public Message $message;
}

class FilterName {
}

class FilterValue {
}

class FilterValues {
}

class Filters {
}

class GetLicenseConfigurationRequest {
  public string $license_configuration_arn;
}

class GetLicenseConfigurationResponse {
  public AutomatedDiscoveryInformation $automated_discovery_information;
  public ConsumedLicenseSummaryList $consumed_license_summary_list;
  public BoxLong $consumed_licenses;
  public string $description;
  public string $license_configuration_arn;
  public string $license_configuration_id;
  public BoxLong $license_count;
  public BoxBoolean $license_count_hard_limit;
  public LicenseCountingType $license_counting_type;
  public StringList $license_rules;
  public ManagedResourceSummaryList $managed_resource_summary_list;
  public string $name;
  public string $owner_account_id;
  public ProductInformationList $product_information_list;
  public string $status;
  public TagList $tags;
}

class GetServiceSettingsRequest {
}

class GetServiceSettingsResponse {
  public BoxBoolean $enable_cross_accounts_discovery;
  public string $license_manager_resource_share_arn;
  public OrganizationConfiguration $organization_configuration;
  public string $s_3_bucket_arn;
  public string $sns_topic_arn;
}

class InvalidParameterValueException {
  public Message $message;
}

class InvalidResourceStateException {
  public Message $message;
}

class InventoryFilter {
  public InventoryFilterCondition $condition;
  public string $name;
  public string $value;
}

class InventoryFilterCondition {
}

class InventoryFilterList {
}

class LicenseConfiguration {
  public AutomatedDiscoveryInformation $automated_discovery_information;
  public ConsumedLicenseSummaryList $consumed_license_summary_list;
  public BoxLong $consumed_licenses;
  public string $description;
  public string $license_configuration_arn;
  public string $license_configuration_id;
  public BoxLong $license_count;
  public BoxBoolean $license_count_hard_limit;
  public LicenseCountingType $license_counting_type;
  public StringList $license_rules;
  public ManagedResourceSummaryList $managed_resource_summary_list;
  public string $name;
  public string $owner_account_id;
  public ProductInformationList $product_information_list;
  public string $status;
}

class LicenseConfigurationAssociation {
  public DateTime $association_time;
  public string $resource_arn;
  public string $resource_owner_id;
  public ResourceType $resource_type;
}

class LicenseConfigurationAssociations {
}

class LicenseConfigurationStatus {
}

class LicenseConfigurationUsage {
  public DateTime $association_time;
  public BoxLong $consumed_licenses;
  public string $resource_arn;
  public string $resource_owner_id;
  public string $resource_status;
  public ResourceType $resource_type;
}

class LicenseConfigurationUsageList {
}

class LicenseConfigurations {
}

class LicenseCountingType {
}

class LicenseOperationFailure {
  public string $error_message;
  public DateTime $failure_time;
  public MetadataList $metadata_list;
  public string $operation_name;
  public string $operation_requested_by;
  public string $resource_arn;
  public string $resource_owner_id;
  public ResourceType $resource_type;
}

class LicenseOperationFailureList {
}

class LicenseSpecification {
  public string $license_configuration_arn;
}

class LicenseSpecifications {
}

class LicenseUsageException {
  public Message $message;
}

class ListAssociationsForLicenseConfigurationRequest {
  public string $license_configuration_arn;
  public BoxInteger $max_results;
  public string $next_token;
}

class ListAssociationsForLicenseConfigurationResponse {
  public LicenseConfigurationAssociations $license_configuration_associations;
  public string $next_token;
}

class ListFailuresForLicenseConfigurationOperationsRequest {
  public string $license_configuration_arn;
  public BoxInteger $max_results;
  public string $next_token;
}

class ListFailuresForLicenseConfigurationOperationsResponse {
  public LicenseOperationFailureList $license_operation_failure_list;
  public string $next_token;
}

class ListLicenseConfigurationsRequest {
  public Filters $filters;
  public StringList $license_configuration_arns;
  public BoxInteger $max_results;
  public string $next_token;
}

class ListLicenseConfigurationsResponse {
  public LicenseConfigurations $license_configurations;
  public string $next_token;
}

class ListLicenseSpecificationsForResourceRequest {
  public BoxInteger $max_results;
  public string $next_token;
  public string $resource_arn;
}

class ListLicenseSpecificationsForResourceResponse {
  public LicenseSpecifications $license_specifications;
  public string $next_token;
}

class ListResourceInventoryRequest {
  public InventoryFilterList $filters;
  public BoxInteger $max_results;
  public string $next_token;
}

class ListResourceInventoryResponse {
  public string $next_token;
  public ResourceInventoryList $resource_inventory_list;
}

class ListTagsForResourceRequest {
  public string $resource_arn;
}

class ListTagsForResourceResponse {
  public TagList $tags;
}

class ListUsageForLicenseConfigurationRequest {
  public Filters $filters;
  public string $license_configuration_arn;
  public BoxInteger $max_results;
  public string $next_token;
}

class ListUsageForLicenseConfigurationResponse {
  public LicenseConfigurationUsageList $license_configuration_usage_list;
  public string $next_token;
}

class ManagedResourceSummary {
  public BoxLong $association_count;
  public ResourceType $resource_type;
}

class ManagedResourceSummaryList {
}

class Message {
}

class Metadata {
  public string $name;
  public string $value;
}

class MetadataList {
}

class OrganizationConfiguration {
  public boolean $enable_integration;
}

class ProductInformation {
  public ProductInformationFilterList $product_information_filter_list;
  public string $resource_type;
}

class ProductInformationFilter {
  public string $product_information_filter_comparator;
  public string $product_information_filter_name;
  public StringList $product_information_filter_value;
}

class ProductInformationFilterList {
}

class ProductInformationList {
}

class RateLimitExceededException {
  public Message $message;
}

class ResourceInventory {
  public string $platform;
  public string $platform_version;
  public string $resource_arn;
  public string $resource_id;
  public string $resource_owning_account_id;
  public ResourceType $resource_type;
}

class ResourceInventoryList {
}

class ResourceLimitExceededException {
  public Message $message;
}

class ResourceType {
}

class ServerInternalException {
  public Message $message;
}

class String {
}

class StringList {
}

class Tag {
  public string $key;
  public string $value;
}

class TagKeyList {
}

class TagList {
}

class TagResourceRequest {
  public string $resource_arn;
  public TagList $tags;
}

class TagResourceResponse {
}

class UntagResourceRequest {
  public string $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceResponse {
}

class UpdateLicenseConfigurationRequest {
  public string $description;
  public string $license_configuration_arn;
  public LicenseConfigurationStatus $license_configuration_status;
  public BoxLong $license_count;
  public BoxBoolean $license_count_hard_limit;
  public StringList $license_rules;
  public string $name;
  public ProductInformationList $product_information_list;
}

class UpdateLicenseConfigurationResponse {
}

class UpdateLicenseSpecificationsForResourceRequest {
  public LicenseSpecifications $add_license_specifications;
  public LicenseSpecifications $remove_license_specifications;
  public string $resource_arn;
}

class UpdateLicenseSpecificationsForResourceResponse {
}

class UpdateServiceSettingsRequest {
  public BoxBoolean $enable_cross_accounts_discovery;
  public OrganizationConfiguration $organization_configuration;
  public string $s_3_bucket_arn;
  public string $sns_topic_arn;
}

class UpdateServiceSettingsResponse {
}

