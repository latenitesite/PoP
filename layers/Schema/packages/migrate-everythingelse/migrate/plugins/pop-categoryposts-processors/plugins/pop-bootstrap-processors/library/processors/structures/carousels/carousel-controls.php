<?php
use PoP\Engine\Route\RouteUtils;
use PoP\ComponentModel\State\ApplicationState;
use PoP\ComponentModel\Misc\RequestUtils;
use PoPSchema\PostTags\Facades\PostTagTypeAPIFacade;

class CPP_Module_Processor_CarouselControls extends PoP_Module_Processor_CarouselControlsBase
{
    public const MODULE_CAROUSELCONTROLS_CATEGORYPOSTS00 = 'carouselcontrols-categoryposts00';
    public const MODULE_CAROUSELCONTROLS_CATEGORYPOSTS01 = 'carouselcontrols-categoryposts01';
    public const MODULE_CAROUSELCONTROLS_CATEGORYPOSTS02 = 'carouselcontrols-categoryposts02';
    public const MODULE_CAROUSELCONTROLS_CATEGORYPOSTS03 = 'carouselcontrols-categoryposts03';
    public const MODULE_CAROUSELCONTROLS_CATEGORYPOSTS04 = 'carouselcontrols-categoryposts04';
    public const MODULE_CAROUSELCONTROLS_CATEGORYPOSTS05 = 'carouselcontrols-categoryposts05';
    public const MODULE_CAROUSELCONTROLS_CATEGORYPOSTS06 = 'carouselcontrols-categoryposts06';
    public const MODULE_CAROUSELCONTROLS_CATEGORYPOSTS07 = 'carouselcontrols-categoryposts07';
    public const MODULE_CAROUSELCONTROLS_CATEGORYPOSTS08 = 'carouselcontrols-categoryposts08';
    public const MODULE_CAROUSELCONTROLS_CATEGORYPOSTS09 = 'carouselcontrols-categoryposts09';
    public const MODULE_CAROUSELCONTROLS_CATEGORYPOSTS10 = 'carouselcontrols-categoryposts10';
    public const MODULE_CAROUSELCONTROLS_CATEGORYPOSTS11 = 'carouselcontrols-categoryposts11';
    public const MODULE_CAROUSELCONTROLS_CATEGORYPOSTS12 = 'carouselcontrols-categoryposts12';
    public const MODULE_CAROUSELCONTROLS_CATEGORYPOSTS13 = 'carouselcontrols-categoryposts13';
    public const MODULE_CAROUSELCONTROLS_CATEGORYPOSTS14 = 'carouselcontrols-categoryposts14';
    public const MODULE_CAROUSELCONTROLS_CATEGORYPOSTS15 = 'carouselcontrols-categoryposts15';
    public const MODULE_CAROUSELCONTROLS_CATEGORYPOSTS16 = 'carouselcontrols-categoryposts16';
    public const MODULE_CAROUSELCONTROLS_CATEGORYPOSTS17 = 'carouselcontrols-categoryposts17';
    public const MODULE_CAROUSELCONTROLS_CATEGORYPOSTS18 = 'carouselcontrols-categoryposts18';
    public const MODULE_CAROUSELCONTROLS_CATEGORYPOSTS19 = 'carouselcontrols-categoryposts19';
    public const MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS00 = 'carouselcontrols-authorcategoryposts00';
    public const MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS01 = 'carouselcontrols-authorcategoryposts01';
    public const MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS02 = 'carouselcontrols-authorcategoryposts02';
    public const MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS03 = 'carouselcontrols-authorcategoryposts03';
    public const MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS04 = 'carouselcontrols-authorcategoryposts04';
    public const MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS05 = 'carouselcontrols-authorcategoryposts05';
    public const MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS06 = 'carouselcontrols-authorcategoryposts06';
    public const MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS07 = 'carouselcontrols-authorcategoryposts07';
    public const MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS08 = 'carouselcontrols-authorcategoryposts08';
    public const MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS09 = 'carouselcontrols-authorcategoryposts09';
    public const MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS10 = 'carouselcontrols-authorcategoryposts10';
    public const MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS11 = 'carouselcontrols-authorcategoryposts11';
    public const MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS12 = 'carouselcontrols-authorcategoryposts12';
    public const MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS13 = 'carouselcontrols-authorcategoryposts13';
    public const MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS14 = 'carouselcontrols-authorcategoryposts14';
    public const MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS15 = 'carouselcontrols-authorcategoryposts15';
    public const MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS16 = 'carouselcontrols-authorcategoryposts16';
    public const MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS17 = 'carouselcontrols-authorcategoryposts17';
    public const MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS18 = 'carouselcontrols-authorcategoryposts18';
    public const MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS19 = 'carouselcontrols-authorcategoryposts19';
    public const MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS00 = 'carouselcontrols-tagcategoryposts00';
    public const MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS01 = 'carouselcontrols-tagcategoryposts01';
    public const MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS02 = 'carouselcontrols-tagcategoryposts02';
    public const MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS03 = 'carouselcontrols-tagcategoryposts03';
    public const MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS04 = 'carouselcontrols-tagcategoryposts04';
    public const MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS05 = 'carouselcontrols-tagcategoryposts05';
    public const MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS06 = 'carouselcontrols-tagcategoryposts06';
    public const MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS07 = 'carouselcontrols-tagcategoryposts07';
    public const MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS08 = 'carouselcontrols-tagcategoryposts08';
    public const MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS09 = 'carouselcontrols-tagcategoryposts09';
    public const MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS10 = 'carouselcontrols-tagcategoryposts10';
    public const MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS11 = 'carouselcontrols-tagcategoryposts11';
    public const MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS12 = 'carouselcontrols-tagcategoryposts12';
    public const MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS13 = 'carouselcontrols-tagcategoryposts13';
    public const MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS14 = 'carouselcontrols-tagcategoryposts14';
    public const MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS15 = 'carouselcontrols-tagcategoryposts15';
    public const MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS16 = 'carouselcontrols-tagcategoryposts16';
    public const MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS17 = 'carouselcontrols-tagcategoryposts17';
    public const MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS18 = 'carouselcontrols-tagcategoryposts18';
    public const MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS19 = 'carouselcontrols-tagcategoryposts19';

    public function getModulesToProcess(): array
    {
        return array(
            [self::class, self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS00],
            [self::class, self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS01],
            [self::class, self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS02],
            [self::class, self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS03],
            [self::class, self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS04],
            [self::class, self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS05],
            [self::class, self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS06],
            [self::class, self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS07],
            [self::class, self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS08],
            [self::class, self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS09],
            [self::class, self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS10],
            [self::class, self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS11],
            [self::class, self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS12],
            [self::class, self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS13],
            [self::class, self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS14],
            [self::class, self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS15],
            [self::class, self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS16],
            [self::class, self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS17],
            [self::class, self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS18],
            [self::class, self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS19],
            [self::class, self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS00],
            [self::class, self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS01],
            [self::class, self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS02],
            [self::class, self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS03],
            [self::class, self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS04],
            [self::class, self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS05],
            [self::class, self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS06],
            [self::class, self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS07],
            [self::class, self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS08],
            [self::class, self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS09],
            [self::class, self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS10],
            [self::class, self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS11],
            [self::class, self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS12],
            [self::class, self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS13],
            [self::class, self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS14],
            [self::class, self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS15],
            [self::class, self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS16],
            [self::class, self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS17],
            [self::class, self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS18],
            [self::class, self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS19],
            [self::class, self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS00],
            [self::class, self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS01],
            [self::class, self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS02],
            [self::class, self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS03],
            [self::class, self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS04],
            [self::class, self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS05],
            [self::class, self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS06],
            [self::class, self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS07],
            [self::class, self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS08],
            [self::class, self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS09],
            [self::class, self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS10],
            [self::class, self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS11],
            [self::class, self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS12],
            [self::class, self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS13],
            [self::class, self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS14],
            [self::class, self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS15],
            [self::class, self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS16],
            [self::class, self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS17],
            [self::class, self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS18],
            [self::class, self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS19],
        );
    }

    public function getControlClass(array $module)
    {
        switch ($module[1]) {
            case self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS00:
            case self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS01:
            case self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS02:
            case self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS03:
            case self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS04:
            case self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS05:
            case self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS06:
            case self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS07:
            case self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS08:
            case self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS09:
            case self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS10:
            case self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS11:
            case self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS12:
            case self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS13:
            case self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS14:
            case self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS15:
            case self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS16:
            case self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS17:
            case self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS18:
            case self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS19:
            case self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS00:
            case self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS01:
            case self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS02:
            case self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS03:
            case self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS04:
            case self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS05:
            case self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS06:
            case self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS07:
            case self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS08:
            case self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS09:
            case self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS10:
            case self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS11:
            case self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS12:
            case self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS13:
            case self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS14:
            case self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS15:
            case self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS16:
            case self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS17:
            case self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS18:
            case self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS19:
            case self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS00:
            case self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS01:
            case self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS02:
            case self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS03:
            case self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS04:
            case self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS05:
            case self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS06:
            case self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS07:
            case self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS08:
            case self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS09:
            case self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS10:
            case self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS11:
            case self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS12:
            case self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS13:
            case self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS14:
            case self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS15:
            case self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS16:
            case self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS17:
            case self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS18:
            case self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS19:
                return 'btn btn-link btn-compact';
        }

        return parent::getControlClass($module);
    }

    public function getTitleClass(array $module)
    {
        switch ($module[1]) {
            case self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS00:
            case self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS01:
            case self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS02:
            case self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS03:
            case self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS04:
            case self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS05:
            case self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS06:
            case self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS07:
            case self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS08:
            case self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS09:
            case self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS10:
            case self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS11:
            case self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS12:
            case self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS13:
            case self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS14:
            case self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS15:
            case self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS16:
            case self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS17:
            case self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS18:
            case self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS19:
            case self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS00:
            case self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS01:
            case self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS02:
            case self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS03:
            case self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS04:
            case self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS05:
            case self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS06:
            case self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS07:
            case self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS08:
            case self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS09:
            case self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS10:
            case self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS11:
            case self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS12:
            case self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS13:
            case self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS14:
            case self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS15:
            case self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS16:
            case self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS17:
            case self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS18:
            case self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS19:
            case self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS00:
            case self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS01:
            case self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS02:
            case self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS03:
            case self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS04:
            case self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS05:
            case self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS06:
            case self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS07:
            case self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS08:
            case self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS09:
            case self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS10:
            case self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS11:
            case self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS12:
            case self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS13:
            case self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS14:
            case self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS15:
            case self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS16:
            case self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS17:
            case self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS18:
            case self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS19:
                return 'btn btn-link btn-compact';
        }

        return parent::getTitleClass($module);
    }
    public function getTitle(array $module, array &$props)
    {
        $routes = array(
            self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS00 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS00,
            self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS01 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS01,
            self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS02 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS02,
            self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS03 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS03,
            self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS04 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS04,
            self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS05 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS05,
            self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS06 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS06,
            self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS07 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS07,
            self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS08 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS08,
            self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS09 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS09,
            self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS10 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS10,
            self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS11 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS11,
            self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS12 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS12,
            self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS13 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS13,
            self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS14 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS14,
            self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS15 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS15,
            self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS16 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS16,
            self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS17 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS17,
            self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS18 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS18,
            self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS19 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS19,
            self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS00 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS00,
            self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS01 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS01,
            self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS02 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS02,
            self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS03 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS03,
            self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS04 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS04,
            self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS05 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS05,
            self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS06 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS06,
            self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS07 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS07,
            self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS08 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS08,
            self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS09 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS09,
            self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS10 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS10,
            self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS11 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS11,
            self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS12 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS12,
            self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS13 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS13,
            self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS14 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS14,
            self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS15 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS15,
            self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS16 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS16,
            self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS17 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS17,
            self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS18 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS18,
            self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS19 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS19,
            self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS00 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS00,
            self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS01 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS01,
            self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS02 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS02,
            self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS03 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS03,
            self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS04 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS04,
            self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS05 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS05,
            self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS06 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS06,
            self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS07 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS07,
            self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS08 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS08,
            self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS09 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS09,
            self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS10 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS10,
            self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS11 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS11,
            self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS12 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS12,
            self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS13 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS13,
            self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS14 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS14,
            self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS15 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS15,
            self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS16 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS16,
            self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS17 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS17,
            self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS18 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS18,
            self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS19 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS19,
        );
        if ($route = $routes[$module[1]] ?? null) {
            return RouteUtils::getRouteTitle($route);
        }

        return parent::getTitle($module, $props);
    }
    protected function getTitleLink(array $module, array &$props)
    {
        $vars = ApplicationState::getVars();
        $cmsusersapi = \PoPSchema\Users\FunctionAPIFactory::getInstance();
        $postTagTypeAPI = PostTagTypeAPIFacade::getInstance();
        $routes = array(
            self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS00 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS00,
            self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS01 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS01,
            self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS02 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS02,
            self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS03 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS03,
            self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS04 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS04,
            self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS05 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS05,
            self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS06 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS06,
            self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS07 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS07,
            self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS08 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS08,
            self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS09 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS09,
            self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS10 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS10,
            self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS11 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS11,
            self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS12 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS12,
            self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS13 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS13,
            self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS14 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS14,
            self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS15 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS15,
            self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS16 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS16,
            self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS17 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS17,
            self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS18 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS18,
            self::MODULE_CAROUSELCONTROLS_CATEGORYPOSTS19 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS19,
        );
        $authorroutes = array(
            self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS00 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS00,
            self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS01 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS01,
            self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS02 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS02,
            self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS03 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS03,
            self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS04 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS04,
            self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS05 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS05,
            self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS06 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS06,
            self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS07 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS07,
            self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS08 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS08,
            self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS09 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS09,
            self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS10 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS10,
            self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS11 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS11,
            self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS12 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS12,
            self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS13 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS13,
            self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS14 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS14,
            self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS15 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS15,
            self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS16 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS16,
            self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS17 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS17,
            self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS18 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS18,
            self::MODULE_CAROUSELCONTROLS_AUTHORCATEGORYPOSTS19 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS19,
        );
        $tagroutes = array(
            self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS00 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS00,
            self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS01 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS01,
            self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS02 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS02,
            self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS03 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS03,
            self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS04 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS04,
            self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS05 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS05,
            self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS06 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS06,
            self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS07 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS07,
            self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS08 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS08,
            self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS09 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS09,
            self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS10 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS10,
            self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS11 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS11,
            self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS12 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS12,
            self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS13 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS13,
            self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS14 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS14,
            self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS15 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS15,
            self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS16 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS16,
            self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS17 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS17,
            self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS18 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS18,
            self::MODULE_CAROUSELCONTROLS_TAGCATEGORYPOSTS19 => POP_CATEGORYPOSTS_ROUTE_CATEGORYPOSTS19,
        );
        if ($route = $routes[$module[1]] ?? null) {
            return RouteUtils::getRouteURL($route);
        } elseif ($route = $authorroutes[$module[1]] ?? null) {
            $author = $vars['routing-state']['queried-object-id'];
            $url = $cmsusersapi->getUserURL($author);
            return RequestUtils::addRoute($url, $route);
        } elseif ($route = $tagroutes[$module[1]] ?? null) {
            $url = $postTagTypeAPI->getTagURL($vars['routing-state']['queried-object-id']);
            return RequestUtils::addRoute($url, $route);
        }

        return parent::getTitleLink($module, $props);
    }
}


