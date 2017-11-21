L.Z<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:239:"
				SELECT post_type, MAX(post_modified_gmt) AS date
				FROM wp_posts
				WHERE post_status IN ('publish','inherit')
					AND post_type IN ('post','page','attachment','tour')
				GROUP BY post_type
				ORDER BY post_modified_gmt DESC
			";s:11:"last_result";a:4:{i:0;O:8:"stdClass":2:{s:9:"post_type";s:4:"page";s:4:"date";s:19:"2017-11-20 21:54:50";}i:1;O:8:"stdClass":2:{s:9:"post_type";s:4:"tour";s:4:"date";s:19:"2017-11-14 17:58:37";}i:2;O:8:"stdClass":2:{s:9:"post_type";s:10:"attachment";s:4:"date";s:19:"2017-11-17 16:23:22";}i:3;O:8:"stdClass":2:{s:9:"post_type";s:4:"post";s:4:"date";s:19:"2017-11-17 16:26:45";}}s:8:"col_info";a:2:{i:0;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:7:"orgname";s:9:"post_type";s:5:"table";s:8:"wp_posts";s:8:"orgtable";s:8:"wp_posts";s:3:"def";s:0:"";s:2:"db";s:7:"seagirt";s:7:"catalog";s:3:"def";s:10:"max_length";i:10;s:6:"length";i:80;s:9:"charsetnr";i:246;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:4:"date";s:7:"orgname";s:0:"";s:5:"table";s:0:"";s:8:"orgtable";s:0:"";s:3:"def";s:0:"";s:2:"db";s:0:"";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:128;s:4:"type";i:12;s:8:"decimals";i:0;}}s:8:"num_rows";i:4;s:10:"return_val";i:4;}