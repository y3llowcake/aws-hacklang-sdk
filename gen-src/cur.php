<?hh // strict
namespace slack\aws\cur;

interface Cost and Usage Report Service {
  public function PutReportDefinition(PutReportDefinitionRequest) Awaitable<Errors\Result<PutReportDefinitionResponse>>;
  public function DeleteReportDefinition(DeleteReportDefinitionRequest) Awaitable<Errors\Result<DeleteReportDefinitionResponse>>;
  public function DescribeReportDefinitions(DescribeReportDefinitionsRequest) Awaitable<Errors\Result<DescribeReportDefinitionsResponse>>;
  public function ModifyReportDefinition(ModifyReportDefinitionRequest) Awaitable<Errors\Result<ModifyReportDefinitionResponse>>;
}

class PutReportDefinitionResponse {
}

class ReportDefinition {
  public ReportFormat $format;
  public S3Bucket $s_3_bucket;
  public S3Prefix $s_3_prefix;
  public AWSRegion $s_3_region;
  public ReportName $report_name;
  public TimeUnit $time_unit;
  public CompressionFormat $compression;
  public SchemaElementList $additional_schema_elements;
  public AdditionalArtifactList $additional_artifacts;
  public RefreshClosedReports $refresh_closed_reports;
  public ReportVersioning $report_versioning;
}

class ReportFormat {
}

class ErrorMessage {
}

class ReportVersioning {
}

class SchemaElementList {
}

class TimeUnit {
}

class AWSRegion {
}

class DeleteReportDefinitionResponse {
  public DeleteResponseMessage $response_message;
}

class DuplicateReportNameException {
  public ErrorMessage $message;
}

class GenericString {
}

class InternalErrorException {
  public ErrorMessage $message;
}

class RefreshClosedReports {
}

class DescribeReportDefinitionsRequest {
  public MaxResults $max_results;
  public GenericString $next_token;
}

class DescribeReportDefinitionsResponse {
  public GenericString $next_token;
  public ReportDefinitionList $report_definitions;
}

class ReportDefinitionList {
}

class SchemaElement {
}

class AdditionalArtifactList {
}

class ModifyReportDefinitionResponse {
}

class S3Bucket {
}

class AdditionalArtifact {
}

class MaxResults {
}

class PutReportDefinitionRequest {
  public ReportDefinition $report_definition;
}

class S3Prefix {
}

class CompressionFormat {
}

class ModifyReportDefinitionRequest {
  public ReportName $report_name;
  public ReportDefinition $report_definition;
}

class ValidationException {
  public ErrorMessage $message;
}

class DeleteReportDefinitionRequest {
  public ReportName $report_name;
}

class DeleteResponseMessage {
}

class ReportLimitReachedException {
  public ErrorMessage $message;
}

class ReportName {
}

