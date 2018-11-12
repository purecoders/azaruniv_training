<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'The :attribute must be accepted.',
    'active_url'           => 'The :attribute is not a valid URL.',
    'after'                => 'The :attribute must be a date after :date.',
    'after_or_equal'       => 'The :attribute must be a date after or equal to :date.',
    'alpha'                => 'The :attribute may only contain letters.',
    'alpha_dash'           => 'The :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num'            => 'The :attribute may only contain letters and numbers.',
    'array'                => 'The :attribute must be an array.',
    'before'               => 'The :attribute must be a date before :date.',
    'before_or_equal'      => 'The :attribute must be a date before or equal to :date.',
    'between'              => [
        'numeric' => ' :attribute  بین :min و :max.',
        'file'    => ' :attribute بین :min و :max کیلوبایت.',
        'string'  => ' :attribute بین :min و :max کاراکتر.',
        'array'   => ' :attribute بین :min و :max آیتم.',
    ],
    'boolean'              => ' :attribute باید صحیح یا غلط باشد',
    'confirmed'            => ' :attribute عدم مطابقت در',
    'date'                 => ' :attribute تاریخ معتبر نمیباشد',
    'date_format'          => 'The :attribute does not match the format :format.',
    'different'            => 'The :attribute and :other must be different.',
    'digits'               => 'The :attribute must be :digits digits.',
    'digits_between'       => 'The :attribute must be between :min and :max digits.',
    'dimensions'           => 'The :attribute has invalid image dimensions.',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => ' :attribute  باید یک آدرس ایمیل معتبر باشد',
    'exists'               => 'The selected :attribute is invalid.',
    'file'                 => ' :attribute باید یک فایل باشد',
    'filled'               => 'The :attribute field must have a value.',
    'gt'                   => [
        'numeric' => ' :attribute باید بزگتر از :value باشد.',
        'file'    => 'The :attribute must be greater than :value kilobytes.',
        'string'  => ' :attribute باید بزگتر از :value کاراکتر باشد.',
        'array'   => 'The :attribute must have more than :value items.',
    ],
    'gte'                  => [
        'numeric' => ' :attribute باید بزرگتر یا مساوی :value باشد.',
        'file'    => 'The :attribute must be greater than or equal :value kilobytes.',
        'string'  => ' :attribute باید بزگتر یا مساوی :value کاراکتر باشد.',
        'array'   => 'The :attribute must have :value items or more.',
    ],
    'image'                => ' :attribute باید یک تصویر باشد',
    'in'                   => 'The selected :attribute is invalid.',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => 'The :attribute must be an integer.',
    'ip'                   => 'The :attribute must be a valid IP address.',
    'ipv4'                 => 'The :attribute must be a valid IPv4 address.',
    'ipv6'                 => 'The :attribute must be a valid IPv6 address.',
    'json'                 => 'The :attribute must be a valid JSON string.',
    'lt'                   => [
        'numeric' => ' :attribute باید کوچکتر از :value باشد.',
        'file'    => 'The :attribute must be less than :value kilobytes.',
        'string'  => ' :attribute باید کوچکتر از :value کاراکتر باشد.',
        'array'   => 'The :attribute must have less than :value items.',
    ],
    'lte'                  => [
        'numeric' => ' :attribute باید کوچکتر یا مساوی :value باشد.',
        'file'    => 'The :attribute must be less than or equal :value kilobytes.',
        'string'  => ' :attribute باید کوچکتر یا مساوی :value کاراگتر باشد.',
        'array'   => 'The :attribute must not have more than :value items.',
    ],
    'max'                  => [
        'numeric' => ' :attribute نمیتواند بزرگتر از :max  باشد.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => ' :attribute باید کوچکتر از :max کاراکتر باشد.',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes'                => 'The :attribute must be a file of type: :values.',
    'mimetypes'            => 'The :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => ' :attribute باید حداقل :min باشد.',
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => ' :attribute باید حداقل :min کاراکتر باشد.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'not_regex'            => 'The :attribute format is invalid.',
    'numeric'              => ' :attribute باید یک عدد باشد',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'The :attribute format is invalid.',
    'required'             => ' :attribute باید وارد شود',
    'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'The :attribute field is required when :values is present.',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'The :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'The :attribute must be :size.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'               => ' :attribute باید یک متن باشد.',
    'timezone'             => 'The :attribute must be a valid zone.',
    'unique'               => ' :attribute قبلا استفاده شده است',
    'uploaded'             => ' :attribute خطا در آپلود',
    'url'                  => ' :attribute فرمت اشتباه میباشد',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
