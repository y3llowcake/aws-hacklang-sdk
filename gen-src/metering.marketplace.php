<?hh // strict
namespace slack\aws\metering.marketplace;

interface Marketplace Metering {
  public function BatchMeterUsage(BatchMeterUsageRequest): Awaitable<Errors\Result<BatchMeterUsageResult>>;
  public function MeterUsage(MeterUsageRequest): Awaitable<Errors\Result<MeterUsageResult>>;
  public function RegisterUsage(RegisterUsageRequest): Awaitable<Errors\Result<RegisterUsageResult>>;
  public function ResolveCustomer(ResolveCustomerRequest): Awaitable<Errors\Result<ResolveCustomerResult>>;
}

class BatchMeterUsageRequest {
  public ProductCode $product_code;
  public UsageRecordList $usage_records;

  public function __construct(shape(
  ?'product_code' => ProductCode,
  ?'usage_records' => UsageRecordList,
  ) $s = shape()) {
    $this->product_code = $product_code ?? "";
    $this->usage_records = $usage_records ?? ;
  }
}

class BatchMeterUsageResult {
  public UsageRecordResultList $results;
  public UsageRecordList $unprocessed_records;

  public function __construct(shape(
  ?'results' => UsageRecordResultList,
  ?'unprocessed_records' => UsageRecordList,
  ) $s = shape()) {
    $this->results = $results ?? ;
    $this->unprocessed_records = $unprocessed_records ?? ;
  }
}

type Boolean = bool;

type CustomerIdentifier = string;

class CustomerNotEntitledException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class DisabledApiException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class DuplicateRequestException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ExpiredTokenException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InternalServiceErrorException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidCustomerIdentifierException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidEndpointRegionException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidProductCodeException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidPublicKeyVersionException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidRegionException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidTokenException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidUsageDimensionException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class MeterUsageRequest {
  public boolean $dry_run;
  public ProductCode $product_code;
  public Timestamp $timestamp;
  public UsageDimension $usage_dimension;
  public UsageQuantity $usage_quantity;

  public function __construct(shape(
  ?'dry_run' => boolean,
  ?'product_code' => ProductCode,
  ?'timestamp' => Timestamp,
  ?'usage_dimension' => UsageDimension,
  ?'usage_quantity' => UsageQuantity,
  ) $s = shape()) {
    $this->dry_run = $dry_run ?? ;
    $this->product_code = $product_code ?? "";
    $this->timestamp = $timestamp ?? 0;
    $this->usage_dimension = $usage_dimension ?? "";
    $this->usage_quantity = $usage_quantity ?? 0;
  }
}

class MeterUsageResult {
  public string $metering_record_id;

  public function __construct(shape(
  ?'metering_record_id' => string,
  ) $s = shape()) {
    $this->metering_record_id = $metering_record_id ?? ;
  }
}

type NonEmptyString = string;

type Nonce = string;

class PlatformNotSupportedException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type ProductCode = string;

class RegisterUsageRequest {
  public Nonce $nonce;
  public ProductCode $product_code;
  public VersionInteger $public_key_version;

  public function __construct(shape(
  ?'nonce' => Nonce,
  ?'product_code' => ProductCode,
  ?'public_key_version' => VersionInteger,
  ) $s = shape()) {
    $this->nonce = $nonce ?? "";
    $this->product_code = $product_code ?? "";
    $this->public_key_version = $public_key_version ?? ;
  }
}

class RegisterUsageResult {
  public Timestamp $public_key_rotation_timestamp;
  public NonEmptyString $signature;

  public function __construct(shape(
  ?'public_key_rotation_timestamp' => Timestamp,
  ?'signature' => NonEmptyString,
  ) $s = shape()) {
    $this->public_key_rotation_timestamp = $public_key_rotation_timestamp ?? ;
    $this->signature = $signature ?? ;
  }
}

class ResolveCustomerRequest {
  public NonEmptyString $registration_token;

  public function __construct(shape(
  ?'registration_token' => NonEmptyString,
  ) $s = shape()) {
    $this->registration_token = $registration_token ?? ;
  }
}

class ResolveCustomerResult {
  public CustomerIdentifier $customer_identifier;
  public ProductCode $product_code;

  public function __construct(shape(
  ?'customer_identifier' => CustomerIdentifier,
  ?'product_code' => ProductCode,
  ) $s = shape()) {
    $this->customer_identifier = $customer_identifier ?? "";
    $this->product_code = $product_code ?? "";
  }
}

type String = string;

class ThrottlingException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type Timestamp = int;

class TimestampOutOfBoundsException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type UsageDimension = string;

type UsageQuantity = int;

class UsageRecord {
  public CustomerIdentifier $customer_identifier;
  public UsageDimension $dimension;
  public UsageQuantity $quantity;
  public Timestamp $timestamp;

  public function __construct(shape(
  ?'customer_identifier' => CustomerIdentifier,
  ?'dimension' => UsageDimension,
  ?'quantity' => UsageQuantity,
  ?'timestamp' => Timestamp,
  ) $s = shape()) {
    $this->customer_identifier = $customer_identifier ?? "";
    $this->dimension = $dimension ?? ;
    $this->quantity = $quantity ?? ;
    $this->timestamp = $timestamp ?? 0;
  }
}

type UsageRecordList = vec<UsageRecord>;

class UsageRecordResult {
  public string $metering_record_id;
  public UsageRecordResultStatus $status;
  public UsageRecord $usage_record;

  public function __construct(shape(
  ?'metering_record_id' => string,
  ?'status' => UsageRecordResultStatus,
  ?'usage_record' => UsageRecord,
  ) $s = shape()) {
    $this->metering_record_id = $metering_record_id ?? ;
    $this->status = $status ?? ;
    $this->usage_record = $usage_record ?? null;
  }
}

type UsageRecordResultList = vec<UsageRecordResult>;

type UsageRecordResultStatus = string;

type VersionInteger = int;

type errorMessage = string;

