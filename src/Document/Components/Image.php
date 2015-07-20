<?php

/**
 * @file
 * An Apple News Document Image.
 */

namespace ChapterThree\AppleNews\Document\Components;

/**
 * An Apple News Document Image.
 */
class Image extends Component {

  protected $url;

  protected $caption;
  protected $accessibilityCaption;
  protected $explicitContent;

  /**
   * Implements __construct().
   *
   * @param string $url
   *   Role.
   * @param mixed $identifier
   *   Identifier.
   */
  public function __construct($url, $identifier = NULL) {
    parent::__construct('image', $identifier);
    $this->setUrl($url);
  }

  /**
   * {@inheritdoc}
   */
  protected function optional() {
    return array_merge(parent::optional(), array(
      'caption',
      'accessibilityCaption',
      'explicitContent',
    ));
  }

  /**
   * Getter for url.
   */
  public function getUrl() {
    return $this->url;
  }

  /**
   * Setter for url.
   *
   * @param mixed $value
   *   Url.
   *
   * @return $this
   */
  public function setUrl($value) {
    $this->url = $value;
    return $this;
  }

  /**
   * Getter for caption.
   */
  public function getCaption() {
    return $this->caption;
  }

  /**
   * Setter for caption.
   *
   * @param string $value
   *   Caption.
   *
   * @return $this
   */
  public function setCaption($value) {
    $this->caption = (string) $value;
    return $this;
  }

  /**
   * Getter for accessibilityCaption.
   */
  public function getAccessibilityCaption() {
    return $this->accessibilityCaption;
  }

  /**
   * Setter for accessibilityCaption.
   *
   * @param string $value
   *   AccessibilityCaption.
   *
   * @return $this
   */
  public function setAccessibilityCaption($value) {
    $this->accessibilityCaption = (string) $value;
    return $this;
  }

  /**
   * Getter for explicitContent.
   */
  public function getExplicitContent() {
    return $this->explicitContent;
  }

  /**
   * Setter for explicitContent.
   *
   * @param bool $value
   *   ExplicitContent.
   *
   * @return $this
   */
  public function setExplicitContent($value) {
    $this->explicitContent = $value;
    return $this;
  }

}