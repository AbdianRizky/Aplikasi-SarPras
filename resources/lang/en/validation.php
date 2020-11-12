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

    'accepted' => ':attribute harus di centang.',
    'active_url' => ':attribute bukan URL yang valid.',
    'after' => ':attribute harus setelah tanggal :date.',
    'after_or_equal' => ':attribute harus setelah atau di tanggal :date.',
    'alpha' => ':attribute hanya boleh berisi huruf.',
    'alpha_dash' => ':attribute hanya boleh berisi huruf, angka, tanda hubung dan dan garis bawah.',
    'alpha_num' => ':attribute hanya boleh berisi huruf dan angka.',
    'array' => ':attribute harus berupa himpunan(array).',
    'before' => ':attribute harus sebelum tanggal :date.',
    'before_or_equal' => ':attribute harus sebelum atau di tanggal :date.',
    'between' => [
        'numeric' => ':attribute harus di antara :min dan :max.',
        'file' => ':attribute harus di antara :min dan :max kilobyte.',
        'string' => ':attribute harus di antara :min dan :max karakter.',
        'array' => ':attribute harus ada di antara :min dan :max item.',
    ],
    'boolean' => ':attribute harus berupa benar atau salah.',
    'confirmed' => ':attribute konfirmasi tidak cocok.',
    'date' => ':attribute tanggal tidak valid.',
    'date_equals' => ':attribute harus sama dengan tanggal :date.',
    'date_format' => ':attribute tidak sama dengan format :format.',
    'different' => ' :attribute dan :other tidak boleh sama.',
    'digits' => ':attribute harus berupa :digits angka.',
    'digits_between' => ':attribute harus di antara :min dan :max angka.',
    'dimensions' => ':attribute memiliki dimensi gambar yang tidak valid.',
    'distinct' => ':attribute memiliki nilai duplikat.',
    'email' => ':attribute Harus alamat e-mail yang valid.',
    'ends_with' => ':attribute harus diakhiri dengan salah satu dari berikut ini: :values.',
    'exists' => 'pilihan :attribute tidak valid.',
    'file' => ':attribute harus berupa file.',
    'filled' => ':attribute harus berupa nilai.',
    'gt' => [
        'numeric' => ':attribute harus lebih besar dari :value.',
        'file' => ':attribute harus lebih besar dari :value kilobyte.',
        'string' => ':attribute harus lebih besar dari :value karakter.',
        'array' => ':attribute harus punya lebih dari :value item.',
    ],
    'gte' => [
        'numeric' => ':attribute harus lebih besar atau sama dengan :value.',
        'file' => ':attribute harus lebih besar atau sama dengan :value kilobytes.',
        'string' => ':attribute harus lebih besar atau sama dengan :value characters.',
        'array' => ':attribute harus punya :value item atau lebih.',
    ],
    'image' => ':attribute harus berupa gambar.',
    'in' => 'pilihan :attribute tidak valid.',
    'in_array' => ':attribute tidak ada di :other.',
    'integer' => ':attribute harus bilangan bulat.',
    'ip' => 'IP address harus valid.',
    'ipv4' => 'IPv4 address harus valid.',
    'ipv6' => 'IPv6 address harus valid.',
    'json' => 'JSON string harus valid.',
    'lt' => [
        'numeric' => ':attribute harus kurang dari :value.',
        'file' => ':attribute harus kurang dari :value kilobyte.',
        'string' => ':attribute harus kurang dari :value karakter.',
        'array' => ':attribute harus punya kurang dari :value item.',
    ],
    'lte' => [
        'numeric' => ':attribute harus kurang atau sama dengan  :value.',
        'file' => ':attribute harus kurang atau sama dengan :value kilobyte.',
        'string' => ':attribute harus kurang atau sama dengan :value karakter.',
        'array' => ':attribute tidak boleh lebih dari :value item.',
    ],
    'max' => [
        'numeric' => ':attribute mungkin tidak lebih dari :max.',
        'file' => ':attribute mungkin tidak lebih dari :max kilobyte.',
        'string' => ':attribute mungkin tidak lebih dari :max karakter.',
        'array' => ':attribute may not have more than :max item.',
    ],
    'mimes' => ':attribute harus berupa file dengan tipe: :values.',
    'mimetypes' => ':attribute harus berupa file dengan tipe: :values.',
    'min' => [
        'numeric' => ':attribute setidaknya harus :min.',
        'file' => ':attribute setidaknya harus :min kilobyte.',
        'string' => ':attribute setidaknya harus :min karakter.',
        'array' => ':attribute must have at least :min item.',
    ],
    'multiple_of' => ':attribute harus kelipatan :value',
    'not_in' => 'pilihan :attribute tidak valid.',
    'not_regex' => ':attribute format tidak valid.',
    'numeric' => ':attribute harus berupa angka.',
    'password' => 'password salah.',
    'present' => ':attribute harus ada.',
    'regex' => ':attribute format tidak valid.',
    'required' => ':attribute harus di isi.',
    'required_if' => ':attribute harus di isi ketika :other adalah :value.',
    'required_unless' => ':attribute harus di isi kecuali :other ada dalam :values.',
    'required_with' => ':attribute harus di isi ketika :values ada.',
    'required_with_all' => ':attribute harus di isi ketika :values ada.',
    'required_without' => ':attribute harus di isi ketika :values tidak ada.',
    'required_without_all' => ':attribute harus di isi ketika none of :values ada.',
    'same' => ':attribute dan :other harus cocok.',
    'size' => [
        'numeric' => ':attribute harus :size.',
        'file' => ':attribute harus :size kilobyte.',
        'string' => ':attribute harus :size karakter.',
        'array' => ':attribute harus berisi :size item.',
    ],
    'starts_with' => ':attribute harus dimulai dengan salah satu dari berikut ini: :values.',
    'string' => ':attribute harus berupa abjad.',
    'timezone' => ':attribute harus di zona yang valid.',
    'unique' => ':attribute sudah ada, cuba yang lain.',
    'uploaded' => ':attribute gagal di unggah.',
    'url' => ':attribute format tidak valid.',
    'uuid' => ':attribute harus UUID yang valid.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
