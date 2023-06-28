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

    'accepted' => ':attribute jābūt pieņemtam.',
    'accepted_if' => ':attribute jābūt pieņemtam, ja :other ir :value.',
    'active_url' => ':attribute nav derīgs URL.',
    'after' => ':attribute jābūt datumam pēc :date.',
    'after_or_equal' => ':attribute jābūt datumam pēc vai vienādam ar :date.',
    'alpha' => ':attribute var saturēt tikai burtus.',
    'alpha_dash' => ':attribute var saturēt tikai burtus, ciparus, domuzīmes un pasvītras.',
    'alpha_num' => ':attribute var saturēt tikai burtus un ciparus.',
    'array' => ':attribute jābūt masīvam.',
    'before' => ':attribute jābūt datumam pirms :date.',
    'before_or_equal' => ':attribute jābūt datumam pirms vai vienādam ar :date.',
    'between' => [
        'numeric' => ':attribute jābūt starp :min un :max.',
        'file' => ':attribute jābūt starp :min un :max kilobaitiem.',
        'string' => ':attribute jābūt starp :min un :max rakstzīmēm.',
        'array' => ':attribute jābūt starp :min un :max vienumiem.',
    ],
    'boolean' => ':attribute jābūt patiesam vai nepatiesam.',
    'confirmed' => ':attribute apstiprinājums nesakrīt.',
    'current_password' => 'Nepareiza parole.',
    'date' => ':attribute nav derīgs datums.',
    'date_equals' => ':attribute jābūt datumam, kas vienāds ar :date.',
    'date_format' => ':attribute neatbilst formātam :format.',
    'declined' => ':attribute jābūt noraidītam.',
    'declined_if' => ':attribute jābūt noraidītam, ja :other ir :value.',
    'different' => ':attribute un :other jābūt atšķirīgiem.',
    'digits' => ':attribute jābūt :digits ciparam.',
    'digits_between' => ':attribute jābūt starp :min un :max cipariem.',
    'dimensions' => ':attribute ir nederīgi attēla izmēri.',
    'distinct' => ':attribute laukam ir dublikāta vērtība.',
    'email' => ':attribute jābūt derīgai e-pasta adresei.',
    'ends_with' => ':attribute jābeidzas ar vienu no šādām vērtībām: :values.',
    'enum' => 'Izvēlētā :attribute ir nederīga.',
    'exists' => 'Izvēlētais :attribute ir nederīgs.',
    'file' => ':attribute jābūt failam.',
    'filled' => ':attribute laukam jābūt aizpildītam.',
    'gt' => [
        'numeric' => ':attribute jābūt lielākam par :value.',
        'file' => ':attribute jābūt lielākam par :value kilobaitiem.',
        'string' => ':attribute jābūt lielākam par :value rakstzīmēm.',
        'array' => ':attribute jābūt vairākam nekā :value vienumiem.',
    ],
    'gte' => [
        'numeric' => ':attribute jābūt lielākam vai vienādam ar :value.',
        'file' => ':attribute jābūt lielākam vai vienādam ar :value kilobaitiem.',
        'string' => ':attribute jābūt lielākam vai vienādam ar :value rakstzīmēm.',
        'array' => ':attribute jābūt :value vienumiem vai vairāk.',
    ],
    'image' => ':attribute jābūt attēlam.',
    'in' => 'Izvēlētais :attribute ir nederīgs.',
    'in_array' => ':attribute lauks neeksistē :other.',
    'integer' => ':attribute jābūt veselam skaitlim.',
    'ip' => ':attribute jābūt derīgai IP adresei.',
    'ipv4' => ':attribute jābūt derīgai IPv4 adresei.',
    'ipv6' => ':attribute jābūt derīgai IPv6 adresei.',
    'json' => ':attribute jābūt derīgam JSON tekstam.',
    'lt' => [
        'numeric' => ':attribute jābūt mazākam par :value.',
        'file' => ':attribute jābūt mazākam par :value kilobaitiem.',
        'string' => ':attribute jābūt mazākam par :value rakstzīmēm.',
        'array' => ':attribute jābūt mazākam par :value vienumiem.',
    ],
    'lte' => [
        'numeric' => ':attribute jābūt mazākam vai vienādam ar :value.',
        'file' => ':attribute jābūt mazākam vai vienādam ar :value kilobaitiem.',
        'string' => ':attribute jābūt mazākam vai vienādam ar :value rakstzīmēm.',
        'array' => ':attribute nedrīkst būt vairāk kā :value vienumi.',
    ],
    'mac_address' => ':attribute jābūt derīgai MAC adresei.',
    'max' => [
        'numeric' => ':attribute nedrīkst būt lielāks par :max.',
        'file' => ':attribute nedrīkst būt lielāks par :max kilobaitiem.',
        'string' => ':attribute nedrīkst būt garāks par :max rakstzīmēm.',
        'array' => ':attribute nedrīkst saturēt vairāk kā :max vienumus.',
    ],
    'mimes' => ':attribute jābūt failam ar tipu: :values.',
    'mimetypes' => ':attribute jābūt failam ar tipu: :values.',
    'min' => [
        'numeric' => ':attribute jābūt vismaz :min.',
        'file' => ':attribute jābūt vismaz :min kilobaitiem.',
        'string' => ':attribute jābūt vismaz :min rakstzīmēm.',
        'array' => ':attribute jābūt vismaz :min vienumiem.',
    ],
    'multiple_of' => ':attribute jābūt vairākuma no :value.',
    'not_in' => 'Izvēlētais :attribute ir nederīgs.',
    'not_regex' => ':attribute formāts ir nederīgs.',
    'numeric' => ':attribute jābūt skaitlim.',
    'password' => 'Parole ir nepareiza.',
    'present' => ':attribute laukam jābūt klāt.',
    'prohibited' => ':attribute lauks ir aizliegts.',
    'prohibited_if' => ':attribute lauks ir aizliegts, ja :other ir :value.',
    'prohibited_unless' => ':attribute lauks ir aizliegts, ja :other neatrodas :values.',
    'prohibits' => ':attribute lauks aizliedz :other lauka klātbūtni.',
    'regex' => ':attribute formāts ir nederīgs.',
    'required' => ':attribute lauks ir obligāts.',
    'required_array_keys' => ':attribute laukam jāsatur ieraksti: :values.',
    'required_if' => ':attribute lauks ir obligāts, ja :other ir :value.',
    'required_unless' => ':attribute lauks ir obligāts, ja :other neatrodas :values.',
    'required_with' => ':attribute lauks ir obligāts, ja :values ir klāt.',
    'required_with_all' => ':attribute lauks ir obligāts, ja :values ir klāt.',
    'required_without' => ':attribute lauks ir obligāts, ja :values nav klāt.',
    'required_without_all' => ':attribute lauks ir obligāts, ja neviens no :values nav klāt.',
    'same' => ':attribute un :other jāsakrīt.',
    'size' => [
        'numeric' => ':attribute jābūt :size.',
        'file' => ':attribute jābūt :size kilobaitiem.',
        'string' => ':attribute jābūt :size rakstzīmēm.',
        'array' => ':attribute jāsatur :size vienumi.',
    ],
    'starts_with' => ':attribute jāsākas ar vienu no šādiem: :values.',
    'string' => ':attribute jābūt teksta virknē.',
    'timezone' => ':attribute jābūt derīgai laika joslai.',
    'unique' => ':attribute jau ir aizņemts.',
    'uploaded' => ':attribute augšupielāde neizdevās.',
    'url' => ':attribute formāts ir nederīgs.',
    'uuid' => ':attribute jābūt derīgam UUID.',

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
