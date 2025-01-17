<?php

use App\Domain\Shop\Enums\SeriesType;
use App\Models\Series;
use Illuminate\Database\Migrations\Migration;

class UpdateDefaultSeriesType extends Migration
{
    public function up()
    {
        Series::query()->update([
            'type' => SeriesType::Video->value,
        ]);
    }
}
