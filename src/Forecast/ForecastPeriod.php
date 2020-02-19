<?php

namespace BomWeather\Forecast;

/**
 * A value object for forecast periods.
 */
class ForecastPeriod {

  /**
   * The start time.
   *
   * @var \DateTime
   */
  protected $startTime;

  /**
   * The end time.
   *
   * @var \DateTime
   */
  protected $endTime;

  /**
   * The air temp maximum in Celsius.
   *
   * @var int
   */
  protected $airTempMaximum;

  /**
   * The probability of precipitation.
   *
   * @var string
   */
  protected $probabilityOfPrecipitation;

  /**
   * The precipitation range.
   *
   * @var string
   */
  protected $precipitationRange;

  /**
   * The forecast icon code.
   *
   * @var int
   */
  protected $iconCode;

  /**
   * The air temp minimum in Celsius.
   *
   * @var int
   */
  protected $airTempMinimum;

  /**
   * The precis.
   *
   * @var string
   */
  protected $precis;

  /**
   * The UV alert.
   *
   * @var string
   */
  protected $uvAlert;

  /**
   * The forecast.
   *
   * @var string
   */
  protected $forecast;

  /**
   * The synoptic situation.
   *
   * @var string
   */
  protected $synoptic;

  /**
   * The seas.
   *
   * @var string
   */
  protected $seas;

  /**
   * The swell.
   *
   * @var string
   */
  protected $swell;

  /**
   * The weather.
   *
   * @var string
   */
  protected $weather;

  /**
   * The winds.
   *
   * @var string
   */
  protected $winds;

  /**
   * Factory method.
   *
   * @return $this
   */
  public static function create() {
    return new static();
  }

  /**
   * Gets the start time.
   *
   * @return \DateTime
   *   The start time.
   */
  public function getStartTime(): \DateTime {
    return $this->startTime;
  }

  /**
   * Sets the start time.
   *
   * @param \DateTime $startTime
   *   The start time.
   *
   * @return $this
   */
  public function setStartTime(\DateTime $startTime): ForecastPeriod {
    $this->startTime = $startTime;
    return $this;
  }

  /**
   * Gets the end time.
   *
   * @return \DateTime
   *   The end time.
   */
  public function getEndTime(): \DateTime {
    return $this->endTime;
  }

  /**
   * Sets the end time.
   *
   * @param \DateTime $endTime
   *   The end time.
   *
   * @return $this
   */
  public function setEndTime(\DateTime $endTime): ForecastPeriod {
    $this->endTime = $endTime;
    return $this;
  }

  /**
   * Gets the icon code.
   *
   * @return int
   *   The icon code.
   */
  public function getIconCode(): ?int {
    return $this->iconCode;
  }

  /**
   * Sets the icon code.
   *
   * @param int $iconCode
   *   The icon code.
   *
   * @return $this
   */
  public function setIconCode(int $iconCode): ForecastPeriod {
    $this->iconCode = $iconCode;
    return $this;
  }

  /**
   * Gets the precipitation range.
   *
   * @return string
   *   The precipitation range.
   */
  public function getPrecipitationRange(): ?string {
    return $this->precipitationRange;
  }

  /**
   * Sets the precipitation range.
   *
   * @param string $precipitationRange
   *   The precipitation range.
   *
   * @return $this
   */
  public function setPrecipitationRange(string $precipitationRange): ForecastPeriod {
    $this->precipitationRange = $precipitationRange;
    return $this;
  }

  /**
   * Gets the air temp minimum.
   *
   * @return int
   *   The air temp minimum.
   */
  public function getAirTempMinimum(): ?int {
    return $this->airTempMinimum;
  }

  /**
   * Sets the air temp minimum.
   *
   * @param int $airTempMinimum
   *   The air temp minimum.
   *
   * @return $this
   */
  public function setAirTempMinimum(int $airTempMinimum): ForecastPeriod {
    $this->airTempMinimum = $airTempMinimum;
    return $this;
  }

  /**
   * Gets the air temp maximum.
   *
   * @return int
   *   The air temp maximum.
   */
  public function getAirTempMaximum(): ?int {
    return $this->airTempMaximum;
  }

  /**
   * Sets the air temp maximum.
   *
   * @param int $airTempMaximum
   *   The air temp maximum.
   *
   * @return $this
   */
  public function setAirTempMaximum(int $airTempMaximum): ForecastPeriod {
    $this->airTempMaximum = $airTempMaximum;
    return $this;
  }

  /**
   * Gets the precis.
   *
   * @return string
   *   The precis.
   */
  public function getPrecis(): ?string {
    return $this->precis;
  }

  /**
   * Sets the precis.
   *
   * @param string $precis
   *   The precis.
   *
   * @return $this
   */
  public function setPrecis(string $precis): ForecastPeriod {
    $this->precis = $precis;
    return $this;
  }

  /**
   * Gets the probability of precipitation.
   *
   * @return string
   *   The probability of precipitation.
   */
  public function getProbabilityOfPrecipitation(): ?string {
    return $this->probabilityOfPrecipitation;
  }

  /**
   * Sets the probability of precipitation.
   *
   * @param string $probabilityOfPrecipitation
   *   The probability of precipitation.
   *
   * @return $this
   */
  public function setProbabilityOfPrecipitation(
    string $probabilityOfPrecipitation
  ): ForecastPeriod {
    $this->probabilityOfPrecipitation = $probabilityOfPrecipitation;
    return $this;
  }

  /**
   * Gets the forecast.
   *
   * @return string
   *   The forecast.
   */
  public function getForecast(): ?string {
    return $this->forecast;
  }

  /**
   * Sets the forecast.
   *
   * @param string $forecast
   *   The forecast.
   *
   * @return $this
   */
  public function setForecast(string $forecast): ForecastPeriod {
    $this->forecast = $forecast;
    return $this;
  }

  /**
   * Gets the UV alert.
   *
   * @return string
   *   The UV alert.
   */
  public function getUvAlert(): ?string {
    return $this->uvAlert;
  }

  /**
   * Sets the UV alert.
   *
   * @param string $uvAlert
   *   The UV alert.
   *
   * @return $this
   */
  public function setUvAlert(string $uvAlert): ForecastPeriod {
    $this->uvAlert = $uvAlert;
    return $this;
  }

  /**
   * Gets the synoptic.
   *
   * @return string
   *   The synoptic.
   */
  public function getSynoptic(): string {
    return $this->synoptic;
  }

  /**
   * Sets the synoptic.
   *
   * @param string $synoptic
   *   The synoptic.
   *
   * @return $this
   */
  public function setSynoptic(string $synoptic): ForecastPeriod {
    $this->synoptic = $synoptic;
    return $this;
  }

  /**
   * Gets the seas.
   *
   * @return string
   *   The seas.
   */
  public function getSeas(): string {
    return $this->seas;
  }

  /**
   * Sets the seas.
   *
   * @param string $seas
   *   The seas.
   *
   * @return $this
   */
  public function setSeas(string $seas): ForecastPeriod {
    $this->seas = $seas;
    return $this;
  }

  /**
   * Gets the swell.
   *
   * @return string
   *   The swell.
   */
  public function getSwell(): string {
    return $this->swell;
  }

  /**
   * Sets the swell.
   *
   * @param string $swell
   *   The swell.
   *
   * @return $this
   */
  public function setSwell(string $swell): ForecastPeriod {
    $this->swell = $swell;
    return $this;
  }

  /**
   * Gets the weather.
   *
   * @return string
   *   The weather.
   */
  public function getWeather(): string {
    return $this->weather;
  }

  /**
   * Sets the weather.
   *
   * @param string $weather
   *   The weather.
   *
   * @return $this
   */
  public function setWeather(string $weather): ForecastPeriod {
    $this->weather = $weather;
    return $this;
  }

  /**
   * Gets the winds.
   *
   * @return string
   *   The winds.
   */
  public function getWinds(): string {
    return $this->winds;
  }

  /**
   * Sets the winds.
   *
   * @param string $winds
   *   The winds.
   *
   * @return $this
   */
  public function setWinds(string $winds): ForecastPeriod {
    $this->winds = $winds;
    return $this;
  }

}
