<?hh // strict
namespace slack\aws\rekognition;

interface Rekognition {
  public function CompareFaces(CompareFacesRequest): Awaitable<Errors\Result<CompareFacesResponse>>;
  public function CreateCollection(CreateCollectionRequest): Awaitable<Errors\Result<CreateCollectionResponse>>;
  public function CreateProject(CreateProjectRequest): Awaitable<Errors\Result<CreateProjectResponse>>;
  public function CreateProjectVersion(CreateProjectVersionRequest): Awaitable<Errors\Result<CreateProjectVersionResponse>>;
  public function CreateStreamProcessor(CreateStreamProcessorRequest): Awaitable<Errors\Result<CreateStreamProcessorResponse>>;
  public function DeleteCollection(DeleteCollectionRequest): Awaitable<Errors\Result<DeleteCollectionResponse>>;
  public function DeleteFaces(DeleteFacesRequest): Awaitable<Errors\Result<DeleteFacesResponse>>;
  public function DeleteProject(DeleteProjectRequest): Awaitable<Errors\Result<DeleteProjectResponse>>;
  public function DeleteProjectVersion(DeleteProjectVersionRequest): Awaitable<Errors\Result<DeleteProjectVersionResponse>>;
  public function DeleteStreamProcessor(DeleteStreamProcessorRequest): Awaitable<Errors\Result<DeleteStreamProcessorResponse>>;
  public function DescribeCollection(DescribeCollectionRequest): Awaitable<Errors\Result<DescribeCollectionResponse>>;
  public function DescribeProjectVersions(DescribeProjectVersionsRequest): Awaitable<Errors\Result<DescribeProjectVersionsResponse>>;
  public function DescribeProjects(DescribeProjectsRequest): Awaitable<Errors\Result<DescribeProjectsResponse>>;
  public function DescribeStreamProcessor(DescribeStreamProcessorRequest): Awaitable<Errors\Result<DescribeStreamProcessorResponse>>;
  public function DetectCustomLabels(DetectCustomLabelsRequest): Awaitable<Errors\Result<DetectCustomLabelsResponse>>;
  public function DetectFaces(DetectFacesRequest): Awaitable<Errors\Result<DetectFacesResponse>>;
  public function DetectLabels(DetectLabelsRequest): Awaitable<Errors\Result<DetectLabelsResponse>>;
  public function DetectModerationLabels(DetectModerationLabelsRequest): Awaitable<Errors\Result<DetectModerationLabelsResponse>>;
  public function DetectText(DetectTextRequest): Awaitable<Errors\Result<DetectTextResponse>>;
  public function GetCelebrityInfo(GetCelebrityInfoRequest): Awaitable<Errors\Result<GetCelebrityInfoResponse>>;
  public function GetCelebrityRecognition(GetCelebrityRecognitionRequest): Awaitable<Errors\Result<GetCelebrityRecognitionResponse>>;
  public function GetContentModeration(GetContentModerationRequest): Awaitable<Errors\Result<GetContentModerationResponse>>;
  public function GetFaceDetection(GetFaceDetectionRequest): Awaitable<Errors\Result<GetFaceDetectionResponse>>;
  public function GetFaceSearch(GetFaceSearchRequest): Awaitable<Errors\Result<GetFaceSearchResponse>>;
  public function GetLabelDetection(GetLabelDetectionRequest): Awaitable<Errors\Result<GetLabelDetectionResponse>>;
  public function GetPersonTracking(GetPersonTrackingRequest): Awaitable<Errors\Result<GetPersonTrackingResponse>>;
  public function GetTextDetection(GetTextDetectionRequest): Awaitable<Errors\Result<GetTextDetectionResponse>>;
  public function IndexFaces(IndexFacesRequest): Awaitable<Errors\Result<IndexFacesResponse>>;
  public function ListCollections(ListCollectionsRequest): Awaitable<Errors\Result<ListCollectionsResponse>>;
  public function ListFaces(ListFacesRequest): Awaitable<Errors\Result<ListFacesResponse>>;
  public function ListStreamProcessors(ListStreamProcessorsRequest): Awaitable<Errors\Result<ListStreamProcessorsResponse>>;
  public function RecognizeCelebrities(RecognizeCelebritiesRequest): Awaitable<Errors\Result<RecognizeCelebritiesResponse>>;
  public function SearchFaces(SearchFacesRequest): Awaitable<Errors\Result<SearchFacesResponse>>;
  public function SearchFacesByImage(SearchFacesByImageRequest): Awaitable<Errors\Result<SearchFacesByImageResponse>>;
  public function StartCelebrityRecognition(StartCelebrityRecognitionRequest): Awaitable<Errors\Result<StartCelebrityRecognitionResponse>>;
  public function StartContentModeration(StartContentModerationRequest): Awaitable<Errors\Result<StartContentModerationResponse>>;
  public function StartFaceDetection(StartFaceDetectionRequest): Awaitable<Errors\Result<StartFaceDetectionResponse>>;
  public function StartFaceSearch(StartFaceSearchRequest): Awaitable<Errors\Result<StartFaceSearchResponse>>;
  public function StartLabelDetection(StartLabelDetectionRequest): Awaitable<Errors\Result<StartLabelDetectionResponse>>;
  public function StartPersonTracking(StartPersonTrackingRequest): Awaitable<Errors\Result<StartPersonTrackingResponse>>;
  public function StartProjectVersion(StartProjectVersionRequest): Awaitable<Errors\Result<StartProjectVersionResponse>>;
  public function StartStreamProcessor(StartStreamProcessorRequest): Awaitable<Errors\Result<StartStreamProcessorResponse>>;
  public function StartTextDetection(StartTextDetectionRequest): Awaitable<Errors\Result<StartTextDetectionResponse>>;
  public function StopProjectVersion(StopProjectVersionRequest): Awaitable<Errors\Result<StopProjectVersionResponse>>;
  public function StopStreamProcessor(StopStreamProcessorRequest): Awaitable<Errors\Result<StopStreamProcessorResponse>>;
}

class AccessDeniedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AgeRange {
  public UInteger $high;
  public UInteger $low;

  public function __construct(shape(
  ?'high' => UInteger,
  ?'low' => UInteger,
  ) $s = shape()) {
    $this->high = $high ?? ;
    $this->low = $low ?? ;
  }
}

class Asset {
  public GroundTruthManifest $ground_truth_manifest;

  public function __construct(shape(
  ?'ground_truth_manifest' => GroundTruthManifest,
  ) $s = shape()) {
    $this->ground_truth_manifest = $ground_truth_manifest ?? null;
  }
}

type Assets = vec<Asset>;

type Attribute = string;

type Attributes = vec<Attribute>;

class Beard {
  public Percent $confidence;
  public boolean $value;

  public function __construct(shape(
  ?'confidence' => Percent,
  ?'value' => boolean,
  ) $s = shape()) {
    $this->confidence = $confidence ?? ;
    $this->value = $value ?? ;
  }
}

type Boolean = bool;

class BoundingBox {
  public Float $height;
  public Float $left;
  public Float $top;
  public Float $width;

  public function __construct(shape(
  ?'height' => Float,
  ?'left' => Float,
  ?'top' => Float,
  ?'width' => Float,
  ) $s = shape()) {
    $this->height = $height ?? ;
    $this->left = $left ?? ;
    $this->top = $top ?? ;
    $this->width = $width ?? ;
  }
}

type BoundingBoxHeight = float;

type BoundingBoxWidth = float;

class Celebrity {
  public ComparedFace $face;
  public RekognitionUniqueId $id;
  public Percent $match_confidence;
  public string $name;
  public Urls $urls;

  public function __construct(shape(
  ?'face' => ComparedFace,
  ?'id' => RekognitionUniqueId,
  ?'match_confidence' => Percent,
  ?'name' => string,
  ?'urls' => Urls,
  ) $s = shape()) {
    $this->face = $face ?? null;
    $this->id = $id ?? ;
    $this->match_confidence = $match_confidence ?? ;
    $this->name = $name ?? ;
    $this->urls = $urls ?? [];
  }
}

class CelebrityDetail {
  public BoundingBox $bounding_box;
  public Percent $confidence;
  public FaceDetail $face;
  public RekognitionUniqueId $id;
  public string $name;
  public Urls $urls;

  public function __construct(shape(
  ?'bounding_box' => BoundingBox,
  ?'confidence' => Percent,
  ?'face' => FaceDetail,
  ?'id' => RekognitionUniqueId,
  ?'name' => string,
  ?'urls' => Urls,
  ) $s = shape()) {
    $this->bounding_box = $bounding_box ?? null;
    $this->confidence = $confidence ?? ;
    $this->face = $face ?? null;
    $this->id = $id ?? ;
    $this->name = $name ?? ;
    $this->urls = $urls ?? [];
  }
}

type CelebrityList = vec<Celebrity>;

class CelebrityRecognition {
  public CelebrityDetail $celebrity;
  public Timestamp $timestamp;

  public function __construct(shape(
  ?'celebrity' => CelebrityDetail,
  ?'timestamp' => Timestamp,
  ) $s = shape()) {
    $this->celebrity = $celebrity ?? null;
    $this->timestamp = $timestamp ?? 0;
  }
}

type CelebrityRecognitionSortBy = string;

type CelebrityRecognitions = vec<CelebrityRecognition>;

type ClientRequestToken = string;

type CollectionId = string;

type CollectionIdList = vec<CollectionId>;

class CompareFacesMatch {
  public ComparedFace $face;
  public Percent $similarity;

  public function __construct(shape(
  ?'face' => ComparedFace,
  ?'similarity' => Percent,
  ) $s = shape()) {
    $this->face = $face ?? null;
    $this->similarity = $similarity ?? ;
  }
}

type CompareFacesMatchList = vec<CompareFacesMatch>;

class CompareFacesRequest {
  public QualityFilter $quality_filter;
  public Percent $similarity_threshold;
  public Image $source_image;
  public Image $target_image;

  public function __construct(shape(
  ?'quality_filter' => QualityFilter,
  ?'similarity_threshold' => Percent,
  ?'source_image' => Image,
  ?'target_image' => Image,
  ) $s = shape()) {
    $this->quality_filter = $quality_filter ?? "";
    $this->similarity_threshold = $similarity_threshold ?? ;
    $this->source_image = $source_image ?? ;
    $this->target_image = $target_image ?? ;
  }
}

class CompareFacesResponse {
  public CompareFacesMatchList $face_matches;
  public ComparedSourceImageFace $source_image_face;
  public OrientationCorrection $source_image_orientation_correction;
  public OrientationCorrection $target_image_orientation_correction;
  public CompareFacesUnmatchList $unmatched_faces;

  public function __construct(shape(
  ?'face_matches' => CompareFacesMatchList,
  ?'source_image_face' => ComparedSourceImageFace,
  ?'source_image_orientation_correction' => OrientationCorrection,
  ?'target_image_orientation_correction' => OrientationCorrection,
  ?'unmatched_faces' => CompareFacesUnmatchList,
  ) $s = shape()) {
    $this->face_matches = $face_matches ?? ;
    $this->source_image_face = $source_image_face ?? ;
    $this->source_image_orientation_correction = $source_image_orientation_correction ?? ;
    $this->target_image_orientation_correction = $target_image_orientation_correction ?? ;
    $this->unmatched_faces = $unmatched_faces ?? ;
  }
}

type CompareFacesUnmatchList = vec<ComparedFace>;

class ComparedFace {
  public BoundingBox $bounding_box;
  public Percent $confidence;
  public Landmarks $landmarks;
  public Pose $pose;
  public ImageQuality $quality;

  public function __construct(shape(
  ?'bounding_box' => BoundingBox,
  ?'confidence' => Percent,
  ?'landmarks' => Landmarks,
  ?'pose' => Pose,
  ?'quality' => ImageQuality,
  ) $s = shape()) {
    $this->bounding_box = $bounding_box ?? null;
    $this->confidence = $confidence ?? ;
    $this->landmarks = $landmarks ?? [];
    $this->pose = $pose ?? null;
    $this->quality = $quality ?? ;
  }
}

type ComparedFaceList = vec<ComparedFace>;

class ComparedSourceImageFace {
  public BoundingBox $bounding_box;
  public Percent $confidence;

  public function __construct(shape(
  ?'bounding_box' => BoundingBox,
  ?'confidence' => Percent,
  ) $s = shape()) {
    $this->bounding_box = $bounding_box ?? null;
    $this->confidence = $confidence ?? ;
  }
}

type ContentClassifier = string;

type ContentClassifiers = vec<ContentClassifier>;

class ContentModerationDetection {
  public ModerationLabel $moderation_label;
  public Timestamp $timestamp;

  public function __construct(shape(
  ?'moderation_label' => ModerationLabel,
  ?'timestamp' => Timestamp,
  ) $s = shape()) {
    $this->moderation_label = $moderation_label ?? null;
    $this->timestamp = $timestamp ?? 0;
  }
}

type ContentModerationDetections = vec<ContentModerationDetection>;

type ContentModerationSortBy = string;

class CreateCollectionRequest {
  public CollectionId $collection_id;

  public function __construct(shape(
  ?'collection_id' => CollectionId,
  ) $s = shape()) {
    $this->collection_id = $collection_id ?? "";
  }
}

class CreateCollectionResponse {
  public string $collection_arn;
  public string $face_model_version;
  public UInteger $status_code;

  public function __construct(shape(
  ?'collection_arn' => string,
  ?'face_model_version' => string,
  ?'status_code' => UInteger,
  ) $s = shape()) {
    $this->collection_arn = $collection_arn ?? ;
    $this->face_model_version = $face_model_version ?? ;
    $this->status_code = $status_code ?? ;
  }
}

class CreateProjectRequest {
  public ProjectName $project_name;

  public function __construct(shape(
  ?'project_name' => ProjectName,
  ) $s = shape()) {
    $this->project_name = $project_name ?? "";
  }
}

class CreateProjectResponse {
  public ProjectArn $project_arn;

  public function __construct(shape(
  ?'project_arn' => ProjectArn,
  ) $s = shape()) {
    $this->project_arn = $project_arn ?? "";
  }
}

class CreateProjectVersionRequest {
  public OutputConfig $output_config;
  public ProjectArn $project_arn;
  public TestingData $testing_data;
  public TrainingData $training_data;
  public VersionName $version_name;

  public function __construct(shape(
  ?'output_config' => OutputConfig,
  ?'project_arn' => ProjectArn,
  ?'testing_data' => TestingData,
  ?'training_data' => TrainingData,
  ?'version_name' => VersionName,
  ) $s = shape()) {
    $this->output_config = $output_config ?? null;
    $this->project_arn = $project_arn ?? "";
    $this->testing_data = $testing_data ?? null;
    $this->training_data = $training_data ?? null;
    $this->version_name = $version_name ?? "";
  }
}

class CreateProjectVersionResponse {
  public ProjectVersionArn $project_version_arn;

  public function __construct(shape(
  ?'project_version_arn' => ProjectVersionArn,
  ) $s = shape()) {
    $this->project_version_arn = $project_version_arn ?? "";
  }
}

class CreateStreamProcessorRequest {
  public StreamProcessorInput $input;
  public StreamProcessorName $name;
  public StreamProcessorOutput $output;
  public RoleArn $role_arn;
  public StreamProcessorSettings $settings;

  public function __construct(shape(
  ?'input' => StreamProcessorInput,
  ?'name' => StreamProcessorName,
  ?'output' => StreamProcessorOutput,
  ?'role_arn' => RoleArn,
  ?'settings' => StreamProcessorSettings,
  ) $s = shape()) {
    $this->input = $input ?? ;
    $this->name = $name ?? ;
    $this->output = $output ?? ;
    $this->role_arn = $role_arn ?? "";
    $this->settings = $settings ?? ;
  }
}

class CreateStreamProcessorResponse {
  public StreamProcessorArn $stream_processor_arn;

  public function __construct(shape(
  ?'stream_processor_arn' => StreamProcessorArn,
  ) $s = shape()) {
    $this->stream_processor_arn = $stream_processor_arn ?? "";
  }
}

class CustomLabel {
  public Percent $confidence;
  public Geometry $geometry;
  public string $name;

  public function __construct(shape(
  ?'confidence' => Percent,
  ?'geometry' => Geometry,
  ?'name' => string,
  ) $s = shape()) {
    $this->confidence = $confidence ?? ;
    $this->geometry = $geometry ?? null;
    $this->name = $name ?? ;
  }
}

type CustomLabels = vec<CustomLabel>;

type DateTime = int;

type Degree = float;

class DeleteCollectionRequest {
  public CollectionId $collection_id;

  public function __construct(shape(
  ?'collection_id' => CollectionId,
  ) $s = shape()) {
    $this->collection_id = $collection_id ?? "";
  }
}

class DeleteCollectionResponse {
  public UInteger $status_code;

  public function __construct(shape(
  ?'status_code' => UInteger,
  ) $s = shape()) {
    $this->status_code = $status_code ?? ;
  }
}

class DeleteFacesRequest {
  public CollectionId $collection_id;
  public FaceIdList $face_ids;

  public function __construct(shape(
  ?'collection_id' => CollectionId,
  ?'face_ids' => FaceIdList,
  ) $s = shape()) {
    $this->collection_id = $collection_id ?? "";
    $this->face_ids = $face_ids ?? ;
  }
}

class DeleteFacesResponse {
  public FaceIdList $deleted_faces;

  public function __construct(shape(
  ?'deleted_faces' => FaceIdList,
  ) $s = shape()) {
    $this->deleted_faces = $deleted_faces ?? ;
  }
}

class DeleteProjectRequest {
  public ProjectArn $project_arn;

  public function __construct(shape(
  ?'project_arn' => ProjectArn,
  ) $s = shape()) {
    $this->project_arn = $project_arn ?? "";
  }
}

class DeleteProjectResponse {
  public ProjectStatus $status;

  public function __construct(shape(
  ?'status' => ProjectStatus,
  ) $s = shape()) {
    $this->status = $status ?? ;
  }
}

class DeleteProjectVersionRequest {
  public ProjectVersionArn $project_version_arn;

  public function __construct(shape(
  ?'project_version_arn' => ProjectVersionArn,
  ) $s = shape()) {
    $this->project_version_arn = $project_version_arn ?? "";
  }
}

class DeleteProjectVersionResponse {
  public ProjectVersionStatus $status;

  public function __construct(shape(
  ?'status' => ProjectVersionStatus,
  ) $s = shape()) {
    $this->status = $status ?? ;
  }
}

class DeleteStreamProcessorRequest {
  public StreamProcessorName $name;

  public function __construct(shape(
  ?'name' => StreamProcessorName,
  ) $s = shape()) {
    $this->name = $name ?? ;
  }
}

class DeleteStreamProcessorResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeCollectionRequest {
  public CollectionId $collection_id;

  public function __construct(shape(
  ?'collection_id' => CollectionId,
  ) $s = shape()) {
    $this->collection_id = $collection_id ?? "";
  }
}

class DescribeCollectionResponse {
  public string $collection_arn;
  public DateTime $creation_timestamp;
  public ULong $face_count;
  public string $face_model_version;

  public function __construct(shape(
  ?'collection_arn' => string,
  ?'creation_timestamp' => DateTime,
  ?'face_count' => ULong,
  ?'face_model_version' => string,
  ) $s = shape()) {
    $this->collection_arn = $collection_arn ?? ;
    $this->creation_timestamp = $creation_timestamp ?? ;
    $this->face_count = $face_count ?? ;
    $this->face_model_version = $face_model_version ?? ;
  }
}

class DescribeProjectVersionsRequest {
  public ProjectVersionsPageSize $max_results;
  public ExtendedPaginationToken $next_token;
  public ProjectArn $project_arn;
  public VersionNames $version_names;

  public function __construct(shape(
  ?'max_results' => ProjectVersionsPageSize,
  ?'next_token' => ExtendedPaginationToken,
  ?'project_arn' => ProjectArn,
  ?'version_names' => VersionNames,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
    $this->project_arn = $project_arn ?? "";
    $this->version_names = $version_names ?? [];
  }
}

class DescribeProjectVersionsResponse {
  public ExtendedPaginationToken $next_token;
  public ProjectVersionDescriptions $project_version_descriptions;

  public function __construct(shape(
  ?'next_token' => ExtendedPaginationToken,
  ?'project_version_descriptions' => ProjectVersionDescriptions,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->project_version_descriptions = $project_version_descriptions ?? [];
  }
}

class DescribeProjectsRequest {
  public ProjectsPageSize $max_results;
  public ExtendedPaginationToken $next_token;

  public function __construct(shape(
  ?'max_results' => ProjectsPageSize,
  ?'next_token' => ExtendedPaginationToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
  }
}

class DescribeProjectsResponse {
  public ExtendedPaginationToken $next_token;
  public ProjectDescriptions $project_descriptions;

  public function __construct(shape(
  ?'next_token' => ExtendedPaginationToken,
  ?'project_descriptions' => ProjectDescriptions,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->project_descriptions = $project_descriptions ?? [];
  }
}

class DescribeStreamProcessorRequest {
  public StreamProcessorName $name;

  public function __construct(shape(
  ?'name' => StreamProcessorName,
  ) $s = shape()) {
    $this->name = $name ?? ;
  }
}

class DescribeStreamProcessorResponse {
  public DateTime $creation_timestamp;
  public StreamProcessorInput $input;
  public DateTime $last_update_timestamp;
  public StreamProcessorName $name;
  public StreamProcessorOutput $output;
  public RoleArn $role_arn;
  public StreamProcessorSettings $settings;
  public StreamProcessorStatus $status;
  public string $status_message;
  public StreamProcessorArn $stream_processor_arn;

  public function __construct(shape(
  ?'creation_timestamp' => DateTime,
  ?'input' => StreamProcessorInput,
  ?'last_update_timestamp' => DateTime,
  ?'name' => StreamProcessorName,
  ?'output' => StreamProcessorOutput,
  ?'role_arn' => RoleArn,
  ?'settings' => StreamProcessorSettings,
  ?'status' => StreamProcessorStatus,
  ?'status_message' => string,
  ?'stream_processor_arn' => StreamProcessorArn,
  ) $s = shape()) {
    $this->creation_timestamp = $creation_timestamp ?? ;
    $this->input = $input ?? ;
    $this->last_update_timestamp = $last_update_timestamp ?? ;
    $this->name = $name ?? ;
    $this->output = $output ?? ;
    $this->role_arn = $role_arn ?? "";
    $this->settings = $settings ?? ;
    $this->status = $status ?? ;
    $this->status_message = $status_message ?? "";
    $this->stream_processor_arn = $stream_processor_arn ?? "";
  }
}

class DetectCustomLabelsRequest {
  public Image $image;
  public UInteger $max_results;
  public Percent $min_confidence;
  public ProjectVersionArn $project_version_arn;

  public function __construct(shape(
  ?'image' => Image,
  ?'max_results' => UInteger,
  ?'min_confidence' => Percent,
  ?'project_version_arn' => ProjectVersionArn,
  ) $s = shape()) {
    $this->image = $image ?? null;
    $this->max_results = $max_results ?? 0;
    $this->min_confidence = $min_confidence ?? ;
    $this->project_version_arn = $project_version_arn ?? "";
  }
}

class DetectCustomLabelsResponse {
  public CustomLabels $custom_labels;

  public function __construct(shape(
  ?'custom_labels' => CustomLabels,
  ) $s = shape()) {
    $this->custom_labels = $custom_labels ?? [];
  }
}

class DetectFacesRequest {
  public Attributes $attributes;
  public Image $image;

  public function __construct(shape(
  ?'attributes' => Attributes,
  ?'image' => Image,
  ) $s = shape()) {
    $this->attributes = $attributes ?? [];
    $this->image = $image ?? null;
  }
}

class DetectFacesResponse {
  public FaceDetailList $face_details;
  public OrientationCorrection $orientation_correction;

  public function __construct(shape(
  ?'face_details' => FaceDetailList,
  ?'orientation_correction' => OrientationCorrection,
  ) $s = shape()) {
    $this->face_details = $face_details ?? ;
    $this->orientation_correction = $orientation_correction ?? "";
  }
}

class DetectLabelsRequest {
  public Image $image;
  public UInteger $max_labels;
  public Percent $min_confidence;

  public function __construct(shape(
  ?'image' => Image,
  ?'max_labels' => UInteger,
  ?'min_confidence' => Percent,
  ) $s = shape()) {
    $this->image = $image ?? null;
    $this->max_labels = $max_labels ?? ;
    $this->min_confidence = $min_confidence ?? ;
  }
}

class DetectLabelsResponse {
  public string $label_model_version;
  public Labels $labels;
  public OrientationCorrection $orientation_correction;

  public function __construct(shape(
  ?'label_model_version' => string,
  ?'labels' => Labels,
  ?'orientation_correction' => OrientationCorrection,
  ) $s = shape()) {
    $this->label_model_version = $label_model_version ?? ;
    $this->labels = $labels ?? [];
    $this->orientation_correction = $orientation_correction ?? "";
  }
}

class DetectModerationLabelsRequest {
  public HumanLoopConfig $human_loop_config;
  public Image $image;
  public Percent $min_confidence;

  public function __construct(shape(
  ?'human_loop_config' => HumanLoopConfig,
  ?'image' => Image,
  ?'min_confidence' => Percent,
  ) $s = shape()) {
    $this->human_loop_config = $human_loop_config ?? null;
    $this->image = $image ?? null;
    $this->min_confidence = $min_confidence ?? ;
  }
}

class DetectModerationLabelsResponse {
  public HumanLoopActivationOutput $human_loop_activation_output;
  public ModerationLabels $moderation_labels;
  public string $moderation_model_version;

  public function __construct(shape(
  ?'human_loop_activation_output' => HumanLoopActivationOutput,
  ?'moderation_labels' => ModerationLabels,
  ?'moderation_model_version' => string,
  ) $s = shape()) {
    $this->human_loop_activation_output = $human_loop_activation_output ?? null;
    $this->moderation_labels = $moderation_labels ?? [];
    $this->moderation_model_version = $moderation_model_version ?? ;
  }
}

class DetectTextFilters {
  public RegionsOfInterest $regions_of_interest;
  public DetectionFilter $word_filter;

  public function __construct(shape(
  ?'regions_of_interest' => RegionsOfInterest,
  ?'word_filter' => DetectionFilter,
  ) $s = shape()) {
    $this->regions_of_interest = $regions_of_interest ?? [];
    $this->word_filter = $word_filter ?? ;
  }
}

class DetectTextRequest {
  public DetectTextFilters $filters;
  public Image $image;

  public function __construct(shape(
  ?'filters' => DetectTextFilters,
  ?'image' => Image,
  ) $s = shape()) {
    $this->filters = $filters ?? ;
    $this->image = $image ?? null;
  }
}

class DetectTextResponse {
  public TextDetectionList $text_detections;
  public string $text_model_version;

  public function __construct(shape(
  ?'text_detections' => TextDetectionList,
  ?'text_model_version' => string,
  ) $s = shape()) {
    $this->text_detections = $text_detections ?? ;
    $this->text_model_version = $text_model_version ?? ;
  }
}

class DetectionFilter {
  public BoundingBoxHeight $min_bounding_box_height;
  public BoundingBoxWidth $min_bounding_box_width;
  public Percent $min_confidence;

  public function __construct(shape(
  ?'min_bounding_box_height' => BoundingBoxHeight,
  ?'min_bounding_box_width' => BoundingBoxWidth,
  ?'min_confidence' => Percent,
  ) $s = shape()) {
    $this->min_bounding_box_height = $min_bounding_box_height ?? ;
    $this->min_bounding_box_width = $min_bounding_box_width ?? ;
    $this->min_confidence = $min_confidence ?? ;
  }
}

class Emotion {
  public Percent $confidence;
  public EmotionName $type;

  public function __construct(shape(
  ?'confidence' => Percent,
  ?'type' => EmotionName,
  ) $s = shape()) {
    $this->confidence = $confidence ?? ;
    $this->type = $type ?? ;
  }
}

type EmotionName = string;

type Emotions = vec<Emotion>;

class EvaluationResult {
  public Float $f_1_score;
  public Summary $summary;

  public function __construct(shape(
  ?'f_1_score' => Float,
  ?'summary' => Summary,
  ) $s = shape()) {
    $this->f_1_score = $f_1_score ?? ;
    $this->summary = $summary ?? null;
  }
}

type ExtendedPaginationToken = string;

type ExternalImageId = string;

class EyeOpen {
  public Percent $confidence;
  public boolean $value;

  public function __construct(shape(
  ?'confidence' => Percent,
  ?'value' => boolean,
  ) $s = shape()) {
    $this->confidence = $confidence ?? ;
    $this->value = $value ?? ;
  }
}

class Eyeglasses {
  public Percent $confidence;
  public boolean $value;

  public function __construct(shape(
  ?'confidence' => Percent,
  ?'value' => boolean,
  ) $s = shape()) {
    $this->confidence = $confidence ?? ;
    $this->value = $value ?? ;
  }
}

class Face {
  public BoundingBox $bounding_box;
  public Percent $confidence;
  public ExternalImageId $external_image_id;
  public FaceId $face_id;
  public ImageId $image_id;

  public function __construct(shape(
  ?'bounding_box' => BoundingBox,
  ?'confidence' => Percent,
  ?'external_image_id' => ExternalImageId,
  ?'face_id' => FaceId,
  ?'image_id' => ImageId,
  ) $s = shape()) {
    $this->bounding_box = $bounding_box ?? null;
    $this->confidence = $confidence ?? ;
    $this->external_image_id = $external_image_id ?? "";
    $this->face_id = $face_id ?? "";
    $this->image_id = $image_id ?? "";
  }
}

type FaceAttributes = string;

class FaceDetail {
  public AgeRange $age_range;
  public Beard $beard;
  public BoundingBox $bounding_box;
  public Percent $confidence;
  public Emotions $emotions;
  public Eyeglasses $eyeglasses;
  public EyeOpen $eyes_open;
  public Gender $gender;
  public Landmarks $landmarks;
  public MouthOpen $mouth_open;
  public Mustache $mustache;
  public Pose $pose;
  public ImageQuality $quality;
  public Smile $smile;
  public Sunglasses $sunglasses;

  public function __construct(shape(
  ?'age_range' => AgeRange,
  ?'beard' => Beard,
  ?'bounding_box' => BoundingBox,
  ?'confidence' => Percent,
  ?'emotions' => Emotions,
  ?'eyeglasses' => Eyeglasses,
  ?'eyes_open' => EyeOpen,
  ?'gender' => Gender,
  ?'landmarks' => Landmarks,
  ?'mouth_open' => MouthOpen,
  ?'mustache' => Mustache,
  ?'pose' => Pose,
  ?'quality' => ImageQuality,
  ?'smile' => Smile,
  ?'sunglasses' => Sunglasses,
  ) $s = shape()) {
    $this->age_range = $age_range ?? null;
    $this->beard = $beard ?? null;
    $this->bounding_box = $bounding_box ?? null;
    $this->confidence = $confidence ?? ;
    $this->emotions = $emotions ?? [];
    $this->eyeglasses = $eyeglasses ?? null;
    $this->eyes_open = $eyes_open ?? ;
    $this->gender = $gender ?? null;
    $this->landmarks = $landmarks ?? [];
    $this->mouth_open = $mouth_open ?? null;
    $this->mustache = $mustache ?? null;
    $this->pose = $pose ?? null;
    $this->quality = $quality ?? ;
    $this->smile = $smile ?? null;
    $this->sunglasses = $sunglasses ?? null;
  }
}

type FaceDetailList = vec<FaceDetail>;

class FaceDetection {
  public FaceDetail $face;
  public Timestamp $timestamp;

  public function __construct(shape(
  ?'face' => FaceDetail,
  ?'timestamp' => Timestamp,
  ) $s = shape()) {
    $this->face = $face ?? null;
    $this->timestamp = $timestamp ?? 0;
  }
}

type FaceDetections = vec<FaceDetection>;

type FaceId = string;

type FaceIdList = vec<FaceId>;

type FaceList = vec<Face>;

class FaceMatch {
  public Face $face;
  public Percent $similarity;

  public function __construct(shape(
  ?'face' => Face,
  ?'similarity' => Percent,
  ) $s = shape()) {
    $this->face = $face ?? null;
    $this->similarity = $similarity ?? ;
  }
}

type FaceMatchList = vec<FaceMatch>;

type FaceModelVersionList = vec<String>;

class FaceRecord {
  public Face $face;
  public FaceDetail $face_detail;

  public function __construct(shape(
  ?'face' => Face,
  ?'face_detail' => FaceDetail,
  ) $s = shape()) {
    $this->face = $face ?? null;
    $this->face_detail = $face_detail ?? null;
  }
}

type FaceRecordList = vec<FaceRecord>;

class FaceSearchSettings {
  public CollectionId $collection_id;
  public Percent $face_match_threshold;

  public function __construct(shape(
  ?'collection_id' => CollectionId,
  ?'face_match_threshold' => Percent,
  ) $s = shape()) {
    $this->collection_id = $collection_id ?? "";
    $this->face_match_threshold = $face_match_threshold ?? ;
  }
}

type FaceSearchSortBy = string;

type Float = float;

type FlowDefinitionArn = string;

class Gender {
  public Percent $confidence;
  public GenderType $value;

  public function __construct(shape(
  ?'confidence' => Percent,
  ?'value' => GenderType,
  ) $s = shape()) {
    $this->confidence = $confidence ?? ;
    $this->value = $value ?? ;
  }
}

type GenderType = string;

class Geometry {
  public BoundingBox $bounding_box;
  public Polygon $polygon;

  public function __construct(shape(
  ?'bounding_box' => BoundingBox,
  ?'polygon' => Polygon,
  ) $s = shape()) {
    $this->bounding_box = $bounding_box ?? null;
    $this->polygon = $polygon ?? [];
  }
}

class GetCelebrityInfoRequest {
  public RekognitionUniqueId $id;

  public function __construct(shape(
  ?'id' => RekognitionUniqueId,
  ) $s = shape()) {
    $this->id = $id ?? ;
  }
}

class GetCelebrityInfoResponse {
  public string $name;
  public Urls $urls;

  public function __construct(shape(
  ?'name' => string,
  ?'urls' => Urls,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->urls = $urls ?? [];
  }
}

class GetCelebrityRecognitionRequest {
  public JobId $job_id;
  public MaxResults $max_results;
  public PaginationToken $next_token;
  public CelebrityRecognitionSortBy $sort_by;

  public function __construct(shape(
  ?'job_id' => JobId,
  ?'max_results' => MaxResults,
  ?'next_token' => PaginationToken,
  ?'sort_by' => CelebrityRecognitionSortBy,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
    $this->sort_by = $sort_by ?? ;
  }
}

class GetCelebrityRecognitionResponse {
  public CelebrityRecognitions $celebrities;
  public VideoJobStatus $job_status;
  public PaginationToken $next_token;
  public StatusMessage $status_message;
  public VideoMetadata $video_metadata;

  public function __construct(shape(
  ?'celebrities' => CelebrityRecognitions,
  ?'job_status' => VideoJobStatus,
  ?'next_token' => PaginationToken,
  ?'status_message' => StatusMessage,
  ?'video_metadata' => VideoMetadata,
  ) $s = shape()) {
    $this->celebrities = $celebrities ?? ;
    $this->job_status = $job_status ?? ;
    $this->next_token = $next_token ?? ;
    $this->status_message = $status_message ?? "";
    $this->video_metadata = $video_metadata ?? null;
  }
}

class GetContentModerationRequest {
  public JobId $job_id;
  public MaxResults $max_results;
  public PaginationToken $next_token;
  public ContentModerationSortBy $sort_by;

  public function __construct(shape(
  ?'job_id' => JobId,
  ?'max_results' => MaxResults,
  ?'next_token' => PaginationToken,
  ?'sort_by' => ContentModerationSortBy,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
    $this->sort_by = $sort_by ?? ;
  }
}

class GetContentModerationResponse {
  public VideoJobStatus $job_status;
  public ContentModerationDetections $moderation_labels;
  public string $moderation_model_version;
  public PaginationToken $next_token;
  public StatusMessage $status_message;
  public VideoMetadata $video_metadata;

  public function __construct(shape(
  ?'job_status' => VideoJobStatus,
  ?'moderation_labels' => ContentModerationDetections,
  ?'moderation_model_version' => string,
  ?'next_token' => PaginationToken,
  ?'status_message' => StatusMessage,
  ?'video_metadata' => VideoMetadata,
  ) $s = shape()) {
    $this->job_status = $job_status ?? ;
    $this->moderation_labels = $moderation_labels ?? [];
    $this->moderation_model_version = $moderation_model_version ?? ;
    $this->next_token = $next_token ?? ;
    $this->status_message = $status_message ?? "";
    $this->video_metadata = $video_metadata ?? null;
  }
}

class GetFaceDetectionRequest {
  public JobId $job_id;
  public MaxResults $max_results;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'job_id' => JobId,
  ?'max_results' => MaxResults,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
  }
}

class GetFaceDetectionResponse {
  public FaceDetections $faces;
  public VideoJobStatus $job_status;
  public PaginationToken $next_token;
  public StatusMessage $status_message;
  public VideoMetadata $video_metadata;

  public function __construct(shape(
  ?'faces' => FaceDetections,
  ?'job_status' => VideoJobStatus,
  ?'next_token' => PaginationToken,
  ?'status_message' => StatusMessage,
  ?'video_metadata' => VideoMetadata,
  ) $s = shape()) {
    $this->faces = $faces ?? ;
    $this->job_status = $job_status ?? ;
    $this->next_token = $next_token ?? ;
    $this->status_message = $status_message ?? "";
    $this->video_metadata = $video_metadata ?? null;
  }
}

class GetFaceSearchRequest {
  public JobId $job_id;
  public MaxResults $max_results;
  public PaginationToken $next_token;
  public FaceSearchSortBy $sort_by;

  public function __construct(shape(
  ?'job_id' => JobId,
  ?'max_results' => MaxResults,
  ?'next_token' => PaginationToken,
  ?'sort_by' => FaceSearchSortBy,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
    $this->sort_by = $sort_by ?? ;
  }
}

class GetFaceSearchResponse {
  public VideoJobStatus $job_status;
  public PaginationToken $next_token;
  public PersonMatches $persons;
  public StatusMessage $status_message;
  public VideoMetadata $video_metadata;

  public function __construct(shape(
  ?'job_status' => VideoJobStatus,
  ?'next_token' => PaginationToken,
  ?'persons' => PersonMatches,
  ?'status_message' => StatusMessage,
  ?'video_metadata' => VideoMetadata,
  ) $s = shape()) {
    $this->job_status = $job_status ?? ;
    $this->next_token = $next_token ?? ;
    $this->persons = $persons ?? ;
    $this->status_message = $status_message ?? "";
    $this->video_metadata = $video_metadata ?? null;
  }
}

class GetLabelDetectionRequest {
  public JobId $job_id;
  public MaxResults $max_results;
  public PaginationToken $next_token;
  public LabelDetectionSortBy $sort_by;

  public function __construct(shape(
  ?'job_id' => JobId,
  ?'max_results' => MaxResults,
  ?'next_token' => PaginationToken,
  ?'sort_by' => LabelDetectionSortBy,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
    $this->sort_by = $sort_by ?? ;
  }
}

class GetLabelDetectionResponse {
  public VideoJobStatus $job_status;
  public string $label_model_version;
  public LabelDetections $labels;
  public PaginationToken $next_token;
  public StatusMessage $status_message;
  public VideoMetadata $video_metadata;

  public function __construct(shape(
  ?'job_status' => VideoJobStatus,
  ?'label_model_version' => string,
  ?'labels' => LabelDetections,
  ?'next_token' => PaginationToken,
  ?'status_message' => StatusMessage,
  ?'video_metadata' => VideoMetadata,
  ) $s = shape()) {
    $this->job_status = $job_status ?? ;
    $this->label_model_version = $label_model_version ?? ;
    $this->labels = $labels ?? [];
    $this->next_token = $next_token ?? ;
    $this->status_message = $status_message ?? "";
    $this->video_metadata = $video_metadata ?? null;
  }
}

class GetPersonTrackingRequest {
  public JobId $job_id;
  public MaxResults $max_results;
  public PaginationToken $next_token;
  public PersonTrackingSortBy $sort_by;

  public function __construct(shape(
  ?'job_id' => JobId,
  ?'max_results' => MaxResults,
  ?'next_token' => PaginationToken,
  ?'sort_by' => PersonTrackingSortBy,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
    $this->sort_by = $sort_by ?? ;
  }
}

class GetPersonTrackingResponse {
  public VideoJobStatus $job_status;
  public PaginationToken $next_token;
  public PersonDetections $persons;
  public StatusMessage $status_message;
  public VideoMetadata $video_metadata;

  public function __construct(shape(
  ?'job_status' => VideoJobStatus,
  ?'next_token' => PaginationToken,
  ?'persons' => PersonDetections,
  ?'status_message' => StatusMessage,
  ?'video_metadata' => VideoMetadata,
  ) $s = shape()) {
    $this->job_status = $job_status ?? ;
    $this->next_token = $next_token ?? ;
    $this->persons = $persons ?? ;
    $this->status_message = $status_message ?? "";
    $this->video_metadata = $video_metadata ?? null;
  }
}

class GetTextDetectionRequest {
  public JobId $job_id;
  public MaxResults $max_results;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'job_id' => JobId,
  ?'max_results' => MaxResults,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
  }
}

class GetTextDetectionResponse {
  public VideoJobStatus $job_status;
  public PaginationToken $next_token;
  public StatusMessage $status_message;
  public TextDetectionResults $text_detections;
  public string $text_model_version;
  public VideoMetadata $video_metadata;

  public function __construct(shape(
  ?'job_status' => VideoJobStatus,
  ?'next_token' => PaginationToken,
  ?'status_message' => StatusMessage,
  ?'text_detections' => TextDetectionResults,
  ?'text_model_version' => string,
  ?'video_metadata' => VideoMetadata,
  ) $s = shape()) {
    $this->job_status = $job_status ?? ;
    $this->next_token = $next_token ?? ;
    $this->status_message = $status_message ?? "";
    $this->text_detections = $text_detections ?? ;
    $this->text_model_version = $text_model_version ?? ;
    $this->video_metadata = $video_metadata ?? null;
  }
}

class GroundTruthManifest {
  public S3Object $s_3_object;

  public function __construct(shape(
  ?'s_3_object' => S3Object,
  ) $s = shape()) {
    $this->s_3_object = $s_3_object ?? null;
  }
}

type HumanLoopActivationConditionsEvaluationResults = string;

class HumanLoopActivationOutput {
  public HumanLoopActivationConditionsEvaluationResults $human_loop_activation_conditions_evaluation_results;
  public HumanLoopActivationReasons $human_loop_activation_reasons;
  public HumanLoopArn $human_loop_arn;

  public function __construct(shape(
  ?'human_loop_activation_conditions_evaluation_results' => HumanLoopActivationConditionsEvaluationResults,
  ?'human_loop_activation_reasons' => HumanLoopActivationReasons,
  ?'human_loop_arn' => HumanLoopArn,
  ) $s = shape()) {
    $this->human_loop_activation_conditions_evaluation_results = $human_loop_activation_conditions_evaluation_results ?? "";
    $this->human_loop_activation_reasons = $human_loop_activation_reasons ?? [];
    $this->human_loop_arn = $human_loop_arn ?? "";
  }
}

type HumanLoopActivationReason = string;

type HumanLoopActivationReasons = vec<HumanLoopActivationReason>;

type HumanLoopArn = string;

class HumanLoopConfig {
  public HumanLoopDataAttributes $data_attributes;
  public FlowDefinitionArn $flow_definition_arn;
  public HumanLoopName $human_loop_name;

  public function __construct(shape(
  ?'data_attributes' => HumanLoopDataAttributes,
  ?'flow_definition_arn' => FlowDefinitionArn,
  ?'human_loop_name' => HumanLoopName,
  ) $s = shape()) {
    $this->data_attributes = $data_attributes ?? ;
    $this->flow_definition_arn = $flow_definition_arn ?? "";
    $this->human_loop_name = $human_loop_name ?? "";
  }
}

class HumanLoopDataAttributes {
  public ContentClassifiers $content_classifiers;

  public function __construct(shape(
  ?'content_classifiers' => ContentClassifiers,
  ) $s = shape()) {
    $this->content_classifiers = $content_classifiers ?? [];
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
    $this->quota_code = $quota_code ?? ;
    $this->resource_type = $resource_type ?? ;
    $this->service_code = $service_code ?? ;
  }
}

class IdempotentParameterMismatchException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Image {
  public ImageBlob $bytes;
  public S3Object $s_3_object;

  public function __construct(shape(
  ?'bytes' => ImageBlob,
  ?'s_3_object' => S3Object,
  ) $s = shape()) {
    $this->bytes = $bytes ?? ;
    $this->s_3_object = $s_3_object ?? null;
  }
}

type ImageBlob = string;

type ImageId = string;

class ImageQuality {
  public Float $brightness;
  public Float $sharpness;

  public function __construct(shape(
  ?'brightness' => Float,
  ?'sharpness' => Float,
  ) $s = shape()) {
    $this->brightness = $brightness ?? ;
    $this->sharpness = $sharpness ?? ;
  }
}

class ImageTooLargeException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class IndexFacesRequest {
  public CollectionId $collection_id;
  public Attributes $detection_attributes;
  public ExternalImageId $external_image_id;
  public Image $image;
  public MaxFacesToIndex $max_faces;
  public QualityFilter $quality_filter;

  public function __construct(shape(
  ?'collection_id' => CollectionId,
  ?'detection_attributes' => Attributes,
  ?'external_image_id' => ExternalImageId,
  ?'image' => Image,
  ?'max_faces' => MaxFacesToIndex,
  ?'quality_filter' => QualityFilter,
  ) $s = shape()) {
    $this->collection_id = $collection_id ?? "";
    $this->detection_attributes = $detection_attributes ?? ;
    $this->external_image_id = $external_image_id ?? "";
    $this->image = $image ?? null;
    $this->max_faces = $max_faces ?? 0;
    $this->quality_filter = $quality_filter ?? "";
  }
}

class IndexFacesResponse {
  public string $face_model_version;
  public FaceRecordList $face_records;
  public OrientationCorrection $orientation_correction;
  public UnindexedFaces $unindexed_faces;

  public function __construct(shape(
  ?'face_model_version' => string,
  ?'face_records' => FaceRecordList,
  ?'orientation_correction' => OrientationCorrection,
  ?'unindexed_faces' => UnindexedFaces,
  ) $s = shape()) {
    $this->face_model_version = $face_model_version ?? ;
    $this->face_records = $face_records ?? ;
    $this->orientation_correction = $orientation_correction ?? "";
    $this->unindexed_faces = $unindexed_faces ?? [];
  }
}

type InferenceUnits = int;

class Instance {
  public BoundingBox $bounding_box;
  public Percent $confidence;

  public function __construct(shape(
  ?'bounding_box' => BoundingBox,
  ?'confidence' => Percent,
  ) $s = shape()) {
    $this->bounding_box = $bounding_box ?? null;
    $this->confidence = $confidence ?? ;
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
  public KinesisDataArn $arn;

  public function __construct(shape(
  ?'arn' => KinesisDataArn,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
  }
}

type KinesisVideoArn = string;

class KinesisVideoStream {
  public KinesisVideoArn $arn;

  public function __construct(shape(
  ?'arn' => KinesisVideoArn,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
  }
}

class Label {
  public Percent $confidence;
  public Instances $instances;
  public string $name;
  public Parents $parents;

  public function __construct(shape(
  ?'confidence' => Percent,
  ?'instances' => Instances,
  ?'name' => string,
  ?'parents' => Parents,
  ) $s = shape()) {
    $this->confidence = $confidence ?? ;
    $this->instances = $instances ?? [];
    $this->name = $name ?? ;
    $this->parents = $parents ?? [];
  }
}

class LabelDetection {
  public Label $label;
  public Timestamp $timestamp;

  public function __construct(shape(
  ?'label' => Label,
  ?'timestamp' => Timestamp,
  ) $s = shape()) {
    $this->label = $label ?? null;
    $this->timestamp = $timestamp ?? 0;
  }
}

type LabelDetectionSortBy = string;

type LabelDetections = vec<LabelDetection>;

type Labels = vec<Label>;

class Landmark {
  public LandmarkType $type;
  public Float $x;
  public Float $y;

  public function __construct(shape(
  ?'type' => LandmarkType,
  ?'x' => Float,
  ?'y' => Float,
  ) $s = shape()) {
    $this->type = $type ?? ;
    $this->x = $x ?? ;
    $this->y = $y ?? ;
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
  public PageSize $max_results;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'max_results' => PageSize,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
  }
}

class ListCollectionsResponse {
  public CollectionIdList $collection_ids;
  public FaceModelVersionList $face_model_versions;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'collection_ids' => CollectionIdList,
  ?'face_model_versions' => FaceModelVersionList,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->collection_ids = $collection_ids ?? ;
    $this->face_model_versions = $face_model_versions ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListFacesRequest {
  public CollectionId $collection_id;
  public PageSize $max_results;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'collection_id' => CollectionId,
  ?'max_results' => PageSize,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->collection_id = $collection_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
  }
}

class ListFacesResponse {
  public string $face_model_version;
  public FaceList $faces;
  public string $next_token;

  public function __construct(shape(
  ?'face_model_version' => string,
  ?'faces' => FaceList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->face_model_version = $face_model_version ?? ;
    $this->faces = $faces ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListStreamProcessorsRequest {
  public MaxResults $max_results;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
  }
}

class ListStreamProcessorsResponse {
  public PaginationToken $next_token;
  public StreamProcessorList $stream_processors;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'stream_processors' => StreamProcessorList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->stream_processors = $stream_processors ?? ;
  }
}

type MaxFaces = int;

type MaxFacesToIndex = int;

type MaxResults = int;

class ModerationLabel {
  public Percent $confidence;
  public string $name;
  public string $parent_name;

  public function __construct(shape(
  ?'confidence' => Percent,
  ?'name' => string,
  ?'parent_name' => string,
  ) $s = shape()) {
    $this->confidence = $confidence ?? ;
    $this->name = $name ?? ;
    $this->parent_name = $parent_name ?? ;
  }
}

type ModerationLabels = vec<ModerationLabel>;

class MouthOpen {
  public Percent $confidence;
  public boolean $value;

  public function __construct(shape(
  ?'confidence' => Percent,
  ?'value' => boolean,
  ) $s = shape()) {
    $this->confidence = $confidence ?? ;
    $this->value = $value ?? ;
  }
}

class Mustache {
  public Percent $confidence;
  public boolean $value;

  public function __construct(shape(
  ?'confidence' => Percent,
  ?'value' => boolean,
  ) $s = shape()) {
    $this->confidence = $confidence ?? ;
    $this->value = $value ?? ;
  }
}

class NotificationChannel {
  public RoleArn $role_arn;
  public SNSTopicArn $sns_topic_arn;

  public function __construct(shape(
  ?'role_arn' => RoleArn,
  ?'sns_topic_arn' => SNSTopicArn,
  ) $s = shape()) {
    $this->role_arn = $role_arn ?? "";
    $this->sns_topic_arn = $sns_topic_arn ?? "";
  }
}

type OrientationCorrection = string;

class OutputConfig {
  public S3Bucket $s_3_bucket;
  public S3KeyPrefix $s_3_key_prefix;

  public function __construct(shape(
  ?'s_3_bucket' => S3Bucket,
  ?'s_3_key_prefix' => S3KeyPrefix,
  ) $s = shape()) {
    $this->s_3_bucket = $s_3_bucket ?? "";
    $this->s_3_key_prefix = $s_3_key_prefix ?? "";
  }
}

type PageSize = int;

type PaginationToken = string;

class Parent {
  public string $name;

  public function __construct(shape(
  ?'name' => string,
  ) $s = shape()) {
    $this->name = $name ?? ;
  }
}

type Parents = vec<Parent>;

type Percent = float;

class PersonDetail {
  public BoundingBox $bounding_box;
  public FaceDetail $face;
  public PersonIndex $index;

  public function __construct(shape(
  ?'bounding_box' => BoundingBox,
  ?'face' => FaceDetail,
  ?'index' => PersonIndex,
  ) $s = shape()) {
    $this->bounding_box = $bounding_box ?? null;
    $this->face = $face ?? null;
    $this->index = $index ?? ;
  }
}

class PersonDetection {
  public PersonDetail $person;
  public Timestamp $timestamp;

  public function __construct(shape(
  ?'person' => PersonDetail,
  ?'timestamp' => Timestamp,
  ) $s = shape()) {
    $this->person = $person ?? ;
    $this->timestamp = $timestamp ?? 0;
  }
}

type PersonDetections = vec<PersonDetection>;

type PersonIndex = int;

class PersonMatch {
  public FaceMatchList $face_matches;
  public PersonDetail $person;
  public Timestamp $timestamp;

  public function __construct(shape(
  ?'face_matches' => FaceMatchList,
  ?'person' => PersonDetail,
  ?'timestamp' => Timestamp,
  ) $s = shape()) {
    $this->face_matches = $face_matches ?? ;
    $this->person = $person ?? ;
    $this->timestamp = $timestamp ?? 0;
  }
}

type PersonMatches = vec<PersonMatch>;

type PersonTrackingSortBy = string;

class Point {
  public Float $x;
  public Float $y;

  public function __construct(shape(
  ?'x' => Float,
  ?'y' => Float,
  ) $s = shape()) {
    $this->x = $x ?? ;
    $this->y = $y ?? ;
  }
}

type Polygon = vec<Point>;

class Pose {
  public Degree $pitch;
  public Degree $roll;
  public Degree $yaw;

  public function __construct(shape(
  ?'pitch' => Degree,
  ?'roll' => Degree,
  ?'yaw' => Degree,
  ) $s = shape()) {
    $this->pitch = $pitch ?? ;
    $this->roll = $roll ?? ;
    $this->yaw = $yaw ?? ;
  }
}

type ProjectArn = string;

class ProjectDescription {
  public DateTime $creation_timestamp;
  public ProjectArn $project_arn;
  public ProjectStatus $status;

  public function __construct(shape(
  ?'creation_timestamp' => DateTime,
  ?'project_arn' => ProjectArn,
  ?'status' => ProjectStatus,
  ) $s = shape()) {
    $this->creation_timestamp = $creation_timestamp ?? ;
    $this->project_arn = $project_arn ?? "";
    $this->status = $status ?? ;
  }
}

type ProjectDescriptions = vec<ProjectDescription>;

type ProjectName = string;

type ProjectStatus = string;

type ProjectVersionArn = string;

class ProjectVersionDescription {
  public ULong $billable_training_time_in_seconds;
  public DateTime $creation_timestamp;
  public EvaluationResult $evaluation_result;
  public InferenceUnits $min_inference_units;
  public OutputConfig $output_config;
  public ProjectVersionArn $project_version_arn;
  public ProjectVersionStatus $status;
  public StatusMessage $status_message;
  public TestingDataResult $testing_data_result;
  public TrainingDataResult $training_data_result;
  public DateTime $training_end_timestamp;

  public function __construct(shape(
  ?'billable_training_time_in_seconds' => ULong,
  ?'creation_timestamp' => DateTime,
  ?'evaluation_result' => EvaluationResult,
  ?'min_inference_units' => InferenceUnits,
  ?'output_config' => OutputConfig,
  ?'project_version_arn' => ProjectVersionArn,
  ?'status' => ProjectVersionStatus,
  ?'status_message' => StatusMessage,
  ?'testing_data_result' => TestingDataResult,
  ?'training_data_result' => TrainingDataResult,
  ?'training_end_timestamp' => DateTime,
  ) $s = shape()) {
    $this->billable_training_time_in_seconds = $billable_training_time_in_seconds ?? ;
    $this->creation_timestamp = $creation_timestamp ?? ;
    $this->evaluation_result = $evaluation_result ?? null;
    $this->min_inference_units = $min_inference_units ?? ;
    $this->output_config = $output_config ?? null;
    $this->project_version_arn = $project_version_arn ?? "";
    $this->status = $status ?? ;
    $this->status_message = $status_message ?? "";
    $this->testing_data_result = $testing_data_result ?? null;
    $this->training_data_result = $training_data_result ?? null;
    $this->training_end_timestamp = $training_end_timestamp ?? ;
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
  public Image $image;

  public function __construct(shape(
  ?'image' => Image,
  ) $s = shape()) {
    $this->image = $image ?? null;
  }
}

class RecognizeCelebritiesResponse {
  public CelebrityList $celebrity_faces;
  public OrientationCorrection $orientation_correction;
  public ComparedFaceList $unrecognized_faces;

  public function __construct(shape(
  ?'celebrity_faces' => CelebrityList,
  ?'orientation_correction' => OrientationCorrection,
  ?'unrecognized_faces' => ComparedFaceList,
  ) $s = shape()) {
    $this->celebrity_faces = $celebrity_faces ?? ;
    $this->orientation_correction = $orientation_correction ?? "";
    $this->unrecognized_faces = $unrecognized_faces ?? ;
  }
}

class RegionOfInterest {
  public BoundingBox $bounding_box;

  public function __construct(shape(
  ?'bounding_box' => BoundingBox,
  ) $s = shape()) {
    $this->bounding_box = $bounding_box ?? null;
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
  public S3Bucket $bucket;
  public S3ObjectName $name;
  public S3ObjectVersion $version;

  public function __construct(shape(
  ?'bucket' => S3Bucket,
  ?'name' => S3ObjectName,
  ?'version' => S3ObjectVersion,
  ) $s = shape()) {
    $this->bucket = $bucket ?? ;
    $this->name = $name ?? ;
    $this->version = $version ?? ;
  }
}

type S3ObjectName = string;

type S3ObjectVersion = string;

type SNSTopicArn = string;

class SearchFacesByImageRequest {
  public CollectionId $collection_id;
  public Percent $face_match_threshold;
  public Image $image;
  public MaxFaces $max_faces;
  public QualityFilter $quality_filter;

  public function __construct(shape(
  ?'collection_id' => CollectionId,
  ?'face_match_threshold' => Percent,
  ?'image' => Image,
  ?'max_faces' => MaxFaces,
  ?'quality_filter' => QualityFilter,
  ) $s = shape()) {
    $this->collection_id = $collection_id ?? "";
    $this->face_match_threshold = $face_match_threshold ?? ;
    $this->image = $image ?? null;
    $this->max_faces = $max_faces ?? 0;
    $this->quality_filter = $quality_filter ?? "";
  }
}

class SearchFacesByImageResponse {
  public FaceMatchList $face_matches;
  public string $face_model_version;
  public BoundingBox $searched_face_bounding_box;
  public Percent $searched_face_confidence;

  public function __construct(shape(
  ?'face_matches' => FaceMatchList,
  ?'face_model_version' => string,
  ?'searched_face_bounding_box' => BoundingBox,
  ?'searched_face_confidence' => Percent,
  ) $s = shape()) {
    $this->face_matches = $face_matches ?? ;
    $this->face_model_version = $face_model_version ?? ;
    $this->searched_face_bounding_box = $searched_face_bounding_box ?? ;
    $this->searched_face_confidence = $searched_face_confidence ?? ;
  }
}

class SearchFacesRequest {
  public CollectionId $collection_id;
  public FaceId $face_id;
  public Percent $face_match_threshold;
  public MaxFaces $max_faces;

  public function __construct(shape(
  ?'collection_id' => CollectionId,
  ?'face_id' => FaceId,
  ?'face_match_threshold' => Percent,
  ?'max_faces' => MaxFaces,
  ) $s = shape()) {
    $this->collection_id = $collection_id ?? "";
    $this->face_id = $face_id ?? "";
    $this->face_match_threshold = $face_match_threshold ?? ;
    $this->max_faces = $max_faces ?? 0;
  }
}

class SearchFacesResponse {
  public FaceMatchList $face_matches;
  public string $face_model_version;
  public FaceId $searched_face_id;

  public function __construct(shape(
  ?'face_matches' => FaceMatchList,
  ?'face_model_version' => string,
  ?'searched_face_id' => FaceId,
  ) $s = shape()) {
    $this->face_matches = $face_matches ?? ;
    $this->face_model_version = $face_model_version ?? ;
    $this->searched_face_id = $searched_face_id ?? ;
  }
}

class Smile {
  public Percent $confidence;
  public boolean $value;

  public function __construct(shape(
  ?'confidence' => Percent,
  ?'value' => boolean,
  ) $s = shape()) {
    $this->confidence = $confidence ?? ;
    $this->value = $value ?? ;
  }
}

class StartCelebrityRecognitionRequest {
  public ClientRequestToken $client_request_token;
  public JobTag $job_tag;
  public NotificationChannel $notification_channel;
  public Video $video;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestToken,
  ?'job_tag' => JobTag,
  ?'notification_channel' => NotificationChannel,
  ?'video' => Video,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? "";
    $this->job_tag = $job_tag ?? "";
    $this->notification_channel = $notification_channel ?? null;
    $this->video = $video ?? null;
  }
}

class StartCelebrityRecognitionResponse {
  public JobId $job_id;

  public function __construct(shape(
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
  }
}

class StartContentModerationRequest {
  public ClientRequestToken $client_request_token;
  public JobTag $job_tag;
  public Percent $min_confidence;
  public NotificationChannel $notification_channel;
  public Video $video;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestToken,
  ?'job_tag' => JobTag,
  ?'min_confidence' => Percent,
  ?'notification_channel' => NotificationChannel,
  ?'video' => Video,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? "";
    $this->job_tag = $job_tag ?? "";
    $this->min_confidence = $min_confidence ?? ;
    $this->notification_channel = $notification_channel ?? null;
    $this->video = $video ?? null;
  }
}

class StartContentModerationResponse {
  public JobId $job_id;

  public function __construct(shape(
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
  }
}

class StartFaceDetectionRequest {
  public ClientRequestToken $client_request_token;
  public FaceAttributes $face_attributes;
  public JobTag $job_tag;
  public NotificationChannel $notification_channel;
  public Video $video;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestToken,
  ?'face_attributes' => FaceAttributes,
  ?'job_tag' => JobTag,
  ?'notification_channel' => NotificationChannel,
  ?'video' => Video,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? "";
    $this->face_attributes = $face_attributes ?? "";
    $this->job_tag = $job_tag ?? "";
    $this->notification_channel = $notification_channel ?? null;
    $this->video = $video ?? null;
  }
}

class StartFaceDetectionResponse {
  public JobId $job_id;

  public function __construct(shape(
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
  }
}

class StartFaceSearchRequest {
  public ClientRequestToken $client_request_token;
  public CollectionId $collection_id;
  public Percent $face_match_threshold;
  public JobTag $job_tag;
  public NotificationChannel $notification_channel;
  public Video $video;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestToken,
  ?'collection_id' => CollectionId,
  ?'face_match_threshold' => Percent,
  ?'job_tag' => JobTag,
  ?'notification_channel' => NotificationChannel,
  ?'video' => Video,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? "";
    $this->collection_id = $collection_id ?? "";
    $this->face_match_threshold = $face_match_threshold ?? ;
    $this->job_tag = $job_tag ?? "";
    $this->notification_channel = $notification_channel ?? null;
    $this->video = $video ?? null;
  }
}

class StartFaceSearchResponse {
  public JobId $job_id;

  public function __construct(shape(
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
  }
}

class StartLabelDetectionRequest {
  public ClientRequestToken $client_request_token;
  public JobTag $job_tag;
  public Percent $min_confidence;
  public NotificationChannel $notification_channel;
  public Video $video;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestToken,
  ?'job_tag' => JobTag,
  ?'min_confidence' => Percent,
  ?'notification_channel' => NotificationChannel,
  ?'video' => Video,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? "";
    $this->job_tag = $job_tag ?? "";
    $this->min_confidence = $min_confidence ?? ;
    $this->notification_channel = $notification_channel ?? null;
    $this->video = $video ?? null;
  }
}

class StartLabelDetectionResponse {
  public JobId $job_id;

  public function __construct(shape(
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
  }
}

class StartPersonTrackingRequest {
  public ClientRequestToken $client_request_token;
  public JobTag $job_tag;
  public NotificationChannel $notification_channel;
  public Video $video;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestToken,
  ?'job_tag' => JobTag,
  ?'notification_channel' => NotificationChannel,
  ?'video' => Video,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? "";
    $this->job_tag = $job_tag ?? "";
    $this->notification_channel = $notification_channel ?? null;
    $this->video = $video ?? null;
  }
}

class StartPersonTrackingResponse {
  public JobId $job_id;

  public function __construct(shape(
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
  }
}

class StartProjectVersionRequest {
  public InferenceUnits $min_inference_units;
  public ProjectVersionArn $project_version_arn;

  public function __construct(shape(
  ?'min_inference_units' => InferenceUnits,
  ?'project_version_arn' => ProjectVersionArn,
  ) $s = shape()) {
    $this->min_inference_units = $min_inference_units ?? ;
    $this->project_version_arn = $project_version_arn ?? "";
  }
}

class StartProjectVersionResponse {
  public ProjectVersionStatus $status;

  public function __construct(shape(
  ?'status' => ProjectVersionStatus,
  ) $s = shape()) {
    $this->status = $status ?? ;
  }
}

class StartStreamProcessorRequest {
  public StreamProcessorName $name;

  public function __construct(shape(
  ?'name' => StreamProcessorName,
  ) $s = shape()) {
    $this->name = $name ?? ;
  }
}

class StartStreamProcessorResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class StartTextDetectionFilters {
  public RegionsOfInterest $regions_of_interest;
  public DetectionFilter $word_filter;

  public function __construct(shape(
  ?'regions_of_interest' => RegionsOfInterest,
  ?'word_filter' => DetectionFilter,
  ) $s = shape()) {
    $this->regions_of_interest = $regions_of_interest ?? [];
    $this->word_filter = $word_filter ?? ;
  }
}

class StartTextDetectionRequest {
  public ClientRequestToken $client_request_token;
  public StartTextDetectionFilters $filters;
  public JobTag $job_tag;
  public NotificationChannel $notification_channel;
  public Video $video;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestToken,
  ?'filters' => StartTextDetectionFilters,
  ?'job_tag' => JobTag,
  ?'notification_channel' => NotificationChannel,
  ?'video' => Video,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? "";
    $this->filters = $filters ?? ;
    $this->job_tag = $job_tag ?? "";
    $this->notification_channel = $notification_channel ?? null;
    $this->video = $video ?? null;
  }
}

class StartTextDetectionResponse {
  public JobId $job_id;

  public function __construct(shape(
  ?'job_id' => JobId,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
  }
}

type StatusMessage = string;

class StopProjectVersionRequest {
  public ProjectVersionArn $project_version_arn;

  public function __construct(shape(
  ?'project_version_arn' => ProjectVersionArn,
  ) $s = shape()) {
    $this->project_version_arn = $project_version_arn ?? "";
  }
}

class StopProjectVersionResponse {
  public ProjectVersionStatus $status;

  public function __construct(shape(
  ?'status' => ProjectVersionStatus,
  ) $s = shape()) {
    $this->status = $status ?? ;
  }
}

class StopStreamProcessorRequest {
  public StreamProcessorName $name;

  public function __construct(shape(
  ?'name' => StreamProcessorName,
  ) $s = shape()) {
    $this->name = $name ?? ;
  }
}

class StopStreamProcessorResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class StreamProcessor {
  public StreamProcessorName $name;
  public StreamProcessorStatus $status;

  public function __construct(shape(
  ?'name' => StreamProcessorName,
  ?'status' => StreamProcessorStatus,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->status = $status ?? ;
  }
}

type StreamProcessorArn = string;

class StreamProcessorInput {
  public KinesisVideoStream $kinesis_video_stream;

  public function __construct(shape(
  ?'kinesis_video_stream' => KinesisVideoStream,
  ) $s = shape()) {
    $this->kinesis_video_stream = $kinesis_video_stream ?? null;
  }
}

type StreamProcessorList = vec<StreamProcessor>;

type StreamProcessorName = string;

class StreamProcessorOutput {
  public KinesisDataStream $kinesis_data_stream;

  public function __construct(shape(
  ?'kinesis_data_stream' => KinesisDataStream,
  ) $s = shape()) {
    $this->kinesis_data_stream = $kinesis_data_stream ?? null;
  }
}

class StreamProcessorSettings {
  public FaceSearchSettings $face_search;

  public function __construct(shape(
  ?'face_search' => FaceSearchSettings,
  ) $s = shape()) {
    $this->face_search = $face_search ?? ;
  }
}

type StreamProcessorStatus = string;

type String = string;

class Summary {
  public S3Object $s_3_object;

  public function __construct(shape(
  ?'s_3_object' => S3Object,
  ) $s = shape()) {
    $this->s_3_object = $s_3_object ?? null;
  }
}

class Sunglasses {
  public Percent $confidence;
  public boolean $value;

  public function __construct(shape(
  ?'confidence' => Percent,
  ?'value' => boolean,
  ) $s = shape()) {
    $this->confidence = $confidence ?? ;
    $this->value = $value ?? ;
  }
}

class TestingData {
  public Assets $assets;
  public boolean $auto_create;

  public function __construct(shape(
  ?'assets' => Assets,
  ?'auto_create' => boolean,
  ) $s = shape()) {
    $this->assets = $assets ?? [];
    $this->auto_create = $auto_create ?? ;
  }
}

class TestingDataResult {
  public TestingData $input;
  public TestingData $output;

  public function __construct(shape(
  ?'input' => TestingData,
  ?'output' => TestingData,
  ) $s = shape()) {
    $this->input = $input ?? ;
    $this->output = $output ?? ;
  }
}

class TextDetection {
  public Percent $confidence;
  public string $detected_text;
  public Geometry $geometry;
  public UInteger $id;
  public UInteger $parent_id;
  public TextTypes $type;

  public function __construct(shape(
  ?'confidence' => Percent,
  ?'detected_text' => string,
  ?'geometry' => Geometry,
  ?'id' => UInteger,
  ?'parent_id' => UInteger,
  ?'type' => TextTypes,
  ) $s = shape()) {
    $this->confidence = $confidence ?? ;
    $this->detected_text = $detected_text ?? ;
    $this->geometry = $geometry ?? null;
    $this->id = $id ?? ;
    $this->parent_id = $parent_id ?? ;
    $this->type = $type ?? ;
  }
}

type TextDetectionList = vec<TextDetection>;

class TextDetectionResult {
  public TextDetection $text_detection;
  public Timestamp $timestamp;

  public function __construct(shape(
  ?'text_detection' => TextDetection,
  ?'timestamp' => Timestamp,
  ) $s = shape()) {
    $this->text_detection = $text_detection ?? null;
    $this->timestamp = $timestamp ?? 0;
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
  public Assets $assets;

  public function __construct(shape(
  ?'assets' => Assets,
  ) $s = shape()) {
    $this->assets = $assets ?? [];
  }
}

class TrainingDataResult {
  public TrainingData $input;
  public TrainingData $output;

  public function __construct(shape(
  ?'input' => TrainingData,
  ?'output' => TrainingData,
  ) $s = shape()) {
    $this->input = $input ?? ;
    $this->output = $output ?? ;
  }
}

type UInteger = int;

type ULong = int;

class UnindexedFace {
  public FaceDetail $face_detail;
  public Reasons $reasons;

  public function __construct(shape(
  ?'face_detail' => FaceDetail,
  ?'reasons' => Reasons,
  ) $s = shape()) {
    $this->face_detail = $face_detail ?? null;
    $this->reasons = $reasons ?? [];
  }
}

type UnindexedFaces = vec<UnindexedFace>;

type Url = string;

type Urls = vec<Url>;

type VersionName = string;

type VersionNames = vec<VersionName>;

class Video {
  public S3Object $s_3_object;

  public function __construct(shape(
  ?'s_3_object' => S3Object,
  ) $s = shape()) {
    $this->s_3_object = $s_3_object ?? null;
  }
}

type VideoJobStatus = string;

class VideoMetadata {
  public string $codec;
  public ULong $duration_millis;
  public string $format;
  public ULong $frame_height;
  public Float $frame_rate;
  public ULong $frame_width;

  public function __construct(shape(
  ?'codec' => string,
  ?'duration_millis' => ULong,
  ?'format' => string,
  ?'frame_height' => ULong,
  ?'frame_rate' => Float,
  ?'frame_width' => ULong,
  ) $s = shape()) {
    $this->codec = $codec ?? ;
    $this->duration_millis = $duration_millis ?? ;
    $this->format = $format ?? ;
    $this->frame_height = $frame_height ?? ;
    $this->frame_rate = $frame_rate ?? ;
    $this->frame_width = $frame_width ?? ;
  }
}

class VideoTooLargeException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

