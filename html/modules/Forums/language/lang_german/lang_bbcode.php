<?php

/***************************************************************************
 *                            lang_bbcode.php [German]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *
 ****************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

/***************************************************************************
 * German translation by the translation team of phpBB.de:
 *   http://www.phpbb.de/groupcp.php?g=13086
 * Team Lead: Philipp Kordowich (PhilippK [at] phpbb.de)
 * Special Thanks to:
 *   Joel Ricardo Zick (Rici)
 *   Manfred Hoffmann, Ingo K�hler, Ingo Migliarina, Christian Wunsch
 * and all others for their comments and suggestions
 * 
 * Release date: 2006-04-08
 ***************************************************************************/

// 
// To add an entry to your BBCode guide simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your BBCode guide entries, if you absolutely must then escape them ie. \"something\";
//
// The BBCode guide items will appear on the BBCode guide page in the same order they are listed in this file
//
// If just translating this file please do not alter the actual HTML unless absolutely necessary, thanks :)
//
// In addition please do not translate the colours referenced in relation to BBCode any section, if you do
// users browsing in your language may be confused to find they're BBCode doesn't work :D You can change
// references which are 'in-line' within the text though.
//
  
$faq[] = array("--","Einf�hrung");
$faq[] = array("Was ist BBCode?", "BBCode ist eine spezielle Eigenart von HTML. Ob du BBCode in deinen Beitr�gen benutzen kannst, entscheidet allein der Systemadministrator. Zus�tzlich kannst du den BBCode auch f�r einzelne Beitr�ge abschalten. BBCode ist dem HTML-Stil sehr �hnlich, Tags werden mit den Klammern [ und ] ge�ffnet und geschlossen. Es gibt dir die M�glichkeit, das Aussehen dessen, was du geschrieben hast, deutlich zu ver�ndern. Je nachdem, welchen Style du benutzt, findest du vielleicht eine Men�liste mit Instand-BBCode bei der Beitragserstellung. Aber auch dann wirst du die folgende Liste interessant finden.");

$faq[] = array("--","Textformatierung");
$faq[] = array("Wie erstelle ich fetten, unterstrichenen oder kursiven Text?", "BBCode verwendet Tags, die dir erlauben, das Aussehen deines Textes recht einfach zu ver�ndern. Dies geschieht folgenderma�en: <ul><li>Um einen Text fett darzustellen, umschlie�e ihn mit <span class='thick'>[b][/b]</span>, z. B. <br /><br /><span class='thick'>[b]</span>Hallo<span class='thick'>[/b]</span><br /><br /> wird zu <span class='thick'>Hallo</span></li><li>Zum Unterstreichen benutzt du <span class='thick'>[u][/u]</span>, zum Beispiel:<br /><br /><span class='thick'>[u]</span>Guten Morgen<span class='thick'>[/u]</span><br /><br />wird zu <span class='underline'>Guten Morgen</span></li><li>Um kursiv zu schreiben, benutzt du <span class='thick'>[i][/i]</span>, z. B.<br /><br />Das ist <span class='thick'>[i]</span>Toll!<span class='thick'>[/i]</span><br /><br />w�rde so aussehen: Das ist <span class='italic'>Toll!</span></li></ul>");
$faq[] = array("Wie ver�ndere ich die Schriftfarbe oder Gr��e?", "Um die Farbe oder Gr��e deines Textes zu �ndern, kannst du die folgenden Tags benutzen. Bedenke jedoch, dass das Resultat auf den Browser des jeweiligen Benutzers ankommt: <ul><li>Um einen Text in einer bestimmten Farbe darzustellen, umschlie�e ihn mit <span class='thick'>[color=][/color]</span>. Du kannst entweder einen allgemeinen Farbnamen angeben (z. B. red, blue, yellow, usw.) oder den Hexadezimalcode, z. B. #FFFFFF, #000000. Um beispielsweise einen roten Text zu schreiben, k�nntest du Folgendes schreiben:<br /><br /><span class='thick'>[color=red]</span>Hallo!<span class='thick'>[/color]</span><br /><br />oder<br /><br /><span class='thick'>[color=#FF0000]</span>Hallo!<span class='thick'>[/color]</span>, <br /><br />beides ergibt <span style=\"color:red\">Hallo!</span></li><li>Das �ndern der Textgr��e geschieht �hnlich, benutze dazu den Tag <span class='thick'>[size=][/size]</span>. Dieser Tag h�ngt vom Style ab, das du benutzt. F�r gew�hnlich wird die Textgr��e als Zahlenwert eingegeben, der die H�he in Pixel angibt, beginnend mit 1 (so klein, du wirst es kaum sehen) bis zu 29 (riesengro�). Zum Beispiel:<br /><br /><span class='thick'>[size=9]</span>KLEIN<span class='thick'>[/size]</span><br /><br />wird grunds�tzlich <span style=\"font-size:9px\">KLEIN</span><br /><br />wohingegen:<br /><br /><span class='thick'>[size=24]</span>RIESIG!<span class='thick'>[/size]</span><br /><br />zu <span style=\"font-size:24px\">RIESIG!</span> wird.</li></ul>");
$faq[] = array("Kann ich verschiedene Tags kombinieren?", "Nat�rlich geht das, ein Text, der gesehen werden soll, k�nnte beispielsweise so aussehen: <br /><br /><span class='thick'>[size=18][color=red][b]</span>SCHAU MICH AN<span class='thick'>[/b][/color][/size]</span><br /><br />ergibt <span style=\"color:red;font-size:18px\"><span class='thick'>SCHAU MICH AN!</span></span><br /><br />Es ist nicht zu empfehlen, gr��ere Mengen Text so aussehen zu lassen! Denk daran, es ist deine Aufgabe, daf�r zu sorgen, dass alle Tags auch wieder richtig geschlossen werden. Das hier zum Beispiel geht nicht: <br /><br /><span class='thick'>[b][u]</span>Das ist falsch<span class='thick'>[/b][/u]</span>");

$faq[] = array("--","Zitate und Code-Angaben");
$faq[] = array("Zitate in Antworten verwenden", "Es gibt zwei M�glichkeiten, einen Text zu zitieren.<ul><li>Wenn du die Zitatfunktion zum Antworten auf einen Beitrag verwendest, wirst du merken, dass der zitierte Text in <span class='thick'>[quote=\"\"][/quote]</span>-Tags steht. So ist es dir m�glich, den Text des Benutzers, oder wo auch immer du ihn her hast, wortgetreu wiederzugeben! Ein Beispiel: Um einen Teil des Textes zu zitieren, den Herr Meier geschrieben hat, w�rdest du schreiben:<br /><br /><span class='thick'>[quote=\"Herr Meier\"]</span>Der Text von Herrn Meier w�rde hier erscheinen<span class='thick'>[/quote]</span><br /><br />Der Text 'Herr Meier schrieb:' erscheint automatisch vor dem Zitat. Bedenke, dass du die Zeichen \"\" um den Autorennamen schreiben <span class='thick'>musst</span>, sie dienen nicht nur der Versch�nerung.</li><li>Mit der zweiten M�glichkeit erstellst du ein blindes Zitat. Um dies durchzuf�hren, schlie�e den Text in <span class='thick'>[quote][/quote]</span>-Tags ein. Wenn du dir den Beitrag dann anschaust, wird einfach nur 'Zitat:' vor dem Beitrag angezeigt.</li></ul>");
$faq[] = array("Code-Angaben", "Wenn du den Teil eines Codes oder etwas, was einfach eine fixe L�nge hat, ausgeben m�chtest, solltest du den Text in <span class='thick'>[code][/code]</span>-Tags setzen, z. B <br /><br /><span class='thick'>[code]</span>echo \"Dies ist ein Code\";<span class='thick'>[/code]</span><br /><br />Alle Formatierungen, die du in diesen <span class='thick'>[code][/code]</span>-Tags verwendest, werden nachher nicht ausgef�hrt.");

$faq[] = array("--","Listenerstellung");
$faq[] = array("Eine ungeordnete Liste einf�gen", "BBCode unterst�tzt zwei Typen von Listen, geordnete und ungeordnete. Sie sind im Wesentlichen die gleichen Listen wie ihre Gegenst�cke in der HTML-Umgebung. Eine ungeordnete Liste zeigt jedes Objekt in der Liste an, alle mit einem Bullet-Symbol davor. Um eine ungeordnete Liste zu erstellen, benutze die <span class='thick'>[list][/list]</span>-Tags und gib jeden Punkt innerhalb der Liste an, indem du einen <span class='thick'>[*]</span> nutzt. Um zum Beispiel deine Lieblingsfarben aufzuz�hlen, k�nntest du schreiben:<br /><br /><span class='thick'>[list]</span><br /><span class='thick'>[*]</span>Rot<br /><span class='thick'>[*]</span>Blau<br /><span class='thick'>[*]</span>Gelb<br /><span class='thick'>[/list]</span><br /><br />Das w�rde folgende Liste ergeben: <ul><li>Rot</li><li>Blau</li><li>Gelb</li></ul>");
$faq[] = array("Eine geordnete Liste einf�gen", "Die zweite Listenart, die geordnete Liste, gibt dir die M�glichkeit, anzugeben, was vor jedem Punkt steht. Um eine geordnete Liste zu erstellen, benutzt du den <span class='thick'>[list=1][/list]</span>-Tag, um eine nummerierte Liste zu erstellen, oder alternativ <span class='thick'>[list=a][/list]</span> f�r eine alphabetische Liste. Genau wie der bei ungeordneten Liste werden die Punkte mit dem <span class='thick'>[*]</span> spezifiziert. Zum Beispiel:<br /><br /><span class='thick'>[list=1]</span><br /><span class='thick'>[*]</span>In den Laden gehen<br /><span class='thick'>[*]</span>Einen neuen Computer kaufen<br /><span class='thick'>[*]</span>Den Computer verfluchen, wenn er nicht mehr geht<br /><span class='thick'>[/list]</span><br /><br />ergibt das Folgende:<ol type=\"1\"><li>In den Laden gehen</li><li>Einen neuen Computer kaufen</li><li>Den Computer verfluchen, wenn er nicht mehr geht</li></ol>F�r eine alphabetische Liste wiederum w�rdest du das Folgende eingeben:<br /><br /><span class='thick'>[list=a]</span><br /><span class='thick'>[*]</span>Die erste M�glichkeit<br /><span class='thick'>[*]</span>Die zweite M�glichkeit<br /><span class='thick'>[*]</span>Die dritte M�glichkeit<br /><span class='thick'>[/list]</span><br /><br />was<ol type=\"a\"><li>Die erste M�glichkeit</li><li>Die zweite M�glichkeit</li><li>Die dritte M�glichkeit</li>ergibt</ol>");

$faq[] = array("--", "Links erstellen");
$faq[] = array("Das Linken zu einer Site", "phpBB BBCode unterst�tzt eine Menge verschiedener M�glichkeiten, wie man Internet-Adressen (URLs) einf�gen kann.<ul><li>Die erste M�glichkeit ist die Verwendung des<span class='thick'>[url=][/url]</span>-Tag. Was auch immer du hinter das = Zeichen schreibst, wird als Inhalt der URL gewertet. Ein Beispiel: einen Link zu phpBB.com erstellst du so:<br /><br /><span class='thick'>[url=http://www.phpbb.com/]</span>Besucht phpBB!<span class='thick'>[/url]</span><br /><br />Das w�rde den folgenden Link erstellen: <a href=\"http://www.phpbb.com/\" target=\"_blank\">Besucht phpBB!</a>. Du wirst bemerken, dass sich der Link in einem neuen Fenster �ffnet, so dass der Benutzer weiter im Forum surfen kann, sofern er dies w�nscht.</li><li>Falls du m�chtest, dass die URL automatisch als Link angezeigt wird, kannst du das folgenderma�en schreiben:<br /><br /><span class='thick'>[url]</span>http://www.phpbb.com/<span class='thick'>[/url]</span><br /><br />Dies wird den folgenden Link erzeugen: <a href=\"http://www.phpbb.com/\" target=\"_blank\">http://www.phpbb.com/</a></li><li>Zus�tzlich verf�gt phpBB �ber die so genannten <span class='italic'>Magic Links</span>, was automatisch korrekt angegebene URLs in Links umwandelt, ohne dass du Tags schreiben musst. Wenn du zum Beispiel www.phpbb.com in einen Beitrag schreibst, wird daraus automatisch <a href=\"http://www.phpbb.com/\" target=\"_blank\">www.phpbb.com</a>, wenn jemand die Nachricht liest.</li><li>Dies funktioniert �brigens auch mit E Mail-Adressen, du kannst entweder eine Adresse gesondert eingeben, z. B.:<br /><br /><span class='thick'>[email]</span>webmaster@phpbb.com<span class='thick'>[/email]</span><br /><br />was das Folgende ergibt <a href=\"mailto:webmaster@phpbb.com\">webmaster@phpbb.com</a> oder du schreibst einfach webmaster@phpbb.com in deinen Beitrag und es wird automatisch in einen Link umgewandelt.</li></ul>Wie die meisten anderen BBCode-Tags, kannst du auch den URL-Tag mit anderen Tags kombinieren, z. B. <span class='thick'>[img][/img]</span> (siehe n�chsten Punkt), <span class='thick'>[b][/b]</span>, usw. Es ist wie immer deine Aufgabe, dass alle ge�ffneten Tags auch wieder richtig geschlossen werden, z. B.<br /><br /><span class='thick'>[url=http://www.phpbb.com/][img]</span>http://www.phpbb.com/images/phplogo.gif<span class='thick'>[/url][/img]</span><br /><br />ist <span class='underline'>nicht</span> richtig und wird einen Fehler in deinem Beitrag ausl�sen.");

$faq[] = array("--", "Bilder in Beitr�gen anzeigen");
$faq[] = array("Ein Bild einf�gen", "Der phpBB BBCode unterst�tzt ebenfalls das Einf�gen von Bildern in Beitr�gen. Es gibt zwei wichtige Regeln, was das Anzeigen von Bildern betrifft: Die meisten User finden es einfach furchtbar, wenn endlos Bilder in den Beitr�gen stehen (Stichwort Ladezeiten) und zum anderen muss das Bild bereits irgendwo im Internet hochgeladen sein (es bringt also nichts, wenn die Datei nur auf deiner Festplatte liegt, sofern du keinen Webserver hast!). Momentan gibt es noch keine M�glichkeit, Bilder mit Hilfe von phpBB lokal zu speichern (das k�nnte sich mit der n�chsten Version von phpBB 2 nat�rlich �ndern). Um ein Bild anzuzeigen, muss die URL des Bildes mit den <span class='thick'>[img][/img]</span>-Tags umschlossen werden. Zum Beispiel:<br /><br /><span class='thick'>[img]</span>http://www.phpbb.com/images/phplogo.gif<span class='thick'>[/img]</span><br /><br />Wie bei der URL-Erkl�rung bereits erw�hnt, kannst du Bilder in <span class='thick'>[url][/url]</span>-Tags einschlie�en, wenn du m�chtest, z. B. <br /><br /><span class='thick'>[url=http://www.phpbb.com/][img]</span>http://www.phpbb.com/images/phplogo.gif<span class='thick'>[/img][/url]</span><br /><br />w�rde Folgendes ergeben:<br /><br /><a href=\"http://www.phpbb.com/\" target=\"_blank\"><img src=\"templates/subSilver/images/logo_phpBB_med.gif\" border=\"0\" alt=\"\" /></a><br />");

$faq[] = array("--", "Andere Codes");
$faq[] = array("Kann ich meine eigenen Tags hinzuf�gen?", "Nein, nicht mit phpBB 2.0 direkt! Wir versuchen, eine M�glichkeit daf�r zu finden und diese mit dem n�chsten Main-Release von phpBB anzubieten.");

//+MOD: Start Advanced BBCode Box MOD vRN2.5.2
$faq[] = array("--", "Advanced BBCode Features");
$faq[] = array("Font Types and Custom CSS Classes", "<p>Use the font type buttons to wrap highlighted text, or to toggle between open/closed tags if no text is selected. Any previously declared CSS class that is valid for inline elements can be used. As a general rule anything to do with positioning or padding/margin (on the top/bottom) will not apply. Also note that the display and visibilty properties have been overidden and are not allowed. Multiple classes can be applied at one time, seperating with a space in the same syntax as used in html</p><div class=\"float-right\" style=\"padding:0 0 10px 10px\"><img src=\"includes/bbcode_box/images/bbcodebox1-classsample.png\" alt=\"\"/></div><p><span class=\"couriernew\">[class=&quot;palatino uppercase&quot;]Lorem ipsum dolor sit[/class]</span></p><p><span class=\"palatino uppercase\">Lorem ipsum dolor sit</span></p><p><span class=\"thick\">Important:</span> If selecting text to wrap in a custom class, first enter the class (or classes) in the text box (that defaults to the &quot;uppercase&quot; class) then highlight the desired text and click &quot;CSS CLASS&quot;. If you select the desired text first, some browsers may overwrite the selected text.</p><p>Also see: <a href=\"#faq12\" onclick=\"BBCclickloader('faq12','fonthelpstatus')\">Examples of using default classes</a></p>");
$faq[] = array("Examples of using default classes", "<table><tbody><tr><td><p class=\"lucidau\">[class=\"overline\"]Lorem ipsum dolor sit[/class]<br />[class=\"line-through\"]Lorem ipsum dolor sit[/class]<br />[class=\"underline\"]Lorem ipsum dolor sit[/class]<br />[class=\"small-caps\"]Lorem ipsum dolor sit[/class]<br />[class=\"uppercase\"]lorem ipsum dolor sit[/class]<br />[class=\"lowercase\"]LOREM IPSUM DOLOR SIT[/class]<br />[class=\"smaller\"]Lorem ipsum dolor sit[/class]<br />[class=\"larger\"]Lorem ipsum dolor sit[/class]</p><p class=\"lucidau\">[class=\"arialblack\"]Lorem ipsum dolor sit[/class]<br />[class=\"centurygothic\"]Lorem ipsum dolor sit[/class]<br />[class=\"comicsans\"]Lorem ipsum dolor sit[/class]<br />[class=\"couriernew\"]Lorem ipsum dolor sit[/class]<br />[class=\"georgia\"]Lorem ipsum dolor sit[/class]<br />[class=\"impact\"]Lorem ipsum dolor sit[/class]<br />[class=\"lucidac\"]Lorem ipsum dolor sit[/class]<br />[class=\"lucidau\"]Lorem ipsum dolor sit[/class]<br />[class=\"palatino\"]Lorem ipsum dolor sit[/class]<br />[class=\"tahoma\"]Lorem ipsum dolor sit[/class]<br />[class=\"trebuchet\"]Lorem ipsum dolor sit[/class]<br />[class=\"verdana\"]Lorem ipsum dolor sit[/class]</p></td><td><p><span class=\"overline\">Lorem ipsum dolor sit</span><br /><span class=\"line-through\">Lorem ipsum dolor sit</span><br /><span class=\"underline\">Lorem ipsum dolor sit</span><br /><span class=\"small-caps\">Lorem ipsum dolor sit</span><br /><span class=\"uppercase\">Lorem ipsum dolor sit</span><br /><span class=\"lowercase\">Lorem ipsum dolor sit</span><br /><span class=\"smaller\">Lorem ipsum dolor sit</span><br /><span class=\"larger\">Lorem ipsum dolor sit</span></p><p><span class=\"arialblack\">Lorem ipsum dolor sit</span><br /><span class=\"centurygothic\">Lorem ipsum dolor sit</span><br /><span class=\"comicsans\">Lorem ipsum dolor sit</span><br /><span class=\"couriernew\">Lorem ipsum dolor sit</span><br /><span class=\"georgia\">Lorem ipsum dolor sit</span><br /><span class=\"impact\">Lorem ipsum dolor sit</span><br /><span class=\"lucidac\">Lorem ipsum dolor sit</span><br /><span class=\"lucidau\">Lorem ipsum dolor sit</span><br /><span class=\"palatino\">Lorem ipsum dolor sit</span><br /><span class=\"tahoma\">Lorem ipsum dolor sit</span><br /><span class=\"trebuchet\">Lorem ipsum dolor sit</span><br /><span class=\"verdana\">Lorem ipsum dolor sit</span></p></td></tr></tbody></table>");
$faq[] = array("YouTube Embeds", "<p>Most importantly, <span class=\"thick\">DO NOT</span> use the embed code provided by <a class=\"postlink\" href=\"http://www.youtube.com\" target=\"_blank\">YouTube</a>. All that is required is the URL to the video, and both the standard and shorturl versions are supported</p><p class=\"thick\">http://www.youtube.com/watch?v=brfDU6HyWs8<br />http://youtu.be/brfDU6HyWs8</p><p class=\"thick\">Note that the YouTube video ID is always 11 characters, and make sure to exclude any additional info that appears in the URL after that (such as &amp;related= etc).</p><p>To embed a video with default options, simply wrap the YouTube URL in [youtube][/youtube]</p><p><span class=\"lucidau\">[youtube]http://www.youtube.com/watch?v=brfDU6HyWs8[/youtube]</span></p><p>Use the simple wizard to select from other size and positioning options, for example:</p><p><span class=\"lucidau\">[youtube]http://www.youtube.com/watch?v=brfDU6HyWs8[/youtube]</span></p><p><span class=\"lucidau\">[youtube=\"video\"]http://www.youtube.com/watch?v=brfDU6HyWs8[/youtube]<br />[youtube=\"video-small\"]http://www.youtube.com/watch?v=lDxyJGMJ_P8[/youtube]<br />[youtube=\"video-medium\"]http://youtu.be/LrJrTp8akOg[/youtube]<br />[youtube=\"video-large\"]http://youtu.be/zY3vyTXAwg8[/youtube]</span></p><p class=\"thick\">Multiple options not supported. Valid options are one of the following: video, video-small, video-medium, video-large, video-left, video-right, video-center, video-small-left, video-small-right, video-small-center, video-medium-left, video-medium-right, video-medium-center, video-large-left, video-large-right, video-large-center</p>");
$faq[] = array("Internet Archive", "<p>Most importantly, <span class=\"thick\">DO NOT</span> use the embed code provided by the <a class=\"postlink\" href=\"http://archive.org\" target=\"_blank\">Internet Archive</a>. All that is required is the URL to the audio or video, and both the detail and/or embed URL's are supported</p><p class=\"thick\">http://archive.org/details/MozartEineKleineNachtmusik<br />http://archive.org/embed/MozartEineKleineNachtmusik</p><p class=\"thick\">Make sure to exclude any additional info that appears in the URL (such as &amp;autoplay= etc).</p><p>Use the simple wizard to select the type of embed (audio or video) as well as size and positioning options, for example:</p><p><span class=\"lucidau\">[archive=\"audio\"]http://archive.org/details/MozartEineKleineNachtmusik[/archive]</span></p><p><span class=\"lucidau\">[archive=\"video\"]http://archive.org/details/night_of_the_living_dead[/archive]<br />[archive=\"video-large\"]http://archive.org/details/the-last-man-on-earth[/archive]<br /></span></p><p>Note that you must pass one of the valid options with the archive tag. The simple mode is not supported:</p><p><span class=\"line-through lucidau\">[archive]http://archive.org/details/yourvideo[/archive]</span></p><p class=\"thick\">Multiple options not supported. Valid options are one of the following: video, audio, video-small, video-medium, video-large, video-left, video-right, video-center, audio-left, audio-right, audio-center, video-small-left, video-small-right, video-small-center, video-medium-left, video-medium-right, video-medium-center, video-large-left, video-large-right, video-large-center</p>");
$faq[] = array("Color Selection", "<p>Use the color swatch buttons to wrap highlighted text, or to toggle between open/closed color tags if no text is selected. To use custom colors, either choose a hex color code or use the javascript color picker</p><div class=\"text-center centered\"><img src=\"includes/bbcode_box/images/bbcodebox1-colorsample.png\" alt=\"\"/></div><table><tbody><tr><td><p class=\"lucidau\">[class=\"color1\"]Lorem ipsum dolor sit[/class]<br />[class=\"color2\"]Lorem ipsum dolor sit[/class]<br />[class=\"color3\"]Lorem ipsum dolor sit[/class]<br />[class=\"color4\"]Lorem ipsum dolor sit[/class]<br />[class=\"color5\"]Lorem ipsum dolor sit[/class]<br />[class=\"color6\"]Lorem ipsum dolor sit[/class]<br />[class=\"color7\"]Lorem ipsum dolor sit[/class]<br />[class=\"color8\"]Lorem ipsum dolor sit[/class]<br />[class=\"color9\"]Lorem ipsum dolor sit[/class]<br />[class=\"color10\"]Lorem ipsum dolor sit[/class]<br />[class=\"color11\"]Lorem ipsum dolor sit[/class]<br />[class=\"color12\"]Lorem ipsum dolor sit[/class]<br />[class=\"color13\"]Lorem ipsum dolor sit[/class]<br />[class=\"color14\"]Lorem ipsum dolor sit[/class]</p></td><td><p><span class=\"color1\">Lorem ipsum dolor sit</span><br /><span class=\"color2\">Lorem ipsum dolor sit</span><br /><span class=\"color3\">Lorem ipsum dolor sit</span><br /><span class=\"color4\">Lorem ipsum dolor sit</span><br /><span class=\"color5\">Lorem ipsum dolor sit</span><br /><span class=\"color6\">Lorem ipsum dolor sit</span><br /><span class=\"color7\">Lorem ipsum dolor sit</span><br /><span class=\"color8\">Lorem ipsum dolor sit</span><br /><span class=\"color9\">Lorem ipsum dolor sit</span><br /><span class=\"color10\">Lorem ipsum dolor sit</span><br /><span class=\"color11\">Lorem ipsum dolor sit</span><br /><span class=\"color12\">Lorem ipsum dolor sit</span><br /><span class=\"color13\">Lorem ipsum dolor sit</span><br /><span class=\"color14\">Lorem ipsum dolor sit</span></p></td></tr></tbody></table>");
$faq[] = array("Inserting Code and Language Specific Snippets", "<div class=\"float-right\" style=\"padding:0 0 10px 10px\"><img src=\"includes/bbcode_box/images/bbcodebox1-codesample.png\" alt=\"\"/></div><p>Use the simple wizard within the ABBC editor to help choose which type of code tags to deploy. After you have selected your options, hit the code button, which will either wrap highlighted text, or toggle between open/closed code (or pre) tags if no text is selected.</p> <span class=\"thick\">Inserting Generic Code</span> <p>Generic code snippets can be inserted in the same method that has been used for years, by simply wrapping your code in [code] tags</p> <p class=\"lucidau\">[code]your generic code here[/code]</p> <span class=\"thick\">Language Specific Snippets</span> <p>Language specific snippets can be inserted via the [pre=language] tags</p> <p class=\"lucidau\">[pre=php]your php code here[/pre]<br />[pre=css]your css code here[/pre]<br />[pre=html]your html code here[/pre]</p> <p>16 languages are supported by default, although over 40 languages can be used if required by an individual site. Please refer to the drop-down menu on the posting page to determine which languages are actually supported. The basic 16 valid classes are: <span class=\"thick\">apache, bash, cpp, cs, css, diff, html, ini, java, javascript, perl, php, python, ruby, sql, xml</span></p> <p>Declaring a language with code tags is <span class=\"thick\">NOT</span> supported, and the opposite is true of pre tags as a language <span class=\"thick\">MUST</span> be declared. Also, do <span class=\"thick\">NOT</span> wrap the language in quotes.</p> <p class=\"lucidau\"><span class=\"line-through\">[code=php][/code]</span><br /> <span class=\"line-through\">[pre][/pre]</span><br /> <span class=\"line-through\">[pre=\"php\"][/pre]</span></p>");
//-MOD: Advanced BBCode Box MOD vRN2.5.2

//
// This ends the BBCode guide entries
//

?>