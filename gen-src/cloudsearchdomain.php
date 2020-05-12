<?hh // strict
namespace slack\aws\cloudsearchdomain;

interface  {
  public function Search(SearchRequest $in): Awaitable<\Errors\Result<SearchResponse>>;
  public function Suggest(SuggestRequest $in): Awaitable<\Errors\Result<SuggestResponse>>;
  public function UploadDocuments(UploadDocumentsRequest $in): Awaitable<\Errors\Result<UploadDocumentsResponse>>;
}

type Adds = int;

type Blob = string;

class Bucket {
  public ?Long $count;
  public string $value;

  public function __construct(shape(
    ?'count' => ?Long,
    ?'value' => string,
  ) $s = shape()) {
    $this->count = $s['count'] ?? 0;
    $this->value = $s['value'] ?? '';
  }
}

class BucketInfo {
  public ?BucketList $buckets;

  public function __construct(shape(
    ?'buckets' => ?BucketList,
  ) $s = shape()) {
    $this->buckets = $s['buckets'] ?? vec[];
  }
}

type BucketList = vec<Bucket>;

type ContentType = string;

type Cursor = string;

type Deletes = int;

class DocumentServiceException {
  public string $message;
  public string $status;

  public function __construct(shape(
    ?'message' => string,
    ?'status' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class DocumentServiceWarning {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type DocumentServiceWarnings = vec<DocumentServiceWarning>;

type Double = float;

type Expr = string;

type Exprs = dict<String, String>;

type Facet = string;

type Facets = dict<String, BucketInfo>;

class FieldStats {
  public ?Long $count;
  public string $max;
  public string $mean;
  public string $min;
  public ?Long $missing;
  public ?Double $stddev;
  public ?Double $sum;
  public ?Double $sum_of_squares;

  public function __construct(shape(
    ?'count' => ?Long,
    ?'max' => string,
    ?'mean' => string,
    ?'min' => string,
    ?'missing' => ?Long,
    ?'stddev' => ?Double,
    ?'sum' => ?Double,
    ?'sum_of_squares' => ?Double,
  ) $s = shape()) {
    $this->count = $s['count'] ?? 0;
    $this->max = $s['max'] ?? '';
    $this->mean = $s['mean'] ?? '';
    $this->min = $s['min'] ?? '';
    $this->missing = $s['missing'] ?? 0;
    $this->stddev = $s['stddev'] ?? 0.0;
    $this->sum = $s['sum'] ?? 0.0;
    $this->sum_of_squares = $s['sum_of_squares'] ?? 0.0;
  }
}

type FieldValue = vec<String>;

type Fields = dict<String, FieldValue>;

type FilterQuery = string;

type Highlight = string;

type Highlights = dict<String, String>;

class Hit {
  public ?Exprs $exprs;
  public ?Fields $fields;
  public ?Highlights $highlights;
  public string $id;

  public function __construct(shape(
    ?'exprs' => ?Exprs,
    ?'fields' => ?Fields,
    ?'highlights' => ?Highlights,
    ?'id' => string,
  ) $s = shape()) {
    $this->exprs = $s['exprs'] ?? dict[];
    $this->fields = $s['fields'] ?? dict[];
    $this->highlights = $s['highlights'] ?? dict[];
    $this->id = $s['id'] ?? '';
  }
}

type HitList = vec<Hit>;

class Hits {
  public string $cursor;
  public ?Long $found;
  public ?HitList $hit;
  public ?Long $start;

  public function __construct(shape(
    ?'cursor' => string,
    ?'found' => ?Long,
    ?'hit' => ?HitList,
    ?'start' => ?Long,
  ) $s = shape()) {
    $this->cursor = $s['cursor'] ?? '';
    $this->found = $s['found'] ?? 0;
    $this->hit = $s['hit'] ?? vec[];
    $this->start = $s['start'] ?? 0;
  }
}

type Long = int;

type Partial = bool;

type Query = string;

type QueryOptions = string;

type QueryParser = string;

type Return = string;

class SearchException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class SearchRequest {
  public ?Cursor $cursor;
  public ?Expr $expr;
  public ?Facet $facet;
  public ?FilterQuery $filter_query;
  public ?Highlight $highlight;
  public ?Partial $partial;
  public ?Query $query;
  public ?QueryOptions $query_options;
  public ?QueryParser $query_parser;
  public ?Return $return;
  public ?Size $size;
  public ?Sort $sort;
  public ?Start $start;
  public ?Stat $stats;

  public function __construct(shape(
    ?'cursor' => ?Cursor,
    ?'expr' => ?Expr,
    ?'facet' => ?Facet,
    ?'filter_query' => ?FilterQuery,
    ?'highlight' => ?Highlight,
    ?'partial' => ?Partial,
    ?'query' => ?Query,
    ?'query_options' => ?QueryOptions,
    ?'query_parser' => ?QueryParser,
    ?'return' => ?Return,
    ?'size' => ?Size,
    ?'sort' => ?Sort,
    ?'start' => ?Start,
    ?'stats' => ?Stat,
  ) $s = shape()) {
    $this->cursor = $s['cursor'] ?? '';
    $this->expr = $s['expr'] ?? '';
    $this->facet = $s['facet'] ?? '';
    $this->filter_query = $s['filter_query'] ?? '';
    $this->highlight = $s['highlight'] ?? '';
    $this->partial = $s['partial'] ?? false;
    $this->query = $s['query'] ?? '';
    $this->query_options = $s['query_options'] ?? '';
    $this->query_parser = $s['query_parser'] ?? '';
    $this->return = $s['return'] ?? '';
    $this->size = $s['size'] ?? 0;
    $this->sort = $s['sort'] ?? '';
    $this->start = $s['start'] ?? 0;
    $this->stats = $s['stats'] ?? '';
  }
}

class SearchResponse {
  public ?Facets $facets;
  public ?Hits $hits;
  public ?Stats $stats;
  public ?SearchStatus $status;

  public function __construct(shape(
    ?'facets' => ?Facets,
    ?'hits' => ?Hits,
    ?'stats' => ?Stats,
    ?'status' => ?SearchStatus,
  ) $s = shape()) {
    $this->facets = $s['facets'] ?? dict[];
    $this->hits = $s['hits'] ?? null;
    $this->stats = $s['stats'] ?? dict[];
    $this->status = $s['status'] ?? null;
  }
}

class SearchStatus {
  public string $rid;
  public ?Long $timems;

  public function __construct(shape(
    ?'rid' => string,
    ?'timems' => ?Long,
  ) $s = shape()) {
    $this->rid = $s['rid'] ?? '';
    $this->timems = $s['timems'] ?? 0;
  }
}

type Size = int;

type Sort = string;

type Start = int;

type Stat = string;

type Stats = dict<String, FieldStats>;

type String = string;

class SuggestModel {
  public ?Long $found;
  public string $query;
  public ?Suggestions $suggestions;

  public function __construct(shape(
    ?'found' => ?Long,
    ?'query' => string,
    ?'suggestions' => ?Suggestions,
  ) $s = shape()) {
    $this->found = $s['found'] ?? 0;
    $this->query = $s['query'] ?? '';
    $this->suggestions = $s['suggestions'] ?? vec[];
  }
}

class SuggestRequest {
  public ?Query $query;
  public ?SuggestionsSize $size;
  public ?Suggester $suggester;

  public function __construct(shape(
    ?'query' => ?Query,
    ?'size' => ?SuggestionsSize,
    ?'suggester' => ?Suggester,
  ) $s = shape()) {
    $this->query = $s['query'] ?? '';
    $this->size = $s['size'] ?? 0;
    $this->suggester = $s['suggester'] ?? '';
  }
}

class SuggestResponse {
  public ?SuggestStatus $status;
  public ?SuggestModel $suggest;

  public function __construct(shape(
    ?'status' => ?SuggestStatus,
    ?'suggest' => ?SuggestModel,
  ) $s = shape()) {
    $this->status = $s['status'] ?? null;
    $this->suggest = $s['suggest'] ?? null;
  }
}

class SuggestStatus {
  public string $rid;
  public ?Long $timems;

  public function __construct(shape(
    ?'rid' => string,
    ?'timems' => ?Long,
  ) $s = shape()) {
    $this->rid = $s['rid'] ?? '';
    $this->timems = $s['timems'] ?? 0;
  }
}

type Suggester = string;

class SuggestionMatch {
  public string $id;
  public ?Long $score;
  public string $suggestion;

  public function __construct(shape(
    ?'id' => string,
    ?'score' => ?Long,
    ?'suggestion' => string,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->score = $s['score'] ?? 0;
    $this->suggestion = $s['suggestion'] ?? '';
  }
}

type Suggestions = vec<SuggestionMatch>;

type SuggestionsSize = int;

class UploadDocumentsRequest {
  public ?ContentType $content_type;
  public ?Blob $documents;

  public function __construct(shape(
    ?'content_type' => ?ContentType,
    ?'documents' => ?Blob,
  ) $s = shape()) {
    $this->content_type = $s['content_type'] ?? '';
    $this->documents = $s['documents'] ?? '';
  }
}

class UploadDocumentsResponse {
  public ?Adds $adds;
  public ?Deletes $deletes;
  public string $status;
  public ?DocumentServiceWarnings $warnings;

  public function __construct(shape(
    ?'adds' => ?Adds,
    ?'deletes' => ?Deletes,
    ?'status' => string,
    ?'warnings' => ?DocumentServiceWarnings,
  ) $s = shape()) {
    $this->adds = $s['adds'] ?? 0;
    $this->deletes = $s['deletes'] ?? 0;
    $this->status = $s['status'] ?? '';
    $this->warnings = $s['warnings'] ?? vec[];
  }
}

