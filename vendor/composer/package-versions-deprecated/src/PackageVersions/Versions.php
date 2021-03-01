<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'yiisoft/yii2-app-advanced';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  '2amigos/yii2-dosamigos-asset-bundle' => '0.1.0@39316c82cf25a884b9037e758968e1323b4add33',
  '2amigos/yii2-google-maps-library' => '1.1.7@25211fd9ceff30bbbeda6290220f629179b6eefe',
  '2amigos/yii2-table-export-widget' => '1.0.0@33632ecd8d85dfbc0c84c428a68e8a8e2dca37cc',
  'arturoliveira/yii2-excelview' => 'v1.0@80124fd9865c08c3d382c1559873098f5b668818',
  'bower-asset/bootstrap' => 'v3.4.1@68b0d231a13201eb14acd3dc84e51543d16e5f7e',
  'bower-asset/highcharts' => 'v8.2.2@e4c4afe4117eed5b64ed7696de64d45a44e1257b',
  'bower-asset/inputmask' => '3.3.11@5e670ad62f50c738388d4dcec78d2888505ad77b',
  'bower-asset/jquery' => '3.5.1@4c0e4becb8263bb5b3e6dadc448d8e7305ef8215',
  'bower-asset/jspdf' => 'v1.4.1@eb6f0424855fc5cf790178572a19f277e1ca5107',
  'bower-asset/punycode' => 'v1.3.2@38c8d3131a82567bfef18da09f7f4db68c84f8a3',
  'bower-asset/yii2-pjax' => '2.0.7.1@aef7b953107264f00234902a3880eb50dafc48be',
  'cebe/markdown' => '1.2.1@9bac5e971dd391e2802dca5400bbeacbaea9eb86',
  'composer/package-versions-deprecated' => '1.11.99.1@7413f0b55a051e89485c5cb9f765fe24bb02a7b6',
  'dektrium/yii2-user' => 'dev-master@761ae89f188bfa87eb72a9d5fe0cff015a9451e1',
  'doctrine/inflector' => 'v1.2.0@e11d84c6e018beedd929cff5220969a3c6d1d462',
  'doctrine/lexer' => '1.0.2@1febd6c3ef84253d7c815bed85fc622ad207a9f8',
  'egulias/email-validator' => '2.1.25@0dbf5d78455d4d6a41d186da50adc1122ec066f4',
  'ezyang/htmlpurifier' => 'v4.13.0@08e27c97e4c6ed02f37c5b2b20488046c8d90d75',
  'friendsofsymfony/user-bundle' => '2.x-dev@b2e6a4d17fe5d97c4aff42c58e9528cd20566054',
  'goodby/csv' => '1.3.0@e71217b8d6110f3d1ac3784ef9b8a2383c3398b9',
  'guzzlehttp/guzzle' => '6.5.5@9d4290de1cfd701f38099ef7e183b64b4b7b0c5e',
  'guzzlehttp/promises' => '1.4.0@60d379c243457e073cff02bc323a2a86cb355631',
  'guzzlehttp/psr7' => '1.7.0@53330f47520498c0ae1f61f7e2c90f55690c06a3',
  'illuminate/container' => 'v5.5.44@7917f4c86ecf7f4d0efcfd83248ad3e301e08858',
  'illuminate/contracts' => 'v5.5.44@b2a62b4a85485fca9cf5fa61a933ad64006ff528',
  'illuminate/database' => 'v5.5.44@f5403b3dd774eb89ff0ef5e633e57458c3dc537d',
  'illuminate/events' => 'v5.5.44@11b4b917c3f02140b528e849f883a4a9e7ff8af7',
  'illuminate/support' => 'v5.5.44@5c405512d75dcaf5d37791badce02d86ed8e4bc4',
  'jean85/pretty-package-versions' => '1.6.0@1e0104b46f045868f11942aea058cd7186d6c303',
  'jenssegers/mongodb' => 'v3.3.2@b6f81b84aa861372236d3768cd8e203d59c930bc',
  'kalyabin/yii2-select-google-map-location' => '1.1.4@ed34105d783f6db07bd22d0423c8ccb5c7782627',
  'kartik-v/bootstrap-fileinput' => 'v5.1.4@be1432169a4ad391b3873e435ef1e8759bfbcafc',
  'kartik-v/bootstrap-star-rating' => 'v4.0.6@cb449271f24c78ab54726232daf5b9dae3e49dbd',
  'kartik-v/dependent-dropdown' => 'v1.4.9@54a8806002ee21b744508a2edb95ed01d35c6cf9',
  'kartik-v/yii2-bootstrap4-dropdown' => 'v1.0.1@394cb4f85d82522ec5918f1581bdad518b324498',
  'kartik-v/yii2-date-range' => 'dev-master@22617574272ba01750428bbdf5f42c23bdc8387e',
  'kartik-v/yii2-dialog' => 'v1.0.5@c38616d719f52530749457c022ca6134d0ad31ce',
  'kartik-v/yii2-field-range' => 'v1.3.5@8a18edb343b3beb96ddc86e4a06aee28be160787',
  'kartik-v/yii2-grid' => 'v3.3.5@e4ba0c68ecb864e1a158f16cc73a5e73a6cdf7c7',
  'kartik-v/yii2-helpers' => 'v1.3.9@0bec7a97bf9d0293d96be5c496fe9654c4dec94b',
  'kartik-v/yii2-krajee-base' => 'v2.0.5@9ddb662bdf49fdb671a90853912a40418a26a0dd',
  'kartik-v/yii2-mpdf' => 'v1.0.6@7ea3a5f9bcf5bcf6d681bd82cbe843c356d1428c',
  'kartik-v/yii2-widget-activeform' => 'v1.5.8@02baee5e06a5dfbc94b71dc8c13ca87789716b29',
  'kartik-v/yii2-widget-affix' => 'v1.0.0@2184119bfa518c285406156f744769b13b861712',
  'kartik-v/yii2-widget-alert' => 'v1.1.1@7348b0d047695a3e552888c481ce250cbc1f9d0d',
  'kartik-v/yii2-widget-colorinput' => 'v1.0.6@e35e6c7615a735b65557d6c38d112b77e2628c69',
  'kartik-v/yii2-widget-datepicker' => 'v1.4.7@aadeb08fe0199a62bb26940cdccafc2c169edc69',
  'kartik-v/yii2-widget-datetimepicker' => 'v1.4.9@dadf042cf13cce84a877dff5f1e6893538f370cf',
  'kartik-v/yii2-widget-depdrop' => 'v1.0.6@ea347e3793fbd8273cc9bd1eb94c4b32bb55d318',
  'kartik-v/yii2-widget-fileinput' => 'v1.1.0@d43bb9d9638ba117bbaa0045250645dc843fcf7f',
  'kartik-v/yii2-widget-growl' => 'v1.1.1@c79abaa47e9103e93345cd1eca7bc75e17e9a92e',
  'kartik-v/yii2-widget-rangeinput' => 'v1.0.2@dd9019bab7e5bf570a02870d9e74387891bbdb32',
  'kartik-v/yii2-widget-rating' => 'v1.0.4@651eaa5e6a3bd19471e2a907fb17c3fd92f383e7',
  'kartik-v/yii2-widget-select2' => 'v2.2.0@ee9d54f9af745c0ad7b3578bf640c12d800479e3',
  'kartik-v/yii2-widget-sidenav' => 'v1.0.0@02ee4f142d7dfbb316f878e538cc7b946f4502d2',
  'kartik-v/yii2-widget-spinner' => 'v1.0.1@eb10dad17a107bf14f173c99994770ca23c548a6',
  'kartik-v/yii2-widget-switchinput' => 'v1.3.1@7d8ee999d79bcdc1601da5cd59439ac7eb1f5ea6',
  'kartik-v/yii2-widget-timepicker' => 'v1.0.4@c1dacfc3712bedf4f694d878279189e440a24b21',
  'kartik-v/yii2-widget-touchspin' => 'v1.2.3@1daca822ad11258242178155613da8e269e3df2b',
  'kartik-v/yii2-widget-typeahead' => 'v1.0.4@7b7041a3cbbeb2db0a608e9f6c9b3f4f63b0069d',
  'kartik-v/yii2-widgets' => 'v3.4.1@e5a030d700243a90eccf96a070380bd3b76e17a3',
  'kylekatarnls/update-helper' => '1.2.1@429be50660ed8a196e0798e5939760f168ec8ce9',
  'mdmsoft/yii2-admin' => 'dev-master@10e526fbcf6350ed4cc9ba6298f887d611685367',
  'miloschuman/yii2-highcharts-widget' => 'dev-master@c9715eea6a715456b38c78b7f4f4fc7e123b9d39',
  'mongodb/mongodb' => '1.8.0@953dbc19443aa9314c44b7217a16873347e6840d',
  'mpdf/mpdf' => 'v8.0.10@1333a962cd2f7ae1a127b7534b7734b58179186f',
  'myclabs/deep-copy' => '1.7.0@3b8a3a99ba1f6a3952ac2747d989303cbd6b7a3e',
  'nesbot/carbon' => '1.39.1@4be0c005164249208ce1b5ca633cd57bdd42ff33',
  'paragonie/random_compat' => 'v9.99.100@996434e5492cb4c3edcb9168db6fbb1359ef965a',
  'phpoffice/phpexcel' => '1.8.0@e69a5e4d0ffa7fb6f171859e0a04346e580df30b',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'select2/select2' => '4.0.13@45f2b83ceed5231afa7b3d5b12b58ad335edd82e',
  'setasign/fpdi' => 'v2.3.6@6231e315f73e4f62d72b73f3d6d78ff0eed93c31',
  'swiftmailer/swiftmailer' => 'v6.2.5@698a6a9f54d7eb321274de3ad19863802c879fb7',
  'symfony/cache' => 'v3.4.47@a7a14c4832760bd1fbd31be2859ffedc9b6ff813',
  'symfony/class-loader' => 'v3.4.47@a22265a9f3511c0212bf79f54910ca5a77c0e92c',
  'symfony/config' => 'v3.4.47@bc6b3fd3930d4b53a60b42fe2ed6fc466b75f03f',
  'symfony/debug' => 'v3.4.47@ab42889de57fdfcfcc0759ab102e2fd4ea72dcae',
  'symfony/dependency-injection' => 'v3.4.47@51d2a2708c6ceadad84393f8581df1dcf9e5e84b',
  'symfony/event-dispatcher' => 'v3.4.47@31fde73757b6bad247c54597beef974919ec6860',
  'symfony/filesystem' => 'v3.4.47@e58d7841cddfed6e846829040dca2cca0ebbbbb3',
  'symfony/finder' => 'v3.4.47@b6b6ad3db3edb1b4b1c1896b1975fb684994de6e',
  'symfony/form' => 'v3.4.47@62e841f089ec485e5ee425308b56b6ce2b5d11fa',
  'symfony/framework-bundle' => 'v3.4.47@6c95e747b75ddd2af61152ce93bf87299d15710e',
  'symfony/http-foundation' => 'v3.4.47@b9885fcce6fe494201da4f70a9309770e9d13dc8',
  'symfony/http-kernel' => 'v3.4.47@a98a4c30089e6a2d52a9fa236f718159b539f6f5',
  'symfony/inflector' => 'v3.4.47@b557c5d061b72cadf454dd87cd1308d0710c8021',
  'symfony/intl' => 'v3.4.47@c0e22a40039977f11dc4de03a853ab9450c2b4cd',
  'symfony/options-resolver' => 'v3.4.47@c7efc97a47b2ebaabc19d5b6c6b50f5c37c92744',
  'symfony/polyfill-apcu' => 'v1.19.0@b44b51e7814c23bfbd793a16ead5d7ce43ed23c5',
  'symfony/polyfill-ctype' => 'v1.19.0@aed596913b70fae57be53d86faa2e9ef85a2297b',
  'symfony/polyfill-iconv' => 'v1.19.0@085241787d52fa6f7a774fd034135fef0cfd5496',
  'symfony/polyfill-intl-icu' => 'v1.19.0@f740dd60a5b5f1511229e107f7e59f404b102084',
  'symfony/polyfill-intl-idn' => 'v1.19.0@4ad5115c0f5d5172a9fe8147675ec6de266d8826',
  'symfony/polyfill-intl-normalizer' => 'v1.19.0@8db0ae7936b42feb370840cf24de1a144fb0ef27',
  'symfony/polyfill-mbstring' => 'v1.19.0@b5f7b932ee6fa802fc792eabd77c4c88084517ce',
  'symfony/polyfill-php56' => 'v1.19.0@ea19621731cbd973a6702cfedef3419768bf3372',
  'symfony/polyfill-php70' => 'v1.19.0@3fe414077251a81a1b15b1c709faf5c2fbae3d4e',
  'symfony/polyfill-php72' => 'v1.19.0@beecef6b463b06954638f02378f52496cb84bacc',
  'symfony/polyfill-php80' => 'v1.19.0@f54ef00f4678f348f133097fa8c3701d197ff44d',
  'symfony/polyfill-util' => 'v1.19.0@8df0c3e6a4b85df9a5c6f3f2f46fba5c5c47058a',
  'symfony/property-access' => 'v3.4.47@f1dc91d0c987f3ba95be1d7874527d11477b25ff',
  'symfony/routing' => 'v3.4.47@3e522ac69cadffd8131cc2b22157fa7662331a6c',
  'symfony/security' => 'v3.4.47@7f924370b6fc5927d7561ce2b6fb2b4ceccba63e',
  'symfony/security-bundle' => 'v3.4.47@8c23ac77dfb9cc48f1244b52528ff5331c6c08f6',
  'symfony/templating' => 'v3.4.47@84ca10f95aaff084ae2bcfc5c21ae551af173d5a',
  'symfony/translation' => 'v3.4.47@be83ee6c065cb32becdb306ba61160d598b1ce88',
  'symfony/twig-bridge' => 'v3.4.47@090d19d6f1ea5b9e1d79f372785aa5e5c9cd4042',
  'symfony/twig-bundle' => 'v3.4.47@977b3096e2df96bc8a8d2329e83466cfc30c373d',
  'symfony/validator' => 'v3.4.47@d25ceea5c99022aecf37adf157c76c31fc5dcbed',
  'twig/twig' => 'v2.12.5@18772e0190734944277ee97a02a9a6c6555fcd94',
  'yiisoft/yii2' => '2.0.40@debb520c1d72a2c97c09d70a2a2a4f600ef3958e',
  'yiisoft/yii2-authclient' => '2.2.9@f38a0c931c1ae6459a8e221fc693ee31a4c1bab6',
  'yiisoft/yii2-bootstrap' => '2.0.10@073c9ab0a4eb71f2485d84c96a1967130300d8fc',
  'yiisoft/yii2-composer' => '2.0.10@94bb3f66e779e2774f8776d6e1bdeab402940510',
  'yiisoft/yii2-httpclient' => '2.0.13@470e9066ae780f0ca20827d3f6f84eca6bbb0991',
  'yiisoft/yii2-mongodb' => '2.1.11@37cfd145ef10bcb116219fbed984086a379aea55',
  'yiisoft/yii2-swiftmailer' => '2.1.2@09659a55959f9e64b8178d842b64a9ffae42b994',
  'fakerphp/faker' => 'v1.9.2@84220cf137a9344acffb10374e781fed785ff307',
  'opis/closure' => '3.6.1@943b5d70cc5ae7483f6aff6ff43d7e34592ca0f5',
  'phpspec/php-diff' => 'v1.1.3@fc1156187f9f6c8395886fe85ed88a0a245d72e9',
  'yiisoft/yii2-codeception' => '2.0.6@086c8c2d28736e7a484a7a8611b5cc84024e9fb3',
  'yiisoft/yii2-debug' => '2.1.16@0d8ce76b2dd036a5fc38b26434e1c672ad8975a9',
  'yiisoft/yii2-faker' => '2.0.5@8c361657143bfaea58ff7dcc9bf51f1991a46f5d',
  'yiisoft/yii2-gii' => '2.2.1@f3bb400b578b0a0ee737d267ebaffdaad7b32dee',
  'yiisoft/yii2-app-advanced' => 'dev-master@f7ae43ab5df60c28506e196af0c8fc0a056e98bf',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}