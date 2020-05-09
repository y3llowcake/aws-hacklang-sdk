<?hh // strict
namespace slack\aws\marketplacecommerceanalytics;

interface Marketplace Commerce Analytics {
  public function GenerateDataSet(GenerateDataSetRequest) Awaitable<Errors\Result<GenerateDataSetResult>>;
  public function StartSupportDataExport(StartSupportDataExportRequest) Awaitable<Errors\Result<StartSupportDataExportResult>>;
}

class CustomerDefinedValues {
}

class DataSetPublicationDate {
}

class DataSetRequestId {
}

class DataSetType {
}

class DestinationS3BucketName {
}

class DestinationS3Prefix {
}

class ExceptionMessage {
}

class FromDate {
}

class GenerateDataSetRequest {
  public CustomerDefinedValues $customer_defined_values;
  public DataSetPublicationDate $data_set_publication_date;
  public DataSetType $data_set_type;
  public DestinationS3BucketName $destination_s_3_bucket_name;
  public DestinationS3Prefix $destination_s_3_prefix;
  public RoleNameArn $role_name_arn;
  public SnsTopicArn $sns_topic_arn;
}

class GenerateDataSetResult {
  public DataSetRequestId $data_set_request_id;
}

class MarketplaceCommerceAnalyticsException {
  public ExceptionMessage $message;
}

class OptionalKey {
}

class OptionalValue {
}

class RoleNameArn {
}

class SnsTopicArn {
}

class StartSupportDataExportRequest {
  public CustomerDefinedValues $customer_defined_values;
  public SupportDataSetType $data_set_type;
  public DestinationS3BucketName $destination_s_3_bucket_name;
  public DestinationS3Prefix $destination_s_3_prefix;
  public FromDate $from_date;
  public RoleNameArn $role_name_arn;
  public SnsTopicArn $sns_topic_arn;
}

class StartSupportDataExportResult {
  public DataSetRequestId $data_set_request_id;
}

class SupportDataSetType {
}

