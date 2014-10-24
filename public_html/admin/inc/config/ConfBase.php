<?php

class ConfBase {

    public static $db = array(
        // dev
        // 'UserDB' => array(
        //     "host" => "localhost",
        //     "user" => "root",
        //     "pwd" => "",
        //     "port" => '3306',
        //     "db" => "caituan",
        //     "char" => "utf8",
        // ),
    );

    public static $category = array(
        '100' => array(
            'name' => '首页'
        ),
        '200' => array(
            'name' => '留学资讯',
            'sub' => array(
                '201' => '高中留学',
                '202' => '本科留学',
                '203' => '硕士留学',
            )
        ),
        '300' => array(
            'name' => '留学课程',
            'sub' => array(
                '301' => '申请文书',
                '302' => '作品集',
                '303' => '语言培训',
            )
        ),
        '400' => array(
            'name' => '艺术院校',
            'sub' => array(
                '401' => '英国',
                '402' => '美国',
            )
        ),
    );
}
