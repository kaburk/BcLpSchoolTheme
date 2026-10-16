<?php
/**
 * BcLpSchoolTheme : baserCMS5 スクール LP テーマ
 *
 * メールフォーム：確認
 *
 * @var \BcMail\View\MailFrontAppView $this
 * @var bool $freezed 確認画面かどうか（入力エラーのときは false）
 */
if ($freezed) {
	$this->Mailform->freeze();
} else {
	$this->BcBaser->element('form_datepicker');
}
?>
<section class="sc-fsec">
	<div class="sc-wrap">
		<div class="sc-fhead">
			<p class="sc-eyebrow">TRIAL LESSON</p>
			<h1 class="sc-fhead__title"><?php $this->BcBaser->contentsTitle() ?></h1>
		</div>
		<?php $this->BcBaser->element('lp_steps', ['current' => $freezed? 2 : 1]) ?>
		<div class="sc-fbox">
			<?php if ($freezed): ?>
				<p class="sc-fbox__lead">入力した内容をご確認のうえ、「送信する」を押してください。</p>
			<?php else: ?>
				<div class="sc-fbox__lead"><?php $this->Mail->description() ?></div>
			<?php endif ?>
			<?php $this->BcBaser->flash() ?>
			<div class="sc-form<?= $freezed? ' is-confirm' : '' ?>">
				<?php $this->BcBaser->element('mail_form') ?>
			</div>
		</div>
	</div>
</section>
