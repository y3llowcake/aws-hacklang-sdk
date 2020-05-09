<?hh // strict
namespace slack\aws\models.lex;

interface Lex Model Building Service {
  public function CreateBotVersion(CreateBotVersionRequest) Awaitable<Errors\Result<CreateBotVersionResponse>>;
  public function CreateIntentVersion(CreateIntentVersionRequest) Awaitable<Errors\Result<CreateIntentVersionResponse>>;
  public function CreateSlotTypeVersion(CreateSlotTypeVersionRequest) Awaitable<Errors\Result<CreateSlotTypeVersionResponse>>;
  public function DeleteBot(DeleteBotRequest) Awaitable<Errors\Error>;
  public function DeleteBotAlias(DeleteBotAliasRequest) Awaitable<Errors\Error>;
  public function DeleteBotChannelAssociation(DeleteBotChannelAssociationRequest) Awaitable<Errors\Error>;
  public function DeleteBotVersion(DeleteBotVersionRequest) Awaitable<Errors\Error>;
  public function DeleteIntent(DeleteIntentRequest) Awaitable<Errors\Error>;
  public function DeleteIntentVersion(DeleteIntentVersionRequest) Awaitable<Errors\Error>;
  public function DeleteSlotType(DeleteSlotTypeRequest) Awaitable<Errors\Error>;
  public function DeleteSlotTypeVersion(DeleteSlotTypeVersionRequest) Awaitable<Errors\Error>;
  public function DeleteUtterances(DeleteUtterancesRequest) Awaitable<Errors\Error>;
  public function GetBot(GetBotRequest) Awaitable<Errors\Result<GetBotResponse>>;
  public function GetBotAlias(GetBotAliasRequest) Awaitable<Errors\Result<GetBotAliasResponse>>;
  public function GetBotAliases(GetBotAliasesRequest) Awaitable<Errors\Result<GetBotAliasesResponse>>;
  public function GetBotChannelAssociation(GetBotChannelAssociationRequest) Awaitable<Errors\Result<GetBotChannelAssociationResponse>>;
  public function GetBotChannelAssociations(GetBotChannelAssociationsRequest) Awaitable<Errors\Result<GetBotChannelAssociationsResponse>>;
  public function GetBotVersions(GetBotVersionsRequest) Awaitable<Errors\Result<GetBotVersionsResponse>>;
  public function GetBots(GetBotsRequest) Awaitable<Errors\Result<GetBotsResponse>>;
  public function GetBuiltinIntent(GetBuiltinIntentRequest) Awaitable<Errors\Result<GetBuiltinIntentResponse>>;
  public function GetBuiltinIntents(GetBuiltinIntentsRequest) Awaitable<Errors\Result<GetBuiltinIntentsResponse>>;
  public function GetBuiltinSlotTypes(GetBuiltinSlotTypesRequest) Awaitable<Errors\Result<GetBuiltinSlotTypesResponse>>;
  public function GetExport(GetExportRequest) Awaitable<Errors\Result<GetExportResponse>>;
  public function GetImport(GetImportRequest) Awaitable<Errors\Result<GetImportResponse>>;
  public function GetIntent(GetIntentRequest) Awaitable<Errors\Result<GetIntentResponse>>;
  public function GetIntentVersions(GetIntentVersionsRequest) Awaitable<Errors\Result<GetIntentVersionsResponse>>;
  public function GetIntents(GetIntentsRequest) Awaitable<Errors\Result<GetIntentsResponse>>;
  public function GetSlotType(GetSlotTypeRequest) Awaitable<Errors\Result<GetSlotTypeResponse>>;
  public function GetSlotTypeVersions(GetSlotTypeVersionsRequest) Awaitable<Errors\Result<GetSlotTypeVersionsResponse>>;
  public function GetSlotTypes(GetSlotTypesRequest) Awaitable<Errors\Result<GetSlotTypesResponse>>;
  public function GetUtterancesView(GetUtterancesViewRequest) Awaitable<Errors\Result<GetUtterancesViewResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function PutBot(PutBotRequest) Awaitable<Errors\Result<PutBotResponse>>;
  public function PutBotAlias(PutBotAliasRequest) Awaitable<Errors\Result<PutBotAliasResponse>>;
  public function PutIntent(PutIntentRequest) Awaitable<Errors\Result<PutIntentResponse>>;
  public function PutSlotType(PutSlotTypeRequest) Awaitable<Errors\Result<PutSlotTypeResponse>>;
  public function StartImport(StartImportRequest) Awaitable<Errors\Result<StartImportResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
}

class AliasName {
}

class AliasNameOrListAll {
}

class AmazonResourceName {
}

class BadRequestException {
  public string $message;
}

class Blob {
}

class Boolean {
}

class BotAliasMetadata {
  public BotName $bot_name;
  public Version $bot_version;
  public string $checksum;
  public ConversationLogsResponse $conversation_logs;
  public Timestamp $created_date;
  public Description $description;
  public Timestamp $last_updated_date;
  public AliasName $name;
}

class BotAliasMetadataList {
}

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
}

class BotChannelAssociationList {
}

class BotChannelName {
}

class BotMetadata {
  public Timestamp $created_date;
  public Description $description;
  public Timestamp $last_updated_date;
  public BotName $name;
  public Status $status;
  public Version $version;
}

class BotMetadataList {
}

class BotName {
}

class BotVersions {
}

class BuiltinIntentMetadata {
  public BuiltinIntentSignature $signature;
  public LocaleList $supported_locales;
}

class BuiltinIntentMetadataList {
}

class BuiltinIntentSignature {
}

class BuiltinIntentSlot {
  public string $name;
}

class BuiltinIntentSlotList {
}

class BuiltinSlotTypeMetadata {
  public BuiltinSlotTypeSignature $signature;
  public LocaleList $supported_locales;
}

class BuiltinSlotTypeMetadataList {
}

class BuiltinSlotTypeSignature {
}

class ChannelConfigurationMap {
}

class ChannelStatus {
}

class ChannelType {
}

class CodeHook {
  public MessageVersion $message_version;
  public LambdaARN $uri;
}

class ConflictException {
  public string $message;
}

class ContentString {
}

class ContentType {
}

class ConversationLogsRequest {
  public IamRoleArn $iam_role_arn;
  public LogSettingsRequestList $log_settings;
}

class ConversationLogsResponse {
  public IamRoleArn $iam_role_arn;
  public LogSettingsResponseList $log_settings;
}

class Count {
}

class CreateBotVersionRequest {
  public string $checksum;
  public BotName $name;
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
}

class CreateIntentVersionRequest {
  public string $checksum;
  public IntentName $name;
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
}

class CreateSlotTypeVersionRequest {
  public string $checksum;
  public SlotTypeName $name;
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
}

class CustomOrBuiltinSlotTypeName {
}

class DeleteBotAliasRequest {
  public BotName $bot_name;
  public AliasName $name;
}

class DeleteBotChannelAssociationRequest {
  public AliasName $bot_alias;
  public BotName $bot_name;
  public BotChannelName $name;
}

class DeleteBotRequest {
  public BotName $name;
}

class DeleteBotVersionRequest {
  public BotName $name;
  public NumericalVersion $version;
}

class DeleteIntentRequest {
  public IntentName $name;
}

class DeleteIntentVersionRequest {
  public IntentName $name;
  public NumericalVersion $version;
}

class DeleteSlotTypeRequest {
  public SlotTypeName $name;
}

class DeleteSlotTypeVersionRequest {
  public SlotTypeName $name;
  public NumericalVersion $version;
}

class DeleteUtterancesRequest {
  public BotName $bot_name;
  public UserId $user_id;
}

class Description {
}

class Destination {
}

class EnumerationValue {
  public SynonymList $synonyms;
  public Value $value;
}

class EnumerationValues {
}

class ExportStatus {
}

class ExportType {
}

class FollowUpPrompt {
  public Prompt $prompt;
  public Statement $rejection_statement;
}

class FulfillmentActivity {
  public CodeHook $code_hook;
  public FulfillmentActivityType $type;
}

class FulfillmentActivityType {
}

class GetBotAliasRequest {
  public BotName $bot_name;
  public AliasName $name;
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
}

class GetBotAliasesRequest {
  public BotName $bot_name;
  public MaxResults $max_results;
  public AliasName $name_contains;
  public NextToken $next_token;
}

class GetBotAliasesResponse {
  public BotAliasMetadataList $bot_aliases;
  public NextToken $next_token;
}

class GetBotChannelAssociationRequest {
  public AliasName $bot_alias;
  public BotName $bot_name;
  public BotChannelName $name;
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
}

class GetBotChannelAssociationsRequest {
  public AliasNameOrListAll $bot_alias;
  public BotName $bot_name;
  public MaxResults $max_results;
  public BotChannelName $name_contains;
  public NextToken $next_token;
}

class GetBotChannelAssociationsResponse {
  public BotChannelAssociationList $bot_channel_associations;
  public NextToken $next_token;
}

class GetBotRequest {
  public BotName $name;
  public string $version_or_alias;
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
}

class GetBotVersionsRequest {
  public MaxResults $max_results;
  public BotName $name;
  public NextToken $next_token;
}

class GetBotVersionsResponse {
  public BotMetadataList $bots;
  public NextToken $next_token;
}

class GetBotsRequest {
  public MaxResults $max_results;
  public BotName $name_contains;
  public NextToken $next_token;
}

class GetBotsResponse {
  public BotMetadataList $bots;
  public NextToken $next_token;
}

class GetBuiltinIntentRequest {
  public BuiltinIntentSignature $signature;
}

class GetBuiltinIntentResponse {
  public BuiltinIntentSignature $signature;
  public BuiltinIntentSlotList $slots;
  public LocaleList $supported_locales;
}

class GetBuiltinIntentsRequest {
  public Locale $locale;
  public MaxResults $max_results;
  public NextToken $next_token;
  public string $signature_contains;
}

class GetBuiltinIntentsResponse {
  public BuiltinIntentMetadataList $intents;
  public NextToken $next_token;
}

class GetBuiltinSlotTypesRequest {
  public Locale $locale;
  public MaxResults $max_results;
  public NextToken $next_token;
  public string $signature_contains;
}

class GetBuiltinSlotTypesResponse {
  public NextToken $next_token;
  public BuiltinSlotTypeMetadataList $slot_types;
}

class GetExportRequest {
  public ExportType $export_type;
  public Name $name;
  public ResourceType $resource_type;
  public NumericalVersion $version;
}

class GetExportResponse {
  public ExportStatus $export_status;
  public ExportType $export_type;
  public string $failure_reason;
  public Name $name;
  public ResourceType $resource_type;
  public string $url;
  public NumericalVersion $version;
}

class GetImportRequest {
  public string $import_id;
}

class GetImportResponse {
  public Timestamp $created_date;
  public StringList $failure_reason;
  public string $import_id;
  public ImportStatus $import_status;
  public MergeStrategy $merge_strategy;
  public Name $name;
  public ResourceType $resource_type;
}

class GetIntentRequest {
  public IntentName $name;
  public Version $version;
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
}

class GetIntentVersionsRequest {
  public MaxResults $max_results;
  public IntentName $name;
  public NextToken $next_token;
}

class GetIntentVersionsResponse {
  public IntentMetadataList $intents;
  public NextToken $next_token;
}

class GetIntentsRequest {
  public MaxResults $max_results;
  public IntentName $name_contains;
  public NextToken $next_token;
}

class GetIntentsResponse {
  public IntentMetadataList $intents;
  public NextToken $next_token;
}

class GetSlotTypeRequest {
  public SlotTypeName $name;
  public Version $version;
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
}

class GetSlotTypeVersionsRequest {
  public MaxResults $max_results;
  public SlotTypeName $name;
  public NextToken $next_token;
}

class GetSlotTypeVersionsResponse {
  public NextToken $next_token;
  public SlotTypeMetadataList $slot_types;
}

class GetSlotTypesRequest {
  public MaxResults $max_results;
  public SlotTypeName $name_contains;
  public NextToken $next_token;
}

class GetSlotTypesResponse {
  public NextToken $next_token;
  public SlotTypeMetadataList $slot_types;
}

class GetUtterancesViewRequest {
  public BotName $bot_name;
  public BotVersions $bot_versions;
  public StatusType $status_type;
}

class GetUtterancesViewResponse {
  public BotName $bot_name;
  public ListsOfUtterances $utterances;
}

class GroupNumber {
}

class IamRoleArn {
}

class ImportStatus {
}

class Intent {
  public IntentName $intent_name;
  public Version $intent_version;
}

class IntentList {
}

class IntentMetadata {
  public Timestamp $created_date;
  public Description $description;
  public Timestamp $last_updated_date;
  public IntentName $name;
  public Version $version;
}

class IntentMetadataList {
}

class IntentName {
}

class IntentUtteranceList {
}

class InternalFailureException {
  public string $message;
}

class KmsKeyArn {
}

class LambdaARN {
}

class LimitExceededException {
  public string $message;
  public string $retry_after_seconds;
}

class ListOfUtterance {
}

class ListTagsForResourceRequest {
  public AmazonResourceName $resource_arn;
}

class ListTagsForResourceResponse {
  public TagList $tags;
}

class ListsOfUtterances {
}

class Locale {
}

class LocaleList {
}

class LogSettingsRequest {
  public Destination $destination;
  public KmsKeyArn $kms_key_arn;
  public LogType $log_type;
  public ResourceArn $resource_arn;
}

class LogSettingsRequestList {
}

class LogSettingsResponse {
  public Destination $destination;
  public KmsKeyArn $kms_key_arn;
  public LogType $log_type;
  public ResourceArn $resource_arn;
  public ResourcePrefix $resource_prefix;
}

class LogSettingsResponseList {
}

class LogType {
}

class MaxResults {
}

class MergeStrategy {
}

class Message {
  public ContentString $content;
  public ContentType $content_type;
  public GroupNumber $group_number;
}

class MessageList {
}

class MessageVersion {
}

class Name {
}

class NextToken {
}

class NotFoundException {
  public string $message;
}

class NumericalVersion {
}

class ObfuscationSetting {
}

class PreconditionFailedException {
  public string $message;
}

class Priority {
}

class ProcessBehavior {
}

class Prompt {
  public PromptMaxAttempts $max_attempts;
  public MessageList $messages;
  public ResponseCard $response_card;
}

class PromptMaxAttempts {
}

class PutBotAliasRequest {
  public BotName $bot_name;
  public Version $bot_version;
  public string $checksum;
  public ConversationLogsRequest $conversation_logs;
  public Description $description;
  public AliasName $name;
  public TagList $tags;
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
}

class ReferenceType {
}

class RegexPattern {
}

class ResourceArn {
}

class ResourceInUseException {
  public ResourceReference $example_reference;
  public ReferenceType $reference_type;
}

class ResourcePrefix {
}

class ResourceReference {
  public Name $name;
  public Version $version;
}

class ResourceType {
}

class ResponseCard {
}

class SessionTTL {
}

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
}

class SlotConstraint {
}

class SlotList {
}

class SlotName {
}

class SlotTypeConfiguration {
  public SlotTypeRegexConfiguration $regex_configuration;
}

class SlotTypeConfigurations {
}

class SlotTypeMetadata {
  public Timestamp $created_date;
  public Description $description;
  public Timestamp $last_updated_date;
  public SlotTypeName $name;
  public Version $version;
}

class SlotTypeMetadataList {
}

class SlotTypeName {
}

class SlotTypeRegexConfiguration {
  public RegexPattern $pattern;
}

class SlotUtteranceList {
}

class SlotValueSelectionStrategy {
}

class StartImportRequest {
  public MergeStrategy $merge_strategy;
  public Blob $payload;
  public ResourceType $resource_type;
  public TagList $tags;
}

class StartImportResponse {
  public Timestamp $created_date;
  public string $import_id;
  public ImportStatus $import_status;
  public MergeStrategy $merge_strategy;
  public Name $name;
  public ResourceType $resource_type;
  public TagList $tags;
}

class Statement {
  public MessageList $messages;
  public ResponseCard $response_card;
}

class Status {
}

class StatusType {
}

class String {
}

class StringList {
}

class SynonymList {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKey {
}

class TagKeyList {
}

class TagList {
}

class TagResourceRequest {
  public AmazonResourceName $resource_arn;
  public TagList $tags;
}

class TagResourceResponse {
}

class TagValue {
}

class Timestamp {
}

class UntagResourceRequest {
  public AmazonResourceName $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceResponse {
}

class UserId {
}

class Utterance {
}

class UtteranceData {
  public Count $count;
  public Count $distinct_users;
  public Timestamp $first_uttered_date;
  public Timestamp $last_uttered_date;
  public UtteranceString $utterance_string;
}

class UtteranceList {
  public Version $bot_version;
  public ListOfUtterance $utterances;
}

class UtteranceString {
}

class Value {
}

class Version {
}

