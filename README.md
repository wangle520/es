# ES 搜索引擎使用

> 1. es 安装服务 [地址: https://www.elastic.co/cn/downloads/elasticsearch]

> 2. 安装 IK Analyzer是一个开源的，基于java语言开发的轻量级的中文分词工具包 [地址: https://github.com/medcl/elasticsearch-analysis-ik/releases]  [注意: 解压elasticsearch-analysis-ik-7.6.2.zip到/plugins/analysis-ik文件夹下，analysis-ik文件夹名字是必须的，因为elasticsearch安装的插件名称，重启elasticsearch一切OK] 任何插件如此

> 3. 启动对应的 elasticsearch 服务 [windows:默认bat文件]

> 4. 测试 elasticsearch 服务 postman软件 get方式 body为raw ,内容为 { "text":"我是王小二" }  测试地址:127.0.0.1:9200/_analyze

> 5. 测试 中文分词器 同上 body 内容修改为 {"text":"我是王小二","analyzer":"ik_max_word"}

> 6.安装对应的elasticsearch/elasticsearch [安装方式: composer require elasticsearch/elasticsearch]

> 7.使用包中方法  index.php 创建要搜索的表 ,insert.php 为表添加数据 ,search.php 匹配对应表中对应规则的所有数据






