<?php

namespace App\Filament\Resources\SectionResource\Pages;

use App\Filament\Resources\SectionResource;
use App\Models\Section;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditSection extends EditRecord
{
    protected static string $resource = SectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->after( //agar gambar yang ada di storage public terhapus
                function (Section $record) {
                    if ($record->thumbnail) {
                        Storage::disk('public')->delete($record->thumbnail);
                    }
                    
                }
            )
        ];
    }
}
