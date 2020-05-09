<?hh // strict
namespace slack\aws\metering.marketplace;

interface Marketplace Metering {
  public function BatchMeterUsage(BatchMeterUsageRequest) Awaitable<Errors\Result<BatchMeterUsageResult>>;
  public function MeterUsage(MeterUsageRequest) Awaitable<Errors\Result<MeterUsageResult>>;
  public function RegisterUsage(RegisterUsageRequest) Awaitable<Errors\Result<RegisterUsageResult>>;
  public function ResolveCustomer(ResolveCustomerRequest) Awaitable<Errors\Result<ResolveCustomerResult>>;
}

class BatchMeterUsageRequest {
  public ProductCode $product_code;
  public UsageRecordList $usage_records;
}

class BatchMeterUsageResult {
  public UsageRecordResultList $results;
  public UsageRecordList $unprocessed_records;
}

class Boolean {
}

class CustomerIdentifier {
}

class CustomerNotEntitledException {
  public errorMessage $message;
}

class DisabledApiException {
  public errorMessage $message;
}

class DuplicateRequestException {
  public errorMessage $message;
}

class ExpiredTokenException {
  public errorMessage $message;
}

class InternalServiceErrorException {
  public errorMessage $message;
}

class InvalidCustomerIdentifierException {
  public errorMessage $message;
}

class InvalidEndpointRegionException {
  public errorMessage $message;
}

class InvalidProductCodeException {
  public errorMessage $message;
}

class InvalidPublicKeyVersionException {
  public errorMessage $message;
}

class InvalidRegionException {
  public errorMessage $message;
}

class InvalidTokenException {
  public errorMessage $message;
}

class InvalidUsageDimensionException {
  public errorMessage $message;
}

class MeterUsageRequest {
  public boolean $dry_run;
  public ProductCode $product_code;
  public Timestamp $timestamp;
  public UsageDimension $usage_dimension;
  public UsageQuantity $usage_quantity;
}

class MeterUsageResult {
  public string $metering_record_id;
}

class NonEmptyString {
}

class Nonce {
}

class PlatformNotSupportedException {
  public errorMessage $message;
}

class ProductCode {
}

class RegisterUsageRequest {
  public Nonce $nonce;
  public ProductCode $product_code;
  public VersionInteger $public_key_version;
}

class RegisterUsageResult {
  public Timestamp $public_key_rotation_timestamp;
  public NonEmptyString $signature;
}

class ResolveCustomerRequest {
  public NonEmptyString $registration_token;
}

class ResolveCustomerResult {
  public CustomerIdentifier $customer_identifier;
  public ProductCode $product_code;
}

class String {
}

class ThrottlingException {
  public errorMessage $message;
}

class Timestamp {
}

class TimestampOutOfBoundsException {
  public errorMessage $message;
}

class UsageDimension {
}

class UsageQuantity {
}

class UsageRecord {
  public CustomerIdentifier $customer_identifier;
  public UsageDimension $dimension;
  public UsageQuantity $quantity;
  public Timestamp $timestamp;
}

class UsageRecordList {
}

class UsageRecordResult {
  public string $metering_record_id;
  public UsageRecordResultStatus $status;
  public UsageRecord $usage_record;
}

class UsageRecordResultList {
}

class UsageRecordResultStatus {
}

class VersionInteger {
}

class errorMessage {
}

