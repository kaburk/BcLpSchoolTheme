<?php
/**
 * BcLpSchoolTheme : baserCMS5 スクール LP テーマ
 *
 * ブログの記事一覧（お知らせの一覧）
 *
 * - 見出しの上の英字：ブログのコンテンツ名（news → NEWS）
 * - 見出し：ブログのタイトル、その下にブログの説明文
 * - 記事の並びは LP のお知らせと同じ見た目（style.css の「お知らせの一覧」）
 *
 * @var \BaserCore\View\BcFrontAppView $this
 * @var \Cake\ORM\ResultSet $posts ブログ記事
 */
$this->BcBaser->setDescription($this->Blog->getDescription());
$this->BcBaser->setTableToUpload('BcBlog.BlogPosts');
$this->BcBaser->setTitle($this->BcBaser->getBlogTitle());
?>
<section class="sc-psec">
	<div class="sc-wrap sc-wrap--narrow">
		<?php $this->BcBaser->element('blog_head', ['title' => $this->BcBaser->getBlogTitle()]) ?>
		<?php if ($this->BcBaser->blogDescriptionExists()): ?>
			<div class="sc-psec__lead"><?php $this->BcBaser->blogDescription() ?></div>
		<?php endif ?>
		<?php $this->BcBaser->element('blog_list', ['posts' => $posts]) ?>
		<?php $this->BcBaser->pagination('simple') ?>
	</div>
</section>
