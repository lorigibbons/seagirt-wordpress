��Z<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:217:"SELECT YEAR(post_date) AS `year`, MONTH(post_date) AS `month`, count(ID) as posts FROM wp_posts  WHERE post_type = 'post' AND post_status = 'publish' GROUP BY YEAR(post_date), MONTH(post_date) ORDER BY post_date DESC ";s:11:"last_result";a:2:{i:0;O:8:"stdClass":3:{s:4:"year";s:4:"2017";s:5:"month";s:2:"11";s:5:"posts";s:1:"5";}i:1;O:8:"stdClass":3:{s:4:"year";s:4:"2017";s:5:"month";s:2:"10";s:5:"posts";s:1:"4";}}s:8:"col_info";a:3:{i:0;O:8:"stdClass":13:{s:4:"name";s:4:"year";s:7:"orgname";s:0:"";s:5:"table";s:0:"";s:8:"orgtable";s:0:"";s:3:"def";s:0:"";s:2:"db";s:0:"";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:4;s:9:"charsetnr";i:63;s:5:"flags";i:32768;s:4:"type";i:3;s:8:"decimals";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:5:"month";s:7:"orgname";s:0:"";s:5:"table";s:0:"";s:8:"orgtable";s:0:"";s:3:"def";s:0:"";s:2:"db";s:0:"";s:7:"catalog";s:3:"def";s:10:"max_length";i:2;s:6:"length";i:2;s:9:"charsetnr";i:63;s:5:"flags";i:32768;s:4:"type";i:3;s:8:"decimals";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:5:"posts";s:7:"orgname";s:0:"";s:5:"table";s:0:"";s:8:"orgtable";s:0:"";s:3:"def";s:0:"";s:2:"db";s:0:"";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:21;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:8;s:8:"decimals";i:0;}}s:8:"num_rows";i:2;s:10:"return_val";i:2;}