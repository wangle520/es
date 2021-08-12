<?php

// 第三步  搜索ES 数据表中要匹配的数据信息  
require "vendor/autoload.php";

use Elasticsearch\ClientBuilder;

class Search{
    protected $hosts = array();
    protected $client = null;

    public function __construct(){
        $this->hosts = [
            '127.0.0.1:9200'
        ];
        $client = ClientBuilder::create()->setHost($this->hosts)->build();
        $this->client = $client;
    }

    public function index(){
        $params = [
            'index' => 'my_searcher',
            '_source' => ['first_name','name'],
            'body' => [
                'query' => [
                    'match' => [
                        'first_name' => '小二王',
                    ]
                ]
            ]
        ];
        $response = $this->client->search($params);
        print_r($response);
    }
}
$demo = new Search;
$demo->index();