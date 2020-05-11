<?hh // strict
namespace slack\aws\marketplacecommerceanalytics;

interface Marketplace Commerce Analytics {
  public function GenerateDataSet(GenerateDataSetRequest): Awaitable<Errors\Result<GenerateDataSetResult>>;
  public function StartSupportDataExport(StartSupportDataExportRequest): Awaitable<Errors\Result<StartSupportDataExportResult>>;
}

type CustomerDefinedValues = dict<OptionalKey, OptionalValue>;

type DataSetPublicationDate = int;

type DataSetRequestId = string;

type DataSetType = string;

type DestinationS3BucketName = string;

type DestinationS3Prefix = string;

type ExceptionMessage = string;

type FromDate = int;

class GenerateDataSetRequest {
  public CustomerDefinedValues $customer_defined_values;
  public DataSetPublicationDate $data_set_publication_date;
  public DataSetType $data_set_type;
  public DestinationS3BucketName $destination_s_3_bucket_name;
  public DestinationS3Prefix $destination_s_3_prefix;
  public RoleNameArn $role_name_arn;
  public SnsTopicArn $sns_topic_arn;

  public function __construct(shape(
  ?'customer_defined_values' => CustomerDefinedValues,
  ?'data_set_publication_date' => DataSetPublicationDate,
  ?'data_set_type' => DataSetType,
  ?'destination_s_3_bucket_name' => DestinationS3BucketName,
  ?'destination_s_3_prefix' => DestinationS3Prefix,
  ?'role_name_arn' => RoleNameArn,
  ?'sns_topic_arn' => SnsTopicArn,
  ) $s = shape()) {
    $this->customer_defined_values = $customer_defined_values ?? ;
    $this->data_set_publication_date = $data_set_publication_date ?? ;
    $this->data_set_type = $data_set_type ?? ;
    $this->destination_s_3_bucket_name = $destination_s_3_bucket_name ?? ;
    $this->destination_s_3_prefix = $destination_s_3_prefix ?? ;
    $this->role_name_arn = $role_name_arn ?? ;
    $this->sns_topic_arn = $sns_topic_arn ?? ;
  }
}

class GenerateDataSetResult {
  public DataSetRequestId $data_set_request_id;

  public function __construct(shape(
  ?'data_set_request_id' => DataSetRequestId,
  ) $s = shape()) {
    $this->data_set_request_id = $data_set_request_id ?? ;
  }
}

class MarketplaceCommerceAnalyticsException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type OptionalKey = string;

type OptionalValue = string;

type RoleNameArn = string;

type SnsTopicArn = string;

class StartSupportDataExportRequest {
  public CustomerDefinedValues $customer_defined_values;
  public SupportDataSetType $data_set_type;
  public DestinationS3BucketName $destination_s_3_bucket_name;
  public DestinationS3Prefix $destination_s_3_prefix;
  public FromDate $from_date;
  public RoleNameArn $role_name_arn;
  public SnsTopicArn $sns_topic_arn;

  public function __construct(shape(
  ?'customer_defined_values' => CustomerDefinedValues,
  ?'data_set_type' => SupportDataSetType,
  ?'destination_s_3_bucket_name' => DestinationS3BucketName,
  ?'destination_s_3_prefix' => DestinationS3Prefix,
  ?'from_date' => FromDate,
  ?'role_name_arn' => RoleNameArn,
  ?'sns_topic_arn' => SnsTopicArn,
  ) $s = shape()) {
    $this->customer_defined_values = $customer_defined_values ?? ;
    $this->data_set_type = $data_set_type ?? ;
    $this->destination_s_3_bucket_name = $destination_s_3_bucket_name ?? ;
    $this->destination_s_3_prefix = $destination_s_3_prefix ?? ;
    $this->from_date = $from_date ?? ;
    $this->role_name_arn = $role_name_arn ?? ;
    $this->sns_topic_arn = $sns_topic_arn ?? ;
  }
}

class StartSupportDataExportResult {
  public DataSetRequestId $data_set_request_id;

  public function __construct(shape(
  ?'data_set_request_id' => DataSetRequestId,
  ) $s = shape()) {
    $this->data_set_request_id = $data_set_request_id ?? ;
  }
}

type SupportDataSetType = string;

