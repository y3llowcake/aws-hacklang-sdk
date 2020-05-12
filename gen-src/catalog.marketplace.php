<?hh // strict
namespace slack\aws\catalog.marketplace;

interface MarketplaceCatalog {
  public function CancelChangeSet(CancelChangeSetRequest $in): Awaitable<\Errors\Result<CancelChangeSetResponse>>;
  public function DescribeChangeSet(DescribeChangeSetRequest $in): Awaitable<\Errors\Result<DescribeChangeSetResponse>>;
  public function DescribeEntity(DescribeEntityRequest $in): Awaitable<\Errors\Result<DescribeEntityResponse>>;
  public function ListChangeSets(ListChangeSetsRequest $in): Awaitable<\Errors\Result<ListChangeSetsResponse>>;
  public function ListEntities(ListEntitiesRequest $in): Awaitable<\Errors\Result<ListEntitiesResponse>>;
  public function StartChangeSet(StartChangeSetRequest $in): Awaitable<\Errors\Result<StartChangeSetResponse>>;
}

type ARN = string;

class AccessDeniedException {
  public ?StringValue $message;

  public function __construct(shape(
    ?'message' => ?StringValue,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class CancelChangeSetRequest {
  public ?Catalog $catalog;
  public ?ResourceId $change_set_id;

  public function __construct(shape(
    ?'catalog' => ?Catalog,
    ?'change_set_id' => ?ResourceId,
  ) $s = shape()) {
    $this->catalog = $s['catalog'] ?? '';
    $this->change_set_id = $s['change_set_id'] ?? '';
  }
}

class CancelChangeSetResponse {
  public ?ARN $change_set_arn;
  public ?ResourceId $change_set_id;

  public function __construct(shape(
    ?'change_set_arn' => ?ARN,
    ?'change_set_id' => ?ResourceId,
  ) $s = shape()) {
    $this->change_set_arn = $s['change_set_arn'] ?? '';
    $this->change_set_id = $s['change_set_id'] ?? '';
  }
}

type Catalog = string;

class Change {
  public ?ChangeType $change_type;
  public ?Json $details;
  public ?Entity $entity;

  public function __construct(shape(
    ?'change_type' => ?ChangeType,
    ?'details' => ?Json,
    ?'entity' => ?Entity,
  ) $s = shape()) {
    $this->change_type = $s['change_type'] ?? '';
    $this->details = $s['details'] ?? '';
    $this->entity = $s['entity'] ?? null;
  }
}

type ChangeSetDescription = vec<ChangeSummary>;

type ChangeSetName = string;

type ChangeSetSummaryList = vec<ChangeSetSummaryListItem>;

class ChangeSetSummaryListItem {
  public ?ARN $change_set_arn;
  public ?ResourceId $change_set_id;
  public ?ChangeSetName $change_set_name;
  public ?DateTimeISO8601 $end_time;
  public ?ResourceIdList $entity_id_list;
  public ?DateTimeISO8601 $start_time;
  public ?ChangeStatus $status;

  public function __construct(shape(
    ?'change_set_arn' => ?ARN,
    ?'change_set_id' => ?ResourceId,
    ?'change_set_name' => ?ChangeSetName,
    ?'end_time' => ?DateTimeISO8601,
    ?'entity_id_list' => ?ResourceIdList,
    ?'start_time' => ?DateTimeISO8601,
    ?'status' => ?ChangeStatus,
  ) $s = shape()) {
    $this->change_set_arn = $s['change_set_arn'] ?? '';
    $this->change_set_id = $s['change_set_id'] ?? '';
    $this->change_set_name = $s['change_set_name'] ?? '';
    $this->end_time = $s['end_time'] ?? '';
    $this->entity_id_list = $s['entity_id_list'] ?? vec[];
    $this->start_time = $s['start_time'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type ChangeStatus = string;

class ChangeSummary {
  public ?ChangeType $change_type;
  public ?Entity $entity;
  public ?ErrorDetailList $error_detail_list;

  public function __construct(shape(
    ?'change_type' => ?ChangeType,
    ?'entity' => ?Entity,
    ?'error_detail_list' => ?ErrorDetailList,
  ) $s = shape()) {
    $this->change_type = $s['change_type'] ?? '';
    $this->entity = $s['entity'] ?? null;
    $this->error_detail_list = $s['error_detail_list'] ?? vec[];
  }
}

type ChangeType = string;

type ClientRequestToken = string;

type DateTimeISO8601 = string;

class DescribeChangeSetRequest {
  public ?Catalog $catalog;
  public ?ResourceId $change_set_id;

  public function __construct(shape(
    ?'catalog' => ?Catalog,
    ?'change_set_id' => ?ResourceId,
  ) $s = shape()) {
    $this->catalog = $s['catalog'] ?? '';
    $this->change_set_id = $s['change_set_id'] ?? '';
  }
}

class DescribeChangeSetResponse {
  public ?ChangeSetDescription $change_set;
  public ?ARN $change_set_arn;
  public ?ResourceId $change_set_id;
  public ?ChangeSetName $change_set_name;
  public ?DateTimeISO8601 $end_time;
  public ?StringValue $failure_description;
  public ?DateTimeISO8601 $start_time;
  public ?ChangeStatus $status;

  public function __construct(shape(
    ?'change_set' => ?ChangeSetDescription,
    ?'change_set_arn' => ?ARN,
    ?'change_set_id' => ?ResourceId,
    ?'change_set_name' => ?ChangeSetName,
    ?'end_time' => ?DateTimeISO8601,
    ?'failure_description' => ?StringValue,
    ?'start_time' => ?DateTimeISO8601,
    ?'status' => ?ChangeStatus,
  ) $s = shape()) {
    $this->change_set = $s['change_set'] ?? vec[];
    $this->change_set_arn = $s['change_set_arn'] ?? '';
    $this->change_set_id = $s['change_set_id'] ?? '';
    $this->change_set_name = $s['change_set_name'] ?? '';
    $this->end_time = $s['end_time'] ?? '';
    $this->failure_description = $s['failure_description'] ?? '';
    $this->start_time = $s['start_time'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class DescribeEntityRequest {
  public ?Catalog $catalog;
  public ?ResourceId $entity_id;

  public function __construct(shape(
    ?'catalog' => ?Catalog,
    ?'entity_id' => ?ResourceId,
  ) $s = shape()) {
    $this->catalog = $s['catalog'] ?? '';
    $this->entity_id = $s['entity_id'] ?? '';
  }
}

class DescribeEntityResponse {
  public ?Json $details;
  public ?ARN $entity_arn;
  public ?Identifier $entity_identifier;
  public ?EntityType $entity_type;
  public ?StringValue $last_modified_date;

  public function __construct(shape(
    ?'details' => ?Json,
    ?'entity_arn' => ?ARN,
    ?'entity_identifier' => ?Identifier,
    ?'entity_type' => ?EntityType,
    ?'last_modified_date' => ?StringValue,
  ) $s = shape()) {
    $this->details = $s['details'] ?? '';
    $this->entity_arn = $s['entity_arn'] ?? '';
    $this->entity_identifier = $s['entity_identifier'] ?? '';
    $this->entity_type = $s['entity_type'] ?? '';
    $this->last_modified_date = $s['last_modified_date'] ?? '';
  }
}

class Entity {
  public ?Identifier $identifier;
  public ?EntityType $type;

  public function __construct(shape(
    ?'identifier' => ?Identifier,
    ?'type' => ?EntityType,
  ) $s = shape()) {
    $this->identifier = $s['identifier'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class EntitySummary {
  public ?ARN $entity_arn;
  public ?ResourceId $entity_id;
  public ?EntityType $entity_type;
  public ?StringValue $last_modified_date;
  public ?StringValue $name;
  public ?StringValue $visibility;

  public function __construct(shape(
    ?'entity_arn' => ?ARN,
    ?'entity_id' => ?ResourceId,
    ?'entity_type' => ?EntityType,
    ?'last_modified_date' => ?StringValue,
    ?'name' => ?StringValue,
    ?'visibility' => ?StringValue,
  ) $s = shape()) {
    $this->entity_arn = $s['entity_arn'] ?? '';
    $this->entity_id = $s['entity_id'] ?? '';
    $this->entity_type = $s['entity_type'] ?? '';
    $this->last_modified_date = $s['last_modified_date'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->visibility = $s['visibility'] ?? '';
  }
}

type EntitySummaryList = vec<EntitySummary>;

type EntityType = string;

class ErrorDetail {
  public ?StringValue $error_code;
  public ?StringValue $error_message;

  public function __construct(shape(
    ?'error_code' => ?StringValue,
    ?'error_message' => ?StringValue,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->error_message = $s['error_message'] ?? '';
  }
}

type ErrorDetailList = vec<ErrorDetail>;

class Filter {
  public ?FilterName $name;
  public ?ValueList $value_list;

  public function __construct(shape(
    ?'name' => ?FilterName,
    ?'value_list' => ?ValueList,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->value_list = $s['value_list'] ?? vec[];
  }
}

type FilterList = vec<Filter>;

type FilterName = string;

type Identifier = string;

class InternalServiceException {
  public ?StringValue $message;

  public function __construct(shape(
    ?'message' => ?StringValue,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Json = string;

class ListChangeSetsRequest {
  public ?Catalog $catalog;
  public ?FilterList $filter_list;
  public ?MaxResultInteger $max_results;
  public ?NextToken $next_token;
  public ?Sort $sort;

  public function __construct(shape(
    ?'catalog' => ?Catalog,
    ?'filter_list' => ?FilterList,
    ?'max_results' => ?MaxResultInteger,
    ?'next_token' => ?NextToken,
    ?'sort' => ?Sort,
  ) $s = shape()) {
    $this->catalog = $s['catalog'] ?? '';
    $this->filter_list = $s['filter_list'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->sort = $s['sort'] ?? null;
  }
}

class ListChangeSetsResponse {
  public ?ChangeSetSummaryList $change_set_summary_list;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'change_set_summary_list' => ?ChangeSetSummaryList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->change_set_summary_list = $s['change_set_summary_list'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListEntitiesRequest {
  public ?Catalog $catalog;
  public ?EntityType $entity_type;
  public ?FilterList $filter_list;
  public ?MaxResultInteger $max_results;
  public ?NextToken $next_token;
  public ?Sort $sort;

  public function __construct(shape(
    ?'catalog' => ?Catalog,
    ?'entity_type' => ?EntityType,
    ?'filter_list' => ?FilterList,
    ?'max_results' => ?MaxResultInteger,
    ?'next_token' => ?NextToken,
    ?'sort' => ?Sort,
  ) $s = shape()) {
    $this->catalog = $s['catalog'] ?? '';
    $this->entity_type = $s['entity_type'] ?? '';
    $this->filter_list = $s['filter_list'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->sort = $s['sort'] ?? null;
  }
}

class ListEntitiesResponse {
  public ?EntitySummaryList $entity_summary_list;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'entity_summary_list' => ?EntitySummaryList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->entity_summary_list = $s['entity_summary_list'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type MaxResultInteger = int;

type NextToken = string;

type RequestedChangeList = vec<Change>;

type ResourceId = string;

type ResourceIdList = vec<ResourceId>;

class ResourceInUseException {
  public ?StringValue $message;

  public function __construct(shape(
    ?'message' => ?StringValue,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ResourceNotFoundException {
  public ?StringValue $message;

  public function __construct(shape(
    ?'message' => ?StringValue,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ResourceNotSupportedException {
  public ?StringValue $message;

  public function __construct(shape(
    ?'message' => ?StringValue,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ServiceQuotaExceededException {
  public ?StringValue $message;

  public function __construct(shape(
    ?'message' => ?StringValue,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class Sort {
  public ?SortBy $sort_by;
  public ?SortOrder $sort_order;

  public function __construct(shape(
    ?'sort_by' => ?SortBy,
    ?'sort_order' => ?SortOrder,
  ) $s = shape()) {
    $this->sort_by = $s['sort_by'] ?? '';
    $this->sort_order = $s['sort_order'] ?? '';
  }
}

type SortBy = string;

type SortOrder = string;

class StartChangeSetRequest {
  public ?Catalog $catalog;
  public ?RequestedChangeList $change_set;
  public ?ChangeSetName $change_set_name;
  public ?ClientRequestToken $client_request_token;

  public function __construct(shape(
    ?'catalog' => ?Catalog,
    ?'change_set' => ?RequestedChangeList,
    ?'change_set_name' => ?ChangeSetName,
    ?'client_request_token' => ?ClientRequestToken,
  ) $s = shape()) {
    $this->catalog = $s['catalog'] ?? '';
    $this->change_set = $s['change_set'] ?? vec[];
    $this->change_set_name = $s['change_set_name'] ?? '';
    $this->client_request_token = $s['client_request_token'] ?? '';
  }
}

class StartChangeSetResponse {
  public ?ARN $change_set_arn;
  public ?ResourceId $change_set_id;

  public function __construct(shape(
    ?'change_set_arn' => ?ARN,
    ?'change_set_id' => ?ResourceId,
  ) $s = shape()) {
    $this->change_set_arn = $s['change_set_arn'] ?? '';
    $this->change_set_id = $s['change_set_id'] ?? '';
  }
}

type StringValue = string;

class ThrottlingException {
  public ?StringValue $message;

  public function __construct(shape(
    ?'message' => ?StringValue,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ValidationException {
  public ?StringValue $message;

  public function __construct(shape(
    ?'message' => ?StringValue,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ValueList = vec<StringValue>;

