<?php header("Content-Type: text/html; charset=ISO-8859-1", true); 
foreach ($SQL->query('SELECT w.id AS id, w.time AS time, g.name AS guild, p.name AS name, w.started AS start, w.guild AS guild_id FROM woe AS w INNER JOIN players AS p ON p.id = w.breaker INNER JOIN guilds AS g ON g.id = w.guild ORDER BY id DESC LIMIT 10') as $k=>$v)
	$winners .='
		<TR BGCOLOR="'.$config['site'][($k % 2 == 1 ? 'light' : 'dark').'border'].'"> 
			<TD>'.$v['id'].'</TD> 
			<TD><a href="?subtopic=guilds&action=show&guild='.$v['guild_id'].'">'.$v['guild'].'</a></TD> 
			<TD>'.$v['name'].'</TD> 
			<TD>'.date('d/m/y   H:i:s', $v['start']).'</TD> 
			<TD>'.date('d/m/y   H:i:s', $v['time']).'</TD> 
		</TR> 
	';

$main_content .= ' 

<h4 style="" id="pt">
<br>
<h2> O War Of Emperium acontece todos os domingos às 16:00.</h2></center>
<b>O que é um WoE?<br></b> 
<br> 
WoE significa War of Emperium.<br> 
A ideia original foi formada por um jogo de RPG online (RO), assim sendo possivel obter uma ideia de como seja.<br> 
<br> 
<br> 
<b>Como funciona?<br></b> 
<br> 
Primeiro se você tiver uma guild, deve registra-la usando o comando <strong>!guild</strong>.<br> 
Durante determinado tempo (Atualmente são 40 minutos), as guilds participantes se enfrentam para tomar posse do castelo de <b>Ruthenburg</b>, existe um teleport em cima do temple de thais que leva ao castelo.<br> 
No final desse tempo, a guild que estiver com controle do castelo é a vencedora.<br> 
<br> 
<br> 
<b>Como tomar o controle do castelo?<br></b> 
<br> 
Dentro do castelo tem um <b>Emperium</b> Principal (localizado no terceiro andar), que deve ser protegido pela guild para governar o castelo, a missão de todas as outras guilds é destruir este <b>Emperium</b> para assim passar a ter o controle do castelo.<br> 
Cada vez que é destruída uma nova aparece em seu lugar, e todos os novos jogadores fora o líder da guild é expulso do castelo (se você ainda tem tempo, obviamente, pode voltar).<br> 
Se algum membro da guild rival destrói o <b>Emperium</b> a guild será expulsa do castelo, e não terá mais o controle dela.<br> 
<br> 
<b>O que é um Emperium?</b><br> 
<br> 
O Emperium, não se move e sempre estará no mesmo lugar, tem HP suficiente e pode ser curado apenas com UHs , que por sua vez, as formulas depende de cada vocação.<br> 
<br> 
<br> 
<b>Beneficios?</b><br> 
<br> 
Atualmente não estão listados todos os benefícios.<br> 
O beneficio mais importante que se pode obter atualmente é <strong>+20% de exp rate a todos os membros da guild dominante e para cada jogador de level 100+ receberá 200k e 5 Emperiuns Tokens.</strong>.<br> 
<br> 
<br> 
<br> 
<b>Extra</b> 
<br> 
Durante a WoE a guild dominante do castelo pode usar os banners (bandeiras localizadas no castelo) para ter acesso mais rápido ao castelo.<br> 
Além disso, se <strong>morrer em plena WoE não perderá nada</strong>, nem skills, nem ml, nem items, nem exp, tudo está configurado para ser um evento de total diversão.<br> 

<br> 
<b>Pre-começo e como chegar no terceiro andar.</b><br> 
<br> 
Para chegar ao terceiro andar, será preciso primeiro começar a pré-break ambos localizados no segundo andar, uma vez que você destruiu os portões de acesso ao terceiro piso será aberto.<br> 
<br> 
<br> 
<b>Comandos de utilidade durante a WoE</b> 
<br> 
<b>/woe info</b> Indica o tempo restante de WoE, e quem atualmente domina o castelo.<br> 
<br> 
<b>!recall</b> Ela só pode ser executada pelo líder da guild e em intervalos de 5 minutos, teletransporta todos os membros da guild online ao lado dele.<br> 
<br> 
<object width="425" height="350"><embed src="http://www.youtube.com/v/dYH0Quwxw-U" type="application/x-shockwave-flash" width="425" height="350"></embed></object></center><br/> 

<br><br> </center></h4>
';

if(!$winners) { 
	$main_content .= ' 
		<TABLE BORDER=0 CELLSPACING=1 CELLPADDING=4 WIDTH=100%> 
			<TR BGCOLOR="'.$config['site']['vdarkborder'].'"> 
				<TD CLASS=white> 
					<B>Winners of WoE</B> 
				</TD> 
			</TR> 
			<TR BGCOLOR='.$config['site']['darkborder'].'> 
				<TD> 
					There are no WoEs in '.$config['server']['serverName'].' yet. 
				</TD> 
			</TR> 
		</TABLE> 
	';
} else { 
	$main_content .= ' 
		<TABLE BORDER=0 CELLSPACING=1 CELLPADDING=4 WIDTH=100%> 
			<TR BGCOLOR="'.$config['site']['vdarkborder'].'"> 
				<TD CLASS=white width=5%> 
					<B>No.</B> 
				</TD> 
				<TD CLASS=white width=30%> 
					<B>Winner guild</B> 
				</TD> 
				<TD CLASS=white width=25%> 
					<B>Conquest by</B> 
				</TD>
				<TD CLASS=white width=20%>
					<B>Start time</B>
				</TD>
				<TD CLASS=white width=20%>
					<B>Last conquest</B>
				</TD>
			</TR>
			'.$winners.'
		</TABLE>
	';
}
?>