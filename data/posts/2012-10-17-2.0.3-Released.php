<?php
use PhlyBlog\AuthorEntity;
use PhlyBlog\EntryEntity;

$author = new AuthorEntity();
$author->setId('matthew');
$author->setName("Matthew Weier O'Phinney");
$author->setEmail('matthew@zend.com');
$author->setUrl('http://mwop.net/');

$post = new EntryEntity();
$post->setTitle('Zend Framework 2.0.3 Released!');
$post->setAuthor($author);
$post->setDraft(false);
$post->setPublic(true);
$post->setCreated(new DateTime('2012-10-17 17:15', new DateTimezone('America/Chicago')));
$post->setUpdated(new DateTime('2012-10-17 17:15', new DateTimezone('America/Chicago')));
$body =<<<'EOS'
<p>
    The Zend Framework community is pleased to announce the immediate availability
    of Zend Framework 2.0.3! Packages and installation instructions are
    available at:
</p>

<ul>
    <li>
        <a href="/downloads/latest">http://framework.zend.com/downloads/latest</a>
    </li>
</ul>

EOS;
$post->setBody($body);

$extended =<<<'EOC'

<h2>Changelog</h2>

<p>
    This release included 115 changes, ranging from minor docblock improvements to bugfixes.
    The full list is as follows:
</p>

<ul>
    <li><a href="https://github.com/zendframework/zf2/issues/2244">2244: Fix for issue ZF2-503</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2318">2318: [WIP - help] Allow to remove decimals in CurrencyFormat</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2363">2363: Hotfix db features with eventfeature</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2380">2380: ZF2-482 Attempt to fix the buffer. Also added extra unit tests.</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2392">2392: Update library/Zend/Db/Adapter/Platform/Mysql.php</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2395">2395: Fix for http://framework.zend.com/issues/browse/ZF2-571</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2397">2397: Memcached option merge issuse</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2402">2402: Adding missing dependencies</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2404">2404: Fix to comments</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2406">2406: No, sir, that's not a boolean.</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2416">2416: Fix expressionParamIndex for AbstractSql</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2420">2420: Zend\Db\Sql\Select: Fixed issue with join expression named parameters overlapping.</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2421">2421: Update library/Zend/Http/Header/SetCookie.php</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2422">2422: fix add 2 space after @param in Zend\Loader</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2423">2423: ManagerInterface must be interface, remove 'interface' description</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2425">2425: Use built-in Travis composer</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2426">2426: [BC] Remove need of setter in ClassMethods hydrator</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2432">2432: Prevent space before end of tag with HTML5 doctype</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2433">2433: fix for setJsonpCallback not called when recieved JsonModel + test</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2434">2434: added phpdoc in Zend\Db</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2437">2437: Hotfix/console 404 reporting</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2438">2438: Improved previous fix for ZF2-558.  </a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2440">2440: Turkish Translations for Captcha and Validate</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2441">2441: Allow form collection to have any helper</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2516">2516: limit(20) -> generates LIMIT '20' and throws an IllegalQueryException</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2545">2545: getSqlStringForSqlObject() returns an invalid SQL statement with LIMIT and OFFSET clauses</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2595">2595: Pgsql adapater has codes related to MySQL</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2613">2613: Prevent password to be rendered if form validation fails</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2617">2617: Fixed Zend\Validator\Iban class name</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2619">2619: [Fix/Master] Form enctype fix when File elements are within a collection</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2620">2620: [Fix/Master] InputFilter/Input when merging was not using raw value</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2622">2622: Added ability to specify port</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2624">2624: [Fix/Master] Form's default input filters added multiple times</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2630">2630: fix relative link ( remove the relative links ) in README.md</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2631">2631: Update library/Zend/Loader/AutoloaderFactory.php</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2633">2633: fix redundance errors "The input does not appear to be a valid date" show twice</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2635">2635: Fix potential issue with Sitemap test</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2636">2636: add isset checks around timeout and maxredirects</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2641">2641: hotfix : formRow() element error multi-checkbox and radio renderError not shown</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2642">2642: Fix Travis build for CS issue</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2643">2643: fix for setJsonpCallback not called when recieved JsonModel + test</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2644">2644: Add fluidity to the prepare() function for a form</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2652">2652: Zucchi/filter tweaks</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2665">2665: pdftest fix</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2666">2666: fixed url change</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2667">2667: Possible fix for rartests</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2669">2669: skip whem gmp is loaded</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2673">2673: Input fallback value option</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2676">2676: mysqli::close() never called</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2677">2677: added phpdoc to Zend\Stdlib</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2678">2678: Zend\Db\Adapter\Sqlsrv\Sqlsrv never calls Statement\initialize() (fix within)</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2679">2679: Zend/Log/Logger.php using incorrect php errorLevel</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2680">2680: Cache: fixed bug on getTotalSpace of filesystem and dba adapter</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2681">2681: Cache/Dba: fixed notices on tearDown db4 tests</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2682">2682: Replace 'Configuration' with 'Config' when retrieving configuration</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2683">2683: Hotfix: Allow items from Abstract Factories to have setShared() called</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2685">2685: Remove unused Uses</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2686">2686: Adding code to allow EventManager trigger listeners using wildcard identifier</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2687">2687: Hotfix/db sql nested expressions</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2688">2688: Hotfix/tablegateway event feature</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2689">2689: Hotfix/composer phpunit</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2690">2690: Use RFC-3339 full-date format (Y-m-d) in Date element</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2691">2691: join on conditions don't accept alternatives to columns</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2693">2693: Update library/Zend/Db/Adapter/Driver/Mysqli/Connection.php</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2694">2694: Bring fluid interface to Feed Writer</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2698">2698: fix typo in # should be :: in exception</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2699">2699: fix elseif in javascript Upload Demo</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2700">2700: fix cs in casting variable</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2705">2705: Fix french translation</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2707">2707: Improved error message when ServiceManager does not find an invokable class</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2710">2710: #2461 - correcting the url encoding of path segments</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2711">2711: Fix/demos ProgressBar/ZendForm.php : Object of class Zend\Form\Form could not be converted to string</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2712">2712: fix cs casting variable for (array)</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2713">2713: Update library/Zend/Mvc/Service/ViewHelperManagerFactory.php</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2714">2714: Don't add separator if not prefixing columns</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2717">2717: Extends when it can : Validator\DateStep extends Validator\Date to reduce code redundancy</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2719">2719: Fixing the Cache Storage Factory Adapter Factory</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2728">2728: [Bug][Mail] Bad Regex for Content Type header</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2731">2731: Reset the Order part when resetting Select</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2732">2732: Removed references to Mysqli in Zend\Db\Adapter\Driver\Pgsql</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2733">2733: fix @package Zend_Validate should be Zend_Validator</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2734">2734: fix i18n @package and @subpackage value</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2736">2736: fix captcha helper test.</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2737">2737: Issue #2728 - Bad Regex for Content Type header</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2738">2738: fix link 'quickstart' to version 2.0</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2739">2739: remove '@subpackage'  because Zend\Math is not in subpackage</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2742">2742: remove () in echo-ing</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2749">2749: Fix for #2678 (Zend\Db's Sqlsrv Driver)</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2750">2750: Adds the ability to instanciate by factory to AbstractPluginManager</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2754">2754: add the support to register module paths over namespace</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2755">2755:  remove Zend\Mvc\Controller\PluginBroker from aliases in "$defaultServiceConfig"</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2759">2759: Fix Zend\Code\Scanner\TokenArrayScanner</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2764">2764: Fixed Zend\Math\Rand::getString() to pass the parameter $strong to ::getBytes()</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2765">2765: Csrf: always use dedicated setter</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2766">2766: Session\Storage: always preserve _REQUEST_ACCESS_TIME</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2768">2768: Zend\Validator dependency is missed in Zend\Cache composer.json</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2769">2769: change valueToLDAP to valueToLdap and valueFromLDAP to valueFromLdap</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2770">2770: [WIP] Memcached</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2775">2775: Zend\Db\Sql: Fix for Mysql quoting during limit and offset</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2776">2776: Allow whitespace in Iban</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2777">2777: Fix issue when PREG_BAD_UTF8_OFFSET_ERROR is defined but Unicode support is not enabled on PCRE</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2778">2778: Undefined Index fix in ViewHelperManagerFactory</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2779">2779: Allow forms that have been added as fieldsets to bind values to bound ob...</a></li>
    <li><a href="https://github.com/zendframework/zf2/issues/2782">2782: Issue 2781</a></li>
</ul>

<h2>Thank You!</h2>

<p>
    Many thanks to all contributors to this release! 
</p>

<h2>Reminder</h2>

<p>
    Maintenance releases happen monthly on the third Wednesday. Additionally, 
    we have the next minor release, 2.1.0, slated for sometime next month.
</p>

EOC;
$post->setExtended($extended);

return $post;
