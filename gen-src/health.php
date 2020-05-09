<?hh // strict
namespace slack\aws\health;

interface Health {
  public function DescribeEventDetails(DescribeEventDetailsRequest) Awaitable<Errors\Result<DescribeEventDetailsResponse>>;
  public function DescribeEventsForOrganization(DescribeEventsForOrganizationRequest) Awaitable<Errors\Result<DescribeEventsForOrganizationResponse>>;
  public function DescribeHealthServiceStatusForOrganization() Awaitable<Errors\Result<DescribeHealthServiceStatusForOrganizationResponse>>;
  public function DescribeAffectedEntities(DescribeAffectedEntitiesRequest) Awaitable<Errors\Result<DescribeAffectedEntitiesResponse>>;
  public function DescribeEntityAggregates(DescribeEntityAggregatesRequest) Awaitable<Errors\Result<DescribeEntityAggregatesResponse>>;
  public function DescribeEventAggregates(DescribeEventAggregatesRequest) Awaitable<Errors\Result<DescribeEventAggregatesResponse>>;
  public function DescribeEventDetailsForOrganization(DescribeEventDetailsForOrganizationRequest) Awaitable<Errors\Result<DescribeEventDetailsForOrganizationResponse>>;
  public function DescribeEventTypes(DescribeEventTypesRequest) Awaitable<Errors\Result<DescribeEventTypesResponse>>;
  public function DescribeEvents(DescribeEventsRequest) Awaitable<Errors\Result<DescribeEventsResponse>>;
  public function DisableHealthServiceAccessForOrganization() Awaitable<Errors\Error>;
  public function EnableHealthServiceAccessForOrganization() Awaitable<Errors\Error>;
  public function DescribeAffectedAccountsForOrganization(DescribeAffectedAccountsForOrganizationRequest) Awaitable<Errors\Result<DescribeAffectedAccountsForOrganizationResponse>>;
  public function DescribeAffectedEntitiesForOrganization(DescribeAffectedEntitiesForOrganizationRequest) Awaitable<Errors\Result<DescribeAffectedEntitiesForOrganizationResponse>>;
}

class DescribeEventAggregatesResponse {
  public EventAggregateList $event_aggregates;
  public nextToken $next_token;
}

class DescribeEventDetailsForOrganizationFailedSet {
}

class regionList {
}

class tagValue {
}

class OrganizationEntityFiltersList {
}

class UnsupportedLocale {
  public string $message;
}

class accountId {
}

class eventAggregateField {
}

class tagSet {
}

class DescribeEntityAggregatesResponse {
  public EntityAggregateList $entity_aggregates;
}

class DescribeEventDetailsForOrganizationResponse {
  public DescribeEventDetailsForOrganizationSuccessfulSet $successful_set;
  public DescribeEventDetailsForOrganizationFailedSet $failed_set;
}

class affectedAccountsList {
}

class awsAccountIdsList {
}

class locale {
}

class tagFilter {
}

class EntityFilter {
  public tagFilter $tags;
  public entityStatusCodeList $status_codes;
  public eventArnList $event_arns;
  public entityArnList $entity_arns;
  public entityValueList $entity_values;
  public dateTimeRangeList $last_updated_times;
}

class availabilityZones {
}

class eventArnList {
}

class serviceList {
}

class DescribeEventAggregatesRequest {
  public EventFilter $filter;
  public eventAggregateField $aggregate_field;
  public maxResults $max_results;
  public nextToken $next_token;
}

class EventDetailsErrorItem {
  public eventArn $event_arn;
  public string $error_name;
  public string $error_message;
}

class EventType {
  public eventTypeCode $code;
  public eventTypeCategory $category;
  public service $service;
}

class entityValueList {
}

class timestamp {
}

class InvalidPaginationToken {
  public string $message;
}

class entityArnList {
}

class entityStatusCodeList {
}

class DescribeAffectedEntitiesForOrganizationRequest {
  public OrganizationEntityFiltersList $organization_entity_filters;
  public locale $locale;
  public nextToken $next_token;
  public maxResults $max_results;
}

class DescribeEventDetailsForOrganizationRequest {
  public locale $locale;
  public OrganizationEventDetailFiltersList $organization_event_detail_filters;
}

class DescribeEventDetailsRequest {
  public eventArnList $event_arns;
  public locale $locale;
}

class DescribeEventTypesResponse {
  public EventTypeList $event_types;
  public nextToken $next_token;
}

class EventDescription {
  public eventDescription $latest_description;
}

class EventTypeCodeList {
}

class eventTypeList {
}

class metadataKey {
}

class eventStatusCodeList {
}

class string {
}

class AffectedEntity {
  public eventArn $event_arn;
  public entityValue $entity_value;
  public entityUrl $entity_url;
  public accountId $aws_account_id;
  public timestamp $last_updated_time;
  public entityStatusCode $status_code;
  public tagSet $tags;
  public entityArn $entity_arn;
}

class DescribeEventTypesRequest {
  public maxResults $max_results;
  public EventTypeFilter $filter;
  public locale $locale;
  public nextToken $next_token;
}

class DescribeEventsForOrganizationResponse {
  public OrganizationEventList $events;
  public nextToken $next_token;
}

class EventAggregateList {
}

class count {
}

class eventDescription {
}

class eventTypeCategoryList {
}

class DescribeAffectedEntitiesResponse {
  public EntityList $entities;
  public nextToken $next_token;
}

class DescribeEventDetailsSuccessfulSet {
}

class EventTypeCategoryList {
}

class EventTypeFilter {
  public EventTypeCategoryList $event_type_categories;
  public EventTypeCodeList $event_type_codes;
  public serviceList $services;
}

class entityValue {
}

class eventMetadata {
}

class DescribeEventsRequest {
  public maxResults $max_results;
  public locale $locale;
  public EventFilter $filter;
  public nextToken $next_token;
}

class DescribeEventsResponse {
  public EventList $events;
  public nextToken $next_token;
}

class Event {
  public availabilityZone $availability_zone;
  public timestamp $end_time;
  public eventArn $arn;
  public eventTypeCode $event_type_code;
  public eventTypeCategory $event_type_category;
  public region $region;
  public service $service;
  public timestamp $start_time;
  public timestamp $last_updated_time;
  public eventStatusCode $status_code;
}

class EventTypeList {
}

class OrganizationEventDetails {
  public EventDescription $event_description;
  public eventMetadata $event_metadata;
  public accountId $aws_account_id;
  public Event $event;
}

class entityUrl {
}

class entityStatusCode {
}

class eventTypeCode {
}

class maxResults {
}

class region {
}

class tagKey {
}

class nextToken {
}

class DescribeAffectedAccountsForOrganizationRequest {
  public eventArn $event_arn;
  public nextToken $next_token;
  public maxResults $max_results;
}

class DescribeEventDetailsFailedSet {
}

class DescribeEventsForOrganizationRequest {
  public maxResults $max_results;
  public locale $locale;
  public OrganizationEventFilter $filter;
  public nextToken $next_token;
}

class EventList {
}

class OrganizationAffectedEntitiesErrorItem {
  public accountId $aws_account_id;
  public eventArn $event_arn;
  public string $error_name;
  public string $error_message;
}

class availabilityZone {
}

class EventFilter {
  public entityValueList $entity_values;
  public eventArnList $event_arns;
  public eventTypeList $event_type_codes;
  public regionList $regions;
  public availabilityZones $availability_zones;
  public dateTimeRangeList $start_times;
  public dateTimeRangeList $end_times;
  public entityArnList $entity_arns;
  public eventTypeCategoryList $event_type_categories;
  public serviceList $services;
  public dateTimeRangeList $last_updated_times;
  public tagFilter $tags;
  public eventStatusCodeList $event_status_codes;
}

class OrganizationEventDetailsErrorItem {
  public string $error_message;
  public accountId $aws_account_id;
  public eventArn $event_arn;
  public string $error_name;
}

class ConcurrentModificationException {
  public string $message;
}

class DateTimeRange {
  public timestamp $from;
  public timestamp $to;
}

class DescribeEventDetailsResponse {
  public DescribeEventDetailsFailedSet $failed_set;
  public DescribeEventDetailsSuccessfulSet $successful_set;
}

class EntityAggregateList {
}

class EventAggregate {
  public aggregateValue $aggregate_value;
  public count $count;
}

class EventDetails {
  public eventMetadata $event_metadata;
  public Event $event;
  public EventDescription $event_description;
}

class eventType {
}

class service {
}

class DescribeEventDetailsForOrganizationSuccessfulSet {
}

class EntityAggregate {
  public eventArn $event_arn;
  public count $count;
}

class EntityList {
}

class EventArnsList {
}

class aggregateValue {
}

class eventArn {
}

class dateTimeRangeList {
}

class entityArn {
}

class DescribeAffectedAccountsForOrganizationResponse {
  public affectedAccountsList $affected_accounts;
  public nextToken $next_token;
}

class DescribeAffectedEntitiesForOrganizationResponse {
  public EntityList $entities;
  public DescribeAffectedEntitiesForOrganizationFailedSet $failed_set;
  public nextToken $next_token;
}

class DescribeAffectedEntitiesRequest {
  public EntityFilter $filter;
  public locale $locale;
  public nextToken $next_token;
  public maxResults $max_results;
}

class DescribeEntityAggregatesRequest {
  public EventArnsList $event_arns;
}

class OrganizationEvent {
  public eventArn $arn;
  public eventTypeCode $event_type_code;
  public timestamp $end_time;
  public timestamp $last_updated_time;
  public eventStatusCode $status_code;
  public service $service;
  public eventTypeCategory $event_type_category;
  public region $region;
  public timestamp $start_time;
}

class OrganizationEventDetailFiltersList {
}

class eventStatusCode {
}

class healthServiceAccessStatusForOrganization {
}

class metadataValue {
}

class DescribeAffectedEntitiesForOrganizationFailedSet {
}

class DescribeHealthServiceStatusForOrganizationResponse {
  public healthServiceAccessStatusForOrganization $health_service_access_status_for_organization;
}

class EventAccountFilter {
  public eventArn $event_arn;
  public accountId $aws_account_id;
}

class OrganizationEventFilter {
  public serviceList $services;
  public regionList $regions;
  public DateTimeRange $end_time;
  public entityArnList $entity_arns;
  public entityValueList $entity_values;
  public eventTypeCategoryList $event_type_categories;
  public eventStatusCodeList $event_status_codes;
  public eventTypeList $event_type_codes;
  public awsAccountIdsList $aws_account_ids;
  public DateTimeRange $start_time;
  public DateTimeRange $last_updated_time;
}

class OrganizationEventList {
}

class eventTypeCategory {
}

