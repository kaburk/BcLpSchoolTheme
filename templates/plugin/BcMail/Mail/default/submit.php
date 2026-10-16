<?php
/**
 * BcLpSchoolTheme : baserCMS5 スクール LP テーマ
 *
 * メールフォーム：完了
 *
 * 完了メッセージは、メールフォーム設定の「送信完了メッセージ」で編集する
 *
 * @var \BcMail\View\MailFrontAppView $this
 * @var \BcMail\Model\Entity\MailContent $mailContent
 */
use Cake\Core\Configure;

if (Configure::read('debug') == 0 && $mailContent->redirect_url) {
	$this->BcBaser->meta(['http-equiv' => 'Refresh'], null, ['content' => '5;url=' . $mailContent->redirect_url, 'block' => true]);
}
?>
<section class="sc-fsec">
	<div class="sc-wrap">
		<div class="sc-fhead">
			<p class="sc-eyebrow">TRIAL LESSON</p>
			<h1 class="sc-fhead__title"><?php $this->BcBaser->contentsTitle() ?></h1>
		</div>
		<?php $this->BcBaser->element('lp_steps', ['current' => 3]) ?>
		<div class="sc-fbox sc-done">
			<span class="sc-done__icon" aria-hidden="true"><svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg></span>
			<h2 class="sc-done__title">お申し込みを受け付けました</h2>
			<div class="sc-done__message">
				<?php if ($this->BcBaser->mailFormThanksExists()): ?>
					<?php $this->BcBaser->mailFormThanks() ?>
				<?php else: ?>
					<p>お申し込みいただき、ありがとうございます。内容を確認のうえ、ご連絡します。</p>
				<?php endif ?>
			</div>
			<a class="sc-btn sc-btn--lg" href="<?= h($this->BcBaser->getUrl('/')) ?>">教室のページに戻る</a>
		</div>
	</div>
</section>
