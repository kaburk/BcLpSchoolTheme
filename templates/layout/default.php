<?php
/**
 * BcLpSchoolTheme : baserCMS5 スクール LP テーマ
 *
 * レイアウト
 *
 * 呼出箇所：全ページ
 * @var \BaserCore\View\BcFrontAppView $this
 */
?>
<!DOCTYPE html>
<html lang="<?= h($this->BcBaser->getHtmlLang()) ?>">
<head>
	<?php $this->BcBaser->charset() ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $this->BcBaser->title() ?>
	<?php $this->BcBaser->metaDescription() ?>
	<?php $this->BcBaser->metaKeywords() ?>
	<?php $this->BcBaser->icon() ?>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@400;500;700&family=Zen+Maru+Gothic:wght@500;700&display=swap" rel="stylesheet">
	<?php $this->BcBaser->css('style') ?>
	<?php /* BurgerEditor の公開側スクリプト（地図・YouTube・画像ポップアップ）は jQuery が必要 */ ?>
	<?php $this->BcBaser->js('vendor/jquery-3.7.1.min') ?>
	<?php /* テーマ設定の色（/files/theme_configs/config.css）は scripts() の中で最後に出力される */ ?>
	<?php $this->BcBaser->scripts() ?>
	<?php $this->BcBaser->googleAnalytics() ?>
</head>
<body class="sc-body" id="<?php $this->BcBaser->contentsName() ?>">

<?php $this->BcBaser->func() ?>

<?php $this->BcBaser->header() ?>

<main class="sc-main" id="top">
	<?php $this->BcBaser->flash() ?>
	<?php $this->BcBaser->content() ?>
</main>

<?php $this->BcBaser->footer() ?>

<?php $this->BcBaser->js('site', true, ['defer' => true]) ?>
</body>
</html>
