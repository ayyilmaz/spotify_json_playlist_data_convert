<?php 

$fgc = file_get_contents("001_myspotify_data/Playlist.json");
$json = json_decode($fgc,true);
//print_r($json);

echo '<div style="margin: auto;">';
foreach($json['playlists'] as $mydata)

{
	echo '<h3>'.$mydata['name'] .'</h3>';
	foreach($mydata['items'] as $songs)
	{
		
		echo '<div style="padding: 2px 5px; background:lightgrey; margin-bottom: 4px; margin-right:1px; width: 205px; min-height: 160px; display: inline-table;"';
		echo '<h5>Track Name: '.$songs['track']['trackName'] .'</h5>';
		echo '<h5>Artist Name: '.$songs['track']['artistName'].'</h5>';
    echo '<h5>Album Name: '.$songs['track']['albumName'].'</h5>';
		echo '</div>';
    
	}
}  
echo '</div>';

?>
