<?php
/**
 * BcLpSchoolTheme : baserCMS5 スクール LP テーマ
 *
 * ブログの記事の並び（一覧・アーカイブ）
 *
 * LP のお知らせ（BcBlog/Blog/default/posts.php）と同じ見た目にする（style.css の「お知らせの一覧」）
 *
 * @var \BaserCore\View\BcFrontAppView $this
 * @var \Cake\ORM\ResultSet $posts ブログ記事
 */
?>
<div class="sc-news">
	<?php if ($posts->count()): ?>
		<?php foreach ($posts as $post): ?>
			<?php $text = $this->Lp->getExcerpt($post->content) ?>
			<a class="sc-news__item" href="<?= h($this->BcBaser->getBlogPostLinkUrl($post)) ?>">
				<time class="sc-news__date" datetime="<?= h($post->posted?->format('Y-m-d')) ?>"><?php $this->BcBaser->blogPostDate($post, 'Y.m.d') ?></time>
				<span class="sc-news__body">
					<span class="sc-news__title"><?= h($post->title) ?></span>
					<?php if ($text !== ''): ?>
						<span class="sc-news__text"><?= h($text) ?></span>
					<?php endif ?>
				</span>
			</a>
		<?php endforeach ?>
	<?php else: ?>
		<p class="sc-news__empty">記事がありません。</p>
	<?php endif ?>
</div>
