<?php



return array(
			'options' => array(
		      array(
		        'text' => 'View Changelog',
		        'icon' => 'eye',
		        'link' => 'http://getkirby.com/changelog',
		        'target' => '_blank'
		      )
		    ),
		'title' => 'Kirby Version',
		'html'  => function() {
		// any data for the template
		$kirby = kirby();
		$rss = simplexml_load_file('http://getkirby.com/changelog/feed');
		$data = array(
			'kirby' => $kirby::$version,
			'latest' => $rss->channel->item[0]->title,
			'link' => $rss->channel->item[0]->link,
		);

		return tpl::load(__DIR__ . DS . 'template.php', $data);
		}
		);
