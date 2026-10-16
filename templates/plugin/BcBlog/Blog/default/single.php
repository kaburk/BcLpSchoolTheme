<?php
/**
 * BcLpSchoolTheme : baserCMS5 スクール LP テーマ
 *
 * ブログの記事詳細（お知らせの詳細）
 *
 * - 見出し：記事のタイトル、その上に日付とカテゴリ
 * - アイキャッチ画像（設定されていれば）→ 本文 → 詳細
 * - 前後の記事へのリンク、一覧へのリンク
 *
 * @var \BaserCore\View\BcFrontAppView $this
 * @var \BcBlog\Model\Entity\BlogPost $post ブログ記事
 */
$this->BcBaser->setDescription($this->BcBaser->getBlogTitle() . '｜' . $this->BcBaser->getBlogPostContent($post, false, false, 50));
$this->BcBaser->setTableToUpload('BcBlog.BlogPosts');
$this->BcBaser->setTitle($post->title);
?>
<section class="sc-psec">
	<div class="sc-wrap sc-wrap--narrow">
		<article class="sc-post">
			<div class="sc-phead sc-phead--post">
				<p class="sc-eyebrow"><?= h(strtoupper((string)$this->getRequest()->getAttribute('currentContent')?->name)) ?></p>
				<p class="sc-post__meta">
					<time datetime="<?= h($post->posted?->format('Y-m-d')) ?>"><?php $this->BcBaser->blogPostDate($post, 'Y.m.d') ?></time>
					<?php $this->BcBaser->blogPostCategory($post, ['class' => 'sc-post__category']) ?>
				</p>
				<h1 class="sc-phead__title"><?= h($post->title) ?></h1>
			</div>
			<?php if (!empty($post->eye_catch)): ?>
				<div class="sc-post__eyecatch"><?php $this->BcBaser->blogPostEyeCatch($post, ['link' => false]) ?></div>
			<?php endif ?>
			<div class="sc-post__body"><?php $this->BcBaser->blogPostContent($post) ?></div>
		</article>
		<nav class="sc-post__nav" aria-label="前後の記事">
			<span class="sc-post__prev"><?php $this->BcBaser->blogPostPrevLink($post, '← 前の記事') ?></span>
			<a class="sc-post__list" href="<?= h($this->BcBaser->getBlogContentsUrl($post->blog_content_id, false)) ?>"><?= h($this->BcBaser->getBlogTitle()) ?>の一覧へ</a>
			<span class="sc-post__next"><?php $this->BcBaser->blogPostNextLink($post, '次の記事 →') ?></span>
		</nav>
	</div>
</section>
