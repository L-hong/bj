
<?php
//连接本地的 Redis 服务require 'predis/autoload.php';
$parameters = ['tcp://192.168.1.231:7003', 'tcp://192.168.1.231:7003', 'tcp://192.168.1.231:7005'];
$options    = ['cluster' => 'redis'];
$redis = new Predis\Client($parameters, $options);
$x=rand(10,100);

//设置 redis 字符串数据$redis->set("y".$x, "tank".$x*2); // 获取存储的数据并输出$result = $redis->get("y".$x);  //输出结果echo $result;

?>


vim xxx.php
<?php
$redis_list = ['10.30.5.162:7000','10.30.5.163:7000','10.30.5.163:7001'];
$client = new RedisCluster(NUll,$redis_list);
echo $client->get('new_item_key:d89b561fb759fd533a8c2781ef15dd5f');
?>
:wq


vim bbb.php
$obj_cluster = new RedisCluster(NULL, ['127.0.0.1:6380']);echo $obj_cluster->get('name1');
:wq



<?php 
$redis = new redis();
$redis->connect('127.0.0.1', 6379);
$blog = $redis->get('redisrow');
//如果$blog数组为空，则去数据库中查询，并加入到redis中
if(empty($blog)){
    echo "mysql";
    // Connect mysql server
    $mysql = new PDO("mysql:host=localhost;dbname=blog","root","",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")); 
    $rs = $mysql -> query("select * from tbl_post");
    //$row = $rs -> fetch();
    $i=0;
    while($row = $rs -> fetch()){
        $rows[$i]['title']=$row['title'];
        $rows[$i]['content']=$row['content'];
        $i=$i+1;
    }
    print_r($rows);
    $redisrow = json_encode($rows);
    $redis->setex('redisrow','100',$redisrow);
}else{
    $redisblog = json_decode($blog);
    echo "redis";
    print_r($redisblog);
}
?>


