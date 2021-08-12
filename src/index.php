<?php

// 第一步 创建 搜索ES 数据表  
require "vendor/autoload.php";

use Elasticsearch\ClientBuilder;

class index{
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
        // 创建 index => 表名  mapping => 字段名
        $params = [
            'index' => 'my_searcher',
            'body'  => [
                'mapping' => [
                    'properties' => [
                        'first_name' => [
                            'type' =>   'text',
                            'analyzer' =>  'ik_max_word'
                        ],
                        'age' => [
                            'type' => 'integer'
                        ]
                    ]
                ]
            ] 
        ];
        $response = $this->client->index($params);
        print_r($response);
    }

}

$demo = new index;
$demo->index();