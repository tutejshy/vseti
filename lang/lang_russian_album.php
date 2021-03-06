<?

//############# Translated by Gooos for album v.2.5 #######################

// SET GENERAL VARIABLES, AVAILABLE ON EVERY PAGE
$header_album[1] = "Альбом";
$header_album[2] = "Фотоальбомы";
$header_album[3] = "все";
$header_album[4] = "Без названия";
$header_album[5] = "Обновлено";

// ASSIGN ALL SMARTY GENERAL ALBUM VARIABLES
reset($header_album);
while(list($key, $val) = each($header_album)) {
  $smarty->assign("header_album".$key, $val);
}



// ASSIGN ALL CLASS/FUNCTION FILE VARIABLES
$class_album[1] = "У Вас недостаточно свободного места для загрузки ";

$functions_album[1] = "Альбом создан ";
$functions_album[2] = "альбомы";
$functions_album[3] = "Без названия";
$functions_album[4] = "Медиа добавлено ";


// SET LANGUAGE PAGE VARIABLES
switch ($page) {

  case "admin_album":
	$admin_album[1] = "Параметры альбома";
	$admin_album[2] = "Эта страница содержит общие настройки альбома, которые затрагивают всю Вашу социальную сеть.";
	$admin_album[3] = "Ваши изменения были сохранены.";
	$admin_album[4] = "Тема";
	$admin_album[5] = "Сообщение";
	$admin_album[6] = "Новые комментарии к альбомам";
	$admin_album[7] = "Это письмо отправится пользователю, когда будет размещен новый комментарий к одной из фотографий или файлу.";
	$admin_album[8] = "[username] - заменяется на имя пользователя получателя.<br>[commenter] - заменяется на имя пользователя, который разместил комментарий.<br>[link] - заменяется на ссылку на фотографию.";
	$admin_album[9] = "Сохранить изменения";
	$admin_album[10] = "Настройки просмотра по умолчанию";
	$admin_album[11] = "Выберите, хотели ли бы Вы разрешить общественности (посетителям, которые не зарегистрированы) просмотр следующих разделов Вашей социальной сети. В некоторых случаях (например, профили, блоги и Альбомы), если Вы дали им возможность, пользователи смогут сделать свои страницы частным, даже если открыт широкий доступ здесь. Для получения дополнительных настроек, пожалуйста, посетите страницу <a href='admin_general.php'>Главные настройки</a>.";
	$admin_album[12] = "Альбомы";
	$admin_album[13] = "Да, общественность может просматривать альбомы, даже если они приватные.";
	$admin_album[14] = "Нет, общественность не может просматривать альбомы.";
	break;

  case "admin_levels_albumsettings":
	$admin_levels_albumsettings[1] = "Параметры альбома";
	$admin_levels_albumsettings[2] = "Если у Вас есть возможность позволить пользователям иметь альбомы, то Вы можете скорректировать их подробности на этой странице.";
	$admin_levels_albumsettings[3] = "Разрешить альбомы?";
	$admin_levels_albumsettings[4] = "Хотите, чтобы у пользователей были альбомы? Если установить на нет, то все остальные настройки на данной странице не будут применяться.";
	$admin_levels_albumsettings[5] = "Да, разрешить альбомы.";
	$admin_levels_albumsettings[6] = "Нет, не разрешать альбомы.";
	$admin_levels_albumsettings[7] = "Разрешённые типы файлов";
	$admin_levels_albumsettings[8] = "Список следующих расширений файлов, которые пользователи могут загрузить. Отдельные расширения файлов разделяются запятыми, например: jpg, gif, jpeg, png, bmp";
	$admin_levels_albumsettings[9] = "Разрешенные типы MIME";
	$admin_levels_albumsettings[10] = "Чтобы успешно загрузить файл, он должен иметь разрешённое расширение так же как и разрешённый тип MIME. Это препятствует пользователям маскировать злонамеренные файлы с поддельным расширением. Отдельные типы MIME разделяются запятыми, например: image/jpeg, image/gif, image/png, image/bmp";
	$admin_levels_albumsettings[11] = "Разрешённое дисковое пространство";
	$admin_levels_albumsettings[12] = "Сколько свободного пространства необходимо иметь каждому пользователю, что-бы хранить свои файлы?";
	$admin_levels_albumsettings[13] = "без лимита";
	$admin_levels_albumsettings[14] = "Сохранить изменения";
	$admin_levels_albumsettings[15] = "Ваши изменения были сохранены.";
	$admin_levels_albumsettings[16] = "Максимальный размер файла";
	$admin_levels_albumsettings[17] = "Введите максимальный размер для загружаемых файлов в КБ. Это должна быть величина между 1 и 204800.";
	$admin_levels_albumsettings[18] = "Ваш максимальный размер файла - поле должно содержать целое число от 1 до 204800.";
	$admin_levels_albumsettings[19] = "Максимальная ширина и высота - поля должны содержать целые числа от 1 до 9999.";
	$admin_levels_albumsettings[20] = "Введите ширину и высоту (в пикселях) картинок, загруженных в альбомы. Изображения с размерами вне этого диапазона будут уменьшены соответственно, если на Вашем сервере установлена GD библиотека. Заметим, что необычное изображение типа TIFF, RAW, а другие не могут быть изменены.";
	$admin_levels_albumsettings[21] = "Макс. ширина:";
	$admin_levels_albumsettings[22] = "Mакс. высота:";
	$admin_levels_albumsettings[23] = "(в пикселах, целое число от 1 до 9999)";
	$admin_levels_albumsettings[24] = "Разрешить пользовательские CSS стили?";
	$admin_levels_albumsettings[25] = "Если эта функция включена, пользователи смогут настраивать цвета и шрифты в альбомах путем изменения их стилей CSS. ";
	$admin_levels_albumsettings[26] = "Да, включить пользовательские CSS стили.";
	$admin_levels_albumsettings[27] = "Нет, отключить пользовательские CSS стили.";
	$admin_levels_albumsettings[28] = "Разрешённый максимум альбомов";
	$admin_levels_albumsettings[29] = "Введите максимально допустимое число альбомов. Поле должно содержать целое число от 1 до 999.";
	$admin_levels_albumsettings[30] = "Максимально разрешено альбомов - поле должно содержать целое число от 1 до 999.";
	$admin_levels_albumsettings[31] = "допускается альбомов";
	$admin_levels_albumsettings[32] = "<b>Приватные опции для поиска</b><br>Если эта функция включена, пользователи смогут исключать их альбомы из результатов поиска. В противном случае все альбомы будут включены в результаты поиска.";
	$admin_levels_albumsettings[33] = "Да, давать пользователям возможность исключать их альбомы из результатов поиска.";
	$admin_levels_albumsettings[34] = "Нет, все альбомы будут включены в результаты поиска.";
	$admin_levels_albumsettings[35] = "Редактирование уровней пользователя:";
	$admin_levels_albumsettings[36] = "Вы в настоящее время редактируете настройки данных пользовательских уровней. Помните, что эти настройки применяются только к пользователям, которые относятся к данному пользовательскому уровню. Когда Вы закончите, то можете редактировать <a href='admin_levels.php'>другие уровни</a>.";

	$admin_levels_albumsettings[38] = "Альбом - параметры конфиденциальности";
	$admin_levels_albumsettings[39] = "<b>Секретность альбома</b><br>Пользователи могут выбрать любой из вариантов ниже, когда они решают, кто может видеть их альбом. Если Вы не измените опции, то каждый будет иметь возможность просматривать альбом.";
	$admin_levels_albumsettings[40] = "<b>Комментарии к альбому</b><br>Пользователи могут выбрать любой из вариантов ниже, когда они решают, кто может отправлять комментарии на их записи в блогах. Если Вы не измените опции, то каждый будет иметь возможность оставлять комментарии.";
	break;

  case "admin_viewalbums":
	$admin_viewalbums[1] = "Просмотр альбомов";
	$admin_viewalbums[2] = "Эта страница содержит список всех файлов в альбомов, созданных пользователями из Вашей социальной сети. В зависимости от настроек, указанных в этой панели управления, пользователи могут создавать альбомы и использовать их для загрузки фотографии, музыки, видео и других файлов. Вы можете использовать эту страницу, чтобы отслеживать эти альбомы и удалять оскорбительные материалы при необходимости. Ввод критериев в поля фильтра поможет Вам найти конкретные альбомы. Если поля фильтра оставить пустыми, то будут показаны все альбомы в Вашей социальной сети.";
	$admin_viewalbums[3] = "Название";
	$admin_viewalbums[4] = "Владелец";
	$admin_viewalbums[5] = "Фильтр";
	$admin_viewalbums[6] = "ID";
	$admin_viewalbums[7] = "Файлы";
	$admin_viewalbums[8] = "Используемое пространство";
	$admin_viewalbums[9] = "Опции";
	$admin_viewalbums[10] = "просмотр";
	$admin_viewalbums[11] = "удалить";
	$admin_viewalbums[12] = "Найдены альбомы";
	$admin_viewalbums[13] = "Страница:";
	$admin_viewalbums[14] = "Удалить альбом";
	$admin_viewalbums[15] = "Вы действительно хотите удалить этот альбом? Внимание: Все изображения в этом альбоме будет также удалены.";
	$admin_viewalbums[16] = "Отмена";
	$admin_viewalbums[17] = "Альбомы не найдены.";
	$admin_viewalbums[18] = "Без названия";
	$admin_viewalbums[19] = "Удалить выбранное";
	break;

  case "album":
	$album[1] = "Альбом, что Вы ищете был удален или не существует.";
	$album[2] = "У Вас нет разрешения на просмотр этого альбома.";
	$album[3] = " - Альбом:";
	$album[4] = "Без названия";
	$album[5] = " ";
	$album[6] = "альбомы";
	$album[7] = "Произошла ошибка";
	$album[8] = "Вы должны войти в систему, чтобы просмотреть эту страницу. <a href='login.php'>Нажмите здесь</a> чтобы войти.";
	$album[9] = "Предыдущая страница";
	$album[10] = "просмотр фото";
	$album[11] = "из";
	$album[12] = "просмотр фото";
	$album[13] = "Следующая страница";
	$album[14] = "Назад";
	break;

  case "album_file":
	$album_file[1] = "Альбом, который Вы ищете был удален или не существует.";
	$album_file[2] = "У Вас нет разрешения для просмотра этого файла.";
	$album_file[3] = "Без названия";
	$album_file[4] = " ";
	$album_file[5] = "альбомы";
	$album_file[6] = "загрузить аудио";
	$album_file[7] = "загрузить видео";
	$album_file[8] = "загрузить этот файл";
	$album_file[9] = "Вернуться к альбомам ";
	$album_file[10] = "";
	$album_file[11] = "Добавить";
	$album_file[12] = "Пожаловаться на непристойное содержание";
	$album_file[13] = "Комментарии";
	$album_file[14] = "Добавление...";
	$album_file[15] = "Пожалуйста напишите сообщение.";
	$album_file[16] = "Вы ввели неверный код безопасности.";
	$album_file[17] = "Произошла ошибка";
	$album_file[18] = "Вы должны войти в систему, чтобы просмотреть эту страницу. <a href='login.php'>Нажмите здесь</a> чтобы войти.";
	$album_file[19] = "Аноним";
	$album_file[20] = "Напишите что-нибудь...";
	$album_file[21] = "Введите цифры, которые Вы видите на этом изображении, в поле справа. Это помогает защитить наш сайт от спама.";
	$album_file[22] = " | ";  //THESE CHARACTERS ARE BEING ESCAPED BECAUSE THEY ARE BEING USED IN A DATE FUNCTION
	$album_file[23] = "сообщение";
	$album_file[24] = "Назад";
	break;

  case "albums":
	$albums[1] = "Альбом, который Вы ищете был удален или не существует.";
	$albums[2] = " - альбомы";
	$albums[3] = "У этого пользователя нет никаких альбомов.";
	$albums[4] = "Без названия";
	$albums[5] = "Обновлено:";
	$albums[6] = "Произошла ошибка";
	$albums[7] = "Вам нужно войти в систему для просмотра этой страницы. <a href='login.php'>Вход</a>.";
	$albums[8] = "Назад";
	break;

  case "user_album":
	$user_album[1] = "Мои альбомы";
	$user_album[2] = "Параметры альбома";
	$user_album[3] = "Альбомы моих друзей";
	$user_album[4] = "Мои альбомы";
	$user_album[5] = "У Вас";
	$user_album[6] = "альбом(ов) и";
	$user_album[7] = "фотография(й).";
	$user_album[8] = "MB оставшегося свободного места.";
	$user_album[9] = "Создать Новый Альбом";
	$user_album[10] = "Ссылка на мой альбом:";
	$user_album[11] = "Без названия";
	$user_album[12] = "Создан:";
	$user_album[13] = "Обновлён:";
	$user_album[14] = "Файлы:";
	$user_album[15] = "фотографии";
	$user_album[16] = "Просмотры:";
	$user_album[17] = "просмотров";
	$user_album[18] = "Могут смотреть:";
	$user_album[19] = "Смотреть альбом";
	$user_album[20] = "Редактировать альбом";
	$user_album[21] = "Удалить альбом";
	$user_album[22] = "У Вас нет ни одного альбома.";
	$user_album[23] = "Создать альбом, начать загружать файлы.";
	break;

  case "user_album_add":
	$user_album_add[1] = "Пожалуйста введите имя для этого альбома.";
	$user_album_add[2] = "Мои альбомы";
	$user_album_add[3] = "Параметры альбома";
	$user_album_add[4] = "Альбомы моих друзей";
	$user_album_add[5] = "Создать Новый Альбом";
	$user_album_add[6] = "Напишите не много о Вашем новом альбоме.";
	$user_album_add[7] = "У Вас уже есть максимально допустимое число альбомов. Вы должны удалить некоторые Ваши старые альбомы, прежде чем Вы сможете создать новый.";
	$user_album_add[8] = "Возврат к моему Альбому";
	$user_album_add[9] = "Имя Альбома:";
	$user_album_add[10] = "Описание Альбома:";
	$user_album_add[11] = "Включить этот альбом в поиск/просмотр результатов?";
	$user_album_add[12] = "Да, включить этот альбом в поиск/просмотр результатов.";
	$user_album_add[13] = "Нет, не включать этот альбом в поиск/просмотр результатов.";
	$user_album_add[14] = "Кто может просматривать Ваш альбом?";
	$user_album_add[15] = "Кто может оставлять комментарии к Вашему альбому?";
	$user_album_add[16] = "Добавить Альбом";
	$user_album_add[17] = "Отмена";
	break;

  case "user_album_comments":
	$user_album_comments[1] = "Мои альбомы";
	$user_album_comments[2] = "Параметры альбома";
	$user_album_comments[3] = "Альбомы моих друзей";
	$user_album_comments[4] = "Комментарии к фотографии";
	$user_album_comments[5] = "Для удаления комментариев, отметьте их галочкой и затем нажмите кнопку \"Удалить отмеченное\" в конце списка комментариев..";
	$user_album_comments[6] = "Вернуться к фотографиям";
	$user_album_comments[7] = "Предыдущая страница";
	$user_album_comments[8] = "просмотр комментариев";
	$user_album_comments[9] = "из";
	$user_album_comments[10] = "просмотр комментариев";
	$user_album_comments[11] = "Следующая страница";
	$user_album_comments[12] = "Никто не написал ни одного комментария к этой фотографии.";
	$user_album_comments[13] = "Аноним";
	$user_album_comments[14] = "Удалить выбранное";
	$user_album_comments[15] = "выбрать все комментарии";
	$user_album_comments[16] = " | ";  //THESE CHARACTERS ARE BEING ESCAPED BECAUSE THEY ARE BEING USED IN A DATE FUNCTION
	break;

  case "user_album_delete":
	$user_album_delete[1] = "Мои альбомы";
	$user_album_delete[2] = "Параметры альбома";
	$user_album_delete[3] = "Альбомы моих друзей";
	$user_album_delete[4] = "Удалить Альбом";
	$user_album_delete[5] = "Вы действительно хотите удалить этот альбом? Все файлы и фотографии этого альбома будут удалены!";
	$user_album_delete[6] = "Удалить Альбом";
	$user_album_delete[7] = "Отмена";
	break;

  case "user_album_edit":
	$user_album_edit[1] = "Без названия";
	$user_album_edit[2] = "Ваши изменения были сохранены.";
	$user_album_edit[3] = "Мои альбомы";
	$user_album_edit[4] = "Параметры альбома";
	$user_album_edit[5] = "Альбомы моих друзей";
	$user_album_edit[6] = "Изменить детали Альбома";
	$user_album_edit[7] = "На этой странице можно изменить название альбома, описание, или уровень конфиденциальности.";
	$user_album_edit[8] = "Вернуться к фотографиям";
	$user_album_edit[9] = "Имя Альбома:";
	$user_album_edit[10] = "Описание Альбома:";
	$user_album_edit[11] = "Включить этот альбом в поиск/просмотр результатов?";
	$user_album_edit[12] = "Да, включить этот альбом в поиск/просмотр результатов.";
	$user_album_edit[13] = "Нет, не включать этот альбом в поиск/просмотр результатов.";
	$user_album_edit[14] = "Кто может просматривать этот альбом?";
	$user_album_edit[15] = "Кто может оставлять комментарии к этому альбому?";
	$user_album_edit[16] = "Сохранить изменения";
	$user_album_edit[17] = "Отмена";
	break;

  case "user_album_friends":
	$user_album_friends[1] = "Мои альбомы";
	$user_album_friends[2] = "Параметры альбома";
	$user_album_friends[3] = "Альбомы моих друзей";
	$user_album_friends[4] = "Альбомы моих друзей";
	$user_album_friends[5] = "Перечисленные ниже альбомы были недавно обновлены Вашими друзьями.";
	$user_album_friends[6] = "Владелец:";
	$user_album_friends[7] = "Создан:";
	$user_album_friends[8] = "Обновлён:";
	$user_album_friends[9] = "Фаилы:";
	$user_album_friends[10] = "фотографии";
	$user_album_friends[11] = "У Вас нет альбомов друзей.";
	break;

  case "user_album_settings":
      $user_album_settings[1] = "Ваши изменения были сохранены";
      $user_album_settings[2] = "Мои альбомы";
      $user_album_settings[3] = "Параметры альбома";
      $user_album_settings[4] = "Альбомы моих друзей";
      $user_album_settings[5] = "Стиль альбома";
      $user_album_settings[6] = "Вы можете изменить цвет, шрифт и стиль Вашего альбома, добавив свой CSS-код. Содержимое в поле должно быть заключено в теги &lt;style&gt;.";
      $user_album_settings[7] = "Сохранить изменения";
	$user_album_settings[8] = "Изменить настройки альбома";
	$user_album_settings[9] = "Изменение настроек альбома.";
	$user_album_settings[10] = "Уведомления альбома";
	$user_album_settings[11] = "Вы хотите получать уведомления по электронной почте, когда кто-то публикует комментарий к фото?";
	$user_album_settings[12] = "Да, уведомить меня, когда кто-то написал комментарий к фото.";
	break;

  case "user_album_update":
	$user_album_update[1] = "Ваши изменения были сохранены.";
	$user_album_update[2] = "Мои альбомы";
	$user_album_update[3] = "Параметры альбома";
	$user_album_update[4] = "Альбомы моих друзей";
	$user_album_update[5] = "Редактировать альбом:";
	$user_album_update[6] = "Все фотографии этого альбома, перечислены ниже.<br>Этот альбом содержит";
	$user_album_update[7] = "файлов";
	$user_album_update[8] = "и просмотрен";
	$user_album_update[9] = "раз.";
	$user_album_update[10] = "&nbsp;&nbsp; к Альбомам";
	$user_album_update[11] = "Загрузить фото";
	$user_album_update[12] = "Редакт. детали";
	$user_album_update[13] = "Нет файлов в этом альбоме.";
	$user_album_update[14] = "Нажмите здесь, чтобы начать добавление файлов.";
	$user_album_update[15] = "Название";
	$user_album_update[16] = "комментария";
	$user_album_update[17] = "Описание";
	$user_album_update[18] = "Удалить фото";
	$user_album_update[19] = "Обложка альбома";
	$user_album_update[20] = "Сохранить изменения";
	break;
	

  case "user_album_upload":
	$user_album_upload[1] = "загружен успешно.";
	$user_album_upload[2] = "Ваш альбом был создан. Вы можете загружать фотографии ниже.";
	$user_album_upload[3] = "Мои альбомы";
	$user_album_upload[4] = "Параметры альбома";
	$user_album_upload[5] = "Альбомы моих друзей";
	$user_album_upload[6] = "Загрузить фотографии в альбом:";
	$user_album_upload[7] = "Чтобы загрузить фотографии со своего компьютера, нажмите \"Обзор\", найдите их на компьютере, затем нажмите кнопку \"Загрузить фотографии\".";
	$user_album_upload[8] = "Вернуться к фотографиям";
	$user_album_upload[9] = "У Вас";
	$user_album_upload[10] = "Файл 1:";
	$user_album_upload[11] = "Файл 2:";
	$user_album_upload[12] = "Файл 3:";
	$user_album_upload[13] = "Файл 4:";
	$user_album_upload[14] = "Файл 5:";
	$user_album_upload[15] = "Загрузить фотографии";
	$user_album_upload[16] = "ЗАГРУЗКА"; // THIS ONE IS USED BY JAVASCRIPT, SO NO QUOTES, DOUBLEQUOTES, OR ANY SPECIAL CHARACTERS WHATSOEVER
	$user_album_upload[17] = "MB оставшегося свободного места.<br>Вы можете загрузить файлы следующих типов:";
	$user_album_upload[18] = "<br>Вы можете загружать файлы размером не более";
	$user_album_upload[19] = "Kb.";
	break;

}


// ASSIGN ALL SMARTY VARIABLES
if(!empty(${"$page"}) and is_array(${"$page"})) {
  reset(${"$page"});
  while(list($key, $val) = each(${"$page"})) {
    $smarty->assign($page.$key, $val);
  }
}

?>