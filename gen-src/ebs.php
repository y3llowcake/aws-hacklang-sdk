<?hh // strict
namespace slack\aws\ebs;

interface EBS {
  public function GetSnapshotBlock(GetSnapshotBlockRequest): Awaitable<Errors\Result<GetSnapshotBlockResponse>>;
  public function ListChangedBlocks(ListChangedBlocksRequest): Awaitable<Errors\Result<ListChangedBlocksResponse>>;
  public function ListSnapshotBlocks(ListSnapshotBlocksRequest): Awaitable<Errors\Result<ListSnapshotBlocksResponse>>;
}

class Block {
  public BlockIndex $block_index;
  public BlockToken $block_token;
}

class BlockData {
}

class BlockIndex {
}

class BlockSize {
}

class BlockToken {
}

class Blocks {
}

class ChangedBlock {
  public BlockIndex $block_index;
  public BlockToken $first_block_token;
  public BlockToken $second_block_token;
}

class ChangedBlocks {
}

class Checksum {
}

class ChecksumAlgorithm {
}

class DataLength {
}

class ErrorMessage {
}

class GetSnapshotBlockRequest {
  public BlockIndex $block_index;
  public BlockToken $block_token;
  public SnapshotId $snapshot_id;
}

class GetSnapshotBlockResponse {
  public BlockData $block_data;
  public Checksum $checksum;
  public ChecksumAlgorithm $checksum_algorithm;
  public DataLength $data_length;
}

class ListChangedBlocksRequest {
  public SnapshotId $first_snapshot_id;
  public MaxResults $max_results;
  public PageToken $next_token;
  public SnapshotId $second_snapshot_id;
  public BlockIndex $starting_block_index;
}

class ListChangedBlocksResponse {
  public BlockSize $block_size;
  public ChangedBlocks $changed_blocks;
  public TimeStamp $expiry_time;
  public PageToken $next_token;
  public VolumeSize $volume_size;
}

class ListSnapshotBlocksRequest {
  public MaxResults $max_results;
  public PageToken $next_token;
  public SnapshotId $snapshot_id;
  public BlockIndex $starting_block_index;
}

class ListSnapshotBlocksResponse {
  public BlockSize $block_size;
  public Blocks $blocks;
  public TimeStamp $expiry_time;
  public PageToken $next_token;
  public VolumeSize $volume_size;
}

class MaxResults {
}

class PageToken {
}

class ResourceNotFoundException {
  public ErrorMessage $message;
}

class SnapshotId {
}

class TimeStamp {
}

class ValidationException {
  public ErrorMessage $message;
  public ValidationExceptionReason $reason;
}

class ValidationExceptionReason {
}

class VolumeSize {
}

