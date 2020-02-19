<?php

namespace BomWeather\Forecast\Serializer;

use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * Factory for creating a forecast serializer.
 */
class ForecastSerializerFactory {

  /**
   * Creates a new forecast serializer.
   *
   * @param string $rootNode
   *   (optional) The root node of the XML.
   *
   * @return \Symfony\Component\Serializer\Serializer
   *   The serializer.
   */
  public static function create($rootNode = 'product') {

    $encoders = [new XmlEncoder([XmlEncoder::ROOT_NODE_NAME => $rootNode])];
    $normalizers = [
      new DateTimeNormalizer([DateTimeNormalizer::FORMAT_KEY => \DateTime::RFC3339]),
      new ForecastNormalizer(),
      new AreaNormalizer(),
      new ForecastPeriodNormalizer(),
      new GetSetMethodNormalizer(),
    ];
    return new Serializer($normalizers, $encoders);
  }

}
