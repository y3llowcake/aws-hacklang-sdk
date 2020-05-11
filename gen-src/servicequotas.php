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

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class AccessDeniedException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
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
  public AwsRegion $aws_region;
  public QuotaCode $quota_code;
  public ServiceCode $service_code;

  public function __construct(shape(
  ?'aws_region' => AwsRegion,
  ?'quota_code' => QuotaCode,
  ?'service_code' => ServiceCode,
  ) $s = shape()) {
    $this->aws_region = $aws_region ?? "";
    $this->quota_code = $quota_code ?? "";
    $this->service_code = $service_code ?? "";
  }
}

class DeleteServiceQuotaIncreaseRequestFromTemplateResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DependencyAccessDeniedException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
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
  public ErrorCode $error_code;
  public ErrorMessage $error_message;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'error_message' => ErrorMessage,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->error_message = $error_message ?? "";
  }
}

type ExceptionMessage = string;

class GetAWSDefaultServiceQuotaRequest {
  public QuotaCode $quota_code;
  public ServiceCode $service_code;

  public function __construct(shape(
  ?'quota_code' => QuotaCode,
  ?'service_code' => ServiceCode,
  ) $s = shape()) {
    $this->quota_code = $quota_code ?? "";
    $this->service_code = $service_code ?? "";
  }
}

class GetAWSDefaultServiceQuotaResponse {
  public ServiceQuota $quota;

  public function __construct(shape(
  ?'quota' => ServiceQuota,
  ) $s = shape()) {
    $this->quota = $quota ?? null;
  }
}

class GetAssociationForServiceQuotaTemplateRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetAssociationForServiceQuotaTemplateResponse {
  public ServiceQuotaTemplateAssociationStatus $service_quota_template_association_status;

  public function __construct(shape(
  ?'service_quota_template_association_status' => ServiceQuotaTemplateAssociationStatus,
  ) $s = shape()) {
    $this->service_quota_template_association_status = $service_quota_template_association_status ?? "";
  }
}

class GetRequestedServiceQuotaChangeRequest {
  public RequestId $request_id;

  public function __construct(shape(
  ?'request_id' => RequestId,
  ) $s = shape()) {
    $this->request_id = $request_id ?? "";
  }
}

class GetRequestedServiceQuotaChangeResponse {
  public RequestedServiceQuotaChange $requested_quota;

  public function __construct(shape(
  ?'requested_quota' => RequestedServiceQuotaChange,
  ) $s = shape()) {
    $this->requested_quota = $requested_quota ?? null;
  }
}

class GetServiceQuotaIncreaseRequestFromTemplateRequest {
  public AwsRegion $aws_region;
  public QuotaCode $quota_code;
  public ServiceCode $service_code;

  public function __construct(shape(
  ?'aws_region' => AwsRegion,
  ?'quota_code' => QuotaCode,
  ?'service_code' => ServiceCode,
  ) $s = shape()) {
    $this->aws_region = $aws_region ?? "";
    $this->quota_code = $quota_code ?? "";
    $this->service_code = $service_code ?? "";
  }
}

class GetServiceQuotaIncreaseRequestFromTemplateResponse {
  public ServiceQuotaIncreaseRequestInTemplate $service_quota_increase_request_in_template;

  public function __construct(shape(
  ?'service_quota_increase_request_in_template' => ServiceQuotaIncreaseRequestInTemplate,
  ) $s = shape()) {
    $this->service_quota_increase_request_in_template = $service_quota_increase_request_in_template ?? null;
  }
}

class GetServiceQuotaRequest {
  public QuotaCode $quota_code;
  public ServiceCode $service_code;

  public function __construct(shape(
  ?'quota_code' => QuotaCode,
  ?'service_code' => ServiceCode,
  ) $s = shape()) {
    $this->quota_code = $quota_code ?? "";
    $this->service_code = $service_code ?? "";
  }
}

class GetServiceQuotaResponse {
  public ServiceQuota $quota;

  public function __construct(shape(
  ?'quota' => ServiceQuota,
  ) $s = shape()) {
    $this->quota = $quota ?? null;
  }
}

type GlobalQuota = bool;

class IllegalArgumentException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidPaginationTokenException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidResourceStateException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ListAWSDefaultServiceQuotasRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ServiceCode $service_code;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'service_code' => ServiceCode,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->service_code = $service_code ?? "";
  }
}

class ListAWSDefaultServiceQuotasResponse {
  public NextToken $next_token;
  public ServiceQuotaListDefinition $quotas;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'quotas' => ServiceQuotaListDefinition,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->quotas = $quotas ?? [];
  }
}

class ListRequestedServiceQuotaChangeHistoryByQuotaRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public QuotaCode $quota_code;
  public ServiceCode $service_code;
  public RequestStatus $status;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'quota_code' => QuotaCode,
  ?'service_code' => ServiceCode,
  ?'status' => RequestStatus,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->quota_code = $quota_code ?? "";
    $this->service_code = $service_code ?? "";
    $this->status = $status ?? "";
  }
}

class ListRequestedServiceQuotaChangeHistoryByQuotaResponse {
  public NextToken $next_token;
  public RequestedServiceQuotaChangeHistoryListDefinition $requested_quotas;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'requested_quotas' => RequestedServiceQuotaChangeHistoryListDefinition,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->requested_quotas = $requested_quotas ?? [];
  }
}

class ListRequestedServiceQuotaChangeHistoryRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ServiceCode $service_code;
  public RequestStatus $status;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'service_code' => ServiceCode,
  ?'status' => RequestStatus,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->service_code = $service_code ?? "";
    $this->status = $status ?? "";
  }
}

class ListRequestedServiceQuotaChangeHistoryResponse {
  public NextToken $next_token;
  public RequestedServiceQuotaChangeHistoryListDefinition $requested_quotas;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'requested_quotas' => RequestedServiceQuotaChangeHistoryListDefinition,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->requested_quotas = $requested_quotas ?? [];
  }
}

class ListServiceQuotaIncreaseRequestsInTemplateRequest {
  public AwsRegion $aws_region;
  public MaxResults $max_results;
  public NextToken $next_token;
  public ServiceCode $service_code;

  public function __construct(shape(
  ?'aws_region' => AwsRegion,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'service_code' => ServiceCode,
  ) $s = shape()) {
    $this->aws_region = $aws_region ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->service_code = $service_code ?? "";
  }
}

class ListServiceQuotaIncreaseRequestsInTemplateResponse {
  public NextToken $next_token;
  public ServiceQuotaIncreaseRequestInTemplateList $service_quota_increase_request_in_template_list;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'service_quota_increase_request_in_template_list' => ServiceQuotaIncreaseRequestInTemplateList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->service_quota_increase_request_in_template_list = $service_quota_increase_request_in_template_list ?? [];
  }
}

class ListServiceQuotasRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ServiceCode $service_code;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'service_code' => ServiceCode,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->service_code = $service_code ?? "";
  }
}

class ListServiceQuotasResponse {
  public NextToken $next_token;
  public ServiceQuotaListDefinition $quotas;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'quotas' => ServiceQuotaListDefinition,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->quotas = $quotas ?? [];
  }
}

class ListServicesRequest {
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListServicesResponse {
  public NextToken $next_token;
  public ServiceInfoListDefinition $services;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'services' => ServiceInfoListDefinition,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->services = $services ?? [];
  }
}

type MaxResults = int;

type MetricDimensionName = string;

type MetricDimensionValue = string;

type MetricDimensionsMapDefinition = dict<MetricDimensionName, MetricDimensionValue>;

class MetricInfo {
  public MetricDimensionsMapDefinition $metric_dimensions;
  public QuotaMetricName $metric_name;
  public QuotaMetricNamespace $metric_namespace;
  public Statistic $metric_statistic_recommendation;

  public function __construct(shape(
  ?'metric_dimensions' => MetricDimensionsMapDefinition,
  ?'metric_name' => QuotaMetricName,
  ?'metric_namespace' => QuotaMetricNamespace,
  ?'metric_statistic_recommendation' => Statistic,
  ) $s = shape()) {
    $this->metric_dimensions = $metric_dimensions ?? [];
    $this->metric_name = $metric_name ?? "";
    $this->metric_namespace = $metric_namespace ?? "";
    $this->metric_statistic_recommendation = $metric_statistic_recommendation ?? "";
  }
}

type NextToken = string;

class NoAvailableOrganizationException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class NoSuchResourceException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class OrganizationNotInAllFeaturesModeException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type PeriodUnit = string;

type PeriodValue = int;

class PutServiceQuotaIncreaseRequestIntoTemplateRequest {
  public AwsRegion $aws_region;
  public QuotaValue $desired_value;
  public QuotaCode $quota_code;
  public ServiceCode $service_code;

  public function __construct(shape(
  ?'aws_region' => AwsRegion,
  ?'desired_value' => QuotaValue,
  ?'quota_code' => QuotaCode,
  ?'service_code' => ServiceCode,
  ) $s = shape()) {
    $this->aws_region = $aws_region ?? "";
    $this->desired_value = $desired_value ?? 0.0;
    $this->quota_code = $quota_code ?? "";
    $this->service_code = $service_code ?? "";
  }
}

class PutServiceQuotaIncreaseRequestIntoTemplateResponse {
  public ServiceQuotaIncreaseRequestInTemplate $service_quota_increase_request_in_template;

  public function __construct(shape(
  ?'service_quota_increase_request_in_template' => ServiceQuotaIncreaseRequestInTemplate,
  ) $s = shape()) {
    $this->service_quota_increase_request_in_template = $service_quota_increase_request_in_template ?? null;
  }
}

type QuotaAdjustable = bool;

type QuotaArn = string;

type QuotaCode = string;

class QuotaExceededException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type QuotaMetricName = string;

type QuotaMetricNamespace = string;

type QuotaName = string;

class QuotaPeriod {
  public PeriodUnit $period_unit;
  public PeriodValue $period_value;

  public function __construct(shape(
  ?'period_unit' => PeriodUnit,
  ?'period_value' => PeriodValue,
  ) $s = shape()) {
    $this->period_unit = $period_unit ?? "";
    $this->period_value = $period_value ?? 0;
  }
}

type QuotaUnit = string;

type QuotaValue = float;

type RequestId = string;

class RequestServiceQuotaIncreaseRequest {
  public QuotaValue $desired_value;
  public QuotaCode $quota_code;
  public ServiceCode $service_code;

  public function __construct(shape(
  ?'desired_value' => QuotaValue,
  ?'quota_code' => QuotaCode,
  ?'service_code' => ServiceCode,
  ) $s = shape()) {
    $this->desired_value = $desired_value ?? 0.0;
    $this->quota_code = $quota_code ?? "";
    $this->service_code = $service_code ?? "";
  }
}

class RequestServiceQuotaIncreaseResponse {
  public RequestedServiceQuotaChange $requested_quota;

  public function __construct(shape(
  ?'requested_quota' => RequestedServiceQuotaChange,
  ) $s = shape()) {
    $this->requested_quota = $requested_quota ?? null;
  }
}

type RequestStatus = string;

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

  public function __construct(shape(
  ?'case_id' => CustomerServiceEngagementId,
  ?'created' => DateTime,
  ?'desired_value' => QuotaValue,
  ?'global_quota' => GlobalQuota,
  ?'id' => RequestId,
  ?'last_updated' => DateTime,
  ?'quota_arn' => QuotaArn,
  ?'quota_code' => QuotaCode,
  ?'quota_name' => QuotaName,
  ?'requester' => Requester,
  ?'service_code' => ServiceCode,
  ?'service_name' => ServiceName,
  ?'status' => RequestStatus,
  ?'unit' => QuotaUnit,
  ) $s = shape()) {
    $this->case_id = $case_id ?? "";
    $this->created = $created ?? 0;
    $this->desired_value = $desired_value ?? 0.0;
    $this->global_quota = $global_quota ?? false;
    $this->id = $id ?? "";
    $this->last_updated = $last_updated ?? 0;
    $this->quota_arn = $quota_arn ?? "";
    $this->quota_code = $quota_code ?? "";
    $this->quota_name = $quota_name ?? "";
    $this->requester = $requester ?? "";
    $this->service_code = $service_code ?? "";
    $this->service_name = $service_name ?? "";
    $this->status = $status ?? "";
    $this->unit = $unit ?? "";
  }
}

type RequestedServiceQuotaChangeHistoryListDefinition = vec<RequestedServiceQuotaChange>;

type Requester = string;

class ResourceAlreadyExistsException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ServiceCode = string;

class ServiceException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ServiceInfo {
  public ServiceCode $service_code;
  public ServiceName $service_name;

  public function __construct(shape(
  ?'service_code' => ServiceCode,
  ?'service_name' => ServiceName,
  ) $s = shape()) {
    $this->service_code = $service_code ?? "";
    $this->service_name = $service_name ?? "";
  }
}

type ServiceInfoListDefinition = vec<ServiceInfo>;

type ServiceName = string;

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

  public function __construct(shape(
  ?'adjustable' => QuotaAdjustable,
  ?'error_reason' => ErrorReason,
  ?'global_quota' => GlobalQuota,
  ?'period' => QuotaPeriod,
  ?'quota_arn' => QuotaArn,
  ?'quota_code' => QuotaCode,
  ?'quota_name' => QuotaName,
  ?'service_code' => ServiceCode,
  ?'service_name' => ServiceName,
  ?'unit' => QuotaUnit,
  ?'usage_metric' => MetricInfo,
  ?'value' => QuotaValue,
  ) $s = shape()) {
    $this->adjustable = $adjustable ?? false;
    $this->error_reason = $error_reason ?? null;
    $this->global_quota = $global_quota ?? false;
    $this->period = $period ?? null;
    $this->quota_arn = $quota_arn ?? "";
    $this->quota_code = $quota_code ?? "";
    $this->quota_name = $quota_name ?? "";
    $this->service_code = $service_code ?? "";
    $this->service_name = $service_name ?? "";
    $this->unit = $unit ?? "";
    $this->usage_metric = $usage_metric ?? null;
    $this->value = $value ?? 0.0;
  }
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

  public function __construct(shape(
  ?'aws_region' => AwsRegion,
  ?'desired_value' => QuotaValue,
  ?'global_quota' => GlobalQuota,
  ?'quota_code' => QuotaCode,
  ?'quota_name' => QuotaName,
  ?'service_code' => ServiceCode,
  ?'service_name' => ServiceName,
  ?'unit' => QuotaUnit,
  ) $s = shape()) {
    $this->aws_region = $aws_region ?? "";
    $this->desired_value = $desired_value ?? 0.0;
    $this->global_quota = $global_quota ?? false;
    $this->quota_code = $quota_code ?? "";
    $this->quota_name = $quota_name ?? "";
    $this->service_code = $service_code ?? "";
    $this->service_name = $service_name ?? "";
    $this->unit = $unit ?? "";
  }
}

type ServiceQuotaIncreaseRequestInTemplateList = vec<ServiceQuotaIncreaseRequestInTemplate>;

type ServiceQuotaListDefinition = vec<ServiceQuota>;

type ServiceQuotaTemplateAssociationStatus = string;

class ServiceQuotaTemplateNotInUseException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type Statistic = string;

class TemplatesNotAvailableInRegionException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class TooManyRequestsException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

