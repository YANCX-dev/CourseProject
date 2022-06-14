<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('News')->insert([

            [
                'admin_id' => 1,
                'title' => "Восстановление сообщения с Казахстаном",
                'content' => 'Уважаемые пассажиры!
                 В связи с восстановлением регулярного автобусного сообщения с Республикой Казахстан с 15 апреля возобновляется рейс 21:35 по маршруту "Екатеринбург - Костанай".
                 Рейс будет выполняться в ежедневном режиме перевозчиками ООО "Урал-Авто" и ТОО "СП Кушнеров".
                 Билеты можно оформить в кассах автовокзала или на нашем сайте.
                 О возобновлении других маршрутов будет объявлено дополнительно.',
                'created_at'=>now(),
            ],
            [
                'admin_id' => 1,
                'title' => "Требуется подразделение транспортной безопасности",
                'content' => 'Требуется подразделение транспортной безопасности (далее исполнитель) для защиты объекта транспортной инфраструктуры второй категории автовокзала «Северный» (далее – ОТИ) от актов незаконного вмешательства (далее – АНВ), и обеспечения привлечения в соответствии с планом обеспечения транспортной безопасности подразделения транспортной безопасности, включающего группу быстрого реагирования, специально оснащенную, мобильную, круглосуточно выполняющую свои задачи по реагированию на подготовку совершения или совершение АНВ в зоне транспортной безопасности и/или на критических элементах ОТИ, на нарушения внутриобъектового и пропускного режимов в соответствии с требованиями Федеральный закон от 09.02.2007г. № 16-ФЗ «О транспортной безопасности», постановления Правительства Российской Федерации от 08.10.2020 №1642 «Об утверждении требований по обеспечению транспортной безопасности, в том числе требований к антитеррористической защищенности объектов (территорий), учитывающих уровни безопасности для различных категорий объектов транспортной инфраструктуры автомобильного транспорта», а также реализации мероприятий, направленных на исполнение Правил проведения досмотра, дополнительного досмотра, повторного досмотра в целях обеспечения транспортной безопасности на объекте, утвержденных приказом Министерства транспорта РФ от 23.07.2015г. № 227 «Об утверждении Правил проведения досмотра, дополнительного досмотра, повторного досмотра в целях обеспечения транспортной безопасности».',
                'created_at'=>now(),
            ],
            [
                'admin_id' => 1,
                'title' => "Рейс в Казахстан",
                'content' => 'Уважаемые пассажиры!В связи с многочисленными обращениями на 30 декабря 2021 года организован рейс до города Костанай (Республика Казахстан) отправлением в 21:00.Стоимость проезда 1700 рублей.Оформить провозные документы можно у дежурного администратора автовокзала.',
                'created_at'=>now(),
            ],
            [
                'admin_id' => 1,
                'title' => "Восстановление сообщения с Казахстаном",
                'content' => 'Уважаемые пассажиры!
                 В связи с восстановлением регулярного автобусного сообщения с Республикой Казахстан с 15 апреля возобновляется рейс 21:35 по маршруту "Екатеринбург - Костанай".
                 Рейс будет выполняться в ежедневном режиме перевозчиками ООО "Урал-Авто" и ТОО "СП Кушнеров".
                 Билеты можно оформить в кассах автовокзала или на нашем сайте.
                 О возобновлении других маршрутов будет объявлено дополнительно.',
                'created_at'=>now(),
            ],
            [
                'admin_id' => 1,
                'title' => "Требуется подразделение транспортной безопасности",
                'content' => 'Требуется подразделение транспортной безопасности (далее исполнитель) для защиты объекта транспортной инфраструктуры второй категории автовокзала «Северный» (далее – ОТИ) от актов незаконного вмешательства (далее – АНВ), и обеспечения привлечения в соответствии с планом обеспечения транспортной безопасности подразделения транспортной безопасности, включающего группу быстрого реагирования, специально оснащенную, мобильную, круглосуточно выполняющую свои задачи по реагированию на подготовку совершения или совершение АНВ в зоне транспортной безопасности и/или на критических элементах ОТИ, на нарушения внутриобъектового и пропускного режимов в соответствии с требованиями Федеральный закон от 09.02.2007г. № 16-ФЗ «О транспортной безопасности», постановления Правительства Российской Федерации от 08.10.2020 №1642 «Об утверждении требований по обеспечению транспортной безопасности, в том числе требований к антитеррористической защищенности объектов (территорий), учитывающих уровни безопасности для различных категорий объектов транспортной инфраструктуры автомобильного транспорта», а также реализации мероприятий, направленных на исполнение Правил проведения досмотра, дополнительного досмотра, повторного досмотра в целях обеспечения транспортной безопасности на объекте, утвержденных приказом Министерства транспорта РФ от 23.07.2015г. № 227 «Об утверждении Правил проведения досмотра, дополнительного досмотра, повторного досмотра в целях обеспечения транспортной безопасности».',
                'created_at'=>now(),
            ],
            [
                'admin_id' => 1,
                'title' => "Рейс в Казахстан",
                'content' => 'Уважаемые пассажиры!В связи с многочисленными обращениями на 30 декабря 2021 года организован рейс до города Костанай (Республика Казахстан) отправлением в 21:00.Стоимость проезда 1700 рублей.Оформить провозные документы можно у дежурного администратора автовокзала.',
                'created_at'=>now(),
            ],

        ]);

    }
}
