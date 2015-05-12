<?php
	function swapHTML($company, $num, $datenofilter, $date, $title, $url){
	$name = $company . "_snapshots";
echo <<< EOT
	&lt;div class='new_screenshot'&gt;<br />
	&nbsp;&nbsp;&nbsp;&nbsp;&lt;h2&gt;$datenofilter &lt;/h2&gt;&lt;h3&gt;"$title"&lt;/h3&gt;<br />
	&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href="$name/$date.html"&gt;&lt;img src='images/small/$num.jpg' class='img_screenshot'&gt;&lt;/a&gt;<br />
	&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href="$name/$date.html#disqus_thread" class="comments_count"&gt;Comments&lt;/a&gt;<br />
	&lt;/div&gt;<br />
EOT;
	}

	$row = 1;
	if (($handle = fopen("excel_output.csv", "r")) !== FALSE) {
	    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
	        $row++;
	        $num = $data[0];
	        $date = $data[1];
	        $title = $data[2];
	        $url = $data[3];

	        $date_name = str_replace( ',', '', $date );
	        $date_name1 = str_replace( ' ', '-', $date_name);
	        
	        
	        swapHTML("Marketo", $num, $date, $date_name1, $title, $url);
	    }
	    fclose($handle);
	}
?>
