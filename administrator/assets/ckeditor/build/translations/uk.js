(function(d){	const l = d['uk'] = d['uk'] || {};	l.dictionary=Object.assign(		l.dictionary||{},		{"%0 of %1":"%0 із %1","Align center":"По центру","Align left":"По лівому краю","Align right":"По правому краю",Aquamarine:"Аквамариновий",Big:"Великий",Black:"Чорний","Block quote":"Цитата",Blue:"Синій",Bold:"Жирний","Bulleted List":"Маркерний список",Cancel:"Відміна","Centered image":"Зображення по центру","Change image text alternative":"Змінити текстову альтернативу зображення","Characters: %0":"Символи: %0","Choose heading":"Оберіть заголовок",Code:"Код",Column:"Стовпець","Decrease indent":"Зменшити відступ",Default:"За замовчуванням","Delete column":"Видалити стовпець","Delete row":"Видалити рядок","Dim grey":"Темно-сірий","Document colors":"Кольори документу",Downloadable:"Завантажувальне","Dropdown toolbar":"Випадаюча панель інструментів","Edit link":"Редагувати посилання","Editor toolbar":"Панель інструментів редактора","Enter image caption":"Введіть підпис зображення","Font Color":"Колір шрифту","Font Family":"Сімейство шрифтів","Font Size":"Розмір шрифту","Full size image":"Повний розмір зображення",Green:"Зелений",Grey:"Сірий","Header column":"Заголовок стовпця","Header row":"Заголовок рядка",Heading:"Заголовок","Heading 1":"Заголовок 1","Heading 2":"Заголовок 2","Heading 3":"Заголовок 3","Heading 4":"Заголовок 4","Heading 5":"Заголовок 5","Heading 6":"Заголовок 6","Horizontal line":"Горизонтальна лінія",Huge:"Величезний","Image toolbar":"Панелі інструментів зображення","image widget":"Віджет зображення","Increase indent":"Збільшити відступ","Insert code block":"Вставте блок коду","Insert column left":"Вставити стовпець зліва","Insert column right":"Вставити стовпець справа","Insert image":"Вставити зображення","Insert media":"Вставити медіа","Insert paragraph after block":"","Insert paragraph before block":"","Insert row above":"Вставити рядок знизу","Insert row below":"Вставити рядок зверху","Insert table":"Вставити таблицю",Italic:"Курсив",Justify:"По ширині","Left aligned image":"Зображення ліворуч","Light blue":"Світло-синій","Light green":"Світло-зелений","Light grey":"Світло-сірий",Link:"Посилання","Link URL":"URL посилання","Media URL":"Медіа URL","media widget":"медіа віджет","Merge cell down":"Поєднати комірки внизу","Merge cell left":"Поєднати комірки ліворуч","Merge cell right":"Поєднати комірки праворуч","Merge cell up":"Поєднати комірки вгору","Merge cells":"Поєднати комірки",Next:"Наступний","Numbered List":"Нумерований список","Open in a new tab":"Вікрити у новій вкладці","Open link in new tab":"Відкрити посилання у новій вкладці",Orange:"Помаранчевий",Paragraph:"Параграф","Paste the media URL in the input.":"Вставте URL на медіа в інпут.","Plain text":"Простий текст",Previous:"Попередній",Purple:"Фіолетовий",Red:"Червоний",Redo:"Повтор","Remove color":"Видалити колір","Rich Text Editor":"Розширений текстовий редактор","Rich Text Editor, %0":"Розширений текстовий редактор, %0","Right aligned image":"Зображення праворуч",Row:"Рядок",Save:"Зберегти","Select all":"Вибрати все","Select column":"","Select row":"","Show more items":"Показати більше","Side image":"Бокове зображення",Small:"Маленький","Split cell horizontally":"Розділити комірки горизонтально","Split cell vertically":"Розділити комірки вертикально",Subscript:"Нижній індекс",Superscript:"Верхній індекс","Table toolbar":"Панель інструментів таблиці","Text alignment":"Вирівнювання тексту","Text alignment toolbar":"Панель інструментів вирівнювання тексту","Text alternative":"Текстова альтернатива","The URL must not be empty.":"URL не повинен бути порожнім.","This link has no URL":"Це посилання не має URL","This media URL is not supported.":"Даний медіа URL не підтримується.",Tiny:"Крихітний","Tip: Paste the URL into the content to embed faster.":"Вставте URL у вміст для швидкого перекладу.",Turquoise:"Бірюзовий",Underline:"Підкреслений",Undo:"Відміна",Unlink:"Видалити посилання","Upload failed":"Завантаження не вдалось","Upload in progress":"Виконується завантаження",White:"Білий","Widget toolbar":"Панель інструментів віджетів","Words: %0":"Слова: %0",Yellow:"Жовтий"}	);l.getPluralForm=function(n){return (n % 1 == 0 && n % 10 == 1 && n % 100 != 11 ? 0 : n % 1 == 0 && n % 10 >= 2 && n % 10 <= 4 && (n % 100 < 12 || n % 100 > 14) ? 1 : n % 1 == 0 && (n % 10 ==0 || (n % 10 >=5 && n % 10 <=9) || (n % 100 >=11 && n % 100 <=14 )) ? 2: 3);;};})(window.CKEDITOR_TRANSLATIONS||(window.CKEDITOR_TRANSLATIONS={}));