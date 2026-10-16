<?php
/**
 * BcLpSchoolTheme : baserCMS5 スクール LP テーマ
 *
 * フッター
 *
 * - 主催者名・問い合わせ先：ウィジェットエリア（テキストウィジェット）で編集する
 * - コピーライト：サイト名と年から自動で出す
 *
 * @var \BaserCore\View\BcFrontAppView $this
 */
?>
<footer class="sc-footer">
	<div class="sc-wrap">
		<div class="sc-footer__inner">
			<?php $this->BcBaser->widgetArea() ?>
		</div>
		<small class="sc-footer__copy">&copy; <?= date('Y') ?> <?= h($this->Lp->getSiteLabel()) ?></small>
	</div>
</footer>
