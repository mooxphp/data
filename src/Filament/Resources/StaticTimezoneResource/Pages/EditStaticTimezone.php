<?php

declare(strict_types=1);

namespace Moox\Data\Filament\Resources\StaticTimezoneResource\Pages;

use Moox\Data\Filament\Resources\StaticTimezoneResource;
use Filament\Resources\Pages\EditRecord;
use Moox\Core\Traits\Base\BaseInEditPage;
use Moox\Core\Traits\Simple\SingleSimpleInEditPage;

class EditStaticTimezone extends EditRecord
{
    use BaseInEditPage, SingleSimpleInEditPage;

    protected static string $resource = StaticTimezoneResource::class;
}
