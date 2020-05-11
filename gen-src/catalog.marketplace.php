<?hh // strict
namespace slack\aws\catalog.marketplace;

interface Marketplace Catalog {
  public function CancelChangeSet(CancelChangeSetRequest): Awaitable<Errors\Result<CancelChangeSetResponse>>;
  public function DescribeChangeSet(DescribeChangeSetRequest): Awaitable<Errors\Result<DescribeChangeSetResponse>>;
  public function DescribeEntity(DescribeEntityRequest): Awaitable<Errors\Result<DescribeEntityResponse>>;
  public function ListChangeSets(ListChangeSetsRequest): Awaitable<Errors\Result<ListChangeSetsResponse>>;
  public function ListEntities(ListEntitiesRequest): Awaitable<Errors\Result<ListEntitiesResponse>>;
  public function StartChangeSet(StartChangeSetRequest): Awaitable<Errors\Result<StartChangeSetResponse>>;
}

type ARN = string;

class AccessDeniedException {
  public StringValue $message;

  public function __construct(shape(
  ?'message' => StringValue,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class CancelChangeSetRequest {
  public Catalog $catalog;
  public ResourceId $change_set_id;

  public function __construct(shape(
  ?'catalog' => Catalog,
  ?'change_set_id' => ResourceId,
  ) $s = shape()) {
    $this->catalog = $catalog ?? "";
    $this->change_set_id = $change_set_id ?? "";
  }
}

class CancelChangeSetResponse {
  public ARN $change_set_arn;
  public ResourceId $change_set_id;

  public function __construct(shape(
  ?'change_set_arn' => ARN,
  ?'change_set_id' => ResourceId,
  ) $s = shape()) {
    $this->change_set_arn = $change_set_arn ?? "";
    $this->change_set_id = $change_set_id ?? "";
  }
}

type Catalog = string;

class Change {
  public ChangeType $change_type;
  public Json $details;
  public Entity $entity;

  public function __construct(shape(
  ?'change_type' => ChangeType,
  ?'details' => Json,
  ?'entity' => Entity,
  ) $s = shape()) {
    $this->change_type = $change_type ?? "";
    $this->details = $details ?? "";
    $this->entity = $entity ?? null;
  }
}

type ChangeSetDescription = vec<ChangeSummary>;

type ChangeSetName = string;

type ChangeSetSummaryList = vec<ChangeSetSummaryListItem>;

class ChangeSetSummaryListItem {
  public ARN $change_set_arn;
  public ResourceId $change_set_id;
  public ChangeSetName $change_set_name;
  public DateTimeISO8601 $end_time;
  public ResourceIdList $entity_id_list;
  public DateTimeISO8601 $start_time;
  public ChangeStatus $status;

  public function __construct(shape(
  ?'change_set_arn' => ARN,
  ?'change_set_id' => ResourceId,
  ?'change_set_name' => ChangeSetName,
  ?'end_time' => DateTimeISO8601,
  ?'entity_id_list' => ResourceIdList,
  ?'start_time' => DateTimeISO8601,
  ?'status' => ChangeStatus,
  ) $s = shape()) {
    $this->change_set_arn = $change_set_arn ?? "";
    $this->change_set_id = $change_set_id ?? "";
    $this->change_set_name = $change_set_name ?? "";
    $this->end_time = $end_time ?? "";
    $this->entity_id_list = $entity_id_list ?? [];
    $this->start_time = $start_time ?? "";
    $this->status = $status ?? "";
  }
}

type ChangeStatus = string;

class ChangeSummary {
  public ChangeType $change_type;
  public Entity $entity;
  public ErrorDetailList $error_detail_list;

  public function __construct(shape(
  ?'change_type' => ChangeType,
  ?'entity' => Entity,
  ?'error_detail_list' => ErrorDetailList,
  ) $s = shape()) {
    $this->change_type = $change_type ?? "";
    $this->entity = $entity ?? null;
    $this->error_detail_list = $error_detail_list ?? [];
  }
}

type ChangeType = string;

type ClientRequestToken = string;

type DateTimeISO8601 = string;

class DescribeChangeSetRequest {
  public Catalog $catalog;
  public ResourceId $change_set_id;

  public function __construct(shape(
  ?'catalog' => Catalog,
  ?'change_set_id' => ResourceId,
  ) $s = shape()) {
    $this->catalog = $catalog ?? "";
    $this->change_set_id = $change_set_id ?? "";
  }
}

class DescribeChangeSetResponse {
  public ChangeSetDescription $change_set;
  public ARN $change_set_arn;
  public ResourceId $change_set_id;
  public ChangeSetName $change_set_name;
  public DateTimeISO8601 $end_time;
  public StringValue $failure_description;
  public DateTimeISO8601 $start_time;
  public ChangeStatus $status;

  public function __construct(shape(
  ?'change_set' => ChangeSetDescription,
  ?'change_set_arn' => ARN,
  ?'change_set_id' => ResourceId,
  ?'change_set_name' => ChangeSetName,
  ?'end_time' => DateTimeISO8601,
  ?'failure_description' => StringValue,
  ?'start_time' => DateTimeISO8601,
  ?'status' => ChangeStatus,
  ) $s = shape()) {
    $this->change_set = $change_set ?? [];
    $this->change_set_arn = $change_set_arn ?? "";
    $this->change_set_id = $change_set_id ?? "";
    $this->change_set_name = $change_set_name ?? "";
    $this->end_time = $end_time ?? "";
    $this->failure_description = $failure_description ?? "";
    $this->start_time = $start_time ?? "";
    $this->status = $status ?? "";
  }
}

class DescribeEntityRequest {
  public Catalog $catalog;
  public ResourceId $entity_id;

  public function __construct(shape(
  ?'catalog' => Catalog,
  ?'entity_id' => ResourceId,
  ) $s = shape()) {
    $this->catalog = $catalog ?? "";
    $this->entity_id = $entity_id ?? "";
  }
}

class DescribeEntityResponse {
  public Json $details;
  public ARN $entity_arn;
  public Identifier $entity_identifier;
  public EntityType $entity_type;
  public StringValue $last_modified_date;

  public function __construct(shape(
  ?'details' => Json,
  ?'entity_arn' => ARN,
  ?'entity_identifier' => Identifier,
  ?'entity_type' => EntityType,
  ?'last_modified_date' => StringValue,
  ) $s = shape()) {
    $this->details = $details ?? "";
    $this->entity_arn = $entity_arn ?? "";
    $this->entity_identifier = $entity_identifier ?? "";
    $this->entity_type = $entity_type ?? "";
    $this->last_modified_date = $last_modified_date ?? "";
  }
}

class Entity {
  public Identifier $identifier;
  public EntityType $type;

  public function __construct(shape(
  ?'identifier' => Identifier,
  ?'type' => EntityType,
  ) $s = shape()) {
    $this->identifier = $identifier ?? "";
    $this->type = $type ?? "";
  }
}

class EntitySummary {
  public ARN $entity_arn;
  public ResourceId $entity_id;
  public EntityType $entity_type;
  public StringValue $last_modified_date;
  public StringValue $name;
  public StringValue $visibility;

  public function __construct(shape(
  ?'entity_arn' => ARN,
  ?'entity_id' => ResourceId,
  ?'entity_type' => EntityType,
  ?'last_modified_date' => StringValue,
  ?'name' => StringValue,
  ?'visibility' => StringValue,
  ) $s = shape()) {
    $this->entity_arn = $entity_arn ?? "";
    $this->entity_id = $entity_id ?? "";
    $this->entity_type = $entity_type ?? "";
    $this->last_modified_date = $last_modified_date ?? "";
    $this->name = $name ?? "";
    $this->visibility = $visibility ?? "";
  }
}

type EntitySummaryList = vec<EntitySummary>;

type EntityType = string;

class ErrorDetail {
  public StringValue $error_code;
  public StringValue $error_message;

  public function __construct(shape(
  ?'error_code' => StringValue,
  ?'error_message' => StringValue,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->error_message = $error_message ?? "";
  }
}

type ErrorDetailList = vec<ErrorDetail>;

class Filter {
  public FilterName $name;
  public ValueList $value_list;

  public function __construct(shape(
  ?'name' => FilterName,
  ?'value_list' => ValueList,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->value_list = $value_list ?? [];
  }
}

type FilterList = vec<Filter>;

type FilterName = string;

type Identifier = string;

class InternalServiceException {
  public StringValue $message;

  public function __construct(shape(
  ?'message' => StringValue,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type Json = string;

class ListChangeSetsRequest {
  public Catalog $catalog;
  public FilterList $filter_list;
  public MaxResultInteger $max_results;
  public NextToken $next_token;
  public Sort $sort;

  public function __construct(shape(
  ?'catalog' => Catalog,
  ?'filter_list' => FilterList,
  ?'max_results' => MaxResultInteger,
  ?'next_token' => NextToken,
  ?'sort' => Sort,
  ) $s = shape()) {
    $this->catalog = $catalog ?? "";
    $this->filter_list = $filter_list ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->sort = $sort ?? null;
  }
}

class ListChangeSetsResponse {
  public ChangeSetSummaryList $change_set_summary_list;
  public NextToken $next_token;

  public function __construct(shape(
  ?'change_set_summary_list' => ChangeSetSummaryList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->change_set_summary_list = $change_set_summary_list ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListEntitiesRequest {
  public Catalog $catalog;
  public EntityType $entity_type;
  public FilterList $filter_list;
  public MaxResultInteger $max_results;
  public NextToken $next_token;
  public Sort $sort;

  public function __construct(shape(
  ?'catalog' => Catalog,
  ?'entity_type' => EntityType,
  ?'filter_list' => FilterList,
  ?'max_results' => MaxResultInteger,
  ?'next_token' => NextToken,
  ?'sort' => Sort,
  ) $s = shape()) {
    $this->catalog = $catalog ?? "";
    $this->entity_type = $entity_type ?? "";
    $this->filter_list = $filter_list ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->sort = $sort ?? null;
  }
}

class ListEntitiesResponse {
  public EntitySummaryList $entity_summary_list;
  public NextToken $next_token;

  public function __construct(shape(
  ?'entity_summary_list' => EntitySummaryList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->entity_summary_list = $entity_summary_list ?? [];
    $this->next_token = $next_token ?? "";
  }
}

type MaxResultInteger = int;

type NextToken = string;

type RequestedChangeList = vec<Change>;

type ResourceId = string;

type ResourceIdList = vec<ResourceId>;

class ResourceInUseException {
  public StringValue $message;

  public function __construct(shape(
  ?'message' => StringValue,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ResourceNotFoundException {
  public StringValue $message;

  public function __construct(shape(
  ?'message' => StringValue,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ResourceNotSupportedException {
  public StringValue $message;

  public function __construct(shape(
  ?'message' => StringValue,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ServiceQuotaExceededException {
  public StringValue $message;

  public function __construct(shape(
  ?'message' => StringValue,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class Sort {
  public SortBy $sort_by;
  public SortOrder $sort_order;

  public function __construct(shape(
  ?'sort_by' => SortBy,
  ?'sort_order' => SortOrder,
  ) $s = shape()) {
    $this->sort_by = $sort_by ?? "";
    $this->sort_order = $sort_order ?? "";
  }
}

type SortBy = string;

type SortOrder = string;

class StartChangeSetRequest {
  public Catalog $catalog;
  public RequestedChangeList $change_set;
  public ChangeSetName $change_set_name;
  public ClientRequestToken $client_request_token;

  public function __construct(shape(
  ?'catalog' => Catalog,
  ?'change_set' => RequestedChangeList,
  ?'change_set_name' => ChangeSetName,
  ?'client_request_token' => ClientRequestToken,
  ) $s = shape()) {
    $this->catalog = $catalog ?? "";
    $this->change_set = $change_set ?? [];
    $this->change_set_name = $change_set_name ?? "";
    $this->client_request_token = $client_request_token ?? "";
  }
}

class StartChangeSetResponse {
  public ARN $change_set_arn;
  public ResourceId $change_set_id;

  public function __construct(shape(
  ?'change_set_arn' => ARN,
  ?'change_set_id' => ResourceId,
  ) $s = shape()) {
    $this->change_set_arn = $change_set_arn ?? "";
    $this->change_set_id = $change_set_id ?? "";
  }
}

type StringValue = string;

class ThrottlingException {
  public StringValue $message;

  public function __construct(shape(
  ?'message' => StringValue,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ValidationException {
  public StringValue $message;

  public function __construct(shape(
  ?'message' => StringValue,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ValueList = vec<StringValue>;

