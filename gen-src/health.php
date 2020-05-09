<?hh // strict
namespace slack\aws\health;

interface Health {
  public function DescribeAffectedAccountsForOrganization(DescribeAffectedAccountsForOrganizationRequest): Awaitable<Errors\Result<DescribeAffectedAccountsForOrganizationResponse>>;
  public function DescribeAffectedEntities(DescribeAffectedEntitiesRequest): Awaitable<Errors\Result<DescribeAffectedEntitiesResponse>>;
  public function DescribeAffectedEntitiesForOrganization(DescribeAffectedEntitiesForOrganizationRequest): Awaitable<Errors\Result<DescribeAffectedEntitiesForOrganizationResponse>>;
  public function DescribeEntityAggregates(DescribeEntityAggregatesRequest): Awaitable<Errors\Result<DescribeEntityAggregatesResponse>>;
  public function DescribeEventAggregates(DescribeEventAggregatesRequest): Awaitable<Errors\Result<DescribeEventAggregatesResponse>>;
  public function DescribeEventDetails(DescribeEventDetailsRequest): Awaitable<Errors\Result<DescribeEventDetailsResponse>>;
  public function DescribeEventDetailsForOrganization(DescribeEventDetailsForOrganizationRequest): Awaitable<Errors\Result<DescribeEventDetailsForOrganizationResponse>>;
  public function DescribeEventTypes(DescribeEventTypesRequest): Awaitable<Errors\Result<DescribeEventTypesResponse>>;
  public function DescribeEvents(DescribeEventsRequest): Awaitable<Errors\Result<DescribeEventsResponse>>;
  public function DescribeEventsForOrganization(DescribeEventsForOrganizationRequest): Awaitable<Errors\Result<DescribeEventsForOrganizationResponse>>;
  public function DescribeHealthServiceStatusForOrganization(): Awaitable<Errors\Result<DescribeHealthServiceStatusForOrganizationResponse>>;
  public function DisableHealthServiceAccessForOrganization(): Awaitable<Errors\Error>;
  public function EnableHealthServiceAccessForOrganization(): Awaitable<Errors\Error>;
}

class AffectedEntity {
  public accountId $aws_account_id;
  public entityArn $entity_arn;
  public entityUrl $entity_url;
  public entityValue $entity_value;
  public eventArn $event_arn;
  public timestamp $last_updated_time;
  public entityStatusCode $status_code;
  public tagSet $tags;
}

class ConcurrentModificationException {
  public string $message;
}

class DateTimeRange {
  public timestamp $from;
  public timestamp $to;
}

class DescribeAffectedAccountsForOrganizationRequest {
  public eventArn $event_arn;
  public maxResults $max_results;
  public nextToken $next_token;
}

class DescribeAffectedAccountsForOrganizationResponse {
  public affectedAccountsList $affected_accounts;
  public nextToken $next_token;
}

class DescribeAffectedEntitiesForOrganizationFailedSet {
}

class DescribeAffectedEntitiesForOrganizationRequest {
  public locale $locale;
  public maxResults $max_results;
  public nextToken $next_token;
  public OrganizationEntityFiltersList $organization_entity_filters;
}

class DescribeAffectedEntitiesForOrganizationResponse {
  public EntityList $entities;
  public DescribeAffectedEntitiesForOrganizationFailedSet $failed_set;
  public nextToken $next_token;
}

class DescribeAffectedEntitiesRequest {
  public EntityFilter $filter;
  public locale $locale;
  public maxResults $max_results;
  public nextToken $next_token;
}

class DescribeAffectedEntitiesResponse {
  public EntityList $entities;
  public nextToken $next_token;
}

class DescribeEntityAggregatesRequest {
  public EventArnsList $event_arns;
}

class DescribeEntityAggregatesResponse {
  public EntityAggregateList $entity_aggregates;
}

class DescribeEventAggregatesRequest {
  public eventAggregateField $aggregate_field;
  public EventFilter $filter;
  public maxResults $max_results;
  public nextToken $next_token;
}

class DescribeEventAggregatesResponse {
  public EventAggregateList $event_aggregates;
  public nextToken $next_token;
}

class DescribeEventDetailsFailedSet {
}

class DescribeEventDetailsForOrganizationFailedSet {
}

class DescribeEventDetailsForOrganizationRequest {
  public locale $locale;
  public OrganizationEventDetailFiltersList $organization_event_detail_filters;
}

class DescribeEventDetailsForOrganizationResponse {
  public DescribeEventDetailsForOrganizationFailedSet $failed_set;
  public DescribeEventDetailsForOrganizationSuccessfulSet $successful_set;
}

class DescribeEventDetailsForOrganizationSuccessfulSet {
}

class DescribeEventDetailsRequest {
  public eventArnList $event_arns;
  public locale $locale;
}

class DescribeEventDetailsResponse {
  public DescribeEventDetailsFailedSet $failed_set;
  public DescribeEventDetailsSuccessfulSet $successful_set;
}

class DescribeEventDetailsSuccessfulSet {
}

class DescribeEventTypesRequest {
  public EventTypeFilter $filter;
  public locale $locale;
  public maxResults $max_results;
  public nextToken $next_token;
}

class DescribeEventTypesResponse {
  public EventTypeList $event_types;
  public nextToken $next_token;
}

class DescribeEventsForOrganizationRequest {
  public OrganizationEventFilter $filter;
  public locale $locale;
  public maxResults $max_results;
  public nextToken $next_token;
}

class DescribeEventsForOrganizationResponse {
  public OrganizationEventList $events;
  public nextToken $next_token;
}

class DescribeEventsRequest {
  public EventFilter $filter;
  public locale $locale;
  public maxResults $max_results;
  public nextToken $next_token;
}

class DescribeEventsResponse {
  public EventList $events;
  public nextToken $next_token;
}

class DescribeHealthServiceStatusForOrganizationResponse {
  public healthServiceAccessStatusForOrganization $health_service_access_status_for_organization;
}

class EntityAggregate {
  public count $count;
  public eventArn $event_arn;
}

class EntityAggregateList {
}

class EntityFilter {
  public entityArnList $entity_arns;
  public entityValueList $entity_values;
  public eventArnList $event_arns;
  public dateTimeRangeList $last_updated_times;
  public entityStatusCodeList $status_codes;
  public tagFilter $tags;
}

class EntityList {
}

class Event {
  public eventArn $arn;
  public availabilityZone $availability_zone;
  public timestamp $end_time;
  public eventTypeCategory $event_type_category;
  public eventTypeCode $event_type_code;
  public timestamp $last_updated_time;
  public region $region;
  public service $service;
  public timestamp $start_time;
  public eventStatusCode $status_code;
}

class EventAccountFilter {
  public accountId $aws_account_id;
  public eventArn $event_arn;
}

class EventAggregate {
  public aggregateValue $aggregate_value;
  public count $count;
}

class EventAggregateList {
}

class EventArnsList {
}

class EventDescription {
  public eventDescription $latest_description;
}

class EventDetails {
  public Event $event;
  public EventDescription $event_description;
  public eventMetadata $event_metadata;
}

class EventDetailsErrorItem {
  public string $error_message;
  public string $error_name;
  public eventArn $event_arn;
}

class EventFilter {
  public availabilityZones $availability_zones;
  public dateTimeRangeList $end_times;
  public entityArnList $entity_arns;
  public entityValueList $entity_values;
  public eventArnList $event_arns;
  public eventStatusCodeList $event_status_codes;
  public eventTypeCategoryList $event_type_categories;
  public eventTypeList $event_type_codes;
  public dateTimeRangeList $last_updated_times;
  public regionList $regions;
  public serviceList $services;
  public dateTimeRangeList $start_times;
  public tagFilter $tags;
}

class EventList {
}

class EventType {
  public eventTypeCategory $category;
  public eventTypeCode $code;
  public service $service;
}

class EventTypeCategoryList {
}

class EventTypeCodeList {
}

class EventTypeFilter {
  public EventTypeCategoryList $event_type_categories;
  public EventTypeCodeList $event_type_codes;
  public serviceList $services;
}

class EventTypeList {
}

class InvalidPaginationToken {
  public string $message;
}

class OrganizationAffectedEntitiesErrorItem {
  public accountId $aws_account_id;
  public string $error_message;
  public string $error_name;
  public eventArn $event_arn;
}

class OrganizationEntityFiltersList {
}

class OrganizationEvent {
  public eventArn $arn;
  public timestamp $end_time;
  public eventTypeCategory $event_type_category;
  public eventTypeCode $event_type_code;
  public timestamp $last_updated_time;
  public region $region;
  public service $service;
  public timestamp $start_time;
  public eventStatusCode $status_code;
}

class OrganizationEventDetailFiltersList {
}

class OrganizationEventDetails {
  public accountId $aws_account_id;
  public Event $event;
  public EventDescription $event_description;
  public eventMetadata $event_metadata;
}

class OrganizationEventDetailsErrorItem {
  public accountId $aws_account_id;
  public string $error_message;
  public string $error_name;
  public eventArn $event_arn;
}

class OrganizationEventFilter {
  public awsAccountIdsList $aws_account_ids;
  public DateTimeRange $end_time;
  public entityArnList $entity_arns;
  public entityValueList $entity_values;
  public eventStatusCodeList $event_status_codes;
  public eventTypeCategoryList $event_type_categories;
  public eventTypeList $event_type_codes;
  public DateTimeRange $last_updated_time;
  public regionList $regions;
  public serviceList $services;
  public DateTimeRange $start_time;
}

class OrganizationEventList {
}

class UnsupportedLocale {
  public string $message;
}

class accountId {
}

class affectedAccountsList {
}

class aggregateValue {
}

class availabilityZone {
}

class availabilityZones {
}

class awsAccountIdsList {
}

class count {
}

class dateTimeRangeList {
}

class entityArn {
}

class entityArnList {
}

class entityStatusCode {
}

class entityStatusCodeList {
}

class entityUrl {
}

class entityValue {
}

class entityValueList {
}

class eventAggregateField {
}

class eventArn {
}

class eventArnList {
}

class eventDescription {
}

class eventMetadata {
}

class eventStatusCode {
}

class eventStatusCodeList {
}

class eventType {
}

class eventTypeCategory {
}

class eventTypeCategoryList {
}

class eventTypeCode {
}

class eventTypeList {
}

class healthServiceAccessStatusForOrganization {
}

class locale {
}

class maxResults {
}

class metadataKey {
}

class metadataValue {
}

class nextToken {
}

class region {
}

class regionList {
}

class service {
}

class serviceList {
}

class string {
}

class tagFilter {
}

class tagKey {
}

class tagSet {
}

class tagValue {
}

class timestamp {
}

