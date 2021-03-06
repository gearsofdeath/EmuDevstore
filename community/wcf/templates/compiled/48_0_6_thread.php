<?php
/**
* WoltLab Community Framework
* Template: thread
* Compiled at: Tue, 13 Aug 2013 17:19:30 +0000
* 
* DO NOT EDIT THIS FILE
*/
$this->v['tpl']['template'] = 'thread';
?>
<?php
if (!isset($this->pluginObjects['TemplatePluginModifierConcat'])) {
require_once(WCF_DIR.'lib/system/template/plugin/TemplatePluginModifierConcat.class.php');
$this->pluginObjects['TemplatePluginModifierConcat'] = new TemplatePluginModifierConcat;
}
if (!isset($this->pluginObjects['TemplatePluginModifierEncodejs'])) {
require_once(WCF_DIR.'lib/system/template/plugin/TemplatePluginModifierEncodejs.class.php');
$this->pluginObjects['TemplatePluginModifierEncodejs'] = new TemplatePluginModifierEncodejs;
}
if (!isset($this->pluginObjects['TemplatePluginFunctionPages'])) {
require_once(WCF_DIR.'lib/system/template/plugin/TemplatePluginFunctionPages.class.php');
$this->pluginObjects['TemplatePluginFunctionPages'] = new TemplatePluginFunctionPages;
}
if (!isset($this->pluginObjects['TemplatePluginFunctionCycle'])) {
require_once(WCF_DIR.'lib/system/template/plugin/TemplatePluginFunctionCycle.class.php');
$this->pluginObjects['TemplatePluginFunctionCycle'] = new TemplatePluginFunctionCycle;
}
if (!isset($this->pluginObjects['TemplatePluginModifierTime'])) {
require_once(WCF_DIR.'lib/system/template/plugin/TemplatePluginModifierTime.class.php');
$this->pluginObjects['TemplatePluginModifierTime'] = new TemplatePluginModifierTime;
}
if (!isset($this->pluginObjects['TemplatePluginModifierShorttime'])) {
require_once(WCF_DIR.'lib/system/template/plugin/TemplatePluginModifierShorttime.class.php');
$this->pluginObjects['TemplatePluginModifierShorttime'] = new TemplatePluginModifierShorttime;
}
if (!isset($this->pluginObjects['TemplatePluginModifierDatediff'])) {
require_once(WCF_DIR.'lib/system/template/plugin/TemplatePluginModifierDatediff.class.php');
$this->pluginObjects['TemplatePluginModifierDatediff'] = new TemplatePluginModifierDatediff;
}
?><?php
$outerTemplateName9a220072b43f6fbcdeb004f3bbfcb7dc493ac97a = $this->v['tpl']['template'];
$this->includeTemplate("documentHeader", array(), (1 ? 1 : 0));
$this->v['tpl']['template'] = $outerTemplateName9a220072b43f6fbcdeb004f3bbfcb7dc493ac97a;
$this->v['tpl']['includedTemplates']["documentHeader"] = 1;
?>
<head>
	<title><?php if ($this->v['thread']->prefix) { ?><?php $this->tagStack[] = array('lang', array()); ob_start(); ?><?php echo StringUtil::encodeHTML($this->v['thread']->prefix); ?><?php $_langa549485241c5e0d36b9281aeecdbd7b24e5c5676 = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_langa549485241c5e0d36b9281aeecdbd7b24e5c5676, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?> <?php } ?><?php echo StringUtil::encodeHTML($this->v['thread']->topic); ?> <?php if ($this->v['pageNo'] > 1) { ?>- Page <?php echo StringUtil::formatNumeric($this->v['pageNo']); ?> <?php } ?> - <?php $this->tagStack[] = array('lang', array()); ob_start(); ?><?php echo StringUtil::encodeHTML($this->v['board']->title); ?><?php $_langa64573350b27482199ac1e7181f669f12ae778c3 = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_langa64573350b27482199ac1e7181f669f12ae778c3, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?> - <?php $this->tagStack[] = array('lang', array()); ob_start(); ?><?php echo StringUtil::encodeHTML(PAGE_TITLE); ?><?php $_lang8d501cf69b5e68e55d9e29a618ff8f7104836ad4 = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_lang8d501cf69b5e68e55d9e29a618ff8f7104836ad4, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?></title>
	
	<?php
$outerTemplateName7f6bad1d9f2809ee72b6c2525e275d2a169b027a = $this->v['tpl']['template'];
$this->includeTemplate('headInclude', array(), (false ? 1 : 0));
$this->v['tpl']['template'] = $outerTemplateName7f6bad1d9f2809ee72b6c2525e275d2a169b027a;
$this->v['tpl']['includedTemplates']['headInclude'] = 1;
?>
	
	<?php
$outerTemplateNamee607bcfc0cbe70903a1bf52bdbf2b15e14914c1f = $this->v['tpl']['template'];
$this->includeTemplate('imageViewer', array(), (1 ? 1 : 0));
$this->v['tpl']['template'] = $outerTemplateNamee607bcfc0cbe70903a1bf52bdbf2b15e14914c1f;
$this->v['tpl']['includedTemplates']['imageViewer'] = 1;
?>
	
	<!--[if IE]>
		<script type="text/javascript">
			//<![CDATA[
			
			onloadEvents.push(function() {
				if (document.referrer) {
					var postForm = document.referrer.search(/PostEdit|PostAdd/);
					if (postForm != -1) {
						var postID = (window.location + '').split('postID=');
						if (!isNaN(postID[1])) window.location.href = '#post' + postID[1];
					}
				}
				});
			
			//]]>
		</script>
	<![endif]-->
	<script type="text/javascript" src="<?php echo RELATIVE_WCF_DIR; ?>js/MultiPagesLinks.class.js"></script>
	<script type="text/javascript">
		//<![CDATA[
		var INLINE_IMAGE_MAX_WIDTH = <?php echo INLINE_IMAGE_MAX_WIDTH; ?>;
		//]]>
	</script>
	<script type="text/javascript" src="<?php echo RELATIVE_WCF_DIR; ?>js/ImageResizer.class.js"></script>
	<?php if (isset($this->v['polls'])) { ?><script type="text/javascript" src="<?php echo RELATIVE_WCF_DIR; ?>js/Poll.class.js"></script><?php } ?>
	<script type="text/javascript">
		//<![CDATA[
		var language = new Object();
		var postData = new Hash();
		var url = 'index.php?page=Thread&threadID=<?php echo $this->v['thread']->threadID; ?>&pageNo=<?php echo $this->v['pageNo']; ?><?php echo SID_ARG_2ND_NOT_ENCODED; ?>';
		//]]>
	</script>
	<?php if ($this->v['thread']->canReplyThread()) { ?>
		<?php
$outerTemplateName15c5a2fb50eb10911ad361773c9aec20b8eabd6e = $this->v['tpl']['template'];
$this->includeTemplate('multiQuote', array('formURL' => $this->pluginObjects['TemplatePluginModifierConcat']->execute(array("index.php?form=PostAdd&threadID={$this->v['threadID']}",SID_ARG_2ND_NOT_ENCODED), $this)), (1 ? 1 : 0));
$this->v['tpl']['template'] = $outerTemplateName15c5a2fb50eb10911ad361773c9aec20b8eabd6e;
$this->v['tpl']['includedTemplates']['multiQuote'] = 1;
?>
	<?php } else { ?>
		<?php
$outerTemplateName6494cb0e862603a4d93fc410639d5d334711e423 = $this->v['tpl']['template'];
$this->includeTemplate('multiQuote', array(), (1 ? 1 : 0));
$this->v['tpl']['template'] = $outerTemplateName6494cb0e862603a4d93fc410639d5d334711e423;
$this->v['tpl']['includedTemplates']['multiQuote'] = 1;
?>
	<?php } ?>
	<?php if ($this->v['permissions']['canHandleThread'] || $this->v['permissions']['canHandlePost']) { ?>
		<?php
$outerTemplateNamea82db9425e9654287e9d8649722c65df5c4dbe0b = $this->v['tpl']['template'];
$this->includeTemplate('threadInlineEdit', array('pageType' => 'thread'), (1 ? 1 : 0));
$this->v['tpl']['template'] = $outerTemplateNamea82db9425e9654287e9d8649722c65df5c4dbe0b;
$this->v['tpl']['includedTemplates']['threadInlineEdit'] = 1;
?>
		<script type="text/javascript">
			//<![CDATA[
			threadData.set(<?php echo $this->v['thread']->threadID; ?>, {
				'isMarked': <?php echo $this->v['thread']->isMarked(); ?>,
				'isDeleted': <?php echo $this->v['thread']->isDeleted; ?>,
				'isDisabled': <?php echo $this->v['thread']->isDisabled; ?>,
				'isClosed': <?php echo $this->v['thread']->isClosed; ?>,
				'isSticky': <?php echo $this->v['thread']->isSticky; ?>,
				'isAnnouncement': <?php echo $this->v['thread']->isAnnouncement; ?>,
				'isMoved': 0,
				'prefix': '<?php echo StringUtil::encodeHTML($this->pluginObjects['TemplatePluginModifierEncodejs']->execute(array($this->v['thread']->prefix), $this)); ?>',
				'isDone': <?php echo $this->v['thread']->isDone; ?>
			});
			//]]>
		</script>
	<?php } ?>
	<link rel="alternate" type="application/rss+xml" href="index.php?page=PostsFeed&amp;format=rss2&amp;threadID=<?php echo $this->v['threadID']; ?>" title="Feed of this thread (RSS2)" />
	<link rel="alternate" type="application/atom+xml" href="index.php?page=PostsFeed&amp;format=atom&amp;threadID=<?php echo $this->v['threadID']; ?>" title="Feed of this thread (Atom)" />
</head>
<body<?php if (isset($this->v['templateName'])) { ?> id="tpl<?php echo StringUtil::encodeHTML(ucfirst($this->v['templateName'])); ?>"<?php } ?>>

<p class="skipHeader hidden"><a href="#skipToContent" title="Skip navigation">Skip navigation</a></p><!-- support for disabled surfers -->


<?php $this->assign('searchFieldTitle', 'Search thread'); ?>
<?php ob_start(); ?>
	<input type="hidden" name="threadID" value="<?php echo $this->v['threadID']; ?>" />
	<input type="hidden" name="types[]" value="post" />
	<input type="hidden" name="findThreads" value="0" />
<?php
$this->v['tpl']['capture']['default'] = ob_get_contents();
ob_end_clean();
$this->assign('searchHiddenFields', $this->v['tpl']['capture']['default']);
?>

<?php
$outerTemplateName707467703436bdffe47af6494a0623b7aa2f93c3 = $this->v['tpl']['template'];
$this->includeTemplate('header', array(), (false ? 1 : 0));
$this->v['tpl']['template'] = $outerTemplateName707467703436bdffe47af6494a0623b7aa2f93c3;
$this->v['tpl']['includedTemplates']['header'] = 1;
?>

<div id="main">
	
	<?php
$outerTemplateNameed705fd0910f180010acd9375afa64f9796315af = $this->v['tpl']['template'];
$this->includeTemplate("navigation", array('showBoard' => true), (1 ? 1 : 0));
$this->v['tpl']['template'] = $outerTemplateNameed705fd0910f180010acd9375afa64f9796315af;
$this->v['tpl']['includedTemplates']["navigation"] = 1;
?>
	
	<a href="#" id="skipToContent"></a><!-- support for disabled surfers -->
	
	<div class="mainHeadline">
		<img id="threadEdit<?php echo $this->v['thread']->threadID; ?>" src="<?php ob_start(); ?><?php echo $this->v['thread']->getIconName(); ?>L.png<?php $_icon7939450e9f1861166cfdd37ac4233a87e757b07b = ob_get_contents(); ob_end_clean(); echo StyleManager::getStyle()->getIconPath($_icon7939450e9f1861166cfdd37ac4233a87e757b07b); ?>" alt="" />
		<div class="headlineContainer">
			<h2 id="threadTitle<?php echo $this->v['thread']->threadID; ?>">
				<span id="threadPrefix<?php echo $this->v['thread']->threadID; ?>" class="prefix"><strong><?php $this->tagStack[] = array('lang', array()); ob_start(); ?><?php echo StringUtil::encodeHTML($this->v['thread']->prefix); ?><?php $_lang8ca1acaac51940e590fdb6d6c5f6e21c6f1f7076 = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_lang8ca1acaac51940e590fdb6d6c5f6e21c6f1f7076, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?></strong></span>
				<a href="index.php?page=Thread&amp;threadID=<?php echo $this->v['thread']->threadID; ?><?php echo SID_ARG_2ND; ?>"><?php echo StringUtil::encodeHTML($this->v['thread']->topic); ?></a>
			</h2>
			<p><?php if ($this->v['enableRating']) { ?><?php echo $this->v['thread']->getRatingOutput(); ?><?php } ?></p>
		</div>
	</div>
	
	<?php if (isset($this->v['userMessages'])) { ?><?php echo $this->v['userMessages']; ?><?php } ?>
	
	<div class="contentHeader">
		<?php $this->assign('multiplePagesLink', "index.php?page=Thread&threadID={$this->v['threadID']}&pageNo=%d"); ?>
		<?php if ($this->v['highlight']) { ?>
			<?php $this->assign('encodedHighlight', urlencode($this->v['highlight'])); ?>
			<?php $this->assign('multiplePagesLink', $this->pluginObjects['TemplatePluginModifierConcat']->execute(array($this->v['multiplePagesLink'],'&highlight=',$this->v['encodedHighlight']), $this)); ?>
		<?php } ?>
		<?php echo $this->pluginObjects['TemplatePluginFunctionPages']->execute(array('print' => true, 'assign' => 'pagesOutput', 'link' => $this->pluginObjects['TemplatePluginModifierConcat']->execute(array($this->v['multiplePagesLink'],SID_ARG_2ND_NOT_ENCODED), $this)), $this); ?>
		<div class="largeButtons">
			<?php if ($this->v['thread']->canReplyThread() || isset($this->v['additionalLargeButtons'])) { ?>
				<ul>
					<?php if ($this->v['thread']->canReplyThread()) { ?><li><a href="index.php?form=PostAdd&amp;threadID=<?php echo $this->v['thread']->threadID; ?><?php echo SID_ARG_2ND; ?>" id="replyButton1" title="Reply"><img src="<?php echo StyleManager::getStyle()->getIconPath('messageAddM.png'); ?>" alt="" /> <span>Reply</span></a></li><?php } ?>
					
					<?php if (isset($this->v['additionalLargeButtons'])) { ?><?php echo $this->v['additionalLargeButtons']; ?><?php } ?>
				</ul>
			<?php } ?>
		</div>
	</div>
	
	
	<?php if ($this->v['this']->getStyle()->getVariable('messages.color.cycle')) { ?>
		<?php echo $this->pluginObjects['TemplatePluginFunctionCycle']->execute(array('name' => 'messageCycle', 'values' => '2,1', 'print' => false), $this); ?>
	<?php } else { ?>
		<?php echo $this->pluginObjects['TemplatePluginFunctionCycle']->execute(array('name' => 'messageCycle', 'values' => '1', 'print' => false), $this); ?>
	<?php } ?>

	<?php if ($this->v['this']->getStyle()->getVariable('messages.sidebar.color.cycle')) { ?>
		<?php if ($this->v['this']->getStyle()->getVariable('messages.color.cycle')) { ?>
			<?php echo $this->pluginObjects['TemplatePluginFunctionCycle']->execute(array('name' => 'postCycle', 'values' => '1,2', 'print' => false), $this); ?>
		<?php } else { ?>
			<?php echo $this->pluginObjects['TemplatePluginFunctionCycle']->execute(array('name' => 'postCycle', 'values' => '3,2', 'print' => false), $this); ?>
		<?php } ?>
	<?php } else { ?>
		<?php echo $this->pluginObjects['TemplatePluginFunctionCycle']->execute(array('name' => 'postCycle', 'values' => '3', 'print' => false), $this); ?>
	<?php } ?>
	
	<?php ob_start(); ?>message<?php if ($this->v['this']->getStyle()->getVariable('messages.framed')) { ?>Framed<?php } ?><?php echo ucfirst($this->v['this']->getStyle()->getVariable('messages.sidebar.alignment')); ?><?php if ($this->v['this']->getStyle()->getVariable('messages.sidebar.divider.use')) { ?> dividers<?php } ?><?php
$this->v['tpl']['capture']['default'] = ob_get_contents();
ob_end_clean();
$this->assign('messageClass', $this->v['tpl']['capture']['default']);
?>
	<?php ob_start(); ?>messageFooter<?php echo ucfirst($this->v['this']->getStyle()->getVariable('messages.footer.alignment')); ?><?php
$this->v['tpl']['capture']['default'] = ob_get_contents();
ob_end_clean();
$this->assign('messageFooterClass', $this->v['tpl']['capture']['default']);
?>
	
	<?php if ($this->v['sortOrder'] == 'DESC') { ?><?php $this->assign('startIndex', $this->v['items']-$this->v['startIndex']+1); ?><?php } ?>
	<?php
if (count($this->v['posts']) > 0) {
foreach ($this->v['posts'] as $this->v['post']) {
?>
		<?php $this->assign("sidebar", $this->v['sidebarFactory']->get('post',$this->v['post']->postID)); ?>
		<?php $this->assign("author", $this->v['sidebar']->getUser()); ?>
		<?php $this->assign("pollID", $this->v['post']->pollID); ?>
		<?php $this->assign("messageID", $this->v['post']->postID); ?>
		
		<script type="text/javascript">
			//<![CDATA[
				
				quoteData.set('post-<?php echo $this->v['post']->postID; ?>', {
					objectID: <?php echo $this->v['post']->postID; ?>,
					objectType: 'post',
					quotes: <?php echo $this->v['post']->isQuoted(); ?>
				});
				
			<?php if ($this->v['permissions']['canHandleThread'] || $this->v['permissions']['canHandlePost']) { ?>
				postData.set(<?php echo $this->v['post']->postID; ?>, {
					'isMarked': <?php echo $this->v['post']->isMarked(); ?>,
					'isDeleted': <?php echo $this->v['post']->isDeleted; ?>,
					'isDisabled': <?php echo $this->v['post']->isDisabled; ?>,
					'isClosed': <?php echo $this->v['post']->isClosed; ?>
				});
			<?php } ?>
			//]]>
		</script>
		
		<?php $this->assign("hiddenDeletedPost", false); ?>
		<?php $this->assign("hiddenIgnoredPost", false); ?>
		<?php if ($this->v['post']->isDeleted &&  ! $this->v['thread']->isDeleted) { ?>
			<?php $this->assign("hiddenDeletedPost", true); ?>
		<?php } ?>
		<?php if ($this->v['sidebar']->getUser()->userID && $this->v['this']->user->userID && $this->v['this']->user->ignores($this->v['sidebar']->getUser()->userID)) { ?>
			<?php $this->assign("hiddenIgnoredPost", true); ?>
		<?php } ?>
		
		<?php if ( ! $this->v['post']->isDeleted || $this->v['board']->getModeratorPermission('canReadDeletedPost')) { ?>
			<div id="postRow<?php echo $this->v['post']->postID; ?>" class="message<?php if (THREAD_ENABLE_THREAD_AUTHOR && $this->v['sidebar']->getUser()->userID && $this->v['sidebar']->getUser()->userID == $this->v['thread']->userID) { ?> threadStarterPost<?php } ?>"<?php if ($this->v['hiddenDeletedPost'] || $this->v['hiddenIgnoredPost']) { ?> style="display: none"<?php } ?>>
				<div class="messageInner <?php echo $this->v['messageClass']; ?> container-<?php echo $this->pluginObjects['TemplatePluginFunctionCycle']->execute(array('name' => 'postCycle'), $this); ?><?php if ( ! $this->v['sidebar']->getUser()->userID) { ?> guestPost<?php } ?>">
					<?php if ( ! $this->v['hiddenDeletedPost'] &&  ! $this->v['hiddenIgnoredPost']) { ?><a id="post<?php echo $this->v['post']->postID; ?>"></a><?php } ?>
					
					<?php
$outerTemplateNamea13736d6c39ad0e2ab185d10f41ebbfa417c09e8 = $this->v['tpl']['template'];
$this->includeTemplate('messageSidebar', array(), (1 ? 1 : 0));
$this->v['tpl']['template'] = $outerTemplateNamea13736d6c39ad0e2ab185d10f41ebbfa417c09e8;
$this->v['tpl']['includedTemplates']['messageSidebar'] = 1;
?>
					
					<div class="messageContent">
						<div class="messageContentInner color-<?php echo $this->pluginObjects['TemplatePluginFunctionCycle']->execute(array('name' => 'messageCycle'), $this); ?>">
							<div class="messageHeader">
								<p class="messageCount">
									<a href="index.php?page=Thread&amp;postID=<?php echo $this->v['post']->postID; ?>#post<?php echo $this->v['post']->postID; ?>" title="Permalink to post #<?php echo StringUtil::formatNumeric($this->v['startIndex']); ?>" class="messageNumber"><?php echo StringUtil::formatNumeric($this->v['startIndex']); ?></a>
									<?php if ($this->v['permissions']['canMarkPost']) { ?>
										<span class="messageMarkCheckBox">
											<input id="postMark<?php echo $this->v['post']->postID; ?>" type="checkbox" title="Mark post" />
										</span>
									<?php } ?>
								</p>
								<div class="containerIcon">
									<img id="postEdit<?php echo $this->v['post']->postID; ?>" src="<?php ob_start(); ?><?php echo $this->v['post']->getIconName(); ?>M.png<?php $_iconc2611d6ef668b346937aca1931edc82e2252cf21 = ob_get_contents(); ob_end_clean(); echo StyleManager::getStyle()->getIconPath($_iconc2611d6ef668b346937aca1931edc82e2252cf21); ?>" alt="" />
								</div>
								<div class="containerContent">
									<p class="smallFont light"><?php echo $this->pluginObjects['TemplatePluginModifierTime']->execute(array($this->v['post']->time), $this); ?></p>
								</div>
							</div>
							
							<h3 id="postTopic<?php echo $this->v['post']->postID; ?>" class="messageTitle"><span><?php echo StringUtil::encodeHTML($this->v['post']->subject); ?></span></h3>
							
							<div class="messageBody">
								<?php
$outerTemplateName8c88cccf9eeba76881fd81d46179cb1c9d84ce8b = $this->v['tpl']['template'];
$this->includeTemplate('pollShow', array(), (1 ? 1 : 0));
$this->v['tpl']['template'] = $outerTemplateName8c88cccf9eeba76881fd81d46179cb1c9d84ce8b;
$this->v['tpl']['includedTemplates']['pollShow'] = 1;
?>
								<div id="postText<?php echo $this->v['post']->postID; ?>">
									<?php echo $this->v['post']->getFormattedMessage(); ?>
								</div>
							</div>
							
							<?php
$outerTemplateName113f6e3e48f24fbab056d56f0d616630d6d8a24d = $this->v['tpl']['template'];
$this->includeTemplate('attachmentsShow', array(), (1 ? 1 : 0));
$this->v['tpl']['template'] = $outerTemplateName113f6e3e48f24fbab056d56f0d616630d6d8a24d;
$this->v['tpl']['includedTemplates']['attachmentsShow'] = 1;
?>
							
							<?php if (MODULE_USER_SIGNATURE == 1 && $this->v['post']->getSignature()) { ?>
								<div class="signature">
									<?php echo $this->v['post']->getSignature(); ?>
								</div>
							<?php } ?>
							
							<?php if ($this->v['post']->editCount > 0) { ?>
								<p class="editNote smallFont light">This post has been edited <?php echo StringUtil::encodeHTML($this->v['post']->editCount); ?> times, last edit by &quot;<?php echo StringUtil::encodeHTML($this->v['post']->editor); ?>&quot; (<?php echo $this->pluginObjects['TemplatePluginModifierShorttime']->execute(array($this->v['post']->lastEditTime), $this); ?>)<?php if ($this->v['post']->editReason) { ?> with the following reason: <?php echo StringUtil::encodeHTML($this->v['post']->editReason); ?><?php } ?></p>
							<?php } ?>
							
							<?php if ($this->v['post']->isDeleted) { ?>
								<p class="deleteNote smallFont light">Deleted by <?php if ($this->v['post']->userID == $this->v['post']->deletedByID) { ?>the author himself<?php } else { ?> &quot;<?php echo StringUtil::encodeHTML($this->v['post']->deletedBy); ?>&quot;<?php } ?> (<?php echo $this->pluginObjects['TemplatePluginModifierTime']->execute(array($this->v['post']->deleteTime), $this); ?>)<?php if ($this->v['post']->deleteReason) { ?>: <?php echo StringUtil::encodeHTML($this->v['post']->deleteReason); ?><?php } ?>
		<?php if (THREAD_EMPTY_RECYCLE_BIN_CYCLE > 0) { ?><br />This post will be deleted finally in <?php echo $this->pluginObjects['TemplatePluginModifierDatediff']->execute(array($this->v['post']->deleteTime+THREAD_EMPTY_RECYCLE_BIN_CYCLE*86400), $this); ?>.<?php } ?></p>
							<?php } ?>
							
							<div class="<?php echo $this->v['messageFooterClass']; ?>">
								<div class="smallButtons">
									<ul id="postButtons<?php echo $this->v['post']->postID; ?>">
										<li class="extraButton"><a href="#top" title="Go to the top of the page"><img src="<?php echo StyleManager::getStyle()->getIconPath('upS.png'); ?>" alt="Go to the top of the page" /> <span class="hidden">Go to the top of the page</span></a></li>
										<?php if ($this->v['thread']->canReplyThread()) { ?>
											<li><a id="postQuote<?php echo $this->v['post']->postID; ?>" href="index.php?form=PostAdd&amp;postID=<?php echo $this->v['post']->postID; ?>&amp;action=quote<?php echo SID_ARG_2ND; ?>" title="Quote"><img src="<?php echo StyleManager::getStyle()->getIconPath('messageQuoteS.png'); ?>" alt="" /> <span>Quote</span></a></li>
										<?php } ?>
										<?php if ($this->v['post']->canEditPost($this->v['board'],$this->v['thread'])) { ?>
											<li><a href="index.php?form=PostEdit&amp;postID=<?php echo $this->v['post']->postID; ?><?php echo SID_ARG_2ND; ?>" title="Edit"><img src="<?php echo StyleManager::getStyle()->getIconPath('editS.png'); ?>" alt="" /> <span>Edit</span></a></li>
										<?php } ?>
										<?php if ($this->v['this']->user->userID) { ?>
											<li><a href="index.php?form=PostReport&amp;postID=<?php echo $this->v['post']->postID; ?><?php echo SID_ARG_2ND; ?>" title="Report"><img src="<?php echo StyleManager::getStyle()->getIconPath('postReportS.png'); ?>" alt="" /> <span>Report</span></a></li>
										<?php } ?>
										<?php if (MODULE_USER_INFRACTION == 1 && $this->v['post']->userID && $this->v['this']->user->getPermission('admin.user.infraction.canWarnUser')) { ?>
											<li><a href="index.php?form=UserWarn&amp;userID=<?php echo $this->v['post']->userID; ?>&amp;objectType=post&amp;objectID=<?php echo $this->v['post']->postID; ?><?php echo SID_ARG_2ND; ?>" title="Warn"><img src="<?php echo StyleManager::getStyle()->getIconPath('infractionWarningS.png'); ?>" alt="" /> <span>Warn</span></a></li>
										<?php } ?>
										<?php if (isset($this->v['additionalSmallButtons'][$this->v['messageID']])) { ?><?php echo $this->v['additionalSmallButtons'][$this->v['messageID']]; ?><?php } ?>
									</ul>
								</div>
							</div>
							<hr />
						</div>
					</div>
					
				</div>
			</div>
		<?php } ?>
		
		<?php if ($this->v['hiddenDeletedPost'] || $this->v['hiddenIgnoredPost']) { ?>
			<?php echo $this->pluginObjects['TemplatePluginFunctionCycle']->execute(array('name' => 'postCycle', 'print' => false), $this); ?>
			<div class="message messageMinimized" id="hiddenPostInfo<?php echo $this->v['post']->postID; ?>">
				<div class="messageInner container-<?php echo $this->pluginObjects['TemplatePluginFunctionCycle']->execute(array('name' => 'postCycle'), $this); ?>">
					<a id="post<?php echo $this->v['post']->postID; ?>"></a>
					<?php if ($this->v['hiddenDeletedPost']) { ?>
						<img src="<?php echo StyleManager::getStyle()->getIconPath('postTrashM.png'); ?>" alt="" />
					<?php } else { ?>
						<img src="<?php echo StyleManager::getStyle()->getIconPath('warningM.png'); ?>" alt="" />
					<?php } ?>
					<p class="smallFont light">
						
						<?php if ( ! $this->v['hiddenDeletedPost'] || $this->v['board']->getModeratorPermission('canReadDeletedPost')) { ?>
							<a onclick="showContent('postRow<?php echo $this->v['post']->postID; ?>', 'hiddenPostInfo<?php echo $this->v['post']->postID; ?>')" title="Shows the content of this post">
						<?php } ?>
						
						<span>
							<?php if ($this->v['hiddenDeletedPost']) { ?>
								This post<?php if ($this->v['post']->subject) { ?> &quot;<?php echo StringUtil::encodeHTML($this->v['post']->subject); ?>&quot;<?php } ?> by &quot;<?php echo StringUtil::encodeHTML($this->v['post']->username); ?>&quot; (<?php echo $this->pluginObjects['TemplatePluginModifierTime']->execute(array($this->v['post']->time), $this); ?>) has been deleted by <?php if ($this->v['post']->userID == $this->v['post']->deletedByID) { ?>the author himself<?php } else { ?>user &quot;<?php echo StringUtil::encodeHTML($this->v['post']->deletedBy); ?>&quot;<?php } ?> (<?php echo $this->pluginObjects['TemplatePluginModifierTime']->execute(array($this->v['post']->deleteTime), $this); ?>)<?php if ($this->v['post']->deleteReason) { ?> with the following reason: <?php echo StringUtil::encodeHTML($this->v['post']->deleteReason); ?><?php } ?>
							<?php } elseif ($this->v['hiddenIgnoredPost']) { ?>
								This post<?php if ($this->v['post']->subject) { ?> &quot;<?php echo StringUtil::encodeHTML($this->v['post']->subject); ?>&quot;<?php } ?> by: <?php echo StringUtil::encodeHTML($this->v['post']->username); ?> (<?php echo $this->pluginObjects['TemplatePluginModifierTime']->execute(array($this->v['post']->time), $this); ?>) is hidden, because you ignore user <?php echo StringUtil::encodeHTML($this->v['post']->username); ?>.
							<?php } ?>
						</span>
						
						<?php if ( ! $this->v['hiddenDeletedPost'] || $this->v['board']->getModeratorPermission('canReadDeletedPost')) { ?>
							</a>
						<?php } ?>
					</p>
				</div>
			</div>
		<?php } ?>
		
		<?php if ($this->v['sortOrder'] == 'DESC') { ?>
			<?php $this->assign("startIndex", $this->v['startIndex']-1); ?>
		<?php } else { ?>
			<?php $this->assign("startIndex", $this->v['startIndex']+1); ?>
		<?php } ?>
	<?php } } ?>
	
	<?php if (THREAD_ENABLE_QUICK_REPLY == 1 && $this->v['thread']->canReplyThread() && $this->v['this']->user->userID != 0) { ?>
		<?php
$outerTemplateName356dfb88df1ff9e413fe731b7a5d53e52421cb15 = $this->v['tpl']['template'];
$this->includeTemplate('threadQuickReply', array(), (1 ? 1 : 0));
$this->v['tpl']['template'] = $outerTemplateName356dfb88df1ff9e413fe731b7a5d53e52421cb15;
$this->v['tpl']['includedTemplates']['threadQuickReply'] = 1;
?>
	<?php } ?>
	
	<div class="contentFooter">
		<?php echo $this->v['pagesOutput']; ?>
		
		<div id="threadEditMarked" class="optionButtons"></div>
		<div id="postEditMarked" class="optionButtons"></div>
		
		<div class="largeButtons">
			<?php if ($this->v['thread']->canReplyThread() || isset($this->v['additionalLargeButtons'])) { ?>
				<ul>
					<?php if ($this->v['thread']->canReplyThread()) { ?><li><a href="index.php?form=PostAdd&amp;threadID=<?php echo $this->v['thread']->threadID; ?><?php echo SID_ARG_2ND; ?>" id="replyButton2" title="Reply"><img src="<?php echo StyleManager::getStyle()->getIconPath('messageAddM.png'); ?>" alt="" /> <span>Reply</span></a></li><?php } ?>
					
					<?php if (isset($this->v['additionalLargeButtons'])) { ?><?php echo $this->v['additionalLargeButtons']; ?><?php } ?>
				</ul>
			<?php } ?>
		</div>
	</div>
	
	<?php echo $this->pluginObjects['TemplatePluginFunctionCycle']->execute(array('values' => 'class="container-2",class="container-1"', 'name' => 'container', 'print' => false), $this); ?>
	
	<?php if (isset($this->v['usersOnlineTotal']) || count($this->v['similarThreads']) || count($this->v['tags']) || isset($this->v['additionalBoxes'])) { ?>
		<div class="border infoBox">
			<?php if (isset($this->v['usersOnlineTotal'])) { ?>
				<div <?php echo $this->pluginObjects['TemplatePluginFunctionCycle']->execute(array('name' => 'container'), $this); ?>>
					<div class="containerIcon"><img src="<?php echo StyleManager::getStyle()->getIconPath('membersM.png'); ?>" alt="" /></div>
					<div class="containerContent">
						<h3><?php if ($this->v['this']->user->getPermission('user.usersOnline.canView')) { ?><a href="index.php?page=UsersOnline&amp;threadID=<?php echo $this->v['thread']->threadID; ?><?php echo SID_ARG_2ND; ?>"><?php echo StringUtil::encodeHTML($this->v['usersOnlineTotal']); ?> <?php if ($this->v['usersOnlineTotal'] == 1) { ?>user apart from you is<?php } else { ?>users apart from you are<?php } ?> browsing this thread:</a><?php } else { ?><?php echo StringUtil::encodeHTML($this->v['usersOnlineTotal']); ?> <?php if ($this->v['usersOnlineTotal'] == 1) { ?>user apart from you is<?php } else { ?>users apart from you are<?php } ?> browsing this thread:<?php } ?></h3>
						<p class="smallFont">
<?php if ($this->v['usersOnlineMembers'] > 0) { ?>
	<?php echo StringUtil::encodeHTML($this->v['usersOnlineMembers']); ?> member<?php if ($this->v['usersOnlineMembers'] != 1) { ?>s<?php } ?>
<?php } ?>
<?php if ($this->v['usersOnlineInvisible'] > 0) { ?>
	(<?php echo StringUtil::encodeHTML($this->v['usersOnlineInvisible']); ?> thereof are invisible)
<?php } ?>
<?php if ($this->v['usersOnlineGuests'] > 0 && $this->v['usersOnlineMembers'] > 0) { ?> and <?php } ?>
<?php if ($this->v['usersOnlineGuests'] > 0) { ?>
	<?php echo StringUtil::encodeHTML($this->v['usersOnlineGuests']); ?> guests
<?php } ?></p>
						<?php if (count($this->v['usersOnline'])) { ?>
							<p class="smallFont"><?php
$_length30603168865ecfa86094ebe8dce5020548c8afb9 = count($this->v['usersOnline']);
$_i30603168865ecfa86094ebe8dce5020548c8afb9 = 0;
foreach ($this->v['usersOnline'] as $this->v['userOnline']) { ?><a href="index.php?page=User&amp;userID=<?php echo $this->v['userOnline']['userID']; ?><?php echo SID_ARG_2ND; ?>"><?php echo $this->v['userOnline']['username']; ?></a><?php
if (++$_i30603168865ecfa86094ebe8dce5020548c8afb9 < $_length30603168865ecfa86094ebe8dce5020548c8afb9) { echo ', '; }
} ?></p>
							<?php if (INDEX_ENABLE_USERS_ONLINE_LEGEND && count($this->v['usersOnlineMarkings'])) { ?>
								<p class="smallFont">
								Legend: <?php
$_length9c4bbb0a9378f60e6444b34dde6ef298607b4231 = count($this->v['usersOnlineMarkings']);
$_i9c4bbb0a9378f60e6444b34dde6ef298607b4231 = 0;
foreach ($this->v['usersOnlineMarkings'] as $this->v['usersOnlineMarking']) { ?><?php echo $this->v['usersOnlineMarking']; ?><?php
if (++$_i9c4bbb0a9378f60e6444b34dde6ef298607b4231 < $_length9c4bbb0a9378f60e6444b34dde6ef298607b4231) { echo ', '; }
} ?>
								</p>
							<?php } ?>
						<?php } ?>
					</div>
				</div>
			<?php } ?>
			
			<?php if (count($this->v['similarThreads'])) { ?>
				<div <?php echo $this->pluginObjects['TemplatePluginFunctionCycle']->execute(array('name' => 'container'), $this); ?>>
					<div class="containerIcon"><img src="<?php echo StyleManager::getStyle()->getIconPath('similarThreadsM.png'); ?>" alt="" /></div>
					<div class="containerContent">
						<h3>Similar threads</h3>
						<ul class="similarThreads">
							<?php
if (count($this->v['similarThreads']) > 0) {
foreach ($this->v['similarThreads'] as $this->v['similarThread']) {
?>
								<li<?php if (BOARD_THREADS_ENABLE_MESSAGE_PREVIEW) { ?> title="<?php echo StringUtil::encodeHTML($this->v['similarThread']->firstPostPreview); ?>"<?php } ?>>
									<ul class="breadCrumbs">
										<li><a href="index.php?page=Board&amp;boardID=<?php echo $this->v['similarThread']->boardID; ?><?php echo SID_ARG_2ND; ?>"><img src="<?php echo StyleManager::getStyle()->getIconPath('boardS.png'); ?>" alt="" /> <span><?php $this->tagStack[] = array('lang', array()); ob_start(); ?><?php echo StringUtil::encodeHTML($this->v['similarThread']->title); ?><?php $_langb19c3127793248c36b50d6fe229162411b6782e8 = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_langb19c3127793248c36b50d6fe229162411b6782e8, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?></span></a> &raquo;</li>
										<li>
											<a href="index.php?page=Thread&amp;threadID=<?php echo $this->v['similarThread']->threadID; ?><?php echo SID_ARG_2ND; ?>"><img src="<?php echo StyleManager::getStyle()->getIconPath('threadS.png'); ?>" alt="" /> <?php if ($this->v['similarThread']->prefix) { ?><span class="prefix"><strong><?php $this->tagStack[] = array('lang', array()); ob_start(); ?><?php echo StringUtil::encodeHTML($this->v['similarThread']->prefix); ?><?php $_lang4386fc8fa39bf65780c9b88384d0c94e67ffd8c1 = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_lang4386fc8fa39bf65780c9b88384d0c94e67ffd8c1, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?></strong></span> <?php } ?><span><?php echo StringUtil::encodeHTML($this->v['similarThread']->topic); ?></span></a>
											<span class="light">(<?php echo $this->pluginObjects['TemplatePluginModifierShorttime']->execute(array($this->v['similarThread']->time), $this); ?>)</span>
										</li>
									</ul>
								</li>
							<?php } } ?>
						</ul>
					</div>
				</div>
			<?php } ?>
			
			<?php if (count($this->v['tags'])) { ?>
				<div <?php echo $this->pluginObjects['TemplatePluginFunctionCycle']->execute(array('name' => 'container'), $this); ?>>
					<div class="containerIcon"><img src="<?php echo StyleManager::getStyle()->getIconPath('tagM.png'); ?>" alt="" /></div>
					<div class="containerContent">
						<h3>Used tags</h3>
						<p class="smallFont"><?php
$_length47e742634feeea6104e1511b4297ff82ee480e56 = count($this->v['tags']);
$_i47e742634feeea6104e1511b4297ff82ee480e56 = 0;
foreach ($this->v['tags'] as $this->v['tag']) { ?><a href="index.php?page=TaggedObjects&amp;tagID=<?php echo $this->v['tag']->getID(); ?><?php echo SID_ARG_2ND; ?>"><?php echo StringUtil::encodeHTML($this->v['tag']->getName()); ?></a><?php
if (++$_i47e742634feeea6104e1511b4297ff82ee480e56 < $_length47e742634feeea6104e1511b4297ff82ee480e56) { echo ', '; }
} ?></p>
					</div>
				</div>
			<?php } ?>

			<?php if (isset($this->v['additionalBoxes'])) { ?><?php echo $this->v['additionalBoxes']; ?><?php } ?>
		</div>
	<?php } ?>
	
	<div class="pageOptions">
		<?php if (isset($this->v['additionalPageOptions'])) { ?><?php echo $this->v['additionalPageOptions']; ?><?php } ?>

		<?php if (MODULE_THREAD_MARKING_AS_DONE && $this->v['board']->enableMarkingAsDone && $this->v['this']->user->userID && $this->v['this']->user->userID == $this->v['thread']->userID && $this->v['board']->getPermission('canMarkAsDoneOwnThread') &&  ! $this->v['thread']->isDone) { ?>
			<a href="index.php?action=ThreadMarkAsDone&amp;threadID=<?php echo $this->v['thread']->threadID; ?>&amp;t=<?php echo SECURITY_TOKEN; ?><?php echo SID_ARG_2ND; ?>"><img src="<?php echo StyleManager::getStyle()->getIconPath('doneS.png'); ?>" alt="" /> <span>Set done</span></a>
		<?php } ?>

		<?php if ($this->v['this']->user->userID) { ?>
			<?php if ( ! $this->v['thread']->subscribed) { ?>
				<a href="index.php?action=ThreadSubscribe&amp;threadID=<?php echo $this->v['thread']->threadID; ?>&amp;t=<?php echo SECURITY_TOKEN; ?><?php echo SID_ARG_2ND; ?>"><img src="<?php echo StyleManager::getStyle()->getIconPath('subscribeS.png'); ?>" alt="" /> <span>Add to favorites</span></a>
			<?php } else { ?>
				<a href="index.php?action=ThreadUnsubscribe&amp;threadID=<?php echo $this->v['thread']->threadID; ?>&amp;t=<?php echo SECURITY_TOKEN; ?><?php echo SID_ARG_2ND; ?>"><img src="<?php echo StyleManager::getStyle()->getIconPath('unsubscribeS.png'); ?>" alt="" /> <span>Remove from favorites</span></a>
			<?php } ?>
		<?php } ?>
		
		<?php if ($this->v['enableRating'] && $this->v['board']->getPermission('canRateThread')) { ?>
			<?php if ($this->v['thread']->userRating === null || $this->v['thread']->userRating > 0) { ?>
				<script type="text/javascript" src="<?php echo RELATIVE_WBB_DIR; ?>js/Rating.class.js"></script>
				<form method="post" action="index.php?page=Thread">
					<div>
						<input type="hidden" name="threadID" value="<?php echo $this->v['thread']->threadID; ?>" />
						<?php echo SID_INPUT_TAG; ?>
						<input type="hidden" name="pageNo" value="<?php echo $this->v['pageNo']; ?>" />
						<input type="hidden" id="threadRating" name="rating" value="0" />

						<span class="hidden" id="threadRatingSpan"></span>

						<span>Rate this thread</span>

						<noscript>
							<div>
								<select id="threadRatingSelect" name="rating">
									<option value="1"<?php if ($this->v['thread']->userRating == 1) { ?> selected="selected"<?php } ?>>1</option>
									<option value="2"<?php if ($this->v['thread']->userRating == 2) { ?> selected="selected"<?php } ?>>2</option>
									<option value="3"<?php if ($this->v['thread']->userRating == 3) { ?> selected="selected"<?php } ?>>3</option>
									<option value="4"<?php if ($this->v['thread']->userRating == 4) { ?> selected="selected"<?php } ?>>4</option>
									<option value="5"<?php if ($this->v['thread']->userRating == 5) { ?> selected="selected"<?php } ?>>5</option>
								</select>
								<input type="image" class="inputImage" src="<?php echo StyleManager::getStyle()->getIconPath('submitS.png'); ?>" alt="Submit" />
							</div>
						</noscript>
					</div>
				</form>
				
				<script type="text/javascript">
					//<![CDATA[
					new Rating('threadRating', <?php echo intval($this->v['thread']->userRating); ?>);
					//]]>
				</script>
			<?php } ?>
		<?php } ?>
	</div>
	<?php
$outerTemplateName281ec89a69383386d597513f50f0b7fa71f1e64c = $this->v['tpl']['template'];
$this->includeTemplate('boardQuickJump', array(), (1 ? 1 : 0));
$this->v['tpl']['template'] = $outerTemplateName281ec89a69383386d597513f50f0b7fa71f1e64c;
$this->v['tpl']['includedTemplates']['boardQuickJump'] = 1;
?>
</div>

<?php
$outerTemplateName1341d00da683ba00f9b263070fe775ec127890f4 = $this->v['tpl']['template'];
$this->includeTemplate('footer', array(), (false ? 1 : 0));
$this->v['tpl']['template'] = $outerTemplateName1341d00da683ba00f9b263070fe775ec127890f4;
$this->v['tpl']['includedTemplates']['footer'] = 1;
?>
</body>
</html>