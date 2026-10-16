<?php
/**
 * BcLpSchoolTheme : baserCMS5 スクール LP テーマ
 *
 * ブログの最新記事の一覧（LP のお知らせ）
 *
 * 呼出箇所：ショートコード [Lp.news]（LpHelper::news()）、$this->BcBaser->blogPosts()
 * ショートコードは本文の段落（<p>）の中で置き換わるので、段落の中に入れられる要素（a・span・time）だけで組む。
 * 見た目は style.css の「お知らせの一覧」。
 *
 * @var \BaserCore\View\BcFrontAppView $this
 * @var \Cake\ORM\ResultSet|array $posts ブログ記事
 */
if (!is_array($posts)) {
	$posts = $posts->toArray();
}
?>
<span class="sc-news">
	<?php if ($posts): ?>
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
		<span class="sc-news__more"><a href="<?= h($this->BcBaser->getBlogContentsUrl($posts[0]->blog_content_id, false)) ?>">お知らせの一覧へ</a></span>
	<?php else: ?>
		<span class="sc-news__empty">お知らせはまだありません。</span>
	<?php endif ?>
</span>
