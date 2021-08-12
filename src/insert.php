<?php

// 第二步 给对应的库 插入要的搜索ES 数据信息  
require "vendor/autoload.php";

use Elasticsearch\ClientBuilder;

class Insert{
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
            'id' => 1,
            'body' => [
                'first_name' => '我的名字叫小二王',
                'age' => 25
            ]
        ];
        $response = $this->client->index($params);
        print_r($response);
    }
}

$demo = new Insert;
$demo->index();
