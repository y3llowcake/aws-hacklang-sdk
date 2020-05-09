<?hh // strict
namespace slack\aws\cloudsearchdomain;

interface  {
  public function Search(SearchRequest): Awaitable<Errors\Result<SearchResponse>>;
  public function Suggest(SuggestRequest): Awaitable<Errors\Result<SuggestResponse>>;
  public function UploadDocuments(UploadDocumentsRequest): Awaitable<Errors\Result<UploadDocumentsResponse>>;
}

class Adds {
}

class Blob {
}

class Bucket {
  public Long $count;
  public string $value;
}

class BucketInfo {
  public BucketList $buckets;
}

class BucketList {
}

class ContentType {
}

class Cursor {
}

class Deletes {
}

class DocumentServiceException {
  public string $message;
  public string $status;
}

class DocumentServiceWarning {
  public string $message;
}

class DocumentServiceWarnings {
}

class Double {
}

class Expr {
}

class Exprs {
}

class Facet {
}

class Facets {
}

class FieldStats {
  public Long $count;
  public string $max;
  public string $mean;
  public string $min;
  public Long $missing;
  public Double $stddev;
  public Double $sum;
  public Double $sum_of_squares;
}

class FieldValue {
}

class Fields {
}

class FilterQuery {
}

class Highlight {
}

class Highlights {
}

class Hit {
  public Exprs $exprs;
  public Fields $fields;
  public Highlights $highlights;
  public string $id;
}

class HitList {
}

class Hits {
  public string $cursor;
  public Long $found;
  public HitList $hit;
  public Long $start;
}

class Long {
}

class Partial {
}

class Query {
}

class QueryOptions {
}

class QueryParser {
}

class Return {
}

class SearchException {
  public string $message;
}

class SearchRequest {
  public Cursor $cursor;
  public Expr $expr;
  public Facet $facet;
  public FilterQuery $filter_query;
  public Highlight $highlight;
  public Partial $partial;
  public Query $query;
  public QueryOptions $query_options;
  public QueryParser $query_parser;
  public Return $return;
  public Size $size;
  public Sort $sort;
  public Start $start;
  public Stat $stats;
}

class SearchResponse {
  public Facets $facets;
  public Hits $hits;
  public Stats $stats;
  public SearchStatus $status;
}

class SearchStatus {
  public string $rid;
  public Long $timems;
}

class Size {
}

class Sort {
}

class Start {
}

class Stat {
}

class Stats {
}

class String {
}

class SuggestModel {
  public Long $found;
  public string $query;
  public Suggestions $suggestions;
}

class SuggestRequest {
  public Query $query;
  public SuggestionsSize $size;
  public Suggester $suggester;
}

class SuggestResponse {
  public SuggestStatus $status;
  public SuggestModel $suggest;
}

class SuggestStatus {
  public string $rid;
  public Long $timems;
}

class Suggester {
}

class SuggestionMatch {
  public string $id;
  public Long $score;
  public string $suggestion;
}

class Suggestions {
}

class SuggestionsSize {
}

class UploadDocumentsRequest {
  public ContentType $content_type;
  public Blob $documents;
}

class UploadDocumentsResponse {
  public Adds $adds;
  public Deletes $deletes;
  public string $status;
  public DocumentServiceWarnings $warnings;
}

