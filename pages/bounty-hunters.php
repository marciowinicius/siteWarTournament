<?php
@mysql_connect("localhost","root","Amaral-12!");
@mysql_select_db("mindfreak");

$main_content .= '<P ALIGN=CENTER>
    <br>
    <FONT SIZE=5 COLOR=#CFF00C>
        How to use...
    </FONT>
    <br>
    <br>
    <FONT SIZE=6 COLOR=black>
    * !hunt [prize],[nick] :        
    </FONT>
</P>
<br>
<br>
    <center>
        <h1>
            Bounty Hunters
        </h1>
    </center>
        <TABLE BORDER=0 CELLSPACING=1 CELLPADDING=4 WIDTH=100%>
            <TR BGCOLOR="#505050">
                <TD CLASS=white width=30%>
                    <center><B>Player Name</B></center>
                </TD>
                <TD CLASS=white width=30%>
                    <center><B>Prize</B></center>
                </TD>
                <TD CLASS=white width=30%>
                    <center><B>Order</B></center>
                </TD>
                <TD CLASS=white width=10%>
                    <center><B>Killers</B></center>
                </TD>
            </TR>';
 $inv = @mysql_query("SELECT * FROM `bounty_hunters` ORDER BY `added` DESC");
$num = 0;
$color=$config['site']['darkborder'];
while($tab = @mysql_fetch_array($inv)){
if($num%2 == 0){$color=$config['site']['darkborder'];}else{$color=$config['site']['lightborder'];}
$pid = $tab['fp_id'];
$sid = $tab['sp_id'];
$kid = $tab['k_id'];
$killed = $tab['killed'];
$prize = $tab['prize']*1000;
if($killed == 0){
$kill = '<font color="red">Nobody!</font>';
}else{
$k = @mysql_query("SELECT * FROM `players` WHERE `id` = ".$kid."");
$k1 = @mysql_fetch_array($k);
$kill_name = $k1['name'];
$kill = '<a href="index.php?subtopic=characters&name='.$kill_name.'">'.$kill_name.'</a>';
}
$f = @mysql_query("SELECT * FROM `players` WHERE `id` = ".$pid."");
$f1 = @mysql_fetch_array($f);
$s = @mysql_query("SELECT * FROM `players` WHERE `id` = ".$sid."");
$s1 = @mysql_fetch_array($s);
$fn = $f1['name'];
$sn = $s1['name'];

$main_content .= '
        <TR BGCOLOR="'.$color.'">
            <TD>
                <center>
                    <b>
                        <a href="index.php?subtopic=characters&name='.$fn.'">'.$fn.'</a>
                    </b>
                </center>
            </TD>
            <TD>
                <center>
                    <b>
                        '.$prize.' gp
                    </b>
                </center>
            </TD>
            <TD>
                <center>
                    <b>
                        <a href="index.php?subtopic=characters&name='.$sn.'">'.$sn.'</a>
                    </b>
                </center>
            </TD>
            <TD>
                <center>
                    <b>
                        '.$kill.'
                    </b>
                </center>
            </TD>
        </TR>';
$num++;
}
if($num == 0){
        $main_content.='<TR BGCOLOR="'.$color.'">
            <TD colspan=4>
                <center>
                    Currently there are not any bounty hunter offer.
                </center>
            </TD>
        </TR>';
}
        $main_content .='</TABLE><div align="right">Copyright &copy; <a href="http://mindfreakot.com">MindFreak</a>.</div>';
?> 