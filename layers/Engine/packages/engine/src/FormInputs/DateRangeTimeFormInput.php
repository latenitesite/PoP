<?php

declare(strict_types=1);

namespace PoP\Engine\FormInputs;

use PoP\Translation\Facades\TranslationAPIFacade;

class DateRangeTimeFormInput extends MultipleInputFormInput
{
    public function __construct($params = array())
    {
        parent::__construct($params);

        // Re-implement to re-create the "readable" input from the other inputs
        if (!isset($params['selected']) && $this->selected) {
            $from = $this->selected['from'];
            $fromtime = $this->selected['fromtime'];
            $to = $this->selected['to'];
            $totime = $this->selected['totime'];

            // Transform it to the format needed by the DateRange plugin
            // Please notice that the date formats in daterange(time) are "d/m/Y" and "m/d/Y" or 1 of them will not work for some reason
            if ($from && $fromtime && $to && $totime) {
                $datefrom = $from . ' ' . $fromtime . ':00';
                $dateto = $to . ' ' . $totime . ':00';
                $this->selected['readable'] = sprintf(
                    TranslationAPIFacade::getInstance()->__('%1$s - %2$s', 'engine'),
                    date('d/m/Y g:i A', strtotime($datefrom)),
                    date('d/m/Y g:i A', strtotime($dateto))
                );
            }
        }
    }
}
