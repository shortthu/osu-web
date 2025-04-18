<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'cart' => [
        'checkout' => 'Завяршэнне пакупкі',
        'empty_cart' => '',
        'info' => ':count_delimited тавар у кошыку ($:subtotal)|:count_delimited прадметы ў кошыку  ($:subtotal)',
        'more_goodies' => 'Я хачу праглядзець іншыя тавары перад завяршэннем пакупкі',
        'shipping_fees' => 'кошт дастаўкі',
        'title' => 'Кошык',
        'total' => 'усяго',

        'errors_no_checkout' => [
            'line_1' => 'Ой ой, у вас праблемы з кошыкам, якія перашкаджаюць куплі!',
            'line_2' => 'Каб працягнуць, выдаліце або абнавіць рэчы ніжэй.',
        ],

        'empty' => [
            'text' => 'Ваш кошык пусты.',
            'return_link' => [
                '_' => 'Вярніцеся да :link, каб знайсці іншыя тавары!',
                'link_text' => 'спіс крамы',
            ],
        ],
    ],

    'checkout' => [
        'cart_problems' => 'Ой-ой, праблемы з вашай карткай!',
        'cart_problems_edit' => 'Каб рэдагаваць гэта, націсніце сюды.',
        'declined' => 'Аплата была скасаваная.',
        'delayed_shipping' => 'У дадзены момант у нас шмат заказаў. Вы можаце заказваць, але помніце, што яго апрацоўка можа займаць дадатковыя 1-2 тадні.',
        'hide_from_activity' => 'Схаваць усе паведамленні аб тэгах osu!supporter з секцыі актыўнасці ў маім профілі пасля куплі',
        'old_cart' => 'Ваш кошык, здаецца, састарэў і быў перазагружаны, паспрабуйце нанова.',
        'pay' => 'Аплата праз Paypal',
        'title_compact' => 'праверыць',

        'has_pending' => [
            '_' => 'Вы маеце незавершаныя пакупкі, націсніце :link каб праглядзець іх.',
            'link_text' => 'сюды',
        ],

        'pending_checkout' => [
            'line_1' => 'Папярэдняя пакупка была пачатая, але не завершаная.',
            'line_2' => 'Каб працягнуць пакупку, выберыце спосаб аплаты.',
        ],
    ],

    'discount' => 'эканомія: :percent%',
    'free' => '',

    'invoice' => [
        'contact' => '',
        'date' => '',
        'echeck_delay' => 'Так як аплата была праз eCheck, чаканне пацверджання аплаты праз Paypal можа займаць да 10 дзён!',
        'echeck_denied' => '',
        'hide_from_activity' => 'паведамленні аб тэгах osu!supporter пасля куплі не будуць адлюстраваны ў вашым профілі.',
        'sent_via' => '',
        'shipping_to' => '',
        'title' => '',
        'title_compact' => 'рахунак-фактура',

        'status' => [
            'cancelled' => [
                'title' => '',
                'line_1' => [
                    '_' => "",
                    'link_text' => '',
                ],
            ],
            'delivered' => [
                'title' => '',
                'line_1' => [
                    '_' => '',
                    'link_text' => '',
                ],
            ],
            'prepared' => [
                'title' => '',
                'line_1' => '',
                'line_2' => '',
            ],
            'processing' => [
                'title' => 'Ваша аплата яшчэ не была пацверджана!',
                'line_1' => 'Калі вы ўжо аплацілі, то мы ўсё яшчэ можам чакаць пацверджання вашай куплі. Каплі ласка, абнавіць старонку праз хвіліну або дзве!',
                'line_2' => [
                    '_' => 'Калі ўзнікла праблема падчас аплаты, то :link',
                    'link_text' => 'націсніце тут, каб узнавіць аплату',
                ],
            ],
            'shipped' => [
                'title' => '',
                'tracking_details' => '',
                'no_tracking_details' => [
                    '_' => "",
                    'link_text' => '',
                ],
            ],
        ],
    ],

    'order' => [
        'cancel' => 'Адмяніць заказ',
        'cancel_confirm' => 'Гэты заказ будзе адменены, і аплата за яго не будзе прынята. Пастаўшчык плацяжоў можа не вызваліць рэзерваваныя сродкі адразу. Вы ўпэўнены?',
        'cancel_not_allowed' => 'Зараз гэты заказ нельга адмяніць.',
        'invoice' => 'Праглядзець рахунак',
        'no_orders' => 'Няма заказаў для паказу.',
        'paid_on' => 'Заказ размешчаны :date',
        'resume' => 'Працягнуць пакупку',
        'shipping_and_handling' => '',
        'shopify_expired' => 'Тэрмін дзеяння спасылкі на заказ для гэтага замовы скончыўся.',
        'subtotal' => '',
        'total' => '',

        'details' => [
            'order_number' => '',
            'payment_terms' => '',
            'salesperson' => '',
            'shipping_method' => '',
            'shipping_terms' => '',
            'title' => '',
        ],

        'item' => [
            'quantity' => 'Колькасць',

            'display_name' => [
                'supporter_tag' => ':name для :username (:duration)',
            ],

            'subtext' => [
                'supporter_tag' => 'Паведамленне: :message',
            ],
        ],

        'not_modifiable_exception' => [
            'cancelled' => 'Вы не можаце змяніць свой заказ, так як ён быў скасаваны.',
            'checkout' => 'Вы не можаце змяніць свой заказ падчас яго апрацоўкі.', // checkout and processing should have the same message.
            'default' => 'Заказ немагчыма змяніць',
            'delivered' => 'Вы не можаце змяніць свой заказ, так як ён ужо быў дастаўлены.',
            'paid' => 'Вы не можаце змяніць свой заказ, так як ён ужо быў аплочаны.',
            'processing' => 'Вы не можаце змяніць свой заказ падчас яго апрацоўкі.',
            'shipped' => 'Вы не можаце змяніць свой заказ, так як ён ужо адпраўлены.',
        ],

        'status' => [
            'cancelled' => 'Скасавана',
            'checkout' => 'Падрыхтоўка',
            'delivered' => 'Дастаўлена',
            'paid' => 'Аплочана',
            'processing' => 'Чаканне пацвярджэння',
            'shipped' => 'У дарозе',
            'title' => '',
        ],

        'thanks' => [
            'title' => '',
            'line_1' => [
                '_' => '',
                'link_text' => '',
            ],
        ],
    ],

    'product' => [
        'name' => 'Назва',

        'stock' => [
            'out' => 'На дадзены момант гэтая рэч распродана. Праверце яе наяўнасць пазней!',
            'out_with_alternative' => 'На жаль, гэтай рэчы няма на складзе. Паспрабуйце іншыя параметры або праверце наяўнасць пазней!',
        ],

        'add_to_cart' => 'Дадаць да кошыку',
        'notify' => 'Апавясціць мяне, калі будзе даступна!',

        'notification_success' => 'вы будзеце абвешчаны аб наяўнасці рэчы. націсніце :link, каб скасаваць',
        'notification_remove_text' => 'сюды',

        'notification_in_stock' => 'Гэты прадукт ўжо наяўны для продажу!',
    ],

    'supporter_tag' => [
        'gift' => 'падарунак для гульца',
        'gift_message' => 'дадайце паведамленне да вашага падарунку! (да :length знакаў)',

        'require_login' => [
            '_' => 'Вы павінны :link, каб атрымаць тэг osu!supporter!',
            'link_text' => 'увайсці',
        ],
    ],

    'username_change' => [
        'check' => 'Увядзіце імя карыстальніка, каб праверыць яго даступнасць!',
        'checking' => 'Ідзе праверка даступнасці :username...',
        'placeholder' => '',
        'label' => '',
        'current' => '',

        'require_login' => [
            '_' => 'Вы павінны :link, каб змяніць імя карыстальніка!',
            'link_text' => 'увайсці',
        ],
    ],

    'xsolla' => [
        'distributor' => '',
    ],
];
