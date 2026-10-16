# BcLpSchoolTheme baserマーケット出品 入力値

フォームの欄の順に並べています。

## 基本情報

| 欄 | 入力値 |
|---|---|
| 公開ステータス | 非公開（承認後に公開） |
| テーマ・プラグイン名（商品名） | BcLpSchoolTheme |
| 種類 | 無料テーマ ／ レスポンシブデザイン |
| 販売価格（税抜） | 0 |
| カテゴリ | プロモーション、シンプル、baserCMS5対応 |
| バージョン | 1.0.0 |
| ファイル名 | BcLpSchoolTheme.zip |
| ファイルアップロード | `BcLpSchoolTheme.zip`（GitHub Release の zip と同じもの） |
| 対応バージョン | 5系：5.4.1、5.4.0 |
| 対応バージョン 備考 | baserCMS5.4以上。BurgerEditor（BcBurgerEditor）とブログ（BcBlog）プラグインが必要です。 |
| ライセンス | URLで指定する ／ 名称：MIT License ／ URL：https://github.com/kaburk/BcLpSchoolTheme/blob/main/LICENSE |
| 提供者 | 名称：kaburk ／ URL：https://blog.kaburk.com/ |
| Webサイト | 名称：（空欄） ／ URL：https://github.com/kaburk/BcLpSchoolTheme |
| デモサイト | 空欄 |
| サポートページ | 公式サイト以外 ／ 名称：（空欄） ／ URL：https://github.com/kaburk/BcLpSchoolTheme/issues |

## 説明概要（一覧画面・200文字以内：175文字）

```
baserCMS5.4以上向けの、習い事の教室・スクールのための1ページ LP テーマです。教室の特長・コースと料金・講師紹介・時間割・お知らせ（ブログ）・アクセス・体験レッスンの申し込みフォームまでを、BurgerEditor のブロック操作と管理画面の設定だけで編集できます。配色はテーマ設定の4色で変更でき、見本サイト一式の初期データ付きです。
```

メイン画像：`main.png`（500×500）

---

## 説明情報1

**説明見出し1**：このテーマについて

**説明詳細1**（エディタの「ソース」に貼る）

```html
<p>BcLpSchoolTheme は、習い事の教室・スクールの紹介と、体験レッスンの申し込みのための、1ページのランディングページ（LP）テーマです。</p>
<p>トップの固定ページ1枚に、セクションを BurgerEditor のブロックで並べる構成です。セクションの追加・削除・並べ替えは、ブロック操作だけでできます。</p>
<ul>
<li>ヒーロー／教室の特長／コース・料金（コースのカード・入会金などの表）／講師紹介／時間割／生徒さん・保護者の声／お知らせ／体験レッスンの流れ／よくある質問／アクセス（地図）／体験レッスンのお申し込み（CTA）</li>
<li>時間割は表で作ります。マスにコース名を書くと、コースごとに色が付きます</li>
<li>お知らせはブログ機能を使います。ブログ「お知らせ」に記事を書くと、LP のお知らせに最新3件が自動で並びます。記事の一覧・詳細ページも LP と同じデザインです</li>
<li>大見出しブロックの「ID設定」に英字（例 teachers）を入れると、ヘッダーのナビに自動で載ります</li>
<li>体験レッスンの申し込みフォームは入力 → 確認 → 完了の3画面。体験の希望日はカレンダーで選べます。項目はメールフィールドで追加・並べ替えできます</li>
<li>テーマ設定の4色（メイン／サブ／リンク／ホバー）で全体の配色が変わります。どの色にしても文字が読みやすいよう、文字の濃さと白黒を自動で調整します。ロゴもテーマ設定で変更できます</li>
<li>初期データ：見本サイト一式（default、お知らせの記事3件を含む）と最小構成（empty）</li>
<li>レスポンシブ（PC／スマホ）、prefers-reduced-motion 対応</li>
</ul>
```

**説明画像1**：`pc-1-hero.png`（PC：ヒーロー・教室の特長）

---

## 説明情報2

**説明見出し2**：動作環境とインストール

**説明詳細2**

```html
<h4>動作環境</h4>
<ul>
<li>baserCMS5.4以上</li>
<li>BurgerEditor（BcBurgerEditor）プラグインが有効であること</li>
<li>ブログ（BcBlog）プラグインが有効であること（お知らせに使います。baserCMS の標準プラグインです）</li>
</ul>
<h4>インストール</h4>
<ol>
<li>ダウンロードした zip を解凍し、フォルダ名が「BcLpSchoolTheme」であることを確認して plugins フォルダに配置します（管理画面からのアップロードも可能です）</li>
<li>管理画面 &gt; プラグイン管理 で BcBurgerEditor と BcBlog が有効になっていることを確認します</li>
<li>管理画面 &gt; テーマ管理 で BcLpSchoolTheme を適用します</li>
<li>同じ画面で初期データ「default」（見本サイト）または「empty」（最小構成）を読み込みます</li>
</ol>
<p><strong>初期データを読み込むと、ユーザー以外のデータ（固定ページ・メールフォーム・ブログ・サイト基本設定など）は初期化されます。運用中のサイトでは読み込まないでください。</strong></p>
```

**説明画像2**：`sp.png`（スマホ：ファーストビュー・コース・申し込みフォーム）

---

## 説明情報3

**説明見出し3**：編集のしかた

**説明詳細3**

```html
<h4>編集できる場所</h4>
<table>
<tr><th>内容</th><th>編集する場所</th></tr>
<tr><td>本文（全セクション）</td><td>固定ページ「トップページ」の BurgerEditor</td></tr>
<tr><td>お知らせの記事</td><td>ブログ「お知らせ」</td></tr>
<tr><td>ロゴ・配色</td><td>テーマ設定</td></tr>
<tr><td>ヘッダーのナビ</td><td>本文の大見出しブロックの「ID設定」（自動で作られる）</td></tr>
<tr><td>ヘッダーの「体験レッスンを申し込む」ボタンのリンク先</td><td>自動（公開中の最初のメールフォーム）</td></tr>
<tr><td>フォームの説明文・完了メッセージ・項目</td><td>メールフォームの設定・メールフィールド</td></tr>
<tr><td>フッター（教室名・住所・電話・受付時間・SNS）</td><td>ウィジェットエリア「フッター」のテキストウィジェット</td></tr>
</table>
<h4>本文ブロックの独自class</h4>
<p>ブロック設定の「独自class設定」に入れると、決まった見た目になります。</p>
<table>
<tr><th>独自class</th><th>使うブロック</th><th>見た目</th></tr>
<tr><td>sc-blk--hero</td><td>画像右寄せ（テキスト回り込み無し）</td><td>ヒーロー（写真が空なら丸と角丸の四角の図形）</td></tr>
<tr><td>sc-blk--section</td><td>大見出し</td><td>セクション見出し（ID設定でナビと英字ラベル）</td></tr>
<tr><td>sc-blk--nonav</td><td>大見出し（sc-blk--section と併用）</td><td>ナビに載せない</td></tr>
<tr><td>sc-blk--lead</td><td>1カラムテキスト</td><td>見出しの下のリード文</td></tr>
<tr><td>sc-blk--features</td><td>画像3列＋テキスト</td><td>教室の特長のカード（「01」は自動）</td></tr>
<tr><td>sc-blk--courses</td><td>画像3列＋テキスト</td><td>コースのカード（画像は使わない）</td></tr>
<tr><td>sc-blk--subhead</td><td>1カラムテキスト</td><td>セクションの中の小見出し</td></tr>
<tr><td>sc-blk--table</td><td>2カラムテーブル</td><td>角丸の枠の表（入会金・教材費など）</td></tr>
<tr><td>sc-blk--note</td><td>1カラムテキスト</td><td>表の下の小さな注記</td></tr>
<tr><td>sc-blk--teachers</td><td>画像3列＋テキスト</td><td>講師のカード</td></tr>
<tr><td>sc-blk--timetable</td><td>1カラムテキスト</td><td>時間割（表のマスのコース名で色分け）</td></tr>
<tr><td>sc-blk--voices</td><td>画像3列＋テキスト</td><td>声のカード（画像は使わない）</td></tr>
<tr><td>sc-blk--news</td><td>1カラムテキスト</td><td>段落に [Lp.news] と書くと、お知らせの最新3件が並ぶ</td></tr>
<tr><td>sc-blk--steps</td><td>1カラムテキスト</td><td>体験レッスンの流れ（4枚のカード）</td></tr>
<tr><td>sc-blk--faq</td><td>1カラムテキスト</td><td>よくある質問（質問ごとに開閉）</td></tr>
<tr><td>sc-blk--map</td><td>GoogleMaps</td><td>教室の地図（直後に sc-blk--info を置くと PC で2列）</td></tr>
<tr><td>sc-blk--info</td><td>2カラムテーブル</td><td>教室の情報の表</td></tr>
<tr><td>sc-blk--cta</td><td>1カラムテキスト</td><td>体験レッスンの CTA（ボタン・電話番号）</td></tr>
</table>
<p>ブロック設定の「背景色」は、テーマ色に置き換えています（ブルー＝メインのごく薄い色／グレー＝サブのごく薄い色／ピンク＝メインの薄い色）。</p>
<h4>コース名・電話番号を変えるとき</h4>
<p>コース名は、コース・料金・時間割・生徒さんの声のタグ・メールフィールド「希望のコース」に書かれています。電話番号・受付時間は、アクセスの表・体験レッスンの CTA・フッター・メールフォームの送信完了メッセージに書かれています。それぞれ直してください。</p>
```

**説明画像3**：`pc-2-courses.png`（PC：コース・料金）

---

## 説明情報4

**説明見出し4**：時間割・教室の地図と制限事項

**説明詳細4**

```html
<h4>時間割</h4>
<ul>
<li>1カラムテキストのブロックに表で作ります。1行目を曜日、1列目を開始時刻にします</li>
<li>マスにコース名を書くと色が付きます。色の順番は、コース・料金のカードの順です。レッスンのない枠は「—」と書きます</li>
</ul>
<h4>教室の地図（GoogleMaps ブロック）</h4>
<ul>
<li>管理画面 &gt; システム設定 &gt; サイト基本設定 で Google Maps API キーを登録してください</li>
<li>キーの Google Cloud プロジェクトで、Maps JavaScript API・Geocoding API・Maps Static API を有効にし、課金を設定してください</li>
<li>公開するサイトで使うキーには、HTTP リファラーの制限を設定してください</li>
</ul>
<h4>制限事項</h4>
<ul>
<li>コース名・電話番号などは各ブロックに直接書くため、変更時は複数の場所を直す必要があります</li>
<li>初期データを読み込むと、お知らせの記事の投稿日は、読み込んだ時刻になります（baserCMS のブログの仕様）</li>
<li>お知らせのショートコード [Lp.news] は、1カラムテキストのブロックに書いてください（埋め込みタグのブロックでは置き換わりません）</li>
</ul>
```

**説明画像4**：`pc-3-timetable.png`（PC：講師紹介・時間割）

---

## 説明情報5

**説明見出し5**：ソースコード・ライセンス

**説明詳細5**

```html
<p>ソースコードは GitHub で公開しています。不具合の報告・要望は Issues にお願いします。</p>
<p><a href="https://github.com/kaburk/BcLpSchoolTheme" target="_blank">https://github.com/kaburk/BcLpSchoolTheme</a></p>
<p>テーマ本体は MIT License です。同梱物・外部リソースのライセンスは次のとおりです。</p>
<ul>
<li>jQuery 3.7.1（同梱）：MIT License</li>
<li>jQuery UI 1.11.4（baserCMS 同梱のものを読み込み）：MIT License</li>
<li>Google Fonts（Zen Kaku Gothic New・Zen Maru Gothic、CDN から読み込み）：SIL Open Font License 1.1</li>
<li>アイコン：Lucide のアイコンをもとにしています（ISC License）</li>
</ul>
<p>ご利用は自己責任でお願いします。</p>
```

**説明画像5**：`form.png`（PC：体験レッスンの申し込みフォームの入力画面）

予備：`pc-4-flow.png`（PC：体験レッスンの流れ・よくある質問）。差し替えたいときに使う。

---

## リリース

| 欄 | 入力値 |
|---|---|
| リリース種別 | 新規公開申請 |
| リリースノート | 新規リリース |

---

## zip の確認結果

GitHub Release 1.0.0 の `BcLpSchoolTheme.zip` を作ったあとに確認して書く。

- 最上位フォルダ名が `BcLpSchoolTheme` か（解凍してそのまま plugins に置けるか）
- `config.php`・`config/setting.php`・`VERSION.txt`（1.0.0）・`screenshot.png`・初期データ（default／empty、BcBlog を含む）・`LICENSE`・`README.md` を含むか
- `.github`・`docs`・`.DS_Store`・作業用ファイルを含まないか
