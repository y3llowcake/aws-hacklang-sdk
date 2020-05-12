<?hh // strict
namespace slack\aws\rekognition;

interface Rekognition {
  public function CompareFaces(CompareFacesRequest $in): Awaitable<\Errors\Result<CompareFacesResponse>>;
  public function CreateCollection(CreateCollectionRequest $in): Awaitable<\Errors\Result<CreateCollectionResponse>>;
  public function CreateProject(CreateProjectRequest $in): Awaitable<\Errors\Result<CreateProjectResponse>>;
  public function CreateProjectVersion(CreateProjectVersionRequest $in): Awaitable<\Errors\Result<CreateProjectVersionResponse>>;
  public function CreateStreamProcessor(CreateStreamProcessorRequest $in): Awaitable<\Errors\Result<CreateStreamProcessorResponse>>;
  public function DeleteCollection(DeleteCollectionRequest $in): Awaitable<\Errors\Result<DeleteCollectionResponse>>;
  public function DeleteFaces(DeleteFacesRequest $in): Awaitable<\Errors\Result<DeleteFacesResponse>>;
  public function DeleteProject(DeleteProjectRequest $in): Awaitable<\Errors\Result<DeleteProjectResponse>>;
  public function DeleteProjectVersion(DeleteProjectVersionRequest $in): Awaitable<\Errors\Result<DeleteProjectVersionResponse>>;
  public function DeleteStreamProcessor(DeleteStreamProcessorRequest $in): Awaitable<\Errors\Result<DeleteStreamProcessorResponse>>;
  public function DescribeCollection(DescribeCollectionRequest $in): Awaitable<\Errors\Result<DescribeCollectionResponse>>;
  public function DescribeProjectVersions(DescribeProjectVersionsRequest $in): Awaitable<\Errors\Result<DescribeProjectVersionsResponse>>;
  public function DescribeProjects(DescribeProjectsRequest $in): Awaitable<\Errors\Result<DescribeProjectsResponse>>;
  public function DescribeStreamProcessor(DescribeStreamProcessorRequest $in): Awaitable<\Errors\Result<DescribeStreamProcessorResponse>>;
  public function DetectCustomLabels(DetectCustomLabelsRequest $in): Awaitable<\Errors\Result<DetectCustomLabelsResponse>>;
  public function DetectFaces(DetectFacesRequest $in): Awaitable<\Errors\Result<DetectFacesResponse>>;
  public function DetectLabels(DetectLabelsRequest $in): Awaitable<\Errors\Result<DetectLabelsResponse>>;
  public function DetectModerationLabels(DetectModerationLabelsRequest $in): Awaitable<\Errors\Result<DetectModerationLabelsResponse>>;
  public function DetectText(DetectTextRequest $in): Awaitable<\Errors\Result<DetectTextResponse>>;
  public function GetCelebrityInfo(GetCelebrityInfoRequest $in): Awaitable<\Errors\Result<GetCelebrityInfoResponse>>;
  public function GetCelebrityRecognition(GetCelebrityRecognitionRequest $in): Awaitable<\Errors\Result<GetCelebrityRecognitionResponse>>;
  public function GetContentModeration(GetContentModerationRequest $in): Awaitable<\Errors\Result<GetContentModerationResponse>>;
  public function GetFaceDetection(GetFaceDetectionRequest $in): Awaitable<\Errors\Result<GetFaceDetectionResponse>>;
  public function GetFaceSearch(GetFaceSearchRequest $in): Awaitable<\Errors\Result<GetFaceSearchResponse>>;
  public function GetLabelDetection(GetLabelDetectionRequest $in): Awaitable<\Errors\Result<GetLabelDetectionResponse>>;
  public function GetPersonTracking(GetPersonTrackingRequest $in): Awaitable<\Errors\Result<GetPersonTrackingResponse>>;
  public function GetTextDetection(GetTextDetectionRequest $in): Awaitable<\Errors\Result<GetTextDetectionResponse>>;
  public function IndexFaces(IndexFacesRequest $in): Awaitable<\Errors\Result<IndexFacesResponse>>;
  public function ListCollections(ListCollectionsRequest $in): Awaitable<\Errors\Result<ListCollectionsResponse>>;
  public function ListFaces(ListFacesRequest $in): Awaitable<\Errors\Result<ListFacesResponse>>;
  public function ListStreamProcessors(ListStreamProcessorsRequest $in): Awaitable<\Errors\Result<ListStreamProcessorsResponse>>;
  public function RecognizeCelebrities(RecognizeCelebritiesRequest $in): Awaitable<\Errors\Result<RecognizeCelebritiesResponse>>;
  public function SearchFaces(SearchFacesRequest $in): Awaitable<\Errors\Result<SearchFacesResponse>>;
  public function SearchFacesByImage(SearchFacesByImageRequest $in): Awaitable<\Errors\Result<SearchFacesByImageResponse>>;
  public function StartCelebrityRecognition(StartCelebrityRecognitionRequest $in): Awaitable<\Errors\Result<StartCelebrityRecognitionResponse>>;
  public function StartContentModeration(StartContentModerationRequest $in): Awaitable<\Errors\Result<StartContentModerationResponse>>;
  public function StartFaceDetection(StartFaceDetectionRequest $in): Awaitable<\Errors\Result<StartFaceDetectionResponse>>;
  public function StartFaceSearch(StartFaceSearchRequest $in): Awaitable<\Errors\Result<StartFaceSearchResponse>>;
  public function StartLabelDetection(StartLabelDetectionRequest $in): Awaitable<\Errors\Result<StartLabelDetectionResponse>>;
  public function StartPersonTracking(StartPersonTrackingRequest $in): Awaitable<\Errors\Result<StartPersonTrackingResponse>>;
  public function StartProjectVersion(StartProjectVersionRequest $in): Awaitable<\Errors\Result<StartProjectVersionResponse>>;
  public function StartStreamProcessor(StartStreamProcessorRequest $in): Awaitable<\Errors\Result<StartStreamProcessorResponse>>;
  public function StartTextDetection(StartTextDetectionRequest $in): Awaitable<\Errors\Result<StartTextDetectionResponse>>;
  public function StopProjectVersion(StopProjectVersionRequest $in): Awaitable<\Errors\Result<StopProjectVersionResponse>>;
  public function StopStreamProcessor(StopStreamProcessorRequest $in): Awaitable<\Errors\Result<StopStreamProcessorResponse>>;
}

class AccessDeniedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AgeRange {
  public ?UInteger $high;
  public ?UInteger $low;

  public function __construct(shape(
    ?'high' => ?UInteger,
    ?'low' => ?UInteger,
  ) $s = shape()) {
    $this->high = $s['high'] ?? 0;
    $this->low = $s['low'] ?? 0;
  }
}

class Asset {
  public ?GroundTruthManifest $ground_truth_manifest;

  public function __construct(shape(
    ?'ground_truth_manifest' => ?GroundTruthManifest,
  ) $s = shape()) {
    $this->ground_truth_manifest = $s['ground_truth_manifest'] ?? null;
  }
}

type Assets = vec<Asset>;

type Attribute = string;

type Attributes = vec<Attribute>;

class Beard {
  public ?Percent $confidence;
  public bool $value;

  public function __construct(shape(
    ?'confidence' => ?Percent,
    ?'value' => bool,
  ) $s = shape()) {
    $this->confidence = $s['confidence'] ?? 0.0;
    $this->value = $s['value'] ?? false;
  }
}

type Boolean = bool;

class BoundingBox {
  public ?Float $height;
  public ?Float $left;
  public ?Float $top;
  public ?Float $width;

  public function __construct(shape(
    ?'height' => ?Float,
    ?'left' => ?Float,
    ?'top' => ?Float,
    ?'width' => ?Float,
  ) $s = shape()) {
    $this->height = $s['height'] ?? 0.0;
    $this->left = $s['left'] ?? 0.0;
    $this->top = $s['top'] ?? 0.0;
    $this->width = $s['width'] ?? 0.0;
  }
}

type BoundingBoxHeight = float;

type BoundingBoxWidth = float;

class Celebrity {
  public ?ComparedFace $face;
  public ?RekognitionUniqueId $id;
  public ?Percent $match_confidence;
  public string $name;
  public ?Urls $urls;

  public function __construct(shape(
    ?'face' => ?ComparedFace,
    ?'id' => ?RekognitionUniqueId,
    ?'match_confidence' => ?Percent,
    ?'name' => string,
    ?'urls' => ?Urls,
  ) $s = shape()) {
    $this->face = $s['face'] ?? null;
    $this->id = $s['id'] ?? '';
    $this->match_confidence = $s['match_confidence'] ?? 0.0;
    $this->name = $s['name'] ?? '';
    $this->urls = $s['urls'] ?? vec[];
  }
}

class CelebrityDetail {
  public ?BoundingBox $bounding_box;
  public ?Percent $confidence;
  public ?FaceDetail $face;
  public ?RekognitionUniqueId $id;
  public string $name;
  public ?Urls $urls;

  public function __construct(shape(
    ?'bounding_box' => ?BoundingBox,
    ?'confidence' => ?Percent,
    ?'face' => ?FaceDetail,
    ?'id' => ?RekognitionUniqueId,
    ?'name' => string,
    ?'urls' => ?Urls,
  ) $s = shape()) {
    $this->bounding_box = $s['bounding_box'] ?? null;
    $this->confidence = $s['confidence'] ?? 0.0;
    $this->face = $s['face'] ?? null;
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->urls = $s['urls'] ?? vec[];
  }
}

type CelebrityList = vec<Celebrity>;

class CelebrityRecognition {
  public ?CelebrityDetail $celebrity;
  public ?Timestamp $timestamp;

  public function __construct(shape(
    ?'celebrity' => ?CelebrityDetail,
    ?'timestamp' => ?Timestamp,
  ) $s = shape()) {
    $this->celebrity = $s['celebrity'] ?? null;
    $this->timestamp = $s['timestamp'] ?? 0;
  }
}

type CelebrityRecognitionSortBy = string;

type CelebrityRecognitions = vec<CelebrityRecognition>;

type ClientRequestToken = string;

type CollectionId = string;

type CollectionIdList = vec<CollectionId>;

class CompareFacesMatch {
  public ?ComparedFace $face;
  public ?Percent $similarity;

  public function __construct(shape(
    ?'face' => ?ComparedFace,
    ?'similarity' => ?Percent,
  ) $s = shape()) {
    $this->face = $s['face'] ?? null;
    $this->similarity = $s['similarity'] ?? 0.0;
  }
}

type CompareFacesMatchList = vec<CompareFacesMatch>;

class CompareFacesRequest {
  public ?QualityFilter $quality_filter;
  public ?Percent $similarity_threshold;
  public ?Image $source_image;
  public ?Image $target_image;

  public function __construct(shape(
    ?'quality_filter' => ?QualityFilter,
    ?'similarity_threshold' => ?Percent,
    ?'source_image' => ?Image,
    ?'target_image' => ?Image,
  ) $s = shape()) {
    $this->quality_filter = $s['quality_filter'] ?? '';
    $this->similarity_threshold = $s['similarity_threshold'] ?? 0.0;
    $this->source_image = $s['source_image'] ?? null;
    $this->target_image = $s['target_image'] ?? null;
  }
}

class CompareFacesResponse {
  public ?CompareFacesMatchList $face_matches;
  public ?ComparedSourceImageFace $source_image_face;
  public ?OrientationCorrection $source_image_orientation_correction;
  public ?OrientationCorrection $target_image_orientation_correction;
  public ?CompareFacesUnmatchList $unmatched_faces;

  public function __construct(shape(
    ?'face_matches' => ?CompareFacesMatchList,
    ?'source_image_face' => ?ComparedSourceImageFace,
    ?'source_image_orientation_correction' => ?OrientationCorrection,
    ?'target_image_orientation_correction' => ?OrientationCorrection,
    ?'unmatched_faces' => ?CompareFacesUnmatchList,
  ) $s = shape()) {
    $this->face_matches = $s['face_matches'] ?? vec[];
    $this->source_image_face = $s['source_image_face'] ?? null;
    $this->source_image_orientation_correction = $s['source_image_orientation_correction'] ?? '';
    $this->target_image_orientation_correction = $s['target_image_orientation_correction'] ?? '';
    $this->unmatched_faces = $s['unmatched_faces'] ?? vec[];
  }
}

type CompareFacesUnmatchList = vec<ComparedFace>;

class ComparedFace {
  public ?BoundingBox $bounding_box;
  public ?Percent $confidence;
  public ?Landmarks $landmarks;
  public ?Pose $pose;
  public ?ImageQuality $quality;

  public function __construct(shape(
    ?'bounding_box' => ?BoundingBox,
    ?'confidence' => ?Percent,
    ?'landmarks' => ?Landmarks,
    ?'pose' => ?Pose,
    ?'quality' => ?ImageQuality,
  ) $s = shape()) {
    $this->bounding_box = $s['bounding_box'] ?? null;
    $this->confidence = $s['confidence'] ?? 0.0;
    $this->landmarks = $s['landmarks'] ?? vec[];
    $this->pose = $s['pose'] ?? null;
    $this->quality = $s['quality'] ?? null;
  }
}

type ComparedFaceList = vec<ComparedFace>;

class ComparedSourceImageFace {
  public ?BoundingBox $bounding_box;
  public ?Percent $confidence;

  public function __construct(shape(
    ?'bounding_box' => ?BoundingBox,
    ?'confidence' => ?Percent,
  ) $s = shape()) {
    $this->bounding_box = $s['bounding_box'] ?? null;
    $this->confidence = $s['confidence'] ?? 0.0;
  }
}

type ContentClassifier = string;

type ContentClassifiers = vec<ContentClassifier>;

class ContentModerationDetection {
  public ?ModerationLabel $moderation_label;
  public ?Timestamp $timestamp;

  public function __construct(shape(
    ?'moderation_label' => ?ModerationLabel,
    ?'timestamp' => ?Timestamp,
  ) $s = shape()) {
    $this->moderation_label = $s['moderation_label'] ?? null;
    $this->timestamp = $s['timestamp'] ?? 0;
  }
}

type ContentModerationDetections = vec<ContentModerationDetection>;

type ContentModerationSortBy = string;

class CreateCollectionRequest {
  public ?CollectionId $collection_id;

  public function __construct(shape(
    ?'collection_id' => ?CollectionId,
  ) $s = shape()) {
    $this->collection_id = $s['collection_id'] ?? '';
  }
}

class CreateCollectionResponse {
  public string $collection_arn;
  public string $face_model_version;
  public ?UInteger $status_code;

  public function __construct(shape(
    ?'collection_arn' => string,
    ?'face_model_version' => string,
    ?'status_code' => ?UInteger,
  ) $s = shape()) {
    $this->collection_arn = $s['collection_arn'] ?? '';
    $this->face_model_version = $s['face_model_version'] ?? '';
    $this->status_code = $s['status_code'] ?? 0;
  }
}

class CreateProjectRequest {
  public ?ProjectName $project_name;

  public function __construct(shape(
    ?'project_name' => ?ProjectName,
  ) $s = shape()) {
    $this->project_name = $s['project_name'] ?? '';
  }
}

class CreateProjectResponse {
  public ?ProjectArn $project_arn;

  public function __construct(shape(
    ?'project_arn' => ?ProjectArn,
  ) $s = shape()) {
    $this->project_arn = $s['project_arn'] ?? '';
  }
}

class CreateProjectVersionRequest {
  public ?OutputConfig $output_config;
  public ?ProjectArn $project_arn;
  public ?TestingData $testing_data;
  public ?TrainingData $training_data;
  public ?VersionName $version_name;

  public function __construct(shape(
    ?'output_config' => ?OutputConfig,
    ?'project_arn' => ?ProjectArn,
    ?'testing_data' => ?TestingData,
    ?'training_data' => ?TrainingData,
    ?'version_name' => ?VersionName,
  ) $s = shape()) {
    $this->output_config = $s['output_config'] ?? null;
    $this->project_arn = $s['project_arn'] ?? '';
    $this->testing_data = $s['testing_data'] ?? null;
    $this->training_data = $s['training_data'] ?? null;
    $this->version_name = $s['version_name'] ?? '';
  }
}

class CreateProjectVersionResponse {
  public ?ProjectVersionArn $project_version_arn;

  public function __construct(shape(
    ?'project_version_arn' => ?ProjectVersionArn,
  ) $s = shape()) {
    $this->project_version_arn = $s['project_version_arn'] ?? '';
  }
}

class CreateStreamProcessorRequest {
  public ?StreamProcessorInput $input;
  public ?StreamProcessorName $name;
  public ?StreamProcessorOutput $output;
  public ?RoleArn $role_arn;
  public ?StreamProcessorSettings $settings;

  public function __construct(shape(
    ?'input' => ?StreamProcessorInput,
    ?'name' => ?StreamProcessorName,
    ?'output' => ?StreamProcessorOutput,
    ?'role_arn' => ?RoleArn,
    ?'settings' => ?StreamProcessorSettings,
  ) $s = shape()) {
    $this->input = $s['input'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->output = $s['output'] ?? null;
    $this->role_arn = $s['role_arn'] ?? '';
    $this->settings = $s['settings'] ?? null;
  }
}

class CreateStreamProcessorResponse {
  public ?StreamProcessorArn $stream_processor_arn;

  public function __construct(shape(
    ?'stream_processor_arn' => ?StreamProcessorArn,
  ) $s = shape()) {
    $this->stream_processor_arn = $s['stream_processor_arn'] ?? '';
  }
}

class CustomLabel {
  public ?Percent $confidence;
  public ?Geometry $geometry;
  public string $name;

  public function __construct(shape(
    ?'confidence' => ?Percent,
    ?'geometry' => ?Geometry,
    ?'name' => string,
  ) $s = shape()) {
    $this->confidence = $s['confidence'] ?? 0.0;
    $this->geometry = $s['geometry'] ?? null;
    $this->name = $s['name'] ?? '';
  }
}

type CustomLabels = vec<CustomLabel>;

type DateTime = int;

type Degree = float;

class DeleteCollectionRequest {
  public ?CollectionId $collection_id;

  public function __construct(shape(
    ?'collection_id' => ?CollectionId,
  ) $s = shape()) {
    $this->collection_id = $s['collection_id'] ?? '';
  }
}

class DeleteCollectionResponse {
  public ?UInteger $status_code;

  public function __construct(shape(
    ?'status_code' => ?UInteger,
  ) $s = shape()) {
    $this->status_code = $s['status_code'] ?? 0;
  }
}

class DeleteFacesRequest {
  public ?CollectionId $collection_id;
  public ?FaceIdList $face_ids;

  public function __construct(shape(
    ?'collection_id' => ?CollectionId,
    ?'face_ids' => ?FaceIdList,
  ) $s = shape()) {
    $this->collection_id = $s['collection_id'] ?? '';
    $this->face_ids = $s['face_ids'] ?? vec[];
  }
}

class DeleteFacesResponse {
  public ?FaceIdList $deleted_faces;

  public function __construct(shape(
    ?'deleted_faces' => ?FaceIdList,
  ) $s = shape()) {
    $this->deleted_faces = $s['deleted_faces'] ?? vec[];
  }
}

class DeleteProjectRequest {
  public ?ProjectArn $project_arn;

  public function __construct(shape(
    ?'project_arn' => ?ProjectArn,
  ) $s = shape()) {
    $this->project_arn = $s['project_arn'] ?? '';
  }
}

class DeleteProjectResponse {
  public ?ProjectStatus $status;

  public function __construct(shape(
    ?'status' => ?ProjectStatus,
  ) $s = shape()) {
    $this->status = $s['status'] ?? '';
  }
}

class DeleteProjectVersionRequest {
  public ?ProjectVersionArn $project_version_arn;

  public function __construct(shape(
    ?'project_version_arn' => ?ProjectVersionArn,
  ) $s = shape()) {
    $this->project_version_arn = $s['project_version_arn'] ?? '';
  }
}

class DeleteProjectVersionResponse {
  public ?ProjectVersionStatus $status;

  public function __construct(shape(
    ?'status' => ?ProjectVersionStatus,
  ) $s = shape()) {
    $this->status = $s['status'] ?? '';
  }
}

class DeleteStreamProcessorRequest {
  public ?StreamProcessorName $name;

  public function __construct(shape(
    ?'name' => ?StreamProcessorName,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

class DeleteStreamProcessorResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeCollectionRequest {
  public ?CollectionId $collection_id;

  public function __construct(shape(
    ?'collection_id' => ?CollectionId,
  ) $s = shape()) {
    $this->collection_id = $s['collection_id'] ?? '';
  }
}

class DescribeCollectionResponse {
  public string $collection_arn;
  public ?DateTime $creation_timestamp;
  public ?ULong $face_count;
  public string $face_model_version;

  public function __construct(shape(
    ?'collection_arn' => string,
    ?'creation_timestamp' => ?DateTime,
    ?'face_count' => ?ULong,
    ?'face_model_version' => string,
  ) $s = shape()) {
    $this->collection_arn = $s['collection_arn'] ?? '';
    $this->creation_timestamp = $s['creation_timestamp'] ?? 0;
    $this->face_count = $s['face_count'] ?? 0;
    $this->face_model_version = $s['face_model_version'] ?? '';
  }
}

class DescribeProjectVersionsRequest {
  public ?ProjectVersionsPageSize $max_results;
  public ?ExtendedPaginationToken $next_token;
  public ?ProjectArn $project_arn;
  public ?VersionNames $version_names;

  public function __construct(shape(
    ?'max_results' => ?ProjectVersionsPageSize,
    ?'next_token' => ?ExtendedPaginationToken,
    ?'project_arn' => ?ProjectArn,
    ?'version_names' => ?VersionNames,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->project_arn = $s['project_arn'] ?? '';
    $this->version_names = $s['version_names'] ?? vec[];
  }
}

class DescribeProjectVersionsResponse {
  public ?ExtendedPaginationToken $next_token;
  public ?ProjectVersionDescriptions $project_version_descriptions;

  public function __construct(shape(
    ?'next_token' => ?ExtendedPaginationToken,
    ?'project_version_descriptions' => ?ProjectVersionDescriptions,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->project_version_descriptions = $s['project_version_descriptions'] ?? vec[];
  }
}

class DescribeProjectsRequest {
  public ?ProjectsPageSize $max_results;
  public ?ExtendedPaginationToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?ProjectsPageSize,
    ?'next_token' => ?ExtendedPaginationToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeProjectsResponse {
  public ?ExtendedPaginationToken $next_token;
  public ?ProjectDescriptions $project_descriptions;

  public function __construct(shape(
    ?'next_token' => ?ExtendedPaginationToken,
    ?'project_descriptions' => ?ProjectDescriptions,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->project_descriptions = $s['project_descriptions'] ?? vec[];
  }
}

class DescribeStreamProcessorRequest {
  public ?StreamProcessorName $name;

  public function __construct(shape(
    ?'name' => ?StreamProcessorName,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

class DescribeStreamProcessorResponse {
  public ?DateTime $creation_timestamp;
  public ?StreamProcessorInput $input;
  public ?DateTime $last_update_timestamp;
  public ?StreamProcessorName $name;
  public ?StreamProcessorOutput $output;
  public ?RoleArn $role_arn;
  public ?StreamProcessorSettings $settings;
  public ?StreamProcessorStatus $status;
  public string $status_message;
  public ?StreamProcessorArn $stream_processor_arn;

  public function __construct(shape(
    ?'creation_timestamp' => ?DateTime,
    ?'input' => ?StreamProcessorInput,
    ?'last_update_timestamp' => ?DateTime,
    ?'name' => ?StreamProcessorName,
    ?'output' => ?StreamProcessorOutput,
    ?'role_arn' => ?RoleArn,
    ?'settings' => ?StreamProcessorSettings,
    ?'status' => ?StreamProcessorStatus,
    ?'status_message' => string,
    ?'stream_processor_arn' => ?StreamProcessorArn,
  ) $s = shape()) {
    $this->creation_timestamp = $s['creation_timestamp'] ?? 0;
    $this->input = $s['input'] ?? null;
    $this->last_update_timestamp = $s['last_update_timestamp'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->output = $s['output'] ?? null;
    $this->role_arn = $s['role_arn'] ?? '';
    $this->settings = $s['settings'] ?? null;
    $this->status = $s['status'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
    $this->stream_processor_arn = $s['stream_processor_arn'] ?? '';
  }
}

class DetectCustomLabelsRequest {
  public ?Image $image;
  public ?UInteger $max_results;
  public ?Percent $min_confidence;
  public ?ProjectVersionArn $project_version_arn;

  public function __construct(shape(
    ?'image' => ?Image,
    ?'max_results' => ?UInteger,
    ?'min_confidence' => ?Percent,
    ?'project_version_arn' => ?ProjectVersionArn,
  ) $s = shape()) {
    $this->image = $s['image'] ?? null;
    $this->max_results = $s['max_results'] ?? 0;
    $this->min_confidence = $s['min_confidence'] ?? 0.0;
    $this->project_version_arn = $s['project_version_arn'] ?? '';
  }
}

class DetectCustomLabelsResponse {
  public ?CustomLabels $custom_labels;

  public function __construct(shape(
    ?'custom_labels' => ?CustomLabels,
  ) $s = shape()) {
    $this->custom_labels = $s['custom_labels'] ?? vec[];
  }
}

class DetectFacesRequest {
  public ?Attributes $attributes;
  public ?Image $image;

  public function __construct(shape(
    ?'attributes' => ?Attributes,
    ?'image' => ?Image,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? vec[];
    $this->image = $s['image'] ?? null;
  }
}

class DetectFacesResponse {
  public ?FaceDetailList $face_details;
  public ?OrientationCorrection $orientation_correction;

  public function __construct(shape(
    ?'face_details' => ?FaceDetailList,
    ?'orientation_correction' => ?OrientationCorrection,
  ) $s = shape()) {
    $this->face_details = $s['face_details'] ?? vec[];
    $this->orientation_correction = $s['orientation_correction'] ?? '';
  }
}

class DetectLabelsRequest {
  public ?Image $image;
  public ?UInteger $max_labels;
  public ?Percent $min_confidence;

  public function __construct(shape(
    ?'image' => ?Image,
    ?'max_labels' => ?UInteger,
    ?'min_confidence' => ?Percent,
  ) $s = shape()) {
    $this->image = $s['image'] ?? null;
    $this->max_labels = $s['max_labels'] ?? 0;
    $this->min_confidence = $s['min_confidence'] ?? 0.0;
  }
}

class DetectLabelsResponse {
  public string $label_model_version;
  public ?Labels $labels;
  public ?OrientationCorrection $orientation_correction;

  public function __construct(shape(
    ?'label_model_version' => string,
    ?'labels' => ?Labels,
    ?'orientation_correction' => ?OrientationCorrection,
  ) $s = shape()) {
    $this->label_model_version = $s['label_model_version'] ?? '';
    $this->labels = $s['labels'] ?? vec[];
    $this->orientation_correction = $s['orientation_correction'] ?? '';
  }
}

class DetectModerationLabelsRequest {
  public ?HumanLoopConfig $human_loop_config;
  public ?Image $image;
  public ?Percent $min_confidence;

  public function __construct(shape(
    ?'human_loop_config' => ?HumanLoopConfig,
    ?'image' => ?Image,
    ?'min_confidence' => ?Percent,
  ) $s = shape()) {
    $this->human_loop_config = $s['human_loop_config'] ?? null;
    $this->image = $s['image'] ?? null;
    $this->min_confidence = $s['min_confidence'] ?? 0.0;
  }
}

class DetectModerationLabelsResponse {
  public ?HumanLoopActivationOutput $human_loop_activation_output;
  public ?ModerationLabels $moderation_labels;
  public string $moderation_model_version;

  public function __construct(shape(
    ?'human_loop_activation_output' => ?HumanLoopActivationOutput,
    ?'moderation_labels' => ?ModerationLabels,
    ?'moderation_model_version' => string,
  ) $s = shape()) {
    $this->human_loop_activation_output = $s['human_loop_activation_output'] ?? null;
    $this->moderation_labels = $s['moderation_labels'] ?? vec[];
    $this->moderation_model_version = $s['moderation_model_version'] ?? '';
  }
}

class DetectTextFilters {
  public ?RegionsOfInterest $regions_of_interest;
  public ?DetectionFilter $word_filter;

  public function __construct(shape(
    ?'regions_of_interest' => ?RegionsOfInterest,
    ?'word_filter' => ?DetectionFilter,
  ) $s = shape()) {
    $this->regions_of_interest = $s['regions_of_interest'] ?? vec[];
    $this->word_filter = $s['word_filter'] ?? null;
  }
}

class DetectTextRequest {
  public ?DetectTextFilters $filters;
  public ?Image $image;

  public function __construct(shape(
    ?'filters' => ?DetectTextFilters,
    ?'image' => ?Image,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? null;
    $this->image = $s['image'] ?? null;
  }
}

class DetectTextResponse {
  public ?TextDetectionList $text_detections;
  public string $text_model_version;

  public function __construct(shape(
    ?'text_detections' => ?TextDetectionList,
    ?'text_model_version' => string,
  ) $s = shape()) {
    $this->text_detections = $s['text_detections'] ?? vec[];
    $this->text_model_version = $s['text_model_version'] ?? '';
  }
}

class DetectionFilter {
  public ?BoundingBoxHeight $min_bounding_box_height;
  public ?BoundingBoxWidth $min_bounding_box_width;
  public ?Percent $min_confidence;

  public function __construct(shape(
    ?'min_bounding_box_height' => ?BoundingBoxHeight,
    ?'min_bounding_box_width' => ?BoundingBoxWidth,
    ?'min_confidence' => ?Percent,
  ) $s = shape()) {
    $this->min_bounding_box_height = $s['min_bounding_box_height'] ?? 0.0;
    $this->min_bounding_box_width = $s['min_bounding_box_width'] ?? 0.0;
    $this->min_confidence = $s['min_confidence'] ?? 0.0;
  }
}

class Emotion {
  public ?Percent $confidence;
  public ?EmotionName $type;

  public function __construct(shape(
    ?'confidence' => ?Percent,
    ?'type' => ?EmotionName,
  ) $s = shape()) {
    $this->confidence = $s['confidence'] ?? 0.0;
    $this->type = $s['type'] ?? '';
  }
}

type EmotionName = string;

type Emotions = vec<Emotion>;

class EvaluationResult {
  public ?Float $f_1_score;
  public ?Summary $summary;

  public function __construct(shape(
    ?'f_1_score' => ?Float,
    ?'summary' => ?Summary,
  ) $s = shape()) {
    $this->f_1_score = $s['f_1_score'] ?? 0.0;
    $this->summary = $s['summary'] ?? null;
  }
}

type ExtendedPaginationToken = string;

type ExternalImageId = string;

class EyeOpen {
  public ?Percent $confidence;
  public bool $value;

  public function __construct(shape(
    ?'confidence' => ?Percent,
    ?'value' => bool,
  ) $s = shape()) {
    $this->confidence = $s['confidence'] ?? 0.0;
    $this->value = $s['value'] ?? false;
  }
}

class Eyeglasses {
  public ?Percent $confidence;
  public bool $value;

  public function __construct(shape(
    ?'confidence' => ?Percent,
    ?'value' => bool,
  ) $s = shape()) {
    $this->confidence = $s['confidence'] ?? 0.0;
    $this->value = $s['value'] ?? false;
  }
}

class Face {
  public ?BoundingBox $bounding_box;
  public ?Percent $confidence;
  public ?ExternalImageId $external_image_id;
  public ?FaceId $face_id;
  public ?ImageId $image_id;

  public function __construct(shape(
    ?'bounding_box' => ?BoundingBox,
    ?'confidence' => ?Percent,
    ?'external_image_id' => ?ExternalImageId,
    ?'face_id' => ?FaceId,
    ?'image_id' => ?ImageId,
  ) $s = shape()) {
    $this->bounding_box = $s['bounding_box'] ?? null;
    $this->confidence = $s['confidence'] ?? 0.0;
    $this->external_image_id = $s['external_image_id'] ?? '';
    $this->face_id = $s['face_id'] ?? '';
    $this->image_id = $s['image_id'] ?? '';
  }
}

type FaceAttributes = string;

class FaceDetail {
  public ?AgeRange $age_range;
  public ?Beard $beard;
  public ?BoundingBox $bounding_box;
  public ?Percent $confidence;
  public ?Emotions $emotions;
  public ?Eyeglasses $eyeglasses;
  public ?EyeOpen $eyes_open;
  public ?Gender $gender;
  public ?Landmarks $landmarks;
  public ?MouthOpen $mouth_open;
  public ?Mustache $mustache;
  public ?Pose $pose;
  public ?ImageQuality $quality;
  public ?Smile $smile;
  public ?Sunglasses $sunglasses;

  public function __construct(shape(
    ?'age_range' => ?AgeRange,
    ?'beard' => ?Beard,
    ?'bounding_box' => ?BoundingBox,
    ?'confidence' => ?Percent,
    ?'emotions' => ?Emotions,
    ?'eyeglasses' => ?Eyeglasses,
    ?'eyes_open' => ?EyeOpen,
    ?'gender' => ?Gender,
    ?'landmarks' => ?Landmarks,
    ?'mouth_open' => ?MouthOpen,
    ?'mustache' => ?Mustache,
    ?'pose' => ?Pose,
    ?'quality' => ?ImageQuality,
    ?'smile' => ?Smile,
    ?'sunglasses' => ?Sunglasses,
  ) $s = shape()) {
    $this->age_range = $s['age_range'] ?? null;
    $this->beard = $s['beard'] ?? null;
    $this->bounding_box = $s['bounding_box'] ?? null;
    $this->confidence = $s['confidence'] ?? 0.0;
    $this->emotions = $s['emotions'] ?? vec[];
    $this->eyeglasses = $s['eyeglasses'] ?? null;
    $this->eyes_open = $s['eyes_open'] ?? null;
    $this->gender = $s['gender'] ?? null;
    $this->landmarks = $s['landmarks'] ?? vec[];
    $this->mouth_open = $s['mouth_open'] ?? null;
    $this->mustache = $s['mustache'] ?? null;
    $this->pose = $s['pose'] ?? null;
    $this->quality = $s['quality'] ?? null;
    $this->smile = $s['smile'] ?? null;
    $this->sunglasses = $s['sunglasses'] ?? null;
  }
}

type FaceDetailList = vec<FaceDetail>;

class FaceDetection {
  public ?FaceDetail $face;
  public ?Timestamp $timestamp;

  public function __construct(shape(
    ?'face' => ?FaceDetail,
    ?'timestamp' => ?Timestamp,
  ) $s = shape()) {
    $this->face = $s['face'] ?? null;
    $this->timestamp = $s['timestamp'] ?? 0;
  }
}

type FaceDetections = vec<FaceDetection>;

type FaceId = string;

type FaceIdList = vec<FaceId>;

type FaceList = vec<Face>;

class FaceMatch {
  public ?Face $face;
  public ?Percent $similarity;

  public function __construct(shape(
    ?'face' => ?Face,
    ?'similarity' => ?Percent,
  ) $s = shape()) {
    $this->face = $s['face'] ?? null;
    $this->similarity = $s['similarity'] ?? 0.0;
  }
}

type FaceMatchList = vec<FaceMatch>;

type FaceModelVersionList = vec<String>;

class FaceRecord {
  public ?Face $face;
  public ?FaceDetail $face_detail;

  public function __construct(shape(
    ?'face' => ?Face,
    ?'face_detail' => ?FaceDetail,
  ) $s = shape()) {
    $this->face = $s['face'] ?? null;
    $this->face_detail = $s['face_detail'] ?? null;
  }
}

type FaceRecordList = vec<FaceRecord>;

class FaceSearchSettings {
  public ?CollectionId $collection_id;
  public ?Percent $face_match_threshold;

  public function __construct(shape(
    ?'collection_id' => ?CollectionId,
    ?'face_match_threshold' => ?Percent,
  ) $s = shape()) {
    $this->collection_id = $s['collection_id'] ?? '';
    $this->face_match_threshold = $s['face_match_threshold'] ?? 0.0;
  }
}

type FaceSearchSortBy = string;

type Float = float;

type FlowDefinitionArn = string;

class Gender {
  public ?Percent $confidence;
  public ?GenderType $value;

  public function __construct(shape(
    ?'confidence' => ?Percent,
    ?'value' => ?GenderType,
  ) $s = shape()) {
    $this->confidence = $s['confidence'] ?? 0.0;
    $this->value = $s['value'] ?? '';
  }
}

type GenderType = string;

class Geometry {
  public ?BoundingBox $bounding_box;
  public ?Polygon $polygon;

  public function __construct(shape(
    ?'bounding_box' => ?BoundingBox,
    ?'polygon' => ?Polygon,
  ) $s = shape()) {
    $this->bounding_box = $s['bounding_box'] ?? null;
    $this->polygon = $s['polygon'] ?? vec[];
  }
}

class GetCelebrityInfoRequest {
  public ?RekognitionUniqueId $id;

  public function __construct(shape(
    ?'id' => ?RekognitionUniqueId,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
  }
}

class GetCelebrityInfoResponse {
  public string $name;
  public ?Urls $urls;

  public function __construct(shape(
    ?'name' => string,
    ?'urls' => ?Urls,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->urls = $s['urls'] ?? vec[];
  }
}

class GetCelebrityRecognitionRequest {
  public ?JobId $job_id;
  public ?MaxResults $max_results;
  public ?PaginationToken $next_token;
  public ?CelebrityRecognitionSortBy $sort_by;

  public function __construct(shape(
    ?'job_id' => ?JobId,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?PaginationToken,
    ?'sort_by' => ?CelebrityRecognitionSortBy,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->sort_by = $s['sort_by'] ?? '';
  }
}

class GetCelebrityRecognitionResponse {
  public ?CelebrityRecognitions $celebrities;
  public ?VideoJobStatus $job_status;
  public ?PaginationToken $next_token;
  public ?StatusMessage $status_message;
  public ?VideoMetadata $video_metadata;

  public function __construct(shape(
    ?'celebrities' => ?CelebrityRecognitions,
    ?'job_status' => ?VideoJobStatus,
    ?'next_token' => ?PaginationToken,
    ?'status_message' => ?StatusMessage,
    ?'video_metadata' => ?VideoMetadata,
  ) $s = shape()) {
    $this->celebrities = $s['celebrities'] ?? vec[];
    $this->job_status = $s['job_status'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
    $this->video_metadata = $s['video_metadata'] ?? null;
  }
}

class GetContentModerationRequest {
  public ?JobId $job_id;
  public ?MaxResults $max_results;
  public ?PaginationToken $next_token;
  public ?ContentModerationSortBy $sort_by;

  public function __construct(shape(
    ?'job_id' => ?JobId,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?PaginationToken,
    ?'sort_by' => ?ContentModerationSortBy,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->sort_by = $s['sort_by'] ?? '';
  }
}

class GetContentModerationResponse {
  public ?VideoJobStatus $job_status;
  public ?ContentModerationDetections $moderation_labels;
  public string $moderation_model_version;
  public ?PaginationToken $next_token;
  public ?StatusMessage $status_message;
  public ?VideoMetadata $video_metadata;

  public function __construct(shape(
    ?'job_status' => ?VideoJobStatus,
    ?'moderation_labels' => ?ContentModerationDetections,
    ?'moderation_model_version' => string,
    ?'next_token' => ?PaginationToken,
    ?'status_message' => ?StatusMessage,
    ?'video_metadata' => ?VideoMetadata,
  ) $s = shape()) {
    $this->job_status = $s['job_status'] ?? '';
    $this->moderation_labels = $s['moderation_labels'] ?? vec[];
    $this->moderation_model_version = $s['moderation_model_version'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
    $this->video_metadata = $s['video_metadata'] ?? null;
  }
}

class GetFaceDetectionRequest {
  public ?JobId $job_id;
  public ?MaxResults $max_results;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'job_id' => ?JobId,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetFaceDetectionResponse {
  public ?FaceDetections $faces;
  public ?VideoJobStatus $job_status;
  public ?PaginationToken $next_token;
  public ?StatusMessage $status_message;
  public ?VideoMetadata $video_metadata;

  public function __construct(shape(
    ?'faces' => ?FaceDetections,
    ?'job_status' => ?VideoJobStatus,
    ?'next_token' => ?PaginationToken,
    ?'status_message' => ?StatusMessage,
    ?'video_metadata' => ?VideoMetadata,
  ) $s = shape()) {
    $this->faces = $s['faces'] ?? vec[];
    $this->job_status = $s['job_status'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
    $this->video_metadata = $s['video_metadata'] ?? null;
  }
}

class GetFaceSearchRequest {
  public ?JobId $job_id;
  public ?MaxResults $max_results;
  public ?PaginationToken $next_token;
  public ?FaceSearchSortBy $sort_by;

  public function __construct(shape(
    ?'job_id' => ?JobId,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?PaginationToken,
    ?'sort_by' => ?FaceSearchSortBy,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->sort_by = $s['sort_by'] ?? '';
  }
}

class GetFaceSearchResponse {
  public ?VideoJobStatus $job_status;
  public ?PaginationToken $next_token;
  public ?PersonMatches $persons;
  public ?StatusMessage $status_message;
  public ?VideoMetadata $video_metadata;

  public function __construct(shape(
    ?'job_status' => ?VideoJobStatus,
    ?'next_token' => ?PaginationToken,
    ?'persons' => ?PersonMatches,
    ?'status_message' => ?StatusMessage,
    ?'video_metadata' => ?VideoMetadata,
  ) $s = shape()) {
    $this->job_status = $s['job_status'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->persons = $s['persons'] ?? vec[];
    $this->status_message = $s['status_message'] ?? '';
    $this->video_metadata = $s['video_metadata'] ?? null;
  }
}

class GetLabelDetectionRequest {
  public ?JobId $job_id;
  public ?MaxResults $max_results;
  public ?PaginationToken $next_token;
  public ?LabelDetectionSortBy $sort_by;

  public function __construct(shape(
    ?'job_id' => ?JobId,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?PaginationToken,
    ?'sort_by' => ?LabelDetectionSortBy,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->sort_by = $s['sort_by'] ?? '';
  }
}

class GetLabelDetectionResponse {
  public ?VideoJobStatus $job_status;
  public string $label_model_version;
  public ?LabelDetections $labels;
  public ?PaginationToken $next_token;
  public ?StatusMessage $status_message;
  public ?VideoMetadata $video_metadata;

  public function __construct(shape(
    ?'job_status' => ?VideoJobStatus,
    ?'label_model_version' => string,
    ?'labels' => ?LabelDetections,
    ?'next_token' => ?PaginationToken,
    ?'status_message' => ?StatusMessage,
    ?'video_metadata' => ?VideoMetadata,
  ) $s = shape()) {
    $this->job_status = $s['job_status'] ?? '';
    $this->label_model_version = $s['label_model_version'] ?? '';
    $this->labels = $s['labels'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
    $this->video_metadata = $s['video_metadata'] ?? null;
  }
}

class GetPersonTrackingRequest {
  public ?JobId $job_id;
  public ?MaxResults $max_results;
  public ?PaginationToken $next_token;
  public ?PersonTrackingSortBy $sort_by;

  public function __construct(shape(
    ?'job_id' => ?JobId,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?PaginationToken,
    ?'sort_by' => ?PersonTrackingSortBy,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->sort_by = $s['sort_by'] ?? '';
  }
}

class GetPersonTrackingResponse {
  public ?VideoJobStatus $job_status;
  public ?PaginationToken $next_token;
  public ?PersonDetections $persons;
  public ?StatusMessage $status_message;
  public ?VideoMetadata $video_metadata;

  public function __construct(shape(
    ?'job_status' => ?VideoJobStatus,
    ?'next_token' => ?PaginationToken,
    ?'persons' => ?PersonDetections,
    ?'status_message' => ?StatusMessage,
    ?'video_metadata' => ?VideoMetadata,
  ) $s = shape()) {
    $this->job_status = $s['job_status'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->persons = $s['persons'] ?? vec[];
    $this->status_message = $s['status_message'] ?? '';
    $this->video_metadata = $s['video_metadata'] ?? null;
  }
}

class GetTextDetectionRequest {
  public ?JobId $job_id;
  public ?MaxResults $max_results;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'job_id' => ?JobId,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetTextDetectionResponse {
  public ?VideoJobStatus $job_status;
  public ?PaginationToken $next_token;
  public ?StatusMessage $status_message;
  public ?TextDetectionResults $text_detections;
  public string $text_model_version;
  public ?VideoMetadata $video_metadata;

  public function __construct(shape(
    ?'job_status' => ?VideoJobStatus,
    ?'next_token' => ?PaginationToken,
    ?'status_message' => ?StatusMessage,
    ?'text_detections' => ?TextDetectionResults,
    ?'text_model_version' => string,
    ?'video_metadata' => ?VideoMetadata,
  ) $s = shape()) {
    $this->job_status = $s['job_status'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
    $this->text_detections = $s['text_detections'] ?? vec[];
    $this->text_model_version = $s['text_model_version'] ?? '';
    $this->video_metadata = $s['video_metadata'] ?? null;
  }
}

class GroundTruthManifest {
  public ?S3Object $s_3_object;

  public function __construct(shape(
    ?'s_3_object' => ?S3Object,
  ) $s = shape()) {
    $this->s_3_object = $s['s_3_object'] ?? null;
  }
}

type HumanLoopActivationConditionsEvaluationResults = string;

class HumanLoopActivationOutput {
  public ?HumanLoopActivationConditionsEvaluationResults $human_loop_activation_conditions_evaluation_results;
  public ?HumanLoopActivationReasons $human_loop_activation_reasons;
  public ?HumanLoopArn $human_loop_arn;

  public function __construct(shape(
    ?'human_loop_activation_conditions_evaluation_results' => ?HumanLoopActivationConditionsEvaluationResults,
    ?'human_loop_activation_reasons' => ?HumanLoopActivationReasons,
    ?'human_loop_arn' => ?HumanLoopArn,
  ) $s = shape()) {
    $this->human_loop_activation_conditions_evaluation_results = $s['human_loop_activation_conditions_evaluation_results'] ?? '';
    $this->human_loop_activation_reasons = $s['human_loop_activation_reasons'] ?? vec[];
    $this->human_loop_arn = $s['human_loop_arn'] ?? '';
  }
}

type HumanLoopActivationReason = string;

type HumanLoopActivationReasons = vec<HumanLoopActivationReason>;

type HumanLoopArn = string;

class HumanLoopConfig {
  public ?HumanLoopDataAttributes $data_attributes;
  public ?FlowDefinitionArn $flow_definition_arn;
  public ?HumanLoopName $human_loop_name;

  public function __construct(shape(
    ?'data_attributes' => ?HumanLoopDataAttributes,
    ?'flow_definition_arn' => ?FlowDefinitionArn,
    ?'human_loop_name' => ?HumanLoopName,
  ) $s = shape()) {
    $this->data_attributes = $s['data_attributes'] ?? null;
    $this->flow_definition_arn = $s['flow_definition_arn'] ?? '';
    $this->human_loop_name = $s['human_loop_name'] ?? '';
  }
}

class HumanLoopDataAttributes {
  public ?ContentClassifiers $content_classifiers;

  public function __construct(shape(
    ?'content_classifiers' => ?ContentClassifiers,
  ) $s = shape()) {
    $this->content_classifiers = $s['content_classifiers'] ?? vec[];
  }
}

type HumanLoopName = string;

class HumanLoopQuotaExceededException {
  public string $quota_code;
  public string $resource_type;
  public string $service_code;

  public function __construct(shape(
    ?'quota_code' => string,
    ?'resource_type' => string,
    ?'service_code' => string,
  ) $s = shape()) {
    $this->quota_code = $s['quota_code'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->service_code = $s['service_code'] ?? '';
  }
}

class IdempotentParameterMismatchException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Image {
  public ?ImageBlob $bytes;
  public ?S3Object $s_3_object;

  public function __construct(shape(
    ?'bytes' => ?ImageBlob,
    ?'s_3_object' => ?S3Object,
  ) $s = shape()) {
    $this->bytes = $s['bytes'] ?? '';
    $this->s_3_object = $s['s_3_object'] ?? null;
  }
}

type ImageBlob = string;

type ImageId = string;

class ImageQuality {
  public ?Float $brightness;
  public ?Float $sharpness;

  public function __construct(shape(
    ?'brightness' => ?Float,
    ?'sharpness' => ?Float,
  ) $s = shape()) {
    $this->brightness = $s['brightness'] ?? 0.0;
    $this->sharpness = $s['sharpness'] ?? 0.0;
  }
}

class ImageTooLargeException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class IndexFacesRequest {
  public ?CollectionId $collection_id;
  public ?Attributes $detection_attributes;
  public ?ExternalImageId $external_image_id;
  public ?Image $image;
  public ?MaxFacesToIndex $max_faces;
  public ?QualityFilter $quality_filter;

  public function __construct(shape(
    ?'collection_id' => ?CollectionId,
    ?'detection_attributes' => ?Attributes,
    ?'external_image_id' => ?ExternalImageId,
    ?'image' => ?Image,
    ?'max_faces' => ?MaxFacesToIndex,
    ?'quality_filter' => ?QualityFilter,
  ) $s = shape()) {
    $this->collection_id = $s['collection_id'] ?? '';
    $this->detection_attributes = $s['detection_attributes'] ?? vec[];
    $this->external_image_id = $s['external_image_id'] ?? '';
    $this->image = $s['image'] ?? null;
    $this->max_faces = $s['max_faces'] ?? 0;
    $this->quality_filter = $s['quality_filter'] ?? '';
  }
}

class IndexFacesResponse {
  public string $face_model_version;
  public ?FaceRecordList $face_records;
  public ?OrientationCorrection $orientation_correction;
  public ?UnindexedFaces $unindexed_faces;

  public function __construct(shape(
    ?'face_model_version' => string,
    ?'face_records' => ?FaceRecordList,
    ?'orientation_correction' => ?OrientationCorrection,
    ?'unindexed_faces' => ?UnindexedFaces,
  ) $s = shape()) {
    $this->face_model_version = $s['face_model_version'] ?? '';
    $this->face_records = $s['face_records'] ?? vec[];
    $this->orientation_correction = $s['orientation_correction'] ?? '';
    $this->unindexed_faces = $s['unindexed_faces'] ?? vec[];
  }
}

type InferenceUnits = int;

class Instance {
  public ?BoundingBox $bounding_box;
  public ?Percent $confidence;

  public function __construct(shape(
    ?'bounding_box' => ?BoundingBox,
    ?'confidence' => ?Percent,
  ) $s = shape()) {
    $this->bounding_box = $s['bounding_box'] ?? null;
    $this->confidence = $s['confidence'] ?? 0.0;
  }
}

type Instances = vec<Instance>;

class InternalServerError {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidImageFormatException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidPaginationTokenException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidParameterException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidS3ObjectException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type JobId = string;

type JobTag = string;

type KinesisDataArn = string;

class KinesisDataStream {
  public ?KinesisDataArn $arn;

  public function __construct(shape(
    ?'arn' => ?KinesisDataArn,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
  }
}

type KinesisVideoArn = string;

class KinesisVideoStream {
  public ?KinesisVideoArn $arn;

  public function __construct(shape(
    ?'arn' => ?KinesisVideoArn,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
  }
}

class Label {
  public ?Percent $confidence;
  public ?Instances $instances;
  public string $name;
  public ?Parents $parents;

  public function __construct(shape(
    ?'confidence' => ?Percent,
    ?'instances' => ?Instances,
    ?'name' => string,
    ?'parents' => ?Parents,
  ) $s = shape()) {
    $this->confidence = $s['confidence'] ?? 0.0;
    $this->instances = $s['instances'] ?? vec[];
    $this->name = $s['name'] ?? '';
    $this->parents = $s['parents'] ?? vec[];
  }
}

class LabelDetection {
  public ?Label $label;
  public ?Timestamp $timestamp;

  public function __construct(shape(
    ?'label' => ?Label,
    ?'timestamp' => ?Timestamp,
  ) $s = shape()) {
    $this->label = $s['label'] ?? null;
    $this->timestamp = $s['timestamp'] ?? 0;
  }
}

type LabelDetectionSortBy = string;

type LabelDetections = vec<LabelDetection>;

type Labels = vec<Label>;

class Landmark {
  public ?LandmarkType $type;
  public ?Float $x;
  public ?Float $y;

  public function __construct(shape(
    ?'type' => ?LandmarkType,
    ?'x' => ?Float,
    ?'y' => ?Float,
  ) $s = shape()) {
    $this->type = $s['type'] ?? '';
    $this->x = $s['x'] ?? 0.0;
    $this->y = $s['y'] ?? 0.0;
  }
}

type LandmarkType = string;

type Landmarks = vec<Landmark>;

class LimitExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ListCollectionsRequest {
  public ?PageSize $max_results;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?PageSize,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListCollectionsResponse {
  public ?CollectionIdList $collection_ids;
  public ?FaceModelVersionList $face_model_versions;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'collection_ids' => ?CollectionIdList,
    ?'face_model_versions' => ?FaceModelVersionList,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->collection_ids = $s['collection_ids'] ?? vec[];
    $this->face_model_versions = $s['face_model_versions'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListFacesRequest {
  public ?CollectionId $collection_id;
  public ?PageSize $max_results;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'collection_id' => ?CollectionId,
    ?'max_results' => ?PageSize,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->collection_id = $s['collection_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListFacesResponse {
  public string $face_model_version;
  public ?FaceList $faces;
  public string $next_token;

  public function __construct(shape(
    ?'face_model_version' => string,
    ?'faces' => ?FaceList,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->face_model_version = $s['face_model_version'] ?? '';
    $this->faces = $s['faces'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListStreamProcessorsRequest {
  public ?MaxResults $max_results;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListStreamProcessorsResponse {
  public ?PaginationToken $next_token;
  public ?StreamProcessorList $stream_processors;

  public function __construct(shape(
    ?'next_token' => ?PaginationToken,
    ?'stream_processors' => ?StreamProcessorList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->stream_processors = $s['stream_processors'] ?? vec[];
  }
}

type MaxFaces = int;

type MaxFacesToIndex = int;

type MaxResults = int;

class ModerationLabel {
  public ?Percent $confidence;
  public string $name;
  public string $parent_name;

  public function __construct(shape(
    ?'confidence' => ?Percent,
    ?'name' => string,
    ?'parent_name' => string,
  ) $s = shape()) {
    $this->confidence = $s['confidence'] ?? 0.0;
    $this->name = $s['name'] ?? '';
    $this->parent_name = $s['parent_name'] ?? '';
  }
}

type ModerationLabels = vec<ModerationLabel>;

class MouthOpen {
  public ?Percent $confidence;
  public bool $value;

  public function __construct(shape(
    ?'confidence' => ?Percent,
    ?'value' => bool,
  ) $s = shape()) {
    $this->confidence = $s['confidence'] ?? 0.0;
    $this->value = $s['value'] ?? false;
  }
}

class Mustache {
  public ?Percent $confidence;
  public bool $value;

  public function __construct(shape(
    ?'confidence' => ?Percent,
    ?'value' => bool,
  ) $s = shape()) {
    $this->confidence = $s['confidence'] ?? 0.0;
    $this->value = $s['value'] ?? false;
  }
}

class NotificationChannel {
  public ?RoleArn $role_arn;
  public ?SNSTopicArn $sns_topic_arn;

  public function __construct(shape(
    ?'role_arn' => ?RoleArn,
    ?'sns_topic_arn' => ?SNSTopicArn,
  ) $s = shape()) {
    $this->role_arn = $s['role_arn'] ?? '';
    $this->sns_topic_arn = $s['sns_topic_arn'] ?? '';
  }
}

type OrientationCorrection = string;

class OutputConfig {
  public ?S3Bucket $s_3_bucket;
  public ?S3KeyPrefix $s_3_key_prefix;

  public function __construct(shape(
    ?'s_3_bucket' => ?S3Bucket,
    ?'s_3_key_prefix' => ?S3KeyPrefix,
  ) $s = shape()) {
    $this->s_3_bucket = $s['s_3_bucket'] ?? '';
    $this->s_3_key_prefix = $s['s_3_key_prefix'] ?? '';
  }
}

type PageSize = int;

type PaginationToken = string;

class Parent {
  public string $name;

  public function __construct(shape(
    ?'name' => string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

type Parents = vec<Parent>;

type Percent = float;

class PersonDetail {
  public ?BoundingBox $bounding_box;
  public ?FaceDetail $face;
  public ?PersonIndex $index;

  public function __construct(shape(
    ?'bounding_box' => ?BoundingBox,
    ?'face' => ?FaceDetail,
    ?'index' => ?PersonIndex,
  ) $s = shape()) {
    $this->bounding_box = $s['bounding_box'] ?? null;
    $this->face = $s['face'] ?? null;
    $this->index = $s['index'] ?? 0;
  }
}

class PersonDetection {
  public ?PersonDetail $person;
  public ?Timestamp $timestamp;

  public function __construct(shape(
    ?'person' => ?PersonDetail,
    ?'timestamp' => ?Timestamp,
  ) $s = shape()) {
    $this->person = $s['person'] ?? null;
    $this->timestamp = $s['timestamp'] ?? 0;
  }
}

type PersonDetections = vec<PersonDetection>;

type PersonIndex = int;

class PersonMatch {
  public ?FaceMatchList $face_matches;
  public ?PersonDetail $person;
  public ?Timestamp $timestamp;

  public function __construct(shape(
    ?'face_matches' => ?FaceMatchList,
    ?'person' => ?PersonDetail,
    ?'timestamp' => ?Timestamp,
  ) $s = shape()) {
    $this->face_matches = $s['face_matches'] ?? vec[];
    $this->person = $s['person'] ?? null;
    $this->timestamp = $s['timestamp'] ?? 0;
  }
}

type PersonMatches = vec<PersonMatch>;

type PersonTrackingSortBy = string;

class Point {
  public ?Float $x;
  public ?Float $y;

  public function __construct(shape(
    ?'x' => ?Float,
    ?'y' => ?Float,
  ) $s = shape()) {
    $this->x = $s['x'] ?? 0.0;
    $this->y = $s['y'] ?? 0.0;
  }
}

type Polygon = vec<Point>;

class Pose {
  public ?Degree $pitch;
  public ?Degree $roll;
  public ?Degree $yaw;

  public function __construct(shape(
    ?'pitch' => ?Degree,
    ?'roll' => ?Degree,
    ?'yaw' => ?Degree,
  ) $s = shape()) {
    $this->pitch = $s['pitch'] ?? 0.0;
    $this->roll = $s['roll'] ?? 0.0;
    $this->yaw = $s['yaw'] ?? 0.0;
  }
}

type ProjectArn = string;

class ProjectDescription {
  public ?DateTime $creation_timestamp;
  public ?ProjectArn $project_arn;
  public ?ProjectStatus $status;

  public function __construct(shape(
    ?'creation_timestamp' => ?DateTime,
    ?'project_arn' => ?ProjectArn,
    ?'status' => ?ProjectStatus,
  ) $s = shape()) {
    $this->creation_timestamp = $s['creation_timestamp'] ?? 0;
    $this->project_arn = $s['project_arn'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type ProjectDescriptions = vec<ProjectDescription>;

type ProjectName = string;

type ProjectStatus = string;

type ProjectVersionArn = string;

class ProjectVersionDescription {
  public ?ULong $billable_training_time_in_seconds;
  public ?DateTime $creation_timestamp;
  public ?EvaluationResult $evaluation_result;
  public ?InferenceUnits $min_inference_units;
  public ?OutputConfig $output_config;
  public ?ProjectVersionArn $project_version_arn;
  public ?ProjectVersionStatus $status;
  public ?StatusMessage $status_message;
  public ?TestingDataResult $testing_data_result;
  public ?TrainingDataResult $training_data_result;
  public ?DateTime $training_end_timestamp;

  public function __construct(shape(
    ?'billable_training_time_in_seconds' => ?ULong,
    ?'creation_timestamp' => ?DateTime,
    ?'evaluation_result' => ?EvaluationResult,
    ?'min_inference_units' => ?InferenceUnits,
    ?'output_config' => ?OutputConfig,
    ?'project_version_arn' => ?ProjectVersionArn,
    ?'status' => ?ProjectVersionStatus,
    ?'status_message' => ?StatusMessage,
    ?'testing_data_result' => ?TestingDataResult,
    ?'training_data_result' => ?TrainingDataResult,
    ?'training_end_timestamp' => ?DateTime,
  ) $s = shape()) {
    $this->billable_training_time_in_seconds = $s['billable_training_time_in_seconds'] ?? 0;
    $this->creation_timestamp = $s['creation_timestamp'] ?? 0;
    $this->evaluation_result = $s['evaluation_result'] ?? null;
    $this->min_inference_units = $s['min_inference_units'] ?? 0;
    $this->output_config = $s['output_config'] ?? null;
    $this->project_version_arn = $s['project_version_arn'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
    $this->testing_data_result = $s['testing_data_result'] ?? null;
    $this->training_data_result = $s['training_data_result'] ?? null;
    $this->training_end_timestamp = $s['training_end_timestamp'] ?? 0;
  }
}

type ProjectVersionDescriptions = vec<ProjectVersionDescription>;

type ProjectVersionStatus = string;

type ProjectVersionsPageSize = int;

type ProjectsPageSize = int;

class ProvisionedThroughputExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type QualityFilter = string;

type Reason = string;

type Reasons = vec<Reason>;

class RecognizeCelebritiesRequest {
  public ?Image $image;

  public function __construct(shape(
    ?'image' => ?Image,
  ) $s = shape()) {
    $this->image = $s['image'] ?? null;
  }
}

class RecognizeCelebritiesResponse {
  public ?CelebrityList $celebrity_faces;
  public ?OrientationCorrection $orientation_correction;
  public ?ComparedFaceList $unrecognized_faces;

  public function __construct(shape(
    ?'celebrity_faces' => ?CelebrityList,
    ?'orientation_correction' => ?OrientationCorrection,
    ?'unrecognized_faces' => ?ComparedFaceList,
  ) $s = shape()) {
    $this->celebrity_faces = $s['celebrity_faces'] ?? vec[];
    $this->orientation_correction = $s['orientation_correction'] ?? '';
    $this->unrecognized_faces = $s['unrecognized_faces'] ?? vec[];
  }
}

class RegionOfInterest {
  public ?BoundingBox $bounding_box;

  public function __construct(shape(
    ?'bounding_box' => ?BoundingBox,
  ) $s = shape()) {
    $this->bounding_box = $s['bounding_box'] ?? null;
  }
}

type RegionsOfInterest = vec<RegionOfInterest>;

type RekognitionUniqueId = string;

class ResourceAlreadyExistsException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ResourceInUseException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ResourceNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ResourceNotReadyException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type RoleArn = string;

type S3Bucket = string;

type S3KeyPrefix = string;

class S3Object {
  public ?S3Bucket $bucket;
  public ?S3ObjectName $name;
  public ?S3ObjectVersion $version;

  public function __construct(shape(
    ?'bucket' => ?S3Bucket,
    ?'name' => ?S3ObjectName,
    ?'version' => ?S3ObjectVersion,
  ) $s = shape()) {
    $this->bucket = $s['bucket'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

type S3ObjectName = string;

type S3ObjectVersion = string;

type SNSTopicArn = string;

class SearchFacesByImageRequest {
  public ?CollectionId $collection_id;
  public ?Percent $face_match_threshold;
  public ?Image $image;
  public ?MaxFaces $max_faces;
  public ?QualityFilter $quality_filter;

  public function __construct(shape(
    ?'collection_id' => ?CollectionId,
    ?'face_match_threshold' => ?Percent,
    ?'image' => ?Image,
    ?'max_faces' => ?MaxFaces,
    ?'quality_filter' => ?QualityFilter,
  ) $s = shape()) {
    $this->collection_id = $s['collection_id'] ?? '';
    $this->face_match_threshold = $s['face_match_threshold'] ?? 0.0;
    $this->image = $s['image'] ?? null;
    $this->max_faces = $s['max_faces'] ?? 0;
    $this->quality_filter = $s['quality_filter'] ?? '';
  }
}

class SearchFacesByImageResponse {
  public ?FaceMatchList $face_matches;
  public string $face_model_version;
  public ?BoundingBox $searched_face_bounding_box;
  public ?Percent $searched_face_confidence;

  public function __construct(shape(
    ?'face_matches' => ?FaceMatchList,
    ?'face_model_version' => string,
    ?'searched_face_bounding_box' => ?BoundingBox,
    ?'searched_face_confidence' => ?Percent,
  ) $s = shape()) {
    $this->face_matches = $s['face_matches'] ?? vec[];
    $this->face_model_version = $s['face_model_version'] ?? '';
    $this->searched_face_bounding_box = $s['searched_face_bounding_box'] ?? null;
    $this->searched_face_confidence = $s['searched_face_confidence'] ?? 0.0;
  }
}

class SearchFacesRequest {
  public ?CollectionId $collection_id;
  public ?FaceId $face_id;
  public ?Percent $face_match_threshold;
  public ?MaxFaces $max_faces;

  public function __construct(shape(
    ?'collection_id' => ?CollectionId,
    ?'face_id' => ?FaceId,
    ?'face_match_threshold' => ?Percent,
    ?'max_faces' => ?MaxFaces,
  ) $s = shape()) {
    $this->collection_id = $s['collection_id'] ?? '';
    $this->face_id = $s['face_id'] ?? '';
    $this->face_match_threshold = $s['face_match_threshold'] ?? 0.0;
    $this->max_faces = $s['max_faces'] ?? 0;
  }
}

class SearchFacesResponse {
  public ?FaceMatchList $face_matches;
  public string $face_model_version;
  public ?FaceId $searched_face_id;

  public function __construct(shape(
    ?'face_matches' => ?FaceMatchList,
    ?'face_model_version' => string,
    ?'searched_face_id' => ?FaceId,
  ) $s = shape()) {
    $this->face_matches = $s['face_matches'] ?? vec[];
    $this->face_model_version = $s['face_model_version'] ?? '';
    $this->searched_face_id = $s['searched_face_id'] ?? '';
  }
}

class Smile {
  public ?Percent $confidence;
  public bool $value;

  public function __construct(shape(
    ?'confidence' => ?Percent,
    ?'value' => bool,
  ) $s = shape()) {
    $this->confidence = $s['confidence'] ?? 0.0;
    $this->value = $s['value'] ?? false;
  }
}

class StartCelebrityRecognitionRequest {
  public ?ClientRequestToken $client_request_token;
  public ?JobTag $job_tag;
  public ?NotificationChannel $notification_channel;
  public ?Video $video;

  public function __construct(shape(
    ?'client_request_token' => ?ClientRequestToken,
    ?'job_tag' => ?JobTag,
    ?'notification_channel' => ?NotificationChannel,
    ?'video' => ?Video,
  ) $s = shape()) {
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->job_tag = $s['job_tag'] ?? '';
    $this->notification_channel = $s['notification_channel'] ?? null;
    $this->video = $s['video'] ?? null;
  }
}

class StartCelebrityRecognitionResponse {
  public ?JobId $job_id;

  public function __construct(shape(
    ?'job_id' => ?JobId,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
  }
}

class StartContentModerationRequest {
  public ?ClientRequestToken $client_request_token;
  public ?JobTag $job_tag;
  public ?Percent $min_confidence;
  public ?NotificationChannel $notification_channel;
  public ?Video $video;

  public function __construct(shape(
    ?'client_request_token' => ?ClientRequestToken,
    ?'job_tag' => ?JobTag,
    ?'min_confidence' => ?Percent,
    ?'notification_channel' => ?NotificationChannel,
    ?'video' => ?Video,
  ) $s = shape()) {
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->job_tag = $s['job_tag'] ?? '';
    $this->min_confidence = $s['min_confidence'] ?? 0.0;
    $this->notification_channel = $s['notification_channel'] ?? null;
    $this->video = $s['video'] ?? null;
  }
}

class StartContentModerationResponse {
  public ?JobId $job_id;

  public function __construct(shape(
    ?'job_id' => ?JobId,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
  }
}

class StartFaceDetectionRequest {
  public ?ClientRequestToken $client_request_token;
  public ?FaceAttributes $face_attributes;
  public ?JobTag $job_tag;
  public ?NotificationChannel $notification_channel;
  public ?Video $video;

  public function __construct(shape(
    ?'client_request_token' => ?ClientRequestToken,
    ?'face_attributes' => ?FaceAttributes,
    ?'job_tag' => ?JobTag,
    ?'notification_channel' => ?NotificationChannel,
    ?'video' => ?Video,
  ) $s = shape()) {
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->face_attributes = $s['face_attributes'] ?? '';
    $this->job_tag = $s['job_tag'] ?? '';
    $this->notification_channel = $s['notification_channel'] ?? null;
    $this->video = $s['video'] ?? null;
  }
}

class StartFaceDetectionResponse {
  public ?JobId $job_id;

  public function __construct(shape(
    ?'job_id' => ?JobId,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
  }
}

class StartFaceSearchRequest {
  public ?ClientRequestToken $client_request_token;
  public ?CollectionId $collection_id;
  public ?Percent $face_match_threshold;
  public ?JobTag $job_tag;
  public ?NotificationChannel $notification_channel;
  public ?Video $video;

  public function __construct(shape(
    ?'client_request_token' => ?ClientRequestToken,
    ?'collection_id' => ?CollectionId,
    ?'face_match_threshold' => ?Percent,
    ?'job_tag' => ?JobTag,
    ?'notification_channel' => ?NotificationChannel,
    ?'video' => ?Video,
  ) $s = shape()) {
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->collection_id = $s['collection_id'] ?? '';
    $this->face_match_threshold = $s['face_match_threshold'] ?? 0.0;
    $this->job_tag = $s['job_tag'] ?? '';
    $this->notification_channel = $s['notification_channel'] ?? null;
    $this->video = $s['video'] ?? null;
  }
}

class StartFaceSearchResponse {
  public ?JobId $job_id;

  public function __construct(shape(
    ?'job_id' => ?JobId,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
  }
}

class StartLabelDetectionRequest {
  public ?ClientRequestToken $client_request_token;
  public ?JobTag $job_tag;
  public ?Percent $min_confidence;
  public ?NotificationChannel $notification_channel;
  public ?Video $video;

  public function __construct(shape(
    ?'client_request_token' => ?ClientRequestToken,
    ?'job_tag' => ?JobTag,
    ?'min_confidence' => ?Percent,
    ?'notification_channel' => ?NotificationChannel,
    ?'video' => ?Video,
  ) $s = shape()) {
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->job_tag = $s['job_tag'] ?? '';
    $this->min_confidence = $s['min_confidence'] ?? 0.0;
    $this->notification_channel = $s['notification_channel'] ?? null;
    $this->video = $s['video'] ?? null;
  }
}

class StartLabelDetectionResponse {
  public ?JobId $job_id;

  public function __construct(shape(
    ?'job_id' => ?JobId,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
  }
}

class StartPersonTrackingRequest {
  public ?ClientRequestToken $client_request_token;
  public ?JobTag $job_tag;
  public ?NotificationChannel $notification_channel;
  public ?Video $video;

  public function __construct(shape(
    ?'client_request_token' => ?ClientRequestToken,
    ?'job_tag' => ?JobTag,
    ?'notification_channel' => ?NotificationChannel,
    ?'video' => ?Video,
  ) $s = shape()) {
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->job_tag = $s['job_tag'] ?? '';
    $this->notification_channel = $s['notification_channel'] ?? null;
    $this->video = $s['video'] ?? null;
  }
}

class StartPersonTrackingResponse {
  public ?JobId $job_id;

  public function __construct(shape(
    ?'job_id' => ?JobId,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
  }
}

class StartProjectVersionRequest {
  public ?InferenceUnits $min_inference_units;
  public ?ProjectVersionArn $project_version_arn;

  public function __construct(shape(
    ?'min_inference_units' => ?InferenceUnits,
    ?'project_version_arn' => ?ProjectVersionArn,
  ) $s = shape()) {
    $this->min_inference_units = $s['min_inference_units'] ?? 0;
    $this->project_version_arn = $s['project_version_arn'] ?? '';
  }
}

class StartProjectVersionResponse {
  public ?ProjectVersionStatus $status;

  public function __construct(shape(
    ?'status' => ?ProjectVersionStatus,
  ) $s = shape()) {
    $this->status = $s['status'] ?? '';
  }
}

class StartStreamProcessorRequest {
  public ?StreamProcessorName $name;

  public function __construct(shape(
    ?'name' => ?StreamProcessorName,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

class StartStreamProcessorResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class StartTextDetectionFilters {
  public ?RegionsOfInterest $regions_of_interest;
  public ?DetectionFilter $word_filter;

  public function __construct(shape(
    ?'regions_of_interest' => ?RegionsOfInterest,
    ?'word_filter' => ?DetectionFilter,
  ) $s = shape()) {
    $this->regions_of_interest = $s['regions_of_interest'] ?? vec[];
    $this->word_filter = $s['word_filter'] ?? null;
  }
}

class StartTextDetectionRequest {
  public ?ClientRequestToken $client_request_token;
  public ?StartTextDetectionFilters $filters;
  public ?JobTag $job_tag;
  public ?NotificationChannel $notification_channel;
  public ?Video $video;

  public function __construct(shape(
    ?'client_request_token' => ?ClientRequestToken,
    ?'filters' => ?StartTextDetectionFilters,
    ?'job_tag' => ?JobTag,
    ?'notification_channel' => ?NotificationChannel,
    ?'video' => ?Video,
  ) $s = shape()) {
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->filters = $s['filters'] ?? null;
    $this->job_tag = $s['job_tag'] ?? '';
    $this->notification_channel = $s['notification_channel'] ?? null;
    $this->video = $s['video'] ?? null;
  }
}

class StartTextDetectionResponse {
  public ?JobId $job_id;

  public function __construct(shape(
    ?'job_id' => ?JobId,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
  }
}

type StatusMessage = string;

class StopProjectVersionRequest {
  public ?ProjectVersionArn $project_version_arn;

  public function __construct(shape(
    ?'project_version_arn' => ?ProjectVersionArn,
  ) $s = shape()) {
    $this->project_version_arn = $s['project_version_arn'] ?? '';
  }
}

class StopProjectVersionResponse {
  public ?ProjectVersionStatus $status;

  public function __construct(shape(
    ?'status' => ?ProjectVersionStatus,
  ) $s = shape()) {
    $this->status = $s['status'] ?? '';
  }
}

class StopStreamProcessorRequest {
  public ?StreamProcessorName $name;

  public function __construct(shape(
    ?'name' => ?StreamProcessorName,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

class StopStreamProcessorResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class StreamProcessor {
  public ?StreamProcessorName $name;
  public ?StreamProcessorStatus $status;

  public function __construct(shape(
    ?'name' => ?StreamProcessorName,
    ?'status' => ?StreamProcessorStatus,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type StreamProcessorArn = string;

class StreamProcessorInput {
  public ?KinesisVideoStream $kinesis_video_stream;

  public function __construct(shape(
    ?'kinesis_video_stream' => ?KinesisVideoStream,
  ) $s = shape()) {
    $this->kinesis_video_stream = $s['kinesis_video_stream'] ?? null;
  }
}

type StreamProcessorList = vec<StreamProcessor>;

type StreamProcessorName = string;

class StreamProcessorOutput {
  public ?KinesisDataStream $kinesis_data_stream;

  public function __construct(shape(
    ?'kinesis_data_stream' => ?KinesisDataStream,
  ) $s = shape()) {
    $this->kinesis_data_stream = $s['kinesis_data_stream'] ?? null;
  }
}

class StreamProcessorSettings {
  public ?FaceSearchSettings $face_search;

  public function __construct(shape(
    ?'face_search' => ?FaceSearchSettings,
  ) $s = shape()) {
    $this->face_search = $s['face_search'] ?? null;
  }
}

type StreamProcessorStatus = string;

type String = string;

class Summary {
  public ?S3Object $s_3_object;

  public function __construct(shape(
    ?'s_3_object' => ?S3Object,
  ) $s = shape()) {
    $this->s_3_object = $s['s_3_object'] ?? null;
  }
}

class Sunglasses {
  public ?Percent $confidence;
  public bool $value;

  public function __construct(shape(
    ?'confidence' => ?Percent,
    ?'value' => bool,
  ) $s = shape()) {
    $this->confidence = $s['confidence'] ?? 0.0;
    $this->value = $s['value'] ?? false;
  }
}

class TestingData {
  public ?Assets $assets;
  public bool $auto_create;

  public function __construct(shape(
    ?'assets' => ?Assets,
    ?'auto_create' => bool,
  ) $s = shape()) {
    $this->assets = $s['assets'] ?? vec[];
    $this->auto_create = $s['auto_create'] ?? false;
  }
}

class TestingDataResult {
  public ?TestingData $input;
  public ?TestingData $output;

  public function __construct(shape(
    ?'input' => ?TestingData,
    ?'output' => ?TestingData,
  ) $s = shape()) {
    $this->input = $s['input'] ?? null;
    $this->output = $s['output'] ?? null;
  }
}

class TextDetection {
  public ?Percent $confidence;
  public string $detected_text;
  public ?Geometry $geometry;
  public ?UInteger $id;
  public ?UInteger $parent_id;
  public ?TextTypes $type;

  public function __construct(shape(
    ?'confidence' => ?Percent,
    ?'detected_text' => string,
    ?'geometry' => ?Geometry,
    ?'id' => ?UInteger,
    ?'parent_id' => ?UInteger,
    ?'type' => ?TextTypes,
  ) $s = shape()) {
    $this->confidence = $s['confidence'] ?? 0.0;
    $this->detected_text = $s['detected_text'] ?? '';
    $this->geometry = $s['geometry'] ?? null;
    $this->id = $s['id'] ?? 0;
    $this->parent_id = $s['parent_id'] ?? 0;
    $this->type = $s['type'] ?? '';
  }
}

type TextDetectionList = vec<TextDetection>;

class TextDetectionResult {
  public ?TextDetection $text_detection;
  public ?Timestamp $timestamp;

  public function __construct(shape(
    ?'text_detection' => ?TextDetection,
    ?'timestamp' => ?Timestamp,
  ) $s = shape()) {
    $this->text_detection = $s['text_detection'] ?? null;
    $this->timestamp = $s['timestamp'] ?? 0;
  }
}

type TextDetectionResults = vec<TextDetectionResult>;

type TextTypes = string;

class ThrottlingException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Timestamp = int;

class TrainingData {
  public ?Assets $assets;

  public function __construct(shape(
    ?'assets' => ?Assets,
  ) $s = shape()) {
    $this->assets = $s['assets'] ?? vec[];
  }
}

class TrainingDataResult {
  public ?TrainingData $input;
  public ?TrainingData $output;

  public function __construct(shape(
    ?'input' => ?TrainingData,
    ?'output' => ?TrainingData,
  ) $s = shape()) {
    $this->input = $s['input'] ?? null;
    $this->output = $s['output'] ?? null;
  }
}

type UInteger = int;

type ULong = int;

class UnindexedFace {
  public ?FaceDetail $face_detail;
  public ?Reasons $reasons;

  public function __construct(shape(
    ?'face_detail' => ?FaceDetail,
    ?'reasons' => ?Reasons,
  ) $s = shape()) {
    $this->face_detail = $s['face_detail'] ?? null;
    $this->reasons = $s['reasons'] ?? vec[];
  }
}

type UnindexedFaces = vec<UnindexedFace>;

type Url = string;

type Urls = vec<Url>;

type VersionName = string;

type VersionNames = vec<VersionName>;

class Video {
  public ?S3Object $s_3_object;

  public function __construct(shape(
    ?'s_3_object' => ?S3Object,
  ) $s = shape()) {
    $this->s_3_object = $s['s_3_object'] ?? null;
  }
}

type VideoJobStatus = string;

class VideoMetadata {
  public string $codec;
  public ?ULong $duration_millis;
  public string $format;
  public ?ULong $frame_height;
  public ?Float $frame_rate;
  public ?ULong $frame_width;

  public function __construct(shape(
    ?'codec' => string,
    ?'duration_millis' => ?ULong,
    ?'format' => string,
    ?'frame_height' => ?ULong,
    ?'frame_rate' => ?Float,
    ?'frame_width' => ?ULong,
  ) $s = shape()) {
    $this->codec = $s['codec'] ?? '';
    $this->duration_millis = $s['duration_millis'] ?? 0;
    $this->format = $s['format'] ?? '';
    $this->frame_height = $s['frame_height'] ?? 0;
    $this->frame_rate = $s['frame_rate'] ?? 0.0;
    $this->frame_width = $s['frame_width'] ?? 0;
  }
}

class VideoTooLargeException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

