<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockChartDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_chart_days', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->date('date');
            $table->decimal('open', 20,4);
            $table->decimal('close', 20,4);
            $table->bigInteger('unadjustedVolume');

            /*
            $this->date             = $dataPoint[ 'date' ] ?? NULL;
            $this->open             = $dataPoint[ 'open' ] ?? NULL;
            $this->close            = $dataPoint[ 'close' ] ?? NULL;
            $this->unadjustedVolume = $dataPoint[ 'unadjustedVolume' ] ?? NULL;
            $this->change           = $dataPoint[ 'change' ] ?? NULL;
            $this->changePercent    = $dataPoint[ 'changePercent' ] ?? NULL;
            $this->vwap             = $dataPoint[ 'vwap' ] ?? NULL;
            $this->high             = $dataPoint[ 'high' ] ?? NULL;
            $this->low              = $dataPoint[ 'low' ] ?? NULL;
            $this->volume           = $dataPoint[ 'volume' ] ?? NULL;
            $this->label            = $dataPoint[ 'label' ] ?? NULL;
            $this->changeOverTime   = $dataPoint[ 'changeOverTime' ] ?? NULL;
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock_chart_days');
    }
}
