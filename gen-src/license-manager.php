<?hh // strict
namespace slack\aws\license-manager;

interface License Manager {
  public function CreateLicenseConfiguration(CreateLicenseConfigurationRequest): Awaitable<Errors\Result<CreateLicenseConfigurationResponse>>;
  public function DeleteLicenseConfiguration(DeleteLicenseConfigurationRequest): Awaitable<Errors\Result<DeleteLicenseConfigurationResponse>>;
  public function GetLicenseConfiguration(GetLicenseConfigurationRequest): Awaitable<Errors\Result<GetLicenseConfigurationResponse>>;
  public function GetServiceSettings(GetServiceSettingsRequest): Awaitable<Errors\Result<GetServiceSettingsResponse>>;
  public function ListAssociationsForLicenseConfiguration(ListAssociationsForLicenseConfigurationRequest): Awaitable<Errors\Result<ListAssociationsForLicenseConfigurationResponse>>;
  public function ListFailuresForLicenseConfigurationOperations(ListFailuresForLicenseConfigurationOperationsRequest): Awaitable<Errors\Result<ListFailuresForLicenseConfigurationOperationsResponse>>;
  public function ListLicenseConfigurations(ListLicenseConfigurationsRequest): Awaitable<Errors\Result<ListLicenseConfigurationsResponse>>;
  public function ListLicenseSpecificationsForResource(ListLicenseSpecificationsForResourceRequest): Awaitable<Errors\Result<ListLicenseSpecificationsForResourceResponse>>;
  public function ListResourceInventory(ListResourceInventoryRequest): Awaitable<Errors\Result<ListResourceInventoryResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ListUsageForLicenseConfiguration(ListUsageForLicenseConfigurationRequest): Awaitable<Errors\Result<ListUsageForLicenseConfigurationResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateLicenseConfiguration(UpdateLicenseConfigurationRequest): Awaitable<Errors\Result<UpdateLicenseConfigurationResponse>>;
  public function UpdateLicenseSpecificationsForResource(UpdateLicenseSpecificationsForResourceRequest): Awaitable<Errors\Result<UpdateLicenseSpecificationsForResourceResponse>>;
  public function UpdateServiceSettings(UpdateServiceSettingsRequest): Awaitable<Errors\Result<UpdateServiceSettingsResponse>>;
}

class AccessDeniedException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class AuthorizationException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class AutomatedDiscoveryInformation {
  public DateTime $last_run_time;

  public function __construct(shape(
  ?'last_run_time' => DateTime,
  ) $s = shape()) {
    $this->last_run_time = $last_run_time ?? 0;
  }
}

type Boolean = bool;

type BoxBoolean = bool;

type BoxInteger = int;

type BoxLong = int;

class ConsumedLicenseSummary {
  public BoxLong $consumed_licenses;
  public ResourceType $resource_type;

  public function __construct(shape(
  ?'consumed_licenses' => BoxLong,
  ?'resource_type' => ResourceType,
  ) $s = shape()) {
    $this->consumed_licenses = $consumed_licenses ?? 0;
    $this->resource_type = $resource_type ?? "";
  }
}

type ConsumedLicenseSummaryList = vec<ConsumedLicenseSummary>;

class CreateLicenseConfigurationRequest {
  public string $description;
  public BoxLong $license_count;
  public BoxBoolean $license_count_hard_limit;
  public LicenseCountingType $license_counting_type;
  public StringList $license_rules;
  public string $name;
  public ProductInformationList $product_information_list;
  public TagList $tags;

  public function __construct(shape(
  ?'description' => string,
  ?'license_count' => BoxLong,
  ?'license_count_hard_limit' => BoxBoolean,
  ?'license_counting_type' => LicenseCountingType,
  ?'license_rules' => StringList,
  ?'name' => string,
  ?'product_information_list' => ProductInformationList,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->license_count = $license_count ?? 0;
    $this->license_count_hard_limit = $license_count_hard_limit ?? false;
    $this->license_counting_type = $license_counting_type ?? "";
    $this->license_rules = $license_rules ?? [];
    $this->name = $name ?? "";
    $this->product_information_list = $product_information_list ?? [];
    $this->tags = $tags ?? [];
  }
}

class CreateLicenseConfigurationResponse {
  public string $license_configuration_arn;

  public function __construct(shape(
  ?'license_configuration_arn' => string,
  ) $s = shape()) {
    $this->license_configuration_arn = $license_configuration_arn ?? "";
  }
}

type DateTime = int;

class DeleteLicenseConfigurationRequest {
  public string $license_configuration_arn;

  public function __construct(shape(
  ?'license_configuration_arn' => string,
  ) $s = shape()) {
    $this->license_configuration_arn = $license_configuration_arn ?? "";
  }
}

class DeleteLicenseConfigurationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class FailedDependencyException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class Filter {
  public FilterName $name;
  public FilterValues $values;

  public function __construct(shape(
  ?'name' => FilterName,
  ?'values' => FilterValues,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->values = $values ?? [];
  }
}

class FilterLimitExceededException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type FilterName = string;

type FilterValue = string;

type FilterValues = vec<FilterValue>;

type Filters = vec<Filter>;

class GetLicenseConfigurationRequest {
  public string $license_configuration_arn;

  public function __construct(shape(
  ?'license_configuration_arn' => string,
  ) $s = shape()) {
    $this->license_configuration_arn = $license_configuration_arn ?? "";
  }
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

  public function __construct(shape(
  ?'automated_discovery_information' => AutomatedDiscoveryInformation,
  ?'consumed_license_summary_list' => ConsumedLicenseSummaryList,
  ?'consumed_licenses' => BoxLong,
  ?'description' => string,
  ?'license_configuration_arn' => string,
  ?'license_configuration_id' => string,
  ?'license_count' => BoxLong,
  ?'license_count_hard_limit' => BoxBoolean,
  ?'license_counting_type' => LicenseCountingType,
  ?'license_rules' => StringList,
  ?'managed_resource_summary_list' => ManagedResourceSummaryList,
  ?'name' => string,
  ?'owner_account_id' => string,
  ?'product_information_list' => ProductInformationList,
  ?'status' => string,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->automated_discovery_information = $automated_discovery_information ?? null;
    $this->consumed_license_summary_list = $consumed_license_summary_list ?? [];
    $this->consumed_licenses = $consumed_licenses ?? 0;
    $this->description = $description ?? "";
    $this->license_configuration_arn = $license_configuration_arn ?? "";
    $this->license_configuration_id = $license_configuration_id ?? "";
    $this->license_count = $license_count ?? 0;
    $this->license_count_hard_limit = $license_count_hard_limit ?? false;
    $this->license_counting_type = $license_counting_type ?? "";
    $this->license_rules = $license_rules ?? [];
    $this->managed_resource_summary_list = $managed_resource_summary_list ?? [];
    $this->name = $name ?? "";
    $this->owner_account_id = $owner_account_id ?? "";
    $this->product_information_list = $product_information_list ?? [];
    $this->status = $status ?? "";
    $this->tags = $tags ?? [];
  }
}

class GetServiceSettingsRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetServiceSettingsResponse {
  public BoxBoolean $enable_cross_accounts_discovery;
  public string $license_manager_resource_share_arn;
  public OrganizationConfiguration $organization_configuration;
  public string $s_3_bucket_arn;
  public string $sns_topic_arn;

  public function __construct(shape(
  ?'enable_cross_accounts_discovery' => BoxBoolean,
  ?'license_manager_resource_share_arn' => string,
  ?'organization_configuration' => OrganizationConfiguration,
  ?'s_3_bucket_arn' => string,
  ?'sns_topic_arn' => string,
  ) $s = shape()) {
    $this->enable_cross_accounts_discovery = $enable_cross_accounts_discovery ?? false;
    $this->license_manager_resource_share_arn = $license_manager_resource_share_arn ?? "";
    $this->organization_configuration = $organization_configuration ?? null;
    $this->s_3_bucket_arn = $s_3_bucket_arn ?? "";
    $this->sns_topic_arn = $sns_topic_arn ?? "";
  }
}

class InvalidParameterValueException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidResourceStateException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InventoryFilter {
  public InventoryFilterCondition $condition;
  public string $name;
  public string $value;

  public function __construct(shape(
  ?'condition' => InventoryFilterCondition,
  ?'name' => string,
  ?'value' => string,
  ) $s = shape()) {
    $this->condition = $condition ?? "";
    $this->name = $name ?? "";
    $this->value = $value ?? "";
  }
}

type InventoryFilterCondition = string;

type InventoryFilterList = vec<InventoryFilter>;

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

  public function __construct(shape(
  ?'automated_discovery_information' => AutomatedDiscoveryInformation,
  ?'consumed_license_summary_list' => ConsumedLicenseSummaryList,
  ?'consumed_licenses' => BoxLong,
  ?'description' => string,
  ?'license_configuration_arn' => string,
  ?'license_configuration_id' => string,
  ?'license_count' => BoxLong,
  ?'license_count_hard_limit' => BoxBoolean,
  ?'license_counting_type' => LicenseCountingType,
  ?'license_rules' => StringList,
  ?'managed_resource_summary_list' => ManagedResourceSummaryList,
  ?'name' => string,
  ?'owner_account_id' => string,
  ?'product_information_list' => ProductInformationList,
  ?'status' => string,
  ) $s = shape()) {
    $this->automated_discovery_information = $automated_discovery_information ?? null;
    $this->consumed_license_summary_list = $consumed_license_summary_list ?? [];
    $this->consumed_licenses = $consumed_licenses ?? 0;
    $this->description = $description ?? "";
    $this->license_configuration_arn = $license_configuration_arn ?? "";
    $this->license_configuration_id = $license_configuration_id ?? "";
    $this->license_count = $license_count ?? 0;
    $this->license_count_hard_limit = $license_count_hard_limit ?? false;
    $this->license_counting_type = $license_counting_type ?? "";
    $this->license_rules = $license_rules ?? [];
    $this->managed_resource_summary_list = $managed_resource_summary_list ?? [];
    $this->name = $name ?? "";
    $this->owner_account_id = $owner_account_id ?? "";
    $this->product_information_list = $product_information_list ?? [];
    $this->status = $status ?? "";
  }
}

class LicenseConfigurationAssociation {
  public DateTime $association_time;
  public string $resource_arn;
  public string $resource_owner_id;
  public ResourceType $resource_type;

  public function __construct(shape(
  ?'association_time' => DateTime,
  ?'resource_arn' => string,
  ?'resource_owner_id' => string,
  ?'resource_type' => ResourceType,
  ) $s = shape()) {
    $this->association_time = $association_time ?? 0;
    $this->resource_arn = $resource_arn ?? "";
    $this->resource_owner_id = $resource_owner_id ?? "";
    $this->resource_type = $resource_type ?? "";
  }
}

type LicenseConfigurationAssociations = vec<LicenseConfigurationAssociation>;

type LicenseConfigurationStatus = string;

class LicenseConfigurationUsage {
  public DateTime $association_time;
  public BoxLong $consumed_licenses;
  public string $resource_arn;
  public string $resource_owner_id;
  public string $resource_status;
  public ResourceType $resource_type;

  public function __construct(shape(
  ?'association_time' => DateTime,
  ?'consumed_licenses' => BoxLong,
  ?'resource_arn' => string,
  ?'resource_owner_id' => string,
  ?'resource_status' => string,
  ?'resource_type' => ResourceType,
  ) $s = shape()) {
    $this->association_time = $association_time ?? 0;
    $this->consumed_licenses = $consumed_licenses ?? 0;
    $this->resource_arn = $resource_arn ?? "";
    $this->resource_owner_id = $resource_owner_id ?? "";
    $this->resource_status = $resource_status ?? "";
    $this->resource_type = $resource_type ?? "";
  }
}

type LicenseConfigurationUsageList = vec<LicenseConfigurationUsage>;

type LicenseConfigurations = vec<LicenseConfiguration>;

type LicenseCountingType = string;

class LicenseOperationFailure {
  public string $error_message;
  public DateTime $failure_time;
  public MetadataList $metadata_list;
  public string $operation_name;
  public string $operation_requested_by;
  public string $resource_arn;
  public string $resource_owner_id;
  public ResourceType $resource_type;

  public function __construct(shape(
  ?'error_message' => string,
  ?'failure_time' => DateTime,
  ?'metadata_list' => MetadataList,
  ?'operation_name' => string,
  ?'operation_requested_by' => string,
  ?'resource_arn' => string,
  ?'resource_owner_id' => string,
  ?'resource_type' => ResourceType,
  ) $s = shape()) {
    $this->error_message = $error_message ?? "";
    $this->failure_time = $failure_time ?? 0;
    $this->metadata_list = $metadata_list ?? [];
    $this->operation_name = $operation_name ?? "";
    $this->operation_requested_by = $operation_requested_by ?? "";
    $this->resource_arn = $resource_arn ?? "";
    $this->resource_owner_id = $resource_owner_id ?? "";
    $this->resource_type = $resource_type ?? "";
  }
}

type LicenseOperationFailureList = vec<LicenseOperationFailure>;

class LicenseSpecification {
  public string $license_configuration_arn;

  public function __construct(shape(
  ?'license_configuration_arn' => string,
  ) $s = shape()) {
    $this->license_configuration_arn = $license_configuration_arn ?? "";
  }
}

type LicenseSpecifications = vec<LicenseSpecification>;

class LicenseUsageException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ListAssociationsForLicenseConfigurationRequest {
  public string $license_configuration_arn;
  public BoxInteger $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'license_configuration_arn' => string,
  ?'max_results' => BoxInteger,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->license_configuration_arn = $license_configuration_arn ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListAssociationsForLicenseConfigurationResponse {
  public LicenseConfigurationAssociations $license_configuration_associations;
  public string $next_token;

  public function __construct(shape(
  ?'license_configuration_associations' => LicenseConfigurationAssociations,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->license_configuration_associations = $license_configuration_associations ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListFailuresForLicenseConfigurationOperationsRequest {
  public string $license_configuration_arn;
  public BoxInteger $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'license_configuration_arn' => string,
  ?'max_results' => BoxInteger,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->license_configuration_arn = $license_configuration_arn ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListFailuresForLicenseConfigurationOperationsResponse {
  public LicenseOperationFailureList $license_operation_failure_list;
  public string $next_token;

  public function __construct(shape(
  ?'license_operation_failure_list' => LicenseOperationFailureList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->license_operation_failure_list = $license_operation_failure_list ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListLicenseConfigurationsRequest {
  public Filters $filters;
  public StringList $license_configuration_arns;
  public BoxInteger $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'filters' => Filters,
  ?'license_configuration_arns' => StringList,
  ?'max_results' => BoxInteger,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->license_configuration_arns = $license_configuration_arns ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListLicenseConfigurationsResponse {
  public LicenseConfigurations $license_configurations;
  public string $next_token;

  public function __construct(shape(
  ?'license_configurations' => LicenseConfigurations,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->license_configurations = $license_configurations ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListLicenseSpecificationsForResourceRequest {
  public BoxInteger $max_results;
  public string $next_token;
  public string $resource_arn;

  public function __construct(shape(
  ?'max_results' => BoxInteger,
  ?'next_token' => string,
  ?'resource_arn' => string,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->resource_arn = $resource_arn ?? "";
  }
}

class ListLicenseSpecificationsForResourceResponse {
  public LicenseSpecifications $license_specifications;
  public string $next_token;

  public function __construct(shape(
  ?'license_specifications' => LicenseSpecifications,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->license_specifications = $license_specifications ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListResourceInventoryRequest {
  public InventoryFilterList $filters;
  public BoxInteger $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'filters' => InventoryFilterList,
  ?'max_results' => BoxInteger,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListResourceInventoryResponse {
  public string $next_token;
  public ResourceInventoryList $resource_inventory_list;

  public function __construct(shape(
  ?'next_token' => string,
  ?'resource_inventory_list' => ResourceInventoryList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->resource_inventory_list = $resource_inventory_list ?? [];
  }
}

class ListTagsForResourceRequest {
  public string $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => string,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
  }
}

class ListTagsForResourceResponse {
  public TagList $tags;

  public function __construct(shape(
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
  }
}

class ListUsageForLicenseConfigurationRequest {
  public Filters $filters;
  public string $license_configuration_arn;
  public BoxInteger $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'filters' => Filters,
  ?'license_configuration_arn' => string,
  ?'max_results' => BoxInteger,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->license_configuration_arn = $license_configuration_arn ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListUsageForLicenseConfigurationResponse {
  public LicenseConfigurationUsageList $license_configuration_usage_list;
  public string $next_token;

  public function __construct(shape(
  ?'license_configuration_usage_list' => LicenseConfigurationUsageList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->license_configuration_usage_list = $license_configuration_usage_list ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ManagedResourceSummary {
  public BoxLong $association_count;
  public ResourceType $resource_type;

  public function __construct(shape(
  ?'association_count' => BoxLong,
  ?'resource_type' => ResourceType,
  ) $s = shape()) {
    $this->association_count = $association_count ?? 0;
    $this->resource_type = $resource_type ?? "";
  }
}

type ManagedResourceSummaryList = vec<ManagedResourceSummary>;

type Message = string;

class Metadata {
  public string $name;
  public string $value;

  public function __construct(shape(
  ?'name' => string,
  ?'value' => string,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->value = $value ?? "";
  }
}

type MetadataList = vec<Metadata>;

class OrganizationConfiguration {
  public boolean $enable_integration;

  public function __construct(shape(
  ?'enable_integration' => boolean,
  ) $s = shape()) {
    $this->enable_integration = $enable_integration ?? false;
  }
}

class ProductInformation {
  public ProductInformationFilterList $product_information_filter_list;
  public string $resource_type;

  public function __construct(shape(
  ?'product_information_filter_list' => ProductInformationFilterList,
  ?'resource_type' => string,
  ) $s = shape()) {
    $this->product_information_filter_list = $product_information_filter_list ?? [];
    $this->resource_type = $resource_type ?? "";
  }
}

class ProductInformationFilter {
  public string $product_information_filter_comparator;
  public string $product_information_filter_name;
  public StringList $product_information_filter_value;

  public function __construct(shape(
  ?'product_information_filter_comparator' => string,
  ?'product_information_filter_name' => string,
  ?'product_information_filter_value' => StringList,
  ) $s = shape()) {
    $this->product_information_filter_comparator = $product_information_filter_comparator ?? "";
    $this->product_information_filter_name = $product_information_filter_name ?? "";
    $this->product_information_filter_value = $product_information_filter_value ?? [];
  }
}

type ProductInformationFilterList = vec<ProductInformationFilter>;

type ProductInformationList = vec<ProductInformation>;

class RateLimitExceededException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ResourceInventory {
  public string $platform;
  public string $platform_version;
  public string $resource_arn;
  public string $resource_id;
  public string $resource_owning_account_id;
  public ResourceType $resource_type;

  public function __construct(shape(
  ?'platform' => string,
  ?'platform_version' => string,
  ?'resource_arn' => string,
  ?'resource_id' => string,
  ?'resource_owning_account_id' => string,
  ?'resource_type' => ResourceType,
  ) $s = shape()) {
    $this->platform = $platform ?? "";
    $this->platform_version = $platform_version ?? "";
    $this->resource_arn = $resource_arn ?? "";
    $this->resource_id = $resource_id ?? "";
    $this->resource_owning_account_id = $resource_owning_account_id ?? "";
    $this->resource_type = $resource_type ?? "";
  }
}

type ResourceInventoryList = vec<ResourceInventory>;

class ResourceLimitExceededException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ResourceType = string;

class ServerInternalException {
  public Message $message;

  public function __construct(shape(
  ?'message' => Message,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type String = string;

type StringList = vec<String>;

class Tag {
  public string $key;
  public string $value;

  public function __construct(shape(
  ?'key' => string,
  ?'value' => string,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->value = $value ?? "";
  }
}

type TagKeyList = vec<String>;

type TagList = vec<Tag>;

class TagResourceRequest {
  public string $resource_arn;
  public TagList $tags;

  public function __construct(shape(
  ?'resource_arn' => string,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tags = $tags ?? [];
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UntagResourceRequest {
  public string $resource_arn;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => string,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tag_keys = $tag_keys ?? [];
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
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

  public function __construct(shape(
  ?'description' => string,
  ?'license_configuration_arn' => string,
  ?'license_configuration_status' => LicenseConfigurationStatus,
  ?'license_count' => BoxLong,
  ?'license_count_hard_limit' => BoxBoolean,
  ?'license_rules' => StringList,
  ?'name' => string,
  ?'product_information_list' => ProductInformationList,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->license_configuration_arn = $license_configuration_arn ?? "";
    $this->license_configuration_status = $license_configuration_status ?? "";
    $this->license_count = $license_count ?? 0;
    $this->license_count_hard_limit = $license_count_hard_limit ?? false;
    $this->license_rules = $license_rules ?? [];
    $this->name = $name ?? "";
    $this->product_information_list = $product_information_list ?? [];
  }
}

class UpdateLicenseConfigurationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateLicenseSpecificationsForResourceRequest {
  public LicenseSpecifications $add_license_specifications;
  public LicenseSpecifications $remove_license_specifications;
  public string $resource_arn;

  public function __construct(shape(
  ?'add_license_specifications' => LicenseSpecifications,
  ?'remove_license_specifications' => LicenseSpecifications,
  ?'resource_arn' => string,
  ) $s = shape()) {
    $this->add_license_specifications = $add_license_specifications ?? [];
    $this->remove_license_specifications = $remove_license_specifications ?? [];
    $this->resource_arn = $resource_arn ?? "";
  }
}

class UpdateLicenseSpecificationsForResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateServiceSettingsRequest {
  public BoxBoolean $enable_cross_accounts_discovery;
  public OrganizationConfiguration $organization_configuration;
  public string $s_3_bucket_arn;
  public string $sns_topic_arn;

  public function __construct(shape(
  ?'enable_cross_accounts_discovery' => BoxBoolean,
  ?'organization_configuration' => OrganizationConfiguration,
  ?'s_3_bucket_arn' => string,
  ?'sns_topic_arn' => string,
  ) $s = shape()) {
    $this->enable_cross_accounts_discovery = $enable_cross_accounts_discovery ?? false;
    $this->organization_configuration = $organization_configuration ?? null;
    $this->s_3_bucket_arn = $s_3_bucket_arn ?? "";
    $this->sns_topic_arn = $sns_topic_arn ?? "";
  }
}

class UpdateServiceSettingsResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

