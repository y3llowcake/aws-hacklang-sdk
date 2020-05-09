<?hh // strict
namespace slack\aws\servicequotas;

interface Service Quotas {
  public function AssociateServiceQuotaTemplate(AssociateServiceQuotaTemplateRequest): Awaitable<Errors\Result<AssociateServiceQuotaTemplateResponse>>;
  public function DeleteServiceQuotaIncreaseRequestFromTemplate(DeleteServiceQuotaIncreaseRequestFromTemplateRequest): Awaitable<Errors\Result<DeleteServiceQuotaIncreaseRequestFromTemplateResponse>>;
  public function DisassociateServiceQuotaTemplate(DisassociateServiceQuotaTemplateRequest): Awaitable<Errors\Result<DisassociateServiceQuotaTemplateResponse>>;
  public function GetAWSDefaultServiceQuota(GetAWSDefaultServiceQuotaRequest): Awaitable<Errors\Result<GetAWSDefaultServiceQuotaResponse>>;
  public function GetAssociationForServiceQuotaTemplate(GetAssociationForServiceQuotaTemplateRequest): Awaitable<Errors\Result<GetAssociationForServiceQuotaTemplateResponse>>;
  public function GetRequestedServiceQuotaChange(GetRequestedServiceQuotaChangeRequest): Awaitable<Errors\Result<GetRequestedServiceQuotaChangeResponse>>;
  public function GetServiceQuota(GetServiceQuotaRequest): Awaitable<Errors\Result<GetServiceQuotaResponse>>;
  public function GetServiceQuotaIncreaseRequestFromTemplate(GetServiceQuotaIncreaseRequestFromTemplateRequest): Awaitable<Errors\Result<GetServiceQuotaIncreaseRequestFromTemplateResponse>>;
  public function ListAWSDefaultServiceQuotas(ListAWSDefaultServiceQuotasRequest): Awaitable<Errors\Result<ListAWSDefaultServiceQuotasResponse>>;
  public function ListRequestedServiceQuotaChangeHistory(ListRequestedServiceQuotaChangeHistoryRequest): Awaitable<Errors\Result<ListRequestedServiceQuotaChangeHistoryResponse>>;
  public function ListRequestedServiceQuotaChangeHistoryByQuota(ListRequestedServiceQuotaChangeHistoryByQuotaRequest): Awaitable<Errors\Result<ListRequestedServiceQuotaChangeHistoryByQuotaResponse>>;
  public function ListServiceQuotaIncreaseRequestsInTemplate(ListServiceQuotaIncreaseRequestsInTemplateRequest): Awaitable<Errors\Result<ListServiceQuotaIncreaseRequestsInTemplateResponse>>;
  public function ListServiceQuotas(ListServiceQuotasRequest): Awaitable<Errors\Result<ListServiceQuotasResponse>>;
  public function ListServices(ListServicesRequest): Awaitable<Errors\Result<ListServicesResponse>>;
  public function PutServiceQuotaIncreaseRequestIntoTemplate(PutServiceQuotaIncreaseRequestIntoTemplateRequest): Awaitable<Errors\Result<PutServiceQuotaIncreaseRequestIntoTemplateResponse>>;
  public function RequestServiceQuotaIncrease(RequestServiceQuotaIncreaseRequest): Awaitable<Errors\Result<RequestServiceQuotaIncreaseResponse>>;
}

class AWSServiceAccessNotEnabledException {
  public ExceptionMessage $message;
}

class AccessDeniedException {
  public ExceptionMessage $message;
}

class AssociateServiceQuotaTemplateRequest {
}

class AssociateServiceQuotaTemplateResponse {
}

class AwsRegion {
}

class CustomerServiceEngagementId {
}

class DateTime {
}

class DeleteServiceQuotaIncreaseRequestFromTemplateRequest {
  public AwsRegion $aws_region;
  public QuotaCode $quota_code;
  public ServiceCode $service_code;
}

class DeleteServiceQuotaIncreaseRequestFromTemplateResponse {
}

class DependencyAccessDeniedException {
  public ExceptionMessage $message;
}

class DisassociateServiceQuotaTemplateRequest {
}

class DisassociateServiceQuotaTemplateResponse {
}

class ErrorCode {
}

class ErrorMessage {
}

class ErrorReason {
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
}

class ExceptionMessage {
}

class GetAWSDefaultServiceQuotaRequest {
  public QuotaCode $quota_code;
  public ServiceCode $service_code;
}

class GetAWSDefaultServiceQuotaResponse {
  public ServiceQuota $quota;
}

class GetAssociationForServiceQuotaTemplateRequest {
}

class GetAssociationForServiceQuotaTemplateResponse {
  public ServiceQuotaTemplateAssociationStatus $service_quota_template_association_status;
}

class GetRequestedServiceQuotaChangeRequest {
  public RequestId $request_id;
}

class GetRequestedServiceQuotaChangeResponse {
  public RequestedServiceQuotaChange $requested_quota;
}

class GetServiceQuotaIncreaseRequestFromTemplateRequest {
  public AwsRegion $aws_region;
  public QuotaCode $quota_code;
  public ServiceCode $service_code;
}

class GetServiceQuotaIncreaseRequestFromTemplateResponse {
  public ServiceQuotaIncreaseRequestInTemplate $service_quota_increase_request_in_template;
}

class GetServiceQuotaRequest {
  public QuotaCode $quota_code;
  public ServiceCode $service_code;
}

class GetServiceQuotaResponse {
  public ServiceQuota $quota;
}

class GlobalQuota {
}

class IllegalArgumentException {
  public ExceptionMessage $message;
}

class InvalidPaginationTokenException {
  public ExceptionMessage $message;
}

class InvalidResourceStateException {
  public ExceptionMessage $message;
}

class ListAWSDefaultServiceQuotasRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ServiceCode $service_code;
}

class ListAWSDefaultServiceQuotasResponse {
  public NextToken $next_token;
  public ServiceQuotaListDefinition $quotas;
}

class ListRequestedServiceQuotaChangeHistoryByQuotaRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public QuotaCode $quota_code;
  public ServiceCode $service_code;
  public RequestStatus $status;
}

class ListRequestedServiceQuotaChangeHistoryByQuotaResponse {
  public NextToken $next_token;
  public RequestedServiceQuotaChangeHistoryListDefinition $requested_quotas;
}

class ListRequestedServiceQuotaChangeHistoryRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ServiceCode $service_code;
  public RequestStatus $status;
}

class ListRequestedServiceQuotaChangeHistoryResponse {
  public NextToken $next_token;
  public RequestedServiceQuotaChangeHistoryListDefinition $requested_quotas;
}

class ListServiceQuotaIncreaseRequestsInTemplateRequest {
  public AwsRegion $aws_region;
  public MaxResults $max_results;
  public NextToken $next_token;
  public ServiceCode $service_code;
}

class ListServiceQuotaIncreaseRequestsInTemplateResponse {
  public NextToken $next_token;
  public ServiceQuotaIncreaseRequestInTemplateList $service_quota_increase_request_in_template_list;
}

class ListServiceQuotasRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ServiceCode $service_code;
}

class ListServiceQuotasResponse {
  public NextToken $next_token;
  public ServiceQuotaListDefinition $quotas;
}

class ListServicesRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListServicesResponse {
  public NextToken $next_token;
  public ServiceInfoListDefinition $services;
}

class MaxResults {
}

class MetricDimensionName {
}

class MetricDimensionValue {
}

class MetricDimensionsMapDefinition {
}

class MetricInfo {
  public MetricDimensionsMapDefinition $metric_dimensions;
  public QuotaMetricName $metric_name;
  public QuotaMetricNamespace $metric_namespace;
  public Statistic $metric_statistic_recommendation;
}

class NextToken {
}

class NoAvailableOrganizationException {
  public ExceptionMessage $message;
}

class NoSuchResourceException {
  public ExceptionMessage $message;
}

class OrganizationNotInAllFeaturesModeException {
  public ExceptionMessage $message;
}

class PeriodUnit {
}

class PeriodValue {
}

class PutServiceQuotaIncreaseRequestIntoTemplateRequest {
  public AwsRegion $aws_region;
  public QuotaValue $desired_value;
  public QuotaCode $quota_code;
  public ServiceCode $service_code;
}

class PutServiceQuotaIncreaseRequestIntoTemplateResponse {
  public ServiceQuotaIncreaseRequestInTemplate $service_quota_increase_request_in_template;
}

class QuotaAdjustable {
}

class QuotaArn {
}

class QuotaCode {
}

class QuotaExceededException {
  public ExceptionMessage $message;
}

class QuotaMetricName {
}

class QuotaMetricNamespace {
}

class QuotaName {
}

class QuotaPeriod {
  public PeriodUnit $period_unit;
  public PeriodValue $period_value;
}

class QuotaUnit {
}

class QuotaValue {
}

class RequestId {
}

class RequestServiceQuotaIncreaseRequest {
  public QuotaValue $desired_value;
  public QuotaCode $quota_code;
  public ServiceCode $service_code;
}

class RequestServiceQuotaIncreaseResponse {
  public RequestedServiceQuotaChange $requested_quota;
}

class RequestStatus {
}

class RequestedServiceQuotaChange {
  public CustomerServiceEngagementId $case_id;
  public DateTime $created;
  public QuotaValue $desired_value;
  public GlobalQuota $global_quota;
  public RequestId $id;
  public DateTime $last_updated;
  public QuotaArn $quota_arn;
  public QuotaCode $quota_code;
  public QuotaName $quota_name;
  public Requester $requester;
  public ServiceCode $service_code;
  public ServiceName $service_name;
  public RequestStatus $status;
  public QuotaUnit $unit;
}

class RequestedServiceQuotaChangeHistoryListDefinition {
}

class Requester {
}

class ResourceAlreadyExistsException {
  public ExceptionMessage $message;
}

class ServiceCode {
}

class ServiceException {
  public ExceptionMessage $message;
}

class ServiceInfo {
  public ServiceCode $service_code;
  public ServiceName $service_name;
}

class ServiceInfoListDefinition {
}

class ServiceName {
}

class ServiceQuota {
  public QuotaAdjustable $adjustable;
  public ErrorReason $error_reason;
  public GlobalQuota $global_quota;
  public QuotaPeriod $period;
  public QuotaArn $quota_arn;
  public QuotaCode $quota_code;
  public QuotaName $quota_name;
  public ServiceCode $service_code;
  public ServiceName $service_name;
  public QuotaUnit $unit;
  public MetricInfo $usage_metric;
  public QuotaValue $value;
}

class ServiceQuotaIncreaseRequestInTemplate {
  public AwsRegion $aws_region;
  public QuotaValue $desired_value;
  public GlobalQuota $global_quota;
  public QuotaCode $quota_code;
  public QuotaName $quota_name;
  public ServiceCode $service_code;
  public ServiceName $service_name;
  public QuotaUnit $unit;
}

class ServiceQuotaIncreaseRequestInTemplateList {
}

class ServiceQuotaListDefinition {
}

class ServiceQuotaTemplateAssociationStatus {
}

class ServiceQuotaTemplateNotInUseException {
  public ExceptionMessage $message;
}

class Statistic {
}

class TemplatesNotAvailableInRegionException {
  public ExceptionMessage $message;
}

class TooManyRequestsException {
  public ExceptionMessage $message;
}

