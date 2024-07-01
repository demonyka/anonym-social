<?php

return [
    'required' => 'Поле :attribute обязательно для заполнения',
    'string' => 'Поле :attribute должно быть строкой',
    'min' => [
        'string' => 'Поле :attribute должно содержать не менее :min символов',
    ],
    'max' => [
        'string' => 'Поле :attribute должно содержать не более :max символов',
    ],
    'email' => 'Поле :attribute не является адресом электронной почты',
    'confirmed' => 'Поле :attribute не совпадает с подтверждением',
    'regex' => 'Поле :attribute имеет неправильный формат',
    'mimes' =>  'Для файла :attribute допустимы следующие форматы: :values',
    'uploaded' => 'При загрузке файла :attribute произошла ошибка',
    'unique' => 'Значение в поле :attribute уже зарегистрировано',
    'attributes' => [
        'username' => '«Никнейм»',
        'email' => '«Почта»',
        'password' => '«Пароль»',
        'name' => '«Имя»',
        'file' => '«Файл»',
        'banner' => '«Баннер»',
        'avatar' => '«Аватар»',
    ],
];
