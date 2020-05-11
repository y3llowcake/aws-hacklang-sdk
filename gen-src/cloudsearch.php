<?hh // strict
namespace slack\aws\cloudsearch;

interface CloudSearch {
  public function BuildSuggesters(BuildSuggestersRequest): Awaitable<Errors\Result<BuildSuggestersResponse>>;
  public function CreateDomain(CreateDomainRequest): Awaitable<Errors\Result<CreateDomainResponse>>;
  public function DefineAnalysisScheme(DefineAnalysisSchemeRequest): Awaitable<Errors\Result<DefineAnalysisSchemeResponse>>;
  public function DefineExpression(DefineExpressionRequest): Awaitable<Errors\Result<DefineExpressionResponse>>;
  public function DefineIndexField(DefineIndexFieldRequest): Awaitable<Errors\Result<DefineIndexFieldResponse>>;
  public function DefineSuggester(DefineSuggesterRequest): Awaitable<Errors\Result<DefineSuggesterResponse>>;
  public function DeleteAnalysisScheme(DeleteAnalysisSchemeRequest): Awaitable<Errors\Result<DeleteAnalysisSchemeResponse>>;
  public function DeleteDomain(DeleteDomainRequest): Awaitable<Errors\Result<DeleteDomainResponse>>;
  public function DeleteExpression(DeleteExpressionRequest): Awaitable<Errors\Result<DeleteExpressionResponse>>;
  public function DeleteIndexField(DeleteIndexFieldRequest): Awaitable<Errors\Result<DeleteIndexFieldResponse>>;
  public function DeleteSuggester(DeleteSuggesterRequest): Awaitable<Errors\Result<DeleteSuggesterResponse>>;
  public function DescribeAnalysisSchemes(DescribeAnalysisSchemesRequest): Awaitable<Errors\Result<DescribeAnalysisSchemesResponse>>;
  public function DescribeAvailabilityOptions(DescribeAvailabilityOptionsRequest): Awaitable<Errors\Result<DescribeAvailabilityOptionsResponse>>;
  public function DescribeDomainEndpointOptions(DescribeDomainEndpointOptionsRequest): Awaitable<Errors\Result<DescribeDomainEndpointOptionsResponse>>;
  public function DescribeDomains(DescribeDomainsRequest): Awaitable<Errors\Result<DescribeDomainsResponse>>;
  public function DescribeExpressions(DescribeExpressionsRequest): Awaitable<Errors\Result<DescribeExpressionsResponse>>;
  public function DescribeIndexFields(DescribeIndexFieldsRequest): Awaitable<Errors\Result<DescribeIndexFieldsResponse>>;
  public function DescribeScalingParameters(DescribeScalingParametersRequest): Awaitable<Errors\Result<DescribeScalingParametersResponse>>;
  public function DescribeServiceAccessPolicies(DescribeServiceAccessPoliciesRequest): Awaitable<Errors\Result<DescribeServiceAccessPoliciesResponse>>;
  public function DescribeSuggesters(DescribeSuggestersRequest): Awaitable<Errors\Result<DescribeSuggestersResponse>>;
  public function IndexDocuments(IndexDocumentsRequest): Awaitable<Errors\Result<IndexDocumentsResponse>>;
  public function ListDomainNames(): Awaitable<Errors\Result<ListDomainNamesResponse>>;
  public function UpdateAvailabilityOptions(UpdateAvailabilityOptionsRequest): Awaitable<Errors\Result<UpdateAvailabilityOptionsResponse>>;
  public function UpdateDomainEndpointOptions(UpdateDomainEndpointOptionsRequest): Awaitable<Errors\Result<UpdateDomainEndpointOptionsResponse>>;
  public function UpdateScalingParameters(UpdateScalingParametersRequest): Awaitable<Errors\Result<UpdateScalingParametersResponse>>;
  public function UpdateServiceAccessPolicies(UpdateServiceAccessPoliciesRequest): Awaitable<Errors\Result<UpdateServiceAccessPoliciesResponse>>;
}

type APIVersion = string;

type ARN = string;

class AccessPoliciesStatus {
  public PolicyDocument $options;
  public OptionStatus $status;

  public function __construct(shape(
  ?'options' => PolicyDocument,
  ?'status' => OptionStatus,
  ) $s = shape()) {
    $this->options = $options ?? "";
    $this->status = $status ?? null;
  }
}

type AlgorithmicStemming = string;

class AnalysisOptions {
  public AlgorithmicStemming $algorithmic_stemming;
  public string $japanese_tokenization_dictionary;
  public string $stemming_dictionary;
  public string $stopwords;
  public string $synonyms;

  public function __construct(shape(
  ?'algorithmic_stemming' => AlgorithmicStemming,
  ?'japanese_tokenization_dictionary' => string,
  ?'stemming_dictionary' => string,
  ?'stopwords' => string,
  ?'synonyms' => string,
  ) $s = shape()) {
    $this->algorithmic_stemming = $algorithmic_stemming ?? "";
    $this->japanese_tokenization_dictionary = $japanese_tokenization_dictionary ?? "";
    $this->stemming_dictionary = $stemming_dictionary ?? "";
    $this->stopwords = $stopwords ?? "";
    $this->synonyms = $synonyms ?? "";
  }
}

class AnalysisScheme {
  public AnalysisOptions $analysis_options;
  public AnalysisSchemeLanguage $analysis_scheme_language;
  public StandardName $analysis_scheme_name;

  public function __construct(shape(
  ?'analysis_options' => AnalysisOptions,
  ?'analysis_scheme_language' => AnalysisSchemeLanguage,
  ?'analysis_scheme_name' => StandardName,
  ) $s = shape()) {
    $this->analysis_options = $analysis_options ?? null;
    $this->analysis_scheme_language = $analysis_scheme_language ?? "";
    $this->analysis_scheme_name = $analysis_scheme_name ?? "";
  }
}

type AnalysisSchemeLanguage = string;

class AnalysisSchemeStatus {
  public AnalysisScheme $options;
  public OptionStatus $status;

  public function __construct(shape(
  ?'options' => AnalysisScheme,
  ?'status' => OptionStatus,
  ) $s = shape()) {
    $this->options = $options ?? null;
    $this->status = $status ?? null;
  }
}

type AnalysisSchemeStatusList = vec<AnalysisSchemeStatus>;

class AvailabilityOptionsStatus {
  public MultiAZ $options;
  public OptionStatus $status;

  public function __construct(shape(
  ?'options' => MultiAZ,
  ?'status' => OptionStatus,
  ) $s = shape()) {
    $this->options = $options ?? false;
    $this->status = $status ?? null;
  }
}

class BaseException {
  public ErrorCode $code;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'code' => ErrorCode,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->code = $code ?? "";
    $this->message = $message ?? "";
  }
}

type Boolean = bool;

class BuildSuggestersRequest {
  public DomainName $domain_name;

  public function __construct(shape(
  ?'domain_name' => DomainName,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? "";
  }
}

class BuildSuggestersResponse {
  public FieldNameList $field_names;

  public function __construct(shape(
  ?'field_names' => FieldNameList,
  ) $s = shape()) {
    $this->field_names = $field_names ?? [];
  }
}

class CreateDomainRequest {
  public DomainName $domain_name;

  public function __construct(shape(
  ?'domain_name' => DomainName,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? "";
  }
}

class CreateDomainResponse {
  public DomainStatus $domain_status;

  public function __construct(shape(
  ?'domain_status' => DomainStatus,
  ) $s = shape()) {
    $this->domain_status = $domain_status ?? null;
  }
}

class DateArrayOptions {
  public FieldValue $default_value;
  public boolean $facet_enabled;
  public boolean $return_enabled;
  public boolean $search_enabled;
  public FieldNameCommaList $source_fields;

  public function __construct(shape(
  ?'default_value' => FieldValue,
  ?'facet_enabled' => boolean,
  ?'return_enabled' => boolean,
  ?'search_enabled' => boolean,
  ?'source_fields' => FieldNameCommaList,
  ) $s = shape()) {
    $this->default_value = $default_value ?? "";
    $this->facet_enabled = $facet_enabled ?? false;
    $this->return_enabled = $return_enabled ?? false;
    $this->search_enabled = $search_enabled ?? false;
    $this->source_fields = $source_fields ?? "";
  }
}

class DateOptions {
  public FieldValue $default_value;
  public boolean $facet_enabled;
  public boolean $return_enabled;
  public boolean $search_enabled;
  public boolean $sort_enabled;
  public FieldName $source_field;

  public function __construct(shape(
  ?'default_value' => FieldValue,
  ?'facet_enabled' => boolean,
  ?'return_enabled' => boolean,
  ?'search_enabled' => boolean,
  ?'sort_enabled' => boolean,
  ?'source_field' => FieldName,
  ) $s = shape()) {
    $this->default_value = $default_value ?? "";
    $this->facet_enabled = $facet_enabled ?? false;
    $this->return_enabled = $return_enabled ?? false;
    $this->search_enabled = $search_enabled ?? false;
    $this->sort_enabled = $sort_enabled ?? false;
    $this->source_field = $source_field ?? "";
  }
}

class DefineAnalysisSchemeRequest {
  public AnalysisScheme $analysis_scheme;
  public DomainName $domain_name;

  public function __construct(shape(
  ?'analysis_scheme' => AnalysisScheme,
  ?'domain_name' => DomainName,
  ) $s = shape()) {
    $this->analysis_scheme = $analysis_scheme ?? null;
    $this->domain_name = $domain_name ?? "";
  }
}

class DefineAnalysisSchemeResponse {
  public AnalysisSchemeStatus $analysis_scheme;

  public function __construct(shape(
  ?'analysis_scheme' => AnalysisSchemeStatus,
  ) $s = shape()) {
    $this->analysis_scheme = $analysis_scheme ?? null;
  }
}

class DefineExpressionRequest {
  public DomainName $domain_name;
  public Expression $expression;

  public function __construct(shape(
  ?'domain_name' => DomainName,
  ?'expression' => Expression,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? "";
    $this->expression = $expression ?? null;
  }
}

class DefineExpressionResponse {
  public ExpressionStatus $expression;

  public function __construct(shape(
  ?'expression' => ExpressionStatus,
  ) $s = shape()) {
    $this->expression = $expression ?? null;
  }
}

class DefineIndexFieldRequest {
  public DomainName $domain_name;
  public IndexField $index_field;

  public function __construct(shape(
  ?'domain_name' => DomainName,
  ?'index_field' => IndexField,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? "";
    $this->index_field = $index_field ?? null;
  }
}

class DefineIndexFieldResponse {
  public IndexFieldStatus $index_field;

  public function __construct(shape(
  ?'index_field' => IndexFieldStatus,
  ) $s = shape()) {
    $this->index_field = $index_field ?? null;
  }
}

class DefineSuggesterRequest {
  public DomainName $domain_name;
  public Suggester $suggester;

  public function __construct(shape(
  ?'domain_name' => DomainName,
  ?'suggester' => Suggester,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? "";
    $this->suggester = $suggester ?? null;
  }
}

class DefineSuggesterResponse {
  public SuggesterStatus $suggester;

  public function __construct(shape(
  ?'suggester' => SuggesterStatus,
  ) $s = shape()) {
    $this->suggester = $suggester ?? null;
  }
}

class DeleteAnalysisSchemeRequest {
  public StandardName $analysis_scheme_name;
  public DomainName $domain_name;

  public function __construct(shape(
  ?'analysis_scheme_name' => StandardName,
  ?'domain_name' => DomainName,
  ) $s = shape()) {
    $this->analysis_scheme_name = $analysis_scheme_name ?? "";
    $this->domain_name = $domain_name ?? "";
  }
}

class DeleteAnalysisSchemeResponse {
  public AnalysisSchemeStatus $analysis_scheme;

  public function __construct(shape(
  ?'analysis_scheme' => AnalysisSchemeStatus,
  ) $s = shape()) {
    $this->analysis_scheme = $analysis_scheme ?? null;
  }
}

class DeleteDomainRequest {
  public DomainName $domain_name;

  public function __construct(shape(
  ?'domain_name' => DomainName,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? "";
  }
}

class DeleteDomainResponse {
  public DomainStatus $domain_status;

  public function __construct(shape(
  ?'domain_status' => DomainStatus,
  ) $s = shape()) {
    $this->domain_status = $domain_status ?? null;
  }
}

class DeleteExpressionRequest {
  public DomainName $domain_name;
  public StandardName $expression_name;

  public function __construct(shape(
  ?'domain_name' => DomainName,
  ?'expression_name' => StandardName,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? "";
    $this->expression_name = $expression_name ?? "";
  }
}

class DeleteExpressionResponse {
  public ExpressionStatus $expression;

  public function __construct(shape(
  ?'expression' => ExpressionStatus,
  ) $s = shape()) {
    $this->expression = $expression ?? null;
  }
}

class DeleteIndexFieldRequest {
  public DomainName $domain_name;
  public DynamicFieldName $index_field_name;

  public function __construct(shape(
  ?'domain_name' => DomainName,
  ?'index_field_name' => DynamicFieldName,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? "";
    $this->index_field_name = $index_field_name ?? "";
  }
}

class DeleteIndexFieldResponse {
  public IndexFieldStatus $index_field;

  public function __construct(shape(
  ?'index_field' => IndexFieldStatus,
  ) $s = shape()) {
    $this->index_field = $index_field ?? null;
  }
}

class DeleteSuggesterRequest {
  public DomainName $domain_name;
  public StandardName $suggester_name;

  public function __construct(shape(
  ?'domain_name' => DomainName,
  ?'suggester_name' => StandardName,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? "";
    $this->suggester_name = $suggester_name ?? "";
  }
}

class DeleteSuggesterResponse {
  public SuggesterStatus $suggester;

  public function __construct(shape(
  ?'suggester' => SuggesterStatus,
  ) $s = shape()) {
    $this->suggester = $suggester ?? null;
  }
}

class DescribeAnalysisSchemesRequest {
  public StandardNameList $analysis_scheme_names;
  public boolean $deployed;
  public DomainName $domain_name;

  public function __construct(shape(
  ?'analysis_scheme_names' => StandardNameList,
  ?'deployed' => boolean,
  ?'domain_name' => DomainName,
  ) $s = shape()) {
    $this->analysis_scheme_names = $analysis_scheme_names ?? [];
    $this->deployed = $deployed ?? false;
    $this->domain_name = $domain_name ?? "";
  }
}

class DescribeAnalysisSchemesResponse {
  public AnalysisSchemeStatusList $analysis_schemes;

  public function __construct(shape(
  ?'analysis_schemes' => AnalysisSchemeStatusList,
  ) $s = shape()) {
    $this->analysis_schemes = $analysis_schemes ?? [];
  }
}

class DescribeAvailabilityOptionsRequest {
  public boolean $deployed;
  public DomainName $domain_name;

  public function __construct(shape(
  ?'deployed' => boolean,
  ?'domain_name' => DomainName,
  ) $s = shape()) {
    $this->deployed = $deployed ?? false;
    $this->domain_name = $domain_name ?? "";
  }
}

class DescribeAvailabilityOptionsResponse {
  public AvailabilityOptionsStatus $availability_options;

  public function __construct(shape(
  ?'availability_options' => AvailabilityOptionsStatus,
  ) $s = shape()) {
    $this->availability_options = $availability_options ?? null;
  }
}

class DescribeDomainEndpointOptionsRequest {
  public boolean $deployed;
  public DomainName $domain_name;

  public function __construct(shape(
  ?'deployed' => boolean,
  ?'domain_name' => DomainName,
  ) $s = shape()) {
    $this->deployed = $deployed ?? false;
    $this->domain_name = $domain_name ?? "";
  }
}

class DescribeDomainEndpointOptionsResponse {
  public DomainEndpointOptionsStatus $domain_endpoint_options;

  public function __construct(shape(
  ?'domain_endpoint_options' => DomainEndpointOptionsStatus,
  ) $s = shape()) {
    $this->domain_endpoint_options = $domain_endpoint_options ?? null;
  }
}

class DescribeDomainsRequest {
  public DomainNameList $domain_names;

  public function __construct(shape(
  ?'domain_names' => DomainNameList,
  ) $s = shape()) {
    $this->domain_names = $domain_names ?? [];
  }
}

class DescribeDomainsResponse {
  public DomainStatusList $domain_status_list;

  public function __construct(shape(
  ?'domain_status_list' => DomainStatusList,
  ) $s = shape()) {
    $this->domain_status_list = $domain_status_list ?? [];
  }
}

class DescribeExpressionsRequest {
  public boolean $deployed;
  public DomainName $domain_name;
  public StandardNameList $expression_names;

  public function __construct(shape(
  ?'deployed' => boolean,
  ?'domain_name' => DomainName,
  ?'expression_names' => StandardNameList,
  ) $s = shape()) {
    $this->deployed = $deployed ?? false;
    $this->domain_name = $domain_name ?? "";
    $this->expression_names = $expression_names ?? [];
  }
}

class DescribeExpressionsResponse {
  public ExpressionStatusList $expressions;

  public function __construct(shape(
  ?'expressions' => ExpressionStatusList,
  ) $s = shape()) {
    $this->expressions = $expressions ?? [];
  }
}

class DescribeIndexFieldsRequest {
  public boolean $deployed;
  public DomainName $domain_name;
  public DynamicFieldNameList $field_names;

  public function __construct(shape(
  ?'deployed' => boolean,
  ?'domain_name' => DomainName,
  ?'field_names' => DynamicFieldNameList,
  ) $s = shape()) {
    $this->deployed = $deployed ?? false;
    $this->domain_name = $domain_name ?? "";
    $this->field_names = $field_names ?? [];
  }
}

class DescribeIndexFieldsResponse {
  public IndexFieldStatusList $index_fields;

  public function __construct(shape(
  ?'index_fields' => IndexFieldStatusList,
  ) $s = shape()) {
    $this->index_fields = $index_fields ?? [];
  }
}

class DescribeScalingParametersRequest {
  public DomainName $domain_name;

  public function __construct(shape(
  ?'domain_name' => DomainName,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? "";
  }
}

class DescribeScalingParametersResponse {
  public ScalingParametersStatus $scaling_parameters;

  public function __construct(shape(
  ?'scaling_parameters' => ScalingParametersStatus,
  ) $s = shape()) {
    $this->scaling_parameters = $scaling_parameters ?? null;
  }
}

class DescribeServiceAccessPoliciesRequest {
  public boolean $deployed;
  public DomainName $domain_name;

  public function __construct(shape(
  ?'deployed' => boolean,
  ?'domain_name' => DomainName,
  ) $s = shape()) {
    $this->deployed = $deployed ?? false;
    $this->domain_name = $domain_name ?? "";
  }
}

class DescribeServiceAccessPoliciesResponse {
  public AccessPoliciesStatus $access_policies;

  public function __construct(shape(
  ?'access_policies' => AccessPoliciesStatus,
  ) $s = shape()) {
    $this->access_policies = $access_policies ?? null;
  }
}

class DescribeSuggestersRequest {
  public boolean $deployed;
  public DomainName $domain_name;
  public StandardNameList $suggester_names;

  public function __construct(shape(
  ?'deployed' => boolean,
  ?'domain_name' => DomainName,
  ?'suggester_names' => StandardNameList,
  ) $s = shape()) {
    $this->deployed = $deployed ?? false;
    $this->domain_name = $domain_name ?? "";
    $this->suggester_names = $suggester_names ?? [];
  }
}

class DescribeSuggestersResponse {
  public SuggesterStatusList $suggesters;

  public function __construct(shape(
  ?'suggesters' => SuggesterStatusList,
  ) $s = shape()) {
    $this->suggesters = $suggesters ?? [];
  }
}

class DisabledOperationException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DocumentSuggesterOptions {
  public SuggesterFuzzyMatching $fuzzy_matching;
  public string $sort_expression;
  public FieldName $source_field;

  public function __construct(shape(
  ?'fuzzy_matching' => SuggesterFuzzyMatching,
  ?'sort_expression' => string,
  ?'source_field' => FieldName,
  ) $s = shape()) {
    $this->fuzzy_matching = $fuzzy_matching ?? "";
    $this->sort_expression = $sort_expression ?? "";
    $this->source_field = $source_field ?? "";
  }
}

class DomainEndpointOptions {
  public boolean $enforce_https;
  public TLSSecurityPolicy $tls_security_policy;

  public function __construct(shape(
  ?'enforce_https' => boolean,
  ?'tls_security_policy' => TLSSecurityPolicy,
  ) $s = shape()) {
    $this->enforce_https = $enforce_https ?? false;
    $this->tls_security_policy = $tls_security_policy ?? "";
  }
}

class DomainEndpointOptionsStatus {
  public DomainEndpointOptions $options;
  public OptionStatus $status;

  public function __construct(shape(
  ?'options' => DomainEndpointOptions,
  ?'status' => OptionStatus,
  ) $s = shape()) {
    $this->options = $options ?? null;
    $this->status = $status ?? null;
  }
}

type DomainId = string;

type DomainName = string;

type DomainNameList = vec<DomainName>;

type DomainNameMap = dict<DomainName, APIVersion>;

class DomainStatus {
  public ARN $arn;
  public boolean $created;
  public boolean $deleted;
  public ServiceEndpoint $doc_service;
  public DomainId $domain_id;
  public DomainName $domain_name;
  public Limits $limits;
  public boolean $processing;
  public boolean $requires_index_documents;
  public InstanceCount $search_instance_count;
  public SearchInstanceType $search_instance_type;
  public PartitionCount $search_partition_count;
  public ServiceEndpoint $search_service;

  public function __construct(shape(
  ?'arn' => ARN,
  ?'created' => boolean,
  ?'deleted' => boolean,
  ?'doc_service' => ServiceEndpoint,
  ?'domain_id' => DomainId,
  ?'domain_name' => DomainName,
  ?'limits' => Limits,
  ?'processing' => boolean,
  ?'requires_index_documents' => boolean,
  ?'search_instance_count' => InstanceCount,
  ?'search_instance_type' => SearchInstanceType,
  ?'search_partition_count' => PartitionCount,
  ?'search_service' => ServiceEndpoint,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->created = $created ?? false;
    $this->deleted = $deleted ?? false;
    $this->doc_service = $doc_service ?? null;
    $this->domain_id = $domain_id ?? "";
    $this->domain_name = $domain_name ?? "";
    $this->limits = $limits ?? null;
    $this->processing = $processing ?? false;
    $this->requires_index_documents = $requires_index_documents ?? false;
    $this->search_instance_count = $search_instance_count ?? 0;
    $this->search_instance_type = $search_instance_type ?? "";
    $this->search_partition_count = $search_partition_count ?? 0;
    $this->search_service = $search_service ?? null;
  }
}

type DomainStatusList = vec<DomainStatus>;

type Double = float;

class DoubleArrayOptions {
  public Double $default_value;
  public boolean $facet_enabled;
  public boolean $return_enabled;
  public boolean $search_enabled;
  public FieldNameCommaList $source_fields;

  public function __construct(shape(
  ?'default_value' => Double,
  ?'facet_enabled' => boolean,
  ?'return_enabled' => boolean,
  ?'search_enabled' => boolean,
  ?'source_fields' => FieldNameCommaList,
  ) $s = shape()) {
    $this->default_value = $default_value ?? 0.0;
    $this->facet_enabled = $facet_enabled ?? false;
    $this->return_enabled = $return_enabled ?? false;
    $this->search_enabled = $search_enabled ?? false;
    $this->source_fields = $source_fields ?? "";
  }
}

class DoubleOptions {
  public Double $default_value;
  public boolean $facet_enabled;
  public boolean $return_enabled;
  public boolean $search_enabled;
  public boolean $sort_enabled;
  public FieldName $source_field;

  public function __construct(shape(
  ?'default_value' => Double,
  ?'facet_enabled' => boolean,
  ?'return_enabled' => boolean,
  ?'search_enabled' => boolean,
  ?'sort_enabled' => boolean,
  ?'source_field' => FieldName,
  ) $s = shape()) {
    $this->default_value = $default_value ?? 0.0;
    $this->facet_enabled = $facet_enabled ?? false;
    $this->return_enabled = $return_enabled ?? false;
    $this->search_enabled = $search_enabled ?? false;
    $this->sort_enabled = $sort_enabled ?? false;
    $this->source_field = $source_field ?? "";
  }
}

type DynamicFieldName = string;

type DynamicFieldNameList = vec<DynamicFieldName>;

type ErrorCode = string;

type ErrorMessage = string;

class Expression {
  public StandardName $expression_name;
  public ExpressionValue $expression_value;

  public function __construct(shape(
  ?'expression_name' => StandardName,
  ?'expression_value' => ExpressionValue,
  ) $s = shape()) {
    $this->expression_name = $expression_name ?? "";
    $this->expression_value = $expression_value ?? "";
  }
}

class ExpressionStatus {
  public Expression $options;
  public OptionStatus $status;

  public function __construct(shape(
  ?'options' => Expression,
  ?'status' => OptionStatus,
  ) $s = shape()) {
    $this->options = $options ?? null;
    $this->status = $status ?? null;
  }
}

type ExpressionStatusList = vec<ExpressionStatus>;

type ExpressionValue = string;

type FieldName = string;

type FieldNameCommaList = string;

type FieldNameList = vec<FieldName>;

type FieldValue = string;

class IndexDocumentsRequest {
  public DomainName $domain_name;

  public function __construct(shape(
  ?'domain_name' => DomainName,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? "";
  }
}

class IndexDocumentsResponse {
  public FieldNameList $field_names;

  public function __construct(shape(
  ?'field_names' => FieldNameList,
  ) $s = shape()) {
    $this->field_names = $field_names ?? [];
  }
}

class IndexField {
  public DateArrayOptions $date_array_options;
  public DateOptions $date_options;
  public DoubleArrayOptions $double_array_options;
  public DoubleOptions $double_options;
  public DynamicFieldName $index_field_name;
  public IndexFieldType $index_field_type;
  public IntArrayOptions $int_array_options;
  public IntOptions $int_options;
  public LatLonOptions $lat_lon_options;
  public LiteralArrayOptions $literal_array_options;
  public LiteralOptions $literal_options;
  public TextArrayOptions $text_array_options;
  public TextOptions $text_options;

  public function __construct(shape(
  ?'date_array_options' => DateArrayOptions,
  ?'date_options' => DateOptions,
  ?'double_array_options' => DoubleArrayOptions,
  ?'double_options' => DoubleOptions,
  ?'index_field_name' => DynamicFieldName,
  ?'index_field_type' => IndexFieldType,
  ?'int_array_options' => IntArrayOptions,
  ?'int_options' => IntOptions,
  ?'lat_lon_options' => LatLonOptions,
  ?'literal_array_options' => LiteralArrayOptions,
  ?'literal_options' => LiteralOptions,
  ?'text_array_options' => TextArrayOptions,
  ?'text_options' => TextOptions,
  ) $s = shape()) {
    $this->date_array_options = $date_array_options ?? null;
    $this->date_options = $date_options ?? null;
    $this->double_array_options = $double_array_options ?? null;
    $this->double_options = $double_options ?? null;
    $this->index_field_name = $index_field_name ?? "";
    $this->index_field_type = $index_field_type ?? "";
    $this->int_array_options = $int_array_options ?? null;
    $this->int_options = $int_options ?? null;
    $this->lat_lon_options = $lat_lon_options ?? null;
    $this->literal_array_options = $literal_array_options ?? null;
    $this->literal_options = $literal_options ?? null;
    $this->text_array_options = $text_array_options ?? null;
    $this->text_options = $text_options ?? null;
  }
}

class IndexFieldStatus {
  public IndexField $options;
  public OptionStatus $status;

  public function __construct(shape(
  ?'options' => IndexField,
  ?'status' => OptionStatus,
  ) $s = shape()) {
    $this->options = $options ?? null;
    $this->status = $status ?? null;
  }
}

type IndexFieldStatusList = vec<IndexFieldStatus>;

type IndexFieldType = string;

type InstanceCount = int;

class IntArrayOptions {
  public Long $default_value;
  public boolean $facet_enabled;
  public boolean $return_enabled;
  public boolean $search_enabled;
  public FieldNameCommaList $source_fields;

  public function __construct(shape(
  ?'default_value' => Long,
  ?'facet_enabled' => boolean,
  ?'return_enabled' => boolean,
  ?'search_enabled' => boolean,
  ?'source_fields' => FieldNameCommaList,
  ) $s = shape()) {
    $this->default_value = $default_value ?? 0;
    $this->facet_enabled = $facet_enabled ?? false;
    $this->return_enabled = $return_enabled ?? false;
    $this->search_enabled = $search_enabled ?? false;
    $this->source_fields = $source_fields ?? "";
  }
}

class IntOptions {
  public Long $default_value;
  public boolean $facet_enabled;
  public boolean $return_enabled;
  public boolean $search_enabled;
  public boolean $sort_enabled;
  public FieldName $source_field;

  public function __construct(shape(
  ?'default_value' => Long,
  ?'facet_enabled' => boolean,
  ?'return_enabled' => boolean,
  ?'search_enabled' => boolean,
  ?'sort_enabled' => boolean,
  ?'source_field' => FieldName,
  ) $s = shape()) {
    $this->default_value = $default_value ?? 0;
    $this->facet_enabled = $facet_enabled ?? false;
    $this->return_enabled = $return_enabled ?? false;
    $this->search_enabled = $search_enabled ?? false;
    $this->sort_enabled = $sort_enabled ?? false;
    $this->source_field = $source_field ?? "";
  }
}

class InternalException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidTypeException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class LatLonOptions {
  public FieldValue $default_value;
  public boolean $facet_enabled;
  public boolean $return_enabled;
  public boolean $search_enabled;
  public boolean $sort_enabled;
  public FieldName $source_field;

  public function __construct(shape(
  ?'default_value' => FieldValue,
  ?'facet_enabled' => boolean,
  ?'return_enabled' => boolean,
  ?'search_enabled' => boolean,
  ?'sort_enabled' => boolean,
  ?'source_field' => FieldName,
  ) $s = shape()) {
    $this->default_value = $default_value ?? "";
    $this->facet_enabled = $facet_enabled ?? false;
    $this->return_enabled = $return_enabled ?? false;
    $this->search_enabled = $search_enabled ?? false;
    $this->sort_enabled = $sort_enabled ?? false;
    $this->source_field = $source_field ?? "";
  }
}

class LimitExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Limits {
  public MaximumPartitionCount $maximum_partition_count;
  public MaximumReplicationCount $maximum_replication_count;

  public function __construct(shape(
  ?'maximum_partition_count' => MaximumPartitionCount,
  ?'maximum_replication_count' => MaximumReplicationCount,
  ) $s = shape()) {
    $this->maximum_partition_count = $maximum_partition_count ?? 0;
    $this->maximum_replication_count = $maximum_replication_count ?? 0;
  }
}

class ListDomainNamesResponse {
  public DomainNameMap $domain_names;

  public function __construct(shape(
  ?'domain_names' => DomainNameMap,
  ) $s = shape()) {
    $this->domain_names = $domain_names ?? [];
  }
}

class LiteralArrayOptions {
  public FieldValue $default_value;
  public boolean $facet_enabled;
  public boolean $return_enabled;
  public boolean $search_enabled;
  public FieldNameCommaList $source_fields;

  public function __construct(shape(
  ?'default_value' => FieldValue,
  ?'facet_enabled' => boolean,
  ?'return_enabled' => boolean,
  ?'search_enabled' => boolean,
  ?'source_fields' => FieldNameCommaList,
  ) $s = shape()) {
    $this->default_value = $default_value ?? "";
    $this->facet_enabled = $facet_enabled ?? false;
    $this->return_enabled = $return_enabled ?? false;
    $this->search_enabled = $search_enabled ?? false;
    $this->source_fields = $source_fields ?? "";
  }
}

class LiteralOptions {
  public FieldValue $default_value;
  public boolean $facet_enabled;
  public boolean $return_enabled;
  public boolean $search_enabled;
  public boolean $sort_enabled;
  public FieldName $source_field;

  public function __construct(shape(
  ?'default_value' => FieldValue,
  ?'facet_enabled' => boolean,
  ?'return_enabled' => boolean,
  ?'search_enabled' => boolean,
  ?'sort_enabled' => boolean,
  ?'source_field' => FieldName,
  ) $s = shape()) {
    $this->default_value = $default_value ?? "";
    $this->facet_enabled = $facet_enabled ?? false;
    $this->return_enabled = $return_enabled ?? false;
    $this->search_enabled = $search_enabled ?? false;
    $this->sort_enabled = $sort_enabled ?? false;
    $this->source_field = $source_field ?? "";
  }
}

type Long = int;

type MaximumPartitionCount = int;

type MaximumReplicationCount = int;

type MultiAZ = bool;

type OptionState = string;

class OptionStatus {
  public UpdateTimestamp $creation_date;
  public boolean $pending_deletion;
  public OptionState $state;
  public UpdateTimestamp $update_date;
  public UIntValue $update_version;

  public function __construct(shape(
  ?'creation_date' => UpdateTimestamp,
  ?'pending_deletion' => boolean,
  ?'state' => OptionState,
  ?'update_date' => UpdateTimestamp,
  ?'update_version' => UIntValue,
  ) $s = shape()) {
    $this->creation_date = $creation_date ?? 0;
    $this->pending_deletion = $pending_deletion ?? false;
    $this->state = $state ?? "";
    $this->update_date = $update_date ?? 0;
    $this->update_version = $update_version ?? 0;
  }
}

type PartitionCount = int;

type PartitionInstanceType = string;

type PolicyDocument = string;

class ResourceNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ScalingParameters {
  public PartitionInstanceType $desired_instance_type;
  public UIntValue $desired_partition_count;
  public UIntValue $desired_replication_count;

  public function __construct(shape(
  ?'desired_instance_type' => PartitionInstanceType,
  ?'desired_partition_count' => UIntValue,
  ?'desired_replication_count' => UIntValue,
  ) $s = shape()) {
    $this->desired_instance_type = $desired_instance_type ?? "";
    $this->desired_partition_count = $desired_partition_count ?? 0;
    $this->desired_replication_count = $desired_replication_count ?? 0;
  }
}

class ScalingParametersStatus {
  public ScalingParameters $options;
  public OptionStatus $status;

  public function __construct(shape(
  ?'options' => ScalingParameters,
  ?'status' => OptionStatus,
  ) $s = shape()) {
    $this->options = $options ?? null;
    $this->status = $status ?? null;
  }
}

type SearchInstanceType = string;

class ServiceEndpoint {
  public ServiceUrl $endpoint;

  public function __construct(shape(
  ?'endpoint' => ServiceUrl,
  ) $s = shape()) {
    $this->endpoint = $endpoint ?? "";
  }
}

type ServiceUrl = string;

type StandardName = string;

type StandardNameList = vec<StandardName>;

type String = string;

class Suggester {
  public DocumentSuggesterOptions $document_suggester_options;
  public StandardName $suggester_name;

  public function __construct(shape(
  ?'document_suggester_options' => DocumentSuggesterOptions,
  ?'suggester_name' => StandardName,
  ) $s = shape()) {
    $this->document_suggester_options = $document_suggester_options ?? null;
    $this->suggester_name = $suggester_name ?? "";
  }
}

type SuggesterFuzzyMatching = string;

class SuggesterStatus {
  public Suggester $options;
  public OptionStatus $status;

  public function __construct(shape(
  ?'options' => Suggester,
  ?'status' => OptionStatus,
  ) $s = shape()) {
    $this->options = $options ?? null;
    $this->status = $status ?? null;
  }
}

type SuggesterStatusList = vec<SuggesterStatus>;

type TLSSecurityPolicy = string;

class TextArrayOptions {
  public Word $analysis_scheme;
  public FieldValue $default_value;
  public boolean $highlight_enabled;
  public boolean $return_enabled;
  public FieldNameCommaList $source_fields;

  public function __construct(shape(
  ?'analysis_scheme' => Word,
  ?'default_value' => FieldValue,
  ?'highlight_enabled' => boolean,
  ?'return_enabled' => boolean,
  ?'source_fields' => FieldNameCommaList,
  ) $s = shape()) {
    $this->analysis_scheme = $analysis_scheme ?? "";
    $this->default_value = $default_value ?? "";
    $this->highlight_enabled = $highlight_enabled ?? false;
    $this->return_enabled = $return_enabled ?? false;
    $this->source_fields = $source_fields ?? "";
  }
}

class TextOptions {
  public Word $analysis_scheme;
  public FieldValue $default_value;
  public boolean $highlight_enabled;
  public boolean $return_enabled;
  public boolean $sort_enabled;
  public FieldName $source_field;

  public function __construct(shape(
  ?'analysis_scheme' => Word,
  ?'default_value' => FieldValue,
  ?'highlight_enabled' => boolean,
  ?'return_enabled' => boolean,
  ?'sort_enabled' => boolean,
  ?'source_field' => FieldName,
  ) $s = shape()) {
    $this->analysis_scheme = $analysis_scheme ?? "";
    $this->default_value = $default_value ?? "";
    $this->highlight_enabled = $highlight_enabled ?? false;
    $this->return_enabled = $return_enabled ?? false;
    $this->sort_enabled = $sort_enabled ?? false;
    $this->source_field = $source_field ?? "";
  }
}

type UIntValue = int;

class UpdateAvailabilityOptionsRequest {
  public DomainName $domain_name;
  public boolean $multi_az;

  public function __construct(shape(
  ?'domain_name' => DomainName,
  ?'multi_az' => boolean,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? "";
    $this->multi_az = $multi_az ?? false;
  }
}

class UpdateAvailabilityOptionsResponse {
  public AvailabilityOptionsStatus $availability_options;

  public function __construct(shape(
  ?'availability_options' => AvailabilityOptionsStatus,
  ) $s = shape()) {
    $this->availability_options = $availability_options ?? null;
  }
}

class UpdateDomainEndpointOptionsRequest {
  public DomainEndpointOptions $domain_endpoint_options;
  public DomainName $domain_name;

  public function __construct(shape(
  ?'domain_endpoint_options' => DomainEndpointOptions,
  ?'domain_name' => DomainName,
  ) $s = shape()) {
    $this->domain_endpoint_options = $domain_endpoint_options ?? null;
    $this->domain_name = $domain_name ?? "";
  }
}

class UpdateDomainEndpointOptionsResponse {
  public DomainEndpointOptionsStatus $domain_endpoint_options;

  public function __construct(shape(
  ?'domain_endpoint_options' => DomainEndpointOptionsStatus,
  ) $s = shape()) {
    $this->domain_endpoint_options = $domain_endpoint_options ?? null;
  }
}

class UpdateScalingParametersRequest {
  public DomainName $domain_name;
  public ScalingParameters $scaling_parameters;

  public function __construct(shape(
  ?'domain_name' => DomainName,
  ?'scaling_parameters' => ScalingParameters,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? "";
    $this->scaling_parameters = $scaling_parameters ?? null;
  }
}

class UpdateScalingParametersResponse {
  public ScalingParametersStatus $scaling_parameters;

  public function __construct(shape(
  ?'scaling_parameters' => ScalingParametersStatus,
  ) $s = shape()) {
    $this->scaling_parameters = $scaling_parameters ?? null;
  }
}

class UpdateServiceAccessPoliciesRequest {
  public PolicyDocument $access_policies;
  public DomainName $domain_name;

  public function __construct(shape(
  ?'access_policies' => PolicyDocument,
  ?'domain_name' => DomainName,
  ) $s = shape()) {
    $this->access_policies = $access_policies ?? "";
    $this->domain_name = $domain_name ?? "";
  }
}

class UpdateServiceAccessPoliciesResponse {
  public AccessPoliciesStatus $access_policies;

  public function __construct(shape(
  ?'access_policies' => AccessPoliciesStatus,
  ) $s = shape()) {
    $this->access_policies = $access_policies ?? null;
  }
}

type UpdateTimestamp = int;

class ValidationException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Word = string;

