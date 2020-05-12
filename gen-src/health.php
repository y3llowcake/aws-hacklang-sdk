<?hh // strict
namespace slack\aws\health;

interface Health {
  public function DescribeAffectedAccountsForOrganization(DescribeAffectedAccountsForOrganizationRequest $in): Awaitable<\Errors\Result<DescribeAffectedAccountsForOrganizationResponse>>;
  public function DescribeAffectedEntities(DescribeAffectedEntitiesRequest $in): Awaitable<\Errors\Result<DescribeAffectedEntitiesResponse>>;
  public function DescribeAffectedEntitiesForOrganization(DescribeAffectedEntitiesForOrganizationRequest $in): Awaitable<\Errors\Result<DescribeAffectedEntitiesForOrganizationResponse>>;
  public function DescribeEntityAggregates(DescribeEntityAggregatesRequest $in): Awaitable<\Errors\Result<DescribeEntityAggregatesResponse>>;
  public function DescribeEventAggregates(DescribeEventAggregatesRequest $in): Awaitable<\Errors\Result<DescribeEventAggregatesResponse>>;
  public function DescribeEventDetails(DescribeEventDetailsRequest $in): Awaitable<\Errors\Result<DescribeEventDetailsResponse>>;
  public function DescribeEventDetailsForOrganization(DescribeEventDetailsForOrganizationRequest $in): Awaitable<\Errors\Result<DescribeEventDetailsForOrganizationResponse>>;
  public function DescribeEventTypes(DescribeEventTypesRequest $in): Awaitable<\Errors\Result<DescribeEventTypesResponse>>;
  public function DescribeEvents(DescribeEventsRequest $in): Awaitable<\Errors\Result<DescribeEventsResponse>>;
  public function DescribeEventsForOrganization(DescribeEventsForOrganizationRequest $in): Awaitable<\Errors\Result<DescribeEventsForOrganizationResponse>>;
  public function DescribeHealthServiceStatusForOrganization( $in): Awaitable<\Errors\Result<DescribeHealthServiceStatusForOrganizationResponse>>;
  public function DisableHealthServiceAccessForOrganization( $in): Awaitable<\Errors\Error>;
  public function EnableHealthServiceAccessForOrganization( $in): Awaitable<\Errors\Error>;
}

class AffectedEntity {
  public ?accountId $aws_account_id;
  public ?entityArn $entity_arn;
  public ?entityUrl $entity_url;
  public ?entityValue $entity_value;
  public ?eventArn $event_arn;
  public ?timestamp $last_updated_time;
  public ?entityStatusCode $status_code;
  public ?tagSet $tags;

  public function __construct(shape(
    ?'aws_account_id' => ?accountId,
    ?'entity_arn' => ?entityArn,
    ?'entity_url' => ?entityUrl,
    ?'entity_value' => ?entityValue,
    ?'event_arn' => ?eventArn,
    ?'last_updated_time' => ?timestamp,
    ?'status_code' => ?entityStatusCode,
    ?'tags' => ?tagSet,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->entity_arn = $s['entity_arn'] ?? '';
    $this->entity_url = $s['entity_url'] ?? '';
    $this->entity_value = $s['entity_value'] ?? '';
    $this->event_arn = $s['event_arn'] ?? '';
    $this->last_updated_time = $s['last_updated_time'] ?? 0;
    $this->status_code = $s['status_code'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class ConcurrentModificationException {
  public ?string $message;

  public function __construct(shape(
    ?'message' => ?string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class DateTimeRange {
  public ?timestamp $from;
  public ?timestamp $to;

  public function __construct(shape(
    ?'from' => ?timestamp,
    ?'to' => ?timestamp,
  ) $s = shape()) {
    $this->from = $s['from'] ?? 0;
    $this->to = $s['to'] ?? 0;
  }
}

class DescribeAffectedAccountsForOrganizationRequest {
  public ?eventArn $event_arn;
  public ?maxResults $max_results;
  public ?nextToken $next_token;

  public function __construct(shape(
    ?'event_arn' => ?eventArn,
    ?'max_results' => ?maxResults,
    ?'next_token' => ?nextToken,
  ) $s = shape()) {
    $this->event_arn = $s['event_arn'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeAffectedAccountsForOrganizationResponse {
  public ?affectedAccountsList $affected_accounts;
  public ?nextToken $next_token;

  public function __construct(shape(
    ?'affected_accounts' => ?affectedAccountsList,
    ?'next_token' => ?nextToken,
  ) $s = shape()) {
    $this->affected_accounts = $s['affected_accounts'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type DescribeAffectedEntitiesForOrganizationFailedSet = vec<OrganizationAffectedEntitiesErrorItem>;

class DescribeAffectedEntitiesForOrganizationRequest {
  public ?locale $locale;
  public ?maxResults $max_results;
  public ?nextToken $next_token;
  public ?OrganizationEntityFiltersList $organization_entity_filters;

  public function __construct(shape(
    ?'locale' => ?locale,
    ?'max_results' => ?maxResults,
    ?'next_token' => ?nextToken,
    ?'organization_entity_filters' => ?OrganizationEntityFiltersList,
  ) $s = shape()) {
    $this->locale = $s['locale'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->organization_entity_filters = $s['organization_entity_filters'] ?? vec[];
  }
}

class DescribeAffectedEntitiesForOrganizationResponse {
  public ?EntityList $entities;
  public ?DescribeAffectedEntitiesForOrganizationFailedSet $failed_set;
  public ?nextToken $next_token;

  public function __construct(shape(
    ?'entities' => ?EntityList,
    ?'failed_set' => ?DescribeAffectedEntitiesForOrganizationFailedSet,
    ?'next_token' => ?nextToken,
  ) $s = shape()) {
    $this->entities = $s['entities'] ?? vec[];
    $this->failed_set = $s['failed_set'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeAffectedEntitiesRequest {
  public ?EntityFilter $filter;
  public ?locale $locale;
  public ?maxResults $max_results;
  public ?nextToken $next_token;

  public function __construct(shape(
    ?'filter' => ?EntityFilter,
    ?'locale' => ?locale,
    ?'max_results' => ?maxResults,
    ?'next_token' => ?nextToken,
  ) $s = shape()) {
    $this->filter = $s['filter'] ?? null;
    $this->locale = $s['locale'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeAffectedEntitiesResponse {
  public ?EntityList $entities;
  public ?nextToken $next_token;

  public function __construct(shape(
    ?'entities' => ?EntityList,
    ?'next_token' => ?nextToken,
  ) $s = shape()) {
    $this->entities = $s['entities'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeEntityAggregatesRequest {
  public ?EventArnsList $event_arns;

  public function __construct(shape(
    ?'event_arns' => ?EventArnsList,
  ) $s = shape()) {
    $this->event_arns = $s['event_arns'] ?? vec[];
  }
}

class DescribeEntityAggregatesResponse {
  public ?EntityAggregateList $entity_aggregates;

  public function __construct(shape(
    ?'entity_aggregates' => ?EntityAggregateList,
  ) $s = shape()) {
    $this->entity_aggregates = $s['entity_aggregates'] ?? vec[];
  }
}

class DescribeEventAggregatesRequest {
  public ?eventAggregateField $aggregate_field;
  public ?EventFilter $filter;
  public ?maxResults $max_results;
  public ?nextToken $next_token;

  public function __construct(shape(
    ?'aggregate_field' => ?eventAggregateField,
    ?'filter' => ?EventFilter,
    ?'max_results' => ?maxResults,
    ?'next_token' => ?nextToken,
  ) $s = shape()) {
    $this->aggregate_field = $s['aggregate_field'] ?? '';
    $this->filter = $s['filter'] ?? null;
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeEventAggregatesResponse {
  public ?EventAggregateList $event_aggregates;
  public ?nextToken $next_token;

  public function __construct(shape(
    ?'event_aggregates' => ?EventAggregateList,
    ?'next_token' => ?nextToken,
  ) $s = shape()) {
    $this->event_aggregates = $s['event_aggregates'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type DescribeEventDetailsFailedSet = vec<EventDetailsErrorItem>;

type DescribeEventDetailsForOrganizationFailedSet = vec<OrganizationEventDetailsErrorItem>;

class DescribeEventDetailsForOrganizationRequest {
  public ?locale $locale;
  public ?OrganizationEventDetailFiltersList $organization_event_detail_filters;

  public function __construct(shape(
    ?'locale' => ?locale,
    ?'organization_event_detail_filters' => ?OrganizationEventDetailFiltersList,
  ) $s = shape()) {
    $this->locale = $s['locale'] ?? '';
    $this->organization_event_detail_filters = $s['organization_event_detail_filters'] ?? vec[];
  }
}

class DescribeEventDetailsForOrganizationResponse {
  public ?DescribeEventDetailsForOrganizationFailedSet $failed_set;
  public ?DescribeEventDetailsForOrganizationSuccessfulSet $successful_set;

  public function __construct(shape(
    ?'failed_set' => ?DescribeEventDetailsForOrganizationFailedSet,
    ?'successful_set' => ?DescribeEventDetailsForOrganizationSuccessfulSet,
  ) $s = shape()) {
    $this->failed_set = $s['failed_set'] ?? vec[];
    $this->successful_set = $s['successful_set'] ?? vec[];
  }
}

type DescribeEventDetailsForOrganizationSuccessfulSet = vec<OrganizationEventDetails>;

class DescribeEventDetailsRequest {
  public ?eventArnList $event_arns;
  public ?locale $locale;

  public function __construct(shape(
    ?'event_arns' => ?eventArnList,
    ?'locale' => ?locale,
  ) $s = shape()) {
    $this->event_arns = $s['event_arns'] ?? vec[];
    $this->locale = $s['locale'] ?? '';
  }
}

class DescribeEventDetailsResponse {
  public ?DescribeEventDetailsFailedSet $failed_set;
  public ?DescribeEventDetailsSuccessfulSet $successful_set;

  public function __construct(shape(
    ?'failed_set' => ?DescribeEventDetailsFailedSet,
    ?'successful_set' => ?DescribeEventDetailsSuccessfulSet,
  ) $s = shape()) {
    $this->failed_set = $s['failed_set'] ?? vec[];
    $this->successful_set = $s['successful_set'] ?? vec[];
  }
}

type DescribeEventDetailsSuccessfulSet = vec<EventDetails>;

class DescribeEventTypesRequest {
  public ?EventTypeFilter $filter;
  public ?locale $locale;
  public ?maxResults $max_results;
  public ?nextToken $next_token;

  public function __construct(shape(
    ?'filter' => ?EventTypeFilter,
    ?'locale' => ?locale,
    ?'max_results' => ?maxResults,
    ?'next_token' => ?nextToken,
  ) $s = shape()) {
    $this->filter = $s['filter'] ?? null;
    $this->locale = $s['locale'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeEventTypesResponse {
  public ?EventTypeList $event_types;
  public ?nextToken $next_token;

  public function __construct(shape(
    ?'event_types' => ?EventTypeList,
    ?'next_token' => ?nextToken,
  ) $s = shape()) {
    $this->event_types = $s['event_types'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeEventsForOrganizationRequest {
  public ?OrganizationEventFilter $filter;
  public ?locale $locale;
  public ?maxResults $max_results;
  public ?nextToken $next_token;

  public function __construct(shape(
    ?'filter' => ?OrganizationEventFilter,
    ?'locale' => ?locale,
    ?'max_results' => ?maxResults,
    ?'next_token' => ?nextToken,
  ) $s = shape()) {
    $this->filter = $s['filter'] ?? null;
    $this->locale = $s['locale'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeEventsForOrganizationResponse {
  public ?OrganizationEventList $events;
  public ?nextToken $next_token;

  public function __construct(shape(
    ?'events' => ?OrganizationEventList,
    ?'next_token' => ?nextToken,
  ) $s = shape()) {
    $this->events = $s['events'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeEventsRequest {
  public ?EventFilter $filter;
  public ?locale $locale;
  public ?maxResults $max_results;
  public ?nextToken $next_token;

  public function __construct(shape(
    ?'filter' => ?EventFilter,
    ?'locale' => ?locale,
    ?'max_results' => ?maxResults,
    ?'next_token' => ?nextToken,
  ) $s = shape()) {
    $this->filter = $s['filter'] ?? null;
    $this->locale = $s['locale'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeEventsResponse {
  public ?EventList $events;
  public ?nextToken $next_token;

  public function __construct(shape(
    ?'events' => ?EventList,
    ?'next_token' => ?nextToken,
  ) $s = shape()) {
    $this->events = $s['events'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeHealthServiceStatusForOrganizationResponse {
  public ?healthServiceAccessStatusForOrganization $health_service_access_status_for_organization;

  public function __construct(shape(
    ?'health_service_access_status_for_organization' => ?healthServiceAccessStatusForOrganization,
  ) $s = shape()) {
    $this->health_service_access_status_for_organization = $s['health_service_access_status_for_organization'] ?? '';
  }
}

class EntityAggregate {
  public ?count $count;
  public ?eventArn $event_arn;

  public function __construct(shape(
    ?'count' => ?count,
    ?'event_arn' => ?eventArn,
  ) $s = shape()) {
    $this->count = $s['count'] ?? 0;
    $this->event_arn = $s['event_arn'] ?? '';
  }
}

type EntityAggregateList = vec<EntityAggregate>;

class EntityFilter {
  public ?entityArnList $entity_arns;
  public ?entityValueList $entity_values;
  public ?eventArnList $event_arns;
  public ?dateTimeRangeList $last_updated_times;
  public ?entityStatusCodeList $status_codes;
  public ?tagFilter $tags;

  public function __construct(shape(
    ?'entity_arns' => ?entityArnList,
    ?'entity_values' => ?entityValueList,
    ?'event_arns' => ?eventArnList,
    ?'last_updated_times' => ?dateTimeRangeList,
    ?'status_codes' => ?entityStatusCodeList,
    ?'tags' => ?tagFilter,
  ) $s = shape()) {
    $this->entity_arns = $s['entity_arns'] ?? vec[];
    $this->entity_values = $s['entity_values'] ?? vec[];
    $this->event_arns = $s['event_arns'] ?? vec[];
    $this->last_updated_times = $s['last_updated_times'] ?? vec[];
    $this->status_codes = $s['status_codes'] ?? vec[];
    $this->tags = $s['tags'] ?? vec[];
  }
}

type EntityList = vec<AffectedEntity>;

class Event {
  public ?eventArn $arn;
  public ?availabilityZone $availability_zone;
  public ?timestamp $end_time;
  public ?eventTypeCategory $event_type_category;
  public ?eventTypeCode $event_type_code;
  public ?timestamp $last_updated_time;
  public ?region $region;
  public ?service $service;
  public ?timestamp $start_time;
  public ?eventStatusCode $status_code;

  public function __construct(shape(
    ?'arn' => ?eventArn,
    ?'availability_zone' => ?availabilityZone,
    ?'end_time' => ?timestamp,
    ?'event_type_category' => ?eventTypeCategory,
    ?'event_type_code' => ?eventTypeCode,
    ?'last_updated_time' => ?timestamp,
    ?'region' => ?region,
    ?'service' => ?service,
    ?'start_time' => ?timestamp,
    ?'status_code' => ?eventStatusCode,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->end_time = $s['end_time'] ?? 0;
    $this->event_type_category = $s['event_type_category'] ?? '';
    $this->event_type_code = $s['event_type_code'] ?? '';
    $this->last_updated_time = $s['last_updated_time'] ?? 0;
    $this->region = $s['region'] ?? '';
    $this->service = $s['service'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
    $this->status_code = $s['status_code'] ?? '';
  }
}

class EventAccountFilter {
  public ?accountId $aws_account_id;
  public ?eventArn $event_arn;

  public function __construct(shape(
    ?'aws_account_id' => ?accountId,
    ?'event_arn' => ?eventArn,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->event_arn = $s['event_arn'] ?? '';
  }
}

class EventAggregate {
  public ?aggregateValue $aggregate_value;
  public ?count $count;

  public function __construct(shape(
    ?'aggregate_value' => ?aggregateValue,
    ?'count' => ?count,
  ) $s = shape()) {
    $this->aggregate_value = $s['aggregate_value'] ?? '';
    $this->count = $s['count'] ?? 0;
  }
}

type EventAggregateList = vec<EventAggregate>;

type EventArnsList = vec<eventArn>;

class EventDescription {
  public ?eventDescription $latest_description;

  public function __construct(shape(
    ?'latest_description' => ?eventDescription,
  ) $s = shape()) {
    $this->latest_description = $s['latest_description'] ?? '';
  }
}

class EventDetails {
  public ?Event $event;
  public ?EventDescription $event_description;
  public ?eventMetadata $event_metadata;

  public function __construct(shape(
    ?'event' => ?Event,
    ?'event_description' => ?EventDescription,
    ?'event_metadata' => ?eventMetadata,
  ) $s = shape()) {
    $this->event = $s['event'] ?? null;
    $this->event_description = $s['event_description'] ?? null;
    $this->event_metadata = $s['event_metadata'] ?? dict[];
  }
}

class EventDetailsErrorItem {
  public ?string $error_message;
  public ?string $error_name;
  public ?eventArn $event_arn;

  public function __construct(shape(
    ?'error_message' => ?string,
    ?'error_name' => ?string,
    ?'event_arn' => ?eventArn,
  ) $s = shape()) {
    $this->error_message = $s['error_message'] ?? '';
    $this->error_name = $s['error_name'] ?? '';
    $this->event_arn = $s['event_arn'] ?? '';
  }
}

class EventFilter {
  public ?availabilityZones $availability_zones;
  public ?dateTimeRangeList $end_times;
  public ?entityArnList $entity_arns;
  public ?entityValueList $entity_values;
  public ?eventArnList $event_arns;
  public ?eventStatusCodeList $event_status_codes;
  public ?eventTypeCategoryList $event_type_categories;
  public ?eventTypeList $event_type_codes;
  public ?dateTimeRangeList $last_updated_times;
  public ?regionList $regions;
  public ?serviceList $services;
  public ?dateTimeRangeList $start_times;
  public ?tagFilter $tags;

  public function __construct(shape(
    ?'availability_zones' => ?availabilityZones,
    ?'end_times' => ?dateTimeRangeList,
    ?'entity_arns' => ?entityArnList,
    ?'entity_values' => ?entityValueList,
    ?'event_arns' => ?eventArnList,
    ?'event_status_codes' => ?eventStatusCodeList,
    ?'event_type_categories' => ?eventTypeCategoryList,
    ?'event_type_codes' => ?eventTypeList,
    ?'last_updated_times' => ?dateTimeRangeList,
    ?'regions' => ?regionList,
    ?'services' => ?serviceList,
    ?'start_times' => ?dateTimeRangeList,
    ?'tags' => ?tagFilter,
  ) $s = shape()) {
    $this->availability_zones = $s['availability_zones'] ?? vec[];
    $this->end_times = $s['end_times'] ?? vec[];
    $this->entity_arns = $s['entity_arns'] ?? vec[];
    $this->entity_values = $s['entity_values'] ?? vec[];
    $this->event_arns = $s['event_arns'] ?? vec[];
    $this->event_status_codes = $s['event_status_codes'] ?? vec[];
    $this->event_type_categories = $s['event_type_categories'] ?? vec[];
    $this->event_type_codes = $s['event_type_codes'] ?? vec[];
    $this->last_updated_times = $s['last_updated_times'] ?? vec[];
    $this->regions = $s['regions'] ?? vec[];
    $this->services = $s['services'] ?? vec[];
    $this->start_times = $s['start_times'] ?? vec[];
    $this->tags = $s['tags'] ?? vec[];
  }
}

type EventList = vec<Event>;

class EventType {
  public ?eventTypeCategory $category;
  public ?eventTypeCode $code;
  public ?service $service;

  public function __construct(shape(
    ?'category' => ?eventTypeCategory,
    ?'code' => ?eventTypeCode,
    ?'service' => ?service,
  ) $s = shape()) {
    $this->category = $s['category'] ?? '';
    $this->code = $s['code'] ?? '';
    $this->service = $s['service'] ?? '';
  }
}

type EventTypeCategoryList = vec<eventTypeCategory>;

type EventTypeCodeList = vec<eventTypeCode>;

class EventTypeFilter {
  public ?EventTypeCategoryList $event_type_categories;
  public ?EventTypeCodeList $event_type_codes;
  public ?serviceList $services;

  public function __construct(shape(
    ?'event_type_categories' => ?EventTypeCategoryList,
    ?'event_type_codes' => ?EventTypeCodeList,
    ?'services' => ?serviceList,
  ) $s = shape()) {
    $this->event_type_categories = $s['event_type_categories'] ?? vec[];
    $this->event_type_codes = $s['event_type_codes'] ?? vec[];
    $this->services = $s['services'] ?? vec[];
  }
}

type EventTypeList = vec<EventType>;

class InvalidPaginationToken {
  public ?string $message;

  public function __construct(shape(
    ?'message' => ?string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class OrganizationAffectedEntitiesErrorItem {
  public ?accountId $aws_account_id;
  public ?string $error_message;
  public ?string $error_name;
  public ?eventArn $event_arn;

  public function __construct(shape(
    ?'aws_account_id' => ?accountId,
    ?'error_message' => ?string,
    ?'error_name' => ?string,
    ?'event_arn' => ?eventArn,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->error_message = $s['error_message'] ?? '';
    $this->error_name = $s['error_name'] ?? '';
    $this->event_arn = $s['event_arn'] ?? '';
  }
}

type OrganizationEntityFiltersList = vec<EventAccountFilter>;

class OrganizationEvent {
  public ?eventArn $arn;
  public ?timestamp $end_time;
  public ?eventTypeCategory $event_type_category;
  public ?eventTypeCode $event_type_code;
  public ?timestamp $last_updated_time;
  public ?region $region;
  public ?service $service;
  public ?timestamp $start_time;
  public ?eventStatusCode $status_code;

  public function __construct(shape(
    ?'arn' => ?eventArn,
    ?'end_time' => ?timestamp,
    ?'event_type_category' => ?eventTypeCategory,
    ?'event_type_code' => ?eventTypeCode,
    ?'last_updated_time' => ?timestamp,
    ?'region' => ?region,
    ?'service' => ?service,
    ?'start_time' => ?timestamp,
    ?'status_code' => ?eventStatusCode,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->end_time = $s['end_time'] ?? 0;
    $this->event_type_category = $s['event_type_category'] ?? '';
    $this->event_type_code = $s['event_type_code'] ?? '';
    $this->last_updated_time = $s['last_updated_time'] ?? 0;
    $this->region = $s['region'] ?? '';
    $this->service = $s['service'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
    $this->status_code = $s['status_code'] ?? '';
  }
}

type OrganizationEventDetailFiltersList = vec<EventAccountFilter>;

class OrganizationEventDetails {
  public ?accountId $aws_account_id;
  public ?Event $event;
  public ?EventDescription $event_description;
  public ?eventMetadata $event_metadata;

  public function __construct(shape(
    ?'aws_account_id' => ?accountId,
    ?'event' => ?Event,
    ?'event_description' => ?EventDescription,
    ?'event_metadata' => ?eventMetadata,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->event = $s['event'] ?? null;
    $this->event_description = $s['event_description'] ?? null;
    $this->event_metadata = $s['event_metadata'] ?? dict[];
  }
}

class OrganizationEventDetailsErrorItem {
  public ?accountId $aws_account_id;
  public ?string $error_message;
  public ?string $error_name;
  public ?eventArn $event_arn;

  public function __construct(shape(
    ?'aws_account_id' => ?accountId,
    ?'error_message' => ?string,
    ?'error_name' => ?string,
    ?'event_arn' => ?eventArn,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->error_message = $s['error_message'] ?? '';
    $this->error_name = $s['error_name'] ?? '';
    $this->event_arn = $s['event_arn'] ?? '';
  }
}

class OrganizationEventFilter {
  public ?awsAccountIdsList $aws_account_ids;
  public ?DateTimeRange $end_time;
  public ?entityArnList $entity_arns;
  public ?entityValueList $entity_values;
  public ?eventStatusCodeList $event_status_codes;
  public ?eventTypeCategoryList $event_type_categories;
  public ?eventTypeList $event_type_codes;
  public ?DateTimeRange $last_updated_time;
  public ?regionList $regions;
  public ?serviceList $services;
  public ?DateTimeRange $start_time;

  public function __construct(shape(
    ?'aws_account_ids' => ?awsAccountIdsList,
    ?'end_time' => ?DateTimeRange,
    ?'entity_arns' => ?entityArnList,
    ?'entity_values' => ?entityValueList,
    ?'event_status_codes' => ?eventStatusCodeList,
    ?'event_type_categories' => ?eventTypeCategoryList,
    ?'event_type_codes' => ?eventTypeList,
    ?'last_updated_time' => ?DateTimeRange,
    ?'regions' => ?regionList,
    ?'services' => ?serviceList,
    ?'start_time' => ?DateTimeRange,
  ) $s = shape()) {
    $this->aws_account_ids = $s['aws_account_ids'] ?? vec[];
    $this->end_time = $s['end_time'] ?? null;
    $this->entity_arns = $s['entity_arns'] ?? vec[];
    $this->entity_values = $s['entity_values'] ?? vec[];
    $this->event_status_codes = $s['event_status_codes'] ?? vec[];
    $this->event_type_categories = $s['event_type_categories'] ?? vec[];
    $this->event_type_codes = $s['event_type_codes'] ?? vec[];
    $this->last_updated_time = $s['last_updated_time'] ?? null;
    $this->regions = $s['regions'] ?? vec[];
    $this->services = $s['services'] ?? vec[];
    $this->start_time = $s['start_time'] ?? null;
  }
}

type OrganizationEventList = vec<OrganizationEvent>;

class UnsupportedLocale {
  public ?string $message;

  public function __construct(shape(
    ?'message' => ?string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type accountId = string;

type affectedAccountsList = vec<accountId>;

type aggregateValue = string;

type availabilityZone = string;

type availabilityZones = vec<availabilityZone>;

type awsAccountIdsList = vec<accountId>;

type count = int;

type dateTimeRangeList = vec<DateTimeRange>;

type entityArn = string;

type entityArnList = vec<entityArn>;

type entityStatusCode = string;

type entityStatusCodeList = vec<entityStatusCode>;

type entityUrl = string;

type entityValue = string;

type entityValueList = vec<entityValue>;

type eventAggregateField = string;

type eventArn = string;

type eventArnList = vec<eventArn>;

type eventDescription = string;

type eventMetadata = dict<metadataKey, metadataValue>;

type eventStatusCode = string;

type eventStatusCodeList = vec<eventStatusCode>;

type eventType = string;

type eventTypeCategory = string;

type eventTypeCategoryList = vec<eventTypeCategory>;

type eventTypeCode = string;

type eventTypeList = vec<eventType>;

type healthServiceAccessStatusForOrganization = string;

type locale = string;

type maxResults = int;

type metadataKey = string;

type metadataValue = string;

type nextToken = string;

type region = string;

type regionList = vec<region>;

type service = string;

type serviceList = vec<service>;

type string = string;

type tagFilter = vec<tagSet>;

type tagKey = string;

type tagSet = dict<tagKey, tagValue>;

type tagValue = string;

type timestamp = int;

