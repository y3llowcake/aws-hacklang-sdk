<?hh // strict
namespace slack\aws\importexport;

interface  {
  public function CancelJob(CancelJobInput): Awaitable<Errors\Result<CancelJobOutput>>;
  public function CreateJob(CreateJobInput): Awaitable<Errors\Result<CreateJobOutput>>;
  public function GetShippingLabel(GetShippingLabelInput): Awaitable<Errors\Result<GetShippingLabelOutput>>;
  public function GetStatus(GetStatusInput): Awaitable<Errors\Result<GetStatusOutput>>;
  public function ListJobs(ListJobsInput): Awaitable<Errors\Result<ListJobsOutput>>;
  public function UpdateJob(UpdateJobInput): Awaitable<Errors\Result<UpdateJobOutput>>;
}

class APIVersion {
}

class Artifact {
  public Description $description;
  public URL $url;
}

class ArtifactList {
}

class BucketPermissionException {
  public ErrorMessage $message;
}

class CancelJobInput {
  public APIVersion $api_version;
  public JobId $job_id;
}

class CancelJobOutput {
  public Success $success;
}

class CanceledJobIdException {
  public ErrorMessage $message;
}

class Carrier {
}

class CreateJobInput {
  public APIVersion $api_version;
  public JobType $job_type;
  public Manifest $manifest;
  public ManifestAddendum $manifest_addendum;
  public ValidateOnly $validate_only;
}

class CreateJobOutput {
  public ArtifactList $artifact_list;
  public JobId $job_id;
  public JobType $job_type;
  public Signature $signature;
  public SignatureFileContents $signature_file_contents;
  public WarningMessage $warning_message;
}

class CreateJobQuotaExceededException {
  public ErrorMessage $message;
}

class CreationDate {
}

class CurrentManifest {
}

class Description {
}

class ErrorCount {
}

class ErrorMessage {
}

class ExpiredJobIdException {
  public ErrorMessage $message;
}

class GenericString {
}

class GetShippingLabelInput {
  public APIVersion $api_version;
  public city $city;
  public company $company;
  public country $country;
  public JobIdList $job_ids;
  public name $name;
  public phoneNumber $phone_number;
  public postalCode $postal_code;
  public stateOrProvince $state_or_province;
  public street1 $street_1;
  public street2 $street_2;
  public street3 $street_3;
}

class GetShippingLabelOutput {
  public GenericString $shipping_label_url;
  public GenericString $warning;
}

class GetStatusInput {
  public APIVersion $api_version;
  public JobId $job_id;
}

class GetStatusOutput {
  public ArtifactList $artifact_list;
  public Carrier $carrier;
  public CreationDate $creation_date;
  public CurrentManifest $current_manifest;
  public ErrorCount $error_count;
  public JobId $job_id;
  public JobType $job_type;
  public LocationCode $location_code;
  public LocationMessage $location_message;
  public LogBucket $log_bucket;
  public LogKey $log_key;
  public ProgressCode $progress_code;
  public ProgressMessage $progress_message;
  public Signature $signature;
  public Signature $signature_file_contents;
  public TrackingNumber $tracking_number;
}

class InvalidAccessKeyIdException {
  public ErrorMessage $message;
}

class InvalidAddressException {
  public ErrorMessage $message;
}

class InvalidCustomsException {
  public ErrorMessage $message;
}

class InvalidFileSystemException {
  public ErrorMessage $message;
}

class InvalidJobIdException {
  public ErrorMessage $message;
}

class InvalidManifestFieldException {
  public ErrorMessage $message;
}

class InvalidParameterException {
  public ErrorMessage $message;
}

class InvalidVersionException {
  public ErrorMessage $message;
}

class IsCanceled {
}

class IsTruncated {
}

class Job {
  public CreationDate $creation_date;
  public IsCanceled $is_canceled;
  public JobId $job_id;
  public JobType $job_type;
}

class JobId {
}

class JobIdList {
}

class JobType {
}

class JobsList {
}

class ListJobsInput {
  public APIVersion $api_version;
  public Marker $marker;
  public MaxJobs $max_jobs;
}

class ListJobsOutput {
  public IsTruncated $is_truncated;
  public JobsList $jobs;
}

class LocationCode {
}

class LocationMessage {
}

class LogBucket {
}

class LogKey {
}

class MalformedManifestException {
  public ErrorMessage $message;
}

class Manifest {
}

class ManifestAddendum {
}

class Marker {
}

class MaxJobs {
}

class MissingCustomsException {
  public ErrorMessage $message;
}

class MissingManifestFieldException {
  public ErrorMessage $message;
}

class MissingParameterException {
  public ErrorMessage $message;
}

class MultipleRegionsException {
  public ErrorMessage $message;
}

class NoSuchBucketException {
  public ErrorMessage $message;
}

class ProgressCode {
}

class ProgressMessage {
}

class Signature {
}

class SignatureFileContents {
}

class Success {
}

class TrackingNumber {
}

class URL {
}

class UnableToCancelJobIdException {
  public ErrorMessage $message;
}

class UnableToUpdateJobIdException {
  public ErrorMessage $message;
}

class UpdateJobInput {
  public APIVersion $api_version;
  public JobId $job_id;
  public JobType $job_type;
  public Manifest $manifest;
  public ValidateOnly $validate_only;
}

class UpdateJobOutput {
  public ArtifactList $artifact_list;
  public Success $success;
  public WarningMessage $warning_message;
}

class ValidateOnly {
}

class WarningMessage {
}

class city {
}

class company {
}

class country {
}

class name {
}

class phoneNumber {
}

class postalCode {
}

class stateOrProvince {
}

class street1 {
}

class street2 {
}

class street3 {
}

