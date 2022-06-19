<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ElementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('elements')->insert([
            [
                'content' => "<h1>Способы покупки билетов<br><br></h1>
<p>Северный автостанция делает услугу удобной для пассажиров, поэтому уже сегодня приобрести билет отправлением от нашего автостанцияа Вы сможете любым наиболее удобным для Вас способом:<br><br></p>
<ul>
<li>в кассах автостанции;</li>
<li>на нашем сайте;</li>
<li>в терминале самообслуживания в кассовом зале автостанции (оплата только банковскими картами);</li>
<li>в кассах автостанции, автостанции и кассовых пунктов</li>
</ul>",
                'page_id' => 1
            ],
            ['content' => '<h1>Правила возврата билетов<br><br></h1>
<p>При возврате билета на автобус комиссионный сбор сайта не возвращается.<br><br>Чтобы вернуть электронный билет,
 напишите нам на quicstation@yandex.ru.<br><br>Билеты, оформленные в кассах автовокзала, можно вернуть только в кассах.
<br><br><br>При возврате неиспользованных проездных документов, оплаченных банковской картой, возврат денежных средств
 осуществляется на банковскую карту. Зачисление денежных средств осуществляется банком-эмитентом в установленные банком сроки,
но не более 10 дней.<br><br>Удержание при возврате (основание 259-ФЗ от 08.11.2007 ст.23):<br><br>При срыве и опоздании (задержке)
 рейса более 1 часа полный возврат стоимости тарифа<br>За 2 часа и более до отправления 5%<br>Менее чем за 2 часа до отправления 15%<br>
В течение 3 часов после отправления 25%</p>',
                'page_id' => 2,
            ],
            [
                'content' => "<h1>Правила пользования услугами автостанции<br><br></h1>
                 <p>Настоящие Правила разработаны в соответствии с Федеральным законом от 08.11.2007 № 259-ФЗ &laquo;
                 Устав автомобильного транспорта и городского наземного электрического транспорта&raquo; и Постановлением
                  Правительства Российской Федерации от 01.10.2020 № 1586 &laquo;Правила перевозок пассажиров и багажа автомобильным
                   транспортом и городским наземным электрическим транспортом&raquo;<br><br>(в редакции от 05.04.2021)<br><br><br>1.
                    &laquo;Северный автовокзал&raquo; - объект транспортной инфраструктуры, включающий в себя комплекс зданий и сооружений,
                     предназначенный для оказания услуг пассажирам и перевозчикам при осуществлении регулярных перевозок пассажиров и багажа,
                      а также при выполнении заказных рейсов, находящийся на территории, расположенной по адресу: г. Екатеринбург, ул. Вокзальная,
                       15.<br><br>2.Комплекс зданий и сооружений &laquo;Северного автовокзала&raquo; включает в себя основное здание &laquo;Северного
                        автовокзала&raquo; и территорию технологической зоны для транспорта и пассажиров (далее &ndash; территория &laquo;Северного
                         автовокзала&raquo;).<br><br>3.Режим работы &laquo;Северного автовокзала&raquo; круглосуточный. Регулярные перевозки пассажиров
                          и багажа осуществляются в соответствии со сводным расписанием движения автобусов, отправляющихся в рейс с территории &laquo;
                          Северного автовокзала&raquo;, размещенным на 1 этаже основного здания &laquo;Северного автовокзала&raquo;.<br><br>3.1.В основном
                          здании &laquo;Северного автовокзала&raquo; расположены:<br><br>- билетные кассы для продажи билетов и оплаты багажа;<br><br>-
                          зал ожидания для пассажиров;<br><br>- комната матери и ребенка;<br><br>- туалеты;<br><br>- камера хранения вещей;<br><br>- пункты
                           общественного питания;<br><br>- пункт оказания первой помощи с аптечкой для оказания первой помощи;<br><br>- кабинет для проведения
                            предрейсового, межрейсового медицинского осмотра водителей;<br><br>- комнаты отдыха водителей;<br><br>- хостел;<br><br>- окно дежурного
                             администратора;<br><br>- справочная служба;<br><br>- пост охраны;<br><br>- магазины;<br><br>- администрация &laquo;Северного
                              автовокзала&raquo;;<br><br>- прочие помещения.<br><br>3.2.На территории &laquo;Северного автовокзала&raquo; расположены:<br><br>-
                              13 перронов для посадки пассажиров в автобусы;<br><br>- 4 перрона для высадки пассажиров из автобусов;<br><br>- площадка для стоянки
                               автобусов;<br><br>- пост для уборки и осмотра автобусов;<br><br>- павильоны общественного питания и торговли для
                                удобства пассажиров;<br><br>- здание платного туалета повышенной комфортности.<br><br>4.На &laquo;Северном
                                автовокзале&raquo; пассажирам оказываются следующие услуги:<br><br>- продажа билетов, в т.ч.
                                 бронирование;<br><br>- оформление договоров фрахтования при организации перевозки заказными рейсами;<br><br>-
                                 хранение ручной клади и багажа;<br><br>- предоставление справочной информации;<br><br>- прочие услуги.<br><br>
                                 Пассажир имеет право бесплатного пользования размещенными в зданиях &laquo;Северного автовокзала&raquo; залами
                                  ожидания и туалетами при наличии билета на перевозку по маршруту регулярных перевозок, в состав которого
                                   включен &laquo;Северный автовокзал&raquo;, либо копии электронного билета на бумажном
                                    носителе или в виде изображения на экране мобильного устройства.<br><br>5. На территории
                                     и в здании Северного автовокзала, в соответствии с требованиями законодательства о
                                      транспортной безопасности, ведется видеонаблюдение. В кассах автовокзала, у окна
                                      администратора и в справочной службе ведется аудиозапись.<br><br>6. Продажа и возврат
                                       билетов на регулярные рейсы, организация перевозки заказными рейсами.<br><br>6.1.
                                        Правила продажи билетов на регулярные рейсы.<br><br>6.1.1. Продажа билетов на проезд
                                        и провоз багажа на международные, междугородные и пригородные маршруты на все направления
                                         осуществляется в кассах, расположенных в основном здании &laquo;Северного автовокзала&raquo;
                                         , автомате для продажи билетов, через платежные терминалы и агентства, на сайте &laquo;Северного
                                          автовокзала&raquo;: www.avtovokzal-ekb.ru.<br><br>6.1.2.
                                          Продажа билетов в кассах &laquo;Северного автовокзала&raquo;
                                           начинается не менее чем за 10 суток до отправления автобуса.
                                           <br><br>6.1.3. Продажа билетов в кассах &laquo;Северного автовокзала&raquo;
                                            прекращается за 5 минут до отправления автобуса.<br><br>6.1.4. Стоимость проезда
                                             (тариф) устанавливает перевозчик.<br><br>6.1.5. При продаже билетов могут оказываться
                                              дополнительные услуги за дополнительную плату.<br><br>6.1.6. Режим работы касс по продаже
                                              билетов, расположенных в основном здании &laquo;Северного автовокзала&raquo;: круглосуточный.
                                              <br><br>6.1.7. Пассажир обязан сохранить проездные документы до окончания поездки и предъявить
                                              их в любое время перевозчику, его представителю, иному уполномоченному лицу. В случае предоставления
                                               пассажиру льгот и преимуществ при оплате, а также в случае оформления именного билета предъявляются
                                               также документы, на основании которого оформлен проездной документ.<br><br>6.2. Правила продажи льготных
                                                билетов на регулярные рейсы.<br><br>6.2.1. В кассах &laquo;Северного автовокзала&raquo; граждане, имеющие
                                                 право льготного проезда в соответствии с действующим законодательством РФ (субъекта РФ), могут приобрести
                                                  льготные билеты.<br><br>6.2.2. Льготные билеты оформляются на основании документа, удостоверяющего личность
                                                   пассажира, установленного образца (для детей в возрасте до 14 лет - свидетельства о рождении) и документа
                                                   , подтверждающего право на льготный проезд в соответствии с действующим законодательством РФ (субъекта РФ).
                                                   <br><br>6.3. Правила продажи именных билетов на регулярные рейсы.<br><br>6.3.1.В случае, если в соответствии с
                                                    законодательством РФ персональные данные о пассажирах подлежат передаче в автоматизированные централизованные базы персональных данных о пассажирах, регулярные перевозки осуществляются с использованием именных билетов. Именные билеты оформляются на основании документа, удостоверяющего личность пассажира в соответствии с законодательством РФ (для детей в возрасте до 14 лет - свидетельства о рождении).<br><br>6.4. Правила продажи электронных билетов.<br><br>6.4.1. Электронные проездные билеты - билеты, оформленные в электронном виде с размещением всех его реквизитов в автоматизированной информационной системе, предназначенной для хранения таких реквизитов.<br><br>6.4.2. Электронные проездные билеты оформляются на основании документа, удостоверяющего личность, установленного образца (для детей до 14 лет -на основании свидетельства о рождении).<br><br>6.5. Правила возврата билетов на регулярные рейсы.<br><br>6.5.1. Возврат денег за проезд, перевозку багажа и провоз ручной клади производится в пункте продажи билетов, в котором пассажир приобрел билет, а также в иных пунктах продажи билетов, указанных перевозчиком. Билеты, приобретенные в кассе &laquo;Северного автовокзала&raquo;, возвращаются в любую кассу &laquo;Северного автовокзала&raquo;.<br><br>6.5.2. В случае оформления билета по безналичному расчету или с использованием платежной карты возврат денег за проезд, перевозку багажа и провоз ручной клади производится на банковский счет юридического или физического лица, оплатившего проезд, перевозку багажа и провоз ручной клади.<br><br>6.5.3. Возврат электронных билетов, приобретенных на сайте &laquo;Северного автовокзала&raquo;: www.avtovokzal-ekb.ru, а также на сайтах других агрегаторов осуществляется в порядке, указанном на этих сайтах.<br><br>6.5.4. Возврат денежных средств в кассах &laquo;Северного автовокзала&raquo; осуществляется при предъявлении пассажиром:<br><br>- билета, багажной квитанции;<br><br>- документа, удостоверяющего личность, на основании которого был оформлен билет;<br><br>- документа, подтверждающего наличие преимущества или льготы, на основании которого оформлен билет (если применимо);<br><br>- заявления пассажира на возврат;<br><br>- банковской карты, с помощью которой был оплачен билет, багажная квитанция (при безналичной оплате).<br><br>6.5.6. Пассажир имеет право:<br><br>1) в случае опоздания к отправлению транспортного средства в течение 3 часов или вследствие болезни, несчастного случая в течение 3 суток с момента отправления транспортного средства, на которое был приобретен билет, возобновить действие билета на другое транспортное средство при условии доплаты, размер которой составляет 25% стоимости проезда, перевозки багажа, провоза ручной клади, или получить обратно стоимость проезда, перевозки багажа, провоза ручной клади за вычетом 25% их стоимости;<br><br>2) в случае возврата билета в кассу не позднее чем за 2 часа до отправления транспортного средства получить обратно стоимость проезда, перевозки багажа, провоза ручной клади за вычетом 5% их стоимости или в случае возврата билета позднее этого срока, но до отправления транспортного средства получить обратно стоимость проезда, перевозки багажа, провоза ручной клади за вычетом 15% их стоимости;<br><br>3) в случае невозможности продолжения перевозки пассажира до пункта его назначения по не зависящим от перевозчика причинам получить обратно стоимость проезда, перевозки багажа, провоза ручной клади пропорционально непроследованному расстоянию;<br><br>4) возвратить билет в кассу до отправления транспортного средства и получить обратно полную стоимость проезда, перевозки багажа, провоза ручной клади в следующих случаях:<br><br>а) отмена отправления транспортного средства;<br><br>б) задержка отправления транспортного средства более чем на час;<br><br>в) предоставление пассажиру места в транспортном средстве с оплатой проезда по более низкой цене, чем в том транспортном средстве, на проезд в котором пассажиру продан билет;<br><br>г) непредоставление пассажиру указанного в билете места;<br><br>5) в случае согласия на проезд в транспортном средстве с оплатой проезда по более низкой цене получить разницу между оплаченной суммой и причитающейся за проезд, перевозку багажа, провоз ручной клади платой;<br><br>6) в случае предоставления транспортного средства с оплатой проезда, перевозки багажа, провоза ручной клади по более высокой цене, чем в транспортном средстве, указанном в расписании, осуществить проезд, перевозку багажа, провоз ручной клади без доплаты.<br><br>6.6. Правила бронирования билетов на регулярные рейсы<br><br>6.6.1. Бронирование билетов осуществляется по телефонам Справочной службы:(343) 379-09-09, 385-68-58.<br><br>6.6.2. Бронирование билетов начинается не менее чем за 10 суток до отправления автобуса и заканчивается за 3 часа до отправления автобуса в рейс согласно расписанию.<br><br>6.6.3. Стоимость бронирования за один билет составляет 30 рублей.<br><br>6.6.4. Бронь на невыкупленные билеты в кассах &laquo;Северного автовокзала&raquo; снимается за 3 часа до отправления автобуса в рейс согласно расписанию.<br><br>6.7. Правила выдачи дубликатов проездных документов.<br><br>6.7.1. При утере именного проездного билета или договора фрахтования по заявлению пассажира при предъявлении документа, удостоверяющего личность, на основании которого был оформлен билет (договор фрахтования), пассажиру выдается дубликат проездного документа.<br><br>6.7.2. Дубликат выдается с 8:00 ч. до 20:00 ч. дежурным администратором (кассовый зал здания &laquo;Северного автовокзала&raquo;), а с 20:00 ч.до 08:00 ч.- в кассах &laquo;Северного автовокзала&raquo;.<br><br>6.7.3. Для возобновления действия утерянных или испорченных не именных билетов, багажной квитанции, дубликаты таких документов выдается в случае установления факта их принадлежности пассажиру перевозчиком (уполномоченным лицом перевозчика) на основании обращения пассажира.<br><br>Возврат пассажиру стоимости проезда, перевозки багажа, провоза ручной клади в междугородном сообщении при предъявлении дубликатов таких билетов, квитанций производится в порядке, аналогичном порядку, установленному пунктом 6.5 настоящих Правил.<br><br>6.7.4. Действие утерянных или испорченных билета на конкретное место в транспортном средстве, багажной квитанции, квитанции на провоз ручной клади не возобновляется и уплаченные за них деньги не возвращаются в случае, если в соответствии с порядком, установленным правилами перевозок пассажиров, перевозчиком (уполномоченным лицом перевозчика) не может быть осуществлено их восстановление или пассажиром не могут быть представлены доказательства, подтверждающие принадлежность ему утерянных или испорченных билета, квитанций.<br><br>6.7.5. С момента выдачи дубликата не подлежит возврату билет (договор фрахтования), взамен которого был выдан дубликат.<br><br>6.8. Безбилетным является лицо:<br><br>а) обнаруженное при проверке в транспортном средстве без билета;<br><br>б) предъявившее билет без регистрации поездки, если такая регистрация является обязательной;<br><br>в) предъявившее поддельный билет;<br><br>г) предъявившее билет, срок действия которого истек или в котором указана фамилия и номер документа, удостоверяющего личность, не соответствующие фамилии и номеру, которые указаны в предъявленном этим лицом документе, удостоверяющем личность;<br><br>д) предъявившее ранее использованный билет или предоставившее в качестве основания для проезда сведения о ранее использованном электронном билете;<br><br>е) предъявившее билет, предназначенный для лица, которому предоставлены преимущество или льгота по оплате проезда, и не имеющее при себе документа, подтверждающего право на предоставление указанных преимущества или льготы;<br><br>ж) предоставившее в качестве основания для проезда сведения об оформленном электронном билете, в том числе в виде копии такого билета на бумажном носителе или изображения на экране мобильного устройства, реквизиты которого не содержатся в автоматизированной информационной системе, предназначенной для хранения таких реквизитов.<br><br>6.8.1. Лицо, являющееся безбилетным, оплачивает проезд от пункта посадки до пункта назначения в порядке, установленном перевозчиком. Если указанное лицо заявляет о желании покинуть транспортное средство, оплате подлежит проезд до пункта, в котором такое лицо покинет транспортное средство. Если невозможно определить пункт посадки, стоимость проезда исчисляется от начального пункта отправления транспортного средства.<br><br>6.9. Правила выдачи справки о стоимости проезда.<br><br>6.9.1. Прием заявлений о выдаче справок о стоимости проезда осуществляет дежурный администратор (кассовый зал основного здания &laquo;Северного автовокзала&raquo;) с 8:00 ч. до 20:00 ч.<br><br>6.9.2. Стоимость услуги по выдаче справки составляет 30 рублей.<br><br>7.Правила пользования услугами справочной службы.<br><br>7.1.Справочная служба расположена в кассовом зале основного здания &laquo;Северного автовокзала&raquo;. Режим работы: с 08:00 ч. до 20:00 ч.<br><br>7.2.Справочная служба оказывает бесплатные услуги по предоставлению справочной информации по работе &laquo;Северного автовокзала&raquo;, а также о рейсах автобусов, отправляющихся с территории &laquo;Северного автовокзала&raquo;.<br><br>7.3.Телефоны Справочной службы: (343) 379-09-09, 385-68-58.<br><br>8.Правила проезда, провоза багажа и ручной клади.<br><br>8.1.Пассажир обязан оплатить проезд и провоз багажа.<br><br>В течение всей поездки по требованию представителя перевозчика, и (или) должностного лица, уполномоченного на осуществление проверки подтверждения оплаты, пассажир обязан подтвердить факт оплаты своего проезда, перевозки детей, следующих вместе с ним, в случаях, если его проезд или перевозка детей подлежит оплате, в том числе с предоставлением преимуществ по провозной плате, перевозки багажа, провоза ручной клади.<br><br>8.2. Правила допуска на посадку в транспортное средство.<br><br>8.2.1. Пассажир, имеющий право на бесплатный или льготный проезд, обязан иметь при себе и предъявить билет, документ, подтверждающий право на бесплатный или льготный проезд, и документ, удостоверяющий личность пассажира в соответствии с законодательством Российской Федерации. В случае, если документ, подтверждающий право на бесплатный или льготный проезд, содержит фотографию его владельца, предъявление документа, удостоверяющего личность в соответствии с законодательством Российской Федерации, не требуется.<br><br>8.2.2. Посадка в транспортное средство пассажира с именным билетом осуществляется только при предъявлении одновременно билета и документа, удостоверяющего личность, на основании которого был оформлен проездной именной билет. Посадка только по билету или только по документу, удостоверяющего личность, не допускается.<br><br>8.2.3. Для посадки в транспортное средство пассажира, оформившего электронный именной билет, пассажиру необходимо предъявить документ, удостоверяющий его личность, а также копию электронного билета на бумажном носителе или в виде изображения на экране мобильного устройства<br><br>8.2.4 При проезде заказным рейсом предъявляется договор фрахтования и документ, удостоверяющий личность.<br><br>8.2.5. Не допускаются в транспортное средство при посадке лица, имеющие грязную одежду, либо одежду, марающую других пассажиров или кресла транспортного средства, а также в состоянии алкогольного или наркотического опьянения, представляющие угрозу для общества и нарушающие общественный порядок.<br><br>Не допускаются к перевозке багажом и провозу в составе ручной клади зловонные и опасные (легковоспламеняющиеся, взрывчатые, токсичные и др.) вещества, холодное и огнестрельное оружие без чехлов и упаковки, а также вещи (предметы), загрязняющие транспортные средства или одежду пассажиров. Допускается провоз в составе ручной клади животных и птиц в клетках с глухим дном (корзинах, коробах, контейнерах и др.), если размеры указанных клеток (корзин, коробов, контейнеров и др.) отвечают нормам, установленным для перевозки ручной клади.<br><br>8.3. Правила перевозки пассажиров заказными рейсами.<br><br>8.3.1. Перевозка пассажиров заказными рейсами осуществляется на основании договоров фрахтования, заключаемых пассажирами в кассах &laquo;Северного автовокзала&raquo;.<br><br>8.3.2. Оформление договоров фрахтования на заказные рейсы начинается не менее чем за 10 суток до планируемой отправки транспортного средства.<br><br>8.3.3. Для оформления договора фрахтования пассажир обязан предъявить документ, удостоверяющий личность в соответствии с законодательством РФ, на детей до 14 лет &ndash; свидетельство о рождении. В случае оформления договора фрахтования на основании копии документа, удостоверяющего личность, пассажир несет ответственность за достоверность предоставленных персональных данных.<br><br>8.3.4. Посадка пассажиров в транспортное средство производится при предъявлении договора фрахтования на основании оригиналов документов, удостоверяющих личность в соответствии с требованиями законодательства РФ, детей до 14 лет на основании оригинала свидетельства о рождении.<br><br>8.3.5. Пассажир обязан сохранить договор фрахтования до окончания поездки.<br><br>8.3.6. При перевозке заказными рейсами льготы, предусмотренные для проезда регулярными рейсами, пассажирам не предоставляются. При перевозке детей заказными рейсами положения раздела 9 настоящих Правил не применяются.<br><br>8.3.7. Возврат денежных средств при отказе пассажира от перевозки заказным рейсом не производится.<br><br>8.3.8. Подписывая договор фрахтования, пассажир дает свое согласие на обработку персональных данных в соответствии с требованиями законодательства РФ.<br><br>8.4.В целях безопасности пассажиров при подаче автобуса на перрон пассажиру запрещается находиться за желтой ограничительной линией до полной остановки автобуса и открытия дверей.<br><br>8.5.Пассажир имеет право провозить с собой:<br><br>8.5.1.За плату в багажном отделении транспортного средства или в отдельном транспортном средстве багаж в количестве не более двух мест, длина, ширина и высота каждого из которых в сумме не превышают сто семьдесят сантиметров.<br><br>8.5.2.Бесплатно ручную кладь в количестве не более одного места, длина, ширина и высота которого в сумме не превышают сто двадцать сантиметров, одну пару лыж в чехле, детские санки, детскую коляску.<br><br>8.6.Обеспечение целостности и сохранности ручной клади является обязанностью пассажира. Размещение ручной клади на местах, предназначенных для сидения, в проходе между сидениями, возле входа или выхода из транспортного средства, в том числе аварийного, запрещается.<br><br>8.7. Погрузка (выгрузка) багажа в багажное отделение транспортного средства обеспечивается перевозчиком.<br><br>Багаж принимается для перевозки без вскрытия тары или упаковки. Тара и упаковка должны обеспечивать целостность и сохранность багажа в течение всего периода перевозки. Перевозка багажом пищевых продуктов, в том числе скоропортящихся, в багажных отделениях транспортных средств и багажных автомобилях без поддержания температурного режима осуществляется под ответственность отправителя без объявления ценности этого багажа. Сдача багажа перевозчику оформляется багажной квитанцией. Багаж выдается лицу, предъявившему багажную квитанцию и багажную бирку. В случае утраты багажной квитанции или багажной бирки багаж может быть выдан лицу, которое докажет свое право на него, указав письменно точные признаки вещей, входящих в состав багажа.<br><br>9. Правила перевозки детей, следующих вместе с пассажиром.<br><br>9.1.При проезде в транспортном средстве, осуществляющем регулярные перевозки пассажиров и багажа, пассажир имеет право:<br><br>9.1.1.Перевозить с собой бесплатно в пригородном сообщении детей в возрасте не старше семи лет без предоставления отдельных мест для сидения, за исключением случаев, предусмотренных пунктом 9.2. настоящих Правил;<br><br>9.1.2.Перевозить с собой бесплатно в междугородном сообщении одного ребенка в возрасте не старше пяти лет без предоставления отдельного места для сидения, за исключением случаев, предусмотренных пунктом 9.2 настоящих Правил.<br><br>9.2.В случаях, если в установленном порядке запрещена перевозка в транспортных средствах детей без предоставления им отдельных мест для сидения, пассажир имеет право перевезти с собой двух детей в возрасте не старше двенадцати лет с предоставлением им отдельных мест для сидения за плату, размер которой не может составлять более чем пятьдесят процентов провозной платы.<br><br>9.3. Учитывая требования законодательства (постановление Правительства РФ от 23.10.1993 № 1090: пункты 2.1.2, 5.1, 22.8 Правил дорожного движения РФ, п 4.1 Основных положений по допуску транспортных средств к эксплуатации и обязанности должностных лиц по обеспечению безопасности дорожного движения) перевозка не пристегнутых пассажиров в транспортных средствах в междугородном сообщении запрещена.<br><br>На рейсы междугородных маршрутов билеты приобретаются для всех пассажиров, в том числе детям до 5 лет.<br><br>9.4. Пассажир обязан иметь при себе документ, подтверждающий возраст ребенка, перевозимого с предоставлением льгот по провозной плате, указанных в пункте 9.1 настоящих Правил, который в обязательном порядке предъявляется по первому требованию лиц, осуществляющих контроль за оплатой проезда.<br><br>10. Наличие у пассажиров билетов, багажных квитанций, договоров фрахтования контролируется контрольно-ревизорской службой, перронными контролерами &laquo;Северного автовокзала&raquo;, водителями транспортных средств, а также иными уполномоченными лицами.<br><br>11.Претензии, возникающие в связи с перевозками пассажиров и багажа или предоставлением транспортных средств для перевозки пассажиров и багажа, предъявляются перевозчикам по месту их нахождения.<br><br>Претензии, возникающие при обслуживании пассажиров на &laquo;Северном автовокзале&raquo;, предъявляются администрации &laquo;Северного автовокзала&raquo; через дежурного администратора или путем записи в книгу жалоб и предложений. Книга жалоб и предложений с 8:00 ч. до 20:00 ч. находится у дежурного администратора (кассовый зал основного здания &laquo;Северного автовокзала&raquo;), а в период с 20:00 ч.до 08:00 ч. - в кассе № 10, расположенной в основном здании &laquo;Северного автовокзала&raquo;.<br><br>12. В здании и на территории &laquo;Северного автовокзала&raquo;, на перронах и ближе 15 метров ко входам в здание запрещается распивать спиртные напитки, принимать наркотические средства и другие психотропные вещества, курить и сорить. Пассажиры обязаны соблюдать общественный порядок, быть взаимно вежливыми и доброжелательными.<br><br>13. Физические лица, следующие на автовокзал &laquo;Северный&raquo; либо находящиеся на &laquo;Северном автовокзале&raquo; обязаны соблюдать установленные требования обеспечения транспортной безопасности, пропускного и внутриобъектового режимов.<br><br>14. Проход в зону транспортной безопасности &laquo;Северного автовокзала&raquo; допускается только через контрольно-пропускные пункты и пункты досмотра.<br><br>Запрещается пронос в зону транспортной безопасности предметов и веществ, которые запрещены или ограничены для перемещения.<br><br>Допуск лиц в перевозочный сектор осуществляется на основании пропуска или перевозочного документа. В случае, если билет является именным, для прохода в перевозочный сектор пассажир обязан дополнительно предъявить документ, удостоверяющий личность (для пассажиров в возрасте до 14 лет &ndash; свидетельство о рождении) на основании которого был оформлен билет.<br><br>Лица, уклоняющиеся от досмотровых мероприятий, либо препятствующие их проведению, на территорию &laquo;Северного автовокзала&raquo; не допускаются.</p>",
                'page_id' => 3
            ],


        ]);
    }
}
