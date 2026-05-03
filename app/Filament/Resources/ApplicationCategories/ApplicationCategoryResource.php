<?php

namespace App\Filament\Resources\ApplicationCategories;

use App\Filament\Resources\ApplicationCategories\Pages\CreateApplicationCategory;
use App\Filament\Resources\ApplicationCategories\Pages\EditApplicationCategory;
use App\Filament\Resources\ApplicationCategories\Pages\ListApplicationCategories;
use App\Filament\Resources\ApplicationCategories\Schemas\ApplicationCategoryForm;
use App\Filament\Resources\ApplicationCategories\Tables\ApplicationCategoriesTable;
use App\Infrastructure\Persistence\Eloquent\Models\ApplicationCategory;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ApplicationCategoryResource extends Resource
{
    protected static ?string $model = ApplicationCategory::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ApplicationCategoryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ApplicationCategoriesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListApplicationCategories::route('/'),
            'create' => CreateApplicationCategory::route('/create'),
            'edit' => EditApplicationCategory::route('/{record}/edit'),
        ];
    }
}
