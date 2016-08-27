<?php
$kirby->set('widget', 'version', __DIR__ . DS . 'version');

// Check that the cache exists and that it's not expired
function GetKirbyVersion_check_cache(){
  $cache_path = __DIR__ . DS . '..' . DS . 'cache' . DS . 'plugin.version.widget.json';
  if(f::exists($cache_path)){
    $cache = json_decode(f::read($cache_path, 'json'));
    if($cache->to < time()){
      return false;
    } else {
      return $cache->payload;
    }
  } else {
    return false;
  }
}

// Write the data and timestamp to cache
function GetKirbyVersion_set_cache($result){
  $cache_path = __DIR__ . DS . '..' . DS . 'cache' . DS . 'plugin.version.widget.json';
  $period = c::get('plugin.version.widget.cache_period') ? c::get('plugin.version.widget.cache_period') : '+1 day';
  $data = array('to' => strtotime($period), 'payload' => $result);
  f::write($cache_path, json_encode($data));
}

// Get latest Kirby version either from cache or from changelog
function GetKirbyVersion(){
  $version = GetKirbyVersion_check_cache();
  if(!$version){
    $rss = simplexml_load_file('http://getkirby.com/changelog/feed'); // URl of Kirby changelog
    $latest = substr($rss->channel->item[0]->title->__toString(), 6); // Check the version number of the latest entry in the Kirby changelog
    $link = $rss->channel->item[0]->link->__toString(); // Get the link from the latest entry in the Kirby changelog
    $payload = array('latest' => $latest, 'link' => $link);
    GetKirbyVersion_set_cache($payload);
    return $payload;
  } else return $version;
}
