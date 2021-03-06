<?php
/**
* WoltLab Community Framework
* language: de
* encoding: UTF-8
* category: wbb.threadAdd
* generated at Tue, 13 Aug 2013 11:30:42 +0000
* 
* DO NOT EDIT THIS FILE
*/
$this->items[$this->languageID]['wbb.threadAdd.assignedBoards'] = 'Foren für diese Ankündigung';
$this->items[$this->languageID]['wbb.threadAdd.assignedBoards.description'] = 'Geben Sie an, in welchen Foren die Ankündigung angezeigt werden soll. Die Ankündigung wird automatisch mit dem Forum verknüpft, in dem sie erstellt wurde.';
$this->items[$this->languageID]['wbb.threadAdd.error.prefix.empty'] = 'Bitte wählen Sie einen Präfix aus!';
$this->items[$this->languageID]['wbb.threadAdd.error.prefix.invalid'] = 'Sie haben einen ungültigen Präfix ausgewählt.';
$this->items[$this->languageID]['wbb.threadAdd.information'] = 'Beitragsinformationen';
$this->items[$this->languageID]['wbb.threadAdd.isImportant'] = 'Themenstatus';
$this->items[$this->languageID]['wbb.threadAdd.isImportant.0'] = 'Normal';
$this->items[$this->languageID]['wbb.threadAdd.isImportant.1'] = 'wichtig';
$this->items[$this->languageID]['wbb.threadAdd.isImportant.2'] = 'Ankündigung';
$this->items[$this->languageID]['wbb.threadAdd.language'] = 'Sprache';
$this->items[$this->languageID]['wbb.threadAdd.moderation.redirect'] = 'Ihr Thema wurde erfolgreich gespeichert. Es wird von einem Moderator überprüft und, falls keine Beanstandung vorliegt, für alle anderen Benutzer freigegeben.';
$this->items[$this->languageID]['wbb.threadAdd.notification.mail'] = 'Hallo {$recipient}!
		
{$author} hat ein neues Thema mit dem Titel: "{$topic}" im Forum: "{$boardTitle}" auf der Website: "{PAGE_TITLE}" erstellt.

Das neue Thema erreichen Sie über den folgenden Link:
{PAGE_URL}/index.php?page=Thread&threadID={$threadID}

{$author} hat folgenden Text geschrieben:
---------------------------------
{$text}
---------------------------------

Vielen Dank,
Ihr {PAGE_TITLE} Team';
$this->dynamicItems[$this->languageID]['wbb.threadAdd.notification.mail'] = 'Hallo <?php echo StringUtil::encodeHTML($this->v[\'recipient\']); ?>!
		
<?php echo StringUtil::encodeHTML($this->v[\'author\']); ?> hat ein neues Thema mit dem Titel: "<?php echo StringUtil::encodeHTML($this->v[\'topic\']); ?>" im Forum: "<?php echo StringUtil::encodeHTML($this->v[\'boardTitle\']); ?>" auf der Website: "<?php echo StringUtil::encodeHTML(PAGE_TITLE); ?>" erstellt.

Das neue Thema erreichen Sie über den folgenden Link:
<?php echo StringUtil::encodeHTML(PAGE_URL); ?>/index.php?page=Thread&threadID=<?php echo StringUtil::encodeHTML($this->v[\'threadID\']); ?>

<?php echo StringUtil::encodeHTML($this->v[\'author\']); ?> hat folgenden Text geschrieben:
---------------------------------
<?php echo StringUtil::encodeHTML($this->v[\'text\']); ?>
---------------------------------

Vielen Dank,
Ihr <?php echo StringUtil::encodeHTML(PAGE_TITLE); ?> Team';
$this->items[$this->languageID]['wbb.threadAdd.notification.subject'] = 'Neues Thema im Forum: {$title}';
$this->dynamicItems[$this->languageID]['wbb.threadAdd.notification.subject'] = 'Neues Thema im Forum: <?php echo StringUtil::encodeHTML($this->v[\'title\']); ?>';
$this->items[$this->languageID]['wbb.threadAdd.prefix'] = 'Präfix';
$this->items[$this->languageID]['wbb.threadAdd.settings.closeThread'] = 'Thema schließen';
$this->items[$this->languageID]['wbb.threadAdd.settings.closeThread.description'] = 'Das Thema wird nach dem Speichern dieses Beitrags geschlossen.';
$this->items[$this->languageID]['wbb.threadAdd.settings.disablePost'] = 'Beitrag deaktivieren';
$this->items[$this->languageID]['wbb.threadAdd.settings.disablePost.description'] = 'Der Beitrag wird nach dem Speichern deaktiviert und muss zunächst von einem Moderator freigeschaltet werden.';
$this->items[$this->languageID]['wbb.threadAdd.settings.disableThread'] = 'Thema deaktivieren';
$this->items[$this->languageID]['wbb.threadAdd.settings.disableThread.description'] = 'Das Thema wird nach dem Speichern deaktiviert und muss zunächst von einem Moderator freigeschaltet werden.';
$this->items[$this->languageID]['wbb.threadAdd.settings.hideEditNote'] = 'Editierungshinweis nicht anzeigen';
$this->items[$this->languageID]['wbb.threadAdd.settings.hideEditNote.description'] = 'Den Hinweis: &raquo;Beitrag editiert von ...&laquo; nicht an den Beitrag anfügen.';
$this->items[$this->languageID]['wbb.threadAdd.settings.markAsDone'] = 'Thema als erledigt markieren';
$this->items[$this->languageID]['wbb.threadAdd.settings.markAsDone.description'] = 'Das Thema wird nach dem Speichern dieses Beitrags als erledigt markiert.';
$this->items[$this->languageID]['wbb.threadAdd.settings.subscription'] = 'Thema abonnieren';
$this->items[$this->languageID]['wbb.threadAdd.settings.subscription.description'] = 'Fügt dieses Thema der Abonnement-Liste in ihrem Profil hinzu.';
$this->items[$this->languageID]['wbb.threadAdd.status'] = 'Status';
$this->items[$this->languageID]['wbb.threadAdd.subject'] = 'Überschrift';
$this->items[$this->languageID]['wbb.threadAdd.text'] = 'Beitrag';
$this->items[$this->languageID]['wbb.threadAdd.text.error.tooShort'] = 'Der Beitrag ist zu kurz. Der Beitrag muss mindestens {#$minCharLength} Zeichen lang sein und {#$minWordCount} {if $minWordCount == 1}Wort{else}Wörter{/if} enthalten.';
$this->dynamicItems[$this->languageID]['wbb.threadAdd.text.error.tooShort'] = 'Der Beitrag ist zu kurz. Der Beitrag muss mindestens <?php echo StringUtil::formatNumeric($this->v[\'minCharLength\']); ?> Zeichen lang sein und <?php echo StringUtil::formatNumeric($this->v[\'minWordCount\']); ?> <?php if ($this->v[\'minWordCount\'] == 1) { ?>Wort<?php } else { ?>Wörter<?php } ?> enthalten.';
$this->items[$this->languageID]['wbb.threadAdd.title'] = 'Neues Thema erstellen';
?>