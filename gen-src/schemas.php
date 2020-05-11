<?hh // strict
namespace slack\aws\schemas;

interface schemas {
  public function CreateDiscoverer(CreateDiscovererRequest): Awaitable<Errors\Result<CreateDiscovererResponse>>;
  public function CreateRegistry(CreateRegistryRequest): Awaitable<Errors\Result<CreateRegistryResponse>>;
  public function CreateSchema(CreateSchemaRequest): Awaitable<Errors\Result<CreateSchemaResponse>>;
  public function DeleteDiscoverer(DeleteDiscovererRequest): Awaitable<Errors\Error>;
  public function DeleteRegistry(DeleteRegistryRequest): Awaitable<Errors\Error>;
  public function DeleteSchema(DeleteSchemaRequest): Awaitable<Errors\Error>;
  public function DeleteSchemaVersion(DeleteSchemaVersionRequest): Awaitable<Errors\Error>;
  public function DescribeCodeBinding(DescribeCodeBindingRequest): Awaitable<Errors\Result<DescribeCodeBindingResponse>>;
  public function DescribeDiscoverer(DescribeDiscovererRequest): Awaitable<Errors\Result<DescribeDiscovererResponse>>;
  public function DescribeRegistry(DescribeRegistryRequest): Awaitable<Errors\Result<DescribeRegistryResponse>>;
  public function DescribeSchema(DescribeSchemaRequest): Awaitable<Errors\Result<DescribeSchemaResponse>>;
  public function GetCodeBindingSource(GetCodeBindingSourceRequest): Awaitable<Errors\Result<GetCodeBindingSourceResponse>>;
  public function GetDiscoveredSchema(GetDiscoveredSchemaRequest): Awaitable<Errors\Result<GetDiscoveredSchemaResponse>>;
  public function ListDiscoverers(ListDiscoverersRequest): Awaitable<Errors\Result<ListDiscoverersResponse>>;
  public function ListRegistries(ListRegistriesRequest): Awaitable<Errors\Result<ListRegistriesResponse>>;
  public function ListSchemaVersions(ListSchemaVersionsRequest): Awaitable<Errors\Result<ListSchemaVersionsResponse>>;
  public function ListSchemas(ListSchemasRequest): Awaitable<Errors\Result<ListSchemasResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function LockServiceLinkedRole(LockServiceLinkedRoleRequest): Awaitable<Errors\Result<LockServiceLinkedRoleResponse>>;
  public function PutCodeBinding(PutCodeBindingRequest): Awaitable<Errors\Result<PutCodeBindingResponse>>;
  public function SearchSchemas(SearchSchemasRequest): Awaitable<Errors\Result<SearchSchemasResponse>>;
  public function StartDiscoverer(StartDiscovererRequest): Awaitable<Errors\Result<StartDiscovererResponse>>;
  public function StopDiscoverer(StopDiscovererRequest): Awaitable<Errors\Result<StopDiscovererResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Error>;
  public function UnlockServiceLinkedRole(UnlockServiceLinkedRoleRequest): Awaitable<Errors\Result<UnlockServiceLinkedRoleResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Error>;
  public function UpdateDiscoverer(UpdateDiscovererRequest): Awaitable<Errors\Result<UpdateDiscovererResponse>>;
  public function UpdateRegistry(UpdateRegistryRequest): Awaitable<Errors\Result<UpdateRegistryResponse>>;
  public function UpdateSchema(UpdateSchemaRequest): Awaitable<Errors\Result<UpdateSchemaResponse>>;
}

class BadRequestException {
  public __string $code;
  public __string $message;

  public function __construct(shape(
  ?'code' => __string,
  ?'message' => __string,
  ) $s = shape()) {
    $this->code = $code ?? ;
    $this->message = $message ?? ;
  }
}

type Body = string;

class CodeBindingOutput {
  public __timestampIso8601 $creation_date;
  public __timestampIso8601 $last_modified;
  public __string $schema_version;
  public CodeGenerationStatus $status;

  public function __construct(shape(
  ?'creation_date' => __timestampIso8601,
  ?'last_modified' => __timestampIso8601,
  ?'schema_version' => __string,
  ?'status' => CodeGenerationStatus,
  ) $s = shape()) {
    $this->creation_date = $creation_date ?? ;
    $this->last_modified = $last_modified ?? ;
    $this->schema_version = $schema_version ?? ;
    $this->status = $status ?? ;
  }
}

type CodeGenerationStatus = string;

class ConflictException {
  public __string $code;
  public __string $message;

  public function __construct(shape(
  ?'code' => __string,
  ?'message' => __string,
  ) $s = shape()) {
    $this->code = $code ?? ;
    $this->message = $message ?? ;
  }
}

class CreateDiscovererInput {
  public __stringMin0Max256 $description;
  public __stringMin20Max1600 $source_arn;
  public Tags $tags;

  public function __construct(shape(
  ?'description' => __stringMin0Max256,
  ?'source_arn' => __stringMin20Max1600,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->source_arn = $source_arn ?? ;
    $this->tags = $tags ?? [];
  }
}

class CreateDiscovererRequest {
  public __stringMin0Max256 $description;
  public __stringMin20Max1600 $source_arn;
  public Tags $tags;

  public function __construct(shape(
  ?'description' => __stringMin0Max256,
  ?'source_arn' => __stringMin20Max1600,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->source_arn = $source_arn ?? ;
    $this->tags = $tags ?? [];
  }
}

class CreateDiscovererResponse {
  public __string $description;
  public __string $discoverer_arn;
  public __string $discoverer_id;
  public __string $source_arn;
  public DiscovererState $state;
  public Tags $tags;

  public function __construct(shape(
  ?'description' => __string,
  ?'discoverer_arn' => __string,
  ?'discoverer_id' => __string,
  ?'source_arn' => __string,
  ?'state' => DiscovererState,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->discoverer_arn = $discoverer_arn ?? ;
    $this->discoverer_id = $discoverer_id ?? ;
    $this->source_arn = $source_arn ?? ;
    $this->state = $state ?? ;
    $this->tags = $tags ?? [];
  }
}

class CreateRegistryInput {
  public __stringMin0Max256 $description;
  public Tags $tags;

  public function __construct(shape(
  ?'description' => __stringMin0Max256,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->tags = $tags ?? [];
  }
}

class CreateRegistryRequest {
  public __stringMin0Max256 $description;
  public __string $registry_name;
  public Tags $tags;

  public function __construct(shape(
  ?'description' => __stringMin0Max256,
  ?'registry_name' => __string,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->registry_name = $registry_name ?? ;
    $this->tags = $tags ?? [];
  }
}

class CreateRegistryResponse {
  public __string $description;
  public __string $registry_arn;
  public __string $registry_name;
  public Tags $tags;

  public function __construct(shape(
  ?'description' => __string,
  ?'registry_arn' => __string,
  ?'registry_name' => __string,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->registry_arn = $registry_arn ?? ;
    $this->registry_name = $registry_name ?? ;
    $this->tags = $tags ?? [];
  }
}

class CreateSchemaInput {
  public __stringMin1Max100000 $content;
  public __stringMin0Max256 $description;
  public Tags $tags;
  public Type $type;

  public function __construct(shape(
  ?'content' => __stringMin1Max100000,
  ?'description' => __stringMin0Max256,
  ?'tags' => Tags,
  ?'type' => Type,
  ) $s = shape()) {
    $this->content = $content ?? ;
    $this->description = $description ?? ;
    $this->tags = $tags ?? [];
    $this->type = $type ?? "";
  }
}

class CreateSchemaRequest {
  public __stringMin1Max100000 $content;
  public __stringMin0Max256 $description;
  public __string $registry_name;
  public __string $schema_name;
  public Tags $tags;
  public Type $type;

  public function __construct(shape(
  ?'content' => __stringMin1Max100000,
  ?'description' => __stringMin0Max256,
  ?'registry_name' => __string,
  ?'schema_name' => __string,
  ?'tags' => Tags,
  ?'type' => Type,
  ) $s = shape()) {
    $this->content = $content ?? ;
    $this->description = $description ?? ;
    $this->registry_name = $registry_name ?? ;
    $this->schema_name = $schema_name ?? ;
    $this->tags = $tags ?? [];
    $this->type = $type ?? "";
  }
}

class CreateSchemaResponse {
  public __string $description;
  public __timestampIso8601 $last_modified;
  public __string $schema_arn;
  public __string $schema_name;
  public __string $schema_version;
  public Tags $tags;
  public __string $type;
  public __timestampIso8601 $version_created_date;

  public function __construct(shape(
  ?'description' => __string,
  ?'last_modified' => __timestampIso8601,
  ?'schema_arn' => __string,
  ?'schema_name' => __string,
  ?'schema_version' => __string,
  ?'tags' => Tags,
  ?'type' => __string,
  ?'version_created_date' => __timestampIso8601,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->last_modified = $last_modified ?? ;
    $this->schema_arn = $schema_arn ?? ;
    $this->schema_name = $schema_name ?? ;
    $this->schema_version = $schema_version ?? ;
    $this->tags = $tags ?? [];
    $this->type = $type ?? "";
    $this->version_created_date = $version_created_date ?? ;
  }
}

class DeleteDiscovererRequest {
  public __string $discoverer_id;

  public function __construct(shape(
  ?'discoverer_id' => __string,
  ) $s = shape()) {
    $this->discoverer_id = $discoverer_id ?? ;
  }
}

class DeleteRegistryRequest {
  public __string $registry_name;

  public function __construct(shape(
  ?'registry_name' => __string,
  ) $s = shape()) {
    $this->registry_name = $registry_name ?? ;
  }
}

class DeleteSchemaRequest {
  public __string $registry_name;
  public __string $schema_name;

  public function __construct(shape(
  ?'registry_name' => __string,
  ?'schema_name' => __string,
  ) $s = shape()) {
    $this->registry_name = $registry_name ?? ;
    $this->schema_name = $schema_name ?? ;
  }
}

class DeleteSchemaVersionRequest {
  public __string $registry_name;
  public __string $schema_name;
  public __string $schema_version;

  public function __construct(shape(
  ?'registry_name' => __string,
  ?'schema_name' => __string,
  ?'schema_version' => __string,
  ) $s = shape()) {
    $this->registry_name = $registry_name ?? ;
    $this->schema_name = $schema_name ?? ;
    $this->schema_version = $schema_version ?? ;
  }
}

class DescribeCodeBindingRequest {
  public __string $language;
  public __string $registry_name;
  public __string $schema_name;
  public __string $schema_version;

  public function __construct(shape(
  ?'language' => __string,
  ?'registry_name' => __string,
  ?'schema_name' => __string,
  ?'schema_version' => __string,
  ) $s = shape()) {
    $this->language = $language ?? ;
    $this->registry_name = $registry_name ?? ;
    $this->schema_name = $schema_name ?? ;
    $this->schema_version = $schema_version ?? ;
  }
}

class DescribeCodeBindingResponse {
  public __timestampIso8601 $creation_date;
  public __timestampIso8601 $last_modified;
  public __string $schema_version;
  public CodeGenerationStatus $status;

  public function __construct(shape(
  ?'creation_date' => __timestampIso8601,
  ?'last_modified' => __timestampIso8601,
  ?'schema_version' => __string,
  ?'status' => CodeGenerationStatus,
  ) $s = shape()) {
    $this->creation_date = $creation_date ?? ;
    $this->last_modified = $last_modified ?? ;
    $this->schema_version = $schema_version ?? ;
    $this->status = $status ?? ;
  }
}

class DescribeDiscovererRequest {
  public __string $discoverer_id;

  public function __construct(shape(
  ?'discoverer_id' => __string,
  ) $s = shape()) {
    $this->discoverer_id = $discoverer_id ?? ;
  }
}

class DescribeDiscovererResponse {
  public __string $description;
  public __string $discoverer_arn;
  public __string $discoverer_id;
  public __string $source_arn;
  public DiscovererState $state;
  public Tags $tags;

  public function __construct(shape(
  ?'description' => __string,
  ?'discoverer_arn' => __string,
  ?'discoverer_id' => __string,
  ?'source_arn' => __string,
  ?'state' => DiscovererState,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->discoverer_arn = $discoverer_arn ?? ;
    $this->discoverer_id = $discoverer_id ?? ;
    $this->source_arn = $source_arn ?? ;
    $this->state = $state ?? ;
    $this->tags = $tags ?? [];
  }
}

class DescribeRegistryRequest {
  public __string $registry_name;

  public function __construct(shape(
  ?'registry_name' => __string,
  ) $s = shape()) {
    $this->registry_name = $registry_name ?? ;
  }
}

class DescribeRegistryResponse {
  public __string $description;
  public __string $registry_arn;
  public __string $registry_name;
  public Tags $tags;

  public function __construct(shape(
  ?'description' => __string,
  ?'registry_arn' => __string,
  ?'registry_name' => __string,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->registry_arn = $registry_arn ?? ;
    $this->registry_name = $registry_name ?? ;
    $this->tags = $tags ?? [];
  }
}

class DescribeSchemaOutput {
  public __string $content;
  public __string $description;
  public __timestampIso8601 $last_modified;
  public __string $schema_arn;
  public __string $schema_name;
  public __string $schema_version;
  public Tags $tags;
  public __string $type;
  public __timestampIso8601 $version_created_date;

  public function __construct(shape(
  ?'content' => __string,
  ?'description' => __string,
  ?'last_modified' => __timestampIso8601,
  ?'schema_arn' => __string,
  ?'schema_name' => __string,
  ?'schema_version' => __string,
  ?'tags' => Tags,
  ?'type' => __string,
  ?'version_created_date' => __timestampIso8601,
  ) $s = shape()) {
    $this->content = $content ?? ;
    $this->description = $description ?? ;
    $this->last_modified = $last_modified ?? ;
    $this->schema_arn = $schema_arn ?? ;
    $this->schema_name = $schema_name ?? ;
    $this->schema_version = $schema_version ?? ;
    $this->tags = $tags ?? [];
    $this->type = $type ?? "";
    $this->version_created_date = $version_created_date ?? ;
  }
}

class DescribeSchemaRequest {
  public __string $registry_name;
  public __string $schema_name;
  public __string $schema_version;

  public function __construct(shape(
  ?'registry_name' => __string,
  ?'schema_name' => __string,
  ?'schema_version' => __string,
  ) $s = shape()) {
    $this->registry_name = $registry_name ?? ;
    $this->schema_name = $schema_name ?? ;
    $this->schema_version = $schema_version ?? ;
  }
}

class DescribeSchemaResponse {
  public __string $content;
  public __string $description;
  public __timestampIso8601 $last_modified;
  public __string $schema_arn;
  public __string $schema_name;
  public __string $schema_version;
  public Tags $tags;
  public __string $type;
  public __timestampIso8601 $version_created_date;

  public function __construct(shape(
  ?'content' => __string,
  ?'description' => __string,
  ?'last_modified' => __timestampIso8601,
  ?'schema_arn' => __string,
  ?'schema_name' => __string,
  ?'schema_version' => __string,
  ?'tags' => Tags,
  ?'type' => __string,
  ?'version_created_date' => __timestampIso8601,
  ) $s = shape()) {
    $this->content = $content ?? ;
    $this->description = $description ?? ;
    $this->last_modified = $last_modified ?? ;
    $this->schema_arn = $schema_arn ?? ;
    $this->schema_name = $schema_name ?? ;
    $this->schema_version = $schema_version ?? ;
    $this->tags = $tags ?? [];
    $this->type = $type ?? "";
    $this->version_created_date = $version_created_date ?? ;
  }
}

class DiscovererOutput {
  public __string $description;
  public __string $discoverer_arn;
  public __string $discoverer_id;
  public __string $source_arn;
  public DiscovererState $state;
  public Tags $tags;

  public function __construct(shape(
  ?'description' => __string,
  ?'discoverer_arn' => __string,
  ?'discoverer_id' => __string,
  ?'source_arn' => __string,
  ?'state' => DiscovererState,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->discoverer_arn = $discoverer_arn ?? ;
    $this->discoverer_id = $discoverer_id ?? ;
    $this->source_arn = $source_arn ?? ;
    $this->state = $state ?? ;
    $this->tags = $tags ?? [];
  }
}

type DiscovererState = string;

class DiscovererStateOutput {
  public __string $discoverer_id;
  public DiscovererState $state;

  public function __construct(shape(
  ?'discoverer_id' => __string,
  ?'state' => DiscovererState,
  ) $s = shape()) {
    $this->discoverer_id = $discoverer_id ?? ;
    $this->state = $state ?? ;
  }
}

class DiscovererSummary {
  public __string $discoverer_arn;
  public __string $discoverer_id;
  public __string $source_arn;
  public DiscovererState $state;
  public Tags $tags;

  public function __construct(shape(
  ?'discoverer_arn' => __string,
  ?'discoverer_id' => __string,
  ?'source_arn' => __string,
  ?'state' => DiscovererState,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->discoverer_arn = $discoverer_arn ?? ;
    $this->discoverer_id = $discoverer_id ?? ;
    $this->source_arn = $source_arn ?? ;
    $this->state = $state ?? ;
    $this->tags = $tags ?? [];
  }
}

class ErrorOutput {
  public __string $code;
  public __string $message;

  public function __construct(shape(
  ?'code' => __string,
  ?'message' => __string,
  ) $s = shape()) {
    $this->code = $code ?? ;
    $this->message = $message ?? ;
  }
}

class ForbiddenException {
  public __string $code;
  public __string $message;

  public function __construct(shape(
  ?'code' => __string,
  ?'message' => __string,
  ) $s = shape()) {
    $this->code = $code ?? ;
    $this->message = $message ?? ;
  }
}

type GetCodeBindingSourceOutput = string;

class GetCodeBindingSourceRequest {
  public __string $language;
  public __string $registry_name;
  public __string $schema_name;
  public __string $schema_version;

  public function __construct(shape(
  ?'language' => __string,
  ?'registry_name' => __string,
  ?'schema_name' => __string,
  ?'schema_version' => __string,
  ) $s = shape()) {
    $this->language = $language ?? ;
    $this->registry_name = $registry_name ?? ;
    $this->schema_name = $schema_name ?? ;
    $this->schema_version = $schema_version ?? ;
  }
}

class GetCodeBindingSourceResponse {
  public Body $body;

  public function __construct(shape(
  ?'body' => Body,
  ) $s = shape()) {
    $this->body = $body ?? "";
  }
}

class GetDiscoveredSchemaInput {
  public __listOfGetDiscoveredSchemaVersionItemInput $events;
  public Type $type;

  public function __construct(shape(
  ?'events' => __listOfGetDiscoveredSchemaVersionItemInput,
  ?'type' => Type,
  ) $s = shape()) {
    $this->events = $events ?? ;
    $this->type = $type ?? "";
  }
}

class GetDiscoveredSchemaOutput {
  public __string $content;

  public function __construct(shape(
  ?'content' => __string,
  ) $s = shape()) {
    $this->content = $content ?? ;
  }
}

class GetDiscoveredSchemaRequest {
  public __listOfGetDiscoveredSchemaVersionItemInput $events;
  public Type $type;

  public function __construct(shape(
  ?'events' => __listOfGetDiscoveredSchemaVersionItemInput,
  ?'type' => Type,
  ) $s = shape()) {
    $this->events = $events ?? ;
    $this->type = $type ?? "";
  }
}

class GetDiscoveredSchemaResponse {
  public __string $content;

  public function __construct(shape(
  ?'content' => __string,
  ) $s = shape()) {
    $this->content = $content ?? ;
  }
}

type GetDiscoveredSchemaVersionItemInput = string;

class GoneException {
  public __string $code;
  public __string $message;

  public function __construct(shape(
  ?'code' => __string,
  ?'message' => __string,
  ) $s = shape()) {
    $this->code = $code ?? ;
    $this->message = $message ?? ;
  }
}

class InternalServerErrorException {
  public __string $code;
  public __string $message;

  public function __construct(shape(
  ?'code' => __string,
  ?'message' => __string,
  ) $s = shape()) {
    $this->code = $code ?? ;
    $this->message = $message ?? ;
  }
}

type Limit = int;

class ListDiscoverersOutput {
  public __listOfDiscovererSummary $discoverers;
  public __string $next_token;

  public function __construct(shape(
  ?'discoverers' => __listOfDiscovererSummary,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->discoverers = $discoverers ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListDiscoverersRequest {
  public __string $discoverer_id_prefix;
  public __integer $limit;
  public __string $next_token;
  public __string $source_arn_prefix;

  public function __construct(shape(
  ?'discoverer_id_prefix' => __string,
  ?'limit' => __integer,
  ?'next_token' => __string,
  ?'source_arn_prefix' => __string,
  ) $s = shape()) {
    $this->discoverer_id_prefix = $discoverer_id_prefix ?? ;
    $this->limit = $limit ?? 0;
    $this->next_token = $next_token ?? ;
    $this->source_arn_prefix = $source_arn_prefix ?? ;
  }
}

class ListDiscoverersResponse {
  public __listOfDiscovererSummary $discoverers;
  public __string $next_token;

  public function __construct(shape(
  ?'discoverers' => __listOfDiscovererSummary,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->discoverers = $discoverers ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListRegistriesOutput {
  public __string $next_token;
  public __listOfRegistrySummary $registries;

  public function __construct(shape(
  ?'next_token' => __string,
  ?'registries' => __listOfRegistrySummary,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->registries = $registries ?? ;
  }
}

class ListRegistriesRequest {
  public __integer $limit;
  public __string $next_token;
  public __string $registry_name_prefix;
  public __string $scope;

  public function __construct(shape(
  ?'limit' => __integer,
  ?'next_token' => __string,
  ?'registry_name_prefix' => __string,
  ?'scope' => __string,
  ) $s = shape()) {
    $this->limit = $limit ?? 0;
    $this->next_token = $next_token ?? ;
    $this->registry_name_prefix = $registry_name_prefix ?? ;
    $this->scope = $scope ?? ;
  }
}

class ListRegistriesResponse {
  public __string $next_token;
  public __listOfRegistrySummary $registries;

  public function __construct(shape(
  ?'next_token' => __string,
  ?'registries' => __listOfRegistrySummary,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->registries = $registries ?? ;
  }
}

class ListSchemaVersionsOutput {
  public __string $next_token;
  public __listOfSchemaVersionSummary $schema_versions;

  public function __construct(shape(
  ?'next_token' => __string,
  ?'schema_versions' => __listOfSchemaVersionSummary,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->schema_versions = $schema_versions ?? ;
  }
}

class ListSchemaVersionsRequest {
  public __integer $limit;
  public __string $next_token;
  public __string $registry_name;
  public __string $schema_name;

  public function __construct(shape(
  ?'limit' => __integer,
  ?'next_token' => __string,
  ?'registry_name' => __string,
  ?'schema_name' => __string,
  ) $s = shape()) {
    $this->limit = $limit ?? 0;
    $this->next_token = $next_token ?? ;
    $this->registry_name = $registry_name ?? ;
    $this->schema_name = $schema_name ?? ;
  }
}

class ListSchemaVersionsResponse {
  public __string $next_token;
  public __listOfSchemaVersionSummary $schema_versions;

  public function __construct(shape(
  ?'next_token' => __string,
  ?'schema_versions' => __listOfSchemaVersionSummary,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->schema_versions = $schema_versions ?? ;
  }
}

class ListSchemasOutput {
  public __string $next_token;
  public __listOfSchemaSummary $schemas;

  public function __construct(shape(
  ?'next_token' => __string,
  ?'schemas' => __listOfSchemaSummary,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->schemas = $schemas ?? ;
  }
}

class ListSchemasRequest {
  public __integer $limit;
  public __string $next_token;
  public __string $registry_name;
  public __string $schema_name_prefix;

  public function __construct(shape(
  ?'limit' => __integer,
  ?'next_token' => __string,
  ?'registry_name' => __string,
  ?'schema_name_prefix' => __string,
  ) $s = shape()) {
    $this->limit = $limit ?? 0;
    $this->next_token = $next_token ?? ;
    $this->registry_name = $registry_name ?? ;
    $this->schema_name_prefix = $schema_name_prefix ?? ;
  }
}

class ListSchemasResponse {
  public __string $next_token;
  public __listOfSchemaSummary $schemas;

  public function __construct(shape(
  ?'next_token' => __string,
  ?'schemas' => __listOfSchemaSummary,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->schemas = $schemas ?? ;
  }
}

class ListTagsForResourceRequest {
  public __string $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => __string,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
  }
}

class ListTagsForResourceResponse {
  public Tags $tags;

  public function __construct(shape(
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
  }
}

class LockServiceLinkedRoleInput {
  public __stringMin1Max1600 $role_arn;
  public __integerMin1Max29000 $timeout;

  public function __construct(shape(
  ?'role_arn' => __stringMin1Max1600,
  ?'timeout' => __integerMin1Max29000,
  ) $s = shape()) {
    $this->role_arn = $role_arn ?? ;
    $this->timeout = $timeout ?? ;
  }
}

class LockServiceLinkedRoleOutput {
  public __boolean $can_be_deleted;
  public __stringMin1Max1600 $reason_of_failure;
  public __listOfDiscovererSummary $related_resources;

  public function __construct(shape(
  ?'can_be_deleted' => __boolean,
  ?'reason_of_failure' => __stringMin1Max1600,
  ?'related_resources' => __listOfDiscovererSummary,
  ) $s = shape()) {
    $this->can_be_deleted = $can_be_deleted ?? ;
    $this->reason_of_failure = $reason_of_failure ?? ;
    $this->related_resources = $related_resources ?? ;
  }
}

class LockServiceLinkedRoleRequest {
  public __stringMin1Max1600 $role_arn;
  public __integerMin1Max29000 $timeout;

  public function __construct(shape(
  ?'role_arn' => __stringMin1Max1600,
  ?'timeout' => __integerMin1Max29000,
  ) $s = shape()) {
    $this->role_arn = $role_arn ?? ;
    $this->timeout = $timeout ?? ;
  }
}

class LockServiceLinkedRoleResponse {
  public __boolean $can_be_deleted;
  public __stringMin1Max1600 $reason_of_failure;
  public __listOfDiscovererSummary $related_resources;

  public function __construct(shape(
  ?'can_be_deleted' => __boolean,
  ?'reason_of_failure' => __stringMin1Max1600,
  ?'related_resources' => __listOfDiscovererSummary,
  ) $s = shape()) {
    $this->can_be_deleted = $can_be_deleted ?? ;
    $this->reason_of_failure = $reason_of_failure ?? ;
    $this->related_resources = $related_resources ?? ;
  }
}

class NotFoundException {
  public __string $code;
  public __string $message;

  public function __construct(shape(
  ?'code' => __string,
  ?'message' => __string,
  ) $s = shape()) {
    $this->code = $code ?? ;
    $this->message = $message ?? ;
  }
}

class PutCodeBindingRequest {
  public __string $language;
  public __string $registry_name;
  public __string $schema_name;
  public __string $schema_version;

  public function __construct(shape(
  ?'language' => __string,
  ?'registry_name' => __string,
  ?'schema_name' => __string,
  ?'schema_version' => __string,
  ) $s = shape()) {
    $this->language = $language ?? ;
    $this->registry_name = $registry_name ?? ;
    $this->schema_name = $schema_name ?? ;
    $this->schema_version = $schema_version ?? ;
  }
}

class PutCodeBindingResponse {
  public __timestampIso8601 $creation_date;
  public __timestampIso8601 $last_modified;
  public __string $schema_version;
  public CodeGenerationStatus $status;

  public function __construct(shape(
  ?'creation_date' => __timestampIso8601,
  ?'last_modified' => __timestampIso8601,
  ?'schema_version' => __string,
  ?'status' => CodeGenerationStatus,
  ) $s = shape()) {
    $this->creation_date = $creation_date ?? ;
    $this->last_modified = $last_modified ?? ;
    $this->schema_version = $schema_version ?? ;
    $this->status = $status ?? ;
  }
}

class RegistryOutput {
  public __string $description;
  public __string $registry_arn;
  public __string $registry_name;
  public Tags $tags;

  public function __construct(shape(
  ?'description' => __string,
  ?'registry_arn' => __string,
  ?'registry_name' => __string,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->registry_arn = $registry_arn ?? ;
    $this->registry_name = $registry_name ?? ;
    $this->tags = $tags ?? [];
  }
}

class RegistrySummary {
  public __string $registry_arn;
  public __string $registry_name;
  public Tags $tags;

  public function __construct(shape(
  ?'registry_arn' => __string,
  ?'registry_name' => __string,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->registry_arn = $registry_arn ?? ;
    $this->registry_name = $registry_name ?? ;
    $this->tags = $tags ?? [];
  }
}

class SchemaOutput {
  public __string $description;
  public __timestampIso8601 $last_modified;
  public __string $schema_arn;
  public __string $schema_name;
  public __string $schema_version;
  public Tags $tags;
  public __string $type;
  public __timestampIso8601 $version_created_date;

  public function __construct(shape(
  ?'description' => __string,
  ?'last_modified' => __timestampIso8601,
  ?'schema_arn' => __string,
  ?'schema_name' => __string,
  ?'schema_version' => __string,
  ?'tags' => Tags,
  ?'type' => __string,
  ?'version_created_date' => __timestampIso8601,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->last_modified = $last_modified ?? ;
    $this->schema_arn = $schema_arn ?? ;
    $this->schema_name = $schema_name ?? ;
    $this->schema_version = $schema_version ?? ;
    $this->tags = $tags ?? [];
    $this->type = $type ?? "";
    $this->version_created_date = $version_created_date ?? ;
  }
}

class SchemaSummary {
  public __timestampIso8601 $last_modified;
  public __string $schema_arn;
  public __string $schema_name;
  public Tags $tags;
  public __long $version_count;

  public function __construct(shape(
  ?'last_modified' => __timestampIso8601,
  ?'schema_arn' => __string,
  ?'schema_name' => __string,
  ?'tags' => Tags,
  ?'version_count' => __long,
  ) $s = shape()) {
    $this->last_modified = $last_modified ?? ;
    $this->schema_arn = $schema_arn ?? ;
    $this->schema_name = $schema_name ?? ;
    $this->tags = $tags ?? [];
    $this->version_count = $version_count ?? ;
  }
}

class SchemaVersionSummary {
  public __string $schema_arn;
  public __string $schema_name;
  public __string $schema_version;

  public function __construct(shape(
  ?'schema_arn' => __string,
  ?'schema_name' => __string,
  ?'schema_version' => __string,
  ) $s = shape()) {
    $this->schema_arn = $schema_arn ?? ;
    $this->schema_name = $schema_name ?? ;
    $this->schema_version = $schema_version ?? ;
  }
}

class SearchSchemaSummary {
  public __string $registry_name;
  public __string $schema_arn;
  public __string $schema_name;
  public __listOfSearchSchemaVersionSummary $schema_versions;

  public function __construct(shape(
  ?'registry_name' => __string,
  ?'schema_arn' => __string,
  ?'schema_name' => __string,
  ?'schema_versions' => __listOfSearchSchemaVersionSummary,
  ) $s = shape()) {
    $this->registry_name = $registry_name ?? ;
    $this->schema_arn = $schema_arn ?? ;
    $this->schema_name = $schema_name ?? ;
    $this->schema_versions = $schema_versions ?? ;
  }
}

class SearchSchemaVersionSummary {
  public __timestampIso8601 $created_date;
  public __string $schema_version;

  public function __construct(shape(
  ?'created_date' => __timestampIso8601,
  ?'schema_version' => __string,
  ) $s = shape()) {
    $this->created_date = $created_date ?? ;
    $this->schema_version = $schema_version ?? ;
  }
}

class SearchSchemasOutput {
  public __string $next_token;
  public __listOfSearchSchemaSummary $schemas;

  public function __construct(shape(
  ?'next_token' => __string,
  ?'schemas' => __listOfSearchSchemaSummary,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->schemas = $schemas ?? ;
  }
}

class SearchSchemasRequest {
  public __string $keywords;
  public __integer $limit;
  public __string $next_token;
  public __string $registry_name;

  public function __construct(shape(
  ?'keywords' => __string,
  ?'limit' => __integer,
  ?'next_token' => __string,
  ?'registry_name' => __string,
  ) $s = shape()) {
    $this->keywords = $keywords ?? ;
    $this->limit = $limit ?? 0;
    $this->next_token = $next_token ?? ;
    $this->registry_name = $registry_name ?? ;
  }
}

class SearchSchemasResponse {
  public __string $next_token;
  public __listOfSearchSchemaSummary $schemas;

  public function __construct(shape(
  ?'next_token' => __string,
  ?'schemas' => __listOfSearchSchemaSummary,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->schemas = $schemas ?? ;
  }
}

class ServiceUnavailableException {
  public __string $code;
  public __string $message;

  public function __construct(shape(
  ?'code' => __string,
  ?'message' => __string,
  ) $s = shape()) {
    $this->code = $code ?? ;
    $this->message = $message ?? ;
  }
}

class StartDiscovererRequest {
  public __string $discoverer_id;

  public function __construct(shape(
  ?'discoverer_id' => __string,
  ) $s = shape()) {
    $this->discoverer_id = $discoverer_id ?? ;
  }
}

class StartDiscovererResponse {
  public __string $discoverer_id;
  public DiscovererState $state;

  public function __construct(shape(
  ?'discoverer_id' => __string,
  ?'state' => DiscovererState,
  ) $s = shape()) {
    $this->discoverer_id = $discoverer_id ?? ;
    $this->state = $state ?? ;
  }
}

class StopDiscovererRequest {
  public __string $discoverer_id;

  public function __construct(shape(
  ?'discoverer_id' => __string,
  ) $s = shape()) {
    $this->discoverer_id = $discoverer_id ?? ;
  }
}

class StopDiscovererResponse {
  public __string $discoverer_id;
  public DiscovererState $state;

  public function __construct(shape(
  ?'discoverer_id' => __string,
  ?'state' => DiscovererState,
  ) $s = shape()) {
    $this->discoverer_id = $discoverer_id ?? ;
    $this->state = $state ?? ;
  }
}

class TagResourceInput {
  public Tags $tags;

  public function __construct(shape(
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
  }
}

class TagResourceRequest {
  public __string $resource_arn;
  public Tags $tags;

  public function __construct(shape(
  ?'resource_arn' => __string,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
    $this->tags = $tags ?? [];
  }
}

type Tags = dict<__string, __string>;

class TooManyRequestsException {
  public __string $code;
  public __string $message;

  public function __construct(shape(
  ?'code' => __string,
  ?'message' => __string,
  ) $s = shape()) {
    $this->code = $code ?? ;
    $this->message = $message ?? ;
  }
}

type Type = string;

class UnauthorizedException {
  public __string $code;
  public __string $message;

  public function __construct(shape(
  ?'code' => __string,
  ?'message' => __string,
  ) $s = shape()) {
    $this->code = $code ?? ;
    $this->message = $message ?? ;
  }
}

class UnlockServiceLinkedRoleInput {
  public __stringMin1Max1600 $role_arn;

  public function __construct(shape(
  ?'role_arn' => __stringMin1Max1600,
  ) $s = shape()) {
    $this->role_arn = $role_arn ?? ;
  }
}

class UnlockServiceLinkedRoleRequest {
  public __stringMin1Max1600 $role_arn;

  public function __construct(shape(
  ?'role_arn' => __stringMin1Max1600,
  ) $s = shape()) {
    $this->role_arn = $role_arn ?? ;
  }
}

class UnlockServiceLinkedRoleResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UntagResourceRequest {
  public __string $resource_arn;
  public __listOf__string $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => __string,
  ?'tag_keys' => __listOf__string,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
    $this->tag_keys = $tag_keys ?? ;
  }
}

class UpdateDiscovererInput {
  public __stringMin0Max256 $description;

  public function __construct(shape(
  ?'description' => __stringMin0Max256,
  ) $s = shape()) {
    $this->description = $description ?? ;
  }
}

class UpdateDiscovererRequest {
  public __stringMin0Max256 $description;
  public __string $discoverer_id;

  public function __construct(shape(
  ?'description' => __stringMin0Max256,
  ?'discoverer_id' => __string,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->discoverer_id = $discoverer_id ?? ;
  }
}

class UpdateDiscovererResponse {
  public __string $description;
  public __string $discoverer_arn;
  public __string $discoverer_id;
  public __string $source_arn;
  public DiscovererState $state;
  public Tags $tags;

  public function __construct(shape(
  ?'description' => __string,
  ?'discoverer_arn' => __string,
  ?'discoverer_id' => __string,
  ?'source_arn' => __string,
  ?'state' => DiscovererState,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->discoverer_arn = $discoverer_arn ?? ;
    $this->discoverer_id = $discoverer_id ?? ;
    $this->source_arn = $source_arn ?? ;
    $this->state = $state ?? ;
    $this->tags = $tags ?? [];
  }
}

class UpdateRegistryInput {
  public __stringMin0Max256 $description;

  public function __construct(shape(
  ?'description' => __stringMin0Max256,
  ) $s = shape()) {
    $this->description = $description ?? ;
  }
}

class UpdateRegistryRequest {
  public __stringMin0Max256 $description;
  public __string $registry_name;

  public function __construct(shape(
  ?'description' => __stringMin0Max256,
  ?'registry_name' => __string,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->registry_name = $registry_name ?? ;
  }
}

class UpdateRegistryResponse {
  public __string $description;
  public __string $registry_arn;
  public __string $registry_name;
  public Tags $tags;

  public function __construct(shape(
  ?'description' => __string,
  ?'registry_arn' => __string,
  ?'registry_name' => __string,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->registry_arn = $registry_arn ?? ;
    $this->registry_name = $registry_name ?? ;
    $this->tags = $tags ?? [];
  }
}

class UpdateSchemaInput {
  public __stringMin0Max36 $client_token_id;
  public __stringMin1Max100000 $content;
  public __stringMin0Max256 $description;
  public Type $type;

  public function __construct(shape(
  ?'client_token_id' => __stringMin0Max36,
  ?'content' => __stringMin1Max100000,
  ?'description' => __stringMin0Max256,
  ?'type' => Type,
  ) $s = shape()) {
    $this->client_token_id = $client_token_id ?? ;
    $this->content = $content ?? ;
    $this->description = $description ?? ;
    $this->type = $type ?? "";
  }
}

class UpdateSchemaRequest {
  public __stringMin0Max36 $client_token_id;
  public __stringMin1Max100000 $content;
  public __stringMin0Max256 $description;
  public __string $registry_name;
  public __string $schema_name;
  public Type $type;

  public function __construct(shape(
  ?'client_token_id' => __stringMin0Max36,
  ?'content' => __stringMin1Max100000,
  ?'description' => __stringMin0Max256,
  ?'registry_name' => __string,
  ?'schema_name' => __string,
  ?'type' => Type,
  ) $s = shape()) {
    $this->client_token_id = $client_token_id ?? ;
    $this->content = $content ?? ;
    $this->description = $description ?? ;
    $this->registry_name = $registry_name ?? ;
    $this->schema_name = $schema_name ?? ;
    $this->type = $type ?? "";
  }
}

class UpdateSchemaResponse {
  public __string $description;
  public __timestampIso8601 $last_modified;
  public __string $schema_arn;
  public __string $schema_name;
  public __string $schema_version;
  public Tags $tags;
  public __string $type;
  public __timestampIso8601 $version_created_date;

  public function __construct(shape(
  ?'description' => __string,
  ?'last_modified' => __timestampIso8601,
  ?'schema_arn' => __string,
  ?'schema_name' => __string,
  ?'schema_version' => __string,
  ?'tags' => Tags,
  ?'type' => __string,
  ?'version_created_date' => __timestampIso8601,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->last_modified = $last_modified ?? ;
    $this->schema_arn = $schema_arn ?? ;
    $this->schema_name = $schema_name ?? ;
    $this->schema_version = $schema_version ?? ;
    $this->tags = $tags ?? [];
    $this->type = $type ?? "";
    $this->version_created_date = $version_created_date ?? ;
  }
}

type __boolean = bool;

type __double = float;

type __integer = int;

type __integerMin1Max29000 = int;

type __listOfDiscovererSummary = vec<DiscovererSummary>;

type __listOfGetDiscoveredSchemaVersionItemInput = vec<GetDiscoveredSchemaVersionItemInput>;

type __listOfRegistrySummary = vec<RegistrySummary>;

type __listOfSchemaSummary = vec<SchemaSummary>;

type __listOfSchemaVersionSummary = vec<SchemaVersionSummary>;

type __listOfSearchSchemaSummary = vec<SearchSchemaSummary>;

type __listOfSearchSchemaVersionSummary = vec<SearchSchemaVersionSummary>;

type __listOf__string = vec<__string>;

type __long = int;

type __string = string;

type __stringMin0Max256 = string;

type __stringMin0Max36 = string;

type __stringMin1Max100000 = string;

type __stringMin1Max1600 = string;

type __stringMin20Max1600 = string;

type __timestampIso8601 = int;

type __timestampUnix = int;

