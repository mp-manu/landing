<?php
/**
 * Created by PhpStorm.
 * User: IT_USER
 * Date: 02.08.2019
 * Time: 10:49
 */

namespace app\components;

use yii\base\BootstrapInterface;
use yii\web\Cookie;
use yii\base\Exception;

class LanguageSelector implements BootstrapInterface
{
    public $supportedLanguages = [];

    public function bootstrap($app)
    {
        $cookies = $app->response->cookies;
        $languageNew = $app->request->get('language');


        if ($languageNew !== null) {
            if (!in_array($languageNew, $this->supportedLanguages)) {
                throw new Exception('Invalid your selected language.');
            }

            $cookies->add(new Cookie([
                'name' => 'language',
                'value' => $languageNew,
                'expire' => time() + 60 * 60 * 24 * 30, // 30 days
                'domain' => '.dpdtt.tj'
            ]));
            $app->language = $languageNew;
            //echo 'test1';

        } else {

            $preferedLanguage = isset($app->request->cookies['language']) ? (string)$app->request->cookies['language'] : null;

            if (empty($preferedLanguage)) {
                $preferedLanguage = 'en';
            }
            $app->language = $preferedLanguage;
        }
    }
}