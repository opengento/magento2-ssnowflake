<?php
/**
 * Copyright © OpenGento, All rights reserved.
 * See LICENSE bundled with this library for license details.
 */
declare(strict_types=1);

namespace Opengento\Snowflake\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Opengento\Snowflake\Model\Config\OpenWeather as OpenWeatherConfig;
use Opengento\Snowflake\Model\Config\Snowflake as SnowflakeConfig;
use Magento\Framework\Serialize\SerializerInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

final class Snowflake implements ArgumentInterface
{
    public function __construct(
        private SerializerInterface $serializer,
        private SnowflakeConfig $snowflakeConfig,
        private OpenWeatherConfig $openWeatherConfig,
        private ScopeConfigInterface $scopeConfig
    ) {}

    public function getSeasonalIcons(): array
    {
        return [
            'halloween' => ['🎃', '👻', '🦇'],
            'noel' => ['❄️', '🎅', '🎄'],
            'printemps' => ['🌷', '🐣', '☀️'],
            'ete' => ['🌞', '🏖️', '🍉'],
            'automne' => ['🍂', '🍁', '🎃'],
            'fete_nationale' => ['🎆', '🇫🇷', '🥳'],
            'nouvel_an' => ['🎇', '🎉', '🥂'],
            'paques' => ['🐰', '🥚', '🐣'],
            'saint_valentin' => ['💖', '🌹', '💕'],
            'fete_travail' => ['⚒️', '🌻', '🛠️'],
            'fete_musique' => ['🎵', '🎸', '🎤'],
            'hiver' => ['❄️', '☃️', '🌨️'],
            'printemps' => ['🌸', '🌷', '🦋'],
            'ete' => ['🌞', '🍦', '🏄'],
            'automne' => ['🍁', '🍂', '🍄'],
            'halloween' => ['🎃', '🕸️', '👻'],
            'noel' => ['🎄', '🎅', '🤶'],
            'carnaval' => ['🎭', '🎊', '🤹'],
            'saint_patrick' => ['☘️', '🍺', '🇮🇪'],
            'hanoucca' => ['🕎', '✨', '🥯'],
            'ramadan' => ['🌙', '🕌', '🕋'],
            'diwali' => ['🪔', '🎆', '🌟'],
            'chinese_new_year' => ['🐉', '🏮', '🧧'],
            'fete_meres' => ['💐', '👩‍👧‍👦', '🌹'],
            'fete_peres' => ['👔', '🍻', '🎣'],
            'halloween' => ['🎃', '🦇', '🕸️'],
            'action_de_grace' => ['🦃', '🥧', '🍂'],
            'noel' => ['🎄', '🎁', '❄️'],
            'nouvel_an_chinois' => ['🐲', '🧨', '🧧'],
            'fete_saucisse' => ['🌭', '🍻', '🎉', '🕺', '🎶'],
            'apero_time' => ['🍺', '🍹', '🍾']
        ];
    }

    public function getSelectedSeason(): string
    {
        return $this->scopeConfig->getValue('snowflake/general/season', ScopeInterface::SCOPE_STORE);
    }

    public function getIconsForSelectedSeason(): string
    {
        $selectedSeason = $this->getSelectedSeason();
        $seasonalIcons = $this->getSeasonalIcons();
        $icons = $seasonalIcons[$selectedSeason] ?? [];
        return $this->serializer->serialize($icons);
    }

    public function getSnowflakeVSpeed(): float
    {
        return $this->snowflakeConfig->getSnowflakeVSpeed();
    }

    public function getSnowflakeHSpeed(): float
    {
        return $this->snowflakeConfig->getSnowflakeHSpeed();
    }

    public function getSnowflakeRotSpeed(): int
    {
        return $this->snowflakeConfig->getSnowflakeRotSpeed();
    }

    public function getSnowflakeQty(): int
    {
        return $this->snowflakeConfig->getSnowflakeQty();
    }

    public function getSnowflakeMinSize(): int
    {
        return $this->snowflakeConfig->getSnowflakeMinSize();
    }

    public function getSnowflakeMaxSize(): int
    {
        return $this->snowflakeConfig->getSnowflakeMaxSize();
    }

    public function isForceSnow(): bool
    {
        return $this->snowflakeConfig->isForceSnow();
    }

    public function isApiEnabled(): bool
    {
        return $this->openWeatherConfig->isEnabled();
    }

    public function getIpLocatorApiUrl(): string
    {
        return $this->openWeatherConfig->getIpLocatorApiUrl();
    }
}
