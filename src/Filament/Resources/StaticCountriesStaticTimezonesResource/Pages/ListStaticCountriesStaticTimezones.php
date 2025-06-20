<?php

declare(strict_types=1);

namespace Moox\Data\Filament\Resources\StaticCountriesStaticTimezonesResource\Pages;

use Moox\Data\Filament\Resources\StaticCountriesStaticTimezonesResource;
use Filament\Resources\Pages\ListRecords;
use Moox\Core\Traits\Base\BaseInListPage;
use Moox\Core\Traits\Simple\SingleSimpleInListPage;

class ListStaticCountriesStaticTimezones extends ListRecords
{
    use BaseInListPage, SingleSimpleInListPage;

    protected static string $resource = StaticCountriesStaticTimezonesResource::class;
}
