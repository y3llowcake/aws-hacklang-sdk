<?hh // strict
namespace slack\aws\metering.marketplace;

interface MarketplaceMetering {
  public function BatchMeterUsage(BatchMeterUsageRequest $in): Awaitable<\Errors\Result<BatchMeterUsageResult>>;
  public function MeterUsage(MeterUsageRequest $in): Awaitable<\Errors\Result<MeterUsageResult>>;
  public function RegisterUsage(RegisterUsageRequest $in): Awaitable<\Errors\Result<RegisterUsageResult>>;
  public function ResolveCustomer(ResolveCustomerRequest $in): Awaitable<\Errors\Result<ResolveCustomerResult>>;
}

class BatchMeterUsageRequest {
  public ?ProductCode $product_code;
  public ?UsageRecordList $usage_records;

  public function __construct(shape(
    ?'product_code' => ?ProductCode,
    ?'usage_records' => ?UsageRecordList,
  ) $s = shape()) {
    $this->product_code = $s['product_code'] ?? '';
    $this->usage_records = $s['usage_records'] ?? vec[];
  }
}

class BatchMeterUsageResult {
  public ?UsageRecordResultList $results;
  public ?UsageRecordList $unprocessed_records;

  public function __construct(shape(
    ?'results' => ?UsageRecordResultList,
    ?'unprocessed_records' => ?UsageRecordList,
  ) $s = shape()) {
    $this->results = $s['results'] ?? vec[];
    $this->unprocessed_records = $s['unprocessed_records'] ?? vec[];
  }
}

type Boolean = bool;

type CustomerIdentifier = string;

class CustomerNotEntitledException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class DisabledApiException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class DuplicateRequestException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ExpiredTokenException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InternalServiceErrorException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidCustomerIdentifierException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidEndpointRegionException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidProductCodeException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidPublicKeyVersionException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidRegionException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidTokenException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidUsageDimensionException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class MeterUsageRequest {
  public bool $dry_run;
  public ?ProductCode $product_code;
  public ?Timestamp $timestamp;
  public ?UsageDimension $usage_dimension;
  public ?UsageQuantity $usage_quantity;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'product_code' => ?ProductCode,
    ?'timestamp' => ?Timestamp,
    ?'usage_dimension' => ?UsageDimension,
    ?'usage_quantity' => ?UsageQuantity,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->product_code = $s['product_code'] ?? '';
    $this->timestamp = $s['timestamp'] ?? 0;
    $this->usage_dimension = $s['usage_dimension'] ?? '';
    $this->usage_quantity = $s['usage_quantity'] ?? 0;
  }
}

class MeterUsageResult {
  public string $metering_record_id;

  public function __construct(shape(
    ?'metering_record_id' => string,
  ) $s = shape()) {
    $this->metering_record_id = $s['metering_record_id'] ?? '';
  }
}

type NonEmptyString = string;

type Nonce = string;

class PlatformNotSupportedException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ProductCode = string;

class RegisterUsageRequest {
  public ?Nonce $nonce;
  public ?ProductCode $product_code;
  public ?VersionInteger $public_key_version;

  public function __construct(shape(
    ?'nonce' => ?Nonce,
    ?'product_code' => ?ProductCode,
    ?'public_key_version' => ?VersionInteger,
  ) $s = shape()) {
    $this->nonce = $s['nonce'] ?? '';
    $this->product_code = $s['product_code'] ?? '';
    $this->public_key_version = $s['public_key_version'] ?? 0;
  }
}

class RegisterUsageResult {
  public ?Timestamp $public_key_rotation_timestamp;
  public ?NonEmptyString $signature;

  public function __construct(shape(
    ?'public_key_rotation_timestamp' => ?Timestamp,
    ?'signature' => ?NonEmptyString,
  ) $s = shape()) {
    $this->public_key_rotation_timestamp = $s['public_key_rotation_timestamp'] ?? 0;
    $this->signature = $s['signature'] ?? '';
  }
}

class ResolveCustomerRequest {
  public ?NonEmptyString $registration_token;

  public function __construct(shape(
    ?'registration_token' => ?NonEmptyString,
  ) $s = shape()) {
    $this->registration_token = $s['registration_token'] ?? '';
  }
}

class ResolveCustomerResult {
  public ?CustomerIdentifier $customer_identifier;
  public ?ProductCode $product_code;

  public function __construct(shape(
    ?'customer_identifier' => ?CustomerIdentifier,
    ?'product_code' => ?ProductCode,
  ) $s = shape()) {
    $this->customer_identifier = $s['customer_identifier'] ?? '';
    $this->product_code = $s['product_code'] ?? '';
  }
}

type String = string;

class ThrottlingException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Timestamp = int;

class TimestampOutOfBoundsException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type UsageDimension = string;

type UsageQuantity = int;

class UsageRecord {
  public ?CustomerIdentifier $customer_identifier;
  public ?UsageDimension $dimension;
  public ?UsageQuantity $quantity;
  public ?Timestamp $timestamp;

  public function __construct(shape(
    ?'customer_identifier' => ?CustomerIdentifier,
    ?'dimension' => ?UsageDimension,
    ?'quantity' => ?UsageQuantity,
    ?'timestamp' => ?Timestamp,
  ) $s = shape()) {
    $this->customer_identifier = $s['customer_identifier'] ?? '';
    $this->dimension = $s['dimension'] ?? '';
    $this->quantity = $s['quantity'] ?? 0;
    $this->timestamp = $s['timestamp'] ?? 0;
  }
}

type UsageRecordList = vec<UsageRecord>;

class UsageRecordResult {
  public string $metering_record_id;
  public ?UsageRecordResultStatus $status;
  public ?UsageRecord $usage_record;

  public function __construct(shape(
    ?'metering_record_id' => string,
    ?'status' => ?UsageRecordResultStatus,
    ?'usage_record' => ?UsageRecord,
  ) $s = shape()) {
    $this->metering_record_id = $s['metering_record_id'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->usage_record = $s['usage_record'] ?? null;
  }
}

type UsageRecordResultList = vec<UsageRecordResult>;

type UsageRecordResultStatus = string;

type VersionInteger = int;

type errorMessage = string;

