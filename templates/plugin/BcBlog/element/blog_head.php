<?php
/**
 * BcLpSchoolTheme : baserCMS5 スクール LP テーマ
 *
 * ブログの画面の見出し（英字のラベル＋見出し）
 *
 * - 英字のラベル：ブログのコンテンツ名（news → NEWS）
 *
 * @var \BaserCore\View\BcFrontAppView $this
 * @var string $title 見出し
 */
$label = strtoupper((string)$this->getRequest()->getAttribute('currentContent')?->name);
?>
<div class="sc-phead">
	<?php if ($label): ?>
		<p class="sc-eyebrow"><?= h($label) ?></p>
	<?php endif ?>
	<h1 class="sc-phead__title"><?= h($title) ?></h1>
</div>
