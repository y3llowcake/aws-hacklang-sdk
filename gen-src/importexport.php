<?hh // strict
namespace slack\aws\importexport;

interface  {
  public function CancelJob(CancelJobInput $in): Awaitable<\Errors\Result<CancelJobOutput>>;
  public function CreateJob(CreateJobInput $in): Awaitable<\Errors\Result<CreateJobOutput>>;
  public function GetShippingLabel(GetShippingLabelInput $in): Awaitable<\Errors\Result<GetShippingLabelOutput>>;
  public function GetStatus(GetStatusInput $in): Awaitable<\Errors\Result<GetStatusOutput>>;
  public function ListJobs(ListJobsInput $in): Awaitable<\Errors\Result<ListJobsOutput>>;
  public function UpdateJob(UpdateJobInput $in): Awaitable<\Errors\Result<UpdateJobOutput>>;
}

type APIVersion = string;

class Artifact {
  public ?Description $description;
  public ?URL $url;

  public function __construct(shape(
    ?'description' => ?Description,
    ?'url' => ?URL,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->url = $s['url'] ?? '';
  }
}

type ArtifactList = vec<Artifact>;

class BucketPermissionException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class CancelJobInput {
  public ?APIVersion $api_version;
  public ?JobId $job_id;

  public function __construct(shape(
    ?'api_version' => ?APIVersion,
    ?'job_id' => ?JobId,
  ) $s = shape()) {
    $this->api_version = $s['api_version'] ?? '';
    $this->job_id = $s['job_id'] ?? '';
  }
}

class CancelJobOutput {
  public ?Success $success;

  public function __construct(shape(
    ?'success' => ?Success,
  ) $s = shape()) {
    $this->success = $s['success'] ?? false;
  }
}

class CanceledJobIdException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Carrier = string;

class CreateJobInput {
  public ?APIVersion $api_version;
  public ?JobType $job_type;
  public ?Manifest $manifest;
  public ?ManifestAddendum $manifest_addendum;
  public ?ValidateOnly $validate_only;

  public function __construct(shape(
    ?'api_version' => ?APIVersion,
    ?'job_type' => ?JobType,
    ?'manifest' => ?Manifest,
    ?'manifest_addendum' => ?ManifestAddendum,
    ?'validate_only' => ?ValidateOnly,
  ) $s = shape()) {
    $this->api_version = $s['api_version'] ?? '';
    $this->job_type = $s['job_type'] ?? '';
    $this->manifest = $s['manifest'] ?? '';
    $this->manifest_addendum = $s['manifest_addendum'] ?? '';
    $this->validate_only = $s['validate_only'] ?? false;
  }
}

class CreateJobOutput {
  public ?ArtifactList $artifact_list;
  public ?JobId $job_id;
  public ?JobType $job_type;
  public ?Signature $signature;
  public ?SignatureFileContents $signature_file_contents;
  public ?WarningMessage $warning_message;

  public function __construct(shape(
    ?'artifact_list' => ?ArtifactList,
    ?'job_id' => ?JobId,
    ?'job_type' => ?JobType,
    ?'signature' => ?Signature,
    ?'signature_file_contents' => ?SignatureFileContents,
    ?'warning_message' => ?WarningMessage,
  ) $s = shape()) {
    $this->artifact_list = $s['artifact_list'] ?? vec[];
    $this->job_id = $s['job_id'] ?? '';
    $this->job_type = $s['job_type'] ?? '';
    $this->signature = $s['signature'] ?? '';
    $this->signature_file_contents = $s['signature_file_contents'] ?? '';
    $this->warning_message = $s['warning_message'] ?? '';
  }
}

class CreateJobQuotaExceededException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type CreationDate = int;

type CurrentManifest = string;

type Description = string;

type ErrorCount = int;

type ErrorMessage = string;

class ExpiredJobIdException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type GenericString = string;

class GetShippingLabelInput {
  public ?APIVersion $api_version;
  public ?city $city;
  public ?company $company;
  public ?country $country;
  public ?JobIdList $job_ids;
  public ?name $name;
  public ?phoneNumber $phone_number;
  public ?postalCode $postal_code;
  public ?stateOrProvince $state_or_province;
  public ?street1 $street_1;
  public ?street2 $street_2;
  public ?street3 $street_3;

  public function __construct(shape(
    ?'api_version' => ?APIVersion,
    ?'city' => ?city,
    ?'company' => ?company,
    ?'country' => ?country,
    ?'job_ids' => ?JobIdList,
    ?'name' => ?name,
    ?'phone_number' => ?phoneNumber,
    ?'postal_code' => ?postalCode,
    ?'state_or_province' => ?stateOrProvince,
    ?'street_1' => ?street1,
    ?'street_2' => ?street2,
    ?'street_3' => ?street3,
  ) $s = shape()) {
    $this->api_version = $s['api_version'] ?? '';
    $this->city = $s['city'] ?? '';
    $this->company = $s['company'] ?? '';
    $this->country = $s['country'] ?? '';
    $this->job_ids = $s['job_ids'] ?? vec[];
    $this->name = $s['name'] ?? '';
    $this->phone_number = $s['phone_number'] ?? '';
    $this->postal_code = $s['postal_code'] ?? '';
    $this->state_or_province = $s['state_or_province'] ?? '';
    $this->street_1 = $s['street_1'] ?? '';
    $this->street_2 = $s['street_2'] ?? '';
    $this->street_3 = $s['street_3'] ?? '';
  }
}

class GetShippingLabelOutput {
  public ?GenericString $shipping_label_url;
  public ?GenericString $warning;

  public function __construct(shape(
    ?'shipping_label_url' => ?GenericString,
    ?'warning' => ?GenericString,
  ) $s = shape()) {
    $this->shipping_label_url = $s['shipping_label_url'] ?? '';
    $this->warning = $s['warning'] ?? '';
  }
}

class GetStatusInput {
  public ?APIVersion $api_version;
  public ?JobId $job_id;

  public function __construct(shape(
    ?'api_version' => ?APIVersion,
    ?'job_id' => ?JobId,
  ) $s = shape()) {
    $this->api_version = $s['api_version'] ?? '';
    $this->job_id = $s['job_id'] ?? '';
  }
}

class GetStatusOutput {
  public ?ArtifactList $artifact_list;
  public ?Carrier $carrier;
  public ?CreationDate $creation_date;
  public ?CurrentManifest $current_manifest;
  public ?ErrorCount $error_count;
  public ?JobId $job_id;
  public ?JobType $job_type;
  public ?LocationCode $location_code;
  public ?LocationMessage $location_message;
  public ?LogBucket $log_bucket;
  public ?LogKey $log_key;
  public ?ProgressCode $progress_code;
  public ?ProgressMessage $progress_message;
  public ?Signature $signature;
  public ?Signature $signature_file_contents;
  public ?TrackingNumber $tracking_number;

  public function __construct(shape(
    ?'artifact_list' => ?ArtifactList,
    ?'carrier' => ?Carrier,
    ?'creation_date' => ?CreationDate,
    ?'current_manifest' => ?CurrentManifest,
    ?'error_count' => ?ErrorCount,
    ?'job_id' => ?JobId,
    ?'job_type' => ?JobType,
    ?'location_code' => ?LocationCode,
    ?'location_message' => ?LocationMessage,
    ?'log_bucket' => ?LogBucket,
    ?'log_key' => ?LogKey,
    ?'progress_code' => ?ProgressCode,
    ?'progress_message' => ?ProgressMessage,
    ?'signature' => ?Signature,
    ?'signature_file_contents' => ?Signature,
    ?'tracking_number' => ?TrackingNumber,
  ) $s = shape()) {
    $this->artifact_list = $s['artifact_list'] ?? vec[];
    $this->carrier = $s['carrier'] ?? '';
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->current_manifest = $s['current_manifest'] ?? '';
    $this->error_count = $s['error_count'] ?? 0;
    $this->job_id = $s['job_id'] ?? '';
    $this->job_type = $s['job_type'] ?? '';
    $this->location_code = $s['location_code'] ?? '';
    $this->location_message = $s['location_message'] ?? '';
    $this->log_bucket = $s['log_bucket'] ?? '';
    $this->log_key = $s['log_key'] ?? '';
    $this->progress_code = $s['progress_code'] ?? '';
    $this->progress_message = $s['progress_message'] ?? '';
    $this->signature = $s['signature'] ?? '';
    $this->signature_file_contents = $s['signature_file_contents'] ?? '';
    $this->tracking_number = $s['tracking_number'] ?? '';
  }
}

class InvalidAccessKeyIdException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidAddressException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidCustomsException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidFileSystemException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidJobIdException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidManifestFieldException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidParameterException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidVersionException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type IsCanceled = bool;

type IsTruncated = bool;

class Job {
  public ?CreationDate $creation_date;
  public ?IsCanceled $is_canceled;
  public ?JobId $job_id;
  public ?JobType $job_type;

  public function __construct(shape(
    ?'creation_date' => ?CreationDate,
    ?'is_canceled' => ?IsCanceled,
    ?'job_id' => ?JobId,
    ?'job_type' => ?JobType,
  ) $s = shape()) {
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->is_canceled = $s['is_canceled'] ?? false;
    $this->job_id = $s['job_id'] ?? '';
    $this->job_type = $s['job_type'] ?? '';
  }
}

type JobId = string;

type JobIdList = vec<GenericString>;

type JobType = string;

type JobsList = vec<Job>;

class ListJobsInput {
  public ?APIVersion $api_version;
  public ?Marker $marker;
  public ?MaxJobs $max_jobs;

  public function __construct(shape(
    ?'api_version' => ?APIVersion,
    ?'marker' => ?Marker,
    ?'max_jobs' => ?MaxJobs,
  ) $s = shape()) {
    $this->api_version = $s['api_version'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->max_jobs = $s['max_jobs'] ?? 0;
  }
}

class ListJobsOutput {
  public ?IsTruncated $is_truncated;
  public ?JobsList $jobs;

  public function __construct(shape(
    ?'is_truncated' => ?IsTruncated,
    ?'jobs' => ?JobsList,
  ) $s = shape()) {
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->jobs = $s['jobs'] ?? vec[];
  }
}

type LocationCode = string;

type LocationMessage = string;

type LogBucket = string;

type LogKey = string;

class MalformedManifestException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Manifest = string;

type ManifestAddendum = string;

type Marker = string;

type MaxJobs = int;

class MissingCustomsException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class MissingManifestFieldException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class MissingParameterException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class MultipleRegionsException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class NoSuchBucketException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ProgressCode = string;

type ProgressMessage = string;

type Signature = string;

type SignatureFileContents = string;

type Success = bool;

type TrackingNumber = string;

type URL = string;

class UnableToCancelJobIdException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class UnableToUpdateJobIdException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class UpdateJobInput {
  public ?APIVersion $api_version;
  public ?JobId $job_id;
  public ?JobType $job_type;
  public ?Manifest $manifest;
  public ?ValidateOnly $validate_only;

  public function __construct(shape(
    ?'api_version' => ?APIVersion,
    ?'job_id' => ?JobId,
    ?'job_type' => ?JobType,
    ?'manifest' => ?Manifest,
    ?'validate_only' => ?ValidateOnly,
  ) $s = shape()) {
    $this->api_version = $s['api_version'] ?? '';
    $this->job_id = $s['job_id'] ?? '';
    $this->job_type = $s['job_type'] ?? '';
    $this->manifest = $s['manifest'] ?? '';
    $this->validate_only = $s['validate_only'] ?? false;
  }
}

class UpdateJobOutput {
  public ?ArtifactList $artifact_list;
  public ?Success $success;
  public ?WarningMessage $warning_message;

  public function __construct(shape(
    ?'artifact_list' => ?ArtifactList,
    ?'success' => ?Success,
    ?'warning_message' => ?WarningMessage,
  ) $s = shape()) {
    $this->artifact_list = $s['artifact_list'] ?? vec[];
    $this->success = $s['success'] ?? false;
    $this->warning_message = $s['warning_message'] ?? '';
  }
}

type ValidateOnly = bool;

type WarningMessage = string;

type city = string;

type company = string;

type country = string;

type name = string;

type phoneNumber = string;

type postalCode = string;

type stateOrProvince = string;

type street1 = string;

type street2 = string;

type street3 = string;

