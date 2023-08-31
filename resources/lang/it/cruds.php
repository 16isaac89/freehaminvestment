<?php

return [
    'userManagement' => [
        'title'          => 'Gestione Utenti',
        'title_singular' => 'Gestione Utenti',
    ],
    'permission' => [
        'title'          => 'Permessi',
        'title_singular' => 'Permesso',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Ruoli',
        'title_singular' => 'Ruolo',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Utenti',
        'title_singular' => 'Utente',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'First Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
            'username'                 => 'Username',
            'username_helper'          => ' ',
            'phonenumber'              => 'Phone number',
            'phonenumber_helper'       => ' ',
            'picture'                  => 'Picture',
            'picture_helper'           => ' ',
            'second_name'              => 'Second Name',
            'second_name_helper'       => ' ',
            'fcmtoken'                 => 'Fcmtoken',
            'fcmtoken_helper'          => ' ',
        ],
    ],
    'auditLog' => [
        'title'          => 'Audit Logs',
        'title_singular' => 'Audit Log',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'description'         => 'Description',
            'description_helper'  => ' ',
            'subject_id'          => 'Subject ID',
            'subject_id_helper'   => ' ',
            'subject_type'        => 'Subject Type',
            'subject_type_helper' => ' ',
            'user_id'             => 'User ID',
            'user_id_helper'      => ' ',
            'properties'          => 'Properties',
            'properties_helper'   => ' ',
            'host'                => 'Host',
            'host_helper'         => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
        ],
    ],
    'management' => [
        'title'          => 'Management',
        'title_singular' => 'Management',
    ],
    'member' => [
        'title'          => 'Member',
        'title_singular' => 'Member',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => ' ',
            'first_name'           => 'First Name',
            'first_name_helper'    => ' ',
            'second_name'          => 'Second Name',
            'second_name_helper'   => ' ',
            'freham'               => 'Freham',
            'freham_helper'        => ' ',
            'phone_1'              => 'Phone 1',
            'phone_1_helper'       => ' ',
            'phone_2'              => 'Phone 2',
            'phone_2_helper'       => ' ',
            'dob'                  => 'Dob',
            'dob_helper'           => ' ',
            'profile_photo'        => 'Profile Photo',
            'profile_photo_helper' => ' ',
            'created_at'           => 'Created at',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => ' ',
        ],
    ],
    'share' => [
        'title'          => 'Share',
        'title_singular' => 'Share',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'quantity'          => 'Quantity',
            'quantity_helper'   => ' ',
            'amount'            => 'Amount',
            'amount_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'member'            => 'Member',
            'member_helper'     => ' ',
        ],
    ],
    'saving' => [
        'title'          => 'Savings',
        'title_singular' => 'Saving',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => ' ',
            'member'               => 'Member',
            'member_helper'        => ' ',
            'target_amount'        => 'Target Amount',
            'target_amount_helper' => ' ',
            'from_date'            => 'From Date',
            'from_date_helper'     => ' ',
            'to_date'              => 'To Date',
            'to_date_helper'       => ' ',
            'amount_saved'         => 'Amount Saved',
            'amount_saved_helper'  => ' ',
            'balance'              => 'Balance',
            'balance_helper'       => ' ',
            'created_at'           => 'Created at',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => ' ',
        ],
    ],
    'setting' => [
        'title'          => 'Setting',
        'title_singular' => 'Setting',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'value'             => 'Value',
            'value_helper'      => ' ',
            'code'              => 'Code',
            'code_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'faq' => [
        'title'          => 'Faq',
        'title_singular' => 'Faq',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'question'          => 'Question',
            'question_helper'   => ' ',
            'answer'            => 'Answer',
            'answer_helper'     => ' ',
            'image'             => 'Image',
            'image_helper'      => ' ',
            'images'            => 'Images',
            'images_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'page' => [
        'title'          => 'Pages',
        'title_singular' => 'Page',
    ],
    'team' => [
        'title'          => 'Team',
        'title_singular' => 'Team',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'image'              => 'Image',
            'image_helper'       => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'aboutUs' => [
        'title'          => 'About Us',
        'title_singular' => 'About Us',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'vision'            => 'Vision',
            'vision_helper'     => ' ',
            'mission'           => 'Mission',
            'mission_helper'    => ' ',
            'about'             => 'About',
            'about_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],

];
