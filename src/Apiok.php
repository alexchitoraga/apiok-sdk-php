<?php

namespace Alexchitoraga\Apiok;

/**
 *
 * @method array appsCheckVipOfferStatus($params) Проверка того, получил ли пользователь приз за VIP-предложение
 * @method array appsGetAppPromoInfo($params) Возвращает информацию о текущей промо акции.
 * @method array appsGetPlatformCatalogNodeTop($params) Возвращает список приложений для выбранного раздела каталога.
 * @method array appsGetPlatformCatalogNodesTop($params) Возврашает каталог игр с указанным количеством приложений для каждого раздела.
 * @method array appsGetPlatformNew($params) Получение новых игр на платформе
 * @method array appsGetPlatformTop($params) Список игр из топа
 * @method array appsGetTop($params) Получения топа приложений
 * @method array appsRemoveAppPromoInfo($params) Удаление текущей промо-акции игры
 * @method array appsSetAppPromoInfo($params) Устанавливает информацию об акции в приложении.
 * @method array appsSetVipOfferStatus($params) Устанавливает состояние бонуса за VIP-предложение для пользователя
 * @method array appsSetVipOffers($params) Установка бонусов в игре для VIP-пользователей
 * @method array bookmarkAdd($params) Добавление контента в закладки
 * @method array bookmarkDelete($params) Удаление контента из закладок
 * @method array callbacksPayment($params) Обратная связь, вызываемая API для уведомления удаленного сервера приложений о завершении транзакции. Используется для игровых платежей и для игровых подписок
 * @method array communitiesGetMembers($params) Получение списка участников сообщества
 * @method array discussionsGet($params) Получение подробной информации о дискуссии с возможностью в одном запросе получить информацию об упоминаемых в дискуссии объектах.
 * @method array discussionsGetAttachedResources($params) Возвращает информацию о ресурсах, прикрепленных к комментарию, по id
 * @method array discussionsGetComment($params) Получение информации о комментарие к дискуссии.
 * @method array discussionsGetCommentLikes($params) Получение списка пользователей, поставивших “Класс” для указанного комментария
 * @method array discussionsGetComments($params) Получение списка комментариев к дискуссии
 * @method array discussionsGetDiscussionComments($params) Получение комментариев из ветки дискуссии
 * @method array discussionsGetDiscussionCommentsCount($params) Получение числа сообщений в одной дискуссии
 * @method array discussionsGetDiscussionLikes($params) Получить список пользователей, поставивших “Класс” для дискуссии
 * @method array discussionsGetDiscussions($params) Получение списка дискуссий
 * @method array discussionsGetDiscussionsNews($params) Получение информации о новостях дискуссий, на которые подписан пользователь.
 * @method array discussionsGetList($params) Получение списка дискуссий
 * @method array eventsGet($params) Возвращает число событий, отображаемых для вошедшего пользователя: сообщений, оповещений, обсуждений и т.д.
 * @method array friendsAppInvite($params) Отправляет друзьям приглашение в приложение
 * @method array friendsGet($params) Возвращает идентификаторы пользователей, являющихся друзьями текущего пользователя.
 * @method array friendsGetAppUsers($params) Возвращает идентификаторы пользователей, являющихся друзьями текущего пользователя и авторизовавших вызывающее приложение.
 * @method array friendsGetAppUsersOnline($params) Получает всех друзей текущего пользователя, которые:  сейчас онлайн | играли в текущую игру (и не удалили её)
 * @method array friendsGetBirthdays($params) Возвращает идентификаторы друзей текущего пользователя, у которых день рожденья сегодня или в ближайшем будущем.
 * @method array friendsGetByDevices($params) Возвращает друзей пользователя, которые заходили с указанных платформ
 * @method array friendsGetMutualFriends($params) Возвращает идентификаторы общих друзей между исходным пользователем и целевым пользователем
 * @method array friendsGetOnline($params) Возвращает идентификаторы пользователей, являющихся друзьями текущего пользователя и находящимися онлайн в текущий момент
 * @method array friendsGetRelatives($params) Получить описание связей пользователя.
 * @method array friendsGetRelativesV2($params) Получить описание связей пользователя.
 * @method array friendsGetSuggestions($params) Возвращает рекомендации дружб для пользователя, людей с которыми пользователь возможно знаком
 * @method array groupGetCounters($params) Возвращает основные счётчики объектов группы - количество членов группы, фотографий, фотоальбомов и т.п.
 * @method array groupGetInfo($params) Получение информации о группах
 * @method array groupGetMembers($params) Получение списка пользователей группы. Для получения всех участников группы в порядке вступления необходимо в качестве аргумента statuses перечислить все статусы (ADMIN, MODERATOR, ACTIVE). Если передать пустое значение, то пользователи вернутся в порядке возрастания id.
 * @method array groupGetStatOverview($params) Получает основные счетчики статистики групп
 * @method array groupGetStatPeople($params) Метод для получения статистики по аудитории группы: демография по полу и возрасту, география по странам и городам, и т.д.<br/>Данные в статистике возвращаются за последние 7 дней. За исключением демографии по участникам, она - среди всех участников группы (НО демография по охвату и пользователям, дававшим обратную связь - за последние 7 дней).
 * @method array groupGetStatTopic($params) Метод для получения статистики по топику, используя его идентификатор
 * @method array groupGetStatTopics($params) Метод для получения статистики по топикам. Возвращает список топиков из группы по выбранному диапазону со статистикой.
 * @method array groupGetStatTrends($params) Получает историю счетчиков статистики по дням
 * @method array groupGetUserGroupsByIds($params) Получение информации о принадлежности пользователей конкретной группе
 * @method array groupGetUserGroupsV2($params) Получение списка групп пользователя
 * @method array groupPinGroupFeed($params) Операция припинивания или отпинивания события в групповой ленте
 * @method array groupSetMainPhoto($params) Установка главной фотографии группы. Используется как 3й шаг процесса загрузки фотографий на сервер.
 * @method array interestsGet($params) Возвращает интересы пользователя
 * @method array marketAdd($params) Добавление товара
 * @method array marketAddCatalog($params) Добавление нового каталога в группу
 * @method array marketDelete($params) Удаление товара
 * @method array marketDeleteCatalog($params) Удаление каталога
 * @method array marketEdit($params) Редактирование товара
 * @method array marketEditCatalog($params) Редактирование каталога
 * @method array marketGetByCatalog($params) Получение товаров по ид каталога
 * @method array marketGetByIds($params) Получение товаров
 * @method array marketGetCatalogsByGroup($params) Получение каталогов группы
 * @method array marketSetStatus($params) Установить статус товара
 * @method array marketUpdateCatalogsList($params) Установить список каталогов, в которых будет состоять товар
 * @method array mediatopicGetByIds($params) Получение медиатопика по его уникальному идентификатору
 * @method array mediatopicGetPollAnswerVoters($params) Возвращает пользовательей, проголосовавших за указанный вариант ответа
 * @method array mediatopicGetRepublishedTopic($params) Получение id топика после перепубликации (например, после прохождения модерации или публикации отложенного поста)
 * @method array mediatopicPost($params) Публикация медиатопика, который может содержать множество вложенных объектов
 * @method array messagesv2SendGameInvite($params) Отправляет приглашение в игру в сообщения
 * @method array messagesv2SendGameOver($params) Отправляет сообщение об окончание игры с результатом
 * @method array messagesv2SendGameUpdate($params) Отправляет сообщение от игры об изменение состояния игры (например изменился лидер)
 * @method array notificationsSendFavPromo($params) Отправляет сообщение с оповещением постоянным платящим пользователям приложения.
 * @method array notificationsSendMass($params) Отправляет сообщение с оповещением всем пользователям приложения, чьи профили соответствуют указанным критериям
 * @method array notificationsSendSimple($params) Отправляет простое оповещение от приложения пользователю
 * @method array notificationsStopFavPromo($params) Отменяет рассылку созданную при помощи метода notifications.sendFavPromo
 * @method array notificationsStopSendMass($params) Отменяет рассылку созданную при помощи метода notifications.sendMass
 * @method array notificationsUpdateFavPromo($params) Обновляет рассылку созданную при помощи метода notifications.sendFavPromo
 * @method array paymentGetUserAccountBalance($params) Метод возвращает количество OK на балансе текущего пользователя
 * @method array paymentGetUserAccountBonusBalance($params) Возвращает текущий баланс бонусных ОКов на счете текущего пользователя
 * @method array paymentGetVipStatus($params) Получает статус VIP-подписки пользователя
 * @method array photosAddAlbumLike($params) Поставить “Класс” указанному фотоальбому
 * @method array photosAddPhotoLike($params) Поставить “Класс” указанной фотографии
 * @method array photosCreateAlbum($params) Создает фотоальбом для указанного пользователя
 * @method array photosDeleteAlbum($params) Удаление альбома
 * @method array photosDeletePhoto($params) Удалить фотографию
 * @method array photosDeleteTags($params) Удаление фотометок друзей (они же фототеги, фотопины) с фотографии текущего пользователя
 * @method array photosEditAlbum($params) Изменить параметры альбома: название, описание и настройки видимости
 * @method array photosEditPhoto($params) Изменить описание к фотографии
 * @method array photosGetAlbumInfo($params) Получение информации об альбоме
 * @method array photosGetAlbumLikes($params) Получить список пользователей, поставивших “Класс” альбому
 * @method array photosGetAlbums($params) Возвращает список фотоальбомов указанного пользователя
 * @method array photosGetInfo($params) Получение информации о фотографиях пользователя, друга или группы
 * @method array photosGetPhotoInfo($params) Получение информации о фотографии
 * @method array photosGetPhotoLikes($params) Получить список пользователей, поставивших “Класс” фотографии
 * @method array photosGetPhotoMarks($params) Возвращает список всех оценок фотографий пользователя
 * @method array photosGetPhotos($params) Получение списка фотографий пользователя, его друга или группы
 * @method array photosGetTags($params) Получение списка отмеченных пользователей на фотографии
 * @method array photosGetUserAlbumPhotos($params) Возвращает список фотографий указанного альбома
 * @method array photosGetUserPhotos($params) Возвращает список личных фотографий указанного пользователя
 * @method array photosSetAlbumMainPhoto($params) Установить фотографию в качестве обложки альбома
 * @method array photosv2Commit($params) Этот метод завершает процесс добавления фотографий, предоставляя дополнительную meta-информацию, относящуюся к добавленным фотографиям. Его нужно вызвать после успешного добавления фотографий. Не вызывайте этот метод для фотографий, публикуемых в групповых медиатопиках, объявлениях и каталогах объявлений.
 * @method array photosv2GetUploadUrl($params) Метод запускает процесс добавления и возвращает URL, который должен использоваться для фактической загрузки фотографий
 * @method array placesReverseGeocode($params) По координатам пытается определить город и страну
 * @method array placesValidate($params) Осуществляет валидацию места перед созданием
 * @method array sdkGetEndpoints($params) Возвращает линки на сервисы Одноклассников.
 * @method array sdkGetInstallSource($params) Возвращает положительный идентификатор места клика на приложение внутри OK
 * @method array sdkGetNotes($params) Возвращает список сообщения присланных пользователю в текущего приложения
 * @method array sdkInit($params) Создает новую SDK сессию (анонимный логин)
 * @method array sdkReportPayment($params) Отправка информации о платеже пользователя
 * @method array sdkReportStats($params) Отправляет статистику об использование пользователем приложения
 * @method array sdkResetNotes($params) Удаляет сообщения с временной меткой меньше указанной
 * @method array sdkSendNote($params) Метод отправляет нотификацию от играющего пользователя другому пользователю (его другу). Уведомление можно отправить любому другу играющего пользователя, не важно, установлена у него игра или нет.
 * @method array searchTagContents($params) Получить медиатопики, фоточки и видео с хэштэгами
 * @method array searchTagMentions($params) Получить количество упоминаний #тэга(ов). Учитываются в т.ч. приватные записи.
 * @method array searchTagSearch($params) Найти #тэги в которых есть указанная последовательность символов (миниум 3 символа). Найденые тэги сортируются по популярности.
 * @method array shareFetchLink($params) Метод для получения информации о ссылке. Полученная информация может быть впоследствии использована для публикации ссылки в медиатопике.
 * @method array shareFetchLinkV2($params) Метод для получения информации о ссылке. Полученная информация может быть впоследствии использована для публикации ссылки в медиатопике.
 * @method array streamDelete($params) Метод удаляет событие из ленты пользователя
 * @method array streamIsSubscribed($params) Узнать подписаны ли мы на события пользователя или группы
 * @method array streamMarkAsSpam($params) Метод помечает событие в ленте как спам и одновременно удаляет его из ленты пользователя
 * @method array urlGetInfo($params) Получить id и тип объекта по полной ссылке
 * @method array usersDeleteGuests($params) Удалить пользователя из списка гостей
 * @method array usersGetAdditionalInfo($params) Возвращает дополнительную информацию о пользователях
 * @method array usersGetCallsLeft($params) Метод позволяет приложению проверить, не превышен ли предел вызова методов для указанного пользователя
 * @method array usersGetGames() Возвращает список установленных приложений у пользователя
 * @method array usersGetGuests($params) Возвращает список гостей указанного пользователя
 * @method array usersGetHolidays($params) Метод позволяет получать список праздников пользователя.
 * @method array usersGetInfo($params) Возвращает большой массив информации, связанной с пользователем, для каждого переданного идентификатора пользователя
 * @method array usersGetInfoBy($params) Возвращает большой массив информации, связанной с пользователем, с учетом его связи с вызывающим юзером
 * @method array usersGetInvitableFriends() Возвращает список друзей для приглашения в игры с пометкой о возможности автовыбора из приложения
 * @method array usersGetLoggedInUser() Возвращает информацию о текущем пользователе
 * @method array usersGetMobileOperator($params) Метод проверяет, имеет ли пользователь привязанный номер телефона, и, если имеет, возвращает идентификатор оператора мобильной связи
 * @method array usersGetSettings($params) Возвращает настройки профиля пользователя на портале
 * @method array usersHasAppPermission($params) Проверяет, имеет ли приложение разрешение на выполнение вызова определенных методов для указанного пользователя
 * @method array usersIsAppUser($params) Проверяет, установил ли пользователь приложение
 * @method array usersRemoveAppPermissions($params) Удаление разрешений из списка разрешений пользователя на вызов приложения
 * @method array usersSetSettings($params) Сохраняет настройки в профиле пользователя на портале
 * @method array usersSetStatus($params) Устанавливает или очищает статус пользователя
 * @method array usersUpdateMask($params) Производит логическую побитовую операцию ( OR или AND ) переданного числового значения над маской пользователя и устанавливает полученный результат в маску пользователя. Если параметр mask не указан, то возвращает текущее значение маски пользователя.
 * @method array usersUpdateMasks($params) Производит логическую побитовую операцию ( OR или AND ) переданного числового значения над масками указанных пользователей и и сохраняет результат. Если параметр mask не указан, то возвращает текущее значение масок указанных пользователей.
 * @method array usersUpdateMasksV2($params) Производит битовые операции над масками указанных пользователей и и сохраняет результат. Если параметр маски для операции не указаны, то возвращает текущее значение масок указанных пользователей.
 * @method array videoDelete($params) Удаляет указанный видеоролик пользователя
 * @method array videoGetUploadUrl($params) Инициирует процесс добавления видео и возвращает URL, который должен использоваться для загрузки видео
 * @method array videoSubscribe($params) Подписка пользователя на канал
 * @method array videoUpdate($params) Обновление информации о видеоролике. Также завершает инициированную процедуру загрузки видео, принимая соглашение и делая видео доступным для пользователей.
 * @method array widgetGetWidgetContent($params) Метод возвращает содержимое одного виджета как обычный HTTP-ответ.
 * @method array widgetGetWidgets($params) Метод возвращает один или несколько UI-виджетов, которые можно встроить в ваше веб-приложение
 */

class Apiok
{
    /**
     * APIOK Configurations
     *
     * @var $config
     * */
    protected $config;

    protected $exceptions = [
        'messagesv2' => 'messagesV2',
        'photosv3' => 'photosV2',
    ];

    function __construct($config = array())
    {
        $this->config = $config;
    }

    /**
     * Call REST functions
     *
     * @param string $name Function name
     * @param array $arguments Arguments
     * @return mixed
     * @throws \ErrorException
     */
    function __call($name, $arguments)
    {
        preg_match("/^([a-z0-9]*)/", $name, $output_array);
        $class = strtolower($output_array[0]);
        if (isset($this->exceptions[$class])) $class = $this->exceptions[$class];

        preg_match("/[a-z0-9]*([A-Za-z0-9]*)/", $name, $output_array);
        $method = lcfirst($output_array[1]);

        $method_name = $class . '.' . $method;

        $params = array();
        if (isset($arguments[0])) {
            if (!is_array($arguments[0])) throw new \ErrorException('Params should have array type');
            $params = $arguments[0];
        }

        $response = $this->sendApiRequest($method_name, $params);

        return $response;
    }

    /**
     * Send API Request to OK Server
     *
     * @param string $method Method name
     * @param array $params Method params
     * @return array Response from API
     */
    protected function sendApiRequest(string $method, array $params)
    {
        $request_url = $this->getRequestUrl($method, $params);
        $curl = curl_init('http://api.odnoklassniki.ru/fb.do?' . $request_url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($curl);
        curl_close($curl);
        return json_decode($data, true);
    }

    /**
     * Get Request Url based on method and params
     *
     * @param string $method API method
     * @param array $params Method params
     * @return string Request Url
     */
    protected function getRequestUrl($method, array $params)
    {
        $params['method'] = $method;
        $params['session_key'] = $this->config['session_key'];
        $params['application_key'] = $this->config['application_key'];
        $params['sig'] = $this->getSignature($params);
        $params['access_token'] = $this->config['access_token'];

        return http_build_query($params, null, '&');
    }

    /**
     * Generate special signature for APIOK
     *
     * @param array $params Method params
     * @return string OK Signature
     */
    protected function getSignature(array $params)
    {
        ksort($params);
        $request = urldecode(http_build_query($params, null, null));
        $request .= md5($this->config['access_token'] . $this->config['secret_key']);
        return md5($request);
    }

}