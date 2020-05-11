<?hh // strict
namespace slack\aws\models.lex;

interface Lex Model Building Service {
  public function CreateBotVersion(CreateBotVersionRequest): Awaitable<Errors\Result<CreateBotVersionResponse>>;
  public function CreateIntentVersion(CreateIntentVersionRequest): Awaitable<Errors\Result<CreateIntentVersionResponse>>;
  public function CreateSlotTypeVersion(CreateSlotTypeVersionRequest): Awaitable<Errors\Result<CreateSlotTypeVersionResponse>>;
  public function DeleteBot(DeleteBotRequest): Awaitable<Errors\Error>;
  public function DeleteBotAlias(DeleteBotAliasRequest): Awaitable<Errors\Error>;
  public function DeleteBotChannelAssociation(DeleteBotChannelAssociationRequest): Awaitable<Errors\Error>;
  public function DeleteBotVersion(DeleteBotVersionRequest): Awaitable<Errors\Error>;
  public function DeleteIntent(DeleteIntentRequest): Awaitable<Errors\Error>;
  public function DeleteIntentVersion(DeleteIntentVersionRequest): Awaitable<Errors\Error>;
  public function DeleteSlotType(DeleteSlotTypeRequest): Awaitable<Errors\Error>;
  public function DeleteSlotTypeVersion(DeleteSlotTypeVersionRequest): Awaitable<Errors\Error>;
  public function DeleteUtterances(DeleteUtterancesRequest): Awaitable<Errors\Error>;
  public function GetBot(GetBotRequest): Awaitable<Errors\Result<GetBotResponse>>;
  public function GetBotAlias(GetBotAliasRequest): Awaitable<Errors\Result<GetBotAliasResponse>>;
  public function GetBotAliases(GetBotAliasesRequest): Awaitable<Errors\Result<GetBotAliasesResponse>>;
  public function GetBotChannelAssociation(GetBotChannelAssociationRequest): Awaitable<Errors\Result<GetBotChannelAssociationResponse>>;
  public function GetBotChannelAssociations(GetBotChannelAssociationsRequest): Awaitable<Errors\Result<GetBotChannelAssociationsResponse>>;
  public function GetBotVersions(GetBotVersionsRequest): Awaitable<Errors\Result<GetBotVersionsResponse>>;
  public function GetBots(GetBotsRequest): Awaitable<Errors\Result<GetBotsResponse>>;
  public function GetBuiltinIntent(GetBuiltinIntentRequest): Awaitable<Errors\Result<GetBuiltinIntentResponse>>;
  public function GetBuiltinIntents(GetBuiltinIntentsRequest): Awaitable<Errors\Result<GetBuiltinIntentsResponse>>;
  public function GetBuiltinSlotTypes(GetBuiltinSlotTypesRequest): Awaitable<Errors\Result<GetBuiltinSlotTypesResponse>>;
  public function GetExport(GetExportRequest): Awaitable<Errors\Result<GetExportResponse>>;
  public function GetImport(GetImportRequest): Awaitable<Errors\Result<GetImportResponse>>;
  public function GetIntent(GetIntentRequest): Awaitable<Errors\Result<GetIntentResponse>>;
  public function GetIntentVersions(GetIntentVersionsRequest): Awaitable<Errors\Result<GetIntentVersionsResponse>>;
  public function GetIntents(GetIntentsRequest): Awaitable<Errors\Result<GetIntentsResponse>>;
  public function GetSlotType(GetSlotTypeRequest): Awaitable<Errors\Result<GetSlotTypeResponse>>;
  public function GetSlotTypeVersions(GetSlotTypeVersionsRequest): Awaitable<Errors\Result<GetSlotTypeVersionsResponse>>;
  public function GetSlotTypes(GetSlotTypesRequest): Awaitable<Errors\Result<GetSlotTypesResponse>>;
  public function GetUtterancesView(GetUtterancesViewRequest): Awaitable<Errors\Result<GetUtterancesViewResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function PutBot(PutBotRequest): Awaitable<Errors\Result<PutBotResponse>>;
  public function PutBotAlias(PutBotAliasRequest): Awaitable<Errors\Result<PutBotAliasResponse>>;
  public function PutIntent(PutIntentRequest): Awaitable<Errors\Result<PutIntentResponse>>;
  public function PutSlotType(PutSlotTypeRequest): Awaitable<Errors\Result<PutSlotTypeResponse>>;
  public function StartImport(StartImportRequest): Awaitable<Errors\Result<StartImportResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
}

type AliasName = string;

type AliasNameOrListAll = string;

type AmazonResourceName = string;

class BadRequestException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type Blob = string;

type Boolean = bool;

class BotAliasMetadata {
  public BotName $bot_name;
  public Version $bot_version;
  public string $checksum;
  public ConversationLogsResponse $conversation_logs;
  public Timestamp $created_date;
  public Description $description;
  public Timestamp $last_updated_date;
  public AliasName $name;

  public function __construct(shape(
  ?'bot_name' => BotName,
  ?'bot_version' => Version,
  ?'checksum' => string,
  ?'conversation_logs' => ConversationLogsResponse,
  ?'created_date' => Timestamp,
  ?'description' => Description,
  ?'last_updated_date' => Timestamp,
  ?'name' => AliasName,
  ) $s = shape()) {
    $this->bot_name = $bot_name ?? "";
    $this->bot_version = $bot_version ?? "";
    $this->checksum = $checksum ?? "";
    $this->conversation_logs = $conversation_logs ?? null;
    $this->created_date = $created_date ?? 0;
    $this->description = $description ?? "";
    $this->last_updated_date = $last_updated_date ?? 0;
    $this->name = $name ?? "";
  }
}

type BotAliasMetadataList = vec<BotAliasMetadata>;

class BotChannelAssociation {
  public AliasName $bot_alias;
  public ChannelConfigurationMap $bot_configuration;
  public BotName $bot_name;
  public Timestamp $created_date;
  public Description $description;
  public string $failure_reason;
  public BotChannelName $name;
  public ChannelStatus $status;
  public ChannelType $type;

  public function __construct(shape(
  ?'bot_alias' => AliasName,
  ?'bot_configuration' => ChannelConfigurationMap,
  ?'bot_name' => BotName,
  ?'created_date' => Timestamp,
  ?'description' => Description,
  ?'failure_reason' => string,
  ?'name' => BotChannelName,
  ?'status' => ChannelStatus,
  ?'type' => ChannelType,
  ) $s = shape()) {
    $this->bot_alias = $bot_alias ?? "";
    $this->bot_configuration = $bot_configuration ?? [];
    $this->bot_name = $bot_name ?? "";
    $this->created_date = $created_date ?? 0;
    $this->description = $description ?? "";
    $this->failure_reason = $failure_reason ?? "";
    $this->name = $name ?? "";
    $this->status = $status ?? "";
    $this->type = $type ?? "";
  }
}

type BotChannelAssociationList = vec<BotChannelAssociation>;

type BotChannelName = string;

class BotMetadata {
  public Timestamp $created_date;
  public Description $description;
  public Timestamp $last_updated_date;
  public BotName $name;
  public Status $status;
  public Version $version;

  public function __construct(shape(
  ?'created_date' => Timestamp,
  ?'description' => Description,
  ?'last_updated_date' => Timestamp,
  ?'name' => BotName,
  ?'status' => Status,
  ?'version' => Version,
  ) $s = shape()) {
    $this->created_date = $created_date ?? 0;
    $this->description = $description ?? "";
    $this->last_updated_date = $last_updated_date ?? 0;
    $this->name = $name ?? "";
    $this->status = $status ?? "";
    $this->version = $version ?? "";
  }
}

type BotMetadataList = vec<BotMetadata>;

type BotName = string;

type BotVersions = vec<Version>;

class BuiltinIntentMetadata {
  public BuiltinIntentSignature $signature;
  public LocaleList $supported_locales;

  public function __construct(shape(
  ?'signature' => BuiltinIntentSignature,
  ?'supported_locales' => LocaleList,
  ) $s = shape()) {
    $this->signature = $signature ?? "";
    $this->supported_locales = $supported_locales ?? [];
  }
}

type BuiltinIntentMetadataList = vec<BuiltinIntentMetadata>;

type BuiltinIntentSignature = string;

class BuiltinIntentSlot {
  public string $name;

  public function __construct(shape(
  ?'name' => string,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

type BuiltinIntentSlotList = vec<BuiltinIntentSlot>;

class BuiltinSlotTypeMetadata {
  public BuiltinSlotTypeSignature $signature;
  public LocaleList $supported_locales;

  public function __construct(shape(
  ?'signature' => BuiltinSlotTypeSignature,
  ?'supported_locales' => LocaleList,
  ) $s = shape()) {
    $this->signature = $signature ?? "";
    $this->supported_locales = $supported_locales ?? [];
  }
}

type BuiltinSlotTypeMetadataList = vec<BuiltinSlotTypeMetadata>;

type BuiltinSlotTypeSignature = string;

type ChannelConfigurationMap = dict<String, String>;

type ChannelStatus = string;

type ChannelType = string;

class CodeHook {
  public MessageVersion $message_version;
  public LambdaARN $uri;

  public function __construct(shape(
  ?'message_version' => MessageVersion,
  ?'uri' => LambdaARN,
  ) $s = shape()) {
    $this->message_version = $message_version ?? "";
    $this->uri = $uri ?? "";
  }
}

class ConflictException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ContentString = string;

type ContentType = string;

class ConversationLogsRequest {
  public IamRoleArn $iam_role_arn;
  public LogSettingsRequestList $log_settings;

  public function __construct(shape(
  ?'iam_role_arn' => IamRoleArn,
  ?'log_settings' => LogSettingsRequestList,
  ) $s = shape()) {
    $this->iam_role_arn = $iam_role_arn ?? "";
    $this->log_settings = $log_settings ?? [];
  }
}

class ConversationLogsResponse {
  public IamRoleArn $iam_role_arn;
  public LogSettingsResponseList $log_settings;

  public function __construct(shape(
  ?'iam_role_arn' => IamRoleArn,
  ?'log_settings' => LogSettingsResponseList,
  ) $s = shape()) {
    $this->iam_role_arn = $iam_role_arn ?? "";
    $this->log_settings = $log_settings ?? [];
  }
}

type Count = int;

class CreateBotVersionRequest {
  public string $checksum;
  public BotName $name;

  public function __construct(shape(
  ?'checksum' => string,
  ?'name' => BotName,
  ) $s = shape()) {
    $this->checksum = $checksum ?? "";
    $this->name = $name ?? "";
  }
}

class CreateBotVersionResponse {
  public Statement $abort_statement;
  public string $checksum;
  public boolean $child_directed;
  public Prompt $clarification_prompt;
  public Timestamp $created_date;
  public Description $description;
  public boolean $detect_sentiment;
  public string $failure_reason;
  public SessionTTL $idle_session_ttl_in_seconds;
  public IntentList $intents;
  public Timestamp $last_updated_date;
  public Locale $locale;
  public BotName $name;
  public Status $status;
  public Version $version;
  public string $voice_id;

  public function __construct(shape(
  ?'abort_statement' => Statement,
  ?'checksum' => string,
  ?'child_directed' => boolean,
  ?'clarification_prompt' => Prompt,
  ?'created_date' => Timestamp,
  ?'description' => Description,
  ?'detect_sentiment' => boolean,
  ?'failure_reason' => string,
  ?'idle_session_ttl_in_seconds' => SessionTTL,
  ?'intents' => IntentList,
  ?'last_updated_date' => Timestamp,
  ?'locale' => Locale,
  ?'name' => BotName,
  ?'status' => Status,
  ?'version' => Version,
  ?'voice_id' => string,
  ) $s = shape()) {
    $this->abort_statement = $abort_statement ?? null;
    $this->checksum = $checksum ?? "";
    $this->child_directed = $child_directed ?? false;
    $this->clarification_prompt = $clarification_prompt ?? null;
    $this->created_date = $created_date ?? 0;
    $this->description = $description ?? "";
    $this->detect_sentiment = $detect_sentiment ?? false;
    $this->failure_reason = $failure_reason ?? "";
    $this->idle_session_ttl_in_seconds = $idle_session_ttl_in_seconds ?? 0;
    $this->intents = $intents ?? [];
    $this->last_updated_date = $last_updated_date ?? 0;
    $this->locale = $locale ?? "";
    $this->name = $name ?? "";
    $this->status = $status ?? "";
    $this->version = $version ?? "";
    $this->voice_id = $voice_id ?? "";
  }
}

class CreateIntentVersionRequest {
  public string $checksum;
  public IntentName $name;

  public function __construct(shape(
  ?'checksum' => string,
  ?'name' => IntentName,
  ) $s = shape()) {
    $this->checksum = $checksum ?? "";
    $this->name = $name ?? "";
  }
}

class CreateIntentVersionResponse {
  public string $checksum;
  public Statement $conclusion_statement;
  public Prompt $confirmation_prompt;
  public Timestamp $created_date;
  public Description $description;
  public CodeHook $dialog_code_hook;
  public FollowUpPrompt $follow_up_prompt;
  public FulfillmentActivity $fulfillment_activity;
  public Timestamp $last_updated_date;
  public IntentName $name;
  public BuiltinIntentSignature $parent_intent_signature;
  public Statement $rejection_statement;
  public IntentUtteranceList $sample_utterances;
  public SlotList $slots;
  public Version $version;

  public function __construct(shape(
  ?'checksum' => string,
  ?'conclusion_statement' => Statement,
  ?'confirmation_prompt' => Prompt,
  ?'created_date' => Timestamp,
  ?'description' => Description,
  ?'dialog_code_hook' => CodeHook,
  ?'follow_up_prompt' => FollowUpPrompt,
  ?'fulfillment_activity' => FulfillmentActivity,
  ?'last_updated_date' => Timestamp,
  ?'name' => IntentName,
  ?'parent_intent_signature' => BuiltinIntentSignature,
  ?'rejection_statement' => Statement,
  ?'sample_utterances' => IntentUtteranceList,
  ?'slots' => SlotList,
  ?'version' => Version,
  ) $s = shape()) {
    $this->checksum = $checksum ?? "";
    $this->conclusion_statement = $conclusion_statement ?? null;
    $this->confirmation_prompt = $confirmation_prompt ?? null;
    $this->created_date = $created_date ?? 0;
    $this->description = $description ?? "";
    $this->dialog_code_hook = $dialog_code_hook ?? null;
    $this->follow_up_prompt = $follow_up_prompt ?? null;
    $this->fulfillment_activity = $fulfillment_activity ?? null;
    $this->last_updated_date = $last_updated_date ?? 0;
    $this->name = $name ?? "";
    $this->parent_intent_signature = $parent_intent_signature ?? "";
    $this->rejection_statement = $rejection_statement ?? null;
    $this->sample_utterances = $sample_utterances ?? [];
    $this->slots = $slots ?? [];
    $this->version = $version ?? "";
  }
}

class CreateSlotTypeVersionRequest {
  public string $checksum;
  public SlotTypeName $name;

  public function __construct(shape(
  ?'checksum' => string,
  ?'name' => SlotTypeName,
  ) $s = shape()) {
    $this->checksum = $checksum ?? "";
    $this->name = $name ?? "";
  }
}

class CreateSlotTypeVersionResponse {
  public string $checksum;
  public Timestamp $created_date;
  public Description $description;
  public EnumerationValues $enumeration_values;
  public Timestamp $last_updated_date;
  public SlotTypeName $name;
  public CustomOrBuiltinSlotTypeName $parent_slot_type_signature;
  public SlotTypeConfigurations $slot_type_configurations;
  public SlotValueSelectionStrategy $value_selection_strategy;
  public Version $version;

  public function __construct(shape(
  ?'checksum' => string,
  ?'created_date' => Timestamp,
  ?'description' => Description,
  ?'enumeration_values' => EnumerationValues,
  ?'last_updated_date' => Timestamp,
  ?'name' => SlotTypeName,
  ?'parent_slot_type_signature' => CustomOrBuiltinSlotTypeName,
  ?'slot_type_configurations' => SlotTypeConfigurations,
  ?'value_selection_strategy' => SlotValueSelectionStrategy,
  ?'version' => Version,
  ) $s = shape()) {
    $this->checksum = $checksum ?? "";
    $this->created_date = $created_date ?? 0;
    $this->description = $description ?? "";
    $this->enumeration_values = $enumeration_values ?? [];
    $this->last_updated_date = $last_updated_date ?? 0;
    $this->name = $name ?? "";
    $this->parent_slot_type_signature = $parent_slot_type_signature ?? "";
    $this->slot_type_configurations = $slot_type_configurations ?? [];
    $this->value_selection_strategy = $value_selection_strategy ?? "";
    $this->version = $version ?? "";
  }
}

type CustomOrBuiltinSlotTypeName = string;

class DeleteBotAliasRequest {
  public BotName $bot_name;
  public AliasName $name;

  public function __construct(shape(
  ?'bot_name' => BotName,
  ?'name' => AliasName,
  ) $s = shape()) {
    $this->bot_name = $bot_name ?? "";
    $this->name = $name ?? "";
  }
}

class DeleteBotChannelAssociationRequest {
  public AliasName $bot_alias;
  public BotName $bot_name;
  public BotChannelName $name;

  public function __construct(shape(
  ?'bot_alias' => AliasName,
  ?'bot_name' => BotName,
  ?'name' => BotChannelName,
  ) $s = shape()) {
    $this->bot_alias = $bot_alias ?? "";
    $this->bot_name = $bot_name ?? "";
    $this->name = $name ?? "";
  }
}

class DeleteBotRequest {
  public BotName $name;

  public function __construct(shape(
  ?'name' => BotName,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class DeleteBotVersionRequest {
  public BotName $name;
  public NumericalVersion $version;

  public function __construct(shape(
  ?'name' => BotName,
  ?'version' => NumericalVersion,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->version = $version ?? "";
  }
}

class DeleteIntentRequest {
  public IntentName $name;

  public function __construct(shape(
  ?'name' => IntentName,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class DeleteIntentVersionRequest {
  public IntentName $name;
  public NumericalVersion $version;

  public function __construct(shape(
  ?'name' => IntentName,
  ?'version' => NumericalVersion,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->version = $version ?? "";
  }
}

class DeleteSlotTypeRequest {
  public SlotTypeName $name;

  public function __construct(shape(
  ?'name' => SlotTypeName,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class DeleteSlotTypeVersionRequest {
  public SlotTypeName $name;
  public NumericalVersion $version;

  public function __construct(shape(
  ?'name' => SlotTypeName,
  ?'version' => NumericalVersion,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->version = $version ?? "";
  }
}

class DeleteUtterancesRequest {
  public BotName $bot_name;
  public UserId $user_id;

  public function __construct(shape(
  ?'bot_name' => BotName,
  ?'user_id' => UserId,
  ) $s = shape()) {
    $this->bot_name = $bot_name ?? "";
    $this->user_id = $user_id ?? "";
  }
}

type Description = string;

type Destination = string;

class EnumerationValue {
  public SynonymList $synonyms;
  public Value $value;

  public function __construct(shape(
  ?'synonyms' => SynonymList,
  ?'value' => Value,
  ) $s = shape()) {
    $this->synonyms = $synonyms ?? [];
    $this->value = $value ?? "";
  }
}

type EnumerationValues = vec<EnumerationValue>;

type ExportStatus = string;

type ExportType = string;

class FollowUpPrompt {
  public Prompt $prompt;
  public Statement $rejection_statement;

  public function __construct(shape(
  ?'prompt' => Prompt,
  ?'rejection_statement' => Statement,
  ) $s = shape()) {
    $this->prompt = $prompt ?? null;
    $this->rejection_statement = $rejection_statement ?? null;
  }
}

class FulfillmentActivity {
  public CodeHook $code_hook;
  public FulfillmentActivityType $type;

  public function __construct(shape(
  ?'code_hook' => CodeHook,
  ?'type' => FulfillmentActivityType,
  ) $s = shape()) {
    $this->code_hook = $code_hook ?? null;
    $this->type = $type ?? "";
  }
}

type FulfillmentActivityType = string;

class GetBotAliasRequest {
  public BotName $bot_name;
  public AliasName $name;

  public function __construct(shape(
  ?'bot_name' => BotName,
  ?'name' => AliasName,
  ) $s = shape()) {
    $this->bot_name = $bot_name ?? "";
    $this->name = $name ?? "";
  }
}

class GetBotAliasResponse {
  public BotName $bot_name;
  public Version $bot_version;
  public string $checksum;
  public ConversationLogsResponse $conversation_logs;
  public Timestamp $created_date;
  public Description $description;
  public Timestamp $last_updated_date;
  public AliasName $name;

  public function __construct(shape(
  ?'bot_name' => BotName,
  ?'bot_version' => Version,
  ?'checksum' => string,
  ?'conversation_logs' => ConversationLogsResponse,
  ?'created_date' => Timestamp,
  ?'description' => Description,
  ?'last_updated_date' => Timestamp,
  ?'name' => AliasName,
  ) $s = shape()) {
    $this->bot_name = $bot_name ?? "";
    $this->bot_version = $bot_version ?? "";
    $this->checksum = $checksum ?? "";
    $this->conversation_logs = $conversation_logs ?? null;
    $this->created_date = $created_date ?? 0;
    $this->description = $description ?? "";
    $this->last_updated_date = $last_updated_date ?? 0;
    $this->name = $name ?? "";
  }
}

class GetBotAliasesRequest {
  public BotName $bot_name;
  public MaxResults $max_results;
  public AliasName $name_contains;
  public NextToken $next_token;

  public function __construct(shape(
  ?'bot_name' => BotName,
  ?'max_results' => MaxResults,
  ?'name_contains' => AliasName,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->bot_name = $bot_name ?? "";
    $this->max_results = $max_results ?? 0;
    $this->name_contains = $name_contains ?? "";
    $this->next_token = $next_token ?? "";
  }
}

class GetBotAliasesResponse {
  public BotAliasMetadataList $bot_aliases;
  public NextToken $next_token;

  public function __construct(shape(
  ?'bot_aliases' => BotAliasMetadataList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->bot_aliases = $bot_aliases ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class GetBotChannelAssociationRequest {
  public AliasName $bot_alias;
  public BotName $bot_name;
  public BotChannelName $name;

  public function __construct(shape(
  ?'bot_alias' => AliasName,
  ?'bot_name' => BotName,
  ?'name' => BotChannelName,
  ) $s = shape()) {
    $this->bot_alias = $bot_alias ?? "";
    $this->bot_name = $bot_name ?? "";
    $this->name = $name ?? "";
  }
}

class GetBotChannelAssociationResponse {
  public AliasName $bot_alias;
  public ChannelConfigurationMap $bot_configuration;
  public BotName $bot_name;
  public Timestamp $created_date;
  public Description $description;
  public string $failure_reason;
  public BotChannelName $name;
  public ChannelStatus $status;
  public ChannelType $type;

  public function __construct(shape(
  ?'bot_alias' => AliasName,
  ?'bot_configuration' => ChannelConfigurationMap,
  ?'bot_name' => BotName,
  ?'created_date' => Timestamp,
  ?'description' => Description,
  ?'failure_reason' => string,
  ?'name' => BotChannelName,
  ?'status' => ChannelStatus,
  ?'type' => ChannelType,
  ) $s = shape()) {
    $this->bot_alias = $bot_alias ?? "";
    $this->bot_configuration = $bot_configuration ?? [];
    $this->bot_name = $bot_name ?? "";
    $this->created_date = $created_date ?? 0;
    $this->description = $description ?? "";
    $this->failure_reason = $failure_reason ?? "";
    $this->name = $name ?? "";
    $this->status = $status ?? "";
    $this->type = $type ?? "";
  }
}

class GetBotChannelAssociationsRequest {
  public AliasNameOrListAll $bot_alias;
  public BotName $bot_name;
  public MaxResults $max_results;
  public BotChannelName $name_contains;
  public NextToken $next_token;

  public function __construct(shape(
  ?'bot_alias' => AliasNameOrListAll,
  ?'bot_name' => BotName,
  ?'max_results' => MaxResults,
  ?'name_contains' => BotChannelName,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->bot_alias = $bot_alias ?? "";
    $this->bot_name = $bot_name ?? "";
    $this->max_results = $max_results ?? 0;
    $this->name_contains = $name_contains ?? "";
    $this->next_token = $next_token ?? "";
  }
}

class GetBotChannelAssociationsResponse {
  public BotChannelAssociationList $bot_channel_associations;
  public NextToken $next_token;

  public function __construct(shape(
  ?'bot_channel_associations' => BotChannelAssociationList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->bot_channel_associations = $bot_channel_associations ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class GetBotRequest {
  public BotName $name;
  public string $version_or_alias;

  public function __construct(shape(
  ?'name' => BotName,
  ?'version_or_alias' => string,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->version_or_alias = $version_or_alias ?? "";
  }
}

class GetBotResponse {
  public Statement $abort_statement;
  public string $checksum;
  public boolean $child_directed;
  public Prompt $clarification_prompt;
  public Timestamp $created_date;
  public Description $description;
  public boolean $detect_sentiment;
  public string $failure_reason;
  public SessionTTL $idle_session_ttl_in_seconds;
  public IntentList $intents;
  public Timestamp $last_updated_date;
  public Locale $locale;
  public BotName $name;
  public Status $status;
  public Version $version;
  public string $voice_id;

  public function __construct(shape(
  ?'abort_statement' => Statement,
  ?'checksum' => string,
  ?'child_directed' => boolean,
  ?'clarification_prompt' => Prompt,
  ?'created_date' => Timestamp,
  ?'description' => Description,
  ?'detect_sentiment' => boolean,
  ?'failure_reason' => string,
  ?'idle_session_ttl_in_seconds' => SessionTTL,
  ?'intents' => IntentList,
  ?'last_updated_date' => Timestamp,
  ?'locale' => Locale,
  ?'name' => BotName,
  ?'status' => Status,
  ?'version' => Version,
  ?'voice_id' => string,
  ) $s = shape()) {
    $this->abort_statement = $abort_statement ?? null;
    $this->checksum = $checksum ?? "";
    $this->child_directed = $child_directed ?? false;
    $this->clarification_prompt = $clarification_prompt ?? null;
    $this->created_date = $created_date ?? 0;
    $this->description = $description ?? "";
    $this->detect_sentiment = $detect_sentiment ?? false;
    $this->failure_reason = $failure_reason ?? "";
    $this->idle_session_ttl_in_seconds = $idle_session_ttl_in_seconds ?? 0;
    $this->intents = $intents ?? [];
    $this->last_updated_date = $last_updated_date ?? 0;
    $this->locale = $locale ?? "";
    $this->name = $name ?? "";
    $this->status = $status ?? "";
    $this->version = $version ?? "";
    $this->voice_id = $voice_id ?? "";
  }
}

class GetBotVersionsRequest {
  public MaxResults $max_results;
  public BotName $name;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'name' => BotName,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->name = $name ?? "";
    $this->next_token = $next_token ?? "";
  }
}

class GetBotVersionsResponse {
  public BotMetadataList $bots;
  public NextToken $next_token;

  public function __construct(shape(
  ?'bots' => BotMetadataList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->bots = $bots ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class GetBotsRequest {
  public MaxResults $max_results;
  public BotName $name_contains;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'name_contains' => BotName,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->name_contains = $name_contains ?? "";
    $this->next_token = $next_token ?? "";
  }
}

class GetBotsResponse {
  public BotMetadataList $bots;
  public NextToken $next_token;

  public function __construct(shape(
  ?'bots' => BotMetadataList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->bots = $bots ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class GetBuiltinIntentRequest {
  public BuiltinIntentSignature $signature;

  public function __construct(shape(
  ?'signature' => BuiltinIntentSignature,
  ) $s = shape()) {
    $this->signature = $signature ?? "";
  }
}

class GetBuiltinIntentResponse {
  public BuiltinIntentSignature $signature;
  public BuiltinIntentSlotList $slots;
  public LocaleList $supported_locales;

  public function __construct(shape(
  ?'signature' => BuiltinIntentSignature,
  ?'slots' => BuiltinIntentSlotList,
  ?'supported_locales' => LocaleList,
  ) $s = shape()) {
    $this->signature = $signature ?? "";
    $this->slots = $slots ?? [];
    $this->supported_locales = $supported_locales ?? [];
  }
}

class GetBuiltinIntentsRequest {
  public Locale $locale;
  public MaxResults $max_results;
  public NextToken $next_token;
  public string $signature_contains;

  public function __construct(shape(
  ?'locale' => Locale,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'signature_contains' => string,
  ) $s = shape()) {
    $this->locale = $locale ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->signature_contains = $signature_contains ?? "";
  }
}

class GetBuiltinIntentsResponse {
  public BuiltinIntentMetadataList $intents;
  public NextToken $next_token;

  public function __construct(shape(
  ?'intents' => BuiltinIntentMetadataList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->intents = $intents ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class GetBuiltinSlotTypesRequest {
  public Locale $locale;
  public MaxResults $max_results;
  public NextToken $next_token;
  public string $signature_contains;

  public function __construct(shape(
  ?'locale' => Locale,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'signature_contains' => string,
  ) $s = shape()) {
    $this->locale = $locale ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->signature_contains = $signature_contains ?? "";
  }
}

class GetBuiltinSlotTypesResponse {
  public NextToken $next_token;
  public BuiltinSlotTypeMetadataList $slot_types;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'slot_types' => BuiltinSlotTypeMetadataList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->slot_types = $slot_types ?? [];
  }
}

class GetExportRequest {
  public ExportType $export_type;
  public Name $name;
  public ResourceType $resource_type;
  public NumericalVersion $version;

  public function __construct(shape(
  ?'export_type' => ExportType,
  ?'name' => Name,
  ?'resource_type' => ResourceType,
  ?'version' => NumericalVersion,
  ) $s = shape()) {
    $this->export_type = $export_type ?? "";
    $this->name = $name ?? "";
    $this->resource_type = $resource_type ?? "";
    $this->version = $version ?? "";
  }
}

class GetExportResponse {
  public ExportStatus $export_status;
  public ExportType $export_type;
  public string $failure_reason;
  public Name $name;
  public ResourceType $resource_type;
  public string $url;
  public NumericalVersion $version;

  public function __construct(shape(
  ?'export_status' => ExportStatus,
  ?'export_type' => ExportType,
  ?'failure_reason' => string,
  ?'name' => Name,
  ?'resource_type' => ResourceType,
  ?'url' => string,
  ?'version' => NumericalVersion,
  ) $s = shape()) {
    $this->export_status = $export_status ?? "";
    $this->export_type = $export_type ?? "";
    $this->failure_reason = $failure_reason ?? "";
    $this->name = $name ?? "";
    $this->resource_type = $resource_type ?? "";
    $this->url = $url ?? "";
    $this->version = $version ?? "";
  }
}

class GetImportRequest {
  public string $import_id;

  public function __construct(shape(
  ?'import_id' => string,
  ) $s = shape()) {
    $this->import_id = $import_id ?? "";
  }
}

class GetImportResponse {
  public Timestamp $created_date;
  public StringList $failure_reason;
  public string $import_id;
  public ImportStatus $import_status;
  public MergeStrategy $merge_strategy;
  public Name $name;
  public ResourceType $resource_type;

  public function __construct(shape(
  ?'created_date' => Timestamp,
  ?'failure_reason' => StringList,
  ?'import_id' => string,
  ?'import_status' => ImportStatus,
  ?'merge_strategy' => MergeStrategy,
  ?'name' => Name,
  ?'resource_type' => ResourceType,
  ) $s = shape()) {
    $this->created_date = $created_date ?? 0;
    $this->failure_reason = $failure_reason ?? [];
    $this->import_id = $import_id ?? "";
    $this->import_status = $import_status ?? "";
    $this->merge_strategy = $merge_strategy ?? "";
    $this->name = $name ?? "";
    $this->resource_type = $resource_type ?? "";
  }
}

class GetIntentRequest {
  public IntentName $name;
  public Version $version;

  public function __construct(shape(
  ?'name' => IntentName,
  ?'version' => Version,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->version = $version ?? "";
  }
}

class GetIntentResponse {
  public string $checksum;
  public Statement $conclusion_statement;
  public Prompt $confirmation_prompt;
  public Timestamp $created_date;
  public Description $description;
  public CodeHook $dialog_code_hook;
  public FollowUpPrompt $follow_up_prompt;
  public FulfillmentActivity $fulfillment_activity;
  public Timestamp $last_updated_date;
  public IntentName $name;
  public BuiltinIntentSignature $parent_intent_signature;
  public Statement $rejection_statement;
  public IntentUtteranceList $sample_utterances;
  public SlotList $slots;
  public Version $version;

  public function __construct(shape(
  ?'checksum' => string,
  ?'conclusion_statement' => Statement,
  ?'confirmation_prompt' => Prompt,
  ?'created_date' => Timestamp,
  ?'description' => Description,
  ?'dialog_code_hook' => CodeHook,
  ?'follow_up_prompt' => FollowUpPrompt,
  ?'fulfillment_activity' => FulfillmentActivity,
  ?'last_updated_date' => Timestamp,
  ?'name' => IntentName,
  ?'parent_intent_signature' => BuiltinIntentSignature,
  ?'rejection_statement' => Statement,
  ?'sample_utterances' => IntentUtteranceList,
  ?'slots' => SlotList,
  ?'version' => Version,
  ) $s = shape()) {
    $this->checksum = $checksum ?? "";
    $this->conclusion_statement = $conclusion_statement ?? null;
    $this->confirmation_prompt = $confirmation_prompt ?? null;
    $this->created_date = $created_date ?? 0;
    $this->description = $description ?? "";
    $this->dialog_code_hook = $dialog_code_hook ?? null;
    $this->follow_up_prompt = $follow_up_prompt ?? null;
    $this->fulfillment_activity = $fulfillment_activity ?? null;
    $this->last_updated_date = $last_updated_date ?? 0;
    $this->name = $name ?? "";
    $this->parent_intent_signature = $parent_intent_signature ?? "";
    $this->rejection_statement = $rejection_statement ?? null;
    $this->sample_utterances = $sample_utterances ?? [];
    $this->slots = $slots ?? [];
    $this->version = $version ?? "";
  }
}

class GetIntentVersionsRequest {
  public MaxResults $max_results;
  public IntentName $name;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'name' => IntentName,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->name = $name ?? "";
    $this->next_token = $next_token ?? "";
  }
}

class GetIntentVersionsResponse {
  public IntentMetadataList $intents;
  public NextToken $next_token;

  public function __construct(shape(
  ?'intents' => IntentMetadataList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->intents = $intents ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class GetIntentsRequest {
  public MaxResults $max_results;
  public IntentName $name_contains;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'name_contains' => IntentName,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->name_contains = $name_contains ?? "";
    $this->next_token = $next_token ?? "";
  }
}

class GetIntentsResponse {
  public IntentMetadataList $intents;
  public NextToken $next_token;

  public function __construct(shape(
  ?'intents' => IntentMetadataList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->intents = $intents ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class GetSlotTypeRequest {
  public SlotTypeName $name;
  public Version $version;

  public function __construct(shape(
  ?'name' => SlotTypeName,
  ?'version' => Version,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->version = $version ?? "";
  }
}

class GetSlotTypeResponse {
  public string $checksum;
  public Timestamp $created_date;
  public Description $description;
  public EnumerationValues $enumeration_values;
  public Timestamp $last_updated_date;
  public SlotTypeName $name;
  public CustomOrBuiltinSlotTypeName $parent_slot_type_signature;
  public SlotTypeConfigurations $slot_type_configurations;
  public SlotValueSelectionStrategy $value_selection_strategy;
  public Version $version;

  public function __construct(shape(
  ?'checksum' => string,
  ?'created_date' => Timestamp,
  ?'description' => Description,
  ?'enumeration_values' => EnumerationValues,
  ?'last_updated_date' => Timestamp,
  ?'name' => SlotTypeName,
  ?'parent_slot_type_signature' => CustomOrBuiltinSlotTypeName,
  ?'slot_type_configurations' => SlotTypeConfigurations,
  ?'value_selection_strategy' => SlotValueSelectionStrategy,
  ?'version' => Version,
  ) $s = shape()) {
    $this->checksum = $checksum ?? "";
    $this->created_date = $created_date ?? 0;
    $this->description = $description ?? "";
    $this->enumeration_values = $enumeration_values ?? [];
    $this->last_updated_date = $last_updated_date ?? 0;
    $this->name = $name ?? "";
    $this->parent_slot_type_signature = $parent_slot_type_signature ?? "";
    $this->slot_type_configurations = $slot_type_configurations ?? [];
    $this->value_selection_strategy = $value_selection_strategy ?? "";
    $this->version = $version ?? "";
  }
}

class GetSlotTypeVersionsRequest {
  public MaxResults $max_results;
  public SlotTypeName $name;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'name' => SlotTypeName,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->name = $name ?? "";
    $this->next_token = $next_token ?? "";
  }
}

class GetSlotTypeVersionsResponse {
  public NextToken $next_token;
  public SlotTypeMetadataList $slot_types;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'slot_types' => SlotTypeMetadataList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->slot_types = $slot_types ?? [];
  }
}

class GetSlotTypesRequest {
  public MaxResults $max_results;
  public SlotTypeName $name_contains;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'name_contains' => SlotTypeName,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->name_contains = $name_contains ?? "";
    $this->next_token = $next_token ?? "";
  }
}

class GetSlotTypesResponse {
  public NextToken $next_token;
  public SlotTypeMetadataList $slot_types;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'slot_types' => SlotTypeMetadataList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->slot_types = $slot_types ?? [];
  }
}

class GetUtterancesViewRequest {
  public BotName $bot_name;
  public BotVersions $bot_versions;
  public StatusType $status_type;

  public function __construct(shape(
  ?'bot_name' => BotName,
  ?'bot_versions' => BotVersions,
  ?'status_type' => StatusType,
  ) $s = shape()) {
    $this->bot_name = $bot_name ?? "";
    $this->bot_versions = $bot_versions ?? [];
    $this->status_type = $status_type ?? "";
  }
}

class GetUtterancesViewResponse {
  public BotName $bot_name;
  public ListsOfUtterances $utterances;

  public function __construct(shape(
  ?'bot_name' => BotName,
  ?'utterances' => ListsOfUtterances,
  ) $s = shape()) {
    $this->bot_name = $bot_name ?? "";
    $this->utterances = $utterances ?? [];
  }
}

type GroupNumber = int;

type IamRoleArn = string;

type ImportStatus = string;

class Intent {
  public IntentName $intent_name;
  public Version $intent_version;

  public function __construct(shape(
  ?'intent_name' => IntentName,
  ?'intent_version' => Version,
  ) $s = shape()) {
    $this->intent_name = $intent_name ?? "";
    $this->intent_version = $intent_version ?? "";
  }
}

type IntentList = vec<Intent>;

class IntentMetadata {
  public Timestamp $created_date;
  public Description $description;
  public Timestamp $last_updated_date;
  public IntentName $name;
  public Version $version;

  public function __construct(shape(
  ?'created_date' => Timestamp,
  ?'description' => Description,
  ?'last_updated_date' => Timestamp,
  ?'name' => IntentName,
  ?'version' => Version,
  ) $s = shape()) {
    $this->created_date = $created_date ?? 0;
    $this->description = $description ?? "";
    $this->last_updated_date = $last_updated_date ?? 0;
    $this->name = $name ?? "";
    $this->version = $version ?? "";
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
    $this->message = $message ?? "";
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
    $this->message = $message ?? "";
    $this->retry_after_seconds = $retry_after_seconds ?? "";
  }
}

type ListOfUtterance = vec<UtteranceData>;

class ListTagsForResourceRequest {
  public AmazonResourceName $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => AmazonResourceName,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
  }
}

class ListTagsForResourceResponse {
  public TagList $tags;

  public function __construct(shape(
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
  }
}

type ListsOfUtterances = vec<UtteranceList>;

type Locale = string;

type LocaleList = vec<Locale>;

class LogSettingsRequest {
  public Destination $destination;
  public KmsKeyArn $kms_key_arn;
  public LogType $log_type;
  public ResourceArn $resource_arn;

  public function __construct(shape(
  ?'destination' => Destination,
  ?'kms_key_arn' => KmsKeyArn,
  ?'log_type' => LogType,
  ?'resource_arn' => ResourceArn,
  ) $s = shape()) {
    $this->destination = $destination ?? "";
    $this->kms_key_arn = $kms_key_arn ?? "";
    $this->log_type = $log_type ?? "";
    $this->resource_arn = $resource_arn ?? "";
  }
}

type LogSettingsRequestList = vec<LogSettingsRequest>;

class LogSettingsResponse {
  public Destination $destination;
  public KmsKeyArn $kms_key_arn;
  public LogType $log_type;
  public ResourceArn $resource_arn;
  public ResourcePrefix $resource_prefix;

  public function __construct(shape(
  ?'destination' => Destination,
  ?'kms_key_arn' => KmsKeyArn,
  ?'log_type' => LogType,
  ?'resource_arn' => ResourceArn,
  ?'resource_prefix' => ResourcePrefix,
  ) $s = shape()) {
    $this->destination = $destination ?? "";
    $this->kms_key_arn = $kms_key_arn ?? "";
    $this->log_type = $log_type ?? "";
    $this->resource_arn = $resource_arn ?? "";
    $this->resource_prefix = $resource_prefix ?? "";
  }
}

type LogSettingsResponseList = vec<LogSettingsResponse>;

type LogType = string;

type MaxResults = int;

type MergeStrategy = string;

class Message {
  public ContentString $content;
  public ContentType $content_type;
  public GroupNumber $group_number;

  public function __construct(shape(
  ?'content' => ContentString,
  ?'content_type' => ContentType,
  ?'group_number' => GroupNumber,
  ) $s = shape()) {
    $this->content = $content ?? "";
    $this->content_type = $content_type ?? "";
    $this->group_number = $group_number ?? 0;
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
    $this->message = $message ?? "";
  }
}

type NumericalVersion = string;

type ObfuscationSetting = string;

class PreconditionFailedException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type Priority = int;

type ProcessBehavior = string;

class Prompt {
  public PromptMaxAttempts $max_attempts;
  public MessageList $messages;
  public ResponseCard $response_card;

  public function __construct(shape(
  ?'max_attempts' => PromptMaxAttempts,
  ?'messages' => MessageList,
  ?'response_card' => ResponseCard,
  ) $s = shape()) {
    $this->max_attempts = $max_attempts ?? 0;
    $this->messages = $messages ?? [];
    $this->response_card = $response_card ?? "";
  }
}

type PromptMaxAttempts = int;

class PutBotAliasRequest {
  public BotName $bot_name;
  public Version $bot_version;
  public string $checksum;
  public ConversationLogsRequest $conversation_logs;
  public Description $description;
  public AliasName $name;
  public TagList $tags;

  public function __construct(shape(
  ?'bot_name' => BotName,
  ?'bot_version' => Version,
  ?'checksum' => string,
  ?'conversation_logs' => ConversationLogsRequest,
  ?'description' => Description,
  ?'name' => AliasName,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->bot_name = $bot_name ?? "";
    $this->bot_version = $bot_version ?? "";
    $this->checksum = $checksum ?? "";
    $this->conversation_logs = $conversation_logs ?? null;
    $this->description = $description ?? "";
    $this->name = $name ?? "";
    $this->tags = $tags ?? [];
  }
}

class PutBotAliasResponse {
  public BotName $bot_name;
  public Version $bot_version;
  public string $checksum;
  public ConversationLogsResponse $conversation_logs;
  public Timestamp $created_date;
  public Description $description;
  public Timestamp $last_updated_date;
  public AliasName $name;
  public TagList $tags;

  public function __construct(shape(
  ?'bot_name' => BotName,
  ?'bot_version' => Version,
  ?'checksum' => string,
  ?'conversation_logs' => ConversationLogsResponse,
  ?'created_date' => Timestamp,
  ?'description' => Description,
  ?'last_updated_date' => Timestamp,
  ?'name' => AliasName,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->bot_name = $bot_name ?? "";
    $this->bot_version = $bot_version ?? "";
    $this->checksum = $checksum ?? "";
    $this->conversation_logs = $conversation_logs ?? null;
    $this->created_date = $created_date ?? 0;
    $this->description = $description ?? "";
    $this->last_updated_date = $last_updated_date ?? 0;
    $this->name = $name ?? "";
    $this->tags = $tags ?? [];
  }
}

class PutBotRequest {
  public Statement $abort_statement;
  public string $checksum;
  public boolean $child_directed;
  public Prompt $clarification_prompt;
  public boolean $create_version;
  public Description $description;
  public boolean $detect_sentiment;
  public SessionTTL $idle_session_ttl_in_seconds;
  public IntentList $intents;
  public Locale $locale;
  public BotName $name;
  public ProcessBehavior $process_behavior;
  public TagList $tags;
  public string $voice_id;

  public function __construct(shape(
  ?'abort_statement' => Statement,
  ?'checksum' => string,
  ?'child_directed' => boolean,
  ?'clarification_prompt' => Prompt,
  ?'create_version' => boolean,
  ?'description' => Description,
  ?'detect_sentiment' => boolean,
  ?'idle_session_ttl_in_seconds' => SessionTTL,
  ?'intents' => IntentList,
  ?'locale' => Locale,
  ?'name' => BotName,
  ?'process_behavior' => ProcessBehavior,
  ?'tags' => TagList,
  ?'voice_id' => string,
  ) $s = shape()) {
    $this->abort_statement = $abort_statement ?? null;
    $this->checksum = $checksum ?? "";
    $this->child_directed = $child_directed ?? false;
    $this->clarification_prompt = $clarification_prompt ?? null;
    $this->create_version = $create_version ?? false;
    $this->description = $description ?? "";
    $this->detect_sentiment = $detect_sentiment ?? false;
    $this->idle_session_ttl_in_seconds = $idle_session_ttl_in_seconds ?? 0;
    $this->intents = $intents ?? [];
    $this->locale = $locale ?? "";
    $this->name = $name ?? "";
    $this->process_behavior = $process_behavior ?? "";
    $this->tags = $tags ?? [];
    $this->voice_id = $voice_id ?? "";
  }
}

class PutBotResponse {
  public Statement $abort_statement;
  public string $checksum;
  public boolean $child_directed;
  public Prompt $clarification_prompt;
  public boolean $create_version;
  public Timestamp $created_date;
  public Description $description;
  public boolean $detect_sentiment;
  public string $failure_reason;
  public SessionTTL $idle_session_ttl_in_seconds;
  public IntentList $intents;
  public Timestamp $last_updated_date;
  public Locale $locale;
  public BotName $name;
  public Status $status;
  public TagList $tags;
  public Version $version;
  public string $voice_id;

  public function __construct(shape(
  ?'abort_statement' => Statement,
  ?'checksum' => string,
  ?'child_directed' => boolean,
  ?'clarification_prompt' => Prompt,
  ?'create_version' => boolean,
  ?'created_date' => Timestamp,
  ?'description' => Description,
  ?'detect_sentiment' => boolean,
  ?'failure_reason' => string,
  ?'idle_session_ttl_in_seconds' => SessionTTL,
  ?'intents' => IntentList,
  ?'last_updated_date' => Timestamp,
  ?'locale' => Locale,
  ?'name' => BotName,
  ?'status' => Status,
  ?'tags' => TagList,
  ?'version' => Version,
  ?'voice_id' => string,
  ) $s = shape()) {
    $this->abort_statement = $abort_statement ?? null;
    $this->checksum = $checksum ?? "";
    $this->child_directed = $child_directed ?? false;
    $this->clarification_prompt = $clarification_prompt ?? null;
    $this->create_version = $create_version ?? false;
    $this->created_date = $created_date ?? 0;
    $this->description = $description ?? "";
    $this->detect_sentiment = $detect_sentiment ?? false;
    $this->failure_reason = $failure_reason ?? "";
    $this->idle_session_ttl_in_seconds = $idle_session_ttl_in_seconds ?? 0;
    $this->intents = $intents ?? [];
    $this->last_updated_date = $last_updated_date ?? 0;
    $this->locale = $locale ?? "";
    $this->name = $name ?? "";
    $this->status = $status ?? "";
    $this->tags = $tags ?? [];
    $this->version = $version ?? "";
    $this->voice_id = $voice_id ?? "";
  }
}

class PutIntentRequest {
  public string $checksum;
  public Statement $conclusion_statement;
  public Prompt $confirmation_prompt;
  public boolean $create_version;
  public Description $description;
  public CodeHook $dialog_code_hook;
  public FollowUpPrompt $follow_up_prompt;
  public FulfillmentActivity $fulfillment_activity;
  public IntentName $name;
  public BuiltinIntentSignature $parent_intent_signature;
  public Statement $rejection_statement;
  public IntentUtteranceList $sample_utterances;
  public SlotList $slots;

  public function __construct(shape(
  ?'checksum' => string,
  ?'conclusion_statement' => Statement,
  ?'confirmation_prompt' => Prompt,
  ?'create_version' => boolean,
  ?'description' => Description,
  ?'dialog_code_hook' => CodeHook,
  ?'follow_up_prompt' => FollowUpPrompt,
  ?'fulfillment_activity' => FulfillmentActivity,
  ?'name' => IntentName,
  ?'parent_intent_signature' => BuiltinIntentSignature,
  ?'rejection_statement' => Statement,
  ?'sample_utterances' => IntentUtteranceList,
  ?'slots' => SlotList,
  ) $s = shape()) {
    $this->checksum = $checksum ?? "";
    $this->conclusion_statement = $conclusion_statement ?? null;
    $this->confirmation_prompt = $confirmation_prompt ?? null;
    $this->create_version = $create_version ?? false;
    $this->description = $description ?? "";
    $this->dialog_code_hook = $dialog_code_hook ?? null;
    $this->follow_up_prompt = $follow_up_prompt ?? null;
    $this->fulfillment_activity = $fulfillment_activity ?? null;
    $this->name = $name ?? "";
    $this->parent_intent_signature = $parent_intent_signature ?? "";
    $this->rejection_statement = $rejection_statement ?? null;
    $this->sample_utterances = $sample_utterances ?? [];
    $this->slots = $slots ?? [];
  }
}

class PutIntentResponse {
  public string $checksum;
  public Statement $conclusion_statement;
  public Prompt $confirmation_prompt;
  public boolean $create_version;
  public Timestamp $created_date;
  public Description $description;
  public CodeHook $dialog_code_hook;
  public FollowUpPrompt $follow_up_prompt;
  public FulfillmentActivity $fulfillment_activity;
  public Timestamp $last_updated_date;
  public IntentName $name;
  public BuiltinIntentSignature $parent_intent_signature;
  public Statement $rejection_statement;
  public IntentUtteranceList $sample_utterances;
  public SlotList $slots;
  public Version $version;

  public function __construct(shape(
  ?'checksum' => string,
  ?'conclusion_statement' => Statement,
  ?'confirmation_prompt' => Prompt,
  ?'create_version' => boolean,
  ?'created_date' => Timestamp,
  ?'description' => Description,
  ?'dialog_code_hook' => CodeHook,
  ?'follow_up_prompt' => FollowUpPrompt,
  ?'fulfillment_activity' => FulfillmentActivity,
  ?'last_updated_date' => Timestamp,
  ?'name' => IntentName,
  ?'parent_intent_signature' => BuiltinIntentSignature,
  ?'rejection_statement' => Statement,
  ?'sample_utterances' => IntentUtteranceList,
  ?'slots' => SlotList,
  ?'version' => Version,
  ) $s = shape()) {
    $this->checksum = $checksum ?? "";
    $this->conclusion_statement = $conclusion_statement ?? null;
    $this->confirmation_prompt = $confirmation_prompt ?? null;
    $this->create_version = $create_version ?? false;
    $this->created_date = $created_date ?? 0;
    $this->description = $description ?? "";
    $this->dialog_code_hook = $dialog_code_hook ?? null;
    $this->follow_up_prompt = $follow_up_prompt ?? null;
    $this->fulfillment_activity = $fulfillment_activity ?? null;
    $this->last_updated_date = $last_updated_date ?? 0;
    $this->name = $name ?? "";
    $this->parent_intent_signature = $parent_intent_signature ?? "";
    $this->rejection_statement = $rejection_statement ?? null;
    $this->sample_utterances = $sample_utterances ?? [];
    $this->slots = $slots ?? [];
    $this->version = $version ?? "";
  }
}

class PutSlotTypeRequest {
  public string $checksum;
  public boolean $create_version;
  public Description $description;
  public EnumerationValues $enumeration_values;
  public SlotTypeName $name;
  public CustomOrBuiltinSlotTypeName $parent_slot_type_signature;
  public SlotTypeConfigurations $slot_type_configurations;
  public SlotValueSelectionStrategy $value_selection_strategy;

  public function __construct(shape(
  ?'checksum' => string,
  ?'create_version' => boolean,
  ?'description' => Description,
  ?'enumeration_values' => EnumerationValues,
  ?'name' => SlotTypeName,
  ?'parent_slot_type_signature' => CustomOrBuiltinSlotTypeName,
  ?'slot_type_configurations' => SlotTypeConfigurations,
  ?'value_selection_strategy' => SlotValueSelectionStrategy,
  ) $s = shape()) {
    $this->checksum = $checksum ?? "";
    $this->create_version = $create_version ?? false;
    $this->description = $description ?? "";
    $this->enumeration_values = $enumeration_values ?? [];
    $this->name = $name ?? "";
    $this->parent_slot_type_signature = $parent_slot_type_signature ?? "";
    $this->slot_type_configurations = $slot_type_configurations ?? [];
    $this->value_selection_strategy = $value_selection_strategy ?? "";
  }
}

class PutSlotTypeResponse {
  public string $checksum;
  public boolean $create_version;
  public Timestamp $created_date;
  public Description $description;
  public EnumerationValues $enumeration_values;
  public Timestamp $last_updated_date;
  public SlotTypeName $name;
  public CustomOrBuiltinSlotTypeName $parent_slot_type_signature;
  public SlotTypeConfigurations $slot_type_configurations;
  public SlotValueSelectionStrategy $value_selection_strategy;
  public Version $version;

  public function __construct(shape(
  ?'checksum' => string,
  ?'create_version' => boolean,
  ?'created_date' => Timestamp,
  ?'description' => Description,
  ?'enumeration_values' => EnumerationValues,
  ?'last_updated_date' => Timestamp,
  ?'name' => SlotTypeName,
  ?'parent_slot_type_signature' => CustomOrBuiltinSlotTypeName,
  ?'slot_type_configurations' => SlotTypeConfigurations,
  ?'value_selection_strategy' => SlotValueSelectionStrategy,
  ?'version' => Version,
  ) $s = shape()) {
    $this->checksum = $checksum ?? "";
    $this->create_version = $create_version ?? false;
    $this->created_date = $created_date ?? 0;
    $this->description = $description ?? "";
    $this->enumeration_values = $enumeration_values ?? [];
    $this->last_updated_date = $last_updated_date ?? 0;
    $this->name = $name ?? "";
    $this->parent_slot_type_signature = $parent_slot_type_signature ?? "";
    $this->slot_type_configurations = $slot_type_configurations ?? [];
    $this->value_selection_strategy = $value_selection_strategy ?? "";
    $this->version = $version ?? "";
  }
}

type ReferenceType = string;

type RegexPattern = string;

type ResourceArn = string;

class ResourceInUseException {
  public ResourceReference $example_reference;
  public ReferenceType $reference_type;

  public function __construct(shape(
  ?'example_reference' => ResourceReference,
  ?'reference_type' => ReferenceType,
  ) $s = shape()) {
    $this->example_reference = $example_reference ?? null;
    $this->reference_type = $reference_type ?? "";
  }
}

type ResourcePrefix = string;

class ResourceReference {
  public Name $name;
  public Version $version;

  public function __construct(shape(
  ?'name' => Name,
  ?'version' => Version,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->version = $version ?? "";
  }
}

type ResourceType = string;

type ResponseCard = string;

type SessionTTL = int;

class Slot {
  public Description $description;
  public SlotName $name;
  public ObfuscationSetting $obfuscation_setting;
  public Priority $priority;
  public ResponseCard $response_card;
  public SlotUtteranceList $sample_utterances;
  public SlotConstraint $slot_constraint;
  public CustomOrBuiltinSlotTypeName $slot_type;
  public Version $slot_type_version;
  public Prompt $value_elicitation_prompt;

  public function __construct(shape(
  ?'description' => Description,
  ?'name' => SlotName,
  ?'obfuscation_setting' => ObfuscationSetting,
  ?'priority' => Priority,
  ?'response_card' => ResponseCard,
  ?'sample_utterances' => SlotUtteranceList,
  ?'slot_constraint' => SlotConstraint,
  ?'slot_type' => CustomOrBuiltinSlotTypeName,
  ?'slot_type_version' => Version,
  ?'value_elicitation_prompt' => Prompt,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->name = $name ?? "";
    $this->obfuscation_setting = $obfuscation_setting ?? "";
    $this->priority = $priority ?? 0;
    $this->response_card = $response_card ?? "";
    $this->sample_utterances = $sample_utterances ?? [];
    $this->slot_constraint = $slot_constraint ?? "";
    $this->slot_type = $slot_type ?? "";
    $this->slot_type_version = $slot_type_version ?? "";
    $this->value_elicitation_prompt = $value_elicitation_prompt ?? null;
  }
}

type SlotConstraint = string;

type SlotList = vec<Slot>;

type SlotName = string;

class SlotTypeConfiguration {
  public SlotTypeRegexConfiguration $regex_configuration;

  public function __construct(shape(
  ?'regex_configuration' => SlotTypeRegexConfiguration,
  ) $s = shape()) {
    $this->regex_configuration = $regex_configuration ?? null;
  }
}

type SlotTypeConfigurations = vec<SlotTypeConfiguration>;

class SlotTypeMetadata {
  public Timestamp $created_date;
  public Description $description;
  public Timestamp $last_updated_date;
  public SlotTypeName $name;
  public Version $version;

  public function __construct(shape(
  ?'created_date' => Timestamp,
  ?'description' => Description,
  ?'last_updated_date' => Timestamp,
  ?'name' => SlotTypeName,
  ?'version' => Version,
  ) $s = shape()) {
    $this->created_date = $created_date ?? 0;
    $this->description = $description ?? "";
    $this->last_updated_date = $last_updated_date ?? 0;
    $this->name = $name ?? "";
    $this->version = $version ?? "";
  }
}

type SlotTypeMetadataList = vec<SlotTypeMetadata>;

type SlotTypeName = string;

class SlotTypeRegexConfiguration {
  public RegexPattern $pattern;

  public function __construct(shape(
  ?'pattern' => RegexPattern,
  ) $s = shape()) {
    $this->pattern = $pattern ?? "";
  }
}

type SlotUtteranceList = vec<Utterance>;

type SlotValueSelectionStrategy = string;

class StartImportRequest {
  public MergeStrategy $merge_strategy;
  public Blob $payload;
  public ResourceType $resource_type;
  public TagList $tags;

  public function __construct(shape(
  ?'merge_strategy' => MergeStrategy,
  ?'payload' => Blob,
  ?'resource_type' => ResourceType,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->merge_strategy = $merge_strategy ?? "";
    $this->payload = $payload ?? "";
    $this->resource_type = $resource_type ?? "";
    $this->tags = $tags ?? [];
  }
}

class StartImportResponse {
  public Timestamp $created_date;
  public string $import_id;
  public ImportStatus $import_status;
  public MergeStrategy $merge_strategy;
  public Name $name;
  public ResourceType $resource_type;
  public TagList $tags;

  public function __construct(shape(
  ?'created_date' => Timestamp,
  ?'import_id' => string,
  ?'import_status' => ImportStatus,
  ?'merge_strategy' => MergeStrategy,
  ?'name' => Name,
  ?'resource_type' => ResourceType,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->created_date = $created_date ?? 0;
    $this->import_id = $import_id ?? "";
    $this->import_status = $import_status ?? "";
    $this->merge_strategy = $merge_strategy ?? "";
    $this->name = $name ?? "";
    $this->resource_type = $resource_type ?? "";
    $this->tags = $tags ?? [];
  }
}

class Statement {
  public MessageList $messages;
  public ResponseCard $response_card;

  public function __construct(shape(
  ?'messages' => MessageList,
  ?'response_card' => ResponseCard,
  ) $s = shape()) {
    $this->messages = $messages ?? [];
    $this->response_card = $response_card ?? "";
  }
}

type Status = string;

type StatusType = string;

type String = string;

type StringList = vec<String>;

type SynonymList = vec<Value>;

class Tag {
  public TagKey $key;
  public TagValue $value;

  public function __construct(shape(
  ?'key' => TagKey,
  ?'value' => TagValue,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->value = $value ?? "";
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

class TagResourceRequest {
  public AmazonResourceName $resource_arn;
  public TagList $tags;

  public function __construct(shape(
  ?'resource_arn' => AmazonResourceName,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tags = $tags ?? [];
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
  public AmazonResourceName $resource_arn;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => AmazonResourceName,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tag_keys = $tag_keys ?? [];
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
  public Count $count;
  public Count $distinct_users;
  public Timestamp $first_uttered_date;
  public Timestamp $last_uttered_date;
  public UtteranceString $utterance_string;

  public function __construct(shape(
  ?'count' => Count,
  ?'distinct_users' => Count,
  ?'first_uttered_date' => Timestamp,
  ?'last_uttered_date' => Timestamp,
  ?'utterance_string' => UtteranceString,
  ) $s = shape()) {
    $this->count = $count ?? 0;
    $this->distinct_users = $distinct_users ?? 0;
    $this->first_uttered_date = $first_uttered_date ?? 0;
    $this->last_uttered_date = $last_uttered_date ?? 0;
    $this->utterance_string = $utterance_string ?? "";
  }
}

class UtteranceList {
  public Version $bot_version;
  public ListOfUtterance $utterances;

  public function __construct(shape(
  ?'bot_version' => Version,
  ?'utterances' => ListOfUtterance,
  ) $s = shape()) {
    $this->bot_version = $bot_version ?? "";
    $this->utterances = $utterances ?? [];
  }
}

type UtteranceString = string;

type Value = string;

type Version = string;

