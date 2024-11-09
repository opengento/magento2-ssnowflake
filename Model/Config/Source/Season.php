<?php
/**
 * Copyright © OpenGento, All rights reserved.
 * See LICENSE bundled with this library for license details.
 */
declare(strict_types=1);

namespace Opengento\Snowflake\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

class Season implements OptionSourceInterface
{
    public function toOptionArray(): array
    {
        return [
            ['value' => 'halloween', 'label' => __('Halloween')],
            ['value' => 'noel', 'label' => __('Noel')],
            ['value' => 'printemps', 'label' => __('Printemps')],
            ['value' => 'ete', 'label' => __('Été')],
            ['value' => 'automne', 'label' => __('Automne')],
            ['value' => 'fete_nationale', 'label' => __('Fête Nationale')],
            ['value' => 'nouvel_an', 'label' => __('Nouvel An')],
            ['value' => 'paques', 'label' => __('Pâques')],
            ['value' => 'saint_valentin', 'label' => __('Saint-Valentin')],
            ['value' => 'fete_travail', 'label' => __('Fête du Travail')],
            ['value' => 'fete_musique', 'label' => __('Fête de la Musique')],
            ['value' => 'hiver', 'label' => __('Hiver')],
            ['value' => 'carnaval', 'label' => __('Carnaval')],
            ['value' => 'saint_patrick', 'label' => __('Saint Patrick')],
            ['value' => 'hanoucca', 'label' => __('Hanoucca')],
            ['value' => 'ramadan', 'label' => __('Ramadan')],
            ['value' => 'diwali', 'label' => __('Diwali')],
            ['value' => 'chinese_new_year', 'label' => __('Nouvel An Chinois')],
            ['value' => 'fete_meres', 'label' => __('Fête des Mères')],
            ['value' => 'fete_peres', 'label' => __('Fête des Pères')],
            ['value' => 'action_de_grace', 'label' => __('Action de Grâce')],
            ['value' => 'fete_saucisse', 'label' => __('Fête à la Saucisse')],
            ['value' => 'apero_time', 'label' => __('l\'heure de l\'apéro')]
        ];
    }

}
