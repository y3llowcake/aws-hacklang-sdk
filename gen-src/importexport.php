<?hh // strict
namespace slack\aws\importexport;

interface  {
  public function UpdateJob(UpdateJobInput) Awaitable<Errors\Result<UpdateJobOutput>>;
  public function CancelJob(CancelJobInput) Awaitable<Errors\Result<CancelJobOutput>>;
  public function CreateJob(CreateJobInput) Awaitable<Errors\Result<CreateJobOutput>>;
  public function GetShippingLabel(GetShippingLabelInput) Awaitable<Errors\Result<GetShippingLabelOutput>>;
  public function GetStatus(GetStatusInput) Awaitable<Errors\Result<GetStatusOutput>>;
  public function ListJobs(ListJobsInput) Awaitable<Errors\Result<ListJobsOutput>>;
}

class street3 {
}

class APIVersion {
}

class BucketPermissionException {
  public ErrorMessage $message;
}

class CanceledJobIdException {
  public ErrorMessage $message;
}

class Job {
  public JobId $job_id;
  public CreationDate $creation_date;
  public IsCanceled $is_canceled;
  public JobType $job_type;
}

class JobId {
}

class Manifest {
}

class MissingManifestFieldException {
  public ErrorMessage $message;
}

class Artifact {
  public Description $description;
  public URL $url;
}

class CancelJobInput {
  public JobId $job_id;
  public APIVersion $api_version;
}

class InvalidVersionException {
  public ErrorMessage $message;
}

class ListJobsInput {
  public APIVersion $api_version;
  public MaxJobs $max_jobs;
  public Marker $marker;
}

class MissingCustomsException {
  public ErrorMessage $message;
}

class UnableToUpdateJobIdException {
  public ErrorMessage $message;
}

class stateOrProvince {
}

class CreateJobQuotaExceededException {
  public ErrorMessage $message;
}

class GetStatusInput {
  public JobId $job_id;
  public APIVersion $api_version;
}

class InvalidAddressException {
  public ErrorMessage $message;
}

class InvalidFileSystemException {
  public ErrorMessage $message;
}

class JobsList {
}

class ErrorCount {
}

class Marker {
}

class postalCode {
}

class street1 {
}

class InvalidManifestFieldException {
  public ErrorMessage $message;
}

class UnableToCancelJobIdException {
  public ErrorMessage $message;
}

class UpdateJobOutput {
  public WarningMessage $warning_message;
  public ArtifactList $artifact_list;
  public Success $success;
}

class CancelJobOutput {
  public Success $success;
}

class InvalidJobIdException {
  public ErrorMessage $message;
}

class MissingParameterException {
  public ErrorMessage $message;
}

class NoSuchBucketException {
  public ErrorMessage $message;
}

class ProgressMessage {
}

class ArtifactList {
}

class Carrier {
}

class CreationDate {
}

class ExpiredJobIdException {
  public ErrorMessage $message;
}

class GetShippingLabelInput {
  public postalCode $postal_code;
  public street2 $street_2;
  public APIVersion $api_version;
  public name $name;
  public company $company;
  public country $country;
  public city $city;
  public street3 $street_3;
  public JobIdList $job_ids;
  public phoneNumber $phone_number;
  public stateOrProvince $state_or_province;
  public street1 $street_1;
}

class JobIdList {
}

class LogKey {
}

class WarningMessage {
}

class city {
}

class CreateJobInput {
  public APIVersion $api_version;
  public JobType $job_type;
  public Manifest $manifest;
  public ManifestAddendum $manifest_addendum;
  public ValidateOnly $validate_only;
}

class CreateJobOutput {
  public Signature $signature;
  public SignatureFileContents $signature_file_contents;
  public WarningMessage $warning_message;
  public ArtifactList $artifact_list;
  public JobId $job_id;
  public JobType $job_type;
}

class CurrentManifest {
}

class GetShippingLabelOutput {
  public GenericString $shipping_label_url;
  public GenericString $warning;
}

class InvalidParameterException {
  public ErrorMessage $message;
}

class ListJobsOutput {
  public JobsList $jobs;
  public IsTruncated $is_truncated;
}

class UpdateJobInput {
  public APIVersion $api_version;
  public JobId $job_id;
  public Manifest $manifest;
  public JobType $job_type;
  public ValidateOnly $validate_only;
}

class ErrorMessage {
}

class IsTruncated {
}

class ManifestAddendum {
}

class JobType {
}

class LocationMessage {
}

class MaxJobs {
}

class Signature {
}

class TrackingNumber {
}

class street2 {
}

class Description {
}

class MultipleRegionsException {
  public ErrorMessage $message;
}

class ProgressCode {
}

class Success {
}

class company {
}

class phoneNumber {
}

class GenericString {
}

class InvalidAccessKeyIdException {
  public ErrorMessage $message;
}

class IsCanceled {
}

class MalformedManifestException {
  public ErrorMessage $message;
}

class URL {
}

class LogBucket {
}

class SignatureFileContents {
}

class ValidateOnly {
}

class name {
}

class GetStatusOutput {
  public JobId $job_id;
  public JobType $job_type;
  public ErrorCount $error_count;
  public ProgressCode $progress_code;
  public LogKey $log_key;
  public Signature $signature_file_contents;
  public LocationCode $location_code;
  public LocationMessage $location_message;
  public ProgressMessage $progress_message;
  public LogBucket $log_bucket;
  public Signature $signature;
  public CreationDate $creation_date;
  public Carrier $carrier;
  public TrackingNumber $tracking_number;
  public CurrentManifest $current_manifest;
  public ArtifactList $artifact_list;
}

class InvalidCustomsException {
  public ErrorMessage $message;
}

class LocationCode {
}

class country {
}

