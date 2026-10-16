/**
 * BcLpSchoolTheme : baserCMS5 スクール LP テーマ
 *
 * 共通 JS（jQuery 不要）
 * - SP メニューの開閉
 * - セクション見出しの英字ラベル（ブロックの ID から生成）
 * - コース・料金の月謝の数字を大きくする
 * - 時間割のマスをコース名で色分けする
 * - よくある質問の開閉（最初の1問だけ開く）
 * - メールフォームの確認画面で、チェックボックスの値を表示する
 * - メールフォームの送信モード設定（BcMail の form-submit.js の代わり）
 */
(function () {
	'use strict';

	// SP メニュー
	var burger = document.querySelector('[data-sc-drawer-toggle]');
	var drawer = document.getElementById('sc-drawer');
	if (burger && drawer) {
		var setMenu = function (open) {
			burger.setAttribute('aria-expanded', open ? 'true' : 'false');
			burger.setAttribute('aria-label', open ? 'メニューを閉じる' : 'メニューを開く');
			drawer.hidden = !open;
		};
		burger.addEventListener('click', function () { setMenu(drawer.hidden); });
		drawer.querySelectorAll('a').forEach(function (a) {
			a.addEventListener('click', function () { setMenu(false); });
		});
		document.addEventListener('keydown', function (e) {
			if (e.key === 'Escape' && !drawer.hidden) { setMenu(false); burger.focus(); }
		});
	}

	// セクション見出しの英字ラベル：ID「bge-course-and-price」→「COURSE & PRICE」（見出しの枠に付け、見出しの上に出す）
	document.querySelectorAll('.bge-contents > .sc-blk--section[id^="bge-"]').forEach(function (el) {
		var label = el.id.replace(/^bge-/, '').replace(/-and-/g, ' & ').replace(/[-_]+/g, ' ').toUpperCase();
		var box = el.querySelector('.bgt-title-h2-container');
		if (label && box) { box.setAttribute('data-sc-label', label); }
	});

	// コース・料金：最後の「<strong>月謝</strong>8,000円」の数字と単位を分ける（数字を大きくする）
	document.querySelectorAll('.sc-blk--courses .bge-ckeditor').forEach(function (box) {
		var rows = box.querySelectorAll(':scope > p');
		var row = null;
		rows.forEach(function (p) {
			if (p.firstElementChild && p.firstElementChild.tagName === 'STRONG' && p.firstChild === p.firstElementChild) { row = p; }
		});
		if (!row) { return; }
		Array.prototype.some.call(row.childNodes, function (node) {
			if (node.nodeType !== 3) { return false; }
			var m = node.nodeValue.match(/^(\s*)(\d[\d,.]*)(.*)$/s);
			if (!m) { return false; }
			var frag = document.createDocumentFragment();
			var num = document.createElement('span');
			num.className = 'sc-num';
			num.textContent = m[2];
			frag.appendChild(num);
			if (m[3].trim()) {
				var unit = document.createElement('span');
				unit.className = 'sc-unit';
				unit.textContent = m[3].trim();
				frag.appendChild(unit);
			}
			// 項目名（strong）と値を、グリッドの2つのマスに分ける
			var value = document.createElement('span');
			value.appendChild(frag);
			node.parentNode.replaceChild(value, node);
			return true;
		});
	});

	// 時間割：マスの文字（コース名）で色分けする
	// 色の順番は、コース・料金のカードのコース名の順（載っていないコース名は、時間割に出てきた順に続ける）
	var tables = document.querySelectorAll('.sc-blk--timetable table');
	if (tables.length) {
		var names = [];
		document.querySelectorAll('.sc-blk--courses .bge-ckeditor > h3').forEach(function (h3) {
			var name = h3.textContent.trim();
			if (name && names.indexOf(name) === -1) { names.push(name); }
		});
		tables.forEach(function (table) {
			table.querySelectorAll('td').forEach(function (td) {
				var text = td.textContent.trim();
				if (!text || td.children.length) { return; }
				var chip = document.createElement('span');
				chip.className = 'sc-lesson';
				chip.textContent = text;
				if (/^[-—―‐ー－]+$/.test(text)) {
					// 空きのマス：見た目は「—」、読み上げは「なし」
					chip.className += ' sc-lesson--none';
					chip.setAttribute('aria-hidden', 'true');
					var sr = document.createElement('span');
					sr.className = 'sc-visually-hidden';
					sr.textContent = 'なし';
					td.textContent = '';
					td.appendChild(chip);
					td.appendChild(sr);
					return;
				}
				var i = names.indexOf(text);
				if (i === -1) { names.push(text); i = names.length - 1; }
				chip.className += ' sc-lesson--' + (i % 3 + 1);
				td.textContent = '';
				td.appendChild(chip);
			});
		});
	}

	// よくある質問：h3 の中にボタンを入れ、直後の回答を開閉する（最初の1問だけ開く）
	document.querySelectorAll('.sc-blk--faq .bge-ckeditor').forEach(function (box, boxIndex) {
		box.querySelectorAll('h3').forEach(function (h3, i) {
			var answers = [];
			var next = h3.nextElementSibling;
			while (next && next.tagName !== 'H3') { answers.push(next); next = next.nextElementSibling; }
			if (!answers.length) { return; }
			var id = 'sc-faq-' + boxIndex + '-' + i;
			var btn = document.createElement('button');
			btn.type = 'button';
			btn.className = 'sc-faq__toggle';
			btn.setAttribute('aria-controls', id);
			while (h3.firstChild) { btn.appendChild(h3.firstChild); }
			h3.appendChild(btn);
			answers[0].id = id;
			var set = function (open) {
				btn.setAttribute('aria-expanded', open ? 'true' : 'false');
				h3.classList.toggle('is-collapsed', !open);
				answers.forEach(function (a) { a.hidden = !open; });
			};
			set(i === 0);
			btn.addEventListener('click', function () { set(btn.getAttribute('aria-expanded') !== 'true'); });
		});
	});

	// メールフォームの確認画面：チェックボックスの値は hidden でしか出ないので、文字として表示する
	document.querySelectorAll('.sc-form.is-confirm span[id^="FieldMessage"]').forEach(function (span) {
		if (span.textContent.trim()) { return; }
		var values = [];
		span.querySelectorAll('input[type="hidden"][name$="[]"]').forEach(function (input) {
			if (input.value) { values.push(input.value); }
		});
		if (values.length) { span.appendChild(document.createTextNode(values.join('、'))); }
	});

	// メールフォーム：押したボタンに応じて mode を設定（Confirm / Back / Submit）
	var mode = document.getElementById('MailMessageMode');
	if (mode) {
		document.querySelectorAll('.form-submit').forEach(function (btn) {
			btn.addEventListener('click', function () {
				btn.style.pointerEvents = 'none';
				mode.value = (btn.id || '').replace('BtnMessage', '');
			});
		});
	}
})();
