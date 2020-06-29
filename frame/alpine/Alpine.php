<?php
/**
 * Created by neoan3-cli.
 */

namespace Neoan3\Frame;

use Neoan3\Core\Serve;

/**
 * Class Alpine
 * @package Neoan3\Frame
 */
class Alpine extends Serve
{

    /**
     * Demo constructor.
     */
    function __construct()
    {
        parent::__construct();
        /*
         * General SETUP
         *
         * */

        /*
        // example DB implementation
        try{
            \Neoan3\Apps\Db::setEnvironment([
                'name' => 'YOUR_DB_NAME',
                'host' => 'localhost',
                'user' => 'root',
                'password' => '',
            ]);
        } catch (\Neoan3\Apps\DbException $e){
            echo "Failed to initiate database connection";
            die();
        }*/

    }

    /**
     * Overwriting Serve's constants()
     * @return array
     */
    function constants()
    {
        return [
            'base' => [base],
            'link' => [
                [
                    'sizes' => '32x32',
                    'type' => 'image/png',
                    'rel' => 'icon',
                    'href' => 'asset/neoan-favicon.png'
                ]
            ],
            'stylesheet' => [
                base . 'frame/alpine/style.css',
            ],
            'js' => [
                ['src' => 'https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js']
            ]
        ];
    }
}
