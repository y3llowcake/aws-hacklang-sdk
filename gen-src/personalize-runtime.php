<?hh // strict
namespace slack\aws\personalize-runtime;

interface PersonalizeRuntime {
  public function GetPersonalizedRanking(GetPersonalizedRankingRequest $in): Awaitable<\Errors\Result<GetPersonalizedRankingResponse>>;
  public function GetRecommendations(GetRecommendationsRequest $in): Awaitable<\Errors\Result<GetRecommendationsResponse>>;
}

type Arn = string;

type AttributeName = string;

type AttributeValue = string;

type Context = dict<AttributeName, AttributeValue>;

type ErrorMessage = string;

class GetPersonalizedRankingRequest {
  public ?Arn $campaign_arn;
  public ?Context $context;
  public ?InputList $input_list;
  public ?UserID $user_id;

  public function __construct(shape(
    ?'campaign_arn' => ?Arn,
    ?'context' => ?Context,
    ?'input_list' => ?InputList,
    ?'user_id' => ?UserID,
  ) $s = shape()) {
    $this->campaign_arn = $s['campaign_arn'] ?? '';
    $this->context = $s['context'] ?? dict[];
    $this->input_list = $s['input_list'] ?? vec[];
    $this->user_id = $s['user_id'] ?? '';
  }
}

class GetPersonalizedRankingResponse {
  public ?ItemList $personalized_ranking;

  public function __construct(shape(
    ?'personalized_ranking' => ?ItemList,
  ) $s = shape()) {
    $this->personalized_ranking = $s['personalized_ranking'] ?? vec[];
  }
}

class GetRecommendationsRequest {
  public ?Arn $campaign_arn;
  public ?Context $context;
  public ?ItemID $item_id;
  public ?NumResults $num_results;
  public ?UserID $user_id;

  public function __construct(shape(
    ?'campaign_arn' => ?Arn,
    ?'context' => ?Context,
    ?'item_id' => ?ItemID,
    ?'num_results' => ?NumResults,
    ?'user_id' => ?UserID,
  ) $s = shape()) {
    $this->campaign_arn = $s['campaign_arn'] ?? '';
    $this->context = $s['context'] ?? dict[];
    $this->item_id = $s['item_id'] ?? '';
    $this->num_results = $s['num_results'] ?? 0;
    $this->user_id = $s['user_id'] ?? '';
  }
}

class GetRecommendationsResponse {
  public ?ItemList $item_list;

  public function __construct(shape(
    ?'item_list' => ?ItemList,
  ) $s = shape()) {
    $this->item_list = $s['item_list'] ?? vec[];
  }
}

type InputList = vec<ItemID>;

class InvalidInputException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ItemID = string;

type ItemList = vec<PredictedItem>;

type NumResults = int;

class PredictedItem {
  public ?ItemID $item_id;
  public ?Score $score;

  public function __construct(shape(
    ?'item_id' => ?ItemID,
    ?'score' => ?Score,
  ) $s = shape()) {
    $this->item_id = $s['item_id'] ?? '';
    $this->score = $s['score'] ?? 0.0;
  }
}

class ResourceNotFoundException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Score = float;

type UserID = string;

