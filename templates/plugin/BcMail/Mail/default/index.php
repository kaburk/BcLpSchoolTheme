<?php
/**
 * BcLpSchoolTheme : baserCMS5 スクール LP テーマ
 *
 * メールフォーム：入力
 *
 * - 見出し：メールフォームのタイトル
 * - リード文：メールフォーム設定の「説明文」
 * - 項目：メールフィールド（管理画面で追加・並べ替えできる）
 *
 * @var \BcMail\View\MailFrontAppView $this
 */
$this->BcBaser->element('form_datepicker');
?>
<section class="sc-fsec">
	<div class="sc-wrap">
		<div class="sc-fhead">
			<p class="sc-eyebrow">TRIAL LESSON</p>
			<h1 class="sc-fhead__title"><?php $this->BcBaser->contentsTitle() ?></h1>
		</div>
		<?php $this->BcBaser->element('lp_steps', ['current' => 1]) ?>
		<div class="sc-fbox">
			<div class="sc-fbox__lead"><?php $this->Mail->description() ?></div>
			<?php $this->BcBaser->flash() ?>
			<div class="sc-form">
				<?php $this->BcBaser->element('mail_form') ?>
			</div>
		</div>
	</div>
</section>
