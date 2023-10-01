<?php

$protocol = $_SERVER['PROTOCOL'] = isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) ? 'https' : 'http';
$host = $protocol . '://' . $_SERVER['HTTP_HOST'];
$title = 'Title1123';
$description = 'Description';
$image = $host . '/images/podcast/main.jpg';
$redirect = $host . '/';

// Uncomment the code below and fill in the pages if necessary
$pages = [

];

$page = @$pages[$_GET['page']];

if ($page) {
	$title = !is_null(@$page['title']) ? $page['title'] : $title;
	$description = !is_null(@$page['description']) ? $page['description'] : $description;
	$image = !is_null(@$page['image']) ? $page['image'] : $image;
	$redirect = !is_null(@$page['redirect']) ? $page['redirect'] : "/{$_GET['page']}";
}

if ($_GET['page'] == 'result1') {
	$title = '«Какое розовое небо»';
	$description = 'Какое розовое небо, Какая тишь на берегу.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}

if ($_GET['page'] == 'result2') {
	$title = '«Уходил за водой...»';
	$description = 'Уходил за водой, а вернулся с котом под курткой, Мол, не больше ладони, не выживет – холода.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result3') {
	$title = '«Обманчиво притихшая погода»';
	$description = 'Обманчиво притихшая погода, И ясный день, и осень облетела';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result4') {
	$title = '«Снегопад»';
	$description = 'Снег обнимает город со всех концов. Я поднимаю голову к фонарю';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result5') {
	$title = '«Карантинное»';
	$description = 'Здравствуй, мой милый, мне снился чудесный сон. Там мы друг друга спокойно могли касаться';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result6') {
	$title = 'Летний дождь';
	$description = 'Тучи, порванные в клочья, Слез непролитых полны – Кто-то непременно хочет Пятна смыть с лица Луны.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result7') {
	$title = '«Пока стучат колеса в сонном поезде...»';
	$description = 'Пока стучат колеса в сонном поезде, не порть глаза за книжкой, лучше спи.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result8') {
	$title = '«Случайная встреча»';
	$description = 'В дешевой кофейне у моря под вечер За столиком круглым случайная встреча.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result9') {
	$title = '«И ничего здесь не будет...»';
	$description = 'И ничего здесь не будет, кроме Вечной тоски по зеленым кронам';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result10') {
	$title = '«Так тревожно багульник зацвел в апреле...»';
	$description = 'Так тревожно багульник зацвел в апреле, И в квартире запахло весною сразу';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result11') {
	$title = '«Диптих, 1.Я»';
	$description = 'За пазухой бережно слово я нес, теряя себя без остатка средь бурь небывалых и молний, и гроз дрожал как босая лошадка';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result12') {
	$title = '«Диптих, 2.ТЫ»';
	$description = 'Услышь, Как моя Марсельеза любви Течет по ступеням из клавиш,';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result13') {
	$title = '«В небе»';
	$description = 'В небе плывет неспешно Облако белым пуншем.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result14') {
	$title = '«Молитва»';
	$description = 'Не сосватана, не помолвлена, Своим сердцем с другим не связана';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result15') {
	$title = '«От Сириуса до Омеги»';
	$description = 'От Сириуса до Омеги, Туда, где в Лире светит Вега';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result16') {
	$title = '«Пузырит рубашку ветер»';
	$description = 'Пузырит рубашку ветер, Дарит скорость и полет.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result17') {
	$title = '«Золотистый листочек»';
	$description = 'Золотистый листочек упал на ладонь. И как будто согрел онемевшую руку.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result18') {
	$title = '«Прощание»';
	$description = 'Обнимаю тебя горизонтом, Руки-птицы ложатся на плечи...';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result19') {
	$title = '«Про Колю (со слов подруги)»';
	$description = 'Мне было тогда двенадцать. Мы с братом учились в школе.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result20') {
	$title = '«Твердят, что ты обманщик...»';
	$description = 'Твердят, что ты обманщик и безбожник, Далекий и не мой, как ни крути';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result21') {
	$title = '«Люби ее...»';
	$description = 'Люби ее. Она вполне достойна Твоей украсить жизни карнавал.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result22') {
	$title = '«Я вернулся, туда...»';
	$description = 'Я вернулся туда, где было тепло и сухо, Где старуха стирала белье, напевая романс.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result23') {
	$title = '«Настанет день...»';
	$description = 'Настанет день, я поднимусь, Надену туфли, сделаю прическу';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result24') {
	$title = '«Апрель, запах краски...»';
	$description = 'Апрель, запах краски и звук каблуков, Деревья с намеком на листья.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result25') {
	$title = '«Желание»';
	$description = 'Порождаешь такую тугую мглу В мирно дремлющем женском лоне,';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result26') {
	$title = '«На тучи солнце ясное обидится»';
	$description = 'На тучи солнце ясное обидится, С небес на город ляжет ночи тень.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result27') {
	$title = '«Снег метет...»';
	$description = 'Снег метет на Гнездниковском, Ветер воет на Тверской';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result28') {
	$title = '«Туманами да росой»';
	$description = 'Туманами да росой Я выйду к тебе босой: Нескошеные пути Нам посуху не пройти.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result29') {
	$title = '«На закате солнцу нужно верить...»';
	$description = 'На закате солнцу нужно верить... На закате солнце не обманет...<';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result30') {
	$title = '«Мое прекрасное одиночество.»';
	$description = 'Мое прекрасное одиночество, Моя уютная пустота...';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result31') {
	$title = '«Впереди восход»';
	$description = 'Впереди восход, Впереди восход, Позади закат.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result32') {
	$title = '«Протяни мне ладонь»';
	$description = 'Протяни мне ладонь – я в ответ протяну тебе счастье, Пусть оно засияет в твоих васильковых глазах...';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result33') {
	$title = 'Уважение»';
	$description = 'Уважают собаку за добрый нрав, Льва и тигра – за сильное тело.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result34') {
	$title = 'Не нужно джаза»';
	$description = 'Сижу на Волге, читаю Блока. И вместо канала шумит река.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result35') {
	$title = '«Тяжелый утренний подъем»';
	$description = 'Тяжелый утренний подъем, Автобус, давка – на работу.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result36') {
	$title = '«Больше жизни»';
	$description = 'Это все уже было, было: Эта ветка и этот свет За окном. Ты всегда любила';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result37') {
	$title = '«Любовь как цепь...»';
	$description = 'Любовь как цепь велосипедная – Зубец к зубцу. Я за тобою вечно следую';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result38') {
	$title = '«Не знаешь, что писать..»';
	$description = 'Не знаешь, что писать – спроси у пыли. А если нет ответов у земли – Спроси цветы, что к небу проросли, И облака, что издали приплыли.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result39') {
	$title = '«Он говорил...»';
	$description = 'Он говорил: «Квазары – твои глаза. Волосы – топь болот, тихий хвойный лес».';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result40') {
	$title = '«Да»';
	$description = 'Мне бы тебя никогда не встречать, Не поддаваться любви немедленно.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result41') {
	$title = '«В городе осень...»';
	$description = 'В городе осень и хнычет хандра, И никуда от нее не деться.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result42') {
	$title = '«А я бы в профиль Вас нарисовал»';
	$description = 'А я бы в профиль Вас нарисовал, Запечатлев весеннее мгновение.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result43') {
	$title = '«Искать созвучия с другими»';
	$description = 'Искать созвучия с другими, Искать трезвучия в себе.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result44') {
	$title = '«Может быть, мальва»';
	$description = 'Руки в карманы. Спускаюсь к мосту. Тени ложатся вуалями.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result45') {
	$title = '«Просто вглядеться в сердце»';
	$description = 'Просто вглядеться в сердце. В душу мою смори!';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result46') {
	$title = '«Меня называешь странной»';
	$description = 'Меня называешь странной, А я обнимаю зори, Закаты убрав в карманы, Сложив в чемоданы море.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result47') {
	$title = '«Я бегу, потому что так сердцу намного легче»';
	$description = 'Я бегу, потому что так сердцу намного легче, Не писать, не звонить, не искать ранним утром встречи,';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result48') {
	$title = '«Три грани любви»';
	$description = 'Преломляясь сквозь стену Любовной химеры Инфракрасное – Как хрусталь, эфемерно.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result49') {
	$title = '«Мы разбиваемся о небо»';
	$description = 'Мы разбиваемся о небо, Взлететь пытаясь; вновь и вновь';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result50') {
	$title = '«Только тихо...»';
	$description = 'Проезжая на «хёнде солярис» Мимо Знаменки, в центре столицы, Ты так плох, что не в силах сдержаться – При таксисте расплакаться стыдно.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result51') {
	$title = '«Мы с Тобой рождены не для неба»';
	$description = 'Мы с Тобой рождены не для неба – Нам милее родная земля,';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result52') {
	$title = '«Я истину пою»';
	$description = 'Я истину пою. Пожалуйста, пойми, Что лучшая в строю Не лучшая в любви,';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result53') {
	$title = '«Полу - »';
	$description = 'мне все с тобой как будто полумеры как надвое разбитые слова мы не решили, кто уходит первы';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result54') {
	$title = '«Способность чувствовать»';
	$description = 'Я не знаю уже, что съесть, что выпить, чтоб почувствовать снова себя собой отыскать то место, где выпал винтик';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result55') {
	$title = '«Ходят мимо люди-мимы»';
	$description = 'Ходят мимо люди-мимы, Натянув улыбку грима Чтоб потом неудержимо Плакать в тесном уголке.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result56') {
	$title = '«Воспоминание»';
	$description = 'На улице веяло йодом и морем – Далекого детства мечта для обоих.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result57') {
	$title = '«Сохрани, если хочешь»';
	$description = 'Сохрани, если хочешь, в альбоме Эти сумерки и фонари – Мне сегодня и нечего кроме Мокрых улиц тебе подарить.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result58') {
	$title = '«Я позабыла, что я Вас знала»';
	$description = 'Я позабыла, что я Вас знала. Миг первой встречи навеки стерт: Когда я вышла из стен вокзала';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result59') {
	$title = '«Не боюсь я быть забытой»';
	$description = 'Не боюсь я быть забытой, Стать кому-то днем вчерашним Растворенным в сером быте.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result60') {
	$title = '«Знаешь, солнце дает тень»';
	$description = 'Знаешь, солнце дает тень. Зажигалкой зажги свет. Завтра будет другой день';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result61') {
	$title = '«Если честно, я даже не знаю, что мне сказать»';
	$description = 'Если честно, я даже не знаю, что мне сказать... Мне казалось, любовь – это быть постоянно рядом';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result62') {
	$title = '«Желтые «цветы»';
	$description = 'О чем молчишь, все сбудется, поверь, А жизнь откроет новые границы.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result63') {
	$title = '«Если»';
	$description = 'Если есть сердце – надо любить, Если есть мысли – нужно творить, Если есть руки – строить пора,';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result64') {
	$title = '«Я теперь совсем другая»';
	$description = 'Я теперь совсем другая – Не зови меня. Для тебя я вновь чужая – Не ищи меня.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result65') {
	$title = '«Покуда женщина любима»';
	$description = 'Покуда женщина любима, Она и сердцем молода. И лишь без чувств необратимо Она стареет навсегда.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result66') {
	$title = '«Мелодия любви»';
	$description = 'Мелодия любви. Начало с кварты. Сладчайший звук для сердца и ума.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result67') {
	$title = '«Встреча с Тобой»';
	$description = 'Когда, забыв про сердца стук, Остатки крови в жилах стыли, Ты появилась как-то вдруг Оазисом среди пустыни.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result68') {
	$title = '«В моих словах нет хитрости и фальши...»';
	$description = 'В моих словах нет хитрости и фальши, И нет, быть может, искреннее слов: Мне хочется уйти с Тобой подальше От шумной суматохи городов.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result69') {
	$title = '«Повезло на свете бабам!»';
	$description = 'Отработав честно смену, От зари и до зари, Мчится баба, чтоб к обеду Ароматных щей сварить.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result70') {
	$title = '«Однажды, пережив потери»';
	$description = 'Однажды, пережив потери, Сто раз с небес скатившись вниз, Я отыщу родной мне берег, А вместе с ним – и жизни смысл.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result71') {
	$title = '«Фантомная любовь к добру не приведет»';
	$description = 'У каждого внутри есть кладбище людей, Которые ушли и отказались, От времени вдвоем и тех чудесных дней, Где вместе вы любовью наслаждались.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result72') {
	$title = '«В Туманном Альбионе судеб»';
	$description = 'Как бабочка в стеклянной банке, Я бьюсь за право быть любимой.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result73') {
	$title = '«Я называл тебя чудесной»';
	$description = 'Я называл тебя чудесной И обретал немало сил, Когда над грудой бессловесной Я это имя возносил.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result74') {
	$title = '«Прошлое»';
	$description = 'Я сегодня живу рыжей осенью, Синим небом и запахом сырости, А забытое прошлое с проседью Надо мною стремится возвыситься.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result75') {
	$title = '«Женщина»';
	$description = 'Ты с любовью ее не расстанешься, В теплых красках блаженного дня.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result76') {
	$title = '«Мы маялись на тесных боковых»';
	$description = 'Мы маялись на тесных боковых, Разбросанные порознь по вагону, Под детский не кончающийся гомон.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result77') {
	$title = '«Первый снег»';
	$description = 'Не я твой прерванный полет, не я смешала сон и явь, от кости кость, от плоти плот не я тебе, не я, не я.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result78') {
	$title = '«Endless»';
	$description = 'Пусть мы не рядом, но мысленно ты со мной.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result79') {
	$title = '«В холодной комнате одна...»';
	$description = 'В холодной комнате одна средь захламленного уюта.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result80') {
	$title = '«Знакомый взгляд»';
	$description = 'Знакомый взгляд. Расправленные плечи.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result81') {
	$title = '«О мой развенчанный король!»';
	$description = 'О мой развенчанный король! Я вспоминаю Вас украдкой, Как взяли душу мертвой хваткой, О, что за драма, что за боль!..';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result82') {
	$title = '«Мой страшный сон...»';
	$description = 'Мой страшный сон, в котором нет тебя, Где след остыл непонятой строкою.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result83') {
	$title = '«Снова руки твои обо мне и о нас»';
	$description = 'Снова руки твои обо мне и о нас, и глаза непристойно раздеты.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result84') {
	$title = '«Смущение тебе к лицу...»';
	$description = 'Смущение тебе к лицу – милее стала.. Разлило небо синеву – земля воспряла!.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result85') {
	$title = '«Вы женаты?»';
	$description = '«Вы женаты?» - «На Родине – да, Я в деревни влюблен, в города, Улиц липецких шум городской Не смешать с петербургской тоской.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result86') {
	$title = '«Возглас утопи в цветах»';
	$description = 'Возглас утопи в цветах, Милый друг, На тебя глядит с моста Петербург.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result87') {
	$title = '«Сердце предчувствует...»';
	$description = 'Сердце предчувствует что-то хорошее, сладко во мне содрогаются струны.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result88') {
	$title = '«Никуда от тебя не деться»';
	$description = 'Никуда от тебя не деться, ты – экстракт всех стихийных бедствий,';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result89') {
	$title = '«Не избежать друг друга, нет»';
	$description = 'Не избежать друг друга, нет, отгородившись городами.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result90') {
	$title = '«Когда весна склонит седую голову...»';
	$description = 'Когда весна склонит седую голову к твоим ногам, давай сбежим от горя и от города, где шум и гам.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result91') {
	$title = '«Лето солнцем рассветным взошло»';
	$description = 'Лето солнцем рассветным взошло, в шепот зелени город одело.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result92') {
	$title = '«Осень»';
	$description = 'Осень! Больше листьев! Мало! Хочется под листопад!';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result93') {
	$title = '«Окно закроется от ветра»';
	$description = 'Окно закроется от ветра – Я замолчу. И в знаках не ища ответа, Зажгу свечу.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result94') {
	$title = '«Неправдою друг друга опоили»';
	$description = 'Неправдою друг друга опоили, не ведали, как ноша непроста.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result95') {
	$title = '«Танец»';
	$description = 'Небрежно касается слуха мелодия И что-то цепляет в душе. Хоть, кажется, слишком взрослая вроде бы И не солидно уже...';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result96') {
	$title = '«Все хорошо»';
	$description = 'Все хорошо. Делю с тобой, как прежде, Одну планету, город, свет луны.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result97') {
	$title = '«Обновление»';
	$description = 'Вновь весна. Подобно чуду вновь весна. Подобно чуду Тает серый, грязный снег.';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}
if ($_GET['page'] == 'result98') {
	$title = '«наугад, смешно, непрочно»';
	$description = 'наугад, смешно, непрочно наугад, смешно, непрочно жизнь идет – и ладно,';
	$image = $host . '/assets/images/competition/share.jpg';
	$redirect = $host . '/competition/';
}


?>
<!doctype html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="<?= htmlspecialchars($description) ?>">
	<meta property="og:type" content="website">
	<meta property="og:title" content="<?= htmlspecialchars($title) ?>">
	<meta property="og:description" content="<?= htmlspecialchars($description) ?>">
	<? if (!preg_match("/facebook|facebot/i", $_SERVER['HTTP_USER_AGENT'])) { ?>
		<meta property="og:url" content="<?= htmlspecialchars($redirect) ?>">
	<? } ?>
	<meta property="og:image" content="<?= htmlspecialchars($image) ?>">
	<meta property="og:image:type" content="image/jpeg">
	<meta property="og:image:width" content="1936">
	<meta property="og:image:height" content="1008">
	<meta property="og:locale" content="ru_RU">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="<?= htmlspecialchars($title) ?>">
	<meta name="twitter:description" content="<?= htmlspecialchars($description) ?>">
	<meta name="twitter:image" content="<?= htmlspecialchars($image) ?>"/>
	<title><?= $title ?></title>
</head>
<? if (preg_match("/facebook|facebot/i", $_SERVER['HTTP_USER_AGENT'])) { ?>
<body>
<? } else { ?>
	<body onload="window.location = '<?= $redirect ?>'"></body>
<? } ?>
</html>
