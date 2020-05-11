<?hh // strict
namespace slack\aws\cur;

interface Cost and Usage Report Service {
  public function DeleteReportDefinition(DeleteReportDefinitionRequest): Awaitable<Errors\Result<DeleteReportDefinitionResponse>>;
  public function DescribeReportDefinitions(DescribeReportDefinitionsRequest): Awaitable<Errors\Result<DescribeReportDefinitionsResponse>>;
  public function ModifyReportDefinition(ModifyReportDefinitionRequest): Awaitable<Errors\Result<ModifyReportDefinitionResponse>>;
  public function PutReportDefinition(PutReportDefinitionRequest): Awaitable<Errors\Result<PutReportDefinitionResponse>>;
}

type AWSRegion = string;

type AdditionalArtifact = string;

type AdditionalArtifactList = vec<AdditionalArtifact>;

type CompressionFormat = string;

class DeleteReportDefinitionRequest {
  public ReportName $report_name;

  public function __construct(shape(
  ?'report_name' => ReportName,
  ) $s = shape()) {
    $this->report_name = $report_name ?? "";
  }
}

class DeleteReportDefinitionResponse {
  public DeleteResponseMessage $response_message;

  public function __construct(shape(
  ?'response_message' => DeleteResponseMessage,
  ) $s = shape()) {
    $this->response_message = $response_message ?? "";
  }
}

type DeleteResponseMessage = string;

class DescribeReportDefinitionsRequest {
  public MaxResults $max_results;
  public GenericString $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => GenericString,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeReportDefinitionsResponse {
  public GenericString $next_token;
  public ReportDefinitionList $report_definitions;

  public function __construct(shape(
  ?'next_token' => GenericString,
  ?'report_definitions' => ReportDefinitionList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->report_definitions = $report_definitions ?? [];
  }
}

class DuplicateReportNameException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ErrorMessage = string;

type GenericString = string;

class InternalErrorException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type MaxResults = int;

class ModifyReportDefinitionRequest {
  public ReportDefinition $report_definition;
  public ReportName $report_name;

  public function __construct(shape(
  ?'report_definition' => ReportDefinition,
  ?'report_name' => ReportName,
  ) $s = shape()) {
    $this->report_definition = $report_definition ?? null;
    $this->report_name = $report_name ?? "";
  }
}

class ModifyReportDefinitionResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutReportDefinitionRequest {
  public ReportDefinition $report_definition;

  public function __construct(shape(
  ?'report_definition' => ReportDefinition,
  ) $s = shape()) {
    $this->report_definition = $report_definition ?? null;
  }
}

class PutReportDefinitionResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type RefreshClosedReports = bool;

class ReportDefinition {
  public AdditionalArtifactList $additional_artifacts;
  public SchemaElementList $additional_schema_elements;
  public CompressionFormat $compression;
  public ReportFormat $format;
  public RefreshClosedReports $refresh_closed_reports;
  public ReportName $report_name;
  public ReportVersioning $report_versioning;
  public S3Bucket $s_3_bucket;
  public S3Prefix $s_3_prefix;
  public AWSRegion $s_3_region;
  public TimeUnit $time_unit;

  public function __construct(shape(
  ?'additional_artifacts' => AdditionalArtifactList,
  ?'additional_schema_elements' => SchemaElementList,
  ?'compression' => CompressionFormat,
  ?'format' => ReportFormat,
  ?'refresh_closed_reports' => RefreshClosedReports,
  ?'report_name' => ReportName,
  ?'report_versioning' => ReportVersioning,
  ?'s_3_bucket' => S3Bucket,
  ?'s_3_prefix' => S3Prefix,
  ?'s_3_region' => AWSRegion,
  ?'time_unit' => TimeUnit,
  ) $s = shape()) {
    $this->additional_artifacts = $additional_artifacts ?? [];
    $this->additional_schema_elements = $additional_schema_elements ?? [];
    $this->compression = $compression ?? "";
    $this->format = $format ?? "";
    $this->refresh_closed_reports = $refresh_closed_reports ?? false;
    $this->report_name = $report_name ?? "";
    $this->report_versioning = $report_versioning ?? "";
    $this->s_3_bucket = $s_3_bucket ?? "";
    $this->s_3_prefix = $s_3_prefix ?? "";
    $this->s_3_region = $s_3_region ?? "";
    $this->time_unit = $time_unit ?? "";
  }
}

type ReportDefinitionList = vec<ReportDefinition>;

type ReportFormat = string;

class ReportLimitReachedException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ReportName = string;

type ReportVersioning = string;

type S3Bucket = string;

type S3Prefix = string;

type SchemaElement = string;

type SchemaElementList = vec<SchemaElement>;

type TimeUnit = string;

class ValidationException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

