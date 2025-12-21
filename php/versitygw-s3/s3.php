<?php

require_once 'vendor/autoload.php';

use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;

$config = [
    'region' => 'ap-northeast-1',
    'version' => 'latest',
    'endpoint' => 'http://127.0.0.1:7070',
    'credentials' => [
        'key' => 'dummy',
        'secret' => 'dummy',
    ],
    'use_path_style_endpoint' => true,
];

$s3 = new S3Client($config);

$bucket = 'local-test'; // バケット名
$file = 'hello.txt'; // ファイル名

// バケットの存在を確認し、なければ作成する
try { 
    $s3->headBucket(['Bucket' => $bucket]);
    echo "Bucket '{$bucket}' 存在する。" . PHP_EOL;
} catch (S3Exception $e) {
    echo "Bucket '{$bucket}' 存在しない。作成中..." . PHP_EOL;
    $s3->createBucket(['Bucket' => $bucket]);
    $s3->waitUntil('BucketExists', ['Bucket' => $bucket]);
    echo "Bucket '{$bucket}' 作成完了。" . PHP_EOL;
}

// アップロード
$result = $s3->putObject([
    'Bucket' => $bucket,  
    'Key' => $file,
    'Body' => 'hello world!!', 
]);

echo 'ファイルのURL => ' . $result['ObjectURL'] . PHP_EOL;

// 内容の取得
$result = $s3->getObject([
    'Bucket' => $bucket,  
    'Key' => $file,
]);

echo 'ファイルの内容 => ' . $result['Body'] . PHP_EOL;

// ファイルの削除
$s3->deleteObject([
    'Bucket' => $bucket,  
    'Key' => $file,
]);
echo "ファイル '{$file}' を削除しました。" . PHP_EOL;
