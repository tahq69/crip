<?php

return [
    'app' => [
        'name'    => 'October CMS',
        'tagline' => 'Getting back to basics',
    ],
    'locale'         => [
        'cs'    => 'Checo',
        'en'    => 'Inglés',
        'de'    => 'Alemán',
        'el' => 'Griego',
        'es'    => 'Español',
        'es-ar' => 'Español (Argentina)',
        'fa' => 'Persa',
        'fr'    => 'Francés',
        'br'    => 'Portugués Brasileño',

        'hu' => 'Hungaro',
        'id' => 'Bahasa Indonesia',
        'it'    => 'Italiano',
        'ja'    => 'Japonés',
        'lv' => 'Letón',

        'nb-no' => 'Noruego (Bokmål)',
	'nl'    => 'Holandés',
        'pl' => 'Polaco',
        'pt-br' => 'Portugués (Brasil)',
        'ro'    => 'Romana',
        'ru'    => 'Ruso',
        'sv'    => 'Sueco',
        'sk' => 'Eslovaco (Eslovaquia)',
        'tr'    => 'Turco',
        'zh-cn' => 'Chino (China)',
        'zh-tw' => 'Chino (Taiwan)'
    ],
    'directory'      => [
        'create_fail' => 'No es posible crear el directorio: :name'
    ],
    'file'           => [
        'create_fail' => 'No es posible crear el archivo: :name'
    ],
    'combiner' => [
        'not_found' => "El archivo combinador ':name' no se encuentra."
    ],
    'system'         => [
        'name'       => 'Sistema',
        'menu_label' => 'Sistema',
        'categories' => [
            'cms'         => 'CMS',
            'misc'        => 'Misc',
            'logs'        => 'Registros',
            'mail'        => 'Correo',
            'shop'        => 'Tienda',
            'team'        => 'Equipo',
            'users'       => 'Usuarios',
            'system'      => 'Sistema',
            'social'      => 'Social',
            'events'      => 'Eventos',
            'customers'   => 'Clientes',
            'my_settings' => 'Mis Configuraciones'
        ]
    ],
    'theme' => [
        'label' => 'Tema',
        'unnamed' => 'Tema sin nombre',
        'name' => [
            'label' => 'Nombre Tema',
            'help' => 'Nombre del tema por su código único. Por ejemplo, RainLab.Vanilla'
        ],
    ],
    'themes' => [
        'install' => 'Instalar temas',
        'search' => 'buscar temas para instalar...',
        'installed' => 'Temas Instalados',
        'no_themes' => 'No hay temas instalados desde el mercado.',
        'recommended' => 'Recomendado',
        'remove_confirm' => '¿Seguro que quieres eliminar este tema?'
    ],
    'plugin' => [
        'label' => 'Plugin',
        'unnamed' => 'Plugin sin nombre',
        'name'    => [
            'label' => 'Nombre del Plugin',
            'help'  => 'Nombra el plugin por su código único. por ejemplo, RainLab.Blog',
        ]
    ],
    'plugins'        => [
        'manage'                  => 'Gestionar plugins',
        'enable_or_disable'       => 'Activar o desactivar',
        'enable_or_disable_title' => 'Activar o Desactivar Plugins',
        'install' => 'Instalar plugins',
        'install_products' => 'Instalar productos',
        'search' => 'buscar plugins para instalar...',
        'installed' => 'Plugins Instalados',
        'no_plugins' => 'No hay plugins instalados desde el mercado.',
        'recommended' => 'Recomendado',
        'remove'                  => 'Eliminar',
        'refresh'                 => 'Recargar',
        'disabled_label'          => 'Desactivar',
        'disabled_help'           => 'Plugins que están deshabilitadas son ignorados por la aplicación.',
        'frozen_label' => 'Congele actualizaciones',
        'frozen_help' => 'Plugins que están congelados serán ignorados por el proceso de actualización.',
        'selected_amount'         => 'Plugins seleccionado: :amount',
        'remove_confirm'          => 'Está seguro?',
        'remove_success'          => 'Eliminado con éxito los plugins del sistema.',
        'refresh_confirm'         => 'Está seguro?',
        'refresh_success'         => 'Con éxito refrescado los plugins en el sistema.',
        'disable_confirm'         => 'Está seguro?',
        'disable_success'         => 'Plugins deshabilitados con éxito.',
        'enable_success'          => 'Plugins activados con éxito.',
        'unknown_plugin'          => 'El Plugin ha sido elimina del sistema de archivos.',
    ],
    'project'        => [
        'name'           => 'Proyecto',
        'owner_label'    => 'Dueño',
        'attach'         => 'Adjuntar Proyecto',
        'detach'         => 'Separar Proyecto',
        'none'           => 'Ninguno',
        'id'             => [
            'label'   => 'ID del Proyecto',
            'help'    => 'Como encontrar el ID de tu proyecto',
            'missing' => 'Especifique un ID del proyecto para usar.',
        ],
        'detach_confirm' => '¿Está seguro de que desea separar este proyecto?',
        'unbind_success' => 'Proyecto ha sido separado con éxito.',
    ],
    'settings'       => [
        'menu_label'     => 'Configuración',
        'missing_model'  => 'La página de configuración no encuentra una definición del Modelo.',
        'update_success' => 'Los ajustes para :name se han actualizado correctamente.',
        'return'         => 'Volver a la configuración del sistema',
        'search'         => 'Buscar',
    ],
    'mail'           => [
        'log_file' => 'Archivo Registro',
        'menu_label'                 => 'Configuración del correo',
        'menu_description'           => 'Administrar la configuración de correo electrónico.',
        'general'                    => 'General',
        'method'                     => 'Método de correo',
        'sender_name'                => 'Nombre del remitente',
        'sender_email'               => 'Correo del remitente',
        'php_mail' => 'mail PHP',
        'smtp'                       => 'SMTP',
        'smtp_address'               => 'Dirección SMTP',
        'smtp_authorization'         => 'autorización requerida de SMTP',
        'smtp_authorization_comment' => 'Utilice esta opción si el servidor SMTP requiere autorización.',
        'smtp_username'              => 'Nombre de usuario',
        'smtp_password'              => 'Contraseña',
        'smtp_port'                  => 'Puerto SMTP',
        'smtp_ssl'                   => 'Conexión SSL requerida',
        'smtp_encryption' => 'protocolo SMTP encryptado',
        'smtp_encryption_none' => 'Sin encryptación',
        'smtp_encryption_tls' => 'TLS',
        'smtp_encryption_ssl' => 'SSL',
        'sendmail'                   => 'Sendmail',
        'sendmail_path'              => 'Directorio de Sendmail',
        'sendmail_path_comment'      => 'Por favor, especifique la ruta de acceso del programa sendmail.',
        'mailgun' => 'Mailgun',
        'mailgun_domain' => 'Dominio Mailgun',
        'mailgun_domain_comment' => 'Por favor, especifique el nombre de dominio Mailgun.',
        'mailgun_secret' => 'Mailgun secret',
        'mailgun_secret_comment' => 'Introduzca su key de Mailgun API.',
        'mandrill' => 'Mandrill',
        'mandrill_secret' => 'Mandrill secret',
        'mandrill_secret_comment' => 'Introduzca su key de Mandrill API.',
        'drivers_hint_header' => 'Drivers no instalados',
        'drivers_hint_content' => 'Este método de correo electrónico requiere que el plugin ":plugin" este instalado antes de poder enviar correo.'
    ],
    'mail_templates' => [
        'menu_label'         => 'Plantillas de Correo',
        'menu_description'   => 'Modificar las plantillas de correo que se envían a los usuarios y administradores, administrar diseños de correo electrónico',
        'new_template'       => 'Nueva plantilla',
        'new_layout'         => 'Nueva Disposición',
        'template'           => 'Plantilla',
        'templates'          => 'Plantillas',
        'menu_layouts_label' => 'Disposición del Mail',
        'layout'             => 'Disposición',
        'layouts'            => 'Disposiciones',
        'no_layout' => '-- Sin disposición --',
        'name'               => 'Nombre',
        'name_comment'       => 'Nombre único utilizado para referirse a esta plantilla',
        'code'               => 'Código',
        'code_comment'       => 'Código único utilizado para referirse a esta plantilla ',
        'subject'            => 'Asunto',
        'subject_comment'    => 'Correo asunto del mensaje',
        'description'        => 'Descripción',
        'content_html'       => 'HTML',
        'content_css'        => 'CSS',
        'content_text'       => 'Texto plano',
        'test_send'          => 'Enviar mensaje de prueba',
        'test_success'       => 'El mensaje de prueba ha sido enviado con éxito.',
        'return'             => 'Volver a la lista de plantilla',
        'test_confirm' => 'Un mensaje de prueba se enviará a :email. Continuar?',
        'saving' => 'Salvando Plantilla...',
        'sending' => 'Enviando mensaje de prueba...',
    ],
    'install'        => [
        'project_label'       => 'Adjuntar al proyecto',
        'plugin_label'        => 'Instalar Plugin',
        'theme_label' => 'Instalar Theme',
        'missing_plugin_name' => 'Por favor, especifique un nombre de Plugin para instalar',
        'missing_theme_name' => 'Por favor especifique un nombre de Theme a instalar.',
        'install_completing'  => 'Finalizó el proceso de instalación',
        'install_success'     => 'El plugin se ha instalado correctamente.'
    ],
    'updates'        => [
        'title'               => 'Administrar actualizaciones',
        'name'                => 'Actualizaciones de software',
        'menu_label'          => 'Actualizaciones',
        'menu_description'    => 'Actualizaciones del sistema, administrar e instalar plugins y temas.',
        'check_label'         => 'Chequear actualizaciones',
        'retry_label'         => 'Intentar nuevamente',
        'plugin_name'         => 'Nombre',
        'plugin_code' => 'Código',
        'plugin_description'  => 'Descripción',
        'plugin_version'      => 'Versión',
        'plugin_author'       => 'Autor',
        'core_current_build'  => 'Versión actual',
        'core_build'          => 'Versión :build',
        'core_build_help'     => 'Última versión está disponible.',
        'core_downloading'    => 'Descargando archivos de la aplicación',
        'core_extracting'     => 'Descomprimiendo archivos de la aplicación',
        'plugins' => 'Plugins',
        'themes' => 'Temas',
        'disabled' => 'Desactivado',
        'plugin_downloading'  => 'Descargando plugin: :name',
        'plugin_extracting'   => 'Descomprimiendo plugin: :name',
        'plugin_version_none' => 'Nuevo plugin',
        'theme_new_install'   => 'Intalación de nuevo tema.',
        'theme_downloading'   => 'Descargando tema: :name',
        'theme_extracting'    => 'Descomprimiendo tema: :name',
        'update_label'        => 'Actualizando software',
        'update_completing'   => 'Finalizando el proceso de actualización',
        'update_loading'      => 'Cargando actualizaciones disponibles...',
        'update_success'      => 'El proceso de actualización se realizó exitosamente.',
        'update_failed_label' => 'Actualización falló',
        'force_label'         => 'Forzar actualización',
        'found'               => [
            'label' => 'Se encontraron nuevas actualizaciones!',
            'help'  => 'Click Actualizar software para comenzar con el proceso de actualización.',
        ],
        'none'                => [
            'label' => 'No hay actualizaciones',
            'help'  => 'No se encontraron nuevas actualizaciones disponibles.',
        ],
        'important_action' => [
            'empty' => 'Seleccione acción',
            'confirm' => 'Confirmar actualización',
            'skip' => 'Saltar este plugin (sólo una vez)',
            'ignore' => 'Saltar este plugin (siempre)',
        ],
        'important_action_required' => 'Acción requerida',
        'important_view_guide' => 'Ver guía de actualización',
        'important_alert_text' => 'Algunas actualizaciones necesitan su atención.',
        'details_title' => 'Detalles plugin',
        'details_view_homepage' => 'Ver página de inicio',
        'details_readme' => 'Documentación',
        'details_readme_missing' => 'No hay documentación proporcionada.',
        'details_upgrades' => 'Guía de actualización',
        'details_upgrades_missing' => 'No hay instrucciones de actualización proporcionadas.',
        'details_current_version' => 'Versión actual',
        'details_author' => 'Autor'
    ],
    'server'         => [
        'connect_error'      => 'Error al conectar con el servidor.',
        'response_not_found' => 'El servidor de actualización no se pudo encontrar.',
        'response_invalid'   => 'Respuesta no válida del servidor.',
        'response_empty'     => 'Respuesta vacía desde el servidor.',
        'file_error'         => 'El servidor no pudo entregar el paquete.',
        'file_corrupt'       => 'El archivo se encuentra dañado.',
    ],
    'behavior'       => [
        'missing_property' => 'Clase :class debe definir la propiedad $:property utilizada por :behavior comportamiento.',
    ],
    'config'         => [
        'not_found' => 'No se puede encontrar el archivo de configuración :file definido por :location.',
        'required'  => "Configuración utilizada en :location debe proporcionar un valor. ':property'.",
    ],
    'zip'            => [
        'extract_failed' => "No se puede extraer el archivo ':file'.",
    ],
    'event_log'      => [
        'hint'             => 'Este registro muestra una lista de los posibles errores que se producen en la aplicación, como las excepciones y la información de depuración.',
        'menu_label'       => 'Registro de eventos',
        'menu_description' => 'Ver los logs de registro del sistema.',
        'empty_link'       => 'Vaciar el registro de eventos',
        'empty_loading'    => 'Borrando los registros...',
        'empty_success'    => 'Los registros fueron borrados',
        'return_link'      => 'Regresar al registro de eventos',
        'id'               => 'ID',
        'id_label'         => 'ID del Evento',
        'created_at'       => 'Fecha y Hora',
        'message'          => 'Mensaje',
        'level'            => 'Nivel',
    ],
    'request_log'    => [
        'hint'             => 'Este registro muestra una lista de las peticiones del navegador que pueden requerir atención. Por ejemplo, si un usuario abre una página que no se puede encontrar, se crea un registro con el código de estado 404.',
        'menu_label'       => 'Registros de acceso',
        'menu_description' => 'Ver listado de redirecciones con errores y paginas No encontradas (404).',
        'empty_link'       => 'Vaciar el registro de acceso',
        'empty_loading'    => 'Borrando los registros...',
        'empty_success'    => 'Los registros fueron borrados...',
        'return_link'      => 'Regresar al registro de acceso',
        'id'               => 'ID',
        'id_label'         => 'ID Log',
        'count'            => 'Contador',
        'referer'          => 'Referencia',
        'url'              => 'URL',
        'status_code'      => 'Estado',
    ],
    'permissions'    => [
        'name'                        => 'Sistema',
        'manage_system_settings'      => 'Gestionar la configuración del sistema',
        'manage_software_updates'     => 'Gestionar actualización de software',
        'access_logs'                 => 'Ver registros del sistema',
        'manage_mail_templates'       => 'Gestionar plantillas de correo',
        'manage_mail_settings'        => 'Gestionar la configuración del correo',
        'manage_other_administrators' => 'Gestionar otros administradores',
        'manage_preferences' => 'Gestionar preferencias back-end',
        'manage_editor' => 'Gestionar preferencias editor código',
        'view_the_dashboard'          => 'Ver el Escritorio',
        'manage_branding'             => 'Perzonalizar el back-end',
    ]
];
