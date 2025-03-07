<?php

declare(strict_types=1);

namespace Moox\Data\Filament\Resources\StaticCurrencyResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Moox\Core\Traits\Base\BaseInCreatePage;
use Moox\Core\Traits\Simple\SingleSimpleInCreatePage;

class CreateStaticCurrency extends CreateRecord
{
    use BaseInCreatePage, SingleSimpleInCreatePage;

    protected static string $resource = \Moox\Data\Filament\Resources\StaticCurrencyResource::class;
}
