<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'cart' => [
        'checkout' => 'Оплатить',
        'empty_cart' => 'Удалить все товары из корзины',
        'info' => ':count_delimited товар в корзине ($:subtotal)|:count_delimited товара в корзине ($:subtotal)|:count_delimited товаров в корзине ($:subtotal)',
        'more_goodies' => 'Я хочу посмотреть другие товары перед завершением заказа',
        'shipping_fees' => 'стоимость доставки',
        'title' => 'Корзина',
        'total' => 'итого',

        'errors_no_checkout' => [
            'line_1' => 'Ой-ой, обнаружены проблемы, мешающие завершить заказ!',
            'line_2' => 'Удалите товары выше или обновите их статус, чтобы продолжить.',
        ],

        'empty' => [
            'text' => 'Ваша корзина пуста.',
            'return_link' => [
                '_' => 'Вернитесь в :link, чтобы найти другие товары!',
                'link_text' => 'магазин',
            ],
        ],
    ],

    'checkout' => [
        'cart_problems' => 'Ой-ой, с вашей корзиной проблемы!',
        'cart_problems_edit' => 'Нажмите сюда, чтобы посмотреть.',
        'declined' => 'Ваш платеж был отменен.',
        'delayed_shipping' => 'Сейчас у нас слишком много заказов! Вы можете закать что-нибудь, но учтите, что доставка займёт **на 1-2 недели больше**, пока мы отправляем уже накопившиеся заказы.',
        'hide_from_activity' => 'Скрыть все сообщения о тегах osu!supporter из секции активности в моём профиле после покупки',
        'old_cart' => 'Ваша корзина, кажется, устарела и была перезагружена, пожалуйста попробуйте еще раз.',
        'pay' => 'Оплатить с PayPal',
        'title_compact' => 'проверка',

        'has_pending' => [
            '_' => 'У Вас есть незавершённые транзакции, нажмите :link, чтобы завершить их.',
            'link_text' => 'сюда',
        ],

        'pending_checkout' => [
            'line_1' => 'Ваш предыдущий платеж был начат, но не был завершен.',
            'line_2' => 'Продолжите оформление заказа, выбрав способ оплаты.',
        ],
    ],

    'discount' => 'вы сэкономите :percent%',
    'free' => 'бесплатно!',

    'invoice' => [
        'contact' => 'Контакты:',
        'date' => 'Дата:',
        'echeck_delay' => 'Поскольку вы оплатили заказ методом eCheck, пожалуйста, будьте готовы ожидать ещё до 10 дополнительных дней для прохождения оплаты через PayPal!',
        'echeck_denied' => 'Оплата через eCheck была отклонена PayPal.',
        'hide_from_activity' => 'сообщения о тегах osu!supporter после покупки не будут отображены в вашем профиле.',
        'sent_via' => 'Отправлено через:',
        'shipping_to' => 'Доставка в:',
        'title' => 'Чек',
        'title_compact' => 'чек',

        'status' => [
            'cancelled' => [
                'title' => 'Ваш заказ был отменён',
                'line_1' => [
                    '_' => "Если вы не отменяли заказ самостоятельно, пожалуйста, свяжитесь с :link, указав номер вашего заказа (#:order_number).",
                    'link_text' => 'поддержкой osu!store',
                ],
            ],
            'delivered' => [
                'title' => 'Ваш заказ доставлен! Мы надеемся, что он вам понравится!',
                'line_1' => [
                    '_' => 'Если у вас возникли проблемы с покупкой, пожалуйста, свяжитесь с :link.',
                    'link_text' => 'поддержкой osu!store',
                ],
            ],
            'prepared' => [
                'title' => 'Ваш заказ готовится к отправке!',
                'line_1' => 'Пожалуйста, дождитесь отправки заказа. Информация об отслеживании появится здесь после того, как заказ будет обработан и отправлен. Этот процесс может занять до 5 дней (но обычно меньше!) в зависимости от нашей загруженности.',
                'line_2' => 'Мы отправляем все заказы из Японии различными службами доставки в зависимости от веса и стоимости.  Подробности доставки появятся тут, как только мы отправим ваш заказ.',
            ],
            'processing' => [
                'title' => 'Ваш платеж ещё не подтверждён!',
                'line_1' => 'Если вы уже заплатили, мы все ещё можем ожидать подтверждения платежа. Пожалуйста, обновите эту страницу через минуту или две!',
                'line_2' => [
                    '_' => 'Если во время оплаты возникла проблема, :link',
                    'link_text' => 'нажмите здесь, чтобы продолжить оплату',
                ],
            ],
            'shipped' => [
                'title' => 'Ваш заказ отправлен!',
                'tracking_details' => 'Подробности отслеживания:',
                'no_tracking_details' => [
                    '_' => "У нас нет данных отслеживания, поскольку мы отправили ваш заказ авиапочтой, однако вы можете рассчитывать на их получение в течение 1-3 недель. Иногда таможня в Европе может задержать заказ вне нашего контроля. Если у вас остались вопросы, ответьте на полученное вами письмо с подтверждением заказа (или :link).",
                    'link_text' => 'отправьте нам письмо',
                ],
            ],
        ],
    ],

    'order' => [
        'cancel' => 'Отменить заказ',
        'cancel_confirm' => 'Этот заказ будет отменен и оплата за него не будет принята. Платёжная система не сразу вернёт вам средства. Вы уверены?',
        'cancel_not_allowed' => 'Этот заказ не может быть отменён прямо сейчас.',
        'invoice' => 'Посмотреть чек',
        'no_orders' => 'Вы ничего не заказывали.',
        'paid_on' => 'Заказ размещён :date',
        'resume' => 'Продолжить оплату',
        'shipping_and_handling' => 'Доставка и обработка',
        'shopify_expired' => 'Срок действия ссылки на чек вашего заказа кончился.',
        'subtotal' => 'Итого',
        'total' => 'Итого',

        'details' => [
            'order_number' => 'Заказ #',
            'payment_terms' => 'Условия оплаты',
            'salesperson' => 'Продавец',
            'shipping_method' => 'Способ доставки',
            'shipping_terms' => 'Условия доставки',
            'title' => 'Состав заказа',
        ],

        'item' => [
            'quantity' => 'количество',

            'display_name' => [
                'supporter_tag' => ':name для :username (:duration)',
            ],

            'subtext' => [
                'supporter_tag' => 'Сообщение: :message',
            ],
        ],

        'not_modifiable_exception' => [
            'cancelled' => 'Вы не можете изменить свой заказ, так как он был отменён.',
            'checkout' => 'Вы не можете изменить свой заказ, пока он обрабатывается.', // checkout and processing should have the same message.
            'default' => 'Заказ невозможно изменить',
            'delivered' => 'Вы не можете изменить свой заказ, так как он уже доставлен.',
            'paid' => 'Вы не можете изменить свой заказ, поскольку он уже оплачен.',
            'processing' => 'Вы не можете изменить свой заказ, пока он обрабатывается.',
            'shipped' => 'Вы не можете изменить свой заказ, так как он уже отправлен.',
        ],

        'status' => [
            'cancelled' => 'Отменено',
            'checkout' => 'Подготовка',
            'delivered' => 'Доставлено',
            'paid' => 'Оплачено',
            'processing' => 'Ожидает подтверждения',
            'shipped' => 'В пути',
            'title' => 'Статус заказа',
        ],

        'thanks' => [
            'title' => 'Спасибо за ваш заказ!',
            'line_1' => [
                '_' => 'В ближайшее время вы получите письмо с подтверждением заказа. Если у вас остались вопросы, пожалуйста, :link!',
                'link_text' => 'свяжитесь с нами',
            ],
        ],
    ],

    'product' => [
        'name' => 'Название',

        'stock' => [
            'out' => 'Сейчас данного товара нет в наличии. Загляните сюда позже!',
            'out_with_alternative' => 'К сожалению, данного товара нет в наличии. Используйте выпадающее меню, чтобы выбрать другой тип товара, или загляните сюда позже!',
        ],

        'add_to_cart' => 'Добавить в корзину',
        'notify' => 'Сообщить о поступлении!',

        'notification_success' => 'Вы будете оповещены, когда товар будет в наличии. Нажмите :link для отмены',
        'notification_remove_text' => 'сюда',

        'notification_in_stock' => 'Данный товар уже есть в наличии!',
    ],

    'supporter_tag' => [
        'gift' => 'подарок для игрока',
        'gift_message' => 'добавьте сообщение к вашему подарку! (до :length символов)',

        'require_login' => [
            '_' => 'Вы должны :link для покупки osu!supporter!',
            'link_text' => 'войти в аккаунт',
        ],
    ],

    'username_change' => [
        'check' => 'Введите ник, чтобы проверить его доступность!',
        'checking' => 'Проверяем доступность ника :username...',
        'placeholder' => 'Введите ник',
        'label' => 'Новый ник',
        'current' => 'Ваш текущий ник: ":username".',

        'require_login' => [
            '_' => 'Вы должны :link для смены никнейма!',
            'link_text' => 'войти в аккаунт',
        ],
    ],

    'xsolla' => [
        'distributor' => '',
    ],
];
