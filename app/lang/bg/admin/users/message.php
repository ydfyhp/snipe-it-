<?php

return array(

    'accepted'                  => 'Активът беше приет.',
    'declined'                  => 'Активът беше отказан.',
    'user_exists'               => 'Потребителят вече съществува!',
    'user_not_found'            => 'Потребител [:id] не съществува.',
    'user_login_required'       => 'Полето за вход е задължително',
    'user_password_required'    => 'Паролата е задължителна.',
    'insufficient_permissions'  => 'Нямате необходимите права.',
    'user_deleted_warning'      => 'Този потребител е изтрит. За да редактирате данните за него или да му зададете актив, трябва първо да възстановите потребителя.',
    'ldap_not_configured'        => 'Интеграцията с LDAP не е конфигурирана за тази инсталация.',


    'success' => array(
        'create'    => 'Потребителят е създаден.',
        'update'    => 'Потребителят е обновен.',
        'delete'    => 'Потребителят е изтрит.',
        'ban'       => 'Потребителят беше забранен успешно.',
        'unban'     => 'Потребителят възстановен успешно.',
        'suspend'   => 'Потребителят бе временно спрян.',
        'unsuspend' => 'Потребителят активиран успешно.',
        'restored'  => 'Потребителят е възстановен.',
        'import'    => 'Потребителите заредени успешно.',
    ),

    'error' => array(
        'create' => 'Възникна проблем при създаването на този потребител. Моля, опитайте отново.',
        'update' => 'Възникна проблем при обновяването на този потребител. Моля, опитайте отново.',
        'delete' => 'Възникна проблем при изтриването на този потребител. Моля, опитайте отново.',
        'unsuspend' => 'Проблем при активирането на потребителя. Моля опитайте отново.',
        'import'    => 'Проблем при зареждането на потребителите. Моля опитайте отново.',
        'asset_already_accepted' => 'Този актив е вече приет.',
        'accept_or_decline' => 'Трябва да приемете или да откажете този актив.',
        'incorrect_user_accepted' => 'Активът, който се опитвате да приемете не е изписан към Вас.',
        'ldap_could_not_connect' => 'Проблем при комуникацията с LDAP сървъра. Моля прегледайте конфигурацията на LDAP.<br/>Грешка от LDAP сървъра: ',
        'ldap_could_not_bind' => 'Проблем при връзката с LDAP сървъра. Моля прегледайте конфигурацията на LDAP.<br/>Грешка от LDAP сървъра: ',
        'ldap_could_not_search' => 'Проблем при търсенето в LDAP сървъра. Моля прегледайте конфигурацията на LDAP.<br/>Грешка от LDAP сървъра: ',
        'ldap_could_not_get_entries' => 'Проблем при извличането на резултат от LDAP сървъра. Моля прегледайте конфигурацията на LDAP.<br/>Грешка от LDAP сървъра:',
    ),

    'deletefile' => array(
        'error'   => 'Файлът не е изтрит. Моля, опитайте отново.',
        'success' => 'Файлът е изтрит.',
    ),

    'upload' => array(
        'error'   => 'Проблем при качването на файл/овете. Моля опитайте отново.',
        'success' => 'Файл/овете качени успешно.',
        'nofiles' => 'Не сте избрали файлове за качване',
        'invalidfiles' => 'Един или повече файлове са твърде големи или с неразрешен тип. Разрешените типове файлове са png, gif, jpg, doc, docx, pdf, и txt.',
    ),

);
