<?hh // strict
namespace slack\aws\personalize-runtime;

interface Personalize Runtime {
  public function GetPersonalizedRanking(GetPersonalizedRankingRequest): Awaitable<Errors\Result<GetPersonalizedRankingResponse>>;
  public function GetRecommendations(GetRecommendationsRequest): Awaitable<Errors\Result<GetRecommendationsResponse>>;
}

type Arn = string;

type AttributeName = string;

type AttributeValue = string;

type Context = dict<AttributeName, AttributeValue>;

type ErrorMessage = string;

class GetPersonalizedRankingRequest {
  public Arn $campaign_arn;
  public Context $context;
  public InputList $input_list;
  public UserID $user_id;

  public function __construct(shape(
  ?'campaign_arn' => Arn,
  ?'context' => Context,
  ?'input_list' => InputList,
  ?'user_id' => UserID,
  ) $s = shape()) {
    $this->campaign_arn = $campaign_arn ?? "";
    $this->context = $context ?? [];
    $this->input_list = $input_list ?? [];
    $this->user_id = $user_id ?? "";
  }
}

class GetPersonalizedRankingResponse {
  public ItemList $personalized_ranking;

  public function __construct(shape(
  ?'personalized_ranking' => ItemList,
  ) $s = shape()) {
    $this->personalized_ranking = $personalized_ranking ?? [];
  }
}

class GetRecommendationsRequest {
  public Arn $campaign_arn;
  public Context $context;
  public ItemID $item_id;
  public NumResults $num_results;
  public UserID $user_id;

  public function __construct(shape(
  ?'campaign_arn' => Arn,
  ?'context' => Context,
  ?'item_id' => ItemID,
  ?'num_results' => NumResults,
  ?'user_id' => UserID,
  ) $s = shape()) {
    $this->campaign_arn = $campaign_arn ?? "";
    $this->context = $context ?? [];
    $this->item_id = $item_id ?? "";
    $this->num_results = $num_results ?? 0;
    $this->user_id = $user_id ?? "";
  }
}

class GetRecommendationsResponse {
  public ItemList $item_list;

  public function __construct(shape(
  ?'item_list' => ItemList,
  ) $s = shape()) {
    $this->item_list = $item_list ?? [];
  }
}

type InputList = vec<ItemID>;

class InvalidInputException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ItemID = string;

type ItemList = vec<PredictedItem>;

type NumResults = int;

class PredictedItem {
  public ItemID $item_id;
  public Score $score;

  public function __construct(shape(
  ?'item_id' => ItemID,
  ?'score' => Score,
  ) $s = shape()) {
    $this->item_id = $item_id ?? "";
    $this->score = $score ?? 0.0;
  }
}

class ResourceNotFoundException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type Score = float;

type UserID = string;

