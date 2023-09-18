<?php 

return [
    'accepted' => ':attribute debe ser aceptado.',
    'active_url' => ':attribute no es una URL válida.',
    'after' => ':attribute debe ser una fecha posterior a :date.',
    'after_or_equal' => ':attribute debe ser una fecha posterior o igual a :date.',
    'alpha' => ':attribute sólo debe contener letras.',
    'alpha_dash' => ':attribute sólo debe contener letras, números y guiones.',
    'alpha_num' => ':attribute sólo debe contener letras y números.',
    'array' => ':attribute debe ser un conjunto.',
    'before' => ':attribute debe ser una fecha anterior a :date.',
    'before_or_equal' => ':attribute debe ser una fecha anterior o igual a :date.',
    'between' => [
        'numeric' => ':attribute tiene que estar entre :min - :max.',
        'file' => ':attribute debe pesar entre :min - :max kilobytes.',
        'string' => ':attribute tiene que tener entre :min - :max caracteres.',
        'array' => ':attribute tiene que tener entre :min - :max ítems.',
    ],
    'boolean' => 'El campo :attribute debe tener un valor verdadero o falso.',
    'confirmed' => 'La confirmación de :attribute no coincide.',
    'date' => ':attribute no es una fecha válida.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => ':attribute no corresponde al formato :format.',
    'different' => ':attribute y :other deben ser diferentes.',
    'digits' => ':attribute debe tener :digits dígitos.',
    'digits_between' => ':attribute debe tener entre :min y :max dígitos.',
    'dimensions' => 'Las dimensiones de la imagen :attribute no son válidas.',
    'distinct' => 'El campo :attribute contiene un valor duplicado.',
    'email' => ':attribute no es un correo válido',
    'exists' => ':attribute es inválido.',
    'file' => 'El campo :attribute debe ser un archivo.',
    'filled' => 'El campo :attribute es obligatorio.',
    'image' => ':attribute debe ser una imagen.',
    'in' => ':attribute es inválido.',
    'in_array' => 'El campo :attribute no existe en :other.',
    'integer' => ':attribute debe ser un número entero.',
    'ip' => ':attribute debe ser una dirección IP válida.',
    'json' => 'El campo :attribute debe tener una cadena JSON válida.',
    'max' => [
        'numeric' => ':attribute no debe ser mayor a :max.',
        'file' => ':attribute no debe ser mayor que :max kilobytes.',
        'string' => ':attribute no debe ser mayor que :max caracteres.',
        'array' => ':attribute no debe tener más de :max elementos.',
    ],
    'mimes' => ':attribute debe ser un archivo con formato: :values.',
    'mimetypes' => ':attribute debe ser un archivo con formato: :values.',
    'min' => [
        'numeric' => 'El tamaño de :attribute debe ser de al menos :min.',
        'file' => 'El tamaño de :attribute debe ser de al menos :min kilobytes.',
        'string' => ':attribute debe contener al menos :min caracteres.',
        'array' => ':attribute debe tener al menos :min elementos.',
    ],
    'not_in' => ':attribute es inválido.',
    'numeric' => ':attribute debe ser numérico.',
    'present' => 'El campo :attribute debe estar presente.',
    'regex' => 'El formato de :attribute es inválido.',
    'required' => 'El campo :attribute es obligatorio.',
    'required_if' => 'El campo :attribute es obligatorio cuando :other es :value.',
    'required_unless' => 'El campo :attribute es obligatorio a menos que :other esté en :values.',
    'required_with' => 'El campo :attribute es obligatorio cuando :values está presente.',
    'required_with_all' => 'El campo :attribute es obligatorio cuando :values está presente.',
    'required_without' => 'El campo :attribute es obligatorio cuando :values no está presente.',
    'required_without_all' => 'El campo :attribute es obligatorio cuando ninguno de :values estén presentes.',
    'same' => ':attribute y :other deben coincidir.',
    'size' => [
        'numeric' => 'El tamaño de :attribute debe ser :size.',
        'file' => 'El tamaño de :attribute debe ser :size kilobytes.',
        'string' => ':attribute debe contener :size caracteres.',
        'array' => ':attribute debe contener :size elementos.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values',
    'string' => 'El campo :attribute debe ser una cadena de caracteres.',
    'timezone' => 'El :attribute debe ser una zona válida.',
    'unique' => ':attribute ya ha sido registrado.',
    'uploaded' => 'Subir :attribute ha fallado.',
    'url' => 'El formato :attribute es inválido.',
    'required_package_id' => 'You have to select a premium listing option to continue.',
    'required_payment_method_id' => 'You have to select a payment method to continue.',
	'blacklist_unique' => 'The :attribute field value is already banned for :type.',
    'blacklist_email_rule' => 'Esta dirección de correo electrónico está en la lista negra.',
	'blacklist_phone_rule' => 'Este número de teléfono está en la lista negra.',
    'blacklist_domain_rule' => 'The domain of your email address is blacklisted.',
    'blacklist_word_rule' => 'The :attribute contains a banned words or phrases.',
    'blacklist_title_rule' => 'The :attribute contains a banned words or phrases.',
    'between_rule' => 'The :attribute must be between :min and :max characters.',
    'captcha' => 'The :attribute field is not correct.',
    'recaptcha' => 'The :attribute field is not correct.',
    'phone' => 'The :attribute field contains an invalid number.',
    'phone_number' => 'The :attribute must be a valid phone number.',
    'username_is_valid_rule' => 'The :attribute field must be an alphanumeric string.',
    'username_is_allowed_rule' => 'The :attribute is not allowed.',
    'custom' => [
        'database_connection' => [
            'required' => 'No se puede conectar al servidor MySQL',
        ],
        'database_not_empty' => [
            'required' => 'La base de datos no está vacía. Vacíe la base de datos o especifique <a href="./database">otra base de datos</a>.',
        ],
        'promo_code_not_valid' => [
            'required' => 'El código promocional no es válido',
        ],
        'smtp_valid' => [
            'required' => 'No se puede conectar al servidor SMTP',
        ],
        'yaml_parse_error' => [
            'required' => 'No se puede analizar yaml. Compruebe la sintaxis',
        ],
        'file_not_found' => [
            'required' => 'Archivo no encontrado.',
        ],
        'not_zip_archive' => [
            'required' => 'El archivo no es un paquete zip.',
        ],
        'zip_archive_unvalid' => [
            'required' => 'No se puede leer el paquete.',
        ],
        'custom_criteria_empty' => [
            'required' => 'Los criterios personalizados no pueden estar vacíos',
        ],
        'php_bin_path_invalid' => [
            'required' => 'Ejecutable PHP no válido. Por favor revise de nuevo.',
        ],
        'can_not_empty_database' => [
            'required' => 'No puede eliminar determinadas tablas. Por favor, limpie su base de datos y vuelva a intentarlo.',
        ],
        'can_not_create_database_tables' => [
            'required' => 'Cannot create certain tables. Please make sure you have full privileges on the database and try again.',
        ],
        'can_not_import_database_data' => [
            'required' => 'Cannot import all the app required data. Please try again.',
        ],
        'recaptcha_invalid' => [
            'required' => 'Comprobación reCAPTCHA no válida.',
        ],
        'payment_method_not_valid' => [
            'required' => 'Algo salió mal con la configuración del método de pago. Por favor revise de nuevo.',
        ],
    ],
    'attributes' => [
        'gender' => 'género',
        'gender_id' => 'género',
        'name' => 'nombre',
        'first_name' => 'nombre',
        'last_name' => 'last name',
        'user_type' => 'tipo de usuario',
        'user_type_id' => 'tipo de usuario',
        'country' => 'país',
        'country_code' => 'país',
        'phone' => 'teléfono',
        'address' => 'dirección',
        'mobile' => 'móvil',
        'sex' => 'sexo',
        'year' => 'año',
        'month' => 'mes',
        'day' => 'día',
        'hour' => 'hora',
        'minute' => 'minuto',
        'second' => 'segundo',
        'username' => 'usuario',
        'email' => 'correo electrónico',
        'password' => 'contraseña',
        'password_confirmation' => 'confirmación de la contraseña',
        'g-recaptcha-response' => 'captcha',
        'accept_terms' => 'terms',
        'category' => 'category',
        'category_id' => 'category',
        'post_type' => 'post type',
        'post_type_id' => 'post type',
        'title' => 'título',
        'body' => 'contenido',
        'description' => 'descripción',
        'excerpt' => 'extracto',
        'date' => 'fecha',
        'time' => 'hora',
        'available' => 'available',
        'size' => 'size',
        'price' => 'price',
        'salary' => 'salary',
        'contact_name' => 'name',
        'location' => 'location',
        'admin_code' => 'location',
        'city' => 'ciudad',
        'city_id' => 'ciudad',
        'package' => 'package',
        'package_id' => 'package',
        'payment_method' => 'payment method',
        'payment_method_id' => 'payment method',
        'sender_name' => 'name',
        'subject' => 'asunto',
        'message' => 'mensaje',
        'report_type' => 'report type',
        'report_type_id' => 'report type',
        'file' => 'file',
        'filename' => 'filename',
        'picture' => 'picture',
        'resume' => 'resume',
        'login' => 'login',
        'code' => 'code',
        'token' => 'token',
        'comment' => 'comment',
        'rating' => 'rating',
        'captcha' => 'código de seguridad',
        'locale' => 'locale',
        'currencies' => 'currencies',
        'tags' => 'Tags',
        'from_name' => 'name',
        'from_email' => 'email',
        'from_phone' => 'phone',
    ],
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'not_regex' => 'The :attribute format is invalid.',
    'locale_of_language_rule' => 'The :attribute field is not valid.',
    'locale_of_country_rule' => 'The :attribute field is not valid.',
    'currencies_codes_are_valid_rule' => 'The :attribute field is not valid.',
    'blacklist_ip_rule' => 'The :attribute must be a valid IP address.',
    'custom_field_unique_rule' => 'The :field_1 have this :field_2 assigned already.',
    'custom_field_unique_rule_field' => 'The :field_1 is already assigned to this :field_2.',
    'custom_field_unique_children_rule' => 'A child :field_1 of the :field_1 have this :field_2 assigned already.',
    'custom_field_unique_children_rule_field' => 'The :field_1 is already assign to one :field_2 of this :field_2.',
    'custom_field_unique_parent_rule' => 'The parent :field_1 of the :field_1 have this :field_2 assigned already.',
    'custom_field_unique_parent_rule_field' => 'The :field_1 is already assign to the parent :field_2 of this :field_2.',
    'mb_alphanumeric_rule' => 'Please enter a valid content in the :attribute field.',
    'date_is_valid_rule' => 'The :attribute field does not contain a valid date.',
    'date_future_is_valid_rule' => 'The date of :attribute field need to be in the future.',
    'date_past_is_valid_rule' => 'The date of :attribute field need to be in the past.',
    'video_link_is_valid_rule' => 'The :attribute field does not contain a valid (Youtube or Vimeo) video link.',
    'sluggable_rule' => 'The :attribute field contains invalid characters only.',
    'uniqueness_of_listing_rule' => 'Ya ha publicado este anuncio. No se puede duplicar.',
    'uniqueness_of_unverified_listing_rule' => 'Ya ha publicado este anuncio. Verifique su dirección de correo electrónico o SMS para seguir las instrucciones de validación.',
    'accepted_if' => 'The :attribute must be accepted when :other is :value.',
    'current_password' => 'La contraseña es incorrecta.',
    'declined' => 'The :attribute must be declined.',
    'declined_if' => 'The :attribute must be declined when :other is :value.',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'enum' => 'The selected :attribute is invalid.',
    'gt' => [
        'array' => 'The :attribute must have more than :value items.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'numeric' => 'The :attribute must be greater than :value.',
        'string' => 'The :attribute must be greater than :value characters.',
    ],
    'gte' => [
        'array' => 'The :attribute must have :value items or more.',
        'file' => 'The :attribute must be greater than or equal to :value kilobytes.',
        'numeric' => 'The :attribute must be greater than or equal to :value.',
        'string' => 'The :attribute must be greater than or equal to :value characters.',
    ],
    'lt' => [
        'array' => 'The :attribute must have less than :value items.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'numeric' => 'The :attribute must be less than :value.',
        'string' => 'The :attribute must be less than :value characters.',
    ],
    'lte' => [
        'array' => 'The :attribute must not have more than :value items.',
        'file' => 'The :attribute must be less than or equal to :value kilobytes.',
        'numeric' => 'The :attribute must be less than or equal to :value.',
        'string' => 'The :attribute must be less than or equal to :value characters.',
    ],
    'mac_address' => 'The :attribute must be a valid MAC address.',
    'multiple_of' => 'The :attribute must be a multiple of :value.',
    'password' => [
        'letters' => 'El :attribute debe contener al menos una letra.',
        'mixed' => 'El :attribute debe contener al menos una letra mayúscula y una minúscula.',
        'numbers' => 'El :attribute debe contener al menos un número.',
        'symbols' => 'El :attribute debe contener al menos un símbolo.',
        'uncompromised' => 'El :attribute dado ha aparecido en una fuga de datos. Elija un :attribute diferente.',
    ],
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'uuid' => 'The :attribute must be a valid UUID.',
];
