<?hh // strict
namespace slack\aws\servicequotas;

interface ServiceQuotas {
  public function AssociateServiceQuotaTemplate(AssociateServiceQuotaTemplateRequest $in): Awaitable<\Errors\Result<AssociateServiceQuotaTemplateResponse>>;
  public function DeleteServiceQuotaIncreaseRequestFromTemplate(DeleteServiceQuotaIncreaseRequestFromTemplateRequest $in): Awaitable<\Errors\Result<DeleteServiceQuotaIncreaseRequestFromTemplateResponse>>;
  public function DisassociateServiceQuotaTemplate(DisassociateServiceQuotaTemplateRequest $in): Awaitable<\Errors\Result<DisassociateServiceQuotaTemplateResponse>>;
  public function GetAWSDefaultServiceQuota(GetAWSDefaultServiceQuotaRequest $in): Awaitable<\Errors\Result<GetAWSDefaultServiceQuotaResponse>>;
  public function GetAssociationForServiceQuotaTemplate(GetAssociationForServiceQuotaTemplateRequest $in): Awaitable<\Errors\Result<GetAssociationForServiceQuotaTemplateResponse>>;
  public function GetRequestedServiceQuotaChange(GetRequestedServiceQuotaChangeRequest $in): Awaitable<\Errors\Result<GetRequestedServiceQuotaChangeResponse>>;
  public function GetServiceQuota(GetServiceQuotaRequest $in): Awaitable<\Errors\Result<GetServiceQuotaResponse>>;
  public function GetServiceQuotaIncreaseRequestFromTemplate(GetServiceQuotaIncreaseRequestFromTemplateRequest $in): Awaitable<\Errors\Result<GetServiceQuotaIncreaseRequestFromTemplateResponse>>;
  public function ListAWSDefaultServiceQuotas(ListAWSDefaultServiceQuotasRequest $in): Awaitable<\Errors\Result<ListAWSDefaultServiceQuotasResponse>>;
  public function ListRequestedServiceQuotaChangeHistory(ListRequestedServiceQuotaChangeHistoryRequest $in): Awaitable<\Errors\Result<ListRequestedServiceQuotaChangeHistoryResponse>>;
  public function ListRequestedServiceQuotaChangeHistoryByQuota(ListRequestedServiceQuotaChangeHistoryByQuotaRequest $in): Awaitable<\Errors\Result<ListRequestedServiceQuotaChangeHistoryByQuotaResponse>>;
  public function ListServiceQuotaIncreaseRequestsInTemplate(ListServiceQuotaIncreaseRequestsInTemplateRequest $in): Awaitable<\Errors\Result<ListServiceQuotaIncreaseRequestsInTemplateResponse>>;
  public function ListServiceQuotas(ListServiceQuotasRequest $in): Awaitable<\Errors\Result<ListServiceQuotasResponse>>;
  public function ListServices(ListServicesRequest $in): Awaitable<\Errors\Result<ListServicesResponse>>;
  public function PutServiceQuotaIncreaseRequestIntoTemplate(PutServiceQuotaIncreaseRequestIntoTemplateRequest $in): Awaitable<\Errors\Result<PutServiceQuotaIncreaseRequestIntoTemplateResponse>>;
  public function RequestServiceQuotaIncrease(RequestServiceQuotaIncreaseRequest $in): Awaitable<\Errors\Result<RequestServiceQuotaIncreaseResponse>>;
}

class AWSServiceAccessNotEnabledException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class AccessDeniedException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class AssociateServiceQuotaTemplateRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AssociateServiceQuotaTemplateResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type AwsRegion = string;

type CustomerServiceEngagementId = string;

type DateTime = int;

class DeleteServiceQuotaIncreaseRequestFromTemplateRequest {
  public ?AwsRegion $aws_region;
  public ?QuotaCode $quota_code;
  public ?ServiceCode $service_code;

  public function __construct(shape(
    ?'aws_region' => ?AwsRegion,
    ?'quota_code' => ?QuotaCode,
    ?'service_code' => ?ServiceCode,
  ) $s = shape()) {
    $this->aws_region = $s['aws_region'] ?? '';
    $this->quota_code = $s['quota_code'] ?? '';
    $this->service_code = $s['service_code'] ?? '';
  }
}

class DeleteServiceQuotaIncreaseRequestFromTemplateResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DependencyAccessDeniedException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class DisassociateServiceQuotaTemplateRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisassociateServiceQuotaTemplateResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ErrorCode = string;

type ErrorMessage = string;

class ErrorReason {
  public ?ErrorCode $error_code;
  public ?ErrorMessage $error_message;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'error_message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->error_message = $s['error_message'] ?? '';
  }
}

type ExceptionMessage = string;

class GetAWSDefaultServiceQuotaRequest {
  public ?QuotaCode $quota_code;
  public ?ServiceCode $service_code;

  public function __construct(shape(
    ?'quota_code' => ?QuotaCode,
    ?'service_code' => ?ServiceCode,
  ) $s = shape()) {
    $this->quota_code = $s['quota_code'] ?? '';
    $this->service_code = $s['service_code'] ?? '';
  }
}

class GetAWSDefaultServiceQuotaResponse {
  public ?ServiceQuota $quota;

  public function __construct(shape(
    ?'quota' => ?ServiceQuota,
  ) $s = shape()) {
    $this->quota = $s['quota'] ?? null;
  }
}

class GetAssociationForServiceQuotaTemplateRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetAssociationForServiceQuotaTemplateResponse {
  public ?ServiceQuotaTemplateAssociationStatus $service_quota_template_association_status;

  public function __construct(shape(
    ?'service_quota_template_association_status' => ?ServiceQuotaTemplateAssociationStatus,
  ) $s = shape()) {
    $this->service_quota_template_association_status = $s['service_quota_template_association_status'] ?? '';
  }
}

class GetRequestedServiceQuotaChangeRequest {
  public ?RequestId $request_id;

  public function __construct(shape(
    ?'request_id' => ?RequestId,
  ) $s = shape()) {
    $this->request_id = $s['request_id'] ?? '';
  }
}

class GetRequestedServiceQuotaChangeResponse {
  public ?RequestedServiceQuotaChange $requested_quota;

  public function __construct(shape(
    ?'requested_quota' => ?RequestedServiceQuotaChange,
  ) $s = shape()) {
    $this->requested_quota = $s['requested_quota'] ?? null;
  }
}

class GetServiceQuotaIncreaseRequestFromTemplateRequest {
  public ?AwsRegion $aws_region;
  public ?QuotaCode $quota_code;
  public ?ServiceCode $service_code;

  public function __construct(shape(
    ?'aws_region' => ?AwsRegion,
    ?'quota_code' => ?QuotaCode,
    ?'service_code' => ?ServiceCode,
  ) $s = shape()) {
    $this->aws_region = $s['aws_region'] ?? '';
    $this->quota_code = $s['quota_code'] ?? '';
    $this->service_code = $s['service_code'] ?? '';
  }
}

class GetServiceQuotaIncreaseRequestFromTemplateResponse {
  public ?ServiceQuotaIncreaseRequestInTemplate $service_quota_increase_request_in_template;

  public function __construct(shape(
    ?'service_quota_increase_request_in_template' => ?ServiceQuotaIncreaseRequestInTemplate,
  ) $s = shape()) {
    $this->service_quota_increase_request_in_template = $s['service_quota_increase_request_in_template'] ?? null;
  }
}

class GetServiceQuotaRequest {
  public ?QuotaCode $quota_code;
  public ?ServiceCode $service_code;

  public function __construct(shape(
    ?'quota_code' => ?QuotaCode,
    ?'service_code' => ?ServiceCode,
  ) $s = shape()) {
    $this->quota_code = $s['quota_code'] ?? '';
    $this->service_code = $s['service_code'] ?? '';
  }
}

class GetServiceQuotaResponse {
  public ?ServiceQuota $quota;

  public function __construct(shape(
    ?'quota' => ?ServiceQuota,
  ) $s = shape()) {
    $this->quota = $s['quota'] ?? null;
  }
}

type GlobalQuota = bool;

class IllegalArgumentException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidPaginationTokenException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidResourceStateException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ListAWSDefaultServiceQuotasRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?ServiceCode $service_code;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'service_code' => ?ServiceCode,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->service_code = $s['service_code'] ?? '';
  }
}

class ListAWSDefaultServiceQuotasResponse {
  public ?NextToken $next_token;
  public ?ServiceQuotaListDefinition $quotas;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'quotas' => ?ServiceQuotaListDefinition,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->quotas = $s['quotas'] ?? vec[];
  }
}

class ListRequestedServiceQuotaChangeHistoryByQuotaRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?QuotaCode $quota_code;
  public ?ServiceCode $service_code;
  public ?RequestStatus $status;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'quota_code' => ?QuotaCode,
    ?'service_code' => ?ServiceCode,
    ?'status' => ?RequestStatus,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->quota_code = $s['quota_code'] ?? '';
    $this->service_code = $s['service_code'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class ListRequestedServiceQuotaChangeHistoryByQuotaResponse {
  public ?NextToken $next_token;
  public ?RequestedServiceQuotaChangeHistoryListDefinition $requested_quotas;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'requested_quotas' => ?RequestedServiceQuotaChangeHistoryListDefinition,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->requested_quotas = $s['requested_quotas'] ?? vec[];
  }
}

class ListRequestedServiceQuotaChangeHistoryRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?ServiceCode $service_code;
  public ?RequestStatus $status;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'service_code' => ?ServiceCode,
    ?'status' => ?RequestStatus,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->service_code = $s['service_code'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class ListRequestedServiceQuotaChangeHistoryResponse {
  public ?NextToken $next_token;
  public ?RequestedServiceQuotaChangeHistoryListDefinition $requested_quotas;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'requested_quotas' => ?RequestedServiceQuotaChangeHistoryListDefinition,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->requested_quotas = $s['requested_quotas'] ?? vec[];
  }
}

class ListServiceQuotaIncreaseRequestsInTemplateRequest {
  public ?AwsRegion $aws_region;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?ServiceCode $service_code;

  public function __construct(shape(
    ?'aws_region' => ?AwsRegion,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'service_code' => ?ServiceCode,
  ) $s = shape()) {
    $this->aws_region = $s['aws_region'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->service_code = $s['service_code'] ?? '';
  }
}

class ListServiceQuotaIncreaseRequestsInTemplateResponse {
  public ?NextToken $next_token;
  public ?ServiceQuotaIncreaseRequestInTemplateList $service_quota_increase_request_in_template_list;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'service_quota_increase_request_in_template_list' => ?ServiceQuotaIncreaseRequestInTemplateList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->service_quota_increase_request_in_template_list = $s['service_quota_increase_request_in_template_list'] ?? vec[];
  }
}

class ListServiceQuotasRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?ServiceCode $service_code;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'service_code' => ?ServiceCode,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->service_code = $s['service_code'] ?? '';
  }
}

class ListServiceQuotasResponse {
  public ?NextToken $next_token;
  public ?ServiceQuotaListDefinition $quotas;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'quotas' => ?ServiceQuotaListDefinition,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->quotas = $s['quotas'] ?? vec[];
  }
}

class ListServicesRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListServicesResponse {
  public ?NextToken $next_token;
  public ?ServiceInfoListDefinition $services;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'services' => ?ServiceInfoListDefinition,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->services = $s['services'] ?? vec[];
  }
}

type MaxResults = int;

type MetricDimensionName = string;

type MetricDimensionValue = string;

type MetricDimensionsMapDefinition = dict<MetricDimensionName, MetricDimensionValue>;

class MetricInfo {
  public ?MetricDimensionsMapDefinition $metric_dimensions;
  public ?QuotaMetricName $metric_name;
  public ?QuotaMetricNamespace $metric_namespace;
  public ?Statistic $metric_statistic_recommendation;

  public function __construct(shape(
    ?'metric_dimensions' => ?MetricDimensionsMapDefinition,
    ?'metric_name' => ?QuotaMetricName,
    ?'metric_namespace' => ?QuotaMetricNamespace,
    ?'metric_statistic_recommendation' => ?Statistic,
  ) $s = shape()) {
    $this->metric_dimensions = $s['metric_dimensions'] ?? dict[];
    $this->metric_name = $s['metric_name'] ?? '';
    $this->metric_namespace = $s['metric_namespace'] ?? '';
    $this->metric_statistic_recommendation = $s['metric_statistic_recommendation'] ?? '';
  }
}

type NextToken = string;

class NoAvailableOrganizationException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class NoSuchResourceException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class OrganizationNotInAllFeaturesModeException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type PeriodUnit = string;

type PeriodValue = int;

class PutServiceQuotaIncreaseRequestIntoTemplateRequest {
  public ?AwsRegion $aws_region;
  public ?QuotaValue $desired_value;
  public ?QuotaCode $quota_code;
  public ?ServiceCode $service_code;

  public function __construct(shape(
    ?'aws_region' => ?AwsRegion,
    ?'desired_value' => ?QuotaValue,
    ?'quota_code' => ?QuotaCode,
    ?'service_code' => ?ServiceCode,
  ) $s = shape()) {
    $this->aws_region = $s['aws_region'] ?? '';
    $this->desired_value = $s['desired_value'] ?? 0.0;
    $this->quota_code = $s['quota_code'] ?? '';
    $this->service_code = $s['service_code'] ?? '';
  }
}

class PutServiceQuotaIncreaseRequestIntoTemplateResponse {
  public ?ServiceQuotaIncreaseRequestInTemplate $service_quota_increase_request_in_template;

  public function __construct(shape(
    ?'service_quota_increase_request_in_template' => ?ServiceQuotaIncreaseRequestInTemplate,
  ) $s = shape()) {
    $this->service_quota_increase_request_in_template = $s['service_quota_increase_request_in_template'] ?? null;
  }
}

type QuotaAdjustable = bool;

type QuotaArn = string;

type QuotaCode = string;

class QuotaExceededException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type QuotaMetricName = string;

type QuotaMetricNamespace = string;

type QuotaName = string;

class QuotaPeriod {
  public ?PeriodUnit $period_unit;
  public ?PeriodValue $period_value;

  public function __construct(shape(
    ?'period_unit' => ?PeriodUnit,
    ?'period_value' => ?PeriodValue,
  ) $s = shape()) {
    $this->period_unit = $s['period_unit'] ?? '';
    $this->period_value = $s['period_value'] ?? 0;
  }
}

type QuotaUnit = string;

type QuotaValue = float;

type RequestId = string;

class RequestServiceQuotaIncreaseRequest {
  public ?QuotaValue $desired_value;
  public ?QuotaCode $quota_code;
  public ?ServiceCode $service_code;

  public function __construct(shape(
    ?'desired_value' => ?QuotaValue,
    ?'quota_code' => ?QuotaCode,
    ?'service_code' => ?ServiceCode,
  ) $s = shape()) {
    $this->desired_value = $s['desired_value'] ?? 0.0;
    $this->quota_code = $s['quota_code'] ?? '';
    $this->service_code = $s['service_code'] ?? '';
  }
}

class RequestServiceQuotaIncreaseResponse {
  public ?RequestedServiceQuotaChange $requested_quota;

  public function __construct(shape(
    ?'requested_quota' => ?RequestedServiceQuotaChange,
  ) $s = shape()) {
    $this->requested_quota = $s['requested_quota'] ?? null;
  }
}

type RequestStatus = string;

class RequestedServiceQuotaChange {
  public ?CustomerServiceEngagementId $case_id;
  public ?DateTime $created;
  public ?QuotaValue $desired_value;
  public ?GlobalQuota $global_quota;
  public ?RequestId $id;
  public ?DateTime $last_updated;
  public ?QuotaArn $quota_arn;
  public ?QuotaCode $quota_code;
  public ?QuotaName $quota_name;
  public ?Requester $requester;
  public ?ServiceCode $service_code;
  public ?ServiceName $service_name;
  public ?RequestStatus $status;
  public ?QuotaUnit $unit;

  public function __construct(shape(
    ?'case_id' => ?CustomerServiceEngagementId,
    ?'created' => ?DateTime,
    ?'desired_value' => ?QuotaValue,
    ?'global_quota' => ?GlobalQuota,
    ?'id' => ?RequestId,
    ?'last_updated' => ?DateTime,
    ?'quota_arn' => ?QuotaArn,
    ?'quota_code' => ?QuotaCode,
    ?'quota_name' => ?QuotaName,
    ?'requester' => ?Requester,
    ?'service_code' => ?ServiceCode,
    ?'service_name' => ?ServiceName,
    ?'status' => ?RequestStatus,
    ?'unit' => ?QuotaUnit,
  ) $s = shape()) {
    $this->case_id = $s['case_id'] ?? '';
    $this->created = $s['created'] ?? 0;
    $this->desired_value = $s['desired_value'] ?? 0.0;
    $this->global_quota = $s['global_quota'] ?? false;
    $this->id = $s['id'] ?? '';
    $this->last_updated = $s['last_updated'] ?? 0;
    $this->quota_arn = $s['quota_arn'] ?? '';
    $this->quota_code = $s['quota_code'] ?? '';
    $this->quota_name = $s['quota_name'] ?? '';
    $this->requester = $s['requester'] ?? '';
    $this->service_code = $s['service_code'] ?? '';
    $this->service_name = $s['service_name'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->unit = $s['unit'] ?? '';
  }
}

type RequestedServiceQuotaChangeHistoryListDefinition = vec<RequestedServiceQuotaChange>;

type Requester = string;

class ResourceAlreadyExistsException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ServiceCode = string;

class ServiceException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ServiceInfo {
  public ?ServiceCode $service_code;
  public ?ServiceName $service_name;

  public function __construct(shape(
    ?'service_code' => ?ServiceCode,
    ?'service_name' => ?ServiceName,
  ) $s = shape()) {
    $this->service_code = $s['service_code'] ?? '';
    $this->service_name = $s['service_name'] ?? '';
  }
}

type ServiceInfoListDefinition = vec<ServiceInfo>;

type ServiceName = string;

class ServiceQuota {
  public ?QuotaAdjustable $adjustable;
  public ?ErrorReason $error_reason;
  public ?GlobalQuota $global_quota;
  public ?QuotaPeriod $period;
  public ?QuotaArn $quota_arn;
  public ?QuotaCode $quota_code;
  public ?QuotaName $quota_name;
  public ?ServiceCode $service_code;
  public ?ServiceName $service_name;
  public ?QuotaUnit $unit;
  public ?MetricInfo $usage_metric;
  public ?QuotaValue $value;

  public function __construct(shape(
    ?'adjustable' => ?QuotaAdjustable,
    ?'error_reason' => ?ErrorReason,
    ?'global_quota' => ?GlobalQuota,
    ?'period' => ?QuotaPeriod,
    ?'quota_arn' => ?QuotaArn,
    ?'quota_code' => ?QuotaCode,
    ?'quota_name' => ?QuotaName,
    ?'service_code' => ?ServiceCode,
    ?'service_name' => ?ServiceName,
    ?'unit' => ?QuotaUnit,
    ?'usage_metric' => ?MetricInfo,
    ?'value' => ?QuotaValue,
  ) $s = shape()) {
    $this->adjustable = $s['adjustable'] ?? false;
    $this->error_reason = $s['error_reason'] ?? null;
    $this->global_quota = $s['global_quota'] ?? false;
    $this->period = $s['period'] ?? null;
    $this->quota_arn = $s['quota_arn'] ?? '';
    $this->quota_code = $s['quota_code'] ?? '';
    $this->quota_name = $s['quota_name'] ?? '';
    $this->service_code = $s['service_code'] ?? '';
    $this->service_name = $s['service_name'] ?? '';
    $this->unit = $s['unit'] ?? '';
    $this->usage_metric = $s['usage_metric'] ?? null;
    $this->value = $s['value'] ?? 0.0;
  }
}

class ServiceQuotaIncreaseRequestInTemplate {
  public ?AwsRegion $aws_region;
  public ?QuotaValue $desired_value;
  public ?GlobalQuota $global_quota;
  public ?QuotaCode $quota_code;
  public ?QuotaName $quota_name;
  public ?ServiceCode $service_code;
  public ?ServiceName $service_name;
  public ?QuotaUnit $unit;

  public function __construct(shape(
    ?'aws_region' => ?AwsRegion,
    ?'desired_value' => ?QuotaValue,
    ?'global_quota' => ?GlobalQuota,
    ?'quota_code' => ?QuotaCode,
    ?'quota_name' => ?QuotaName,
    ?'service_code' => ?ServiceCode,
    ?'service_name' => ?ServiceName,
    ?'unit' => ?QuotaUnit,
  ) $s = shape()) {
    $this->aws_region = $s['aws_region'] ?? '';
    $this->desired_value = $s['desired_value'] ?? 0.0;
    $this->global_quota = $s['global_quota'] ?? false;
    $this->quota_code = $s['quota_code'] ?? '';
    $this->quota_name = $s['quota_name'] ?? '';
    $this->service_code = $s['service_code'] ?? '';
    $this->service_name = $s['service_name'] ?? '';
    $this->unit = $s['unit'] ?? '';
  }
}

type ServiceQuotaIncreaseRequestInTemplateList = vec<ServiceQuotaIncreaseRequestInTemplate>;

type ServiceQuotaListDefinition = vec<ServiceQuota>;

type ServiceQuotaTemplateAssociationStatus = string;

class ServiceQuotaTemplateNotInUseException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Statistic = string;

class TemplatesNotAvailableInRegionException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class TooManyRequestsException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

