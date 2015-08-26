#!/usr/bin/php
<?php
  if($argc != 3 ){
    print("Error");
  }
  $country = "jp";
  $term = $argv[1];
  $entity = $argv[2];
  $baseUrl = "http://itunes.apple.com/search?";
  $url = $baseUrl.'term='.$term.'&entity='.$entity.'&country='.$country;
  $json = file_get_contents($url);
  $data = json_decode($json,true);
  $results = $data['results'];
  foreach( $results as $item ) {
        print("artistName:".$item['artistName']."¥n");
        print("trackNumber:".$item['trackNumber']."¥n");
        print("trackName:".$item['trackName']."¥n¥n");
  }
?>