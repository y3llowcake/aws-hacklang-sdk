<?hh // strict
namespace slack\aws\models.lex;

interface LexModelBuildingService {
  public function CreateBotVersion(CreateBotVersionRequest $in): Awaitable<\Errors\Result<CreateBotVersionResponse>>;
  public function CreateIntentVersion(CreateIntentVersionRequest $in): Awaitable<\Errors\Result<CreateIntentVersionResponse>>;
  public function CreateSlotTypeVersion(CreateSlotTypeVersionRequest $in): Awaitable<\Errors\Result<CreateSlotTypeVersionResponse>>;
  public function DeleteBot(DeleteBotRequest $in): Awaitable<\Errors\Error>;
  public function DeleteBotAlias(DeleteBotAliasRequest $in): Awaitable<\Errors\Error>;
  public function DeleteBotChannelAssociation(DeleteBotChannelAssociationRequest $in): Awaitable<\Errors\Error>;
  public function DeleteBotVersion(DeleteBotVersionRequest $in): Awaitable<\Errors\Error>;
  public function DeleteIntent(DeleteIntentRequest $in): Awaitable<\Errors\Error>;
  public function DeleteIntentVersion(DeleteIntentVersionRequest $in): Awaitable<\Errors\Error>;
  public function DeleteSlotType(DeleteSlotTypeRequest $in): Awaitable<\Errors\Error>;
  public function DeleteSlotTypeVersion(DeleteSlotTypeVersionRequest $in): Awaitable<\Errors\Error>;
  public function DeleteUtterances(DeleteUtterancesRequest $in): Awaitable<\Errors\Error>;
  public function GetBot(GetBotRequest $in): Awaitable<\Errors\Result<GetBotResponse>>;
  public function GetBotAlias(GetBotAliasRequest $in): Awaitable<\Errors\Result<GetBotAliasResponse>>;
  public function GetBotAliases(GetBotAliasesRequest $in): Awaitable<\Errors\Result<GetBotAliasesResponse>>;
  public function GetBotChannelAssociation(GetBotChannelAssociationRequest $in): Awaitable<\Errors\Result<GetBotChannelAssociationResponse>>;
  public function GetBotChannelAssociations(GetBotChannelAssociationsRequest $in): Awaitable<\Errors\Result<GetBotChannelAssociationsResponse>>;
  public function GetBotVersions(GetBotVersionsRequest $in): Awaitable<\Errors\Result<GetBotVersionsResponse>>;
  public function GetBots(GetBotsRequest $in): Awaitable<\Errors\Result<GetBotsResponse>>;
  public function GetBuiltinIntent(GetBuiltinIntentRequest $in): Awaitable<\Errors\Result<GetBuiltinIntentResponse>>;
  public function GetBuiltinIntents(GetBuiltinIntentsRequest $in): Awaitable<\Errors\Result<GetBuiltinIntentsResponse>>;
  public function GetBuiltinSlotTypes(GetBuiltinSlotTypesRequest $in): Awaitable<\Errors\Result<GetBuiltinSlotTypesResponse>>;
  public function GetExport(GetExportRequest $in): Awaitable<\Errors\Result<GetExportResponse>>;
  public function GetImport(GetImportRequest $in): Awaitable<\Errors\Result<GetImportResponse>>;
  public function GetIntent(GetIntentRequest $in): Awaitable<\Errors\Result<GetIntentResponse>>;
  public function GetIntentVersions(GetIntentVersionsRequest $in): Awaitable<\Errors\Result<GetIntentVersionsResponse>>;
  public function GetIntents(GetIntentsRequest $in): Awaitable<\Errors\Result<GetIntentsResponse>>;
  public function GetSlotType(GetSlotTypeRequest $in): Awaitable<\Errors\Result<GetSlotTypeResponse>>;
  public function GetSlotTypeVersions(GetSlotTypeVersionsRequest $in): Awaitable<\Errors\Result<GetSlotTypeVersionsResponse>>;
  public function GetSlotTypes(GetSlotTypesRequest $in): Awaitable<\Errors\Result<GetSlotTypesResponse>>;
  public function GetUtterancesView(GetUtterancesViewRequest $in): Awaitable<\Errors\Result<GetUtterancesViewResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResponse>>;
  public function PutBot(PutBotRequest $in): Awaitable<\Errors\Result<PutBotResponse>>;
  public function PutBotAlias(PutBotAliasRequest $in): Awaitable<\Errors\Result<PutBotAliasResponse>>;
  public function PutIntent(PutIntentRequest $in): Awaitable<\Errors\Result<PutIntentResponse>>;
  public function PutSlotType(PutSlotTypeRequest $in): Awaitable<\Errors\Result<PutSlotTypeResponse>>;
  public function StartImport(StartImportRequest $in): Awaitable<\Errors\Result<StartImportResponse>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Result<UntagResourceResponse>>;
}

type AliasName = string;

type AliasNameOrListAll = string;

type AmazonResourceName = string;

class BadRequestException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Blob = string;

type Boolean = bool;

class BotAliasMetadata {
  public ?BotName $bot_name;
  public ?Version $bot_version;
  public string $checksum;
  public ?ConversationLogsResponse $conversation_logs;
  public ?Timestamp $created_date;
  public ?Description $description;
  public ?Timestamp $last_updated_date;
  public ?AliasName $name;

  public function __construct(shape(
    ?'bot_name' => ?BotName,
    ?'bot_version' => ?Version,
    ?'checksum' => string,
    ?'conversation_logs' => ?ConversationLogsResponse,
    ?'created_date' => ?Timestamp,
    ?'description' => ?Description,
    ?'last_updated_date' => ?Timestamp,
    ?'name' => ?AliasName,
  ) $s = shape()) {
    $this->bot_name = $s['bot_name'] ?? '';
    $this->bot_version = $s['bot_version'] ?? '';
    $this->checksum = $s['checksum'] ?? '';
    $this->conversation_logs = $s['conversation_logs'] ?? null;
    $this->created_date = $s['created_date'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->last_updated_date = $s['last_updated_date'] ?? 0;
    $this->name = $s['name'] ?? '';
  }
}

type BotAliasMetadataList = vec<BotAliasMetadata>;

class BotChannelAssociation {
  public ?AliasName $bot_alias;
  public ?ChannelConfigurationMap $bot_configuration;
  public ?BotName $bot_name;
  public ?Timestamp $created_date;
  public ?Description $description;
  public string $failure_reason;
  public ?BotChannelName $name;
  public ?ChannelStatus $status;
  public ?ChannelType $type;

  public function __construct(shape(
    ?'bot_alias' => ?AliasName,
    ?'bot_configuration' => ?ChannelConfigurationMap,
    ?'bot_name' => ?BotName,
    ?'created_date' => ?Timestamp,
    ?'description' => ?Description,
    ?'failure_reason' => string,
    ?'name' => ?BotChannelName,
    ?'status' => ?ChannelStatus,
    ?'type' => ?ChannelType,
  ) $s = shape()) {
    $this->bot_alias = $s['bot_alias'] ?? '';
    $this->bot_configuration = $s['bot_configuration'] ?? dict[];
    $this->bot_name = $s['bot_name'] ?? '';
    $this->created_date = $s['created_date'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->failure_reason = $s['failure_reason'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type BotChannelAssociationList = vec<BotChannelAssociation>;

type BotChannelName = string;

class BotMetadata {
  public ?Timestamp $created_date;
  public ?Description $description;
  public ?Timestamp $last_updated_date;
  public ?BotName $name;
  public ?Status $status;
  public ?Version $version;

  public function __construct(shape(
    ?'created_date' => ?Timestamp,
    ?'description' => ?Description,
    ?'last_updated_date' => ?Timestamp,
    ?'name' => ?BotName,
    ?'status' => ?Status,
    ?'version' => ?Version,
  ) $s = shape()) {
    $this->created_date = $s['created_date'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->last_updated_date = $s['last_updated_date'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

type BotMetadataList = vec<BotMetadata>;

type BotName = string;

type BotVersions = vec<Version>;

class BuiltinIntentMetadata {
  public ?BuiltinIntentSignature $signature;
  public ?LocaleList $supported_locales;

  public function __construct(shape(
    ?'signature' => ?BuiltinIntentSignature,
    ?'supported_locales' => ?LocaleList,
  ) $s = shape()) {
    $this->signature = $s['signature'] ?? '';
    $this->supported_locales = $s['supported_locales'] ?? vec[];
  }
}

type BuiltinIntentMetadataList = vec<BuiltinIntentMetadata>;

type BuiltinIntentSignature = string;

class BuiltinIntentSlot {
  public string $name;

  public function __construct(shape(
    ?'name' => string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

type BuiltinIntentSlotList = vec<BuiltinIntentSlot>;

class BuiltinSlotTypeMetadata {
  public ?BuiltinSlotTypeSignature $signature;
  public ?LocaleList $supported_locales;

  public function __construct(shape(
    ?'signature' => ?BuiltinSlotTypeSignature,
    ?'supported_locales' => ?LocaleList,
  ) $s = shape()) {
    $this->signature = $s['signature'] ?? '';
    $this->supported_locales = $s['supported_locales'] ?? vec[];
  }
}

type BuiltinSlotTypeMetadataList = vec<BuiltinSlotTypeMetadata>;

type BuiltinSlotTypeSignature = string;

type ChannelConfigurationMap = dict<String, String>;

type ChannelStatus = string;

type ChannelType = string;

class CodeHook {
  public ?MessageVersion $message_version;
  public ?LambdaARN $uri;

  public function __construct(shape(
    ?'message_version' => ?MessageVersion,
    ?'uri' => ?LambdaARN,
  ) $s = shape()) {
    $this->message_version = $s['message_version'] ?? '';
    $this->uri = $s['uri'] ?? '';
  }
}

class ConflictException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ContentString = string;

type ContentType = string;

class ConversationLogsRequest {
  public ?IamRoleArn $iam_role_arn;
  public ?LogSettingsRequestList $log_settings;

  public function __construct(shape(
    ?'iam_role_arn' => ?IamRoleArn,
    ?'log_settings' => ?LogSettingsRequestList,
  ) $s = shape()) {
    $this->iam_role_arn = $s['iam_role_arn'] ?? '';
    $this->log_settings = $s['log_settings'] ?? vec[];
  }
}

class ConversationLogsResponse {
  public ?IamRoleArn $iam_role_arn;
  public ?LogSettingsResponseList $log_settings;

  public function __construct(shape(
    ?'iam_role_arn' => ?IamRoleArn,
    ?'log_settings' => ?LogSettingsResponseList,
  ) $s = shape()) {
    $this->iam_role_arn = $s['iam_role_arn'] ?? '';
    $this->log_settings = $s['log_settings'] ?? vec[];
  }
}

type Count = int;

class CreateBotVersionRequest {
  public string $checksum;
  public ?BotName $name;

  public function __construct(shape(
    ?'checksum' => string,
    ?'name' => ?BotName,
  ) $s = shape()) {
    $this->checksum = $s['checksum'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class CreateBotVersionResponse {
  public ?Statement $abort_statement;
  public string $checksum;
  public bool $child_directed;
  public ?Prompt $clarification_prompt;
  public ?Timestamp $created_date;
  public ?Description $description;
  public bool $detect_sentiment;
  public string $failure_reason;
  public ?SessionTTL $idle_session_ttl_in_seconds;
  public ?IntentList $intents;
  public ?Timestamp $last_updated_date;
  public ?Locale $locale;
  public ?BotName $name;
  public ?Status $status;
  public ?Version $version;
  public string $voice_id;

  public function __construct(shape(
    ?'abort_statement' => ?Statement,
    ?'checksum' => string,
    ?'child_directed' => bool,
    ?'clarification_prompt' => ?Prompt,
    ?'created_date' => ?Timestamp,
    ?'description' => ?Description,
    ?'detect_sentiment' => bool,
    ?'failure_reason' => string,
    ?'idle_session_ttl_in_seconds' => ?SessionTTL,
    ?'intents' => ?IntentList,
    ?'last_updated_date' => ?Timestamp,
    ?'locale' => ?Locale,
    ?'name' => ?BotName,
    ?'status' => ?Status,
    ?'version' => ?Version,
    ?'voice_id' => string,
  ) $s = shape()) {
    $this->abort_statement = $s['abort_statement'] ?? null;
    $this->checksum = $s['checksum'] ?? '';
    $this->child_directed = $s['child_directed'] ?? false;
    $this->clarification_prompt = $s['clarification_prompt'] ?? null;
    $this->created_date = $s['created_date'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->detect_sentiment = $s['detect_sentiment'] ?? false;
    $this->failure_reason = $s['failure_reason'] ?? '';
    $this->idle_session_ttl_in_seconds = $s['idle_session_ttl_in_seconds'] ?? 0;
    $this->intents = $s['intents'] ?? vec[];
    $this->last_updated_date = $s['last_updated_date'] ?? 0;
    $this->locale = $s['locale'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->version = $s['version'] ?? '';
    $this->voice_id = $s['voice_id'] ?? '';
  }
}

class CreateIntentVersionRequest {
  public string $checksum;
  public ?IntentName $name;

  public function __construct(shape(
    ?'checksum' => string,
    ?'name' => ?IntentName,
  ) $s = shape()) {
    $this->checksum = $s['checksum'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class CreateIntentVersionResponse {
  public string $checksum;
  public ?Statement $conclusion_statement;
  public ?Prompt $confirmation_prompt;
  public ?Timestamp $created_date;
  public ?Description $description;
  public ?CodeHook $dialog_code_hook;
  public ?FollowUpPrompt $follow_up_prompt;
  public ?FulfillmentActivity $fulfillment_activity;
  public ?Timestamp $last_updated_date;
  public ?IntentName $name;
  public ?BuiltinIntentSignature $parent_intent_signature;
  public ?Statement $rejection_statement;
  public ?IntentUtteranceList $sample_utterances;
  public ?SlotList $slots;
  public ?Version $version;

  public function __construct(shape(
    ?'checksum' => string,
    ?'conclusion_statement' => ?Statement,
    ?'confirmation_prompt' => ?Prompt,
    ?'created_date' => ?Timestamp,
    ?'description' => ?Description,
    ?'dialog_code_hook' => ?CodeHook,
    ?'follow_up_prompt' => ?FollowUpPrompt,
    ?'fulfillment_activity' => ?FulfillmentActivity,
    ?'last_updated_date' => ?Timestamp,
    ?'name' => ?IntentName,
    ?'parent_intent_signature' => ?BuiltinIntentSignature,
    ?'rejection_statement' => ?Statement,
    ?'sample_utterances' => ?IntentUtteranceList,
    ?'slots' => ?SlotList,
    ?'version' => ?Version,
  ) $s = shape()) {
    $this->checksum = $s['checksum'] ?? '';
    $this->conclusion_statement = $s['conclusion_statement'] ?? null;
    $this->confirmation_prompt = $s['confirmation_prompt'] ?? null;
    $this->created_date = $s['created_date'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->dialog_code_hook = $s['dialog_code_hook'] ?? null;
    $this->follow_up_prompt = $s['follow_up_prompt'] ?? null;
    $this->fulfillment_activity = $s['fulfillment_activity'] ?? null;
    $this->last_updated_date = $s['last_updated_date'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->parent_intent_signature = $s['parent_intent_signature'] ?? '';
    $this->rejection_statement = $s['rejection_statement'] ?? null;
    $this->sample_utterances = $s['sample_utterances'] ?? vec[];
    $this->slots = $s['slots'] ?? vec[];
    $this->version = $s['version'] ?? '';
  }
}

class CreateSlotTypeVersionRequest {
  public string $checksum;
  public ?SlotTypeName $name;

  public function __construct(shape(
    ?'checksum' => string,
    ?'name' => ?SlotTypeName,
  ) $s = shape()) {
    $this->checksum = $s['checksum'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class CreateSlotTypeVersionResponse {
  public string $checksum;
  public ?Timestamp $created_date;
  public ?Description $description;
  public ?EnumerationValues $enumeration_values;
  public ?Timestamp $last_updated_date;
  public ?SlotTypeName $name;
  public ?CustomOrBuiltinSlotTypeName $parent_slot_type_signature;
  public ?SlotTypeConfigurations $slot_type_configurations;
  public ?SlotValueSelectionStrategy $value_selection_strategy;
  public ?Version $version;

  public function __construct(shape(
    ?'checksum' => string,
    ?'created_date' => ?Timestamp,
    ?'description' => ?Description,
    ?'enumeration_values' => ?EnumerationValues,
    ?'last_updated_date' => ?Timestamp,
    ?'name' => ?SlotTypeName,
    ?'parent_slot_type_signature' => ?CustomOrBuiltinSlotTypeName,
    ?'slot_type_configurations' => ?SlotTypeConfigurations,
    ?'value_selection_strategy' => ?SlotValueSelectionStrategy,
    ?'version' => ?Version,
  ) $s = shape()) {
    $this->checksum = $s['checksum'] ?? '';
    $this->created_date = $s['created_date'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->enumeration_values = $s['enumeration_values'] ?? vec[];
    $this->last_updated_date = $s['last_updated_date'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->parent_slot_type_signature = $s['parent_slot_type_signature'] ?? '';
    $this->slot_type_configurations = $s['slot_type_configurations'] ?? vec[];
    $this->value_selection_strategy = $s['value_selection_strategy'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

type CustomOrBuiltinSlotTypeName = string;

class DeleteBotAliasRequest {
  public ?BotName $bot_name;
  public ?AliasName $name;

  public function __construct(shape(
    ?'bot_name' => ?BotName,
    ?'name' => ?AliasName,
  ) $s = shape()) {
    $this->bot_name = $s['bot_name'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class DeleteBotChannelAssociationRequest {
  public ?AliasName $bot_alias;
  public ?BotName $bot_name;
  public ?BotChannelName $name;

  public function __construct(shape(
    ?'bot_alias' => ?AliasName,
    ?'bot_name' => ?BotName,
    ?'name' => ?BotChannelName,
  ) $s = shape()) {
    $this->bot_alias = $s['bot_alias'] ?? '';
    $this->bot_name = $s['bot_name'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class DeleteBotRequest {
  public ?BotName $name;

  public function __construct(shape(
    ?'name' => ?BotName,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

class DeleteBotVersionRequest {
  public ?BotName $name;
  public ?NumericalVersion $version;

  public function __construct(shape(
    ?'name' => ?BotName,
    ?'version' => ?NumericalVersion,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class DeleteIntentRequest {
  public ?IntentName $name;

  public function __construct(shape(
    ?'name' => ?IntentName,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

class DeleteIntentVersionRequest {
  public ?IntentName $name;
  public ?NumericalVersion $version;

  public function __construct(shape(
    ?'name' => ?IntentName,
    ?'version' => ?NumericalVersion,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class DeleteSlotTypeRequest {
  public ?SlotTypeName $name;

  public function __construct(shape(
    ?'name' => ?SlotTypeName,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

class DeleteSlotTypeVersionRequest {
  public ?SlotTypeName $name;
  public ?NumericalVersion $version;

  public function __construct(shape(
    ?'name' => ?SlotTypeName,
    ?'version' => ?NumericalVersion,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class DeleteUtterancesRequest {
  public ?BotName $bot_name;
  public ?UserId $user_id;

  public function __construct(shape(
    ?'bot_name' => ?BotName,
    ?'user_id' => ?UserId,
  ) $s = shape()) {
    $this->bot_name = $s['bot_name'] ?? '';
    $this->user_id = $s['user_id'] ?? '';
  }
}

type Description = string;

type Destination = string;

class EnumerationValue {
  public ?SynonymList $synonyms;
  public ?Value $value;

  public function __construct(shape(
    ?'synonyms' => ?SynonymList,
    ?'value' => ?Value,
  ) $s = shape()) {
    $this->synonyms = $s['synonyms'] ?? vec[];
    $this->value = $s['value'] ?? '';
  }
}

type EnumerationValues = vec<EnumerationValue>;

type ExportStatus = string;

type ExportType = string;

class FollowUpPrompt {
  public ?Prompt $prompt;
  public ?Statement $rejection_statement;

  public function __construct(shape(
    ?'prompt' => ?Prompt,
    ?'rejection_statement' => ?Statement,
  ) $s = shape()) {
    $this->prompt = $s['prompt'] ?? null;
    $this->rejection_statement = $s['rejection_statement'] ?? null;
  }
}

class FulfillmentActivity {
  public ?CodeHook $code_hook;
  public ?FulfillmentActivityType $type;

  public function __construct(shape(
    ?'code_hook' => ?CodeHook,
    ?'type' => ?FulfillmentActivityType,
  ) $s = shape()) {
    $this->code_hook = $s['code_hook'] ?? null;
    $this->type = $s['type'] ?? '';
  }
}

type FulfillmentActivityType = string;

class GetBotAliasRequest {
  public ?BotName $bot_name;
  public ?AliasName $name;

  public function __construct(shape(
    ?'bot_name' => ?BotName,
    ?'name' => ?AliasName,
  ) $s = shape()) {
    $this->bot_name = $s['bot_name'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class GetBotAliasResponse {
  public ?BotName $bot_name;
  public ?Version $bot_version;
  public string $checksum;
  public ?ConversationLogsResponse $conversation_logs;
  public ?Timestamp $created_date;
  public ?Description $description;
  public ?Timestamp $last_updated_date;
  public ?AliasName $name;

  public function __construct(shape(
    ?'bot_name' => ?BotName,
    ?'bot_version' => ?Version,
    ?'checksum' => string,
    ?'conversation_logs' => ?ConversationLogsResponse,
    ?'created_date' => ?Timestamp,
    ?'description' => ?Description,
    ?'last_updated_date' => ?Timestamp,
    ?'name' => ?AliasName,
  ) $s = shape()) {
    $this->bot_name = $s['bot_name'] ?? '';
    $this->bot_version = $s['bot_version'] ?? '';
    $this->checksum = $s['checksum'] ?? '';
    $this->conversation_logs = $s['conversation_logs'] ?? null;
    $this->created_date = $s['created_date'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->last_updated_date = $s['last_updated_date'] ?? 0;
    $this->name = $s['name'] ?? '';
  }
}

class GetBotAliasesRequest {
  public ?BotName $bot_name;
  public ?MaxResults $max_results;
  public ?AliasName $name_contains;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'bot_name' => ?BotName,
    ?'max_results' => ?MaxResults,
    ?'name_contains' => ?AliasName,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->bot_name = $s['bot_name'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->name_contains = $s['name_contains'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetBotAliasesResponse {
  public ?BotAliasMetadataList $bot_aliases;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'bot_aliases' => ?BotAliasMetadataList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->bot_aliases = $s['bot_aliases'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetBotChannelAssociationRequest {
  public ?AliasName $bot_alias;
  public ?BotName $bot_name;
  public ?BotChannelName $name;

  public function __construct(shape(
    ?'bot_alias' => ?AliasName,
    ?'bot_name' => ?BotName,
    ?'name' => ?BotChannelName,
  ) $s = shape()) {
    $this->bot_alias = $s['bot_alias'] ?? '';
    $this->bot_name = $s['bot_name'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class GetBotChannelAssociationResponse {
  public ?AliasName $bot_alias;
  public ?ChannelConfigurationMap $bot_configuration;
  public ?BotName $bot_name;
  public ?Timestamp $created_date;
  public ?Description $description;
  public string $failure_reason;
  public ?BotChannelName $name;
  public ?ChannelStatus $status;
  public ?ChannelType $type;

  public function __construct(shape(
    ?'bot_alias' => ?AliasName,
    ?'bot_configuration' => ?ChannelConfigurationMap,
    ?'bot_name' => ?BotName,
    ?'created_date' => ?Timestamp,
    ?'description' => ?Description,
    ?'failure_reason' => string,
    ?'name' => ?BotChannelName,
    ?'status' => ?ChannelStatus,
    ?'type' => ?ChannelType,
  ) $s = shape()) {
    $this->bot_alias = $s['bot_alias'] ?? '';
    $this->bot_configuration = $s['bot_configuration'] ?? dict[];
    $this->bot_name = $s['bot_name'] ?? '';
    $this->created_date = $s['created_date'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->failure_reason = $s['failure_reason'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class GetBotChannelAssociationsRequest {
  public ?AliasNameOrListAll $bot_alias;
  public ?BotName $bot_name;
  public ?MaxResults $max_results;
  public ?BotChannelName $name_contains;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'bot_alias' => ?AliasNameOrListAll,
    ?'bot_name' => ?BotName,
    ?'max_results' => ?MaxResults,
    ?'name_contains' => ?BotChannelName,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->bot_alias = $s['bot_alias'] ?? '';
    $this->bot_name = $s['bot_name'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->name_contains = $s['name_contains'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetBotChannelAssociationsResponse {
  public ?BotChannelAssociationList $bot_channel_associations;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'bot_channel_associations' => ?BotChannelAssociationList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->bot_channel_associations = $s['bot_channel_associations'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetBotRequest {
  public ?BotName $name;
  public string $version_or_alias;

  public function __construct(shape(
    ?'name' => ?BotName,
    ?'version_or_alias' => string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->version_or_alias = $s['version_or_alias'] ?? '';
  }
}

class GetBotResponse {
  public ?Statement $abort_statement;
  public string $checksum;
  public bool $child_directed;
  public ?Prompt $clarification_prompt;
  public ?Timestamp $created_date;
  public ?Description $description;
  public bool $detect_sentiment;
  public string $failure_reason;
  public ?SessionTTL $idle_session_ttl_in_seconds;
  public ?IntentList $intents;
  public ?Timestamp $last_updated_date;
  public ?Locale $locale;
  public ?BotName $name;
  public ?Status $status;
  public ?Version $version;
  public string $voice_id;

  public function __construct(shape(
    ?'abort_statement' => ?Statement,
    ?'checksum' => string,
    ?'child_directed' => bool,
    ?'clarification_prompt' => ?Prompt,
    ?'created_date' => ?Timestamp,
    ?'description' => ?Description,
    ?'detect_sentiment' => bool,
    ?'failure_reason' => string,
    ?'idle_session_ttl_in_seconds' => ?SessionTTL,
    ?'intents' => ?IntentList,
    ?'last_updated_date' => ?Timestamp,
    ?'locale' => ?Locale,
    ?'name' => ?BotName,
    ?'status' => ?Status,
    ?'version' => ?Version,
    ?'voice_id' => string,
  ) $s = shape()) {
    $this->abort_statement = $s['abort_statement'] ?? null;
    $this->checksum = $s['checksum'] ?? '';
    $this->child_directed = $s['child_directed'] ?? false;
    $this->clarification_prompt = $s['clarification_prompt'] ?? null;
    $this->created_date = $s['created_date'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->detect_sentiment = $s['detect_sentiment'] ?? false;
    $this->failure_reason = $s['failure_reason'] ?? '';
    $this->idle_session_ttl_in_seconds = $s['idle_session_ttl_in_seconds'] ?? 0;
    $this->intents = $s['intents'] ?? vec[];
    $this->last_updated_date = $s['last_updated_date'] ?? 0;
    $this->locale = $s['locale'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->version = $s['version'] ?? '';
    $this->voice_id = $s['voice_id'] ?? '';
  }
}

class GetBotVersionsRequest {
  public ?MaxResults $max_results;
  public ?BotName $name;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'name' => ?BotName,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetBotVersionsResponse {
  public ?BotMetadataList $bots;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'bots' => ?BotMetadataList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->bots = $s['bots'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetBotsRequest {
  public ?MaxResults $max_results;
  public ?BotName $name_contains;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'name_contains' => ?BotName,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->name_contains = $s['name_contains'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetBotsResponse {
  public ?BotMetadataList $bots;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'bots' => ?BotMetadataList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->bots = $s['bots'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetBuiltinIntentRequest {
  public ?BuiltinIntentSignature $signature;

  public function __construct(shape(
    ?'signature' => ?BuiltinIntentSignature,
  ) $s = shape()) {
    $this->signature = $s['signature'] ?? '';
  }
}

class GetBuiltinIntentResponse {
  public ?BuiltinIntentSignature $signature;
  public ?BuiltinIntentSlotList $slots;
  public ?LocaleList $supported_locales;

  public function __construct(shape(
    ?'signature' => ?BuiltinIntentSignature,
    ?'slots' => ?BuiltinIntentSlotList,
    ?'supported_locales' => ?LocaleList,
  ) $s = shape()) {
    $this->signature = $s['signature'] ?? '';
    $this->slots = $s['slots'] ?? vec[];
    $this->supported_locales = $s['supported_locales'] ?? vec[];
  }
}

class GetBuiltinIntentsRequest {
  public ?Locale $locale;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public string $signature_contains;

  public function __construct(shape(
    ?'locale' => ?Locale,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'signature_contains' => string,
  ) $s = shape()) {
    $this->locale = $s['locale'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->signature_contains = $s['signature_contains'] ?? '';
  }
}

class GetBuiltinIntentsResponse {
  public ?BuiltinIntentMetadataList $intents;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'intents' => ?BuiltinIntentMetadataList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->intents = $s['intents'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetBuiltinSlotTypesRequest {
  public ?Locale $locale;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public string $signature_contains;

  public function __construct(shape(
    ?'locale' => ?Locale,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'signature_contains' => string,
  ) $s = shape()) {
    $this->locale = $s['locale'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->signature_contains = $s['signature_contains'] ?? '';
  }
}

class GetBuiltinSlotTypesResponse {
  public ?NextToken $next_token;
  public ?BuiltinSlotTypeMetadataList $slot_types;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'slot_types' => ?BuiltinSlotTypeMetadataList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->slot_types = $s['slot_types'] ?? vec[];
  }
}

class GetExportRequest {
  public ?ExportType $export_type;
  public ?Name $name;
  public ?ResourceType $resource_type;
  public ?NumericalVersion $version;

  public function __construct(shape(
    ?'export_type' => ?ExportType,
    ?'name' => ?Name,
    ?'resource_type' => ?ResourceType,
    ?'version' => ?NumericalVersion,
  ) $s = shape()) {
    $this->export_type = $s['export_type'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class GetExportResponse {
  public ?ExportStatus $export_status;
  public ?ExportType $export_type;
  public string $failure_reason;
  public ?Name $name;
  public ?ResourceType $resource_type;
  public string $url;
  public ?NumericalVersion $version;

  public function __construct(shape(
    ?'export_status' => ?ExportStatus,
    ?'export_type' => ?ExportType,
    ?'failure_reason' => string,
    ?'name' => ?Name,
    ?'resource_type' => ?ResourceType,
    ?'url' => string,
    ?'version' => ?NumericalVersion,
  ) $s = shape()) {
    $this->export_status = $s['export_status'] ?? '';
    $this->export_type = $s['export_type'] ?? '';
    $this->failure_reason = $s['failure_reason'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->url = $s['url'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class GetImportRequest {
  public string $import_id;

  public function __construct(shape(
    ?'import_id' => string,
  ) $s = shape()) {
    $this->import_id = $s['import_id'] ?? '';
  }
}

class GetImportResponse {
  public ?Timestamp $created_date;
  public ?StringList $failure_reason;
  public string $import_id;
  public ?ImportStatus $import_status;
  public ?MergeStrategy $merge_strategy;
  public ?Name $name;
  public ?ResourceType $resource_type;

  public function __construct(shape(
    ?'created_date' => ?Timestamp,
    ?'failure_reason' => ?StringList,
    ?'import_id' => string,
    ?'import_status' => ?ImportStatus,
    ?'merge_strategy' => ?MergeStrategy,
    ?'name' => ?Name,
    ?'resource_type' => ?ResourceType,
  ) $s = shape()) {
    $this->created_date = $s['created_date'] ?? 0;
    $this->failure_reason = $s['failure_reason'] ?? vec[];
    $this->import_id = $s['import_id'] ?? '';
    $this->import_status = $s['import_status'] ?? '';
    $this->merge_strategy = $s['merge_strategy'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
  }
}

class GetIntentRequest {
  public ?IntentName $name;
  public ?Version $version;

  public function __construct(shape(
    ?'name' => ?IntentName,
    ?'version' => ?Version,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class GetIntentResponse {
  public string $checksum;
  public ?Statement $conclusion_statement;
  public ?Prompt $confirmation_prompt;
  public ?Timestamp $created_date;
  public ?Description $description;
  public ?CodeHook $dialog_code_hook;
  public ?FollowUpPrompt $follow_up_prompt;
  public ?FulfillmentActivity $fulfillment_activity;
  public ?Timestamp $last_updated_date;
  public ?IntentName $name;
  public ?BuiltinIntentSignature $parent_intent_signature;
  public ?Statement $rejection_statement;
  public ?IntentUtteranceList $sample_utterances;
  public ?SlotList $slots;
  public ?Version $version;

  public function __construct(shape(
    ?'checksum' => string,
    ?'conclusion_statement' => ?Statement,
    ?'confirmation_prompt' => ?Prompt,
    ?'created_date' => ?Timestamp,
    ?'description' => ?Description,
    ?'dialog_code_hook' => ?CodeHook,
    ?'follow_up_prompt' => ?FollowUpPrompt,
    ?'fulfillment_activity' => ?FulfillmentActivity,
    ?'last_updated_date' => ?Timestamp,
    ?'name' => ?IntentName,
    ?'parent_intent_signature' => ?BuiltinIntentSignature,
    ?'rejection_statement' => ?Statement,
    ?'sample_utterances' => ?IntentUtteranceList,
    ?'slots' => ?SlotList,
    ?'version' => ?Version,
  ) $s = shape()) {
    $this->checksum = $s['checksum'] ?? '';
    $this->conclusion_statement = $s['conclusion_statement'] ?? null;
    $this->confirmation_prompt = $s['confirmation_prompt'] ?? null;
    $this->created_date = $s['created_date'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->dialog_code_hook = $s['dialog_code_hook'] ?? null;
    $this->follow_up_prompt = $s['follow_up_prompt'] ?? null;
    $this->fulfillment_activity = $s['fulfillment_activity'] ?? null;
    $this->last_updated_date = $s['last_updated_date'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->parent_intent_signature = $s['parent_intent_signature'] ?? '';
    $this->rejection_statement = $s['rejection_statement'] ?? null;
    $this->sample_utterances = $s['sample_utterances'] ?? vec[];
    $this->slots = $s['slots'] ?? vec[];
    $this->version = $s['version'] ?? '';
  }
}

class GetIntentVersionsRequest {
  public ?MaxResults $max_results;
  public ?IntentName $name;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'name' => ?IntentName,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetIntentVersionsResponse {
  public ?IntentMetadataList $intents;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'intents' => ?IntentMetadataList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->intents = $s['intents'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetIntentsRequest {
  public ?MaxResults $max_results;
  public ?IntentName $name_contains;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'name_contains' => ?IntentName,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->name_contains = $s['name_contains'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetIntentsResponse {
  public ?IntentMetadataList $intents;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'intents' => ?IntentMetadataList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->intents = $s['intents'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetSlotTypeRequest {
  public ?SlotTypeName $name;
  public ?Version $version;

  public function __construct(shape(
    ?'name' => ?SlotTypeName,
    ?'version' => ?Version,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class GetSlotTypeResponse {
  public string $checksum;
  public ?Timestamp $created_date;
  public ?Description $description;
  public ?EnumerationValues $enumeration_values;
  public ?Timestamp $last_updated_date;
  public ?SlotTypeName $name;
  public ?CustomOrBuiltinSlotTypeName $parent_slot_type_signature;
  public ?SlotTypeConfigurations $slot_type_configurations;
  public ?SlotValueSelectionStrategy $value_selection_strategy;
  public ?Version $version;

  public function __construct(shape(
    ?'checksum' => string,
    ?'created_date' => ?Timestamp,
    ?'description' => ?Description,
    ?'enumeration_values' => ?EnumerationValues,
    ?'last_updated_date' => ?Timestamp,
    ?'name' => ?SlotTypeName,
    ?'parent_slot_type_signature' => ?CustomOrBuiltinSlotTypeName,
    ?'slot_type_configurations' => ?SlotTypeConfigurations,
    ?'value_selection_strategy' => ?SlotValueSelectionStrategy,
    ?'version' => ?Version,
  ) $s = shape()) {
    $this->checksum = $s['checksum'] ?? '';
    $this->created_date = $s['created_date'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->enumeration_values = $s['enumeration_values'] ?? vec[];
    $this->last_updated_date = $s['last_updated_date'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->parent_slot_type_signature = $s['parent_slot_type_signature'] ?? '';
    $this->slot_type_configurations = $s['slot_type_configurations'] ?? vec[];
    $this->value_selection_strategy = $s['value_selection_strategy'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class GetSlotTypeVersionsRequest {
  public ?MaxResults $max_results;
  public ?SlotTypeName $name;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'name' => ?SlotTypeName,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetSlotTypeVersionsResponse {
  public ?NextToken $next_token;
  public ?SlotTypeMetadataList $slot_types;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'slot_types' => ?SlotTypeMetadataList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->slot_types = $s['slot_types'] ?? vec[];
  }
}

class GetSlotTypesRequest {
  public ?MaxResults $max_results;
  public ?SlotTypeName $name_contains;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'name_contains' => ?SlotTypeName,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->name_contains = $s['name_contains'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetSlotTypesResponse {
  public ?NextToken $next_token;
  public ?SlotTypeMetadataList $slot_types;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'slot_types' => ?SlotTypeMetadataList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->slot_types = $s['slot_types'] ?? vec[];
  }
}

class GetUtterancesViewRequest {
  public ?BotName $bot_name;
  public ?BotVersions $bot_versions;
  public ?StatusType $status_type;

  public function __construct(shape(
    ?'bot_name' => ?BotName,
    ?'bot_versions' => ?BotVersions,
    ?'status_type' => ?StatusType,
  ) $s = shape()) {
    $this->bot_name = $s['bot_name'] ?? '';
    $this->bot_versions = $s['bot_versions'] ?? vec[];
    $this->status_type = $s['status_type'] ?? '';
  }
}

class GetUtterancesViewResponse {
  public ?BotName $bot_name;
  public ?ListsOfUtterances $utterances;

  public function __construct(shape(
    ?'bot_name' => ?BotName,
    ?'utterances' => ?ListsOfUtterances,
  ) $s = shape()) {
    $this->bot_name = $s['bot_name'] ?? '';
    $this->utterances = $s['utterances'] ?? vec[];
  }
}

type GroupNumber = int;

type IamRoleArn = string;

type ImportStatus = string;

class Intent {
  public ?IntentName $intent_name;
  public ?Version $intent_version;

  public function __construct(shape(
    ?'intent_name' => ?IntentName,
    ?'intent_version' => ?Version,
  ) $s = shape()) {
    $this->intent_name = $s['intent_name'] ?? '';
    $this->intent_version = $s['intent_version'] ?? '';
  }
}

type IntentList = vec<Intent>;

class IntentMetadata {
  public ?Timestamp $created_date;
  public ?Description $description;
  public ?Timestamp $last_updated_date;
  public ?IntentName $name;
  public ?Version $version;

  public function __construct(shape(
    ?'created_date' => ?Timestamp,
    ?'description' => ?Description,
    ?'last_updated_date' => ?Timestamp,
    ?'name' => ?IntentName,
    ?'version' => ?Version,
  ) $s = shape()) {
    $this->created_date = $s['created_date'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->last_updated_date = $s['last_updated_date'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

type IntentMetadataList = vec<IntentMetadata>;

type IntentName = string;

type IntentUtteranceList = vec<Utterance>;

class InternalFailureException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type KmsKeyArn = string;

type LambdaARN = string;

class LimitExceededException {
  public string $message;
  public string $retry_after_seconds;

  public function __construct(shape(
    ?'message' => string,
    ?'retry_after_seconds' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->retry_after_seconds = $s['retry_after_seconds'] ?? '';
  }
}

type ListOfUtterance = vec<UtteranceData>;

class ListTagsForResourceRequest {
  public ?AmazonResourceName $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?AmazonResourceName,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsForResourceResponse {
  public ?TagList $tags;

  public function __construct(shape(
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? vec[];
  }
}

type ListsOfUtterances = vec<UtteranceList>;

type Locale = string;

type LocaleList = vec<Locale>;

class LogSettingsRequest {
  public ?Destination $destination;
  public ?KmsKeyArn $kms_key_arn;
  public ?LogType $log_type;
  public ?ResourceArn $resource_arn;

  public function __construct(shape(
    ?'destination' => ?Destination,
    ?'kms_key_arn' => ?KmsKeyArn,
    ?'log_type' => ?LogType,
    ?'resource_arn' => ?ResourceArn,
  ) $s = shape()) {
    $this->destination = $s['destination'] ?? '';
    $this->kms_key_arn = $s['kms_key_arn'] ?? '';
    $this->log_type = $s['log_type'] ?? '';
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

type LogSettingsRequestList = vec<LogSettingsRequest>;

class LogSettingsResponse {
  public ?Destination $destination;
  public ?KmsKeyArn $kms_key_arn;
  public ?LogType $log_type;
  public ?ResourceArn $resource_arn;
  public ?ResourcePrefix $resource_prefix;

  public function __construct(shape(
    ?'destination' => ?Destination,
    ?'kms_key_arn' => ?KmsKeyArn,
    ?'log_type' => ?LogType,
    ?'resource_arn' => ?ResourceArn,
    ?'resource_prefix' => ?ResourcePrefix,
  ) $s = shape()) {
    $this->destination = $s['destination'] ?? '';
    $this->kms_key_arn = $s['kms_key_arn'] ?? '';
    $this->log_type = $s['log_type'] ?? '';
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->resource_prefix = $s['resource_prefix'] ?? '';
  }
}

type LogSettingsResponseList = vec<LogSettingsResponse>;

type LogType = string;

type MaxResults = int;

type MergeStrategy = string;

class Message {
  public ?ContentString $content;
  public ?ContentType $content_type;
  public ?GroupNumber $group_number;

  public function __construct(shape(
    ?'content' => ?ContentString,
    ?'content_type' => ?ContentType,
    ?'group_number' => ?GroupNumber,
  ) $s = shape()) {
    $this->content = $s['content'] ?? '';
    $this->content_type = $s['content_type'] ?? '';
    $this->group_number = $s['group_number'] ?? 0;
  }
}

type MessageList = vec<Message>;

type MessageVersion = string;

type Name = string;

type NextToken = string;

class NotFoundException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type NumericalVersion = string;

type ObfuscationSetting = string;

class PreconditionFailedException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Priority = int;

type ProcessBehavior = string;

class Prompt {
  public ?PromptMaxAttempts $max_attempts;
  public ?MessageList $messages;
  public ?ResponseCard $response_card;

  public function __construct(shape(
    ?'max_attempts' => ?PromptMaxAttempts,
    ?'messages' => ?MessageList,
    ?'response_card' => ?ResponseCard,
  ) $s = shape()) {
    $this->max_attempts = $s['max_attempts'] ?? 0;
    $this->messages = $s['messages'] ?? vec[];
    $this->response_card = $s['response_card'] ?? '';
  }
}

type PromptMaxAttempts = int;

class PutBotAliasRequest {
  public ?BotName $bot_name;
  public ?Version $bot_version;
  public string $checksum;
  public ?ConversationLogsRequest $conversation_logs;
  public ?Description $description;
  public ?AliasName $name;
  public ?TagList $tags;

  public function __construct(shape(
    ?'bot_name' => ?BotName,
    ?'bot_version' => ?Version,
    ?'checksum' => string,
    ?'conversation_logs' => ?ConversationLogsRequest,
    ?'description' => ?Description,
    ?'name' => ?AliasName,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->bot_name = $s['bot_name'] ?? '';
    $this->bot_version = $s['bot_version'] ?? '';
    $this->checksum = $s['checksum'] ?? '';
    $this->conversation_logs = $s['conversation_logs'] ?? null;
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class PutBotAliasResponse {
  public ?BotName $bot_name;
  public ?Version $bot_version;
  public string $checksum;
  public ?ConversationLogsResponse $conversation_logs;
  public ?Timestamp $created_date;
  public ?Description $description;
  public ?Timestamp $last_updated_date;
  public ?AliasName $name;
  public ?TagList $tags;

  public function __construct(shape(
    ?'bot_name' => ?BotName,
    ?'bot_version' => ?Version,
    ?'checksum' => string,
    ?'conversation_logs' => ?ConversationLogsResponse,
    ?'created_date' => ?Timestamp,
    ?'description' => ?Description,
    ?'last_updated_date' => ?Timestamp,
    ?'name' => ?AliasName,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->bot_name = $s['bot_name'] ?? '';
    $this->bot_version = $s['bot_version'] ?? '';
    $this->checksum = $s['checksum'] ?? '';
    $this->conversation_logs = $s['conversation_logs'] ?? null;
    $this->created_date = $s['created_date'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->last_updated_date = $s['last_updated_date'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class PutBotRequest {
  public ?Statement $abort_statement;
  public string $checksum;
  public bool $child_directed;
  public ?Prompt $clarification_prompt;
  public bool $create_version;
  public ?Description $description;
  public bool $detect_sentiment;
  public ?SessionTTL $idle_session_ttl_in_seconds;
  public ?IntentList $intents;
  public ?Locale $locale;
  public ?BotName $name;
  public ?ProcessBehavior $process_behavior;
  public ?TagList $tags;
  public string $voice_id;

  public function __construct(shape(
    ?'abort_statement' => ?Statement,
    ?'checksum' => string,
    ?'child_directed' => bool,
    ?'clarification_prompt' => ?Prompt,
    ?'create_version' => bool,
    ?'description' => ?Description,
    ?'detect_sentiment' => bool,
    ?'idle_session_ttl_in_seconds' => ?SessionTTL,
    ?'intents' => ?IntentList,
    ?'locale' => ?Locale,
    ?'name' => ?BotName,
    ?'process_behavior' => ?ProcessBehavior,
    ?'tags' => ?TagList,
    ?'voice_id' => string,
  ) $s = shape()) {
    $this->abort_statement = $s['abort_statement'] ?? null;
    $this->checksum = $s['checksum'] ?? '';
    $this->child_directed = $s['child_directed'] ?? false;
    $this->clarification_prompt = $s['clarification_prompt'] ?? null;
    $this->create_version = $s['create_version'] ?? false;
    $this->description = $s['description'] ?? '';
    $this->detect_sentiment = $s['detect_sentiment'] ?? false;
    $this->idle_session_ttl_in_seconds = $s['idle_session_ttl_in_seconds'] ?? 0;
    $this->intents = $s['intents'] ?? vec[];
    $this->locale = $s['locale'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->process_behavior = $s['process_behavior'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->voice_id = $s['voice_id'] ?? '';
  }
}

class PutBotResponse {
  public ?Statement $abort_statement;
  public string $checksum;
  public bool $child_directed;
  public ?Prompt $clarification_prompt;
  public bool $create_version;
  public ?Timestamp $created_date;
  public ?Description $description;
  public bool $detect_sentiment;
  public string $failure_reason;
  public ?SessionTTL $idle_session_ttl_in_seconds;
  public ?IntentList $intents;
  public ?Timestamp $last_updated_date;
  public ?Locale $locale;
  public ?BotName $name;
  public ?Status $status;
  public ?TagList $tags;
  public ?Version $version;
  public string $voice_id;

  public function __construct(shape(
    ?'abort_statement' => ?Statement,
    ?'checksum' => string,
    ?'child_directed' => bool,
    ?'clarification_prompt' => ?Prompt,
    ?'create_version' => bool,
    ?'created_date' => ?Timestamp,
    ?'description' => ?Description,
    ?'detect_sentiment' => bool,
    ?'failure_reason' => string,
    ?'idle_session_ttl_in_seconds' => ?SessionTTL,
    ?'intents' => ?IntentList,
    ?'last_updated_date' => ?Timestamp,
    ?'locale' => ?Locale,
    ?'name' => ?BotName,
    ?'status' => ?Status,
    ?'tags' => ?TagList,
    ?'version' => ?Version,
    ?'voice_id' => string,
  ) $s = shape()) {
    $this->abort_statement = $s['abort_statement'] ?? null;
    $this->checksum = $s['checksum'] ?? '';
    $this->child_directed = $s['child_directed'] ?? false;
    $this->clarification_prompt = $s['clarification_prompt'] ?? null;
    $this->create_version = $s['create_version'] ?? false;
    $this->created_date = $s['created_date'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->detect_sentiment = $s['detect_sentiment'] ?? false;
    $this->failure_reason = $s['failure_reason'] ?? '';
    $this->idle_session_ttl_in_seconds = $s['idle_session_ttl_in_seconds'] ?? 0;
    $this->intents = $s['intents'] ?? vec[];
    $this->last_updated_date = $s['last_updated_date'] ?? 0;
    $this->locale = $s['locale'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->version = $s['version'] ?? '';
    $this->voice_id = $s['voice_id'] ?? '';
  }
}

class PutIntentRequest {
  public string $checksum;
  public ?Statement $conclusion_statement;
  public ?Prompt $confirmation_prompt;
  public bool $create_version;
  public ?Description $description;
  public ?CodeHook $dialog_code_hook;
  public ?FollowUpPrompt $follow_up_prompt;
  public ?FulfillmentActivity $fulfillment_activity;
  public ?IntentName $name;
  public ?BuiltinIntentSignature $parent_intent_signature;
  public ?Statement $rejection_statement;
  public ?IntentUtteranceList $sample_utterances;
  public ?SlotList $slots;

  public function __construct(shape(
    ?'checksum' => string,
    ?'conclusion_statement' => ?Statement,
    ?'confirmation_prompt' => ?Prompt,
    ?'create_version' => bool,
    ?'description' => ?Description,
    ?'dialog_code_hook' => ?CodeHook,
    ?'follow_up_prompt' => ?FollowUpPrompt,
    ?'fulfillment_activity' => ?FulfillmentActivity,
    ?'name' => ?IntentName,
    ?'parent_intent_signature' => ?BuiltinIntentSignature,
    ?'rejection_statement' => ?Statement,
    ?'sample_utterances' => ?IntentUtteranceList,
    ?'slots' => ?SlotList,
  ) $s = shape()) {
    $this->checksum = $s['checksum'] ?? '';
    $this->conclusion_statement = $s['conclusion_statement'] ?? null;
    $this->confirmation_prompt = $s['confirmation_prompt'] ?? null;
    $this->create_version = $s['create_version'] ?? false;
    $this->description = $s['description'] ?? '';
    $this->dialog_code_hook = $s['dialog_code_hook'] ?? null;
    $this->follow_up_prompt = $s['follow_up_prompt'] ?? null;
    $this->fulfillment_activity = $s['fulfillment_activity'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->parent_intent_signature = $s['parent_intent_signature'] ?? '';
    $this->rejection_statement = $s['rejection_statement'] ?? null;
    $this->sample_utterances = $s['sample_utterances'] ?? vec[];
    $this->slots = $s['slots'] ?? vec[];
  }
}

class PutIntentResponse {
  public string $checksum;
  public ?Statement $conclusion_statement;
  public ?Prompt $confirmation_prompt;
  public bool $create_version;
  public ?Timestamp $created_date;
  public ?Description $description;
  public ?CodeHook $dialog_code_hook;
  public ?FollowUpPrompt $follow_up_prompt;
  public ?FulfillmentActivity $fulfillment_activity;
  public ?Timestamp $last_updated_date;
  public ?IntentName $name;
  public ?BuiltinIntentSignature $parent_intent_signature;
  public ?Statement $rejection_statement;
  public ?IntentUtteranceList $sample_utterances;
  public ?SlotList $slots;
  public ?Version $version;

  public function __construct(shape(
    ?'checksum' => string,
    ?'conclusion_statement' => ?Statement,
    ?'confirmation_prompt' => ?Prompt,
    ?'create_version' => bool,
    ?'created_date' => ?Timestamp,
    ?'description' => ?Description,
    ?'dialog_code_hook' => ?CodeHook,
    ?'follow_up_prompt' => ?FollowUpPrompt,
    ?'fulfillment_activity' => ?FulfillmentActivity,
    ?'last_updated_date' => ?Timestamp,
    ?'name' => ?IntentName,
    ?'parent_intent_signature' => ?BuiltinIntentSignature,
    ?'rejection_statement' => ?Statement,
    ?'sample_utterances' => ?IntentUtteranceList,
    ?'slots' => ?SlotList,
    ?'version' => ?Version,
  ) $s = shape()) {
    $this->checksum = $s['checksum'] ?? '';
    $this->conclusion_statement = $s['conclusion_statement'] ?? null;
    $this->confirmation_prompt = $s['confirmation_prompt'] ?? null;
    $this->create_version = $s['create_version'] ?? false;
    $this->created_date = $s['created_date'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->dialog_code_hook = $s['dialog_code_hook'] ?? null;
    $this->follow_up_prompt = $s['follow_up_prompt'] ?? null;
    $this->fulfillment_activity = $s['fulfillment_activity'] ?? null;
    $this->last_updated_date = $s['last_updated_date'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->parent_intent_signature = $s['parent_intent_signature'] ?? '';
    $this->rejection_statement = $s['rejection_statement'] ?? null;
    $this->sample_utterances = $s['sample_utterances'] ?? vec[];
    $this->slots = $s['slots'] ?? vec[];
    $this->version = $s['version'] ?? '';
  }
}

class PutSlotTypeRequest {
  public string $checksum;
  public bool $create_version;
  public ?Description $description;
  public ?EnumerationValues $enumeration_values;
  public ?SlotTypeName $name;
  public ?CustomOrBuiltinSlotTypeName $parent_slot_type_signature;
  public ?SlotTypeConfigurations $slot_type_configurations;
  public ?SlotValueSelectionStrategy $value_selection_strategy;

  public function __construct(shape(
    ?'checksum' => string,
    ?'create_version' => bool,
    ?'description' => ?Description,
    ?'enumeration_values' => ?EnumerationValues,
    ?'name' => ?SlotTypeName,
    ?'parent_slot_type_signature' => ?CustomOrBuiltinSlotTypeName,
    ?'slot_type_configurations' => ?SlotTypeConfigurations,
    ?'value_selection_strategy' => ?SlotValueSelectionStrategy,
  ) $s = shape()) {
    $this->checksum = $s['checksum'] ?? '';
    $this->create_version = $s['create_version'] ?? false;
    $this->description = $s['description'] ?? '';
    $this->enumeration_values = $s['enumeration_values'] ?? vec[];
    $this->name = $s['name'] ?? '';
    $this->parent_slot_type_signature = $s['parent_slot_type_signature'] ?? '';
    $this->slot_type_configurations = $s['slot_type_configurations'] ?? vec[];
    $this->value_selection_strategy = $s['value_selection_strategy'] ?? '';
  }
}

class PutSlotTypeResponse {
  public string $checksum;
  public bool $create_version;
  public ?Timestamp $created_date;
  public ?Description $description;
  public ?EnumerationValues $enumeration_values;
  public ?Timestamp $last_updated_date;
  public ?SlotTypeName $name;
  public ?CustomOrBuiltinSlotTypeName $parent_slot_type_signature;
  public ?SlotTypeConfigurations $slot_type_configurations;
  public ?SlotValueSelectionStrategy $value_selection_strategy;
  public ?Version $version;

  public function __construct(shape(
    ?'checksum' => string,
    ?'create_version' => bool,
    ?'created_date' => ?Timestamp,
    ?'description' => ?Description,
    ?'enumeration_values' => ?EnumerationValues,
    ?'last_updated_date' => ?Timestamp,
    ?'name' => ?SlotTypeName,
    ?'parent_slot_type_signature' => ?CustomOrBuiltinSlotTypeName,
    ?'slot_type_configurations' => ?SlotTypeConfigurations,
    ?'value_selection_strategy' => ?SlotValueSelectionStrategy,
    ?'version' => ?Version,
  ) $s = shape()) {
    $this->checksum = $s['checksum'] ?? '';
    $this->create_version = $s['create_version'] ?? false;
    $this->created_date = $s['created_date'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->enumeration_values = $s['enumeration_values'] ?? vec[];
    $this->last_updated_date = $s['last_updated_date'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->parent_slot_type_signature = $s['parent_slot_type_signature'] ?? '';
    $this->slot_type_configurations = $s['slot_type_configurations'] ?? vec[];
    $this->value_selection_strategy = $s['value_selection_strategy'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

type ReferenceType = string;

type RegexPattern = string;

type ResourceArn = string;

class ResourceInUseException {
  public ?ResourceReference $example_reference;
  public ?ReferenceType $reference_type;

  public function __construct(shape(
    ?'example_reference' => ?ResourceReference,
    ?'reference_type' => ?ReferenceType,
  ) $s = shape()) {
    $this->example_reference = $s['example_reference'] ?? null;
    $this->reference_type = $s['reference_type'] ?? '';
  }
}

type ResourcePrefix = string;

class ResourceReference {
  public ?Name $name;
  public ?Version $version;

  public function __construct(shape(
    ?'name' => ?Name,
    ?'version' => ?Version,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

type ResourceType = string;

type ResponseCard = string;

type SessionTTL = int;

class Slot {
  public ?Description $description;
  public ?SlotName $name;
  public ?ObfuscationSetting $obfuscation_setting;
  public ?Priority $priority;
  public ?ResponseCard $response_card;
  public ?SlotUtteranceList $sample_utterances;
  public ?SlotConstraint $slot_constraint;
  public ?CustomOrBuiltinSlotTypeName $slot_type;
  public ?Version $slot_type_version;
  public ?Prompt $value_elicitation_prompt;

  public function __construct(shape(
    ?'description' => ?Description,
    ?'name' => ?SlotName,
    ?'obfuscation_setting' => ?ObfuscationSetting,
    ?'priority' => ?Priority,
    ?'response_card' => ?ResponseCard,
    ?'sample_utterances' => ?SlotUtteranceList,
    ?'slot_constraint' => ?SlotConstraint,
    ?'slot_type' => ?CustomOrBuiltinSlotTypeName,
    ?'slot_type_version' => ?Version,
    ?'value_elicitation_prompt' => ?Prompt,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->obfuscation_setting = $s['obfuscation_setting'] ?? '';
    $this->priority = $s['priority'] ?? 0;
    $this->response_card = $s['response_card'] ?? '';
    $this->sample_utterances = $s['sample_utterances'] ?? vec[];
    $this->slot_constraint = $s['slot_constraint'] ?? '';
    $this->slot_type = $s['slot_type'] ?? '';
    $this->slot_type_version = $s['slot_type_version'] ?? '';
    $this->value_elicitation_prompt = $s['value_elicitation_prompt'] ?? null;
  }
}

type SlotConstraint = string;

type SlotList = vec<Slot>;

type SlotName = string;

class SlotTypeConfiguration {
  public ?SlotTypeRegexConfiguration $regex_configuration;

  public function __construct(shape(
    ?'regex_configuration' => ?SlotTypeRegexConfiguration,
  ) $s = shape()) {
    $this->regex_configuration = $s['regex_configuration'] ?? null;
  }
}

type SlotTypeConfigurations = vec<SlotTypeConfiguration>;

class SlotTypeMetadata {
  public ?Timestamp $created_date;
  public ?Description $description;
  public ?Timestamp $last_updated_date;
  public ?SlotTypeName $name;
  public ?Version $version;

  public function __construct(shape(
    ?'created_date' => ?Timestamp,
    ?'description' => ?Description,
    ?'last_updated_date' => ?Timestamp,
    ?'name' => ?SlotTypeName,
    ?'version' => ?Version,
  ) $s = shape()) {
    $this->created_date = $s['created_date'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->last_updated_date = $s['last_updated_date'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

type SlotTypeMetadataList = vec<SlotTypeMetadata>;

type SlotTypeName = string;

class SlotTypeRegexConfiguration {
  public ?RegexPattern $pattern;

  public function __construct(shape(
    ?'pattern' => ?RegexPattern,
  ) $s = shape()) {
    $this->pattern = $s['pattern'] ?? '';
  }
}

type SlotUtteranceList = vec<Utterance>;

type SlotValueSelectionStrategy = string;

class StartImportRequest {
  public ?MergeStrategy $merge_strategy;
  public ?Blob $payload;
  public ?ResourceType $resource_type;
  public ?TagList $tags;

  public function __construct(shape(
    ?'merge_strategy' => ?MergeStrategy,
    ?'payload' => ?Blob,
    ?'resource_type' => ?ResourceType,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->merge_strategy = $s['merge_strategy'] ?? '';
    $this->payload = $s['payload'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class StartImportResponse {
  public ?Timestamp $created_date;
  public string $import_id;
  public ?ImportStatus $import_status;
  public ?MergeStrategy $merge_strategy;
  public ?Name $name;
  public ?ResourceType $resource_type;
  public ?TagList $tags;

  public function __construct(shape(
    ?'created_date' => ?Timestamp,
    ?'import_id' => string,
    ?'import_status' => ?ImportStatus,
    ?'merge_strategy' => ?MergeStrategy,
    ?'name' => ?Name,
    ?'resource_type' => ?ResourceType,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->created_date = $s['created_date'] ?? 0;
    $this->import_id = $s['import_id'] ?? '';
    $this->import_status = $s['import_status'] ?? '';
    $this->merge_strategy = $s['merge_strategy'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class Statement {
  public ?MessageList $messages;
  public ?ResponseCard $response_card;

  public function __construct(shape(
    ?'messages' => ?MessageList,
    ?'response_card' => ?ResponseCard,
  ) $s = shape()) {
    $this->messages = $s['messages'] ?? vec[];
    $this->response_card = $s['response_card'] ?? '';
  }
}

type Status = string;

type StatusType = string;

type String = string;

type StringList = vec<String>;

type SynonymList = vec<Value>;

class Tag {
  public ?TagKey $key;
  public ?TagValue $value;

  public function __construct(shape(
    ?'key' => ?TagKey,
    ?'value' => ?TagValue,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

class TagResourceRequest {
  public ?AmazonResourceName $resource_arn;
  public ?TagList $tags;

  public function __construct(shape(
    ?'resource_arn' => ?AmazonResourceName,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

type Timestamp = int;

class UntagResourceRequest {
  public ?AmazonResourceName $resource_arn;
  public ?TagKeyList $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => ?AmazonResourceName,
    ?'tag_keys' => ?TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type UserId = string;

type Utterance = string;

class UtteranceData {
  public ?Count $count;
  public ?Count $distinct_users;
  public ?Timestamp $first_uttered_date;
  public ?Timestamp $last_uttered_date;
  public ?UtteranceString $utterance_string;

  public function __construct(shape(
    ?'count' => ?Count,
    ?'distinct_users' => ?Count,
    ?'first_uttered_date' => ?Timestamp,
    ?'last_uttered_date' => ?Timestamp,
    ?'utterance_string' => ?UtteranceString,
  ) $s = shape()) {
    $this->count = $s['count'] ?? 0;
    $this->distinct_users = $s['distinct_users'] ?? 0;
    $this->first_uttered_date = $s['first_uttered_date'] ?? 0;
    $this->last_uttered_date = $s['last_uttered_date'] ?? 0;
    $this->utterance_string = $s['utterance_string'] ?? '';
  }
}

class UtteranceList {
  public ?Version $bot_version;
  public ?ListOfUtterance $utterances;

  public function __construct(shape(
    ?'bot_version' => ?Version,
    ?'utterances' => ?ListOfUtterance,
  ) $s = shape()) {
    $this->bot_version = $s['bot_version'] ?? '';
    $this->utterances = $s['utterances'] ?? vec[];
  }
}

type UtteranceString = string;

type Value = string;

type Version = string;

