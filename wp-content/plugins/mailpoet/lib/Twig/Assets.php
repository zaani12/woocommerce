<?php // phpcs:ignore SlevomatCodingStandard.TypeHints.DeclareStrictTypes.DeclareStrictTypesMissing

namespace MailPoet\Twig;

if (!defined('ABSPATH')) exit;


use MailPoet\Config\Env;
use MailPoet\DI\ContainerWrapper;
use MailPoet\Util\CdnAssetUrl;
use MailPoet\WP\Functions as WPFunctions;
use MailPoetVendor\Twig\Extension\AbstractExtension;
use MailPoetVendor\Twig\TwigFunction;

class Assets extends AbstractExtension {
  private $globals;

  /** @var WPFunctions  */
  private $wp;

  /** @var CdnAssetUrl|null */
  private $cdnAssetsUrl;

  public function __construct(
    array $globals,
    WPFunctions $wp,
    CdnAssetUrl $cdnAssetsUrl = null
  ) {
    $this->globals = $globals;
    $this->wp = $wp;
    $this->cdnAssetsUrl = $cdnAssetsUrl;
  }

  public function getFunctions() {
    return [
      new TwigFunction(
        'stylesheet',
        [$this, 'generateStylesheet'],
        ['is_safe' => ['all']]
      ),
      new TwigFunction(
        'javascript',
        [$this, 'generateJavascript'],
        ['is_safe' => ['all']]
      ),
      new TwigFunction(
        'getJavascriptScriptUrl',
        [$this, 'getJavascriptScriptUrl'],
        ['is_safe' => ['all']]
      ),
      new TwigFunction(
        'image_url',
        [$this, 'generateImageUrl'],
        ['is_safe' => ['all']]
      ),
      new TwigFunction(
        'cdn_url',
        [$this, 'generateCdnUrl'],
        ['is_safe' => ['all']]
      ),
      new TwigFunction(
        'language',
        [$this, 'language'],
        ['is_safe' => ['all']]
      ),
    ];
  }

  public function generateStylesheet() {
    $stylesheets = func_get_args();
    $output = [];

    foreach ($stylesheets as $stylesheet) {
      $output[] = sprintf(
        '<link rel="stylesheet" type="text/css" href="%s/dist/css/%s" />',
        $this->globals['assets_url'],
        $this->getAssetFilename($this->globals['assets_manifest_css'], $stylesheet)
      );
    }

    return join("\n", $output);
  }

  /**
   * Returns the language, which is currently loaded.
   * This function is used to add the language tag for our system emails like stats notifications.
   */
  public function language() {

    // If we do not have a translation, the language of the mail will be English.
    if (!is_textdomain_loaded('mailpoet')) {
      return 'en';
    }
    return (string)$this->wp->getBlogInfo('language');
  }

  public function generateJavascript() {
    $scripts = func_get_args();
    $output = [];

    foreach ($scripts as $script) {
      $output[] = sprintf(
        '<script type="text/javascript" src="%s"></script>',
        $this->getJavascriptScriptUrl($script)
      );
    }

    return join("\n", $output);
  }

  public function getJavascriptScriptUrl($script) {
    return sprintf(
      '%s/%s/%s?ver=%s',
      $this->globals['assets_url'],
      strpos($script, 'lib/') === 0 ? 'js' : 'dist/js',
      $this->getAssetFileName($this->globals['assets_manifest_js'], $script),
      Env::$version
    );
  }

  public function generateImageUrl($path) {
    return $this->appendVersionToUrl(
      $this->globals['assets_url'] . '/img/' . $path
    );
  }

  public function appendVersionToUrl($url) {
    return WPFunctions::get()->addQueryArg('mailpoet_version', $this->globals['version'], $url);
  }

  public function getAssetFileName($manifest, $asset) {
    return (!empty($manifest[$asset])) ? $manifest[$asset] : $asset;
  }

  public function generateCdnUrl($path) {
    if ($this->cdnAssetsUrl === null) {
      $this->cdnAssetsUrl = ContainerWrapper::getInstance()->get(CdnAssetUrl::class);
    }
    return $this->cdnAssetsUrl->generateCdnUrl($path);
  }
}
