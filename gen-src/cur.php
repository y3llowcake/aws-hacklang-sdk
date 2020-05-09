<?hh // strict
namespace slack\aws\cur;

interface Cost and Usage Report Service {
  public function DeleteReportDefinition(DeleteReportDefinitionRequest): Awaitable<Errors\Result<DeleteReportDefinitionResponse>>;
  public function DescribeReportDefinitions(DescribeReportDefinitionsRequest): Awaitable<Errors\Result<DescribeReportDefinitionsResponse>>;
  public function ModifyReportDefinition(ModifyReportDefinitionRequest): Awaitable<Errors\Result<ModifyReportDefinitionResponse>>;
  public function PutReportDefinition(PutReportDefinitionRequest): Awaitable<Errors\Result<PutReportDefinitionResponse>>;
}

class AWSRegion {
}

class AdditionalArtifact {
}

class AdditionalArtifactList {
}

class CompressionFormat {
}

class DeleteReportDefinitionRequest {
  public ReportName $report_name;
}

class DeleteReportDefinitionResponse {
  public DeleteResponseMessage $response_message;
}

class DeleteResponseMessage {
}

class DescribeReportDefinitionsRequest {
  public MaxResults $max_results;
  public GenericString $next_token;
}

class DescribeReportDefinitionsResponse {
  public GenericString $next_token;
  public ReportDefinitionList $report_definitions;
}

class DuplicateReportNameException {
  public ErrorMessage $message;
}

class ErrorMessage {
}

class GenericString {
}

class InternalErrorException {
  public ErrorMessage $message;
}

class MaxResults {
}

class ModifyReportDefinitionRequest {
  public ReportDefinition $report_definition;
  public ReportName $report_name;
}

class ModifyReportDefinitionResponse {
}

class PutReportDefinitionRequest {
  public ReportDefinition $report_definition;
}

class PutReportDefinitionResponse {
}

class RefreshClosedReports {
}

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
}

class ReportDefinitionList {
}

class ReportFormat {
}

class ReportLimitReachedException {
  public ErrorMessage $message;
}

class ReportName {
}

class ReportVersioning {
}

class S3Bucket {
}

class S3Prefix {
}

class SchemaElement {
}

class SchemaElementList {
}

class TimeUnit {
}

class ValidationException {
  public ErrorMessage $message;
}

