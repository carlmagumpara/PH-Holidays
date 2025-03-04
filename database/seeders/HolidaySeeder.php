<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Holiday;

class HolidaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $holidays = [
            "2009" => [
                "regular_holidays" => [
                    ["event" => "New Year\'s Day", "date" => "2009-01-01"],
                    ["event" => "Maundy Thursday", "date" => "2009-04-09"],
                    ["event" => "Good Friday", "date" => "2009-04-10"],
                    ["event" => "Araw ng Kagitingan", "date" => "2009-04-06"],
                    ["event" => "Labor Day", "date" => "2009-05-01"],
                    ["event" => "Independence Day", "date" => "2009-06-12"],
                    ["event" => "Eid\'l Fitr", "date" => "2009-09-21"],
                    ["event" => "Eid\'l Adha", "date" => "2009-11-27"],
                    ["event" => "National Heroes Day", "date" => "2009-08-31"],
                    ["event" => "Bonifacio Day", "date" => "2009-11-30"],
                    ["event" => "Christmas Day", "date" => "2009-12-25"],
                    ["event" => "Rizal Day", "date" => "2009-12-30"],
                ],
                "special_holidays" => [
                    ["event" => "Chinese New Year", "date" => "2009-01-26"],
                    ["event" => "EDSA People Power Revolution", "date" => "2009-02-25"],
                    ["event" => "Black Saturday", "date" => "2009-04-11"],
                    ["event" => "All Saints\' Day", "date" => "2009-11-01"],
                    ["event" => "All Souls\' Day", "date" => "2009-11-02"],
                    ["event" => "Christmas Eve", "date" => "2009-12-24"],
                    ["event" => "New Year\'s Eve", "date" => "2009-12-31"],
                ],
            ],
            "2010" => [
                "regular_holidays" => [
                    ["event" => "New Year\'s Day", "date" => "2010-01-01"],
                    ["event" => "Maundy Thursday", "date" => "2010-04-01"],
                    ["event" => "Good Friday", "date" => "2010-04-02"],
                    ["event" => "Araw ng Kagitingan", "date" => "2010-04-09"],
                    ["event" => "Labor Day", "date" => "2010-05-01"],
                    ["event" => "Independence Day", "date" => "2010-06-12"],
                    ["event" => "Eid\'l Fitr", "date" => "2010-09-10"],
                    ["event" => "Eid\'l Adha", "date" => "2010-11-16"],
                    ["event" => "National Heroes Day", "date" => "2010-08-30"],
                    ["event" => "Bonifacio Day", "date" => "2010-11-29"],
                    ["event" => "Christmas Day", "date" => "2010-12-25"],
                    ["event" => "Rizal Day", "date" => "2010-12-30"],
                ],
                "special_holidays" => [
                    ["event" => "Chinese New Year", "date" => "2010-02-14"],
                    ["event" => "EDSA People Power Revolution", "date" => "2010-02-22"],
                    ["event" => "Black Saturday", "date" => "2010-04-03"],
                    ["event" => "All Saints\' Day", "date" => "2010-11-01"],
                    ["event" => "All Souls\' Day", "date" => "2010-11-02"],
                    ["event" => "Christmas Eve", "date" => "2010-12-24"],
                    ["event" => "New Year\'s Eve", "date" => "2010-12-31"],
                ],
            ],
            "2011" => [
                "regular_holidays" => [
                    ["event" => "New Year\'s Day", "date" => "2011-01-01"],
                    ["event" => "Maundy Thursday", "date" => "2011-04-21"],
                    ["event" => "Good Friday", "date" => "2011-04-22"],
                    ["event" => "Araw ng Kagitingan", "date" => "2011-04-09"],
                    ["event" => "Labor Day", "date" => "2011-05-01"],
                    ["event" => "Independence Day", "date" => "2011-06-12"],
                    ["event" => "Eid\'l Fitr", "date" => "2011-08-30"],
                    ["event" => "Eid\'l Adha", "date" => "2011-11-06"],
                    ["event" => "National Heroes Day", "date" => "2011-08-29"],
                    ["event" => "Bonifacio Day", "date" => "2011-11-30"],
                    ["event" => "Christmas Day", "date" => "2011-12-25"],
                    ["event" => "Rizal Day", "date" => "2011-12-30"],
                ],
                "special_holidays" => [
                    ["event" => "Chinese New Year", "date" => "2011-02-03"],
                    ["event" => "EDSA People Power Revolution", "date" => "2011-02-25"],
                    ["event" => "Black Saturday", "date" => "2011-04-23"],
                    ["event" => "All Saints\' Day", "date" => "2011-11-01"],
                    ["event" => "All Souls\' Day", "date" => "2011-11-02"],
                    ["event" => "Christmas Eve", "date" => "2011-12-24"],
                    ["event" => "New Year\'s Eve", "date" => "2011-12-31"],
                ],
            ],
            "2012" => [
                "regular_holidays" => [
                    ["event" => "New Year\'s Day", "date" => "2012-01-01"],
                    ["event" => "Maundy Thursday", "date" => "2012-04-05"],
                    ["event" => "Good Friday", "date" => "2012-04-06"],
                    ["event" => "Araw ng Kagitingan", "date" => "2012-04-09"],
                    ["event" => "Labor Day", "date" => "2012-05-01"],
                    ["event" => "Independence Day", "date" => "2012-06-12"],
                    ["event" => "Eid\'l Fitr", "date" => "2012-08-20"],
                    ["event" => "Eid\'l Adha", "date" => "2012-10-26"],
                    ["event" => "National Heroes Day", "date" => "2012-08-27"],
                    ["event" => "Bonifacio Day", "date" => "2012-11-30"],
                    ["event" => "Christmas Day", "date" => "2012-12-25"],
                    ["event" => "Rizal Day", "date" => "2012-12-30"],
                ],
                "special_holidays" => [
                    ["event" => "Chinese New Year", "date" => "2012-01-23"],
                    ["event" => "EDSA People Power Revolution", "date" => "2012-02-25"],
                    ["event" => "Black Saturday", "date" => "2012-04-07"],
                    ["event" => "All Saints\' Day", "date" => "2012-11-01"],
                    ["event" => "All Souls\' Day", "date" => "2012-11-02"],
                    ["event" => "Christmas Eve", "date" => "2012-12-24"],
                    ["event" => "New Year\'s Eve", "date" => "2012-12-31"],
                ],
            ],
            "2013" => [
                "regular_holidays" => [
                    ["event" => "New Year\'s Day", "date" => "2013-01-01"],
                    ["event" => "Maundy Thursday", "date" => "2013-03-28"],
                    ["event" => "Good Friday", "date" => "2013-03-29"],
                    ["event" => "Araw ng Kagitingan", "date" => "2013-04-09"],
                    ["event" => "Labor Day", "date" => "2013-05-01"],
                    ["event" => "Independence Day", "date" => "2013-06-12"],
                    ["event" => "Eid\'l Fitr", "date" => "2013-08-09"],
                    ["event" => "Eid\'l Adha", "date" => "2013-10-15"],
                    ["event" => "National Heroes Day", "date" => "2013-08-26"],
                    ["event" => "Bonifacio Day", "date" => "2013-11-30"],
                    ["event" => "Christmas Day", "date" => "2013-12-25"],
                    ["event" => "Rizal Day", "date" => "2013-12-30"],
                ],
                "special_holidays" => [
                    ["event" => "Chinese New Year", "date" => "2013-02-10"],
                    ["event" => "EDSA People Power Revolution", "date" => "2013-02-25"],
                    ["event" => "Black Saturday", "date" => "2013-03-30"],
                    ["event" => "All Saints\' Day", "date" => "2013-11-01"],
                    ["event" => "All Souls\' Day", "date" => "2013-11-02"],
                    ["event" => "Christmas Eve", "date" => "2013-12-24"],
                    ["event" => "New Year\'s Eve", "date" => "2013-12-31"],
                ],
            ],
            "2014" => [
                "regular_holidays" => [
                    ["event" => "New Year\'s Day", "date" => "2014-01-01"],
                    ["event" => "Maundy Thursday", "date" => "2014-04-17"],
                    ["event" => "Good Friday", "date" => "2014-04-18"],
                    ["event" => "Araw ng Kagitingan", "date" => "2014-04-09"],
                    ["event" => "Labor Day", "date" => "2014-05-01"],
                    ["event" => "Independence Day", "date" => "2014-06-12"],
                    ["event" => "Eid\'l Fitr", "date" => "2014-07-29"],
                    ["event" => "Eid\'l Adha", "date" => "2014-10-04"],
                    ["event" => "National Heroes Day", "date" => "2014-08-25"],
                    ["event" => "Bonifacio Day", "date" => "2014-11-30"],
                    ["event" => "Christmas Day", "date" => "2014-12-25"],
                    ["event" => "Rizal Day", "date" => "2014-12-30"],
                ],
                "special_holidays" => [
                    ["event" => "Chinese New Year", "date" => "2014-01-31"],
                    ["event" => "EDSA People Power Revolution", "date" => "2014-02-25"],
                    ["event" => "Black Saturday", "date" => "2014-04-19"],
                    ["event" => "All Saints\' Day", "date" => "2014-11-01"],
                    ["event" => "All Souls\' Day", "date" => "2014-11-02"],
                    ["event" => "Christmas Eve", "date" => "2014-12-24"],
                    ["event" => "New Year\'s Eve", "date" => "2014-12-31"],
                ],
            ],
            "2015" => [
                "regular_holidays" => [
                    ["event" => "New Year\'s Day", "date" => "2015-01-01"],
                    ["event" => "Maundy Thursday", "date" => "2015-04-02"],
                    ["event" => "Good Friday", "date" => "2015-04-03"],
                    ["event" => "Araw ng Kagitingan", "date" => "2015-04-09"],
                    ["event" => "Labor Day", "date" => "2015-05-01"],
                    ["event" => "Independence Day", "date" => "2015-06-12"],
                    ["event" => "National Heroes Day", "date" => "2015-08-31"],
                    ["event" => "Eid\'l Fitr", "date" => "2015-07-17"],
                    ["event" => "Eid\'l Adha", "date" => "2015-09-25"],
                    ["event" => "Bonifacio Day", "date" => "2015-11-30"],
                    ["event" => "Christmas Day", "date" => "2015-12-25"],
                    ["event" => "Rizal Day", "date" => "2015-12-30"],
                ],
                "special_holidays" => [
                    ["event" => "Chinese New Year", "date" => "2015-02-19"],
                    ["event" => "EDSA People Power Revolution", "date" => "2015-02-25"],
                    ["event" => "Black Saturday", "date" => "2015-04-04"],
                    ["event" => "All Saints\' Day", "date" => "2015-11-01"],
                    ["event" => "All Souls\' Day", "date" => "2015-11-02"],
                    ["event" => "Christmas Eve", "date" => "2015-12-24"],
                    ["event" => "New Year\'s Eve", "date" => "2015-12-31"],
                ],
            ],
            "2016" => [
                "regular_holidays" => [
                    ["event" => "New Year\'s Day", "date" => "2016-01-01"],
                    ["event" => "Maundy Thursday", "date" => "2016-03-24"],
                    ["event" => "Good Friday", "date" => "2016-03-25"],
                    ["event" => "Araw ng Kagitingan", "date" => "2016-04-09"],
                    ["event" => "Labor Day", "date" => "2016-05-01"],
                    ["event" => "Independence Day", "date" => "2016-06-12"],
                    ["event" => "Eid\'l Fitr", "date" => "2016-07-06"],
                    ["event" => "Eid\'l Adha", "date" => "2016-09-12"],
                    ["event" => "National Heroes Day", "date" => "2016-08-29"],
                    ["event" => "Bonifacio Day", "date" => "2016-11-30"],
                    ["event" => "Christmas Day", "date" => "2016-12-25"],
                    ["event" => "Rizal Day", "date" => "2016-12-30"],
                ],
                "special_holidays" => [
                    ["event" => "Chinese New Year", "date" => "2016-02-08"],
                    ["event" => "EDSA People Power Revolution", "date" => "2016-02-25"],
                    ["event" => "Black Saturday", "date" => "2016-03-26"],
                    ["event" => "All Saints\' Day", "date" => "2016-11-01"],
                    ["event" => "All Souls\' Day", "date" => "2016-11-02"],
                    ["event" => "Christmas Eve", "date" => "2016-12-24"],
                    ["event" => "New Year\'s Eve", "date" => "2016-12-31"],
                ],
            ],
            "2017" => [
                "regular_holidays" => [
                    ["event" => "New Year\'s Day", "date" => "2017-01-01"],
                    ["event" => "Maundy Thursday", "date" => "2017-04-13"],
                    ["event" => "Good Friday", "date" => "2017-04-14"],
                    ["event" => "Araw ng Kagitingan", "date" => "2017-04-09"],
                    ["event" => "Labor Day", "date" => "2017-05-01"],
                    ["event" => "Independence Day", "date" => "2017-06-12"],
                    ["event" => "National Heroes Day", "date" => "2017-08-28"],
                    ["event" => "Eid\'l Fitr", "date" => "2017-06-26"],
                    ["event" => "Eid\'l Adha", "date" => "2017-09-01"],
                    ["event" => "Bonifacio Day", "date" => "2017-11-30"],
                    ["event" => "Christmas Day", "date" => "2017-12-25"],
                    ["event" => "Rizal Day", "date" => "2017-12-30"],
                ],
                "special_holidays" => [
                    ["event" => "Chinese New Year", "date" => "2017-01-28"],
                    ["event" => "EDSA People Power Revolution", "date" => "2017-02-25"],
                    ["event" => "Black Saturday", "date" => "2017-04-15"],
                    ["event" => "All Saints\' Day", "date" => "2017-11-01"],
                    ["event" => "All Souls\' Day", "date" => "2017-11-02"],
                    ["event" => "Christmas Eve", "date" => "2017-12-24"],
                    ["event" => "New Year\'s Eve", "date" => "2017-12-31"],
                ],
            ],
            "2018" => [
                "regular_holidays" => [
                    ["event" => "New Year\'s Day", "date" => "2018-01-01"],
                    ["event" => "Maundy Thursday", "date" => "2018-03-29"],
                    ["event" => "Good Friday", "date" => "2018-03-30"],
                    ["event" => "Araw ng Kagitingan", "date" => "2018-04-09"],
                    ["event" => "Labor Day", "date" => "2018-05-01"],
                    ["event" => "Independence Day", "date" => "2018-06-12"],
                    ["event" => "National Heroes Day", "date" => "2018-08-27"],
                    ["event" => "Bonifacio Day", "date" => "2018-11-30"],
                    ["event" => "Christmas Day", "date" => "2018-12-25"],
                    ["event" => "Rizal Day", "date" => "2018-12-30"],
                ],
                "special_holidays" => [
                    ["event" => "Chinese New Year", "date" => "2018-02-16"],
                    [
                        "event" => "EDSA People Power Revolution Anniversary",
                        "date" => "2018-02-25",
                    ],
                    ["event" => "Black Saturday", "date" => "2018-03-31"],
                    ["event" => "Ninoy Aquino Day", "date" => "2018-08-21"],
                    ["event" => "All Saints\' Day", "date" => "2018-11-01"],
                    ["event" => "Last Day of the Year", "date" => "2018-12-31"],
                    [
                        "event" => "Additional Special (Non-Working) Day",
                        "date" => "2018-11-02",
                    ],
                    [
                        "event" => "Additional Special (Non-Working) Day",
                        "date" => "2018-12-24",
                    ],
                ],
            ],
            "2019" => [
                "regular_holidays" => [
                    ["event" => "New Year\'s Day", "date" => "2019-01-01"],
                    ["event" => "Araw ng Kagitingan", "date" => "2019-04-09"],
                    ["event" => "Maundy Thursday", "date" => "2019-04-18"],
                    ["event" => "Good Friday", "date" => "2019-04-19"],
                    ["event" => "Labor Day", "date" => "2019-05-01"],
                    ["event" => "Independence Day", "date" => "2019-06-12"],
                    ["event" => "National Heroes Day", "date" => "2019-08-26"],
                    ["event" => "Bonifacio Day", "date" => "2019-11-30"],
                    ["event" => "Christmas Day", "date" => "2019-12-25"],
                    ["event" => "Rizal Day", "date" => "2019-12-30"],
                ],
                "special_holidays" => [
                    ["event" => "Chinese New Year", "date" => "2019-02-05"],
                    [
                        "event" => "EDSA People Power Revolution Anniversary",
                        "date" => "2019-02-25",
                    ],
                    ["event" => "Black Saturday", "date" => "2019-04-20"],
                    ["event" => "Ninoy Aquino Day", "date" => "2019-08-21"],
                    ["event" => "All Saints\' Day", "date" => "2019-11-01"],
                    ["event" => "All Souls\' Day", "date" => "2019-11-02"],
                    [
                        "event" => "Feast of the Immaculate Conception of Mary",
                        "date" => "2019-12-08",
                    ],
                    ["event" => "Christmas Eve", "date" => "2019-12-24"],
                    ["event" => "New Year\'s Eve", "date" => "2019-12-31"],
                ],
            ],
            "2020" => [
                "regular_holidays" => [
                    ["event" => "New Year\'s Day", "date" => "2020-01-01"],
                    ["event" => "Maundy Thursday", "date" => "2020-04-09"],
                    ["event" => "Good Friday", "date" => "2020-04-10"],
                    ["event" => "Araw ng Kagitingan", "date" => "2020-04-09"],
                    ["event" => "Labor Day", "date" => "2020-05-01"],
                    ["event" => "Independence Day", "date" => "2020-06-12"],
                    ["event" => "National Heroes Day", "date" => "2020-08-31"],
                    ["event" => "Eid\'l Fitr", "date" => "2020-05-25"],
                    ["event" => "Eid\'l Adha", "date" => "2020-07-31"],
                    ["event" => "Bonifacio Day", "date" => "2020-11-30"],
                    ["event" => "Christmas Day", "date" => "2020-12-25"],
                    ["event" => "Rizal Day", "date" => "2020-12-30"],
                ],
                "special_holidays" => [
                    ["event" => "Chinese New Year", "date" => "2020-01-25"],
                    ["event" => "EDSA People Power Revolution", "date" => "2020-02-25"],
                    ["event" => "Black Saturday", "date" => "2020-04-11"],
                    ["event" => "All Saints\' Day", "date" => "2020-11-01"],
                    ["event" => "All Souls\' Day", "date" => "2020-11-02"],
                    ["event" => "Christmas Eve", "date" => "2020-12-24"],
                    ["event" => "New Year\'s Eve", "date" => "2020-12-31"],
                ],
            ],
            "2021" => [
                "regular_holidays" => [
                    ["event" => "New Year\'s Day", "date" => "2021-01-01"],
                    ["event" => "Maundy Thursday", "date" => "2021-04-01"],
                    ["event" => "Good Friday", "date" => "2021-04-02"],
                    ["event" => "Araw ng Kagitingan", "date" => "2021-04-09"],
                    ["event" => "Labor Day", "date" => "2021-05-01"],
                    ["event" => "Independence Day", "date" => "2021-06-12"],
                    ["event" => "National Heroes Day", "date" => "2021-08-30"],
                    ["event" => "Eid\'l Fitr", "date" => "2021-05-13"],
                    ["event" => "Eid\'l Adha", "date" => "2021-07-20"],
                    ["event" => "Bonifacio Day", "date" => "2021-11-30"],
                    ["event" => "Christmas Day", "date" => "2021-12-25"],
                    ["event" => "Rizal Day", "date" => "2021-12-30"],
                ],
                "special_holidays" => [
                    ["event" => "Chinese New Year", "date" => "2021-02-12"],
                    ["event" => "EDSA People Power Revolution", "date" => "2021-02-25"],
                    ["event" => "Black Saturday", "date" => "2021-04-03"],
                    ["event" => "All Saints\' Day", "date" => "2021-11-01"],
                    ["event" => "All Souls\' Day", "date" => "2021-11-02"],
                    ["event" => "Christmas Eve", "date" => "2021-12-24"],
                    ["event" => "New Year\'s Eve", "date" => "2021-12-31"],
                ],
            ],
            "2022" => [
                "regular_holidays" => [
                    ["event" => "New Year\'s Day", "date" => "2022-01-01"],
                    ["event" => "Araw ng Kagitingan", "date" => "2022-04-09"],
                    ["event" => "Maundy Thursday", "date" => "2022-04-14"],
                    ["event" => "Good Friday", "date" => "2022-04-15"],
                    ["event" => "Labor Day", "date" => "2022-05-01"],
                    ["event" => "Independence Day", "date" => "2022-06-12"],
                    ["event" => "National Heroes Day", "date" => "2022-08-29"],
                    ["event" => "Bonifacio Day", "date" => "2022-11-30"],
                    ["event" => "Christmas Day", "date" => "2022-12-25"],
                    ["event" => "Rizal Day", "date" => "2022-12-30"],
                ],
                "special_holidays" => [
                    ["event" => "Chinese New Year", "date" => "2022-02-01"],
                    [
                        "event" => "EDSA People Power Revolution Anniversary",
                        "date" => "2022-02-25",
                    ],
                    ["event" => "Black Saturday", "date" => "2022-04-16"],
                    ["event" => "Ninoy Aquino Day", "date" => "2022-08-21"],
                    ["event" => "All Saints\' Day", "date" => "2022-11-01"],
                    [
                        "event" => "Feast of the Immaculate Conception of Mary",
                        "date" => "2022-12-08",
                    ],
                ],
            ],
            "2023" => [
                "regular_holidays" => [
                    ["event" => "New Year\'s Day", "date" => "2023-01-01"],
                    ["event" => "Araw ng Kagitingan", "date" => "2023-04-10"],
                    ["event" => "Maundy Thursday", "date" => "2023-04-06"],
                    ["event" => "Good Friday", "date" => "2023-04-07"],
                    ["event" => "Eid\'l Fitr", "date" => "2023-04-21"],
                    ["event" => "Labor Day", "date" => "2023-05-01"],
                    ["event" => "Independence Day", "date" => "2023-06-12"],
                    ["event" => "Eid\'l Adha", "date" => "2023-06-28"],
                    ["event" => "National Heroes Day", "date" => "2023-08-28"],
                    ["event" => "Bonifacio Day", "date" => "2023-11-27"],
                    ["event" => "Christmas Day", "date" => "2023-12-25"],
                    ["event" => "Rizal Day", "date" => "2023-12-30"],
                ],
                "special_holidays" => [
                    ["event" => "Ninoy Aquino Day", "date" => "2023-08-21"],
                    [
                        "event" => "EDSA People Power Revolution Anniversary",
                        "date" => "2023-02-24",
                    ],
                    ["event" => "Black Saturday", "date" => "2023-04-08"],
                    ["event" => "All Saints\' Day", "date" => "2023-11-01"],
                    [
                        "event" => "Feast of the Immaculate Conception of Mary",
                        "date" => "2023-12-08",
                    ],
                    ["event" => "Last Day of the Year", "date" => "2023-12-31"],
                    [
                        "event" => "Additional Special (Non-Working) Day",
                        "date" => "2023-01-02",
                    ],
                    [
                        "event" => "Additional Special (Non-Working) Day",
                        "date" => "2023-11-02",
                    ],
                    [
                        "event" => "Additional Special (Non-Working) Day",
                        "date" => "2023-10-30",
                    ],
                    [
                        "event" => "Additional Special (Non-Working) Day",
                        "date" => "2023-12-26",
                    ],
                ],
            ],
            "2024" => [
                "regular_holidays" => [
                    ["event" => "New Year\'s Day", "date" => "2024-01-01"],
                    ["event" => "Maundy Thursday", "date" => "2024-03-28"],
                    ["event" => "Good Friday", "date" => "2024-03-29"],
                    ["event" => "Araw ng Kagitingan", "date" => "2024-04-09"],
                    [
                        "event" => "Eid\'l Fitr (Feast of Ramadhan)",
                        "date" => "2024-04-10",
                    ],
                    ["event" => "Labor Day", "date" => "2024-05-01"],
                    ["event" => "Independence Day", "date" => "2024-06-12"],
                    [
                        "event" => "Eid’l Adha (Feast of Sacrifice)",
                        "date" => "2024-06-17",
                    ],
                    ["event" => "National Heroes Day", "date" => "2024-08-26"],
                    ["event" => "Bonifacio Day", "date" => "2024-11-30"],
                    ["event" => "Christmas Day", "date" => "2024-12-25"],
                    ["event" => "Rizal Day", "date" => "2024-12-30"],
                ],
                "special_holidays" => [
                    ["event" => "Ninoy Aquino Day", "date" => "2024-08-23"],
                    ["event" => "All Saints\' Day", "date" => "2024-11-01"],
                    [
                        "event" => "Feast of the Immaculate Conception of Mary",
                        "date" => "2024-12-08",
                    ],
                    ["event" => "Last Day of the Year", "date" => "2024-12-31"],
                    [
                        "event" => "Additional Special (Non-Working) Day",
                        "date" => "2024-02-09",
                    ],
                    [
                        "event" =>
                            "Chinese New Year - Additional Special (Non-Working) Day",
                        "date" => "2024-02-10",
                    ],
                    [
                        "event" =>
                            "Black Saturday - Additional Special (Non-Working) Day",
                        "date" => "2024-03-30",
                    ],
                    [
                        "event" =>
                            "All Souls\' Day - Additional Special (Non-Working) Day",
                        "date" => "2024-11-02",
                    ],
                    [
                        "event" =>
                            "Christmas Eve - Additional Special (Non-Working) Day",
                        "date" => "2024-12-24",
                    ],
                ],
            ],
            "2025" => [
                "regular_holidays" => [
                    [
                        "event" => "New Year\'s Day",
                        "date" => "2025-01-01",
                    ],
                    [
                        "event" => "Araw ng Kagitingan",
                        "date" => "2025-04-09",
                    ],
                    [
                        "event" => "Maundy Thursday",
                        "date" => "2025-04-17",
                    ],
                    [
                        "event" => "Good Friday",
                        "date" => "2025-04-18",
                    ],
                    [
                        "event" => "Labor Day",
                        "date" => "2025-05-01",
                    ],
                    [
                        "event" => "Independence Day",
                        "date" => "2025-06-12",
                    ],
                    [
                        "event" => "National Heroes Day",
                        "date" => "2025-08-25",
                    ],
                    [
                        "event" => "Bonifacio Day",
                        "date" => "2025-11-30",
                    ],
                    [
                        "event" => "Christmas Day",
                        "date" => "2025-12-25",
                    ],
                    [
                        "event" => "Rizal Day",
                        "date" => "2025-12-30",
                    ],
                ],
                "special_holidays" => [
                    [
                        "event" => "Ninoy Aquino Day",
                        "date" => "2025-08-21",
                    ],
                    [
                        "event" => "All Saints\' Day",
                        "date" => "2025-11-01",
                    ],
                    [
                        "event" => "Feast of the Immaculate Conception of Mary",
                        "date" => "2025-12-08",
                    ],
                    [
                        "event" => "Last Day of the Year",
                        "date" => "2025-12-31",
                    ],
                    [
                        "event" => "Chinese New Year",
                        "date" => "2025-01-29",
                    ],
                    [
                        "event" => "Black Saturday",
                        "date" => "2025-04-19",
                    ],
                    [
                        "event" => "Christmas Eve",
                        "date" => "2025-12-24",
                    ],
                    [
                        "event" => "All Saints\' Day Eve",
                        "date" => "2025-10-31",
                    ],
                ],
            ],
        ];

        foreach ($holidays as $key => $value) {
            foreach ($value['regular_holidays'] as $reg) {
                Holiday::create(array_merge($reg, ['type' => 'Regular Holiday']));
            }
            foreach ($value['special_holidays'] as $spe) {
                Holiday::create(array_merge($reg, ['type' => 'Special Holiday']));
            }
        }
    }
}
