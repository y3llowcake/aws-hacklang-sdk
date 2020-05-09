<?hh // strict
namespace slack\aws\cloudsearch;

interface CloudSearch {
  public function CreateDomain(CreateDomainRequest) Awaitable<Errors\Result<CreateDomainResponse>>;
  public function DeleteDomain(DeleteDomainRequest) Awaitable<Errors\Result<DeleteDomainResponse>>;
  public function DescribeAnalysisSchemes(DescribeAnalysisSchemesRequest) Awaitable<Errors\Result<DescribeAnalysisSchemesResponse>>;
  public function DescribeExpressions(DescribeExpressionsRequest) Awaitable<Errors\Result<DescribeExpressionsResponse>>;
  public function IndexDocuments(IndexDocumentsRequest) Awaitable<Errors\Result<IndexDocumentsResponse>>;
  public function ListDomainNames() Awaitable<Errors\Result<ListDomainNamesResponse>>;
  public function DefineExpression(DefineExpressionRequest) Awaitable<Errors\Result<DefineExpressionResponse>>;
  public function DeleteAnalysisScheme(DeleteAnalysisSchemeRequest) Awaitable<Errors\Result<DeleteAnalysisSchemeResponse>>;
  public function DeleteSuggester(DeleteSuggesterRequest) Awaitable<Errors\Result<DeleteSuggesterResponse>>;
  public function DescribeAvailabilityOptions(DescribeAvailabilityOptionsRequest) Awaitable<Errors\Result<DescribeAvailabilityOptionsResponse>>;
  public function DescribeServiceAccessPolicies(DescribeServiceAccessPoliciesRequest) Awaitable<Errors\Result<DescribeServiceAccessPoliciesResponse>>;
  public function DescribeSuggesters(DescribeSuggestersRequest) Awaitable<Errors\Result<DescribeSuggestersResponse>>;
  public function DefineIndexField(DefineIndexFieldRequest) Awaitable<Errors\Result<DefineIndexFieldResponse>>;
  public function DefineSuggester(DefineSuggesterRequest) Awaitable<Errors\Result<DefineSuggesterResponse>>;
  public function DeleteIndexField(DeleteIndexFieldRequest) Awaitable<Errors\Result<DeleteIndexFieldResponse>>;
  public function DescribeIndexFields(DescribeIndexFieldsRequest) Awaitable<Errors\Result<DescribeIndexFieldsResponse>>;
  public function DescribeScalingParameters(DescribeScalingParametersRequest) Awaitable<Errors\Result<DescribeScalingParametersResponse>>;
  public function UpdateDomainEndpointOptions(UpdateDomainEndpointOptionsRequest) Awaitable<Errors\Result<UpdateDomainEndpointOptionsResponse>>;
  public function UpdateScalingParameters(UpdateScalingParametersRequest) Awaitable<Errors\Result<UpdateScalingParametersResponse>>;
  public function BuildSuggesters(BuildSuggestersRequest) Awaitable<Errors\Result<BuildSuggestersResponse>>;
  public function DefineAnalysisScheme(DefineAnalysisSchemeRequest) Awaitable<Errors\Result<DefineAnalysisSchemeResponse>>;
  public function DeleteExpression(DeleteExpressionRequest) Awaitable<Errors\Result<DeleteExpressionResponse>>;
  public function DescribeDomainEndpointOptions(DescribeDomainEndpointOptionsRequest) Awaitable<Errors\Result<DescribeDomainEndpointOptionsResponse>>;
  public function DescribeDomains(DescribeDomainsRequest) Awaitable<Errors\Result<DescribeDomainsResponse>>;
  public function UpdateAvailabilityOptions(UpdateAvailabilityOptionsRequest) Awaitable<Errors\Result<UpdateAvailabilityOptionsResponse>>;
  public function UpdateServiceAccessPolicies(UpdateServiceAccessPoliciesRequest) Awaitable<Errors\Result<UpdateServiceAccessPoliciesResponse>>;
}

class BuildSuggestersResponse {
  public FieldNameList $field_names;
}

class CreateDomainResponse {
  public DomainStatus $domain_status;
}

class DomainNameList {
}

class Suggester {
  public StandardName $suggester_name;
  public DocumentSuggesterOptions $document_suggester_options;
}

class AccessPoliciesStatus {
  public PolicyDocument $options;
  public OptionStatus $status;
}

class AnalysisSchemeLanguage {
}

class BaseException {
  public ErrorCode $code;
  public ErrorMessage $message;
}

class DefineExpressionResponse {
  public ExpressionStatus $expression;
}

class DocumentSuggesterOptions {
  public FieldName $source_field;
  public SuggesterFuzzyMatching $fuzzy_matching;
  public string $sort_expression;
}

class DomainStatus {
  public boolean $created;
  public boolean $deleted;
  public boolean $processing;
  public InstanceCount $search_instance_count;
  public DomainId $domain_id;
  public DomainName $domain_name;
  public ARN $arn;
  public ServiceEndpoint $doc_service;
  public ServiceEndpoint $search_service;
  public boolean $requires_index_documents;
  public SearchInstanceType $search_instance_type;
  public PartitionCount $search_partition_count;
  public Limits $limits;
}

class ExpressionStatusList {
}

class PolicyDocument {
}

class ResourceNotFoundException {
}

class ScalingParameters {
  public UIntValue $desired_replication_count;
  public UIntValue $desired_partition_count;
  public PartitionInstanceType $desired_instance_type;
}

class SuggesterStatus {
  public Suggester $options;
  public OptionStatus $status;
}

class DeleteAnalysisSchemeResponse {
  public AnalysisSchemeStatus $analysis_scheme;
}

class DeleteExpressionRequest {
  public DomainName $domain_name;
  public StandardName $expression_name;
}

class DynamicFieldName {
}

class PartitionCount {
}

class UpdateAvailabilityOptionsResponse {
  public AvailabilityOptionsStatus $availability_options;
}

class CreateDomainRequest {
  public DomainName $domain_name;
}

class DescribeAvailabilityOptionsRequest {
  public DomainName $domain_name;
  public boolean $deployed;
}

class Double {
}

class IndexFieldStatusList {
}

class DeleteIndexFieldResponse {
  public IndexFieldStatus $index_field;
}

class DeleteSuggesterRequest {
  public DomainName $domain_name;
  public StandardName $suggester_name;
}

class DescribeExpressionsResponse {
  public ExpressionStatusList $expressions;
}

class ErrorCode {
}

class FieldValue {
}

class String {
}

class DefineIndexFieldRequest {
  public IndexField $index_field;
  public DomainName $domain_name;
}

class DefineSuggesterRequest {
  public DomainName $domain_name;
  public Suggester $suggester;
}

class DescribeDomainEndpointOptionsResponse {
  public DomainEndpointOptionsStatus $domain_endpoint_options;
}

class DescribeServiceAccessPoliciesResponse {
  public AccessPoliciesStatus $access_policies;
}

class MaximumReplicationCount {
}

class TextOptions {
  public FieldName $source_field;
  public boolean $return_enabled;
  public boolean $sort_enabled;
  public boolean $highlight_enabled;
  public Word $analysis_scheme;
  public FieldValue $default_value;
}

class Word {
}

class ARN {
}

class DomainStatusList {
}

class IntOptions {
  public boolean $return_enabled;
  public boolean $sort_enabled;
  public Long $default_value;
  public FieldName $source_field;
  public boolean $facet_enabled;
  public boolean $search_enabled;
}

class StandardName {
}

class DescribeAnalysisSchemesRequest {
  public DomainName $domain_name;
  public StandardNameList $analysis_scheme_names;
  public boolean $deployed;
}

class DoubleArrayOptions {
  public boolean $return_enabled;
  public Double $default_value;
  public FieldNameCommaList $source_fields;
  public boolean $facet_enabled;
  public boolean $search_enabled;
}

class DeleteAnalysisSchemeRequest {
  public DomainName $domain_name;
  public StandardName $analysis_scheme_name;
}

class DescribeDomainsRequest {
  public DomainNameList $domain_names;
}

class UpdateTimestamp {
}

class DeleteSuggesterResponse {
  public SuggesterStatus $suggester;
}

class IndexFieldType {
}

class InstanceCount {
}

class LimitExceededException {
}

class ValidationException {
}

class DescribeSuggestersResponse {
  public SuggesterStatusList $suggesters;
}

class DescribeAnalysisSchemesResponse {
  public AnalysisSchemeStatusList $analysis_schemes;
}

class StandardNameList {
}

class UpdateDomainEndpointOptionsRequest {
  public DomainName $domain_name;
  public DomainEndpointOptions $domain_endpoint_options;
}

class DoubleOptions {
  public Double $default_value;
  public FieldName $source_field;
  public boolean $facet_enabled;
  public boolean $search_enabled;
  public boolean $return_enabled;
  public boolean $sort_enabled;
}

class ExpressionStatus {
  public Expression $options;
  public OptionStatus $status;
}

class OptionStatus {
  public UpdateTimestamp $update_date;
  public UIntValue $update_version;
  public OptionState $state;
  public boolean $pending_deletion;
  public UpdateTimestamp $creation_date;
}

class SuggesterStatusList {
}

class MaximumPartitionCount {
}

class ServiceEndpoint {
  public ServiceUrl $endpoint;
}

class TLSSecurityPolicy {
}

class DefineSuggesterResponse {
  public SuggesterStatus $suggester;
}

class DomainEndpointOptions {
  public boolean $enforce_https;
  public TLSSecurityPolicy $tls_security_policy;
}

class InvalidTypeException {
}

class DescribeIndexFieldsResponse {
  public IndexFieldStatusList $index_fields;
}

class Limits {
  public MaximumReplicationCount $maximum_replication_count;
  public MaximumPartitionCount $maximum_partition_count;
}

class Long {
}

class UpdateServiceAccessPoliciesRequest {
  public DomainName $domain_name;
  public PolicyDocument $access_policies;
}

class DomainId {
}

class DynamicFieldNameList {
}

class IndexDocumentsResponse {
  public FieldNameList $field_names;
}

class IndexFieldStatus {
  public IndexField $options;
  public OptionStatus $status;
}

class SearchInstanceType {
}

class UpdateServiceAccessPoliciesResponse {
  public AccessPoliciesStatus $access_policies;
}

class AlgorithmicStemming {
}

class DefineExpressionRequest {
  public DomainName $domain_name;
  public Expression $expression;
}

class DescribeScalingParametersRequest {
  public DomainName $domain_name;
}

class LatLonOptions {
  public boolean $return_enabled;
  public boolean $sort_enabled;
  public FieldValue $default_value;
  public FieldName $source_field;
  public boolean $facet_enabled;
  public boolean $search_enabled;
}

class SuggesterFuzzyMatching {
}

class TextArrayOptions {
  public FieldValue $default_value;
  public FieldNameCommaList $source_fields;
  public boolean $return_enabled;
  public boolean $highlight_enabled;
  public Word $analysis_scheme;
}

class UpdateAvailabilityOptionsRequest {
  public DomainName $domain_name;
  public boolean $multi_az;
}

class AnalysisScheme {
  public AnalysisSchemeLanguage $analysis_scheme_language;
  public AnalysisOptions $analysis_options;
  public StandardName $analysis_scheme_name;
}

class DateOptions {
  public boolean $facet_enabled;
  public boolean $search_enabled;
  public boolean $return_enabled;
  public boolean $sort_enabled;
  public FieldValue $default_value;
  public FieldName $source_field;
}

class DescribeAvailabilityOptionsResponse {
  public AvailabilityOptionsStatus $availability_options;
}

class DisabledOperationException {
}

class FieldName {
}

class FieldNameCommaList {
}

class InternalException {
}

class ServiceUrl {
}

class Boolean {
}

class DefineIndexFieldResponse {
  public IndexFieldStatus $index_field;
}

class DescribeIndexFieldsRequest {
  public DomainName $domain_name;
  public DynamicFieldNameList $field_names;
  public boolean $deployed;
}

class DescribeScalingParametersResponse {
  public ScalingParametersStatus $scaling_parameters;
}

class DomainName {
}

class UIntValue {
}

class BuildSuggestersRequest {
  public DomainName $domain_name;
}

class IndexDocumentsRequest {
  public DomainName $domain_name;
}

class AnalysisSchemeStatusList {
}

class LiteralOptions {
  public FieldValue $default_value;
  public FieldName $source_field;
  public boolean $facet_enabled;
  public boolean $search_enabled;
  public boolean $return_enabled;
  public boolean $sort_enabled;
}

class OptionState {
}

class DescribeDomainEndpointOptionsRequest {
  public DomainName $domain_name;
  public boolean $deployed;
}

class UpdateScalingParametersResponse {
  public ScalingParametersStatus $scaling_parameters;
}

class AnalysisOptions {
  public AlgorithmicStemming $algorithmic_stemming;
  public string $synonyms;
  public string $stopwords;
  public string $stemming_dictionary;
  public string $japanese_tokenization_dictionary;
}

class DefineAnalysisSchemeRequest {
  public DomainName $domain_name;
  public AnalysisScheme $analysis_scheme;
}

class DefineAnalysisSchemeResponse {
  public AnalysisSchemeStatus $analysis_scheme;
}

class DeleteExpressionResponse {
  public ExpressionStatus $expression;
}

class ExpressionValue {
}

class ScalingParametersStatus {
  public ScalingParameters $options;
  public OptionStatus $status;
}

class UpdateScalingParametersRequest {
  public DomainName $domain_name;
  public ScalingParameters $scaling_parameters;
}

class AnalysisSchemeStatus {
  public OptionStatus $status;
  public AnalysisScheme $options;
}

class UpdateDomainEndpointOptionsResponse {
  public DomainEndpointOptionsStatus $domain_endpoint_options;
}

class DeleteDomainResponse {
  public DomainStatus $domain_status;
}

class DescribeExpressionsRequest {
  public DomainName $domain_name;
  public StandardNameList $expression_names;
  public boolean $deployed;
}

class DescribeSuggestersRequest {
  public DomainName $domain_name;
  public StandardNameList $suggester_names;
  public boolean $deployed;
}

class DomainEndpointOptionsStatus {
  public DomainEndpointOptions $options;
  public OptionStatus $status;
}

class DomainNameMap {
}

class IntArrayOptions {
  public boolean $search_enabled;
  public boolean $return_enabled;
  public Long $default_value;
  public FieldNameCommaList $source_fields;
  public boolean $facet_enabled;
}

class MultiAZ {
}

class DateArrayOptions {
  public FieldValue $default_value;
  public FieldNameCommaList $source_fields;
  public boolean $facet_enabled;
  public boolean $search_enabled;
  public boolean $return_enabled;
}

class DeleteIndexFieldRequest {
  public DomainName $domain_name;
  public DynamicFieldName $index_field_name;
}

class ErrorMessage {
}

class LiteralArrayOptions {
  public FieldValue $default_value;
  public FieldNameCommaList $source_fields;
  public boolean $facet_enabled;
  public boolean $search_enabled;
  public boolean $return_enabled;
}

class PartitionInstanceType {
}

class DeleteDomainRequest {
  public DomainName $domain_name;
}

class AvailabilityOptionsStatus {
  public MultiAZ $options;
  public OptionStatus $status;
}

class DescribeDomainsResponse {
  public DomainStatusList $domain_status_list;
}

class DescribeServiceAccessPoliciesRequest {
  public boolean $deployed;
  public DomainName $domain_name;
}

class FieldNameList {
}

class APIVersion {
}

class Expression {
  public StandardName $expression_name;
  public ExpressionValue $expression_value;
}

class IndexField {
  public TextOptions $text_options;
  public DateOptions $date_options;
  public DoubleArrayOptions $double_array_options;
  public TextArrayOptions $text_array_options;
  public DynamicFieldName $index_field_name;
  public IndexFieldType $index_field_type;
  public DoubleOptions $double_options;
  public IntArrayOptions $int_array_options;
  public LiteralArrayOptions $literal_array_options;
  public DateArrayOptions $date_array_options;
  public IntOptions $int_options;
  public LiteralOptions $literal_options;
  public LatLonOptions $lat_lon_options;
}

class ListDomainNamesResponse {
  public DomainNameMap $domain_names;
}

