<?php

return [
    'accepted'         => ':attribute必須被接受',
    'active_url'       => ':attribute不是有效的連結',
    'after'            => ':attribute必須是:date之後的日期',
    'after_or_equal'   => ':attribute必須是:date之後或當天的日期',
    'alpha'            => ':attribute只包含字母',
    'alpha_dash'       => ':attribute只包含字母、數字以及底線',
    'alpha_num'        => ':attribute只包含字母以及數字',
    'latin'            => ':attribute 可能只包含 ISO 基本拉丁字母',
    'latin_dash_space' => ':attribute 可能只包含 ISO 基本拉丁字母、數字、破折號、連字符和空格',
    'array'            => ':attribute必須是陣列',
    'before'           => ':attribute必須是:date之前的時間',
    'before_or_equal'  => ':attribute必須是:date之後或當天的日期',
    'between'          => [
        'numeric' => ':attribute必須介於:min和:max之間',
        'file'    => ':attribute必須介於:min千和:max千之間',
        'string'  => ':attribute必須介於:min和:max個字之間',
        'array'   => ':attribute必須介於:min和:max個項目之間',
    ],
    'boolean'          => ':attribute必須是真或假',
    'confirmed'        => ':attribute 驗證不符',
    'current_password' => 'The password is incorrect.',
    'date'             => ':attribute並不是正確的日期',
    'date_equals'      => ':attribute必須是:date當天的日期',
    'date_format'      => ':attribute並乎合:format的格式要求',
    'different'        => ':attribute和:other 必須是不一樣的',
    'digits'           => ':attribute必須是:digits位數',
    'digits_between'   => ':attribute必須介於:min位數和:max位數之間',
    'dimensions'       => ':attribute存在錯誤的圖片尺寸',
    'distinct'         => ':attribute必須是雙數',
    'email'            => ':attribute必須是個有效的電子郵件',
    'ends_with'        => ':attribute 必須以下列\":values\"之一結束',
    'exists'           => '選取的:attribute無效',
    'file'             => ':attribute必須是個檔案',
    'filled'           => ':attribute必須填寫',
    'gt'               => [
        'numeric' => ':attribute 必須大於 :value',
        'file'    => ':attribute 必須大於 :value 千字節',
        'string'  => ':attribute 必須大於 :value 字符',
        'array'   => ':attribute 必須有多個 :value 項',
    ],
    'gte' => [
        'numeric' => ':attribute 必須大於或等於 :value',
        'file'    => ':attribute 必須大於或等於 :value 千字節',
        'string'  => ':attribute 必須大於或等於 :value 字符',
        'array'   => ':attribute 必須有 :value 項或更多項',
    ],
    'image'    => ':attribute必須是圖片',
    'in'       => '選取的:attribute無效',
    'in_array' => ':attribute屬性在 :other裡不存在',
    'integer'  => ':attribute必須是整數',
    'ip'       => ':attribute必須是有效的IP地址',
    'ipv4'     => ':attribute 必須是有效的 IPv4 地址',
    'ipv6'     => ':attribute 必須是有效的 IPv6 地址',
    'json'     => ':attribute必須是有效的JSON字串',
    'lt'       => [
        'numeric' => ':attribute 必須小於 :value',
        'file'    => ':attribute 必須小於 :value 千字節',
        'string'  => ':attribute 必須小於 :value 字符',
        'array'   => ':attribute 必須少於 :value 項',
    ],
    'lte' => [
        'numeric' => ':attribute 必須小於或等於 :value',
        'file'    => ':attribute 必須小於或等於 :value 千字節',
        'string'  => ':attribute 必須小於或等於 :value 字符',
        'array'   => ':attribute 不能超過 :value 項',
    ],
    'max' => [
        'numeric' => ':attribute不能大於  :max',
        'file'    => ':attribute不能大於:max kb',
        'string'  => ':attribute不能大於 :max 個字元',
        'array'   => ':attribute不能大於:max項',
    ],
    'mimes'     => ':attribute 必須是： :values類型的檔案',
    'mimetypes' => ':attribute 必須是： :values類型的檔案',
    'min'       => [
        'numeric' => ':attribute必須至少 :min 分',
        'file'    => ':attribute必須至少 :min kb',
        'string'  => ':attribute必須至少 :min 個字元',
        'array'   => ':attribute必須至少:min項',
    ],
    'not_in'               => '所選的:attribute是無效的',
    'not_regex'            => ':attribute格式無效',
    'numeric'              => ':attribute必須是個數字',
    'password'             => '密碼錯誤',
    'present'              => ':attribute的值域必須是現在的',
    'regex'                => ':attribute的格式是失效的',
    'required'             => ':attribute值域是必須的',
    'required_if'          => '當:other是:value，:attribute的值域是必須的',
    'required_unless'      => '除非:other是在:values裡，則:attribute的值域是必須的',
    'required_with'        => '當:values是現在:attribute的值是必須的',
    'required_with_all'    => '當:values是現在:attribute的值是必須的',
    'required_without'     => '當:values不是現在:attribute的值是必須的',
    'required_without_all' => '當沒有:values是現在:attribute的值是必須的',
    'same'                 => ':attribute和:other 必須是相符的',
    'size'                 => [
        'numeric' => ':attribute一定是:size的大小',
        'file'    => ':attribute一定是:size千的大小',
        'string'  => ':attribute一定是:size大小的字',
        'array'   => ':attribute必須包含:size大小的項目',
    ],
    'starts_with' => ':attribute 必須開始於這個值',
    'string'      => ':attribute必須是一串字串',
    'timezone'    => ':attribute必須是一個有效的範圍',
    'unique'      => ':attribute已經被取用',
    'uploaded'    => ':attribute上傳失敗',
    'url'         => ':attribute的格式是無效的',
    'uuid'        => ':attribute必須是組合法ID',
    'custom'      => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'reserved_word'                  => ':attribute含保留字',
    'dont_allow_first_letter_number' => '\":input\"欄位輸入第一個字元不得為數字',
    'exceeds_maximum_number'         => ':attribute 超過最大模型長度',
    'db_column'                      => ':attribute必須是符合ISO編碼的拉丁字母、數字，且第一個字元不得為數字',
    'attributes'                     => [],

];
