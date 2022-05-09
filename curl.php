<?php 
// $curl=curl_init();
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($curl,CURLOPT_URL, 'https://jsonplaceholder.typicode.com/posts');
// $results=json_decode(curl_exec($curl));
// curl_close($curl);
// $count = 0;
// while ($count < 3 ){
// 	echo '<p>'.$results[$count]->id .'</p>';
// 	echo $results[$count]->title .'<br>';
// 	$count++;
// }
///wp/v2/posts
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL, '127.0.0.1:8888/wordpress/wp-json/wp/v2/posts/');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,"title=testtitle&content=testcontent");
curl_setopt($ch, CURLOPT_USERPWD, 'admin' . ':' . '123');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec($ch);
curl_close ($ch);

var_dump($server_output);


$curl=curl_init();
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl,CURLOPT_URL, '127.0.0.1:8888/wordpress/wp-json/wp/v2/posts');
$results=json_decode(curl_exec($curl));
curl_close($curl);

foreach ($results as $result) {
	
	echo "<h1>{$result->title->rendered}</h1>";
	echo "<p>{$result->content->rendered}</p>";
}


?>