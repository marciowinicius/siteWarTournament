<?PHP 
$main_content .= '<center><h1>Lottery</h1><h3>Lotterys held at 09:00, 14:00 and 20:30 hour, brazil time.</h3></center><br><TABLE BORDER=0 CELLSPACING=1 CELLPADDING=4 WIDTH=100%><tr BGCOLOR="'.$config['site']['vdarkborder'].'"><td CLASS=white><center><b>Player Name</b></center></td><td CLASS=white width=184 colspan=2><center><b>Winning Item</b></center></td><td width=50 CLASS=white><center><b>World</b></center></td><td width=100 CLASS=white><center><b>Date and Time</b></center></td></tr>'; 
$lottery = $SQL->query('SELECT id, name, item, world_id, item_name, date FROM lottery WHERE world_id = 0 ORDER BY id DESC;');
foreach($lottery as $result) { 
 $players++; 
            if(is_int($players / 2)) 
                $bgcolor = $config['site']['lightborder']; 
            else 
                $bgcolor = $config['site']['darkborder']; 

$main_content .= '<TR BGCOLOR='.$bgcolor.'><TD WIDTH=35%><center><a href="?subtopic=characters&name='.urlencode($result['name']).'">'.$result['name'].'</a></center></td><TD WIDTH=5%><img src=\'/item_images/'.urlencode($result['item']).'.gif\'></td><TD WIDTH=30%><center>'.$result['item_name'].'</center></td><TD WIDTH=7%><center>Mind Freak</center></td></td><TD WIDTH=30%><center>'.$result['date'].'</center></td></tr>'; 
} 
$main_content .= '</table>'; 
?>