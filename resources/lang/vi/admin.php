<?php

/**
 *    Copyright 2015-2017 ppy Pty. Ltd.
 *
 *    This file is part of osu!web. osu!web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of osu!.
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

return [

    'beatmapsets' => [
        'show' => [
            'discussion' => [
                '_' => 'Modding v2',
                'activate' => 'kích hoạt',
                'activate_confirm' => 'kích hoạt modding v2 cho beatmap này?',
                'active' => 'active',
                'inactive' => 'inactive',
            ],
        ],
    ],

    'forum' => [
        'forum-covers' => [
            'index' => [
                'delete' => 'Xóa',  // Delete

                'forum-name' => 'Forum #:id: :name',

                'no-cover' => 'No cover set',  // No cover set

                'submit' => [
                    'save' => 'Lưu',  // Save
                    'update' => 'Cập Nhật',  // Update
                ],

                'title' => 'Danh Sách Bìa Của Forum',  //Forum Covers List

                'type-title' => [
                    'default-topic' => 'Bìa chủ đề mặc định,'  // Default Topic Cover
                    'main' => 'Bìa Forum',  // Forum Cover
                ],
            ],
        ],
    ],

    'logs' => [
        'index' => [
            'title' => 'Log Viewer',
        ],
    ],

    'pages' => [
        'root' => [
            'title' => 'Đồ Chơi Điều Khiển Của Admin',  // Admin Console Thingy

            'sections' => [
                'forum' => 'Forum',  // Forum
                'general' => 'Thông tin chung', // General
                'store' => 'Cửa hàng',  // Store
            ],
        ],
    ],

    'store' => [
        'orders' => [
            'index' => [
                'title' => 'Danh Sách Đơn Hàng',  // Order Listing
            ],
        ],
    ],

    'users' => [
        'restricted_banner' => [
            'title' => 'Người dùng đang bị restricted.',  // This user is currently restricted.
            'message' => '(chỉ có admins có thể thấy)',  // (only admins can see this)
        ],
    ],

];
