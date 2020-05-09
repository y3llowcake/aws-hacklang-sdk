<?hh // strict
namespace slack\aws\cloudsearchdomain;

interface  {
  public function Search(SearchRequest) Awaitable<Errors\Result<SearchResponse>>;
  public function Suggest(SuggestRequest) Awaitable<Errors\Result<SuggestResponse>>;
  public function UploadDocuments(UploadDocumentsRequest) Awaitable<Errors\Result<UploadDocumentsResponse>>;
}

class UploadDocumentsRequest {
  public Blob $documents;
  public ContentType $content_type;
}

class Long {
}

class SearchStatus {
  public Long $timems;
  public string $rid;
}

class SuggestModel {
  public Long $found;
  public Suggestions $suggestions;
  public string $query;
}

class Fields {
}

class QueryOptions {
}

class SearchException {
  public string $message;
}

class Blob {
}

class Cursor {
}

class DocumentServiceWarnings {
}

class SearchRequest {
  public Highlight $highlight;
  public Partial $partial;
  public Size $size;
  public Cursor $cursor;
  public Facet $facet;
  public FilterQuery $filter_query;
  public QueryParser $query_parser;
  public Stat $stats;
  public QueryOptions $query_options;
  public Return $return;
  public Sort $sort;
  public Start $start;
  public Expr $expr;
  public Query $query;
}

class Stats {
}

class Suggester {
}

class SuggestionMatch {
  public Long $score;
  public string $id;
  public string $suggestion;
}

class Suggestions {
}

class Exprs {
}

class Facet {
}

class FieldValue {
}

class Return {
}

class SearchResponse {
  public SearchStatus $status;
  public Hits $hits;
  public Facets $facets;
  public Stats $stats;
}

class Sort {
}

class Stat {
}

class SuggestRequest {
  public Query $query;
  public Suggester $suggester;
  public SuggestionsSize $size;
}

class DocumentServiceException {
  public string $status;
  public string $message;
}

class Double {
}

class Highlight {
}

class Partial {
}

class String {
}

class Bucket {
  public string $value;
  public Long $count;
}

class FieldStats {
  public Double $sum;
  public Double $sum_of_squares;
  public string $mean;
  public Double $stddev;
  public string $min;
  public string $max;
  public Long $count;
  public Long $missing;
}

class Highlights {
}

class Hit {
  public Highlights $highlights;
  public string $id;
  public Fields $fields;
  public Exprs $exprs;
}

class QueryParser {
}

class SuggestionsSize {
}

class UploadDocumentsResponse {
  public string $status;
  public Adds $adds;
  public Deletes $deletes;
  public DocumentServiceWarnings $warnings;
}

class Adds {
}

class Deletes {
}

class FilterQuery {
}

class Facets {
}

class HitList {
}

class Query {
}

class Size {
}

class Start {
}

class BucketInfo {
  public BucketList $buckets;
}

class BucketList {
}

class ContentType {
}

class SuggestResponse {
  public SuggestStatus $status;
  public SuggestModel $suggest;
}

class SuggestStatus {
  public Long $timems;
  public string $rid;
}

class DocumentServiceWarning {
  public string $message;
}

class Expr {
}

class Hits {
  public Long $found;
  public Long $start;
  public string $cursor;
  public HitList $hit;
}

