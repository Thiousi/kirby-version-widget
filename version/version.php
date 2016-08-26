<?php
return array(
  // Defines the header of the widget
	'options' => array(
    array(
      'text' => 'View Changelog',
      'icon' => 'eye',
      'link' => 'https://getkirby.com/changelog',
      'target' => '_blank'
    )
  ),
  // Defines the title of the widget
	'title' => array(
    'text'   => 'Kirby Version',
    'compressed'   => false,
  ),

  // Defines the core content of the widget
	'html'  => function() {
  	$kirby = kirby();
  	$rss = simplexml_load_file('http://getkirby.com/changelog/feed');
  	$data = array(
  		'kirby' => $kirby::$version, // Get current version from Kirby
  		'latest' => $rss->channel->item[0]->title, // Check the version number of the latest entry in the Kirby changelog
  		'link' => $rss->channel->item[0]->link, // Get the link to the latest entry in the Kirby changelog
  	);
		// Return 'options', 'title', and 'html' to the template
  	return tpl::load(__DIR__ . DS . 'template.php', $data);
	}
);