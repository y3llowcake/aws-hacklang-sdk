<?hh // strict
namespace slack\aws\catalog.marketplace;

interface Marketplace Catalog {
  public function CancelChangeSet(CancelChangeSetRequest) Awaitable<Errors\Result<CancelChangeSetResponse>>;
  public function DescribeChangeSet(DescribeChangeSetRequest) Awaitable<Errors\Result<DescribeChangeSetResponse>>;
  public function DescribeEntity(DescribeEntityRequest) Awaitable<Errors\Result<DescribeEntityResponse>>;
  public function ListChangeSets(ListChangeSetsRequest) Awaitable<Errors\Result<ListChangeSetsResponse>>;
  public function ListEntities(ListEntitiesRequest) Awaitable<Errors\Result<ListEntitiesResponse>>;
  public function StartChangeSet(StartChangeSetRequest) Awaitable<Errors\Result<StartChangeSetResponse>>;
}

class ARN {
}

class AccessDeniedException {
  public StringValue $message;
}

class CancelChangeSetRequest {
  public Catalog $catalog;
  public ResourceId $change_set_id;
}

class CancelChangeSetResponse {
  public ARN $change_set_arn;
  public ResourceId $change_set_id;
}

class Catalog {
}

class Change {
  public ChangeType $change_type;
  public Json $details;
  public Entity $entity;
}

class ChangeSetDescription {
}

class ChangeSetName {
}

class ChangeSetSummaryList {
}

class ChangeSetSummaryListItem {
  public ARN $change_set_arn;
  public ResourceId $change_set_id;
  public ChangeSetName $change_set_name;
  public DateTimeISO8601 $end_time;
  public ResourceIdList $entity_id_list;
  public DateTimeISO8601 $start_time;
  public ChangeStatus $status;
}

class ChangeStatus {
}

class ChangeSummary {
  public ChangeType $change_type;
  public Entity $entity;
  public ErrorDetailList $error_detail_list;
}

class ChangeType {
}

class ClientRequestToken {
}

class DateTimeISO8601 {
}

class DescribeChangeSetRequest {
  public Catalog $catalog;
  public ResourceId $change_set_id;
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
}

class DescribeEntityRequest {
  public Catalog $catalog;
  public ResourceId $entity_id;
}

class DescribeEntityResponse {
  public Json $details;
  public ARN $entity_arn;
  public Identifier $entity_identifier;
  public EntityType $entity_type;
  public StringValue $last_modified_date;
}

class Entity {
  public Identifier $identifier;
  public EntityType $type;
}

class EntitySummary {
  public ARN $entity_arn;
  public ResourceId $entity_id;
  public EntityType $entity_type;
  public StringValue $last_modified_date;
  public StringValue $name;
  public StringValue $visibility;
}

class EntitySummaryList {
}

class EntityType {
}

class ErrorDetail {
  public StringValue $error_code;
  public StringValue $error_message;
}

class ErrorDetailList {
}

class Filter {
  public FilterName $name;
  public ValueList $value_list;
}

class FilterList {
}

class FilterName {
}

class Identifier {
}

class InternalServiceException {
  public StringValue $message;
}

class Json {
}

class ListChangeSetsRequest {
  public Catalog $catalog;
  public FilterList $filter_list;
  public MaxResultInteger $max_results;
  public NextToken $next_token;
  public Sort $sort;
}

class ListChangeSetsResponse {
  public ChangeSetSummaryList $change_set_summary_list;
  public NextToken $next_token;
}

class ListEntitiesRequest {
  public Catalog $catalog;
  public EntityType $entity_type;
  public FilterList $filter_list;
  public MaxResultInteger $max_results;
  public NextToken $next_token;
  public Sort $sort;
}

class ListEntitiesResponse {
  public EntitySummaryList $entity_summary_list;
  public NextToken $next_token;
}

class MaxResultInteger {
}

class NextToken {
}

class RequestedChangeList {
}

class ResourceId {
}

class ResourceIdList {
}

class ResourceInUseException {
  public StringValue $message;
}

class ResourceNotFoundException {
  public StringValue $message;
}

class ResourceNotSupportedException {
  public StringValue $message;
}

class ServiceQuotaExceededException {
  public StringValue $message;
}

class Sort {
  public SortBy $sort_by;
  public SortOrder $sort_order;
}

class SortBy {
}

class SortOrder {
}

class StartChangeSetRequest {
  public Catalog $catalog;
  public RequestedChangeList $change_set;
  public ChangeSetName $change_set_name;
  public ClientRequestToken $client_request_token;
}

class StartChangeSetResponse {
  public ARN $change_set_arn;
  public ResourceId $change_set_id;
}

class StringValue {
}

class ThrottlingException {
  public StringValue $message;
}

class ValidationException {
  public StringValue $message;
}

class ValueList {
}

